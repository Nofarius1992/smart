<?php

$exit=0;
if (isset($_GET["exit"])) {
setcookie("polzovatel_id", "", 0, "/");
echo "<script>alert(\"Вы вышли. До свидания!\");</script>";
echo "<meta http-equiv='refresh' content='0; url=http://smart.local/'>";

}
?>