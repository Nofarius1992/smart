<?php
$prod_id = $_GET["id"];	
setcookie("prod_id", $prod_id, time() + 3000);

// токен бота
define('TELEGRAM_TOKEN', '1050758180:AAENIK9jfNhKKdh4vqQdHAgvdKuMEX69jEY');
  
// внутренний айди
define('TELEGRAM_CHATID_TOL', '405951976');
define('TELEGRAM_CHATID_DIM', '231485044');


?>