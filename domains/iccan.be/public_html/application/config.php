<?php
date_default_timezone_set('Europe/Brussels');

require_once('.db_password.php');

$db_config = array(
    'driver' => 'mysql',
    'username' => $username,
    'password' => $password,
    'dsn' => array(
      'host' => 'localhost',
        'dbname' => 'lucjajl83_iccan',
        'port' => '3306',
    )
);