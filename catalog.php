<?php 
	
	session_start();

	if (isset($_POST['item'])) 
	{
		$_SESSION['quantity'] = $_POST['quantity'];
		$id = $_POST['item'];
		$_SESSION['ID'] = $id;

		switch ($_SESSION['ID']) 
		{
			case "S001":
				$_SESSION['name'] = "無盡之刃";
				$_SESSION['price'] = 3600;
				break;
			
			case "S002":
				$_SESSION['name'] = "幻影之舞";
				$_SESSION['price'] = 2550;
				break;

			case "S003":
				$_SESSION['name'] = "殞落王者之劍";
				$_SESSION['price'] = 3400;
				break;
		}

		header("Location: savecart.php");
	}
?>