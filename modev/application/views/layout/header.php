<?php error_reporting(0) ?>

<head>

  <title>RumahTinggal.id - Marketplace Desain Rumah</title>



  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <!--  <meta id="myViewport" name="viewport" content="width=1350"> -->

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

  <meta name="description" content="Marketplace Desain Rumah">

  <meta name="author" content="RumahTinggal.id">

  <meta name="keywords" content="Rumah Tinggal, Marketplace Desain, Rumah Idaman, Desain Rumah" />

  <meta name="p:domain_verify" content="a478a4fe4608130f42f6d2c6994fe52c" />

  <!--<meta name="google-signin-client_id" content="234359626392-3l47fue645tj7m1svcb2565fq1e1o6u6.apps.googleusercontent.com">-->
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <link rel="shortcut icon" href="<?= base_url('assets/img/icon/rumah.png') ?>" type="image/png">

  <link rel="icon" href="<?= base_url('assets/img/icon/rumah.png') ?>" type="image/png">



  <link rel="stylesheet" href="<?= base_url('assets/css/linearicons.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/ion-rangeslider/ion.rangeSlider.min.css') ?>" />

  <link rel="stylesheet" href="<?= base_url('assets/css/tootik.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/fonticons.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/css/bootsnav.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/slick/slick.css') ?>" />

  <link rel="stylesheet" href="<?= base_url('assets/vendor/slick/slick-theme.css') ?>" />

  <link rel="stylesheet" href="<?= base_url('assets/css/js-rapstar.css') ?>">

  <!-- Owl Carousel -->

  <link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/dist/assets/owl.carousel.min.css') ?>" />

  <link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/dist/assets/owl.theme.default.min.css') ?>" />

  <!-- Toastr -->

  <link rel="stylesheet" href="<?= base_url('assets/vendor/toastr/build/toastr.min.css') ?>" />

  <!-- Hover -->

  <link rel="stylesheet" href="<?= base_url('assets/vendor/hover/css/hover-min.css') ?>" />

  <!-- Select2 -->

  <link rel="stylesheet" href="<?= base_url('assets/vendor/select2/css/select2.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/select2/css/select2-bootstrap.min.css') ?>">

  <!-- Gallery Zoom -->

  <link rel="stylesheet" href="<?= base_url('assets/vendor/gallery-zoom/dist/zoomy.css') ?>" />

  <link rel="stylesheet" href="<?= base_url('assets/css/icheck.min_all.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/flickity/flickity.css') ?>">



  <!--Theme custom css -->

  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
  <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>


  <!--<script src="

http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>-->

  <style>
    @font-face {

      font-family: Circular;

      src: url(<?= base_url('assets/fonts/CircularStd-Light.woff') ?>);

      src: url(<?= base_url('assets/fonts/CircularStd-Light.otf') ?>) format(opentype);

      src: url(<?= base_url('assets/fonts/CircularStd-Light.ttf') ?>) format(truetype);

      font-weight: 300;

      font-style: normal;

      font-display: swap;

    }



    @font-face {

      font-family: Circular;

      src: url(<?= base_url('assets/fonts/CircularStd-Book.woff') ?>);

      src: url(<?= base_url('assets/fonts/CircularStd-Book.otf') ?>) format(opentype);

      font-weight: normal;

      font-style: normal;

      font-display: swap;

    }



    @font-face {

      font-family: Circular;

      src: url(<?= base_url('assets/fonts/CircularStd-Medium.woff') ?>);

      src: url(<?= base_url('assets/fonts/CircularStd-Medium.otf') ?>) format(opentype);

      font-weight: 500;

      font-style: normal;

      font-display: swap;

    }



    @font-face {

      font-family: Circular;

      src: url(<?= base_url('assets/fonts/CircularStd-Bold.woff') ?>);

      src: url(<?= base_url('assets/fonts/CircularStd-Bold.otf') ?>) format(opentype);

      font-weight: 700;

      font-style: normal;

      font-display: swap;

    }



    p span strong {
      color: #000;
    }



    .card-title a:hover {
      color: #05bcd2 !important;
    }



    .round {
      border-radius: 3px;
    }



    .tag {
      background: none !important;
    }



    .tag:hover {
      background: #026CB6 !important;
    }



    .i-heart {
      margin-right: 6px;
    }



    .i-heart:hover {
      color: #ff0101;
    }



    .fa-share-alt:hover {
      color: #05bcd2;
    }



    .i-eye {

      margin-right: 6px;

      font-size: 24px;

    }



    .con {

      font-size: 13px !important;

      font-weight: 600;

    }



    .i-con {

      font-size: 25px !important;

      color: #5E95C7;

      margin: 20px 20px 20px 0px;

    }



    .icon-sub {

      width: 25.8px;

      height: 25.8px
    }



    .product-grid .product-statistic .social a:hover i {
      color: #fff;
    }



    img {
      pointer-events: none;
    }
  </style>



  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/jstars.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/swiper.min.js') ?>"></script>

  <script src="<?= base_url('assets/vendor/flickity/flickity.pkgd.js') ?>"></script>

  <script src="<?= base_url('assets/vendor/select2/js/select2.min.js') ?>"></script>

  <script src="<?= base_url('assets/vendor/owl-carousel/dist/owl.carousel.min.js') ?>"></script>

  <script src="<?= base_url('assets/vendor/infinite-scroll/src/infinite-ajax-scroll.min.js') ?>"></script>



  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-27PSBSLG79"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'G-27PSBSLG79');
  </script>

</head>