<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
    <head>
	  <title>signup page</title>
      

<link rel="stylesheet" type="text/css" href="css/styleb.css">

    </head>
    <style type="text/css">
  body{
    background-image: url("images/line_glare_light_color_background_47046_1920x1080.jpg");
  }
</style>



<body style="background-color:">
<div id="main-rapper">
        
<div class="l1"
>  <h1 align="center">Signup for Techbuzz</h1>
</div>
<form class="myform asd" action="saisignup.php" method="post">
<div class="row">

  <div class="col-md-4"></div>
  <div class="l2 col-md-3">
   <br>
    <label style="padding-left: 630px"></label>
    <br>
   <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="name" required="" >
</div>
  <br>
    <label style="padding-left: 630px">
   </label>
    <br>
  <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required="" >
</div>
   <br>
    <label style="padding-left: 630px"> </label>
    <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
  <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" required="">
</div>
   <br>
   <label style="padding-left: 630px"></label> 
    <div class="input-group" align="center">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
  <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required="">
  <br>
  </div>
<br>
<div align="center">
  <br>
  <button name="submitbutton" type="submit" class="" style="width: 105px " > Register</button>
</div>
<br>

    <h3 class="p1" style="padding-left: 630px">Already a user ?</h3>
    <div align="center">
    <a href="sailogin.php" ><button type="button" class="" style="width: 60px">Login</button></a>
    </div>
    </div>
</div>
</form>

<?php
if (isset($_POST['submitbutton'])) {
   // echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
      $query="select * from userinfo WHERE username='$username'";
        $query_run = mysqli_query($con,$query);
            if (mysqli_num_rows($query_run)>0) {
                  echo '<script type="text/javascript"> alert("username already exists try another username") </script>';
                  }
            else{
             $query ="insert into userinfo values('$name','$username','$email','$password')";
                        $query_run = mysqli_query($con,$query);
                 if ($query_run) {
                   echo '<script type="text/javascript"> alert("user registered.. go to login page") </script>';
                  
                         }
                  else{
                        echo '<script type="text/javascript"> alert("!Error") </script>';
                  }
            }

}       
?>
  </div>
</body>
</html>