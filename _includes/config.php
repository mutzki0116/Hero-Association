<?php 
	function getConnection(){
		$pdoConn = new PDO("mysql:host=db4free.net;dbname=makata16","escanor0116","database");
		$pdoConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdoConn;
	}
	function selectHeroes($heroQuery, $params = []){
		$pdo = getConnection();
		$stmt = $pdo->prepare($heroQuery);

		if(isset($params)) {
			
			foreach ($params as $param) {
				$parameter = (object) $param;
				$stmt->bindParam($parameter->name, $parameter->value, PDO::PARAM_STR);	
			} 	

			$stmt->execute();
		}
		return $stmt->fetchAll();
	}

?>