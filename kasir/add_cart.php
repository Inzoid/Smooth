<?php
	session_start();

	//check if product is already in the cart
	if(!in_array($_GET['id_masakan'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['id_masakan']);
		$_SESSION['message'] = 'Product added to cart';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
	}

	header('location: menu.php');
?>