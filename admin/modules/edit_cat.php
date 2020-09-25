<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";

$page = "category";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER

			// $prod_id = $_GET["id"];	
			// setcookie("prod_id", $prod_id, time() + 3000);
    //если не существует post submit, (кнопка не нажата)

if(isset($_GET['save'])){

	 $sql = "UPDATE `categories` SET `title_cat` = '" . $_GET["title"] . "', 
	 								`cat_disc` = '" . $_GET["cat_disc"] . "' WHERE `categories`.`cat_id` = '" . $_COOKIE["prod_id"] . "'";
	var_dump($sql);
      

	$result = $conn->query($sql);
header("location:category.php");




}else{//иначе(если нажата кнопка "сохранить")
// var_dump("Иначе");?><br> <?php
include $_SERVER['DOCUMENT_ROOT']."/config/config.php";


			$sql = "SELECT * FROM `categories` WHERE `cat_id` = '". $prod_id ."'";
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
      <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="/admin/modules/category.php">Категории</a></li>
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
                                <input type="hidden" name="prod_id" class="form-control"  value="<?php echo $row['cat_id']; ?>">
                                <input type="text" name="cat_id" disabled=" " class="form-control" value="<?php echo $row['cat_id']; ?>">
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Категории</label>
                                <input type="text" name="title" class="form-control" placeholder="Описание" value="<?php echo $row['title_cat']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Описание категории</label>
                                <input type="text" name="cat_disc" class="form-control" placeholder="Описание" value="<?php echo $row['cat_disc']; ?>">
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