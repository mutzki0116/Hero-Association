<?php  
	include_once 'adminHeader.php';
?>
<div class="container">
	<form method="post" action="#" class="createTask">
	<div class="form-group">
	<h2>Add a Monster</h2>
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
			<label>Monster Status</label>
			<select class="form-control">
				<option>Alive</option>
				<option>Dead</option>
			</select>
		</div>

		<div class="col-xl-8">
		<label>Monster Image </label>
		<input type="file" name="" class="form-control">
			
		</div>
		</div>
			<label>Monster Name</label>
			<div class="form-group">
			<input type="text" name="" class="form-control" placeholder="Monster Name">
		</div>
			<label>Monster Description </label>
			<textarea class="form-control" rows="5" placeholder="Description"></textarea>
			<input type="submit" name="addMonster" class="btn btn-outline-secondary addMonsterBtn" value="Submit">

	</div>
</form>
</div>
</body>
</html>