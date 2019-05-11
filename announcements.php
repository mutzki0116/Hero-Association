<?php  
	include_once 'adminHeader.php';
?>
<div class="container">
	<form class="createTask" method="post" action="#">
			<label>Title</label>
			<input type="text" name="" placeholder="Title" class="form-control">
			<label>Description</label>
			<textarea class="form-control" rows="5" placeholder="Description" name="" required=""></textarea>
			<input type="submit" name="" class="btn btn-outline-primary" value="Submit">
	</form>
</div>
</body>
</html>