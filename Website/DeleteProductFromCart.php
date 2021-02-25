<?php
include('DBConnection.php');
$c_id=$_POST['c_id'];
$query='delete from cart where c_id='.$c_id;
mysqli_query($con,$query);
header('location:Cart.php');
?>