<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";


var_dump("TEST");

if (isset($_GET["id"])){
    $sql = "DELETE FROM `products` WHERE `products`.`id` = '" . $_GET["id"] . "'";

    $result = $conn->query($sql);
header("location:./products.php");
}
?>