<?php 
	
	session_start();
	
	if (isset($_SESSION['ID'])) 
	{
		$id = $_SESSION['ID'];
		$name = $_SESSION['name'];
		$price = $_SESSION['price'];
		$quantity = $_SESSION['quantity'];

		setcookie($id."[ID]", $id, time()+6000);
		setcookie($id."[name]", $name, time()+6000);
		setcookie($id."[price]", $price, time()+6000);
		setcookie($id."[quantity]", $quantity, time()+6000);
	}

	header("Location: shoppingcart.php");
?>