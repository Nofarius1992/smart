<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";

if (isset($_GET["id"])){
    
    
    
        echo "<pre>";
        var_dump($_GET["id"]);

        


        $sql = "UPDATE `orders` SET `status`='Отправлен клиенту' WHERE `user_id` = '". $_GET["id"] ."'";
        var_dump($sql);
        $result = $conn->query($sql);
        var_dump($result);
        header("location:./orders.php");

}
?>