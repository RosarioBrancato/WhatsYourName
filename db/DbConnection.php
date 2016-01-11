<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

include_once('DbSecrets.php');

function getConnection() {
	
	$host = GetHost();
	$db_user = GetUsername();
	$db_pw = GetPassword();
	$database = GetDatabase();
	
	$mysqli = new mysqli($host, $db_user, $db_pw, $database);
	$mysqli->set_charset('utf8');
	
	return $mysqli;
}

?>