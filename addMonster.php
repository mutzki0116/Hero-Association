<?php  
	include_once 'adminHeader.php';
	include_once './_includes/config.php';

	if (isset($_POST['addMonster'])) {
		$mname = $_POST['name'];
		$mdesc = $_POST['desc'];
		$mthreat = $_POST['threat'];
		$mimg = $_POST['img'];
		$mstatus = $_POST['stats'];
		$monsterQuery = "INSERT INTO monsterList(monster_name, monster_description, monster_image, monster_threat_level, moster_status) VALUES(:mname,:mdesc,:mimg,:mthreat,:mstatus);";
		$pdo = getConnection();
		$monsterResult = $pdo->prepare($monsterQuery);
		$monsterResult->bindParam(':mname',$mname);
		$monsterResult->bindParam(':mdesc',$mdesc);
		$monsterResult->bindParam(':mimg',$mimg);
		$monsterResult->bindParam(':mthreat',$mthreat);
		$monsterResult->bindParam(':mstatus',$mstatus);
		$monsterResult->execute();
		header("Location: ../monster.php");
	}
	else{
		echo "Bat wala!!!";
	}
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Add a Monster</h2>
	<div class="row">

		<div class="col-xl-4">
			<label>Threat Level </label>
			<select class="form-control" name="threat" required>
				<option>God</option>
				<option>Dragon</option>
				<option>Demon</option>
				<option>Tiger</option>
			</select>
		</div>
			<div class="col-xl-4">
			<label>Monster Status</label>
			<select class="form-control" name="stats" required>
				<option>Alive</option>
				<option>Dead</option>
			</select>
		</div>

		<div class="col-xl-8">
		<label>Monster Image </label>
		<input type="file" name="img" class="form-control" required>
		</div>
		</div>
			<label>Monster Name</label>
			<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Monster Name">
		</div>
			<label>Monster Description </label>
			<textarea class="form-control" rows="5" placeholder="Description" name="desc" required></textarea>
			<input type="submit" name="addMonster" class="btn btn-outline-primary addMonsterBtn" value="Submit">
	</div>
</form>
</div>
</body>
</html>