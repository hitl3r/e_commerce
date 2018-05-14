<?php
session_start();
?>

<?php

if(empty($_SESSION['cart']))
  $_SESSION['cart'] = array();


if(isset($_GET['buy'])){
  $product_id = $_GET['buy'];
  if(isset($_SESSION['cart'])){
    array_push($_SESSION['cart'],$product_id);
  }
}

print_r ($_SESSION);
?>