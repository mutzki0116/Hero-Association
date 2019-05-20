<?php 
	include_once 'adminHeader.php';
	if (isset($_SESSION['heroID'])) {
		$heroQuery = "SELECT task_threat_level,task_to,task_monster,task_city,task_description,task_status FROM hero_tasks;";
		$data = selectHeroes($heroQuery);
		
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
						<th>Hero ID Assigned</th>
						<th>Monster</th>
						<th>City</th>
						<th>Description</th>
						<th>Status</th>
					</tr>
					<tr>
						<?php foreach($data as $task): ?>
						<td><?php echo $task; ?></td>
						
						<?php endforeach ?>
					</tr>
				</table>
 	</div>
 </div>
 </body>
 </html>