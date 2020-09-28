<?php

$host = 'localhost'; // адрес сервера 
$database = 'cinema'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$connect = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($connect));
//получить id из пост запроса
$id_user = $_POST['id_user'];
//получить всех клиентов по id    
$query ="SELECT * FROM users WHERE id = '$id_user'";
$result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect)); 
$row = mysqli_fetch_assoc($result);  

if($row['admin_param'] == 0){
	$sql =  "UPDATE users SET admin = '1' WHERE id = $id_user";
	$connect->query($sql);
}else{
	$sql =  "UPDATE users SET admin = '0' WHERE id = $id_user";
	$connect->query($sql);
}
//подключить файл вывода всех пользователей
include $_SERVER['DOCUMENT_ROOT']."/admin/parts/spisok.php";

?>






