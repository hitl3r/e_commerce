<?php 
$submit='';
if(isset($_POST['submit']))
{
  $submit=$_POST['submit'];
  include "dbconfig/config.php";
 
  $name1=$_POST['name1'];
  $company=$_POST['company'];
  $category=$_POST['category'];
  $model=$_POST['model'];
  $price=$_POST['price'];
  $stock=$_POST['stock'];
  $specs=$_POST['specs'];


  $filename = $_FILES['filetoupload']['name'];
  $filetmp = $_FILES['filetoupload']['tmp_name'];
  $filesize = $_FILES['filetoupload']['size'];
  $file_basename =basename($_FILES['filetoupload']['name']);

$dir = "upload/";
$final_dir=$dir.$file_basename;

move_uploaded_file($filetmp,$final_dir);



$query = "INSERT INTO `adminproduct`(`productid`, `productname`, `idno`, `cno`, `productdescription`, `unitprice`, `stock`, `img_name`, `img_path`) VALUES ('$name1','1','$category','$specs','$price','$stock','$file_basename','$final_dir')";


   //  $query="insert into adminproduct('') values('$name1','1','$category','$specs','$price','$stock','$file_basename','$final_dir')";
      $query_run = mysqli_query($con,$query);

    if ($query_run) 
    {
    echo '<script type="text/javascript"> alert("product is added.......success") </script>';
     }
     else{
    echo '<script type="text/javascript"> alert("!Error") </script>';
     }


   
  }


 ?>