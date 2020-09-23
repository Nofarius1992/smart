<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//кодировка базы данных
mysqli_set_charset($conn, "utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


$kol = 6;
if (isset($_POST["count"])){

  var_dump("TEST_SH");

  // $count_basket==$_POST["count"];

}

?>
