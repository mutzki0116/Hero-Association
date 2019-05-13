<?php  
	include_once 'adminHeader.php';
	include_once './_includes/config.php';
	try {
		if (isset($_POST['addMonster'])) {
			$mname = $_POST['name'];
			$mdesc = $_POST['desc'];
			$mthreat = $_POST['threat'];
			$mimg = $_POST['img'];
			$mstatus = $_POST['stats'];
			$monsterQuery = "INSERT INTO monsterList(monster_name, monster_description, monster_image, monster_threat_lvl, moster_status,date_added) VALUES(:mname,:mdesc,:mimg,:mthreat,:mstatus,UNIX_TIMESTAMP());";
			$data = addMonsters($monsterQuery, [
			['monster' => ':mname', 'value' => $mname],
			['monster' => ':mdesc', 'value' => $mdesc],
			['monster' => ':mimg', 'value' => $mimg],
			['monster' => ':mthreat', 'value' => $mthreat],
			['monster' => ':mstatus', 'value' => $mstatus],
			['monster' => ':mstatus', 'value' => $mstatus],
			]);
			header("Location: monster.php");
		}
	} catch (Exception $e) {
		var_dump($e);	
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
		<input type="text" name="datee" value="<?php UNIX_TIMESTAMP(); ?>">
			<label>Monster Description </label>
			<textarea class="form-control" rows="5" placeholder="Description" name="desc" required></textarea>
			<input type="submit" name="addMonster" class="btn btn-outline-primary addMonsterBtn" value="Submit">
	</div>
</form>
</div>
</body>
</html>