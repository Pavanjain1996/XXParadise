<?php
include('Header.php');
include('DBConnection.php');
$query='select o_id,o_pid from orders where o_username="'.$_SESSION['username'].'" order by o_id desc';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
?>
<br/><br/>
<div class="container">
<?php
if($n>0){
for($i=1;$i<=$n;$i++){
    $arr=mysqli_fetch_array($res);
    $pid=$arr['o_pid'];
    $query1='select p_name from products where p_id='.$pid;
    $res1=mysqli_query($con,$query1);
    $arr1=mysqli_fetch_array($res1);
?>
<div class="row" style="padding:20px;box-shadow:0px 0px 10px black;">
<div class="col-md-1" style="text-align:center;">
<div class="spinner-grow text-primary" role="status" style="background-color:#8E3AEC;"></div>
</div>
<div class="col-md-10">
<h2 style="font-weight:bold;"><?php echo $arr1['p_name']; ?></h2>
</div>
<div class="col-md-1" style="text-align:center;">
<form method="post" action="OpenOrder.php">
<input type="text" name="o_id" value="<?php echo $arr['o_id']; ?>" hidden>
<button type="submit" class="btn btn-link" style="font-size:20px;font-weight:bold;color:#8E3AEC;" onmouseover="this.style.textDecoration='none';this.style.border='2px solid grey';" onmouseout="this.style.border='none';">></button>
</form>
</div>
</div>
<br/>
<?php
}
}
else{
    ?>
<div class="row" style="padding:20px;">
<div class="col" style="text-align:center;">
<h1>You have no previous orders.</h1><br/>
<div><i class="fa fa-warning" style="font-size:150px;"></i></div>
</div></div>
    <?php
}
?>
</div>
<?php
include('Footer.php');
?>