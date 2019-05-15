<?php  
	include_once 'adminHeader.php';

	if (isset($_SESSION['heroID'])) {
		$heroQuery = "SELECT * FROM heroProfiles;";
		$data2 = selectHeroes($heroQuery);	
		$monsterQuery = "SELECT task_name FROM hero_tasks;";
		$data3 = selectMonsters($monsterQuery);	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$one = $_POST['optionone'];
			$two = $_POST['optiontwo'];
			$heroQuery = "SELECT hero_user_id FROM heroProfiles WHERE hero_username = :username";
			$monsterQuery = "SELECT task_id FROM hero_tasks WHERE task_name = :taskname";
			$userData = selectHeroes($heroQuery, [
			['hero' => ':username', 'value' => $user],
			]);
			$taskData = selectTasks($monsterQuery,[
				['task' => ':taskname', 'value' => $two],
			]);
			$deployQuery3 = "INSERT INTO deployTask(hero_user_id,task_id) VALUES(:heroid,:taskid);";
			$data4 = deployTask($deployQuery3,[
				['deploy' => ':heroid', 'value' => $userData],
				['deploy' => ':taskid', 'value' => $taskData],
			]);
		}
		else{
				var_dump($data4);
		}
	}
	else{
		echo "No user logged!";
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
				<option><?php echo $hero['hero_username']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		

		<div class="col-xl-8">
			<label>Task</label>
			<select class="form-control" name="optiontwo">
				<?php foreach ($data3 as $task): ?>
				<option><?php echo $task['task_name']; ?></option>
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