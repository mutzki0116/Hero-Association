<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';

	$heroQuery = "SELECT hero_firstname, hero_lastname, hero_class, hero_rank_no FROM heroProfiles INNER JOIN heroRankings ON heroProfiles.hero_user_id = heroRankings.hero_user_id WHERE heroRankings.hero_class == 'C'";
	$pdo = getConnection();
	$heroResult = $pdo->prepare($heroQuery);
	$heroResult->execute();
	$data = selectHeroes();
	print_r($data);
?>
<h1>Rankings</h1>

</body>
</html>