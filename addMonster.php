<?php  
	include_once 'adminHeader.php';
		if (isset($_POST['addMonster'])) {
			
			$mname = $_POST['monster_name'];				
			$mdesc = $_POST['monster_desc'];
			$mimg = $_POST['monster_img'];
			$mthreat = $_POST['monster_threat'];
			$mstatus = $_POST['monster_status'];
			$monsterQuery = "INSERT INTO monsterlist(monster_name, monster_description, monster_image,monster_threat_lvl, monster_status) VALUES(:mname, :mdesc, :mimg, :mthreat, :mstatus);";
			$pdo = getConnection();
			$monsterQuery = $pdo->prepare($monsterQuery);
	    	$monsterQuery->bindParam(':mname', $mname);
	    	$monsterQuery->bindParam(':mdesc', $mdesc);
	    	$monsterQuery->bindParam(':mimg', $mimg);
	    	$monsterQuery->bindParam(':mthreat', $mthreat);
	    	$monsterQuery->bindParam(':mstatus', $mstatus);
			$monsterQuery->execute();
			
			header("Location: ../HA/addMonster.php?newMonsterAdded");
			session_start();
		}
	
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Add a Monster</h2>
	<div class="row">

		<div class="col-xl-4">
			<label>Threat Level </label>
			<select class="form-control" name="monster_threat" required>
				<option>God</option>
				<option>Dragon</option>
				<option>Demon</option>
				<option>Tiger</option>
			</select>
		</div>
			<div class="col-xl-4">
			<label>Monster Status</label>
			<select class="form-control" name="monster_status" required>
				<option>Alive</option>
				<option>Dead</option>
			</select>
		</div>

		<div class="col-xl-8">
		<label>Monster Image </label>
		<input type="file" name="monster_img" class="form-control" required>
		</div>
		</div>
			<label>Monster Name</label>
			<div class="form-group">
			<input type="text" name="monster_name" class="form-control" placeholder="Monster Name">
		</div>
			<label>Monster Description </label>
			<textarea class="form-control" rows="5" placeholder="Description" name="monster_desc" required></textarea>
			<input type="submit" name="addMonster" class="btn btn-outline-primary addMonsterBtn" value="Submit">

	</div>
</form>
</div>
</body>
</html>