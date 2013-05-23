class apache2::install{
  package { "apache2": ensure => present,}
  service { "apache2":
    ensure => running,
    require => Package["apache2"],
  }
  exec {"enable_mod_rewrite":
    command=>"/usr/sbin/a2enmod rewrite",
    notify => Service['apache2'],
    require => Package['apache2']
  }
  file { '/var/www':
    ensure => link,
    target => "/vagrant/www",
    notify => Service['apache2'],
    force  => true,
    require => Package['apache2']
  }
}

class mysql::install {
  $password = "vagrant"
  package { "mysql-client": ensure => installed }
  package { "mysql-server": ensure => installed }

  exec { "Set MySQL server root password":
    subscribe => [ Package["mysql-server"], Package["mysql-client"] ],
    refreshonly => true,
    unless => "mysqladmin -uroot -p$password status",
    path => "/bin:/usr/bin",
    command => "mysqladmin -uroot password $password",
  }
}

class php5::install{
  package{"php5": ensure=>present,}
  package{"php5-mysql": ensure=>present,}
  package{"libapache2-mod-php5": ensure=>present,}
}

class packages::install{
  package{"git": ensure=>present,}
  package{"zip": ensure=>present,}
}

exec { "apt_update":
  command => "apt-get update",
  path    => "/usr/bin"
}

class{'packages::install':}
class{'apache2::install':}
class{'php5::install':}  
class{'mysql::install':}
class{'wordpress::preparedb':}
class{'wordpress::install':}

