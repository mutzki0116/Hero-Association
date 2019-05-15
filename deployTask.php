<?php  
	include_once 'adminHeader.php';

	if (isset($_SESSION['heroID'])) {
		$monsterQuery = "SELECT * FROM heroProfiles;";
		$data2 = selectMonsters($monsterQuery);
		$monsterQuery2 = "SELECT task_name FROM hero_tasks;";
		$data3 = selectTasks($monsterQuery2);
					
	}
	else{
		echo "No user logged!";
	}
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Deploy Tasks</h2>
	<div class="row">
g

			<!-- Galing sa database -->
			<!-- sample -->
	
		<div class="col-xl-4">
			<label>Hero </label>
			<select class="form-control">
				<?php foreach ($data2 as $hero): ?>
				<option><?php echo $hero['hero_username']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		

		<div class="col-xl-8">
			<label>Task</label>
			<select class="form-control">
				<?php foreach ($data3 as $taskname): ?>
				<option><?php echo $taskname['task_name']; ?></option>
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