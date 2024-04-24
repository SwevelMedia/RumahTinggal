<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-signin-client_id" content="619189282883-54euurh55b0od41supra7n7eoksj2jbu.apps.googleusercontent.com">
    <link rel="stylesheet" href="<?php echo base_url('assets/demo/css/styles.css'); ?>" />
    <title><?= $title; ?></title>
    <link rel="icon" href="<?php echo base_url('assets/demo/img/'); ?>favicon.png" type="image/gif">
    <link rel="stylesheet" href="<?php echo base_url('assets/demo/css/bootstrap.css'); ?>" />
    <!--<script src="https://accounts.google.com/gsi/client" async defer></script>-->
    <!-- Script untuk Google Sign-In API -->
    <!-- Skrip untuk Google Sign-In API -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script src="<?php echo base_url('assets/demo/js/fontawesome.js'); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/jstars.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/js-rapstar.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/infinite-scroll/src/infinite-ajax-scroll.min.js') ?>"></script>

    <!-- Sertakan pustaka Pagination.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.6.0/pagination.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.6.0/pagination.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>


    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- ion range slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />

    <link rel="stylesheet" href="<?= base_url('assets/vendor/gallery-zoom/dist/zoomy.css') ?>" />
    <script src="<?= base_url('assets/vendor/gallery-zoom/dist/zoomy.js') ?>"></script>

    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Ion range slider JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script> -->

    <script src="<?= base_url('assets/js/js.cookie.min.js') ?>"></script>
    <link href="<?= base_url('assets/dflip/css/dflip.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/dflip/css/themify-icons.min.css') ?>" rel="stylesheet" type="text/css">



    <style>
        * {
            font-family: "Inter", sans-serif;
        }
    </style>

</head>

<body>
    <?php
    // Load common data directly in the layout file
    $data['jumlah_rumah'] = $this->DesainModel->getJumlahRumah()->row()->jumlah_rumah;
    $data['google_client_id'] = '619189282883-54euurh55b0od41supra7n7eoksj2jbu.apps.googleusercontent.com';
    ?>
    <?php $this->load->view('demo/layout/navbar') ?>
    <?php $this->load->view('demo/masuk', $data) ?>
    <?php $this->load->view('demo/daftar', $data) ?>
    <?php $this->load->view($halaman) ?>

    <?php $this->load->view('demo/layout/footer') ?>
    <script src="<?php echo base_url('assets/demo/js/bootstrap.bundle.js'); ?>"></script>
    <script src="<?php echo base_url('assets/demo/js/script.js'); ?>"></script>

</body>

</html>