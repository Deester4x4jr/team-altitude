# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "bento/ubuntu-16.04"
  config.vm.network "private_network", ip: "192.168.11.15"

  # Here we set a custom hostname (requires vagrant-hostsupdater)
  config.vm.hostname = 'altitude.dev'

  # Optionally, set a custom port for using the same hostname for multiple dev configs
  # config.vm.network 'forwarded_port', guest: 80, host: 5000, auto_correct: true

  # VM Config options
  config.vm.provider 'virtualbox' do |v|
    v.name = 'Altitude Dev Box'
    v.customize ['modifyvm', :id, '--memory', '512', '--cpus', '1']
    v.customize ['modifyvm', :id, '--cableconnected1', 'on']
  end

  # Set BindFS defaults for serverpilot
  config.bindfs.default_options = {
    force_user:   'serverpilot',
    force_group:  'serverpilot',
    perms:        'u=rwX:g=rX:o=rX'
  }

  # Config Synced Folders
  config.vm.synced_folder "./shared", "/home/vagrant/shared/", create: true, id: "shared-files"
  config.vm.synced_folder "./app", "/tmp-app-dir", create: true, id: "app-files"
  config.bindfs.bind_folder "/tmp-app-dir", "/srv/users/serverpilot/apps/grav/public/", after: :provision, o: 'nonempty'

  # NOT SURE ABOUT THIS
  # config.vm.provision "file", source: "./shared/vagrant-notify/notify-send.erb", destination: "/tmp/vagrant-notify/notify-send.erb"

  # BootStrapping with Ansible
  config.vm.provision 'bootstrap', type: :ansible_local do |ansible|
    ansible.playbook = 'ansible/bootstrap.yml'
    ansible.sudo = true
  end

  # Reload once to confirm that the serverpilot provisioner is complete
  config.vm.provision :reload

  # Gravifying with Ansible
  config.vm.provision 'gravify', type: :ansible_local do |ansible|
    ansible.playbook = 'ansible/gravify.yml'
    ansible.sudo = true
  end
end
