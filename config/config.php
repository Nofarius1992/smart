<?php
$prod_id = $_GET["id"];	
setcookie("prod_id", $prod_id, time() + 3000);

// токен бота
define('TELEGRAM_TOKEN', '1198889285:AAGZ43IMaN_lfKcxRqLiB0cWgoK40W58AV4');
  
// внутренний айди
define('TELEGRAM_CHATID', '231485044');


?>