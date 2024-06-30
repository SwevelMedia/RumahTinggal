<link rel="stylesheet" href="<?= base_url('assets/vendor/ion-rangeslider/ion.rangeSlider.min.css') ?>" />
<!-- <link rel="stylesheet" href="<?= base_url('assets/vendor/jquery-countdown/jquery.countdown.css') ?>" /> -->

<style>
.body-cart { color: #333; }

.col-md-2 { width: 20%; }
.sec-title {
    margin-left: 9px !important;
}
  .sec-spec {
    margin-left: 9px !important;
}
  .sec-icon img {
    width: 20px !important;
}
  b, sup, sub, u, del {
    color: #000;
}
  .btn-primary:hover {
    border-color: transparent;
}
input {
    background:none;
    border:none;
    padding: none;
    margin: none;
}

dt { font-weight: 400; }

dd { font-weight: 600; }

#gSignIn .abcRioButton.abcRioButtonBlue,
#gSignInMasuk .abcRioButton.abcRioButtonBlue { margin: 0 auto; }

#gSignInWrapper { line-height: 1px; }
  
#customBtn {
    display: inline-block;
    background: white;
    color: #444;
    width: 190px;
    border-radius: 5px;
    border: thin solid #888;
    box-shadow: 1px 1px 1px grey;
    white-space: nowrap;
}

#customBtn:hover { cursor: pointer; }

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

.signup a.user-estimator, .signup a.user-estimator:hover {
    background-image: url('../assets/beranda/assets/signup/estimator-grey.png');
    background-size: 78%;
    background-position: bottom;
    background-repeat: no-repeat;
}

.signup a.user-suplier, .signup a.user-suplier:hover {
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

.btn-daftar { background: linear-gradient(to right,#d9201a,#fb3a30); }

.btn-daftar:hover { background: linear-gradient(to right,#f7b927,#ec8920); }

span.label {
    font-family: serif;
    font-weight: normal;
}

span.icon {
    background: url('https://developers-dot-devsite-v2-prod.appspot.com/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
    display: inline-block;
    vertical-align: middle;
    width: 35px;
    height: 35px;
}

span.buttonText {
    display: inline-block;
    vertical-align: middle;
    padding-left: 42px;
    padding-right: 42px;
    font-size: 14px;
    font-weight: 600;
}

.modal-content .subscribe {
    color: #fff;
    background: linear-gradient(to right,#f39c12,#f1c40f);
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 10px 13px;
    border: none;
    border-radius: 50px;
    display: block;
    transition: all 0.3s;
}

.modal-content .subscribe:hover { background: linear-gradient(to right,#33d23f,#089613); }

.modal-content .subscribe i { padding-right: 5px; }

.irs--flat .irs-grid-pol { background-color: unset; }

.irs--flat .irs-grid-text {
    color: #333;
    font-size: 17px;
    padding: 0;
    top: 24px;
    font-weight: 600;
}

.irs.irs--flat.js-irs-0 {
    width: 470px;
    margin: 0 auto;
    margin-top: -7px;
}

.irs--flat .irs-handle {
    width: 0;
    top: 39px;
    height: 33px;
    cursor: pointer;
}

.irs--flat .irs-handle > i:first-child {
    background-color: unset;
    background: rgba(0, 0, 0, 0) url('assets/img/pricing/slider_1.png') no-repeat scroll 0% 0% / 20px;
    width: 20px;
    left: -9px;
}

.irs--flat .irs-handle.state_hover > i:first-child,
.irs--flat .irs-handle:hover > i:first-child { background-color: unset; }

.irs--flat .irs-line {
    height: 25px;
    top: 30px;
    background: #bcf6ac;
    border-radius: 0;
}

.irs--flat .irs-min, .irs--flat .irs-max {
    font-size: 18px;
    background: #026CB6;
    color: #fff;
    display: none;
    border-radius: 0;
}

.irs--flat .irs-from, .irs--flat .irs-to, .irs--flat .irs-single {
    font-size: 16px;
    background: linear-gradient(to top,#026709,#0bc705);
    border-radius: 0;
    top: 12px;
    z-index: 2;
}

.irs--flat .irs-from::before, .irs--flat .irs-to::before,
.irs--flat .irs-single::before { border-top-color: #026709; }

.irs--flat .irs-bar {
    height: 25px;
    top: 30px;
    background: #026CB6;
    border-radius: 0;
}
    
.fa.fa-info-circle {
    font-size: 32px;
    color: #026CB6;
    margin-top: 4px;
}

.hover { background: #026CB6; }

.mt-1 { margin-top: 1rem; }

.mt-1-5 { margin-top: 1.5rem; }

.mt-2 { margin-top: 2rem; }

.mt-3 { margin-top: 3rem; }

.mt-4 { margin-top: 4rem; }

.mt-5 { margin-top: 5rem; }

.mb-1 { margin-bottom: 1rem; }

a { color: #333; }

a:hover { color: #000; }

.jumlah-akun {
    text-align: center;
    background: #e5fad7;
    padding-top: 16px;
    padding-bottom: 28px;
    margin-top: 15px;
    margin-left: -12px;
    width: 103.2%;
}

.jumlah-akun .header {
    background: #026CB6;
    color: #fff;
    border-radius: 12px 0;
    padding: 4px 25px;
}

.summary {
    box-shadow: 0 0 15px 6px rgb(195 193 193 / 20%);
    padding: 20px;
    background: #fff;
    border: none;
    border-radius: 10px;
    width: 32%;
}

.summary dl {
      margin: 0;
      padding: 15px 0;
}

.summary dl dt {
      float: left;
      clear: left;
      font-weight: normal;
}

.summary dl dd {
      float: right;
      clear: right;
      /*font-weight: bold;*/
}

.summary dl:after {
      content: ".";
      clear: both;
      display: block;
      height: 0;
      visibility: hidden;
}

.summary .total {
      color: #fff;
      padding: 10px 0 22px;
}

.summary .total dt {
      text-transform: uppercase;
      margin-top: 0.5em;
      font-weight: bold;
    color : #000;
}

.summary .total dd {
    font-size: 20px;
    font-weight: 600;
    color : #026CB6;
}

.summary button {
      margin: 0 20px;
      width: calc(100% - 40px);
}

.subtotal {
    text-align: right;
    margin-top: 225px;
    padding-right: 8px;
}

.subtotal dt, .subtotal dd { display: inline; }

.subtotal dt { margin-right: 12px; }

.subtotal .pros-hemat, .subtotal .pros-jasa {
    color: #ea0905;
    font-size: 12px;
    font-weight: 600;
}

.subtotal .text-hemat, .subtotal .hemat { color: #ea0905; }

.subtotal .bonus-jasa, .subtotal .bonus-training {
    background: #ffe002;
    padding: 2px 10px 3px 6px;
    border-radius: 0 25px 25px 0;
    font-size: 13px;
    border-left: 3px solid #ce8603;
    margin-top: 5px !important;
}

@media screen and (min-width: 992px) {
    .summary .subtotal { border-top: 2px solid #026CB6; }
    .summary .subtotal dt { margin-top: 2px; }
    .summary .subtotal dd { font-size: 15px; }
}

.corp-sub-total, .corp-hemat, .prof-sub-total, .prof-hemat,
#sub-total, #ppn, #hemat {
    text-align:right;
    display: inline-block;
    width: 80px;
}

#sub-total, #ppn, #hemat { width: 95px; }

.promo .input-group {
    display: flex;
    border-radius: 50px;
    border: 1px solid #afa9a9;
    padding: 1px;
    margin-bottom: 4px;
    /*border: 1px solid #026CB6;
    padding: 5px;*/
}

.promo input {
    height: calc(1.5em + .75rem + 2px);
    padding: 0 7px 0 3px;
    border: 0;
    flex: 1 1 auto;
    margin-left: 12px;
    text-transform: uppercase;
    font-weight: 600;
    color: #f5a107;
    /*padding: 0 7px;
    width: 1%;
    margin-left: 5px;*/
}

.promo input::placeholder, .promo input::-webkit-input-placeholder {
    text-transform: none;
    font-weight: 500;
}

.promo button {
    color: #fff;
    background: linear-gradient(to right,#094fa9,#03cdcd);
    border-radius: 50px;
    padding: 0 11px;
    margin: 2px 2px 0 0;
    width: 97%;
    height: 90%;
    /*margin: 0;
    width: 100%;
    height: 100%;*/
}

.promo button:hover { background: linear-gradient(to right,#f7b927,#ec8920); }

.promo button:focus { color: #fff; }

.promo #btn-kode-promo i {
    margin-right: 5px;
    font-size: 14.5px;
}

.promo #diskon_promo {
    color: #026CB6;
    font-size: 13px;
}

.promo #diskon_promo i {
    margin-top: 0;
    margin-right: 5px;
    font-size: 15px;
}

.terms { margin-bottom: 12px; }

.terms div {
    display: inline-table;
    font-size: 12.5px;
    width: 12px;
}
 
.btn-purchase {
    background: linear-gradient(to right,#d9201a,#fb3a30);
    padding: 6px;
    font-size: 16px;
    border-radius: 25px;
    width: 100% !important;
    margin: 0 !important;
  border-color: transparent;
}

.btn-purchase:hover { background: linear-gradient(to right,#f7b927,#ec8920); }

.cart {
   /* box-shadow: 0 0 15px 6px rgb(195 193 193 / 20%); */
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    width: 65%;
}

.header-basket { margin-bottom: 27px; }

.header-basket h4 { font-size: 20px; }

.header-basket div {
    font-weight: 300;
    color: #000;
    font-size: 16px;
  margin: 5px 0px;
}

.header-basket img {
   /* width: 369px !important; */
    margin: 0 auto;
}

.card {
    display: flex;
    flex-direction: column;
    border: 1px solid #026CB6;
    padding: 0;
}

.card-main { padding: 15px 0; }

.card-main .price-durasi {
    font-size: 20px;
    color: #026CB6;
    font-weight: 600;
}

.card-month { padding: 6px; }

.text-bulan { margin-top: 10px; }

.text-bulan span {
    background: #026CB6;
    color: #fff;
    border-radius: 12px 0;
    font-size: 13px;
    padding: 3px 31px;
}

.hover .text-bulan span, .card:hover .text-bulan span {
    background: #fff;
    color: #026CB6;
}

.main-description {
    color: #026CB6;
    font-size: 14px;
}

.basket, .container { padding: 0; }

.basket .col-md-2.text-center { padding: 0 8px; }

.cart .basket .card:hover{
    background: #026CB6;
    cursor: pointer;
}

.cart .basket .card:hover .price-durasi, .cart .basket .card:hover .main-description,
.cart .basket .card:hover .text-bulan, .cart .basket .card:hover .strike { color: #fff; }

.cart button[disabled] {
    background: #e8e8e8 !important;
    border-bottom: none !important;
    color: #848484 !important;
    opacity: 1;
}

.strike {
    text-decoration: line-through;
    font-size: 13px;
    color: #ea0905;
    font-weight: 400;
}

.strike .standard {
    font-size: 14px;
    font-weight: 600;
}

/*.strike span { padding-left: 2px; }*/
 
.hero {
    background: linear-gradient(to top,#06840e,#0cd205);
    color: #fff;
    font-weight: 600;
    padding: 5px 0;
    line-height: 1.3;
    margin-top: 3px;
}

.hero:after {
    content:'';
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    margin: 0 auto;
    width: 0;
    height: 0;
    border-top: solid 10px #06840e;
    border-left: solid 10px transparent;
    border-right: solid 10px transparent;
}

.info-promo {
    border: 1px solid #026CB6;
    background: #ebffce;
    padding: 10px;
    border-radius: 12px;
    margin: 25px 0 0;
}

.modal-subscribe.modal { top: 90px !important; }

.modal-subscribe .modal-dialog {
    width: 460px;
    margin: 20px auto 0;
}

.modal-subscribe .modal-dialog .modal-content {
    text-align: center;
    border-radius: 30px;
}

.modal-subscribe .modal-dialog .modal-content .close {
    color: #fff;
    background: #f9b840;
    font-size: 35px;
    text-shadow: none;
    line-height: 0;
    height: 45px;
    width: 45px;
    border-radius: 0 28px;
    opacity: 1;
    position: absolute;
    left: auto;
    right: 0;
    z-index: 1;
    transition: all 0.3s;
}

.modal-subscribe .modal-dialog .modal-content .close span {
    margin: -4px 0 0 0;
    display: block;
}

.modal-subscribe .modal-dialog .modal-content .close:hover {
    color: #fff;
    background-color:#f39c12;
}

.modal-subscribe .modal-dialog .modal-content .modal-body { padding: 0 20px 25px !important; }

.modal-subscribe .modal-dialog .modal-content .modal-body .icon {
    color: #fff;
    background: #04a210;
    font-size: 80px;
    line-height: 140px;
    width: 150px;
    height: 150px;
    margin: -20px auto 20px;
    border-radius: 50%;
}

.modal-subscribe .modal-dialog .modal-content .modal-body .title {
    color: #333;
    font-size: 22px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 17px 0 10px 0;
}

.modal-subscribe .modal-dialog .modal-content .modal-body .description {
    margin: 0 0 20px;
    padding: 0;
    line-height: 1.5;
}

.modal-subscribe .modal-dialog .modal-content .modal-body .input-group {
    background: #ECFBEA;
    border-radius: 50px;
}

.modal-subscribe .modal-dialog .modal-content .modal-body .form-control {
    background: transparent;
    font-size: 16px;
    padding: 2px 20px;
    border: none;
}

.modal-subscribe .modal-dialog .modal-content .modal-body .form-control::placeholder { font-size: 14.5px; }

.modal-subscribe .modal-dialog .modal-content .modal-body .subscribe {
    color: #fff;
    background: linear-gradient(to right,#f39c12,#f1c40f);
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 10px 20px;
    border: none;
    border-radius: 50px;
    display: block;
    transition: all 0.3s;
}

.modal-subscribe .modal-dialog .modal-content .modal-body .subscribe:hover {
    background: linear-gradient(to right,#33d23f,#089613);
}

.modal-subscribe .modal-dialog .modal-content .modal-body .subscribe i { padding-right: 5px; }

@media only screen and (max-width: 576px) {
    .modal-dialog { width: 93% !important; }
    .modal-subscribe .modal-dialog .modal-content .modal-body .title { font-size: 25px; }
    .modal-subscribe .modal-dialog .modal-content .modal-body .description { margin: 0 0 20px; }
    .modal-subscribe .modal-dialog .modal-content .modal-body .input-group {
        background: transparent;
        display: block;
    }
    .modal-subscribe .modal-dialog .modal-content .modal-body .form-control {
        background-color: #E2E2E2;
        margin: 0 0 10px;
        border-radius: 50px;
    }
    .modal-subscribe .modal-dialog .modal-content .modal-body .subscribe { margin: 0 auto; }
}

#ModalSubscribe .modal-dialog .modal-content { border: .1px solid rgba(0,0,0,.1); }

#ModalSubscribe .modal-dialog .modal-content .modal-body .title { font-size: 32px; }

#ModalSubscribe .modal-dialog .modal-content .modal-body .description {
    font-size: 15px;
    color: #333;
}

#ModalSubscribe .modal-dialog .modal-content .modal-body .form-control {
    font-size: 15px;
    height: 42px;
    color: #333;
    border: 1px solid #ccc;
    margin-bottom: 7px;
    border-radius: 25px;
}

#ModalSubscribe .modal-dialog .modal-content .modal-body .subscribe { width: 120px; }

.badge-voucher {
    font-weight: 600;
    color: #fff;
    background: linear-gradient(to right,#f10c00,#fd2015);
    padding: 3px 12px;
    border-radius: 17px 0;
    margin: 0 3px;
    box-shadow: 1px 3px 0 #fff;
}
  
/*
.sec-signup .form-control:focus {
    border-color: #61b307;
    box-shadow: 0 3px 1px rgb(97, 179, 7) !important;
}

.signup { margin-left: -20px; }

#btn-kode-promo{
    position: absolute;
    z-index: 2;
    margin-right: 0;
    margin-left: -107px;
    width: 105px;
    height: 36px;
    margin-top: 2px;
    background: gold;
    border: none;
    color: #fff;
    font-weight: 600;
    border-radius: 4px;
    box-shadow: 0 0 3px 0px rgba(130, 128, 128, 0.3);
}

#btn-kode-promo:disabled, #btn-kode-promo[disabled] { background: #c8c3a8; }

.item.akun {
    color: #fff !important;
    background: rgb(11,99,8);
    background: linear-gradient(90deg, rgb(11, 99, 8) 0%, rgb(30, 122, 8) 35%, rgb(0, 255, 68) 100%);
    height: 63px;
    line-height: 63px;
    text-align: center;
}

.akun h4 {
    display: inline;
    color: #fff;
    font-weight: 600;
}

.green { color: #3BDE00; }

.bulet {
    width: 10px;
    height: 10px;
    background: #026CB6;
    border-radius: 50%;
    margin: 0 auto;
}

.owl-prev {
    position: absolute;
    top: 14px;
    width: 25px;
    height: 25px;
    background: #b3d3b382 !important;
    left: 0;
    border-radius: 50% !important;
    color: #fff !important;
    font-weight: 600 !important;
    line-height: 25px !important;
}

.owl-next {
    position: absolute;
    top: 14px;
    width: 25px;
    height: 25px;
    background: #00e800ab !important;
    right: 0;
    border-radius: 50% !important;
    color: #fff !important;
    font-weight: 600 !important;
    line-height: 25px !important;
}

.owl-dots { display: none; }

@media screen and (min-width: 992px) {
  body.ux-app {
    background: #fff;
    padding: 40px 0;
  }
}

.action-link, .ux-card a, .payment > a, .terms > a {
    color: #008a32;
    font-weight: bold;
    text-decoration: none;
}

.action-link:hover, .ux-card a:hover, .payment > a:hover, .terms > a:hover { color: #008a32; }

.ux-card {
    border: 1px solid #e8e8e8;
    background: #fcfcfc;
    padding: 20px;
    position: relative;
}

.ux-card:hover {
    cursor: pointer;
    border-color: #008a32;
    background-color: #fff;
}

.ux-card.deleted {
    visibility: hidden;
    overflow: hidden;
    transition: all 0.2s;
    height: 0px;
    padding: 0px;
    margin: 0px;
    box-shadow: none;
    border: none;
}

.product {
    color: #767676;
    margin-bottom: 20px;
    box-shadow: 0 4px 0 0 rgba(0, 0, 0, 0.1);
}

@media screen and (min-width: 992px) {
  .product {
    padding-left: 75px;
    box-shadow: 4px 4px 0 0 rgba(0, 0, 0, 0.1);
  }
}

.product img {
    display: none;
    position: absolute;
    top: 20px;
    left: 20px;
}

@media screen and (min-width: 992px) {
    .product img { display: block; }
}

.product .price {
    color: #333;
    font-weight: 600;
}

.product .tier { padding-bottom: 1em; }

.product .renews { padding-top: 1em; }

.product .title, .product .tier, .product .attr, .product .renews {
    float: left;
    clear: left;
}

.product .price, .product .term {
    float: right;
    clear: right;
}

.product .remove {
    float: right;
    clear: right;
    display: none;
    color: #008a32 !important;
    border-width: 1px;
    box-shadow: none !important;
    font-size: 12px;
    padding-bottom: 5px !important;
}

.product .remove .uxicon {
    margin-top: 3px;
    box-shadow: none !important;
}

.product .remove:hover { border-color: #008a32 !important; }

@media screen and (min-width: 992px) {
    .product .remove { display: block; }
}

.product span { display: block; }

.summary .support dd {
    float: left;
    font-weight: normal;
    padding-left: 0.5em;
}

.payment, .terms { margin-bottom: 12px; }

.payment > a, .terms > a {
    float: right;
    padding-right: 20px;
    text-transform: uppercase;
}

.payment h4, .terms h4, .payment p, .terms p { padding: 0 20px; }

.payment button, .terms button { margin-top: 10px; }

.terms .agreed { display: none; }

p.agreed {
    padding-left: 50px;
    position: relative;
}

p.agreed:before {
    content: " ";
    background-image: url(https://img1.wsimg.com/fos/react/check.svg);
    position: absolute;
    left: 20px;
    top: 4px;
    width: 20px;
    height: 21px;
}

.price {
    position: relative;
    display: inline-block;
}

.price .old {
    position: absolute;
    right: 0;
    opacity: 1;
}

.price .new { opacity: 0; }

.price .strike {
    display: inline-block;
    position: absolute;
    left: 0;
    top: 50%;
    width: 0;
    border-top: 1px solid #333;
}

#controls {
    position: absolute;
    top: 0px;
    left: 0px;
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;
}

.far, .fas { color : #026CB6; }

.card.hint.col-md-3 { border: none; }

.card.hint::after {
    content: '';
    position: absolute;
    left: 42%;
    top: 100%;
    width: 9px;
    height: 37px;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-top: 20px solid #e8e8e8;
    clear: both;
}

.card-header {
    color: #FFF;
    text-align: center;
    font-size: 12px;
    font-weight: 600;
    border-bottom: 1px solid #3BDE00;
    background-color: #03CC0F;
    padding: 5px 10px;
}

.card-header.hint {
    background-color: #026CB6;
    border: none;
}

.balloon {
    display: inline-block;
    width: 100%;
    padding: 10px 0 10px 25px;
    font-weight: 400;
    color: #377d6a;
    background: #efefef;
    border: 0;
    border-radius: 3px;
    outline: 0;
    text-indent: 85px;
    transition: all 0.3s ease-in-out;
}

.balloon::-webkit-input-placeholder {
    color: #efefef;
    text-indent: 0;
    font-weight: 300;
}

.balloon + label {
    display: inline-block;
    position: absolute;
    top: 0px;
    left: 0;
    bottom: -4px;
    padding: 12px 15px;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    text-shadow: 0 1px 0 rgba(19, 74, 70, 0);
    transition: all 0.3s ease-in-out;
    border-radius: 3px 0 0 3px;
    background: rgba(122, 184, 147, 0.62);
}

.balloon + label:after {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    top: 100%;
    left: 50%;
    margin-left: -3px;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-top: 3px solid rgba(122, 184, 147, 0);
    transition: all 0.3s ease-in-out;
}

.balloon:focus, .balloon:active {
    color: #434343;
    text-indent: 0;
    background: #ecf9d1;
}

.balloon:focus::-webkit-input-placeholder, .balloon:active::-webkit-input-placeholder { color: #aaa; }

.balloon:focus + label, .balloon:active + label {
    color: #fff;
    text-shadow: 0 1px 0 rgba(19, 74, 70, .4);
    background: rgba(122, 184, 147, 1);
    transform: translateY(-40px);
    top: 12px;
    left: 0;
    bottom: -4px;
    padding: 5px 15px;
    border-radius: 3px;
}

.balloon:focus + label:after, .balloon:active + label:after { border-top: 4px solid rgba(122, 184, 147, 1); }

#icon-paket { width: 55px; }

.hide { display: none; }
  
.box {
    position: relative;
    display: inline;
}

.box select {
    background-color: #1aaf05;
    color: white;
    padding: 12px;
    width: 250px;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    -webkit-appearance: button;
    appearance: none;
    outline: none;
}

.box::before {
    content: "\f13a";
    font-family: FontAwesome;
    position: absolute;
    bottom: -15px;
    left: 198px;
    width: 52px;
    height: 52px;
    text-align: center;
    font-size: 28px;
    line-height: 52px;
    color: rgba(255, 255, 255, 0.5);
    background-color: rgba(255, 255, 255, 0.1);
    pointer-events: none;
}

.box:hover::before {
    color: rgba(255, 255, 255, 0.6);
    background-color: rgba(255, 255, 255, 0.2);
}

.box select option { padding: 30px; }
  
.box select option:hover { background-color: yellow; }
  
.akun.wrapper {
    display: inline-flex;
    background: #fff;
    height: 80px;
    width: 400px;
    align-items: center;
    justify-content: space-evenly;
    border-radius: 5px;
    padding: 15px 10px;
    box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
    margin-top: 5px;
}

.akun.wrapper .option {
    background: #fff;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin: 0 10px;
    border-radius: 5px;
    cursor: pointer;
    padding: 0 10px;
    border: 2px solid lightgrey;
    transition: all 0.3s ease;
}

.akun.wrapper .option span {
    font-size: 20px;
    color: #808080;
}

.akun.wrapper input[type="radio"] { display: none; }

#option-1:checked:checked ~ .option-1, #option-2:checked:checked ~ .option-2,
#option-3:checked:checked ~ .option-3 {
    border-color: #09a915;
    background: linear-gradient(to right,#09a915,#0bcc1a);
}

#option-1:checked:checked ~ .option-1 .dot, #option-2:checked:checked ~ .option-2 .dot,
#option-3:checked:checked ~ .option-3 .dot { background: #fff; }

#option-1:checked:checked ~ .option-1 .dot::before, #option-2:checked:checked ~ .option-2 .dot::before,
#option-3:checked:checked ~ .option-3 .dot::before {
    opacity: 1;
    transform: scale(1);
}

#option-1:checked:checked ~ .option-1 span, #option-2:checked:checked ~ .option-2 span,
#option-3:checked:checked ~ .option-3 span { color: #fff; }*/
</style>

<!-- <div class="modal fade modal-subscribe" id="ModalPromoUpgrade" tabindex="-1" role="dialog">
    <div class="modal-dialog animated">
        <div class="modal-content" style="border: none;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body" style="color: #333;">
                <img src="<?= base_url('assets/img/upgrade.png') ?>" style="margin-top: 22px;" width="230">
                <h3 class="title">Menunggu Pembayaran</h3>
                <p class="description" style="font-size: 15px;">
                    Pembelian paket premium dapat dilakukan mulai tanggal<br>
                    <strong>17 Agustus 2021</strong> pukul <strong>10:00 WIB</strong>
                </p>
                <p class="description" style="background: #fffa68;padding: 12px 0;border-top: 3px dashed red;border-bottom: 3px dashed red;border-radius: 50px;">
                    <strong>PROMO KEMERDEKAAN!</strong> Gunakan kode voucher <span class="badge-voucher" style="padding: 2px 12px;box-shadow: 1px 3px 0 #fff;margin: 0 1px;font-size: 14px;">MERDEKA76</span> untuk mendapatkan <strong>potongan 17%</strong> <sup>(*)</sup>
                </p>

                <ul class="countdown">
                    <li><span class="days">00</span><p class="days_text">Hari</p></li>
                    <li class="seperator">:</li>
                    <li><span class="hours">00</span><p class="hours_text">Jam</p></li>
                    <li class="seperator">:</li>
                    <li><span class="minutes">00</span><p class="minutes_text">Menit</p></li>
                    <li class="seperator">:</li>
                    <li><span class="seconds">00</span><p class="seconds_text">Detik</p></li>
                </ul>

                <center><button class="btn btn-default subscribe" onclick="upgradePaket()" style="display: none;">Upgrade Sekarang</button></center>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade modal-subscribe" id="ModalSubscribe" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
                <div class="icon"><img src="<?= base_url('assets/img/icon-subscribe.png') ?>" style="margin-top: -24px;margin-left: -16px;" width="90%"></div>
                <h3 class="title">Ikuti Pemberitahuan</h3>
                <p class="description">Tetap terhubung dengan kami untuk mendapatkan informasi fitur terbaru dan pembaharuan sistem serta penawaran program peningkatan keahlian</p>
                <div style="margin-bottom: 20px;">
                    <input type="text" class="form-control" id="nama_subscribe" placeholder="Masukkan Nama Lengkap">
                    <input type="text" class="form-control" id="no_wa_subscribe" placeholder="Masukkan Nomor WhatsApp">
                </div>
                <center><button class="btn btn-default subscribe" onclick="kirimSubscribe()"><i class="fa fa-paper-plane"></i>Kirim</button></center>

                <!-- <div class="input-group">
                    <input type="text" class="form-control" id="no_wa_subscribe" placeholder="Masukkan Nomor WhatsApp">
                    <span class="input-group-btn">
                        <button class="btn btn-default subscribe" onclick="kirimSubscribe($('#no_wa_subscribe').val())"><i class="fa fa-paper-plane"></i>Kirim</button>
                    </span>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="container body-cart">
  <div class="row" style="margin: 100px 0 35px 0;">
      
      <div class="summary col-md-4">
          <span class="text-center"><h4>Daftar Order</h4></span>
          <dl class="subtotal">
              <dt>Sub Total <span class="pros-hemat"></span></dt>
              <dd> Rp <span type="text" id="sub-total" >2.300.000</span></dd>
              <dt>PPN 10%</dt>
              <dd> Rp <span id="ppn">230.000</span></dd>
              <dt class="bonus-jasa" style="display: none;"><strong>Bonus:</strong> Jasa Konsultasi RAB <span class="pros-jasa">(Disc. 25%)</span></dt>
              <dt class="bonus-training" style="display: none;"><strong>Bonus:</strong> In-house Training Pembuatan RAB </dt>
              <!-- <dt><span>Hemat</span></dt>
              <dd>Rp <span type="text" id="hemat"></span></dd> -->
          </dl>

          <div class="promo">
              <div class="input-group">
                  <input type="text" class="form-control" id="kode_promo" placeholder="Memiliki kode promo?">
                  <div class="input-group-append">
                      <button class="btn" id="btn-kode-promo" onclick="cekPromo()" disabled><i class="fa fa-gift"></i>Gunakan</button>
                  </div>
              </div>

              <!-- <span style="position: relative;display: inline-block;margin: 15px 0px;width: 100%;margin-bottom:5px;">
                  <input class="balloon" id="kode_promo" type="text" placeholder="" value="" />
                  <label for="galaxy">Kode Promo</label>
                  <button id="btn-kode-promo" disabled onclick="cekPromo()">GUNAKAN</button>
              </span><br> -->
          </div>

          <dl class="total">
              <!-- <dt style="font-weight: normal;font-size: 14px;text-transform: capitalize;">Kode Unik (*)</dt>
              <dd style="font-size: 15px;color: #000;justify-content: space-between;display: inline;">
                  <span style="display: inline;">Rp </span>
                  <span type="text" id="kode-unik" style="width: 95px;display: inline-block;text-align: right;"></span>
              </dd> -->
              <dt>Total</dt>
              <dd>Rp <span type="text" id="total" >2.530.000</span></dd>
          </dl>
         
          <div class="terms">
              <div>*)</div>
              <div style="width: 317px;">
                  Dengan ini Anda menyetujui semua <a href="<?= base_url('kebijakan_privasi') ?>" style="color: #026CB6;">kebijakan privasi</a> dan <a href="<?= base_url('syarat_ketentuan') ?>" style="color: #026CB6;">ketentuan penggunaan</a> yang berlaku
              </div>
          </div>
          
          <button class="btn btn-primary btn-purchase" id="lanjutBayar">Lanjutkan Pembayaran</button>
      </div>
    
    
      <div class="col-md-1" style="width: 1%;"></div>
    
      <div class="cart col-md-7">
          <div class="header-basket">
              
            <h3 style="text-align: center;padding:10px">Tropical Modern House</h3>
            <div class="row mt-15" style="font-size: 16px;background: #f8f8f8;border-radius: 10px;">
                <div class="col-md-4 p-0 m-0" style="max-width: 55%;flex: 0 0 55%;">
                  <img class="d-block w-100" src="https://rumahtinggal.id/assets/img/konsep/foto_74_1_1.jpg" alt="First slide" style="border-radius: 10px;">
                </div>
  			<div class="col-md-4 pr-0 m-0" style="max-width: 45%;flex: 0 0 45%;vertical-align: middle;">
                      <div style="vertical-align: middle;display: inline;padding: 1px;">

                          <div class="card-group">
                              <div class="sec-icon" style="width: 20px;"><img src="https://rumahtinggal.id/assets/img/icon/icon_dimensi_lahan.png"></div>
                              <div class="sec-title">Dimensi Lahan</div><div class="sec-spec">: 11.00 m x 9.00 m</div>
                          </div>
                          <div class="card-group">
                              <div class="sec-icon"><img src="https://rumahtinggal.id/assets/img/icon/icon_luas_lahan.png"></div>
                              <div class="sec-title">Luas Lahan</div>
                              <div class="sec-spec">: 99.00 m<sup>2</sup></div>
                          </div>
                          <div class="card-group">
                              <div class="sec-icon"><img src="https://rumahtinggal.id/assets/img/icon/icon_luas_bangunan.png"></div>
                              <div class="sec-title">Luas Bangunan</div>
                              <div class="sec-spec">: 70.00 m<sup>2</sup></div>
                          </div>                               
                          <div class="card-group">
                              <div class="sec-icon"><img src="https://rumahtinggal.id/assets/img/icon/icon_jml_lantai.png"></div>
                              <div class="sec-title">Jumlah Lantai</div>
                              <div class="sec-spec">: 1</div>
                          </div>
                          <div class="card-group">
                              <div class="sec-icon"><img src="https://rumahtinggal.id/assets/img/icon/icon_kmr_tidur.png"></div>
                              <div class="sec-title">Kamar Tidur</div>
                              <div class="sec-spec">: 3</div>
                          </div>
                          <div class="card-group">
                              <div class="sec-icon"><img src="https://rumahtinggal.id/assets/img/icon/icon_toilet.png"></div>
                              <div class="sec-title">Toilet</div>
                              <div class="sec-spec">: 1</div>
                          </div>
                    </div>
              </div>
            </div>
            <p>
              Rumah tinggal 1 lantai dengan ukuran tanah 11 x 9 m , dengan luas bangunan 70 m2 . Dengan gaya desain modern minimalis dan berpadu dengan gaya tropis . Bangunan dengan ketinggian dinding utama lebih dari 5 meter memberi kesan yang sangat tinggi dan memberikan akses ruang interior terasa lega dan sirkulasi didalamnya tidak terganggu. Pencahayaan dan sirkulasi dari halaman depan berupa carport dan taman yang luas sangatlah cukup untuk kehidupan didalamnya.
            </p>
            
          </div>
         
          
      </div>
      
    
  </div>
</div> 








<div class="modal fade" id="ModalDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="sec-signup" id="sec-signup">
              <img src="<?= base_url('assets/beranda/assets/signup/bg-signup.png') ?>" class="signup-box" height="395px" style="margin-top: 0;float: right;right: 0; background:#fff;" />
              
              <div class="entry-box pull-right" id="panel-signup-cart" style="padding: 0;right: 20px;top: 24px;width: 255px;position: absolute;" hidden>
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

                  <div class="form-group" style="margin-top: 12px;text-align:center;">
                      <button id="btn-daftar" class="btn btn-primary btn-daftar" onclick="daftar($('#email').val(),$('#akun').val())">DAFTAR</button>
                      <span style="font-size: 12px; margin-top:5px;">Sudah memiliki Akun? <span id="loginCheckout" style="color: #1f8c10;font-weight: 600;text-decoration: underline;cursor:pointer;">Masuk</span></span>
                  </div>
                  
                  <div class="form-group text-center" id="sec-akses-sso" style="margin-top: 7px;">
                      <label>atau akses menggunakan:</label> 
                      <div id="gSignIn"></div>
                  </div>                      
              </div>
              
              <div id="panel-login-cart" class="entry-box pull-right" style="padding: 0;right: 20px;top: 70px;width: 255px;position: absolute;">
                  <h5 style="margin-bottom: 20px;font-size: 17px;color: #797979; text-align:center;">Masuk sebagai Pengguna</h5>
                  <form id="frm-login-cart">
                      <input type="hidden" id="sender-login-cart" value="0">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user" style="font-size: 18px;"></i></span>
                          <input type="text" class="form-control login-cart input_user" id="username-cart" name="username" placeholder="Username atau email Anda" autofocus>
                      </div>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock" style="font-size: 19px;padding-left: 1px;"></i></span>
                          <input type="password" class="form-control login-cart input_pass" id="password-cart" name="password" placeholder="Password Anda">
                      </div>
                  </form>
                  <div class="pull-right" style="margin: -3px 2px;font-size: 13px;">
                      <a href="javascript:void(0)" id="link-lupa-cart">Lupa Password?</a>
                  </div>
                            
                  <div class="center-screen" style="margin-top: 36px;">
                      <button class="btn btn-login subscribe" id="btn-login-cart" onclick="loginCart($('#sender-login-cart').val())" style="padding: 10px 22px;width:100%;"><i class="fa fa-sign-in" style="font-size: 18px;"></i>MASUK</button>
                      <span style="font-size: 12px;margin-top:5px;">Belum memiliki Akun? <span id="daftarCheckout" style="color: #1f8c10;font-weight: 600;text-decoration: underline;cursor:pointer;">Daftar</span></span>
                  </div>
                           
                  <div class="form-group text-center" style="margin-top: 7px;">
                      <label>atau akses menggunakan:</label>       
                      <div id="gSignInWrapper">
                        <span class="label">Sign in with:</span>
                        <div id="customBtn" class="customGPlusSignIn">
                          <span class="icon"></span>
                          <span class="buttonText">Google</span>
                        </div>
                      </div>
                      <div id="name"></div>
                  </div>   
              </div>

              <div id="panel-reset-password-cart" class="entry-box pull-right" style="display:none;padding: 0;right: 20px;top: 45px;width: 255px;position: absolute;">
                  <h5 style="margin-bottom: 20px;font-size: 17px;color: #797979;text-align:center;">Reset Password</h5>
                  <div class="center-screen" style="margin-bottom: 17px;margin-top: 25px;padding: 0 15px;">
                      <img src="<?= base_url('assets/img/icon-forgot.png') ?>" style="top: 20px;width: 100px;left: 15px;">
                      Silakan masukkan Email aktif yang Anda gunakan. Link reset password akan dikirimkan melalui email.
                  </div>
                  <div class="input-group">
                      <input type="email" class="form-control" id="reset_email_cart" placeholder="Email Anda" style="height: 40px;padding: 0 18px;">
                      <span class="input-group-btn">
                          <button class="btn btn-default subscribe" id="btn-reset-cart" onclick="resetPasswordCart($('#reset_email_cart').val(),$('#akun').val())"><i class="fa fa-paper-plane"></i>KIRIM</button>
                      </span>
                  </div>
                  <div class="pull-right" style="margin: -3px 2px;font-size: 13px;">
                      <a href="javascript:void(0)" id="kembali-login-cart">Kembali</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
<script src="https://apis.google.com/js/api:client.js"></script>
<!-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-jCET3KIxOYIaMjoB"></script> -->
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-yQGQv-0XisFnU_14"></script>
<script src="<?= base_url('assets/vendor/ion-rangeslider/ion.rangeSlider.min.js') ?>"></script>
<!-- <script src="<?= base_url('assets/vendor/jquery-countdown/jquery.countdown.min.js') ?>"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script>
  var id_pengguna, paket, info_bonus, info_bonus_terpilih, pros_diskon = 0, diskon_promo = 0;
  $(document).ready(function(){
      $('#menu-paket a').addClass('active');
      $('nav.navbar.navbar-default.navbar-fixed').removeClass('no-background');

      paket = sessionStorage.getItem('paket');
      id_pengguna = Cookies.get('id_pengguna', { domain: 'estimator.id' });

      // startApp();

      if (paket != null) {
         
      } else window.location.href = "<?= base_url('paket') ?>";

      $('#no_wa_subscribe').keypress(function (e) {
        var keyCode = e.keyCode || e.which;
        var regex = /^[0-9 ()+-]+$/;
        var isValid = regex.test(String.fromCharCode(keyCode));
        return isValid;
      });
  });

  function cekPromo(){
      $('#diskon_promo').remove();

      let kode_promo = $('#kode_promo').val();
      if (kode_promo != '') {
          $.ajax({
            url: "<?= $this->config->item('url_server') ?>api/cekPromo/"+kode_promo,
            type: "GET",
            dataType: "JSON",
            success: function(data){
              let total_harga = parseInt($('#total_harga').val());
              if (data != null) {
                  if (data.status == '1') {
                      if (data.kuota > 0) {
                          pros_diskon = data.diskon;
                          diskon_promo = total_harga * parseFloat(pros_diskon / 100);
                          $('.promo').append('<div id="diskon_promo"><input type="hidden" id="kode_promo_berhasil" value="'+kode_promo+'"><i class="fa fa-info-circle"></i><strong>Selamat!</strong> Kode promo berhasil digunakan<div style="margin-left: 18px;margin-bottom: 3px;">Anda mendapat potongan sebesar <strong>Rp '+number_format(diskon_promo, 0, ",", ".")+'</strong></div></div>');
                      } else {
                          pros_diskon = diskon_promo = 0;
                          $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Maaf, kuota promo telah habis</div>');
                      }
                  } else if (data.status == '0') {
                      pros_diskon = diskon_promo = 0;
                      $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Periode promo belum dimulai</div>');
                  } else {
                      pros_diskon = diskon_promo = 0;
                      $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Periode promo telah berakhir</div>');
                  }
              } else {
                  pros_diskon = diskon_promo = 0;
                  $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Kode promo tidak ditemukan</div>');
              }

              $('#total').text(number_format(total_harga - diskon_promo, 0, ",", "."));
            }
        });
      }
  }

  function daftar(email,akun) {
      if (email != '') {
          if (validateEmail(email)) {
              $.ajax({
                  url : "<?= $this->config->item('url_server') ?>api/daftarPengguna/"+email+"/"+akun,
                  type: "POST",
                  dataType: "JSON",
                  success: function(data){
                    if (data.Tipe == 'warning') toastr.warning(data.Info, 'Informasi', opsi_toastr);
                    else toastr.success(data.Info, 'Informasi', opsi_toastr);
                    $('#akun').val('1'); $('#email').val('');
                    if (data.Status == 'belum_lengkap') window.location.href = "<?= base_url('lengkapi_profil') ?>";
                  },
                  error: function (jqXHR, textStatus, errorThrown){
                    //toastr.error('Terjadi masalah saat pendaftaran pengguna.', 'Kesalahan', opsi_toastr);
                  }
              });
          } else toastr.warning("Email yang Anda masukkan tidak valid!", 'Peringatan', opsi_toastr);
      } else toastr.warning("Silakan masukkan dulu email Anda!", 'Peringatan', opsi_toastr);
  }

  function validasiLoginCart(){
      col_required = document.getElementsByClassName('login-cart');
      var elm = "";
      for (var i = 0; i < col_required.length; i++) {
          elm = col_required[i].id;
          if ($('#'+elm).val() == "") counter++;
      }
  }
    
  function loginCart(sender) {
      counter = 0;
      validasiLoginCart();
      if (counter == 0) {
          $.ajax({
              url : "<?= $this->config->item('url_server') ?>api/loginPengguna",
              type: "POST",
              data: $('#frm-login-cart').serialize(),
              dataType: "JSON",
              success: function(data){
                if(data.Success == true) {
                  toastr.success(data.Info, 'Informasi', opsi_toastr);
                  var kategori = Cookies.get('kategori', { domain: 'estimator.id' });
                  if (kategori == '3') window.location.href = "<?= base_url('suplier') ?>";
                  else if (kategori == '4') window.location.href = "<?= base_url('template_proyek') ?>";
                  else {
                    let url = $(location).attr('href');
                    window.location.href = url;
                  }
                } else toastr.error(data.Info, 'Kesalahan', opsi_toastr);
                $('#frm-login')[0].reset();
              },
              error: function (jqXHR, textStatus, errorThrown){
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
              }
          });
      } else toastr.warning("Silakan masukkan dulu username/email atau password Anda!", 'Peringatan', opsi_toastr);
  }
    
  function resetPasswordCart(email,akun) {
      if (email != '') {
          if (validateEmail(email)) {
              $.ajax({
                  url : "<?= $this->config->item('url_server') ?>api/resetPassword/"+email+"/"+akun,
                  type: "POST",
                  dataType: "JSON",
                  success: function(data){
                    toastr.success(data.Info, 'Informasi', opsi_toastr);
                    $('#ModalLogin').modal('hide');
                  },
                  error: function (jqXHR, textStatus, errorThrown){
                    toastr.error('Terjadi masalah saat pengiriman data.', 'Kesalahan', opsi_toastr);
                  }
              });
          } else toastr.warning("Email yang Anda masukkan tidak valid!", 'Peringatan', opsi_toastr);
      } else toastr.warning("Silakan masukkan dulu email Anda!", 'Peringatan', opsi_toastr);
  }

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
  
  function renderButtonMasuk() {
      gapi.signin2.render('gSignInMasuk', {
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
      if (Cookies.get('id_pengguna', { domain: 'estimator.id' }) == null) {
          //var profile = googleUser.getBasicProfile();
          //var id_token = googleUser.getAuthResponse().id_token;
          
          gapi.client.load('oauth2', 'v2', function () {
              var request = gapi.client.oauth2.userinfo.get({ 'userId': 'me' });
              request.execute(function(resp) {
                  $.ajax({
                      url : "<?= base_url('api/daftarSSO/onetap/0') ?>",
                      type: "POST",
                      data: {
                        "nama_pengguna": resp.name,
                        "username": resp.given_name,
                        "email": resp.email,
                        "kode_verifikasi": resp.sub,
                        "kategori": $('#akun').val()
                      },
                      dataType: "JSON",
                      success: function(data){
                        if (data.Success == true) {
                            toastr.success(data.Info, 'Informasi', opsi_toastr);
                            if (data.Status == 'belum_lengkap') window.location.href = "<?= base_url('lengkapi_profil') ?>";
                            else {
                                if (Cookies.get('kategori', { domain: 'estimator.id' }) != "3") {
                                  let url = $(location).attr('href');
                                  window.location.href = url;
                                }
                            }
                        } //else if (data.Aktif == true) toastr.warning(data.Info, 'Peringatan', opsi_toastr);
                      }
                  })
              })
          })
      }
  }

  function onFailure(error) { console.log(error); }

  function parseJwt(token) {
      var base64Url = token.split('.')[1];
      var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
      var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
          return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
      }).join(''));

      return JSON.parse(jsonPayload);
  };

  var googleUser = {};
  var startApp = function() {
      gapi.load('auth2', function() {
          // Retrieve the singleton for the GoogleAuth library and set up the client.
          auth2 = gapi.auth2.init({
            client_id: '972501826600-apc45lhjaoo01qml639q1v2p2ellmd9c.apps.googleusercontent.com',
            cookiepolicy: 'single_host_origin',
            // Request scopes in addition to 'profile' and 'email'
            //scope: 'additional_scope'
          });
          attachSignin(document.getElementById('customBtn'));
      });
  };

  function attachSignin(element) {
      auth2.attachClickHandler(element, {}, function(googleUser) {
          if (id_pengguna == null) {
            //var profile = googleUser.getBasicProfile();
            //var id_token = googleUser.getAuthResponse().id_token;
            
            gapi.client.load('oauth2', 'v2', function() {
                var request = gapi.client.oauth2.userinfo.get({ 'userId': 'me' });
                request.execute(function(resp) {
                    $.ajax({
                        url : "<?= base_url('api/daftarSSO/onetap/0') ?>",
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
                                  if (Cookies.get('kategori', { domain: 'estimator.id' }) != '3') {
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
      }, function(error) {});
  }

  function randomXToY(minVal,maxVal){
      let randVal = minVal+(Math.random()*(maxVal-minVal));
      return Math.round(randVal);
  }

  function number_format(number, decimals, dec_point, thousands_point) {
      if (number == null || !isFinite(number)) {
          throw new TypeError("number is not valid");
      }
  
      if (!decimals) {
          var len = number.toString().split('.').length;
          decimals = len > 1 ? len : 0;
      }
  
      if (!dec_point) {
          dec_point = '.';
      }
  
      if (!thousands_point) {
          thousands_point = ',';
      }
  
      number = parseFloat(number).toFixed(0);
  
      number = number.replace(".", dec_point);
  
      var splitNum = number.split(dec_point);
      splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
      number = splitNum.join(dec_point);
  
      return number;
  }

  $('#password-cart').keypress(function(e){
      if (e.which == 13) $('#btn-login-cart').click();
  });

  $('#reset_email_cart').keypress(function(e){
      if (e.which == 13) $('#btn-reset-cart').click();
  });

  $('#link-lupa-cart').on('click',function(){
      $('#panel-login-cart').hide();
      $('#panel-reset-password-cart').show();
      $('#ModalDaftar .modal-dialog .modal-content').addClass('forgot');
  });

  $('#kembali-login-cart').on('click',function(){
      $('#panel-reset-password-cart').hide();
      $('#panel-login-cart').show();
      $('#ModalDaftar .modal-dialog .modal-content').addClass('forgot');
  });

  $('#loginCheckout').on('click', function() {
      $('#panel-signup-cart').hide(); 
      $('#panel-login-cart').show();  
  });

  $('#daftarCheckout').on('click', function() {
      $('#panel-signup-cart').show(); 
      $('#panel-login-cart').hide();
  });

  $('#ModalDaftar').on('hidden.bs.modal', function (e) {
      $('#panel-login').show();
      $('#panel-reset-password').hide();
      $('#ModalDaftar .modal-dialog .modal-content').removeClass('forgot');
  });

  $('.signup a.user-estimator').click(function () {
      $(this).addClass('pilih');
      $('.signup a.user-suplier').removeClass('pilih');
  });

  $('.signup a.user-suplier').click(function () {
      $(this).addClass('pilih');
      $('.signup a.user-estimator').removeClass('pilih');
  });

  $('#kode_promo').on('input', function(e) {
      if ($(this).val() == '') {
          $('#btn-kode-promo').attr('disabled', 'disabled');
          $('#diskon_promo').remove();
          pros_diskon = diskon_promo = 0;

          let total_harga = parseInt($('#total_harga').val());
          $('#total').text(number_format(total_harga, 0, ",", "."));
      } else $('#btn-kode-promo').removeAttr('disabled');
  }).keypress(function(e){
      if (e.which == 13) {
          $('#diskon_promo').remove();
          $('#btn-kode-promo').click();
      }
  });
  /*.change(function(e){
      $('#diskon_promo').remove();
      $('#btn-kode-promo').click();
  });*/
  
  /*$('button.remove').on('click', function() {
      $(this).parent().velocity({
        translateX: "-800px",
        opacity: 0
      },{
        duration: 500,
        complete: function(elem) {
          $(elem).addClass("deleted");
        },
        easing: [ 0.65, -0.02, 0.72, 0.29 ] 
      });
  });

  function addMonths(date, months) {
      var d = date.getDate();
      date.setMonth(date.getMonth() + +months);
      if (date.getDate() != d) date.setDate(0);
      return date;
  }

  $('#changePrices').on('click', function() {
      var $strike = $('<span class="strike"></span>');
      var $price = $('.price').first();
      var oldPrice = $price.text();
      var $oldPrice = $('<span class="old"></span>');
      var newPrice = '$0.99';
      var $newPrice = $('<span class="new">'+ newPrice +'</span>');
      $price.prepend($strike);
      $price.wrapInner($oldPrice);
      $oldPrice = $price.find(".old");
      $price.append($newPrice);

      // draw a slash through the price, and remove the slash
      $strike.velocity({ width: "105%" }, {
        duration: 500,
        easing: [ 1, 0, 1, 1 ]
      });
      
      // float the old price up
      $oldPrice.velocity({
        translateY: "-1.2em",
        opacity: 0
      },{
        delay: 500,
        duration: 800,
        complete: function(elem) {
          $(elem).remove();
        },
        easing: [ 0, 1, 1, 1 ]
      });
      
      // Fade in the new price, then unwrap it to finish the animation
      $newPrice.velocity({ opacity: 1 }, {
        delay: 500, 
        duration: 250,
        easing: "linear",
        complete: function(elem) {
         $(elem).contents().unwrap();
        }
      });
  });

  $('#undelete').on('click', function() {
      $('.product.ux-card').each( function( index, el ) {
          if ($(el).hasClass('deleted')) $(el).velocity('reverse').removeClass('deleted');
      })
  });*/

  $('input[type=radio][name=select]').change(function() {
      if (this.value == '3') {
        $('#jumlah_akun').val('3');
        $('.strike .standard').text('<?= 'Rp '.number_format(379000, 0, ",", ".") ?>');
        $('#corp-hemat-three-month').text('26');
        $('#corp-hemat-six-month').text('40');
        $('#corp-hemat-twelve-month').text('53');
        $('#corp-hemat-twenty-four-month').text('66');
        $('#corp-one-month-value').text('379000');
        $('#corp-three-month-value').text('279000');
        $('#corp-six-month-value').text('229000');
        $('#corp-twelve-month-value').text('179000');
        $('#corp-twenty-four-month-value').text('129000');
        $('#corp-twelve-month').trigger('click');
      } else if (this.value == '5') {
        $('#jumlah_akun').val('5');
        $('.strike .standard').text('<?= 'Rp '.number_format(359000, 0, ",", ".") ?>');
        $('#corp-hemat-three-month').text('28');
        $('#corp-hemat-six-month').text('42');
        $('#corp-hemat-twelve-month').text('56');
        $('#corp-hemat-twenty-four-month').text('70');
        $('#corp-one-month-value').text('359000');
        $('#corp-three-month-value').text('259000');
        $('#corp-six-month-value').text('209000');
        $('#corp-twelve-month-value').text('159000');
        $('#corp-twenty-four-month-value').text('109000');
        $('#corp-twelve-month').trigger('click');
      } else if (this.value == '10') {
        $('#jumlah_akun').val('10');
        $('.strike .standard').text('<?= 'Rp '.number_format(339000, 0, ",", ".") ?>');
        $('#corp-hemat-three-month').text('30');
        $('#corp-hemat-six-month').text('44');
        $('#corp-hemat-twelve-month').text('59');
        $('#corp-hemat-twenty-four-month').text('74');
        $('#corp-one-month-value').text('339000');
        $('#corp-three-month-value').text('239000');
        $('#corp-six-month-value').text('189000');
        $('#corp-twelve-month-value').text('139000');
        $('#corp-twenty-four-month-value').text('89000');
        $('#corp-twelve-month').trigger('click');
      }
  });

  $('#prof-one-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#prof-one-month .text-bulan, #prof-one-month .card-main .strike, #prof-one-month .card-main .price-durasi, #prof-one-month .card-main .main-description').addClass('text-white');
      $('#prof-one-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa, .pros-hemat, .subtotal .text-hemat, .subtotal .hemat').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let durasi = 1;
      let harga_std = parseInt($('#prof-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#prof-one-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi;
      let hemat = (harga_std * durasi) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#jumlah_akun').val('1');
      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.prof-hemat').text(hemat);
      $('.prof-hemat').text(number_format(hemat, 0, ",", "."));
      // if (hemat == 0) $('.subtotal .text-hemat, .subtotal .hemat').hide(); else $('.subtotal .text-hemat, .subtotal .hemat').show();
      $('#sub-total, .prof-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#prof-three-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#prof-three-month .text-bulan, #prof-three-month .card-main .strike, #prof-three-month .card-main .price-durasi, #prof-three-month .card-main .main-description').addClass('text-white');
      $('#prof-three-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let durasi = 3;
      let harga_std = parseInt($('#prof-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#prof-three-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi;
      let hemat = (harga_std * durasi) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#jumlah_akun').val('1');
      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.prof-hemat').text(hemat);
      $('.prof-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#hemat-three-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .prof-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#prof-six-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#prof-six-month .text-bulan, #prof-six-month .card-main .strike, #prof-six-month .card-main .price-durasi, #prof-six-month .card-main .main-description').addClass('text-white');
      $('#prof-six-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let durasi = 6;
      let harga_std = parseInt($('#prof-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#prof-six-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi;
      let hemat = (harga_std * durasi) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#jumlah_akun').val('1');
      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.prof-hemat').text(hemat);
      $('.prof-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#hemat-six-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .prof-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#prof-twelve-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#prof-twelve-month .text-bulan, #prof-twelve-month .card-main .strike, #prof-twelve-month .card-main .price-durasi, #prof-twelve-month .card-main .main-description').addClass('text-white');
      $('#prof-twelve-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let durasi = 12;
      let harga_std = parseInt($('#prof-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#prof-twelve-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi;
      let hemat = (harga_std * durasi) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#jumlah_akun').val('1');
      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.prof-hemat').text(hemat);
      $('.prof-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#hemat-twelve-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .prof-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#prof-twenty-four-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month span.strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#prof-twenty-four-month .text-bulan, #prof-twenty-four-month .card-main .strike, #prof-twenty-four-month .card-main .price-durasi, #prof-twenty-four-month .card-main .main-description').addClass('text-white');
      $('#prof-twenty-four-month').addClass('hover');
      $('.bonus').html(info_bonus_terpilih);
      $('.bonus-jasa').show();
      if ($('#kode_promo').val() != '') cekPromo();

      let durasi = 24;
      let harga_std = parseInt($('#prof-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#prof-twenty-four-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi;
      let hemat = (harga_std * durasi) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#jumlah_akun').val('1');
      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.prof-hemat').text(hemat);
      $('.prof-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#hemat-twenty-four-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .prof-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#corp-one-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#corp-one-month .text-bulan, #corp-one-month .card-main .strike, #corp-one-month .card-main .price-durasi, #corp-one-month .card-main .main-description').addClass('text-white');
      $('#corp-one-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa, .bonus-training, .pros-hemat, .subtotal .text-hemat, .subtotal .hemat').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let jumlah_akun = parseInt($('#jumlah_akun').val());
      let durasi = 1;
      let harga_std = parseInt($('#corp-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#corp-one-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi * jumlah_akun;
      let hemat = (harga_std * durasi * jumlah_akun) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.corp-hemat').text(hemat);
      $('.corp-hemat').text(number_format(hemat, 0, ",", "."));
      // if (hemat == 0) $('.subtotal .text-hemat, .subtotal .hemat').hide(); else $('.subtotal .text-hemat, .subtotal .hemat').show();
      $('#sub-total, .corp-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#corp-three-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#corp-three-month .text-bulan, #corp-three-month .card-main .strike, #corp-three-month .card-main .price-durasi, #corp-three-month .card-main .main-description').addClass('text-white');
      $('#corp-three-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa, .bonus-training').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let jumlah_akun = parseInt($('#jumlah_akun').val());
      let durasi = 3;
      let harga_std = parseInt($('#corp-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#corp-three-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi * jumlah_akun;
      let hemat = (harga_std * durasi * jumlah_akun) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.corp-hemat').text(hemat);
      $('.corp-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#corp-hemat-three-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .corp-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#corp-six-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#corp-six-month .text-bulan, #corp-six-month .card-main .strike, #corp-six-month .card-main .price-durasi, #corp-six-month .card-main .main-description').addClass('text-white');
      $('#corp-six-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa, .bonus-training').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let jumlah_akun = parseInt($('#jumlah_akun').val());
      let durasi = 6;
      let harga_std = parseInt($('#corp-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#corp-six-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi * jumlah_akun;
      let hemat = (harga_std * durasi * jumlah_akun) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.corp-hemat').text(hemat);
      $('.corp-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#corp-hemat-six-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .corp-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#corp-twelve-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month .strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#corp-twelve-month .text-bulan, #corp-twelve-month .card-main .strike, #corp-twelve-month .card-main .price-durasi, #corp-twelve-month .card-main .main-description').addClass('text-white');
      $('#corp-twelve-month').addClass('hover');
      $('.bonus').html(info_bonus);
      $('.bonus-jasa, .bonus-training').hide();
      if ($('#kode_promo').val() != '') cekPromo();

      let jumlah_akun = parseInt($('#jumlah_akun').val());
      let durasi = 12;
      let harga_std = parseInt($('#corp-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#corp-twelve-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi * jumlah_akun;
      let hemat = (harga_std * durasi * jumlah_akun) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.corp-hemat').text(hemat);
      $('.corp-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#corp-hemat-twelve-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .corp-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#corp-twenty-four-month').click(function() {
      $('.card-month').not(this).removeClass('hover');
      $('.card-month .text-bulan, .card-month .card-main .price-durasi, .card-month span.strike, .card-month .card-main .main-description').not(this).removeClass('text-white');
      $('#corp-twenty-four-month .text-bulan, #corp-twenty-four-month .card-main .strike, #corp-twenty-four-month .card-main .price-durasi, #corp-twenty-four-month .card-main .main-description').addClass('text-white');
      $('#corp-twenty-four-month').addClass('hover');
      $('.bonus').html(info_bonus_terpilih);
      $('.bonus-jasa').show();
      if ($('#kode_promo').val() != '') cekPromo();

      let jumlah_akun = parseInt($('#jumlah_akun').val());
      let durasi = 24;
      let harga_std = parseInt($('#corp-one-month-value').text().replaceAll('.',''));
      let harga = parseInt($('#corp-twenty-four-month-value').text().replaceAll('.',''));
      let sub_total = harga * durasi * jumlah_akun;
      let hemat = (harga_std * durasi * jumlah_akun) - sub_total;
      let ppn = sub_total * 0.1;
      let total = sub_total + ppn - diskon_promo;

      if (jumlah_akun != 3) $('.bonus-training').show(); else $('.bonus-training').hide();
      $('#durasi').val(durasi);
      $('#harga_paket').val(harga);
      // $('#hemat,.corp-hemat').text(hemat);
      $('.corp-hemat').text(number_format(hemat, 0, ",", "."));
      if (hemat > 0) {
          $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').show();
          $('.pros-hemat').text('(Hemat '+$('#corp-hemat-twenty-four-month').text()+'%)');
      } else $('.subtotal .text-hemat, .subtotal .hemat, .pros-hemat').hide();
      $('#sub-total, .corp-sub-total').text(number_format(sub_total, 0, ",", "."));
      $('#ppn').text(number_format(ppn, 0, ",", "."));
      $('#total_harga').val(sub_total + ppn);
      // let total_decimal = Math.round(total / 1000) * 1000;
      $('#total').text(number_format(total, 0, ",", "."));
  });

  $('#akun-jml').on('change', function() {
      let $inp = $(this);
      let from = $inp.prop("value");
  
      if (from == '3') {
          info_bonus = '<strong>Kesempatan terbaik</strong> dengan memilih paket 24 bulan, Anda dapat menghemat <strong style="color: #ea0905;">Rp 18.000.000</strong> dan mendapat <strong style="color: #ea0905;">potongan 25%</strong> jasa konsultasi perhitungan RAB';

          info_bonus_terpilih = '<strong style="color: #026CB6;">Selamat!</strong> Anda telah menghemat sebesar <strong style="color: #ea0905;">Rp 18.000.000</strong> dan mendapat <strong style="color: #ea0905;">potongan 25%</strong> jasa konsultasi perhitungan RAB';

          $('#jumlah_akun').val('3');
          $('.strike .standard').text('<?= 'Rp '.number_format(379000, 0, ",", ".") ?>');
          $('#corp-hemat-three-month').text('26');
          $('#corp-hemat-six-month').text('40');
          $('#corp-hemat-twelve-month').text('53');
          $('#corp-hemat-twenty-four-month').text('66');
          $('#corp-one-month-value').text('<?= number_format(379000, 0, ",", ".") ?>');
          $('#corp-three-month-value').text('<?= number_format(279000, 0, ",", ".") ?>');
          $('#corp-six-month-value').text('<?= number_format(229000, 0, ",", ".") ?>');
          $('#corp-twelve-month-value').text('<?= number_format(179000, 0, ",", ".") ?>');
          $('#corp-twenty-four-month-value').text('<?= number_format(129000, 0, ",", ".") ?>');
          $('#corp-twelve-month').trigger('click');
      } else if (from == '5') {
          info_bonus = '<strong>Kesempatan terbaik</strong> dengan memilih paket 24 bulan, Anda dapat menghemat <strong style="color: #ea0905;">Rp 30.000.000</strong> dan mendapat <strong style="color: #ea0905;">potongan 25%</strong> jasa konsultasi perhitungan RAB, ditambah <strong style="color: #ea0905;">GRATIS</strong> In-house Training optimasi pembuatan RAB untuk perusahaan Anda';

          info_bonus_terpilih = '<strong style="color: #026CB6;">Selamat!</strong> Anda telah menghemat sebesar <strong style="color: #ea0905;">Rp 30.000.000</strong> dan mendapat <strong style="color: #ea0905;">potongan 25%</strong> jasa konsultasi perhitungan RAB, ditambah <strong style="color: #ea0905;">GRATIS</strong> In-house Training optimasi pembuatan RAB untuk perusahaan Anda';

          $('#jumlah_akun').val('5');
          $('.strike .standard').text('<?= 'Rp '.number_format(359000, 0, ",", ".") ?>');
          $('#corp-hemat-three-month').text('28');
          $('#corp-hemat-six-month').text('42');
          $('#corp-hemat-twelve-month').text('56');
          $('#corp-hemat-twenty-four-month').text('70');
          $('#corp-one-month-value').text('<?= number_format(359000, 0, ",", ".") ?>');
          $('#corp-three-month-value').text('<?= number_format(259000, 0, ",", ".") ?>');
          $('#corp-six-month-value').text('<?= number_format(209000, 0, ",", ".") ?>');
          $('#corp-twelve-month-value').text('<?= number_format(159000, 0, ",", ".") ?>');
          $('#corp-twenty-four-month-value').text('<?= number_format(109000, 0, ",", ".") ?>');
          $('#corp-twelve-month').trigger('click');
      } else if (from == '10') {
          info_bonus = '<strong>Kesempatan terbaik</strong> dengan memilih paket 24 bulan, Anda dapat menghemat <strong style="color: #ea0905;">Rp 60.000.000</strong> dan mendapat <strong style="color: #ea0905;">potongan 25%</strong> jasa konsultasi perhitungan RAB, ditambah <strong style="color: #ea0905;">GRATIS</strong> In-house Training optimasi pembuatan RAB untuk perusahaan Anda';

          info_bonus_terpilih = '<strong style="color: #026CB6;">Selamat!</strong> Anda telah menghemat sebesar <strong style="color: #ea0905;">Rp 60.000.000</strong> dan mendapat <strong style="color: #ea0905;">potongan 25%</strong> jasa konsultasi perhitungan RAB, ditambah <strong style="color: #ea0905;">GRATIS</strong> In-house Training optimasi pembuatan RAB untuk perusahaan Anda';

          $('#jumlah_akun').val('10');
          $('.strike .standard').text('<?= 'Rp '.number_format(339000, 0, ",", ".") ?>');
          $('#corp-hemat-three-month').text('30');
          $('#corp-hemat-six-month').text('44');
          $('#corp-hemat-twelve-month').text('59');
          $('#corp-hemat-twenty-four-month').text('74');
          $('#corp-one-month-value').text('<?= number_format(339000, 0, ",", ".") ?>');
          $('#corp-three-month-value').text('<?= number_format(239000, 0, ",", ".") ?>');
          $('#corp-six-month-value').text('<?= number_format(189000, 0, ",", ".") ?>');
          $('#corp-twelve-month-value').text('<?= number_format(139000, 0, ",", ".") ?>');
          $('#corp-twenty-four-month-value').text('<?= number_format(89000, 0, ",", ".") ?>');
          $('#corp-twelve-month').trigger('click');
      }
  });

  function kirimSubscribe() {
    $.ajax({
        type : 'POST',
        url : "<?php echo $this->config->item('url_server') ?>api/kirimSubscribe",
        data: {
          "id_pengguna": id_pengguna,
          "nama_pengguna": $('#nama_subscribe').val(),
          "no_wa": $('#no_wa_subscribe').val()
        },
        dataType: "JSON",
        success : function(data){
            toastr.success(data.Info, 'Informasi', opsi_toastr);
            window.location.href = "<?= base_url('paket') ?>";

            /*let jumlah_akun = $('#jumlah_akun').val();
            let durasi_bulan = $('#durasi').val();
            let harga_paket = $('#harga_paket').val();
            let kode_unik = randomXToY(101, 999);
            let kode_promo = $('#kode_promo').val();
            
            $.ajax({
                url: "<?= $this->config->item('url_server') ?>api/simpanPaket",
                type: "POST",
                dataType: "JSON",
                data: {
                    "id_pengguna": id_pengguna,
                    "paket": paket,
                    "jumlah_akun": jumlah_akun,
                    "durasi_bulan": durasi_bulan,
                    "harga_paket": harga_paket,
                    "diskon": pros_diskon,
                    "kode_unik": kode_unik,
                    "kode_promo": kode_promo.toUpperCase()
                },
                success : function(data){
                    window.location.href = "<?= base_url('invoice') ?>";
                },
                error: function (jqXHR, textStatus, errorThrown){
                    toastr.error('Terjadi masalah saat penyimpanan data.', 'Kesalahan', opsi_toastr);
                }
            });*/
        }
    });
  }

  function simpanPembayaran(result) {
    let jumlah_akun = $('#jumlah_akun').val();
    let durasi_bulan = $('#durasi').val();
    let harga_paket = $('#harga_paket').val();
    let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';
    let order = JSON.parse(result);

    $.ajax({
        url: "<?= $this->config->item('url_server') ?>api/simpanPembayaran",
        type: "POST",
        dataType: "JSON",
        data: {
            "kategori": '1',
            "id_order": order.order_id,
            "id_pengguna": id_pengguna,
            "paket": paket,
            "jumlah_akun": jumlah_akun,
            "durasi_bulan": durasi_bulan,
            "harga_paket": harga_paket,
            "diskon": pros_diskon,
            "kode_promo": kode_promo.toUpperCase(),
            "result_data": result
        },
        success: function(data){
            sessionStorage.setItem('id_order', order.order_id);
            window.location.href = "<?= base_url('invoice1') ?>";
        }
    });
  }

  $('#lanjutBayar').on('click', function() {
    if (id_pengguna != null) {
        $.ajax({
            url : "<?php echo $this->config->item('url_server') ?>api/getNotifSubscribe/"+id_pengguna,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                if (data != null) {
                    $('#ModalSubscribe').on('shown.bs.modal', function (e) {
                        $('#nama_subscribe').val(data.nama_pengguna);
                        $('#no_wa_subscribe').val(data.no_wa);
                        $(this).off('shown.bs.modal');
                    }).modal('show');
                } else {
                    /*
                    let jumlah_akun = $('#jumlah_akun').val();
                    let durasi_bulan = $('#durasi').val();
                    let harga_paket = $('#harga_paket').val();
                    let kode_unik = randomXToY(101, 999);
                    let kode_promo = $('#kode_promo').val();

                    $.ajax({
                        url: "<?= $this->config->item('url_server') ?>api/simpanPaket",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            "id_pengguna": id_pengguna,
                            "paket": paket,
                            "jumlah_akun": jumlah_akun,
                            "durasi_bulan": durasi_bulan,
                            "harga_paket": harga_paket,
                            "diskon": pros_diskon,
                            "kode_unik": kode_unik,
                            "kode_promo": kode_promo.toUpperCase()
                        },
                        success : function(data){
                            window.location.href = "<?= base_url('invoice') ?>";
                        },
                        error: function (jqXHR, textStatus, errorThrown){
                            toastr.error('Terjadi masalah saat penyimpanan data.', 'Kesalahan', opsi_toastr);
                        }
                    });*/

                    let nama_paket = (paket == '1') ? 'PAKET PROFESSIONAL' : 'PAKET CORPORATE';
                    let jumlah_akun = parseInt($('#jumlah_akun').val());
                    let durasi_bulan = $('#durasi').val();
                    let harga_paket = parseInt($('#harga_paket').val()) * jumlah_akun;
                    let ppn = parseInt($('#ppn').text().replaceAll('.',''));
                    let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';
                    let total = parseInt($('#total').text().replaceAll('.',''));

                    $.ajax({
                        type: "get",
                        url: "<?php echo $this->config->item('url_server') ?>api/getPenggunaBayar/"+id_pengguna,
                        dataType: "JSON",
                        success: function(data){
                            if (data != null) {
                                $.ajax({
                                    url: "<?php echo $this->config->item('url_server') ?>api/bayarTagihan",
                                    cache: false,
                                    type: "POST",
                                    data: {
                                        "nama_pengguna": data.nama_pengguna,
                                        "email": data.email,
                                        "no_wa": data.no_wa,
                                        "alamat": data.alamat,
                                        "paket": paket,
                                        "nama_paket": nama_paket,
                                        "jumlah_akun": jumlah_akun,
                                        "durasi_bulan": durasi_bulan,
                                        "harga_paket": harga_paket,
                                        "ppn": ppn,
                                        "diskon": diskon_promo,
                                        "kode_promo": kode_promo.toUpperCase(),
                                        "total": total
                                    },
                                    dataType: "JSON",
                                    success: function(data) {
                                        snap.pay(data, {
                                            onSuccess: function(result){
                                                simpanPembayaran(JSON.stringify(result));
                                            },
                                            onPending: function(result){
                                                simpanPembayaran(JSON.stringify(result));
                                            },
                                            onError: function(result){
                                                simpanPembayaran(JSON.stringify(result));
                                            }
                                        });
                                    }
                                });                         
                            }
                        }
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    } else {
        $('#menu-login').click();
        $('#sender-login').val('2');
    }
    /*} else {
      $('#ModalPromoUpgrade').on('show.bs.modal', function (e) {
          $('#ModalPromoUpgrade .modal-dialog').addClass('rubberBand');
      }).modal('show');

      $('.countdown').countdown({
          date: '08/17/2021 10:00:00',
          offset: +7,
          day: 'Hari',
          days: 'Hari',
          hour: 'Jam',
          hours: 'Jam',
          minute: 'Menit',
          minutes: 'Menit',
          second: 'Detik',
          seconds: 'Detik'
      }, function () {
          $('#ModalPromoUpgrade .subscribe').show();
          $('.countdown').remove();
      });
    }*/
  });

  // $(window).load(function() {
  //     $('#ModalPromoUpgrade').on('hide.bs.modal', function (e) {
  //         $('#ModalPromoUpgrade .modal-dialog').removeClass('rubberBand').addClass('zoomOutUp');
  //     });
  // });
</script>