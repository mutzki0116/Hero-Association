<?php 
	include_once 'adminHeader.php';
	include_once './_includes/config.php';

	$monsterQuery = "SELECT * FROM monsterList;";
	$data = selectMonsters($monsterQuery);
?>
<h1 class="pageTitle">Monster Galleries</h1>

<!-- Gumamit ng looping para idisplay lahat ng monsters na nasa database -->
<!-- Ilagay sa loob ng _images/monsters -->


<!-- Sample -->
<div class="container">
	<div class="row">	
		<?php foreach ($data as $monsterInfo):  ?>
		<?php echo '<div class="col-xl-4 col-md-6">
			<div class="card text-white bg-dark mb-3 monsterContainer">
			<img class="card-img-top monster-img" src="data:image/jpeg;base64,'.base64_encode( $monsterInfo['monster_image'] ).'"/>
			  	<div class="card-body">
				    <h2 class="card-title"> '.$monsterInfo['monster_name'].' </h2>
				    <p class="card-text"> '.$monsterInfo['monster_description'].' </p>
				    <hr>
				    <a href="#">READ LESS</a>
			  	</div>
			</div>
		</div>'; ?>
		<?php endforeach; ?>
	</div>
</div>
</body>
</html>