<?php
session_start();
include('DBConnection.php');
$email=$_POST['email'];
$contact=$_POST['contact'];
$query='update users set u_email="'.$email.'", u_contact="'.$contact.'" where u_username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:Profile.php');
?>