<?php  
	include_once 'adminHeader.php';
	try {
		if (isset($_SESSION['heroID'])) {
		$heroQuery = "SELECT * FROM heroProfiles;";
		$data2 = selectHeroes($heroQuery);	
		$monsterQuery = "SELECT task_name FROM hero_tasks;";
		$data3 = selectMonsters($monsterQuery);	
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$one = $_POST['optionone'];
				$two = $_POST['optiontwo'];
				$deployQuery = "INSERT INTO deployTask(hero_user_id,task_id) VALUES(:heroid,:taskid);";
				$data4 = deployTask($deployQuery,[
					['deploy' => ':heroid', 'value' => $one],
					['deploy' => ':taskid', 'value' => $two],
				]);
				var_dump($data4);
			}
		}
				else{
				echo "No user logged!";
			}
	}
	
	 catch (Exception $e) {
		var_dump($e);
	}
	
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Deploy Task</h2>
	<div class="row">


			<!-- Galing sa database -->
			<!-- sample -->
	
		<div class="col-xl-4">
			<label>Hero </label>
			<select class="form-control" name="optionone">
				<?php foreach ($data2 as $hero): ?>
				<option value="<?php echo $hero['hero_user_id']; ?>"><?php echo $hero['hero_username']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		

		<div class="col-xl-8">
			<label>Task</label>
			<select class="form-control" name="optiontwo">
				<?php foreach ($data3 as $task): ?>
				<option value="<?php echo $hero['task_id']; ?>"><?php echo $task['task_name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

</div>
			<input type="submit" name="createTask" class="btn btn-outline-secondary createTaskBtn" value="Submit">

	</div>
</form>
</div>
</body>
</html>