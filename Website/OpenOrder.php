<?php
include('Header.php');
$o_id = $_POST['o_id'];
include('DBConnection.php');
$query='select * from orders where o_id="'.$o_id.'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
$pid=$arr['o_pid'];
$query1='select * from products where p_id='.$pid;
$res1=mysqli_query($con,$query1);
$arr1=mysqli_fetch_array($res1);
?>
<br/><br/>
<div class="container">
<div class="row">
<div class="col-md-4">
<img src="Images/<?php echo $arr1['p_img'] ?>" width="100%">
</div>
<div class="col-md-5" style="color:#8E3AEC;">
<h2 style="font-weight:bold;"><?php echo $arr1['p_name']; ?></h2><br/>
<h3><span style="color:black">Size :</span> <?php echo $arr1['p_size']; ?></h3>
<h3><span style="color:black">Date of order :</span> <?php echo $arr['o_date']; ?></h3>
<h3><span style="color:black">Number of pads :</span> <?php echo $arr['o_quantity']; ?></h3>
<h3><span style="color:black">Total amount :</span> Rs. <?php echo $arr['o_amount']; ?></h3>
<h3><span style="color:black">Status :</span> <?php echo $arr['o_status']; ?></h3>
<h3><span style="color:black">Delivery Person :</span> <?php echo $arr['o_deliveryman']; ?></h3>
<h3><span style="color:black">Mode of Payment :</span> Pay on delivery</h3>
</div>
<div class="col-md-3">
<?php 
if($arr['o_status']=="Order Recieved"){
?>
<form method="post" action="CancelOrder.php">
<input type="text" value="<?php echo $o_id; ?>" name="o_id" hidden>
<button type="submit" class="btn btn-danger" style="font-size:20px;font-weight:bold;">Cancel Order</button>
</form>
<?php
}
?>
</div>
</div>
</div>
<?php
include('Footer.php');
?>