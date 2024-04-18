<style>
    /*
Looped owl carousel with active state of the thumbs.

Also includes a counter of the slides
*/

    /* .img-touch-koleksi {
        height: 330px;
        width: 440px;
    } */

    .slide-image-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        height: 100%;
    }

    .img-touch-koleksi {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .img-carousel-denah {
        transform: scale(1.2);
    }

    .img-touch-thumbs {
        height: 90px;
        width: 120px;
        border-radius: 5px;
        border-width: 2px;
    }

    .slider-photos {
        width: 100%;
    }

    .slider-photos .slider-thumbs .slide {
        opacity: 0.5;
    }

    .slider-photos .slider-thumbs .slide.active {
        opacity: 1;
    }

    .slider-photos .slides {
        counter-reset: currentSlide slide max;
    }

    .slider-photos .slides .owl-item:not(.cloned) {
        counter-increment: currentSlide;
    }

    .slider-photos .slides .owl-item:not(.cloned) .slide {
        counter-increment: max;
    }

    .slider-photos .slides .owl-item:not(.cloned).active~.owl-item {
        counter-increment: slide;
    }

    .slider-photos .slides .owl-dots:before {
        content: counter(currentSlide) "/";
    }

    .slider-photos .slides .owl-dots:after {
        content: counter(max);
    }

    .slider-photos .slides .owl-dot {
        display: none;
    }

    .nav-link-denah.active {
        border-bottom: 2px solid #000000;
    }

    .nav-link-denah {
        text-decoration: none;

    }

    .card-container {
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .bg-card-detail {
        width: 100%;
        padding-top: calc(100% / (4 / 3));
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .right-box-text {
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .konsul-gratis-text {
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.5px;
    }


    .unduh-box {
        border: 2px solid var(--Grey-03, #C2C2C2);
        overflow: visible;
    }

    .tab-desain {
        border-radius: 9px;
    }

    .konsep-sub {
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.5px;
        color: var(--Grey-07, #707070);
        font-size: 0.7em;
    }

    .konsep-data {
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.5px;
    }

    .ulasan-nama {
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 0.5px;
    }

    .social {
        position: absolute;
        padding: 5px;
        padding-bottom: 20px;
        opacity: 0;
        top: -30px;
        left: 65px;
        display: flex;
        transition: opacity 0.3s ease;
    }

    .share-methods {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 30px;
        border: 1px solid var(--Primary-09, #00528E);
        background: #FFF;
        padding: 8px;
    }

    .share:hover .social {

        opacity: 1;

    }

    .social a {
        margin-right: 5px;
    }

    .social-mobile {
        position: absolute;
        padding: 5px;
        padding-bottom: 20px;
        opacity: 0;
        top: -50px;
        left: -125px;
        display: flex;
        transition: opacity 0.3s ease;
    }

    .share-methods-mobile {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 30px;
        border: 1px solid var(--Primary-09, #00528E);
        background: #FFF;
        padding: 8px;
    }

    .share-mobile:hover .social-mobile {

        opacity: 1;

    }

    .social-mobile a {
        margin-right: 5px;
    }

    .nama-rumah-mobile {
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 0.5px;
    }

    .nama-arsitek-mobile {
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        font-size: 0.9em;
        letter-spacing: 0.313px;
    }

    .unduh-card-mobile {
        border: 1px solid var(--Grey-02, #D6D6D6);
    }

    .download-text-mobile {
        color: var(--Grey-08, #5C5C5C);
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.281px;
    }

    .download-button-text-mobile {
        color: var(--Putih, #FFF);
        font-size: 0.75em;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 0.313px;
    }

    .denah-card {
        background-color: rgba(255, 255, 255);
        font-size: 0.8em;
    }

    .konsep-desc {
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        font-size: 0.9em;
        /* 27px */
    }

    .konsultasi-mobile {
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 0.378px;
    }

    .konsultasi-desc-mobile {
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        letter-spacing: 0.378px;
    }

    .hubungi-kami-mobile {
        color: var(--Primary-08, #056BB7);
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 0.312px;
    }



    @media screen and (min-width: 992px) {
        .subheading {
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            letter-spacing: 0.5px;
        }

        .progress {
            height: 5px
        }

        #daftar-ulasan {
            height: 400px;
        }

        .ulasan-box {
            border: 0.5px solid var(--Grey-01, #EBEBEB);
            background: #FFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }
    }

    @media screen and (max-width: 767px) {
        .subheading {
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 0.262px;
            font-size: 1.1em;
        }

        .progress {
            height: 2.5px
        }

        .ulasan-bar-star {
            height: 12px;
            width: 12px;
        }

        .ulasan-bar-text {
            font-size: 0.8em;
        }

        #daftar-ulasan {
            height: 420px;
        }

        .ulasan-box {
            border: 0.75px solid var(--Grey-03, #C2C2C2);
            background: #FFF;
        }
    }
</style>

<div class="py-3 d-lg-none">
    <div class="container px-4">

        <div class="d-flex justify-content-between gap-2 align-items-center mt-2">
            <h2 class='nama-rumah-mobile' id="nama_rumah" style='margin-bottom:0;'><?= $konsep->nama_rumah ?></h2>
            <div class="d-flex">
                <div id="heart-like-mobile" data-id="<?php echo $id_rumah ?>"><i class="fa-regular fa-heart me-3 fs-3"></i></div>

                <div class="share-mobile" style="position:relative;">
                    <i class="fa-solid fa-share fs-3"></i>
                    <div class="social-mobile">
                        <?php
                        $currentUrl = urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                        $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . $currentUrl;
                        $twitterShareUrl = 'https://twitter.com/intent/tweet?text=Check%20out%20this%20link:%20' . $currentUrl;
                        $whatsappShareUrl = 'https://wa.me/?text=Check%20out%20this%20link:%20' . $currentUrl;
                        ?>


                        <a class="share-methods-mobile instagram" onclick="shareInstagram()"><i class="fa-brands fa-instagram"></i></a>
                        <a class="share-methods-mobile facebook" href="<?php echo $facebookShareUrl; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a class="share-methods-mobile twitter" href="<?php echo $twitterShareUrl; ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a class="share-methods-mobile whatsapp" href="<?php echo $whatsappShareUrl; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

                    </div>
                </div>

            </div>
        </div>
        <div class="nama-arsitek-mobile mt-1 mb-2">Didesain oleh <a style="text-decoration: none;" href="<?php echo base_url('profil_arsitek/' . $konsep->id_arsitek); ?>"><?= $konsep->nama_arsitek ?></a></div>
        <div class="d-flex">
            <?php if ($rating_desain->rating !== null) : ?>
                <div class="d-flex justify-content-between gap-2 align-items-center me-3">
                    <i class="fa-solid fa-star text-warning fs-6"></i>
                    <div class="text-warning fw-semibold"><?= $rating_desain->rating ?></div>
                </div>
            <?php else : ?>
                <div class="d-flex justify-content-between gap-2 align-items-center me-3">
                    <i style="color:#707070" class="fa-solid fa-star fs-6"></i>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-between gap-2 align-items-center">
                <img src="<?php echo base_url('assets/demo/img/eye.png'); ?>">
                <div class="fw-semibold"><?= $konsep->dilihat ?></div>
            </div>
        </div>
        <div class="unduh-card-mobile rounded-3 card card-body mb-2 mt-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <a onclick="clickUnduh()" class="btn btn-danger download-button-text-mobile w-100 py-2">
                        <i class="fas fa-download me-2"></i> Unduh Gratis
                    </a>
                </div>
                <div class="col-6">
                    <a onclick="clickUnduh()" class="btn btn-primary download-button-text-mobile w-100 py-2">
                        <i class="fas fa-shopping-cart me-2"></i> Beli Sekarang
                    </a>
                </div>
                <div class="mt-3 col-12 d-flex justify-content-center download-text-mobile">
                    <small>Telah didownload <?= $konsep->dilihat ?> kali</small>
                </div>

            </div>
        </div>
    </div>
</div>
<div>
    <div class="owl-carousel owl-theme owl-carousel-detail d-lg-none mb-0 w-100" id="caraouselTesti">
        <?php if ($foto_rumah !== null && !empty($foto_rumah)) : ?>
            <?php foreach ($foto_rumah as $foto) : ?>
                <div class="card-container">
                    <div class="bg-card-detail" style="background-image: url('<?= base_url('assets/img/konsep/' . $foto->foto) ?>')">
                        <!-- <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2">Eksterior</div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="card-container">
                <div class="bg-card-detail" style="background-image: url('<?= base_url('assets/img/konsep/' . $konsep->foto) ?>')">
                    <!-- <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2">Eksterior</div> -->
                </div>
            </div>
        <?php endif; ?>
        <!-- <div class="card-container">
            <div style="background-image: url('<?= base_url('assets/img/denah/' . $interior->denah) ?> ')" class=" bg-card-detail">

                <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2"> Denah Lantai 1</div>
            </div>
        </div>

        <?php if ($interior2 !== null) : ?>
            <div class="card-container">
                <div style="background-image: url('<?= base_url('assets/img/denah/') . $interior2->denah ?> ')" class=" bg-card-detail">

                    <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2"> Denah Lantai 2</div>
                </div>
            </div>

        <?php endif; ?>
        <?php if ($interior3 !== null) : ?>
            <div class="card-container">
                <div style="background-image: url('<?= base_url('assets/img/denah/') . $interior3->denah ?> ')" class=" bg-card-detail">

                    <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2"> Denah Lantai 3</div>
                </div>
            </div>

        <?php endif; ?> -->

        <!-- <div style="background-image: url('<?php echo base_url('assets/demo/img/dismage.png'); ?>')" class=" bg-card-detail">
            <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2"> Animasi</div>
        </div>
        <div style="background-image: url('<?php echo base_url('assets/demo/img/dismage.png'); ?>')" class=" bg-card-detail">
            <div class="position-absolute top-0 start-0 bg-light ms-2 rounded-2 p-2 mt-2"> Foto 360º</div>
        </div> -->
    </div>
</div>

<div class="py-lg-5 px-4 px-lg-0">
    <div class="container">
        <div class="col-lg-10">
            <div class="row h-max">
                <div class="col-lg-8 mb-3 d-none d-lg-block ps-0">
                    <div class="position-relative h-100">
                        <div class="slider slider-photos h-100">
                            <div class="slides owl-carousel h-100">
                                <?php if ($foto_rumah !== null && !empty($foto_rumah)) : ?>
                                    <?php foreach ($foto_rumah as $foto) : ?>
                                        <div class="slide mb-3">
                                            <div class="slide-image-container rounded-3 overflow-hidden" id="zoom-container-eksterior">
                                                <img src="<?= base_url('assets/img/konsep/' . $foto->foto) ?>" alt="" class="img-touch-koleksi">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <div class="slide mb-3">
                                        <div class="slide-image-container rounded-3 overflow-hidden" id="zoom-container-eksterior">
                                            <img src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>" alt="" class="img-touch-koleksi">
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- <div class="slide">
                                    <div class="slide-image-container" id="zoom-container-interior">
                                        <img src="<?= base_url('assets/img/denah/' . $interior->denah) ?>" class="img-touch-koleksi">
                                    </div>
                                </div> -->

                                <!-- <?php if ($interior2 !== null) : ?>
                                    <div class="slide">
                                        <div class="slide-image-container" id="zoom-container-lantai">
                                            <img src="<?= base_url('assets/img/denah/') . $interior2->denah ?>" alt="" class="img-touch-koleksi">
                                        </div>
                                    </div>
                                <?php endif; ?> -->

                                <!-- <?php if ($interior3 !== null) : ?>
                                    <div class="slide">
                                        <div class="slide-image-container" id="zoom-container-interior3">
                                            <img src="<?= base_url('assets/img/denah/') . $interior3->denah ?>" alt="" class="img-touch-koleksi">
                                        </div>
                                    </div>
                                <?php endif; ?> -->
                                <!-- <div class="slide">
                                    <div class="slide-image-container">
                                        <img src="<?php echo base_url('assets/demo/img/slidermob3.png'); ?>" alt="" class="img-touch-koleksi">
                                    </div>
                                </div> -->
                                <!-- <div class="slide">
                                    <div class="slide-image-container">
                                        <img src="<?php echo base_url('assets/demo/img/slidermob1.png'); ?>" alt="" class="img-touch-koleksi">
                                    </div>
                                </div> -->
                            </div><!-- /.slides -->
                            <div class="position-absolute bottom-50 translate-middle d-none d-lg-block" style="z-index: 1000; left:100%; top:47%;">
                                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnProduk"><i class="fas fa-arrow-right fs-7"></i></button>
                            </div>
                            <div class="position-absolute bottom-50 translate-middle d-none d-lg-block" style="z-index: 1000; top:47%;">
                                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle" id="prevBtnProduk"><i class="fas fa-arrow-left fs-7"></i></button>
                            </div>
                            <!-- <div class="slider-thumbs owl-carousel gap-5 ms-2">
                                <div class="slide active me-3">
                                    <div>
                                        <img src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>" alt="" class="img-touch-thumbs">
                                        <div class="position-absolute bottom-0 translate-middle-x bg-light" style="width: 135px; margin-left:67px;">
                                            <div class="text-center" style="font-size: 12px; margin-left:10px;">Desain Eksterior</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide me-3">
                                    <div>
                                        <img src="<?= base_url('assets/img/denah/' . $interior->denah) ?> " alt="" class="img-touch-thumbs">
                                        <div class="position-absolute bottom-0 translate-middle-x bg-light" style="width: 135px; margin-left:67px;">
                                            <div class="text-center" style="font-size: 12px; margin-left:10px;">Lantai 1</div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($interior2 !== null) : ?>
                                    <div class="slide me-3">
                                        <div>
                                            <img src="<?= base_url('assets/img/denah/' . $interior2->denah) ?> " alt="" class="img-touch-thumbs">
                                            <div class="position-absolute bottom-0 translate-middle-x bg-light" style="width: 135px; margin-left:67px;">
                                                <div class="text-center" style="font-size: 12px; margin-left:10px;">Lantai 2</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($interior3 !== null) : ?>
                                    <div class="slide me-3">
                                        <div>
                                            <img src="<?= base_url('assets/img/denah/' . $interior3->denah) ?> " alt="" class="img-touch-thumbs">
                                            <div class="position-absolute bottom-0 translate-middle-x bg-light" style="width: 135px; margin-left:67px;">
                                                <div class="text-center" style="font-size: 12px; margin-left:10px;">Lantai 3</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="slide me-3">
                                    <div>
                                        <img src="<?php echo base_url('assets/demo/img/slidermob3.png'); ?>" alt="" class="img-touch-thumbs">
                                        <div class="position-absolute bottom-0 translate-middle-x bg-light" style="width: 135px; margin-left:67px;">
                                            <div class="text-center" style="font-size: 12px; margin-left:10px;">Video Animasi</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide me-3">
                                    <div>
                                        <img src="<?php echo base_url('assets/demo/img/slidermob1.png'); ?>" alt="" class="img-touch-thumbs">
                                        <div class="position-absolute bottom-0 translate-middle-x bg-light" style="width: 135px; margin-left:67px;">
                                            <div class="text-center" style="font-size: 12px; margin-left:10px;">Tampilan 360º</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /.slider-thumbs -->
                        </div><!-- /.slider -->
                    </div>
                </div>
                <div class="col-lg-4 mb-3 p-0 px-lg-3">
                    <div class="d-none d-lg-block">
                        <h2 id="nama_rumah"><?= $konsep->nama_rumah ?></h2>
                        <h5>Didesain oleh <a style="text-decoration: none;" href="<?php echo base_url('profil_arsitek/' . $konsep->id_arsitek); ?>"><?= $konsep->nama_arsitek ?></a></h5>
                        <div class="d-flex flex-column flex-lg-row align-items-center my-3 gap-3">
                            <?php if ($rating_desain->rating !== null) : ?>
                                <div class="d-flex justify-content-between gap-2 align-items-center">
                                    <div class="jstars" data-value="<?= $rating_desain->rating ?>" data-color="gold" data-size="23px"></div>
                                    <div class="text-warning"><?= $rating_desain->rating ?></div>
                                </div>
                            <?php else : ?>
                                <div class="d-flex justify-content-between gap-2 align-items-center">
                                    <div class="jstars" data-value="" data-color="light-gray" data-size="23px"></div>

                                </div>
                            <?php endif; ?>

                            <div class="d-flex justify-content-between gap-2 align-items-center">
                                <img src="<?php echo base_url('assets/demo/img/eye.png'); ?>">
                                <div><?= $konsep->dilihat ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="nav nav-pills btn-group border border-primary border-2 tab-desain mt-4 mt-lg-0" id="tab-desain">
                        <button class="nav-link btn btn-outline-primary active" data-id="1" id="konsep" data-bs-toggle="pill" data-bs-target="#pills-konsep" type="button" role="tab" aria-controls="pills-konsep" aria-selected="true">Konsep</button>
                        <button class="nav-link btn btn-outline-primary" data-id="2" id="denah" data-bs-toggle="pill" data-bs-target="#pills-denah" type="button" role="tab" aria-controls="pills-denah" aria-selected="true">Denah</button>
                        <button class="nav-link btn btn-outline-primary" data-id="3" id="spesifikasi" data-bs-toggle="pill" data-bs-target="#pills-spesifikasi" type="button" role="tab" aria-controls="pills-spesifikasi" aria-selected="true">Spesifikasi</button>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-konsep" role="tabpanel" aria-labelledby="konsep">
                            <div class="card bg-light border-0 mt-3 p-3" style="height:355px; overflow-y:auto;">
                                <p class="m-0 p-0 mt-1">Biaya konstruksi mulai dari</p>
                                <h3 class="mt-1 fw-semibold"><?= $konsep->lantai == '1' ? "Rp" . number_format(3500000 * $konsep->luas_bangunan, 0, ",", ".") : ($konsep->lantai == '2' ? "Rp" . number_format(4500000 * $konsep->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $konsep->luas_bangunan, 0, ",", ".")); ?></h3>
                                <hr class="p-0 m-0 mt-3 mb-3" />
                                <div class="row justify-content-between mb-4">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-3 ">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center gap-1">
                                                <small class="konsep-sub">Ukuran Lahan</small>
                                                <small class="d-block konsep-data"><?= round($konsep->lebar_lahan) . 'm x ' . round($konsep->panjang_lahan) . 'm' ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center gap-1">
                                                <small class="konsep-sub">Lantai</small>
                                                <small class=" d-block konsep-data"><?= $konsep->lantai ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between mb-4">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/llahan.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center gap-1">
                                                <small class="konsep-sub">Luas Lahan</small>
                                                <small class=" d-block konsep-data"><?= round($konsep->luas_lahan) . ' m' ?><sup>2</sup></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center gap-1">
                                                <small class="konsep-sub">Kamar Tidur</small>
                                                <small class=" d-block konsep-data"><?= $konsep->kamar_tidur ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between mb-4">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center gap-1">
                                                <small class="konsep-sub konsep-data">Luas Bangunan</small>
                                                <small class=" d-block"><?= round($konsep->luas_bangunan) . ' m' ?><sup>2</sup></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center gap-1">
                                                <small class="konsep-sub">Kamar Mandi</small>
                                                <small class=" d-block konsep-data"><?= $konsep->toilet ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <img src="<?php echo base_url('assets/demo/img/gaya_desain.png'); ?>" width="25" height="25">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center gap-1">
                                        <small class="konsep-sub">Gaya Desain</small>
                                        <small class="konsep-data d-block">
                                            <?php
                                            if ($gaya_desain != '') {
                                                $gaya_desain_strings = array();
                                                foreach ($gaya_desain as $gaya) {
                                                    $gaya_desain_strings[] = "<span class='spec-tag'>" . $gaya->gaya_desain . "</span>";
                                                }
                                                echo implode(" | ", $gaya_desain_strings);
                                            }
                                            ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-denah" role="tabpanel" aria-labelledby="denah">
                            <div class="card bg-light border-0 mt-3 p-3" style="height: 355px; overflow-y: auto;">
                                <div class="container">
                                    <ul class="nav nav-pills d-flex justify-content-between">
                                        <li class="nav-item w-30 text-center">
                                            <a class="nav-link-denah active rounded-0 bg-light text-dark" id="lantai1-tab" data-bs-toggle="pill" href="#pills-lantai1" role="tab" aria-controls="pills-lantai1" aria-selected="true" onclick="activateDenah(1)">Lantai 1</a>
                                        </li>

                                        <?php if ($konsep->lantai >= 2) : ?>
                                            <li class="nav-item w-30 text-center">
                                                <a class="nav-link-denah rounded-0 bg-light text-dark" id="lantai2-tab" data-bs-toggle="pill" href="#pills-lantai2" role="tab" aria-controls="pills-lantai2" aria-selected="false" onclick="activateDenah(2)">Lantai 2</a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($konsep->lantai >= 3) : ?>
                                            <li class="nav-item w-30 text-center">
                                                <a class="nav-link-denah rounded-0 bg-light text-dark" id="lantai3-tab" data-bs-toggle="pill" href="#pills-lantai3" role="tab" aria-controls="pills-lantai3" aria-selected="false">Lantai 3</a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <div class="tab-content" style="font-size:0.9em;">
                                    <div class="tab-pane tab-lantai fade show active mt-3" id="pills-lantai1" role="tabpanel" aria-labelledby="lantai1-tab">
                                        <div id="label-lantai1"></div>
                                    </div>
                                    <div class="tab-pane tab-lantai fade mt-3" id="pills-lantai2" role="tabpanel" aria-labelledby="lantai2-tab">
                                        <div id="label-lantai2"></div>
                                    </div>
                                    <div class="tab-pane tab-lantai fade mt-3" id="pills-lantai3" role="tabpanel" aria-labelledby="lantai3-tab">
                                        <div id="label-lantai3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" style="font-size:0.9em;" id="pills-spesifikasi" role="tabpanel" aria-labelledby="spesifikasi">
                            <div class="card bg-light border-0 mt-3 p-3" style="height: 355px; overflow-y: auto;">
                                <div id="label-spesifikasi"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 pe-lg-3 mt-3">
                    <h5 class="mb-3 subheading">Deskripsi</h5>
                    <p class="d-none d-lg-block konsep-desc" style="text-align: justify; "><?= $konsep_desain->konsep_desain ?></p>
                    <div class="d-lg-none" style="text-align: justify; max-height: 150px; overflow-y: auto;">
                        <p><?= $konsep_desain->konsep_desain ?></p>
                    </div>
                </div>
                <?php if ($rating_desain->jumlah_ulasan > 0) : ?>
                    <div class="col-12 mt-3 p-0 pe-3">
                        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                            <h5 class="subheading">Ulasan</h5>
                            <!-- <div class="d-lg-block d-lg-none" style="font-size: 13px;">Lihat Semua</div> -->
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($rating_desain->jumlah_ulasan > 0) : ?>
                    <div class="col-12 d-lg-none p-0 pe-3 mb-2">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-5">
                                <div class="d-flex justify-content-center align-items-center gap-1 mt-lg-5">
                                    <div class="mb-3">
                                        <i class="fa-solid fa-star text-warning fs-6"></i>
                                    </div>
                                    <h1 class="fw-bold" style="font-size: 2em; "><?= $rating_desain->rating ?></h1>
                                    <h4 class="mt-auto" style='font-weight: 400; '>/5</h4>
                                </div>
                            </div>
                            <div class="col-lg-8 col-7">
                                <div class="d-flex align-items-center mb-lg-2">
                                    <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_lima[0]->rating ?>%; background-color: orange; " aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <i class="fa-solid fa-star text-warning me-2 ulasan-bar-star"></i>
                                    <span class='ulasan-bar-text'>5</span>
                                </div>
                                <div class="d-flex align-items-center mb-lg-2">
                                    <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_empat[0]->rating ?>%; background-color: orange; " aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <i class="fa-solid fa-star text-warning me-2 ulasan-bar-star"></i>
                                    <span class='ulasan-bar-text'>4</span>
                                </div>
                                <div class="d-flex align-items-center mb-lg-2">
                                    <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_tiga[0]->rating ?>%; background-color: orange; " aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <i class="fa-solid fa-star text-warning me-2 ulasan-bar-star"></i>
                                    <span class='ulasan-bar-text'>3</span>
                                </div>
                                <div class="d-flex align-items-center mb-lg-2">
                                    <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_dua[0]->rating ?>%; background-color: orange; " aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <i class="fa-solid fa-star text-warning me-2 ulasan-bar-star"></i>
                                    <span class='ulasan-bar-text'>2</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="progress" style="flex-grow: 1; margin-right: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_satu[0]->rating ?>%; background-color: orange; " aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <i class="fa-solid fa-star text-warning me-2 ulasan-bar-star"></i>
                                    <span class='ulasan-bar-text'>1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($rating_desain->jumlah_ulasan > 0) : ?>
                    <div class="col-lg-3 mt-3 d-none d-lg-block p-0 pe-2">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div class="mb-3">
                                <i class="fa-solid fa-star text-warning fs-5"></i>
                            </div>
                            <h1 class="fw-bold"><?= $rating_desain->rating ?></h1>
                            <h4 class="mt-auto">/5</h4>
                        </div>
                        <div class="text-center d-none d-lg-block">
                            <p><u> <?= $rating_desain->jumlah_ulasan ?> Ulasan</u></p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="progress" style="flex-grow: 1; margin-right: 10px; height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_lima[0]->rating ?>%; background-color: #FFD748; " aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <i class="fa-solid fa-star text-warning me-2 "></i>
                            <span>5</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="progress" style="flex-grow: 1; margin-right: 10px;  height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_empat[0]->rating ?>%; background-color: #FFD748; " aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <i class="fa-solid fa-star text-warning me-2"></i>
                            <span>4</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="progress" style="flex-grow: 1; margin-right: 10px;  height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_tiga[0]->rating ?>%; background-color: #FFD748; " aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <i class="fa-solid fa-star text-warning me-2"></i>
                            <span>3</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="progress" style="flex-grow: 1; margin-right: 10px;  height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_dua[0]->rating ?>%; background-color: #FFD748; " aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <i class="fa-solid fa-star text-warning me-2"></i>
                            <span>2</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="progress" style="flex-grow: 1; margin-right: 10px;  height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $rating_satu[0]->rating ?>%; background-color: #FFD748; " aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <i class="fa-solid fa-star text-warning me-2"></i>
                            <span>1</span>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($rating_desain->jumlah_ulasan > 0) : ?>
                    <div class="col-lg-9 p-0 px-lg-3 py-1">
                        <div id="daftar-ulasan" style=" overflow-y: auto;"></div>
                    </div>
                <?php endif; ?>
                <div class="col-12 mt-2 p-0 d-lg-none">
                    <img src="<?php echo base_url('assets/demo/img/banner3.png'); ?>" class="image  d-lg-none" style="width: 100%; transform:scale(1.04);">
                </div>

                <div class="border-0 card card-body mt-3 d-lg-none" style="background-color:#056BB7;">
                    <h5 class=" text-center text-white konsultasi-mobile mb-2">Konsultasi Gratis </h5>
                    <div class="text-center text-white konsultasi-desc-mobile mb-2">Butuh konsultasi dan modifikasi desain hunian Anda</div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-light mt-2 w-50 align-items-center hubungi-kami-mobile" onclick="tanyaDesain()">Hubungi Kami</button>
                    </div>

                </div>
                <div class="col-12 mt-lg-5 mt-3 mb-2 mb-lg-3" id="sectionLine">
                    <hr />
                </div>
            </div>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <style>
                #scroolFixed {
                    position: fixed;
                    top: 100px;
                    right: 120px;
                    transition: top 0.3s ease-in-out;
                    z-index: 900;
                    width: 200px;
                    animation: fadeInDown 0.5s ease-in-out;
                }

                @keyframes fadeInDown {
                    from {
                        opacity: 0;
                        transform: translateY(-20px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            </style>

            <div id="scroolFixed">
                <div class="rounded-3 card card-body mt-1 mb-3 unduh-box">
                    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between mb-2 bg-white">
                        <div class="d-flex justify-content-between gap-2 align-items-center ">
                            <span id="heart-like" style="cursor:pointer;" data-id="<?php echo $id_rumah ?>">
                                <i class="fa-regular fa-heart me-0">
                                </i>
                            </span>
                            <div class="right-box-text">Wishlist</div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 align-items-center share">
                            <div><i class="fa-regular fa-share-from-square"></i>
                                <div class="social">
                                    <?php
                                    $currentUrl = urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                                    $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . $currentUrl;
                                    $twitterShareUrl = 'https://twitter.com/intent/tweet?text=Check%20out%20this%20link:%20' . $currentUrl;
                                    $whatsappShareUrl = 'https://wa.me/?text=Check%20out%20this%20link:%20' . $currentUrl;
                                    ?>


                                    <a class="share-methods instagram" onclick="shareInstagram()"><i class="fa-brands fa-instagram"></i></a>
                                    <a class="share-methods facebook" href="<?php echo $facebookShareUrl; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                    <a class="share-methods twitter" href="<?php echo $twitterShareUrl; ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="share-methods whatsapp" href="<?php echo $whatsappShareUrl; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

                                </div>
                            </div>
                            <div class="right-box-text">Share</div>
                        </div>
                    </div>
                    <a onclick="clickUnduh()" class="btn btn-danger mb-2">
                        <i class="fas fa-download me-2"></i> Unduh Gratis
                    </a>
                    <a onclick="clickUnduh()" class="btn btn-primary mb-2">
                        <i class="fas fa-shopping-cart me-2"></i> Beli Sekarang
                    </a>
                    <div class=" text-center right-box-text"><small style="color:#707070; ">
                            Telah didownload <?= $terjual->terjual ?> kali
                        </small></div>
                </div>
                <div class="border border-dark bg-primary mb-3 card card-body p-3">
                    <h5 class="text-white" onclick="tanyaDesain()">Konsultasi Gratis </h5>
                    <small class=" text-center text-white konsul-gratis-text ">Butuh konsultasi dan modifikasi desain hunian Anda</small>
                    <button type="button" class="fw-semibold btn btn-light w-100 mt-2" onclick="tanyaDesain()">Hubungi Kami</button>
                </div>
                <div class="rounded-3 overflow-hidden">
                    <img src="<?php echo base_url('assets/demo/img/ban_scroll.png'); ?>" style="width: 200px; height: 250px; object-fit:cover;">
                </div>
            </div>
        </div>

    </div>
    <div class="py-2 mt-0">
        <div class="container pb-0">
            <div class="d-flex justify-content-between align-items-center d-lg-block d-lg-none mb-1">
                <div class="fw-semibold fs-5">Rekomendasi Desain</div>
                <div style="font-size: 13px;">
                    <a href="<?= base_url('koleksi') ?>">Lihat Semua</a>
                </div>

            </div>
            <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-4">
                <h4 class="subheading text-center d-none d-lg-block">Rekomendasi Desain</h4>
                <div class="d-none d-lg-block">
                    <a class="btn btn-primary" href="<?= base_url('koleksi') ?>">Lihat Semua<i class="ms-2 fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="position-relative">
                <div class="card-container owl-carousel owl-theme owl-carousel-one">
                    <?php foreach ($produk_popular as $item) { ?>
                        <div class="card product-card border-0 shadow-sm mb-3">
                            <div class="img-container">
                                <img src="<?= base_url('assets/img/desain/' . $item->foto) ?>" class="img-card-produk card-img-top" alt="" onload='updateHeight()'>
                            </div>

                            <div class="card-body card-home">
                                <h5 class="card-title mb-0 fw-semibold" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                    <?= $item->nama_rumah ?></h5>
                                <small class="nama_arsitek mb-0">Design by
                                    <?= $item->nama_arsitek ?></small>
                                <hr />
                                <div class="d-flex align-items-center gap-3 mb-1">
                                    <div>
                                        <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                    </div>
                                    <div>
                                        <small>Lahan Minimal</small>
                                        <small class="fw-semibold d-block"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                    </div>
                                    <div>
                                        <small>Biaya Konstruksi</small>
                                        <small class="fw-semibold d-block tooltip-biaya"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?>
                                            <span class="tooltip-biaya-text">Estimasi Awal</span>
                                        </small>

                                    </div>
                                </div>
                                <div class="mt-3"></div>
                            </div>
                            <div class="card-info">
                                <div class="row justify-content-between">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-2 ms-2">
                                            <div class='m-0 p-0'>
                                                <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                            </div>
                                            <div>
                                                <small style="font-size:0.8em">Luas Bangunan</small>
                                                <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->luas_bangunan ?> m2 </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                            </div>
                                            <div>
                                                <small style="font-size:0.8em">Kamar Tidur</small>
                                                <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->kamar_tidur ?> Kamar </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between mb-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-2 ms-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                            </div>
                                            <div>
                                                <small style="font-size:0.8em">Jumlah Lantai</small>
                                                <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->lantai ?> Lantai </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center gap-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                            </div>
                                            <div>
                                                <small style="font-size:0.8em">Kamar Mandi</small>
                                                <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->toilet ?> Kamar</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-1">
                                    <div class="text-center">
                                        <a class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                    <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnOne"><i class="fas fa-arrow-right fs-7"></i></button>
                </div>
            </div>

        </div>

    </div>

</div>


<!-- <script src="https://kit.fontawesome.com/b30683d06c.js" crossorigin="anonymous"></script> -->
<script>
    function detailRumah(id) {
        location.href = "<?= base_url('detail_koleksi/') ?>" + id;
    }

    async function shareInstagram() {
        if (!navigator.canShare) {
            alert(`Your browser doesn't support the Web Share API.`);
        } else {
            try {
                const currentUrl = window.location.href;
                await navigator.share({
                    title: "Desain Rumahtinggal",
                    text: `Check out this link: ${currentUrl}`,
                });
                alert("Shared!");
            } catch (error) {
                alert(`Error: ${error.message}`);
            }
        }
    }

    var $sliderSlides = $('.slider-photos .slides.owl-carousel'),
        $sliderThumbs = $('.slider-photos .slider-thumbs.owl-carousel'),
        speed = 700,
        activeClass = 'active';

    // Start Carousel
    $sliderSlides.owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            nav: false,
            smartSpeed: speed,
            dots: false,
        })
        .on('click', '.owl-prev', function() {
            var i = $(this).index();
            var activeThumb = $sliderThumbs.find('.slide.active').parent();
            var all = $sliderThumbs.find('.owl-item').length - 1;

            if (activeThumb.prev().length) {
                activeThumb.find('.slide').removeClass(activeClass);
                activeThumb.prev().find('.slide').addClass(activeClass);
                $sliderThumbs.trigger('to.owl.carousel', [i, speed, true]);
            } else {
                $sliderThumbs.find('.owl-item').eq(all).find('.slide').addClass(activeClass);
                $sliderThumbs.trigger('to.owl.carousel', [all, speed, true]);
            }

        })
        .on('click', '.owl-next', function() {
            var i = $(this).index();
            var activeThumb = $sliderThumbs.find('.slide.active').parent();

            if (activeThumb.next().length) {
                activeThumb.find('.slide').removeClass(activeClass);
                activeThumb.next().find('.slide').addClass(activeClass);
                $sliderThumbs.trigger('to.owl.carousel', [i, speed, true]);
            } else {
                $sliderThumbs.find('.owl-item').eq(0).find('.slide').addClass(activeClass);
                $sliderThumbs.trigger('to.owl.carousel', [0, speed, true]);
            }
        });



    $("#nextBtnProduk").click(function() {
        if ($('#pills-denah').hasClass('show')) {
            var activeTabId = $('.tab-pane.tab-lantai.fade.show.active').attr('id');
            console.log(activeTabId)
            var currentFloor = parseInt(activeTabId.match(/\d+/)[0]);
            var nextFloor = currentFloor + 1;
            if (nextFloor > <?php echo $konsep->lantai ?>) {
                nextFloor = currentFloor;
            }

            var currentTabId = '#pills-lantai' + currentFloor;
            var previousTabId = '#pills-lantai' + nextFloor;
            $(currentTabId).removeClass('show active');
            $(previousTabId).addClass('show active');

            var currentTabButtonId = '#lantai' + currentFloor + '-tab';
            var previousTabButtonId = '#lantai' + nextFloor + '-tab';
            $(currentTabButtonId).removeClass('active');
            $(previousTabButtonId).addClass('active');
            activateDenah(nextFloor);
        }

        // var activeThumb = $sliderThumbs.find(".slide.active").parent();

        // if (activeThumb.length) {
        //     var currentIndex = activeThumb.index();
        //     var nextThumb = activeThumb.next();

        //     if (nextThumb.length) {
        //         activeThumb.find(".slide").removeClass(activeClass);
        //         nextThumb.find(".slide").addClass(activeClass);
        //         $sliderThumbs.trigger("to.owl.carousel", [currentIndex + 1, speed, true]);
        //     } else {
        //         $sliderThumbs.find(".owl-item").eq(0).find(".slide").addClass(activeClass);
        //         $sliderThumbs.trigger("to.owl.carousel", [0, speed, true]);
        //     }

        //     // Trigger next event for $sliderSlides
        //     $sliderSlides.trigger("next.owl.carousel");
        // }
        $sliderSlides.trigger("next.owl.carousel");
    });

    // Fungsi untuk tombol kustom "Previous"
    $("#prevBtnProduk").click(function() {
        if ($('#pills-denah').hasClass('show')) {
            var activeTabId = $('.tab-pane.tab-lantai.fade.show.active').attr('id');
            console.log(activeTabId)
            var currentFloor = parseInt(activeTabId.match(/\d+/)[0]);
            var previousFloor = currentFloor - 1;
            if (previousFloor < 1) {
                previousFloor = 1;
            }

            var currentTabId = '#pills-lantai' + currentFloor;
            var previousTabId = '#pills-lantai' + previousFloor;
            $(currentTabId).removeClass('show active');
            $(previousTabId).addClass('show active');

            var currentTabButtonId = '#lantai' + currentFloor + '-tab';
            var previousTabButtonId = '#lantai' + previousFloor + '-tab';
            $(currentTabButtonId).removeClass('active');
            $(previousTabButtonId).addClass('active');
            activateDenah(previousFloor);
        }

        // var activeThumb = $sliderThumbs.find(".slide.active").parent();

        // if (activeThumb.length) {
        //     var currentIndex = activeThumb.index();
        //     var prevThumb = activeThumb.prev();

        //     if (prevThumb.length) {
        //         activeThumb.find(".slide").removeClass(activeClass);
        //         prevThumb.find(".slide").addClass(activeClass);
        //         $sliderThumbs.trigger("to.owl.carousel", [currentIndex - 1, speed, true]);
        //     } else {
        //         var last = $sliderThumbs.find(".owl-item").length - 1;
        //         $sliderThumbs.find(".owl-item").eq(last).find(".slide").addClass(activeClass);
        //         $sliderThumbs.trigger("to.owl.carousel", [last, speed, true]);
        //     }

        //     // Trigger prev event for $sliderSlides
        //     $sliderSlides.trigger("prev.owl.carousel");
        // }
        $sliderSlides.trigger("prev.owl.carousel");
    });

    $sliderThumbs
        .owlCarousel({
            loop: false,
            margin: 0,
            items: 3,
            nav: false,
            smartSpeed: speed,
            dots: false
        })
        .on('click', '.owl-item', function() {
            var i = $(this).index();

            $sliderThumbs.trigger('to.owl.carousel', [i, speed, true]);
            $sliderSlides.trigger('to.owl.carousel', [i, speed, true]);
        })

    // If the loop is disabled
    // .on('click', '.owl-next.disabled', function() {
    // 	$sliderThumbs.trigger('to.owl.carousel', [0, speed, true]);
    // })
    // .on('click', '.owl-prev.disabled', function() {
    // 	var last = $sliderThumbs.find('.owl-item').length;
    // 	$sliderThumbs.trigger('to.owl.carousel', [last, speed, true]);
    // })

    $('.slider-photos .counter .all').text($('.slider-photos .slider-thumbs .slide').length);

    $sliderThumbs.find('.slide').on('click', function(event) {
        event.preventDefault();

        $sliderThumbs.find('.slide.active').removeClass(activeClass);
        $(this).addClass(activeClass);
    });

    var owlSeven = $(".owl-carousel-detail");
    owlSeven.owlCarousel({
        items: 1,
        nav: false,
        margin: 20,
        loop: true,
        lazyLoad: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
    });

    $(window).ready(updateHeight);
    $(window).resize(updateHeight);

    function updateHeight() {
        var div = $('.img-container');
        var divref = $('.owl-carousel-one').find('.product-card')
        var width = divref.width() / 1.3333333;

        div.css('height', width);

        var cards2 = document.querySelectorAll('.owl-carousel-two .card');

        var maxHeight2 = 0;
        cards2.forEach(function(card2) {
            maxHeight2 = Math.max(maxHeight2, card2.offsetHeight);
        });
        cards2.forEach(function(card2) {
            card2.style.height = maxHeight2 + 'px';
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        var scrollFixed = document.getElementById("scroolFixed");
        var sectionA = document.getElementById("sectionLine");

        window.addEventListener("scroll", function() {
            var scrollY = window.scrollY || document.documentElement.scrollTop;
            var stopAt = sectionA.offsetTop - scrollFixed.clientHeight; // Menghentikan pergerakan setelah melewati Section A
            var minStopAt = stopAt > 820 ? stopAt : 822;

            // Hitung posisi tengah layar
            var screenHeight = window.innerHeight;
            var containerHeight = scrollFixed.clientHeight;
            var centerY = (screenHeight - containerHeight) / 2;

            // Periksa apakah container sudah berada di tengah atau belum
            if (scrollY > centerY && scrollY < stopAt) {
                scrollFixed.style.top = centerY + "px";
            } else if (scrollY >= stopAt) {
                scrollFixed.style.top = minStopAt + "px";
            } else {
                scrollFixed.style.top = "100px";
            }

            // Berhenti animasi ketika mencapai atau melewati Section A
            if (scrollY >= stopAt) {
                scrollFixed.style.animation = "none";
            } else {
                scrollFixed.style.animation = "fadeInDown 0.5s ease-in-out";
            }
        });

        // Sisipkan fungsi untuk menetapkan posisi awal pada saat memuat ulang halaman
        // window.addEventListener("load", function() {
        //     var scrollY = window.scrollY || document.documentElement.scrollTop;
        //     var scrollFixed = document.getElementById("scroolFixed");
        //     var screenHeight = window.innerHeight;
        //     var containerHeight = scrollFixed.clientHeight;
        //     var centerY = (screenHeight - containerHeight) / 2;

        //     // Periksa apakah container sudah berada di tengah atau belum
        //     if (scrollY > centerY) {
        //         scrollFixed.style.top = centerY + "px";
        //     } else {
        //         scrollFixed.style.top = "100px";
        //     }
        // });
    });

    function clickUnduh() {
        var id_customer = Cookies.get('id_customer', {

            domain: 'rumahtinggal.id'

        });

        $.ajax({
            url: "<?= base_url('api/getCustomerId/') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                if (id_customer != null && id_customer != '' && id_customer == data.id) {
                    window.location.href = "<?= base_url('paket_pembelian/') . $id_rumah ?>"
                } else {
                    $('#modalLogin').modal('show');
                }
            }
        })


    }





    var id_rumah, tab_denah_load = 0,

        tab_spek_load = 0;

    $(document).ready(function() {

        id_rumah = "<?= $id_rumah ?>";

        $('#tab-desain .nav-link').on('click', function() {

            let tab = $(this).data('id');

            if (tab == 2) {

                if (tab_denah_load == 0) {

                    $.ajax({

                        url: "<?= base_url('api/getDetailDenahLantai1/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != '') {

                                $.each(data, function(i, item) {

                                    $('#label-lantai1').append(`<div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="bg-dark text-white rounded-circle" width="25" height="25"><span class="mx-2">` + item.label + `</span></div>
                                                <div>` + item.ruang + `</div>
                                            </div>
                                            <div>` + item.luas + ` m</div>
                                        </div>`);

                                });

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });


                    $.ajax({

                        url: "<?= base_url('api/getDetailDenahLantai2/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != '') {

                                $.each(data, function(i, item) {

                                    $('#label-lantai2').append(`<div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="bg-dark text-white rounded-circle" width="25" height="25"><span class="mx-2">` + item.label + `</span></div>
                                                <div>` + item.ruang + `</div>
                                            </div>
                                            <div>` + item.luas + ` m</div>
                                        </div>`);

                                });

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                    $.ajax({

                        url: "<?= base_url('api/getDetailDenahLantai3/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != '') {

                                $.each(data, function(i, item) {

                                    $('#label-lantai3').append(`<div class="d-flex justify-content-between gap-2 align-items-center mb-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="bg-dark text-white rounded-circle" width="25" height="25"><span class="mx-2">` + item.label + `</span></div>
                                                <div>` + item.ruang + `</div>
                                            </div>
                                            <div>` + item.luas + ` m</div>
                                        </div>`);

                                });

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                    tab_denah_load = 1;

                }

            } else if (tab == 3) {

                if (tab_spek_load == 0) {

                    $.ajax({

                        url: "<?= base_url('api/getDetailSpesifikasi/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != '') {

                                $.each(data, function(i, item) {

                                    $('#label-spesifikasi').append(`<h5 class="fw-semibold mt-1" style="font-size:1.3em;"> ` + item.bagian_rumah + `</h5>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">` + item.material + `</div>
                                        <div class="col-lg-6">` + item.spesifikasi + `</div>
                                    </div>
                                    <hr class="p-0 m-0">
                                </div>`);

                                });

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                    tab_spek_load = 1;

                }

            }

        });

    });

    // script.js

    function getUlasan() {

        $.ajax({

            url: "<?= base_url('api/getUlasan/') ?>" + id_rumah,

            type: "GET",

            dataType: "JSON",

            success: function(data) {

                if (data != '') {


                    $.each(data, function(i, item) {
                        const formattedDate = formatDate(item.tgl_buat);
                        $('#daftar-ulasan').append(`<div class="position-relative  rounded-3 px-3 mb-3 mt-3 ulasan-box py-1">
                        <div class="d-flex justify-content-between align-items-center mt-1 mb-1">
                                <div class="d-flex justify-content-between gap-2 align-items-center">
                                    <div class="jstars-ulasan" data-value="${item.rating}" data-color="gold" data-size="23px"></div>
                                    <small class="konsep-sub ms-3">${formattedDate}</small>
                                    <div class="position-absolute me-3 mt-2 top-0 end-0">
                                        <img src="<?php echo base_url('assets/demo/img/setting.png'); ?>" width="20" height="20">
                                    </div>
                                </div>
                            </div>
                            <h6 class="ulasan-nama">${item.nama_customer}</h6>
                            <p class="p-0 mb-2">${item.ulasan}</p>
                        </div>`);

                    });
                    $('.jstars-ulasan').jstars({
                        readOnly: true,
                        size: 23,
                        color: 'gold',
                        // tambahkan opsi jStars lainnya sesuai kebutuhan
                    });


                }

            },

            error: function(jqHR, texStatus, errorThrown) {}

        });

    }

    function formatDate(inputDate) {
        const months = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        const [year, month, day] = inputDate.split("-");
        const monthIndex = parseInt(month, 10) - 1;

        return `${parseInt(day, 10)} ${months[monthIndex]} ${year}`;
    }

    $(document).ready(function() {
        // Panggil fungsi getUlasan dengan halaman pertama
        getUlasan();
    });

    // Function to add event listeners to the slide image containers
    function addEventListenersToContainers() {
        const containerClass = 'slide-image-container';
        const imageClass = 'img-touch-koleksi';

        const containers = document.getElementsByClassName(containerClass);
        const images = document.getElementsByClassName(imageClass);

        for (let i = 0; i < containers.length; i++) {
            const container = containers[i];
            const image = images[i];

            if (container && image) {
                container.addEventListener('mousemove', function(e) {
                    const rect = container.getBoundingClientRect();
                    const x = (e.clientX - rect.left) / rect.width * 100;
                    const y = (e.clientY - rect.top) / rect.height * 100;

                    image.style.transformOrigin = `${x}% ${y}%`;
                });

                container.addEventListener('mouseleave', function() {
                    image.style.transformOrigin = 'center center';
                });

                container.addEventListener('mouseenter', function() {
                    image.style.transform = 'scale(1.2)';
                });

                container.addEventListener('mouseleave', function() {
                    image.style.transform = 'scale(1)';
                });
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Add event listeners to existing slide image containers
        addEventListenersToContainers();
    });

    //denah pill clicked
    $(document).ready(function() {
        $("#denah").click(function() {
            var denahImage = "<?php echo $interior->denah; ?>";
            if (denahImage) {
                var slideContainer = $(".slides");
                slideContainer.empty(); // Clear existing slides
                slideContainer.append('<div class="slide mb-3 h-100"><div class="slide-image-container rounded-3 overflow-hidden" id="zoom-container-eksterior"><img src="<?= base_url('assets/img/denah/') ?>' + denahImage + '" alt="" class="img-touch-koleksi"></div></div>');

                var slideContainerMobile = $(".owl-carousel-detail");
                slideContainerMobile.empty(); // Clear existing slides
                slideContainerMobile.append(`
                <div class="card-container">
                    <div style="background-image: url('<?= base_url('assets/img/denah/' . $interior->denah) ?>')" class="bg-card-detail">
                        <div class="position-absolute top-0 start-0 ms-3 rounded-2 p-2 mt-2 denah-card">Denah Lantai 1</div>
                    </div>
                </div>
                `);

            }
            addEventListenersToContainers();
        });
    });

    //denah lantai tab clicked
    function activateDenah(lantai) {
        var denahImages = {
            1: "<?php echo isset($interior) ? $interior->denah : ''; ?>",
            2: "<?php echo isset($interior2) ? $interior2->denah : ''; ?>",
            3: "<?php echo isset($interior3) ? $interior3->denah : ''; ?>",
            // Add more mappings as needed
        };

        var defaultDenah = ""; // Default denah image URL if lantai value is not handled

        var denahImage = denahImages[lantai] || defaultDenah;
        if (denahImage) {
            var slideContainer = $(".slides");
            slideContainer.empty(); // Clear existing slides
            slideContainer.append('<div class="slide mb-3 h-100"><div class="slide-image-container rounded-3 overflow-hidden" id="zoom-container-eksterior"><img src="<?= base_url('assets/img/denah/') ?>' + denahImage + '" alt="" class="img-touch-koleksi"></div></div>');

            var slideContainerMobile = $(".owl-carousel-detail");
            slideContainerMobile.empty(); // Clear existing slides
            slideContainerMobile.append(`
                <div class="card-container">
                    <div style="background-image: url('<?= base_url('assets/img/denah/') ?>${denahImage}')" class="bg-card-detail">
                        <div class="position-absolute top-0 start-0 ms-3 rounded-2 p-2 mt-2 denah-card">Denah Lantai ${lantai}</div>
                    </div>
                </div>
            `);

        }
        addEventListenersToContainers();

    }

    //konsep dan spesifikasi pill clicked
    $(document).ready(function() {
        $("#konsep, #spesifikasi").click(function() {
            var slideContainer = $(".slides");
            $(".slides").empty();

            <?php if ($foto_rumah !== null && !empty($foto_rumah)) : ?>
                <?php foreach ($foto_rumah as $foto) : ?>
                    // Append slide for each image in $foto_rumah
                    $(".slides").append('<div class="slide mb-3"><div class="slide-image-container rounded-3 overflow-hidden" id="zoom-container-eksterior"><img src="<?= base_url('assets/img/konsep/') ?>' + '<?= $foto->foto ?>' + '" alt="" class="img-touch-koleksi"></div></div>');
                <?php endforeach; ?>
            <?php else : ?>
                // If $foto_rumah is null or empty, append slide with $konsep->foto
                $(".slides").append('<div class="slide mb-3"><div class="slide-image-container rounded-3 overflow-hidden" id="zoom-container-eksterior"><img src="<?= base_url('assets/img/konsep/') ?>' + '<?= $konsep->foto ?>' + '" alt="" class="img-touch-koleksi"></div></div>');
            <?php endif; ?>
            $(".slides").trigger('destroy.owl.carousel');
            $(".slides").owlCarousel({
                    loop: true,
                    items: 1,
                    margin: 0,
                    nav: false,
                    smartSpeed: speed,
                    dots: false,
                })
                .on('click', '.owl-prev', function() {
                    var i = $(this).index();
                    var activeThumb = $sliderThumbs.find('.slide.active').parent();
                    var all = $sliderThumbs.find('.owl-item').length - 1;

                    if (activeThumb.prev().length) {
                        activeThumb.find('.slide').removeClass(activeClass);
                        activeThumb.prev().find('.slide').addClass(activeClass);
                        $sliderThumbs.trigger('to.owl.carousel', [i, speed, true]);
                    } else {
                        $sliderThumbs.find('.owl-item').eq(all).find('.slide').addClass(activeClass);
                        $sliderThumbs.trigger('to.owl.carousel', [all, speed, true]);
                    }

                })
                .on('click', '.owl-next', function() {
                    var i = $(this).index();
                    var activeThumb = $sliderThumbs.find('.slide.active').parent();

                    if (activeThumb.next().length) {
                        activeThumb.find('.slide').removeClass(activeClass);
                        activeThumb.next().find('.slide').addClass(activeClass);
                        $sliderThumbs.trigger('to.owl.carousel', [i, speed, true]);
                    } else {
                        $sliderThumbs.find('.owl-item').eq(0).find('.slide').addClass(activeClass);
                        $sliderThumbs.trigger('to.owl.carousel', [0, speed, true]);
                    }
                });

            var slideContainerMobile = $(".owl-carousel-detail");
            slideContainerMobile.empty();
            <?php if ($foto_rumah !== null && !empty($foto_rumah)) : ?>
                <?php foreach ($foto_rumah as $foto) : ?>
                    slideContainerMobile.append(`
                <div class="card-container">
                    <div style="background-image: url('<?= base_url('assets/img/konsep/' . $foto->foto) ?>')" class="bg-card-detail">
                        
                    </div>
                </div>
            `);
                <?php endforeach; ?>
            <?php else : ?>
                slideContainerMobile.append(`
                <div class="card-container">
                    <div style="background-image: url('<?= base_url('assets/img/konsep/' . $konsep->foto) ?>')" class="bg-card-detail">
                        
                    </div>
                </div>
            `);
            <?php endif; ?>
            $(".owl-carousel-detail").trigger('destroy.owl.carousel');
            $(".owl-carousel-detail").owlCarousel({
                items: 1,
                nav: false,
                margin: 20,
                loop: true,
                lazyLoad: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
            });

            addEventListenersToContainers();
        });
    });


    function isMobile() {

        var check = false;

        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);

        return check;

    };


    function tanyaDesain() {

        let nama_desain = $('#nama_rumah').text();

        let text = `Halo Admin RumahTinggal.id,\nSaya ingin menanyakan desain rumah *` + nama_desain + `* sesuai link ini.\n\nhttps://rumahtinggal.id/detail/` + id_rumah + `\n\nApakah saya bisa mendapatkan informasi lebih lanjut?\nTerima kasih`;

        let phone = '628112636228';

        let message = encodeURIComponent(text);



        let api_wa;

        if (isMobile() == true) api_wa = "whatsapp://send";

        else api_wa = "https://api.whatsapp.com/send";

        let url = api_wa + '?phone=' + phone + '&text=' + message;

        window.open(url, '_blank');

    }

    $(document).ready(function() {
        $.ajax({
            url: '<?php echo base_url('api/getKatalogDaftarProdukFavorit'); ?>', // Assuming base_url() is a function provided by your framework to generate the base URL
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Check if any object in the response array has the desired id_rumah
                var isFavorited = response.some(function(item) {
                    return item.id_rumah == <?php echo $id_rumah; ?>;
                });

                // Modify the heart-like element based on whether the product is favorited or not
                if (isFavorited) {
                    $('#heart-like').find('[data-fa-i2svg]').toggleClass('fa-regular').toggleClass('fa-solid').css('color', 'red');

                    $('#heart-like-mobile').find('[data-fa-i2svg]').toggleClass('fa-regular').toggleClass('fa-solid').css('color', 'red');
                }
            },
            error: function(xhr, status, error) {
                // Handle errors if any
                console.error('Error:', error);
            }
        });
    });



    $(document).ready(function() {
        $('#heart-like').click(function() {
            var id_customer = Cookies.get('id_customer', {

                domain: 'rumahtinggal.id'

            });
            icon = $(this).find('svg');
            let id_rumah = $(this).data('id');
            $.ajax({
                url: "<?= base_url('api/getCustomerId/') ?>",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    if (id_customer != null && id_customer != '' && id_customer == data.id) {

                        console.log('id rumah', id_rumah)
                        if (icon.attr('data-prefix') === "far") {
                            $('#heart-like')
                                .find('[data-fa-i2svg]').toggleClass('fa-regular').toggleClass('fa-solid').css('color', 'red');
                            $.ajax({
                                url: "<?= base_url('api/simpanDisukai') ?>",
                                type: "POST",
                                data: {
                                    "id_rumah": id_rumah,
                                    "id_customer": id_customer,
                                    "suka": 1
                                },
                                dataType: "JSON",
                                success: function(data) {}
                            });
                        } else {
                            $('#heart-like')
                                .find('[data-fa-i2svg]').toggleClass('fa-solid').toggleClass('fa-regular').css('color', 'black');
                            $.ajax({
                                url: "<?= base_url('api/hapusDisukai/') ?>" + id_rumah + "/" + id_customer,
                                type: "POST",
                                dataType: "JSON",
                                success: function(data) {}
                            });
                        }
                    } else $('#modalLogin').modal('show');
                }
            })

        });

        $('#heart-like-mobile').click(function() {
            var id_customer = Cookies.get('id_customer', {

                domain: 'rumahtinggal.id'

            });
            let id_rumah = $(this).data('id');
            icon = $(this).find('svg');
            $.ajax({
                url: "<?= base_url('api/getCustomerId/') ?>",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    if (id_customer != null && id_customer != '') {

                        console.log('id rumah', id_rumah)
                        if (icon.attr('data-prefix') === "far") {
                            $('#heart-like-mobile')
                                .find('[data-fa-i2svg]').toggleClass('fa-regular').toggleClass('fa-solid').css('color', 'red');
                            $.ajax({
                                url: "<?= base_url('api/simpanDisukai') ?>",
                                type: "POST",
                                data: {
                                    "id_rumah": id_rumah,
                                    "id_customer": id_customer,
                                    "suka": 1
                                },
                                dataType: "JSON",
                                success: function(data) {}
                            });
                        } else {
                            $('#heart-like-mobile')
                                .find('[data-fa-i2svg]').toggleClass('fa-solid').toggleClass('fa-regular').css('color', 'black');
                            $.ajax({
                                url: "<?= base_url('api/hapusDisukai/') ?>" + id_rumah + "/" + id_customer,
                                type: "POST",
                                dataType: "JSON",
                                success: function(data) {}
                            });
                        }
                    } else $('#modalLogin').modal('show');
                }
            })

        });
    });
</script>