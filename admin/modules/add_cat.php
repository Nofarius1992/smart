    <?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";
$page = "category";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER
?>
<div class="content">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb col-3">
          <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/modules/category.php">Категории</a></li>
          <li class="breadcrumb-item active" aria-current="page">Создать категорию</li>
        </ol>
      </nav>
    <h4 class="card-title"> Введите данные новой категории</h4>
        <form>
         <div class="form-row">
            <div class="col-3">
              <label for="inputPassword5">Название категории</label>
              <input type="text" name="title_cat" class="form-control" > <br>
            </div>
            <div class="col-3">
              <label for="inputPassword5">Описание категории</label>
              <input type="text" name="cat_disc" class="form-control">
            </div>

           </div>
        <div >
          <button name="save" class="btn btn-secondary">SAVE</button>
        </div>     
    </form>  
</div> 





<?php
if (isset($_GET["save"])){
$sql = "INSERT INTO `categories` (`title_cat`, `cat_disc`) VALUES ('" . $_GET["title_cat"] . "', '" . $_GET["cat_disc"] . "');";
$result = $conn->query($sql);
header("location:category.php");

} else {
?>
<div class="content">
<div class=" col-6 alert alert-primary h6 text-center" role="alert">Введите значения
  
</div>
</div>
<?php

}
?>


<?php
// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>