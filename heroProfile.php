<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';
	
		if(isset($_SESSION['heroID'])){
			$hero_id = $_SESSION['heroID'];
			$heroQuery = "SELECT hero_rank_no,hero_class, hero_firstname,hero_lastname,hero_ext_name,hero_fighting_style,hero_city,hero_username FROM heroRankings INNER JOIN heroProfiles ON heroRankings.hero_user_id = heroProfiles.hero_user_id WHERE heroRankings.hero_user_id = '".$hero_id."';";
			$data = selectRanking($heroQuery);
		}
		else{
			echo "No user is set";
		}

?>
	<div class="profile">
		<img src="_images/genos.png" class="heroAvatar">
		<div class="heroInfo">
			<?php 
			foreach ($data as $heroInfo):
			?>
			<div class="container">
			<h3 class="heroName"><?php echo $heroInfo['hero_firstname'].' '.$heroInfo['hero_lastname'].' '.$heroInfo['hero_ext_name']; ?></h3>
			<h3 class="heroSubInfo">Hero Name: <?php echo $heroInfo['hero_username']; ?></h3>
			<h3 class="heroSubInfo">Class: <?php echo $heroInfo['hero_class']; ?></h3>
			<h3 class="heroSubInfo">Rank: <?php echo $heroInfo['hero_rank_no']; ?></h3>
			<h3 class="heroSubInfo">City: <?php echo $heroInfo['hero_city']; ?></h3>
			<h3 class="heroSubInfo">Fighting Style: <?php echo $heroInfo['hero_fighting_style']; ?></h3>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</body>
</html>