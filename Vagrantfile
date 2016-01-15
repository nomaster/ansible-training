Vagrant.configure(2) do |config|

  config.vm.define "web" do |web|
    web.vm.box = "ubuntu/trusty64"
    web.vm.network "private_network", ip: "192.168.0.2"
  end
  config.vm.define "db" do |db|
    db.vm.box = "ubuntu/trusty64"
    db.vm.network "private_network", ip: "192.168.0.3"
  end
  config.vm.define "cdn" do |cdn|
    cdn.vm.box = "ubuntu/trusty64"
    cdn.vm.network "forwarded_port", guest: 80, host: 8080
    cdn.vm.network "private_network", ip: "192.168.0.4"
  end 
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "site.yml"
    ansible.groups = {
      "blog" => ["db", "web", "cdn"]
    }
  end

end
