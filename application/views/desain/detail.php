<head>

    <meta name="viewport" content="width=1350">

</head>

<style>
    img {

        pointer-events: all;

    }



    .col-md-12 {

        padding-left: 0px !important;

    }



    .col-md-3 {

        max-width: 48%;

    }



    .zoomIn {

        overflow: hidden;

        position: relative;

        z-index: 100;

        cursor: crosshair;

    }



    .normal-zoom {

        transform: scale(1);

        cursor: zoom-in;

        transition: transform 250ms;

    }



    .zoom-in {

        transform: scale(1.6);

        cursor: zoom-out;

        transition: transform 250ms;

    }



    .btn:focus,

    .btn.focus {

        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0) !important;

    }



    .btn-danger {

        color: #fff;

        background-color: #ff0018;

        border-color: #ff0018;

    }



    .btn-beli-desain {

        padding: 5px 14px;

        border: none;

        font-size: 15px;

    }



    .btn.tanya-arsitek {

        padding: 3px 8px;

        background: #ffbf00;

        color: #fff !important;

        border: none;

    }



    .btn.tanya-arsitek:hover {

        background: #ce9c05;

    }



    .btn-tulis-ulasan {

        padding: 6px 16px;

        font-size: 15px;

    }



    .info-terjual {

        font-size: 15px;

        margin-left: 8px;

        position: absolute;

        margin-top: 5px;

    }



    .nav-tabs {

        border-bottom: none;

    }



    .nav-tabs .nav-item {

        background: #E0EDF7;

        margin-right: 1px;

        margin-bottom: 0;

        margin-top: 1px;

    }



    .nav-tabs .nav-link {

        border: 0;

        border-top-left-radius: 0;

        border-top-right-radius: 0;

        color: #034F84;

        cursor: pointer;

        font-weight: 400;

    }



    .nav-tabs .nav-link.active,

    .nav-tabs .nav-item.show .nav-link {

        background: #026CB6;

        color: #fff;

    }



    .banner-area .overlay {

        background: #000;

        opacity: 0.95;

    }



    .form-control:focus {

        border-color: #0075f3;

        box-shadow: none !important;

    }



    #frm-ulasan .btnrating {

        border: 0;

        background: #fff;

        padding: 0 5px;

    }



    #frm-ulasan .btn-warn i {

        color: #ffe300 !important;

    }



    #frm-ulasan .fa-star {

        color: #d7d7d7;

        font-size: 25px;

        padding-top: 5px;

    }



    .ulasan {

        width: 100%;

    }



    .review-block-avatar {

        max-width: 10%;

        padding-left: 15px;

        padding-top: 10px;

    }



    .review-block-name {

        font-weight: 400;

        text-transform: capitalize;

        font-size: 15px;

    }



    .review-block-description {

        margin: 3px 0 22px;

        font-size: 15px;

    }



    #spesifikasi::before {

        content: url(../assets/img/watermark-rt-besar.png);

        position: absolute;

        z-index: 100;

        top: 35%;

        left: 42%;

    }



    #spesifikasi::before {

        top: 25%;

    }



    .side-konsep {

        background: #fff;

        padding: 18px;

        font-size: 15px;

        height: 260px;

    }



    .side-konsep .sec-biaya {

        background: #026cb6;

        color: #fff;

        padding: 7px;

        font-size: 16px;

        text-align: center;

        margin-bottom: 13px;

    }



    .side-konsep .sec-biaya [data-tootik]::before {

        border-top-color: #ffbf00;

    }



    .side-konsep .sec-biaya [data-tootik]::after {

        background: #ffbf00;

    }



    .side-konsep .product-grid {

        display: inline-flex;

        height: 30px;

        margin: 0;

        justify-content: space-between;

        max-width: 28%;

        vertical-align: sub;

    }



    .side-konsep .card-group {

        margin-bottom: 10px;

    }



    .side-konsep .card-group .sec-icon {

        width: 30px;

        margin-top: -2px;

    }



    .side-konsep .card-group .sec-icon img {

        width: 22px;

        height: 23px;

    }



    .side-konsep .card-group .sec-title {

        width: 118px;

    }



    .side-konsep .card-group .sec-spec::before {

        content: ':';

        margin-right: 8px;

    }



    .side-konsep .card-group .sec-spec sup {

        color: #000;

    }



    .side-konsep .card-group .spec-tag {

        padding: 2px 6px;

        margin-right: 3px;

        border: 1px solid #026CB6;

        border-radius: 4px;

        color: #026CB6;

    }



    .side-konsep .card-group .spec-tag:first-child {

        margin-left: 5px;

    }



    .denah {

        height: 460px;

        display: flex;

        justify-content: center;

        overflow: hidden;

    }



    .denah .img-wrapper::before {

        top: 35% !important;

        left: 38% !important;

    }



    .denah-number {

        width: 23px;

        height: 23px;

        line-height: 1.5;

        border-radius: 50%;

        font-size: 14px;

        color: #026CB6;

        text-align: center;

        background: #fff;

        border: 1px solid #026CB6;

    }



    .denah .image {

        height: 100%;

        width: 100%
    }



    .scrollable {

        overflow-y: auto;

        max-height: 20em;

        scrollbar-color: #026CB6 #f4f4f440;

        scrollbar-width: thin;

    }



    #tabel-spesifikasi {

        font-size: 16px;

    }



    #tabel-spesifikasi thead {

        background: #026CB6;

        text-align: center;

        color: #fff;

    }



    #tabel-spesifikasi th,

    #tabel-spesifikasi td {

        padding: 8px 12px;

    }



    .rounded-circle.palet-img {

        width: 110px;

        height: 110px;

        margin-bottom: 5px;

    }



    .img-rounded {

        width: 50px;

        border-radius: 100% !important;

    }



    .img-slider {

        width: 875px;

        height: 656px;

        margin-left: 16px;

    }



    .progress-bar {

        background-color: #ffe300 !important;

    }



    .list-produk-serupa .product-grid {

        height: 390px;

    }
</style>



<div class="container mt-80 mb-40">

    <div class="row">

        <div class="col-md-9 p0">

            <h3 class="text-uppercase" id="nama_rumah"><?= $konsep->nama_rumah ?></h3>

            <p class="mb-0">Didesain oleh <a href="<?= base_url('profil_arsitek/' . $konsep->id_arsitek) ?>" class="text-custom bold"><?= $konsep->nama_arsitek ?></a></p>

        </div>

        <div class="col-md-3 p0 mt-10">

            <ul class="nav nav-tabs pull-right" id="tab-desain" role="tablist">

                <li class="nav-item active">

                    <a class="nav-link active" data-id="1" data-toggle="tab" href="#konsep" role="tab" aria-selected="true">Konsep</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" data-id="2" data-toggle="tab" href="#denah" role="tab" aria-selected="false">Denah</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" data-id="3" data-toggle="tab" href="#spesifikasi" role="tab" aria-selected="false">Spesifikasi</a>

                </li>

            </ul>

        </div>

    </div>

    <div class="row">

        <div class="col-md-12 tab-content p0 mt-10">

            <div class="tab-pane fade active show" id="konsep" role="tabpanel">

                <!-- <img class="d-block w-100" src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>"> -->



                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <img class="d-block w-100" src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>" alt="First slide">

                        </div>

                        <?php if ($foto_rumah != '') {

                            foreach ($foto_rumah as $foto_rmh) echo "<div class='carousel-item'><img class='d-block w-100' src='https://rumahtinggal.id/assets/img/konsep/" . $foto_rmh->foto . "' alt='slide'></div>";
                        } ?>



                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        <span class="sr-only">Previous</span>

                    </a>

                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        <span class="sr-only">Next</span>

                    </a>

                </div>





                <div class="row mt-3" style="margin: 0;">

                    <div class="col-md-7 pl-0">

                        <h3 style="font-weight: 300;display: none;">Konsep Desain</h3>

                        <p class="text-justify" style="font-size: 16px;"><?= $konsep_desain->konsep_desain ?></p>

                    </div>

                    <div class="col-md-5 side-konsep">

                        <div class="col-md-12 sec-biaya">Biaya konstruksi <span class="bold" data-tootik="Estimasi awal" data-tootik-conf="square"><?= $konsep->lantai == '1' ? "Rp" . number_format(3500000 * $konsep->luas_bangunan, 0, ",", ".") : ($konsep->lantai == '2' ? "Rp" . number_format(4500000 * $konsep->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $konsep->luas_bangunan, 0, ",", ".")); ?></span></div>

                        <div class="col-md-8 p0" style="display: inline-block;max-width: 71%;">

                            <a class="btn btn-danger btn-beli-desain" href="<?= base_url('paket/') . $id_rumah ?>">Beli Desain</a>

                            <a class="btn tanya-arsitek" title="Tanya Desain" onclick="tanyaDesain()"><i class="fa fa-comments" style="font-size: 17px;"></i></a>

                            <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Desain terjual <?= $terjual->terjual ?> dari 10</span>

                        </div>

                        <div class="col-md-4 product-grid p0">

                            <div class="product-statistic">

                                <span class="view">

                                    <i class="fa fa-eye"></i><?= $konsep->dilihat ?>

                                </span>

                            </div>

                            <div class="product-statistic">

                                <span class="like">

                                    <i class="fa fa-heart-o" data-id="<?= $konsep->id_rumah ?>"></i><span class="value"><?= $konsep->suka ?></span>

                                </span>

                            </div>

                            <div class="product-statistic">

                                <div class="share"><i class="fa fa-share-alt"></i>

                                    <div class="social">

                                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah ?>" target="_blank"><i class="fa fa-facebook"></i></a>

                                        <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah ?>" target="_blank"><i class="fa fa-twitter"></i></a>

                                        <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah . ' ' . $konsep->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="row mt-15" style="font-size: 16px;">

                            <div class="col-md-8 pr-0" style="max-width: 63%;flex: 0 0 63%;">

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_dimensi_lahan.png') ?>"></div>

                                    <div class="sec-title">Dimensi Lahan</div>

                                    <div class="sec-spec"><?= $konsep->lebar_lahan . ' m x ' . $konsep->panjang_lahan . ' m' ?></div>

                                </div>

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>"></div>

                                    <div class="sec-title">Luas Lahan</div>

                                    <div class="sec-spec"><?= $konsep->luas_lahan . ' m' ?><sup>2</sup></div>

                                </div>

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>"></div>

                                    <div class="sec-title">Luas Bangunan</div>

                                    <div class="sec-spec"><?= $konsep->luas_bangunan . ' m' ?><sup>2</sup></div>

                                </div>

                            </div>

                            <div class="col-md-4 p0">

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>"></div>

                                    <div class="sec-title">Jumlah Lantai</div>

                                    <div class="sec-spec"><?= $konsep->lantai ?></div>

                                </div>

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>"></div>

                                    <div class="sec-title">Kamar Tidur</div>

                                    <div class="sec-spec"><?= $konsep->kamar_tidur ?></div>

                                </div>

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>"></div>

                                    <div class="sec-title">Toilet</div>

                                    <div class="sec-spec"><?= $konsep->toilet ?></div>

                                </div>

                            </div>

                            <div class="col-md-12" style="margin-left: 17px;">

                                <div class="card-group">

                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/icon_gaya_desain.png') ?>"></div>

                                    <div class="sec-title">Gaya Desain</div>

                                    <div>:

                                        <?php if ($gaya_desain != '') {

                                            foreach ($gaya_desain as $gaya) echo "<span class='spec-tag'>" . $gaya->gaya_desain . "</span>";
                                        } ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="tab-pane fade" id="denah" role="tabpanel">

                <div class="row" style="margin: 0;">

                    <div class="col-md-3 side-konsep" style="height: 480px;flex: 0 0 27.4%;max-width: 27.4%;">

                        <ul class="nav nav-tabs" id="tab-denah" role="tablist" style="width:185px;">

                            <li class="nav-item active" id="denah-lantai1">

                                <a class="nav-link active" data-toggle="tab" href="#lantai1" role="tab" aria-selected="true">Lantai 1</a>

                            </li>

                            <li class="nav-item" id="denah-lantai2" style="display: none;page-break-after: always;break-after: always;page-break-after: always;">

                                <a class="nav-link" data-toggle="tab" href="#lantai2" role="tab" aria-selected="false">Lantai 2</a>

                            </li>

                            <li class="nav-item" id="denah-lantai3" style="display: none;">

                                <a class="nav-link" data-toggle="tab" href="#lantai3" role="tab" aria-selected="false" style="padding: 7px 14.5px;">Lantai 3</a>

                            </li>

                        </ul>



                        <div class="col-md-12 product-grid p0" style="position: absolute;top: 23px;left: 198px;max-width: 40%;">

                            <div class="product-statistic">

                                <span class="view">

                                    <i class="fa fa-eye"></i><?= $konsep->dilihat ?>

                                </span>

                            </div>

                            <div class="product-statistic">

                                <span class="like">

                                    <i class="fa fa-heart-o" data-id="<?= $konsep->id_rumah ?>"></i><span class="value"><?= $konsep->suka ?></span>

                                </span>

                            </div>

                            <div class="product-statistic">

                                <div class="share"><i class="fa fa-share-alt"></i>

                                    <div class="social">

                                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah ?>" target="_blank"><i class="fa fa-facebook"></i></a>

                                        <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah ?>" target="_blank"><i class="fa fa-twitter"></i></a>

                                        <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah . ' ' . $konsep->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="tab-content my-3" style="font-size: 16px;">

                            <div class="tab-pane fade active show" id="lantai1" role="tabpanel">

                                <div class="row" style="margin: 0;">

                                    <div id="label-lantai1" class="col-md-12 p0 scrollable"></div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="lantai2" role="tabpanel">

                                <div class="row" style="margin: 0;">

                                    <div id="label-lantai2" class="col-md-12 p0 scrollable"></div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="lantai3" role="tabpanel">

                                <div class="row" style="margin: 0;">

                                    <div id="label-lantai3" class="col-md-12 p0 scrollable"></div>

                                </div>

                            </div>

                        </div>



                        <div class="col-md-12 p0" style="display: inline-block;bottom: 19px;position: absolute;">

                            <a class="btn btn-danger btn-beli-desain" href="<?= base_url('paket/') . $id_rumah ?>">Beli Desain</a>

                            <a class="btn tanya-arsitek" title="Tanya Desain" onclick="tanyaDesain()"><i class="fa fa-comments" style="font-size: 17px;"></i></a>

                            <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Desain terjual <?= $terjual->terjual ?> dari 10</span>

                        </div>

                    </div>



                    <div class="col-md-8 p0 denah" id="foto-denah-lantai1" style="flex: 0 0 72.5%;max-width: 72.5%;">

                        <div class="img-wrapper"><img id="foto-denah1" src="" class="image normal-zoom"></div>

                    </div>



                    <div class="col-md-8 p0 denah" id="foto-denah-lantai2" style="display: none;flex: 0 0 72.5%;max-width: 72.5%;">

                        <div class="img-wrapper"><img id="foto-denah2" src="" class="image normal-zoom"></div>

                    </div>



                    <div class="col-md-8 p0 denah" id="foto-denah-lantai3" style="display: none;flex: 0 0 72.5%;max-width: 72.5%;">

                        <div class="img-wrapper"><img id="foto-denah3" src="" class="image normal-zoom"></div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="spesifikasi" role="tabpanel">

                <img class="d-block w-100" id="foto-rumah" src="">

                <div class="card-group mt-4 side-konsep" style="background: transparent;padding: 0;height: 65px;">

                    <div class="col-md-7 p0" style="max-width: 62%;flex: 0 0 62%;margin-top: -5px;">

                        <h4 class="bold">Palet Material</h4>

                        Berisi informasi material yang digunakan dalam desain ini

                    </div>

                    <div class="col-md-3 p0" style="display: inline-block;max-width: 26%;flex: 0 0 26%;">

                        <a class="btn btn-danger btn-beli-desain" href="<?= base_url('paket/') . $id_rumah ?>">Beli Desain</a>

                        <a class="btn tanya-arsitek" title="Tanya Desain" onclick="tanyaDesain()"><i class="fa fa-comments" style="font-size: 17px;"></i></a>

                        <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Desain terjual <?= $terjual->terjual ?> dari 10</span>

                    </div>



                    <div class="col-md-2 product-grid p0" style="max-width: 12%;padding-right: 0 !important;margin-top: 4px;">

                        <div class="product-statistic">

                            <span class="view">

                                <i class="fa fa-eye"></i><?= $konsep->dilihat ?>

                            </span>

                        </div>

                        <div class="product-statistic">

                            <span class="like">

                                <i class="fa fa-heart-o" data-id="<?= $konsep->id_rumah ?>"></i><span class="value"><?= $konsep->suka ?></span>

                            </span>

                        </div>

                        <div class="product-statistic">

                            <div class="share"><i class="fa fa-share-alt"></i>

                                <div class="social">

                                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah ?>" target="_blank"><i class="fa fa-facebook"></i></a>

                                    <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah ?>" target="_blank"><i class="fa fa-twitter"></i></a>

                                    <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $konsep->id_rumah . ' ' . $konsep->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col-md-12 palet_material" style="font-size: 16px;"></div>

                </div>



                <div class="mt-5" style="font-size: 15px;">

                    <h4 class="bold">Tabel Spesifikasi Teknis</h4>

                    Berisi rincian spesifikasi material yang digunakan dalam desain ini

                    <table id="tabel-spesifikasi" class="table table-bordered table-hover table-striped mt-3 mb-0">

                        <thead>

                            <tr>

                                <th scope="col" style="width: 4%;">No</th>

                                <th scope="col">Pekerjaan</th>

                                <th scope="col">Material</th>

                                <th scope="col">Spesifikasi</th>

                                <th scope="col">Merk</th>

                            </tr>

                        </thead>

                        <tbody id="data-spesifikasi"></tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>



<section class="banner-area relative" style="height: 340px;">

    <div class="overlay">

        <img src="<?= base_url('assets/img/header-bg.jpg') ?>" style="height: 340px;width: 100%;filter: brightness(20%);">

    </div>

    <div class="modal fade" id="modalTulisUlasan" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content" style="border-radius: 0;border: none;">

                <div class="modal-header" style="background: #026CB6;border-radius: 0;padding: 11px 15px;">

                    <h5 class="modal-title bold" style="color: #fff;">Ulasan Desain</h5>

                </div>

                <div class="modal-body" style="background: #f8f9fa;">

                    <form id="frm-ulasan">

                        <div class="form-group" id="rating-ability-wrapper" style="text-align: center;">

                            <label class="control-label" for="rating" style="display: none;">

                                <span class="field-label-info"></span>

                                <input type="hidden" id="selected_rating" name="rating" value="5" required="required">

                            </label>

                            <h1 class="bold rating-header">

                                <span class="selected-rating">5</span>

                                <span style="font-size: 22px;"> / 5</span>

                            </h1>

                            <button type="button" class="btnrating btn-warn btn-default" data-attr="1" id="rating-star-1">

                                <i class="fa fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warn btn-default" data-attr="2" id="rating-star-2">

                                <i class="fa fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warn btn-default" data-attr="3" id="rating-star-3">

                                <i class="fa fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warn btn-default" data-attr="4" id="rating-star-4">

                                <i class="fa fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warn btn-default" data-attr="5" id="rating-star-5">

                                <i class="fa fa-star" aria-hidden="true"></i>

                            </button>

                        </div>

                        <textarea class="form-control" id="ulasan" name="ulasan" placeholder="Tulis ulasan" style="border: 0;color: #000;font-weight: 300;" rows="3"></textarea>

                    </form>



                    <center style="padding-top: 16px;">

                        <button class="btn btn-custom btn-tulis-ulasan" onclick="simpanUlasan()">Kirim Ulasan</button>

                        <button class="btn btn-danger mr-0" data-dismiss="modal" style="padding: 6px 16px;font-size: 15px;">Batal</button>

                    </center>

                </div>

            </div>

        </div>

    </div>



    <div class="container" id="ulasan-nfound" style="position: absolute;top: 55px;width: 100%;">

        <div class="row" style="justify-content: center;">

            <div class="col-md-3">

                <center>

                    <img src="<?= base_url('assets/img/ulasan-not-found.png') ?>" width="160px" />

                    <p style="color: #fff;font-size: 16px;margin-top: 12px;">Belum ada ulasan desain<br>Jadilah yang pertama mengulas!</p>

                    <button class="btn btn-custom btn-tulis-ulasan" data-toggle="modal" data-target="#modalTulisUlasan">Tulis Ulasan</button>

                </center>

            </div>

        </div>

    </div>



    <div class="container" id="ulasan-found" style="display: none;position: absolute; top: 28px; width: 100%;">

        <div class="row" style="margin: 0 100px;">

            <div class="col-md-8 p0">

                <div class="row scrollable mb-4" id="list-ulasan" style="max-height: 16em;width: 95%;color: #fff;margin-left: 1px;"></div>

                <button class="btn btn-custom btn-tulis-ulasan" data-toggle="modal" data-target="#modalTulisUlasan">Tulis Ulasan</button>

            </div>



            <div class="col-md-3" style="color: #fff;flex: 0 0 23%;">

                <h4 style="margin-bottom: 20px;color: #fff;">Ringkasan Ulasan</h4>

                <div class="pull-left mb-1">

                    <div class="pull-left" style="width:35px; line-height:1;">

                        <div style="height:9px; margin:5px 0;">5</div>

                    </div>

                    <div class="pull-left" style="width:180px;">

                        <div class="progress" style="height:9px; margin:8px 0;">

                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rating_lima[0]->rating ?>% ;">

                                <span class="sr-only">80% Complete (danger)</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="pull-left mb-1">

                    <div class="pull-left" style="width:35px; line-height:1;">

                        <div style="height:9px; margin:5px 0;">4</div>

                    </div>

                    <div class="pull-left" style="width:180px;">

                        <div class="progress" style="height:9px; margin:8px 0;">

                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $rating_empat[0]->rating ?>%">

                                <span class="sr-only">80% Complete (danger)</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="pull-left mb-1">

                    <div class="pull-left" style="width:35px; line-height:1;">

                        <div style="height:9px; margin:5px 0;">3</div>

                    </div>

                    <div class="pull-left" style="width:180px;">

                        <div class="progress" style="height:9px; margin:8px 0;">

                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $rating_tiga[0]->rating ?>%">

                                <span class="sr-only">80% Complete (danger)</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="pull-left mb-1">

                    <div class="pull-left" style="width:35px; line-height:1;">

                        <div style="height:9px; margin:5px 0;">2</div>

                    </div>

                    <div class="pull-left" style="width:180px;">

                        <div class="progress" style="height:9px; margin:8px 0;">

                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $rating_dua[0]->rating ?>%">

                                <span class="sr-only">80% Complete (danger)</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="pull-left mb-1">

                    <div class="pull-left" style="width:35px; line-height:1;">

                        <div style="height:9px; margin:5px 0;">1</div>

                    </div>

                    <div class="pull-left" style="width:180px;">

                        <div class="progress" style="height:9px; margin:8px 0;">

                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $rating_satu[0]->rating ?>%">

                                <span class="sr-only">80% Complete (danger)</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3 p0" style="flex: 0 0 7%;">

                <div class="text-center mt-70">

                    <h2 class="bold"><span id="detail_rating" style="color: #fff;"><?= $rating_desain->rating ?></span></h2>

                    <div class="jstars" data-value="<?= $rating_desain->rating ?>" data-color="gold" data-size="17px"></div>

                    <div id="jumlah_ulasan" style="color: #fff;"><?= $rating_desain->jumlah_ulasan ?> Ulasan</div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="mt-35">

    <div class="container p0">

        <div class="row">

            <div class="col-md-12">

                <center>

                    <h3 class="bold" style="font-size: 28px;">Desain Serupa</h3>

                    <div class="line-footer"></div>

                </center>

            </div>

            <div class="col-md-12">

                <div class="list-produk-serupa">

                    <?php

                    if ($produk_serupa != '') {

                        foreach ($produk_serupa as $item) { ?>

                            <div class="col-md-3 p0 grid">

                                <div class="product-grid">

                                    <div class="product-image desain">

                                        <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">

                                            <img class="pic-1" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">

                                            <img class="pic-2" src="<?= base_url('assets/img/desain/' . $item->foto) ?>">

                                        </a>

                                    </div>

                                    <div class="product-content">

                                        <div class="title" title="<?= $item->nama_rumah ?>" onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>

                                        <div class="product-rating">

                                            <div class="arsitek" title="<?= $item->nama_arsitek ?>" onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?></div>

                                            <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold" data-size="17px"></div>

                                        </div>

                                        <div class="product-feature">

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

                                            <p class="lahan-minimal">Lahan minimal <span class="bold"><?= $item->panjang_lahan . ' m x ' . $item->lebar_lahan . ' m' ?></span></p>

                                            <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal" data-tootik-conf="square"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?></span></p>

                                            <div class="product-statistic">

                                                <div class="statistic">

                                                    <button class="btn btn-detail popular" onclick="detailRumah(<?= $item->id_rumah ?>)">Detail</a>

                                                </div>

                                                <div class="statistic">

                                                    <span class="view">

                                                        <i class="fa fa-eye"></i><?= $item->dilihat ?>

                                                    </span>

                                                </div>

                                                <div class="statistic">

                                                    <span class="like">

                                                        <i class="fa fa-heart-o" data-id="<?= $item->id_rumah ?>"></i><span class="value"><?= $item->suka ?></span>

                                                    </span>

                                                </div>

                                                <div class="statistic">

                                                    <div class="share"><i class="fa fa-share-alt"></i>

                                                        <div class="social">

                                                            <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>" target="_blank"><i class="fa fa-facebook"></i></a>

                                                            <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah ?>" target="_blank"><i class="fa fa-twitter"></i></a>

                                                            <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah . ' ' . $item->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>

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



<script>
    var id_rumah, tab_denah_load = 0,

        tab_spek_load = 0,

        id_customer;

    $(document).ready(function() {

        id_rumah = "<?= $id_rumah ?>";

        id_customer = Cookies.get('id_customer');



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

                                    $('#label-lantai1').append(`<div class="card-group">

                                        <div class="denah-number mr-10">` + item.label + `</div>

                                        <div class="sec-title" style="width: 62%;">` + item.ruang + `</div>

                                        <div class="sec-spec">` + item.luas + ` m<sup>2</sup></div>

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

                                    $('#label-lantai2').append(`<div class="card-group">

                                        <div class="denah-number mr-10">` + item.label + `</div>

                                        <div class="sec-title" style="width: 62%;">` + item.ruang + `</div>

                                        <div class="sec-spec">` + item.luas + ` m<sup>2</sup></div>

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

                                    $('#label-lantai3').append(`<div class="card-group">

                                        <div class="denah-number mr-10">` + item.label + `</div>

                                        <div class="sec-title" style="width: 62%;">` + item.ruang + `</div>

                                        <div class="sec-spec">` + item.luas + ` m<sup>2</sup></div>

                                    </div>`);

                                });

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                    $.ajax({

                        url: "<?= base_url('api/getDetailFotoDenahLantai1/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != null) {

                                $('#foto-denah1').attr("src", "<?= base_url('assets/img/denah/') ?>" + data.denah);

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });



                    $.ajax({

                        url: "<?= base_url('api/getDetailFotoDenahLantai2/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != null) {

                                $('#denah-lantai2').show();

                                $('#foto-denah2').attr("src", "<?= base_url('assets/img/denah/') ?>" + data.denah);

                            } else $('#denah-lantai2').hide();

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });



                    $.ajax({

                        url: "<?= base_url('api/getDetailFotoDenahLantai3/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            if (data != null) {

                                $('#denah-lantai3').show();

                                $('#foto-denah3').attr("src", "<?= base_url('assets/img/denah/') ?>" + data.denah);

                            } else $('#denah-lantai3').hide();

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

                                    $('#label-lantai3').append(` <h5 class="fw-semibold mt-3">Struktur</h5>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">Struktur Beton</div>
                                        <div class="col-lg-6">Beton Bertulang</div>
                                    </div>
                                    <hr class="p-0 m-0">
                                </div>`);

                                });

                            }

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                    $('#spesifikasi #foto-rumah').attr("src", "<?= base_url('assets/img/konsep/' . $konsep->foto) ?>");



                    $.ajax({

                        url: "<?= base_url('api/getDetailSpesifikasi/') ?>" + id_rumah,

                        type: "GET",

                        dataType: "JSON",

                        success: function(data) {

                            let no = 0;

                            $.each(data, function(i, item) {

                                no++;

                                $('#data-spesifikasi').append(`<tr>

                                    <td class='center'>` + no + `</td>

                                    <td>` + item.bagian_rumah + `</td>

                                    <td>` + item.material + `</td>

                                    <td>` + item.spesifikasi + `</td>

                                    <td>` + item.merk + `</td>

                                </tr>`);



                                $('.palet_material').append(`<div class="col-md-2">

                                    <center>

                                        <img class="rounded-circle palet-img" src="<?= base_url('assets/img/material_baru/') ?>` + item.foto + `">

                                        <span>` + item.material + `</span>

                                    </center>

                                </div>`);

                            });



                            $('.palet_material').slick({

                                autoplaySpeed: 2000,

                                autoplay: true,

                                slidesToShow: 6,

                                slidesToScroll: 1,

                                arrows: false,

                                dots: false,

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

                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });



                    tab_spek_load = 1;

                }

            }

        });



        $.ajax({

            url: "<?= base_url('api/getUlasanCustomer/') ?>" + id_rumah + "/" + id_customer,

            type: "GET",

            dataType: "JSON",

            success: function(data) {

                // if (data != null) $('.btn-tulis-ulasan').hide(); else $('.btn-tulis-ulasan').show();

            },

            error: function(jqHR, texStatus, errorThrown) {}

        });



        $('#denah-lantai1').on('click', function() {

            $('#foto-denah-lantai1').show();

            $('#foto-denah-lantai2').hide();

            $('#foto-denah-lantai3').hide();

        });



        $('#denah-lantai2').on('click', function() {

            $('#foto-denah-lantai1').hide();

            $('#foto-denah-lantai2').show();

            $('#foto-denah-lantai3').hide();

        });



        $('#denah-lantai3').on('click', function() {

            $('#foto-denah-lantai1').hide();

            $('#foto-denah-lantai2').hide();

            $('#foto-denah-lantai3').show();

        });



        getUlasan();



        $('.denah .image').on('click', function() {

            $(this).toggleClass('normal-zoom zoom-in');

        }).on('mousemove', function(event) {

            var bbox = event.target.getBoundingClientRect();

            var mouseX = event.clientX - bbox.left;

            var mouseY = event.clientY - bbox.top;

            var xPercent = (mouseX / bbox.width) * 100;

            var yPercent = (mouseY / bbox.height) * 100;



            $(this).css('transform-origin', (xPercent + '% ' + yPercent + '%'));

        }).on('mouseenter', function() {

            $(this).addClass('zoom-in').removeClass('normal-zoom');

        }).on('mouseleave', function() {

            $(this).addClass('normal-zoom').removeClass('zoom-in');

        });



        $('img').on('contextmenu', function(e) {

            return false;

        });



        $('.list-produk-serupa').slick({

            slidesToShow: 5,

            slidesToScroll: 1,

            autoplay: true,

            autoplaySpeed: 2000,

            arrows: true,

            responsive: [{

                    breakpoint: 1024,

                    settings: {

                        slidesToShow: 4,

                        slidesToScroll: 1,

                        infinite: true,

                        dots: true

                    }

                },

                {

                    breakpoint: 600,

                    settings: {

                        slidesToShow: 3,

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



        $(".btnrating").on('click', function(e) {

            var previous_value = $("#selected_rating").val();



            var selected_value = $(this).attr("data-attr");

            $("#selected_rating").val(selected_value);



            $(".selected-rating").empty();

            $(".selected-rating").html(selected_value);



            for (i = 1; i <= selected_value; ++i) {

                $("#rating-star-" + i).toggleClass('btn-warn');

                $("#rating-star-" + i).toggleClass('btn-default');

            }



            for (ix = 1; ix <= previous_value; ++ix) {

                $("#rating-star-" + ix).toggleClass('btn-warn');

                $("#rating-star-" + ix).toggleClass('btn-default');

            }

        });

    });



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



    function simpanUlasan() {

        var rating = $('#selected_rating').val();

        var ulasan = $('#ulasan').val();

        $.ajax({

            url: "<?php echo base_url('api/simpanUlasan') ?>",

            type: "POST",

            data: {

                "rating": rating,

                "ulasan": ulasan,

                "id_rumah": id_rumah,

                "id_customer": id_customer

            },

            dataType: "JSON",

            success: function(data) {

                toastr.success(data.Info, 'Informasi', opsi_toastr);

                window.location.href = "<?php echo base_url('detail/') ?>" + id_rumah;

            },

            error: function(jqHR, texStatus, errorThrown) {}

        });

    }

    function getUlasan() {

        $.ajax({

            url: "<?= base_url('api/getUlasan/') ?>" + id_rumah,

            type: "GET",

            dataType: "JSON",

            success: function(data) {

                if (data != '') {

                    $.each(data, function(i, item) {

                        let foto = item.foto != '' ? "<?= base_url('assets/img/customer/') ?>" + item.foto : "<?= base_url('assets/img/icon_person.png') ?>";



                        $('#list-ulasan').append(`<div class="row ulasan">

                            <div class="col-md-3 p0 review-block-avatar">

                                <img src="` + foto + `" class="img-rounded" alt="avatar"> 

                            </div>

                            <div class="col-md-10">

                                <div class="review-block">

                                    <div class="review-block-name">` + item.nama_customer + `</div>

                                    <div class="review-block-rating" start="` + item.rating + `"></div>

                                    <span style="font-size: 13px;">` + item.tgl_buat + `</span>

                                    <div class="review-block-description">` + item.ulasan + `</div>

                                </div>

                            </div>

                        </div>`);

                    });

                    $('.review-block-rating').jsRapStar({

                        enabled: false

                    });

                    $('#ulasan-found').show();

                    $('#ulasan-nfound').hide();

                }

            },

            error: function(jqHR, texStatus, errorThrown) {}

        });

    }
</script>