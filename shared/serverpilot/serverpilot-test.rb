require 'ServerPilot'
require 'open-uri'



CLIENT_ID = 'cid_IIQ3qWQlBRAN3B3X'
API_KEY = '1ro7a9s1Tr0Yw6MM63Ys8G0iTTjuV2sHsMEun5UEaTM'
SHARE_PATH = '/home/vagrant/shared/serverpilot'


sp = ServerPilot::API.new(CLIENT_ID, API_KEY)

SRVR_ID = 'Sncp44vxGEc1KeYL'

begin
    action = sp.delete_servers({id: SRVR_ID})
rescue Exception => e
    puts e
    abort("ERROR: Please Check the Logs")
else
    puts "Success! The server was removed from ServerPilot!  No Worries... Nginx and Apache are still running."
end

exit 0