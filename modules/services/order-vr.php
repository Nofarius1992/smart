<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/config/db.php";
	// include $_SERVER['DOCUMENT_ROOT'] ."/modules/telegram/sand-message.php";

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
		$sql = "INSERT INTO `orders_vr` (`user_id`, `equi`, `description`, `use_type`, `quantity`, `photo`, `balls`, `clothes`, `eat`, `quest`, `category_id`, `address` ) VALUES ('" . $_COOKIE['polzovatel_id'] . "' , '" . $_POST['equi'] . "' , '" . $_POST['description'] . "' , '" . $_POST['use_type'] . "' , '" . $_POST['quantity'] . "' , '" . $_POST['photo'] . "' , '" . $_POST['balls'] . "' , '" . $_POST['clothes'] . "', '" . $_POST['eat'] . "', '" . $_POST['quest'] . "', '" . $_GET['category_id'] . "', '" . $_POST['address'] . "')";
		if (mysqli_query($conn, $sql)) {


            echo "<script>alert(\"ЗАКАЗ ОФОРМЛЕН\"); location.href='/personal.php';</script>";
     	} else {
     		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     	}
	}
 ?>

