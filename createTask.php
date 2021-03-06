<?php  
	include_once 'adminHeader.php';
	
	if(isset($_SESSION['heroID'])) {
			$monsterQuery = "SELECT * FROM monsterList;";
			$data2 = selectMonsters($monsterQuery);
			$heroQuery = "SELECT * FROM heroProfiles WHERE hero_role = 'hero';";
			$data3 = selectHeroes($heroQuery);
	}
	if(isset($_POST['submitbutton'])){

			$tasklevel = $_POST['tasklevel'];				
			$taskcity = $_POST['city'];
			$taskmonster = $_POST['monster_name'];
			$taskdesc = $_POST['task_desc'];
			// $_POST['stats'] = 'Ongoing';
			$taskname = $_POST['taskname'];
			$taskto = $_POST['assignto'];
			$taskstatus = $_POST['stats'];

		$taskQuery = "INSERT INTO hero_tasks(task_threat_level,task_city, task_monster,task_name, task_to, task_description, task_status) VALUES(:tasklvl, :taskcity, :taskmonster, :taskname, :taskto, :taskdesc, :taskstatus);";
		
		$data = selectTasks($taskQuery,[
			['task' => ':tasklvl', 'value' => $tasklevel],
			['task' => ':taskcity', 'value' => $taskcity],
			['task' => ':taskmonster', 'value' => $taskmonster],
			['task' => ':taskname', 'value' => $taskname],
			['task' => ':taskto', 'value' => $taskto],
			['task' => ':taskdesc', 'value' => $taskdesc],
			['task' => ':taskstatus', 'value' => $taskstatus],
	]);
	}

?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
		<h2>Create Task</h2>
			<div class="row">
				<div class="col-xl-4">
					<label>Threat Level </label>
						<select class="form-control" name="tasklevel">
							<option>God</option>
							<option>Dragon</option>
							<option>Demon</option>
							<option>Tiger</option>
						</select>
						<label>Task Name:</label>
						<input type="text" class="form-control " name="taskname" placeholder="Task Name" required>
					
				</div>
				<div class="col-xl-4">
					<label>City </label>
					<select class="form-control" name="city">
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
						<option>F</option>
						<option>G</option>
						<option>H</option>
						<option>I</option>
						<option>J</option>
						<option>K</option>
						<option>L</option>
						<option>M</option>
						<option>N</option>
						<option>O</option>
						<option>P</option>
						<option>Q</option>
						<option>R</option>
						<option>S</option>
						<option>T</option>
						<option>U</option>
						<option>V</option>
						<option>W</option>
						<option>X</option>
						<option>Y</option>
						<option>Z</option>
					</select>
					<label>Assign To:</label>
					<select class="form-control" name="assignto">	
							<?php foreach ($data3 as $hero): ?>
							<option ><?php echo $hero['hero_user_id'];?></option>
							<?php endforeach ?>
					</select>
				</div>
			<!-- Galing sa database -->
			<!-- sample -->
					<div class="col-xl-4">
						<input type="text" name="stats" value="Ongoingg" style="display: none">
						<label>Monster</label>
						<select class="form-control" name="monster_name">
							<?php foreach ($data2 as $monstername): ?>
							<option><?php echo $monstername['monster_name']; ?></option>
							<?php endforeach ?>
						</select>
						</div>
				</div>
				<label>Task Description </label>
				<textarea class="form-control" rows="5" placeholder="Description" name="task_desc"></textarea>
				<input type="submit" name="submitbutton" class="btn btn-outline-secondary createTaskBtn" value="Submit">	
				</div>
			</form>
		</div>
	</body>
</html>