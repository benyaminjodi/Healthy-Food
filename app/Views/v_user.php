<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Healthy Food </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('front-end') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front-end') ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    #header {
        background-color: #fff;
        padding: 10px 0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-bottom: 1px solid #ddd;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    #navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
    }

    #navbar li {
        margin-right: 20px;
    }

    #navbar a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 16px;
    }

    #navbar a.active,
    #navbar a:hover {
        color: #3498db;
    }

    #navbar a.home-link {
        color: #2ecc71;
        /* Warna hijau */
    }


    .user-profile {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        max-width: 400px;
        width: 100%;
        text-align: center;
        margin-top: 80px;
        /* Adjusted to make space for the fixed header */
    }

    .user-profile img {
        width: 100%;
        height: auto;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .user-details {
        padding: 20px;
    }

    .user-details h2 {
        margin-bottom: 10px;
    }

    .user-details p {
        color: #555;
        margin-bottom: 15px;
    }

    .social-media {
        display: flex;
        justify-content: center;
        margin-bottom: 15px;
    }

    .social-media a {
        margin: 0 10px;
        color: #3498db;
        text-decoration: none;
        font-size: 20px;
    }

    .user-points {
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">

            <h2 class="logo me-auto"><a href="<?= base_url('/') ?>">Healthy Food</a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="<?= base_url('/') ?>" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="<?= base_url('/food') ?>">Food</a></li>
                    <li><a href="<?= base_url('/order') ?>">Order</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url('/profil') ?>" class="get-started-btn">Profil</a>

        </div>
    </header><!-- End Header -->





    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">

            <h2 class="logo me-auto"><a href="<?= base_url('/') ?>">Healthy Food</a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="<?= base_url('/') ?>" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="<?= base_url('/food') ?>">Food</a></li>
                    <li><a href="<?= base_url('/order') ?>">Order</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url('/profil') ?>" class="get-started-btn">Profil</a>

        </div>
    </header><!-- End Header -->

    <div class="user-profile">
        <img src="path/to/user-image.jpg" alt="User Photo">
        <div class="user-details">
            <h2>Nama Pengguna</h2>
            <p>Email: user@example.com</p>
            <div class="social-media">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-dribbble"></a>
            </div>
            <p>Deskripsi pengguna yang singkat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="user-points">
            <p>Poin: 1000</p>
        </div>
    </div>





    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('front-end') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('front-end') ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('front-end') ?>/assets/js/main.js"></script>

</body>

</html>