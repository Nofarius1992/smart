<?php 
	include $_SERVER['DOCUMENT_ROOT'] ."/config/db.php";
	include $_SERVER['DOCUMENT_ROOT'] ."/config/config.php";
	include $_SERVER['DOCUMENT_ROOT'] ."/modules/telegram/send-message.php";

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
		
		
		






if (isset($_FILES)){
			// путь к папке сфайлами(на две директории выше этого скрипта)
			$path = 'files/';
			// Получаем расширение загруженного файла
			$extension = strtolower(substr(strrchr($_FILES['modeles']['name'], '.'), 1));
			// Рандомное имя фалйла из 13 символов(Нет проверки на уникальность, так что в теории, файлы могут повторятся(Хотелка: Сделать проверку на уникальность названя файлов в папке, если будет время))
			$filename = uniqid();
			// Собираем адрес файла назначения для отправки в бд
			$todb = $path  . $filename . '.' . $extension;
			// И адресс для згрузки
			$target = '../' . $path  . $filename . '.' . $extension;
			
			if (move_uploaded_file($_FILES['modeles']['tmp_name'], $target) ) {
			    echo "Файл загружен";
			} else {
			    echo "Загрузка не прошла";
			}
			
			// Получаем расширение загруженного файла
			$extension1 = strtolower(substr(strrchr($_FILES['document']['name'], '.'), 1));
			// Рандомное имя фалйла из 13 символов(Нет проверки на уникальность, так что в теории, файлы могут повторятся(Хотелка: Сделать проверку на уникальность названя файлов в папке, если будет время))
			$filename1 = uniqid();
			// Собираем адрес файла назначения для отправки в бд
			$todb1 = $path  . $filename1 . '.' . $extension1;
			// И адресс для згрузки
			$target1 = '../' . $path  . $filename1 . '.' . $extension1;
			
			if (move_uploaded_file($_FILES['document']['tmp_name'], $target1) ) {
			    echo "Файл загружен";
			    $sql = "INSERT INTO orders_3d (category_id, user_id, model, description, size_model, scale, accuracy, material, platform, packaging, address, file_modeles, file_document) VALUES ( '" . $_GET['category_id'] . "' , '" . $_COOKIE['polzovatel_id'] . "' , '" . $_POST['model'] . "' , '" . $_POST['description'] . "' , '" . $_POST['size_model'] . "' , '" . $_POST['scale'] . "' , '" . $_POST['accuracy'] . "' , '" . $_POST['material'] . "' , '" . $_POST['platform'] . "' , '" . $_POST['packaging'] . "', '" . $_POST['address'] . "', '" . $todb . "', '" . $todb1 . "')";
			} else {
			    echo "Загрузка не прошла";
			}

		} else {
			// если файл не выбран, то продолжить без файлаы
			echo "файла нет";

		}












		if (mysqli_query($conn, $sql)) {
			echo "<script>alert(\"ЗАКАЗ ОФОРМЛЕН\"); location.href='/personal.php';</script>";
			message_to_telegram_tol('Новый заказ 3D!');
			message_to_telegram_dim('Новый заказ 3D!');
     	} else {
     		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     	}
	}
 ?>
 