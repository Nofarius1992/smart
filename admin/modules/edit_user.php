<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "users";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER

			// $prod_id = $_GET["id"];	
			// setcookie("prod_id", $prod_id, time() + 3000);
    //если не существует post submit, (кнопка не нажата)


if(isset($_GET['save'])){

	 $sql = "UPDATE `users` SET `login`='" . $_GET["login"] . "',`phone`='" . $_GET["phone"] . "',`email`='" . $_GET["email"] . "',`first_name`='" . $_GET["phone"] . "',`second_name`='" . $_GET["phone"] . "' WHERE `users`.`id` = ' " . $_GET["id"] . "'";

// var_dump($sql);
//     die();

	$result = $conn->query($sql);
header("location:users.php");




}else{//иначе(если нажата кнопка "сохранить")
// var_dump("Иначе");?><br> <?php
include $_SERVER['DOCUMENT_ROOT']."/config/config.php";


			$sql = "SELECT * FROM `users` WHERE `id` = '". $_GET["id"] ."'";
			// var_dump($sql);
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
            // var_dump($row);
			$result = $conn->query($sql);



}

?>
  <div class="content">
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb col-3">
      <li class="breadcrumb-item"><a href="/admin/modules/users.php">Пользователи</a></li>
      <li class="breadcrumb-item active" aria-current="page">Редактировать категорию</li>
    </ol>
  </nav>
    <h4 class="card-title"> Введите новые значения</h4>
		<form>
		            <div class="card-body">
              
                <form method="post">
                    <div class="row">

                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>Id (не редактируемый)</label>
                                <input type="hidden" name="id" class="form-control"  value="<?php echo $row['id']; ?>">
                                <input type="text" name="id" disabled=" " class="form-control" value="<?php echo $row['id']; ?>">
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>ЛОГИН</label>
                                <input type="text" name="login" class="form-control" placeholder="Описание" value="<?php echo $row['login']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>ИМЯ</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Описание"  value="<?php echo $row['first_name']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>ФАМИЛИЯ</label>
                                <input type="text" name="second_name" class="form-control" placeholder="Описание" value="<?php echo $row['second_name']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>ТЕЛЕФОН</label>
                                <input type="text" name="phone" class="form-control" placeholder="Описание" value="<?php echo $row['phone']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>ПОЧТА</label>
                                <input type="text" name="email" class="form-control" placeholder="Описание" value="<?php echo $row['email']; ?>">
                            </div>
                        </div>
                    </div>
					  <div >
					    <button name="save" class="btn btn-secondary">SAVE</button>
					    <!-- <button name="cancel" class="btn btn-secondary">CANCEL</button> -->
					    <div class="clearfix"></div>	    
					  </div>
				  </form>
            </div>
		</form>

</div>
<?php

// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>