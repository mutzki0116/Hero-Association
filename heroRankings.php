<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';

	$classc = 'c';
	$heroQuery = "SELECT * FROM heroRankings;";
	$data = selectRanking($heroQuery);

?>
<h1>Rankings</h1>
<?php print_r($data); ?>
	

</body>
</html>