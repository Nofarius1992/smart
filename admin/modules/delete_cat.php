<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";
var_dump("test");


if (isset($_GET["id"])){
    $sql = "DELETE FROM `categories` WHERE `categories`.`cat_id` = '" . $_GET["id"] . "'";

var_dump($sql);
    $result = $conn->query($sql);
header("location:./category.php");
}
?>