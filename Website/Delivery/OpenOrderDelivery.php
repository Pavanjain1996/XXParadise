<?php
include('Header.php');
$o_id = $_POST['o_id'];
include('../DBConnection.php');
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
<img src="../Images/<?php echo $arr1['p_img'] ?>" width="100%">
</div>
<div class="col-md-5" style="color:#8E3AEC;">
<h2 style="font-weight:bold;"><?php echo $arr1['p_name']; ?></h2><br/>
<h3><span style="color:black">Size :</span> <?php echo $arr1['p_size']; ?></h3>
<h3><span style="color:black">Date of order :</span> <?php echo $arr['o_date']; ?></h3>
<h3><span style="color:black">Number of pads :</span> <?php echo $arr['o_quantity']; ?></h3>
<h3><span style="color:black">Total amount :</span> Rs. <?php echo $arr['o_amount']; ?></h3>
<h3><span style="color:black">Order Status :</span><?php echo $arr['o_status']; ?></h3>
</div>
<div class="col-md-3">
<label><h1><b>Status</b></h1><label>
<form method="post" action="ChangeStatusDelivery.php">
<input type="text" name="o_id" value="<?php echo $arr['o_id']; ?>" hidden>
<div class="form-group">
  <select class="form-control" name="status" required>
    <option value="Dispatched">Dispatched</option>
    <option value="Delivered">Delivered</option>
  </select>    
  </div>
  <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Change Status</button>
</form>
</div>
</div>
</div>
<?php
include('Footer.php');
?>