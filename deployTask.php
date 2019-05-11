<?php  
	include_once 'adminHeader.php';
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
				<option>Hero 1</option>
				<option>Hero 2</option>
				<option>Hero 3</option>
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