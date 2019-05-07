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
          <a class="dropdown-item text-light" href="register.php">Register</a>
        </div>
      </li>
  </div>
  </nav>

<div id="loginModal" class="modal">
  <span onclick="document.getElementById('loginModal').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="_images/ha-logo.png" alt="Avatar" class="loginAvatar">
    </div>

    <div class="container">
      <div class="container1">
      <input type="text" placeholder="Enter Username" name="username" required>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn btn-secondary loginBtn">Login</button>
      </div>
    </div>
  </form>
</div> 


</body>
</html>