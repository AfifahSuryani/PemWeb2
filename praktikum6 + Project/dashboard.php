<?php
//include_once('top.php');
//include_once('menu.php');
?>        

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Puskesmas Harapan Sehati</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Logis/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Logis/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Logis/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Puskemas Harapan Sehati</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="pasien.php">Pasien</a></li>
          <li><a href="paramedik.php">Paramedik</a></li>
          <li><a href="unit_kerja.php">Unit Layanan</a></li>
          
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Kesehatanmu adalah Prioritas Utama Kami</h2>
          <p data-aos="fade-up" data-aos-delay="100">Kesehatan adalah sebuah anugerah tuhan yang paling mahal. Maka dari itu puskesmas kami akan selalu berusaha untuk memberikan pelayanan maksimal untuk memprioritaskan kesehatan kembali pulih.</p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="ZIP code or CitY">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                <p>Klien</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                <p>Layanan</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                <p>Tenaga Kerja</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
              <h4 class="title">Fasilitas Kesehatan</h4>
              <p class="description">Terdapat 7 layanan kesehatan dan 1 laboratorium yang saat ini kami miliki. Dan akan bertambah untuk kedepannya nanti agar para pasien kami dapat dengan mudah dirawat.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
            <div>
              <h4 class="title">Jam Layanan</h4>
              <p class="description">Jam pelayanan kami akan selalu buka pada setiap hari Senin - Sabtu dengan jam mulai sekitar jam 08.00 - 15.00. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">Tenaga Kerja</h4>
              <p class="description">Tenaga kerja puskesmas kami merupakan tenaga kerja yang sudah berpengalaman diberbagai bidang kesehatan dan lulusan yang baik, sehingga anda tidak perlu khawatir dan merasa nyaman dengan para tenaga medis kami.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Tentang Kami</h3>
            <p>
              Puskemas kami sudah berdiri selama 10 tahun dan telah membantu ribuan pasien untuk kesembuhan mereka. Kami selalu memprioritaskan kenyamanan dan kesehatan pasien kami dengan perawatan yang hati-hati agar pasien merasa tenang dan tidak khawatir.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
               <i class="fa-solid fa-heart"></i>
                <div>
                  <h5>Kepercayaan Kami</h5>
                  <p>Visi dan Misi kami yang selalu mengutamakan kesehatan pasien kami adalah bukti nyata kerja keras kami</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="fa-solid fa-truck-medical"></i>
                <div>
                  <h5>Fasilitas Kendaraan</h5>
                  <p>Kami siap mengantar dan menjemput pasien yang membutuhkan tenaga kami.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="index.html" class="logo d-flex align-items-center">
        <span>Puskesmas Harapan Sehati</span>
      </a>
      <p>Percayakan masalah kesehatan anda pada kami, anda nyaman kami senang. Jangan lupa untuk cek sosmed kami untuk pemberitahuan berkala tentang layanan dan fasilitas yang kami miliki.</p>
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p>
        Jl. Raya Bojong baru <br>
        Pemda Cibinong, No.51<br>
        Kabupaten Bogor <br><br>
        <strong>Telefon:</strong> +62 812 90119 667<br>
        <strong>Email:</strong> PuskesmasHarapanSehati@gmail.com<br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Afifah Suryani 2024</span></strong>. All Rights Reserved
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="Logis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Logis/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="Logis/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="Logis/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="Logis/assets/vendor/aos/aos.js"></script>
<script src="Logis/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="Logis/assets/js/main.js"></script>

 <?php
//include_once('bottom.php');
?>     
               