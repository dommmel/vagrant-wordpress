class wordpress::preparedb{
  # Create the Wordpress database
  exec{"create-database":
    unless=>"/usr/bin/mysql -u root -pvagrant wordpress",
    command=>"/usr/bin/mysql -u root -pvagrant --execute=\"create database wordpress\"",
  }
  
  # Create a MySQL user for wordpress.
  exec{"create-user":
    unless=>"/usr/bin/mysql -u wordpress -pwordpress",
    command=>"/usr/bin/mysql -u root -pvagrant --execute=\"GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost' IDENTIFIED BY 'wordpress' \"",
  }
}

class wordpress::install{
  exec{"download-zip":
    cwd => "/tmp",
    command=>"wget http://wordpress.org/latest.zip",
    creates=> "/tmp/latest.zip",
    path => ["/usr/bin", "/usr/sbin"]
  } ->
  exec{"unzip":
    cwd => "/tmp",
    command=>"unzip latest.zip -d /vagrant/www/",
    creates=> "/vagrant/www/wordpress",
    path => ["/usr/bin", "/usr/sbin"]
  } ->
  file{
    "/vagrant/www/wordpress/wp-config.php":
    source=>"puppet:///modules/wordpress/wp-config.php",
  } ->
  file{
    "/vagrant/www/wordpress/.htaccess":
    source=>"puppet:///modules/wordpress/.htaccess",
    mode => 666
  }
}