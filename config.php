<?php
require 'environment.php';

global $config;
$config = array();
define('BASE_URL','http://localhost/Phpchat/index.php');
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'chat';
        #$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '475236';
} else {
	$config['dbname'] = 'chat';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '475236';
}
?>