<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/config/db.php";

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
		
		$sql = "INSERT INTO orders_3d (category_id, user_id, model, description, size_model, scale, accuracy, material, platform, packaging, address) VALUES ( '" . $_GET['category_id'] . "' , '" . $_COOKIE['polzovatel_id'] . "' , '" . $_POST['model'] . "' , '" . $_POST['description'] . "' , '" . $_POST['size_model'] . "' , '" . $_POST['scale'] . "' , '" . $_POST['accuracy'] . "' , '" . $_POST['material'] . "' , '" . $_POST['platform'] . "' , '" . $_POST['packaging'] . "', '" . $_POST['address'] . "')";
		if (mysqli_query($conn, $sql)) {
			echo "<script>alert(\"ЗАКАЗ ОФОРМЛЕН\"); location.href='/personal.php';</script>";
     	} else {
     		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     	}
	}
 ?>
 