<?php
include('Header.php');
if(isset($_SESSION['username'])){
include('DBConnection.php');
$query='select * from users where u_username="'.$_SESSION['username'].'"';
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<script>
function Validation(){
    var p=document.getElementById('password').value;
    var rp=document.getElementById('repassword').value;
    if(p==rp){
        return true;
    }
    alert("Passwords do not Match");
    return false;
}
</script>
<style>
body{
    background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));
}
</style>
<br/><br/>
<div class="container-fluid">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3">
<img src="Profiles/<?php echo $arr['u_profile']; ?>" width="100%">
</div>
<div class="col-md-5" style="color:#8E3AEC;">
<h1><?php echo $arr['u_name']; ?></h1>
<h3><i class="fa fa-at" style="color:black;"></i> <?php echo $arr['u_username']; ?></h3>
<h3><i class="fa fa-user-circle" style="color:black;"></i> <?php echo $arr['u_gender']; ?></h3>
<h3><i class="fa fa-envelope" style="color:black;"></i> <?php echo $arr['u_email']; ?></h3>
<h3><i class="fa fa-phone" style="color:black;"></i> <?php echo $arr['u_contact']; ?></h3>
<h3><i class="fa fa-map-marker" style="color:black;"></i> <?php echo $arr['u_address']; ?>, <?php echo $arr['u_city']; ?>,<?php echo $arr['u_state']; ?>,<?php echo $arr['u_pincode']; ?></h3>
</div>
<div class="col-md-3">
<a href="YourOrders.php" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Your Orders</a><br/><br/>
<button type="button" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;" data-toggle="modal" data-target="#exampleModalCenter">Change Address</button>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="ChangeAddress.php">
      <div class="modal-header" style="background-color:#8E3AEC;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">Change Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <input type="textarea" class="form-control" placeholder="Enter Address" name="address" required>    
  </div>
  <div class="form-group">
  <label>Select State</label>
  <select class="form-control" name="state" required>
  <?php
  include('DBConnection.php');
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
    <input type="text" class="form-control" placeholder="Enter Pincode" name="pincode" required>    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Change Address</button>
      </div>
      </form>
    </div>
  </div>
</div>
<br/><br/>
<button type="button" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;" data-toggle="modal" data-target="#exampleModalCenter1">Change Password</button>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="ChangePassword.php" onsubmit="return Validation()">
      <div class="modal-header" style="background-color:#8E3AEC;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Re-Enter Password" id="repassword" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Change Password</button>
      </div>
      </form>
    </div>
  </div>
</div>
<br/><br/>
<button type="button" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;" data-toggle="modal" data-target="#exampleModalCenter2">Change Contact Details</button>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="ChangeContactDetails.php">
      <div class="modal-header" style="background-color:#8E3AEC;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">Change Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Contact No." name="contact" required>    
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Change Details</button>
      </div>
      </form>
    </div>
  </div>
</div>
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