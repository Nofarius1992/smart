<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";
$sql = "SELECT * FROM `orders_3d` ORDER BY `orders_3d`.`create_at` DESC";
$result = $conn->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
if (isset($_GET["id"])){
    
    
    
        echo "<pre>";
        var_dump($_GET["id"]);

        

if ($row['status'] == "Новый") {
        $sql = "UPDATE `orders_3d` SET `status`='Сформирован' WHERE `id` = '". $_GET["id"] ."'";
        var_dump($sql);
        $result = $conn->query($sql);
        var_dump($result);
        header("location:./orders.php");

}

if ($row['status']=="Сформирован") {
        $sql = "UPDATE `orders_3d` SET `status`='Отправлен клиенту' WHERE `id` = '". $_GET["id"] ."'";
        var_dump($sql);
        $result = $conn->query($sql);
        var_dump($result);
        header("location:./orders.php");

}
}

}
?>
