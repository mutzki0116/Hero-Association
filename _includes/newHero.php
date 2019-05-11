<?php
	include_once 'config.php';

	try {
		
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$huser = $_POST['username'];
		$hpass = $_POST['password'];
		$role = 'hero';
		$hfname = $_POST['fname'];
		$hlname = $_POST['lname'];
		$hextension = $_POST['extension'];
		$hstyle = $_POST['style'];
		$hcity = $_POST['city'];
		$himage = $_POST['image'];
		$status = 'inactive';
		$heroQuery = "INSERT INTO heroprofile(hero_username,hero_password,hero_role,hero_firstname, hero_lastname, hero_ext_name, hero_city, hero_fighting_style,hero_img, status) VALUES(:user, :pass, :role, :fname, :lname, :ext, :city, :fstyle, :heroimg, :status);";	
		$pdo = getConnection();
		$heroResult = $pdo->prepare($heroQuery);

    	$heroResult->bindParam(':user', $huser);
    	$heroResult->bindParam(':pass', $hpass);
    	$heroResult->bindParam(':role', $role);
    	$heroResult->bindParam(':fname', $hfname);
    	$heroResult->bindParam(':lname', $hlname);
    	$heroResult->bindParam(':ext', $hextension);
    	$heroResult->bindParam(':city', $hcity);	
		$heroResult->bindParam(':fstyle', $hstyle);
    	$heroResult->bindParam(':heroimg', $himage);
    	$heroResult->bindParam(':status', $status);
		$heroResult->execute();
		
		header("Location: ../index2.php?newHeroAdded");
		session_start();
	
	}
		
	} catch (Exception $e) {
		var_dump($e);
	}
?> 