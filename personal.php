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
        </header>
        
          <div id="block">
            <table class="block-1 table table-striped "> 
              <thead>
                <h4></h4>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">ТЕХНОЛОГИЯ</th>
                  <th scope="col">ОБОРУДОВАНИЕ</th>
                  <th scope="col">СТАТУС</th>
                  <th scope="col">ДЕТАЛИ</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $sql = "SELECT * FROM `orders_vr` WHERE `user_id` = '" . $_COOKIE['polzovatel_id'] . "' ";
              $result = $conn->query($sql);   
              // var_dump($sql);
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="m-3" style="line-height:50px">
                  <th >
                  <?php echo $row['id'] ?>
                  </th>
                  <th >
                  <?php echo $row['category_id'] ?>
                  </th>
                  <td>
                  <?php echo $row['equi'] ?>
                  </td>
                  <td><?php echo $row['status']?></td>

                  <td><a href="/services/service-vr.php?category_id=<?php echo $row['category_id'] ?>">смотреть</a></td>
                </tr>
                <?php
                      }

                      ?>
              </tbody>
            </table> 
            <div class="block-2">
            <div class="col-12">

                <div class="container">
                    <div>
                    <form method="POST" action="modules/basket/order.php">
                        <div class="row form-group">
                            <label class=" col text-center text-success" for="exampleFormControlTextarea1">АДРЕСС</label>
                            <textarea type="text" class="form-control" name="user_address" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                <!--Section: Contact v.1-->
                            <section class="section pb-5">

 
                              <!--Grid column-->
                              <div id="map_gog" class="col-lg-7">

                                <!--Google map-->
                                <div class="map_gog">
                                <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1997.9087879954866!2d30.31537391617396!3d59.95024746812409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696316b2c56c281%3A0xaad51434f45064b1!2z0J_QtdGC0YDQvtCz0YDQsNC00YHQutC40Lkg0YAt0L0sINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCDQoNC-0YHRgdC40Y8sIDE5NzEwMQ!5e0!3m2!1sru!2sus!4v1600980729857!5m2!1sru!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                                </div>
                                
                        </div>
            </div>
            
          
          </div>
 
          </div>
          </div>

      </div>
    </section><!-- End Portfolio Section -->


    

    <!-- ======= Contact Section ======= -->
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

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php 
  include 'parts/footer.php';
 ?>