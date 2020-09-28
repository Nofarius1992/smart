<?php 
	 include $_SERVER['DOCUMENT_ROOT'] ."/config/db.php";
	  if (isset($_POST["admin_param"])) {
        $sql =  "UPDATE `users` SET `admin_param` = '" . $_POST['admin_param'] . "' WHERE `users` . `id` = " . $_POST['orderId'];
        if($conn->query($sql)) {
            header("Location: /admin/modules/users.php");    
        } else {
            echo "Ошибка";
        }
    }
    
 ?>