<?php
include('Header.php');
if(isset($_SESSION['admin'])){
?>
<script>
function Validation(){
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var d1 = new Date(start);
  var d2 = new Date(end);
  if(d1.getTime()<d2.getTime()){
    return true;
  }
  else{
    alert("Starting date must be less than ending date");
    return false;
  }
}
</script>
<br/><br/>
<div class="container">
<div class="row">
<div class="col-md-4">
<button type="button" class="btn btn-primary" style="width:100%;background-color:#8E3AEC;border:2px solid #8E3AEC;" data-toggle="modal" data-target="#exampleModalCenter">Add Delivery Boy/Girl</button>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="AddDeliveryPerson.php">
      <div class="modal-header" style="background-color:#8E3AEC;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">Add Delivery Boy/Girl</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Name" name="name" required>    
  </div>
  <div class="form-group">
  <label>Select your Gender</label>
    <select class="form-control" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
  <div class="form-group">
  <label>Select State</label>
  <select class="form-control" name="state" required>
  <?php
  include('../DBConnection.php');
  $query='select state_name from states';
  $res=mysqli_query($con,$query);
  $n=mysqli_num_rows($res);
  for($i=1;$i<=$n;$i++){
    $arr=mysqli_fetch_array($res);
    echo '<option value="'.$arr['state_name'].'">'.$arr['state_name'].'</option>';
  }
  ?>
  </select>    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter City" name="city" required>    
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Contact No." name="contact" required>    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter username" name="username" required>    
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="col-md-4">
<a href="RecievedOrders.php" class="btn btn-primary" style="width:100%;background-color:#8E3AEC;border:2px solid #8E3AEC;">View Recieved Orders</a>
</div>
<div class="col-md-4">
<button type="button" class="btn btn-primary" style="width:100%;background-color:#8E3AEC;border:2px solid #8E3AEC;" data-toggle="modal" data-target="#exampleModalCenter1">View Sales</button>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="ViewSales.php" onsubmit="return Validation()">
      <div class="modal-header" style="background-color:#8E3AEC;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">View Sales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label style="font-weight:bold;">Start Date</label>
    <input type="date" class="form-control" id="start" name="start" required>    
  </div>
  <div class="form-group">
  <label style="font-weight:bold;">End Date</label>
    <input type="date" class="form-control" id="end" name="end" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">View</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<br/><br/>
<div class="row" style="text-align:center;">
<div class="col-md-12">
<h1 style="font-weight:bold;">Website Stats</h1>
<br/><br/>
</div>
<div class="col-md-3">
<?php
$query='select count(p_id) from products';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo '<div style="background-color:#8E3AEC;padding:20px;color:white;"><div style="font-size:80px;">'.$arr['count(p_id)'].'</div>';
echo '<div style="font-size:20px;">Products</div></div>';
?>
</div>
<div class="col-md-3">
<?php
$query='select count(user_id) from users';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo '<div style="background-color:#8E3AEC;padding:20px;color:white;"><div style="font-size:80px;">'.$arr['count(user_id)'].'</div>';
echo '<div style="font-size:20px;">Users</div></div>';
?>
</div>
<div class="col-md-3">
<?php
$query='select count(o_id) from orders';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo '<div style="background-color:#8E3AEC;padding:20px;color:white;"><div style="font-size:80px;">'.$arr['count(o_id)'].'</div>';
echo '<div style="font-size:20px;">Orders</div></div>';
?>
</div>
<div class="col-md-3">
<?php
$query='select count(d_id) from deliveryman';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
echo '<div style="background-color:#8E3AEC;padding:20px;color:white;"><div style="font-size:80px;">'.$arr['count(d_id)'].'</div>';
echo '<div style="font-size:20px;">Delivery Person</div></div>';
?>
</div>
</div>
</div>
<?php
include('Footer.php');
}
else{
    header('location:Index.php');
}
?>