<?php
include('Header.php');
?>
<style>
body{
    background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));
}
</style>
<div class="container-fluid" style="padding:0px;margin:0px;">
<div class="row">
<div class="col">
<img src="Images/Cover.jpg" style="width:100%;height:100vh;">
</div>
</div>
</div>
<div class="container-fluid">
<br/><br/>
<div class="row" style="text-align:center;">
<div class="col" style="text-align:center;font-size:45px;font-weight:bold;text-decoration:underline;">Brands</div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-3">
<div class="card" style="box-shadow:0px 0px 10px grey;">
  <img class="card-img-top" src="Images/Whisper.jpg" alt="Card image cap">
  <div class="card-body" style="text-align:center;">
    <form method="post" action="OpenBrands.php">
    <input type="text" name="brand" value="Whisper" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
</div>
<br/><br/>
</div>
<div class="col-md-3">
<div class="card" style="box-shadow:0px 0px 10px grey;">
  <img class="card-img-top" src="Images/Stayfree.jpg" alt="Card image cap">
  <div class="card-body" style="text-align:center;">
    <form method="post" action="OpenBrands.php">
    <input type="text" name="brand" value="Stayfree" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
</div>
<br/><br/>
</div>
<div class="col-md-3">
<div class="card" style="box-shadow:0px 0px 10px grey;">
  <img class="card-img-top" src="Images/Sofy.jpg" alt="Card image cap">
  <div class="card-body" style="text-align:center;">
    <form method="post" action="OpenBrands.php">
    <input type="text" name="brand" value="Sofy" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
</div>
<br/><br/>
</div>
<div class="col-md-3">
<div class="card" style="box-shadow:0px 0px 10px grey;">
  <img class="card-img-top" src="Images/Vwash.jpg" alt="Card image cap">
  <div class="card-body" style="text-align:center;">
    <form method="post" action="OpenBrands.php">
    <input type="text" name="brand" value="Vwash" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
</div>
<br/><br/>
</div>
</div>
<br/><br/>
<div class="row" style="text-align:right;background-color:#8E3AEC;padding:5px;">
<div class="col">
<a href="Brands.php" class="btn btn-link" style="font-size:20px;font-weight:bold;color:white;" onmouseover="this.style.textDecoration='none';">View all Brands</a>
</div>
</div>
</div>
<div class="container-fluid">
<br/><br/>
<div class="row" style="text-align:center;">
<div class="col" style="text-align:center;font-size:45px;font-weight:bold;text-decoration:underline;">Sizes</div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-4">
<div style="box-shadow:0px 0px 20px black;background-color:#8E3AEC;">
  <div style="font-size:150px;text-align:center;color:white;">L</div>
  <div style="text-align:center;">
    <form method="post" action="OpenSizes.php">
    <input type="text" name="size" value="L" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;color:white;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
  <br/>
</div>
<br/><br/>
</div>
<div class="col-md-4">
<div style="box-shadow:0px 0px 20px black;background-color:#8E3AEC;">
  <div style="font-size:150px;text-align:center;color:white;">XL</div>
  <div style="text-align:center;">
    <form method="post" action="OpenSizes.php">
    <input type="text" name="size" value="XL" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;color:white;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
  <br/>
</div>
<br/><br/>
</div>
<div class="col-md-4">
<div style="box-shadow:0px 0px 20px black;background-color:#8E3AEC;">
  <div style="font-size:150px;text-align:center;color:white;">XL+</div>
  <div style="text-align:center;">
    <form method="post" action="OpenSizes.php">
    <input type="text" name="size" value="XL+" hidden/>
    <button class="btn btn-link" style="font-size:20px;font-weight:bold;color:white;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">View More</button>
    </form>
  </div>
  <br/>
</div>
<br/><br/>
</div>
</div>
<br/><br/>
</div>
<?php
include('Footer.php');
?>