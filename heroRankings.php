<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';

	
	$heroQuery = "SELECT * FROM heroRankings WHERE hero_class =";
	$data = selectRanking($heroQuery);

?>
<h1>Rankings</h1>
<?php 
	print_r($data);
?>
</body>
</html>