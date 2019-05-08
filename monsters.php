<?php 
	include_once 'adminHeader.php';
?>
<h1 class="pageTitle">Monster Gallery</h1>

<!-- Gumamit ng looping para idisplay lahat ng monsters na nasa database -->
<!-- Ilagay sa loob ng _images/monsters -->


<!-- Sample -->
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-md-6">
			<div class="card monsterContainer">
			  <img class="card-img-top monster-img" src="_images/monsters/boros.png">
			  	<div class="card-body">
				    <h2 class="card-title">Boros</h2>
				    <p class="card-text">Boros (ボロス, Borosu), also called Lord Boros (ボロス主, Borosu-nushi) by his subordinates, is the leader of the Dark Matter Thieves</p>
				    <a href="#" class="btn btn-primary">View</a>
			  	</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6">
			<div class="card monsterContainer">
			  <img class="card-img-top monster-img" src="_images/monsters/deep sea king.png">
			  	<div class="card-body">
				    <h2 class="card-title">Deep Sea King</h2>
				    <p class="card-text">The Deep Sea King (深海王, Shinkaiō) ruled over the Seafolk as their king, and claimed the deep sea as his own. He is the main antagonist of the Sea Monster Arc. </p>
				    <a href="#" class="btn btn-primary">View</a>
			  	</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6">
			<div class="card monsterContainer">
			  <img class="card-img-top monster-img" src="_images/monsters/Vaccine Man.png">
			  	<div class="card-body">
				    <h2 class="card-title">Vaccine Man</h2>
				    <p class="card-text">Vaccine Man (ワクチンマン, Wakuchin Man) was a Mysterious Being supposedly born from the release of excessive pollution and waste generated by the industries made by human beings</p>
				    <a href="#" class="btn btn-primary">View</a>
			  	</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>