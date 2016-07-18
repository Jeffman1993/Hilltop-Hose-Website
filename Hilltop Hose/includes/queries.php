<?php
	function query($query){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'hilltop';
	
		$link = new mysqli($host, $user, $pass, $db);
	
		if($link->error)
			die('Error: Can not connect to database. <br>' . $link->error);
	
			$res = $link->query($query);
	
			$link->close();
	
			return $res;
	}
?>