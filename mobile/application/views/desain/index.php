<head>
    <meta name="viewport" content="width=360">
</head>
<style>
    #navbarSupportedContent {
        margin-top: 47px !important;
    }

    .irs--round .irs-grid-text {
        color: silver;
        font-size: 11px;
    }

    .irs--round .irs-single {
        font-size: 11px;
    }

    #trigger {
        color: #fff;
    }

    .container {
        width: 100%;
        max-width: 100%;
    }

    /* Sidebar
-----------------------------------------------------------------------------------------*/
    .menusign {
        display: block;
        width: 10px;
        line-height: .3;
        font-size: 2em;
        margin: .5em;
    }

    .menusign br {
        height: 0;
    }

    .sidebar {
        position: fixed;
        z-index: 9999999;
        left: 0;
        top: 0;
        height: 100%;
        width: 295px;
        background: #f3f3f3;
        -webkit-transition: left 0.3s ease, -webkit-box-shadow 0.3s ease 0.2s;
        transition: left 0.3s ease, box-shadow 0.3s ease 0.2s;
        -webkit-box-shadow: 0.5em 0 0 0 #026cb6, 0.6em 0 0 0 #026CB6;
        box-shadow: 0.5em 0 0 0 #026cb6, 0.6em 0 0 0 #026CB6;
    }

    .sidebar #close {
        float: right;
        margin: -2rem 1.5rem;
        font-size: 2em;
        color: #026cb6;
        text-align: right;
    }

    .sidebar.closed {
        left: -315px;
        -webkit-box-shadow: 0 0 0 #026CB6;
        box-shadow: 0 0 0 #026CB6;
    }

    .sidebar h2 {
        padding: .5em;
        color: #026CB6;
    }

    .sidebar ul {
        padding: 0;
        margin: 0;
    }

    .sidebar ul li {
        width: 90%;
        margin: 5px 10px;
        float: left;
        display: inline-block;
        margin-bottom: 0;
        /*font-weight: 400;*/
        /*text-align: center;*/
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 3px 6px;
        font-size: 12px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        /*border: 2px solid #026CB6;*/
        /*background: #026CB6;*/
        color: #f3f3f3;
    }

    .sidebar ul li a {
        color: white;
    }

    .sidebar ul li:hover {
        /*background: #17a689;
  border-color: #17a689;*/
    }

    /* Blurred class

This class is added to the container 
(#blurMe) when the sidebar is open.
-----------------------------------*/
    .blurred {
        -webkit-transition: all 0.6s ease;
        transition: all 0.6s ease;
        -webkit-filter: blur(10px);
        filter: blur(10px);
        -webkit-filter: url(#blur);
        filter: url(#blur);
        filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='10');
    }

    .col-md-5.p0.grid {
        width: 177px;
    }


    .list-desain .grid .product-grid .product-content .product-detail .product-statistic .statistic .btn-detail {
        padding: 1px 5px !important;
        font-size: 12px !important;
    }

    #spesifikasi .product-grid .product-statistic .view,
    .product-grid .product-statistic .like {
        color: #000;
        padding-left: 0px;
    }

    .product-grid .product-statistic .view .fa {
        font-size: 14px !important;
        padding-right: 2px;
        margin-top: 2px;
    }

    .product-grid .product-statistic .like .fa {
        font-size: 13px !important;
        padding-right: 2px;
        margin-top: 2px;
    }

    .product-grid .product-statistic .share .fa {
        font-size: 13px !important;
        padding-right: 2px;
        margin-top: 2px;
    }



    .list-desain .product-grid .product-statistic .view .fa {
        font-size: 15px !important;
        padding-right: 2px;
        margin-top: 2px;
    }

    .list-desain .product-grid .product-statistic .like .fa {
        font-size: 13px !important;
        padding-right: 2px;
        margin-top: 2px;
    }

    .list-desain .product-grid .product-statistic .share .fa {
        font-size: 14px !important;
        padding-right: 2px;
        margin-top: 2px;
    }

    .list-desain .product-grid .product-statistic .view {
        font-size: 9px !important;

    }

    .list-desain .product-grid .product-statistic .like span.value {
        font-size: 9px !important;

    }

    /*.product-grid .product-statistic .share span.value {
        font-size: 11px !important;
       
    }*/
    .list-desain .product-grid .product-statistic .view,
    .list-desain .product-grid .product-statistic .like {
        color: #000;
        padding-left: 0px;
    }

    .list-desain .slick-track .grid .product-grid .product-content .product-detail .product-statistic .statistic .btn-detail {
        padding: 1px 5px !important;
        font-size: 12px !important;
    }

    .list-desain .product-grid .product-image {
        height: 133px !important;
    }

    .list-desain .product-grid .title {
        font-size: 11px !important;
    }

    .list-desain .product-grid .arsitek {
        font-size: 10px !important;
        width: 53% !important;
    }

    .list-desain .product-grid .jstars::after {
        font-size: 9px !important;
    }

    .list-desain .product-grid .product-detail p {
        font-size: 9.5px !important;
    }

    .list-desain .btn-detail.favorit {
        padding: 2px 8px !important;
    }

    .list-desain .grid {
        height: 242px !important;
    }

    .list-desain .product-grid .title {
        height: 15px !important;
    }

    /*.list-desain .jstars .jstars-empty{
        font-size: 10px !important;
    }*/
    .list-desain .jstars {
        margin-top: -6px !important;
    }

    /*.list-desain .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }*/
    .list-desain .product-grid .product-feature .feature img {
        width: 20px !important;
        height: 20px !important;
    }

    .list-desain .product-grid .product-rating {
        /*display: initial;*/
    }

    .list-desain .jstars .jstars-empty {
        font-size: 12px !important;
    }

    .list-desain .jstars .jstars-empty .jstars-filled {
        font-size: 12px !important;
    }

    .list-desain .product-grid .product-feature .feature span {
        font-size: 9px !important;
    }

    .list-desain .product-grid {
        margin: 0 5px !important;
    }

    .list-desain .product-grid .product-feature {
        padding: 4px 0 !important;
    }



    .kisaran_harga_konstruksi .irs-grid-text.js-grid-text-0 {
        left: 0%;
        margin-left: -5.219% !important;
    }

    .kisaran_harga_konstruksi .irs-grid-text.js-grid-text-4 {
        left: 100%;
        margin-left: -26.702% !important;
    }

    .kisaran_harga_konstruksi .irs-to {
        z-index: 103;
    }

    select,
    select>option {
        font-family: 'FontAwesome', 'Calibri';
    }

    .bg-side {
        background: #fff;
        height: 100%;
        max-width: 80%;
        padding-bottom: 15px;
        padding-right: 10px;
    }

    #custom-search-input {
        border: solid 1px #026CB6;
    }

    #custom-search-input input {
        border: 0;
        color: #000;
        border-radius: 0;
        font-size: 15px;
        padding: 0 5px;
        font-weight: 300;
        height: 36px;
    }

    #custom-search-input input:focus,
    #custom-search-input button:focus {
        box-shadow: none;
    }

    #custom-search-input button {
        background: transparent;
        border: 0;
        padding: 0 8px;
        color: #026CB6;
        border-radius: 0;
        font-size: 18px;
        margin-top: 0;
        height: 36px;
    }

    #custom-search-input button:hover {
        background: #026CB6;
        color: #fff;
        border: 0;
        box-shadow: none;
    }

    .list-desain {
        height: 1090px;
        scrollbar-width: none;
        -ms-overflow-style: none;
        overflow-y: scroll;
    }

    .list-desain .grid {
        height: 320px;
        display: inline-flex;
    }

    .list-desain .product-grid {
        margin: 0;
        /*padding: 6px;*/
        width: 167px;
    }

    .list-desain .product-grid .rating {
        margin: 0;
        margin-top: -4px;
        margin-left: -25px;
        letter-spacing: -1px;
    }

    .rapStarBack {
        font-size: 13px;
    }

    .list-desain .product-grid .rating::after {
        content: attr(data-value);
        font-size: 10px;
        margin-left: 4px;
        color: #000;
        letter-spacing: 0;
    }

    #panel-filter .item-filter {
        margin-top: 17px;
    }

    #panel-filter .item-filter .item-title {
        font-size: 13px;
        color: #000;
    }

    .irs--round .irs-line {
        top: 33px;
        height: 7px;
        background-color: #fff;
        border: 1px solid #026CB6;
    }

    .irs--round .irs-from,
    .irs--round .irs-to,
    .irs--round .irs-single {
        background-color: #026CB6;
        border-radius: 0;
        font-size: 13px;
        line-height: .8;
        padding: 4px 5px;
        display: block !important;
    }

    .irs--round .irs-handle.state_hover,
    .irs--round .irs-handle:hover {
        background-color: #fff;
    }

    .irs--round .irs-from::before,
    .irs--round .irs-to::before,
    .irs--round .irs-single::before {
        border-top-color: #026CB6;
    }

    .irs--round .irs-grid-text {
        color: #000;
    }

    .irs--round .irs-bar {
        top: 33px;
        height: 7px;
        background-color: #026CB6;
    }

    .irs--round .irs-handle {
        border: 1px solid #026CB6;
        box-shadow: none;
        top: 24px;
    }

    .chiller_cb {
        position: relative;
        height: 25px;
        color: #000;
        display: flex;
        flex-direction: column;
        flex-basis: 100%;
        flex: 1;
    }

    .custom-select {
        font-weight: 300;
        color: #000;
        font-size: 12px;
        height: 31px;
        padding: 2px 5px;
    }

    .checklist {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
    }







    .span_pseudo,
    .chiller_cb span:before,
    .chiller_cb span:after {
        content: "";
        display: inline-block;
        background: #fff;
        width: 0;
        height: 0.2rem;
        position: absolute;
        transform-origin: 0% 0%;
    }

    .chiller_cb input {
        display: none;
    }

    .chiller_cb input:checked~span {
        background: #026CB6;
        border-color: #026CB6;
    }

    .chiller_cb input:checked~span:before {
        width: 1rem;
        height: 0.15rem;
        transition: width 0.1s;
        transition-delay: 0.3s;
    }

    .chiller_cb input:checked~span:after {
        width: 0.4rem;
        height: 0.15rem;
        transition: width 0.1s;
        transition-delay: 0.2s;
    }

    .chiller_cb input:disabled~span {
        background: #ececec;
        border-color: #dcdcdc;
    }

    .chiller_cb input:disabled~label {
        color: #dcdcdc;
    }

    .chiller_cb input:disabled~label:hover {
        cursor: default;
    }

    .chiller_cb label {
        padding-left: 1.6rem;
        position: relative;
        z-index: 2;
        cursor: pointer;
        margin-bottom: 0;
        font-weight: 350;
    }

    .chiller_cb span {
        display: inline-block;
        width: 1.2rem;
        height: 1.2rem;
        border: 1px solid #ccc;
        position: absolute;
        left: 0;
        transition: all 0.2s;
        z-index: 1;
        box-sizing: content-box;
    }

    .chiller_cb span:before {
        transform: rotate(-55deg);
        top: 1rem;
        left: 0.37rem;
    }

    .chiller_cb span:after {
        transform: rotate(35deg);
        bottom: 0.35rem;
        left: 0.2rem;
    }

    .ui-mobile [data-role="page"],
    .ui-mobile [data-role="dialog"],
    .ui-page {
        top: 0;
        left: 0;
        width: 100%;
        min-height: 100%;
        position: initial !important;
        display: none;
        border: 0;
    }

    .ribbon {
        position: absolute;
        z-index: 100;
    }

    .ribbon-promo {
        width: 70px !important;
        height: 20px !important;
        padding-left: 14px !important;
        padding-top: 0px !important;
        position: absolute;
        left: -7px;
        top: 6px;
        background: #EE1212;
        color: #fff;
        font-size: 12px !important;
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

    .product-grid .product-content {
        padding: 8px 10px 0;
        position: relative;
        z-index: 102;
        transition: all 0.3s ease;
        box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
        background: #fff;
    }
</style>

<section class="banner-area relative" id="home" data-parallax="scroll" style="height: 180px;">
    <div class="overlay-bg overlay" style="opacity: 1;position: absolute;">
        <img src="<?= base_url('assets/img/header-bg.jpg') ?>" style="height: 100%;width: 100%;opacity: inherit;filter: brightness(25%);">
    </div>

    <div class="container">
        <div class="row d-flex" style="width: 350px;">
            <div class="col-md-12 mt-70 p0 center" style="width: 360px;">
                <p style="font-size: 12px;color:#fff;line-height: 1.2;">
                    Ingin membuat desain rumah tinggal sesuai keinginan Anda?<br>
                    <span style="font-size: 17px;">Konsultasikan bersama tim arsitek kami!</span>
                </p>
                <button class="btn btn-banner danger" onclick="konsultasiDesain()" style="position: relative;left: 0;bottom: 3%;font-size: 12px;padding: 6px 12px;background: #ffbf00;">KONSULTASI DESAIN</button>
            </div>
        </div>
    </div>
</section>



<div class="sidebar closed">
    <header>
        <h2 style="font-size: 18px;" class="mt-2">Filter Desain </h2>
        <a href="#" id="close">
            <span><i class="fa fa-times" aria-hidden="true"></i></span>
        </a>
    </header>

    <ul id="filter-desain-scroll" style="-ms-overflow-style: none;overflow-y: scroll;">
        <li>
            <div class="list-group" id="panel-filter">
                <input type="hidden" name="order" id="order" value="0">
                <div class="item-filter" hidden="">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-lg" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                            <input type="text" class="form-control" name="cari_rumah" id="cari_rumah" placeholder="Ketik Nama Desain" />
                        </div>
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Lebar Lahan</span>
                    <div style="margin-top: 7px; width: 90%;">
                        <input type="text" class="js-range-slider-lebar" id="lebar_lahan" name="lebar_lahan" value="" />
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Panjang Lahan</span>
                    <div style="margin-top: 7px; width: 90%;">
                        <input type="text" class="js-range-slider-panjang" id="panjang_lahan" name="panjang_lahan" value="" />
                    </div>
                </div>
                <div class="item-filter kisaran_harga_konstruksi">
                    <span class="item-title">Biaya Konstruksi</span>
                    <div style="margin-top: 7px; width: 90%;">
                        <input type="text" class="js-range-slider-harga-konstruksi" id="harga_konstruksi" name="harga_konstruksi" value="" />
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Jumlah Lantai</span>
                    <div class="input-group mt-1">
                        <select class="custom-select" name="lantai" id="lantai">
                            <option value="1,2,3">Pilih Semua</option>
                            <option value="1">1 Lantai</option>
                            <option value="2">2 Lantai</option>
                            <option value="3">3 Lantai</option>
                        </select>
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Jumlah Kamar Tidur</span>
                    <div class="input-group mt-1">
                        <select class="custom-select" name="jum_kamar_tidur" id="jum_kamar_tidur">
                            <option value="1,2,3,4,5,10">Pilih Semua</option>
                            <option value="1">1 Kamar</option>
                            <option value="2">2 Kamar</option>
                            <option value="3">3 Kamar</option>
                            <option value="4">4 Kamar</option>
                            <option value="5">5 Kamar</option>
                            <option value="10">10 Kamar</option>
                        </select>
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Ruangan</span>
                    <div class="row mt-1" style="margin: 0;">
                        <input id="" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="0" checked hidden>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain1" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="1">
                                <label for="ruang_lain1">Carport</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain2" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="2">
                                <label for="ruang_lain2">Garasi</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain3" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="3">
                                <label for="ruang_lain3">Teras</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain4" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="4">
                                <label for="ruang_lain4">Taman</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain5" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="5">
                                <label for="ruang_lain5">Ruang Tamu</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain6" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="6">
                                <label for="ruang_lain6">Ruang Keluarga</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain7" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="7">
                                <label for="ruang_lain7">Kamar Tidur</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain8" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="8">
                                <label for="ruang_lain8">Dapur</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain9" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="9">
                                <label for="ruang_lain9">Ruang Jemur</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain10" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="10">
                                <label for="ruang_lain10">Ruang Cuci</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain11" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="11">
                                <label for="ruang_lain11">Ruang Makan</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain12" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="12">
                                <label for="ruang_lain12">Gudang</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain13" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="13">
                                <label for="ruang_lain13">Mushola </label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain14" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="14">
                                <label for="ruang_lain14">Toilet</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="ruang_lain15" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="15">
                                <label for="ruang_lain15">Toilet Dalam</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="ruang_lain16" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="16">
                                <label for="ruang_lain16">Kolam</label>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Gaya Desain</span>
                    <div class="row mt-1" style="margin: 0;">
                        <div class="checklist">
                            <input id="" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="0" checked hidden>
                            <div class="chiller_cb">
                                <input id="gd1" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="1">
                                <label for="gd1">Modern</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="gd2" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="2">
                                <label for="gd2">Minimalis</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="gd3" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="3">
                                <label for="gd3">Industrial</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="gd4" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="4">
                                <label for="gd4">Contemporer</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="gd5" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="5">
                                <label for="gd5">Tropical</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="gd6" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="6">
                                <label for="gd6">Tradisional</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="gd7" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="7">
                                <label for="gd7">Clasic</label>
                                <span></span>
                            </div>
                            <div class="chiller_cb">
                                <input id="g8" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="8">
                                <label for="g8">Scandinavian</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="checklist">
                            <div class="chiller_cb">
                                <input id="gd9" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="9">
                                <label for="gd9">Asian</label>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-filter">
                    <span class="item-title">Arsitek</span>
                    <div class="input-group mt-1">
                        <select class="custom-select" name="nama_arsitek" id="inputGroupSelect02">
                            <option value="">Pilih Semua</option>
                            <option value="1">RZAP Design</option>
                            <option value="2">TR Studio</option>
                            <option value="3">Beecons</option>
                            <option value="4">PB_arch</option>
                            <option value="5">Yogs Construction</option>
                            <option value="6">NRW Architect</option>
                        </select>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<section class="mt-3">
    <div class="col-md-12">
        <center>
            <h4 style="font-weight: 400;">Koleksi Desain</h4>
            <div class="line-footer"></div>
        </center>
    </div>
</section>

<section class="section-gap">
    <div class="container">
        <div class="row" style="width: 360px;">
            <div class="col-md-12 ml-1" style="padding-right: 0;padding-left: 0px;width: 350px; float: left;">
                <div class="row mb-3" style="width: 352px;margin-left: 4px;">
                    <div class="col-md-12" style="text-align: center;vertical-align: middle;line-height: 33px;height: 33px;padding: 0;width: 346px;background: #026Cb6;border: 1px solid #026CB6;border-radius: 3px;">
                        <a href="#" id="trigger">
                            <i class="fa fa-filter" style="font-size: 20px;" aria-hidden="true"></i> Filter Desain Anda
                        </a>
                    </div>
                    <div class="col-md-12 p-0 mt-3" style="display: inline-flex;">
                        <div class="col-md-3" style="max-width: 50%;padding: 4px 0 7px 5px;color: #000;font-size: 12px;width: 350px;">
                            Menampilkan <span id="count-rumah" style="font-weight: 400;"></span>
                        </div>
                        <div class="col-md-3" style="max-width: 48%;padding: 0;">
                            <div class="input-group">
                                <select class="custom-select" onchange="setOrder($(this).val())">
                                    <option value="0">Urutkan Berdasarkan</option>
                                    <option value="7" style="color: red;font-weight: 600;">Promo</option> <!-- &#xf02b; -->
                                    <option value="1">Desain Terbaru</option>
                                    <option value="2">Desain Terlama</option>
                                    <option value="3">Desain Terpopular</option>
                                    <option value="4">Desain Terfavorit</option>
                                    <option value="5">Nama Desain (A-Z)</option>
                                    <option value="6">Nama Desain (Z-A)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 0;padding-bottom: 10px;"></div>
                <div class="list-desain row" style="width: 355px;margin-left: 0;"></div>
                <div class="spinner">
                    <center>
                        <img src="<?= base_url('assets/gif/rt-loader.gif') ?>" style="padding: 2px;" width="35px" />
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<script>
    // $(".js-range-slider-lebar").ionRangeSlider({
    //      skin: "round",
    //      // type: "double",
    //      grid: true,
    //      min: <?= $lebar_panjang->min_lebar_lahan ?>,
    //      max: <?= $lebar_panjang->max_lebar_lahan ?>,
    //      from: <?= $lebar_panjang->max_lebar_lahan ?>,
    //      grid_num: 6,
    //      from_min: <?= $lebar_panjang->min_lebar_lahan ?>,      // set min position for FROM handle (replace FROM to TO to change handle)
    //      from_max: <?= $lebar_panjang->max_lebar_lahan ?>,      // set max position for FROM handle
    //      from_shadow: true 

    //  });

    //  $(".js-range-slider-panjang").ionRangeSlider({
    //      skin: "round",
    //      // type: "double",
    //      grid: true,
    //      min: <?= $lebar_panjang->min_panjang_lahan ?>,
    //      max: <?= $lebar_panjang->max_panjang_lahan ?>,
    //      from: <?= $lebar_panjang->max_panjang_lahan ?>,
    //      grid_num: 3,
    //      from_min: <?= $lebar_panjang->min_panjang_lahan ?>,      // set min position for FROM handle (replace FROM to TO to change handle)
    //      from_max: <?= $lebar_panjang->max_panjang_lahan ?>,      // set max position for FROM handle
    //      from_shadow: true 

    //  });


    $(".js-range-slider-lebar").ionRangeSlider({
        skin: "round",
        type: "double",
        grid: true,
        min: <?= $lebar_panjang->min_lebar_lahan ?>,
        max: <?= $lebar_panjang->max_lebar_lahan ?>,
        from: 0,
        to: <?= $lebar_panjang->max_lebar_lahan ?>,
        grid_num: 6,
        from_min: <?= $lebar_panjang->min_lebar_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $lebar_panjang->max_lebar_lahan ?>, // set max position for FROM handle
        from_shadow: true,
        force_edges: false, // force UI in the box
        hide_min_max: false, // show/hide MIN and MAX labels
        hide_from_to: false, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_lebar = $('.js-range-slider-lebar').data().from;
            //console.log(from_lebar); 
            let to_lebar = $('.js-range-slider-lebar').data().to;
            sessionStorage.setItem('from_lebar', from_lebar);
            sessionStorage.setItem('to_lebar', to_lebar);
            //console.log(sessionStorage.getItem('to_lebar'));

        },

    });

    $(".js-range-slider-panjang").ionRangeSlider({
        skin: "round",
        type: "double",
        grid: true,
        min: <?= $lebar_panjang->min_panjang_lahan ?>,
        max: <?= $lebar_panjang->max_panjang_lahan ?>,
        from: 0,
        to: <?= $lebar_panjang->max_panjang_lahan ?>,
        grid_num: 3,
        from_min: <?= $lebar_panjang->min_panjang_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $lebar_panjang->max_panjang_lahan ?>, // set max position for FROM handle
        from_shadow: true,
        force_edges: false, // force UI in the box
        hide_min_max: false, // show/hide MIN and MAX labels
        hide_from_to: false, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_panjang = $('.js-range-slider-panjang').data().from;
            //console.log(from_lebar); 
            let to_panjang = $('.js-range-slider-panjang').data().to;
            sessionStorage.setItem('from_panjang', from_panjang);
            sessionStorage.setItem('to_panjang', to_panjang);
            //console.log(sessionStorage.getItem('to_lebar'));

        },

    });


    $(".js-range-slider-harga-konstruksi").ionRangeSlider({
        skin: "round",
        type: "double",
        min: 0,
        max: 2000000000,
        from: 0,
        to: 2000000000,
        from_min: 0,
        from_max: 2000000000,
        from_shadow: true,
        prefix: "Rp",
        step: 50000000,
        force_edges: false, // force UI in the box
        hide_min_max: false, // show/hide MIN and MAX labels
        hide_from_to: false, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_hkonstruksi = $('.js-range-slider-harga-konstruksi').data().from;
            //console.log(from_lebar); 
            let to_hkonstruksi = $('.js-range-slider-harga-konstruksi').data().to;
            sessionStorage.setItem('from_hkonstruksi', from_hkonstruksi);
            sessionStorage.setItem('to_hkonstruksi', to_hkonstruksi);
            //console.log(sessionStorage.getItem('to_lebar'));

        },

    });

    var timer;
    $(document).ready(function() {
        $('#cari-desain-mo').remove();

        $('#filter-desain-scroll').css("height", (screen.height - 220));

        function sidebar() {

            var trigger = $('#trigger, #close'),

                menu = $('.sidebar');
            trigger.on('click', function() {

                $(this).toggleClass('active');

                menu.toggleClass('closed');

                $('#blurrMe').toggleClass('blurred'); // just here

            });

        }

        function deploy() {
            sidebar();
        }
        deploy();



        if (window.location.hash == '#promo') {
            $('#order').val(7);
            $('#select-order').val('7');
            // setOrder(7);
        } else if (window.location.hash == "#favorit") {
            $('#order').val(4);
            $('#select-order').val('4');
            // setOrder(4)
        } else {
            var slider_lebar = $(".js-range-slider-lebar").data("ionRangeSlider");
            let cookie_from_lebar = sessionStorage.getItem('from_lebar');
            let cookie_to_lebar = sessionStorage.getItem('to_lebar');
            //console.log(cookie_to_lebar);
            slider_lebar.update({
                from: cookie_from_lebar,
                to: cookie_to_lebar
            });

            var slider_panjang = $(".js-range-slider-panjang").data("ionRangeSlider");
            let cookie_from_panjang = sessionStorage.getItem('from_panjang');
            let cookie_to_panjang = sessionStorage.getItem('to_panjang');
            //console.log(cookie_to_lebar);
            slider_panjang.update({
                from: cookie_from_panjang,
                to: cookie_to_panjang
            });

            var slider_hkonstruksi = $(".js-range-slider-harga-konstruksi").data("ionRangeSlider");
            let cookie_from_hkonstruksi = sessionStorage.getItem('from_hkonstruksi');
            let cookie_to_hkonstruksi = sessionStorage.getItem('to_hkonstruksi');
            //console.log(cookie_to_lebar);
            slider_hkonstruksi.update({
                from: cookie_from_hkonstruksi,
                to: cookie_to_hkonstruksi
            });

            let cookie_ruang_lain_value = sessionStorage.getItem('ruang_lain_value');
            if (cookie_ruang_lain_value != null) {
                let cRuangLain = cookie_ruang_lain_value.split(",");
                var l;
                for (l = 0; l < cRuangLain.length; ++l) {
                    $("input.ruang_lain[value='" + cRuangLain[l] + "']").attr("checked", "checked");
                }
            }

            let cookie_gaya_desain_value = sessionStorage.getItem('gaya_desain_value');
            if (cookie_gaya_desain_value != null) {
                let cGayaDesain = cookie_gaya_desain_value.split(",");
                var g;
                for (g = 0; g < cGayaDesain.length; ++g) {
                    $("input.gaya_desain[value='" + cGayaDesain[g] + "']").attr("checked", "checked");
                }
            }

            let cookie_lantai_select = sessionStorage.getItem('lantai_select');
            if (cookie_lantai_select != null) {
                $("#lantai").val(cookie_lantai_select);
            }

            let cookie_jum_kamar_tidur = sessionStorage.getItem('jum_kamar_tidur_select');
            if (cookie_jum_kamar_tidur != null) {
                $("#jum_kamar_tidur").val(cookie_jum_kamar_tidur);
            }

            let cookie_arsitek = sessionStorage.getItem('arsitek_select');
            if (cookie_arsitek != null) {
                $("#inputGroupSelect02").val(cookie_arsitek);
            }
            // $('#select-order').val();
            $('#cari_rumah').val(decodeURI(window.location.hash.substring(1)));
        }

        $('#lantai').on('change', function(e) {

            let lantai_select = this.value;
            sessionStorage.setItem('lantai_select', lantai_select);
            console.log(sessionStorage.getItem('lantai_select'));
        });


        $('#jum_kamar_tidur').on('change', function(e) {

            let jum_kamar_tidur_select = this.value;
            sessionStorage.setItem('jum_kamar_tidur_select', jum_kamar_tidur_select);
            console.log(sessionStorage.getItem('jum_kamar_tidur_select'));
        });

        $('#inputGroupSelect02').on('change', function(e) {

            let arsitek_select = this.value;
            sessionStorage.setItem('arsitek_select', arsitek_select);
            console.log(sessionStorage.getItem('arsitek_select'));
        });

        $('.gaya_desain').on('change', 'input[type=checkbox]', function() {

            let gaya_desain_val = $(this).val(); // this gives me null
            sessionStorage.setItem('gaya_desain_val', gaya_desain_val);
            console.log(sessionStorage.getItem('gaya_desain_val'));

        });

        var ruang_lain_value = '';
        $("input.ruang_lain:checkbox").click(function() {
            // ruang_lain_value += $("label[for='" + this.id + "']").val() + ',';
            ruang_lain_value += this.value + ',';
            sessionStorage.setItem('ruang_lain_value', ruang_lain_value);
            console.log(sessionStorage.getItem('ruang_lain_value'));
        });

        var gaya_desain_value = '';
        $("input.gaya_desain:checkbox").click(function() {
            // gaya_desain_value += $("label[for='" + this.id + "']").val() + ',';
            gaya_desain_value += this.value + ',';
            sessionStorage.setItem('gaya_desain_value', gaya_desain_value);
        });

        getSummaryKatalog();
        ias.bind();
        $('#lebar_lahan,#panjang_lahan,#harga_konstruksi,#lantai,#jum_kamar_tidur,.ruang_lain,.gaya_desain,#inputGroupSelect02,#order,#cari_rumah').on('change', function() {
            clearTimeout(timer);
            timer = setTimeout(function() {
                $('.list-desain').empty();
                getSummaryKatalog();
                ias.next();
            }, 1000);
        });

        $("#cari_rumah").on("input", function(e) {
            clearTimeout(timer);
            timer = setTimeout(function() {
                $('.list-desain').empty();
                getSummaryKatalog();
                ias.next();
            }, 1000);
        });

        $(".irs-min, .irs-max").remove();
        $(".irs-from, .irs-to").hide();
    });


    function setOrder(by) {
        $('#order').val(by);
        $('.list-desain').empty();
        getSummaryKatalog();
        ias.next();
    }

    function getSummaryKatalog() {
        $.ajax({
            type: 'POST',
            url: "<?= base_url('api/getSummaryKatalogProduk') ?>",
            dataType: "JSON",
            data: $('#panel-filter :input').serialize(),
            success: function(data) {
                $('#count-rumah').html(data + ' desain rumah');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });

    }

    function sukaRumah(id_rumah) {
        let id_customer = Cookies.get('id_customer', {
            domain: 'rumahtinggal.id'
        });
        if (id_customer != null && id_customer != '') {
            let elm_stat = $('.like[data-id="' + id_rumah + '"] .value');
            let jum_stat = elm_stat.text();
            let elm_like = $('.like[data-id="' + id_rumah + '"] .fa');
            if (elm_like.hasClass('fa-heart-o')) {
                elm_like.removeClass('fa-heart-o').addClass('fa-heart').css('color', 'red');
                jum_stat++;

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
                elm_like.removeClass('fa-heart').addClass('fa-heart-o').css('color', '#026cb6');
                jum_stat--;

                $.ajax({
                    url: "<?= base_url('api/hapusDisukai/') ?>" + id_rumah + "/" + id_customer,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {}
                });
            }
            elm_stat.text(jum_stat);
        } else $('#ModalLogin').modal('show');
    }

    function getDesainItem(page, data) {
        let biaya = data.lantai == '1' ? 3500000 * data.luas_bangunan : (data.lantai == '2' ? 4500000 * data.luas_bangunan : 5500000 * data.luas_bangunan);

        let promo = data.promo != '0' ? '<div class="ribbon"><span class="ribbon-promo">' + data.promo + '% Off</span></div>' : '';
        let template = `<div class="col-md-5 p0 grid">
            <div class="product-grid page-` + page + `" data-id="${data.id_rumah}">
            ` + promo + `
                <div class="product-image desain">
                    <a href="javascript:void(0)" class="image" onclick="detailRumah(${data.id_rumah})">
                        <img class="pic-1" src="<?= base_url('assets/img/desain/') ?>${data.foto}">
                        <img class="pic-2" src="<?= base_url('assets/img/desain/') ?>${data.foto}">
                    </a>
                </div>
                <div class="product-content">
                    <div class="title" title="${data.nama_rumah}" onclick="detailRumah(${data.id_rumah})">${data.nama_rumah}</div>
                    <div class="product-rating">
                        <div class="arsitek" title="${data.nama_arsitek}" onclick="detailArsitek(${data.id_arsitek})">${data.nama_arsitek}</div>
                        <div class="rating" start="${data.rating}" data-value="${data.rating}"></div>
                    </div>
                    <div class="product-feature">
                        <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                            <span>${data.luas_lahan} m<sup>2</sup></span>
                        </div>
                        <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                            <span>${data.luas_bangunan} m<sup>2</sup></span>
                        </div>
                        <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                            <span>${data.lantai}</span>
                        </div>
                        <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                            <span>${data.kamar_tidur}</span>
                        </div>
                        <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                            <span>${data.toilet}</span>
                        </div>
                    </div>
                    <div class="product-detail">
                        <p class="lahan-minimal">Lahan minimal <span style="font-weight: 400;">${data.lebar_lahan} m x ${data.panjang_lahan} m</span></p>
                        <p>Biaya konstruksi <span style="font-weight: 400;" data-tootik="Estimasi awal" data-tootik-conf="square">Rp` + number_format(biaya, 0, ',', '.') + `</span></p>
                        <div class="product-statistic">
                            <div class="statistic">
                                <button class="btn btn-detail popular" onclick="detailRumah(${data.id_rumah})">Detail</a>
                            </div>
                            <div class="statistic">
                                <span class="view">
                                    <i class="fa fa-eye"></i>${data.dilihat}
                                </span>
                            </div>
                            <div class="statistic">
                                <span class="like" onclick="sukaRumah(${data.id_rumah})" data-id="${data.id_rumah}">
                                  <i class="fa fa-heart-o"></i><span class="value">${data.suka}</span>
                                </span>
                            </div>
                            <div class="statistic">
                                <div class="share"><i class="fa fa-share-alt"></i>
                                  <div class="social">
                                      <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Frumahtinggal.id%2Fdetail%2F${data.id_rumah}" target="_blank"><i class="fa fa-facebook"></i></a>
                                      <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20https%3A%2F%2Frumahtinggal.id%2Fdetail%2F${data.id_rumah}" target="_blank"><i class="fa fa-twitter"></i></a>
                                      <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Frumahtinggal.id%2Fdetail%2F${data.id_rumah} ${data.nama_rumah}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

        let item = document.createElement('div');
        item.innerHTML = template.trim();

        return item.firstChild;
    }

    var params = null,
        page = 0;

    function nextHandler(pageIndex) {
        if (params == null) params = $('#panel-filter :input').serialize();
        else {
            if (params != $('#panel-filter :input').serialize()) {
                params = $('#panel-filter :input').serialize();
                page = reset = 0;
            } else page++;
        }

        let fetchData = {
            method: 'POST',
            body: params,
            headers: new Headers()
        }

        return fetch('<?= base_url('api/getKatalogProduk') ?>', fetchData)
            .then(response => response.json())
            .then(result => {
                let frag = document.createDocumentFragment();
                let itemsPerPage = 12;
                let totalPages = Math.ceil(result.length / itemsPerPage);
                let offset = page * itemsPerPage;

                for (let i = offset, len = offset + itemsPerPage; i < len; i++) {
                    if (typeof result[i] !== 'undefined') {
                        let item = getDesainItem(pageIndex, result[i]);
                        frag.appendChild(item);
                    }
                }

                let hasNextPage = page < totalPages - 1;

                return this.append(Array.from(frag.childNodes)).then(() => hasNextPage);
            })
            .catch(error => console.log(error));
    }

    window.ias = new InfiniteAjaxScroll('.list-desain', {
        logger: false,
        item: '.grid',
        next: nextHandler,
        pagination: false,
        bind: false,
        scrollContainer: '.list-desain',
        spinner: '.spinner',
    });

    ias.on('page', (event) => {
        $('.product-rating .rating').jsRapStar({
            enabled: false
        });

        let id_customer = Cookies.get('id_customer', {
            domain: 'rumahtinggal.id'
        });
        if (id_customer != null && id_customer != '') {
            $.ajax({
                url: "<?= base_url('api/getRumahSuka/') ?>" + id_customer,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    if (data != '') {
                        $.each(data, function(i, item) {
                            let id_rumah = item.id_rumah;
                            $('.like[data-id="' + id_rumah + '"] .fa').removeClass('fa-heart-o').addClass('fa-heart').css('color', 'red');
                        });
                    }
                }
            });
        };


        if (isMobile() == true) {
            $('.product-grid .image, .product-grid .title').prop('onclick', '').on('click', function(e) {
                $(this).trigger('hover');
            });
        }
    });
</script>