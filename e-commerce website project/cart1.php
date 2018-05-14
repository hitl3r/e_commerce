<?php
session_start();
require 'dbconfig/config.php';
?>



<?php 
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
$un=$_SESSION['usrname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 foreach ($cartitems as $key=>$id) {
	$sql = "SELECT * FROM lolipop WHERE piid = '$id'";
	$res=mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($res);

    $pn=$r['productname'];
    $pid=$r['piid'];
   $query="INSERT INTO `cart`(`piid`, `productname`,`username`) VALUES ('$pid','$pn','$un')";
   $query_run = mysqli_query($con,$query);
   if ($query_run) {
   	//header('location:homepage.php');
   	header('location:ram.php');
   	//echo '<script type="text/javascript"> alert("product successfully added to the cart.....Go to homepage") </script>';
   	//header('location:homepage.php');
   
   	
   	}
   

       
   else{
   		echo '<script type="text/javascript"> alert("!error") </script>';
   }
}
?>
</body>
</html>
	  	