$site_name      = 'Team Altitude'
$site_url       = 'altitude.dev'
$site_user      = 'serverpilot'
$site_dir       = '/srv/users/serverpilot/apps/grav/public'

$usr_bin        = '/usr/bin'
$grav_bin       = "$site_dir/bin"
$grav_utils     = [ 'grav', 'gpm' ]
$home_dir       = '/home/vagrant/shared'
$grav_url       = 'https://getgrav.org/download/core/grav-admin/latest'

$time_zone      = 'US/Mountain'
$app_ver        = 'sp-php7.0'

$plugins        = [
                    'g5_helium',
                    'jscomments',
                    'shoppingcart',
                    'private',
                    'sitemap',
                    'login',
                    'google-maps',
                    'login-oauth',
                    'editable',
                    'import',
                    'ganalytics',
                    'shoppingcart-stripe',
                    'scheduler',
                    'backlinks',
                ]
# Add logic for plugin install + remove options

#######################################
### THIS IS WHERE THE MAGIC HAPPENS ###
#######################################

Exec { path => [ '/bin/', '/sbin/', '/usr/bin/', '/usr/sbin/', ''] }

# Make sure the ServerPilot installer is done and NGINX is running
exec {"wait for nginx":
  command => "wget --spider --retry-connrefused --waitretry=10 -t 30 --no-check-certificate http://localhost:80/index.php",
}

# Create the install path
file { [ $site_dir ]:
    ensure => directory,
}

# Download Grav + Admin
wget::fetch { 'GetGrav':
    source      => "$grav_url",
    destination => "$site_dir/",
    timeout     => 0,
    # unless      => "test $(ls -A $site_dir 2>/dev/null)",
    require     => [ Exec[ 'wait for nginx' ], File[ $site_dir ] ],
    notify      => Exec[ 'unzip' ],
}

exec { 'unzip':
    command     => "unzip $site_dir/*.zip -d $site_dir",
    cwd         => $site_dir,
    user        => $site_user,
    refreshonly => true,
}

# Ensure we can run gpm and grav, and symlink them into the path
define gravlinks {
    
    file { "CHMOD $name":
        path => "$grav_bin/$name",
        ensure => "present",
        mode => "a+x",
        require => Exec[ 'unzip' ],
    }

    file { "SymLink $name":
        ensure => link,
        path => "$usr_bin/$name",
        target => "$grav_bin/$name",
    }
}

gravlinks { $grav_utils: }

# Install required plugins
exec {"Install Plugins":
    command     => "gpm install join($plugins,' ') -y",
    cwd         => $site_dir,
    user        => $site_user,
    require     => Gravlinks[ $grav_utils ],
}