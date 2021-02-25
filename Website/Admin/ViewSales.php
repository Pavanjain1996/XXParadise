<?php
include('Header.php');
if(isset($_SESSION['admin'])){
$start=$_POST['start'];
$end=$_POST['end'];
include('../DBConnection.php');
$query='select o_username,o_pid,o_amount,o_date,o_deliveryman from orders where o_status="Delivered" and (o_date>="'.$start.'" and o_date<="'.$end.'")';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<br/><br/><br/>
<div class="container">
<div class="row">
<div class="col">
<h1 style="text-align:center;font-weight:bold;">Delivered Orders</h1>
</div>
</div>
<br/><br/>
</div class="row">
<div class="col" style="text-align:center;">
<?php
if($n>0){
    $amt=0;
?>
    <table class="table table-striped">
  <thead>
    <tr style="background-color:#8E3AEC;">
      <th scope="col">S.No.</th>
      <th scope="col">Username</th>
      <th scope="col">Product No.</th>
      <th scope="col">Date</th>
      <th scope="col">Delivery Person</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
  <?php
  for($i=1;$i<=$n;$i++){
      $arr=mysqli_fetch_array($res);
  ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $arr['o_username']; ?></td>
      <td><?php echo $arr['o_pid']; ?></td>
      <td><?php echo $arr['o_date']; ?></td>
      <td><?php echo $arr['o_deliveryman']; ?></td>
      <td><?php 
      $amt=$amt+$arr['o_amount'];
      echo $arr['o_amount']; ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>
<br/><br/>
<h1 style="font-weight:bold;">Total amount from order recieved is Rs. <?php echo $amt; ?> /-</h1>
<?php
}
else{ ?>
    <h1>You have no orders in this period.</h1><br/>
<div><i class="fa fa-warning" style="font-size:150px;"></i></div>
<?php }
?>
</div>
</div>
</div>
<?php
include('Footer.php');
}
?>