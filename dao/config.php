<?php

$config = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'examination'
);

$db = new mysqli(
			$config['host'],
			$config['username'],
			$config['password'],
			$config['database']
		);

if (mysqli_connect_errno()) {
	echo 'An error occured. Please try again later.';
	exit;
}
