<?php
include('Header.php');
if(isset($_SESSION['username'])){
$pid=$_POST['pid'];
$quantity=$_POST['quantity'];
include('DBConnection.php');
$query='select p_name,p_price from products where p_id='.$pid;
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<style>
body{
    background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));
}
</style>
<br/><br/>
<div class="container" style="text-align:center;">
<form method="post" action="PlaceOrder.php">
<div class="row">
<div class="col-md-12">
<h1><?php echo $arr['p_name']; ?></h1>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<label><h1>Quantity</h1></label>
<input type="number" class="form-control" name="quantity" value="<?php echo $quantity; ?>" readonly>
<input type="text" name="pid" value="<?php echo $pid; ?>" hidden>
</div>
<div class="col-md-6">
<label><h1>Price</h1></label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Rs.</span>
  </div>
  <input type="number" class="form-control" name="price" value="<?php echo $quantity*$arr['p_price']; ?>" readonly>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col">
<button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;font-size:20px;font-weight:bold;">Place Order</button>
</div>
</div>
</form>
</div>
<?php
include('Footer.php');
}
else{
  header('location:Login.php');
}
?>