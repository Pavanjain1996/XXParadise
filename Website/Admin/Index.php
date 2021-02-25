<?php
include('Header.php');
?>
<style>
</style>
<br/><br/><br/>
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="text-align:center;">
<form method="post" action="CheckAdminLogin.php" style="box-shadow:0px 0px 10px grey;padding:40px;">
<div style="font-size:40px;">Admin Login</div><br/>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter username" name="username" required>    
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;">Login</button>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
<?php
include('Footer.php');
?>