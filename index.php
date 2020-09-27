<?php 
  include 'parts/header.php';
  $page = "home";
 ?>


  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel"> 
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          

          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/6.jpg)">
            <div class="carousel-container">
              <div class="container-fluid text-center">
                <h2 class="animate__animated animate__fadeInDown mb-5">3D ПЕЧАТЬ</h2>
                <div class="row">
                  <div class="col-md-5">
                    <h5 style="color: white">Печать пластиком</h5>
                    <p class="animate__animated animate__fadeInUp text-justify">Технология 3D-печати пластиком давно и успешно освоена специализированной компанией Easy3Dprint. Мастера используют различные виды сырья для создания макетов по эскизам клиентов. Недорогой материал и освоенная технология воссоздания трехмерных изделий позволяет печатать недорогие прототипы.</p>
                    <h5 style="color: white">Печать металлом</h5>
                    <p class="text-justify">3D-печать металлом становится все более популярной. И это не удивляет: каждый металлический материал для печати предлагает уникальное сочетание практических и эстетических свойств для того, чтобы удовлетворить требования предъявляемые к различным продуктам.</p>
                  </div>
                  <div class="col-md-7">
                    <div class="embed-responsive embed-responsive-16by9">
                    <video autoplay controls  loop>
                        <source src="/assets/img/3D print.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div> 
                  </div>
                </div>

                <a href="/services/service-3d.php?category_id=1" class="mt-5 btn-get-started scrollto animate__animated animate__fadeInUp">Хочу</a>

              </div><!-- /.container -->
            </div> <!-- /.carousel-container -->
          </div> <!-- ./carousel-item -->

           <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/7.png)">
            <div class="carousel-container">
              <div class="container-fluid text-center">
                <h2 class="animate__animated animate__fadeInDown mb-5">ВИРТУАЛЬНАЯ РЕАЛЬНОСТЬ</h2>
                <div class="row">
                  <div class="col-md-5">
                    <p class="animate__animated animate__fadeInUp text-justify">Созданный техническими средствами мир, передаваемый человеку через его ощущения: зрение, слух, осязание и другие. Виртуальная реальность имитирует как воздействие, так и реакции на воздействие. Для создания убедительного комплекса ощущений реальности компьютерный синтез свойств и реакций виртуальной реальности производится в реальном времени. <br><br>
                    Объекты виртуальной реальности обычно ведут себя близко к поведению аналогичных объектов материальной реальности. Пользователь может воздействовать на эти объекты в согласии с реальными законами физики (гравитация, свойства воды, столкновение с предметами, отражение и т. п.). Однако, часто в развлекательных целях пользователям виртуальных миров позволяется больше, чем возможно в реальной жизни (например: летать, создавать любые предметы и т. п.)
                    </p>
                  </div>
                  <div class="col-md-7">
                    <div class="embed-responsive embed-responsive-16by9">
                    <video autoplay controls  loop>
                        <source src="/assets/img/3dreality.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div> 
                  </div>
                </div>
                <a href="/services/service-vr.php?category_id=2" class="mt-5 btn-get-started scrollto animate__animated animate__fadeInUp">Хочу</a>

              </div><!-- /.container -->
            </div> <!-- /.carousel-container -->
          </div> <!-- ./carousel-item -->
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/8.jpg)">
            <div class="carousel-container">
              <div class="container-fluid text-center">
                <h2 class="animate__animated animate__fadeInDown mb-5">СМЕШАННАЯ РЕАЛЬНОСТЬ</h2>
                <div class="row">
                  <div class="col-md-5">
                    <p class="animate__animated animate__fadeInUp text-justify">Смешанная реальность (англ. Mixed reality, MR), иногда называемая как гибридная реальность (охватывает дополненную реальность и дополненную виртуальность), является следствием объединения реального и виртуальных миров для созданий новых окружений и визуализаций, где физический и цифровой объекты сосуществуют и взаимодействуют в реальном времени. Существует не только в реальном или виртуальном виде, а как смесь реальной и виртуальной реальности, охватывает дополненную реальность и дополненную виртуальность. <br><br>
                    
                     Смешанная реальность — это следующий этап развития в области взаимодействия между человеком, компьютером и средой, она дает возможности, о которых можно было только мечтать. Это стало возможным благодаря развитию систем компьютерного зрения, графической вычислительной мощности, технологий для дисплеев и систем ввода.
                    
                    </p>
                  </div>
                  <div class="col-md-7">
                    <div class="embed-responsive embed-responsive-16by9">
                      <video autoplay controls  loop>
                        <source src="/assets/img/MX.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div> 
                  </div>
                </div>

                <a href="/services/service-vr.php?category_id=3" class="mt-5 btn-get-started scrollto animate__animated animate__fadeInUp">Хочу</a>

              </div><!-- /.container -->
            </div> <!-- /.carousel-container -->
          </div> <!-- ./carousel-item -->
        </div>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

  

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>О нас</h3>
          <p>Компания SMART предоставляет услуги в сфере 3D печати и моделировании, виртуальной и дополненной реальности.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">3D Print</a></h2>
              <p>
                Печатаем из любого материала, создаём макеты согласно пожеланиям заказчика или предлагаем уже готовые решения, даём в аренду оборудование для печати. 
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Virtual Reality</a></h2>
              <p>
                Виртуальная реальность 
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/DR.jpeg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Augmented Reality</a></h2>
              <p>
                Дополненная реальность
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Проекты</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
         <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">3D</li>
            <li data-filter=".filter-card">VR</li>
            <li data-filter=".filter-web">AR</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 1</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 3</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 2</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 2</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 2</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 3</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 1</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 3</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 1</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Section -->


    

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Команда</h3>
          <p>Профессионалы своего дела, предоставляют Вам услуги, которые описаны выше.</p>
        </div>

        <div class="row">

          <div class="col">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Дмитрий Волчков</h4>
                  <span>Team Lider</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Прожога Анатолий</h4>
                  <span>Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Контакты</h3>
          <p>Свяжитесь с нами в любое время, отзывчивые менеджеры ответят быстро и не заставят Вас ждать.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Адресс</h3>
              <address>Россия, Санкт-Петербург, ул.Пестеля 11</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Телефон</h3>
              <p><a href="tel:+155895548855">+7 961 9996660</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Почта</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


<?php 
  include 'parts/footer.php';
 ?>