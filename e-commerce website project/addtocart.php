

<?php
	session_start();
	if(isset($_GET['id']) & !empty($_GET['id'])){
			$items = $_GET['id'];
			$_SESSION['cart'] = $items;
			header('location: cart1.php?status=success');
	}else{
		header('location: cart1.php?status=failed');
	}
?>
