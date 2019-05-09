<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';

	
	$heroQuery = "SELECT * FROM heroRankings WHERE hero_class =";
	$data = selectRanking($heroQuery);
	print_r($data);
?>
<h1>Rankings</h1>

	

</body>
</html>