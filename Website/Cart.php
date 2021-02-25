<?php
include('Header.php');
if(isset($_SESSION['username'])){
include('DBConnection.php');
$query='select * from cart where c_username="'.$_SESSION['username'].'" order by c_id desc';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n>0){
?>
<br/><br/>
<div class="container">
<?php
for($i=1;$i<=$n;$i++){
    $arr=mysqli_fetch_array($res);
    $pid=$arr['c_pid'];
    $query1='select * from products where p_id='.$pid;
    $res1=mysqli_query($con,$query1);
    $arr1=mysqli_fetch_array($res1);
?>
<div class="row" style="padding:20px;box-shadow:0px 0px 10px black;background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));">
<div class="col-md-4">
<img src="<?php echo 'Images/'.$arr1['p_img']; ?>" width="100%"/>
</div>
<div class="col-md-1"></div>
<div class="col-md-7" style="padding:20px;">
<div><h2 style="font-weight:bold;color:#8E3AEC;"><?php echo $arr1['p_name']; ?></h2></div>
<div><h2><span style="font-weight:bold;">Size : </span><span style="color:#8E3AEC;"><?php echo $arr1['p_size']; ?></span></h2></div>
<div><h2><span style="font-weight:bold;">Price : </span><span style="color:#8E3AEC;">Rs. <?php echo $arr1['p_price']; ?> per pad</span></h2></div>
<br/>
<div style="text-align:center;">
<form method="post" action="BuyNow.php">
<input type="text" name="pid" value="<?php echo $arr['c_pid']; ?>" hidden/>
<div class="form-group">
<label><h2>Quantity</h2></label><input type="number" class="form-control" value="<?php echo $arr['c_quantity'] ?>" placeholder="Number of Pads" name="quantity" required>
</div>
<button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;font-size:20px;font-weight:bold;">Buy Now</button>
</form>
<form method="post" action="DeleteProductFromCart.php">
<input type="text" name="c_id" value="<?php echo $arr['c_id']; ?>" hidden/>
<button type="submit" class="btn btn-danger" style="font-size:20px;font-weight:bold;">Delete From Cart</button>
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
}
else{
    ?>
    <br/><br/>
    <div class="container" style="text-align:center;">
    <div class="row">
    <div class="col">
    <h1>You cart is empty</h1>
    <h1 style="font-size:200px;"><i class="fa fa-shopping-cart"></i></h1>
    </div>
    </div>
    </div>
    <?php
}
include('Footer.php');
}
else{
    header('location:Index.php');
}
?>