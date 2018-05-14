<?php
require 'dbconfig/config.php';
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
	
	
	<br><br><br>
	<h1 align="center">Payment Page</h1>
		<form method="get" action="" align="center">
		<div class="up" align="center">
			<ul class="nav nav-tabs" style="margin-left: 456px; margin-right: 500px;" >
  				<li role="presentation" class="active"><a href="#">Debit/Credit Card</a></li>
  				<li role="presentation" class=""><a href="#">Cash On Delivery</a></li>
  				<li role="presentation" class=""><a href="#">Net Banking</a></li>
			</ul><br>
			<b>Name on card:</b> <input type="text" name="name"><br><br>
			<b>Card Number:</b> <input type="text" name="number"><br><br>
			<b>Valid Thru:</b> <input type="month" name="date"><br><br>
			<b>CVV:</b> <input type="number" name="cvv" min="100" max="999">
		</div>
		<br>
		<button type="button" class="btn btn-success">Pay</button>
	</form>
</body>
</html>
