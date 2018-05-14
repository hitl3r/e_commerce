<?php
session_start();
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php 

 $searchsai=$_REQUEST['searchsai'];
	# code...
//$query="select * from lolipop where productname='rog' ";
//$query_run = mysqli_query($con,$query);
$sql= mysqli_query($con ,"select * from lolipop where productname='$searchsai'");
?>
<?php  

while($row = mysqli_fetch_array($sql)){
?>
	<div class="col-sm-6 col-md-3">
		<div class="thumbnail">
			<img src="<?php echo $row['img_path']; ?>" alt="<?php echo $row['productname'] ?>" style="width:320px">
			<div class="caption">
				<h3><?php echo $row['productname'] ?></h3>
			<p><a href="addtocart.php?id=<?php echo $row['piid']; ?>" class="btn btn-primary" role="button">Add to cart</a></p>
			</div>
		</div>
	</div>
<?php
}

?>













	


  

</body>
</html>
<div class="col-xs-5">
		



	<img src="<?php echo $row['img_path'] ?>" style="width:320px"  ><br><br>
   <?php echo  $row['productname'] ;
	?>
	,  
	<?php echo  $row['pd'] ;
  	?>
 	, <?php echo  $row['unitprice'] ;

  	?>
	
	</div>