<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';
	session_start();
	$classc = 'c';
	$heroQuery = "SELECT hero_rank_no,hero_firstname FROM heroRankings INNER JOIN heroProfiles ON heroRankings.hero_user_id = heroProfiles.hero_user_id;";
	$data = selectRanking($heroQuery);

?>
<h1>Rankings</h1>
<?php 
foreach ($data as $heroInfo):
?>

<table>
	<tr>
		<td>
			<?php echo $heroInfo['hero_rank_no']; ?>
		</td><br>
		<td>
			<?php echo $heroInfo['hero_firstname']; ?>
		</td>
	</tr>

</table>
	<?php 
		endforeach;
	?>

</body>
</html>