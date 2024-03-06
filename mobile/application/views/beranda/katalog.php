<head> <meta id="myViewport" name="viewport" content="width=360"></head>

<link href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet"/>
<link href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet"/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
 <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
<script src="https://rawgit.com/kenwheeler/slick/master/slick/slick.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">


<style>

  .product-grid .product-detail{
    display: none !important;
  }
  .product-grid:hover .product-detail {
    display: block !important;
  }
  .product-grid {
    height: unset;
  }
  
 .list-produk-promo .grid:hover {
    height: 323px !important;
  }
  .list-produk-promo .grid {
    height: unset !important;
  }
  
#owl-carousel-banner.owl-theme .owl-dots{
position: absolute;
top: 209px;
left: 15px;
}

#owl-carousel-banner.owl-theme .owl-dots .owl-dot span {
    width: 8px;
    height: 8px;
    background: #E8E8E854;
}

#owl-carousel-banner.owl-theme .owl-dots .owl-dot.active span, #owl-carousel-banner.owl-theme .owl-dots .owl-dot:hover span {
    background: #fff;
}


#owl-carousel-rule.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #026CB6;
    color: #fff;
}

#owl-carousel-rule.owl-theme .owl-dots .owl-dot span {
    width: 22px;
    height: 22px;

    color: #026cb6;
    background: #fff;
}
#owl-carousel-rule.owl-theme .owl-dots {
   margin-top: -15px;
}

#owl-carousel-promo.owl-theme .owl-dots, #owl-carousel-favorit.owl-theme .owl-dots,#owl-carousel-artikel.owl-theme .owl-dots {
   display: none;
}






.row{
    width: 360px;
}
#gallery .flickity-viewport .flickity-slider .gallery-cell{
    padding-left: 0 !important;
    margin: 0 !important;
}





.slick-dots .slick-active {
    background: #026cb6;
    color: #fff;
}

#header.scrolled {
    background-color: #fff !important;
    /*transition: background-color 500ms linear;*/
    /*margin-top: 10px;*/
    -webkit-transition: background-color 1000ms linear;
    -ms-transition: background-color 1000ms linear;
    transition: background-color 1000ms linear;
    position: fixed;
}

.barr{
    color: #026cb6 !important;
}


.slick-dots li{
    background: #fff;
border-radius: 22px;
width: 25px;
height: 25px;
line-height: 25px;
color: #026CB6;
}

.slick-dots li:hover{
    background: #026CB6;
    color: #fff;
}
/*.cara-kerja-mo .slider-mo .frst{
  background: #3a8999;
}
.cara-kerja-mo .slider-mo .scnd{
  background: #e84a69;
}
.cara-kerja-mo .slider-mo .thrd{
  background: #980505;
}
.cara-kerja-mo .slider-mo .frth{
  background: #094602;
}*/
.slider-item {
  /*border: 5px solid #333;*/
  /*background: #ccc;*/
  height: 200px;
  font-size: 72px;
  text-align: center;
  line-height: 200px;
}
/* Slider arrows */
.slick-arrow {
  z-index: 9;
}
.slick-prev {
  left: 0;
}
.slick-next {
  right: 0;
}
/* END: Slider arrows */




.product-grid .product-image .pic-1 {
    border-radius: 3px;
}

.product-grid .product-image .pic-2 {
    border-radius: 3px;
}

.product-grid .product-content{
    background: transparent;
}
.product-grid .product-content {
    box-shadow: none;
}
.p0.grid:hover .product-content {
    background: #fff;
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

#form .previous-step, .next-step {
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

.form, .previous-step {
    background: #616161;
}

.form, .next-step {
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

.fielmo{
    width: 200px;
    /*margin-bottom: 20px;*/
    margin: 0 auto;
}



@media only screen and (min-device-width: 360px) {

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
    box-shadow: 0 2px 2px rgba(0,0,0,.3);
}
  
.ribbon-promo:before, .ribbon-promo:after {
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




.katalog-produk .product-grid .title {
    height: 38px !important;
    /*transform: scale(0.5);*/
    font-size: 11px !important;
}
.product-info .suplier, .product-info .badge {
    font-size: 9px !important;
}
.product-price .price, .product-price .price span {
    font-size: 11px !important;
}
.product-grid .product-detail .spesification {
 
    font-size: 11px !important;
}
.btn.btn-detail.produk, .btn.btn-beli {
    font-size: 10px !important;
    padding: 2px 8px !important;
}
.list-produk .grid {
    width: 50% !important;
}
.list-produk-promo .owl-stage-outer .owl-stage .owl-item .product-grid .product-content .product-detail .product-statistic .statistic .btn-detail{
    padding: 1px 5px !important;
    font-size: 12px !important;
}
.list-produk-favorit .owl-stage-outer .owl-stage .owl-item .product-grid .product-content .product-detail .product-statistic .statistic .btn-detail{
    padding: 1px 5px !important;
    font-size: 12px !important;
}


.list-produk-promo .owl-stage-outer .owl-stage .owl-item .product-grid .product-content {
   background: #fff;
     border-radius: 0px 0px 5px 5px;
}
.list-produk-favorit .owl-stage-outer .owl-stage .owl-item .product-grid .product-content {
    background: #fff;
    border-radius: 0px 0px 5px 5px;
}
.list-produk-promo .owl-stage-outer .owl-stage .owl-item .product-grid .product-image .image img{
  border-radius: 4px 4px 0px 0px;
}
.list-produk-favorit .owl-stage-outer .owl-stage .owl-item .product-grid .product-image .image img{
   border-radius: 4px 4px 0px 0px;
}



.product-grid .product-statistic .view .fa {
    font-size: 15px !important;
    padding-right: 2px;
    margin-top: 2px;
}
.product-grid .product-statistic .like .fa {
    font-size: 13px !important;
    padding-right: 2px;
    margin-top: 2px;
}
.product-grid .product-statistic .share .fa {
    font-size: 14px !important;
    padding-right: 2px;
    margin-top: 2px;
}
.product-grid .product-statistic .view {
    font-size: 9px !important;
   
}
.product-grid .product-statistic .like span.value {
    font-size: 9px !important;
   
}
/*.product-grid .product-statistic .share span.value {
    font-size: 11px !important;
   
}*/
.product-grid .product-statistic .view, .product-grid .product-statistic .like {
    color: #000;
    padding-left: 0px;
}



.gallery-cell {
  width: 100% !important;
  height: 400px !important;
  margin-right: 10px !important;
  background: transparent; !important;
  counter-increment: gallery-cell !important;
  top: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  border-radius: 20px;
}

/* cell number */
.gallery-cell:before {
  display: block !important;
  text-align: center !important;
  /*content: counter(gallery-cell) !important;*/
  line-height: 200px !important;
  font-size: 80px !important;
  color: white !important;
}


/* big buttons, no circle */
.flickity-prev-next-button {
  width: 100px;
  height: 100px;
  background: transparent;
}
/* arrow color */
.flickity-prev-next-button .arrow {
  fill: white;
}
.flickity-prev-next-button.no-svg {
  color: white;
}
.flickity-prev-next-button:hover {
  background: transparent;
}
/* hide disabled button */
.flickity-prev-next-button:disabled {
  display: none;
}


.gallery-cell {
  width: 100%; /* full width */
  height: 160px; /* height of carousel */
  margin-right: 10px;
}


    .product-grid .product-content{
        padding-bottom: 0px;
    }
    #nav-menu-container {
        display: initial !important;
        /*padding-right: 90px !important;*/
    }
    .pop-up-website{
        width: 300px !important;
    }
    .modal-dialog.animated.tada {
        width: auto !important;
    }
    .btn-pop-up{
        margin-top: -133px !important;
        font-size: 15px !important;
        margin-right: 125px;

    }
   /* #pop_up_website        padding-right: 83px !important;
    }*/
    #pop_up_website .close {
        top: 23px !important;
        right: 36px !important;
    }
    .artikel-mobile{
        padding: 0 5px !important;
    }
    .artikel-mobile img{
        height: 55%;
    }
    .artikel-mobile .product-grid .product-image {
        height: 108px !important;
    }
    .artikel-mobile .product-grid{
        height: 260px !important;
    }
    .artikel-mobile .publish{
        font-size: 10px !important;
    }
    .artikel-mobile .title{
        font-size: 10px !important;
    }
    .artikel-mobile .product-content .publish::before{
        font-size: 10px !important;
    }
    .artikel-mobile .product-content .title{
        height: 28px !important;
        font-size: 10px !important;
    }
    .artikel-mobile .product-content .content {
        height: 59px !important;
    }
    .artikel-mobile .product-content .content p{
        font-size: 11px !important;
    }
    .artikel-mobile .product-content .link {
        font-size: 12px !important;
    }
    .artikel-mobile .product-content .link::after {
        font-size: 12px !important;
    }
    .list-produk-promo .product-grid .product-image{
        height: 133px !important;
    }
    .list-produk-promo .product-grid .title {
        font-size: 11px !important;
    }
    .list-produk-promo .product-grid .arsitek{
        font-size: 10px !important;
        width: 53% !important;
    }
    .list-produk-promo .product-grid .jstars::after{
        font-size: 8px !important;
    }
    .list-produk-promo .product-grid .product-detail p{
        font-size: 9px !important;
    }
    .list-produk-promo .btn-detail.promo {
        padding: 2px 8px !important;
    }
    .list-produk-promo .grid {
        /*height: 323px !important;060122*/
    }
    .list-produk-promo .product-grid .title{
        height: 15px !important;
    }
    /*.list-produk-promo .jstars .jstars-empty{
        font-size: 10px !important;
    }*/
    .list-produk-promo .jstars{
        margin-top: -6px !important;
    }
    /*.list-produk-promo .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }*/
     .list-produk-promo .product-grid .product-feature .feature img {
        width: 20px !important;
        height: 20px !important;
    }
    .list-produk-promo .product-grid .product-rating{
        /*display: initial;*/
    }
    .list-produk-promo .jstars .jstars-empty {
        font-size: 12px !important;
    }
    .list-produk-promo .jstars .jstars-empty .jstars-filled {
        font-size: 12px !important;
    }
    
    .list-produk-promo .product-grid .product-feature .feature span {
        font-size: 7px !important;
    }
    .list-produk-promo .product-grid {
        margin: 0 5px !important;
    }
    .list-produk-promo .product-grid .product-feature {
        padding: 4px 0 !important;
    }
    .product-slider{
        left: -3% !important;
        max-width: 100% !important;
        padding-right: 0px !important;
    }
    /*.list-produk-promo .grid { width: 110px !important; }*/
.list-produk-promo .product-grid .product-image:hover .list-produk-promo .grid{
    height: 323px;
}


   .list-produk-favorit .product-grid .product-image{
        height: 133px !important;
    }
    .list-produk-favorit .product-grid .title {
        font-size: 11px !important;
    }
    .list-produk-favorit .product-grid .arsitek{
        font-size: 10px !important;
        width: 53% !important;
    }
    .list-produk-favorit .product-grid .jstars::after{
        font-size: 9px !important;
    }
    .list-produk-favorit .product-grid .product-detail p{
        font-size: 9px !important;
    }
    .list-produk-favorit .btn-detail.favorit {
        padding: 2px 8px !important;
    }
    .list-produk-favorit .grid {
        height: 323px !important;
    }
    .list-produk-favorit .product-grid .title{
        height: 15px !important;
    }
    /*.list-produk-favorit .jstars .jstars-empty{
        font-size: 10px !important;
    }*/
    .list-produk-favorit .jstars{
        margin-top: -6px !important;
    }
    /*.list-produk-favorit .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }*/
     .list-produk-favorit .product-grid .product-feature .feature img {
        width: 20px !important;
        height: 20px !important;
    }
    .list-produk-favorit .product-grid .product-rating{
        /*display: initial;*/
    }
    .list-produk-favorit .jstars .jstars-empty {
        font-size: 12px !important;
    }
    .list-produk-favorit .jstars .jstars-empty .jstars-filled {
        font-size: 12px !important;
    }
    
    .list-produk-favorit .product-grid .product-feature .feature span {
        font-size: 7px !important;
    }
    .list-produk-favorit .product-grid {
        margin: 0 5px !important;
    }
    .list-produk-favorit .product-grid .product-feature {
        padding: 4px 0 !important;
    }
    /*.list-produk-favorit .grid { width: 110px !important; }*/


 .list-produk-popular .jstars .jstars-empty .jstars-filled {
        font-size: 10px !important;
    }

    .banner-slider {
        height: 189px !important;
        background-image: none !important;
        /*background: #026CB6;*/
    }
    .banner-slider.mobile-promo::before {
        font-weight: bolder;
        color: #FFF;
        content: "Desain Promo";
        margin-top: -30px;
        font-size: 15px;
        background: #166899;
        width: 360px;
        vertical-align: middle;
        line-height: 32px;
        padding-left: 4px;
        height: 32px;
    }

    .banner-slider.mobile-favorit::before {
        font-weight: bolder;
        color: #FFF;
        content: "Desain Favorit";
        margin-top: -30px;
        font-size: 15px;
        background: #166899;
        width: 360px;
        vertical-align: middle;
        line-height: 32px;
        padding-left: 4px;
        height: 32px;
    }



    .list-produk-popular .grid {
    width: 49% !important;
    }
    .list-produk-popular .product-grid {
        width: 100% !important;
    }
    .list-produk-popular .product-grid .product-image {
        height: 133px !important;
    }
    .list-produk-popular .product-grid .title {
        font-size: 11px !important;
    }
    .list-produk-popular .product-grid .arsitek{
        font-size: 10px !important;
    }
    .list-produk-popular .product-grid .product-feature .feature img {
        width: 20px !important;
        height: 20px !important;
    }
    .list-produk-popular .product-grid .jstars::after{
        font-size: 10px !important;
    }
    .list-produk-popular .product-grid .product-detail p{
        font-size: 9px !important;
    }
    .list-produk-popular .btn-detail.popular {
        padding: 2px 8px !important;
        font-size: 9px;
    }
    .list-produk-popular .grid {
        height: 196px !important;
    }
    .list-produk-popular .product-grid .title{
        height: 15px !important;
    }
    .list-produk-popular .jstars .jstars-empty{
        font-size: 10px !important;
    }
    .list-produk-popular .jstars{
        margin-top: -6px !important;
    }
    .list-produk-popular .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }
    .list-produk-popular .product-grid .product-feature {
        padding: 4px 0;
    }
    section.center h1{
        font-size: 21px !important;
    }
    section.center h3{
        font-size: 11px !important;
    }
    #frm-filter {
        width: 100% !important;
    }
    #pop_up_website {
        padding-right: 0px !important;
    }

    #gallery .flickity-viewport{
        height: 270px !important;
    }
    .gallery-cell{
        height: 100px !important;
    }
    #gallery .flickity-viewport .flickity-slider .gallery-cell img{
        height: 235px !important;
    }
    .flickity-prev-next-button{
        display: none ;
    }

}





/*.product-slider {
    left: 0.5% !important;
    max-width: 99% !important;
    margin-top: 16px;
   
}
.banner-slider{
    background-image: none;
    background: #026CB6 !important;
}
.list-produk-popular .product-grid {
    margin: 0;
    padding: 4px;
    width: 100%;
}
.list-produk-popular .grid {
    width: 33%;
   
}
*/
    /*#nav-menu-container {
        display: initial !important;
        /padding-right: 90px !important;/
    }*/
    /*.pop-up-website{
        width: 300px !important;
    }*/
    /*.modal-dialog.animated.tada {
        width: auto !important;
    }*/
    /*.btn-pop-up{
        margin-top: -120px !important;
        font-size: 15px !important;

    }*/
   /* #pop_up_website        padding-right: 83px !important;
    }*/
    /*#pop_up_website .close {
        top: 23px !important;
        right: 36px !important;
    }*/
    /*.artikel-mobile{
        padding: 0 5px !important;
    }
    .artikel-mobile img{
        height: 55%;
    }
    .artikel-mobile .product-grid .product-image {
        height: 108px !important;
    }
    .artikel-mobile .product-grid{
        height: 260px !important;
    }
    .artikel-mobile .publish{
        font-size: 10px !important;
    }
    .artikel-mobile .title{
        font-size: 10px !important;
    }
    .artikel-mobile .product-content .publish::before{
        font-size: 10px !important;
    }
    .artikel-mobile .product-content .title{
        height: 28px !important;
        font-size: 10px !important;
    }
    .artikel-mobile .product-content .content {
        height: 59px !important;
    }
    .artikel-mobile .product-content .content p{
        font-size: 11px !important;
    }
    .artikel-mobile .product-content .link {
        font-size: 12px !important;
    }
    .artikel-mobile .product-content .link::after {
        font-size: 12px !important;
    }*/
    /*.list-produk-promo .product-grid .product-image{
        height: 85px !important;
    }
    .list-produk-promo .product-grid .title {
        font-size: 11px !important;
    }
    .list-produk-promo .product-grid .arsitek{
        font-size: 10px !important;
        width: 100% !important;
    }
    .list-produk-promo .product-grid .jstars::after{
        font-size: 9px !important;
    }
    .list-produk-promo .product-grid .product-detail p{
        font-size: 9px !important;
    }
    .list-produk-promo .btn-detail.promo {
        padding: 2px 8px !important;
    }
    .list-produk-promo .grid {
        height: 268px !important;
    }
    .list-produk-promo .product-grid .title{
        height: 16px !important;
    }
    /.list-produk-promo .jstars .jstars-empty{
        font-size: 10px !important;
    }/
    .list-produk-promo .jstars{
        margin-top: -6px !important;
    }
    .list-produk-promo .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }
     .list-produk-promo .product-grid .product-feature .feature img {
        width: 12px !important;
        height: 12px !important;
    }
    .list-produk-promo .product-grid .product-rating{
        display: initial;
    }
    .list-produk-promo .jstars .jstars-empty {
        font-size: 12px !important;
    }
    .list-produk-promo .jstars .jstars-empty .jstars-filled {
        font-size: 12px !important;
    }
    
    .list-produk-promo .product-grid .product-feature .feature span {
        font-size: 6px !important;
    }
    .list-produk-promo .product-grid {
        margin: 0 5px !important;
    }
    .list-produk-promo .product-grid .product-feature {
        padding: 4px 0 !important;
    }
    .product-slider{
        left: -3% !important;
        max-width: 100% !important;
        padding-right: 0px !important;
    }
    .list-produk-promo .grid { width: 110px !important; }*/
/*.product-slider{
        left: 0% !important;
        max-width: 100% !important;
        padding-right: 0px !important;
    }


   .list-produk-favorit .product-grid .product-image{
        height: 85px !important;
    }
    .list-produk-favorit .product-grid .title {
        font-size: 11px !important;
    }
    .list-produk-favorit .product-grid .arsitek{
        font-size: 10px !important;
        width: 100% !important;
    }
    .list-produk-favorit .product-grid .jstars::after{
        font-size: 9px !important;
    }
    .list-produk-favorit .product-grid .product-detail p{
        font-size: 9px !important;
    }
    .list-produk-favorit .btn-detail.favorit {
        padding: 2px 8px !important;
    }
    .list-produk-favorit .grid {
        height: 268px !important;
    }
    .list-produk-favorit .product-grid .title{
        height: 16px !important;
    }
    /.list-produk-favorit .jstars .jstars-empty{
        font-size: 10px !important;
    }/
    .list-produk-favorit .jstars{
        margin-top: -6px !important;
    }
    /.list-produk-favorit .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }/
     .list-produk-favorit .product-grid .product-feature .feature img {
        width: 12px !important;
        height: 12px !important;
    }
    .list-produk-favorit .product-grid .product-rating{
        display: initial;
    }
    .list-produk-favorit .jstars .jstars-empty {
        font-size: 12px !important;
    }
    .list-produk-favorit .jstars .jstars-empty .jstars-filled {
        font-size: 12px !important;
    }
    
    .list-produk-favorit .product-grid .product-feature .feature span {
        font-size: 6px !important;
    }
    .list-produk-favorit .product-grid {
        margin: 0 5px !important;
    }
    .list-produk-favorit .product-grid .product-feature {
        padding: 4px 0 !important;
    }
    .list-produk-favorit .grid { width: 110px !important; }



    .banner-slider {
        height: 215px !important;
        background-image: none !important;
        background: #026CB6;
    }
    .banner-slider.mobile-promo::before {
        font-weight: bolder;
        color: #026CB6;
        content: "Desain Promo";
        margin-top: -30px;
        font-size: 15px;
    }

    .banner-slider.mobile-favorit::before {
        font-weight: bolder;
        color: #026CB6;
        content: "Desain Favorit";
        margin-top: -30px;
        font-size: 15px;
    }



    .list-produk-popular .grid {
    width: 49% !important;
    }
    .list-produk-popular .product-grid {
        width: 100% !important;
    }
    .list-produk-popular .product-grid .product-image {
        height: 133px !important;
    }
    .list-produk-popular .product-grid .title {
        font-size: 11px !important;
    }
    .list-produk-popular .product-grid .arsitek{
        font-size: 10px !important;
    }
    .list-produk-popular .product-grid .product-feature .feature img {
        width: 20px !important;
        height: 20px !important;
    }
    .list-produk-popular .product-grid .jstars::after{
        font-size: 10px !important;
    }
    .list-produk-popular .product-grid .product-detail p{
        font-size: 9px !important;
    }
    .list-produk-popular .btn-detail.popular {
        padding: 2px 8px !important;
    }
    .list-produk-popular .grid {
        height: 241px !important;
    }
    .list-produk-popular .product-grid .title{
        height: 16px !important;
    }
    .list-produk-popular .jstars .jstars-empty{
        font-size: 10px !important;
    }
    .list-produk-popular .jstars{
        margin-top: -6px !important;
    }
    .list-produk-popular .product-grid .product-feature .feature span {
        font-size: 10px !important;
    }
    .list-produk-popular .product-grid .product-feature {
        padding: 4px 0;
    }
    section.center h1{
        font-size: 21px !important;
    }
    section.center h3{
        font-size: 11px !important;
    }
    #frm-filter {
        width: 100% !important;
    }
    #pop_up_website {
        padding-right: 0px !important;
    }

    #gallery .flickity-viewport{
        height: 125px !important;
    }
    .gallery-cell{
        height: 100px !important;
    }
    #gallery .flickity-viewport .flickity-slider .gallery-cell img{
        height: 100px !important;
    }
    .flickity-prev-next-button{
        display: none ;
    }



*/






#pop_up_website .modal-dialog {
    max-width: 640px;
    margin: 130px auto;
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
    .list-produk-promo .grid, .list-produk-favorit .grid { width: 255px !important; }
    
    .list-produk-popular .grid { width: 255.2px !important; }
  
    .list-produk .grid { width: 245px !important; }
  
    .list-artikel .grid { width: 375px !important; }
  
    .product-grid .suplier { width: 70% !important; }
  
    #btn-lihat-koleksi { left: 64.5% !important; }
  
    .slide-brand { width: 175px !important; }
  
    .sec-category { max-width: 17% !important; }
  
    .sec-product {
        max-width: 83% !important;
        flex: 0 0 83% !important;
    }
}  
  
.list-produk-promo .grid, .list-produk-favorit .grid { height: 395px; }

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
  
.katalog-produk .form-control:focus { box-shadow: none; }

.katalog-produk .form-control::placeholder {
    font-size: 0.95rem;
    color: #aaa;
}
   
.katalog-produk .result {
    background: #fff;
    padding: 15px;
}
  
.list-category {
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.1);
}
  
.list-category.merk { margin-top: 15px; }

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
  
.list-category.merk h5::before { content: "\f02c"; }

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

.list-category .body li:not(:last-child) { border-bottom: 1px solid rgba(0, 0, 0, 0.1); }

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
    0% { height: 0;width: 0; }
    25% { height: 0;width: 8px; }
    50% { height: 20px;width: 8px; }
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
  
.checkbox input { display: none; }
  
.checkbox input:checked + span:after {
    -webkit-animation: check .8s;
    -moz-animation: check .8s;
    -o-animation: check .8s;
    animation: check .8s;
}
  
.checkbox input:checked + .primary:after { border-color: #026CB6; }
  
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
  
.testimonial { text-align: center; }
  
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
  
.testimonial .review .title small{
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

/*.gallery-cell {
    width: 66%;
    height: 300px;
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
}*/

.flickity-viewport {
    overflow: hidden;
    position: relative;
    height: 330px !important;
}

.flickity-prev-next-button .arrow { fill: #fff !important; }
  
.flickity-prev-next-button:hover { background: #026CB6 !important; }
  
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
    box-shadow: 0 2px 2px rgba(0,0,0,.3);
}
  
.ribbon-promo:before, .ribbon-promo:after {
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
</style>

<!-- <section class="offered-area section-gap" id="offered" style="margin-top: 2em;, "wrapAround": true "autoPlay": 5000"> -->
<section style="height: 240px;">
<div class="ph-item ph-item-banner" style="position: absolute;z-index: 10;width: 360px;border:none;height: 240px;background: linear-gradient( #e9ebf5 275px, #fff 200px);margin: 0;">
    <div style="width: 360px;padding: 0 ;margin-bottom: 6px;">
        <div style="width: 360px;" class="ph-row mt-4">
            <div style="height:41px;min-width: 247px;border-radius: 8px;" class="ph-col-8 big"></div>
            <div class="ph-col-2 empty"></div>
            <div class="ph-col-10" style="height: 18px;margin-left: 10px;max-width: 290px;"></div>
            <div class="ph-col-2 empty"></div>
            <div class="ph-col-6" style="height: 13px;margin-left: 10px;min-width: 186px;margin-top: 3px;"></div>
            <div class="ph-col-4 empty"></div>
            <div class="ph-col-6" style="height: 13px;margin-left: 10px;min-width: 186px;margin-top: 2px;"></div>
            <div class="ph-col-4 empty"></div>
            <div class="ph-col-6" style="height: 27px;margin-left: 10px;max-width: 100px;margin-top: 13px;border-radius: 3px;"></div><div class="ph-col-6 empty"></div>
        </div>
    </div>
     <div style="display: block;padding: 0;margin-left: 3px;margin-top: 10px;" class="empty"><div class="ph-avatar" style="min-width: 0px;height: 10px;width: 10px;float: left;margin: 3px;"></div><div class="ph-avatar" style="min-width: 0px;height: 10px;width: 10px;float: left;margin: 3px;"></div><div class="ph-avatar" style="min-width: 0px;height: 10px;width: 10px;float: left;margin: 3px;"></div><div class="ph-avatar" style="min-width: 0px;height: 10px;width: 10px;float: left;margin: 3px;"></div><div class="ph-avatar" style="min-width: 0px;height: 10px;width: 10px;float: left;margin: 3px;"></div></div>
</div>

<div class="owl-carousel owl-theme" id="owl-carousel-banner"  style="margin-top: -15px;width: 360px;">
    <div class="item"><img src="<?= base_url('assets/img/dev/B-03.jpg') ?>" class="d-block w-100" style="height: 240px;" />
         <button class="btn btn-danger text-white ml-4" id="cari-desain-mo" onclick="assessment()" style="padding: 2px 4px; margin-left: 0px;background: #f00;border-color: #f00; margin-top: 0px;font-size: 13px;position: absolute;top: 177px;">Mulai Sekarang</button>
    </div>
 
    <div class="item"><img src="<?= base_url('assets/img/banner/new/banner_lite_premium_mobile.png') ?>" class="d-block w-100" style="height: 240px;" /></div>
    <div class="item"><img src="<?= base_url('assets/img/banner/new/banner_tips_rumah_usia_muda_mobile.png') ?>" class="d-block w-100" style="height: 240px;" /></div>
    <div class="item"><img src="<?= base_url('assets/img/banner/new/banner_jangan_bangun_rumah_mobile.png') ?>" class="d-block w-100" style="height: 240px;" /></div>
</div>
</section>



<div class="container mt-2 gallery-dev">
   
</div>


<div class="container mt-2" style="height: 390px;">

<div class="ph-item ph-item-banner" style="position: absolute;z-index: 10;width: 360px;border:none;height: 348px;background: linear-gradient( #e9ebf500 275px, #fff0 200px);margin: 0;padding: 0;margin-left: -15px;">
    <div style="max-width: 360px;padding: 0 ;margin-bottom: 6px;">
        <div style="width: 360px;" class="ph-row mt-1">

            

            <div style="/*! margin: 0 auto; */height: 204px;margin-left: 31px;" class="empty ph-col-10 mt-4"><div class="ph-picture" style="height: 186px; width: 271px;margin: 10px auto;text-align: cone;"></div></div>

            <div class="ph-col-2 empty"></div>
            
            <div style="height: 20px;margin-top: 15px;margin-left: 47px;max-width: 148px;" class="ph-col-6"></div><div class="ph-col-2 empty"></div>            
            <div style="max-width: 331px;margin-top: 4px;height: 11px;margin-left: 15px;" class="ph-col-12"></div>
            <div style="max-width: 290px;margin-top: 4px;height: 12px;margin-left: 36px;" class="ph-col-12"></div><div class="ph-col-12 empty"></div><div style="margin-left: 92px;margin-top: 2px;" class="empty"><div class="ph-avatar" style="min-width: 0px;height: 25px;width: 25px;float: left;margin: 3px;"></div><div class="ph-avatar" style="min-width: 0px;height: 25px;width: 25px;float: left;margin: 3px;margin-left: 9px;"></div><div class="ph-avatar" style="min-width: 0px;height: 25px;width: 25px;float: left;margin: 3px;margin-left: 7px;"></div><div class="ph-avatar" style="min-width: 0px;height: 25px;width: 25px;float: left;margin: 3px;margin-left: 7px;"></div><div class="ph-avatar" style="min-width: 0px;height: 25px;width: 25px;float: left;margin: 3px;margin-left: 7px;"></div></div>
</div></div></div>




    <div class="row justify-content-center" style="width: 360px;">
        <div class="col-lg-6 text-center p-0 mb-2">
            <div class="px-0 pt-1 pb-0 mb-3">
                <div class="container cara-kerja-mo" style="padding-right: 5px !important;padding-left: 5px !important;">
                    <div style="text-align: center;color: #055993;font-size: 18px; font-weight: 600;line-height: 18px;"> 5 Cara Mudah Dapatkan Desain Murah </div>
                        <div class="owl-carousel owl-theme" id="owl-carousel-rule" style="margin-bottom: 75px;height: 290px;">
                            <div class="frst text-center item">
                                <div style="width: 100%;height: 200px;">
                                    <img class="fielmo mb-4 mt-4" style="width: 260px; height: 170px;" src="<?= base_url('assets/img/dev/CKerja_1.png') ?>">
                                </div>
                                <h4>Kunjungi Website</h4>
                                <p style="font-size: 12px;line-height: 16px;">Kunjungi Website <a href="<?= $this->config->item('url_mobile') ?>" style="color: #026CB6;text-decoration: none;">rumahtinggal.id</a>, Anda akan menemukan fitur Temukan Desain dan Lihat Koleksi pada halaman muka.</p>
                            </div>
                            <div class="scnd text-center item">
                                <div style="width: 100%;height: 200px;">
                                    <img class="fielmo mb-4 mt-4" style="width: 290px; height: 170px;margin-top: 25px;" src="<?= base_url('assets/img/dev/CKerja_2.png') ?>">
                                </div>
                                <h4>Assessment / Filter</h4>
                                <p style="font-size: 12px;line-height: 16px;">Untuk mendapatkan desain rumah tinggal sesuai kebutuhan, lakukan <a href="<?= $this->config->item('url_mobile') ?>assessment"  style="color: #026CB6;text-decoration: none;">assessment</a> atau filter desain pada halaman <a href="<?= $this->config->item('url_mobile') ?>desain"  style="color: #026CB6;text-decoration: none;">koleksi desain</a>
                                </p>
                            </div>
                            <div class="thrd text-center item"> 
                                <div style="width: 100%;height: 200px;">
                                    <img class="fielmo mb-4 mt-4" style="width: 190px; height: 170px;" src="<?= base_url('assets/img/dev/CKerja_3.png') ?>">
                                </div>
                                <h4>Pilih Desain</h4>
                                <p style="font-size: 12px;line-height: 16px;">Pilih desain keinginan. Pelajari lebih lanjut desain yang Anda pilih. Jika ada pertanyaan klik tombol <i class="fa fa-comments" style="font-size: 17px;color: #fff;background: #fab700;padding: 2px 3px 4px 3px;border-radius: 4px;"></i>
                                </p>
                            </div>
                            <div class="frth text-center item">
                                <div style="width: 100%;height: 200px;">
                                    <img class="fielmo mb-4 mt-4" style="width: 220px; height: 170px;" src="<?= base_url('assets/img/dev/CKerja_4.png') ?>">
                                </div>
                                <h4>Pembayaran</h4>
                                <p style="font-size: 12px;line-height: 16px;">Apabila Anda sudah yakin dengan pilihan desainnya, lakukan pembayaran, dengan cara klik tombol <span style="color: #fff;background: #e10505;padding: 3px 6px;font-weight: 400;border-radius: 5px;">Beli Desain</span>. Ikuti petunjuk pembayaran
                                </p>
                            </div>
                            <div class="frst text-center item">
                                <div style="width: 100%;height: 200px;">
                                    <img class="fielmo mb-4 mt-4" style="width: 290px; height: 170px;" src="<?= base_url('assets/img/dev/CKerja_5.png') ?>">
                                </div>
                                <h4 class="text text-center">
                                    <strong>Pengiriman Desain</strong>
                                </h4>
                                <p style="font-size: 12px;line-height: 16px;"><a href="<?= $this->config->item('url_mobile') ?>sampel_desain"  style="color: #026CB6;text-decoration: none;">Paket desain</a> akan dikirim dalam bentuk softfile ke Whatsapp dan email, serta hardfile (print out) ke alamat Anda
                                </p>
                            </div>
                        </div>
                        <span class="pagingInfo"></span>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="video-dev">
          
        </div>
    </div>
</div>






<!-- 

<section class="center" style="padding: 70px 0 40px 0;">
    <h1 style="font-weight: 400;">RumahTinggal.id adalah marketplace desain rumah idaman Anda</h1>
    <h3 style="font-weight: 300;">Dapatkan desain rumah tinggal terbaik dengan mudah, hemat, dan berkualitas</h3>
</section>
 -->
<!-- <section class="section-gap mb-20" id="offered">
    <div class="container p0">
        <div class="row">
            <div class="col-md-5" style="flex: 0 0 40%;padding-right: 3px;">
                <button class="btn btn-banner danger" id="btn-temukan" onclick="temukanDesain()" style="left: 46.5%;bottom: 25px;">Temukan Desain</button>
                <button class="btn btn-banner" id="btn-lihat-koleksi" onclick="lihatKoleksi()" style="left: 71.3%;bottom: 25px;">Lihat Koleksi</button>
                <img src="<?= base_url('assets/img/beranda/cari_desain.jpg') ?>" class="d-block w-100">     
            </div>
            <div class="col-md-2">
                <button class="btn btn-banner" id="btn-lihat-sampel" style="left: 15%;bottom: 25px;" onclick="lihatSampel()">Lihat Sampel</button>
                <img src="<?= base_url('assets/img/beranda/sampel_desain.jpg') ?>" class="d-block w-100" style="height: 100%;"> 
            </div>
            <div class="col-md-5" style="flex: 0 0 40%;padding-left: 3px;">
                <button class="btn btn-banner danger" id="btn-konsultasi" style="left: 44%;bottom: 25px;" onclick="konsultasiDesain()">Konsultasi Desain</button>
                <img src="<?= base_url('assets/img/beranda/konsultasi.jpg') ?>" class="d-block w-100"> 
            </div>
        </div>
    </div>
</section> -->

<section class="pb-4">
  <div class="container">
     <div class="row banner-slider mobile-promo" style="background-image: url(<?= base_url('assets/img/dev/BPromo.jpg') ?>);">


<div class="ph-item ph-item-banner" style="position: absolute;z-index: 10;width: 360px;border:none;height: 467px;background: linear-gradient( #e9ebf500 275px, #fff0 200px);margin: 0;padding: 0;">
    <div style="max-width: 360px;padding: 0 ;margin-bottom: 6px;">
        <div style="width: 360px;" class="ph-row mt-1">

<div style="/*! margin: 0 auto; */height: 158px;margin-left: 9px;" class="empty ph-col-12"><div class="ph-picture" style="height: 133px; width: 164px;/*! margin: 10px auto; */text-align: cone;float: left;margin-top: 6px;border-radius: 2px;"></div><div class="ph-picture" style="height: 133px; width: 164px;/*! margin: 10px auto; */text-align: cone;float: left;margin-left: 9px;margin-top: 6px;border-radius: 2px;"></div></div><div class="empty ph-col-12" style="/*! margin: 0 auto; */height: 158px;margin-left: 9px;margin-top: 70px;"><div class="ph-picture" style="height: 133px; width: 164px;/*! margin: 10px auto; */text-align: cone;float: left;margin-top: 6px;border-radius: 2px;"></div><div class="ph-picture" style="height: 133px; width: 164px;/*! margin: 10px auto; */text-align: cone;float: left;margin-left: 9px;margin-top: 6px;border-radius: 2px;"></div></div>
</div></div></div>





       <div id="lihat-promo-mo" style="position: absolute;margin-top: -26px;margin-left: 266px;color: #fff;text-decoration: underline;"><a href="javascript:void(0)" onclick="lihatPromo(7)" style="color: #fff;">lihat lainnya</a></div>
         <div class="col-md-9 product-slider" style="z-index: 3">
              <div id="owl-carousel-promo" class="list-produk-promo owl-carousel owl-theme">
              <?php
                  if ($produk_promo != '') {
                      foreach($produk_promo as $item) { ?>
                        <div class="col-md-12 p-0 grid item">
                            <div class="product-grid">
                                <div class="ribbon"><span class="ribbon-promo"><?= ''.$item->promo.'% Off' ?></span></div>
                                <div class="product-image desain">
                                    <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                        <img class="pic-1" src="<?= base_url('assets/img/desain/'.$item->foto) ?>">
                                        <img class="pic-2" src="<?= base_url('assets/img/desain/'.$item->foto) ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="title" title="<?= $item->nama_rumah ?>" onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>
                                    <div class="product-rating">
                                        <div class="arsitek" title="<?= $item->nama_arsitek ?>" onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?></div>
                                        <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold" data-size="17px"></div>
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
                                        <div class="product-feature product-feature-mo">
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


                                        <p class="lahan-minimal">Lahan minimal <span class="bold"><?= $item->lebar_lahan.' m x '.$item->panjang_lahan.' m' ?></span></p>
                                        <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal" data-tootik-conf="square"><?= $item->lantai == '1' ? "Rp".number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ( $item->lantai == '2' ? "Rp".number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp".number_format(5500000 * $item->luas_bangunan, 0, ",", ".") ); ?></span></p>
                                        <div class="product-statistic">
                                            <div class="statistic">
                                                <button class="btn btn-detail" onclick="detailRumah(<?= $item->id_rumah ?>)">Detail</a>
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
                                                      <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah.' '.$item->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <?php }} ?>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="pb-4 mt-15">
  <div class="container">
     <div class="row banner-slider mobile-favorit" style="background-image: url(<?= base_url('assets/img/dev/BFavorit.jpg') ?>);z-index: 3;">
        <div id="lihat-favorit-mo" style="position: absolute;margin-top: -26px;margin-left: 266px;color: #fff;text-decoration: underline;"><a href="javascript:void(0)" onclick="lihatFavorit(1)" style="color: #fff;">lihat lainnya</a></div>
         <div class="col-md-9 product-slider" style="z-index: 1">
              <div id="owl-carousel-favorit" class="list-produk-favorit owl-carousel owl-theme">
              <?php
                  if ($produk_favorit != '') {
                      foreach($produk_favorit as $item) { ?>
                        <div class="col-md-12 p-0 grid item">
                            <div class="product-grid">
                                <div class="product-image desain">
                                    <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                        <img class="pic-1" src="<?= base_url('assets/img/desain/'.$item->foto) ?>">
                                        <img class="pic-2" src="<?= base_url('assets/img/desain/'.$item->foto) ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="title" title="<?= $item->nama_rumah ?>" onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>
                                    <div class="product-rating">
                                        <div class="arsitek" title="<?= $item->nama_arsitek ?>" onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?></div>
                                        <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold" data-size="17px"></div>
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

                                        <div class="product-feature product-feature-mo">
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


                                        <p class="lahan-minimal">Lahan minimal <span class="bold"><?= $item->lebar_lahan.' m x '.$item->panjang_lahan.' m' ?></span></p>
                                        <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal" data-tootik-conf="square"><?= $item->lantai == '1' ? "Rp".number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ( $item->lantai == '2' ? "Rp".number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp".number_format(5500000 * $item->luas_bangunan, 0, ",", ".") ); ?></span></p>
                                        <div class="product-statistic">
                                            <div class="statistic">
                                                <button class="btn btn-detail" onclick="detailRumah(<?= $item->id_rumah ?>)">Detail</a>
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
                                                      <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah.' '.$item->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <?php }} ?>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="pb-4 mt-35">
  <div class="container p0">
      <div class="row ml-0">
          <div class="col-md-12">
              <center>
                  <h3 style="font-weight: 400;font-size: 28px;">Desain Terbaru</h3>
                  <div class="line-footer"></div>
              </center>
          </div>
          <div class="col-md-12" style="padding-left: 6px;">
              <div class="list-produk-popular">
              <?php
                  if ($produk_terbaru != '') {
                      // $produk_terbarus = $produk_terbaru->getAllItems(); 
                      // $p_terbaru =  array_slice($produk_terbarus, 0, 4); // get first three only
                      foreach($produk_terbaru as $item) { ?>
                        <div class="col-md-5 p0 grid">
                            <div class="product-grid">
                                <div class="product-image desain">
                                    <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                        <img class="pic-1" src="<?= base_url('assets/img/desain/'.$item->foto) ?>">
                                        <img class="pic-2" src="<?= base_url('assets/img/desain/'.$item->foto) ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="title" title="<?= $item->nama_rumah ?>" onclick="detailRumah(<?= $item->id_rumah ?>)"><?= $item->nama_rumah ?></div>
                                    <div class="product-rating">
                                        <div class="arsitek" title="<?= $item->nama_arsitek ?>" onclick="detailArsitek(<?= $item->id_arsitek ?>)"><?= $item->nama_arsitek ?></div>
                                        <div class="jstars" data-value="<?= $item->rating ?>" data-color="gold" data-size="17px"></div>
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

                                        <div class="product-feature product-feature-mo">
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

                                        <p class="lahan-minimal">Lahan minimal <span class="bold"><?= $item->lebar_lahan.' m x '.$item->panjang_lahan.' m' ?></span></p>
                                        <p>Biaya konstruksi <span class="bold" data-tootik="Estimasi awal" data-tootik-conf="square"><?= $item->lantai == '1' ? "Rp".number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ( $item->lantai == '2' ? "Rp".number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp".number_format(5500000 * $item->luas_bangunan, 0, ",", ".") ); ?></span></p>
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
                                                      <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F<?= $item->id_rumah.' '.$item->nama_rumah ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <?php }} ?>
              </div>
          </div>
      </div>
  </div>
</section>






<!-- <section class="pb-4" style="margin-top: 45px;" id="katalog-material-dev">
    <div class="container p0">
      <div class="row">
          <div class="col-md-12 pb-25">
              <center>
                  <h3 style="font-weight: 400;font-size: 28px;">Katalog Material</h3>
                  <!- <div class="line-footer mb-10"></div> ->
                   <a href="javascript:void(0)" onclick="material()" style="text-decoration: none;">Lihat lainnya</a>
              </center>
          </div>
          <div class="col-md-12">
              <div class="container p0 katalog-produk" style="width: 100%;">
                 <!-  <div class="row mb-4">
                      <div class="col-md-12" style="display: flex;justify-content: center;">
                          <form id="frm-filter" style="width: 45%;">
                              <input type="hidden" id="merk" name="merk">
                              <input type="hidden" id="id_kategori" name="id_kategori">
                              <input type="hidden" id="sort_by" name="sort_by" value="1">
                              <div class="p-1 bg-light rounded-pill shadow-sm">
                                  <div class="input-group">
                                    <input type="search" placeholder="Material apa yang Anda inginkan?" aria-describedby="btn-cari-material" class="form-control border-0 bg-light" id="nama_material" name="nama_produk" style="margin-left: 3px;">
                                    <div class="input-group-append">
                                      <button id="btn-cari-material" type="button" class="btn btn-link"><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div> -->
                  <!-- <div class="row mb-3">
                      <div class="col-md-12">
                          <div class="list-produk-merk">
                              <?php
                                if ($slide_merk != '') {
                                  foreach($slide_merk as $item) { ?>
                                      <div class="slide-brand" style="background: url(<?= $this->config->item('eid').'assets/img/merk/'.$item->logo ?>);background-size: 100% 100%;"></div>
                              <?php }} ?>
                          </div>
                      </div>
                  </div> ->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="result">
                              <div class="row">
                                  <!- <div class="col-md-3 sec-category" style="max-width: 21%;padding-right: 0;">
                                      <h5 style="font-weight: 400"><i class="fa fa-filter"></i> Tampilkan Berdasarkan</h5>
                                      <hr style="margin-top: 12px;">
                                      <div class="list-category">
                                        <div class="header">
                                          <h5>Kategori Material</h5>
                                        </div>
                                        <div class="body">
                                          <ul>
                                            <li data-id="0"><img class="icon" src="<?= $this->config->item('eid').'assets/img/icon/kategori/semua-kategori.png' ?>" />Semua Kategori</li>
                                            <?php
                                              if ($kategori != '') {
                                                foreach($kategori as $item){ ?>
                                                    <li data-id="<?= $item->id_kategori ?>"><img class="icon" src="<?= $this->config->item('eid').'assets/img/icon/kategori/'.$item->icon ?>" /><?= $item->kategori ?>
                                                        <?php if ($item->jumlah != '0') { ?>
                                                        <span class="pull-right"><span class="badge" style="vertical-align: sub;"><?= $item->jumlah ?></span></span>
                                                        <?php } ?>
                                                    </li>
                                            <?php }} ?>
                                          </ul>
                                        </div>
                                      </div>
                                      
                                      <!- <div class="list-category merk">
                                          <div class="header">
                                            <h5>Merk Material</h5>
                                          </div>
                                          <ul class="list-group checklist"></ul>
                                      </div> ->
                                  </div> ->

                                  <div class="col-md-12 sec-product" style="max-width: 100%;flex: 0 0 100%;">
                                    <!- <div class="row">
                                      <div class="col-md-6">
                                        <h5 style="font-weight: 300;font-size:15px;">Menampilkan <span id="jum_produk" style="font-weight: 400;"></span> material</h5>
                                      </div>
                                      
                                      <div class="col-sm-6 text-right">
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="padding: 2px 10px;font-weight: 300;font-size: 15px;margin-top: -6px;">
                                            Urutkan <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li onclick="setSort(1)">Produk Terbaru</li>
                                              <li onclick="setSort(2)">Produk Terlama</li>
                                              <li onclick="setSort(3)">Harga Termurah</li>
                                              <li onclick="setSort(4)">Harga Termahal</li>
                                              <li onclick="setSort(5)">Abjad A-Z</li>
                                              <li onclick="setSort(6)">Abjad Z-A</li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div> ->
                                    <hr style="margin-top: 7px;">
                                    
                                    <div class="list-produk" style="height: 275;"></div>
                                    <div class="spinner"><center><img src="<?= base_url('assets/gif/rt-loader.gif') ?>" style="padding: 2px;" width="35px" /></center></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
</section> -->

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
              <div class="owl-carousel owl-theme list-artikel" id="owl-carousel-artikel">
              <?php
                  if ($artikel != '') {
                      foreach($artikel as $item) {
                        $isi = substr($item->isi_artikel,0,200);
                        switch (date("m", strtotime($item->tgl_dibuat))) {
                          case 1: $bulan = 'Januari'; break;
                          case 2: $bulan = 'Februari'; break;
                          case 3: $bulan = 'Maret'; break;
                          case 4: $bulan = 'April'; break;
                          case 5: $bulan = 'Mei'; break;
                          case 6: $bulan = 'Juni'; break;
                          case 7: $bulan = 'Juli'; break;
                          case 8: $bulan = 'Agustus'; break;
                          case 9: $bulan = 'September'; break;
                          case 10: $bulan = 'Oktober'; break;
                          case 11: $bulan = 'November'; break;
                          case 12: $bulan = 'Desember'; break;
                        }
                        $publish = date("d", strtotime($item->tgl_dibuat)).' '.$bulan.' '.date("Y", strtotime($item->tgl_dibuat));
                      ?>
                        <div class="col-md-12 p-0 grid artikel-mobile item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="javascript:void(0)" class="image" onclick="detailArtikel(<?= $item->id_artikel ?>)">
                                        <img class="pic-1" src="<?= base_url('assets/img/artikel/'.$item->foto_cover) ?>">
                                        <img class="pic-2" src="<?= base_url('assets/img/artikel/'.$item->foto_cover) ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="publish"><?= $publish ?></div>
                                    <div class="title" title="<?= $item->judul_artikel ?>" onclick="detailArtikel(<?= $item->id_artikel ?>)"><?= $item->judul_artikel ?></div>
                                    <div class="content"><?= $isi ?></div>
                                    <a href="<?= base_url('detail-artikel/'.$item->id_artikel) ?>" class="link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
              <?php }
                    foreach($artikel as $item) {
                        $isi = substr($item->isi_artikel,0,200);
                        switch (date("m", strtotime($item->tgl_dibuat))) {
                          case 1: $bulan = 'Januari'; break;
                          case 2: $bulan = 'Februari'; break;
                          case 3: $bulan = 'Maret'; break;
                          case 4: $bulan = 'April'; break;
                          case 5: $bulan = 'Mei'; break;
                          case 6: $bulan = 'Juni'; break;
                          case 7: $bulan = 'Juli'; break;
                          case 8: $bulan = 'Agustus'; break;
                          case 9: $bulan = 'September'; break;
                          case 10: $bulan = 'Oktober'; break;
                          case 11: $bulan = 'November'; break;
                          case 12: $bulan = 'Desember'; break;
                        }
                        $publish = date("d", strtotime($item->tgl_dibuat)).' '.$bulan.' '.date("Y", strtotime($item->tgl_dibuat));
                      ?>
                        <div class="col-md-12 col-sm-6 p-0 grid artikel-mobile item">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="javascript:void(0)" class="image" onclick="detailArtikel(<?= $item->id_artikel ?>)">
                                        <img class="pic-1" src="<?= base_url('assets/img/artikel/'.$item->foto_cover) ?>">
                                        <img class="pic-2" src="<?= base_url('assets/img/artikel/'.$item->foto_cover) ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="publish"><?= $publish ?></div>
                                    <div class="title" title="<?= $item->judul_artikel ?>" onclick="detailArtikel(<?= $item->id_artikel ?>)"><?= $item->judul_artikel ?></div>
                                    <div class="content"><?= $isi ?></div>
                                    <a href="<?= base_url('detail_artikel/'.$item->id_artikel) ?>" class="link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
              <?php }} ?>
              </div>
              <center><button class="btn btn-detail mt-2" onclick="lihatArtikel()" style="padding: 5px 9px;">Lihat Semua</button></center>
          </div>
      </div>
  </div>
</section>
<!--
<section class="pb-4 mt-20">
  <div class="container p0">
      <div class="row">
          <div class="col-md-12">
              <center>
                  <h3 style="font-weight: 400;font-size: 28px;">Testimoni</h3>
                  <div class="line-footer"></div>
              </center>
          </div>
        
          <div class="col-md-8" style="left: 17%;">
              <div id="testimonial-slider" class="owl-carousel owl-theme">
                  <div class="testimonial">
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.
                      </p>

                      <div class="review">
                          <div class="pic"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg"></div>
                          <h4 class="title">
                              Theo Rifai
                              <small>Arsitek</small>
                          </h4>
                      </div>
                  </div>
                  <div class="testimonial">
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.
                      </p>

                      <div class="review">
                          <div class="pic"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg"></div>
                          <h4 class="title">
                              Riani ZAP
                              <small>Sipil</small>
                          </h4>
                      </div>
                  </div>
                  <div class="testimonial">
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.
                      </p>

                      <div class="review">
                          <div class="pic"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg"></div>
                          <h4 class="title">
                              Yogi S
                              <small>Drafter</small>
                          </h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
-->

<!-- <div class="modal fade" id="pop_up_website">
  <div class="modal-dialog animated tada">
    <div class="">
      <div class="">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <!- <h4 class="modal-title">Modal title</h4> ->
      </div>
      <div class="text-center">
        <img src="<?php echo base_url('assets/img/pop_up/pop_up_website.png') ?>" width="500px;">
        <button class="btn btn-danger" onclick="lihatKoleksi()" style="padding: 5px 11px;margin-top: -202px;font-size: 17px;border-radius: 25px;background: red;border-color: red;">Dapatkan Sekarang</button>
      </div>
    </div>
  </div>
</div> -->

<div id="pop_up_website" data-backdrop="static" data-keyboard="false" class="modal fade center-screen in" role="dialog" style="background-color: rgba(0, 0, 0, 0.3); padding-right: 17px;" aria-hidden="false">
    <div class="modal-dialog animated tada" style="z-index: 2;width: 555px;">
        <div class="modal-content" style="background: transparent;box-shadow: none;border: none;">
            <div class="modal-body" style="text-align: center;">
                <a class="close" data-dismiss="modal" style="position: absolute;right: 57px;top: -13px;font-size: 40px;border-radius: 100%;background-color: #aeaead !important;padding: 9px !important;line-height:  unset;">×</a>
               <img src="<?php echo base_url('assets/img/pop_up/pop_up.png') ?>" width="300px;" class="pop-up-website">
                <button class="btn btn-danger btn-pop-up btn-konsultasi" onclick="konsultasiDesain()" style="padding: 6px 20px;font-size: 21px;border-radius: 25px;background: red;border-color: red;box-shadow: 0px 3px 5px 5px rgba(38, 38, 38, 0.19),0px 2px 2px 1px rgba(184, 184, 184, 0.45); margin: 0 auto;bottom:20px">Konsultasi</button>
            </div>
        </div>
    </div>
</div>

<!-- /*<div id='loading_wrap' style='position:fixed; height:100%; width:100%; overflow:hidden; top:0; left:0;'>Loading, please wait.</div>*/ -->
<!-- 
<script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<script src="https://rawgit.com/kenwheeler/slick/master/slick/slick.js" type="text/javascript"></script> -->

<script src="<?php echo base_url('assets/js/js.cookie.min.js') ?>"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
 <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>

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
            url : "<?= $this->config->item('url_mobile') ?>api/loginSSO",
            type: "POST",
            data: {
                "nama_lengkap": response.name,
                "email": response.email,
                "password": ''
            },
            dataType: "JSON",
            success: function(data){
                if (data.Success == true) {
                    toastr.success(data.Info, 'Informasi', opsi_toastr);
                    window.location.href = "<?= $this->config->item('url_mobile') ?>";
                }
            }
        });
    }

     if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) == null) {
         window.onload = function () {
             google.accounts.id.initialize({
                 client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
                 callback: handleCredentialResponse,
                 cancel_on_tap_outside: false,
                 //ui_mode: isMobile() ? 'bottom_sheet': 'card',
             });
             google.accounts.id.prompt();

             setTimeout(function(){
                 let onetap = $('.wrapper > #credential_picker_container');
                 onetap.parent().after(onetap);
             }, 7000);
         };
     }

    $(document).ready(function() {



   
   $('#owl-carousel-banner').owlCarousel({
    
    loop:true,
    // margin:10,
    // nav:true,
    dots: true,
    // dotsEach : true,
    // autoWidth:true,
        // URLhashListener:true,
        // autoplayHoverPause:true,
        // startPosition: 'URLHash',
    //     autoplay:true,
    // autoplayTimeout:7000,
    // autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


$('#owl-carousel-rule').owlCarousel({
    loop:true,
    // margin:10,
    // nav:true,
    dots: true,
    dotsEach : true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('#owl-carousel-rule .owl-dot').each(function(){
$(this).children('span').text($(this).index()+1);
});






 $('#owl-carousel-promo,#owl-carousel-favorit,#owl-carousel-artikel').owlCarousel({
    
    loop:true,
    // margin:10,
    // nav:true,
    // dots: true,
    // dotsEach : true,
    // autoWidth:true,
        // URLhashListener:true,
        // autoplayHoverPause:true,
        // startPosition: 'URLHash',
        autoplay:true,
    autoplayTimeout:7000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

// $('.ph-item-banner').delay(10).fadeOut(30, function(){
//    $(this).remove();
// });

$('.ph-item-banner').remove();
// setTimeout(function(){
      // load_content_banner();
    // }, 2);

 // $('.ph-item-banner').hide('slow', function(){ $('.ph-item-banner').remove(); });





















     //   ias.bind();
        getSummaryKatalog();
       // getMerkProduk();
       // $('#pop_up_website').modal('show');
        setTimeout(function(){
       $('#pop_up_website').modal('show');
        
    }, 10000); 
        // $('#testimonial-slider').owlCarousel({
        //     items: 1,
        //      loop: true,
        //     //margin: 10,
        //      autoplay: true,
        //      autoplayHoverPause: true,
        //      autoplaySpeed: 2000
        // });
      

 // var slickOpts = {
 //    slidesToShow: 1,
 //    slidesToScroll: 1,
 //    //centerMode: true,
 //    easing: 'swing', // see http://api.jquery.com/animate/
 //    speed: 700,
 //    dots: true,
 //    customPaging: function(slick,index) {
 //        return '<a>' + (index + 1) + '</a>';
 //    }
 //  };
  // Init slick carousel
  // $('#carousel-mo').slick(slickOpts);

// $('.slider').slick({
//     autoplay: true,
//     dots: true,

//      customPaging : function(slider, i) { var title = $(slider.$slides[i]).data('title'); return '<a class="pager__item dot">'+title+'</a>'; },
//     // customPaging : function(slider, i) {
//     // var thumb = $(slider.$slides[i]).data();
//     // return '<a class="dot">'+i+'</a>';
//     //         },
//     responsive: [{ 
//         breakpoint: 500,
//         settings: {
//             dots: false,
//             arrows: false,
//             infinite: false,
//             slidesToShow: 1,
//             slidesToScroll: 1
//         } 
//     }]
// });


 // jQuery('.slider').slick({
 //        dots: true,
 //        customPaging : function(slider, i) {
 //            var thumb = jQuery(slider.$slides[i]).data();
 //            // return '<a>'+(i+1)+'</a>'; // <-- old
 //            return '<a>'+('0'+(i+1)).slice(-2)+'</a>'; // <-- new
 //        }

 //    });











        $('.list-produk-merk').slick({
            autoplaySpeed: 2000,
            autoplay: true,
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
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
        });
      
     
    });
  

// function load_content_banner(){
//     $('.ph-item-banner').remove();
// }

  
    function lihatKoleksi(){
        location.href = "<?= $this->config->item('url_mobile') ?>desain";
    }
  
    function lihatSampel(){
        location.href = "<?= $this->config->item('url_mobile') ?>sampel_desain";
    }
  
    function detailProduk(id){
        location.href = "<?= base_url('detail_produk/') ?>"+id;
    }
  
    function lihatArtikel(){
        location.href = "<?= base_url('artikel') ?>";
    }
  
    function detailArtikel(id){
        location.href = "<?= base_url('detail-artikel/') ?>"+id;
    }
    
    function detailSuplier(id){
        //location.href = "<?= base_url('suplier/') ?>"+id;
    }
    
    function detailMerk(id){
        //location.href = "<?= base_url('merk/') ?>"+id;
    }
    
    function material(){
        location.href = "<?= $this->config->item('url_mobile') ?>material";
        // location.href = "<?= $this->config->item('url_mobile') ?>material";
    }

    function assessment(){
        location.href = "<?= $this->config->item('url_mobile') ?>assessment";
        // location.href = "<?= $this->config->item('url_mobile') ?>material";
    }
    
    function setSort(by) {
        $('#sort_by').val(by);
        $('.list-produk').empty();
        // ias.next();
    }
  

function lihatPromo(by){
        // var cari_rumah = $('#cari_rumah').val();
        // var order = 7;
        // $.ajax({
        //    url: "<?= base_url('api/getKatalogProduk') ?>",
        //    type: "POST",
        //    data: {"order" :order},
        //    dataType: "json",
        //    success: function(tes){
            // location.href = "<?= base_url('artikel') ?>";
              location.href = "<?= $this->config->item('url_mobile') ?>desain#promo";
             // window.open('<?= base_url("desain") ?>');
               // $('#desain_terbangun').hide().empty();
               // $('#desain_terbangun_filter').empty();
               // for (var k = 0; k <= tes.length-1;k++ ){
               //      $('#desain_terbangun_filter').append(`<div class="col-md-2 col-sm-6 p0 grid" style="float:left;">
               //          <figure class="snip1361 white">

               //              <img src="<?php echo base_url() ?>assets/img/portofolio/`+tes[k].foto+`" alt="portofolio">
               //              <figcaption>
               //                  <h6 class="white" style="font-weight: 400;">`+tes[k].judul+`</h6>
               //                  <p>`+tes[k].kategori+`</p> <hr style="margin: 0 !important;background:#fff;"><p>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Klien</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].klien+`</span></div>
               //                      </div>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Lokasi</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].lokasi+`</span></div>
               //                      </div>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Tahun</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].tahun+`</span></div>
               //                      </div>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Status</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].status+`</span></div>
               //                      </div>
               //                  </p>
               //              </figcaption>
               //              <a href="#"></a>
               //          </figure>
               //      </div>`);
               //      }
        //    },
        //    error: function(jqHR, texStatus, errorThrown){
        //          alert('tes');
        //    }
        // });
    }

    function lihatFavorit(by){
        // var cari_rumah = $('#cari_rumah').val();
        // var order = 7;
        // $.ajax({
        //    url: "<?= base_url('api/getKatalogProduk') ?>",
        //    type: "POST",
        //    data: {"order" :order},
        //    dataType: "json",
        //    success: function(tes){
            // location.href = "<?= base_url('artikel') ?>";
             window.open('<?= $this->config->item('url_mobile') ?>desain');
               // $('#desain_terbangun').hide().empty();
               // $('#desain_terbangun_filter').empty();
               // for (var k = 0; k <= tes.length-1;k++ ){
               //      $('#desain_terbangun_filter').append(`<div class="col-md-2 col-sm-6 p0 grid" style="float:left;">
               //          <figure class="snip1361 white">

               //              <img src="<?php echo base_url() ?>assets/img/portofolio/`+tes[k].foto+`" alt="portofolio">
               //              <figcaption>
               //                  <h6 class="white" style="font-weight: 400;">`+tes[k].judul+`</h6>
               //                  <p>`+tes[k].kategori+`</p> <hr style="margin: 0 !important;background:#fff;"><p>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Klien</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].klien+`</span></div>
               //                      </div>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Lokasi</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].lokasi+`</span></div>
               //                      </div>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Tahun</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].tahun+`</span></div>
               //                      </div>
               //                      <div class="card-group">
               //                          <div style="width: 46px;"><span>Status</span></div>
               //                          <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].status+`</span></div>
               //                      </div>
               //                  </p>
               //              </figcaption>
               //              <a href="#"></a>
               //          </figure>
               //      </div>`);
               //      }
        //    },
        //    error: function(jqHR, texStatus, errorThrown){
        //          alert('tes');
        //    }
        // });
    }


















    function getProductItem(page,data) {
        var foto = `${data.foto}`;
        if (foto == '') foto = 'no-foto.jpg';
        var harga = `${data.harga_dasar}`;
        
        var template = `<div class="col-md-3 col-sm-6 p0 grid">
            <div class="product-grid page-`+page+`" data-id="${data.id_produk}">
                <div class="product-image">
                    <a href="javascript:void(0)" class="image" onclick="detailProduk(${data.id_produk})">
                        <img class="pic-1" src="<?= $this->config->item('eid').'assets/foto/produk/' ?>`+foto+`">
                        <img class="pic-2" src="<?= $this->config->item('eid').'assets/foto/produk/' ?>`+foto+`">
                    </a>
                </div>
                <div class="product-content">
                    <div class="title" title="${data.nama_produk}" onclick="detailProduk(${data.id_produk})">${data.nama_produk}</div>
                    <div class="product-info">
                        <div class="suplier" title="${data.nama_suplier}" onclick="detailSuplier(${data.id_suplier})">
                            <img class="logo" src="<?= $this->config->item('eid').'assets/foto/pengguna/' ?>${data.foto_suplier}">
                            <span>${data.nama_suplier}</span>
                        </div>
                        <div class="badge" title="${data.merk}">${data.merk}</div>
                    </div>
                    <div class="product-price">
                        <div class="price">Rp`+number_format(harga, 0, ',', '.')+`<span class="unit"> / ${data.satuan}</span></div>
                    </div>
                    <div class="product-detail">
                        <p class="spesification">${data.spesifikasi}</p>
                        <div class="product-statistic">
                            <div class="statistic">
                                <button class="btn btn-detail produk" onclick="detailProduk(${data.id_produk})">Detail</a>
                            </div>
                            <div class="statistic">
                                <button class="btn btn-beli" data-number="${data.no_wa}" data-id="${data.id_produk}" data-product="${data.nama_produk}" data-merk="${data.merk}" data-spec="${data.spesifikasi}"><i class="fa fa-shopping-cart" style="margin-top: -1px;"></i> Beli</a>
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

    var params = null, page = 0;
    function nextHandler(pageIndex) {
        if (params == null) params = $('#frm-filter').serialize();
        else {
            if (params != $('#frm-filter').serialize()) {
                params = $('#frm-filter').serialize();
                page = reset = 0;
            } else page++;
        }

        let fetchData = {
            method: 'POST',
            body: params,
            headers: new Headers()
        }

        return fetch('<?= $this->config->item('url_server') ?>api/getKatalogProduk', fetchData)
            .then(response => response.json())
            .then(result => {
              let frag = document.createDocumentFragment();
              let itemsPerPage = 10;
              let totalPages = Math.ceil(result.length / itemsPerPage);
              let offset = page * itemsPerPage;

              for (let i = offset, len = offset + itemsPerPage; i < len; i++) {
                if (typeof result[i] !== 'undefined') {
                    let item = getProductItem(pageIndex, result[i]);
                    frag.appendChild(item);
                }
              }

              let hasNextPage = page < totalPages - 1;

              return this.append(Array.from(frag.childNodes)).then(() => hasNextPage);
            })
            .catch(error => console.log(error));
    }

//    window.ias = new InfiniteAjaxScroll('.list-produk', {
 //       logger: false,
  //      item: '.grid',
  //      next: nextHandler,
  //      pagination: false,
  //      bind: false,
  //      scrollContainer: '.list-produk',
  //      spinner: '.spinner',
 //   });

 //   ias.on('page', (event) => {
   //     $(".btn-beli").on("click", function(){
     //       var id_produk = $(this).attr("data-id");
       //     var nama_produk = $(this).attr("data-product");
         //   var merk = $(this).attr("data-merk");
 //           var spesifikasi = $(this).attr("data-spec").replace(/<[^>]*>/g," ");
   //         var text = `Halo,\nSaya ingin membeli produk Anda dengan rincian:\n\nNama Produk: `+nama_produk+`\nMerk: `+merk+`\nSpesifikasi: `+spesifikasi+`\nLink Produk: <?php echo base_url('detail/') ?>`+id_produk+`\n\nApakah bisa dibantu?\nTerima kasih`;
     //       var phone = $(this).attr("data-number");
       //     var message = encodeURIComponent(text);

//            if (phone.substring(0,1) == '+') phone = phone.substring(1);
    //        else if (phone.substring(0,1) == '0') {
  //              phone = phone.substring(1);
      //          phone = '62'+phone;
        //    }
            
          //  if (isMobile() == true){
                //mobile device
        //        var whatsapp_API_url = "whatsapp://send";
          //      $(this).attr( 'href', whatsapp_API_url+'?phone=' + phone + '&text=' + message );
          //  } else {
                //desktop
            //    var whatsapp_API_url = "https://web.whatsapp.com/send";
             //   var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
          //      window.open(url, '_blank');
       //     }
     //   });
   // });
    
    function getSummaryKatalog() {
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getSummaryCariProduk",
            dataType: "JSON",
            data: {
                "keyword": $('#nama_material').val(),
                "id_kategori": $('#id_kategori').val(),
                "merk": $('#merk').val()
            },
            success : function(data){
                $('#jum_produk').html(data.suplier);
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
    
  
  
    $('#nama_material').keypress(function(e){
        if (e.which == 13) {
          e.preventDefault();
          $('#btn-cari-material').click();
          return false;
        }
    })
  
    $('#btn-cari-material').on('click', function() {
        $('#id_kategori').val(0);
        $('#merk').val('');
        $('.list-produk').empty();
        ias.next();
        getSummaryKatalog();
        getMerkProduk();
    });  
  
    $('.list-category .body li').on('click', function() {
        $('#id_kategori').val($(this).data('id'));
        $('#nama_material,#merk').val('');
        $('.list-produk').empty();
        ias.next();
        getSummaryKatalog();
        getMerkProduk();
    });



$(document).ready(function () {
    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next-step").click(function () {

        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();

        $("#progressbar li").eq($("fieldset")
            .index(nextGfgStep)).addClass("active");

        nextGfgStep.show();
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;

                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous-step").click(function () {

        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset")
            .index(currentGfgStep)).removeClass("active");

        previousGfgStep.show();

        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;

                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({ 'opacity': opacity });
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

    $(".submit").click(function () {
        return false;
    })
});






</script>