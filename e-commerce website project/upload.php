
<?php
if(isset($_POST['submit']))
{
include "config.php";

$filename = $_FILES['filetoupload']['name'];
$filetmp = $_FILES['filetoupload']['tmp_name'];
$filesize = $_FILES['filetoupload']['size'];
$file_basename =basename($_FILES['filetoupload']['name']);




$dir = "upload/";
$final_dir=$dir.$file_basename;

move_uploaded_file($filetmp,$final_dir);
}



$query=mysqli_query($con,"INSERT INTO imge (img_name,img_path) values ('$file_basename','$final_dir')");


if($query)
{
 echo '<script type="text/javascript"> alert("Image uploaded") </script>';
}
else
 echo '<script type="text/javascript"> alert("Not an image") </script>';

$sql= mysqli_query($con ,"select * from imge");
while($row = mysqli_fetch_array($sql)){
	?>
	<img src="<?php echo $row['img_path'] ?>">
	<?php

}

?>

