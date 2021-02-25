<?php
session_start();
include('DBConnection.php');
$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$query='update users set u_address="'.$address.'", u_state="'.$state.'", u_city="'.$city.'", u_pincode="'.$pincode.'" where u_username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
header('location:Profile.php');
?>