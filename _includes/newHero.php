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
		$heroQuery = "INSERT INTO heroProfiles(hero_username,hero_password,hero_role,hero_firstname, hero_lastname, hero_ext_name, hero_city, hero_fighting_style,hero_img, status) VALUES(:user, :pass, :role, :fname, :lname, :ext, :city, :fstyle, :heroimg, :status);";	
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
		
		// $heroQuery1 = "INSERT INTO heroUP(hero_username, hero_password, hero_role, status) VALUES(:username, :password, :role, :status);";	
		// $pdo = getConnection();
		// $heroResult1->bindParam(':user', $huser);
		// $heroResult1->bindParam(':pass', $hpass);
		// $heroResult1->bindParam(':role', $role);
		// $heroResult1->bindParam(':status', $status);
		// $heroResult1->execute(['user'=>$huser,'pass'=>$hpass,'role'=>$role,'status'=>$status]);
		header("Location: ../index2.php?newHeroAdded");
		session_start();
	
	}
		
	} catch (Exception $e) {
		var_dump($e);
	}
?> 