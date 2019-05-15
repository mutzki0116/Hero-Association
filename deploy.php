<?php  
	include_once 'adminHeader.php';

	if (isset($_SESSION['heroID'])) {
		$monsterQuery = "SELECT * FROM heroProfiles;";
		$data2 = selectMonsters($monsterQuery);	
		$monsterQuery3 = "SELECT task_name FROM hero_tasks;";
		$data3 = selectMonsters($monsterQuery3);	
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
			<select class="form-control">
				<?php foreach ($data3 as $task): ?>
				<option><?php echo $task['task_name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		

		<div class="col-xl-8">
			<label>Task</label>
			<select class="form-control">
				<option>Kill</option>
				<option>Capture</option>
			</select>
		</div>

</div>
			<input type="submit" name="createTask" class="btn btn-outline-secondary createTaskBtn" value="Submit">

	</div>
</form>
</div>
</body>
</html>