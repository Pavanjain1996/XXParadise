<?php
include('Header.php');
if(isset($_SESSION['delivery'])){
include('../DBConnection.php');
$query='select d_state,d_city from deliveryman where d_username="'.$_SESSION['delivery'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$query='select o_id,o_username from orders where o_status="Dispatched" and (o_city="'.$arr['d_city'].'" and o_state="'.$arr['d_state'].'")';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<br/><br/>
<div class="container">
<div class="row">
<div class="col">
<h1 style="text-align:center;font-weight:bold;">Orders Dispatched - Yet to be Delivered</h1>
</div>
</div>
<?php
if($n>0){
    for($i=1;$i<=$n;$i++){
        $arr=mysqli_fetch_array($res);
?>
<br/><br/>
<div class="row" style="padding:20px;box-shadow:0px 0px 10px black;">
<div class="col-md-1" style="text-align:center;">
<div class="spinner-grow text-primary" role="status" style="background-color:#8E3AEC;"></div>
</div>
<div class="col-md-10">
<h2 style="font-weight:bold;"><?php echo $arr['o_username']; ?></h2>
</div>
<div class="col-md-1" style="text-align:center;">
<form method="post" action="OpenOrderDelivery.php">
<input type="text" name="o_id" value="<?php echo $arr['o_id']; ?>" hidden>
<button type="submit" class="btn btn-link" style="font-size:20px;font-weight:bold;color:#8E3AEC;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">></button>
</form>
</div>
</div>
<?php
    }
}
else{
    ?>
    <br/><br/>
    <div class="row">
    <div class="col" style="text-align:center;">
        <h1>You have no orders now.</h1><br/>
<div><i class="fa fa-warning" style="font-size:150px;"></i></div>
</div>
</div>
    <?php
}
?>
</div>
<?php
include('Footer.php');
}
else{
    header('location:Index.php');
}
?>