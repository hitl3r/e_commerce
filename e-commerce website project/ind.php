<?php
require 'dbconfig/config.php';
//inclued_get_data('adminadd.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
	<form action="ind.php" method="Post" enctype="multipart/form-data">



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
		<input type="submit" name="submit">
	</form>


<?php 

if(isset($_POST['submit']))
{
  $name1=$_POST['name1'];
  $company=$_POST['company'];
  $category=$_POST['category'];
  $model=$_POST['model'];
  $price=$_POST['price'];
  $stock=$_POST['stock'];
  $specs=$_POST['specs'];


$query = "INSERT INTO `adminproduct`(`productname`, `cno`, `productdescription`, `unitprice`, `stock`) VALUES ('$name1','$category','$specs','$price','$stock')";


   //  $query="insert into adminproduct('') values('$name1','1','$category','$specs','$price','$stock','$file_basename','$final_dir')";
      $query_run = mysqli_query($con,$query);

    if ($query_run) 
    {
  
     }
     else{
    echo '<script type="text/javascript"> alert("!Error") </script>';
     }
include "config.php";

$filename = $_FILES['filetoupload']['name'];
$filetmp = $_FILES['filetoupload']['tmp_name'];
$filesize = $_FILES['filetoupload']['size'];
$file_basename =basename($_FILES['filetoupload']['name']);




$dir = "upload/";
$final_dir=$dir.$file_basename;

move_uploaded_file($filetmp,$final_dir);


   $query="select productid from adminproduct WHERE productname='$name1' AND cno='$category' AND productdescription='$specs' AND unitprice='$price' AND stock='$stock'";
   $result = mysqli_query($con,$query);
   //$row = mysqli_fetch_assoc($result);
   //$query="UPDATE imge SET productid='  $result'"
   //$result = mysqli_query($con,$query);
   
 if ($query) {
   $query=mysqli_query($con,"INSERT INTO imge (img_name,img_path,productid) values ('$file_basename','$final_dir','$result')");

 }
 else{
 	echo '<script type="text/javascript"> alert("details of the image are not added successfully") </script>';
 }


if($query)
{
   echo '<script type="text/javascript"> alert("product is added.......success") </script>';
}
else
 echo '<script type="text/javascript"> alert("Not an image") </script>';
 


}
 

   
  

//'$name1','$category','$specs','$price','$stock','$file_basename','$final_dir'
 ?>
</body>
</html>