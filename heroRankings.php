<?php  
	include_once 'homepageHeader.php';
	include_once './_includes/config.php';

	$classc = 'c';
	$heroQuery = "SELECT * FROM heroRankings;";
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
		</td>
		<td>
			<?php echo $heroInfo['hero_class']; ?>
		</td>
	</tr>

</table>
	<?php 
		endforeach;
	?>

</body>
</html>