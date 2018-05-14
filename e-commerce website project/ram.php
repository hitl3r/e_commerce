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
<body align="center">
	<p align="right"><a href="logo.php"><button type="button" class="btn btn-success">logout</button></a>
</p>
<h1>Item has been added to your cart.... </h1><br><br><br>
<a href="mycartq.php"><button type="button" class="btn btn-success">Visit my cart</button></a>
<a href="homepage.php"><button type="button" class="btn btn-success">Go to homepage</button></a>

</body>
</html>