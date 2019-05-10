<?php  
	include_once 'adminHeader.php';
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Create Task</h2>
	<div class="row">

		<div class="col-xl-4">
			<label>Threat Level </label>
			<select class="form-control">
				<option>God</option>
				<option>Dragon</option>
				<option>Demon</option>
				<option>Tiger</option>
			</select>
			</div>

		<div class="col-xl-4">
			<label>City </label>
			<select class="form-control">
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
		</div>
			<!-- Galing sa database -->
			<!-- sample -->

		<div class="col-xl-4">
			<label>Monster</label>
			<select class="form-control">
				<option>Boros</option>
				<option>Vaccine Man</option>
				<option>Deep Sea King</option>
				<option>Garou</option>
			</select>
		</div>
</div>
			<label>Task Description </label>
			<textarea class="form-control" rows="5" placeholder="Description"></textarea>
			<input type="submit" name="createTask" class="btn btn-outline-secondary createTaskBtn" value="Submit">

	</div>
</form>
</div>
</body>
</html>