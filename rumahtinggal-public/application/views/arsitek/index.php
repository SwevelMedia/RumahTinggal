<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- <link href="<?php echo $this->config->item('url_arsi') ?>assets/css/artikel/style_1.css" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="<?php echo $this->config->item('url_arsi') ?>assets/css/tootik.min.css">
</head>
<style type="text/css">
  select, select > option {
    font-family: 'FontAwesome', 'Calibri';
}
  .fa.fa-map-marker {
    color: #f60000;
    font-size: 20px;
    margin-right: 8px;
}
  
  .social-container {
	 width: 400px;
	 margin: 40vh auto;
	 text-align: center;
}
 .social-icons {
	 padding: 0;
	 list-style: none;
	 margin: 1em;
}
 .social-icons li {
	 display: inline-block;
	 margin: 0.15em;
	 position: relative;
	 font-size: 22px;
}
 .social-icons i {
	 color: #fff;
	 position: absolute;
	 top: 10px;
	 left: 10px;
     right: 10px;
     text-align: center;
	 transition: all 265ms ease-out;
}
 .social-icons a {
	 display: inline-block;
}
 .social-icons a:before {
	 transform: scale(1);
	 -ms-transform: scale(1);
	 -webkit-transform: scale(1);
	 content: " ";
	 width: 42px;
	 height: 42px;
	 border-radius: 100%;
	 display: block;
	 background: linear-gradient(45deg, #00b5f5, #002a8f);
	 transition: all 265ms ease-out;
}
 .social-icons a:hover:before {
	 transform: scale(0);
	 transition: all 265ms ease-in;
}
 .social-icons a:hover i {
	 transform: scale(1.5);
	 -ms-transform: scale(1.5);
	 -webkit-transform: scale(1.5);
	 color: #00b5f5;
	 background: -webkit-linear-gradient(45deg, #00b5f5, #002a8f);
	 -webkit-background-clip: text;
	 -webkit-text-fill-color: transparent;
	 transition: all 265ms ease-in;
}
 
  
  
  .snip1361.white::before {
    content: url(https://rumahtinggal.id/assets/img/watermark-rt-kecil.png);
    position: absolute;
    z-index: 1;
    top: 43%;
    left: 39%;
}
  
  
    /*filter*/
    .custom-select {
    line-height: 1;
    color: #495057;
    }

    .custom-select {
    display: inline-block;
    /*width: 100%;*/
    /*height: calc(2.25rem + 2px);*/
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    /*line-height: 1.5;*/
    /*color: #495057;*/
    vertical-align: middle;
    background: #fff0 url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
        background-size: auto;
    background-size: 8px 10px;
    /*border: 1px solid #ced4da;*/
    /*border-radius: 0.25rem;*/
    appearance: none;
}

    /*filter*/
/*portofolio*/
.snip1361 {
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #141414;
  text-align: left;
  line-height: 1.4em;
  font-size: 12px;
  height: 235px;
}
.snip1361 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1361 img {
  max-width: 100%;
  vertical-align: top;
  height: 177px;
  width: 100%;
}
.snip1361 figcaption {
  position: absolute;
  top: calc(75%);
  width: 100%;
  background-color: #026CB6;
  padding: 5px 25px 65px;
}
.snip1361 figcaption:before {
  position: absolute;
  content: '';
  z-index: 2;
  bottom: 100%;
  left: 0;
  width: 100%;
  height: 165px;
  /*background-image: -webkit-linear-gradient(top, transparent 0%, #026CB6 100%);
  background-image: linear-gradient(to bottom, transparent 0%, #026CB6 100%);*/
}

.snip1361 p {
  margin: 0 0 10px;
}

.snip1361 p {
  font-size: 12px;
  letter-spacing: 1px;
  opacity: 0.9;
}
.snip1361 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
}
.snip1361:hover figcaption,
.snip1361.hover figcaption {
  top: 12px;
  height: 165px;
  z-index: 2;
}












.container_foto {
  background-color: rgba(57, 62, 93, 0.7);
  padding: 0;
  overflow: hidden;
  /*max-width: 309.6px;*/
  /*margin: 5px;*/
  /*height: 225px;*/
  filter: contrast(40%);
}

.container_foto article {
  padding: 10%;
  position: absolute;
  bottom: 0;
  z-index: 1;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.container_foto h3 {
  color: #fff;
  font-weight: 800;
  font-size: 18px;
  border-bottom: #fff solid 1px;
}

.container_foto h4 {
  font-weight: 300;
  color: #fff;
  font-size: 16px;
}

.container_foto img {
  width: 100%;
  top: 0;
  left: 0;
  opacity: 0.5;
  -webkit-transition: all 4s ease;
  -moz-transition: all 4s ease;
  -o-transition: all 4s ease;
  -ms-transition: all 4s ease;
  transition: all 4s ease;
}

.ver_mas {
  background-color: #026cb6;
  position: absolute;
  width: 100%;
  height: 105px;
  bottom: 0;
  z-index: 1;
  opacity: 0;
  transform: translate(0px, 70px);
  -webkit-transform: translate(0px, 70px);
  -moz-transform: translate(0px, 70px);
  -o-transform: translate(0px, 70px);
  -ms-transform: translate(0px, 70px);
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.ver_mas span {
  font-size: 12px;
  color: #fff;
  position: relative;
  margin: 0 auto;
  width: 100%;
  top: 5px;
}


/*hovers*/

.container_foto:hover {
  cursor: pointer;
}

.container_foto:hover img {
  opacity: 0.1;
  transform: scale(1.5);
}

.container_foto:hover article {
  transform: translate(2px, -90px);
  -webkit-transform: translate(2px, -90px);
  -moz-transform: translate(2px, -90px);
  -o-transform: translate(2px, -90px);
  -ms-transform: translate(2px, -90px);
}

.container_foto:hover .ver_mas {
  transform: translate(0px, 0px);
  -webkit-transform: translate(0px, 0px);
  -moz-transform: translate(0px, 0px);
  -o-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  opacity: 1;
}


/*portofolio*/





.slick-list.draggable {
    height: 393px;
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
    height: 310px;
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





























    .column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}
.show {
  display: block;
}

/* Style the buttons */
#myBtnContainer .btn {
border: none;
outline: none;
/*padding: 4px 13px;*/
/*background-color: white;*/
cursor: pointer;
border-radius: 0px;
background: transparent;
border-bottom: 2px solid #ddd;
}

#myBtnContainer .btn:hover {
  background-color: transparent;
}

#myBtnContainer .btn.active {
  /*background-color: #026cb6;*/
color: #026CB6;
border-bottom: 2px solid #026CB6;
/*border: 0 0 0 2;*/
border-right: 0;
border-left: 0;
border-top: 0;
background: transparent;
}

#myBtnContainer .btn:focus, .btn.focus {
    outline: 0;
    box-shadow: none !important;
}













/*card s;ider*/
.draggable{
    height: 32em;
}
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

.card-title {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.card-title:hover {
   white-space: inherit;
overflow: auto;
text-overflow: unset;
}

.card{
  height: 315px;
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
  box-shadow: 0px 3px 3px rgba(212, 208, 208, 0.2);

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
    color: #8d8d8d;
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



.fa.outline-star{
   color: transparent;
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: #ffe300;
 }
 .fa-star {
    color: #ffe300;
}

/*card slider*/
body{
    font-family: 'quicksand';
}
.i-con-prof {
    font-size: 45px;
    color: #026CB6;
    font-weight: 600;
    margin-left: 30px;
}
.card-title a:hover{
	color: #05bcd2 !important;
}
.prev {
  position: absolute;
  z-index: 2;
  margin-top: 165px;
  margin-left: -20px;
  background-color: #026CB6;
  border: 1px solid #026CB6;
}
.next {
  position: absolute;
  z-index: 2;
  margin-top: 165px;
  margin-left: 1090px;
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

.line-header {
    width: 3cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
}
#custom-search-input{
    padding: 0px;
    border-bottom: solid 1px #026CB6;
    /*border-radius: 6px;*/
    /*background-color: #fff;*/
}
.genric-btn {

    line-height: 34px;
}
sup{
    color:#026CB6;
}
.portofolio{
	width:98%;
	height: 14cm;
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
    margin: 2px 0 0 0;
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
.line {
    width: 2cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
}
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
    margin: 10px 20px 0px 0px;
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
	color:#fff ;
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
}
.icon-medd{
	margin: 3px auto;
	font-size: 20px;
	color: #026CB6;
}
.genric-btn.success{
	background: #026CB6;
}
.bg-side{
	background: #f9f9f9;
	border-radius: 17px;
	height: 85.8em;
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
.banner-area .overlay {
    background: none;
    opacity: 1;
}

  .fh5co_small_post_heading {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.overlay {
    width: 100%;
}
#fh5co-title-box .overlay {
    background: rgba(0, 5, 19, 0.85);
}
#fh5co-title-box .page-title img {
    width: 140px;
    border-radius: 140px;
    height: 140px;
    margin-bottom: 0px;
}
    .fh5co_tagg:hover, .fh5co_tagg:focus {
    background: #026CB6;
}
.f-srong{
    font-size: 17px;
}
.single #fh5co-title-box {
    position: relative;
    height: 360px;
    width: 100%;
}

.single #fh5co-title-box .page-title h2 {
    font-size: 40px !important;
}





.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}



</style>
	
<section class="offered-area section-gap" id="offered" style="margin-top: 6em;">
<div class="container">
    <div class="row">
      	<div class="col-lg-3">
            <img src="<?php echo base_url().'assets/img/arsitek/'.$arsitek[0]->foto ?>" style="width: 250px;border-radius: 100%;">
		</div>
        <div class="col-lg-9 black">
        	<h2 class="nama_arsitek mb-2" style="font-weight: 500;"><?php echo $arsitek[0]->nama_arsitek ?></h2>
        	<p><?php echo $arsitek[0]->profil ?></p>
    	    <div class="row">
    		    <div class="col-lg-6">
                    <div class="">
                        <div class="f-srong"><strong>Lokasi</strong></div>
                        <div><i class="fa fa-map-marker"></i><?php echo $arsitek[0]->alamat ?></div>
                     </div>
                    <div class="mt-3">
                        <div><strong class="f-srong">Social Media</strong></div>
                        <div>
                          <ul class="social-icons m-0">
        <li><a href="https://www.instagram.com/<?php echo $arsitek[0]->instagram ?>/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/<?php echo $arsitek[0]->facebook ?>/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=<?php echo $arsitek[0]->email ?>&amp;su=Tanya Arsitek [rumahtinggal.id]&amp;body=Halo <?php echo $arsitek[0]->nama_arsitek ?>, saya ingin bertanya mengenai desain Anda di rumahtinggal.id" target="_blank"><i class="fa fa-envelope"></i></a></li>

    </ul>
                        </div>
                    </div>    			    
    		    </div>
    	    </div>
    </div>
</div>
</div>
</section>


<div class="mt-5" style="background: #026CB6; line-height: 50px;"> <h2 style="color: #fff;line-height: 50px !important" class="text-center">PORTOFOLIO</h2> </div>
<div id="myBtnContainer" class="text-center mb-3 mt-4">
<div class="row" style="margin: 0;">
    <div class="col-md-4">
        <button class="btn active" onclick="filterSelection('desain')"> Desain</button>
        <button class="btn" onclick="filterSelection('terbangun')"> Project</button>
    </div>
    <!-- <div class="col-md-2"></div> -->
    <div class="col-md-7">
        <div class="form-inline mt-2" id="filter-produk" style="float: right;">   
        <div class="form-group item-filter" style="margin-right: 2em;width: 150px;">
            <div id="custom-search-input">
                <div class="input-group">
                    <span class="input-group-btn" style="height: 28px;">
                        <button class="btn btn-lg" type="button" style="border: none;margin:0;"><i class="fa fa-search" aria-hidden="true" style="font-size: 19px;color: #026CB6"></i></button>
                    </span>
                    <input type="text" style="height: 28px; font-size: 13px;background: transparent;" class="form-control" name="cari_rumah" id="cari_rumah" placeholder="Cari disini">
                </div>
            </div>
        </div>
        <div class="form-group input-group" style="width: 150px;">
            <select class="custom-select" id="order" name="order" style="height: 30px;font-size: 12px;border:none; border-bottom: 1px solid #026CB6; border-radius: 0;font-weight: 50;">
                <option value="0">Urut berdasar</option>
                <option value="1">Desain terbaru</option>
                <option value="2">Desain terlama</option>
                <option value="3">Ascending (A-Z)</option>
                <option value="4">Descending (Z-A)</option>
            </select>
        </div>
        </div>
    </div>
</div>
</div>

<!-- Portfolio Gallery Grid -->
<div class="container mb-5">
<div class="row">
<div id="desain_terbangun" class="col-md-12 column terbangun">
<?php foreach($portofolio as $item) : ?> 
<div class="col-md-2 col-sm-6 p0 grid" style="float: left;">
    <figure class="snip1361 white">
        <img src="<?= base_url().'assets/img/portofolio/'.$item->foto ?>" alt="portofolio" />
        <figcaption>
            <h6 class="white" style="font-weight: 400;"><?= $item->judul ?></h6>
            <p><?= $item->kategori ?></p> <hr style="margin: 0 !important;background:#fff;"><p>
                <div class="card-group">
                    <div style="width: 46px;"><span>Klien</span></div>
                    <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;"><?= $item->klien ?></span></div>
                </div>
                <div class="card-group">
                    <div style="width: 46px;"><span>Lokasi</span></div>
                    <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;"><?= $item->lokasi ?></span></div>
                </div>
                <div class="card-group">
                    <div style="width: 46px;"><span>Tahun</span></div>
                    <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;"><?= $item->tahun ?></span></div>
                </div>
                <div class="card-group">
                    <div style="width: 46px;"><span>Status</span></div>
                    <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;"><?= $item->status ?></span></div>
                </div>
            </p>
        </figcaption>
        <a href="#"></a>
    </figure>
</div>
<?php endforeach ?>
</div>
<div id="desain_terbangun_filter" class="col-md-12 column terbangun"></div>

<div id="desain" class="col-md-12 column desain">
<?php foreach($produk as $item) : ?>    
<div class="col-md-2 col-sm-6 p0 grid"  style="float:left;">
    <div class="product-grid">
        <div class="product-image desain">
            <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">
                <img class="pic-1" src="<?= base_url().'assets/img/thumbnail/'.$item->foto ?>">
                <img class="pic-2" src="<?= base_url().'assets/img/thumbnail/'.$item->foto ?>">
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
                    <img src="<?= base_url().'assets/img/icon/icon_luas_lahan.png' ?>" />
                    <span><?= $item->luas_lahan ?> m<sup>2</sup></span>
                </div>
                <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                    <img src="<?= base_url().'assets/img/icon/icon_luas_bangunan.png' ?>" />
                    <span><?= $item->luas_bangunan ?> m<sup>2</sup></span>
                </div>
                <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                    <img src="<?= base_url().'assets/img/icon/icon_jml_lantai.png' ?>" />
                    <span><?= $item->lantai ?></span>
                </div>
                <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                    <img src="<?= base_url().'assets/img/icon/icon_kmr_tidur.png' ?>" />
                    <span><?= $item->kamar_tidur ?></span>
                </div>
                <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                    <img src="<?= base_url().'assets/img/icon/icon_toilet.png' ?>" />
                    <span><?= $item->toilet ?></span>
                </div>
            </div>
            <div class="product-detail">
                <p>Lahan minimal: <span style="font-weight: 400;"><?= $item->lebar_lahan.' m x '.$item->panjang_lahan.' m' ?></span></p>
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
                        
                        <span class="like" onclick="sukaRumah(<?= $item->id_rumah ?>)" data-id="<?= $item->id_rumah ?>">
                          <i class="fa fa-heart-o"></i><span class="value"><?= $item->suka ?></span>
                        </span>
                       <!--  <span class="like">
                           <i class="fa fa-heart-o"></i><span class="value"><?= $item->suka ?></span>
                        </span> -->
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
<?php endforeach ?>
</div>
<div id="desain_filter" class="col-md-12 column desain"></div>
</div>
</div>

<script>
filterSelection("desain") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function detailRumah(id){
    location.href = "<?= base_url().'detail/' ?>"+id;
}

function detailArsitek(id){
    location.href = "<?= base_url().'profil_arsitek/' ?>"+id;
}

function katalogProdukDesainArsitek(){
    var cari_rumah = $('#cari_rumah').val();
        var order = $('#order').val();
         $.ajax({
           url: "<?= base_url() ?>api/getKatalogProdukFilterArsitek/"+<?= $arsitek[0]->id_arsitek ?>,
           type: "POST",
           dataType: "JSON",
           data: {"cari_rumah" :cari_rumah,"order" :order},
           success: function(data){
               $('#desain').hide().empty();
               $('#desain_filter').empty();
            
               for (k = 0; k <= data.length-1;k++ ){
                    $('#desain_filter').append(`<div class="col-md-2 col-sm-6 p0 grid" style="float:left;">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="javascript:void(0)" class="image" onclick="detailRumah(`+data[k].id_rumah+`)">
                                    <img class="pic-1" src="<?php echo base_url() ?>assets/img/thumbnail/`+data[k].foto+`">
                                    <img class="pic-2" src="<?php echo base_url() ?>assets/img/thumbnail/`+data[k].foto+`">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="title" title="`+data[k].nama_rumah+`" onclick="detailRumah(`+data[k].id_rumah+`)">`+data[k].nama_rumah+`</div>
                                <div class="product-rating">
                                    <div class="arsitek" title="`+data[k].nama_arsitek+`" onclick="detailArsitek(`+data[k].id_arsitek+`)">`+data[k].nama_arsitek+`</div>
                                    <div class="jstars" data-value="`+data[k].rating+`" data-color="gold" data-size="17px"></div>
                                </div>
                                <div class="product-feature">
                                    <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                                        <img src="<?= base_url().'assets/img/icon/icon_luas_lahan.png' ?>" />
                                        <span>`+data[k].luas_lahan+` m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                                        <img src="<?= base_url().'assets/img/icon/icon_luas_bangunan.png' ?>" />
                                        <span>`+data[k].luas_bangunan+` m<sup>2</sup></span>
                                    </div>
                                    <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                                        <img src="<?= base_url().'assets/img/icon/icon_jml_lantai.png' ?>" />
                                        <span>`+data[k].lantai+`</span>
                                    </div>
                                    <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                                        <img src="<?= base_url().'assets/img/icon/icon_kmr_tidur.png' ?>" />
                                        <span>`+data[k].kamar_tidur+`</span>
                                    </div>
                                    <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                                        <img src="<?= base_url().'assets/img/icon/icon_toilet.png' ?>" />
                                        <span>`+data[k].toilet+`</span>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <p>Lahan minimal: <span style="font-weight: 400;">`+data[k].lebar_lahan+` m x `+data[k].panjang_lahan+` m</span></p>
                                    <div class="product-statistic">
                                        <div class="statistic">
                                            <button class="btn btn-detail" onclick="detailRumah(`+data[k].id_rumah+`)">Detail</a>
                                        </div>
                                        <div class="statistic">
                                            <span class="view">
                                                <i class="fa fa-eye"></i>`+data[k].dilihat+`
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <span class="like" onclick="sukaRumah(`+data[k].id_rumah+`)" data-id="`+data[k].id_rumah+`">
                                              <i class="fa fa-heart-o"></i><span class="value">`+data[k].suka+`</span>
                                            </span>
                                        </div>
                                        <div class="statistic">
                                            <div class="share"><i class="fa fa-share-alt"></i>
                                              <div class="social">
                                                  <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank"><i class="fa fa-facebook"></i></a>
                                                  <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank"><i class="fa fa-twitter"></i></a>
                                                  <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank"><i class="fa fa-whatsapp"></i></a>
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
           },
           error: function(jqHR, texStatus, errorThrown){
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
           }
        });
}

function katalogProdukArsitek(){
        var cari_rumah = $('#cari_rumah').val();
        var order = $('#order').val();
        $.ajax({
           url: "<?= base_url() ?>api/getKatalogProdukArsitek/"+<?= $arsitek[0]->id_arsitek ?>,
           type: "POST",
           data: {"cari_rumah" :cari_rumah,"order" :order},
           dataType: "json",
           success: function(tes){
               $('#desain_terbangun').hide().empty();
               $('#desain_terbangun_filter').empty();
               for (var k = 0; k <= tes.length-1;k++ ){
                    $('#desain_terbangun_filter').append(`<div class="col-md-2 col-sm-6 p0 grid" style="float:left;">
                        <figure class="snip1361 white">

                            <img src="<?php echo base_url() ?>assets/img/portofolio/`+tes[k].foto+`" alt="portofolio">
                            <figcaption>
                                <h6 class="white" style="font-weight: 400;">`+tes[k].judul+`</h6>
                                <p>`+tes[k].kategori+`</p> <hr style="margin: 0 !important;background:#fff;"><p>
                                    <div class="card-group">
                                        <div style="width: 46px;"><span>Klien</span></div>
                                        <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].klien+`</span></div>
                                    </div>
                                    <div class="card-group">
                                        <div style="width: 46px;"><span>Lokasi</span></div>
                                        <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].lokasi+`</span></div>
                                    </div>
                                    <div class="card-group">
                                        <div style="width: 46px;"><span>Tahun</span></div>
                                        <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].tahun+`</span></div>
                                    </div>
                                    <div class="card-group">
                                        <div style="width: 46px;"><span>Status</span></div>
                                        <div style="width: 135px;"><span>:</span><span style="margin-left: 5px;">`+tes[k].status+`</span></div>
                                    </div>
                                </p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>`);
                    }
           },
           error: function(jqHR, texStatus, errorThrown){
                 alert('tes');
           }
        });
    }

$(document).ready(function(){


    var value = $(this).attr('data-filter');
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }

        $('.like .fa').on('click', function(){
            let jum_stat = $(this).next().text();
            if ($(this).hasClass('fa-heart-o')) {
                $(this).removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
                jum_stat++;
            } else {
                $(this).removeClass('fa-heart').addClass('fa-heart-o').css('color','#026cb6');
                jum_stat--;
            }
            $(this).next().text(jum_stat);
        });
    });

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

$('#order,#cari_rumah').on('change', function() {
            katalogProdukArsitek();
            katalogProdukDesainArsitek();
        });

        $("#cari_rumah").on("input", function(e) {
            katalogProdukArsitek();
            katalogProdukDesainArsitek();
        });


 function sukaRumah(id_rumah) {
        let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
        if (id_customer != null && id_customer != '') {
          let elm_stat = $('.like[data-id="'+id_rumah+'"] .value');
          let jum_stat = elm_stat.text();
          let elm_like = $('.like[data-id="'+id_rumah+'"] .fa');
          if (elm_like.hasClass('fa-heart-o')) {
              elm_like.removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
              jum_stat++;
              
              $.ajax({
                 url: "https://rumahtinggal.id/api/simpanDisukai",
                 type: "POST",
                 data: {"id_rumah": id_rumah,"id_customer": id_customer,"suka": 1},
                 dataType: "JSON",
                 success: function(data){}
              });
          } else {
              elm_like.removeClass('fa-heart').addClass('fa-heart-o').css('color','#026cb6');
              jum_stat--;
            
              $.ajax({
                 url: "https://rumahtinggal.id/api/hapusDisukai/"+id_rumah+"/"+id_customer,
                 type: "POST",
                 dataType: "JSON",
                 success: function(data){}
              });
          }
          elm_stat.text(jum_stat);
        } else $('#ModalLogin').modal('show');
    }
  


</script>