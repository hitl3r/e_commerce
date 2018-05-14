<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
	<form action="lolipop.php" method="Post" enctype="multipart/form-data">
   <br>
    <b>Name:</b>  <input type="text" name="name1" ><br><br>
	<b>Category:</b>  <select name="category" required="">
		<option>-----ALL-----</option>
		<option value="1">Starters</option>
		<option value="2">Main course</option>
		<option value="3">Soft drinks</option>
		
	</select><br><br>
	<b>Price</b> <input type="number" name="price" required=""><br><br>
	<b>Stock</b> <input type="number" name="stock" required=""><br><br>
	
	
		<input type="file" name="filetoupload" id="file" required=""><br><br>
		<input type="submit" name="submitaz">
	</form>


<?php 

if(isset($_POST['submitaz']))
{
  $name1=$_POST['name1'];
 
  $category=$_POST['category'];
  $price=$_POST['price'];
  $stock=$_POST['stock'];
include "config.php";
$filename = $_FILES['filetoupload']['name'];
$filetmp = $_FILES['filetoupload']['tmp_name'];
$filesize = $_FILES['filetoupload']['size'];
$file_basename =basename($_FILES['filetoupload']['name']);
$dir = "upload/";
$final_dir=$dir.$file_basename;
move_uploaded_file($filetmp,$final_dir);
$query = "INSERT INTO `lolipop`(`productname`, `cno`, `unitprice`, `stock`, `imd_name`, `img_path`) VALUES ('$name1','$category','$price','$stock','$file_basename','$final_dir')";
      $query_run = mysqli_query($con,$query);
if($query_run)
{
   echo '<script type="text/javascript"> alert("product is added.......success") </script>';
}
else
 echo '<script type="text/javascript"> alert("!Error") </script>';
 
}
 ?>
</body>
</html>