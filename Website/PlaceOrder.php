<?php
include('Header.php');
include('DBConnection.php');
$username=$_SESSION['username'];
$pid=$_POST['pid'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$date=date("Y-m-d");
$query='select u_state,u_city from users where u_username="'.$username.'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$state=$arr['u_state'];
$city=$arr['u_city'];
$query='select d_name from deliveryman where d_state="'.$state.'" and d_city="'.$city.'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$dname=$arr['d_name'];
$query='insert into orders (o_username,o_pid,o_quantity,o_amount,o_date,o_state,o_city,o_deliveryman) values ("'.$username.'",'.$pid.','.$quantity.','.$price.',"'.$date.'","'.$state.'","'.$city.'","'.$dname.'")';
mysqli_query($con,$query);
?>
<style>
body{
    background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));
}
</style>
<br/><br/>
<div class="container" style="text-align:center;">
<div class="row">
<div class="col">
<h1>Your Order has been placed successfully</h1>
<br/>
<a href="Index.php" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;font-size:20px;font-weight:bold;">Go To Home</a>
</div>
</div>
</div>
<?php
include('Footer.php');
?>