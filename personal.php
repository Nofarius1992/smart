<?php 
  include 'parts/header.php';
  $page = "personal";
 ?>
<div id="block-main">
<!-- --------------  --> 

<header class="section-header">
            <h3 class="section-title">ЛИЧНЫЙ КАБИНЕТ</h3>
            <?php 
              $sql = "SELECT * FROM `users` WHERE `id` = '" . $_COOKIE['polzovatel_id'] . "' ";
                $result = $conn->query($sql);   
                // var_dump($sql);
                $row = mysqli_fetch_assoc($result);
                ?><h4 class="h4"><?php echo $row['first_name']; echo " "; echo $row['second_name']; ?> </h4> 
</header>
<!-- --------------  --> 
<h5>ТЕХНОЛОГИИ ВИЗУАЛИЗАЦИИ</h5>
<div class="block-table">
      <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table table-striped"> 
          <thead>
            <tr>
              <th class="text-center" scope="col">ID</th>
              <th class="text-center" scope="col">ТЕХНОЛОГИЯ</th>
              <th class="text-center" scope="col">ОБОРУДОВАНИЕ</th>
              <th class="text-center" scope="col">СТАТУС</th>
              <th class="text-center" scope="col">ДАТА РЕГИСТРАЦИИ</th>
              <th class="text-center" scope="col">ДЕТАЛИ</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql = "SELECT * FROM `orders_vr` WHERE `user_id` = '" . $_COOKIE['polzovatel_id'] . "'ORDER BY `orders_vr`.`data_create` DESC";
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
              $sql_ser_vr = "SELECT * FROM `categories` WHERE `category_id` = '" . $row['category_id'] . "' ";
              $result_ser_vr = $conn->query($sql_ser_vr);   
              $row_ser_vr = mysqli_fetch_assoc($result_ser_vr);
              echo $row_ser_vr['title']; 
                        
              ?>
              </th>
              <td>
              <?php echo $row['equi'] ?>
              </td>
              <td><?php echo $row['status']?></td>
              <td><?php echo $row['data_create']?></td>
              <td><a href="/services/order-details-vr.php?id=<?php echo $row['id'] ?>">смотреть</a></td>
            </tr>
            <?php
                  }

                  ?>
          </tbody>
        </table> 
      </div>
</div>
<h5>ТЕХНОЛОГИИ ПРОИЗВОДСТВА</h5>
    <div class="block-table">
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-striped"> 
            <thead>
                <tr>
                  <th class="text-center" scope="col">ID</th>
                  <th class="text-center" scope="col">ТЕХНОЛОГИЯ</th>
                  <th class="text-center" scope="col">МАТЕРИАЛ</th>
                  <th class="text-center"  scope="col">МОДЕЛЬ</th>
                  <th class="text-center"  scope="col">СТАТУС</th>
                  <th class="text-center"  scope="col">ДАТА РЕГИСТРАЦИИ</th>
                  <th class="text-center"  scope="col">ДЕТАЛИ</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT * FROM `orders_3D` WHERE `user_id` = '" . $_COOKIE['polzovatel_id'] . "' ORDER BY `orders_3d`.`create_at` DESC";
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
                  <td><?php echo $row['status']?></td>
                  <td><?php echo $row['create_at']?></td>
                  <td><a href="/services/order-details-3d.php?id=<?php echo $row['id'] ?>">смотреть</a></td>
                </tr>
                <?php
                      }

                      ?>
                </tbody>

            </table> 
          </div>
    </div>

</div>

   
 <?php 
  include 'parts/footer.php';
 ?>