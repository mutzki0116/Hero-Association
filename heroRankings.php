<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';

	$classc = 'c';
	$heroQuery = "SELECT * FROM heroRankings WHERE hero_class;";
	$data = selectRanking($heroQuery);
?>
<h1>Rankings</h1>

	

</body>
</html>