<!-- Normalize CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- Bootstrap 4 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
<!-- Telephone Input CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
<!-- Icons CSS -->
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<!-- Nice Select CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
<!-- Style CSS -->
<link rel='stylesheet' href='<?php echo base_url('assets/css/style-step.css') ?>'>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo base_url('assets/beranda/js/vendor/jquery-1.11.2.min.js') ?>"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style type="text/css">
    select > option{
 
  font-family: Calibri;
}
  
  #katalog-produk-filter .grid {
    width: 19.75%;
    height: 320px;
    display: inline-flex;
}
  
.multi_step_form #msform .action-button:hover, .multi_step_form #msform .action-button:focus {
    background: #071587;
    border-color: #071587;
}
  
  .multi_step_form {
    background-color: transparent;
    display: block;
    overflow-x: none;
}
  
  .multi_step_form #msform{
    max-width: 100%;
  }
  .multi_step_form #msform #progressbar li {
   
    width: calc(100%/8);
    
}

  
  .custom-control-label-x::before {
    position: absolute;
    top: 0%;
    left: -2em;
    display: block;
    width: 2rem;
    height: 2rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e682;
}
  .custom-control-label-x::after {
    position: absolute;
    top: 0%;
    left: -2.2em;
    display: block;
    width: 2em;
    height: 2rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}
  .custom-checkbox .custom-control-input:checked ~ .custom-control-label-x::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
  
 .custom-checkbox .custom-control-input:checked ~ .custom-control-label-x::before {
    background-color: #026CB6;
}
.custom-control-input:checked ~ .custom-control-label-x::before {
    color: #fff;
} 
  
  #frm-assessment {
  background-color: transparent !important;
}
   #frm-assessment {
  font-family: 'Circular' !important;
}
  

  
  .multi_step_form #msform #progressbar li:before {
     content: "1";
  font-size: 20px;
  width: 42px;
  height: 42px;
  line-height: 42px;
  display: block;
  background: #eaf0f4;
  border-radius: 50%;
  margin: 0 auto 10px auto;
    font-family: 'Circular' !important;
}
  
  
  .multi_step_form #msform #progressbar li:after {
  content: '';
  width: 100%;
  height: 10px;
  background: #eaf0f4;
  position: absolute;
  left: -50%;
  top: 16px;
  z-index: -1;
}
  
  .top-back{
  position: absolute !important;
margin-top: -6.9em !important;
right: 91% !important;
}
  .top-next{
    position: absolute !important;
margin-top: -6.9em !important;
left: 91% !important;
  }
  
  .multi_step_form #msform #progressbar li {
  list-style-type: none;
  color: #99a2a8;
  font-size: 9px;
  width: calc(100%/3);
  float: left;
  position: relative;
  font-size: 12px;
     font-family: 'Circular' !important;
    
}
  
 .multi_step_form #msform .action-button {
    background: #026CB6;
    color: white;
    border: 0 none;
    border-radius: 5px;
    cursor: pointer;
    min-width: 118px;
    font: 600 14px/40px "Roboto", sans-serif;
      
    border: 1px solid #026CB6;
     
    margin: 0 5px;
     
    text-transform: capitalize;
    display: inline-block;
    font-family: 'Circular' !important;
    font-size: 17px;
    font-weight: 400;
} 

  
  .multi_step_form #msform #progressbar li {
    list-style-type: none;
    color: #99a2a8;
    font-size: 9px;
    width: calc(100%/8);
    float: left;
    position: relative;
   
    font-size: 13px;
    font-family: 'Circular' !important;
    font-weight: 300;
}
  .multi_step_form #msform #progressbar li:nth-child(2):before {
  content: "2" !important;
}
.multi_step_form #msform #progressbar li:nth-child(3):before {
  content: "3" !important;
}
.multi_step_form #msform #progressbar li:nth-child(4):before {
  content: "4" !important;
}
.multi_step_form #msform #progressbar li:nth-child(5):before {
  content: "5" !important;
}
.multi_step_form #msform #progressbar li:nth-child(6):before {
  content: "6" !important;
}
.multi_step_form #msform #progressbar li:nth-child(7):before {
  content: "7" !important;
}
.multi_step_form #msform #progressbar li:nth-child(8):before {
  content: "8" !important;
}
 
.multi_step_form #msform #progressbar li.active::before, .multi_step_form #msform #progressbar li.active::after {

    background: #026CB6 !important;
    color: white !important;

} 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
.container {
    width: 95%;
    max-width: 100%;
}
.slide-brand {
    width: 165px;
    height: 95px;
    border-radius: 10px;
    cursor: pointer;
    margin: 0 7px;
}

.slick-dots { bottom: -30px; }

.slick-dots li.slick-active button { font-size: 8px; }
  
.slick-dots li.slick-active button::before, .slick-dots li button:hover::before { color: #026cb6; }
  
.product-slider {
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 340px;
}
  
/*.slick-slider:not(.list-produk-merk) { margin: 15px 20px 0 300px; }*/

.slick-prev, .slick-next { top: 40%; }

.slick-next { right: -20px; }
  
.slick-prev::before, .slick-next::before { font-size: 25px; }

.list-produk-promo .grid, .list-produk-favorit .grid { height: 395px; }

.list-produk-popular .grid {
    width: 19.75%;
    height: 320px;
    display: inline-flex;
}

.list-produk {
    height: 863px;
    width: 103%;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.list-produk::-webkit-scrollbar {
    width: 0;
    background: transparent;
}

.list-produk .grid { width: 20%; }

.product-grid {
    transition: all 0.3s ease;
    height: 305px;
    margin: 0 6px 10px 6px;
}

.list-produk-popular .product-grid {
    margin: 0;
    padding: 4px;
}

.product-grid .product-image {
    position: relative;
    overflow: hidden;
    height: 190px;
}

.product-grid .product-image a.image {
    display: block;
    height: 100%;
}

.product-grid .product-image img {
    width: 100%;
    height: 100%;
}

.product-grid .product-image .pic-1 {
    backface-visibility: hidden;
    transition: all .4s ease 0s;
}

.product-grid .product-image:hover .pic-1 { opacity: 0; }

.product-grid .product-image .pic-2 {
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    opacity: 0;
    transform: scale(0.95);
    position: absolute;
    bottom: 0;
    left: 0;
    transition: all .4s ease 0s;
}

.product-grid .product-image:hover .pic-2 {
    opacity: 1;
    transform: scale(1);
}

.product-grid .product-content {
    padding: 8px 10px 0;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
    box-shadow: 0 10px 10px rgba(0,0,0,.1);
    background: #fff;
}

.product-grid .title {
    color: #000;
    font-size: 16px;
    font-weight: 400;
    text-transform: uppercase;
    margin: 0;
    height: 21px;
    line-height: 1.3;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.product-grid .title:hover { color: #026cb6; }

.product-grid .title, .product-grid .arsitek { cursor: pointer; }

.product-grid .arsitek {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    font-weight: 400;
    width: 55%;
    color: #026cb6;
    font-size: 14px;
    line-height: 1.3;
}
  
.product-grid .arsitek::before {
    content: 'By ';
    color: #777;
    font-weight: 300;
}

.product-grid .product-rating, .product-grid .product-feature, .product-grid .product-statistic {
    display: flex;
    justify-content: space-between;
    align-content: space-between;
}

.product-grid .jstars {
    margin-top: -1px;
    letter-spacing: -1px;
}
  
.product-grid .jstars:after {
    content: attr(data-value);
    font-size: 12px;
    margin-left: 4px;
    color: #000;
    letter-spacing: 0;
}

.product-grid .product-feature { padding: 8px 0; }
  
.product-grid .product-feature .feature { text-align: center; }
  
.product-grid .product-feature .feature img {
    width: 25px;
    height: 28px;
}

.product-grid .product-feature .feature span {
    font-size: 12px;
    color: #000;
    display: block;
}

.product-grid .product-feature .feature sup { color: #000; }

.product-grid [data-tootik]::before { border-top-color: #026cb6; }

.product-grid [data-tootik]::after {
    font-family: 'Circular';
    font-size: 13.5px;
    background: #026cb6;
    padding: 4px 6px 6px;
}

.product-grid .product-detail {
    background-color: #fff;
    width: 100%;
    padding: 0 12px 10px;
    opacity: 0;
    position: absolute;
    left: 0;
    top: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 10px 10px rgba(0,0,0,.1);
}
  
.product-grid:hover .product-detail { opacity: 1; }
  
.product-grid .product-detail p {
    color: #000;
    text-align: center;
    margin-bottom: 10px;
    font-size: 14px;
}

.product-grid .product-statistic .view, .product-grid .product-statistic .like {
    color: #000;
    padding-left: 10px;
}
  
.product-grid .product-statistic .view .fa-eye, .product-grid .product-statistic .like .fa-heart-o,
.product-grid .product-statistic .share .fa-share-alt {
    color: #026cb6;
    font-size: 16px;
    margin-top: 5px;
}
  
.product-grid .product-statistic .view .fa-eye {
    font-size: 20px;
    padding-right: 5px;
    margin-top: 2px;
}

.product-grid .product-statistic .like .fa-heart-o {
    font-size: 15px;
    padding-right: 5px;
}
  
.product-grid .product-statistic .like .fa-heart-o, .product-grid .product-statistic .share {
    text-align: center;
    cursor: pointer;
}
  
.product-grid .product-statistic .share:hover .social {
    opacity: 1;
    transition: all 0.4s ease 0s;
    visibility: visible;
    transform: scale(1) translateY(-10px);
}
  
.product-grid .product-statistic .social {
    margin-left: -67px;
    opacity: 0;
    visibility: hidden;
    margin-top: -45px;
    transform-origin: 0 0 0;
}
  
.product-grid .product-statistic .social a {
    width: 32px;
    color: #026cb6;
    float: left;
    padding: 3px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid #026cb6;
    font-size: 16px;
}
  
.product-grid .product-statistic .social a:hover {
    color: #fff;
    background: #026cb6;
}
  
/*.product-grid .product-statistic .social .facebook { background-color: #3b5998; }
 
.product-grid .product-statistic .social .whatsapp { background-color: #28a745; }
 
.product-grid .product-statistic .social .twitter { background-color: #55acee; }*/

@media screen and (max-width:990px) {
    .product-grid { margin: 0 0 30px; }
}

.btn-detail {
    color: #026cb6 !important;
    background: #fff !important;
    border: 1px solid #026cb6 !important;
    padding: 2px 14px !important;
    font-size: 14px !important;
}
  
.btn-detail:hover {
    color: #fff !important;
    background: #026cb6 !important;
}












.btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
    outline: 0 !important;
}
.input-group > .custom-file, .input-group > .custom-select, .input-group > .form-control {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 100%;
    margin-bottom: 0;
    height: 100%;
}
label{
    font-weight: 400 !important;
}
p{
    font-weight: 300;
}
h4{
    margin-bottom: 0px !important;
}
h5{
    margin-bottom: 0px !important;
}
h6{
    margin-bottom: 0px !important;
}
/*card*/
.card-title a:hover{
    color: #5E95C7 !important;
}
.title-weight{
    font-size: 16px;
    font-weight: 400;
}
.fa.outline-star{
   color: transparent;
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: #ffe300;
 }
 .fa-star {
    color: #ffe300;
}
button:focus {
    outline: none;
    outline: 5px auto -webkit-focus-ring-color;
}
.red{
    color: red;
}
/*share*/


.menu {
   z-index: 999;
   position: sticky;
   padding: 0;
   margin: 0;
   list-style-type: none;
}
 .menu .share i.fa {
   /*height: 20px;*/
   width: 30px;
   text-align: center;
   line-height: 20px;
   /*background-color: #fff;*/
   /*border-radius: 7px;*/
}
 .menu .share:hover.top .submenu li:nth-child(1) {
   opacity: 1;
   top: -34px;
   transition-delay: 0.08s;
   transform: rotateY(0deg);
   border-bottom: 1px dashed #d9d9d9;
   margin-left: 3px;
}
 .menu .share:hover.top .submenu li:nth-child(2) {
   opacity: 1;
   top: -34px;
   transition-delay: 0.16s;
   transform: rotateY(0deg);
   /*border-bottom: 1px dashed #d9d9d9;*/
    margin-left: 32px;
}
 .menu .share:hover.top .submenu li:nth-child(3) {
   opacity: 1;
   top: -6px;
   transition-delay: 0.24s;
   transform: rotateY(0deg);
   border-left: 1px dashed #d9d9d9;
   margin-left: 31px;
}
/*
 .menu .share:hover.top .submenu li:nth-child(4) {
   opacity: 1;
   top: -114px;
   transition-delay: 0.32s;
   transform: rotateY(0deg);
   border-bottom: 1px dashed #d9d9d9;
}
 .menu .share:hover.top .submenu li:nth-child(5) {
   opacity: 1;
   top: -155px;
   transition-delay: 0.4s;
   transform: rotateY(0deg);
   border-bottom: 1px dashed #d9d9d9;
}*/
 .menu .submenu {
   list-style-type: none;
   padding: 0;
   margin: 0;
}
 .menu .submenu li {
   transition: all ease-in-out 0.5s;
   position: absolute;
   top: 0;
   left: 0;
   z-index: -1;
   opacity: 0;
   background: azure;
}
 .menu .submenu li a {
   color: #026CB6;
}
 .menu .submenu li a:hover i.fa {
   color: #fff;
}
 .menu .submenu li a:hover.facebook i.fa {
   /*background-color: #3b5999;*/
   color: #0053bd;
}
 .menu .submenu li a:hover.whatsapp i.fa {
   color:#25d366;
 /* background:
  linear-gradient(#25d366,#25d366)10px 84%/0px 0px no-repeat,
  radial-gradient(#25d366 59%,transparent 0);*/
}
 /*.menu .submenu li a:hover.googlePlus i.fa {
   background-color: #dd4b39;
}*/
 .menu .submenu li a:hover.twitter i.fa {
   /*background-color: #e4405f;*/
  /* background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  -webkit-background-clip: text;
          /Also define standard property for compatibility/
          background-clip: text;
  -webkit-text-fill-color: transparent;*/
  color: rgb(29, 161, 242);
  
}
 .menu .submenu li:nth-child(1) {
   transform: rotateX(45deg);
}
 .menu .submenu li:nth-child(2) {
   transform: rotateX(90deg);
}
 .menu .submenu li:nth-child(3) {
   transform: rotateX(135deg);
}
 .menu .submenu li:nth-child(4) {
   transform: rotateX(180deg);
}

/* .menu.bottomRight {
   bottom: 10px;
   right: 10px;
}*/



.card{
  height: 330px;
  /*max-width: 350px;*/
  /*margin: 0 20px;*/
  background: white;
  /*transition: 0.4s;*/
  box-shadow: 2px 2px 5px rgba(0,0,0,0.04);
  border:none;
  position: relative;
min-width: 0;
border-radius: 3px;
}

.card:hover {
    /*height: 100%;*/
    box-shadow: 0px 5px 10px rgba(212, 208, 208, 0.2);
    position: absolute;
    z-index: 1;
    border-radius: 3px;
    /*width: 100%;*/
    width: 89.5%;
}

/*.card .img{
  height: 180px;
  width: 100%;
}*/

.card .img {
    height: 180px;
    width: 100%;
    border-radius: 3px 3px 0px 0px;
}

.card .img img {
    /*height: 100%;*/
    width: 100%;
    object-fit: cover;
    border-radius: 3px 3px 0px 0px;
}
.card .top-text{
  /*padding: 5px;*/
  background-color: #fff;
}
.card .top-text .name{
  font-size: 25px;
  font-weight: 600;
  color: #202020;
}
/*.card .top-text p{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}*/
.card .bottom-text{
  /*padding: 0 20px 10px 20px;*/
  margin-top: 0px;
  background: white;
  opacity: 0;
  visibility: hidden;
  transition: 0.1s;
  border-radius: 0 0 3px 3px;
}
.card:hover .bottom-text{
  opacity: 1;
  visibility: visible;
  box-shadow: 0px 12px 10px rgba(212, 208, 208, 0.2);

}
/*.card:hover .top-text{
  
  box-shadow: 0px 7px 10px rgba(212, 208, 208, 0.2);

}
*/.card .bottom-text .text{
  text-align: justify;
}
.card .bottom-text .btn{
  margin: 10px 0;
  text-align: left;
}
.card .bottom-text .btn a{
  text-decoration: none;
  background: #e74c3c;
  color: #f2f2f2;
  padding: 5px 8px;
  border-radius: 3px;
  display: inline-flex;
  transition: 0.2s;
}
.card .bottom-text .btn a:hover{
  transform: scale(0.9);
}
@media screen and (max-width: 978px) {
  .container{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .card{
    max-width: 700px;
    margin: 20px 0;
  }
}



.i-con-han:hover {
    border: 2px solid #026CB6;
    padding: 3px;
}

/*.icon-lahan:hover::after {
    content: "Luas Lahan";
    display: block;
    position: absolute;
    top: 194px;
    right: 108px;
    width: 82px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}*/
.icon-lahan:hover::after {
    content: "Luas Lahan";
    display: block;
    position: absolute;
    top: 194px;
    right: 151px;
    width: 46px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}

/*.icon-bangunan:hover::after {
    content: "Luas Bangunan";
    display: block;
    position: absolute;
   top: 194px;
    right: 41px;
    width: 110px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}*/
.icon-bangunan:hover::after {
    content: "Luas Bangunan";
    display: block;
    position: absolute;
    top: 194px;
    right: 80px;
    width: 74px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}
.icon-lantai:hover::after {
    content: "Lantai";
    display: block;
    position: absolute;
   top: 194px;
    right: 63px;
    width: 49px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}
/*.icon-ktidur:hover::after {
    content: "Kamar Tidur";
    display: block;
    position: absolute;
    top: 194px;
    right: -15px;
    width: 89px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}*/
.icon-ktidur:hover::after {
    content: "Kamar Tidur";
    display: block;
    position: absolute;
    top: 194px;
    right: 17px;
    width: 52px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}
/*.icon-kmandi:hover::after {
    content: "Toilet";
    display: block;
    position: absolute;
    top: 195px;
    right: -8px;
    width: 43px;
    background: #026CB6;
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #026CB6;
    font-weight: 500;
}*/
.icon-kmandi:hover::after {
    content: "Toilet";
    display: block;
    position: absolute;
    top: 194px;
    right: 60px;
    width: 43px;
    background: #026CB6;
    border-radius: 5px 0px 0px 5px;
    border: 1px solid #026CB6;
    font-weight: 500;
}

#MiniHorzNav li {
    display: inline-block;
    list-style: outside none none;
    margin: 7px 0;
    padding: 0;
    width: 50px;
}
/*#MiniHorzNav li a:hover {
    border: solid 1px #026CB6;
    display: block;
    padding: 7px;
    position: relative;
}*/
#MiniHorzNav li a:hover {
    border: solid 1px #026CB6;
    display: block;
    padding: 4px 4px 0px 4px;
    position: relative;
}
#MiniHorzNav a:hover {
    text-decoration: none;
}
#MiniHorzNav li a {
    /*border: solid 1px #026CB6;*/
    display: block;
    padding: 5px 5px 0px 5px;
    position: relative;
    color: #5f5f5f;
    font-weight: 400;

}
#MiniHorzNav a:hover span {
    width: auto;
    padding: 0 5px;
    overflow: visible;
}
#MiniHorzNav a span {
    background-color: #026CB6;
    color: #ffffff;
    z-index: 999;
}
#MiniHorzNav span {
    /*font-family: 'Raleway', sans-serif;*/
    font-size: 12px;
    font-weight: bolder;
    letter-spacing: 1px;
    /*text-transform: uppercase;*/
    bottom: 25%;
    left: 49px;
    line-height: 23px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    transition: all 0.50s ease 0s;
    white-space: nowrap;
    width: 0;
}
#MiniHorzNav li {
    list-style: outside none none;
}

.icon-katalog {
    width: 30px;
    height: 30px;
}

.detail{
    padding: 0 18px;
}
.i-heart:hover{
  color: #ff0101;
}
.fa-share-alt:hover{
  color:#05bcd2;
}
.i-eye {
    margin-right: 6px;
    font-size: 24px;
}
.i-heart {
    margin-right: 4px;
}
.con{
  font-size: 17px;
}
.icon-medd{
    margin: 3px 5px 3px 10px;
    font-size: 20px;
    color: #026CB6;
}
/*card*/


.btn-utama:focus, .btn-utama.focus {
    outline: 0;
    box-shadow: 0 0 0 0 rgba(241, 241, 241, 0.5) !important;
    background: #5e95c7 !important;
    border-color: #5e95c7 !important;
}
body{
  font-family: 'Quicksand';
}
label{
    color: #323232;
}
.item-pl{
    padding-left: 20px;
}
.cml-2 {
    margin-left: 1.2rem !important;
}

.h-92 {
    height: 98% !important;
    box-shadow: 0px 2px 5px 0px rgba(157, 156, 156, 0.28);
    border: none !important;
}

.card-title a:hover{
    color: #05bcd2 !important;
}
p{
    font-size: 15px;
}
.prev {
  position: absolute;
  z-index: 2;
  margin-top: 42rem;
  margin-left: 24.5rem;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.next {
  position: absolute;
  z-index: 2;
  margin-top: 42rem;
  margin-left: 29rem;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.prev-a {
  position: absolute;
  z-index: 2;
  margin-top: 36em;
  margin-left: -45px;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.next-a {
  position: absolute;
  z-index: 2;
  margin-top: 36em;
  margin-left: -8px;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.prev-b {
  position: absolute;
  z-index: 2;
  margin-top: 36em;
  margin-left: -37px;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.next-b {
  position: absolute;
  z-index: 2;
  margin-top: 36em;
  margin-left: -2px;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.btn-primary:hover {
    color: #fff;
    background-color: #07c1ca;
    border-color: #07c1ca;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #07c1ca;
    border-color: #07c1ca;
}

.detail{
    padding: 0 18px;
}
.i-heart:hover{
  color: #ff0101;
}
.fa-share-alt:hover{
  color:#05bcd2;
}
.i-eye {
    margin-right: 6px;
    font-size: 24px;
}
.i-heart {
    margin-right: 6px;
}
.con{
  font-size: 17px;
}

.genric-btn.success-border:hover {
    color: #fff;
    background: #026CB6;
    border: 1px solid transparent;
}

.scrollable{
  overflow-y: auto;
  max-height: 45em;
  scrollbar-color: #026CB6 #f4f4f440;
  scrollbar-width: thin;
}
.scrollable-ma{
  overflow-y: auto;
  max-height: 41em;
  scrollbar-color: #026CB6 #f4f4f440;
  scrollbar-width: thin;
}
/*.scrollable::-webkit-scrollbar-thumb
{
    border-radius: 30px;
}
.scrollable::-webkit-scrollbar-track
{
    border-radius: 30px;
}*/
#custom-search-input{
    padding: 0px;
    border: solid 1px #026CB6;
    border-radius: 6px;
    background-color: #fff;
}
sup{
    color:#026CB6;
}

.input-im{
width: 65%;
float: right;
margin-top: 7px;
}
.center{
    text-align: center;
}
#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px -7px 0px -14px;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    /*border-left: solid 1px #ccc;*/
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    /*border-left: solid 1px #ccc;*/
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}

.genric-btn.success-border {   
    /*background: none !important;*/
}
.footer-area h4 {
    padding-bottom: 12px !important;
}
.line-header {
    width: 3cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
    margin-top: 10px;
}
/*.line-footer{
    width: 2cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
}*/
.turqoise{
    color: #026CB6;
}
.bg {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.span_pseudo, .chiller_cb span:before, .chiller_cb span:after {
  content: "";
  display: inline-block;
  background: #fff;
  width: 0;
  height: 0.2rem;
  position: absolute;
  transform-origin: 0% 0%;
}
.chiller_cb {
  position: relative;
  height: 2rem;
  display: flex;
  align-items: center;
}
.chiller_cb input {
  display: none;
}
.chiller_cb input:checked ~ span {
  background: #026CB6;
  border-color: #026CB6;
}
.chiller_cb input:checked ~ span:before {
  width: 1rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.3s;
}
.chiller_cb input:checked ~ span:after {
  width: 0.4rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.2s;
}
.chiller_cb input:disabled ~ span {
  background: #ececec;
  border-color: #dcdcdc;
}
.chiller_cb input:disabled ~ label {
  color: #dcdcdc;
}
.chiller_cb input:disabled ~ label:hover {
  cursor: default;
}
.chiller_cb label {
  padding-left: 2rem;
  position: relative;
  z-index: 2;
  cursor: pointer;
  margin-bottom:0;
}
.chiller_cb span {
  display: inline-block;
  width: 1.2rem;
  height: 1.2rem;
  border: 2px solid #ccc;
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
.i-con {
    font-size: 25px !important;
    color: #026CB6;
    margin: 20px;
}
.irs--round .irs-bar {
    top: 36px;
    height: 4px;
    background-color: #026CB6 !important;
}
.irs--round .irs-handle {
    border:none !important;
}
.irs--round .irs-from, .irs--round .irs-to, .irs--round .irs-single {
    background-color: #026CB6 !important;
}

.irs--round .irs-from::before, .irs--round .irs-to::before, .irs--round .irs-single::before {
    border-top-color: #026CB6 !important;
}
.banner-content h1{
    font-size: 30px !important;
}
.banner-content{
    text-align: left !important;
}
.black{
    color:#000;
}
.white{
    color:#fff !important;
}
.left{
    text-align: left;
}
.center{
    text-align: center;
}
.ban-cont{
    text-align: center;
}
strong{
    font-weight: bold !important;
}
.icon-sub{
    width: 25.8px;
    height: 25.8px
}
.button-detail{
    height: 30px;
    line-height: 27px !important;
    padding: 0 17px;
}
.icon-medd{
    margin: 3px 5px 3px 10px;
    font-size: 20px;
    color: #026CB6;
}
.genric-btn.success{
    background: #026CB6;
}
.bg-side{
    background: #f9f9f9;
    border-radius: 5px;
    height: 90em;
}
.ui-mobile [data-role="page"], .ui-mobile [data-role="dialog"], .ui-page {
    top: 0;
    left: 0;
    width: 100%;
    min-height: 100%;
    position: initial !important;
    display: none;
    border: 0;
}

.not-found .card{
    border : none !important;
}
.c-nfound {
    position: absolute;
    background: #fff;
    box-shadow: 0px 20px 48px 0 rgba(0,0,0,0.16);
   /* margin-top: 22em;
    margin-left: 53px;*/
}
/*.c-found {
    box-shadow: 0px 20px 48px 0 rgba(0,0,0,0.16);
}*/
  
  .c-found {
    box-shadow: 0px 13px 18px 0px rgba(63, 58, 58, 0.04);
    border: 1px solid #d3d3d312;
}
.btn-success {
    color: #fff !important;
    background-color: #026CB6 !important;
    border-color: #026CB6 !important;
}
.btn-success:hover{
    color: #fff !important;
    background-color: #09a1a4 !important;
    border-color: #09a1a4 !important;
}
.btn-danger:hover{
    color: #fff !important;
    background-color: #bf1c0b !important;
    border-color: #bf1c0b !important;
}


/*#header {
    padding: 14px 0;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
    background: #000;
}*/
.custom-control{
  padding-left: 0rem !important;
}
.pl-rem{
  padding-left: 0rem !important;
}
.card-title a:hover{
  color: #05bcd2 !important;
}
.irs--round .irs-line {
    top: 33px;
    height: 7px;
    background-color: #fff;
    border-radius: 4px;
    border: 1px solid #026CB6;
}

.p-none{
  padding-left: 0px !important;
}

.button-red{
color: #fff;
background-color: #C00!important;
border-color: #C00 !important;
/*border-radius: 40px !important;*/
width: 110px;
}

.button-red:focus, .button-red.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(213, 71, 71, 0.14) !important;
}

.btn-utama{
  color: #fff;background-color: #026CB6 !important;border-color: #026CB6 !important;
}
.rounded-circle {
    /*border-radius: 50% !important;*/
    border: 2px solid #026CB6;
}

.footer-area h4 {
    padding-bottom: 3px;
}
/*.btn-utama:focus, .btn-utama.focus {
    box-shadow: 0 0 0 0.2rem rgba(105, 177, 255, 0.14) !important;
}*/
.line {
    width: 2cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
}

a.disabled {
  pointer-events: none;
  cursor: default;
}

/*.btn-info {
  color: #fff;
  background-color: #026CB6 !important;
  border-color: #026CB6 !important;
  border-radius: 40px !important;
}*/

.nav-tabs{
  float: left;
  border: 1px solid #026CB6;
  /*background-color: #ffffff;*/
  width: 100%;
  /*height: 536px;*/
  /*margin-top: 5.3em;*/
border-bottom: 1px solid #026CB6 !important;
}

.nav-item{
  display: block;
  background-color: inherit;
  color: black;
  /*padding: 22px 16px;*/
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 16px;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem !important;
}
.tab-content{
    margin-top: 0rem;
}


.col-p{
    padding-left: 10px !important;
    padding-right: 10px !important;
}

.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    color: #7b8a8b;
    background-color: #026CB640  !important;
    border-color: none !important;
    width: 100%;
}

.nav-link.active:after {
  content: "\f0da";
  font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    display: inline-block;
    vertical-align: middle;
    /*margin-left: 78px;*/
    color: #026CB6;
    float: right;
}
/*.icon-panah{
     font-family:  'Font Awesome 5 Free';
    padding-left: 10px !important;
    vertical-align: middle;
     content: "\f0da";

}*/

.nav-tabs .nav-link {
    border: none !important;
    border-top-left-radius: 0rem !important;
    border-top-right-radius: 0rem !important;
}


.header-scrolled .container .row .nav-menu a{
    color: #fff;
}
/*.nav-menu a {
    color: #000;
}*/
.nav-menu a {
    color: #fff;
}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #026CB6;
  background-color: #ffffff;
  width: 20%;
  height: 536px;
  margin-top: 3em;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #91EAEE;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #026CB6;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  /*border: 1px solid #026CB6;*/
  width: 80%;
  border-left: none !important;
  height: 655px;
  margin-top: 7em;
}
strong{
    font-weight: bold !important;
}


.span_pseudo, .chiller_cb span:before, .chiller_cb span:after {
  content: "";
  display: inline-block;
  background: #fff;
  width: 0;
  height: 0.2rem;
  position: absolute;
  transform-origin: 0% 0%;
}
.chiller_cb {
  position: relative;
  height: 2rem;
  display: flex;
  align-items: center;
}
.chiller_cb input {
  display: none;
}
.chiller_cb input:checked ~ span {
  background: #026CB6;
  border-color: #026CB6;
}
.chiller_cb input:checked ~ span:before {
  width: 1rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.3s;
}
.chiller_cb input:checked ~ span:after {
  width: 0.4rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.2s;
}
.chiller_cb input:disabled ~ span {
  background: #ececec;
  border-color: #dcdcdc;
}
.chiller_cb input:disabled ~ label {
  color: #dcdcdc;
}
.chiller_cb input:disabled ~ label:hover {
  cursor: default;
}
.chiller_cb label {
  padding-left: 2rem;
  position: relative;
  z-index: 2;
  cursor: pointer;
  margin-bottom:0;
}
.chiller_cb span {
  display: inline-block;
  width: 1.2rem;
  height: 1.2rem;
  border: 2px solid #ccc;
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
.i-con {
    font-size: 25px !important;
    color: #026CB6;
    margin: 20px;
}
.irs--round .irs-bar {
    top: 33px;
    height: 7px;
    background-color: #026CB6 !important;
}
.irs--round .irs-handle {
    border: 1px solid #026CB6;
}
.irs--round .irs-from, .irs--round .irs-to, .irs--round .irs-single {
    background-color: #026CB6 !important;
}

.irs--round .irs-from::before, .irs--round .irs-to::before, .irs--round .irs-single::before {
    border-top-color: #026CB6 !important;
}



*,
*:before,
*:after {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
h1 {
  text-align: center;
}
.small-meta {
  font-size: 12px;
}
.dim {
  opacity: 0.4;
}
.image {
  width: 327px;
  height: 186px;
  background: #CCC;
  margin-left: auto;
  margin-right: auto;
}
.image-lt {
  width: 210px;
  height: 186px;
  background: #CCC;
  Background-image:url(namafile/nama gambara.ekstensi);
  margin-left: auto;
  margin-right: auto;
}
.grid-wrapper {
  margin: -1 auto;
  width: 80%;
  vertical-align: middle;
  text-align: center;
  position: relative;
/*  margin-left: 14%; */
}
.card-content {
  /*border: 1px solid #CCC;*/
  border-radius: 3px;
  padding: 25px 25px 10px 25px;
}
.card-content * {
  cursor: pointer;
}
.card-wrapper {
  position: relative;
  width: 235px;
  height: 270px;
  float: left;
  margin-right: 10px;
  margin-bottom: 50px;
  /*margin-top: 20px;*/
}
.c-card {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  visibility: hidden;
}
.c-card ~ .card-content {
  transition: all 500ms ease-out;
}
.c-card ~ .card-content .card-state-icon {
  position: absolute;
  top: 5px;
  right: 5px;
  z-index: 2;
  width: 20px;
  height: 20px;
  background-position: 0 0;
  transition: all 100ms ease-out;
}
.c-card ~ .card-content:before {
  position: absolute;
  top: 1px;
  right: 1px;
  width: 0;
  height: 0;
  border-top: 52px solid #026CB6;
  border-left: 52px solid transparent;
  transition: all 200ms ease-out;
}
.c-card ~ .card-content:after {
  position: absolute;
  top: 1px;
  right: 1px;
  content: "";
  width: 0;
  height: 0;
  border-top: 50px solid #FFF;
  border-left: 50px solid transparent;
  transition: all 200ms ease-out;
}
.c-card ~ .card-content:hover {
  border: 1px solid #6dc5dc;
}
.c-card ~ .card-content:hover .card-state-icon {
  background-position: -30px 0;
}
.c-card ~ .card-content:hover:before {
  border-top: 52px solid #026CB6;
}
.c-card:checked ~ .card-content {
  border: 1px solid #6dc5dc;
}
.c-card:checked ~ .card-content .card-state-icon {
  background-position: -90px 2px;
}
.c-card:checked ~ .card-content:before {
  border-top: 52px solid #026CB6;
      background: url("https://www.shareicon.net/download/2016/08/20/817721_check.svg") no-repeat;
}
.c-card:checked ~ .card-content:after {
  border-top: 52px solid #026CB6;
  
}
.c-card:checked:hover ~ .card-content .card-state-icon {
  background-position: -60px 2px;
}
.c-card:checked:hover ~ .card-content:before {
  border-top: 52px solid #026CB6;
}
.c-card:checked:hover ~ .card-content:after {
  border-top: 52px solid #026CB6;
}



input[type="checkbox"], input[type="radio"]{
    position: absolute;
    right: 9000px;
}
label{
    position: relative;
    cursor: pointer;
    /*color: #666;*/
    font-size: 21px;
}

/*Check box*/
input[type="checkbox"]   .label-text:before{
    content: "\f096";
    font-family: "FontAwesome";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing:antialiased;
    width: 1em;
    display: inline-block;
    margin-right: 5px;
}

input[type="checkbox"]:checked   .label-text:before{
    content: "\f14a";
    color: #026CB6;
    animation: effect 250ms ease-in;
}


.custom-control-label-b::after {
    position: absolute;
    top: 35%;
    left: 36%;
    display: block;
    width: 3em;
    height: 3rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}
.custom-control-label-b::before {
    position: absolute;
    top: 35%;
    left: 40%;
    display: block;
    width: 3rem;
    height: 3rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e682;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-b::before {
    background-color: #026CB6;
}
.custom-control-input:checked ~ .custom-control-label-b::before {
    color: #fff;
    /*background-color: #007bff;*/
}
.custom-checkbox .custom-control-label-b::before {
    border-radius: 0.25rem;
}



.custom-checkbox .custom-control-input:checked ~ .custom-control-label-b::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}


.custom-control-label-c::after {
    position: absolute;
    top: 35%;
    left: 40%;
    display: block;
    width: 3rem;
    height: 3rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
    z-index: 1;
}
.custom-control-label-c::before {
    position: absolute;
    top: 35%;
    left: 40%;
    display: block;
    width: 3rem;
    height: 3rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e682;
    z-index: 1;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-c::before {
    background-color: #026CB6;
}
.custom-control-input:checked ~ .custom-control-label-c::before {
    color: #fff;
    /*background-color: #007bff;*/
}
.custom-checkbox .custom-control-label-c::before {
    border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-c::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
    z-index: 2;
}

.custom-control-label-d::after {
    position: absolute;
    top: 25%;
    left: 45%;
    display: block;
    width: 3rem;
    height: 3rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
    z-index: 1;
}
.custom-control-label-d::before {
    position: absolute;
    top: 25%;
    left: 45%;
    display: block;
    width: 3rem;
    height: 3rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e682;
    z-index: 1;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-d::before {
    background-color: #026CB6;
}
.custom-control-input:checked ~ .custom-control-label-d::before {
    color: #fff;
    /*background-color: #007bff;*/
}
.custom-checkbox .custom-control-label-d::before {
    border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-d::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
    z-index: 2;
}




.custom-control-label-a::after {
    position: absolute;
    top: 22%;
    left: 30%;
    display: block;
    width: 3rem;
    height: 3rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}
.custom-control-label-a::before {
    position: absolute;
    top: 22%;
    left: 30%;
    display: block;
    width: 3rem;
    height: 3rem;
    pointer-events: none;
    content: "";
    user-select: none;
    background-color: #dee2e682;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-a::before {
    background-color: #026CB6;
}
.custom-control-input:checked ~ .custom-control-label-a::before {
    color: #fff;
    /*background-color: #007bff;*/
}
.custom-checkbox .custom-control-label-a::before {
    border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label-a::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

</style>  
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/beranda/css/bootstrap.min.css') ?>"> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700,800' rel='stylesheet' type='text/css'> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/flatly/bootstrap.min.css"> -->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<div id="frm-assessment-tes">
  
    <section class="multi_step_form" id="frm-assessment" style="padding: 0 75px;">  
      <form id="msform"> 
        <!-- Tittle -->
        <div class="tittle mt-1">
         
         <!--  <h1 style="font-weight:600;">Mulai Asesmen Yuk</h1> <p>selesaikan prosesnya ya</p> -->
        </div>
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Ukuran Lahan</li>  
          <li>Jumlah Lantai</li> 
          <li>Muka bangunan</li>
          <li>Kamar Tidur</li> 
          <li>Toilet</li>
          <li>Ruang Lain</li> 
          <li>Gaya Desain</li>
          <li>Material</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
           <button type="button" class="top-back action-button previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button">Selanjutnya</button>  
          <div class="col-md-12 mb-5">
          <div class="row">
          
                <div class="col-md-5">
                    <img src="assets/img/assessment/assessment-denah.png" style="height: 421px; margin-left: 3rem;width: 338px;"> 
                </div>
                <div class="col-md-7">
                    <div class="text-left">
                        <div>
                           <h4>UKURAN LAHAN </h4>
                           <p style="font-size: 15px;">Luas lahan ditentukan berdasarkan Lebar Lahan (L) dan Panjang Lahan (P) maksimal yang dapat dibangun untuk rumah tinggal Anda</p>
                        </div>
                        <div> 
                            <p style="font-size: 18px; margin-bottom: 0;">Lebar Lahan (L)</p>
                            <p style="font-size: 15px;">Lebar lahan adalah sisi pintu masuk utama masuk rumah tinggal Anda <br> Tentukan lebar lahan maksimal yang dapat dibangun.</p>
                            <strong style="font-size: 15px;">Lebar Lahan (m)</strong>
                            <div class='p-none'>
                                <input type="text" class="js-range-slider-lebar" name="lebar_lahan" value=""/> 
                            </div>
                        </div>
                        <div> 
                           <p style="font-size: 18px; margin-bottom: 0;margin-top: 2rem;">Panjang Lahan (P)</p>
                           <p style="font-size: 15px;">Panjang lahan adalah sisi samping rumah tinggal Anda. <br> Tentukan panjang lahan maksimal yang dapat dibangun.</p>
                           <strong style="font-size: 15px;">Panjang Lahan (m)</strong>
                           <div class='p-none'>
                              <input type="text" class="js-range-slider-panjang" name="panjang_lahan" value=""/> 
                           </div>
                        </div>
                    </div>
               </div>
         
          </div>
          </div>
         
        </fieldset>
        
        
        <fieldset>
           <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button">Selanjutnya</button>  
         <div class="col-md-12 mb-5">
          
            <div class="text-center">
              <h4>JUMLAH LANTAI </h4>
              <p style="font-size: 15px; margin-left: 30px;">Tentukan jumlah lantai rumah tinggal yang Anda inginkan. <br>Tersedia pilihan rumah tinggal 1 lantai atau 2 lantai.</p>
            </div>
            <div class="row">
            <div class="grid-wrapper" style="margin:0 auto; width: auto;">  
              <div class="card-wrapper" style="width: 353px !important">  <input type="checkbox" class="custom-control-input" name="lantai[]" value="0" id="" hidden checked>
                  <div class="card-content custom-control custom-checkbox image-checkbox">
                    <input type="checkbox" class="custom-control-input" name="lantai[]" value="1" id="check-1lt" checked>
                    <label class="custom-control-label-d" for="check-1lt">
                        <div class="card-state-icon"></div>
                        <label for="check-1lt">
                        <div class="image mb-4"><img class="image" src="assets/img/assessment/muka_lantai/1_lantai.jpg"></div>
                        <h5 style="font-size: 18px !important;"><strong>1 Lantai</strong></h5>
                        <p class="small-meta" style="font-size: 15px;">Rumah 1 lantai cocok untuk Anda yang menginginkan rumah tinggal yang sederhana dan hemat biaya.</p>
                       </label>
                    </label>
                  </div>
              </div>

              <div class="card-wrapper" style="width: 353px !important">
                <div class="card-content custom-control custom-checkbox image-checkbox">
                      <input type="checkbox" class="custom-control-input" name="lantai[]" value="2" id="check-2lt" checked>
                  <label class="custom-control-label-d" for="check-2lt">
                      <div class="card-state-icon"></div>
                      <label for="check-2lt">
                        <div class="image mb-4"><img class="image" src="assets/img/assessment/muka_lantai/2_lantai.jpg"></div>
                        <h5 style="font-size: 18px !important;"><strong>2 Lantai</strong></h5>
                        <p class="small-meta" style="font-size: 15px;">Rumah 2 lantai cocok untuk Anda yang menginginkan rumah tinggal yang memiliki banyak ruang di lahan terbatas.</p>
                      </label>
                  </label>
                 </div>
              </div>
            </div>
          </div>
          </div>
         
        </fieldset>  
        
        
        <fieldset>
           <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button">Selanjutnya</button>  
          <div class="col-md-12 mb-5">
          
             <div class=" text-center">
                <h4>MUKA BANGUNAN</h4>
                <p style="font-size: 15px;">Tentukan jumlah muka bangunan rumah tinggal Anda yang terlihat dari jalan</p>
             </div>
             <div class="row">
             <div class="grid-wrapper" style="margin:0 auto; width: auto">  
                <div class="card-wrapper" style="width: 353px !important"> <input type="checkbox" class="custom-control-input" name="muka[]" value="0" id="" hidden checked>
                   <div class="card-content custom-control custom-checkbox image-checkbox">
                       <input type="checkbox" class="custom-control-input" name="muka[]" value="1" id="check-1mk" checked>
                        <label class="custom-control-label-d" for="check-1mk">
                          <div class="card-state-icon"></div>
                          <label for="check-1mk">
                            <div class="image mb-4"><img class="image" src="assets/img/assessment/muka_lantai/1_muka.jpg"></div>
                            <h5 style="font-size: 18px !important;"><strong>1 Muka</strong></h5>
                            <p class="small-meta" style="font-size: 15px;">Rumah tinggal 1 muka biasanya diperuntuk kan apabila di sisi samping lahan Anda sudah terdapat bangunan lain</p>
                          </label>
                        </label>
                    </div>
                 </div>
                 <div class="card-wrapper" style="width: 353px !important">
                   <div class="card-content custom-control custom-checkbox image-checkbox">
                       <input type="checkbox" class="custom-control-input" name="muka[]" value="2" id="check-2mk" checked>
                       <label class="custom-control-label-d" for="check-2mk">
                         <div class="card-state-icon"></div>
                         <label for="check-2mk">
                           <div class="image mb-4"><img class="image" src="assets/img/assessment/muka_lantai/2_muka.jpg"></div>
                           <h5 style="font-size: 18px !important;"><strong>2 Muka</strong></h5>
                           <p class="small-meta" style="font-size: 15px;">Rumah tinggal 2 muka diperuntuk kan apabila minimal terdapat 2 sisi samping rumah Anda yang berbatasan dengan jalan</p>
                         </label>
                       </label>
                    </div>
                  </div>
              </div>
              </div>  
          </div>
         
         
        </fieldset>
        
        <fieldset>
          <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button">Selanjutnya</button>  
          <div class="col-md-12 mb-5">
             <div class="text-center mb-5">
                <h4>KAMAR TIDUR</h4>
                <p style="font-size: 15px;">Kamar tidur merupakan salah satu ruang penting di dalam rumah tinggal anda. <br> Tentukan jumlah kamar tidur yang anda butuhkan dengan pertimbangan jumlah anggota keluarga anda. <br> Anda juga dapat memperhitungkan kamar tidur untuk tamu atau ART (Asisten Rumah Tangga).</p>
            </div>
            
            <div class="row">
              <div class="col-md-6" style="margin-left: 30px;">
                <div class="text-right">
                  <img src="assets/img/assessment/kamarTidur1.jpg" class="rounded mb-3" alt="..." style="width:420px;height: 236px;">
                </div>
              </div>
              <div class="col-md-5">
                  <div> 
                    <div style="font-size: 15px;text-align: left;font-weight: bold;">Jumlah Kamar Tidur</div>
                    <div class=' p-none'>
                       <div class='mt-1'>
                          <div class="input-group mb-3" style="width: 50%;">
                              <select class="custom-select" name="jum_kamar_tidur" id="jum_kamar_tidur">
                                  <option value="1,2,3,4,5,6">Pilih Semua</option>
                                  <option value="1">1 kamar</option>
                                  <option value="2">2 kamar</option>
                                  <option value="3">3 kamar</option>
                                  <option value="4">4 kamar</option>
                                  <option value="5">5 kamar</option>
                                  <option value="6">6 kamar</option>
                              </select>
                          </div>
                       </div>
                    </div>
                  </div>
               </div>
             </div>
          </div>
          
        </fieldset>
        
        <fieldset>
           <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button kloset-button">Selanjutnya</button>  
          <div class="col-md-12 mb-5">
              <div class="text-center">
                 <h4> TOILET</h4>
                  <p style="font-size: 15px;">Toilet juga merupakan <br> Tentukan jumlah toilet yang Anda butuhkan di dalam rumah tinggal Anda</p>
              </div>
              <div class="row">
                <div class="col-md-7 text-right" style="margin-left: 30px;">
                    <img src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2019/04/14090018/GettyImages-881475252-2.jpg" class="rounded mb-3" alt="..." style="width:480px;height: 293px;">
                </div>
                <div class="col-md-4 text-left"> 
                    <div class='p-none'>
                        <h5> Jumlah Toilet</h5>
                        <div class='mt-1'>
                           <div class="input-group mb-3" style="width: 50%;">
                                <select class="custom-select" name="jum_toilet" id="jum_toilet" style="font-size: 14px;">
                                    <option value="1,2,3,4,5,6">Pilih Semua</option>
                                    <option value="1">1 Toilet</option>
                                    <option value="2">2 Toilet</option>
                                    <option value="3">3 Toilet</option>
                                    <option value="4">4 Toilet</option>
                                    <option value="5">5 Toilet</option>
                                    <option value="6">6 Toilet</option>
                                </select>
                            </div>
                        </div>
                     </div>
                     <div class="mt-4"> 
                         <h5>Toilet Dalam</h5>
                         <p class="" style="font-size: 14px; margin-bottom: 0px">Apakah Anda membutuhkan toilet yang dapat diakses dari dalam kamar tidur ?</p>
                         <div class='p-none'>
                             <div class="card-group">
                                <input type="checkbox" name="kamar_mandi_dalam" class="checkbox-km-dalam" value="0" checked hidden> 
                                <div class="">
                                    <label>
                                        <input type="checkbox" name="kamar_mandi_dalam" class="checkbox-km-dalam" value="1"> <span class="label-text" style="font-size: 14px; font-weight: 500;color: #4e4e4e;">Ya</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" name="kamar_mandi_dalam" class="checkbox-km-dalam" value="2" checked> <span class="label-text" style="font-size: 14px; font-weight: 500;color: #4e4e4e;">Tidak</span>
                                    </label>
                                </div>
                             </div>
                         </div>
                     </div>
                     <div class="mt-3"> 
                         <h5>Wastafel</h5>
                         <p class="" style="font-size: 14px; margin-bottom: 0px">Apakah Anda membutuhkan wastafel didalam toilet ?</p>
                         <div class='p-none'>
                              <div class="card-group">
                              <input type="checkbox" name="wastafel" class="checkbox-wastafel" value="0" checked hidden>
                              <div class="">
                                  <label>
                                      <input type="checkbox" name="wastafel" class="checkbox-wastafel" value="1"> <span class="label-text" style="font-size: 14px; font-weight: 500;color: #4e4e4e;">Ya</span>
                                  </label>
                              </div>
                              <div class="form-check">
                                  <label>
                                      <input type="checkbox" name="wastafel" class="checkbox-wastafel" value="2" checked> <span class="label-text" style="font-size: 14px; font-weight: 500;color: #4e4e4e;">Tidak</span>
                                  </label>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="mt-3"> 
                      <h5>  Kloset</h5>
                          <p class="" style="font-size: 14px; margin-bottom: 0px">Jenis kloset apa yang Anda inginkan ?</p>
                          <div class='p-none'>
                             <div class="card-group" id="kloset-req">
                                  <div class=""><input type="checkbox" name="kloset_duduk" class="checkbox-kloset" value="0" checked hidden> 
                                      <label class="kloset_duduk_cek">
                                          <input type="checkbox" name="kloset_duduk" class="checkbox-kloset" value="1" required="required" checked> <span class="label-text" style="font-size: 14px; font-weight: 500;color: #4e4e4e;">Duduk</span>
                                      </label>
                                  </div>
                                  <div class="form-check"> <input type="checkbox" name="kloset_jongkok" value="0" class="checkbox-kloset" checked hidden>
                                      <label class="kloset_duduk_cek"> 
                                          <input type="checkbox" name="kloset_jongkok" value="1" class="checkbox-kloset"  class="required" checked> <span class="label-text" style="font-size: 14px; font-weight: 500;color: #4e4e4e;">Jongkok</span>
                                      </label>
                                  </div>
                              </div>
                          </div>
                    </div>
              </div>
            </div>        
          </div> 
         
        </fieldset>
        
        <fieldset>
           <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button">Selanjutnya</button>  
           <div class="col-md-12">
              <div class=" text-center">
                  <h4>RUANG LAINNYA</h4>
                  <p style="font-size: 15px;">Pilihlah ruang-ruang lain yang Anda butuhkan. (Dapat memilih lebih dari satu)</p>
              </div>
              <div class="row">  
                 <!-- <section class="pb-5" style="min-height: 45rem;">
                  <div class="">
                      <div class="row">
                          <div class="col-12">
                              <div class="row" id="rumah-terbaru1"> -->
                                  <div class="col-md-3" style="margin-left: 0px;flex: 0 0 23.667%;max-width: 23.667%;"> 
                                      <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="0" id="" hidden checked>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="1" id="check-rl1">
                                          <label class="custom-control-label-b" for="check-rl1">
                                              <img src="assets/img/assessment/ruang_lain/carport.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Carport</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="5" id="check-rl5" checked>
                                          <label class="custom-control-label-b" for="check-rl5">
                                              <img src="assets/img/assessment/ruang_lain/ruangTamu.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Ruang Tamu</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="7" id="check-rl7" checked disabled>
                                          <label class="custom-control-label-b" for="check-rl7">
                                              <img src="assets/img/assessment/ruang_lain/kamarTidur.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Kamar tidur</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="12" id="check-rl12">
                                          <label class="custom-control-label-b" for="check-rl12">
                                              <img src="assets/img/assessment/ruang_lain/gudang.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Gudang</label> </center>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-md-3" style="flex: 0 0 23.667%;max-width: 23.667%;"> 
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="2" id="check-rl2">
                                          <label class="custom-control-label-b" for="check-rl2">
                                              <img src="assets/img/assessment/ruang_lain/garasi.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Garasi</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="6" id="check-rl6" checked>
                                          <label class="custom-control-label-b" for="check-rl6">
                                              <img src="assets/img/assessment/ruang_lain/ruangKeluarga.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Ruang Keluarga</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="16" id="check-rl16" checked disabled>
                                          <label class="custom-control-label-b" for="check-rl16">
                                              <img src="assets/img/assessment/ruang_lain/toilet.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Toilet</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="10" id="check-rl10">
                                          <label class="custom-control-label-b" for="check-rl10">
                                              <img src="assets/img/assessment/ruang_lain/ruangCuci.png" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;"> Ruang Cuci</label> </center>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-md-3" style="flex: 0 0 23.667%;max-width: 23.667%;"> 
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="3" id="check-rl3">
                                          <label class="custom-control-label-b" for="check-rl3">
                                              <img src="assets/img/assessment/ruang_lain/teras.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Teras</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="11" id="check-rl11" checked>
                                          <label class="custom-control-label-b" for="check-rl11">
                                              <img src="assets/img/assessment/ruang_lain/ruangMakan.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Ruang Makan</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="15" id="check-rl15" checked>
                                          <label class="custom-control-label-b" for="check-rl15">
                                              <img src="assets/img/assessment/ruang_lain/kamarMandiToilet.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Toilet Dalam</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="9" id="check-rl9">
                                          <label class="custom-control-label-b" for="check-rl9">
                                              <img src="assets/img/assessment/ruang_lain/ruangJemur.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Ruang Jemur</label> </center>
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-md-3" style="flex: 0 0 23.667%;max-width: 23.667%;"> 
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="4" id="check-rl4">
                                          <label class="custom-control-label-b" for="check-rl4">
                                              <img src="assets/img/assessment/ruang_lain/taman.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Taman</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="8" id="check-rl8" checked>
                                          <label class="custom-control-label-b" for="check-rl8">
                                              <img src="assets/img/assessment/ruang_lain/dapur.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Dapur</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="13" id="check-rl13">
                                          <label class="custom-control-label-b" for="check-rl13">
                                              <img src="assets/img/assessment/mushola.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Mushola</label> </center>
                                          </label>
                                      </div>
                                      <div class="custom-control custom-checkbox image-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="ruang_lain[]" value="17" id="check-rl17">
                                          <label class="custom-control-label-b" for="check-rl17">
                                              <img src="assets/img/assessment/kolamRenang.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                              <center> <label style="font-size: 15px;">Kolam Renang</label> </center>
                                          </label>
                                      </div>
                                  </div>
                             <!-- </div>
                          </div>
                      </div>
                  </div>
                  </section> -->
              </div>
           </div>
         
        </fieldset>
        
        <fieldset style="position:relative !important;">
           <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button>
          <button type="button" class="top-next next action-button gaya-desain-button">Selanjutnya</button>  
           <div class="col-md-12">
                <div class=" text-center">
                <h4>GAYA DESAIN</h4>
                <p style="font-size: 15px;">Terdapat berbagai jenis gaya desain. Pilihlah ruang-ruang lain yang Anda butuhkan. (Dapat memilih lebih dari satu)</p>
                </div>
            <!-- <input type="checkbox" id="checkall" >Check/Uncheck All -->
             <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkall" checked>
                            <label class="custom-control-label-x" for="checkall">
                                Check / Uncheck All
                            </label>
             </div>
                <div class="row" id="cekgayadesain">  
                    
                    <div class="col-md-4" style="margin-left: 0px;"> 
                        <input type="checkbox" class="custom-control-input" name="gaya_desain[]" value="0" id="" hidden checked>
                        <div class="custom-control custom-checkbox image-checkbox mt-4 gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input" name="gaya_desain[]" value="1" id="check-gd1" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd1">
                                <img src="assets/img/assessment/gaya_desain/rumahModern.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Modern</label> </center>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox image-checkbox gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="4" id="check-gd4" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd4">
                                <img src="assets/img/assessment/gaya_desain/rumahKontemporer.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Contemporer</label> </center>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox image-checkbox gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="7" id="check-gd7" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd7">
                                <img src="assets/img/assessment/gaya_desain/rumahKlasik.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Clasic</label> </center>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="custom-control custom-checkbox image-checkbox mt-4 gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="2" id="check-gd2" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd2">
                                <img src="assets/img/assessment/gaya_desain/rumahMinimalis.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Minimalis</label> </center>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox image-checkbox gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="5" id="check-gd5" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd5">
                                <img src="assets/img/assessment/gaya_desain/rumahTropis.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Tropical</label> </center>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox image-checkbox gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="8" id="check-gd8" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd8">
                                <img src="assets/img/assessment/gaya_desain/rumahSkandinavian.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Skandinavian</label> </center>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="custom-control custom-checkbox image-checkbox mt-4 gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="3" id="check-gd3" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd3">
                                <img src="assets/img/assessment/gaya_desain/rumahIndustrial.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Industrial</label> </center>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox image-checkbox gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="6" id="check-gd6" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd6">
                                <img src="assets/img/assessment/gaya_desain/rumahTradisional.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Tradisional</label> </center>
                            </label>
                        </div>
                        <div class="custom-control custom-checkbox image-checkbox gaya_desain_cek">
                            <input type="checkbox" class="custom-control-input"  name="gaya_desain[]" value="9" id="check-gd9" required="required" checked>
                            <label class="custom-control-label-b" for="check-gd9">
                                <img src="assets/img/assessment/gaya_desain/rumahAsian.jpg" alt="#" class="img-fluid" style="width: 220px;height: 165px;">
                                <center> <label style="font-size: 15px;">Asian</label> </center>
                            </label>
                        </div>
                    </div>
                </div>
           </div>
         
        </fieldset>
        
        
        
        
        
        <fieldset>
           <button type="button" class="top-back action-button previous previous_button">Sebelumnya</button> 
           <a onclick="return getAssessmentProduk();" class="top-next action-button" style="background: #e20606;border: 1px solid #e20606;">Selesai</a> 
          <div class="col-md-12">
             <div class=" text-center">
                <h4>MATERIAL BANGUNAN</h4>
                <p style="font-size: 15px;">Pilihlah material bangunan untuk rumah tinggal Anda <br> pilih material bangunan untuk bagian Struktur, Lantai, Dinding, Plafon, Atap, Pintu dan Jendela </p>
             </div>
          <div class="row">
             <div class="col-md-2 scrollable-ma"> 
                <center>
                  <h5> Struktur</h5> <input type="checkbox" class="custom-control-input"  name="material[]" value="0" id="" checked hidden>
                  <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                      <input type="checkbox" class="custom-control-input"  name="material[]" value="1" id="check-ma1">
                      <label class="custom-control-label-a" for="check-ma1">
                          <img src="assets/img/assessment/material/struktur_beton_bertulang.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                          <center class="mt-2"> <label style="font-size: 13px;">Beton Bertulang</label> </center>
                      </label>
                  </div>
                  <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                      <input type="checkbox" class="custom-control-input"  name="material[]" value="2" id="check-ma2">
                      <label class="custom-control-label-a" for="check-ma2">
                          <img src="assets/img/assessment/material/struktur_baja.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                          <center class="mt-2"> <label style="font-size: 13px;">Baja</label> </center>
                      </label>
                  </div>
                  <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                      <input type="checkbox" class="custom-control-input"  name="material[]" value="3" id="check-ma3">
                      <label class="custom-control-label-a" for="check-ma3">
                          <img src="assets/img/assessment/material/struktur_kayu.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                          <center class="mt-2"> <label style="font-size: 13px;">Kayu</label> </center>
                      </label>
                  </div>
                </center>
             </div>
            <div class="col-md-2"> 
            <center><h5> Lantai</h5>
            <section class="pb-5">
                <div class="lantai">
                    <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                        <input type="checkbox" class="custom-control-input"  name="material[]" value="4" id="check-ma4">
                        <label class="custom-control-label-a" for="check-ma4">
                            <img src="assets/img/assessment/material/lantai_keramik.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                            <center class="mt-2"> <label style="font-size: 13px;">Keramik</label> </center>
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                        <input type="checkbox" class="custom-control-input"  name="material[]" value="5" id="check-ma5">
                        <label class="custom-control-label-a" for="check-ma5">
                            <img src="assets/img/assessment/material/lantai_ht.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                            <center class="mt-2"> <label style="font-size: 13px;">HT</label> </center>
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                        <input type="checkbox" class="custom-control-input"  name="material[]" value="6" id="check-ma6">
                        <label class="custom-control-label-a" for="check-ma6">
                            <img src="assets/img/assessment/material/lantai_vinyl.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                            <center class="mt-2"> <label style="font-size: 13px;">Vinyl</label> </center>
                        </label>
                    </div>

                 </div>
             </section>
             </center>
             </div>

          <div class="col-md-2"> 
          <center><h5> Dinding</h5>   
          <section class="pb-5">
              <div class="dinding">
                  <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                      <input type="checkbox" class="custom-control-input"  name="material[]" value="8" id="check-ma8">
                      <label class="custom-control-label-a" for="check-ma8">
                          <img src="assets/img/assessment/material/dinding_cat.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                          <center class="mt-2"> <label style="font-size: 13px;">Cat</label> </center>
                      </label>
                  </div>
                  <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                      <input type="checkbox" class="custom-control-input"  name="material[]" value="9" id="check-ma9">
                      <label class="custom-control-label-a" for="check-ma9">
                          <img src="assets/img/assessment/material/dinding_batu_alam.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                          <center class="mt-2"> <label style="font-size: 13px;">Batu Alam</label> </center>
                      </label>
                  </div>
                  
                  <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                      <input type="checkbox" class="custom-control-input"  name="material[]" value="13" id="check-ma13">
                      <label class="custom-control-label-a" for="check-ma13">
                          <img src="assets/img/assessment/material/dinding_woodplank.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                          <center class="mt-2"> <label style="font-size: 13px;">Wood Plank</label> </center>
                      </label>
                  </div>
                 
              </div>
          </section>
          </center>
          </div>

          <div class="col-md-2 scrollable-ma"> 
              <center><h5> Plafon</h5>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="18" id="check-ma18">
                  <label class="custom-control-label-a" for="check-ma18">
                      <img src="assets/img/assessment/material/plafon_gypsumboard.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">Gypsumboard</label> </center>
                  </label>
              </div>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="19" id="check-ma19">
                  <label class="custom-control-label-a" for="check-ma19">
                      <img src="assets/img/assessment/material/plafon_grc_board.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">GRC Board</label> </center>
                  </label>
              </div>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="20" id="check-ma20">
                  <label class="custom-control-label-a" for="check-ma20">
                      <img src="assets/img/assessment/material/plafon_pvc.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">PVC</label> </center>
                  </label>
              </div>
              </center>
          </div>
          <div class="col-md-2 scrollable-ma"> 
              <center><h5> Atap</h5>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="21" id="check-ma21">
                  <label class="custom-control-label-a" for="check-ma21">
                      <img src="assets/img/assessment/material/atap_genteng.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">Genteng</label> </center>
                  </label>
              </div>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="22" id="check-ma22">
                  <label class="custom-control-label-a" for="check-ma22">
                      <img src="assets/img/assessment/material/atap_galvalum.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">Galvalum</label> </center>
                  </label>
              </div>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="23" id="check-ma23">
                  <label class="custom-control-label-a" for="check-ma23">
                      <img src="assets/img/assessment/material/atap_dag_beton.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">Dag Beton</label> </center>
                  </label>
              </div>
              </center>
          </div>
          <div class="col-md-2 scrollable-ma"> 
              <center><h5> Pintu & Jendela</h5>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="24" id="check-ma24">
                  <label class="custom-control-label-a" for="check-ma24">
                      <img src="assets/img/assessment/material/pintujendela_kayu.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">Kayu</label> </center>
                  </label>
              </div>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="25" id="check-ma25">
                  <label class="custom-control-label-a" for="check-ma25">
                      <img src="assets/img/assessment/material/pintujendela_alumunium.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">Alumunium</label> </center>
                  </label>
              </div>
              <div class="custom-control custom-checkbox image-checkbox mt-3 pl-rem">
                  <input type="checkbox" class="custom-control-input"  name="material[]" value="26" id="check-ma26">
                  <label class="custom-control-label-a" for="check-ma26">
                      <img src="assets/img/assessment/material/pintujendela_upvc.jpg" alt="#" class="img-fluid rounded-circle" style="width: 115px;height: 115px;">
                      <center class="mt-2"> <label style="font-size: 13px;">UPVC</label> </center>
                  </label>
              </div>
              </center>
          </div>
      </div>
          </div>
         
        </fieldset> 
        
      </form>  
    </section> 



<div class="container not-found" id="not-found" style="margin-top:7rem;" hidden> 
   <div class="" style="width: 345px;margin-left: 35%;">
      <img class="card-img-top" src="<?php echo base_url('assets/img/not_found_desain.png') ?>" alt="Card image cap">
      <div class="card-footer text-center c-nfound mt-3" style="width: 345px;border-top: 0;padding: 0">
        <span class="text-center">
            <a href="<?php echo base_url('assessment') ?>" class="btn btn-success" style="width: 140px;border-radius: 0;">Asesmen Ulang</a>
            <a href="https://web.whatsapp.com/send?phone=628112636228&text=Selamat Siang
Saya ingin bekonsultasi desain rumah dengan rumahtinggal.id " class="btn btn-danger" style="width: 197px;border-radius: 0;">Konsultasi dengan Kami</a>
        </span>
      </div>
   </div>
</div> 




<div id="hasil-assessment" class="container p-0" style="margin-top : 90px;">  
    <section class="offered-area mt-3 mb-5" id="hasil-assessment-title">
        <center><h2>Hasil Asesmen</h2></center>   
    </section> 
  <div>
    <div class="row mb-4" style="padding: 11px 0px;background: #3a658a05;box-shadow: 0px 2px 12px 2px #88888814;">
       <div class="item-filter mb-4" style="width: 66%;left: 30%;margin-left: 14%;margin-right: 14%;">
          <span class="item-title" style="text-align: center;margin-left: 49%;margin-right: 49%;">Biaya Konstruksi</span>
          <div style="margin-top: 7px;">
              <input type="text" class="js-range-slider-harga-konstruksi" id="harga_konstruksi" name="harga_konstruksi" value=""/>    
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12" id="katalog-produk-filter"></div>
    </div>
    <center>
        <div class="card-body text-center c-found mt-4 mb-5" style="width: 38em;">
            <p class="card-title text-center"> Apakah hasil assesment sesuai dengan yang Anda inginkan ? <br> Konsultasikan dengan tim kami jika anda menginginkan desain lain. </p>
            <p class="card-text"></p>
            <span class="text-center">
                <a href="https://web.whatsapp.com/send?phone=628112636228&text=Selamat Siang
Saya ingin bekonsultasi desain rumah dengan rumahtinggal.id " class="btn btn-danger">Konsultasi dengan Kami</a>
            </span>
        </div>
    </center>
  </div>
</div>

</div>

        <!-- <div style="margin-top: 7em;"></div> -->
<div style="margin-top: 1em;"></div>
<!-- start footer Area -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<!-- <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script> -->
      
      
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script> -->
      
      
      
      
      
      
   <!-- jQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<!-- jQuery Easing JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<!-- Telephone Input JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<!-- jQuery Nice Select JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
<!-- Initialization -->   
<script src="<?php echo base_url('assets/js/step-script.js') ?>"></script>      
      
      
   

      
      
      
      <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!-- <script src="<?php echo base_url('assets/beranda/js/vendor/jquery-1.11.2.min.js') ?>"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
      
      
      
      
      
      
      
      
      
      
      <script type="text/javascript">
    
     // $("#kloset-req").validate();
function showDiv() {
document.getElementById('welcomeDiv').style.display = "block";
}

       $(".js-range-slider-harga-konstruksi").ionRangeSlider({
       skin: "round",
       type: "double",
        grid: true,
        min: 0,
        max: 1000000000,
        from: 0,
     to :1000000000,
        from_min: 0,
        from_max: 1000000000,
        from_shadow: true,
        prefix: "Rp",
     step: 50000000,
      force_edges: false,     // force UI in the box
        hide_min_max: false,    // show/hide MIN and MAX labels
        hide_from_to: false,    // show/hide FROM and TO labels
        block: false 
  
    });
  
// $(".js-range-slider-lebar").ionRangeSlider({
//     skin: "round",
//     step: 1,
//     type: "single",
//     grid: true,
//     min: 0,
//     max: 10,
//     from: 0,
//     to: 10,
//     prefix: ""
// });

// $(".js-range-slider-lebar").ionRangeSlider({
//      skin: "round",
//     step: 1,
//     type: "double",
//     grid: true,
//     min: 0,
//     max: 10,
//     from: 0,
//     to: 10,
//     prefix: ""
// });
// $(".js-range-slider-panjang").ionRangeSlider({
//      skin: "round",
//     step: 1,
//     type: "single",
//     grid: true,
//     min: 0,
//     max: 20,
//     from: 0,
//     to: 20,
//     prefix: ""
// });
// $(".js-range-slider-tidur").ionRangeSlider({
//      skin: "round",
//     step: 1,
//     type: "single",
//     grid: true,
//     min: 0,
//     max: 4,
//     from: 0,
//     to: 4,
//     prefix: ""
// });
$(".js-range-slider-toilet").ionRangeSlider({
     skin: "round",
    step: 1,
    type: "single",
    grid: true,
    min: 0,
    max: 4,
    from: 0,
    to: 4,
    prefix: ""
});


      /* -------------------------------------------------------------
            bootstrapTabControl
        ------------------------------------------------------------- */
        function bootstrapTabControl(){
            var i, items = $('.nav-link'), pane = $('.tab-pane');
            // next
            $('.nexttab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i < items.length - 1){
                    // for tab
                    $(items[i]).removeClass('disabled');
                    $(items[i]).addClass('disabled');
                    $(items[i]).removeClass('active');
                    $(items[i+1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i+1]).addClass('show active');
                }
            });
            // Prev
            $('.prevtab').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                    break;
                    }
                }
                if(i != 0){
                    // for tab
                    $(items[i]).removeClass('disabled');
                    $(items[i]).addClass('disabled');
                    $(items[i]).removeClass('active');
                    $(items[i-1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i-1]).addClass('show active');
                }
            });
        }
        bootstrapTabControl();
  
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);


function getAssessmentProduk(){    
  let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
               $.ajax({
                   url : "<?php echo base_url('api/getAssessmentProduk') ?>",
                   type : "POST",
                   dataType: "JSON",
                   data: $('#frm-assessment-tes :input').serialize(),
                   success: function(data){
                    if (data.length !='') {
                    $('#frm-assessment').hide();
                    $('#hasil-assessment-title').show();
                    $('#hasil-assessment').show();
    
                for (k = 0; k <= data.length-1;k++) {
                  let biaya = data[k].lantai == 1 ? 3500000 * data[k].luas_bangunan : 4500000 * data[k].luas_bangunan;
                    $('#katalog-produk-filter').prepend(`<div class="col-md-3 p-0 grid">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="nojavascript...void(0)" class="" >
                                        <img class="pic-1" src="<?php echo  base_url('assets/img/desain/') ?>` +data[k].foto+ `">
                                        <img class="pic-2" src="<?php echo  base_url('assets/img/desain/') ?>` +data[k].foto+ `">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="title" title="` +data[k].nama_rumah+ `" >` +data[k].nama_rumah+ `</div>
                                    <div class="product-rating">
                                        <div class="arsitek" title="` +data[k].nama_arsitek+ `" >` +data[k].nama_arsitek+ `</div>
                                        <div class="jstars" data-value="` +data[k].rating+ `" data-color="gold" data-size="17px"></div>
                                    </div>
                                    <div class="product-feature">
                                        <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                            <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                                            <span>` +data[k].luas_lahan+ ` m<sup>2</sup></span>
                                        </div>
                                        <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                            <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                                            <span>` +data[k].luas_bangunan+ ` m<sup>2</sup></span>
                                        </div>
                                        <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                            <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                                            <span>` +data[k].lantai+ `</span>
                                        </div>
                                        <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                            <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                                            <span>` +data[k].kamar_tidur+ `</span>
                                        </div>
                                        <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                            <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                                            <span>` +data[k].toilet+ `</span>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <p>Lahan minimal: <span style="font-weight: 400;">` +data[k].panjang_lahan+ ` m x ` +data[k].lebar_lahan+ ` m</span></p>
                                         <p>Biaya konstruksi <span style="font-weight: 400;" data-tootik="Estimasi awal" data-tootik-conf="square">Rp` +number_format(biaya, 0, ',', '.')+ `</span></p>
                                        <div class="product-statistic">
                                            <div class="statistic">
                                                <button class="btn btn-detail" >Detail</a>
                                            </div>
                                            <div class="statistic">
                                                <span class="view">
                                                    <i class="fa fa-eye"></i>` +data[k].dilihat+ `
                                                </span>
                                            </div>
                                            <div class="statistic">
                                                <span class="like">
                                                    <i class="fa fa-heart-o" data-id="` +data[k].id_rumah+ `"></i><span class="value">` +data[k].suka+ `</span>
                                                </span>
                                            </div>

                                            <div class="statistic">
                                                <div class="share"><i class="fa fa-share-alt"></i>
                                                  <div class="social">
                                                      <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://estimator.id/arsi-hack/detail/` +data[k].id_rumah+ `" target="_blank"><i class="fa fa-facebook"></i></a>
                                                      <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello twitter https://estimator.id/arsi-hack/detail/` +data[k].id_rumah+ `" target="_blank"><i class="fa fa-twitter"></i></a>
                                                      <a class="whatsapp" href="https://web.whatsapp.com/send?text=https://estimator.id/arsi-hack/detail/` +data[k].id_rumah+ `" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                    }
                     $('<script src="https://estimator.id/arsi-hack/assets/js/jstars.min.js"></' + 'script>').appendTo('#katalog-produk-filter');
                   //  $('.like .fa').on('click', function(){
        //    let jum_stat = $(this).next().text();
         //   if ($(this).hasClass('fa-heart-o')) {
           //     $(this).removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
            //    jum_stat  ;
          //  } else {
             //   $(this).removeClass('fa-heart').addClass('fa-heart-o').css('color','#026cb6');
              //  jum_stat--;
            //}
          //  $(this).next().text(jum_stat);
      //  });
                      
                       $('.like .fa').on('click', function(){
            if (id_customer != null && id_customer != '') {
              let id_rumah = $(this).data('id');
              let jum_stat = $(this).next().text();
              if ($(this).hasClass('fa-heart-o')) {
                  $(this).removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
                  jum_stat++;
                  
                  $.ajax({
                     url: "<?= base_url('api/simpanDisukai') ?>",
                     type: "POST",
                     data: {"id_rumah": id_rumah,"id_customer": id_customer,"suka": 1},
                     dataType: "JSON",
                     success: function(data){}
                  });
              } else {
                  $(this).removeClass('fa-heart').addClass('fa-heart-o').css('color','#026cb6');
                  jum_stat--;
                
                  $.ajax({
                     url: "<?= base_url('api/hapusDisukai/') ?>"+id_rumah+"/"+id_customer,
                     type: "POST",
                     dataType: "JSON",
                     success: function(data){}
                  });
              }
              $(this).next().text(jum_stat);
            } else {$('#ModalLogin').modal('show')};
        });

                    }
                    if (data.length=='') {
                        $('#frm-assessment').hide();
                        $('#hasil-assessment-title').hide();
                        $('#hasil-assessment').hide();
                        $('#not-found').removeAttr('hidden');
                    }
                    
                    },
                   error: function(jqHR, texStatus, errorThrown){
                   }
               });
    }







(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

    // $(".checkbox").change(function(){
    //     $(".checkbox").prop('checked',false);
    //     $(this).prop('checked',true);
    // });
    $(".checkbox-wastafel").change(function(){
        $(".checkbox-wastafel").prop('checked',false);
        $(this).prop('checked',true);
    });
    // $(".checkbox-kloset").change(function(){
    //     $(".checkbox-kloset").prop('checked',false);
    //     $(this).prop('checked',true);
    // });
    $(".checkbox-km-dalam").change(function(){
        $(".checkbox-km-dalam").prop('checked',false);
        $(this).prop('checked',true);
    });



    $(".nexttab").on('click', function(){
      // if($(e.srcElement).attr('id')=='id')
      if($("#material-tab.active").attr('id') =='material-tab'){
        $(".nexttab").removeClass( 'btn-utama' );
        $(".nexttab").addClass( 'selesai' );
         $(".nexttab").removeClass( 'nexttab' );
         
        $(".selesai").attr('id', 'selesai');
        $(".selesai").html('Selesai');
      $(".selesai").addClass('button-red');
      $('.selesai').attr('onclick', 'getAssessmentProduk()');
     //   getAssessmentProduk();
      }
    });

    $(".prevtab").on('click', function(){
      // if($(e.srcElement).attr('id')=='id')
      // if($("#material-tab.active").attr('id') =='material-tab'){
        $(".selesai").removeClass( 'button-red' );
        $(".selesai").html('Selanjutnya');
      $(".selesai").addClass('btn-utama');
      $(".selesai").attr('onclick', '');
      $(".selesai").addClass( 'nexttab' );
      $(".selesai").removeClass( 'selesai' );

    // }
    });

 // $("#selesai").on('click', function(){
      
 //        getAssessmentProduk();
    
 //    });

 $('#hasil-assessment').hide();
 $('#hasil-assessment-title').hide();





    // $(".irs-single").remove();
    // $(".irs-max").remove();
    // $(".irs-min").remove();
    // $(".irs-handle.from").remove();


    // $(".irs-single").remove();
    $(".irs-max").remove();
    $(".irs-min").remove();
    // $(".irs-handle.from").remove();
    //  $(".tutup").on('click', function(){
    //      document.getElementById('welcomeDiv').style.display = "none";
    // });
  $('body').on('contextmenu', 'img', function(e){ 
         return false; 
     });
    $('#myCarousel').on('contextmenu', 'img', function(e){ 
         return false; 
     });

})();

$(".js-range-slider").ionRangeSlider({
     skin: "round",
    step: 1,
    type: "double",
    grid: true,
    min: 0,
    max: 25,
    from: 0,
    to: 800,
    prefix: ""
});
  
  $(".js-range-slider-lebar").ionRangeSlider({
    // skin: "round",
    // step: 1,
    // type: "single",
    // grid: true,
    // min:5,
    // max: 10,
    // from: 10,
    // to: 10,
    // prefix: ""

    skin: "round",
    grid: true,
    min: 5,
    max: 10,
    from: 10,
    grid_num: 5,
    from_min: 5,      // set min position for FROM handle (replace FROM to TO to change handle)
    from_max: 10,      // set max position for FROM handle
    from_shadow: true 
});

// $(".js-range-slider-lebar").ionRangeSlider({
//      skin: "round",
//     step: 1,
//     type: "double",
//     grid: true,
//     min: 0,
//     max: 10,
//     from: 0,
//     to: 10,
//     prefix: ""
// });
$(".js-range-slider-panjang").ionRangeSlider({
    // skin: "round",
    // step: 1,
    // type: "single",
    // grid: true,
    // min: 8,
    // max: 20,
    // from: 20,
    // to: 20,
    // prefix: ""

    skin: "round",
    grid: true,
    min: 8,
    max: 20,
    from: 20,
    // grid_num: 5,
    from_min: 8,      // set min position for FROM handle (replace FROM to TO to change handle)
    from_max: 20,      // set max position for FROM handle
    from_shadow: true 
});

$(".js-range-slider-tidur").ionRangeSlider({
     skin: "round",
    step: 1,
    type: "single",
    grid: true,
    min: 0,
    max: 4,
    from: 2,
    to: 4,
    prefix: ""

});
$(".js-range-slider-lantai").ionRangeSlider({
     skin: "round",
    step: 1,
    type: "single",
    grid: true,
    min: 0,
    max: 4,
    from: 1,
    to: 4,
    prefix: ""
});
      
        var timer;
$(document).ready(function(){
   
    
   $('#harga_konstruksi').on('change', function() {
            clearTimeout(timer);
            timer = setTimeout(function(){
                $('#katalog-produk-filter').empty();
              getAssessmentProduk();
            }, 1000);       
        });
  
  
  
  
  $('fieldset').css({'position': 'relative'});

  $("#checkall").click(function(){
                       $("#cekgayadesain").find(":checkbox").attr("checked",this.checked);
                 });
  
  
  
$(".irs-max").remove();
$(".irs-min").remove();
var checked = $('#kloset-req').find(':checked').length;
  if (!checked)
    alert('isi');

});
   
      
      $('.kloset_duduk_cek').change(function() {
        
         var checked = $('.kloset_duduk_cek').find(':checked').length;
        if(!checked) {
           toastr.warning('Jangan lewatkan checlist Anda!'); 
           $(".kloset-button").prop('disabled', true);
        }else{
        $(".kloset-button").removeAttr("disabled");}
    });
      
      
      
      
           $('.gaya_desain_cek').change(function() {
        
         var checked = $('.gaya_desain_cek').find(':checked').length;
        if(!checked) {
           toastr.warning('Jangan lewatkan checlist Anda!'); 
           $(".gaya-desain-button").prop('disabled', true);
         
        }else{
        $(".gaya-desain-button").removeAttr("disabled");}
    }); 
      
       $("#checkall").change(function(){
           var checked = $('.gaya_desain_cek').find(':checked').length;
                       
         if(!checked) {
           $("#cekgayadesain").find(":checkbox").attr("checked",this.checked);
           toastr.warning('Jangan lewatkan checlist Anda!'); 
           $(".gaya-desain-button").prop('disabled', true);
        }else{
        $(".gaya-desain-button").removeAttr("disabled");}
                 });
  
    
      
      
      
      
var checked = $('#kloset-req').find(':checked').length;
  if (!checked)
    alert('isi');

 function detailRumah(id){
    location.href = "<?= base_url('detail/') ?>"+id;
}

function detailArsitek(id){
    location.href = "<?= base_url('profil_arsitek/') ?>"+id;
}
      
      jQuery(function($) {
  var requiredCheckboxes = $(':checkbox[required]');
  requiredCheckboxes.on('change', function(e) {
    var checkboxGroup = requiredCheckboxes.filter('[name="' + $(this).attr('name') + '"]');
    var isChecked = checkboxGroup.is(':checked');
    checkboxGroup.prop('required', !isChecked);
  });
  requiredCheckboxes.trigger('change');
        
        
        
$('fieldset').css({'position': 'relative'}); //The specific CSS changes after the first one, are, of course, just examples.
       // $('fieldset').attr('style','position:relative');
});

      
  
      
      
      
      
        function verificationForm(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            
          //disini2
            current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = '-';
                        //2. bring next_fs from the right(50%)
                        left = (0) +"%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({
                            'transform': 'scale('+scale+')',
                            'position': 'absolute'
                        });
                        next_fs.css({
                            'left': left,
                            'opacity': opacity
                        });
                    },
                    duration: 0,
                    complete: function () {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: 'easeInOutBack'  
            });
        });

        $(".previous").click(function () {
           if (animating) return false;
          animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
          //disini
        current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = '-';
                    //2. take current_fs to the right(50%) - from 0%
                    left = (0)  + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale('+ scale+')',
                        'opacity': opacity,
                       'position': 'relative',
                       'display': 'block'
                    });
                },
                duration: 0,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'   
        });
        });

        $(".submit").click(function () {
            return false;
        })
    }; 
        
  
      verificationForm (); 
    </script>  

    <script src="<?php echo base_url('assets/js/step-script.js') ?>"></script>