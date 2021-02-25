<?php
session_start();
?>
<html>
<head>
<title>XX Paradise - Admin</title>
<link rel="icon" href="Images/Icon.jpg"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html{
	scroll-behavior: smooth;
}
body{
	font-family: 'Gotu', sans-serif;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#8E3AEC;">
  <a class="navbar-brand" href="Dashboard.php" style="font-size:30px;color:white;">XX Paradise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <?php
    if(isset($_SESSION['admin'])){
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="Dashboard.php" style="font-size:20px;color:white;"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:20px;color:white;"><i class="fa fa-user-circle"></i> <?php echo $_SESSION['admin']; ?> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="AdminLogout.php" style="font-size:20px;color:white;"><i class="fa fa-sign-out"></i> Logout <span class="sr-only">(current)</span></a>
      </li>
      <?php
      }
      ?>
    </ul>
    </div>
</nav>