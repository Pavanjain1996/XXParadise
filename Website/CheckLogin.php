<?php
session_start();
include('DBConnection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query='select u_username from users where u_username="'.$username.'" and u_password="'.$password.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==1){
    $_SESSION['username']=$username;
    header('location:Index.php');
}
else{
    header('location:Login.php');
}
?>