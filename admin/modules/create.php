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
          <li class="breadcrumb-item"><a href="/admin/modules/services.php">Услуги</a></li>
          <li class="breadcrumb-item active" aria-current="page">Создать услугу</li>
        </ol>
      </nav>

    <h4 class="card-title">Введите данные услуги</h4>

    <form method="POST">
    <?php 
    if (isset($_POST['saved']) && isset($_POST['title']) && isset($_POST['description']) && $_POST['title'] !="" && $_POST['description'] != "") {
        // выбрать всех, где id = id из куков
        $sql = "INSERT INTO `services` (`title`, `description`) VALUES ('" . $_POST['title'] . "', '" . $_POST['description'] . "')";
        $result = mysqli_query($conn, $sql);
        echo "<script>alert(\"Услуга добавлена\");</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://smart.local/admin/modules/services.php'>";
            }
     ?>
     <div class="form-row">
        <div class="col">
          <label for="inputPassword5">Название услуги</label>
          <input type="text" name="title" class="form-control" > <br>
        </div>
        <div class="col">
          <label for="inputPassword5">Описание услуги</label>
          <input type="text" name="description" class="form-control">
        </div>
        




 
        <div>
          <button  name="saved" class="btn btn-secondary">SAVE</button>
        </div> 
    </div>             

    </form>

</div>
<?php
// FOOTER
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php";
// FOOTER


?>
