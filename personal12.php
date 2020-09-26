<?php 
  include 'parts/header.php';
  $page = "personal";
 ?>


    <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div id="login_block">
          <header class="section-header">
            <h3 class="section-title">ЛИЧНЫЙ КАБИНЕТ</h3>
            <?php 
              $sql = "SELECT * FROM `users` WHERE `id` = '" . $_COOKIE['polzovatel_id'] . "' ";
                $result = $conn->query($sql);   
                // var_dump($sql);
                $row = mysqli_fetch_assoc($result);
                ?><h4 class="h4"><?php echo $row['first_name']; echo " "; echo $row['second_name']; ?> </h4> 
         </header>

        <div id="table-1">

                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                          <table class="block-1 table table-striped"> 
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
                            $sql = "SELECT * FROM `orders_vr` WHERE `user_id` = '" . $_COOKIE['polzovatel_id'] . "' ";
                            $result = $conn->query($sql);   
                            // var_dump($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                              <tr class="m-3 text-center" style="line-height:50px">
                              <th >
                                <?php echo $row['category_id'] ?>
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

            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="block-1 table table-striped "> 
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
              
              $sql = "SELECT * FROM `orders_3D` WHERE `user_id` = '" . $_COOKIE['polzovatel_id'] . "' ";
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
           


           
        </div><!--  -->
    </div>
</section><!-- End Portfolio Section -->

    

    <!-- ======= Contact Section ======= -->
    <div>
    <section id="contact" class="section-bg row">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Как нас найти</h3>
          <p>Выберете удобный для Вас способ связи с нами</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

 
      </div>
    </section><!-- End Contact Section -->

</div>

 <?php 
  include 'parts/footer.php';
 ?>