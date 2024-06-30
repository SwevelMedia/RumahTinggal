<link href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet" />
<link href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css" />
<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
<script src="https://rawgit.com/kenwheeler/slick/master/slick/slick.js"></script>

<style>
.vjs-has-started .vjs-control-bar {
    visibility: hidden !important;
}

.video-js .vjs-big-play-button {

    height: 50px;
    width: 50px;

    top: 155px;
    left: 310px;

    border-radius: 50px;

    margin: 0 auto;
}

.slick-prev,
.slick-next {
    top: 38%;
}

video:focus {
    outline: none;
}

#carousel-mo .slick-prev,
#carousel-mo .slick-next {
    display: none !important;
}

#gallery .flickity-page-dots {
    bottom: 10px;
}

.slick-dots .slick-active {
    background: #026cb6;
    color: #fff;
}

#header.scrolled {
    background-color: #fff !important;
    -webkit-transition: background-color 1000ms linear;
    -ms-transition: background-color 1000ms linear;
    transition: background-color 1000ms linear;
    position: fixed;
}

.barr {
    color: #026cb6 !important;
}

.slick-dots li {
    background: #fff;
    border-radius: 22px;
    width: 25px;
    height: 25px;
    line-height: 25px;
    color: #026CB6;
}

.slick-dots li:hover {
    background: #026CB6;
    color: #fff;
}

.slider-item {
    height: 200px;
    font-size: 72px;
    text-align: center;
    line-height: 200px;
}

/* Slider arrows */
.slick-arrow {
    z-index: 9;
}

.product-grid .product-image .pic-1 {
    border-radius: 3px 3px 0 0;
}

.product-grid .product-image .pic-2 {
    border-radius: 3px 3px 0 0;
}

#form {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#form fieldset {
    background: none;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.finish {
    text-align: center
}

#form fieldset:not(:first-of-type) {
    display: none
}

#form .previous-step,
.next-step {
    width: 100px;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

.form,
.previous-step {
    background: #616161;
}

.form,
.next-step {
    background: #026cb6;
}

#form .previous-step:hover,
#form .previous-step:focus {
    background-color: #000000
}

#form .next-step:hover,
#form .next-step:focus {
    background-color: #026cb6
}

.text {
    color: #026cb6;
    font-weight: normal
}

#progressbar {
    margin-bottom: -10px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #026cb6
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 20%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #step1:before {
    content: "1"
}

#progressbar #step2:before {
    content: "2"
}

#progressbar #step3:before {
    content: "3"
}

#progressbar #step4:before {
    content: "4"
}

#progressbar #step5:before {
    content: "5"
}

#progressbar li:before {
    width: 30px;
    height: 30px;
    line-height: 27px;
    display: block;
    font-size: 15px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 14px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #026cb6
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #026cb6
}

.fielmo {
    width: 200px;
    /*margin-bottom: 20px;*/
    margin: 0 auto;
}

.list-produk {
    /*height: 267px;*/
    /*scrollbar-width: none;*/
    -ms-overflow-style: none;
}

#pop_up_website .modal-dialog {
    max-width: 640px;
    margin: 80px auto;
}

#pop_up_website .close {
    color: #fff;
}

.slide-brand {
    width: 165px;
    height: 95px;
    border-radius: 10px;
    cursor: pointer;
    margin: 0 7px;
}

.banner-slider {
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 340px;
}

.product-slider {
    left: 18.5%;
    max-width: 80%;
    margin-top: 16px;
}

@media only screen and (min-width: 1440px) {

    /*.list-produk-promo .grid, .list-produk-favorit .grid { width: 255px !important; }
        
        .list-produk-popular .grid { width: 255.2px !important; }
      
        .list-produk .grid { width: 245px !important; }
      
        .list-artikel .grid { width: 375px !important; }
      
        .product-grid .suplier { width: 70% !important; }
      
        #btn-lihat-koleksi { left: 64.5% !important; }
      
        .slide-brand { width: 175px !important; }
      
        .sec-category { max-width: 17% !important; }
      
        .sec-product {
            max-width: 100% !important;
            flex: 0 0 100% !important;
        }*/
    .list-produk-popular .grid {
        width: 19.7% !important;
        height: 355px !important;
        display: inline-flex;
        margin: 0 auto;
        justify-content: left;
    }

    .list-produk-popular .product-grid {
        margin: 0;
        padding: 4px;
        width: 100%;
    }

    .list-produk-popular .grid .product-grid .product-image {
        position: relative;
        overflow: hidden;
        height: 225px;
    }
}



@media only screen and (min-width: 1600px) {
    .list-produk-popular .grid {
        width: 19.7% !important;
        height: 355px !important;
        display: inline-flex;
        margin: 0 auto;
        justify-content: left;
    }

    .list-produk-popular .product-grid {
        margin: 0;
        padding: 4px;
        width: 100%;
    }

    .list-produk-popular .grid .product-grid .product-image {
        position: relative;
        overflow: hidden;
        height: 225px;
    }
}

@media only screen and (min-width: 1900px) {
    .list-produk-popular .grid {
        height: 392px !important;
        display: inline-flex;
        width: 19.8% !important;
    }

    .list-produk-popular .grid .product-grid .product-image {
        position: relative;
        overflow: hidden;
        height: 260px !important;
    }


    .katalog-produk .sec-product .list-produk {
        height: 354px;
    }

    .katalog-produk .sec-product .list-produk .grid {
        width: 20% !important;
    }

    .katalog-produk .product-grid .product-image {
        height: 245px;
    }
}

.list-produk-promo .grid,
.list-produk-favorit .grid {
    height: 395px;
}

.list-produk-popular .grid {
    width: 19.7%;
    height: 320px;
    display: inline-flex;
}

.list-produk-popular .product-grid {
    margin: 0;
    padding: 4px;
}

.product-grid .jstars {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.katalog-produk .form-control:focus {
    box-shadow: none;
}

.katalog-produk .form-control::placeholder {
    font-size: 0.95rem;
    color: #aaa;
}

.katalog-produk .result {
    /*background: #fff;*/
    padding: 15px;
}

.list-category {
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.list-category.merk {
    margin-top: 15px;
}

.list-category .header {
    padding: 11px 14px;
    background: #026CB6;
}

.list-category h5 {
    color: #fff;
    font-weight: 400;
    font-size: 15px;
}

.list-category h5::before {
    font-family: FontAwesome;
    content: "\f00b";
    padding-right: 9px;
    font-size: 14px;
}

.list-category.merk h5::before {
    content: "\f02c";
}

.list-category .icon {
    position: relative;
    height: 22px;
    width: 22px;
    margin-right: 10px;
    margin-top: -3px;
}

.list-category .body li {
    font-size: 15px;
    padding: 7px 12px;
    color: #000;
}

.list-category.merk .list-group {
    padding: 7px 0;
}

.list-category.merk .list-group-item {
    border: none;
    padding: 3px 12px;
}

.list-category .body li:not(:last-child) {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.list-category .body li:hover {
    color: #fff;
    background: #026cb6;
    cursor: pointer;
    -webkit-transition-property: background;
    -webkit-transition-duration: 0.2s;
    -webkit-transition-timing-function: ease-out;
    transition-property: background;
    transition-duration: 0.2s;
    transition-timing-function: ease-out;
}

.list-category .body li .badge {
    width: 37px;
    padding: 4px;
}

.list-category .body li:hover .badge {
    color: #026cb6;
    background: #fff;
}

@keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    25% {
        height: 0;
        width: 8px;
    }

    50% {
        height: 20px;
        width: 8px;
    }
}

.checkbox {
    background: #fff;
    height: 23px;
    width: 23px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
    margin-bottom: 0;
}

.checkbox span {
    display: block;
    position: relative;
    height: 23px;
    width: 23px;
    padding: 0;
}

.checkbox span .item {
    margin-left: 31px;
    color: #000;
    width: 210%;
    display: table-caption;
}

.checkbox span:after {
    -moz-transform: scaleX(-1) rotate(135deg);
    -ms-transform: scaleX(-1) rotate(135deg);
    -webkit-transform: scaleX(-1) rotate(135deg);
    transform: scaleX(-1) rotate(135deg);
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -webkit-transform-origin: left top;
    transform-origin: left top;
    border-right: 3px solid #fff;
    border-top: 3px solid #fff;
    content: '';
    display: block;
    height: 16px;
    position: absolute;
    top: 12px;
    width: 8px;
    left: 2px;
}

.checkbox input {
    display: none;
}

.checkbox input:checked+span:after {
    -webkit-animation: check .8s;
    -moz-animation: check .8s;
    -o-animation: check .8s;
    animation: check .8s;
}

.checkbox input:checked+.primary:after {
    border-color: #026CB6;
}

.checklist .badge {
    width: 37px;
    padding: 4px;
}

.dropdown-menu.show {
    display: block;
    padding: 2px 0;
    border-radius: 0;
    color: #000;
    font-size: 14px;
    min-width: 123px;
}

.dropdown-menu li {
    padding: 1px 11px;
    cursor: pointer;
}

.dropdown-menu li:hover {
    background: #026CB6;
    color: #fff;
}

.testimonial {
    text-align: center;
}

.testimonial .description {
    color: #000;
    font-size: 20px;
    line-height: 1.3;
    margin-bottom: 20px;
    padding: 0 60px;
}

.testimonial .description::before {
    content: "\f10d";
    font-family: "FontAwesome";
    font-weight: 500;
    display: inline-block;
    position: absolute;
    top: 0;
    left: 20px;
    color: #026cb6;
    font-size: 30px;
}

.testimonial .description::after {
    content: "\f10e";
    font-family: "FontAwesome";
    font-weight: 500;
    display: inline-block;
    position: absolute;
    top: 0;
    right: 20px;
    color: #026cb6;
    font-size: 30px;
}

.testimonial .review .pic {
    width: 94px;
    height: 94px;
    margin: 0 auto;
}

.testimonial .review .pic img {
    width: 100%;
    height: auto;
    border-radius: 50%;
}

.testimonial .review .title {
    font-size: 18px;
    color: #026cb6;
    font-weight: 400;
    margin-top: 8px;
}

.testimonial .review .title small {
    display: block;
    font-size: 15px;
    font-weight: 300;
    color: #000;
}

.flickity-page-dots .dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 8px;
    background: #fff !important;
    border-radius: 50%;
    filter: alpha(opacity=25);
    opacity: 0.25;
    cursor: pointer;
}

.gallery-cell {
    width: 66%;
    height: 255px;
    margin-right: 10px;
    background: transparent;
    counter-increment: gallery-cell;
    top: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 20px;
}

.gallery-cell:before {
    display: block;
    text-align: center;
    line-height: 200px;
    font-size: 80px;
    color: white;
}

.flickity-viewport {
    overflow: hidden;
    position: relative;
    height: 330px !important;
}

.flickity-prev-next-button .arrow {
    fill: #fff !important;
}

.flickity-prev-next-button:hover {
    background: #026CB6 !important;
}

.ribbon {
    position: absolute;
    z-index: 100;
}

.ribbon-promo {
    width: 93px;
    height: 24px;
    padding-left: 8px;
    padding-top: 1px;
    position: absolute;
    left: -7px;
    top: 6px;
    background: #EE1212;
    color: #fff;
    font-size: 14px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
}

.ribbon-promo:before,
.ribbon-promo:after {
    content: '';
    position: absolute;
}

.ribbon-promo:before {
    top: -7px;
    left: -0.5px;
    border-bottom: 7px solid #4a0202;
    border-left: 8px solid transparent;
}

.ribbon-promo:after {
    right: -11px;
    border-top: 13px solid transparent;
    border-bottom: 0 solid transparent;
    border-left: 11px solid #4a0202;
}

.slick-prev::before,
.slick-next::before {
    font-size: 30px;
}

.slick-prev {
    left: -35px;
}

.slick-next {
    right: -18px;
}
</style>

<!-- <section class="offered-area section-gap" id="offered" style="margin-top: 2em;, "wrapAround": true "autoPlay": 5000"> -->
<div class="gallery js-flickity gallery-mo" id="gallery" data-flickity-options='{"fade": true}'
    style="margin-top: -15px;width: 366px;display: none;">
    <!--  <div class="gallery-cell"><img src="<?= base_url('assets/img/dev/B-03.jpg') ?>" class="d-block w-100" style="height: 300px;" /></div>
    <div class="gallery-cell"><img src="<?= base_url('assets/img/dev/B-02.jpg') ?>" class="d-block w-100" style="height: 300px;" /></div>
    <div class="gallery-cell"><img src="<?= base_url('assets/img/dev/B-01.jpg') ?>" class="d-block w-100" style="height: 300px;" /></div>
    <div class="gallery-cell"><img src="<?= base_url('assets/img/dev/B-04.jpg') ?>" class="d-block w-100" style="height: 300px;" /></div> -->
</div>

<div class="container mt-5 gallery-dev"
    style="background-image: url(<?= base_url('assets/img/banner/new/banner_background_atas.png') ?>);width: 100%;background-repeat: no-repeat;background-size: 100%;">
    <div class="row">
        <div class="col-md-5">
            <div style="margin-top: 65px; padding:0px 15px;">
                <div>
                    <h1
                        style="font-size: 42px;color: #026cb6;background: #fff;padding: 3px 15px;width: 355px;border-radius: 10px;font-weight: 500;">
                        RumahTinggal.id</h1>
                </div>
                <div style="margin-top: 10px;">
                    <p style="font-size: 25px;color: #fff;">Marketplace desain rumah idaman Anda</p>
                </div>
                <div style="font-size: 17px; color: #fff;width: 415px;">
                    Dapatkan desain rumah tinggal terbaik <br> dengan mudah, hemat dan berkualitas
                </div>
                <button class="btn btn-danger mt-4 text-white" onclick="assessment()"
                    style="padding: 5px 9px;background: #f00; margin-top: 25px;">Mulai Sekarang</button>
                <button class="btn btn-warning mt-4 ml-1 text-white" onclick="lihatKoleksi()"
                    style="padding: 5px 9px;color: #fff;margin-top: 25px;">Lihat Koleksi</button>
            </div>
        </div>
        <div class="col-md-7">
            <div class="gallery js-flickity" id="gallery"
                data-flickity-options='{ "fade": true, "autoPlay": 4500, "pauseAutoPlayOnHover": true }'
                style="margin-top: 21px;height: 320px;">

                <div class="gallery-cell">
                    <a href="<?= base_url('desain#promo') ?>">
                        <img src="<?= base_url('assets/img/banner/new/banner_promo.png') ?>" class="d-block w-100"
                            style="height: 255px;" />
                    </a>
                </div>
                <div class="gallery-cell">
                    <a href="<?= base_url('sampel_desain') ?>">
                        <img src="<?= base_url('assets/img/banner/new/banner_lite_premium.png') ?>"
                            class="d-block w-100" style="height: 255px;" />
                    </a>
                </div>
                <div class="gallery-cell">
                    <a href="<?= base_url('detail-artikel/5') ?>">
                        <img src="<?= base_url('assets/img/banner/new/banner_jangan_bangun_rumah.png') ?>"
                            class="d-block w-100" style="height: 255px;" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center p-0 mb-2 mt-3">
            <div class="px-0 pt-1 pb-0 mb-3">
                <div class="container cara-kerja-mo"
                    style="padding-right: 15px !important;padding-left: 0px !important;width: 550px;">
                    <div
                        style="text-align: center;color: #055993;font-size: 29px; font-weight: 600;line-height: 18px;margin-top: 19px;">
                        5 Cara Mudah Dapatkan Desain Murah
                    </div>
                    <div class="slider" id="carousel-mo" style="margin-bottom: 60px;height: 308px;">
                        <div class="frst text-center">
                            <div style="width: 100%;height: 180px;">
                                <img class="fielmo mb-4 mt-4" style="width: 250px; height: 148px;"
                                    src="<?= base_url('assets/img/dev/CKerja_1.png') ?>">
                            </div>
                            <h3 style="text-align: center;">Kunjungi Website</h3>
                            <p style="font-size: 19px;line-height: 22px;text-align: center;">
                                Kunjungi Website <a href="<?= base_url() ?>"
                                    style="color: #026CB6;text-decoration: none;">rumahtinggal.id</a>, Anda akan
                                menemukan fitur Temukan Desain dan Lihat Koleksi pada halaman muka.
                            </p>
                        </div>
                        <div class="scnd text-center">
                            <div style="width: 100%;height: 180px;">
                                <img class="fielmo mb-4 mt-4" style="width: 250px; height: 148px;margin-top: 25px;"
                                    src="<?= base_url('assets/img/dev/CKerja_2.png') ?>">
                            </div>
                            <h3 style="text-align: center;">Assessment / Filter</h3>
                            <p style="font-size: 19px;line-height: 22px; text-align: center;">
                                Untuk mendapatkan desain rumah tinggal sesuai kebutuhan, lakukan <a
                                    href="<?= base_url('assessment') ?>"
                                    style="color: #026CB6;text-decoration: none;">assessment</a> atau filter desain pada
                                halaman <a href="<?= base_url('desain') ?>"
                                    style="color: #026CB6;text-decoration: none;">koleksi desain</a>
                            </p>
                        </div>
                        <div class="thrd text-center">
                            <div style="width: 100%;height: 180px;">
                                <img class="fielmo mb-4 mt-4" style="width: 195px; height: 148px;"
                                    src="<?= base_url('assets/img/dev/CKerja_3.png') ?>">
                            </div>
                            <h3 style="text-align: center;">Pilih Desain</h3>
                            <p style="font-size: 19px;line-height: 22px; text-align: center;">
                                Pilih desain keinginan. Pelajari lebih lanjut desain yang Anda pilih. Jika ada
                                pertanyaan klik tombol <i class="fa fa-comments"
                                    style="font-size: 17px;color: #fff;background: #fab700;padding: 2px 3px 4px 3px;border-radius: 4px;"></i>
                            </p>
                        </div>
                        <div class="frth text-center">
                            <div style="width: 100%;height: 180px;">
                                <img class="fielmo mb-4 mt-4" style="width: 195px; height: 148px;"
                                    src="<?= base_url('assets/img/dev/CKerja_4.png') ?>">
                            </div>
                            <h3 style="text-align: center;">Pembayaran</h3>
                            <p style="font-size: 19px;line-height: 22px; text-align: center;">
                                Apabila Anda sudah yakin dengan pilihan desainnya, lakukan pembayaran, dengan cara klik
                                tombol <span
                                    style="color: #fff;background: #e10505;padding: 3px 6px;font-weight: 400;border-radius: 5px;">Beli
                                    Desain</span>. Ikuti petunjuk pembayaran
                            </p>
                        </div>
                        <div class="frst text-center">
                            <div style="width: 100%;height: 180px;">
                                <img class="fielmo mb-4 mt-4" style="width: 250px; height: 148px;"
                                    src="<?= base_url('assets/img/dev/CKerja_5.png') ?>">
                            </div>
                            <h3 style="text-align: center;">
                                <strong>Pengiriman Desain</strong>
                            </h3>
                            <p style="font-size: 19px;line-height: 22px; text-align: center;">
                                <a href="<?= base_url('sampel_desain') ?>"
                                    style="color: #026CB6;text-decoration: none;">Paket desain</a> akan dikirim dalam
                                bentuk softfile ke Whatsapp dan email, serta hardfile (print out) ke alamat Anda
                            </p>
                        </div>
                    </div>
                    <span class="pagingInfo"></span>
                </div>
            </div>
        </div>

        <div class="col-md-6" id="video-dev" style="text-align: center;margin-top: 38px;">
            <!--  <video controls controlsList="nodownload" width="620" height="350" style="margin: 0 auto !important;" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" muted>
                <source src="<?= base_url('assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4') ?>" type="video/mp4"> 
                <a href="<?= base_url('assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4') ?>">download video</a> 
            </video> -->







            <video id="my-video" class="video-js vjs-matrix" controls preload="auto" width="620" height="350"
                poster="https://rumahtinggal.id/assets/img/thumbnail_website.png" data-setup="{}">
                <source src="<?= base_url('assets/video/home.mp4') ?>" type="video/mp4" />
                <source src="<?= base_url('assets/video/home.mp4') ?>" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>
    </div>
</div>

<section class="pb-4">
    <div class="container">
        <div class="row banner-slider mobile-promo"
            style="background-image: url(<?= base_url('assets/img/dev/BPromo.jpg') ?>);">
            <div id="lihat-promo-mo"
                style="position: absolute;margin-top: -26px;margin-left: 266px;color: #fff;text-decoration: underline;display: none;">
                <a href="javascript:void(0)" onclick="lihatPromo(7)" style="color: #fff;">lihat lainnya</a>
            </div>
            <div class="col-md-9 product-slider" style="z-index: 3">
                <div class="list-produk-promo">
                    <?php
                    if ($produk_promo != '') {
                        foreach ($produk_promo as $item) { ?>
                    <div class="col-md-3 p0 grid">
                        <div class="product-grid">
                            <div class="ribbon"><span class="ribbon-promo"><?= '' . $item->promo . '% Off' ?></span>
                            </div>
                            <div class="product-image desain">
                                <a href="javascript:void(0)" class="image"
                                    onclick="detailRumah(<?= $item->id_rumah ?>)">
                                    <img class="pic-1" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">
                                    <img class="pic-2" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="title" title="<?= $item->nama_rumah ?>"
                                    onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>
                                <div class="product-rating">
                                    <div class="arsitek" title="<?= $item->nama_arsitek ?>"
                                        onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?>
                                    </div>
                                    <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold"
                                        data-size="17px"></div>
                                </div>
                                <div class="product-feature product-feature-dev">
                                    <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                        <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                        <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                        <span><?= $item->lantai ?></span>
                                    </div>
                                    <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                        <span><?= $item->kamar_tidur ?></span>
                                    </div>
                                    <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                        <span><?= $item->toilet ?></span>
                                    </div>
                                </div>


                                <div class="product-detail">
                                    <!-- <div class="product-feature product-feature-mo">
                                                <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                                    <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                                    <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                                                </div>
                                                <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                                    <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                                    <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                                                </div>
                                                <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                                    <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                                    <span><?= $item->lantai ?></span>
                                                </div>
                                                <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                                    <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                                    <span><?= $item->kamar_tidur ?></span>
                                                </div>
                                                <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                                    <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                                    <span><?= $item->toilet ?></span>
                                                </div>
                                            </div> -->
                                    <p class="lahan-minimal">
                                        Lahan minimal <span
                                            class="bold"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></span>
                                    </p>
                                    <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal"
                                            data-tootik-conf="square">
                                            <?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?></span>
                                    </p>
                                    <div class="product-statistic">
                                        <div class="statistic">
                                            <button class="btn btn-detail"
                                                onclick="detailRumah(<?= $item->id_rumah ?>)">Detail</a> </button>
                                        </div>
                                        <div class="statistic">
                                            <span class="view">
                                                <i class="fa fa-eye"></i><?= $item->dilihat ?>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <span class="like">
                                                <i class="fa fa-heart-o" data-id="<?= $item->id_rumah ?>"></i><span
                                                    class="value"><?= $item->suka ?></span>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <div class="share"><i class="fa fa-share-alt"></i>
                                                <div class="social">
                                                    <a class="facebook"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>"
                                                        target="_blank"><i class="fa fa-facebook"></i></a>
                                                    <a class="twitter"
                                                        href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>"
                                                        target="_blank"><i class="fa fa-twitter"></i></a>
                                                    <a class="whatsapp"
                                                        href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah . ' ' . $item->nama_rumah ?>"
                                                        target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-4 mt-30">
    <div class="container">
        <div class="row banner-slider mobile-favorit"
            style="background-image: url(<?= base_url('assets/img/dev/BFavorit.jpg') ?>);z-index: 3;">
            <div id="lihat-favorit-mo"
                style="position: absolute;margin-top: -26px;margin-left: 266px;color: #fff;text-decoration: underline;display: none;">
                <a href="javascript:void(0)" onclick="lihatFavorit(1)" style="color: #fff;">lihat lainnya</a>
            </div>
            <div class="col-md-9 product-slider" style="z-index: 1">
                <div class="list-produk-favorit">
                    <?php
                    if ($produk_favorit != '') {
                        foreach ($produk_favorit as $item) { ?>
                    <div class="col-md-3 p0 grid">
                        <div class="product-grid">
                            <div class="product-image desain">
                                <a href="javascript:void(0)" class="image"
                                    onclick="detailRumah(<?= $item->id_rumah ?>)">
                                    <img class="pic-1" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">
                                    <img class="pic-2" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="title" title="<?= $item->nama_rumah ?>"
                                    onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>
                                <div class="product-rating">
                                    <div class="arsitek" title="<?= $item->nama_arsitek ?>"
                                        onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?>
                                    </div>
                                    <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold"
                                        data-size="17px"></div>
                                </div>

                                <div class="product-feature product-feature-dev">
                                    <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                        <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                        <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                        <span><?= $item->lantai ?></span>
                                    </div>
                                    <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                        <span><?= $item->kamar_tidur ?></span>
                                    </div>
                                    <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                        <span><?= $item->toilet ?></span>
                                    </div>
                                </div>


                                <div class="product-detail">


                                    <!-- <div class="product-feature product-feature-mo">
                                            <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                                <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                                            </div>
                                            <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                                <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                                            </div>
                                            <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                                <span><?= $item->lantai ?></span>
                                            </div>
                                            <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                                <span><?= $item->kamar_tidur ?></span>
                                            </div>
                                            <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                                <span><?= $item->toilet ?></span>
                                            </div>
                                        </div>
 -->
                                    <p class="lahan-minimal">Lahan minimal <span
                                            class="bold"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></span>
                                    </p>
                                    <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal"
                                            data-tootik-conf="square"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?></span>
                                    </p>
                                    <div class="product-statistic">
                                        <div class="statistic">
                                            <button class="btn btn-detail"
                                                onclick="detailRumah(<?= $item->id_rumah ?>)">Detail</a>
                                        </div>
                                        <div class="statistic">
                                            <span class="view">
                                                <i class="fa fa-eye"></i><?= $item->dilihat ?>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <span class="like">
                                                <i class="fa fa-heart-o" data-id="<?= $item->id_rumah ?>"></i><span
                                                    class="value"><?= $item->suka ?></span>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <div class="share"><i class="fa fa-share-alt"></i>
                                                <div class="social">
                                                    <a class="facebook"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>"
                                                        target="_blank"><i class="fa fa-facebook"></i></a>
                                                    <a class="twitter"
                                                        href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>"
                                                        target="_blank"><i class="fa fa-twitter"></i></a>
                                                    <a class="whatsapp"
                                                        href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah . ' ' . $item->nama_rumah ?>"
                                                        target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-4 mt-35">
    <div class="container p0">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h3 style="font-weight: 400;font-size: 28px;">Desain Terbaru</h3>
                    <div class="line-footer"></div>
                </center>
            </div>
            <div class="col-md-12">
                <div class="list-produk-popular">
                    <?php
                    if ($produk_terbaru != '') {
                        foreach ($produk_terbaru as $item) { ?>
                    <div class="col-md-5 p0 grid">
                        <div class="product-grid">
                            <div class="product-image desain">
                                <a href="javascript:void(0)" class="image"
                                    onclick="detailRumah(<?= $item->id_rumah ?>)">
                                    <img class="pic-1" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">
                                    <img class="pic-2" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="title" title="<?= $item->nama_rumah ?>"
                                    onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>
                                <div class="product-rating">
                                    <div class="arsitek" title="<?= $item->nama_arsitek ?>"
                                        onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?>
                                    </div>
                                    <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold"
                                        data-size="17px"></div>
                                </div>


                                <div class="product-feature product-feature-dev">
                                    <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                        <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                        <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                        <span><?= $item->lantai ?></span>
                                    </div>
                                    <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                        <span><?= $item->kamar_tidur ?></span>
                                    </div>
                                    <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                        <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                        <span><?= $item->toilet ?></span>
                                    </div>
                                </div>


                                <div class="product-detail">

                                    <!--  <div class="product-feature product-feature-mo">
                                            <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                                <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                                            </div>
                                            <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                                <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                                            </div>
                                            <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                                <span><?= $item->lantai ?></span>
                                            </div>
                                            <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                                <span><?= $item->kamar_tidur ?></span>
                                            </div>
                                            <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                                <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                                <span><?= $item->toilet ?></span>
                                            </div>
                                        </div> -->

                                    <p class="lahan-minimal">Lahan minimal <span
                                            class="bold"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></span>
                                    </p>
                                    <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal"
                                            data-tootik-conf="square"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?></span>
                                    </p>
                                    <div class="product-statistic">
                                        <div class="statistic">
                                            <button class="btn btn-detail popular"
                                                onclick="detailRumah(<?= $item->id_rumah ?>)">Detail</a>
                                        </div>
                                        <div class="statistic">
                                            <span class="view">
                                                <i class="fa fa-eye"></i><?= $item->dilihat ?>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <span class="like">
                                                <i class="fa fa-heart-o" data-id="<?= $item->id_rumah ?>"></i><span
                                                    class="value"><?= $item->suka ?></span>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <div class="share"><i class="fa fa-share-alt"></i>
                                                <div class="social">
                                                    <a class="facebook"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>"
                                                        target="_blank"><i class="fa fa-facebook"></i></a>
                                                    <a class="twitter"
                                                        href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>"
                                                        target="_blank"><i class="fa fa-twitter"></i></a>
                                                    <a class="whatsapp"
                                                        href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah . ' ' . $item->nama_rumah ?>"
                                                        target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="pb-4" style="margin-top: 45px;" id="katalog-material-dev">
    <div class="container p0">
        <div class="row">
            <div class="col-md-12 pb-0">
                <center>
                    <h3 style="font-weight: 400;font-size: 28px;">Katalog Material</h3>
                    <div class="line-footer mb-10"></div>
                    <!-- <a href="javascript:void(0)" onclick="material()" style="text-decoration: none;">Lihat lainnya</a> -->
                </center>
            </div>
            <div class="col-md-12">
                <div class="container p0 katalog-produk" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-12" style="padding-right: 10px;">
                            <div class="result">
                                <div class="row">
                                    <div class="col-md-12 sec-product" style="max-width: 100%;flex: 0 0 100%;">
                                        <div class="list-produk" style="height: auto; overflow-y: unset;">

                                        </div>
                                        <!-- <div class="spinner"><center><img src="<?= base_url('assets/gif/rt-loader.gif') ?>" style="padding: 2px;" width="35px" /></center></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center><button class="btn btn-detail mt-2" onclick="material()" style="padding: 5px 9px;">Lihat Semua</button>
    </center>
</section>

<section class="pb-4 mt-20">
    <div class="container p0">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h3 style="font-weight: 400;font-size: 28px;">Artikel Desain</h3>
                    <div class="line-footer" style="margin-bottom: 16px;"></div>
                </center>
            </div>
            <div class="col-md-12">
                <div class="list-artikel">
                    <?php
                    if ($artikel != '') {
                        foreach ($artikel as $item) {
                            $isi = substr($item->deskripsi_meta, 0, 200);
                            switch (date("m", strtotime($item->tgl_dibuat))) {
                                case 1:
                                    $bulan = 'Januari';
                                    break;
                                case 2:
                                    $bulan = 'Februari';
                                    break;
                                case 3:
                                    $bulan = 'Maret';
                                    break;
                                case 4:
                                    $bulan = 'April';
                                    break;
                                case 5:
                                    $bulan = 'Mei';
                                    break;
                                case 6:
                                    $bulan = 'Juni';
                                    break;
                                case 7:
                                    $bulan = 'Juli';
                                    break;
                                case 8:
                                    $bulan = 'Agustus';
                                    break;
                                case 9:
                                    $bulan = 'September';
                                    break;
                                case 10:
                                    $bulan = 'Oktober';
                                    break;
                                case 11:
                                    $bulan = 'November';
                                    break;
                                case 12:
                                    $bulan = 'Desember';
                                    break;
                            }
                            $publish = date("d", strtotime($item->tgl_dibuat)) . ' ' . $bulan . ' ' . date("Y", strtotime($item->tgl_dibuat));
                    ?>
                    <div class="col-md-3 p0 grid artikel-mobile">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="javascript:void(0)" class="image"
                                    onclick="detailArtikel(<?= $item->id_artikel ?>)">
                                    <img class="pic-1" src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>">
                                    <img class="pic-2" src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="publish"><?= $publish ?></div>
                                <div class="title" title="<?= $item->judul_artikel ?>"
                                    onclick="detailArtikel(<?= $item->id_artikel ?>)"><?= $item->judul_artikel ?></div>
                                <div class="content">
                                    <p><?= $isi ?></p>
                                </div>
                                <a href="<?= base_url('detail-artikel/' . $item->id_artikel) ?>"
                                    class="link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php }
                        foreach ($artikel as $item) {
                            $isi = substr($item->deskripsi_meta, 0, 200);
                            switch (date("m", strtotime($item->tgl_dibuat))) {
                                case 1:
                                    $bulan = 'Januari';
                                    break;
                                case 2:
                                    $bulan = 'Februari';
                                    break;
                                case 3:
                                    $bulan = 'Maret';
                                    break;
                                case 4:
                                    $bulan = 'April';
                                    break;
                                case 5:
                                    $bulan = 'Mei';
                                    break;
                                case 6:
                                    $bulan = 'Juni';
                                    break;
                                case 7:
                                    $bulan = 'Juli';
                                    break;
                                case 8:
                                    $bulan = 'Agustus';
                                    break;
                                case 9:
                                    $bulan = 'September';
                                    break;
                                case 10:
                                    $bulan = 'Oktober';
                                    break;
                                case 11:
                                    $bulan = 'November';
                                    break;
                                case 12:
                                    $bulan = 'Desember';
                                    break;
                            }
                            $publish = date("d", strtotime($item->tgl_dibuat)) . ' ' . $bulan . ' ' . date("Y", strtotime($item->tgl_dibuat));
                        ?>
                    <div class="col-md-3 col-sm-6 p0 grid artikel-mobile">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="javascript:void(0)" class="image"
                                    onclick="detailArtikel(<?= $item->id_artikel ?>)">
                                    <img class="pic-1" src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>">
                                    <img class="pic-2" src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="publish"><?= $publish ?></div>
                                <div class="title" title="<?= $item->judul_artikel ?>"
                                    onclick="detailArtikel(<?= $item->id_artikel ?>)"><?= $item->judul_artikel ?></div>
                                <div class="content">
                                    <p><?= $isi ?></p>
                                </div>
                                <a href="<?= base_url('detail_artikel/' . $item->id_artikel) ?>"
                                    class="link">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
                <center><button class="btn btn-detail mt-2" onclick="lihatArtikel()" style="padding: 5px 9px;">Lihat
                        Semua</button></center>
            </div>
        </div>
    </div>
</section>

<div id="pop_up_website" data-backdrop="static" data-keyboard="false" class="modal fade center-screen in" role="dialog"
    style="background-color: rgba(0, 0, 0, 0.3); padding-right: 17px;" aria-hidden="false">
    <div class="modal-dialog animated tada" style="z-index: 2;width: 555px;">
        <div class="modal-content" style="background: transparent;box-shadow: none;border: none;">
            <div class="modal-body" style="text-align: center;">
                <a class="close" data-dismiss="modal"
                    style="position: absolute;right: 57px;top: -13px;font-size: 40px;border-radius: 100%;background-color: #aeaead !important;padding: 9px !important;line-height:  unset;">×</a>
                <img src="<?php echo base_url('assets/img/pop_up/pop_up.png') ?>" width="350px;" class="pop-up-website">
                <button class="btn btn-danger btn-pop-up btn-konsultasi" onclick="konsultasiDesain()"
                    style="padding: 6px 25px;/*! margin-top: -160px; */font-size: 21px;border-radius: 25px;background: red;border-color: red;box-shadow: 0px 3px 5px 5px rgba(38, 38, 38, 0.19),0px 2px 2px 1px rgba(184, 184, 184, 0.45);position: absolute;bottom: 50px;right: 198px;">Konsultasi</button>
                <!-- onclick="window.open('https://rumahtinggal.id/desain','_blank')" -->
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url('assets/js/js.cookie.min.js') ?>"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script>
function parseJwt(token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));

    return JSON.parse(jsonPayload);
};

function handleCredentialResponse(credentialResponse) {
    let response = parseJwt(credentialResponse.credential);
    $.ajax({
        url: "<?= base_url('api/loginSSO') ?>",
        type: "POST",
        data: {
            "nama_lengkap": response.name,
            "email": response.email,
            "password": ''
        },
        dataType: "JSON",
        success: function(data) {
            if (data.Success == true) {
                toastr.success(data.Info, 'Informasi', opsi_toastr);
                window.location.href = "<?= base_url() ?>";
            }
        }
    });
}




// function popUp(){
//     clearTimeout(timer);
//     timer = setTimeout(function(){
//        $('#pop_up_website').modal('show');

//     }, 5000); 
// }

//$(window).load(function(){ 
//  if (sessionStorage.getItem('popup_website') == null) {
//$('#pop_up_website').modal('show');
//      sessionStorage.setItem('popup_website', 1);
//  }

//$('#ModalPromo').on('hide.bs.modal', function (e) {
//   $('#ModalPromo .modal-dialog').removeClass('rubberBand').addClass('zoomOutUp');
// })
// }); 
$(document).ready(function() {
    getMaterial();
    // const player = videojs('my-video', {
    //   autoplay: true,
    //   controls: false
    // });
    // document.getElementById('video-player').controls = false





    $('#cari-desain').on('change', function() {
        var cari = $('#cari-desain').val();
        location.href = "<?= base_url('desain#') ?>" + cari;
    });

    // ias.bind();
    // getSummaryKatalog();

    // $('#pop_up_website').modal('show');
    // popUp();



    if (sessionStorage.getItem('popup_website') == null) {
        setTimeout(function() {
            $('#pop_up_website').modal('show');
        }, 10000);
        sessionStorage.setItem('popup_website', 1);
    }


    var slickOpts = {
        slidesToShow: 1,
        slidesToScroll: 1,
        //centerMode: true,
        easing: 'swing', // see http://api.jquery.com/animate/
        speed: 700,
        dots: true,
        customPaging: function(slick, index) {
            return '<a>' + (index + 1) + '</a>';
        }
    };
    $('#carousel-mo').slick(slickOpts);

    $('.list-produk-merk').slick({
        autoplaySpeed: 2000,
        autoplay: true,
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.list-produk-promo, .list-produk-favorit, .list-artikel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });
});

function lihatKoleksi() {
    location.href = "<?= base_url('desain') ?>";
}

function lihatSampel() {
    location.href = "<?= base_url('sampel_desain') ?>";
}

function assessment() {
    location.href = "<?= base_url('assessment') ?>";
}

function detailProduk(id) {
    location.href = "<?= base_url('detail_produk/') ?>" + id;
}

function lihatArtikel() {
    location.href = "<?= base_url('artikel') ?>";
}

function detailArtikel(id) {
    location.href = "<?= base_url('detail-artikel/') ?>" + id;
}

function detailSuplier(id) {
    //location.href = "<?= base_url('suplier/') ?>"+id;
}

function detailMerk(id) {
    //location.href = "<?= base_url('merk/') ?>"+id;
}

function material() {
    location.href = "<?= base_url('material') ?>";
    // location.href = "<?= $this->config->item('url_mobile') ?>material";
}

function setSort(by) {
    $('#sort_by').val(by);
    $('.list-produk').empty();
    // ias.next();
}


function lihatPromo(by) {
    location.href = "<?= base_url('desain#promo') ?>";
}

function lihatFavorit(by) {
    window.open('<?= base_url("desain") ?>');
}



function getMaterial() {
    $.ajax({
        type: 'POST',
        url: "<?= $this->config->item('url_server') ?>api/getKatalogProdukTerpilih",
        // data: $('#frm-filter').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data != '') {

                for (var i = 0; i <= 4; i++) {
                    var foto = data[i].foto;
                    if (foto == '') foto = 'no-foto.jpg';
                    var harga = data[i].harga_dasar;
                    $('.katalog-produk .sec-product .list-produk').append(`<div class="col-md-3 col-sm-6 p0 grid">
                            <div class="product-grid" data-id="` + data[i].id_produk + `">
                                <div class="product-image">
                                    <a href="javascript:void(0)" class="image" onclick="detailProduk(` + data[i]
                        .id_produk +
                        `)">
                                        <img class="pic-1" src="<?= $this->config->item('eid') . 'assets/foto/produk/' ?>` +
                        foto +
                        `">
                                        <img class="pic-2" src="<?= $this->config->item('eid') . 'assets/foto/produk/' ?>` +
                        foto + `">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="title" title="` + data[i].nama_produk + `" onclick="detailProduk(` +
                        data[i].id_produk + `)">` + data[i].nama_produk + `</div>
                                    <div class="product-info">
                                        <div class="suplier" title="` + data[i].nama_suplier +
                        `" onclick="detailSuplier(` + data[i].id_suplier +
                        `)">
                                            <img class="logo" src="<?= $this->config->item('eid') . 'assets/foto/pengguna/' ?>` +
                        data[i].foto_suplier + `">
                                            <span>` + data[i].nama_suplier + `</span>
                                        </div>
                                        <div class="badge" title="` + data[i].merk + `">` + data[i].merk + `</div>
                                    </div>
                                    <div class="product-price">
                                        <div class="price">Rp` + number_format(harga, 0, ',', '.') +
                        `<span class="unit"> / ` + data[i].satuan + `</span></div>
                                    </div>
                                    <div class="product-detail">
                                        <p class="spesification">` + data[i].spesifikasi + `</p>
                                        <div class="product-statistic">
                                            <div class="statistic">
                                                <button class="btn btn-detail produk" onclick="detailProduk(` + data[i]
                        .id_produk + `)">Detail</a>
                                            </div>
                                            <div class="statistic">
                                                <button class="btn btn-beli" data-number="` + data[i].no_wa +
                        `" data-id="` + data[i].id_produk + `" data-product="` + data[i].nama_produk +
                        `" data-merk="` + data[i].merk + `" data-spec="` + data[i].spesifikasi + `"><i class="fa fa-shopping-cart" style="margin-top: -1px;"></i> Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                }

            }

        },
        error: function(jqXHR, textStatus, errorThrown) {
            toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
        }
    });
}







// function getProductItem(page,data) {
//      var foto = `${data.foto}`;
//      if (foto == '') foto = 'no-foto.jpg';
//      var harga = `${data.harga_dasar}`;
//      var template = `<div class="col-md-3 col-sm-6 p0 grid">
//                          <div class="product-grid page-`+page+`" data-id="${data.id_produk}">
//                              <div class="product-image">
//                                  <a href="javascript:void(0)" class="image" onclick="detailProduk(${data.id_produk})">
//                                      <img class="pic-1" src="<?= $this->config->item('eid') . 'assets/foto/produk/' ?>`+foto+`">
//                                      <img class="pic-2" src="<?= $this->config->item('eid') . 'assets/foto/produk/' ?>`+foto+`">
//                                  </a>
//                              </div>
//                              <div class="product-content">
//                                  <div class="title" title="${data.nama_produk}" onclick="detailProduk(${data.id_produk})">${data.nama_produk}</div>
//                               <div class="product-info">
//                                      <div class="suplier" title="${data.nama_suplier}" onclick="detailSuplier(${data.id_suplier})">
//                                       <img class="logo" src="<?= $this->config->item('eid') . 'assets/foto/pengguna/' ?>${data.foto_suplier}">
//                                       <span>${data.nama_suplier}</span>
//                                       </div>
//                                      <div class="badge" title="${data.merk}">${data.merk}</div>
//                                  </div>
//                               <div class="product-price">
//                                   <div class="price">Rp`+number_format(harga, 0, ',', '.')+`<span class="unit"> / ${data.satuan}</span></div>
//                               </div>
//                                  <div class="product-detail">
//                                      <p class="spesification">${data.spesifikasi}</p>
//                                      <div class="product-statistic">
//                                          <div class="statistic">
//                                              <button class="btn btn-detail produk" onclick="detailProduk(${data.id_produk})">Detail</a>
//                                          </div>
//                                          <div class="statistic">
//                                              <button class="btn btn-beli" data-number="${data.no_wa}" data-id="${data.id_produk}" data-product="${data.nama_produk}" data-merk="${data.merk}" data-spec="${data.spesifikasi}"><i class="fa fa-shopping-cart" style="margin-top: -1px;"></i> Beli</a>
//                                          </div>
//                                      </div>
//                                  </div>
//                              </div>
//                          </div>
//                      </div>`;
//      let item = document.createElement('div');
//      item.innerHTML = template.trim();

//      return item.firstChild;
//  }

//  var params = null, page = 0;
//  function nextHandler(pageIndex) {
//      if (params == null) params = $('#frm-filter').serialize();
//      else {
//          if (params != $('#frm-filter').serialize()) {
//              params = $('#frm-filter').serialize();
//              page = reset = 0;
//          } else page++;
//      }

//      let fetchData = {
//          method: 'POST',
//          body: params,
//          headers: new Headers()
//      }

//      return fetch('<?= $this->config->item('url_server') ?>api/getKatalogProduk', fetchData)
//          .then(response => response.json())
//          .then(result => {
//            let frag = document.createDocumentFragment();
//            let itemsPerPage = 10;
//            let totalPages = Math.ceil(result.length / itemsPerPage);
//            let offset = page * itemsPerPage;

//            for (let i = offset, len = offset + itemsPerPage; i < len; i++) {
//              if (typeof result[i] !== 'undefined') {
//                  let item = getProductItem(pageIndex, result[i]);
//                  frag.appendChild(item);
//              }
//            }

//            let hasNextPage = page < totalPages - 1;

//            return this.append(Array.from(frag.childNodes)).then(() => hasNextPage);
//          })
//          .catch(error => console.log(error));
//  }

//  window.ias = new InfiniteAjaxScroll('.list-produk', {
//      logger: false,
//      item: '.grid',
//      next: nextHandler,
//      pagination: false,
//      bind: false,
//      scrollContainer: '.list-produk',
//      spinner: '.spinner',
//  });

//  ias.on('page', (event) => {
//      $(".btn-beli").on("click", function(){
//          var id_produk = $(this).attr("data-id");
//          var nama_produk = $(this).attr("data-product");
//          var merk = $(this).attr("data-merk");
//          var spesifikasi = $(this).attr("data-spec").replace(/<[^>]*>/g," ");
//          var text = `Halo,\nSaya ingin membeli produk Anda dengan rincian:\n\nNama Produk: `+nama_produk+`\nMerk: `+merk+`\nSpesifikasi: `+spesifikasi+`\nLink Produk: <?php echo base_url('detail/') ?>`+id_produk+`\n\nApakah bisa dibantu?\nTerima kasih`;
//          var phone = $(this).attr("data-number");
//          var message = encodeURIComponent(text);

//          if (phone.substring(0,1) == '+') phone = phone.substring(1);
//          else if (phone.substring(0,1) == '0') {
//              phone = phone.substring(1);
//              phone = '62'+phone;
//          }

//          if (isMobile() == true){
//              //mobile device
//              var whatsapp_API_url = "whatsapp://send";
//              $(this).attr( 'href', whatsapp_API_url+'?phone=' + phone + '&text=' + message );
//          } else {
//              //desktop
//              var whatsapp_API_url = "https://web.whatsapp.com/send";
//              var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
//              window.open(url, '_blank');
//          }
//      });
//  });

//  function getSummaryKatalog() {
//      $.ajax({
//          type : 'POST',
//          url : "<?= $this->config->item('url_server') ?>api/getSummaryCariProduk",
//          dataType: "JSON",
//          data: {
//              "keyword": $('#nama_material').val(),
//              "id_kategori": $('#id_kategori').val(),
//              "merk": $('#merk').val()
//          },
//          success : function(data){
//              $('#jum_produk').html(data.suplier);
//          },
//          error: function (jqXHR, textStatus, errorThrown){
//            toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
//          }
//      });
//  }

//  function getMerkProduk() {
//      $.ajax({
//          type : 'POST',
//          url : "<?= $this->config->item('url_server') ?>api/getFilterMerkProduk",
//          data: $('#frm-filter').serialize(),
//          dataType: "JSON",
//          success : function(data){
//              if (data != '') {
//                  var list = check = counter = '';
//                  var list_merk = $('#merk').val();
//                  for (var i = 0; i <= data.length-1; i++) {
//                      if (list_merk.includes(data[i].merk) == true) check = "checked"; else check = "";
//                      if (data[i].jumlah != "0") counter = "<span class='pull-right'><span class='badge' style='vertical-align: middle;'>"+data[i].jumlah+"</span></span>"; else counter = "";
//                      list += '<li class="list-group-item"><label class="checkbox"><input type="checkbox" class="list-merk" name="list_merk" value="'+data[i].merk+'" '+check+'><span class="primary"><div class="item">'+data[i].merk+'</div></label>'+counter+'</li>';
//                  }
//                  $('.checklist').html(list);
//              } else $('.checklist').html("<center><img src='<?= $this->config->item('eid') ?>assets/img/not-found.png' width='75' style='padding: 5px 0px;' /><br><span>Tidak ada merk material</span></center>");

//               $(".list-merk").on("change", function(e) {
//                  var merk = '';
//                  $.each($(".checklist :input").serializeArray(), function() {
//                      merk += "'" + this.value + "',";
//                  });
//                  $('#merk').val(merk.slice(0,-1));
//                   $('.list-produk').empty();
//                  ias.next();
//                  getSummaryKatalog();
//              });
//          },
//          error: function (jqXHR, textStatus, errorThrown){
//            toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
//          }
//      });
//  }

// $('#nama_material').keypress(function(e){
//   if (e.which == 13) {
//        e.preventDefault();
//        $('#btn-cari-material').click();
//        return false;
//      }
// })

// $('#btn-cari-material').on('click', function() {
//      $('#id_kategori').val(0);
//       $('#merk').val('');
//      $('.list-produk').empty();
//      ias.next();
//       getSummaryKatalog();
//      getMerkProduk();
//  });  

// $('.list-category .body li').on('click', function() {
//      $('#id_kategori').val($(this).data('id'));
//      $('#nama_material,#merk').val('');
//      $('.list-produk').empty();
//      ias.next();
//       getSummaryKatalog();
//      getMerkProduk();
//  });


$(document).ready(function() {
    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next-step").click(function() {

        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();

        $("#progressbar li").eq($("fieldset")
            .index(nextGfgStep)).addClass("active");

        nextGfgStep.show();
        currentGfgStep.animate({
            opacity: 0
        }, {
            step: function(now) {
                opacity = 1 - now;

                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous-step").click(function() {

        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset")
            .index(currentGfgStep)).removeClass("active");

        previousGfgStep.show();

        currentGfgStep.animate({
            opacity: 0
        }, {
            step: function(now) {
                opacity = 1 - now;

                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function() {
        return false;
    })
});

if (screen.width > 1900) {
    $('.list-produk-popular .grid .product-grid').addClass('col-md-12')
}



//window.onload = function () {
// getMaterial();
//   if (screen.width > 1279) {


//if(jQuery.browser.mobile)
//{
//   window.open("https://rumahtinggal.id/mobile/");
//}
//else
//{
//  console.log('You are not using a mobile device!');
// window.open("https://rumahtinggal.id/dev/");
//}
//  document.querySelectorAll('.product-feature-mo').forEach(e => e.remove());
//   //  var mvp = document.getElementById('myViewport');
// // mvp.setAttribute('content','width=1350');
// // $('.header').addClass('top-white');

//   if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) == null) {
//       google.accounts.id.initialize({
//      client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
//      callback: handleCredentialResponse,
//    cancel_on_tap_outside: false,
// ui_mode: isMobile() ? 'bottom_sheet': 'card',
// });
//   google.accounts.id.prompt();
// }
// } else if (screen.width < 1279){

//if(jQuery.browser.mobile)
//{
//  window.open("https://rumahtinggal.id/mobile/");
//}
//else
//{
// console.log('You are not using a mobile device!');
//// window.open("https://rumahtinggal.id/dev/");
//}
//    // var mvp = document.getElementById('myViewport');
//   //    mvp.setAttribute('content','width=1350');
//  $('.flickity-page-dots').addClass('flickity-page-dots-mo');
//$('.flickity-page-dots .dot').addClass('dot-mo');

//if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) == null) {
//  google.accounts.id.initialize({
//    client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
//  callback: handleCredentialResponse,
//cancel_on_tap_outside: false,
// // ui_mode: isMobile() ? 'bottom_sheet': 'card',
// });
// google.accounts.id.prompt();
// }
// }
// }


if (Cookies.get('id_customer', {
        domain: 'rumahtinggal.id'
    }) == null) {
    window.onload = function() {
        document.querySelectorAll('.product-feature-mo').forEach(e => e.remove());
        google.accounts.id.initialize({
            client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
            callback: handleCredentialResponse,
            cancel_on_tap_outside: false,
            //ui_mode: isMobile() ? 'bottom_sheet': 'card',
        });
        google.accounts.id.prompt();

        setTimeout(function() {
            let onetap = $('.wrapper > #credential_picker_container');
            onetap.parent().after(onetap);
        }, 7000);
    };
}
</script>