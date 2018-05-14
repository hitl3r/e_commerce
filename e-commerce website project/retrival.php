<?php
session_start();
require 'dbconfig/config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<br><br><br><br>
<?php
$sql= mysqli_query($con ,"select * from lolipop where cno=2");
while($row = mysqli_fetch_array($sql)){
	?>
	<img src="<?php echo $row['img_path'] ?>" style="width: 320px " >
	

<?php
}
?>

</body>
</html>






	

