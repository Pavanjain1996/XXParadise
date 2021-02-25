<?php
session_start();
if(isset($_SESSION['username'])){
    $pid=$_GET['pid'];
    $quantity=$_GET['quantity'];
    include('DBConnection.php');
    $query='insert into cart (c_username,c_pid,c_quantity) values ("'.$_SESSION['username'].'",'.$pid.','.$quantity.')';
    mysqli_query($con,$query);
    echo "Item Added to Cart";
}
else{
    echo "Please Login First";
}
?>