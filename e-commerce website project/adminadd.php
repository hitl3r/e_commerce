<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<form method="post" action="ind.php">
	<br>
    <b>Name:</b>  <input type="text" name="name1" ><br><br>
    <b>Company Name:</b>  <input type="text" name="company" ><br><br>
	<b>Category:</b>  <select name="category">
		<option value="1">Laptops</option>
		<option value="2">Mobiles</option>
		<option value="3">Desktops</option>
		<option value="4">Accesories</option>
	</select><br><br>
	<b>Price</b> <input type="number" name="price"><br><br>
	<b>Stock</b> <input type="number" name="stock"><br><br>
	<b>Model No:</b>  <input type="text" name="model"><br><br>
	<b>Specifications:</b><br><br>
	  <textarea name="specs" rows="8" cols="80"></textarea><br><br>
    
    <a href="ind.php"><button type="submit" style="width: 190px">CHOOSE AN IMAGE</button></a>
  
</form>

</body>
</html>