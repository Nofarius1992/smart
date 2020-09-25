<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "orders";
?>

<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php"; ?>

    
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Заказы</li>
                        </ol>
                      </nav>
                  <div >
                  <!-- <a href="create.php" type="button" class="btn btn-secondary">Создать товар</a>  
                  <a href="add_cat.php" type="button" class="btn btn-secondary">Создать категорию</a>   -->
                  </div>
                <div class="table" >
                <div class="form-row">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Имя пользователя
                      </th>
                      <th>
                        Телефон
                      </th>
                       <th>
                        Наименование товара
                      </th>
                      <th>
                        Количество
                      </th>
                      <th >
                        Опции
                      </th>
                    </thead>
                    <tbody>
                    <td style="width: 30px;">
                      <?php echo "User Id" ?>
                    </td>
                    <td style="width: 50px;">
                    <?php echo "LOGIN" ?>
                    </td>
                    <td style="width: 50px;">
                    <?php echo "Phone" ?>
                    </td>
                    <td style="width: 50px;">
                    <?php echo "PRODUCT" ?>
                    </td>
                    <td style="width: 50px;">
                    <?php echo "COUNT" ?>
                    </td>
                    <td style="width: 50px;">
                    <?php echo "Выполнен" ?>
                    </td>
                    </tbody> 
                  </table>
                                       
                </div>
              </div>
              </div>
            </div>
          </div>
    </div>
  </div>
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
