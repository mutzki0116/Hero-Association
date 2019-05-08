<?php
	include_once './includes/config.php';

	try {
		
	if(isset($_POST['submitbutton'])){
		$huser = $_POST['username'];
		$hpass = $_POST['password'];
		$role = 'user';
		$hfname = $_POST['fname'];
		$hlname = $_POST['lname'];
		$hextension = $_POST['extension'];
		$hstyle = $_POST['style'];
		$hcity = $_POST['city'];
		$himage = $_POST['image'];
		$datereg = date("Y-m-d");
		$status = 'inactive';
		$heroQuery = "INSERT INTO heroProfiles(hero_firstname, hero_lastname, hero_ext_name, hero_city, hero_fighting_style,hero_img, date_reg) VALUES(:fname, :lname, :ext, :city, :fstyle, :heroimg, :datereg);";	
		$pdo = getConnection();
		$heroResult = $pdo->prepare($heroQuery);
    	$heroResult->bindParam(':fname', $hfname);
    	$heroResult->bindParam(':lname', $hlname);
    	$heroResult->bindParam(':ext', $hextension);
    	$heroResult->bindParam(':city', $hcity);	
		$heroResult->bindParam(':fstyle', $hstyle);
    	$heroResult->bindParam(':heroimg', $himage);
		$heroResult->bindParam(':datereg', $datereg);
		$heroResult->execute([':fname'=>$hfname,':lname'=>$hlname,':ext'=>$hextension,':city'=>$hcity,':fstyle'=>$hstyle,':heroimg'=>$himage,':datereg'=>$datereg]);
		
		$heroQuery1 = "INSERT INTO heroUP(hero_username, hero_password, hero_role, status) VALUES(:username, :password, :role, :status);";	
		$pdo = getConnection();
		$heroResult1->bindParam(':user', $huser);
		$heroResult1->bindParam(':pass', $hpass);
		$heroResult1->bindParam(':role', $role);
		$heroResult1->bindParam(':status', $status);
		$heroResult1->execute(['user'=>$huser,'pass'=>$hpass,'role'=>$role,'status'=>$status]);
		header("Location: index.php?newHeroAdded");
	}
		
	} catch (Exception $e) {
		
	}
?> 