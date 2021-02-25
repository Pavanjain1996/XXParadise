<?php
include('../DBConnection.php');
$o_id=$_POST['o_id'];
$status=$_POST['status'];
$query='update orders set o_status="'.$status.'" where o_id='.$o_id;
mysqli_query($con,$query);
header('location:Dashboard.php');
?>