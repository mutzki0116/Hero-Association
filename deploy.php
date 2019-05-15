<?php  
	include_once 'adminHeader.php';

	if (isset($_SESSION['heroID'])) {
		$monsterQuery = "SELECT * FROM heroProfiles;";
		$data2 = selectMonsters($monsterQuery);	
		$monsterQuery3 = "SELECT task_name FROM hero_tasks;";
		$data3 = selectMonsters($monsterQuery3);	
		if (isset($_SESSION['createTask'])) {
			$one = $_POST['optionone'];
			$two = $_POST['optiontwo'];
			$deployQuery = "SELECT hero_user_id FROM heroProfiles WHERE hero_username = :username";
			$deployQuery2 = "SELECT task_id FROM hero_tasks WHERE task_name = :taskname";
			$userData = selectHeroes($deployQuery);
			selectHeroes($heroQuery, [
			['hero' => ':username', 'value' => $user],
			]);
			$taskData = selectTasks($deployQuery2,[
				['task' => ':taskname', 'value' => $two],
			]);
			$deployQuery3 = "INSERT INTO deployTask(hero_user_id,task_id) VALUES(:heroid,:taskid);";
			$data4 = deployTask($deployQuery3,[
				['deploy' => ':heroid', 'value' => $userData],
				['deploy' => ':taskid', 'value' => $taskData],
			]);
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