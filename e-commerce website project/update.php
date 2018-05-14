<?php
session_start();
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<form method="post" action="update.php">
	<b>enter the productid</b>
	<input type="number" name="productid"><br><br>


   <b>New Name:</b>  <input type="text" name="name1" ><br><br>
    <b>New Company Name:</b>  <input type="text" name="company" required="" ><br><br>
	
	<b>New Price</b> <input type="number" name="price" required=""><br><br>
	<b>New Stock</b> <input type="number" name="stock" required=""><br><br>
	<b>New Model No:</b>  <input type="text" name="model"><br><br>
	<b>New Specifications:</b><br><br>
	  <textarea name="specs" rows="8" cols="80"></textarea><br><br>
	<input type="submit" name="submitupdate">

</form>
<?php
if(isset($_POST['submitupdate']))
{
	$name1=$_POST['name1'];
  $company=$_POST['company'];
  $model=$_POST['model'];
  $price=$_POST['price'];
  $stock=$_POST['stock'];
  $specs=$_POST['specs'];
 $productid=$_POST['productid'];

     $query="UPDATE `lolipop` SET `productname`='$name1',`pd`='$specs',`unitprice`='$price',`stock`='$stock' WHERE piid=$productid"; 
     $query_run = mysqli_query($con,$query);
     if($query_run){

      echo '<script type="text/javascript"> alert("product is updated") </script>';

     }
  else{
      
      echo '<script type="text/javascript"> alert("!Error") </script>';
     
  }
  
}

  ?>
</body>
</html>