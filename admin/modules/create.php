<?php 
include $_SERVER['DOCUMENT_ROOT']."/config/db.php";
$page = "products";
// HEATER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
// HEATER
?>


  <div class="content">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/modules/products.php">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Создать товар</li>
        </ol>
      </nav>

    <h4 class="card-title"> Введите данные товара</h4>
    <form>
    <?php
//   var_dump($_GET["save"]);&& $_GET["save"] != ""
if (isset($_GET["saved"])){


$sql = "INSERT INTO `products` (`title`, `disc_short`, `disc_long`, `category_id`, `image`) VALUES ('" . $_GET["title"] . "', '" . $_GET["disc_short"] . "', '" . $_GET["disc_long"] . "', '" . $_GET["category_id"] . "','" . $_GET["image"] . "');";

$result = $conn->query($sql);
header("location: products.php");
var_dump($sql);

} else {
            ?>
                <div class="content">
                  <div class=" col-11 alert alert-primary h6 text-center" role="alert">ПОЛЯ ДОЛЖНЫ БЫТЬ ЗАПОЛНЕНЫ
                    
                  </div>
                </div>
            <?php
          }
          ?> 
     <div class="form-row">
        <div class="col-3">
          <label for="inputPassword5">Название товара</label>
          <input type="text" name="title" class="form-control" > <br>
        </div>
        <div class="col-3">
          <label for="inputPassword5">Короткое описание</label>
          <input type="text" name="disc_short" class="form-control">
        </div>
        <div class="col-5">
          <label for="inputPassword5">Полное описание</label>
          <input type="text" name="disc_long" class="form-control">
        </div>
            <select class="custom-select col-3 mb-3" id="inputGroupSelect02" name="category_id">
              <option value="0" selected>Категория не выбрана</option>
              
              <?php 
                $sql = "SELECT * FROM `categories`";
                $result = $conn->query($sql);
                while ($row = mysqli_fetch_assoc($result)) { 
            
                  echo "<option value='" . $row['cat_id'] . "'>" . $row['title_cat'] . " </option>";
                } 
                ?>
            </select>
              <div class="input-group ">
                <div class="custom-file col-3">
                  <input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                  <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
              </div>
                <div >
                  <button  name="saved" class="btn btn-secondary">SAVE</button>
                </div> 
            </div>
          </div>               
  
    </form>

</div>
<?php
// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>
