<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	function getConnection() {
		$db_user = 'guest';
		$db_pw = 'guest';
		
		$mysqli = new mysqli('localhost', $db_user, $db_pw, 'event_calendar');
		$mysqli->set_charset('utf8');
		
		return $mysqli;
	}
	
?>