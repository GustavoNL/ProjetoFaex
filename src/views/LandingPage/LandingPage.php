<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Students</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/PFaex/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/PFaex/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/PFaex/vendor/aos/aos.css" rel="stylesheet">
  <link href="/PFaex/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/PFaex/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/PFaex/public/css/landingPage.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/PFaex/" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Students</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services">Alunos</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/PFaex/register">Cadastrar</a>
      <a class="btn-getstarted" href="/PFaex/login">Entrar</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Cadastro e gestao de alunos</h1>
            <div class="d-flex">
              <a href="/PFaex/register" class="btn-get-started">Começar agora</a>
             </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="/PFaex/public/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    
    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre nos!!</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
            A STUDENTS surgiu em 2015 com o objetivo de simplificar e modernizar a gestão de alunos para escolas, cursos e instituições de ensino. Com uma plataforma intuitiva e eficiente, oferecemos soluções completas para o cadastro, acompanhamento de desempenho e comunicação entre professores, alunos e responsáveis.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Cadastro de alunos.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Gestao de alunos.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Facil de usar</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p> Nossa missão é proporcionar uma gestão educacional mais ágil, transparente e conectada, permitindo que educadores foquem no que realmente importa: o aprendizado. Desde a nossa fundação, temos ajudado milhares de instituições a transformarem sua administração, tornando-a mais eficiente e organizada. </p>
            <a href="#" class="read-more"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Alunos</h2>
        <a href="/PFaex/panel/students">Ver todos <span class="total-student"></span>Alunos</a>
      </div><!-- End Section Title -->
      
      <div class="container">
        
        <div class="row gy-4">
          <?php foreach ($student as $key => $students): ?>
          
          <div class="col-xl-3 col-md-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link"><?= $students['name'] ?></a></h4>
              <p><?= $students['course'] ?> </p>
            </div>
          </div>
          <?php endforeach; ?>

          </div>
        </div>

    </section><!-- /Services Section -->
    

   </main>
   <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Sobre nos</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Serviços</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Termos de serviço</a></li>
          </ul>
        </div>


        <div class="col-lg-4 col-md-12">
          <h4>Contato</h4>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""><i class="bi bi-envelope"></i></a>
          </div>
        </div>

      </div>
    </div>

  </footer>

  <
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/PFaex/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/PFaex/vendor/php-email-form/validate.js"></script>
  <script src="/PFaex/vendor/aos/aos.js"></script>
  <script src="/PFaex/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/PFaex/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/PFaex/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/PFaex/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/PFaex/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="/PFaex/public/js/landingPage.js"></script>

</body>

</html>