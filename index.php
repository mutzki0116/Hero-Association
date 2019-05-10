<?php 
	include_once './_includes/config.php';

if(isset($_POST['submitbutton'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$heroQuery = "SELECT * FROM heroProfiles WHERE hero_username = :username && hero_password = :password ";
		
		$data = selectHeroes($heroQuery, [
			['hero' => ':username', 'value' => $user],
			['hero' => ':password', 'value' => $pass],
		]);

		foreach ($data as $heroInfo): 
		if($data > 0){
			if($heroInfo['hero_role'] == 'hero'){
			session_start();
			$_SESSION['heroID'] = $heroInfo['hero_user_id'];
			header("Location: homepage.php?");
			}
			elseif ($heroInfo['hero_role'] == 'admin') {
			session_start();
			$_SESSION['heroID'] = $heroInfo['hero_user_id'];
			header("Location: adminHomepage.php?");
			}
		}
		else{
			header("Location: index.php?WizardUnidentified");
		}
		endforeach;
	}	
	
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="_includes/bootstrap.css">
<link rel="stylesheet" type="text/css" href="_includes/style.css">
<script src="_includes/jquery-3.4.0.js"></script>
<script src="_includes/bootstrap.js"></script>
<head>
  <title>The Hero Association</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="_images/ha-logo.png" width="40" height="40" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Heroes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Monsters</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Memes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light" href="#" onclick="document.getElementById('loginModal').style.display='block'">Login</a>
          <a class="dropdown-item text-light" href="#" onclick="document.getElementById('registrationModal').style.display='block'">Register</a>
        </div>
      </li>
  </div>
  </nav>


<!-- LoginForm Modal -->

<div id="loginModal" class="modal">
  <span onclick="document.getElementById('loginModal').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate loginModal" method="POST" action="#">
    <div class="imgcontainer">
      <img src="_images/ha-logo.png" alt="Avatar" class="Avatar">
    </div>
    <div class="container">
      <div class="container1">
      <input type="text" placeholder="Enter Username" name="username" required>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn btn-secondary loginBtn" name="submitbutton">Login</button>
      </div>
    </div>
  </form>
</div> 


<!-- RegistrationForm Modal -->

<div id="registrationModal" class="modal">
  <span onclick="document.getElementById('registrationModal').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate regModal" method="POST" action="/_includes/newHero.php">
    <div class="imgcontainer">
      <img src="_images/ha-logo.png" alt="Avatar" class="Avatar">
    </div>

    <div class="container">
      <div class="container1">
      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" required>
      <input type="text" placeholder="Firstname" name="fname" required>
      <input type="text" placeholder="Lastname" name="lname" required>
      <input type="text" placeholder="Extension" name="extension" required>
      <input type="text" placeholder="Style" name="style" required>
      <input type="text" placeholder="City" name="city" required>
      <input class="chooseImg" type="file" name="image" required>
      <button type="submit" class="btn btn-secondary registerBtn" name="submitbutton">Register</button>
      </div>
    </div>
  </form>
</div> 

</body>
</html>