<?php
session_start();
include('../DBConnection.php');
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$state=$_POST['state'];
$city=$_POST['city'];
$username=$_POST['username'];
$password=$_POST['password'];
$query='insert into deliveryman (d_name,d_gender,d_email,d_contact,d_state,d_city,d_username,d_password) values ("'.$name.'","'.$gender.'","'.$email.'","'.$contact.'","'.$state.'","'.$city.'","'.$username.'","'.$password.'")';
mysqli_query($con,$query);
header('location:Dashboard.php');
?>