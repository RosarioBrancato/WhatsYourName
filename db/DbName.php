<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

include_once('DBConnection.php');

class DbName {
	
	function Add($name) {
		
		$connection = getConnection();
		
		$stmt = $connection->prepare('INSERT INTO name (name, date) VALUES (?, NOW())');
		if($stmt !== FALSE) {
			$stmt->bind_param('s', $name);
			$success = $stmt->execute();
			$stmt->close();
		}
		
		$connection->close();
	}
	
}

?>