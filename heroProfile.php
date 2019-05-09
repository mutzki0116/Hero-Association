<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';
	session_start();
	
		if(isset($_SESSION['heroID'])){
			$hero_id = $_SESSION['heroID'];
			$heroQuery = "SELECT hero_rank_no,hero_class, hero_firstname,hero_lastname,hero_fighting_style,hero_city,hero_username FROM heroRankings INNER JOIN heroProfiles ON heroRankings.hero_user_id = heroProfiles.hero_user_id WHERE heroRankings.hero_user_id = '".$hero_id."';";
			$data = selectRanking($heroQuery);
		}
		else{
			echo "No user is set";
		}

?>
<div class="container">
	<div class="profile">
		<img src="_images/genos.png" class="heroAvatar">
		<div class="heroInfo">
			<?php 
			foreach ($data as $heroInfo):
			?>

			<h3 class="heroName">Fullname: <?php echo $heroInfo['hero_firstname']; ?></h3>
			<h3>Hero Name: <?php echo $heroInfo['hero_username']; ?></h3>
			<h3>Class: <?php echo $heroInfo['hero_class']; ?></h3>
			<h3>Rank: <?php echo $heroInfo['hero_rank_no']; ?></h3>
			<h3>City: <?php echo $heroInfo['hero_city']; ?></h3>
			<h3>Fighting Style: <?php echo $heroInfo['hero_fighting_style']; ?></h3>
		</div>
	</div>
</div>
</body>
</html>