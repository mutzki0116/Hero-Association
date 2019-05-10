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
				$stmt->bindParam($parameter->hero, $parameter->value, PDO::PARAM_STR);	
			} 	
			$stmt->execute();
		}
		return $stmt->fetchAll();
	}
	function selectRanking($heroQuery){
		$pdo = getConnection();
		$stmt = $pdo->prepare($heroQuery);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	function selectMonsters($monsterQuery, $params = []){
		$pdo = getConnection();
		$stmt = $pdo->prepare($monsterQuery);
		$stmt->bindParam($monsterQuery);
		$stmt->execute();
		return $stmt->fetchAll();

	}
?>