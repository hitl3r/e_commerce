<?php
session_start();
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>

	<form method="post" action="delete.php">
		<b>enter the productid</b>
<input type="number" name="productid" required=""><br>
<input type="submit" name="submitdelete">
	</form>

<?php 
if (isset($_POST['submitdelete']))  {
 $productid=$_POST['productid'];
$query="DELETE FROM `adminproduct` WHERE productid=$productid ";
$query_run = mysqli_query($con,$query);
if($query_run){
echo '<script type="text/javascript"> alert("Product is removed from the database") </script>';
}
else{
echo '<script type="text/javascript"> alert("!Error") </script>';
}


}





 ?>
</body>
</html>