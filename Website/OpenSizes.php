<?php
include('Header.php');
$size = $_POST['size'];
include('DBConnection.php');
$query='select * from products where p_size="'.$size.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<br/><br/>
<div class="container">
<?php
for($i=1;$i<=$n;$i++){
    $arr=mysqli_fetch_array($res);
?>
<div class="row" style="padding:20px;box-shadow:0px 0px 10px black;background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));">
<div class="col-md-4">
<img src="<?php echo 'Images/'.$arr['p_img']; ?>" width="100%"/>
</div>
<div class="col-md-1"></div>
<div class="col-md-7" style="padding:20px;">
<div><h2 style="font-weight:bold;color:#8E3AEC;"><?php echo $arr['p_name']; ?></h2></div>
<div><h2><span style="font-weight:bold;">Size : </span><span style="color:#8E3AEC;"><?php echo $arr['p_size']; ?></span></h2></div>
<div><h2><span style="font-weight:bold;">Price : </span><span style="color:#8E3AEC;">Rs. <?php echo $arr['p_price']; ?> per pad</span></h2></div>
<br/><br/>
<div style="text-align:right;">
<form method="post" action="ViewProduct.php">
<input type="text" name="p_id" value="<?php echo $arr['p_id']; ?>" hidden/>
<button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;font-size:20px;font-weight:bold;">Add and Proceed to Checkout</button>
</form>
</div>
</div>
</div>
<br/><br/>
<?php
}
?>
</div>
<?php
include('Footer.php');
?>