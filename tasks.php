<?php 
	include_once 'homepageHeader.php';
	if (isset($_SESSION['heroID'])) {
		$id = $_SESSION['heroID'];

		$heroQuery = "SELECT * FROM hero_tasks WHERE task_to = '".$id."' ;";
		$data = selectHeroes($heroQuery);
		var_dump($data);
	}
	else{
		header("Location: tasks.php?Nouserlogged");
	}
	

?>
<div class="container">
	<div class="taskContainer table-responsive">
				<table class="table table-dark table-bordered table-striped">
					<tr>
						<th>Threat Level</th>
						<th>Monster</th>
						<th>City</th>
						<th>Description</th>
						<th>Status</th>
					</tr>
					<tr>
						<?php foreach($data as $task): ?>
						<td><?php echo $task['task_threat_level']; ?></td>
						<td><?php echo $task['task_monster']; ?></td>
						<td><?php echo $task['task_city']; ?></td>
						<td><?php echo $task['task_description']; ?></td>
						<td><?php echo $task['task_status']; ?></td>
						<?php endforeach ?>
					</tr>
				</table>
	</div>
</div>
</body>
</html>