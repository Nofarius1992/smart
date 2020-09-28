<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "orders";
// include $_SERVER['DOCUMENT_ROOT'] ."/modules/services/order-vr.php";

$sql = "SELECT * FROM `orders_3d` WHERE `id` = '" . $_GET['id'] . "' AND `user_id` = '" . $_GET['user_id'] . "' ORDER BY `create_at` DESC";
// var_dump ($sql);
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
?>

<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php"; ?>

    
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                        <div class="card-body">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="/admin/modules/orders.php">Заказы</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Детали</li>
                                  </ol>
                                </nav>
                                 <!-- --------------  --> 
                                 <div class="container-fluid" id="form-service" style="padding-top: 10px; background-color: #fff; width: 1300px;">
                                        <form method="POST">
                                          <div class="row">
                                            <div id="form-text" class="col">
                                              <h3 class="text-center text-dark h3">Параметры заказа</h3>
                                              <div class="form-group">
                                                <label for="model">Имя пользователя</label>
                                                <h5 class="text-dark-h3" > 
                                                <?php 
                                                  $sql_ser_ur = "SELECT * FROM `users` WHERE `id` = '" . $row['user_id'] . "' ";
                                                  $result_ser_ur = $conn->query($sql_ser_ur);   
                                                  $row_ser_ur = mysqli_fetch_assoc($result_ser_ur);
                                                  echo $row_ser_ur['first_name'];
                                                  echo " ";
                                                  echo $row_ser_ur['second_name']; 
                                                            
                                                  ?>

                                                </h5>
                                                  <!-- <input name="model" class="form-control" id="model"> -->
                                                </div>
                                              <div class="form-group">
                                                <label for="model">ID Заказа</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['id'] ?></h5>
                                                  <!-- <input name="model" class="form-control" id="model"> -->
                                                </div>
                                              <div class="form-group">
                                                <label for="model">Наименование модели</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['model'] ?></h5>
                                                  <!-- <input name="model" class="form-control" id="model"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="description">Описание и дополнительно пояснение</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['description'] ?></h5>
                                                  <!-- <input name="description" class="form-control" id="description"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="document">Адрес доставки</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['address'] ?></h5>
                                                  <!-- <input type="file" name="document" class="form-control-file" id="document"> -->
                                                </div>
                                            </div>

                                            <div id="form-text" class="col">
                                              <h3 class="text-center text-dark h3">Параметры работы</h3>
                                              <div class="form-group">
                                                <label for="size_model">Размеры модели</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['size_model'] ?></h5>
                                                  <!-- <input name="size_model" class="form-control" id="size_model"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="scale">Масштаб</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['scale'] ?></h5>
                                                  <!-- <input name="scale" class="form-control" id="scale"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="accuracy">Точность</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['accuracy'] ?></h5>
                                                  <!-- <input name="accuracy" class="form-control" id="accuracy"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="material">Материал изготовления</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['material'] ?></h5>
                                                  <!-- <input name="material" class="form-control" id="material"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="platform">Платформа</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['platform'] ?></h5>
                                                  <!-- <input name="platform" class="form-control" id="platform"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="packaging">Упаковка</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['packaging'] ?></h5>
                                                  <!-- <input name="packaging" class="form-control" id="packaging"> -->
                                                </div>
                                            </div>


                                            <div id="form-text" class="col">
                                              <h3 class="text-center text-dark h3">Дополнительные требования</h3>
                                              <div id="other">
                                              <div class="form-group">
                                                <label for="modeles">Модели</label>
                                                <h5 class="text-dark-h3" > 
                                                  <a href="download_file.php?name_file=<?php echo $row['file_modeles'] ?>"><?php echo $row['file_modeles'] ?></a>
                                                </h5>
                                                  <!-- <input type="file" name="modeles" class="form-control-file" id="modeles"> -->
                                                </div>
                                                <div class="form-group">
                                                <label for="document">Документы</label>
                                                <h5 class="text-dark-h3" > <?php echo $row['file_modeles'] ?></h5>
                                                  <!-- <input type="file" name="document" class="form-control-file" id="document"> -->
                                                </div>

                                                </div>
                                              </div>
                                                
                                            </div>
                                          </div><!-- /.row -->

                                          
                                        </form>

                                      </div>                  
 <!-- --------------  --> 
                        </div>
            </div>
          </div>
      </div>
  </div>
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
