<?php
include('Header.php');
include('DBConnection.php');
$id=$_POST['p_id'];
$query='select * from products where p_id='.$id;
$res=mysqli_query($con,$query);
$arr=mysqli_fetch_array($res);
?>
<script>
function addToCart(){
    var pid = document.getElementById('pid').value;
    var quantity = Number(document.getElementById('quantity').value);
    if(quantity==0){
        alert("Fill the number of pads");
    }
    else{
        var req=new XMLHttpRequest();
		req.open("GET","AddToCart.php?pid="+pid+"&quantity="+quantity,true);
		req.send();
		req.onreadystatechange=function(){
			if(req.readyState==4 && req.status==200){
				alert(req.responseText);
			}
		};
    }
}
</script>
<style>
body{
    background-image:linear-gradient(to right,rgb(240,240,240),rgb(160,160,160));
}
</style>
<br/><br/>
<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<img src="Images/<?php echo $arr['p_img']; ?>" width="100%">
</div>
<div class="col-md-3"></div>
</div>
<br/><br/>
<form method="post" action="BuyNow.php">
<div class="row" style="text-align:center;">
<div class="col">
<h1 style="text-decoration:underline;"><?php echo $arr['p_name']; ?></h1>
<div><h2><span style="font-weight:bold;">Size : </span><span style="color:#8E3AEC;"><?php echo $arr['p_size']; ?></span></h2></div>
<div><h2><span style="font-weight:bold;">Price : </span><span style="color:#8E3AEC;">Rs. <?php echo $arr['p_price']; ?> per pad</span></h2></div>
<hr/>
<div class="form-group">
<label><h1>Quantity</h1></label>
<input type="number" class="form-control" placeholder="Number of pads" name="quantity" id="quantity" min="1" max="500" required>    
<input type="number" class="form-control" value="<?php echo $id; ?>" name="pid" id="pid" hidden>    
</div>
<button type="button" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;font-size:20px;font-weight:bold;" onclick="addToCart()">Add to Cart</button>
<button type="submit" class="btn btn-primary" style="background-color:#8E3AEC;border:2px solid #8E3AEC;font-size:20px;font-weight:bold;">Buy Now</button>
</div>
</div>
</form>
</div>
<?php
include('Footer.php');
?>