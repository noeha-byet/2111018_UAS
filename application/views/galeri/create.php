<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>2111018_UAS - PhotoFolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?= base_url(); ?>assets/PhotoFolio/assets/img/favicon.png" rel="icon"> -->
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url(); ?>assets/PhotoFolio/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1 class="sitename">PhotoFolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('admin/profil') ?>" class="">Home<br></a></li>
          <li><a href="#gallery" class="active"><span>Gallery</span></a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">


    

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">


          <div class="content">
            <form action="<?= base_url('admin/galeri/upload') ?>" method="post" enctype="multipart/form-data">
                <span class="underlight text-center">Upload Image</span><br><br>
                <input type="file" class="form-control bg-dark text-white border-success" name="userfile" placeholder="place file here" required><br>

                <span>Deskripsi</span>
                <textarea class="form-control bg-dark text-white border-success" name="deskripsi" placeholder="Deskripsi gambar"></textarea><br>

                <span>Judul Foto</span>
                <input type="text" class="form-control bg-dark text-white border-success" name="title" placeholder="title foto" required><br>

                <span>Kategori</span>
                <input type="text" class="form-control bg-dark text-white border-success" name="kategori" placeholder="kategori" required><br>

                <span>Client</span>
                <input type="text" class="form-control bg-dark text-white border-success" name="client" placeholder="cient" required><br>

                <span>Tanggal Project</span>
                <input type="date" class="form-control bg-dark text-white border-success" name="tgl" placeholder="tanggal project" required><br>
                <input type="submit" class="btn btn-outline-success float-end" value="upload">
            </form>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">PhotoFolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
      <a href="<?= base_url('login/logout') ?>" onclick="return confirm('Are you sure want to logout?')"><i class="bi bi-box-arrow-left"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">2111018 BNP</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/PhotoFolio/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url(); ?>assets/PhotoFolio/assets/js/main.js"></script>

</body>

</html>