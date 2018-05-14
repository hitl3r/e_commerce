<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
		.up{
			margin-top: 100px;
		}
		.left: {
			margin-left: 500px;
		}
		.right{
			margin-right: 100px; 
		}
	</style>
</head>
<body>
	 <style type="text/css">
  body{
    background-image: url("New folder/line_glare_light_color_background_47046_1920x1080.jpg");
  }
</style>
	<br><br><br>
	<h1 align="center">Payment Page</h1>
		<form method="get" action="" align="center">
		<div class="up" align="center">
			<ul class="nav nav-tabs" style="margin-left: 456px; margin-right: 500px;" >
  				<li role="presentation" class=""><a href="credit.php">Debit/Credit Card</a></li>
  				<li role="presentation" class=""><a href="cashondelivery.php">Cash On Delivery</a></li>
  				<li role="presentation" class="active"><a href="netbanking.php">Net Banking</a></li>
			</ul><br>
			<b>Choose bank:</b> <select>
				<option>All</option>
				<option>Andhra Bank</option>
				<option>Canara Bank</option>
				<option>HDFC Bank</option>
				<option>ICICI Bank</option>
				<option>SBI Bank</option>
			</select>
		</div>
		<br>
		<a href="coming.php"><button type="button" class="btn btn-success">Pay</button></a>
	</form>
</body>
</html>
