<link rel="stylesheet" href="<?= base_url('assets/css/balloon.min.css') ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<style>
  .select2-selection__rendered {
    text-transform: capitalize;
  }

  #outerContainer #mainContainer div.toolbar {
    display: none !important;
    /* hide PDF viewer toolbar */
  }

  #outerContainer #mainContainer #viewerContainer {
    top: 0 !important;
    /* move doc up into empty bar space */
  }

  #downloadPDF {
    color: #fff;
    padding: 6px 12px;
    border-radius: 5px;
  }

  #outerContainer #mainContainer div.toolbar {
    display: none !important;
    /* hide PDF viewer toolbar */
  }

  #outerContainer #mainContainer #viewerContainer {
    top: 0 !important;
    /* move doc up into empty bar space */
  }

  .scrollable-detail {
    overflow-y: auto;
    max-height: 9.6em;
    scrollbar-color: #026CB6 #f4f4f440;
    /*scrollbar-width: thin;*/
  }

  .form-control:focus {
    border-color: #0075f3;
    box-shadow: none !important;
  }

  #frm-ulasan #rating-ability-wrapper .btnrating {
    border: 0;
    background: #fff;
    padding: 0 5px;
  }

  #frm-ulasan #rating-ability-wrapper .btn-warn i {
    color: #ffe300 !important;
  }

  #frm-ulasan #rating-ability-wrapper .fa-star {
    color: #d7d7d7;
    font-size: 25px;
    padding-top: 5px;
  }




  .btn.btn-primary-lite {
    background: transparent;
    border: 1px solid #026CB6;
    font-size: 13px;
    padding: 3px 8px !important;
    color: #026CB6;
  }

  .product-grid .product-detail {

    opacity: 1;
    position: relative;

  }




  .btn-primary {
    background: #026CB6 !important;
    background-color: #026CB6 !important;
    border-color: #026CB6 !important;
  }






  .modal-header {
    border-bottom: none !important;
  }

  .modal-footer {
    border-top: none !important;
  }

  /*btn promo*/

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

  .promo input::placeholder,
  .promo input::-webkit-input-placeholder {
    text-transform: none;
    font-weight: 500;
  }

  .promo button {
    color: #fff;
    background: linear-gradient(to right, #094fa9, #03cdcd);
    border-radius: 50px;
    padding: 0 11px;
    margin: 2px 2px 0 0;
    width: 97%;
    height: 90%;
    /*margin: 0;
    width: 100%;
    height: 100%;*/
  }

  .promo button:hover {
    background: linear-gradient(to right, #f7b927, #ec8920);
  }

  .promo button:focus {
    color: #fff;
  }

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

  .terms {
    margin-bottom: 12px;
  }

  .terms div {
    display: inline-table;
    font-size: 12.5px;
    width: 12px;
  }

  /*btn promo*/


  /* tootip alamat */
  [data-tip] {
    position: relative;

  }

  [data-tip]:before {
    content: '';
    /* hides the tooltip when not hovered */
    display: none;
    content: '';
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #92A5AB;
    position: absolute;
    top: 0;
    left: 35px;
    z-index: 8;
    font-size: 0;
    line-height: 0;
    width: 0;
    height: 0;
  }

  [data-tip]:after {
    display: none;
    content: attr(data-tip);
    position: absolute;
    top: -40px;
    left: 0px;
    padding: 2px 8px;
    background: #92A5AB;
    color: #fff;
    z-index: 9;
    font-size: 0.75em;
    line-height: 18px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    white-space: pre-line;
    /*nowrap;*/
    word-wrap: normal;
    width: 270px;
  }

  [data-tip]:hover:before,
  [data-tip]:hover:after {
    display: block;
  }


  /*btn track */
  textarea#alamat_pengiriman {
    font-weight: unset;
  }

  btn-track {
    position: relative;
    text-decoration: none;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 8px 20px -6px rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    transition: all 0.1s ease;
  }

  .btn-track .--icon {
    position: relative;
    /*width: 60px;*/
    height: 60px;
    background: #d3e6ff;
    float: left;
    border-radius: 4px 0 0 4px;
    width: 17%
  }

  .btn-track .--icon #box {
    position: absolute;
    top: 17px;
    left: 18px;
    transition: all 0.2s ease;
  }

  .btn-track .--icon #pin {
    position: absolute;
    top: 0px;
    left: 25px;
    opacity: 0;
    transition: all 0.2s ease;
  }

  .btn-track .--icon .circle-inner {
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.9);
    margin: 10px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    transform: scale(0);
    transition: all 0.3s ease;
  }

  .btn-track .--icon .circle-outer {
    position: absolute;
    margin: 4px;
    width: 52px;
    height: 52px;
    border-radius: 26px;
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    transform: scale(0);
    transition: all 0.3s ease;
  }

  .btn-track .--text {
    float: left;
    color: #fff;
    white-space: nowrap;
    line-height: 20px;
    height: 60px;
    padding: 20px;
    border-radius: 0 8px 8px 0;
    font-size: 16px;
    font-weight: 500;
    width: 83%;
  }

  .btn-track:hover .--icon #box {
    transform: translateY(9px) scale(0.83333);
  }

  .btn-track:hover .--icon #pin {
    transform: translateY(11px);
    opacity: 1;
    transition-delay: 0.15s;
  }

  .btn-track:hover .--icon .circle-inner {
    transform: scale(1);
    transition-delay: 0.2s;
  }

  .btn-track:hover .--icon .circle-outer {
    transform: scale(1);
    transition-delay: 0.25s;
  }

  /*.btn-track:hover .--text {
  color: #000;
}*/
  .btn-track:active {
    transform: translateY(1px);
  }


  /*btn track*/



























  .ribbon-disc {
    position: absolute;
    left: var(--left, 10px);
    top: var(--top, -3px);
    filter: drop-shadow(2px 3px 2px rgba(0, 0, 0, 0.5));
  }

  .ribbon-disc>.content {
    color: white;
    font-size: 1.25rem;
    text-align: center;
    font-weight: 400;
    background: var(--color, #2ca7d8) linear-gradient(45deg, rgba(0, 0, 0, 0) 0%, rgba(255, 255, 255, 0.25) 100%);
    padding: 30px 2px 4px;
    width: var(--width, 65px);
    min-height: var(--height, 47px);
    transition: clip-path 1s, padding 1s, background 1s;
    height: 100px;
  }

  .ribbon-disc.down>.content {
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 8px), 50% 100%, 0 calc(100% - 8px));
  }


  .hvr-grow:hover>.pricingTable .pricingTable-header div h3.heading,
  .paket2.hvr-grow .pricingTable .pricingTable-header div h3.heading {
    color: #fff
  }

  .hvr-grow:hover>.pricingTable .pricingTable-header,
  .paket2.hvr-grow .pricingTable .pricingTable-header {
    background: #05144A
  }

  .hvr-grow:hover>.pricingTable,
  .paket2.hvr-grow .pricingTable {
    background: #eff0f2
  }

  .hvr-grow:hover>.pricingTable .pricingTable-header div div.price-value .amount,
  .paket2.hvr-grow .pricingTable .pricingTable-header div div.price-value .amount {
    color: #FFFFFF
  }

  .hvr-grow:hover>.pricingTable .pricingTable-header div div.price-value .amount .currency .strike,
  .paket2.hvr-grow .pricingTable .pricingTable-header div div.price-value .amount .currency .strike {
    color: #F00
  }

  .hvr-grow:hover>.pricingTable .pricingTable-header div .ribbon-disc,
  .paket2.hvr-grow .pricingTable .pricingTable-header div .ribbon-disc {
    /*background: #f50000;*/
    --color: #f50000 !important;
  }

  .hvr-grow:hover>.pricingTable .pricing-content ul li span.subtitle a.read.order,
  .paket2.hvr-grow .pricingTable .pricing-content ul li span.subtitle a.read.order {
    box-shadow: 0px 3px 4px 1px #949494;
  }

  .ribbon-disc.down::before {
    content: "";
    display: inline-block;
    position: absolute;
    right: -5px;
    z-index: -1000;
    width: 10px;
    height: 4px;
    background: linear-gradient(to bottom right, transparent 50%, transparent 0), linear-gradient(to top right, #b14300 50%, transparent 0);
    background-size: 50% 100%;
    background-repeat: no-repeat;
    background-position: left, right;
  }








  .paket2.hvr-grow {
    padding: 0;
    transform: scale(1.06);
    z-index: 1;
  }
















  /* .pricingTable:hover {
    	background: #eff0f2;
    }*/
  .hvr-grow:active,
  .hvr-grow:focus,
  .hvr-grow:hover {
    z-index: 1;
  }

  .disc-half {
    width: 65px;
    height: 100px;
    background: #05144A;
    border-radius: 0 100px 100px 0;
    display: block;
    position: absolute;
    top: 29px;
    left: 1px;
    text-align: center;
    padding: 27px 10px;
  }

  .pricingTable.button-info,
  .pricingTable.professional-button {
    border: none;
  }

  .hvr-float-shadow .pricingTable.button-info:hover {
    border: none;
    border-radius: none;
  }

  .pricingTable {
    border: 1px solid #fff;
    border-radius: 20px;
    background: #fff;
  }

  .read.order.btn-hubungi-kami:hover {
    background: #026CB6 !important;
    border: 1px solid #026CB6 !important;
  }

  .circle li {
    margin-top: 8px;
    height: 32px;
  }

  /*  .hvr-float-shadow .pricingTable:hover {
    border: 7px solid #0077a6;
    border-radius: 5px;
}*/
  .hvr-back-pulse:hover,
  .hvr-back-pulse:focus,
  .hvr-back-pulse:active {
    background-color: #026CB6;
  }

  /*  .hvr-back-pulse:hover > .pricingTable .pricing-content ul li span .read.btn-hubungi-kami, .hvr-back-pulse:focus > .pricingTable .pricing-content ul li span .read.btn-hubungi-kami, .hvr-back-pulse:active > .pricingTable .pricing-content ul li span .read.btn-hubungi-kami{
    background: -webkit-linear-gradient(#fff,#fff) !important;
    background-clip: border-box !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
} */
  .button-background::before {
    background: hsl(174, 100%, 20%);
  }

  .strike {
    position: absolute;
    text-decoration: line-through;
    font-weight: 400;
    font-size: 16px;
    bottom: 5px;
    left: 32px;
    color: #d80707;
  }

  .pricingTable .amount {
    display: inline-block;
    padding: 5px 3px 0px 7px;
    font-size: 22px;
    font-weight: 700;
    color: #05144A;
    /*background: #f6f4f4;*/
  }


  .pricingTable .currency {
    font-size: 22px;
    position: relative;
    top: -16px;
    left: 1px;
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
  /*  .read.btn-hubungi-kami {
    background: none;
    background: -webkit-linear-gradient(#0975a9,#0bccba) !important;
        background-clip: border-box !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}*/
  .amount.harga {
    font-size: 22px !important;
  }

  .col-md-2 {
    flex: 0 0 18.75%;
    max-width: 18.75%;
    padding-right: 0px !important;
    width: 19.967%;
    padding-left: 0px !important;
  }

  .pricingTable a.order {
    border-radius: 5px !important;
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
    background: rgba(168, 193, 230, 0.21);
    color: #ffffe5;
    padding-bottom: 0px;
    text-align: center;
    border-radius: 20px;
  }

  .pricingTable .heading {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    text-transform: capitalize;
    color: #05144A;
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



  .pricingTable .currency {
    font-size: 22px;
    position: relative;
    top: -16px;
    left: -1px;
  }

  .pricingTable .pricing-content ul {
    list-style: none;
    color: #222;
  }

  .pricingTable .pricing-content ul li {
    font-size: 19px;
    padding: 10px;
    border-bottom: 1px solid #e3e3e3;
    text-align: center;
  }

  .pricingTable.header .pricing-content ul li {
    text-align: left;
  }

  .pricingTable .read {
    background: #3289c6;
    /* background: linear-gradient(to right,#0975a9,#0bccba);*/
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
    /*background: linear-gradient(to right,#f7b927,#ec8920);*/
    background: #ec8920;
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
    height: 155px;
    background: url(https://rumahtinggal.id/assets/img/paket/ikon_rumah_paket.png);
    /*background: url("https://www.kindpng.com/picc/m/111-1111025_home-vector-png-transparent-png.png");*/
    background-size: 67%;
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
    background: #52aed2;
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
    font-size: 16px;
    bottom: 5px;
    left: 32px;
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
    width: 22.5%;
    display: grid;
    grid-template-rows: 3px 50px 105px 40px;
    border-radius: 30px;
    box-shadow: 0 3px 7px rgba(64, 62, 62, 0.15);
    transition: all 0.5s;
    text-align: center;
    height: 200px;
    background: #fff;
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
    /*align-self: center;*/
  }

  /*.card-1 {
   /* background: linear-gradient(to bottom,#3fbafe,#32edfd); 
    border-bottom: 2px solid #3fbafe;
}

.card-2 {
    /*background: linear-gradient(to bottom,#8aef2e,#92fb6f);
    border-bottom: 2px solid #84ea26;
}

.card-3 {
    /*background: linear-gradient(to bottom,#ecd42a,#f5e962);
    border-bottom: 2px solid #ead11d;
}

.card-4 {
    /*background: linear-gradient(to bottom,#58d5c9,#6cffca);
    border-bottom: 2px solid #58d5c9;
}*/

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
    <div class="text-center" style="font-size: 20px;">Paket Terbaik Kami</div>
  </div>


  <div class="row mb-3">
    <div class="card-container" style="justify-content: space-between; width:100%">
      <div class="card-heading hvr-float-shadow card-1">
        <h3>GRATIS</h3>
        <p class="card__title">Dapatkan laporan desain rumah ini GRATIS! Laporan desain berisi gambar 3D eksterior, denah, tampak bangunan, dan spesifikasi material.</p>
        <!--  <p class="card__apply pricingTable free button-info"><a class="read order" href="<?= base_url('assets/dokumen/rumah_pdf/ded.pdf') ?>" download="DED-<?= $nama_rumah ?>">Download FREE</a></p> -->
      </div>

      <div class="card-heading hvr-float-shadow card-2">
        <h3>PAKET 1</h3>
        <p class="card__title">Produk paket 1 berupa laporan desain rumah dan gambar skematik (denah, tampak, potongan) untuk panduan tukang dalam membangun.</p>
        <!--  <p class="card__apply pricingTable button-info" style="background: none;"><a href="javascript:void(0)" onclick="checkoutPaket(1,<?= $id_rumah ?>)" class="read order">Beli</a></p> -->
      </div>

      <div class="card-heading hvr-float-shadow card-3">
        <h3>PAKET 2</h3>
        <p class="card__title">Produk paket 2 berupa laporan desain, gambar skematik, dan gambar kerja yang terdiri dari gambar struktur, arsitektur, instalasi air dan listrik.</p>
        <!--  <p class="card__apply pricingTable button-info"><a href="javascript:void(0)" onclick="checkoutPaket(2,<?= $id_rumah ?>)" class="read order">Beli</a></p> -->
      </div>

      <div class="card-heading hvr-float-shadow card-4">
        <h3>PAKET 3</h3>
        <p class="card__title">Produk paket 3 ini seperti paket 2 dengan tambahan produk Rencana Anggaran Biaya (RAB) dan Rencana Kerja dan Syarat (RKS) yang terperinci.</p>
        <!--  <p class="card__apply pricingTable button-info"><a href="javascript:void(0)" onClick="checkoutPaket(3,<?= $id_rumah ?>)" class="read order">Beli</a></p>-->
      </div>


    </div>
  </div>




  <div class="row mb-5 mt-5" style="/*box-shadow: 0 0 10px 8px rgb(233 229 229 / 50%);*/border-radius: 20px;">
    <div class="col-md-2 col-sm-6" style="padding: 0; max-width: 25% !important; flex: 0 0 25%;">
      <div class="fitur"></div>
      <div class="pricingTable header" style="border-radius: 0px;">
        <div class="pricing-content">
          <ul>
            <li class="h-55">Laporan Desain
              <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalLaporanDesain" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
              <div class="modal fade" id="modalLaporanDesain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width:50%;">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Laporan Desain</h5>
                            <p style="text-align:justify" class="scrollable-detail">
                              Laporan desain sebagai gambaran berisi konsep desain rumah, gambar 3D eksterior, denah, tampak bangunan,dan spesifikasi material. Dokumen ini akan memberikan gambaran menyeluruh terkait desain setiap rumah. </p>
                          </div>

                        </div>
                        <div class="col-md-6 pl-0">
                          <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                            <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                          </video>

                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Laporan Desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:50vh;pointer-events: none"></embed>
                      <!--<button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin: 0 auto">Close</button>-->
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="h-55">Gambar Skematik
              <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalGambarSkematik" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
              <div class="modal fade" id="modalGambarSkematik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width:730px;">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Gambar Skematik</h5>
                            <p style="text-align:justify" class="scrollable-detail">
                              Gambar skematik ini merupakan gambar desain yang terukur, berupa denah, tampak, dan potongan bangunan. Gambar ini sebagai syarat minimal untuk panduan tukang dalam membangun. </p>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                            <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                          </video>

                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Gambar Skematik.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="h-55">Gambar Kerja
              <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalGambarKerja" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
              <div class="modal fade" id="modalGambarKerja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width:730px;">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Gambar Kerja</h5>
                            <p style="text-align:justify" class="scrollable-detail">
                              Gambar kerja yang detail sangat diperlukan untuk kemudahan tukang dalam membangun. Gambar kerja ini sangat lengkap dan detail mulai dari gambar struktur, arsitektur, instalasi air dan listrik. </p>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                            <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                          </video>

                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Gambar Kerja.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="h-55">Rencana Anggaran Biaya
              <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalRencanaAnggaranBiaya" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
              <div class="modal fade" id="modalRencanaAnggaranBiaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width:730px;">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Rencana Anggaran Biaya</h5>
                            <p style="text-align:justify" class="scrollable-detail">
                              Agar proses pembangunan lebih terarah diperlukan juga Rencana Anggaran Biaya (RAB) yaitu dokumen yang memberikan: 1. rincian biaya pembangunan tiap tahap pekerjaan konstruksi; 2. harga material, upah, dan alat; 3. hingga rincian kebutuhan material, jumlah tukang, dan jumalh alat. </p>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                            <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                          </video>

                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Rencana Anggaran Biaya.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="h-55 border-none">Rencana Kerja dan Syarat
              <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalRencanaKerjaDanSyarat" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
              <div class="modal fade" id="modalRencanaKerjaDanSyarat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width:730px;">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Rencana Kerja dan Syarat</h5>
                            <p style="text-align:justify" class="scrollable-detail">
                              Sebagai pelengkap dokumen, Rencana Kerja dan Syarat diperlukan agar diketahui spesifikasi dan merk material apa yang digunakan serta bagaimana syarat pengaplikasiannya. </p>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                            <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                          </video>

                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Rencana Kerja dan Syarat.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>
                    </div>
                  </div>
                </div>
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

    <div class="col-md-2 col-sm-6" style="padding: 0;">
      <div class="pricingTable free">
        <div class="pricingTable-header">
          <div class="text-center"><img src="<?= base_url('dev/assets/img/paper-plane.png') ?>" style="width:50px;" /></div>
          <div class="price-value" style="height: 85px;">
            <h3 class="amount heading">GRATIS</span>
          </div>
        </div>
        <!-- <div class="round-bottom"></div> -->
        <div class="pricing-content">
          <ul>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55 border-none mt-2 mb-4">
              <span class="subtitle text-center free standart-button">
                <!-- <a class="read order bg-danger" href="<?= base_url('assets/dokumen/rumah_pdf/ded.pdf') ?>" download="DED-<?= $nama_rumah ?>">Download GRATIS</a> -->
                <a class="read order bg-danger text-white" id="downloadGratis" style="cursor:pointer;">Download GRATIS</a>
              </span>
              <!-- <span style="font-size:15px">Didownload <?= $rekap_download ?> kali</span>  style="cursor:pointer" data-toggle="modal" data-target="#modalTulisUlasan"-->
            </li>
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


    <div class="col-md-2 col-sm-6 " style="padding: 0;">
      <div class="pricingTable">
        <div class="pricingTable-header">
          <div style="margin-left: 54px;font-size: 15px;">
            <h3 class="heading text-center text-black">Paket 1</h3>
            <div class="price-value pt-4" style="height: 101px;">
              <span class="amount">
                <span class="currency">Rp <span class="strike"><?= $harga_p1 ?></span></span><?= $harga_promo_p1 ?>
              </span>
            </div>


            <div class="ribbon-disc down" style="--color: #f80;">
              <div class="content">
                disc <br> 50%
              </div>
            </div>


            <!-- <div class="disc-half">disc <br> 20%</div> -->
          </div>
        </div>
        <!-- <div class="round-bottom"></div> -->
        <div class="pricing-content">
          <ul>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55 border-none mt-2 mb-4">
              <span class="subtitle text-center free standart-button">
                <a href="javascript:void(0)" onclick="checkoutPaket(1,<?= $id_rumah ?>)" class="read order btn-primary">Beli</a>
              </span>
              <!-- <span style="font-size:15px">Dibeli <?= $rekap_beli1 ?> kali</span> -->
            </li>
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

    <div class="col-md-2 col-sm-6 paket2 hvr-grow" style="padding: 0;">
      <div class="pricingTable paket2">
        <!--  <div class="ribbon ribbon-top-right"><span>63% Off</span></div> -->
        <div class="pricingTable-header">
          <div style="margin-left: 54px;font-size: 15px;">
            <h3 class="heading text-center">Paket 2</h3>
            <div class="price-value pt-4" style="height:99px">
              <span class="amount">
                <span class="currency">Rp <span class="strike"><?= $harga_p2 ?></span></span><?= $harga_promo_p2 ?>
              </span>
              <!-- <span class="amount text-white">
                          <span class="currency">Rp <span class="strike">399.000</span></span>149.000
                      </span><br>
                      <small class="text-white" style="font-size:16px;">/ bulan</small> -->
            </div>
            <!-- <div class="disc-half">disc <br> 20%</div> -->

            <div class="ribbon-disc down" style="--color: #f80;">
              <div class="content">
                disc <br> 20%
              </div>
            </div>


          </div>
        </div>
        <!-- <div class="round-bottom" style="height: 41px;"></div> -->
        <div class="pricing-content">
          <ul>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-false.png') ?>" /></li>
            <li class="h-55 border-none mt-2 mb-4">
              <span class="subtitle text-center ">
                <a href="javascript:void(0)" onclick="checkoutPaket(2,<?= $id_rumah ?>)" class="read order btn-primary">Beli</a>
              </span>
              <!-- <span style="font-size:15px">Dibeli <?= $rekap_beli2 ?> kali</span> -->
            </li>
            <!-- <li class="h-55 border-none">
                        <span class="subtitle text-center pricingTable">
                            <a href="javascript:void(0)" class="read btn-hubungi-kami">Hubungi Kami</a>
                        </span>
                      </li> -->

          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-2 col-sm-6" style="padding: 0;">
      <div class="pricingTable">
        <!-- <div class="ribbon ribbon-top-right"><span>53% Off</span></div> -->
        <div class="pricingTable-header">
          <div style="margin-left: 54px;font-size: 15px;">
            <h3 class="heading text-center text-black">Paket 3</h3>
            <div class="price-value pt-4" style="height:99px">
              <span class="amount">
                <span class="currency">Rp <span class="strike"><?= $harga_p3 ?></span></span><?= $harga_promo_p3 ?>
              </span>
              <!-- <span class="amount">
                          <span class="currency">Rp <span class="strike">379.000</span></span>179.000
                      </span><br>
                      <small class="text-black" style="font-size:16px;">/ bulan</small> -->
            </div>
            <!-- <div class="disc-half">disc <br> 20%</div> -->

            <div class="ribbon-disc down" style="--color: #f80;">
              <div class="content">
                disc <br> 15%
              </div>
            </div>

          </div>
        </div>
        <!-- <div class="round-bottom" style="height: 41px;"></div> -->
        <div class="pricing-content">
          <ul>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55 border-none"><img src="<?= base_url('assets/img/pricing/icon-check.png') ?>" /></li>
            <li class="h-55 border-none mt-2 mb-4">
              <span class="subtitle text-center free standart-button">
                <a href="javascript:void(0)" onclick="checkoutPaket(3,<?= $id_rumah ?>)" class="read order btn-primary">Beli</a>
              </span>
              <!-- <span style="font-size:15px">Dibeli <?= $rekap_beli3 ?> kali</span> -->
            </li>
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

  <!-- <div class="row" style="margin-top: 25px;margin-bottom: 25px;">
      <div class="col-md-2 col-sm-6" style="padding: 0; max-width: 25% !important; flex: 0 0 25%;"></div>
      <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">
          <span class="subtitle text-center pricingTable free standart-button">
             <!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#ModalDaftar" class="read order">Download</a>
            <a class="read order" href="<?= base_url('assets/dokumen/rumah_pdf/ded.pdf') ?>" download="DED-<?= $nama_rumah ?>">Download GRATIS</a>
          </span>
      </div>

      <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">
          <span class="subtitle text-center pricingTable professional-button">
              <a href="javascript:void(0)" onclick="checkoutPaket(1,<?= $id_rumah ?>)" class="read order">Beli</a>
          </span>
      </div>

      <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">
          <span class="subtitle text-center pricingTable corporate-button">
              <a href="javascript:void(0)" onclick="checkoutPaket(2,<?= $id_rumah ?>)" class="read order">Beli</a>
          </span>
      </div>
    
     <div class="col-md-2 col-sm-6 text-center" style="padding: 0;">
          <span class="subtitle text-center pricingTable corporate-button">
              <a href="javascript:void(0)" onclick="checkoutPaket(3,<?= $id_rumah ?>)" class="read order">Beli</a>
          </span>
      </div>

    
  </div> -->





  <div class="row mt-3" style="box-shadow: 0 0 15px 0px rgb(233 229 229 / 50%);border-radius: 5px;padding:10px;background:#fffefd;">

    <div class="col-md-3" style="padding: 37px;background: #026CB6;border-radius: 5px;display:table">
      <div style="display:table-cell; vertical-align:middle">
        <div style="color: #fff;font-weight: 600;font-size: 25px;vertical-align: middle;display: inline;">Penawaran Jasa Lainnya</div>
        <div style="color: #eaeaea;font-size: 16px;">rumahtinggal.id juga melayani jasa :</div>
      </div>
    </div>

    <div class="col-md-5" style="font-size:17px;margin-left:35px;">

      <ul class="circle">
        <li>Modifikasi Desain
          <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalModifikasiDesain" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
          <div class="modal fade" id="modalModifikasiDesain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:730px;">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Modifikasi Desain</h5>
                        <p style="text-align:justify" class="scrollable-detail">
                          Anda dapat meminta arsitek rumahtinggal.id untuk memodifikasi desain rumah ini agar lebih sesuai dengan kebutuhan dan keinginan Anda. Modifikasi dapat berupa denah, 3D eksterior, maupun spesifikasi material yang digunakan. </p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                        <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                      </video>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!--  <embed type="application/pdf" src="https://rumahtinggal.id/assets/doc/lite/konsep_desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none" ></embed> -->
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>Desain Interior
          <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalDesainInterior" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
          <div class="modal fade" id="modalDesainInterior" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:730px;">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Desain Interior</h5>
                        <p style="text-align:justify" class="scrollable-detail">
                          Desain interior sangat berguna untuk memberikan gambaran mengenai suasana interior rumah agar lebih nyaman dihuni. Desain ini mencakup penataan furniture serta desain lantai, dinding, dan plafond. </p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                        <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                      </video>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <embed type="application/pdf" src="https://rumahtinggal.id/assets/doc/lite/konsep_desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none" ></embed> -->
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>Perhitungan Struktur
          <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalPerhitunganStruktur" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
          <div class="modal fade" id="modalPerhitunganStruktur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:730px;">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Perhitungan Struktur</h5>
                        <p style="text-align:justify" class="scrollable-detail">
                          Dokumen perhitungan struktur diperlukan untuk menunjukkan bahwa rumah telah didesain sesuai kaidah struktur yang berlaku. Dokumen ini bisa digunakan sebagai syarat dalam pengajuan IMB (Izin Mendirikan Bangunan). </p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                        <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                      </video>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <embed type="application/pdf" src="https://rumahtinggal.id/assets/doc/lite/konsep_desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none" ></embed> -->
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>Gambar Pengajuan IMB
          <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalGambarPersetujuanBangunanGedung" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
          <div class="modal fade" id="modalGambarPersetujuanBangunanGedung" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:730px;">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Gambar Persetujuan Bangunan Gedung (PBG)</h5>
                        <p style="text-align:justify" class="scrollable-detail">
                          Gambar pengajuan IMB (Izin Mendirikan Bangunan) diperlukan sebagai salah satu syarat saat emngajukan IMB. Dokumen ini meliputi gambar detail struktur, arsitektur, instalasi ail dan listrik, serta gambar lain yang disyaratkan di amsing-masing daerah. </p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                        <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                      </video>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <embed type="application/pdf" src="https://rumahtinggal.id/assets/doc/lite/konsep_desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none" ></embed>-->
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>Jasa Pengukuran Lahan
          <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalJasaPengukuranLahan" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
          <div class="modal fade" id="modalJasaPengukuranLahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:730px;">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Jasa Pengukuran Lahan</h5>
                        <p style="text-align:justify" class="scrollable-detail">
                          RumahTinggal.id juga menerima jasa pengukuran topografi lahan. Ini biasanya diperlukan untuk lokasi pembangunan yang memiliki lahan luas, lahan dengan bentuk tidak beraturan, atau lahan berkontur. Hasil pengukuran lahan sangat membantu dalam proses desain rumah. </p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                        <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                      </video>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <embed type="application/pdf" src="https://rumahtinggal.id/assets/doc/lite/konsep_desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none" ></embed> -->
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>Jasa Pengujian Tanah
          <button type="button" class="btn btn-primary-lite" data-toggle="modal" data-target="#modalJasaPengujianTanah" style="border-radius: 5px;padding: 3px 15px;float: right;">Detail</button>
          <div class="modal fade" id="modalJasaPengujianTanah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:730px;">
              <div class="modal-content">
                <div class="modal-header">

                  <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel" style="white-space: pre;">Jasa Pengujian Tanah</h5>
                        <p style="text-align:justify" class="scrollable-detail">
                          RumahTinggal.id juga menerima jasa pengujian tanah berupa sondir test. Hasil pengujian tanah ini dapat memudahkan proses perancangan struktur rumah. Selain itu dokumen pengujian tanah juga bisa digunakan sebagai salah satu syarat dalam pengajuan IMB. </p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <video style="width:100%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>
                        <source src="https://rumahtinggal.id/assets/video/Beli Desain Rumah Tinggal Idaman Karya Arsitek Profesional dengan Mudah dan Murah.mp4" type="video/mp4">
                      </video>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <embed type="application/pdf" src="https://rumahtinggal.id/assets/doc/lite/konsep_desain.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none" ></embed>-->
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>


    </div>
    <div class="col-md-3" style="padding: 37px;display:table;margin:0 auto;">
      <div class="subtitle text-center pricingTable professional-button" style="display: table-cell;vertical-align: middle">
        <a class="read order btn-hubungi-kami" href="javascript:void(0);" style="background: #ff8a00;color: #fff;-webkit-box-reflect: below 1px linear-gradient(transition, #0005);border: 1px solid #ff8a00;vertical-align:middle;">Hubungi Kami</a>
      </div>
    </div>
  </div>




  <!-- tutup container -->
</div>




<!-- modal pembayaran -->


<div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="modalOrder" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div id="notifikasiPO" style="background: #026CB6;border-radius: 0;padding: 11px 15px;">
        <h5 class="modal-title bold" style="color: #fff;">Paket desain dalam proses pembuatan, Anda setuju untuk menunggu ? <button style="margin: auto; display: block;" id="setujuPO" class="btn btn-danger btn-purchase">Ya, Saya setuju</button></h5>
      </div>
      <div id="disable-modal-pembelian" style="background: #475d5d4a;height: 81%;width: 100%;display: block;z-index: 10;position: absolute;bottom: 0;"></div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Daftar Order</h5>
        <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="summary">
          <span class="text-center">
            <h4></h4>
          </span>
          <table class="subtotal" style="width:100%">
            <tr>
              <td style="width:50%">Sub Total <span class="pros-hemat"></span></td>
              <td style="width:50%;text-align:right;"> Rp <span type="text" id="sub-total"><?= $harga ?></span></td>
            </tr>
            <tr>
              <td style="width:50%">PPN 11%</td>
              <td style="width:50%;text-align:right;"> Rp <span id="ppn"><?= $ppn ?></span></td>
            </tr>
          </table>

          <div class="promo">
            <div class="input-group">
              <input type="text" class="form-control" id="kode_promo" placeholder="Memiliki kode promo?">
              <div class="input-group-append">
                <button class="btn" id="btn-kode-promo" onclick="cekPromo()" disabled><i class="fa fa-gift"></i>Gunakan</button>
              </div>
            </div>
            <span id="diskon_promo_persen" hidden>0</span>
            <span id="pros_diskon" hidden>0</span>

          </div>

          <table style="width:100%">
            <tr class="total">
              <td style="width:50%">Total</td>
              <td style="width:50%;text-align:right;">Rp <span type="text" id="total"><?= $total ?></span></td>
            </tr>
          </table>

          <div style="width: 100%;position: relative;display: inline-block;background: #3e5f88;border-radius:6px; box-shadow:5px 5px 10px 0 #1530334f;margin-top:15px;">
            <a data-toggle="collapse" href="#textarea_alamat" role="button" aria-expanded="false" aria-controls="textarea_alamat" class="btn-track">
              <div class="--icon">
                <div class="circle-inner"></div>
                <div class="circle-outer"></div>
                <svg width="24" height="24" viewBox="0 0 24 24" id="box">
                  <path d="M0 6L5 0H19L24 6V11H0V6Z" fill="#FDDDB3" />
                  <path d="M0.835938 5L5 0H11.5L10 5H0.835938ZM12.5 0L14 5H23.1667L19 0H12.5ZM0 22.5V6H10V10.5L12 9.5L14 10.5V6H24V22.5C24 23.3284 23.3284 24 22.5 24H1.5C0.671573 24 0 23.3284 0 22.5Z" fill="#B39056" />
                  <rect x="6" y="13" width="12" height="3" rx="0.25" fill="white" />
                </svg>
                <svg width="10" height="14" viewBox="0 0 10 14" id="pin">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5 14C6.5 14 10 8.5 10 5C10 1.5 7.76142 0 5 0C2.23858 0 0 1.5 0 5C0 8.5 3.5 14 5 14ZM4.99998 7.5C6.38069 7.5 7.49998 6.38071 7.49998 5C7.49998 3.61929 6.38069 2.5 4.99998 2.5C3.61927 2.5 2.49998 3.61929 2.49998 5C2.49998 6.38071 3.61927 7.5 4.99998 7.5Z" fill="#DE6D56" />
                </svg>
              </div>
              <div class="--text">Atur alamat pengiriman</div>
            </a>
          </div>
          <div class="collapse" id="textarea_alamat" data-tip="Isi alamat dengan lengkap rt/rw, desa/kelurahan, kecamatan, kota/kabupaten, provinsi, kode pos">
            <div class="card card-body">
              <textarea type="text" id="alamat_pengiriman"></textarea>
              <!-- <a id="link_alamat">Masukkan alamat Baru</a> -->
              <a data-target="#modalAlamatPengiriman" data-toggle="modal" id="link_alamat" style="display:none;" href="#modalAlamatPengiriman">Masukkan alamat baru</a>
            </div>
          </div>

          <div class="terms">
            <!-- <div>*)</div> -->
            <div style="width: 100%;">
              <sup>*)</sup> Dengan ini Anda menyetujui semua <a href="<?= base_url('kebijakan_privasi') ?>" style="color: #026CB6;">kebijakan privasi</a> dan <a href="<?= base_url('syarat_ketentuan') ?>" style="color: #026CB6;">ketentuan penggunaan</a> yang berlaku
            </div>
          </div>

          <button style="margin: auto; display: block;" class="btn btn-primary btn-purchase" id="lanjutBayar">Lanjutkan Pembayaran</button>
        </div>






      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>







<!-- modal pembayaran -->




















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







<!-- modal ulasan -->

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


<!-- modal ulasan -->




<!-- modal download -->

<div class="modal fade" id="modalDownloadPDF" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 0;border: none;">
      <div class="modal-header" style="background: #026CB6;border-radius: 0;padding: 11px 15px;">
        <h5 class="modal-title bold" style="color: #fff;">Download file Anda di sini</h5>
      </div>
      <div class="modal-body text-center" style="background: #f8f9fa;">
        <!-- <button class="btn btn-custom btn-danger">Download</button> .$laporan_desain -->
        <button class="btn read order btn-danger" id="downloadPDF">Download<a></a></button>
        <!-- <a class="read order bg-danger" id="downloadPDF" download="DED-<?= $nama_rumah ?>" style="cursor:pointer;">Download</a> -->
      </div>
    </div>
  </div>
</div>

<!-- modal download -->


<!-- modal notifikasi -->

<div class="modal fade" id="modalNotifikasiDownload" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 0;border: none;">
      <div class="modal-header" style="background: #026CB6;border-radius: 0;padding: 11px 15px;">
        <p class="modal-title bold" style="color: #fff;margin:0 auto;">Paket desain ini dalam proses pembuatan <br /> apakah Anda setuju untuk menunggu ? </p>
      </div>
      <div class="modal-body text-center" style="background: #f8f9fa;">
        <!-- <button class="btn btn-custom btn-danger">Download</button> -->
        <button class="read order bg-primary" id="notifikasiPOGratis" style="border-radius: 5px;padding: 6px;color: #fff;border:none;font-weight:600;">Ya, Saya setuju</button>
      </div>
    </div>
  </div>
</div>

<!-- modal notifikasi -->



<!-- modal MaxDownload -->

<div class="modal fade" id="modalMaxDownload" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 0;border: none;">
      <div class="modal-header" style="background: #026CB6;border-radius: 0;padding: 11px 15px;">
        <h5 class="modal-title bold" style="color: #fff;">Paket desain ini dalam proses pembuatan apakah Anda setuju untuk menunggu ? </h5>
      </div>
      <div class="modal-body text-center" style="background: #f8f9fa;">

      </div>
    </div>
  </div>
</div>

<!-- modal MaxDownload -->

<!-- Alamat Pengiriman -->
<div class="modal fade" id="modalAlamatPengiriman" role="dialog" aria-labelledby="modalAlamatPengiriman" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alamat Pengiriman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin:auto;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Provinsi</label>
                <select class="select2-provinsi" style="width: 100%;" id="provinsi" name="provinsi">
                  <option value=""></option>
                </select>
              </div>

              <div class="form-group">
                <label>Kabupaten</label>
                <select class="select2-kabupaten" style="width: 100%;" id="kabupaten" name="kabupaten">
                  <option value=""></option>
                </select>
              </div>

              <div class="form-group">
                <label>Kecamatan</label>
                <select class="select2-kecamatan" style="width: 100%;" id="kecamatan" name="kecamatan">
                  <option value=""></option>
                </select>
              </div>

              <div class="form-group">
                <label>Kelurahan</label>
                <select class="select2-kelurahan" style="width: 100%;" id="kelurahan" name="kelurahan">
                  <option value=""></option>
                </select>
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <div><textarea placeholder="Tulis alamat lengkap Anda" rows="5" col="100" cols="53" id="alamat_lengkap" name="alamat_lengkap"></textarea></div>
              </div>


              <div class="form-group">
                <input type="checkbox" id="ubah_alamat_utama" name="ubah_alamat_utama">
                <label for="ubah_alamat_utama"> Tetapkan sebagai alamat utama</label><br>
              </div>

            </div>
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onClick="simpanAlamatBaru()">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- Alamat pengiriman -->

<!-- Modal Lengkapi Profile -->

<div class="modal fade" id="modalLengkapiProfil" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Lengkapi Profil</h3>
      </div>
      <div class="modal-body">
        <h5 class="mb-3">Silakan lengkapi profil sebelum checkout</h5>
        <form id="ubahCustomer">
          <input type="hidden" name="id_customer" id="id_lengkapi_profil">
          <input type="hidden" name="nama_customer" id="">
          <div class="form-group">
            <label for="exampleFormControlInput1">No. Telepon</label>
            <input type="number" class="form-control" id="no_telp" name="no_wa" placeholder="0821xxx">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="alamat_profil" name="alamat" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="lengkapiProfil">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Lengkapi Profile -->



<!--<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>-->
<script src="<?= base_url('assets/js/js.cookie.min.js') ?>"></script>
<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-PgqzP8d1Cudym3u_"></script>

<script>
  function simpanAlamatBaru() {
    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });

    var alamat = $('#alamat_lengkap').val() + ', ' + $('#kelurahan').text() + ', ' + $('#kecamatan').text() + ', ' + $('#kabupaten').text() + ', ' + $('#provinsi').text();

    if ($("#ubah_alamat_utama").is(':checked')) {
      $.ajax({
        url: "<?php echo base_url() ?>dev/api/ubahAlamatCustomer",
        cache: false,
        type: "POST",
        data: {
          "id_customer": id_customer,
          "alamat_pengiriman": alamat
        },
        dataType: "JSON",
        success: function(data) {
          $('#modalAlamatPengiriman').modal('hide');
          $('#alamat_pengiriman').val(alamat);
        }
      });

    } else {
      $('#alamat_pengiriman').val(alamat);
      $('#modalAlamatPengiriman').modal('hide');
      alert($('#provinsi').text());
    }




  }


  function formatDataKabupaten(data) {

    var $kabupaten = $(
      "<div id ='kabupaten' class='select2-result-kabupaten text-capitalize' style='text-transform:capitalize'>" + data.text + "</div>"
    );

    return $kabupaten;

  }





  $(document).ready(function() {

    $('#modalOrder').on('hidden.bs.modal', function() {
      $('#textarea_alamat').removeClass('show');
      $('#link_alamat').css('display', 'none');
    })

    $('.select2-provinsi').select2({
      closeOnSelect: true,
      theme: "bootstrap",
      placeholder: "Pilih Provinsi",
      allowClear: true,
      dropdownParent: $("#modalAlamatPengiriman"),
      "language": {
        "noResults": function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/not-found.png' width='65' /><br><span>Tidak ada kategori pekerjaan</span></center>";
        },
        searching: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/search-loader.gif' width='30' /></center>";
        },
        loadingMore: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/ajax-loader.gif' width='30'/></center>";
        }
      },
      escapeMarkup: function(markup) {
        return markup;
      },
      ajax: {
        url: "<?php echo base_url('dev/api/getListWilayahProvinsi') ?>",
        dataType: 'json',
        delay: 250,
        data: function(params) {
          return {
            q: params.term,
            page_limit: 10,
            page: (params.page > 1 ? params.page - 1 : params.page)
          };
        },
        processResults: function(data, params) {
          params.page = params.page || 1;
          return {
            results: data.results,
            pagination: {
              more: (params.page * 10) < data.total_count
            }
          };
        },
        cache: true
      },
      // templateResult: formatData,
    });



    $('.select2-kabupaten').select2({
      closeOnSelect: true,
      theme: "bootstrap",
      placeholder: "Pilih Kabupaten",
      allowClear: true,
      dropdownParent: $("#modalAlamatPengiriman"),
      "language": {
        "noResults": function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/not-found.png' width='65' /><br><span>Tidak ada kategori pekerjaan</span></center>";
        },
        searching: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/search-loader.gif' width='30' /></center>";
        },
        loadingMore: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/ajax-loader.gif' width='30'/></center>";
        }
      },
      escapeMarkup: function(markup) {
        return markup;
      },
      ajax: {
        url: "<?php echo base_url('dev/api/getListWilayahKabupaten') ?>",
        dataType: 'json',
        delay: 250,
        data: function(params) {
          return {
            q: params.term,
            page_limit: 10,
            page: (params.page > 1 ? params.page - 1 : params.page),
            provinsi: $('#provinsi').val()
          };
        },
        processResults: function(data, params) {
          params.page = params.page || 1;
          return {
            results: data.results,
            pagination: {
              more: (params.page * 10) < data.total_count
            }
          };
        },
        cache: true
      },
      templateResult: formatDataKabupaten,
    });


    $('.select2-kecamatan').select2({
      closeOnSelect: true,
      theme: "bootstrap",
      placeholder: "Pilih Kecamatan",
      allowClear: true,
      dropdownParent: $("#modalAlamatPengiriman"),
      "language": {
        "noResults": function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/not-found.png' width='65' /><br><span>Tidak ada kategori pekerjaan</span></center>";
        },
        searching: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/search-loader.gif' width='30' /></center>";
        },
        loadingMore: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/ajax-loader.gif' width='30'/></center>";
        }
      },
      escapeMarkup: function(markup) {
        return markup;
      },
      ajax: {
        url: "<?php echo base_url('dev/api/getListWilayahKecamatan') ?>",
        dataType: 'json',
        delay: 250,
        data: function(params) {
          return {
            q: params.term,
            page_limit: 10,
            page: (params.page > 1 ? params.page - 1 : params.page),
            kabupaten: $('#kabupaten').val()
          };
        },
        processResults: function(data, params) {
          params.page = params.page || 1;
          return {
            results: data.results,
            pagination: {
              more: (params.page * 10) < data.total_count
            }
          };
        },
        cache: true
      },
      // templateResult: formatData,
    });



    $('.select2-kelurahan').select2({
      closeOnSelect: true,
      theme: "bootstrap",
      placeholder: "Pilih Kelurahan",
      allowClear: true,
      dropdownParent: $("#modalAlamatPengiriman"),
      "language": {
        "noResults": function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/not-found.png' width='65' /><br><span>Tidak ada kategori pekerjaan</span></center>";
        },
        searching: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/search-loader.gif' width='30' /></center>";
        },
        loadingMore: function() {
          return "<center><img src='<?php echo base_url() ?>assets/img/ajax-loader.gif' width='30'/></center>";
        }
      },
      escapeMarkup: function(markup) {
        return markup;
      },
      ajax: {
        url: "<?php echo base_url('dev/api/getListWilayahKelurahan') ?>",
        dataType: 'json',
        delay: 250,
        data: function(params) {
          return {
            q: params.term,
            page_limit: 10,
            page: (params.page > 1 ? params.page - 1 : params.page),
            kecamatan: $('#kecamatan').val()
          };
        },
        processResults: function(data, params) {
          params.page = params.page || 1;
          return {
            results: data.results,
            pagination: {
              more: (params.page * 10) < data.total_count
            }
          };
        },
        cache: true
      },
      // templateResult: formatData,
    });




    $(".select2-provinsi").change(function() {
      $(".select2-kabupaten, .select2-kecamatan, .select2-kelurahan").empty();
      $(".select2-kabupaten, .select2-kecamatan, .select2-kelurahan").attr('disabled');
    });

    $(".select2-kabupaten").change(function() {
      var kabupaten = $("#kabupaten").val();
      $(".select2-kecamatan, .select2-kelurahan").empty();
      $(".select2-kecamatan, .select2-kelurahan").attr('disabled');
    });

    $(".select2-kecamatan").change(function() {
      var kecamatan = $("#kecamatan").val();
      $(".select2-kelurahan").empty();
      $(".select2-kelurahan").attr('disabled');
    });



  });
















  $("#notifikasiPOGratis").click(function() {
    $('#modalNotifikasiDownload').modal('hide');
    let text = `Halo Tim RumahTinggal.id,\nSaya ingin mendapatkan paket desain *<?= $nama_rumah ?>* secara gratis \nApakah saya bisa mendapatkan informasi lebih lanjut?\nTerima kasih`;
    let phone = '628112636228';
    let message = encodeURIComponent(text);

    let api_wa;
    if (isMobile() == true) api_wa = "whatsapp://send";
    else api_wa = "https://api.whatsapp.com/send";
    let url = api_wa + '?phone=' + phone + '&text=' + message;
    window.open(url, '_blank');

  });


  $("#downloadPDF").click(function() {
    //function downloadPDF(){

    //var a = $("<a />");
    //$("#downloadPDF a").attr("href", "<?= base_url('assets/dokumen/dokumen_gratis/') . $laporan_desain->laporan_desain ?>");
    //$("#downloadPDF a").attr("download", "<?= $nama_rumah ?>");
    // $("#downloadPDF").append(a);


    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });
    var id_rumah = <?= $id_rumah ?>;
    $.ajax({
      url: "<?php echo base_url('dev/api/simpanDataDownload/') ?>" + id_rumah + "/" + id_customer,
      type: "POST",
      data: {
        "download": 1,
        "id_rumah": id_rumah,
        "id_customer": id_customer
      },
      dataType: "JSON",
      success: function(data) {


        $.ajax({
          url: "<?php echo base_url() ?>dev/api/simpanPembelianGratis",
          cache: false,
          type: "POST",
          data: {
            "no_invoice": 924715,
            "id_rumah": id_rumah,
            "id_customer": id_customer,
            "alamat": "Online",
            "harga": 0,
            "diskon": 0
          },
          dataType: "JSON",
          success: function(resp) {

            //  $("#downloadPDF").attr("onclick", "").unbind("click");

            //    $("#downloadPDF a").click();
            // $("#downloadPDF a").remove();
            toastr.success(data.Info, 'Informasi', opsi_toastr);
            // $('#modalDownloadPDF').modal('hide');
            window.location.href = "<?= base_url('assets/dokumen/dokumen_gratis/') . $laporan_desain->laporan_desain ?>";






          }
        });


      },
      error: function(jqHR, texStatus, errorThrown) {}
    });
    // }
  });


  $("#setujuPO").click(function() {
    $("#notifikasiPO").hide();
    $("#disable-modal-pembelian").hide();
  });

  $("#downloadGratis").click(function() {
    var id_rumah = <?= $id_rumah ?>;
    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });

    $.ajax({
      url: "<?php echo base_url('api/getIsDownloadDokumen/') ?>" + id_customer + "/" + id_rumah,
      type: "POST",
      dataType: "JSON",
      success: function(data) {
        if (data != null) {
          window.location.href = "<?php echo base_url('profil/') ?>" + id_customer;
        } else if (data == null) {
          $.ajax({
            url: "<?php echo base_url('api/getCountDownloadDokumen/') ?>" + id_customer,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
              if (data == 3) {
                toastr.error('Anda telah mencapai maksimal download', 'Peringatan');
                // $("#modalMaxDownload").modal('show');
              } else if (data != 3) {
                $.ajax({
                  url: "<?php echo base_url('api/getDokumenRumahGratis/') ?>" + id_rumah,
                  type: "POST",
                  dataType: "JSON",
                  success: function(data) {
                    if (data != null) {
                      $("#modalTulisUlasan").modal('show');
                    } else if (data == null) {
                      $("#modalNotifikasiDownload").modal('show');
                    }
                  },
                  error: function(jqHR, texStatus, errorThrown) {}
                });
              }
            },
            error: function(jqHR, texStatus, errorThrown) {}
          });

        }
      },
      error: function(jqHR, texStatus, errorThrown) {}
    });


  });


  function simpanUlasan() {
    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });
    var id_rumah = <?= $id_rumah ?>;
    var rating = $('#selected_rating').val();
    var ulasan = $('#ulasan').val();


    $.ajax({
      url: "<?php echo base_url('dev/api/cekUlasanCustomer/') ?>" + id_rumah + "/" + id_customer,
      type: "POST",
      dataType: "JSON",
      success: function(data) {
        if (data == null) {
          $.ajax({
            url: "<?php echo base_url('dev/api/simpanUlasan') ?>",
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
              $('#modalTulisUlasan').modal('hide');
              $('.modal-backdrop').remove();
              $('#modalDownloadPDF').modal('show');

              //window.location.href = "<?php echo base_url('detail/') ?>"+id_rumah;
            },
            error: function(jqHR, texStatus, errorThrown) {}
          });
        } else if (data != null) {
          $.ajax({
            url: "<?php echo base_url('dev/api/ubahUlasan') ?>",
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
              $('#modalTulisUlasan').modal('hide');
              $('.modal-backdrop').remove();
              $('#modalDownloadPDF').modal('show');
              //window.location.href = "<?php echo base_url('detail/') ?>"+id_rumah;
            },
            error: function(jqHR, texStatus, errorThrown) {}
          });
        }
      },
      error: function(jqHR, texStatus, errorThrown) {}
    });




    //	toastr.success(data.Info, 'Informasi', opsi_toastr);
    //$('#modalTulisUlasan').modal('hide');

  }

















  (function() {

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




    $('#menu-paket a').addClass('active');
    $('nav.navbar.navbar-default.navbar-fixed').removeClass('no-background');

    if (Cookies.get('id_pengguna', {
        domain: 'rumahtinggal.id'
      }) != null) {

    }



    sessionStorage.removeItem('paket');
    sessionStorage.removeItem('id_order');
  })();

  $(window).load(function() {
    $(".paket2.hvr-grow").mouseover();
  });

  function isMobile() {
    var check = false;
    (function(a) {
      if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
  };

  $('.btn-hubungi-kami').on('click', function() {
    let text = `Halo Tim RumahTinggal.id,\nSaya ingin modifikasi paket desain *<?= $nama_rumah ?>*.\nApakah saya bisa mendapatkan informasi lebih lanjut?\nTerima kasih`;
    let phone = '628112636228';
    let message = encodeURIComponent(text);

    let api_wa;
    if (isMobile() == true) api_wa = "whatsapp://send";
    else api_wa = "https://api.whatsapp.com/send";
    let url = api_wa + '?phone=' + phone + '&text=' + message;
    window.open(url, '_blank');
  });

  function checkProfil() {
    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });
    $('#id_lengkapi_profil').val(id_customer);
    $.ajax({
      url: "<?php echo base_url() ?>dev/api/getNotifSubscribe/" + id_customer,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        if (data == null) {
          $("#notifikasiPO").modal('show');
          $("#disable-modal-pembelian").modal('show');
          $('#modalOrder').modal('show');
        } else if (data.no_wa == null || data.no_wa == "") {
          $("#notifikasiPO").modal('hide');
          // $("#notifikasiPO").show();
          $("#disable-modal-pembelian").modal('hide');
          $('#modalOrder').modal('hide');
          $('#modalLengkapiProfil').modal('show');
        }
      }
    })
  }

  $('#lengkapiProfil').on('click', function() {
    var alamat = $('#alamat_profil').val();
    $.ajax({
      url: "<?php echo base_url() ?>api/ubahCustomer",
      type: "POST",
      data: $('#ubahCustomer :input').serialize(),
      dataType: "JSON",
      success: function(data) {
        $('#modalLengkapiProfil').modal('hide');
        $("#notifikasiPO").modal('show');
        $("#disable-modal-pembelian").modal('show');
        $('#modalOrder').modal('show');
        $('#alamat_pengiriman').val(alamat);

        toastr.success(data.Info, 'Informasi', opsi_toastr);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $('#btn-simpan').html("<strong><i class='fa fa-check'></i> SIMPAN</strong>");
      }
    });
  })

  function checkoutPaket(paket, id_rumah) {
    $('#textarea_alamat').addClass('hide');
    //  window.location.href = "<?= base_url('dev/checkout/') ?>"+paket+"/"+id_rumah;
    //  sessionStorage.setItem('paket', paket);
    // $("#notifikasiPO").show();
    // $("#disable-modal-pembelian").show();
    checkProfil();
    $.ajax({
      url: "<?= base_url('dev/checkout/') ?>" + paket + "/" + id_rumah,
      type: "POST",
      dataType: "JSON",
      success: function(data) {


        $('#sub-total').text(data.harga);
        $('#ppn').text(data.ppn);
        $('#total').text(data.total);
        $('#alamat_pengiriman').val(data.alamat);
        // $('#modalOrder').modal('show');
        //$('#modalOrder').modal('toggle');
        //$('#pop_up_website_coba').modal('show');
        //$('#modalOrder').modal('hide');
      },
      error: function(jqXHR, textStatus, errorThrown) {
        toastr.error('Terjadi masalah saat pendaftaran pengguna.', 'Kesalahan', opsi_toastr);
      }
    });
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
        domain: 'rumahtinggal.id'
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
                      domain: 'rumahtinggal.id'
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






  function simpanPembayaran(result) {
    /* let jumlah_akun = $('#jumlah_akun').val();
     let durasi_bulan = $('#durasi').val();
     let harga_paket = $('#harga_paket').val();
     let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';*/
    let order = JSON.parse(result);
    var paket = sessionStorage.getItem('paket');
    // let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';
    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });
    var id_rumah = <?= $id_rumah ?>;
    var alamat = $('#alamat_pengiriman').val();
    let pros_diskon = $('#pros_diskon').text();
    //let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.',''));
    let harga = parseInt($('#sub-total').text().replaceAll('.', ''));

    $.ajax({
      url: "<?= base_url() ?>dev/api/simpanPembayaran",
      type: "POST",
      dataType: "JSON",
      data: {
        "kategori": '1',
        "no_invoice": order.order_id,
        "paket": paket,
        "id_customer": id_customer,
        "id_rumah": id_rumah,
        "alamat": alamat,
        "diskon": pros_diskon,
        "harga": harga,
        "result_data": result
      },
      success: function(data) {
        sessionStorage.setItem('id_order', order.order_id);
        window.location.href = "<?php echo base_url() ?>invoice/" + order.order_id;
      }
    });
  }










  $('#lanjutBayar').on('click', function() {
    // alert('halloo');
    //  $('modalNotifikasi').modal('show');
    var id_customer = Cookies.get('id_customer', {
      domain: 'rumahtinggal.id'
    });
    if (id_customer != null) {


      if ($.trim($("#alamat_pengiriman").val())) {
        $('#link_alamat').css('display', 'none');

        $.ajax({
          url: "<?php echo base_url() ?>dev/api/getNotifSubscribe/" + id_customer,
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            if (data != null) {
              $('#ModalSubscribe').on('shown.bs.modal', function(e) {
                $('#nama_subscribe').val(data.nama_customer);
                $('#no_wa_subscribe').val(data.no_wa);
                $(this).off('shown.bs.modal');
              }).modal('show');
            } else {

              var paket = sessionStorage.getItem('paket');
              let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';
              var id_customer = Cookies.get('id_customer', {
                domain: 'rumahtinggal.id'
              });
              var id_rumah = <?= $id_rumah ?>;
              var alamat = $('#alamat_pengiriman').val();
              let pros_diskon = $('#pros_diskon').text();
              let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.', ''));
              let harga = parseInt($('#sub-total').text().replaceAll('.', ''));
              let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';
              let ppn = parseInt($('#ppn').text().replaceAll('.', ''));
              let total = parseInt($('#total').text().replaceAll('.', ''));

              /* let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';
                     // let jumlah_akun = parseInt($('#jumlah_akun').val());
                    //  let durasi_bulan = $('#durasi').val();
                      //let harga_paket = parseInt($('#sub-total').text()) * jumlah_akun;

                      let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.',''));
                      let harga_paket = parseInt($('#sub-total').text().replaceAll('.',''));
                      let ppn = parseInt($('#ppn').text().replaceAll('.',''));
                      let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';
                      let total = parseInt($('#total').text().replaceAll('.',''));*/

              $.ajax({
                type: "get",
                url: "<?php echo base_url() ?>dev/api/getPenggunaBayar/" + id_customer,
                dataType: "JSON",
                success: function(data) {
                  if (data != null) {
                    $.ajax({
                      url: "<?php echo base_url() ?>dev/api/bayarTagihan",
                      cache: false,
                      type: "POST",
                      data: {
                        "nama_pengguna": data.nama_customer,
                        "email": data.email,
                        "no_wa": data.no_wa,
                        "alamat": alamat,
                        "paket": paket,
                        "nama_paket": nama_paket,
                        //      "jumlah_akun": jumlah_akun,
                        //     "durasi_bulan": durasi_bulan,
                        "harga": harga,
                        "ppn": ppn,
                        "diskon": diskon_promo,
                        "kode_promo": kode_promo.toUpperCase(),
                        "total": total
                      },
                      dataType: "JSON",
                      success: function(data) {
                        snap.pay(data, {
                          onSuccess: function(result) {
                            simpanPembayaran(JSON.stringify(result));
                          },
                          onPending: function(result) {
                            simpanPembayaran(JSON.stringify(result));
                          },
                          onError: function(result) {
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
          error: function(jqXHR, textStatus, errorThrown) {
            toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
          }
        });



      } else if (!$.trim($("#alamat_pengiriman").val())) {
        $.trim($('#alamat_pengiriman').val());
        toastr.warning('Jangan lupa isi alamat pengiriman Anda', 'Kesalahan');
        $('#link_alamat').css('display', 'block');
      }



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


  function cekPromo() {
    $('#diskon_promo').remove();

    let kode_promo = $('#kode_promo').val();
    if (kode_promo != '') {
      $.ajax({
        url: "<?= $this->config->item('url_server') ?>api/cekPromo/" + kode_promo,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          let total_harga = parseInt($('#total').text().replaceAll('.', ''));
          // alert(total_harga);
          if (data != null) {
            if (data.status == '1') {
              if (data.kuota > 0) {
                var pros_diskon = data.diskon;
                var diskon_promo = total_harga * parseFloat(pros_diskon / 100);
                var diskon_promo_decimal = number_format(diskon_promo, 0, ",", ".");
                $('.promo').append('<div id="diskon_promo"><input type="hidden" id="kode_promo_berhasil" value="' + kode_promo + '"><i class="fa fa-info-circle"></i><strong>Selamat!</strong> Kode promo berhasil digunakan<div style="margin-left: 18px;margin-bottom: 3px;">Anda mendapat potongan sebesar <strong>Rp ' + number_format(diskon_promo, 0, ",", ".") + '</strong></div></div>');
                $('#diskon_promo_persen').text(number_format(diskon_promo, 0, ",", "."));
                $('#pros_diskon').text(pros_diskon);
              } else {
                pros_diskon = diskon_promo = 0;
                $('#diskon_promo_persen').text(0);
                $('#pros_diskon').text(0);
                $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Maaf, kuota promo telah habis</div>');
              }
            } else if (data.status == '0') {
              pros_diskon = diskon_promo = 0;
              $('#diskon_promo_persen').text(0);
              $('#pros_diskon').text(0);
              $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Periode promo belum dimulai</div>');
            } else {
              pros_diskon = diskon_promo = 0;
              $('#diskon_promo_persen').text(0);
              $('#pros_diskon').text(0);
              $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Periode promo telah berakhir</div>');
            }
          } else {
            pros_diskon = diskon_promo = 0;
            $('#diskon_promo_persen').text(0);
            $('#pros_diskon').text(0);
            $('.promo').append('<div id="diskon_promo" style="color: #ea0905"><i class="fa fa-info-circle" style="color: #ea0905;"></i>Kode promo tidak ditemukan</div>');
          }

          $('#total').text(number_format(total_harga - parseInt(diskon_promo_decimal.replaceAll('.', '')), 0, ",", "."));
        }
      });
    }
  }

  $('#kode_promo').on('input', function(e) {
    if ($(this).val() == '') {
      $('#btn-kode-promo').attr('disabled', 'disabled');
      $('#diskon_promo').remove();
      pros_diskon = diskon_promo = 0;
      $('#diskon_promo_persen').text(0);

      let total_harga = parseInt($('#total_harga').val());
      $('#total').text(number_format(total_harga, 0, ",", "."));
    } else $('#btn-kode-promo').removeAttr('disabled');
  }).keypress(function(e) {
    if (e.which == 13) {
      $('#diskon_promo').remove();
      $('#btn-kode-promo').click();
    }
  });
</script>