<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "orders";
?>

<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php"; ?>

    
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-8">
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
                      Статус
                      </th>

                    </thead>
                    
                    <?php
                        $sql = "SELECT * FROM orders";
                        $result = $conn->query($sql);   
                        while ($row = mysqli_fetch_assoc($result)) 
                        { 
                          ?>
                          <tbody>
                          <td style="width: 30px;">
                            <?php echo $row['user_id'] ?>
                          </td>
                          <td style="width: 50px;">
                          <?php
                              $sql_user = "SELECT * FROM `users` WHERE `id` =" . $row['user_id'];
                              $result_user = $conn->query($sql_user);  
                              $row_user = mysqli_fetch_assoc($result_user);
                           ?> 
                          <?php echo $row_user["login"] ?>
                          </td>
                          <td style="width: 50px;">
                          <?php echo $row_user["phone"] ?>
                          </td>
                          <td style="width: 1px;">
                          
                          <?php echo $row['status'];?>
                          </td>
                          </tbody>
                          <thead class=" text-primary">


                      <th>
                      Наименование товара
                      </th>
                      <th>
                      Количество товара
                      </th>
                      <th>
                      Статус
                      </th>
                      </thead>                          
                          <?php
                                $basket = json_decode($row['products'], true);
                                for ($i=0; $i < count($basket['basket']); $i++)
                                {
                                  $sql_basket = "SELECT * FROM `products` WHERE `id` =" . $basket['basket'][$i]['product_id'];
                                  $result_basket = $conn->query($sql_basket);  
                                  $row_basket = mysqli_fetch_assoc($result_basket);
                          ?>

                          <tbody>
                          <td style="width: 1px;">
                          <?php echo $row_basket["title"]?>
                          </td>
                          <td style="width: 1px;">
                          
                          <?php echo $basket['basket'][$i]['count'];?>
                          </td>
                          
                          </tbody>
                                <?php
                                
                              }
                              
                              if ($row['status'] == "новый") {
                                  ?>
                                  <td>
                                  <?php
                                  echo $row['user_id'];
                                  
                                  ?>
                                    <a href="status.php?id=<?php echo $row['user_id'] ?>" name="status"  type="button" class="btn float-right">СФОРМИРОВАН</a>
                                  </td>  
                                  <?php
                                } else {
                                  ?>
                                  <td>
                                  <a name="status"  type="button" class="btn float-right">ОТПРАВЛЕН</a>
                                  </td>
                                  <?php
                                }
                                ?>                          
                          
                          
 
                          
                          </tbody> 
                          <?php
                        }
                        
                            ?>
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
