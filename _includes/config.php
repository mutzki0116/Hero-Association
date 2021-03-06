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
	function selectMonsters($monsterQuery){
		$pdo = getConnection();
		$stmt = $pdo->prepare($monsterQuery);
		// $stmt->bindParam($monsterQuery, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	function addMonsters($monsterQuery, $params = []){
		$pdo = getConnection();
		$stmt = $pdo->prepare($monsterQuery);
			if(isset($params)) {
				foreach ($params as $param) {
					$parameter = (object) $param;
					$stmt->bindParam($parameter->monster, $parameter->value, PDO::PARAM_STR);	
				} 	
				$stmt->execute();
			}
	}
	function selectTasks($taskQuery, $params = []){
		$pdo = getConnection();
		$stmt = $pdo->prepare($taskQuery);
		if (isset($params)) {
			foreach ($params as $param) {
					$parameter = (object) $param;
					$stmt->bindParam($parameter->task, $parameter->value, PDO::PARAM_STR);	
				} 	
				$stmt->execute();
		}
	}
	function deployTask($deployQuery, $params = []){
		$pdo = getConnection();
		$stmt = $pdo->prepare($deployQuery);
		if (isset($params)) {
			foreach ($params as $param) {
					$parameter = (object) $param;
					$stmt->bindParam($parameter->deploy, $parameter->value, PDO::PARAM_INT);	
				} 	
				$stmt->execute();
		}
	}
?>