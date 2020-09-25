<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";

$page = "products";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER

			// $prod_id = $_GET["id"];	
			// setcookie("prod_id", $prod_id, time() + 3000);
    //если не существует post submit, (кнопка не нажата)

if(isset($_GET['save'])){
		//перенапровление на нужную страницу
		// header("location:/");
var_dump("обнавление");?><br> <?php
	 $sql = "UPDATE `products` SET `title` = '" . $_GET["title"] . "', 
	 								`disc_short` = '" . $_GET["disc_short"] . "', 
	 								`disc_long` = '" . $_GET["disc_long"] . "', 
	 								`category_id` = '" . $_GET["category_id"] . "', 
	 								`image` = '" . $_GET["image"] . "' WHERE `products`.`id` = '". $_COOKIE["prod_id"] ."'";?><br> <?php
	

	$result = $conn->query($sql);
header("location:products.php");




}else{//иначе(если нажата кнопка "сохранить")
// var_dump("Иначе");?><br> <?php
include $_SERVER['DOCUMENT_ROOT']."/config/config.php";


			$sql = "SELECT * FROM `products` WHERE `id` = '". $prod_id ."'";
			// var_dump($sql);
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			$result = $conn->query($sql);



}

?>
  <div class="content">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb col-3">
              <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="/admin/modules/products.php">Продукт</a></li>
              <li class="breadcrumb-item active" aria-current="page">Редактировать товар</li>
            </ol>
          </nav>
    <h4 class="card-title"> Введите новые значения</h4>
		<form>
		<div class="card-body">
              
                <form method="post">
                    <div class="row">

                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>Id (disabled)</label>
                                <input type="hidden" name="prod_id" class="form-control"  value="<?php echo $row['id']; ?>">
                                <input type="text" class="form-control" disabled=""  value="<?php echo $row['id']; ?>">
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Название товара</label>
                                <input type="text" name="title" class="form-control" placeholder="Company" value="<?php echo $row['title']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Категория</label>
                                <input type="text" name="category_id" class="form-control" placeholder="Company" value="<?php echo $row['category_id']; ?>">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Короткое описание</label>
                                <textarea name="disc_short" class="form-control" ><?php echo $row['disc_short']; ?> </textarea>
                                <!-- <input type="" name="description" class="form-control" placeholder="Company" value="<?php echo $row['short_disc']; ?>"> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Длинное описание</label>
                                 <textarea name="disc_long" class="form-control" ><?php echo $row['disc_long']; ?> </textarea>
                                <!-- <input type="text" name="content" class="form-control" placeholder="Company" value="<?php echo $row['long_disc']; ?>"> -->
                            </div>
                        </div>
                    </div>
                     <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Img</label>
                                <input type="text" name="image" class="form-control" placeholder="Path img" value="<?php echo $row['image']; ?>">
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