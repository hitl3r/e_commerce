<?php
session_start();
require 'dbconfig/config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>login page</title>


	 <link rel="stylesheet" href="css/styleb.css">
</head>
 <style type="text/css">
  body{
    background-image: url("images/ecommerce-keyboard (1).jpg");
  }
</style>


<body style="background-color:">
<div id="main-rapper">
     <br>
<div class="l2">
	<center><h1 style="color: white">Login for Techbuzz</h1></center>
  
</div>
<form class="myform" action="sailogin.php" method="post">
<div class="row">

  <div class="col-md-4"></div>
  <div class="l2 col-md-3">
    <label style="padding-left: 630px">
    </label>
    <br>
   <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  <input type="text" class="form-control" placeholder="username" aria-describedby="basic-addon1" name="username" required="" >
</div>
   
   <label style="padding-left: 630px"></label> 
    <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
  <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required="">
  <br>
  </div>
<br>
<div align="center">
 <a href="homepage.php"><button name="submitlogin" type="submit" class="" style="width: 200">Take me to TechBuzz</button></a> 
</div>
<br>
    <div align="center">
    <a href="saisignup.php" ><button type="button" class="" style="width: 100px">Register</button></a>
    </div>
    </div>
</div>
</form>
<?php 
  if (isset($_POST['submitlogin'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];
     
     $query="select * from userinfo WHERE username='$username' AND password='$password' ";
     $query_run = mysqli_query($con,$query);
     if (mysqli_num_rows($query_run)>0) {   	
         	$_SESSION['usrname']=$username;
         	header('location:homepage.php');
     }
     else
     {
         echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
     }
  	
   }


 ?>
</div>
</body>
</html>