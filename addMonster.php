<?php  
	include_once 'adminHeader.php';
		if (isset($_POST['addMonster'])) {
			
			$mname = $_POST['monster_name'];				
			$mdesc = $_POST['monster_desc'];
			$mimg = $_FILES['monster_img']['name'];
			$mthreat = $_POST['monster_threat'];
			$mstatus = $_POST['monster_status'];
			$uploaddir = 'C:\xamppu\htdocs\HA\_images\monsters';
			$TargetPath=time().$mimg;
			$uploaddir = 'C:\xamppu\htdocs\HA\_images\monsters';			
			if (move_uploaded_file($_FILES['files']['tmp_name'], $uploaddir.$TargetPath)){
				$monsterQuery = "INSERT INTO monsterList(monster_name, monster_description, monster_image,monster_threat_lvl, monster_status) VALUES(:mname, :mdesc, :tpath, :mthreat, :mstatus);";
			
			$data = addMonsters($monsterQuery, [
			['monster' => ':mname', 'value' => $mname],
			['monster' => ':mdesc', 'value' => $mdesc],
			['monster' => ':tpath', 'value' => $TargetPath],
			['monster' => ':mthreat', 'value' => $mthreat],
			['monster' => ':mstatus', 'value' => $mstatus],
		]);
			}
		}
	
?>
<div class="container">
	<form method="post" action="#" class="createTask" enctype="multipart/form-data">
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