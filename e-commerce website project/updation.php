<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
	<form action="lolipop.php" method="Post" enctype="multipart/form-data">
   <br>
    <b>Name:</b>  <input type="text" name="name1" ><br><br>
    <b>Company Name:</b>  <input type="text" name="company" required="" ><br><br>
	<b>Category:</b>  <select name="category" required="">
		<option>-----ALL-----</option>
		<option value="1">Laptops</option>
		<option value="2">Mobiles</option>
		<option value="3">Desktops</option>
		<option value="4">Accesories</option>
	</select><br><br>
	<b>Price</b> <input type="number" name="price" required=""><br><br>
	<b>Stock</b> <input type="number" name="stock" required=""><br><br>
	<b>Model No:</b>  <input type="text" name="model"><br><br>
	<b>Specifications:</b><br><br>
	  <textarea name="specs" rows="8" cols="80"></textarea><br><br>
		<input type="file" name="filetoupload" id="file" required=""><br><br>
		<input type="submit" name="submitaz">
	</form>
