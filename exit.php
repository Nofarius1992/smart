<?php

$exit=0;
if (isset($_GET["exit"])) {
setcookie("polzovatel_id", "", 0, "/");
echo "<script>alert(\"Вы не авторизованы!\");</script>";
echo "<meta http-equiv='refresh' content='0' url=' . $_SERVER['DOCUMENT_ROOT'] . '>";

}
?>