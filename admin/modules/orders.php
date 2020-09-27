<?php 
include $_SERVER['DOCUMENT_ROOT']."./config/db.php";
$page = "orders";
include $_SERVER['DOCUMENT_ROOT']."./admin/parts/header.php";
?>

   
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
<<<<<<< HEAD
                        <div class="card-body">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">

                                    <li class="breadcrumb-item active" aria-current="page">Заказы</li>
                                  </ol>
                                </nav>
                                                  <!-- --------------  --> 
                                                    <h5>ТЕХНОЛОГИИ ВИЗУАЛИЗАЦИИ</h5>
                                                    <div class="block-table">
                                                          <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                            <table class="table table-striped"> 
                                                              <thead>
                                                                <tr>
                                                                  <th class="text-center" scope="col">ID</th>
                                                                  <th class="text-center" scope="col">ПОЛЬЗОВАТЕЛЬ</th>
                                                                  <th class="text-center" scope="col">ТЕХНОЛОГИЯ</th>
                                                                  <th class="text-center" scope="col">ОБОРУДОВАНИЕ</th>
                                                                  <th class="text-center" scope="col">ДАТА РЕГИСТРАЦИИ</th>
                                                                  <th class="text-center" scope="col">ДЕТАЛИ</th>
                                                                  <th class="text-center" scope="col">СТАТУС</th>
                                                                  <th class="text-center" scope="col">ОПЦИИ</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                              <?php
                                                              $sql = "SELECT * FROM `orders_vr` ORDER BY `orders_vr`.`data_create` DESC";
                                                              $result = $conn->query($sql);   
                                                              // var_dump($sql);
                                                              while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                <tr class="m-3 text-center" style="line-height:50px">
                                                                <th >
                                                                  <?php echo $row['id'] ?>
                                                                  </th>
                                                                  <th >
                                                                  <?php 
                                                                  $sql_ser_ur = "SELECT * FROM `users` WHERE `id` = '" . $row['user_id'] . "' ";
                                                                  $result_ser_ur = $conn->query($sql_ser_ur);   
                                                                  $row_ser_ur = mysqli_fetch_assoc($result_ser_ur);
                                                                  echo $row_ser_ur['first_name'];
                                                                  echo " ";
                                                                  echo $row_ser_ur['second_name']; 
                                                                            
                                                                  ?>
                                                                  </th>
                                                                <th >
                                                                  <?php 
                                                                  $sql_ser_vr = "SELECT * FROM `categories` WHERE `category_id` = '" . $row['category_id'] . "' ";
                                                                  $result_ser_vr = $conn->query($sql_ser_vr);   
                                                                  $row_ser_vr = mysqli_fetch_assoc($result_ser_vr);
                                                                  echo $row_ser_vr['title']; 
                                                                            
                                                                  ?>
                                                                  </th>
                                                                  <td>
                                                                  <?php echo $row['equi'] ?>
                                                                  </td>
                                                                  <td><?php echo $row['data_create']?></td>
                                                                  <td><a href="../modules/order-details-vr.php?id=<?php echo $row['id'] ?>&user_id=<?php echo $row['user_id'] ?>">смотреть</a></td>
                                                                  
                                                                  <!-- <td><?php echo $row['status']?></td> -->
                                                                  
                                            <!--   -->
                                                                  <td class="col-3 text-center">
                                                                    <?php 

                                                                    if($row['status'] == 'Новый') {
                                                                      
                                                                      ?>
                                                                      <form method="POST">
                                                                          <select class="form-control" name="status">
                                                                            <option><?php echo $row['status'] ?></option>
                                                                            <option>Принят</option>
                                                                          </select>
                                                                          <input name="orderId" type="hidden" value="<?php echo $row["id"]; ?>">
                                                                          <button type="submit" class="btn btn-primary">Изменить</button>
                                                                      </form>
                                                                      <?php
                                                                      if(isset($_POST['status'])) {
                                                                        $sql = "UPDATE `orders_vr` SET `status` = '" . $_POST['status'] . "' WHERE `orders_vr`.`id` =" . $_POST["orderId"];
                                                                        if ($conn->query($sql)) {
                                                                          header("location:/admin/modules/orders.php");
                                                                        } else {
                                                                          echo 'ERROR';
                                                                        }
                                                                      }
                                                                    } else {
                                                                      ?>
                                                                      <form method="POST">
                                                                        <select class="form-control" name="status">
                                                                          <option><?php echo $row['status'] ?></option>
                                                                          <option>Новый</option>
                                                                        </select>
                                                                        <input name="orderId" type="hidden" value="<?php echo $row["id"]; ?>">
                                                                        <button type="submit" class="btn btn-primary">Изменить</button>
                                                                      </form>
                                                                      <?php 

                                                                        if(isset($_POST['status'])) {
                                                                        $sql = "UPDATE `orders_vr` SET `status` = '" . $_POST['status'] . "' WHERE `orders_vr`.`id` =" . $_POST["orderId"];
                                                                        var_dump($sql);
                                                                          if ($conn->query($sql)) {
                                                                            header("location:/admin/modules/orders.php");
                                                                          } else {
                                                                            echo 'ERROR';
                                                                          }
                                                                        }
                                                                        ?>
                                                                          </td>
                                                                          <?php
                                                                          }
                                                                          ?>
                                             <!--   -->
                                                                      <td><a href="delete_orders_vr.php?id=<?php echo $row['id'] ?>" name="del"  type="button" class="btn btn-secondary">Удалить</a></td>
                                                                </tr>
                                                                <?php
                                                                      }

                                                                      ?>
                                                              </tbody>
                                                            </table> 
                                                          </div>
                                                    </div>
                                                    <h5 Style="margin-top: 40px">ТЕХНОЛОГИИ ПРОИЗВОДСТВА</h5>
                                                        <div class="block-table">
                                                              <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                                <table class="table table-striped"> 
                                                                <thead>
                                                                    <tr>
                                                                      <th class="text-center" scope="col">ID</th>
                                                                      <th class="text-center" scope="col">ПОЛЬЗОВАТЕЛЬ</th>
                                                                      <th class="text-center" scope="col">ТЕХНОЛОГИЯ</th>
                                                                      <th class="text-center" scope="col">МАТЕРИАЛ</th>
                                                                      <th class="text-center"  scope="col">МОДЕЛЬ</th>
                                                                      <th class="text-center"  scope="col">ДАТА РЕГИСТРАЦИИ</th>
                                                                      <th class="text-center"  scope="col">ДЕТАЛИ</th>
                                                                      <th class="text-center" scope="col">СТАТУС</th>
                                                                      <th class="text-center" scope="col">ОПЦИИ</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php

                                                                    $sql = "SELECT * FROM `orders_3D` ORDER BY `orders_3d`.`create_at` DESC";
                                                                    $result = $conn->query($sql);   
                                                                    // var_dump($sql);
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                    ?>
                                                                    <tr class="m-3 text-center" style="line-height:50px">
                                                                      <th class="text-center">
                                                                      <?php echo $row['id'] ?>
                                                                      </th>
                                                                      <th >
                                                                      <?php 
                                                                        echo $row_ser_ur['first_name'];
                                                                        echo " ";
                                                                        echo $row_ser_ur['second_name']; 
                                                                                    
                                                                      ?>
                                                                      </th>
                                                                      <th >
                                                                      <?php                   
                                                                      $sql_ser_3d = "SELECT * FROM `categories` WHERE `category_id` = '" . $row['category_id'] . "' ";
                                                                      $result_ser_3d = $conn->query($sql_ser_3d);   
                                                                      $row_ser_3d = mysqli_fetch_assoc($result_ser_3d);
                                                                      echo $row_ser_3d['title']; 
                                                                      ?>
                                                                      </th>
                                                                      <td>
                                                                      <?php echo $row['material'] ?>
                                                                      </td>
                                                                      <td>
                                                                      <?php echo $row['model'] ?>
                                                                      </td>

                                                                      <td><?php echo $row['create_at']?></td>
                                                                      <td><a href="../modules/order-details-3d.php?id=<?php echo $row['id'] ?>&user_id=<?php echo $row['user_id'] ?>">смотреть</a></td>
                                                                      <td><?php echo $row['status']?></td>
                                                                      <td><a href="delete_orders_3d.php?id=<?php echo $row['id'] ?>" name="del"  type="button" class="btn btn-secondary">Удалить</a></td>
                                                                    </tr>
                                                                    <?php
                                                                          }

                                                                          ?>
                                                                    </tbody>

                                                                </table> 
                                                              </div>
                                                        </div>

                                                    </div>





                          
                        </div>
            </div>
          </div>
      </div>
  </div>
  <!--   Core JS Files   -->
<?php include $_SERVER['DOCUMENT_ROOT']."./admin/parts/footer.php"; ?>
