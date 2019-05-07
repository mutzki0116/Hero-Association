<?php 
	function getConnection(){
		$pdoConn = new PDO("mysql:host=db4free.net;dbname=makata16","escanor0116","database");
		$pdoConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdoConn;
	}
	function selectHeroes(){
		
	}

?>