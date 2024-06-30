<link rel="stylesheet" href="<?= base_url('assets/css/balloon.min.css') ?>" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .hvr-back-pulse:hover,
    .hvr-back-pulse:focus,
    .hvr-back-pulse:active {

        background-color: #026CB6;

    }

    .hvr-back-pulse:hover>.pricingTable .pricing-content ul li span .read.btn-hubungi-kami,
    .hvr-back-pulse:focus>.pricingTable .pricing-content ul li span .read.btn-hubungi-kami,
    .hvr-back-pulse:active>.pricingTable .pricing-content ul li span .read.btn-hubungi-kami {

        background: -webkit-linear-gradient(#fff, #fff) !important;

        background-clip: border-box !important;

        -webkit-background-clip: text !important;

        -webkit-text-fill-color: transparent !important;

    }

    .button-background::before {

        background: hsl(174, 100%, 20%);

    }

    .strike {

        position: absolute;

        text-decoration: line-through;

        font-weight: 400;

        font-size: 20px;

        bottom: 10px;

        left: 40px;

        color: #d80707;

    }

    .pricingTable .amount {

        display: inline-block;

        padding: 20px 10px 0px 10px;

        font-size: 35px;

        font-weight: 700;

        color: #000;

        background: #f6f4f4;

    }



    .pricingTable .currency {

        font-size: 22px;

        position: relative;

        top: -22px;

        left: -4px;

    }

    .amount.text-blue {

        color: #026CB6 !important;

    }

    ul.circle {

        list-style-type: circle;

    }



    .border-none {

        border-bottom: none !important;

    }

    /*.free .pricing-content ul li span a.read.btn-hubungi-kami{

  background: -webkit-linear-gradient(#ED213A,#93291E) !important;

    background-clip: border-box;

background-clip: border-box !important;

-webkit-background-clip: text !important;

  }*/

    .read.btn-hubungi-kami {

        background: none;

        background: -webkit-linear-gradient(#0975a9, #0bccba) !important;

        background-clip: border-box !important;

        -webkit-background-clip: text !important;

        -webkit-text-fill-color: transparent !important;

    }

    .amount.harga {

        font-size: 22px !important;

    }

    .col-md-2 {

        flex: 0 0 19.25%;

        max-width: 19.25%;

        padding-right: 0px !important;

        width: 19.967%;

        padding-left: 0px !important;

    }



    .pricingTable a.order {

        border-radius: 50px !important;

        padding: 10px 25px;

        font-size: 16px;

        width: auto !important;



    }



    #gSignIn .abcRioButton.abcRioButtonBlue {
        margin: 0 auto;
    }



    .modal-backdrop.show {
        opacity: .5;
    }



    .modal-content {
        border: none;
    }



    .sec-signup label {

        font-weight: normal;

        margin-bottom: 6px;

    }



    .sec-signup .input-group {

        background: #ECFBEA;

        border-radius: 50px;

    }



    .sec-signup .form-control {

        border-radius: 0;

        height: 42px;

        /*width: 222px;*/

        /*padding: 9px;*/



        background: transparent;

        font-size: 15px;

        padding: 2px 10px;

        border: none;

    }



    /*.sec-signup .form-control:focus {

    border-color: #61b307;

    box-shadow: 0 3px 1px rgb(97, 179, 7) !important;

}



.signup { margin-left: -20px; }*/



    .signup a {

        width: 60px;

        height: 60px;

        display: block;

        border-radius: 10px;

        margin: auto;

        box-shadow: 0 1px 4px rgba(0, 0, 0, .25);

        margin-bottom: 4px;

        margin-left: -3px;

    }



    .signup .row {

        display: flex;

        flex-wrap: wrap;

        justify-content: center;

        margin: 7px 0;

    }



    .signup a.user-estimator,
    .signup a.user-estimator:hover {

        background-image: url('../assets/beranda/assets/signup/estimator-grey.png');

        background-size: 78%;

        background-position: bottom;

        background-repeat: no-repeat;

    }



    .signup a.user-suplier,
    .signup a.user-suplier:hover {

        background-image: url('../assets/beranda/assets/signup/suplier-grey.png');

        background-size: 90%;

        background-position: bottom;

        background-repeat: no-repeat;

    }



    .signup a.user-estimator.pilih {

        background-image: url('../assets/beranda/assets/signup/estimator-white.png');

        background-size: 78%;

        background-position: bottom;

        background-repeat: no-repeat;

        background-color: #61b307;

    }



    .signup a.user-suplier.pilih {

        background-image: url('../assets/beranda/assets/signup/suplier-white.png');

        background-size: 90%;

        background-position: bottom;

        background-repeat: no-repeat;

        background-color: #61b307;

    }



    .btn-daftar {

        font-size: 16px;

        padding: 9px 96px;

        box-shadow: none;

        border-radius: 25px;

    }



    .btn-daftar {
        background: linear-gradient(to right, #d9201a, #fb3a30);
    }



    .btn-daftar:hover {
        background: linear-gradient(to right, #f7b927, #ec8920);
    }



    .h-55 {
        height: 55px;
    }



    .h-75 {
        height: 75px;
    }



    .h-95 {
        height: 95px;
    }



    .h-137 {
        height: 137px;
    }



    .h-160 {
        height: 160px;
    }



    .fa.fa-question-circle-o {
        color: #026CB6;
    }



    .tool-tip {

        display: inline-block;

        position: relative;

        margin-left: 3px;

    }



    .tool-tip .tool-tip__icon {

        border-radius: 10px;

        cursor: pointer;

        display: inline-block;

        text-align: center;

        font-style: normal;

    }



    .tool-tip .tool-tip__info {

        display: none;

        background: #026CB6;

        border-radius: 5px;

        font-size: 0.875em;

        padding: 6px 10px;

        position: absolute;

        left: 27px;

        top: -7px;

        width: 165px;

        z-index: 2;

        line-height: 1.5;

    }



    .tool-tip .tool-tip__info:before,
    .tool-tip .tool-tip__info:after {

        content: "";

        position: absolute;

        left: -10px;

        top: 7px;

        border-style: solid;

        border-width: 10px 10px 10px 0;

        border-color: transparent #026CB6;

    }



    .tool-tip .tool-tip__info:after {

        left: -8px;

        border-right-color: #026CB6;

    }



    .tool-tip .tool-tip__info .info {
        display: block;
    }



    .tool-tip .tool-tip__info .info__title {
        color: #009f04;
    }



    .tool-tip:hover .tool-tip__info,
    .tool-tip:focus .tool-tip__info {

        display: inline-block;

        -webkit-animation-play-state: paused
    }



    .tool-tip .tool-tip__info span {
        color: #fff;
    }



    .daun {

        position: absolute;

        bottom: 31px;

        top: 0;

        z-index: -1;

        left: -85px;

        width: 110px;

    }



    .roket-top {

        position: absolute;

        z-index: 7;

        top: -325px;

        width: 61px;

        rotate: 50deg;

    }



    .ballon {

        background: none;

        border: none;

        margin-left: 5px;

        padding: 0;

    }



    [aria-label][data-balloon-pos]::after {
        background: rgba(31, 159, 5, 0.95);
    }



    [aria-label][data-balloon-pos]::before {
        border-top-color: rgba(31, 159, 5, 0.95);
    }



    .red {
        color: red !important;
    }



    .col-md-2 {
        width: 20%;
    }



    .pricingTable .pricingTable-header {

        padding: 25px 10px;

        background: #f4f5f6;

        color: #ffffe5;

        padding-bottom: 0px;

        text-align: center;

    }



    .pricingTable .heading {

        font-size: 24px;

        font-weight: bold;

        margin: 0;

        text-transform: capitalize;

    }



    .pricingTable .subtitle {

        font-size: 12px;

        /* margin: 10px 0 0; */

        display: block;

    }



    .pricingTable .price-value {
        text-align: center;
    }



    .pricingTable .month {

        display: inline-block;

        padding: 5px 16px;

        font-size: 21px;

        color: #2a3a73;

        float: left;

        position: relative;

    }



    .pricingTable .month:after {

        content: "";

        border-width: 10px 0 10px 12px;

        border-style: solid;

        border-color: transparent transparent transparent #ffffe5;

        position: absolute;

        top: 39%;

        right: -12px;

        z-index: 1;

    }



    .pricingTable .amount {

        display: inline-block;

        padding: 20px 10px 0px 10px;

        font-size: 35px;

        font-weight: 700;

        color: #000;

        background: #f6f4f4;

    }



    .pricingTable .currency {

        font-size: 22px;

        position: relative;

        top: -22px;

        left: -4px;

    }



    .pricingTable .pricing-content ul {

        list-style: none;

        color: #222;

    }



    .pricingTable .pricing-content ul li {

        font-size: 17px;

        padding: 10px;

        border-bottom: 1px solid #e3e3e3;

        text-align: center;

    }



    .pricingTable.header .pricing-content ul li {
        text-align: left;
    }



    .pricingTable .read {

        background: linear-gradient(to right, #0975a9, #0bccba);

        font-size: 14px;

        color: #fff;

        padding: 5px 18px;

        border-radius: 50px;

        font-weight: 600;

        width: 100% !important;

        display: inline-block;

    }



    .pricingTable .read:hover,
    .pricingTable.free .read:hover {
        background: linear-gradient(to right, #f7b927, #ec8920);
    }



    /*.pricingTable.free .pricingTable-header, .pricingTable.free .read { background: #026CB6; }*/



    .pricingTable.free .amount {
        background: transparent;
    }



    /*.pricingTable.free .round-bottom { background: #026CB6; } */



    .pricingTable.free .read {
        background: linear-gradient(to right, #d9201a, #fb3a30);
        /*background: linear-gradient(to right,#ec8920,#f7b927);*/
    }



    /*.pricingTable.free .read:hover { background: linear-gradient(to right,#09a915,#0bcc1a); }*/



    @media screen and (max-width: 990px) {
        .pricingTable {
            margin-bottom: 25px;
        }
    }



    .fitur {

        height: 194px;

        /* background-image: url(../assets/img/upgrade.png);*/

        background-size: 83%;

        background-repeat: no-repeat;

        background-position: center;

    }



    .pricingTable li {
        text-align: left;
    }



    .red {
        color: red;
    }



    .green {
        color: #009f04;
    }



    .round-bottom {

        height: 40px;

        background: #f6f4f4;

        border-radius: 0 0 100% 100%;

    }



    .mb-3 {
        margin-bottom: 3rem;
    }



    /* .free { background: #e8f1ff; } */



    .strike {

        position: absolute;

        text-decoration: line-through;

        font-weight: 400;

        font-size: 20px;

        bottom: 10px;

        left: 40px;

        color: #d80707;

    }



    .mb-0 {
        margin-bottom: 0;
    }



    .ribbon {

        width: 100px;

        height: 100px;

        overflow: hidden;

        position: absolute;

    }



    .ribbon::before,
    .ribbon::after {

        position: absolute;

        z-index: 0;

        content: '';

        display: block;

        border: 3px solid #970000;

    }



    .ribbon span {

        position: absolute;

        display: block;

        width: 153px;

        padding: 5px 0;

        background-color: red;

        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

        text-align: center;

        color: #fff;

        font-weight: 600;

    }



    .ribbon-top-right {

        top: -3px;

        right: -3px;

    }



    .ribbon-top-right::before,
    .ribbon-top-right::after {

        border-top-color: transparent;

        border-right-color: transparent;

    }



    .ribbon-top-right::before {

        top: 0;

        left: 16px;

    }



    .ribbon-top-right::after {

        bottom: 15px;

        right: 0;

    }



    .ribbon-top-right span {

        left: -8px;

        top: 16px;

        transform: rotate(45deg);

    }



    /*card-*/

    .credit {

        margin: 10px 0px;

        color: #888888;

        font-size: 25px;

        transition: all 0.5s;

    }



    /*.credit a { color: inherit; }



a, .card__exit, .card__icon {

    position: relative;

    text-decoration: none;

    color: rgba(255, 255, 255, 0.9);

}



a::after {

    position: absolute;

    top: 25px;

    left: 0;

    content: "";

    width: 0%;

    height: 3px;

    background-color: rgba(255, 255, 255, 0.6);

    transition: all 0.5s;

}



a:hover::after { width: 100%; }*/



    .main-container {
        padding: 30px;
    }



    .card-container {

        display: flex;

        flex-wrap: wrap;

        justify-content: space-between;

    }



    .card-heading {

        padding: 22px;

        width: 18.5%;

        display: grid;

        grid-template-rows: 3px 50px 105px 40px;

        border-radius: 30px;

        /*box-shadow: 0 3px 7px rgb(0 0 0 / 25%);*/

        transition: all 0.5s;

        text-align: center;

    }



    /*.card-heading:hover {

    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);

    transform: scale(1.01);

}*/



    .card-heading h3 {

        font-weight: 600;

        font-size: 28px;

        color: #222;

    }



    .card__exit {

        grid-row: 1/2;

        justify-self: end;

    }



    .card__icon {

        grid-row: 2/3;

        font-size: 30px;

    }



    .card__title {

        grid-row: 3/4;

        color: #222;

        font-size: 16px;

    }



    .card__apply {

        grid-row: 4/5;

        align-self: center;

    }



    .card-1 {

        background: linear-gradient(to bottom, #3fbafe, #32edfd);

        border-bottom: 8px solid #3fbafe;

    }



    .card-2 {

        background: linear-gradient(to bottom, #8aef2e, #92fb6f);

        border-bottom: 8px solid #84ea26;

    }



    .card-3 {

        background: linear-gradient(to bottom, #ecd42a, #f5e962);

        border-bottom: 8px solid #ead11d;

    }



    .card-4 {

        background: linear-gradient(to bottom, #58d5c9, #6cffca);

        border-bottom: 8px solid #58d5c9;

    }



    @media (max-width: 1600px) {

        .card-container {
            justify-content: center;
        }

    }



    .tabel-centang,
    .tabel-centang-material {

        text-align: left;

        padding: 0px 45px;

    }
</style>



<!-- <img class="daun" src="assets/img/pricing/ilustrasi-daun.png"> -->

<div class="container" style="margin-top: 100px; margin-bottom: 50px;">

    <div class="mb-4">

        <h1 class="text-center mb-1"><?= $nama_rumah ?></h1>

        <div class="text-center">Paket Terbaik Kami</div>

    </div>





    <!-- <div class="row mb-3">

      <div class="card-container" style="justify-content: space-between; width:100%">

          <div class="card-heading hvr-float-shadow card-1">

            <h3>FREE</h3>

            <p class="card__title"></p>

            <p class="card__apply pricingTable standart-button"><a href="javascript:void(0)" data-toggle="modal" data-target="#ModalDaftar" class="read">Daftar</a></p>

          </div>



          <div class="card-heading hvr-float-shadow card-2">

            <h3>PAKET 1</h3>

            <p class="card__title"></p>

            <p class="card__apply pricingTable free professional-button" style="background: none;"><a href="javascript:void(0)" onclick="checkoutProfesional()" class="read">Order</a></p>

          </div>



          <div class="card-heading hvr-float-shadow card-3">

            <h3>PAKET 2</h3>

            <p class="card__title"></p>

            <p class="card__apply pricingTable corporate-button"><a href="javascript:void(0)" onclick="checkoutCorporate()" class="read">Order</a></p>

          </div>



          <div class="card-heading hvr-float-shadow card-4">

            <h3>PAKET 3</h3>

            <p class="card__title"></p>

            <p class="card__apply pricingTable"><a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a></p>

          </div>

        

          <div class="card-heading hvr-float-shadow card-4">

            <h3>PAKET LENGKAP</h3>

            <p class="card__title"></p>

            <p class="card__apply pricingTable"><a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a></p>

          </div>

        

      </div>

  </div> -->









    <div class="row" style="box-shadow: 0 0 10px 8px rgb(233 229 229 / 50%);border-radius: 20px;">

        <div class="col-md-2 col-sm-6" style="padding: 0; max-width: 23% !important; flex: 0 0 23%;">

            <div class="fitur"></div>

            <div class="pricingTable header" style="border-bottom-left-radius: 20px;">

                <div class="pricing-content">

                    <ul>

                        <li class="h-55">Laporan Desain

                            <div class="tool-tip">

                                <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                                <p class="tool-tip__info">

                                    <span>Uraian konsep desain <br /> Gambar 3D eksterior <br /> Denah tanpa ukuran <br /> Tampak bangunan <br /> Spesifikasi material</span>

                                </p>

                            </div>

                        </li>



                        <li class="h-55">Gambar Skematik

                            <div class="tool-tip">

                                <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                                <p class="tool-tip__info">

                                    <span>Denah dengan ukuran <br /> Tampak dengan Ukuran <br /> Potongan dengan ukuran</span>

                                </p>

                            </div>

                        </li>



                        <li class="h-55">Gambar Kerja

                            <div class="tool-tip">

                                <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                                <p class="tool-tip__info">

                                    <span></span>

                                </p>

                            </div>

                        </li>



                        <li class="h-55">Rencana Anggaran Biaya

                            <div class="tool-tip">

                                <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                                <p class="tool-tip__info">

                                    <span></span>

                                </p>

                            </div>

                        </li>



                        <li class="h-55 border-none">Rencana Kerja dan Syarat-Syarat

                            <div class="tool-tip">

                                <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                                <p class="tool-tip__info">

                                    <span></span>

                                </p>

                            </div>

                        </li>



                        <!--  <li class="h-55 border-none" style="height: 185px;">rumahtinggal.id juga melayani jasa <br /> - desain interior <br /> - desain taman <br /> - perhitungan struktur <br /> - gambar Persetujuan Bangunan Gedung (PBG)

                        <div class="tool-tip">

                          <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                          <p class="tool-tip__info">

                            <span></span>

                          </p>

                        </div>

                      </li>



                      <li class="h-55">Perhitungan Struktur

                        <div class="tool-tip">

                          <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                          <p class="tool-tip__info">

                            <span>Nikmati perhitungan RAB Anda tanpa batasan <strong>nominal proyek</strong></span>

                          </p>

                        </div>

                      </li>



                      <li class="h-55">Desain Interior

                        <div class="tool-tip">

                          <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                          <p class="tool-tip__info">

                            <span></span>

                          </p>

                        </div>

                      </li>



                      <li class="h-55" style="border-bottom: none;border-bottom-left-radius: 20px">Modifikasi Desain

                        <div class="tool-tip">

                          <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                          <p class="tool-tip__info">

                            <span></span>

                          </p>

                        </div>

                      </li>-->



                    </ul>

                </div>

                <!-- <a href="#" class="read">sign up</a> -->

            </div>

        </div>



        <div class="col-md-2 col-sm-6 hvr-float-shadow hvr-back-pulse hvr-overline-from-center button-background" style="padding: 0;">

            <div class="pricingTable">

                <div class="pricingTable-header">

                    <h3 class="heading text-center text-black">Free</h3>

                    <div class="price-value" style="height: 100px;">

                        <span class="amount red">GRATIS</span>

                    </div>

                </div>

                <div class="round-bottom"></div>

                <div class="pricing-content">

                    <ul>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <!-- <li class="h-55 border-none">

                        <span class="subtitle text-center pricingTable">

                            <a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a>

                        </span>

                      </li> -->



                    </ul>

                </div>

                <!-- <a href="#" class="read">sign up</a> -->

            </div>

        </div>





        <div class="col-md-2 col-sm-6 hvr-float-shadow hvr-back-pulse" style="padding: 0;">

            <div class="pricingTable">

                <div class="pricingTable-header">

                    <h3 class="heading text-center text-black">Paket 1</h3>

                    <div class="price-value pt-4" style="height: 100px;">

                        <span class="amount text-blue">

                            <span class="currency">Rp <span class="strike">399.000</span></span>149.000

                        </span>

                    </div>

                </div>

                <div class="round-bottom"></div>

                <div class="pricing-content">

                    <ul>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <!-- <li class="h-55 border-none">

                        <span class="subtitle text-center pricingTable">

                            <a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a>

                        </span>

                      </li> -->



                    </ul>

                </div>

                <!-- <a href="#" class="read">sign up</a> -->

            </div>

        </div>



        <div class="col-md-2 col-sm-6 hvr-float-shadow hvr-back-pulse" style="padding: 0;">

            <div class="pricingTable free">

                <!--  <div class="ribbon ribbon-top-right"><span>63% Off</span></div> -->

                <div class="pricingTable-header">

                    <h3 class="heading text-center">Paket 2</h3>

                    <div class="price-value pt-4" style="height:100px">

                        <span class="amount text-blue">

                            <span class="currency">Rp <span class="strike">399.000</span></span>149.000

                        </span>

                        <!-- <span class="amount text-white">

                          <span class="currency">Rp <span class="strike">399.000</span></span>149.000

                      </span><br>

                      <small class="text-white" style="font-size:16px;">/ bulan</small> -->

                    </div>

                </div>

                <div class="round-bottom" style="height: 41px;"></div>

                <div class="pricing-content">

                    <ul>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>

                        <!-- <li class="h-55 border-none">

                        <span class="subtitle text-center pricingTable">

                            <a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a>

                        </span>

                      </li> -->



                    </ul>

                </div>

            </div>

        </div>



        <div class="col-md-2 col-sm-6 hvr-float-shadow hvr-back-pulse" style="padding: 0;">

            <div class="pricingTable">

                <!-- <div class="ribbon ribbon-top-right"><span>53% Off</span></div> -->

                <div class="pricingTable-header">

                    <h3 class="heading text-center text-black">Paket 3</h3>

                    <div class="price-value pt-4" style="height:100px">

                        <span class="amount text-blue">

                            <span class="currency">Rp <span class="strike">399.000</span></span>149.000

                        </span>

                        <!-- <span class="amount">

                          <span class="currency">Rp <span class="strike">379.000</span></span>179.000

                      </span><br>

                      <small class="text-black" style="font-size:16px;">/ bulan</small> -->

                    </div>

                </div>

                <div class="round-bottom" style="height: 41px;"></div>

                <div class="pricing-content">

                    <ul>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>

                        <!-- <li class="h-55 border-none">

                        <span class="subtitle text-center pricingTable">

                            <a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a>

                        </span>

                      </li> -->



                    </ul>

                </div>

                <!-- <a href="#" class="read">sign up</a> -->

            </div>

        </div>





    </div>



    <div class="row" style="margin-top: 25px;margin-bottom: 25px;">

        <div class="col-md-2 col-sm-6" style="padding: 0; max-width: 23% !important; flex: 0 0 23%;"></div>

        <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">

            <span class="subtitle text-center pricingTable standart-button">

                <a href="javascript:void(0)" data-toggle="modal" data-target="#ModalDaftar" class="read order">Download</a>

            </span>

        </div>



        <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">

            <span class="subtitle text-center pricingTable professional-button">

                <a href="<?= base_url('checkout') . $id_rumah ?>" onclick="checkoutProfesional()" class="read order">Beli</a>

            </span>

        </div>



        <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">

            <span class="subtitle text-center pricingTable free corporate-button">

                <a href="<?= base_url('checkout') . $id_rumah ?>" onclick="checkoutCorporate()" class="read order">Beli</a>

            </span>

        </div>



        <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">

            <span class="subtitle text-center pricingTable corporate-button">

                <a href="<?= base_url('checkout') . $id_rumah ?>" onclick="checkoutCorporate()" class="read order">Beli</a>

            </span>

        </div>





    </div>











    <div class="row" style="box-shadow: 0 0 10px 8px rgb(233 229 229 / 50%);border-radius: 20px;padding:20px;background:#fff;">

        <div class="col-md-9" style="font-size:17px;">rumahtinggal.id juga melayani jasa :

            <div style="border-bottom: 1px solid #026CB6;margin-bottom: 10px;width: 116px;"></div>

            <ul class="circle">

                <li>Desain Interior

                    <div class="tool-tip">

                        <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                        <p class="tool-tip__info">

                            <span></span>

                        </p>

                    </div>

                </li>

                <li>Perhitungan Struktur

                    <div class="tool-tip">

                        <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                        <p class="tool-tip__info">

                            <span></span>

                        </p>

                    </div>

                </li>

                <li>Gambar Persetujuan Bangunan Gedung (PBG)

                    <div class="tool-tip">

                        <i class="tool-tip__icon fa fa-question-circle-o" aria-hidden="true"></i>

                        <p class="tool-tip__info">

                            <span></span>

                        </p>

                    </div>

                </li>

            </ul>





        </div>

        <div class="col-md-3" style="padding: 29px;">

            <div class="subtitle text-center pricingTable professional-button">

                <a href="" onclick="hubungiKami()" class="read order">Hubungi Kami</a>

            </div>

        </div>

    </div>









    <!-- tutup container -->

</div>





















<div class="modal fade" id="ModalDaftar" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalCenterTitle">

    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="sec-signup" id="sec-signup">

                <img src="<?= base_url('assets/beranda/assets/signup/bg-signup.png') ?>" class="signup-box" height="380px" style="margin-top: 0;float: right;background:#fff;" />

                <div class="entry-box pull-right" style="right: 22px;top: 22px;width: 255px;position: absolute;">

                    <div class="form-group text-center signup">

                        <label>Daftar sebagai:</label>

                        <div class="row">

                            <div class="col-md-4">

                                <a href="javascript:void(0);" class="user-estimator pilih" onclick="$('#akun').val(1)"></a>

                                <span style="margin-left: -3px;">Estimator</span>

                            </div>

                            <div class="col-md-4">

                                <a href="javascript:void(0);" class="user-suplier" onclick="$('#akun').val(3)"></a>

                                <span style="margin-left: 3px;">Suplier</span>

                            </div>

                            <input type="hidden" id="akun" value="1">

                        </div>

                    </div>



                    <label>Daftar menggunakan email:</label>

                    <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-envelope" style="font-size: 16px;"></i></span>

                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">

                    </div>

                    <!-- <div class="input-group">

                      <span class="input-group-addon"><i class="fa fa-envelope" style="font-size: 16px;margin-top: -2px;"></i></span>

                      <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">

                  </div> -->

                    <div class="form-group" style="margin-top: 12px;">

                        <button id="btn-daftar" class="btn btn-primary btn-daftar" onclick="daftar($('#email').val(),$('#akun').val())">DAFTAR</button>

                    </div>



                    <div class="form-group text-center" id="sec-akses-sso">

                        <label>atau akses menggunakan:</label>

                        <!-- <ul class="list-inline">

                          <li class="hvr-float-shadow"><a href="javascript:void(0);" onclick="fbLogin()" id="link-sso-facebook"><div class="facebook"></div></a></li>

                          <li class="hvr-float-shadow"><a href="javascript:void(0);" onclick="googleLogin()" id="link-sso-google"><div class="g"></div></a></li>

                          <li class="hvr-float-shadow"><a href="<?php if (isset($auth_google)) echo $auth_google;
                                                                else echo 'javascript:void(0);' ?>" id="link-sso-google"><div class="g"></div></a></li>

                      </ul> -->

                        <div id="gSignIn"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<script src="<?= base_url('assets/js/js.cookie.min.js') ?>"></script>

<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>



<script>
    (function() {

        $('#menu-paket a').addClass('active');

        $('nav.navbar.navbar-default.navbar-fixed').removeClass('no-background');



        if (Cookies.get('id_pengguna', {
                domain: 'estimator.id'
            }) != null) {

            $('.standart-button').html('<a href="<?= base_url('proyek') ?>" class="read">Buat Proyek</a>');

            $('.professional-button a, .corporate-button a').text('Upgrade');

        }



        sessionStorage.removeItem('paket');

        sessionStorage.removeItem('id_order');

    })();



    function isMobile() {

        var check = false;

        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);

        return check;

    };



    $('.btn-hubungi-kami').on('click', function() {

        let text = `Halo Tim Estimator.id,\nSaya ingin berlangganan *Paket Enterprise*.\nApakah saya bisa mendapatkan informasi lebih lanjut?\nTerima kasih`;

        let phone = '628112585566';

        let message = encodeURIComponent(text);



        let api_wa;

        if (isMobile() == true) api_wa = "whatsapp://send";
        else api_wa = "https://api.whatsapp.com/send";

        let url = api_wa + '?phone=' + phone + '&text=' + message;

        window.open(url, '_blank');

    });



    function checkoutProfesional() {

        window.location.href = "<?= base_url('checkout') ?>";

        sessionStorage.setItem('paket', '1');

    }



    function checkoutCorporate() {

        window.location.href = "<?= base_url('checkout') ?>";

        sessionStorage.setItem('paket', '2');

    }



    function daftar(email, akun) {

        if (email != '') {

            if (validateEmail(email)) {

                $.ajax({

                    url: "<?= $this->config->item('url_server') ?>api/daftarPengguna/" + email + "/" + akun,

                    type: "POST",

                    dataType: "JSON",

                    success: function(data) {

                        if (data.Tipe == 'warning') toastr.warning(data.Info, 'Informasi', opsi_toastr);

                        else toastr.success(data.Info, 'Informasi', opsi_toastr);

                        $('#akun').val('1');
                        $('#email').val('');

                        if (data.Status == 'belum_lengkap') window.location.href = "<?= base_url('lengkapi_profil') ?>";

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        //toastr.error('Terjadi masalah saat pendaftaran pengguna.', 'Kesalahan', opsi_toastr);

                    }

                });

            } else toastr.warning("Email yang Anda masukkan tidak valid!", 'Peringatan', opsi_toastr);

        } else toastr.warning("Silakan masukkan dulu email Anda!", 'Peringatan', opsi_toastr);

    }



    $('.signup a.user-estimator').click(function() {

        $(this).addClass('pilih');

        $('.signup a.user-suplier').removeClass('pilih');

    });



    $('.signup a.user-suplier').click(function() {

        $(this).addClass('pilih');

        $('.signup a.user-estimator').removeClass('pilih');

    });



    function translateSignin(id, signinText, signedinText) {

        const spans = document.getElementById(id).querySelectorAll('.abcRioButtonContents span');



        if (spans.length !== 2) {

            throw new Error(`Incorrect amount of sign-in span children (${spans.length} != 2)`);

        }



        spans.forEach(span => {

            span.innerHTML = span.innerHTML.replace(/^Sign in with Google$/, signinText);

            span.innerHTML = span.innerHTML.replace(/^Signed in with Google$/, signedinText);

        })

    }



    function renderButton() {

        gapi.signin2.render('gSignIn', {

            'scope': 'profile email',

            'width': 190,

            'height': 36,

            'longtitle': true,

            'theme': 'dark',

            'onsuccess': onSuccess,

            'onfailure': onFailure

        });



        //setTimeout(() => {translateSignin('gSignIn', 'Masuk dengan Google', 'Anda telah masuk')}, 400);

    }



    function onSuccess(googleUser) {

        if (Cookies.get('id_pengguna', {
                domain: 'estimator.id'
            }) == null) {

            //var profile = googleUser.getBasicProfile();

            //var id_token = googleUser.getAuthResponse().id_token;



            gapi.client.load('oauth2', 'v2', function() {

                var request = gapi.client.oauth2.userinfo.get({
                    'userId': 'me'
                });

                request.execute(function(resp) {

                    $.ajax({

                        url: "<?= base_url('api/daftarSSO/onetap/0') ?>",

                        type: "POST",

                        data: {

                            "nama_pengguna": resp.name,

                            "username": resp.given_name,

                            "email": resp.email,

                            "kode_verifikasi": resp.sub,

                            "kategori": $('#akun').val()

                        },

                        dataType: "JSON",

                        success: function(data) {

                            if (data.Success == true) {

                                toastr.success(data.Info, 'Informasi', opsi_toastr);

                                if (data.Status == 'belum_lengkap') window.location.href = "<?= base_url('lengkapi_profil') ?>";

                                else {

                                    if (Cookies.get('kategori', {
                                            domain: 'estimator.id'
                                        }) != '3') {

                                        let url = $(location).attr('href');

                                        window.location.href = url;

                                    }

                                }

                            } //else if (data.Aktif == true) toastr.warning(data.Info, 'Peringatan', opsi_toastr);

                        }

                    });

                });

            });

        }

    }



    function onFailure(error) {
        console.log(error);
    }



    function parseJwt(token) {

        var base64Url = token.split('.')[1];

        var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');

        var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {

            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);

        }).join(''));



        return JSON.parse(jsonPayload);

    };
</script>