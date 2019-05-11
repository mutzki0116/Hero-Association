<?php
 	include_once './_includes/config.php';
	session_start();
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
    <a class="navbar-brand" href="homepage.php"><img src="_images/ha-logo.png" width="40" height="40" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="heroProfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="heroRankings.php">Rankings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tasks.php">Task</a>
      </li>
  </div>
  </nav>
