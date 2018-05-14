<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laptops</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">         
        <h1>Laptops</h1>
        <p align="right">
          <a href="homepage.php"><button type="button" class="btn btn-primary">Home</button></a>
          <a href="mycartq.php"><button type="button" class="btn btn-primary">Mycart</button></a>
          <a href="logo.php"><button class="btn btn-primary" style=" " name="logoutsubmit">logout</button></a>
        </p>
      </div>

    </div>
    
    <?php
$sql= mysqli_query($con ,"select * from lolipop where cno=1");
while($row = mysqli_fetch_array($sql)){
?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $row['img_path']; ?>" alt="<?php echo $row['productname'] ?>" style="width:320px">
      <div class="caption">

        <h3><?php echo $row['productname'] ?></h3>
        <?php echo $row['pd'] ?><br>
        <b>Price:</b>Rs <?php echo $row['unitprice'] ?><br>

      <p><a href="addtocart.php?id=<?php echo $row['piid']; ?>" class="btn btn-primary" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>
<?php
}

?>


  </body>
</html>




