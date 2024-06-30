<head>
    <meta name="viewport" content="width=1350">
</head>
<style>
    footer.footer-area {
        margin-top: 0.5rem !important;
    }

    #carouselExampleControlsDenah::before {
        content: url(https://rumahtinggal.id/assets/img/watermark-rt-besar.png) !important;
        position: absolute !important;
        z-index: 100 !important;
        top: 38% !important;
        left: 40% !important;
    }

    #konsep .carousel-item::before,
    #denah .img-wrapper::before {
        top: 38%;
        left: 40%;
    }

    #nama_rumah:hover {
        white-space: normal !important;
    }

    body {
        font-size: 1vw;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: #026CB6;
        background-size: 70% 100%;
        border-radius: 50%;
    }

    .btn-primary {
        background-color: #026CB6;
        border-color: #026CB6;
    }

    .side-konsep .card-group .sec-title,
    .side-konsep .card-group .sec-spec {

        padding-left: 5px;
    }

    .mt-71 {
        margin-top: 71px;
    }

    .product-grid .product-statistic .view,
    .product-grid .product-statistic .like,
    .product-grid .product-statistic .share {
        color: #000;
        padding-left: 0px;
        margin-left: 20px;
    }

    .list-produk-serupa .product-grid .product-statistic .view,
    .list-produk-serupa .product-grid .product-statistic .like,
    .list-produk-serupa .product-grid .product-statistic .share {
        color: #000;
        padding-left: 0px;
        margin-left: 0px;
    }

    .modal-header,
    .modal-footer {
        border: none !important;
    }

    #modalDetailSpesifikasi .modal-dialog {
        max-width: 60%;
    }

    #modalDetailSpesifikasi .modal-dialog .modal-content .modal-header div p {
        font-size: 1vw;
    }

    p {
        /* font-size: 1vw;*/
        line-height: 23px;
    }

    .col-md-12 {
        /* padding-right: 15px !important;
	padding-left: 15px !important;*/
    }

    #spesifikasi dev.row .side-konsep div.card-group button {
        font-size: 22px;
    }


    .btn.btn-primary.hub-kami {
        font-size: 1vw
    }

    h5 {
        font-size: 1vw;
    }

    .nama-material {
        line-height: 15px !important;
    }

    @media screen and (min-width:1px) and (max-width:1345px) {
        .side-konsep .card-group {
            margin-bottom: 0vh !important;
        }

        .scrollable {
            max-height: 30vh !important;
        }

        .scrollable-palet {
            max-height: 29vh !important;
        }
    }

    @media only screen and (min-width : 1370px) {
        .side-konsep .card-group {
            margin-bottom: 1.6vh !important;
        }

        .scrollable {
            max-height: 45vh !important;
        }

        .scrollable-palet {
            max-height: 52vh !important;
        }

        .side-konsep {
            font-size: 2.2vh !important;
        }

        /*slick-slider .slick-track, .slick-slider .slick-list {
      height: 48vh !important;
    }*/
        .deskripsi-lahan {
            margin-top: 3.6vh !important;
        }

        .label-biaya-konstruksi {
            margin-top: 2vh !important;
        }

        .label-konsultasi-modifikasi {
            margin-top: 2vh !important;
        }

        .nama-material {
            font-size: 14px !important;
        }

        .rounded-circle.palet-img {
            width: 100px !important;
            height: 100px !important;
            margin-bottom: 1vh !important
        }

        .material-set {
            margin-bottom: 4vh !important;
        }

        .didesain-oleh {
            margin-bottom: 3vh !important
        }

        .side-konsep .card-group .sec-icon img {
            width: 6vh !important;
            height: 6vh !important;
        }
    }

    /* 
 @media only screen 
  and (min-width : 1370px){ 
    #konsep div div.side-konsep div div .card-group {
      margin-bottom: 20px !important;
    }
    #konsep div div.side-konsep div div .card-group div div.sec-title {
      width: 100% !important;
    }
    .scrollable {
      max-height: 23em !important;
    }
    .scrollable-ulasan {
      max-height: 10em !important;
    }
    .rounded-circle.palet-img {
      width: 95px !important;
      height: 95px !important;
      margin-bottom: 0px;
    }
    body{
      font-size: 1vw !important;
    }
    .side-konsep .card-group .sec-icon img {
      width: 45px !important;
      height: 45px !important;
    }
    .product-grid .product-statistic .view, .product-grid .product-statistic .like, .product-grid .product-statistic .share {
      font-size: 1vw !important;
    }
    .btn-beli-desain {
      font-size: 1.2vw !important;
    }
    .slick-list.draggable{
      height: 500px !important;
    }
    .product-grid .product-statistic .social a {
      width: 49px !important;
    }
    .progress {
      margin: 15px 0 !important;
    }
    .footer-area h4{
      font-size: 1vw;
    }
    .side-konsep{
      height: 729px !important;
    }
    .scrollable-palet{
      max-height: 23em !important;
    }
    .card-download{
      padding: 15px !important;
      margin: 25px 0px 40px auto !important;
    }
    div.palet_material div center div{
      line-height: 20px !important;
    }
    #modalDetailSpesifikasi .modal-dialog {
      max-width: 970px !important;
    }
  }
  
  */















































    .line-icon {
        width: 100%;
        height: 1px;
        background: #026CB6;
    }

    .scrollable-palet {
        overflow-y: auto;
        max-height: 45vh;
        scrollbar-color: #026CB6 #f4f4f440;
        /*scrollbar-width: thin;*/
    }

    .scrollable-deskripsi {
        overflow-y: auto;
        max-height: 165px;
        scrollbar-color: #026CB6 #f4f4f440;
        /*scrollbar-width: thin;*/
        padding-right: 3px;
        font-size: 1vw;
    }










    img {
        pointer-events: all;
    }

    .col-md-12 {
        /* padding-left: 0px !important; */
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
        font-size: 1vw;
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
        font-size: 1.1vw;
        margin-left: 33px;
        position: absolute;
        margin-top: 5px;
    }

    .nav-tabs {
        border-bottom: none;
    }

    .nav-tabs .nav-item {
        background: #E0EDF7;
        /* margin-right: 1px; */
        margin-bottom: 0;
        margin-top: 0px;
        width: calc(100%/3);
        text-align: center;
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
        font-size: 1vw;
    }

    .review-block-description {
        margin: 3px 0 22px;
        font-size: 1vw;
    }

    #spesifikasi::before {
        content: url(https://rumahtinggal.id/assets/img/watermark-rt-besar.png);
        position: absolute;
        z-index: 100;
        top: 35%;
        left: 61%;
    }

    #spesifikasi::before {
        top: 25%;
    }

    .side-konsep {
        background: #fff;
        padding: 18px;
        font-size: 1vw;
        /* height: 450px; */
    }

    .side-konsep .sec-biaya {
        background: #026cb6;
        color: #fff;
        padding: 7px;
        font-size: 1.2vw;
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
        margin-bottom: 1vh;
    }

    .side-konsep .card-group .sec-icon {
        width: 30px;
        /* margin-top: -2px; */
        display: table;
    }

    .side-konsep .card-group .sec-icon img {
        width: 34px;
        height: 34px;
        vertical-align: middle;
        margin-top: 5px;
    }

    .side-konsep .card-group .sec-title {
        font-weight: 600
    }

    /*.side-konsep .card-group .sec-spec::before {
    content: ':';
    margin-right: 8px;
} */

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
        /* height: 460px;*/
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
        color: #fff;
        text-align: center;
        background: #026CB6;
        border: 1px solid #026CB6;
    }

    .denah .image {
        /*height: 100%;*/
        width: 100%
    }

    .scrollable {
        overflow-y: auto;
        max-height: 40vh;
        scrollbar-color: #026CB6 #f4f4f440;
        /*scrollbar-width: thin;*/
    }

    .scrollable-ulasan {
        overflow-y: auto;
        max-height: 16.5em;
        scrollbar-color: #026CB6 #f4f4f440;
        /*scrollbar-width: thin;*/
    }

    #tabel-spesifikasi {
        font-size: 1vw;
    }

    #tabel-spesifikasi thead {
        background: #026CB6;
        text-align: center;
        color: #fff;
        font-size: 1.2vw;
    }

    #tabel-spesifikasi th,
    #tabel-spesifikasi td {
        padding: 4px 2px;
    }

    .rounded-circle.palet-img {
        width: 65px;
        height: 65px;
        margin-bottom: 0px;
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

<!--
<div class="container mt-80 mb-40">
    <div class="row">
      <div class="col-md-4">
         <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase" id="nama_rumah"><?= $konsep->nama_rumah ?></h3>
              <p class="mb-0">Didesain oleh <a href="<?= base_url('profil_arsitek/' . $konsep->id_arsitek) ?>" class="text-custom bold"><?= $konsep->nama_arsitek ?></a></p>
            </div>

            <div class="col-md-4 product-grid p-0 m-0" style="width: 15.9%;flex: 0 0 15.9%;max-width: 15.9%;display: flex;top: 14px;height: unset;">
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
          <div class="col-md-12 p-0 mt-10">
              <ul class="nav nav-tabs pull-right" id="tab-desain" role="tablist" style="width:100%;">
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
        <div class="row side-konsep">
          <div class="col-md-12">
             <div class="card-download" style="background: #00477b0d;padding: 23px !important;margin: 0 auto;box-shadow: 0px 3px 5px 4px #00160f14;">
                 <a class="btn btn-danger btn-beli-desain" href="<?= base_url('dev/paket_pembelian/') . $id_rumah ?>">Download GRATIS</a>
                 <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Desain didownload <?= $terjual->terjual ?> kali</span>                   
              </div>
              <hr />
              <div class="row col-md-12">
                <div class="col-md-6 pr-0">
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/dimensi_lahan.png') ?>"></div>
                            <div>
                                <div class="sec-title">Dimensi Lahan</div>
                                <div class="line-icon"></div>
                                <div class="sec-spec"><?= $konsep->lebar_lahan . ' m x ' . $konsep->panjang_lahan . ' m' ?></div>
                            </div>
                        </div>
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/luas_lahan.png') ?>"></div>
                            <div>
                                <div class="sec-title">Luas Lahan</div>
                                <div class="line-icon"></div>
                                <div class="sec-spec"><?= $konsep->luas_lahan . ' m' ?><sup>2</sup></div>
                            </div>
                        </div>
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/luas_bangunan.png') ?>"></div>
                            <div>
                                <div class="sec-title">Luas Bangunan</div>
                                <div class="line-icon"></div>
                                <div class="sec-spec"><?= $konsep->luas_bangunan . ' m' ?><sup>2</sup></div>
                            </div>
                        </div>                               
                    </div>
                    <div class="col-md-6 p0">
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/jumlah_lantai.png') ?>"></div>
                            <div>
                                <div class="sec-title">Jumlah Lantai</div>
                                <div class="line-icon"></div>
                                <div class="sec-spec"><?= $konsep->lantai ?></div>
                            </div>
                        </div>
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/kamar_tidur.png') ?>"></div>
                            <div>
                                <div class="sec-title">Kamar Tidur</div>
                                <div class="line-icon"></div>
                                <div class="sec-spec"><?= $konsep->kamar_tidur ?></div>
                            </div>
                        </div>
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/toilet.png') ?>"></div>
                            <div>
                                <div class="sec-title">Toilet</div>
                                <div class="line-icon"></div>
                                <div class="sec-spec"><?= $konsep->toilet ?></div>
                            </div>
                        </div>
                     </div>
                    <div class="col-md-12" style="margin-left: 6px;">
                        <div class="card-group">
                            <div class="sec-icon"><img src="<?= base_url('assets/img/icon/konsep/gaya_desain.png') ?>"></div>
                            <div>
                                <div class="sec-title">Gaya Desain</div>
                                <div class="line-icon"></div>
                                <div class="">
                                  <?php if ($gaya_desain != '') {
                                        foreach ($gaya_desain as $gaya) echo "<span>" . $gaya->gaya_desain . "</span> | ";
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>                        
              </div>



            <div class="col-md-12 mt-1 row" style="background: #00477b0d;padding: 20px !important;margin: 0 auto;box-shadow: 0px 3px 5px 4px #00160f14;">
              <div class="col-md-4 sec-biaya" style="background: none;color: #000; padding:0;text-align: left;margin-bottom: 0;">Biaya konstruksi <br /> mulai dari</div>
              <div class="col-md-8 bold" data-tootik="Estimasi awal" data-tootik-conf="square" style="font-weight: 600;line-height:21px;font-size: 25px;display: table;"> <div style="display: table-cell;vertical-align: middle;"><?= $konsep->lantai == '1' ? "Rp" . number_format(3500000 * $konsep->luas_bangunan, 0, ",", ".") : ($konsep->lantai == '2' ? "Rp" . number_format(4500000 * $konsep->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $konsep->luas_bangunan, 0, ",", ".")); ?></div></div>   

            </div>

            <div class="mb-4 mt-4 text-center mx-auto">
                Ingin konsultasi atau modifikasi desain rumah ini? <br />
                <button class="btn btn-primary hub-kami mt-2" onClick="modifyDesain()" style="margin: 0 auto;margin-top: 45px;border-radius: 41px;padding: 10px 25px;">Hubungi Kami</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
          <!- gambar rumah konsep ->
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
          <!- tutup gambar rumah konsep -> 
          <div class="">
             <p class="text-justify mt-2"><?= $konsep_desain->konsep_desain ?></p>
          </div>
      </div>
    </div>
</div> -->


































<div class="container mt-71 mb-40">
    <!-- style="margin-left:81px;" -->


    <div class="row">
        <div class="col-md-12 tab-content p0">
            <div class="row justify-content-center">
                <div class="col-md-4 p-0">
                    <h3 class="text-uppercase p-0" style="font-size: 1.7vw;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;" id="nama_rumah"><?= $konsep->nama_rumah ?></h3>
                </div>
                <div class="col-md-7">

                </div>
            </div>

            <div class="row justify-content-center product-grid  didesain-oleh" style="padding-left:5px !important;display: flex;height: unset;margin-bottom: 1vh ;margin-top: -1vh ; margin-left:0px;">
                <div class="col-md-4 p-0" style="display: flex;margin-left:-35px;">
                    <div style="width:50%;">
                        <p class="mb-0" style="font-size:1vw;display:inline">Didesain oleh <a href="<?= base_url('profil_arsitek/' . $konsep->id_arsitek) ?>" class="text-custom bold"><?= $konsep->nama_arsitek ?></a></p>
                    </div>
                    <div style="display: flex;width: 50%;text-align: right;right: 0;margin-right: 0;justify-content: space-between;">
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

                <div class="col-md-7">

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 p-0 mt-1">
                    <ul class="nav nav-tabs pull-right" id="tab-desain" role="tablist" style="width:100%;">
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
                <div class="col-md-7">

                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12 tab-content p0">
            <div class="tab-pane fade active show" id="konsep" role="tabpanel">

                <div class="row justify-content-center" style="display: flex;flex-flow: row wrap;">

                    <div class="col-md-4 side-konsep">
                        <div class="card-download" style="background: #00477b0d;padding: 2vh !important;margin: 0 auto;box-shadow: 0px 3px 5px 4px #00160f14;">
                            <a class="btn btn-danger btn-beli-desain" href="<?= base_url('paket_pembelian/') . $id_rumah ?>">Download GRATIS</a>
                            <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Sudah didownload <?= $terjual ?> kali</span>
                        </div>
                        <hr />
                        <div class="row col-md-12 deskripsi-lahan">
                            <div class="col-md-7 pr-0">
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/dimensi_lahan.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Dimensi Lahan</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec"><?= $konsep->lebar_lahan . ' m x ' . $konsep->panjang_lahan . ' m' ?></div>
                                    </div>
                                </div>
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/luas_lahan.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Luas Lahan</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec"><?= $konsep->luas_lahan . ' m' ?><sup>2</sup></div>
                                    </div>
                                </div>
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/luas_bangunan.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Luas Bangunan</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec"><?= $konsep->luas_bangunan . ' m' ?><sup>2</sup></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p0">
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/jumlah_lantai.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Jumlah Lantai</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec"><?= $konsep->lantai ?></div>
                                    </div>
                                </div>
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/kamar_tidur.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Kamar Tidur</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec"><?= $konsep->kamar_tidur ?></div>
                                    </div>
                                </div>
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/toilet.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Toilet</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec"><?= $konsep->toilet ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-left: 6px;">
                                <div class="card-group">
                                    <div class="sec-icon"><img src="<?= base_url('assets/img/icon/detail/gaya_desain.png') ?>"></div>
                                    <div>
                                        <div class="sec-title">Gaya Desain</div>
                                        <div class="line-icon"></div>
                                        <div class="sec-spec">
                                            <?php if ($gaya_desain != '') {
                                                foreach ($gaya_desain as $gaya) echo "<span>" . $gaya->gaya_desain . "</span> | ";
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12 mt-1 row label-biaya-konstruksi" style="padding: 1vh 2vh !important;margin: 0 auto;border: 1px solid #026CB6;border-radius:7px;">
                            <div class="col-md-4 sec-biaya" style="background: none;color: #000; padding:0;text-align: left;margin-bottom: 0;line-height:25px;">Biaya konstruksi <br /> mulai dari</div>
                            <div class="col-md-8 bold text-right pr-0" data-tootik="Estimasi awal" data-tootik-conf="square" style="font-weight: 600;line-height:21px;font-size: 25px;display: table;">
                                <div style="display: table-cell;vertical-align: middle;font-size:2vw"><?= $konsep->lantai == '1' ? "Rp" . number_format(3500000 * $konsep->luas_bangunan, 0, ",", ".") : ($konsep->lantai == '2' ? "Rp" . number_format(4500000 * $konsep->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $konsep->luas_bangunan, 0, ",", ".")); ?></div>
                            </div>

                        </div>

                        <div class="mt-3 text-center mx-auto label-konsultasi-modifikasi">
                            Konsultasi atau Modifikasi Desain ?
                            <button class="btn btn-primary hub-kami" onClick="tanyaDesain()" style="margin: 0 auto;border-radius: 41px;padding: 5px 15px;background-color: #026CB6;border-color: #026CB6;">Hubungi Kami</button>
                        </div>


                    </div>

                    <div class="col-md-7" style="margin-top:-98px;">

                        <!-- gambar rumah konsep -->
                        <div id="carouselExampleControls" class="carousel slide" data-interval="false" style="width:100%;float:right;">
                            <div class="carousel-inner">
                                <?php if ($konsep->video != '') { ?>
                                    <div class="carousel-item active">
                                        <video class="d-block w-100" src="<?= base_url('assets/video/konsep/' . $konsep->video) ?>" autoplay controls loop></video>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>" alt="First slide">
                                    </div>
                                <?php } else { ?>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>" alt="First slide">
                                    </div>
                                <?php }
                                if ($foto_rumah != '') {
                                    foreach ($foto_rumah as $foto_rmh) echo "<div class='carousel-item'><img class='d-block w-100' src='https://rumahtinggal.id/assets/img/konsep/" . $foto_rmh->foto . "' alt='slide'></div>";
                                }
                                if ($video_rumah != '') {
                                    foreach ($video_rumah as $video_rmh) echo "<div class='carousel-item'><video class='d-block w-100' src='https://rumahtinggal.id/assets/video/konsep/" . $video_rmh->video . "' alt='slide' controls autoplay loop></video></div>";
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
                        <!-- tutup gambar rumah konsep -->
                        <!--<div>
                        <p class="text-justify mt-2"><?= $konsep_desain->konsep_desain ?></p>
                      </div>-->
                    </div>


                    <div class="col-md-4">

                    </div>
                    <div class="col-md-7">
                        <p class="text-justify mt-2 scrollable-deskripsi" style="width:100%;float:right"><?= $konsep_desain->konsep_desain ?></p>
                    </div>

                    <!-- -->
                </div>






            </div>

            <div class="tab-pane fade" id="denah" role="tabpanel">
                <div class="row justify-content-center" style="display: flex;flex-flow: row wrap;">



                    <div class="col-md-4 side-konsep">

                        <div class="card-download" style="background: #00477b0d;padding: 2vh !important;margin: 0 auto;box-shadow: 0px 3px 5px 4px #00160f14;">
                            <a class="btn btn-danger btn-beli-desain" href="<?= base_url('paket_pembelian/') . $id_rumah ?>">Download GRATIS</a>
                            <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Sudah didownload <?= $terjual ?> kali</span>
                        </div>
                        <hr />

                        <ul class="nav nav-tabs" id="tab-denah" role="tablist">
                            <li class="nav-item active" id="denah-lantai1">
                                <a class="nav-link active" data-toggle="tab" href="#lantai1" role="tab" aria-selected="true">Lantai 1</a>
                            </li>
                            <li class="nav-item" id="denah-lantai2" style="display: none;">
                                <a class="nav-link" data-toggle="tab" href="#lantai2" role="tab" aria-selected="false">Lantai 2</a>
                            </li>
                            <li class="nav-item" id="denah-lantai3" style="display: none;">
                                <a class="nav-link" data-toggle="tab" href="#lantai3" role="tab" aria-selected="false" style="padding: 7px 14.5px;">Lantai 3</a>
                            </li>
                        </ul>

                        <div class="tab-content my-3" style="font-size: 1vw;">
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

                    </div>


                    <!--  <div id="carouselExampleControlsDenah" class="carousel slide col-md-7" data-ride="carousel" style="margin-top:-98px;width:100%;float:right;">
                      <div class="carousel-inner">
                          <!- <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('assets/img/konsep/' . $konsep->foto) ?>" alt="First slide">
                          </div> ->
                          <div class="carousel-item active denah" id="foto-denah-lantai1">  
                              <div class="img-wrapper" style="width:100%"><img id="foto-denah1" src="" class="image normal-zoom"></div>
                          </div>

                          <div class="carousel-item denah" id="foto-denah-lantai2"> 
                              <div class="img-wrapper" style="width:100%"><img id="foto-denah2" src="" class="image normal-zoom"></div>
                          </div>

                          <div class="carousel-item denah" id="foto-denah-lantai3"> 
                              <div class="img-wrapper" style="width:100%"><img id="foto-denah3" src="" class="image normal-zoom"></div>
                          </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControlsDenah" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>-->



                    <div id="carouselExampleControlsDenah" class="carousel slide col-md-7" data-ride="carousel" data-interval="false" style="margin-top:-98px;">
                        <div class="carousel-inner">

                            <div class="carousel-item active zoom-denah" id="foto-denah-lantai1">
                                <img id="foto-denah1" style="width:100%" src="" class="image normal-zoom">
                            </div>

                            <div class="carousel-item zoom-denah" id="foto-denah-lantai2">
                                <img id="foto-denah2" style="width:100%" src="" class="image normal-zoom">
                            </div>

                            <div class="carousel-item zoom-denah" id="foto-denah-lantai3">
                                <img id="foto-denah3" style="width:100%" src="" class="image normal-zoom">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControlsDenah" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControlsDenah" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                    <!-- <div class="col-md-7 denah" id="foto-denah-lantai1" style="margin-top:-98px">  
                        <div class="img-wrapper" style="width:100%"><img id="foto-denah1" src="" class="image normal-zoom"></div>
                    </div>

                    <div class="col-md-7 denah" id="foto-denah-lantai2" style="margin-top:-98px"> 
                        <div class="img-wrapper" style="width:100%"><img id="foto-denah2" src="" class="image normal-zoom"></div>
                    </div>
                  
                    <div class="col-md-7 denah" id="foto-denah-lantai3" style="margin-top:-98px"> 
                        <div class="img-wrapper" style="width:100%"><img id="foto-denah3" src="" class="image normal-zoom"></div>
                    </div> -->







                </div>
            </div>

            <div class="tab-pane fade" id="spesifikasi" role="tabpanel">
                <div class="row justify-content-center" style="display: flex;flex-flow: row wrap;">

                    <div class="col-md-4 side-konsep">

                        <div class="card-download" style="background: #00477b0d;padding: 2vh !important;margin: 0 auto;box-shadow: 0px 3px 5px 4px #00160f14;">
                            <a class="btn btn-danger btn-beli-desain" href="<?= base_url('paket_pembelian/') . $id_rumah ?>">Download GRATIS</a>
                            <span class="info-terjual"><i class="fa fa-info-circle text-custom" style="font-size: 17px;"></i> Sudah didownload <?= $terjual ?> kali</span>
                        </div>
                        <hr />

                        <div class="card-group " style="background: transparent;padding: 0;justify-content: space-between;margin-top:-12px">
                            <div class="p-0">
                                <h5 class="text-center mt-2 mb-2" style="padding: 8px 0;">Material dan Spesifikasi</h5>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#modalDetailSpesifikasi" style="margin: 0 auto;margin-top: 0px;border-radius: 5px;padding: 2px 7px;font-size:13px;"> Detail </button>
                            </div>

                        </div>
                        <div class="row palet_material scrollable-palet" style="font-size: 1vw;margin-top:-2vh;"></div>


                        <!-- Modal -->
                        <div class="modal fade" id="modalDetailSpesifikasi" tabindex="-1" role="dialog" aria-labelledby="modalDetailSpesifikasi" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header pb-0">

                                        <div>
                                            <h3 class="bold">Tabel Spesifikasi Teknis</h3>
                                            <p class="text-center">
                                                Berisi rincian spesifikasi material yang digunakan dalam desain ini
                                            </p>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: 0;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body pt-0">

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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="mt-5" style="font-size: 15px;">
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
                    </div> -->

                    </div>

                    <div class="col-md-7" style="margin-top:-98px;">
                        <img class="d-block w-100" id="foto-rumah" src="" style="width:100% !important;float:right">
                    </div>



                </div>


            </div>
        </div>
    </div>
</div>

<section class="banner-area relative" style="height: 50vh;">
    <div class="overlay">
        <img src="<?= base_url('assets/img/header-bg.jpg') ?>" style="height: 50vh;width: 100%;filter: brightness(20%);">
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
                <div class="row scrollable-ulasan mb-4" id="list-ulasan" style="max-height: 16em;width: 95%;color: #fff;margin-left: 1px;"></div>
                <button class="btn btn-custom btn-tulis-ulasan" data-toggle="modal" data-target="#modalTulisUlasan">Tulis Ulasan</button>
            </div>

            <div class="col-md-3" style="color: #fff;flex: 0 0 23%;">
                <h4 style="margin-bottom: 20px;color: #fff;">Ringkasan Ulasan</h4>
                <div class="pull-left mb-1">
                    <div class="pull-left" style="width:25px; line-height:1;">
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
                    <div class="pull-left" style="width:25px; line-height:1;">
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
                    <div class="pull-left" style="width:25px; line-height:1;">
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
                    <div class="pull-left" style="width:25px; line-height:1;">
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
                    <div class="pull-left" style="width:25px; line-height:1;">
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
        //console.log($('#carouselExampleControlsDenah .active').index('#carouselExampleControlsDenah .item'));
        // $('.carousel').on('slide',function(e){
        //   var slideFrom = $(this).find('.active').index();
        //   var slideTo = $(e.relatedTarget).index();
        //   console.log(slideFrom+' => '+slideTo);
        // });


        var carouselEl = $('#carouselExampleControlsDenah');
        var carouselItems = carouselEl.find('.carousel-item');
        carouselEl.carousel({
            interval: false
        }).on('slid.bs.carousel', function(event) {
            //console.log(carouselItems.siblings('.active').index());
            if (carouselItems.siblings('.active').index() == 0) {
                // alert("denah1");
                // $('#denah-lantai1').trigger('click');
                $("#denah-lantai1 .nav-link").click();
            } else if (carouselItems.siblings('.active').index() == 1) {
                // alert("denah2");
                //$('#denah-lantai2').trigger('click');
                $("#denah-lantai2 .nav-link").click();
            } else if (carouselItems.siblings('.active').index() == 2) {
                // alert("denah3");
                //$('#denah-lantai3').trigger('click');
                $("#denah-lantai3 .nav-link").click();
            }
        })



        id_rumah = "<?= $id_rumah ?>";
        id_customer = Cookies.get('id_customer');

        ip_address = "<?php echo $_SERVER['REMOTE_ADDR'] ?>";




        $.ajax({
            url: "<?php echo base_url('dev/api/simpanDilihatIP') ?>",
            type: "POST",
            data: {
                "id_rumah": id_rumah,
                "ip_address": ip_address
            },
            dataType: "JSON",
            success: function(data) {

            },
            error: function(jqHR, texStatus, errorThrown) {}
        });








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
                                //$('#foto-denah1').attr("src","<?= base_url('dev/assets/denah_1_1.png') ?>");
                                $('#foto-denah1').attr("src", "<?= base_url('assets/img/denah_new/') ?>" + data.denah);
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
                                //$('#foto-denah2').attr("src","<?= base_url('dev/assets/denah_95_2.png') ?>");
                                $('#foto-denah2').attr("src", "<?= base_url('assets/img/denah_new/') ?>" + data.denah);
                            } else {
                                $('#denah-lantai2').hide();
                                $('#foto-denah-lantai2').remove();
                                $('#foto-denah-lantai3').remove();
                            };
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
                                // $('#foto-denah3').attr("src","<?= base_url('dev/assets/denah_95_1.png') ?>");
                                $('#foto-denah3').attr("src", "<?= base_url('assets/img/denah_new/') ?>" + data.denah);
                            } else {
                                $('#denah-lantai3').hide();
                                $('#foto-denah-lantai3').remove();
                            };
                        },
                        error: function(jqHR, texStatus, errorThrown) {}
                    });

                    tab_denah_load = 1;
                    $("#denah-lantai1").click();
                }
            } else if (tab == 3) {
                if (tab_spek_load == 0) {
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

                                $('.palet_material').append(`<div class="col-md-4 mb-4 material-set">
                                    <center>
                                        <img class="rounded-circle palet-img" src="<?= base_url('assets/img/material_baru/') ?>` + item.foto + `">
                                        <div class="nama-material">` + item.material + `</div>
                                    </center>
                                </div>`);
                            });

                            /* $('.palet_material').slick({
                                autoplaySpeed: 2000,
                                autoplay: true,
                                slidesToShow: 6,
                                slidesToScroll: 1,
                                arrows: false,
                                dots: false,
                                responsive: [
                                  {
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
                            }); */
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

        $('.zoom-denah .image').on('click', function() {
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