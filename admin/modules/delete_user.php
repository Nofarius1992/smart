<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";

if (isset($_GET["id"])){
    $sql = "DELETE FROM `users` WHERE `users`.`id` = '" . $_GET["id"] . "'";

    $result = $conn->query($sql);
	echo "<script>alert(\"Пользователь удален\");</script>";
    echo "<meta http-equiv='refresh' content='0; url=http://smart.local/admin/modules/users.php'>";
}
?>