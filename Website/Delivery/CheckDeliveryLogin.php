<?php
session_start();
include('../DBConnection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query='select d_username from deliveryman where d_username="'.$username.'" and d_password="'.$password.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==1){
    $_SESSION['delivery']=$username;
    header('location:Dashboard.php');
}
else{
    header('location:Index.php');
}
?>