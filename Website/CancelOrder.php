<?php
session_start();
include('DBConnection.php');
$o_id=$_POST['o_id'];
$query='delete from orders where o_id='.$o_id;
mysqli_query($con,$query);
header('location:YourOrders.php');
?>