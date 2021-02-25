<?php
session_start();
include('../DBConnection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query='select username from admins where username="'.$username.'" and password="'.$password.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==1){
    $_SESSION['admin']=$username;
    header('location:Dashboard.php');
}
else{
    header('location:Index.php');
}
?>