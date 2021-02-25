<?php
include('Header.php');
?>
<br/><br/><br/>
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="text-align:center;">
<form method="post" action="Registration.php" enctype="multipart/form-data" style="box-shadow:0px 0px 10px grey;padding:40px;">
<div style="font-size:40px;">Register</div><br/>
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
  <label>Upload your Profile Picture</label>
    <input type="file" class="form-control" name="profile" required>    
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Contact No." name="contact" required>    
  </div>
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
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter username" name="username" required>    
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Register</button>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
<?php
include('Footer.php');
?>