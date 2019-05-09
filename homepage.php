<?php 
	include_once 'homepageHeader.php';
	session_start();
	$id = $_SESSION['heroID'];
?>
<h1>Homepage</h1>
	<h2><?php echo $_SESSION['heroID']; ?></h2>
</body>
</html>