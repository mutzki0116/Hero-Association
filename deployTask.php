<?php  
	include_once 'adminHeader.php';

	if (isset($_SESSION['heroID'])) {
		$monsterQuery = "SELECT * FROM heroprofiles;";
		$data2 = selectMonsters($monsterQuery);		
	}
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Deploy Task</h2>
	<div class="row">


			<!-- Galing sa database -->
			<!-- sample -->
	<?php foreach ($data2 as $hero): ?>
		<div class="col-xl-4">
			<label>Hero </label>
			<select class="form-control">
				<option><?php echo $hero['hero_username']; ?></option>
			
			</select>
		</div>
	<?php endforeach; ?>	

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