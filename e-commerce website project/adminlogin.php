<?php
require 'dbconfig/config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>admin login page</title>
  <link rel="stylesheet" href="css/styleb.css">


	 <style type="text/css">
  body{
    background-image: url("images/creative-design-graphics-and-photography-hd-wallpaper-63-1920x1080.jpg");
  }
</style>
	
</head>
<body style="background-color:">
<div id="main-rapper">
        
<div class="l2">
	<center><h1>Admin Login for Techbuzz</h1></center>
  
</div>
<form class="myform" action="adminlogin.php" method="post">
<div class="row">

  <div class="col-md-4"></div>
  <div class="l2 col-md-3">
    <label style="padding-left: 630px">
    </label>
    <br>
   <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required="" >
</div>
   <br>
   <label style="padding-left: 630px"></label> 
    <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
  <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required="">
  <br>
  </div>
<br>
<br>
<div align="center">
 <a href="homepageadmin.php"><button name="submitlogin" type="submit" class="" style="width: 100px" >login</button></a> 
</div>
<br>
<br>
    <div align="center">
    <a href="adminsignup.php" ><button type="button" class="" style="width: 100px">Register</button></a>
    </div>
    </div>
</div>
</form>
<?php 
  if (isset($_POST['submitlogin'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];
     
     $query="select * from admintable WHERE username='$username' AND password='$password' ";
     $query_run = mysqli_query($con,$query);
     if (mysqli_num_rows($query_run)>0) {     
          $_SESSION['username']=$username;
          header('location:admin homepage.php');
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