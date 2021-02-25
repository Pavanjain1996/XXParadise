<?php
session_start();
include('DBConnection.php');
$password=$_POST['password'];
$query='update users set u_password="'.$password.'" where u_username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:Logout.php');
?>