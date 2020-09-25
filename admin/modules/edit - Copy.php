<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";
$page = "products";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER


if (isset($_GET["id"])){
			$prod_id = $_GET["id"];	
			setcookie("prod_id", $prod_id, time() + 3000);
		//перенапровление на нужную страницу
		// header("location:/");

}

// var_dump($prod_id);
$sql = "SELECT * FROM `products` WHERE `id` = '". $_COOKIE["prod_id"] ."'";
// var_dump($sql);
$result = $conn->query($sql); 
$row = mysqli_fetch_assoc($result)
?>
  <div class="content">
    <h4 class="card-title"> Введите новые значения</h4>
		<form>
		 <div class="form-row">
		    <div class="col-3">
				<label for="inputPassword5">Название товара</label><br>
		      	<input type="text" name="title" class="form-control">
				<label for="inputPassword5">Ранее:</label>
				<label for="inputPassword5"><?php echo $row['title'] ?></label>		      	
		    </div>
		    <div class="col-3">
				<label for="inputPassword5">Короткое описание</label><br>
		     	<input type="text" name="disc_short" class="form-control">
				<label for="inputPassword5">Ранее:</label>
				<label for="inputPassword5"><?php echo $row['disc_short'] ?></label>		     	
		    </div>
    		    <div class="col-3">
				<label for="inputPassword5">Полное описание</label><br>
		     	<input type="text" name="disc_long" class="form-control">
				<label for="inputPassword5">Ранее:</label>
				<label for="inputPassword5"><?php echo $row['disc_long'] ?></label>

		    </div>
		        <div class="col-1">
				<label for="inputPassword5">Категория</label><br>
		     	<input type="text" name="category_id" class="form-control">
				<label for="inputPassword5">Ранее:</label>
				<label for="inputPassword5"><?php echo $row['category_id'] ?></label>		     	
		    </div>
		  </div>
	  <div >
	    <button href="products.php" name="save" class="btn btn-secondary">SAVE</button>
	    <button href="products.php" name="cancel" class="btn btn-secondary">CANCEL</button>	    
	  </div>	
	
		</form>

</div>
<?php
if (isset($_GET["save"])){

// var_dump("TEST");
$sql = "UPDATE `products` SET `title` = '" . $_GET["title"] . "', `disc_short` = '" . $_GET["disc_short"] . "',`disc_long` = '" . $_GET["disc_long"] . "', `category_id` = '" . $_GET["category_id"] . "' WHERE `products`.`id` = '". $_COOKIE["prod_id"] ."';";
$result = $conn->query($sql);
header("location:./products.php");
}

if (isset($_GET["cancel"])){
header("location:products.php");
}

// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>