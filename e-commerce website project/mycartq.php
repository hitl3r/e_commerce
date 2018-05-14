<?php
session_start();
require 'dbconfig/config.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
	<div class="container">
      <div class="jumbotron">         
        <h1>My Cart</h1>
        <p align="right">
          <a href="homepage.php"><button type="button" class="btn btn-primary">Home</button></a>
          <a href="logo.php"><button class="btn btn-primary" style=" " name="logoutsubmit">logout</button></a>
        </p>
      </div>

    </div>
</body>
<?php  
$un=$_SESSION['usrname'];

$sql= mysqli_query($con ,"SELECT * FROM cart,lolipop WHERE cart.username='$un' AND lolipop.piid=cart.piid");

while($row = mysqli_fetch_array($sql)){
?>
	<div class="col-sm-6 col-md-3">
		<div class="thumbnail">
			<img src="<?php echo $row['img_path']; ?>" alt="<?php echo $row['productname'] ?>" style="width:320px">
			<div class="caption">
				<h3><?php echo $row['productname'] ?></h3>
		<a href="credit.php"><button type="submit">BUY</button></a>
			</div>
		</div>
	</div>
<?php
}

?>