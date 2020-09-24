<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMART</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon2.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/new.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.1.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- <?php 
     
           
      if (isset($_COOKIE["polzovatel_id"])) {
        $link = ("/personal.php");
      } else {
        $link = ("/index.php");
        echo "<script>alert(\"Вы не авторизованы\");</script>";
      
        }
      ?> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="/index.php">SMART</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="<?php if($page == "home"){ echo 'active';} ?>"><a  href="/index.php">Главная</a></li>
              <li class="<?php if($page == "personal"){ echo 'active';} ?>"><a 
              
              <?php 
                if (isset($_COOKIE["polzovatel_id"])) {
                  $link = ("/personal.php");
                  
                } else {
                  $link = ("/login.php");
                  
                  }
                  
                ?>
              href="<?php echo $link ?>">Личный кабинет</a></li>
              <li><a href="#">О нас</a></li>
              <li><a href="#">Проекты</a></li>
              <li><a href="#">Контакты</a></li>
              
              <?php 
              include $_SERVER['DOCUMENT_ROOT'] ."/config/db.php";
                  //если cookie существует то пользователь авторизован то выводим кнопку выход если нет смотри строку 21
                  if (isset($_COOKIE["polzovatel_id"])) {

                        $sql = "SELECT * FROM users WHERE id=" . $_COOKIE["polzovatel_id"];
                        $result = $conn->query($sql);
                        $polzovatel = mysqli_fetch_assoc($result);
                        //header("location:/");

                          ?>

                              <a class="login" href="exit.php?exit=<?php echo $_COOKIE["polzovatel_id"] ?>" class="ml-3" name="exit"><strong><?php echo $polzovatel["login"]; ?> <img style="width: 30px; height: 30px " src="/assets/img/exit.png"></strong></a>

                          <?php
                  }else {
                    ?>
                      <!-- если нет то вход -->
                  
                      <a class="logout" href="/login.php" class="btn btn-outline-success ml-2">ВОЙТИ <span></span> </a>
                  
                    <?php

                  }
                  ?>
              <!-- <li><a href="/login.php">ВОЙТИ</a></li> -->
            </ul>

          </nav><!-- .nav-menu -->
         
        </div>
             <?php 

                if (isset($_COOKIE["polzovatel_id"])) {

                $sql = "SELECT * FROM users WHERE id='" . $_COOKIE["polzovatel_id"] . "' AND `verified` = '1'";
                $result = $conn->query($sql);
                    // var_dump($result);
                    // die();
                if ($result -> num_rows == 0) {
                  ?>
                  <div>
                    <a class="Alert" href="/register_email.php" type="button">Вам не подтвердили совою почту</a>

                  </div>

                  <?php

                }

                }
            ?>        
      </div>

    </div>
  </header><!-- End Header -->

  