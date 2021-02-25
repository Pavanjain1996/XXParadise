<?php
session_start();
?>
<html>
<head>
<title>XX Paradise</title>
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
  <a class="navbar-brand" href="index.php" style="font-size:30px;color:white;">XX Paradise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-size:20px;color:white;"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <?php
        if(isset($_SESSION['username'])){
            echo '<li class="nav-item active"><a class="nav-link" href="Profile.php" style="font-size:20px;color:white;"><i class="fa fa-user-circle"></i> '.$_SESSION['username'].' <span class="sr-only">(current)</span></a></li>';
            echo '<li class="nav-item active"><a class="nav-link" href="Cart.php" style="font-size:20px;color:white;"><i class="fa fa-shopping-cart"></i> Cart <span class="sr-only">(current)</span></a></li>';
            echo '<li class="nav-item active"><a class="nav-link" href="Logout.php" style="font-size:20px;color:white;"><i class="fa fa-sign-out"></i> Logout <span class="sr-only">(current)</span></a></li>';
        }
        else{
            echo '<li class="nav-item active"><a class="nav-link" href="Login.php" style="font-size:20px;color:white;"><i class="fa fa-sign-in"></i> Login <span class="sr-only">(current)</span></a></li>';
            echo '<li class="nav-item active"><a class="nav-link" href="Register.php" style="font-size:20px;color:white;"><i class="fa fa-user-plus"></i> Sign Up <span class="sr-only">(current)</span></a></li>';
        }
      ?>
    </ul>
    </div>
</nav>