require 'ServerPilot'
require 'logger'
require 'colorize'
require 'open-uri'
require 'socket'
require 'timeout'

HOST = '127.0.0.1'
PORT = 80
TIMEOUT = 600
REST = 15

def port_open?(ip, port, timeout, rest)
    start_time = Time.now
    current_time = start_time
    while (current_time - start_time) <= timeout
        begin
            TCPSocket.new(ip, port)
            return true
        rescue Errno::ECONNREFUSED
            sleep rest
        end
        current_time = Time.now
    end
    return false
end

# Create new Logger
log = Logger.new('/home/vagrant/log.out')
log.progname = 'ServerPilot'
log.level = Logger::DEBUG

# Format the log output:
log.formatter = proc do |severity, datetime, progname, msg|

    # severity = "[" + severity + "]"

    datetime = datetime.strftime("[%b.%d-%H:%M:%S]")

    # progname = " - " + progname + " ↴\n"
    progname = "[" + progname + "]"

    msg = msg.to_s.chomp.split("\n")

    if msg.size > 1
       msg = " ↴\n    - " + msg.join("\n    - ")
    else
        msg = ": " + msg[0]
    end
    
    case severity
        when "DEBUG"
            ("[#{severity}]" + " " + progname).bold + " " + datetime + msg + "\n"
        when "INFO"
            ("[#{severity}]".green + " " + progname).bold + " " + datetime + msg + "\n"
        when "WARN"
            ("[#{severity}]".yellow + " " + progname).bold + " " + datetime + msg + "\n"
        when "ERROR"
            (("[#{severity}]" + " " + progname).bold + " " + datetime + msg).red + "\n"
        when "FATAL"
            (("[#{severity}]" + " " + progname + " " + datetime).on_light_red + msg.red).bold + "\n"
        else
            ("[UNKNOWN]".blue + " " + progname).bold + " " + datetime + msg + "\n"
    end

end

# Logger Tet Messages
# log.debug "This is a test Debug Message\nIt is two lines long"
# log.info "This is a test Info Message\nIt is going to be\nThree lines long"
# log.warn "This is a test Warning Message"
# log.error "This is a test Error Message"
# log.fatal "This is a test Fatal Message"
# log.unknown "This is a test Unknown Message"

CLIENT_ID = 'cid_IIQ3qWQlBRAN3B3X'
API_KEY = '1ro7a9s1Tr0Yw6MM63Ys8G0iTTjuV2sHsMEun5UEaTM'
SHARE_PATH = '/home/vagrant/shared/serverpilot'

sp = ServerPilot::API.new(CLIENT_ID, API_KEY)
# sp.scheme = 'https'



##############################################################################
# Use the resources here to implement action monitoring if possible:
# https://github.com/ServerPilot/API#actions
##############################################################################



##############################################################################
# MUST CREATE ERROR HANDLER FOR SERVERPILOT API ERRORS!!
# HTTP Status Code Summary
# 200 OK - Everything worked as expected.
# 400 Bad Request - We couldn't understand your request. Typically missing a parameter or header.
# 401 Unauthorized - Either no authentication credentials were provided or they are invalid.
# 402 Payment Required - Method is restricted to users on the Coach or Business plan.
# 403 Forbidden - Typically when trying to alter or delete protected resources.
# 404 Not Found - You requested a resource that does not exist.
# 409 Conflict - Typically when trying creating a resource that already exists.
# 500 Server Error - Something unexpected happened on ServerPilot's end.
# Errors
# When you a receive a response with a status code in the 4xx or 5xx range, you'll receive a JSON object in the body with details.
    # The object will have a error and message key, like so:
        # {
        #     "error": {
        #         "message": "Password must be at least 8 characters."
        #     }
        # }
# MUST CREATE ERROR HANDLER FOR SERVERPILOT API ERRORS!!
##############################################################################



# Step 1: Add the server
log.info "Beginning Server Connection Process..."

begin
    # Switch lines below to force an error for testing
    # action = sp.post_servers 'some-server'
    action = sp.post_servers({name: 'altitude-dev'})
rescue Exception => e
    log.error e
    abort("ERROR: Please Check the Logs")
else
    action = action.to_h[:body]['data']

    SRVR_ID = action['id'].to_s.chomp
    SRVR_KEY = action['apikey'].to_s.chomp
    
    log.info "Success! The server was added to ServerPilot:\n" + ("   server_id => " + SRVR_ID + "\n   server_api_key => " + SRVR_KEY).bold
end

# Step 2: Execute the provisioner
log.info "Executing the provisioner script..."
begin
    action = `sudo python #{SHARE_PATH}/serverpilot-installer.py --server-id=#{SRVR_ID} --server-apikey=#{SRVR_KEY}`
rescue Exception => e
    log.error e
    abort("ERROR: Please Check the Logs")
else
    log.info action
    log.info "The provisioning script has completed seccessfully."
end

# Step 3: Check for the new system user
log.info "Checking for the new system user..."

begin
    found_user = false
    count = 0

    until found_user != false || count == 6
        begin
            action = sp.get_sysusers
        rescue Exception => e
            log.error e
            abort("ERROR: Please Check the Logs")
        else
            action.to_h[:body]['data'].each { |srv|
                if srv['serverid'] == SRVR_ID
                    found_user = srv['id']
                end
            }
        end
        count+=1
        sleep(10)
    end

    if count == 6 && !found_user
        log.error "Uh-Oh... We couldn't find the server's sysuser"
        abort("ERROR: Please Check the Logs")
    else
        USR_ID = found_user
        log.info "Success!  This system has been provisioned with ServerPilot!\n" + ("   sysuser_id => " + USR_ID).bold
    end
end

# Step 4: Create an app so that we can install wordpress
log.info "Creating a blank App Profile..."
begin
    # Need to make these variables in the future maybe?
    action = sp.post_apps({name: 'grav', sysuserid: USR_ID, runtime: 'php7.0', domains: ['altitude.dev']})
rescue Exception => e
    log.error e
    abort("ERROR: Please Check the Logs")
else
    action = action.to_h[:body]['data']
    APP_ID = action['id']
    log.info "Success! The APP has been created!\n" + ("   app_id => " + APP_ID).bold
end

# Step 5: Disconnect the server so that we don't run up a huge bill
if port_open?(HOST, PORT, TIMEOUT, REST)
    log.info "Nginx is running. Port #{PORT} is open on host #{HOST}"
    puts 'continue...'
    # log.info "Disconnecting Server " + SRVR_ID + "..."
    begin
    #     action = sp.delete_servers({id: SRVR_ID})
    # rescue Exception => e
    #     log.error e
    #     abort("ERROR: Please Check the Logs")
    # else
    #     log.info "Success! The server was removed from ServerPilot!  No Worries... Nginx and Apache are still running."
    end
else
    log.error "Nginx never started.  Check if something else went wrong."
    abort("ERROR: Please Check the Logs")
end

exit 0