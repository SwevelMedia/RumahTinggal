<style>
.container {
    width: 95%;
    max-width: 100%;
}
  
.col-md-2 {
    flex: 0 0 19.967%;
    max-width: 19.967%;
    padding-right: 7px !important;
    width: 19.967%;
    padding-left: 7px !important;
}  
  
.slide-brand {
    width: 165px;
    height: 95px;
    border-radius: 10px;
    cursor: pointer;
  	margin: 0 7px;
}

.slick-dots { bottom: -30px; }
  
.slick-dots li.slick-active button::before, .slick-dots li button:hover::before { color: #026cb6; }
  
.product-slider {
  	background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 340px;
}
  
.slick-slider:not(.list-produk-merk, .list-artikel) { margin: 15px 20px 0 300px; }

.slick-prev, .slick-next { top: 40%; }

.slick-next { right: -20px; }
  
.slick-prev::before, .slick-next::before { font-size: 25px; }

.list-artikel .slick-arrow { display: none !important; }

.list-produk-promo .grid, .list-produk-favorit .grid { height: 395px; }

.list-produk-popular .grid {
    width: 19.75%;
  	height: 320px;
    display: inline-flex;
}

.list-produk {
    height: 767px;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.katalog-produk .list-produk { overflow-y: scroll; }

.list-produk::-webkit-scrollbar {
    width: 0;
    background: transparent;
}

.list-produk .grid {
  	width: 20%;
	display: inline-flex;
}

.product-grid {
    transition: all 0.3s ease;
    height: 357px;
    margin: 0 6px 10px 6px;
}

.list-produk-popular .product-grid {
    margin: 0;
    padding: 4px;
}
  
.list-artikel .product-grid { height: 390px; }  
  
.katalog-produk .product-grid {  
	width: 100%;
    height: 277px;
    padding-right: 13px;
}

.product-grid .product-image {
    position: relative;
    overflow: hidden;
    height: 190px;
}
  
.katalog-produk .product-grid .product-image { height: 170px; }

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
  
.list-artikel .product-content { padding: 9px 18px 12px; }
  
.list-artikel .product-content .publish {
    color: #000;
  	padding-bottom: 1px;
}
  
.list-artikel .product-content .publish::before {
    font-family: FontAwesome;
    content: "\f073";
    margin-right: 5px;
    font-size: 13px;
}
  
.list-artikel .product-content .title {
  	height: 45px;
	line-height: 1.35;
}
  
.list-artikel .product-content .content {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    height: 80px;
  	color: #000;
	text-align: justify;
  	font-size: 15px;
  	line-height: 1.3;
}
  
.list-artikel .product-content .link {
    color: #026cb6;
  	font-size: 15px;
}
  
.list-artikel .product-content .link::after {
    font-family: FontAwesome;
    content: "\f178";
    padding-left: 6px;
  	margin-top: 1px;
    font-size: 15px;
    position: absolute;
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
  
.katalog-produk .product-grid .title { height: 43px; }

.product-grid .title:hover { color: #026cb6; }

.product-grid .title, .product-grid .arsitek, .product-grid .suplier { cursor: pointer; }

.product-grid .arsitek, .product-grid .suplier {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  	font-weight: 400;
  	width: 55%;
  	color: #026cb6;
    font-size: 14px;
    line-height: 1.3;
}
  
.product-grid .suplier { width: 65%; }
  
.product-grid .arsitek::before {
    content: 'By ';
  	color: #777;
  	font-weight: 300;
}
  
.product-grid .suplier .logo {
    width: 17px;
    height: 17px;
    border-radius: 50%;
  	margin-top: -2px;
}

.product-grid .product-rating, .product-grid .product-feature, .product-grid .product-statistic,
.product-grid .product-info {
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
  
.badge {
    /*padding: 3px 7px;*/
    background: #026CB6;
    font-size: 12px;
    overflow: hidden;
  	text-overflow: ellipsis;
    white-space: nowrap;
    width: 55px;
    max-width: 100%;
  	border-radius: 25px;
    color: #fff;
    font-weight: 300;
}
  
.product-grid .product-price {
    padding: 4px 0 7px;
  	color: #000;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
  
.product-grid .product-price .price {
    font-size: 16px;
    font-weight: 400;
  	color: red;
}
  
.product-grid .product-price .unit {
    font-size: 14px;
    font-weight: 300;
  	color: #000;
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
  
.product-grid .product-detail .spesification {
    text-align: left;
    line-height: 1.3;
}

.product-grid .product-statistic .view, .product-grid .product-statistic .like {
    color: #000;
  	padding-left: 10px;
}
  
.product-grid .product-statistic .fa:not(.fa-shopping-cart) {
    color: #026cb6;
    font-size: 16px;
    margin-top: 5px;
}
  
.product-grid .product-statistic .view .fa {
    font-size: 20px;
  	padding-right: 5px;
  	margin-top: 2px;
}

.product-grid .product-statistic .like .fa {
    font-size: 15px;
  	padding-right: 5px;
}
  
.product-grid .product-statistic .like .fa, .product-grid .product-statistic .share {
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
  	color: #026cb6;
  	background: #fff;
  	border: 1px solid #026cb6;
  	padding: 2px 14px;
	font-size: 14px;
}
  
.btn-detail.popular, .btn-detail.produk { padding: 2px 19px; }
  
.btn-detail:hover {
  	color: #fff;
  	background: #026cb6;
}
  
.btn-banner {
	padding: 5px 10px;
  	position: absolute;
  	bottom: 13px;
  	left: 43%;
  	background: #ffbf00;
  	color: #fff;
  	font-size: 14.5px;
}
  
.btn-banner:hover { background: #f4a205; }
  
.btn-banner.danger { background: red; }
  
.btn-banner.danger:hover { background: #ca0202; }
  
.btn-beli {
  	color: red;
  	background: #fff;
  	border: 1px solid red;
  	padding: 2px 19px;
	font-size: 14px;
}
  
.btn-beli:hover {
  	color: #fff;
  	background: red;
}
  
.shadow-sm { box-shadow: 0 .125rem .25rem rgba(0,0,0,.075); }
  
.rounded-pill { border-radius: 50rem; }
  
.bg-light { background-color: #fff !important; }

.btn-link {
    font-weight: 400;
    color: #026cb6;
    background-color: transparent;
}
  
.btn-link:hover { color: #005693; }
  
.katalog-produk .form-control:focus { box-shadow: none; }

.katalog-produk .form-control::placeholder {
  	font-size: 0.95rem;
  	color: #aaa;
}
   
.katalog-produk .result {
  	background: #fff;
  	padding: 15px;
}

.spinner {
    position: absolute;
    margin-top: -50px;
    left: 48%;
    z-index: 2;
    border-radius: 50%;
    width: 48px;
  	height: 48px;
    padding: 5px 0px;
    background: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,.4);
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
  	/*overflow-y: scroll;
    scrollbar-width: thin;
    -ms-overflow-style: thin;
    height: 215px;*/
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
  	width: 200%;
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

.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span { background: #026CB6; }
  
.owl-theme .owl-dots .owl-dot span {
    width: 9px;
    height: 9px;
}  
  
.testimonial { text-align: center; }
  
.testimonial .description {
    color: #000;
    font-size: 20px;
    line-height: 1.3;
    margin-bottom: 20px;
    padding: 0 70px;
}
  
.testimonial .description::before {
    content: "\f10d";
    font-family: "FontAwesome";
    font-weight: 500;
    display: inline-block;
    position: absolute;
    top: 0;
    left: 30px;
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
    right: 30px;
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
  
/*.item.active.next {
    background: #fff0 !important;
}
.carousel-inner > .item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
    -o-transition: -o-transform .6s ease-in-out;
    transition: transform 3s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000;
    perspective: 1000;
}
.item.next.left {
    background: #f0f8ff00 !important;
}
.carousel-inner > .item.prev, .carousel-inner > .item.active.left {
    left: 0;
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-70%,0,0) !important;
}
.red{
    color: red;
}

.ars-name:hover{
    color:#5E95C7 ;
}

.turtoise{
    color: #026CB6;
}
.fa.outline-star{
   color: transparent;
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: #ffe300;
 }

#MiniHorzNav li {
    display: inline-block;
    list-style: outside none none;
    margin: 7px 0;
    padding: 0;
    width: 50px;
}
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
    display: block;
    padding: 5px 5px 0px 5px;
    position: relative;
    color: #8d8d8d;
    font-weight: 600;

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
    font-size: 12px;
    font-weight: bolder;
    letter-spacing: 1px;
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
.card{
  height: 330px;
  background: white;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.21);
  border:none;
  border-radius: 5px;
}

.card:hover {
    box-shadow: 0px 5px 10px rgba(212, 208, 208, 0.2);
    position: absolute;
    z-index: 1;
    border-radius: 5px;
    width: 95.5%;
}

.card .img {
    height: 180px;
    width: 100%;
    border-radius: 5px 5px 0px 0px;
}

.card .img img {
    width: 100%;
    object-fit: cover;
    border-radius: 5px 5px 0px 0px;
}
.card .top-text{
  background-color: #fff;
  border-radius: 5px;
}
.card .top-text:hover{
  background-color: #fff;
  border-radius: 0px;
}
.card .top-text .name{
  font-size: 25px;
  font-weight: 600;
  color: #202020;
}
.card .bottom-text{
  margin-top: 0px;
  background: white;
  opacity: 0;
  visibility: hidden;
  transition: 0.1s;
  border-radius: 0 0 5px 5px;
}
.card:hover .bottom-text{
  opacity: 1;
  visibility: visible;
  box-shadow: 0px 12px 10px rgba(212, 208, 208, 0.2);

}
.card .bottom-text .text{
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
.i-con-han:hover {
    border: 2px solid #026CB6;
    padding: 3px;
}

.line-header {
    width: 3cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
    margin-top: 10px;
}

.turqoise{
    color: #026CB6;
}

.fa-star {
    color: #ffe300;
}

.p-detail{
    padding: 2px 11px 14px 13px;
}
  
.container .card .face{
    height: 188px;
    transition: 0.5s;
}

.h-face2{
    height: 185px;
}

.container .card .face.face1{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.container .card:hover .face.face1{
    background: #026CB6;
    transform: translateY(0);
}

.container .card .face.face1 .content{
    opacity: 1;
    transition: 0.5s;
    height: 320px;
    background: #fff;
}

.container .card:hover .face.face1 .content{
    opacity: 1;
}

.container .card .face.face1 .content img{
    max-width: 100%;
}

.container .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    text-align: center;
    font-size: 1.5em;
}

.container .card .face.face2{
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 4px 2px -2px rgba(157, 156, 156, 0.28);
    transform: translateY(-100px);
    height: 165px;
    padding-bottom: 0px;
}

.container .card:hover .face.face2{
    transform: translateY(0);
}

.container .card .face.face2 .content p{
    margin: 0;
    padding: 0;
}

.container .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    padding: 5px;
    border: 1px solid #333;
}

.container .card .face.face2 .content a:hover{
    background: #333;
    color: #fff;
}
  
.panel-default > .panel-heading {
    color: #fff;
    background: #026CB6;
    border-color: #ddd;
    border-radius: 0;
    padding: 5px 15px;
}

figure {
    width: 100%;
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
}
figure:hover+span {
    bottom: -36px;
    opacity: 1;
}

.hover14 a figure {
    position: relative;
}
.hover14 a figure::before {
    position: absolute;
    top: 0;
    left: -75%;
    z-index: 2;
    display: block;
    content: '';
    width: 50%;
    height: 100%;
    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.15) 100%);
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
}
.hover14 a figure:hover::before {
    -webkit-animation: shine .75s;
    animation: shine .75s;
}
@-webkit-keyframes shine {
    100% {
        left: 125%;
    }
}
@keyframes shine {
    100% {
        left: 125%;
    }
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}

.slide-brand {
    width: 150px;
}

.h-100{
    box-shadow: 0px 2px 5px 0px rgba(157, 156, 156, 0.28);
border: none !important;
}
.card-title a:hover{
  color: #026CB6 !important;
}
.prev {
  position: absolute;
  z-index: 2;
  margin-top: 130px;
  margin-left: -20px;
  background-color: #026CB6 !important;
  border: 1px solid #026CB6 !important;
}
.next {
  position: absolute;
  z-index: 2;
  background-color: #026CB6 !important;
}

.prev-a {
  position: absolute;
  z-index: 2;
  margin-top: 150px;
  margin-left: 228px;
  background-color: #026CB6 !important;
  border: 1px solid #026CB6 !important;
}
.next-a {
  position: absolute;
  z-index: 2;
  margin-top: 150px;
  margin-left: 1235px;
  background-color: #026CB6 !important;
  border: 1px solid #026CB6 !important;
}
.btn-primary:hover {
    color: #fff;
    background-color: #5E95C7 !important;
    border-color: #5E95C7 !important;
}


.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #07c1ca !important;
    border-color: #07c1ca !important;
}


.i-heart:hover{
  color: #ff0101;
}
.fa-share-alt:hover{
  color:#b0ebeb;
}
.i-eye {
    margin-right: 6px;
    font-size: 24px;
}
.i-heart {
    margin-right: 6px;
}
.con{
  font-size: 13px;
font-weight: 600;
}
.line-batas{
  height: 2px;
  width: 100%;
  background-color: #f2f2f2;
}
.black{
  color: #000;
}
.text-box {
    position: absolute;
    width: 350px;
    height: 1000px;
    background: #026CB6;
    top: 0%;
    transform: translateY(-50%);
    opacity:0.6;
}
.i-con {
    font-size: 25px !important;
    color: #026CB6;
    margin: 0px 7px 23px 0px;
}

.white{
  color: #fff;
}

.line {
    width: 2cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
}
.black {
    color: #000;
}
.title-weight{
    font-size: 19px;
    font-weight: 600;
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
sup{
    color: #8d8d8d;
}
#myCarousel-2 {
    position: absolute;
    width: 600px;
    top: 17%;
    left: 60px;
    transform: translateY(-51%);
    color: #fff;
}
.turqoise{
  color: #026CB6;
}

.checklist .icheckbox_square-green {
    margin-top: -4px;
}
*/

.flickity-page-dots .dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 8px;
    background: #026CB6 !important;
    border-radius: 50%;
    filter: alpha(opacity=25);
    opacity: 0.25;
    cursor: pointer;
}

.gallery-cell {
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
}

.flickity-viewport {
    overflow: hidden;
    position: relative;
    height: 330px !important;
}

.flickity-prev-next-button .arrow { fill: #fff !important; }
  
.flickity-prev-next-button:hover { background: #026CB6 !important; }  
  
  
  
  
  
  
  
  
  
  
  
/*slide 1.1*/
.item.active.next {
    background: #fff0 !important;
}
.carousel-inner > .item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
    -o-transition: -o-transform .6s ease-in-out;
    transition: transform 3s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000;
    perspective: 1000;
}
.item.next.left {
    background: #f0f8ff00 !important;
}
.carousel-inner > .item.prev, .carousel-inner > .item.active.left {
    left: 0;
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-70%,0,0) !important;
}
/*.carousel-inner {
    position: relative;
    width: 81% !important;
    overflow: hidden;
    margin-left: 19% !important;
}*/
/*slide 1.1*/

.red{
    color: red;
}

.ars-name:hover{
    color:#5E95C7 ;
}
/*end new*/

.turtoise{
    color: #026CB6;
}
.fa.outline-star{
   color: transparent;
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: #ffe300;
 }

.category .category-icon {
    position: relative;
    height: 25px;
    width: 25px;
    margin-right: 7px;
    margin-top: -3px;
}
.category li a {
    display: table;
    margin-top: 1px;
    padding: 8px 10px;
    width: 100%;
    background: #EBFBFB;
    color: #6e6e78;
    font-weight: 300;
    text-decoration: none;
    text-align: left;
    vertical-align: middle;
    overflow: hidden;
    -webkit-transition-property: background;
    -webkit-transition-duration: 0.4s;
    -webkit-transition-timing-function: ease-out;
    transition-property: background;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
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
    font-weight: 600;

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


.card{
  height: 330px;
  /*max-width: 350px;*/
  /*margin: 0 20px;*/
  background: white;
  /*transition: 0.4s;*/
  box-shadow: 2px 2px 5px rgba(0,0,0,0.21);
  border:none;
  border-radius: 5px;
}

.card:hover {
    /*height: 100%;*/
    box-shadow: 0px 5px 10px rgba(212, 208, 208, 0.2);
    position: absolute;
    z-index: 1;
    border-radius: 5px;
    /*width: 100%;*/
    width: 95.5%;
}

/*.card .img{
  height: 180px;
  width: 100%;
}*/

.card .img {
    height: 180px;
    width: 100%;
    border-radius: 5px 5px 0px 0px;
}

.card .img img {
    /*height: 100%;*/
    width: 100%;
    object-fit: cover;
    border-radius: 5px 5px 0px 0px;
}
.card .top-text{
  /*padding: 5px;*/
  background-color: #fff;
  border-radius: 5px;
}
.card .top-text:hover{
  /*padding: 5px;*/
  background-color: #fff;
  border-radius: 0px;
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
  border-radius: 0 0 5px 5px;
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


/*.view-code{
  color:#48cfad; 
  font-size:14px;
  text-transform:uppercase;
  font-weight:700;
  text-decoration:none;
  position:absolute;top:640px; left:50%;margin-left:-35px;
}
.view-code:hover{color:#34c29e;}

/ --- Product Card ---- /
.make-3D-space{
    position: relative;
    perspective: 800px;
    /width:340px;/
    height:22em;
    transform-style: preserve-3d;
    transition: transform 5s;
    /position:absolute;    /
    /top:80px;/
    /left:50%;   /
    /margin-left:-167px;/
}
.product-front, .product-back{
    width:100%;
    /height:364px;/
    background:#fff;
    position:absolute;
    /left:-5px;/
    /top:-5px;/
    -webkit-transition: all 100ms ease-out; 
       -moz-transition: all 100ms ease-out; 
         -o-transition: all 100ms ease-out; 
            transition: all 100ms ease-out; 
}
.product-back{
    display:none;
    transform: rotateY( 180deg );
}
.product-card.animate .product-back, .product-card.animate .product-front{
    top:0px;
    left:0px;
    position: absolute;
    z-index: 10;
    -webkit-transition: all 100ms ease-out; 
       -moz-transition: all 100ms ease-out; 
         -o-transition: all 100ms ease-out; 
            transition: all 100ms ease-out; 
}
.product-card{
    width:100%;
    height:100%;
    position:absolute;    
    /top:10px;/
    /left:10px;  /
    overflow:hidden;
    transform-style: preserve-3d;
    -webkit-transition:  100ms ease-out; 
       -moz-transition:  100ms ease-out; 
         -o-transition:  100ms ease-out; 
            transition:  100ms ease-out;
}
div.product-card.flip-10{
     -webkit-transform: rotateY( -10deg );
         -moz-transform: rotateY( -10deg );
           -o-transform: rotateY( -10deg );
              transform: rotateY( -10deg );
               transition:  50ms ease-out;          
}
div.product-card.flip90{
     -webkit-transform: rotateY( 90deg );
         -moz-transform: rotateY( 90deg );
           -o-transform: rotateY( 90deg );
              transform: rotateY( 90deg );
               transition:  100ms ease-in;          
}
div.product-card.flip190{
     -webkit-transform: rotateY( 190deg );
         -moz-transform: rotateY( 190deg );
           -o-transform: rotateY( 190deg );
              transform: rotateY( 190deg );
               transition:  100ms ease-out;             
}
div.product-card.flip180{
     -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
           -o-transform: rotateY( 180deg );
              transform: rotateY( 180deg );
               transition:  150ms ease-out;             
}
.product-card.animate{
    top:-5px;
    left:-5px;
    width:110%;
     position: absolute;
    
    z-index: 100;
    height:500px;
    box-shadow:0px 13px 21px -5px rgba(0, 0, 0, 0.3);
    -webkit-transition:  100ms ease-out; 
       -moz-transition:  100ms ease-out; 
         -o-transition:  100ms ease-out; 
            transition:  100ms ease-out; 
}
.stats-container{
    background:#fff;    
    position:absolute;
    /top:18em;/
    left:0;
    width:100%;
    /height:300px;/
    /padding:7px 35px 35px; /
    -webkit-transition: all 200ms ease-out; 
       -moz-transition: all 200ms ease-out; 
         -o-transition: all 200ms ease-out; 
            transition: all 200ms ease-out;
}
.product-card.animate .stats-container{
    /top:272px;/
     position: absolute;
    z-index: 10000;
    -webkit-transition: all 200ms ease-out; 
       -moz-transition: all 200ms ease-out; 
         -o-transition: all 200ms ease-out; 
            transition: all 200ms ease-out; 
}
.stats-container .product_name{
    font-size:22px;
    color:#393c45;  
}
/.stats-container p{
    font-size:16px;
    color:#b1b1b3;  
    padding:2px 0 20px 0;
}/
.stats-container .product_price{
    float:right;
    color:#48cfad;
    font-size:22px;
    font-weight:600;
}
.image_overlay{
    position:absolute;
    top:0;
    left:0; 
    width:100%;
    height:100%;
    background:#026CB673;
    opacity:0;  
}
.product-card.animate .image_overlay{
    opacity:0.7;    
     position: absolute;
    z-index: 10;
    -webkit-transition: all 200ms ease-out; 
       -moz-transition: all 200ms ease-out; 
         -o-transition: all 200ms ease-out; 
            transition: all 200ms ease-out; 
}
.product-options{
    padding:2px 0 0;
}
.product-options strong{
    font-weight:700;
    color:#393c45;
    font-size:14px;
}
.product-options span{  
    color:#969699;
    font-size:14px;
    display:block;
    margin-bottom:8px;
}
.view_details{  
    position:absolute;
    top:112px;
    left:50%;
    margin-left:-85px;  
    border:2px solid #fff;
    color:#fff;
    font-size:19px;
    text-align:center;
    text-transform:uppercase;
    font-weight:700;
    padding:10px 0;
    width:172px;    
    opacity:0;
    -webkit-transition: all 200ms ease-out; 
       -moz-transition: all 200ms ease-out; 
         -o-transition: all 200ms ease-out; 
            transition: all 200ms ease-out; 
}
.view_details:hover{    
    background:#fff;
    color:#48cfad;
    cursor:pointer;

}
.product-card.animate .view_details{
    opacity:1;
    width:152px;
    font-size:15px;
    margin-left:-75px;
     position: absolute;
    z-index: 10;
    top:115px;
    -webkit-transition: all 200ms ease-out; 
       -moz-transition: all 200ms ease-out; 
         -o-transition: all 200ms ease-out; 
            transition: all 200ms ease-out;         
}
div.colors div{
    margin-top:3px;
    width:15px; 
    height:15px;    
    margin-right:5px;
    float:left;
}
div.colors div span{
    width:15px; 
    height:15px; 
    display:block;
    border-radius:50%;
}
div.colors div span:hover{
    width:17px;
    height:17px;
    margin:-1px 0 0 -1px;
}
div.c-blue span{background:#6e8cd5;}
div.c-red span{background:#f56060;}
div.c-green span{background:#44c28d;}
div.c-white span{
    background:#fff;
    width:14px;
    height:14px; 
    border:1px solid #e8e9eb;
}
div.shadow{
    width:100%;
    height:520px;
    opacity:0;
    position:absolute;
    top:0;
    left:0;
    z-index:3;
    display:none;
    background: -webkit-linear-gradient(left,rgba(0,0,0,0.1),rgba(0,0,0,0.2));
    background: -o-linear-gradient(right,rgba(0,0,0,0.1),rgba(0,0,0,0.2)); 
    background: -moz-linear-gradient(right,rgba(0,0,0,0.1),rgba(0,0,0,0.2)); 
    background: linear-gradient(to right, rgba(0,0,0,0.1), rgba(0,0,0,0.2)); 
}
.product-back div.shadow{
    z-index:10;
    opacity:1;
    background: -webkit-linear-gradient(left,rgba(0,0,0,0.2),rgba(0,0,0,0.1));
    background: -o-linear-gradient(right,rgba(0,0,0,0.2),rgba(0,0,0,0.1)); 
    background: -moz-linear-gradient(right,rgba(0,0,0,0.2),rgba(0,0,0,0.1)); 
    background: linear-gradient(to right, rgba(0,0,0,0.2), rgba(0,0,0,0.1)); 
}
.flip-back{
    position:absolute;
    top:20px;
    right:20px;
    width:30px;
    height:30px;
    cursor:pointer;
}
.cx, .cy{
    background:#d2d5dc;
    position:absolute;
    width:0px;
    top:15px;
    right:15px;
    height:3px;
    -webkit-transition: all 250ms ease-in-out;
       -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
         -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
}
.flip-back:hover .cx, .flip-back:hover .cy{
    background:#979ca7;
    -webkit-transition: all 250ms ease-in-out;
       -moz-transition: all 250ms ease-in-out;
        -ms-transition: all 250ms ease-in-out;
         -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
}
.cx.s1, .cy.s1{ 
    right:0;    
    width:30px; 
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cy.s2{ 
    -ms-transform: rotate(50deg); 
    -webkit-transform: rotate(50deg); 
    transform: rotate(50deg);        
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cy.s3{ 
    -ms-transform: rotate(45deg); 
    -webkit-transform: rotate(45deg); 
    transform: rotate(45deg);        
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cx.s1{ 
    right:0;    
    width:30px; 
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cx.s2{ 
    -ms-transform: rotate(140deg); 
    -webkit-transform: rotate(140deg); 
    transform: rotate(140deg);       
    -webkit-transition: all 100ms ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
.cx.s3{ 
    -ms-transform: rotate(135deg); 
    -webkit-transform: rotate(135deg); 
    transform: rotate(135deg);       
    -webkit-transition: all 100ease-out;
       -moz-transition: all 100ms ease-out;
        -ms-transition: all 100ms ease-out;
         -o-transition: all 100ms ease-out;
            transition: all 100ms ease-out;
}
/.carousel{
    width:335px;
    height:500px;
    overflow:hidden;
    position:relative;

}/
.carousel ul{
    position:absolute;
    top:0;
    left:0;
}
.carousel li{
    width:335px;
    height:500px;
    float:left;
    overflow:hidden;    
}
.arrows-perspective{
    width:335px;
    height:55px;
    position: absolute;
    top: 218px;
    transform-style: preserve-3d;
    transition: transform 5s;
    perspective: 335px;
}
.carouselPrev, .carouselNext{
    width: 50px;
    height: 55px;
    background: #ccc;
    position: absolute; 
    top:0;
    transition: all 200ms ease-out; 
    opacity:0.9;
    cursor:pointer;
}
.carouselNext{
    top:0;
    right: -26px;
    -webkit-transform: rotateY( -117deg );
         -moz-transform: rotateY( -117deg );
           -o-transform: rotateY( -117deg );
              transform: rotateY( -117deg );
              transition: all 200ms ease-out;           

}
.carouselNext.visible{
        right:0;
        opacity:0.8;
        background: #efefef;
        -webkit-transform: rotateY( 0deg );
         -moz-transform: rotateY( 0deg );
           -o-transform: rotateY( 0deg );
              transform: rotateY( 0deg );
              transition: all 200ms ease-out; 
}
.carouselPrev{      
    left:-26px;
    top:0;
    -webkit-transform: rotateY( 117deg );
         -moz-transform: rotateY( 117deg );
           -o-transform: rotateY( 117deg );
              transform: rotateY( 117deg );
              transition: all 200ms ease-out; 

}
.carouselPrev.visible{
        left:0;
        opacity:0.8;
        background: #eee;
        -webkit-transform: rotateY( 0deg );
         -moz-transform: rotateY( 0deg );
           -o-transform: rotateY( 0deg );
              transform: rotateY( 0deg );
              transition: all 200ms ease-out; 
}
.carousel .x, .carousel .y{
    height:2px;
    width:15px;
    background:#48cfad;
    position:absolute;
    top:31px;
    left:17px;
    -ms-transform: rotate(45deg); 
    -webkit-transform: rotate(45deg); 
    transform: rotate(45deg);   
}
.carousel .x{
    -ms-transform: rotate(135deg);  
    -webkit-transform: rotate(135deg); 
    transform: rotate(135deg);      
    top:21px;
}
.carousel .carouselNext .x{
    -ms-transform: rotate(45deg);   
    -webkit-transform: rotate(45deg); 
    transform: rotate(45deg);       
}
.carousel .carouselNext .y{
    -ms-transform: rotate(135deg);  
    -webkit-transform: rotate(135deg); 
    transform: rotate(135deg);      
}*/





























@media (min-width:1920px) {
    .card{
      height: 400px;
    }
    .card .img{
      height: 250px;
    }
}

@media (min-width:2560px) {
    .card{
      height: 470px;
    }
    .card .img{
      height: 320px;
    }
    .card:hover {
        width: 97.5%;
    }
}

 /* .col-md-2 {
    flex: 0 0 19.967%;
    max-width: 19.967%;
    padding-right: 0px !important;
    /height: 31em;/
}
.container .card .face {
    /width: 245px;/
    height: 188px;
    transition: 0.5s;
}
.container .card .face.face1 .content {
    opacity: 1;
    transition: 0.5s;
    /height: 322px;/
    background: #fff;
}
.container .card .face.face2 {
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
        padding-bottom: 20px;
    box-sizing: border-box;
    box-shadow: 0 4px 2px -2px rgba(157, 156, 156, 0.28);
    transform: translateY(-100px);
    height: 165px;
    padding-bottom: 0px;
    /margin-top: 77px;/
    margin-top: 6em;
}*/







/*.active .icon32.icon-star-on, .icon32.icon-star-on, .icon32.icon-star-on:hover {
    background-position : -448px -96px;
}
.icon.icon-blue, .icons-blue .icon {
    background-color: blue;
    width: 16px;
    height: 16px;
    display: block;
}*/
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

.fa-star {
    color: #ffe300;
}



.p-detail{
    padding: 2px 11px 14px 13px;
}

/*.container{
    width: 1000px;
    position: relative;
    display: flex;
    justify-content: space-between;
}

.container .card{
    position: relative;
    cursor: pointer;
}*/

.container .card .face{
    /*width: 245px;*/
    height: 188px;
    transition: 0.5s;
}

.h-face2{
    /*width: 255px;*/
    height: 185px;
    /*transition: 0.5s;*/
}

.container .card .face.face1{
    position: relative;
    /*background: #333;*/
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.container .card:hover .face.face1{
    background: #026CB6;
    transform: translateY(0);
}

.container .card .face.face1 .content{
    opacity: 1;
    transition: 0.5s;
    height: 320px;
    background: #fff;
}

.container .card:hover .face.face1 .content{
    opacity: 1;
}

.container .card .face.face1 .content img{
    max-width: 100%;
}

.container .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    /*color: #fff;*/
    text-align: center;
    font-size: 1.5em;
}

.container .card .face.face2{
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 4px 2px -2px rgba(157, 156, 156, 0.28);
    transform: translateY(-100px);
    height: 165px;
    padding-bottom: 0px;
}

.container .card:hover .face.face2{
    transform: translateY(0);
}

.container .card .face.face2 .content p{
    margin: 0;
    padding: 0;
}

.container .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    padding: 5px;
    border: 1px solid #333;
}

.container .card .face.face2 .content a:hover{
    background: #333;
    color: #fff;
}












































/*.col-md-2 {
    flex: 0 0 19.967%;
    max-width: 19.967%;
    padding-right: 0px !important;
    width: 19.967%;
}*/
.col-md-2 {
    flex: 0 0 19.967%;
    max-width: 19.967%;
    padding-right: 7px !important;
    width: 19.967%;
    padding-left: 7px !important;
}



.testim {
        width: 100%;
        /*position: absolute;*/
        /*top: 50%;*/
        /*-webkit-transform: translatey(-50%);
        -moz-transform: translatey(-50%);
        -ms-transform: translatey(-50%);
        -o-transform: translatey(-50%);
        transform: translatey(-50%);
        margin-top: 18em;*/
}

.testim .wrap {
    position: relative;
    width: 100%;
    max-width: 1020px;
    padding: 40px 20px;
    margin: auto;
}

.testim .arrow {
    display: block;
    position: absolute;
    color: #026CB6;
    cursor: pointer;
    font-size: 2em;
    top: 50%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
    -webkit-transition: all .3s ease-in-out;    
    -ms-transition: all .3s ease-in-out;    
    -moz-transition: all .3s ease-in-out;    
    -o-transition: all .3s ease-in-out;    
    transition: all .3s ease-in-out;
    padding: 5px;
    z-index: 1;
}

.testim .arrow:before {
        cursor: pointer;
}

.testim .arrow:hover {
    color: #026CB6;
}
    

.testim .arrow.left {
    left: 10px;
}

.testim .arrow.right {
    right: 10px;
}

.testim .dots {
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 60px;
    left: 0;
    display: block;
    z-index: 996;
        height: 12px;
}

.testim .dots .dot {
    list-style-type: none;
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 1px solid #026CB6;
    margin: 0 10px;
    cursor: pointer;
    -webkit-transition: all .5s ease-in-out;    
    -ms-transition: all .5s ease-in-out;    
    -moz-transition: all .5s ease-in-out;    
    -o-transition: all .5s ease-in-out;    
    transition: all .5s ease-in-out;
        position: relative;
}

.testim .dots .dot.active,
.testim .dots .dot:hover {
    background: #026CB6;
    border-color: #026CB6;
}

.testim .dots .dot.active {
    -webkit-animation: testim-scale .5s ease-in-out forwards;   
    -moz-animation: testim-scale .5s ease-in-out forwards;   
    -ms-animation: testim-scale .5s ease-in-out forwards;   
    -o-animation: testim-scale .5s ease-in-out forwards;   
    animation: testim-scale .5s ease-in-out forwards;   
}
    
.testim .cont {
    position: relative;
        overflow: hidden;
}

.testim .cont > div {
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 0 70px 0;
    opacity: 0;
}

.testim .cont > div.inactive {
    opacity: 1;
}
    

.testim .cont > div.active {
    position: relative;
    opacity: 1;
}
    

.testim .cont div .img img {
    display: block;
    width: 100px;
    height: 100px;
    margin: auto;
    border-radius: 50%;
}

.testim .cont div h2 {
    color: #026CB6;
    font-size: 1em;
    margin: 15px 0;
}

.testim .cont div p {
    font-size: 1.15em;
    color: #0a3c3d;
    width: 80%;
    margin: auto;
}

.testim .cont div.active .img img {
    -webkit-animation: testim-show .5s ease-in-out forwards;            
    -moz-animation: testim-show .5s ease-in-out forwards;            
    -ms-animation: testim-show .5s ease-in-out forwards;            
    -o-animation: testim-show .5s ease-in-out forwards;            
    animation: testim-show .5s ease-in-out forwards;            
}

.testim .cont div.active h2 {
    -webkit-animation: testim-content-in .4s ease-in-out forwards;    
    -moz-animation: testim-content-in .4s ease-in-out forwards;    
    -ms-animation: testim-content-in .4s ease-in-out forwards;    
    -o-animation: testim-content-in .4s ease-in-out forwards;    
    animation: testim-content-in .4s ease-in-out forwards;    
}

.testim .cont div.active p {
    -webkit-animation: testim-content-in .5s ease-in-out forwards;    
    -moz-animation: testim-content-in .5s ease-in-out forwards;    
    -ms-animation: testim-content-in .5s ease-in-out forwards;    
    -o-animation: testim-content-in .5s ease-in-out forwards;    
    animation: testim-content-in .5s ease-in-out forwards;    
}

.testim .cont div.inactive .img img {
    -webkit-animation: testim-hide .5s ease-in-out forwards;            
    -moz-animation: testim-hide .5s ease-in-out forwards;            
    -ms-animation: testim-hide .5s ease-in-out forwards;            
    -o-animation: testim-hide .5s ease-in-out forwards;            
    animation: testim-hide .5s ease-in-out forwards;            
}

.testim .cont div.inactive h2 {
    -webkit-animation: testim-content-out .4s ease-in-out forwards;        
    -moz-animation: testim-content-out .4s ease-in-out forwards;        
    -ms-animation: testim-content-out .4s ease-in-out forwards;        
    -o-animation: testim-content-out .4s ease-in-out forwards;        
    animation: testim-content-out .4s ease-in-out forwards;        
}

.testim .cont div.inactive p {
    -webkit-animation: testim-content-out .5s ease-in-out forwards;    
    -moz-animation: testim-content-out .5s ease-in-out forwards;    
    -ms-animation: testim-content-out .5s ease-in-out forwards;    
    -o-animation: testim-content-out .5s ease-in-out forwards;    
    animation: testim-content-out .5s ease-in-out forwards;    
}

@-webkit-keyframes testim-scale {
    0% {
        -webkit-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -webkit-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -webkit-box-shadow: 0px 0px 10px 5px #026CB6;        
        box-shadow: 0px 0px 10px 5px #026CB6;        
    }

    100% {
        -webkit-box-shadow: 0px 0px 0px 0px #026CB6;        
        box-shadow: 0px 0px 0px 0px #026CB6;        
    }
}

@-moz-keyframes testim-scale {
    0% {
        -moz-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -moz-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -moz-box-shadow: 0px 0px 10px 5px #026CB6;        
        box-shadow: 0px 0px 10px 5px #026CB6;        
    }

    100% {
        -moz-box-shadow: 0px 0px 0px 0px #026CB6;        
        box-shadow: 0px 0px 0px 0px #026CB6;        
    }
}

@-ms-keyframes testim-scale {
    0% {
        -ms-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -ms-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -ms-box-shadow: 0px 0px 10px 5px #026CB6;        
        box-shadow: 0px 0px 10px 5px #026CB6;        
    }

    100% {
        -ms-box-shadow: 0px 0px 0px 0px #026CB6;        
        box-shadow: 0px 0px 0px 0px #026CB6;        
    }
}

@-o-keyframes testim-scale {
    0% {
        -o-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -o-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -o-box-shadow: 0px 0px 10px 5px #026CB6;        
        box-shadow: 0px 0px 10px 5px #026CB6;        
    }

    100% {
        -o-box-shadow: 0px 0px 0px 0px #026CB6;        
        box-shadow: 0px 0px 0px 0px #026CB6;        
    }
}

@keyframes testim-scale {
    0% {
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        box-shadow: 0px 0px 10px 5px #026CB6;        
    }

    100% {
        box-shadow: 0px 0px 0px 0px #026CB6;        
    }
}

@-webkit-keyframes testim-content-in {
    from {
        opacity: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -webkit-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-moz-keyframes testim-content-in {
    from {
        opacity: 0;
        -moz-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -moz-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-ms-keyframes testim-content-in {
    from {
        opacity: 0;
        -ms-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -ms-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-o-keyframes testim-content-in {
    from {
        opacity: 0;
        -o-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -o-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@keyframes testim-content-in {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        transform: translateY(0);        
    }
}

@-webkit-keyframes testim-content-out {
    from {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -webkit-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-moz-keyframes testim-content-out {
    from {
        opacity: 1;
        -moz-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -moz-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-ms-keyframes testim-content-out {
    from {
        opacity: 1;
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -ms-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-o-keyframes testim-content-out {
    from {
        opacity: 1;
        -o-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@keyframes testim-content-out {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        transform: translateY(-100%);        
    }
}

@-webkit-keyframes testim-show {
    from {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -webkit-transform: scale(1);       
        transform: scale(1);       
    }
}

@-moz-keyframes testim-show {
    from {
        opacity: 0;
        -moz-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -moz-transform: scale(1);       
        transform: scale(1);       
    }
}

@-ms-keyframes testim-show {
    from {
        opacity: 0;
        -ms-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -ms-transform: scale(1);       
        transform: scale(1);       
    }
}

@-o-keyframes testim-show {
    from {
        opacity: 0;
        -o-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -o-transform: scale(1);       
        transform: scale(1);       
    }
}

@keyframes testim-show {
    from {
        opacity: 0;
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        transform: scale(1);       
    }
}

@-webkit-keyframes testim-hide {
    from {
        opacity: 1;
        -webkit-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
}

@-moz-keyframes testim-hide {
    from {
        opacity: 1;
        -moz-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -moz-transform: scale(0);
        transform: scale(0);
    }
}

@-ms-keyframes testim-hide {
    from {
        opacity: 1;
        -ms-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -ms-transform: scale(0);
        transform: scale(0);
    }
}

@-o-keyframes testim-hide {
    from {
        opacity: 1;
        -o-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -o-transform: scale(0);
        transform: scale(0);
    }
}

@keyframes testim-hide {
    from {
        opacity: 1;
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        transform: scale(0);
    }
}

@media all and (max-width: 300px) {
    body {
        font-size: 14px;
    }
}

@media all and (max-width: 500px) {
    .testim .arrow {
        font-size: 1.5em;
    }
    
    .testim .cont div p {
        line-height: 25px;
    }

}









































.container {
    width: 95%;
    max-width: 100%;
}



.product-grid .title:hover {
    color: #026CB6 !important;
}

.product-grid .suplier, .product-grid .area {
    color: #026CB6 !important;
}

.badge, .badge.item, .badge.aktivitas {
    padding: 3px 7px;
    background: #026CB6;
    font-size: 12px;
    font-weight: 500;
    overflow: hidden;
    max-width: 100%;
}

.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #026CB6;
}

.panel-default > .panel-heading {
    color: #fff;
    background: #026CB6;
    border-color: #ddd;
    border-radius: 0;
    padding: 5px 15px;
}


















figure {
    width: 100%;
    /*height: 200px;*/
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
}
figure:hover+span {
    bottom: -36px;
    opacity: 1;
}


/* Shine */
.hover14 a figure {
    position: relative;
}
.hover14 a figure::before {
    position: absolute;
    top: 0;
    left: -75%;
    z-index: 2;
    display: block;
    content: '';
    width: 50%;
    height: 100%;
    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255, 255, 255, 0.15) 100%);
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
}
.hover14 a figure:hover::before {
    -webkit-animation: shine .75s;
    animation: shine .75s;
}
@-webkit-keyframes shine {
    100% {
        left: 125%;
    }
}
@keyframes shine {
    100% {
        left: 125%;
    }
}








.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}



.slide-brand {
    width: 150px;
}
/*.slide-brand {
    width: 145px;
}*/

/*.container1 {
  position: relative;
  background: black;
  /max-width: 650px;/
  min-width: 326px;
  height: 324px;
  margin: 0 auto;
  overflow: hidden;
  top: 46px;
}

.card1 {
  position: absolute;
  top: 57%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: inline-block;
  width: 702px;
  height: 289px;
  /background: red;/
  margin: 5px;
  transition: transform 0.5s, background 0.3s ease-in-out;
}*/

.w-100{
    /*height: 300px;*/
    /*border-radius: 20px;*/
}

/*.reset .card1 { transition: none; }

/Set the CSS styles to the active slide:/

.active1 {
  /background: yellow;/
  transform: translate(-50%, -50%) scale(1.1) !important;
}

/Apply smooth transition effects to the slides when sliding./

.card1:nth-child(1) { transform: translate(-170%, -50%); }

.card1:nth-child(2) { transform: translate(-50%, -50%); }

.card1:nth-child(3) { transform: translate(70%, -50%); }

.card1:nth-child(4) { transform: translate(190%, -50%); }

.next1 .card1:nth-child(1) { transform: translate(-290%, -50%); }

.next1 .card1:nth-child(2) { transform: translate(-170%, -50%); }

.next1 .card1:nth-child(3) { transform: translate(-50%, -50%); }

.next1 .card1:nth-child(4) { transform: translate(70%, -50%); }

.reset .card1 .card1:nth-child(1) { transform: translate(-170%, -50%); }

.reset .card1 .card1:nth-child(2) { transform: translate(-50%, -50%); }

.reset .card1 .card1:nth-child(3) { transform: translate(70%, -50%); }

.reset .card1 .card1:nth-child(4) { transform: translate(190%, -50%); }
*/


/*header*/
/*  *{
    font-family: 'Quicksand';
}
*/
.h-100{
    box-shadow: 0px 2px 5px 0px rgba(157, 156, 156, 0.28);
border: none !important;
}
.card-title a:hover{
  color: #026CB6 !important;
}
.prev {
  position: absolute;
  z-index: 2;
  margin-top: 130px;
  margin-left: -20px;
  background-color: #026CB6 !important;
  border: 1px solid #026CB6 !important;
}
.next {
  position: absolute;
  z-index: 2;
  /*margin-top: 130px;*/
  /*margin-left: 1237px;*/
  background-color: #026CB6 !important;
  /*border: 1px solid #026CB6 !important;*/
}

.prev-a {
  position: absolute;
  z-index: 2;
  margin-top: 150px;
  margin-left: 228px;
  background-color: #026CB6 !important;
  border: 1px solid #026CB6 !important;
}
.next-a {
  position: absolute;
  z-index: 2;
  margin-top: 150px;
  margin-left: 1235px;
  background-color: #026CB6 !important;
  border: 1px solid #026CB6 !important;
}
.btn-primary:hover {
    color: #fff;
    background-color: #5E95C7 !important;
    border-color: #5E95C7 !important;
}


.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #07c1ca !important;
    border-color: #07c1ca !important;
}


.i-heart:hover{
  color: #ff0101;
}
.fa-share-alt:hover{
  color:#b0ebeb;
}
.i-eye {
    margin-right: 6px;
    font-size: 24px;
}
.i-heart {
    margin-right: 6px;
}
.con{
  font-size: 13px;
font-weight: 600;
}
.line-batas{
  height: 2px;
  width: 100%;
  background-color: #f2f2f2;
}
.black{
  color: #000;
}
a{
  text-decoration: none !important;
}
.text-box {
    position: absolute;
    width: 350px;
    height: 1000px;
    background: #026CB6;
    top: 0%;
    transform: translateY(-50%);
    opacity:0.6;
}
.genric-btn.success-border {   
    /*background: none !important;*/
}
.i-con {
    font-size: 25px !important;
    color: #026CB6;
    margin: 0px 7px 23px 0px;
}
/*.button-detail {
    height: 30px;
    line-height: 27px !important;
    border-radius: 5px !important;
    font-size: 15px;
    font-weight: 600;
}
.genric-btn.success-border {
    color: #026CB6;
    border: 1px solid #026CB6;
    background: #fff;
}*/
.white{
  color: #fff;
}
/*.footer-area h4 {
    padding-bottom: 4px;
}*/
.line {
    width: 2cm;
    height: 5px;
    background: #026CB6;
    margin-bottom: 25px;
}
.black {
    color: #000;
}
.title-weight{
    font-size: 19px;
    font-weight: 600;
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
sup{
    color: #8d8d8d;
}
strong{

  font-weight: bold !important;
}
#myCarousel-2 {
    position: absolute;
    width: 600px;
    top: 17%;
    left: 60px;
    transform: translateY(-51%);
    color: #fff;
}
.turqoise{
  color: #026CB6;
}









































.st > .nav {
    display: none;
    flex-wrap: wrap;
    list-style: none;
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
}


.select2-container--bootstrap .select2-selection {
    height: 40px;
    padding: 3px 16px 6px 12px;
    box-shadow: none;
    color: inherit;
}

.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: inherit;
}

.checklist .icheckbox_square-green {
    margin-top: -4px;
}

div.dataTables_wrapper div.dataTables_processing {
    top: 50%;
    left: 55%;
    border-radius: 40px;
    width: 65px;
    padding: 7px 0px;
    background: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,.4);
    border: none;
}

th {
    text-align: center;
}

.table > tbody > tr > td, .table > thead > tr > th {
    padding: 8px 3px;
    vertical-align: middle;
}

.category-filters ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.loading {
    background-size: 6% 11%;
    z-index: 12;
}

.wrapper-dropdown-3 {
    padding: 4 8px;
    right: 14px;
    top: 8px;
}

.wrapper-dropdown-3 .dropdown {
    z-index: 11;
    padding: 0;
}

.wrapper-dropdown-3 .dropdown li {
    margin-right: 0;
}

.wrapper-dropdown-3 .dropdown li a {
    padding: 4 8px;
    font-weight: 500;
}

.wrapper-dropdown-3 .dropdown li:hover a {
    background: #5E95C7;
    color: #fff;
}

/*.dropdown-menu-category {
    z-index: 12;
}*/

.dropdown-menu-category > li > a {
    padding: 0 15px 0 12px !important;
}

@media (max-width:992px) {
  .dropdown-menu-category > li > a {
    width: 100%;
  }
}

.dropdown-menu-category-icon {
    position: relative;
    height: 25px;
    width: 25px;
    margin-right: 7px;
    margin-top: -3px;
}

/*.dropdown-menu-category-section {
    left: 268px;
}

.dropdown-menu-category-section-content {
    z-index: 12;
}

.dropdown-menu-category-list > li {
    margin-bottom: 1px;
}

.dropdown-menu-category-list > li > a {
    font-weight: 500;
}*/

.st-theme-brick > .nav {
    background: #ecfbeb;
    border-bottom: 2px solid #089613;
}

.st-theme-brick > .nav .nav-link.active {
    background: #089613 !important;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.st-theme-brick > .nav .nav-link {
    padding: 10.3px;
    font-size: 16px;
    color: #9d9d9d !important;
    font-weight: 600;
}

.st > .tab-content {
    border: none;
    box-sizing: border-box;
    box-shadow: 0 2px 7px rgba(0,0,0,.1);
    border-radius: 0;
    height: 926px !important;
}

.st-theme-brick > .tab-content > .tab-pane {
    padding: 0 12px;
    visibility: visible;
}

#tab-sumber .badge-summary {
    font-weight: 600;
    background: #ffa700;
    border-radius: 25px;
    padding: 3px 5px;
    vertical-align: sub;
}

.list-produk {
    height: 863px;
    width: 103%;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.list-produk::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

.list-produk .grid {
    width: 20%;
}

.product-grid {
    transition: all 0.3s ease;
    height: 357px;
    margin: 0 6px 10px 6px;
}

.product-grid .product-image {
    position: relative;
    overflow: hidden;
    height: 184px;
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

/*.product-grid .product-new-label{*/
/*    color: #fff;*/
/*    background-color: #00D1B7;*/
/*    font-size: 14px;*/
/*    font-weight: 600;*/
/*    text-transform: uppercase;*/
/*    text-align: center;*/
/*    line-height: 50px;*/
/*    height: 50px;*/
/*    width: 50px;*/
/*    position: absolute;*/
/*    top: 10px;*/
/*    left: 10px;*/
/*    clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);*/
/*}*/

/*.product-grid .product-like-icon {*/
/*    color: #fff;*/
/*    background-color: #ffb933;*/
/*    font-size: 18px;*/
/*    line-height: 32px;*/
/*    height: 30px;*/
/*    width: 30px;*/
/*    border-radius: 50%;*/
/*    opacity: 0;*/
/*    position: absolute;*/
/*    right: 12px;*/
/*    bottom: 8px;*/
/*    transition: all 0.3s ease;*/
/*}*/

/*.product-grid:hover .product-like-icon { opacity: 1; }*/

/*.product-grid .product-like-icon:hover { background: #dd7f06; }*/

.product-grid .product-content {
    padding: 6px 12px 0;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
    box-shadow: 0 10px 10px rgba(0,0,0,.1);
}

/*.product-grid .category {*/
/*    font-size: 14px;*/
/*    margin: 0 0 7px;*/
/*    display: block;*/
/*}*/

/*.product-grid .category a {*/
/*    color: #555;*/
/*    transition: all 0.3s ease;*/
/*}*/

.product-grid .product-content .badge { margin-top: 4px; }

.product-grid .dot-hr { margin: 4px 0 4px 0; }

.product-grid .b-morelines_section_button { margin-top: -17px; }

.product-grid .title {
    font-size: 15px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0;
    height: 42px;
    overflow: hidden;
    line-height: 1.3;
}

.product-grid .title:hover { color: #5E95C7; }

.product-grid .title, .product-grid .suplier { cursor: pointer; }

/*.product-grid .title a{*/
/*    color: #333;*/
/*    transition: all 0.3s ease;*/
/*    line-height: 1.2;*/
/*}*/

/*.product-grid .title a:hover, .product-grid .category a:hover { color: #00D1B7; }*/

.product-grid .price .item-price {
    color: red;
    font-size: 16px;
    font-weight: 600;
    margin: 0;
    line-height: 1.5;
}

.product-grid .unit {
    color: #756f6f;
    font-size: 13px;
    font-weight: normal;
    text-transform: lowercase;
}

.product-grid .suplier, .product-grid .area { color: #089613; }

.product-grid .suplier, .product-grid .area, .product-grid .spesification {
    font-size: 13px;
    line-height: 1.3;
}

.product-grid .detail {
    background-color: #fff;
    width: 100%;
    padding: 0 12px 10px;
    opacity: 1;
    position: absolute;
    left: 0;
    top: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 10px 10px rgba(0,0,0,.1);
}

@media screen and (max-width:990px) {
    .product-grid { margin: 0 0 30px; }
}


.flickity-page-dots .dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 8px;
    background: #026CB6 !important;
    border-radius: 50%;
    filter: alpha(opacity=25);
    opacity: 0.25;
    cursor: pointer;
}
/*.gallery {
  background: #EEE;
}*/

/*.gallery-cell {
    width: 66%;
    height: 300px;
    margin-right: 10px;
    background: #026CB6;
    counter-increment: gallery-cell;
    top: 15px;
}*/

.gallery-cell {
    width: 66%;
    height: 300px;
    margin-right: 10px;
    background: transparent;
    counter-increment: gallery-cell;
    top: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 20px;
}
/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  /*content: counter(gallery-cell);*/
  line-height: 200px;
  font-size: 80px;
  color: white;
}

.flickity-viewport {
    overflow: hidden;
    position: relative;
    /*height: 100%;*/
    height: 330px !important;
}



/*

.gallery-cell:nth-child(1) { transform: translate(-170%, -50%); }

.gallery-cell:nth-child(2) { transform: translate(-50%, -50%); }

.gallery-cell:nth-child(3) { transform: translate(70%, -50%); }

.gallery-cell:nth-child(4) { transform: translate(190%, -50%); }

.gallery .gallery-cell:nth-child(1) { transform: translate(-290%, -50%); }

.gallery .gallery-cell:nth-child(2) { transform: translate(-170%, -50%); }

.gallery .gallery-cell:nth-child(3) { transform: translate(-50%, -50%); }

.gallery .gallery-cell:nth-child(4) { transform: translate(70%, -50%); }

.gallery-cell .gallery-cell:nth-child(1) { transform: translate(-170%, -50%); }

.gallery-cell .gallery-cell:nth-child(2) { transform: translate(-50%, -50%); }

.gallery-cell .gallery-cell:nth-child(3) { transform: translate(70%, -50%); }

.gallery-cell .gallery-cell:nth-child(4) { transform: translate(190%, -50%); }
*/

.flickity-prev-next-button .arrow {
    fill: #fff !important;
}
.flickity-prev-next-button:hover {
    background: #026CB6A1 !important;
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
</style>

<link rel="stylesheet" href="<?php echo base_url('assets/css/icheck.min_all.min.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

<!-- <section class="offered-area section-gap" id="offered" style="margin-top: 2em;"> -->
<div class="gallery js-flickity" id="gallery" data-flickity-options='{ "wrapAround": true,"autoPlay": true }' style="margin-top: 3.5em;">
  <div class="gallery-cell"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/slider_1.jpg" class="d-block w-100" style="height: 300px;" alt="..."></div>
  <div class="gallery-cell"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/slider_2.jpg" class="d-block w-100" style="height: 300px;" alt="..."></div>
  <div class="gallery-cell"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/slider_3.jpg" class="d-block w-100" style="height: 300px;" alt="..."></div>
 <!--  <div class="gallery-cell"><img src="https://www.concordegroup.in/assets-home/images/home-desktop-slider/sm-create-smart-banner.jpg" class="d-block w-100" alt="..."></div>
  <div class="gallery-cell"><img src="https://ashproperties.com/wp-content/uploads/2020/07/LongBannerV6_Page_2-1-scaled.jpg" class="d-block w-100" alt="..."></div> -->
</div>
<!-- </section> -->










<section class="offered-area" style="margin-top: 10em;margin-bottom: 8em;" id="">
        <center><h4 style="font-size: 30px;font-weight: bolder;">
            <div style="font-size: 48px;margin-bottom: 20px;"> <strong>rumahtinggal.id</strong> merupakan <strong>marketplace desain rumah</strong> </div>
            <div style="font-size: 48px;margin-bottom: 30px;"> untuk mewujudkan <strong>hunian idaman</strong> Anda </div>
            <div> Dapatkan desain hunian terbaik dengan <strong>mudah, hemat</strong> dan <strong>berkualitas</strong> </div> </h2>
            <!-- <div class="line-header">   </div>  -->
             </center>   
    </section> 
   
<!-- <div class="container1">
  <div class="card1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
  <div class="card1 active1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
  <div class="card1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
  <div class="card1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
</div> -->

<!-- //header -->
<section class="offered-area section-gap" id="offered" style="margin-top: 4em;margin-bottom: 4em;">
    <div class="container">
        <div class="row" style="/*text-align: center*/">
            <div class="col-md-5" style="flex: 0 0 40%;">
                <img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/cari_desain_2.jpg" class="d-block w-100" style="flex:0 0 39.667%; height: none;" alt="...">     
            </div>
            <div class="col-md-2">
                <img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/sampel_desain_2.jpg" class="d-block w-100"  alt="..." style="height: none;"> 
            </div>
            <div class="col-md-5" style="flex: 0 0 40%;">
                <img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/konsultasi_2.jpg" class="d-block w-100" style="flex:0 0 39.667%; height: none;" alt="..."> 
            </div>
</div></div>
</section>







<!-- 
<div class="container" style="display: flex;">
        <div class="card mr-3 col-md-2" style="border: none; width: ">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mr-3 col-md-2" style="border: none;">
            <div class="face face1">
                <div class="content">
                    <img class="card-img-top" src="https://estimator.id/arsi-hack/assets/img/desain/foto_6_1.jpg" alt="">
                    <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="" style="margin-top: 100px; width: 100%;">
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div> -->



<!-- <section class="offered-area mt-5" id="">
        <center><h2><strong>Desain Promo</strong></h2>
            <div class="line-header">   </div>  </center>   
    </section>  
<section class="pb-4">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary mb-3 mr-1 prev-a" href="#carouselExampleIndicators4" role="button" data-slide="prev" >
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 next-a" href="#carouselExampleIndicators4" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="padding-left: 4px;padding-right: 4px;">
                    <div class="carousel-item active">
                        <!- <div class="row" id="rumah-popular1"> ->
                        <div class="col-md-2 col-md-6 mb-4 mt-4 ">
</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" id="rumah-popular2">
                            <div class="col-md-2 col-md-6 mb-4 mt-4 ">
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            </div> -->

        <!-- <div class="swiper-container" style="background: #00ced1">
        <div class="swiper-wrapper" id="rumah-popular1">
            <-- <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div> ->
        </div>
        <!- Add Pagination ->
        <div class="swiper-pagination"></div>
        <!- Add Arrows ->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div> -->
    <!-- <p class="append-buttons">
        <a href="#" class="prepend-2-slides">Prepend 2 Slides</a>
        <a href="#" class="prepend-slide">Prepend Slide</a>
        <a href="#" class="append-slide">Append Slide</a>
        <a href="#" class="append-2-slides">Append 2 Slides</a>
    </p> -->
       <!--  </div>
    </div>
</div>

</section> -->



<!-- new -->
<!-- <section class="offered-area mt-5" id="">
    <center><h2><strong>Desain Promo</strong></h2>
    <div class="line-header">   </div>  </center>   
</section>   -->
<section class="pb-4">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <div class="gallery js-flickity" id="gallery" data-flickity-options='{ "freeScroll": true }' style="margin-top: 3.5em;">
              <div class="gallery-cell"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/slider_1.jpg" class="d-block w-100" style="height: 300px;" alt="..."></div>
              <div class="gallery-cell"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/slider_2.jpg" class="d-block w-100" style="height: 300px;" alt="..."></div>
              <div class="gallery-cell"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/beranda/slider_3.jpg" class="d-block w-100" style="height: 300px;" alt="..."></div>
            </div> -->

            <div class="controls pull-right hidden-xs">
                <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                    data-slide="prev" style="/*! top: 5em; */margin-left: -80%;margin-top: 11em;position: absolute;z-index: 1;"></a>
                <a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                        data-slide="next" style="/*! top: 5em; */margin-left: -1%;margin-top: 11em;position: absolute;z-index: 1;"></a>
            </div>
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" style="background-image: url(<?php echo $this->config->item('url_arsi') ?>assets/img/banner/desain_promo.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
           
                <div class="carousel-inner" style="position: relative; width: 81%; overflow: hidden;margin-left: 19% !important;">
                    <div class="item active">
                        <div class="row" >
                             <div class="col-md-12" id="rumah-popular1"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                             <div class="col-md-12" id="rumah-popular2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end new -->






<!-- <section class="offered-area mt-5" id="">
    <center><h2><strong>Desain Favorit</strong></h2>
    <div class="line-header">   </div>  </center>   
</section>   -->
<section class="pb-4">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="controls pull-right hidden-xs">
                <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                    data-slide="prev" style="/*! top: 5em; */margin-left: -80%;margin-top: 11em;position: absolute;z-index: 1;"></a>
                <a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                        data-slide="next" style="/*! top: 5em; */margin-left: -1%;margin-top: 11em;position: absolute;z-index: 1;"></a>
            </div>
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" style="background-image: url(<?php echo $this->config->item('url_arsi') ?>assets/img/banner/desain_favorit.jpg);background-size: ;background-size: 100% 100%;background-repeat: no-repeat;">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" style="position: relative;width: 81%;overflow: hidden;margin-left: 19% !important;">
                    <div class="item active">
                        <div class="row" >
                             <!-- <div class="col-md-2 col-md-6 mb-4 mt-4 "></div> -->
                             <div class="col-md-12" id="rumah-favorit1"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row" >
                             <!-- <div class="col-md-2 col-md-6 mb-4 mt-4 "></div> -->
                             <div class="col-md-12" id="rumah-favorit2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>








<!-- <section class="offered-area mt-5" id="">
        <center><h2><strong>Desain Favorit</strong></h2>
            <div class="line-header">   </div>  </center>   
    </section>  
<section class="pb-4">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="swiper-container" style="background: #00ced1">
        <div class="swiper-wrapper" id="rumah-favorit1"> -->
            <!-- <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div> -->
        <!-- </div> -->
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div> -->
        <!-- <div class="swiper-button-prev"></div> -->
    <!-- </div> -->
            <!-- <a class="btn btn-primary mb-3 mr-1 prev" href="#carouselExampleIndicators3" role="button" data-slide="prev" >
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="padding-left: 4px;padding-right: 4px;">
                    <div class="carousel-item active">
                        <div class="row" id="rumah-favorit1">
                        
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" id="rumah-favorit2">
                        
                        </div>
                    </div>
                    
                </div>
            </div> -->
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->

<!-- </section> -->




<section class="pb-4">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators3" class="" data-ride="carousel">
                <div class="" style="padding-left: 4px;padding-right: 4px;">
                    <div class="">
                       <section class="offered-area mt-5" id="">
                            <center><h2><strong>Desain Popular</strong></h2>
                              <!--   <div class="line-header">   </div> -->  </center>   
                        </section>      
                        <div class="row" id="rumah-top">
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- <!<center><a href="<?php echo $this->config->item('url_arsi') ?>desain" class="genric-btn success-border circle mt-5" style="padding: 0 17px; line-height: 32px;">LIHAT SEMUA</a></center> > -->
</section>
   
   


<!-- <section class="pb-5 mb-5">
  <div class="banner-card-pay" style="background: grey;height: 23em;line-height: 23em;">
    <div class="">
        <div class="col-12">
        
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="">
                            <div class="col-md-4 mb-3">
                               
                                  <a href="#">
                                      <img class="card-img-top" src="https://3.imimg.com/data3/US/KE/MY-6949767/1-500x500.jpg" alt="">
                                  </a>
                                    
                                    
                            </div>
                            <div class="col-md-4 mb-3">
                               
                                  <a href="#">
                                      <img class="card-img-top" src="https://3.imimg.com/data3/US/KE/MY-6949767/1-500x500.jpg" alt="">
                                  </a>
                                      
                            </div>
                            <div class="col-md-4 mb-3">
                               
                                  <a href="#">
                                      <img class="card-img-top" src="https://3.imimg.com/data3/US/KE/MY-6949767/1-500x500.jpg" alt="">
                                  </a>
                                    
                            </div>
                            
                        </div>
                    </div>
                     <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                               
                                  <a href="#">
                                      <img class="card-img-top" src="https://3.imimg.com/data3/US/KE/MY-6949767/1-500x500.jpg" alt="">
                                  </a>
                                    
                                    
                            </div>
                            <div class="col-md-4 mb-3">
                               
                                  <a href="#">
                                      <img class="card-img-top" src="https://3.imimg.com/data3/US/KE/MY-6949767/1-500x500.jpg" alt="">
                                  </a>
                                      
                            </div>
                            <div class="col-md-4 mb-3">
                               
                                  <a href="#">
                                      <img class="card-img-top" src="https://3.imimg.com/data3/US/KE/MY-6949767/1-500x500.jpg" alt="">
                                  </a>
                                    
                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

</section> -->




<section class="pb-4 mt-5">
  <div class="container">
    <div class="row">
        <div class="col-12">
<section class="offered-area" id="">
                            <center><h2><strong>Cari Material</strong></h2>
                                <!-- <div class="line-header">   </div> -->  </center>   
<section class="offered-area" style="margin-bottom: 2em;" id="">
        <center><p>Temukan material bangunan terbaik untuk rumah tinggal idaman Anda</p>
            <!-- <div class="line-header">   </div>  -->
             </center>   
    </section>  
</section>     

<!-- <section class="home"></section> -->
<section>
    <div class="container" style="margin: 0;width: 100%;">
        <div class="row">
            <div class="col-md-12" style="padding: 15px 30px 5px 30px;">
                <div class="owl-carousel owl-theme">
                    <?php
                      if ($slide_merk != '') {
                        foreach($slide_merk as $item) { ?>
                            <div class="slide-brand" style="background: url(<?php echo base_url('assets/img/merk/').$item->logo ?>);background-size: 100% 100%;"></div>
                    <?php }
                        foreach($slide_merk as $item) { ?>
                            <div class="slide-brand" style="background: url(<?php echo base_url('assets/img/merk/').$item->logo ?>);background-size: 100% 100%;"></div>
                    <?php }
                        foreach($slide_merk as $item) { ?>
                            <div class="slide-brand" style="background: url(<?php echo base_url('assets/img/merk/').$item->logo ?>);background-size: 100% 100%;"></div>
                    <?php }} ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3 p0" style="width: 20%;">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="panel-filter">
                                <h4 class="panel-title">
                                    <!-- data-parent="#accordion" -->
                                    <a class="" role="button" data-toggle="collapse" data-parent="" href="#wrap-filter" aria-expanded="true" aria-controls="panel-filter">
                                        Filter Material
                                    </a>
                                </h4>
                            </div>
                            <div id="wrap-filter" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-filter">
                                <div class="panel-body">
                                    <form id="frm-filter" style="margin-top: -8px;">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Nama Material</label>
                                                    <input type="text" class="form-control" id="nama_material" name="nama_produk" placeholder="Ketik Nama Material">
                                                    <input type="hidden" id="merk" name="merk">
                                                    <!-- <input type="hidden" id="id_sub_kategori" name="id_sub_kategori"> -->
                                                    <input type="hidden" id="id_kategori" name="id_kategori">
                                                    <input type="hidden" id="sort_by" name="sort_by" value="1">
                                                    <input type="hidden" id="sumber" value="3">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset style="padding-bottom: 0;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Wilayah</label>
                                                    <select class="select2-wilayah" style="width: 100%;" id="wilayah" name="wilayah">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="panel-kategori">
                                <h4 class="panel-title">
                                    <!-- class="collapsed" data-parent="#accordion" -->
                                    <a class="" role="button" data-toggle="collapse" data-parent="" href="#wrap-kategori" aria-expanded="true" aria-controls="panel-kategori">
                                        Kategori Material
                                    </a>
                                </h4>
                            </div>
                            <div id="wrap-kategori" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-kategori">
                                <div class="panel-body">
                                    <div class="list-category">
                                        <ul class="category">
                                            <!-- <li class="list-sub-kategori" data-id="0"><a href="javascript:void(0);"><img class="category-icon" src="<?php echo base_url('assets/img/icon/kategori/semua-kategori.png') ?>" />Semua Kategori</a></li> -->
                                            <li class="list-kategori" data-id="0"><a href="javascript:void(0);"><img class="category-icon" src="<?php echo base_url('assets/img/icon/kategori/semua-kategori.png') ?>" />Semua Kategori</a></li>
                                            <?php
                                              if ($kategori != '') {
                                                foreach($kategori as $item){ ?>
                                                    <li class="list-kategori" data-id="<?php echo $item->id_kategori ?>"><a href="javascript:void(0);"><img class="category-icon" src="<?php echo base_url('assets/img/icon/kategori/'.$item->icon) ?>" /><?php echo $item->kategori ?>
                                                        <?php if ($item->jumlah != '0') { ?>
                                                        <span class="pull-right"><span class="badge" style="vertical-align: sub;"><?php echo $item->jumlah ?></span></span>
                                                        <?php } ?>
                                                    </a>
                                                        <!-- <ul>
                                                            <?php
                                                              if ($sub_kategori != '') {
                                                                foreach($sub_kategori as $sub_item) {
                                                                    if ($sub_item->id_kategori == $item->id_kategori) { ?>
                                                                        <li class="list-sub-kategori" data-id="<?php echo $sub_item->id_sub_kategori ?>"><a href="javascript:void(0);"><img class="category-icon" src="<?php echo base_url('assets/img/icon/kategori/'.$sub_item->icon) ?>" /><?php echo $sub_item->sub_kategori ?></a></li>
                                                            <?php }}} ?>
                                                        </ul> -->
                                                    </li>
                                            <?php }} ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="panel-merk">
                                <h4 class="panel-title">
                                    <!-- class="collapsed" data-parent="#accordion" -->
                                    <a class="" role="button" data-toggle="collapse" data-parent="" href="#wrap-merk" aria-expanded="true" aria-controls="panel-merk">
                                        Merk Material
                                    </a>
                                </h4>
                            </div>
                            <div id="wrap-merk" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-merk">
                                <div class="panel-body">
                                    <div class="list-category" style="height: 146px;">
                                        <ul class="checklist" style="margin-top: -4px;"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" style="width: 80%;max-width:80%;padding-bottom: 17px;">
                    <div id="tab-sumber">
                        <ul class="nav">
                            <li id="tab-sumber-suplier" data-id="3"><a class="nav-link" href="#tab-suplier">Suplier <span class="badge badge-summary" id="badge-suplier"></span></a></li>
                            <li id="tab-sumber-shbj" data-id="1"><a class="nav-link" href="#tab-shbj">SHBJ <span class="badge badge-summary" id="badge-shbj"></span></a></li>
                            <li id="tab-sumber-ikk" data-id="4"><a class="nav-link" href="#tab-ikk">IKK BPS <span class="badge badge-summary" id="badge-ikk"></span></a></li>
                            <li id="tab-sumber-eid" data-id="2"><a class="nav-link" href="#tab-eid">Estimator.id <span class="badge badge-summary" id="badge-eid"></span></a></li>
                        </ul>
                    
                        <div class="tab-content">
                            <div id="tab-suplier" class="tab-pane" role="tabpanel" style="padding: 0 3px;">
                                <!-- <div style="margin: 12px 0;">Menampilkan <span id="jum_produk"></span> material</div> -->
                                <div style="margin: 12px 0;">&nbsp</div>
                                <span style="position: absolute;top: 12px;right: 213px;">Urutkan berdasarkan:</span>
                                <div id="sort" class="wrapper-dropdown-3">
                                    <span>Produk Terbaru</span>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0);" onclick="setSort(1)">Produk Terbaru</a></li>
                                        <li><a href="javascript:void(0);" onclick="setSort(2)">Produk Terlama</a></li>
                                        <li><a href="javascript:void(0);" onclick="setSort(3)">Harga Termurah</a></li>
                                        <li><a href="javascript:void(0);" onclick="setSort(4)">Harga Termahal</a></li>
                                        <li><a href="javascript:void(0);" onclick="setSort(5)">Abjad A-Z</a></li>
                                        <li><a href="javascript:void(0);" onclick="setSort(6)">Abjad Z-A</a></li>
                                    </ul>
                                </div>
                                
                                <div class="container" style="width: 100%;">
                                    <div class="row list-produk" id="katalog-produk"></div>
                                    <!-- <div class="status">
                                        <div class="loader"></div>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div id="tab-shbj" class="tab-pane" role="tabpanel">
                                <table id="tabel-shbj" class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th width="3%">No.</th>
                                          <th width="29%">Nama Material</th>
                                          <th width="7%">Satuan</th>
                                          <th width="15%">Harga Dasar</th>
                                          <th width="14%">Merk</th>
                                          <th width="14%">Spesifikasi</th>
                                          <th width="18%">Sumber</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            
                            <div id="tab-ikk" class="tab-pane" role="tabpanel">
                                <table id="tabel-ikk" class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th width="3%">No.</th>
                                          <th width="29%">Nama Material</th>
                                          <th width="7%">Satuan</th>
                                          <th width="15%">Harga Dasar</th>
                                          <th width="14%">Merk</th>
                                          <th width="14%">Spesifikasi</th>
                                          <th width="18%">Sumber</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            
                            <div id="tab-eid" class="tab-pane" role="tabpanel">
                                <table id="tabel-eid" class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th width="3%">No.</th>
                                          <th width="29%">Nama Material</th>
                                          <th width="7%">Satuan</th>
                                          <th width="15%">Harga Dasar</th>
                                          <th width="14%">Merk</th>
                                          <th width="14%">Spesifikasi</th>
                                          <th width="18%">Sumber</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
</div>
 
</section>


















<!-- <section class="banner-area relative testim" id="testim" style="height: 9cm; margin-top: 50px;"> -->





<!-- <section class="banner-area relative" id="home" style="height: 9cm; margin-top: 50px;">
    <div class="overlay-bg overlay" style="background: #026CB6;">
     <img src="assets/img/header-bg.jpg" class="img-rounded" style="height: 9cm;width: 100%;opacity: inherit;filter: brightness(20%);"> 
    </div>
        <div class="container">
            <div class="row fullscreen d-flex" style="height: 256px;">
                <div class="ban-cont col-md-12 white" style="margin-top: 1cm;">
                    <div class="container">
                        <div class="row white">
                            <div class="col-sm-8">
                               <h4>Testimoni</h4>
                                  <div class="line" style="background: #fff;"> </div>
                                <div class="row">

                                    <div class="col-sm-1" style="font-size: xx-large;">
                                        <i class="fa fa-quote-left white" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-10 white" style="font-size: 15px;">
                                        This Bootstrap header template is a very high-quality and standard header example that comes with a navigation bar and a carousel. In place of the text ‘Company’, you can show your company name or your company logo. There are five menus in the navigation bar, such as ‘about’, ‘team’, and so on. You can greatly enhance the design of this header template by adding Bootstrap code or by changing the CSS code. Although you can make the design a lot better, try to keep it simple as a simple design is very effective.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3" style="margin-left: 50px;">
                                <img src="assets/img/testimony.png" style="width:185px;" >
                            </div>
                        </div>          
                    </div>
                </div>                                              
            </div>
        </div>
</section> -->


<section class="offered-area mt-5 mb-5" id="">
<center> <section class="offered-area mt-5" id="">
                            <center><h2 style="margin-bottom:0px;"><strong>Baca Artikel</strong></h2>
                                <!-- <div class="line-header">   </div> -->  
<p style="font-size: 15px;"><a href="<?php echo $this->config->item('url_arsi') ?>artikel" style="padding: 0 17px; line-height: 32px;">Lihat semua artikel</a>  </p>
                            </center>   
                        </section>     
    

</center>
</section>      
<section class="pb-5 mb-5">
  <div class="container">
    <div class="row">
        <div class="col-12">
          <!-- <a class="btn btn-primary mb-3 mr-1 prev-a" href="#carouselExampleIndicators2" role="button" data-slide="prev" >
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 next-a" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a> -->
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                     <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card h-100">
                                  <a href="#">
                                      <img class="card-img-top" src="https://www.jawapos.com/wp-content/uploads/2019/06/rumah-minimalis-2.jpg" alt="">
                                  </a>
                                      <div class="card-body">
                                      November 12, 2020
                                    <h4 class="card-title">
                                      <a href="#" class="black">7-Air-Cleaning Tropicals You Need in Your Space</a>
                                    </h4>
                                   
                                    </div>
                                    <div>
                                      <div class="card-group">
                                        <div style="margin: 0px 12px 20px;">
                                         Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            

 <!--<div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                <a href='<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`'>
                  <img src="<?php echo $this->config->item('url_arsi') ?>assets/img/desain/`+data[k].foto+`">
                  </a>
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                        <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[k].id_rumah+`' class='black'>`+data[k].nama_rumah+`</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-7">
                                By <span style='color: #026CB6;'>`+data[k].nama_arsitek+`</span> 
                            </div>
                            <div class="col-md-5" style="padding-left: 0px;float: right;text-align: right;">
                                <i class="fa fa-star turtoise" aria-hidden="true"></i>
                                <i class="fa fa-star turtoise" aria-hidden="true"></i>
                                <i class="fa fa-star turtoise" aria-hidden="true"></i>
                                <i class="fa fa-star turtoise" aria-hidden="true"></i>
                                <i class="fa fa-star outline-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 12px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_lahan+` m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 12px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_bangunan+` m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 12px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> `+data[k].lantai+`
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 12px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].kamar_tidur+`
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 15px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 12px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].toilet+`
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[k].id_rumah+`' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>`+data[k].dilihat+`</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>`+data[k].suka+`</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <center><a href="#" class="genric-btn success-border circle mt-5" style="padding: 0 17px; line-height: 32px;">LIHAT SEMUA</a></center> -->
</section>

<section id="testim" class="testim">
    <section class="offered-area mt-5" id="">
                            <center><h2><strong>Testimoni</strong></h2>
                                <!-- <div class="line-header">   </div> -->  </center>   
                        </section>     
        <div class="testim-cover">
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    
                    <div class="active">
                        <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>
                        <h2><strong>Lorem P. Ipsum</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
                        <h2><strong>Mr. Lorem Ipsum</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                        <h2><strong>Miss. Lorem Ipsum</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
                        <h2><strong>Mr. Lorem Ipsum</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                        <h2><strong>Ms. Lorem R. Ipsum</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                </div>

            </div>
        </div>
    </section>



<!-- card new -->
<!-- <section>
    <div class="container">
      <div class="card">
        <div class="img">
          <img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg">
        </div>
<div class="top-text">
          <div class="name">
Annie Lea</div>
<p>
Apps Developer</p>
</div>
<div class="bottom-text">
          <div class="text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
<div class="btn">
            <a href="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg">Selengkapnya</a>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
          <img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg">
        </div>
<div class="top-text">
          <div class="name">
Eliana Maia</div>
<p>
Website Developer</p>
</div>
<div class="bottom-text">
          <div class="text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
<div class="btn">
            <a href="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg">Read more</a>
          </div>
</div>
</div>



<div class="card">
        <div class="img">
          <img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg">
        </div>
<div class="top-text">
          <div class="name">
Harley Briana</div>
<p>
Graphic Developer</p>
</div>
<div class="bottom-text">
          <div class="text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
<div class="btn">
            <a href="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg">Read more</a>
          </div>
</div>
</div>
</div>
</section> -->






























<!-- <section> 
     <div class="container">
    <div class="row">
       
            <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<suopular>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
             <div class="col-md-2 mb-3">
              <div class="card">
                <div class="img">
                  <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg">
                </div>
                <div class="top-text">
                     <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                        
                                    </li>
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>12 m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> 1
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>12
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 9px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>1
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            
            
        </div>
    </div>
</section> -->



<!-- 
<section class="pb-5 mb-5">
  <div class="container">
    <div class="row">
<div class="col-md-2 mb-3">
<div class="make-3D-space">
    <div class="product-card">
        <div class="product-front">
            <div class="shadow"></div>
            <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 100%;" alt="" />
            <div class="image_overlay"></div>
            <div class="view_details">View details</div>
            <div class="stats">         
                <div class="stats-container">
                  <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>                                   
                    
                    <div class="product-options">
                    
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(12 x 13)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
               
                </div>                       
                </div>                         
            </div>
        </div>
        <div class="product-back">
            <div class="shadow"></div>
            <div class="carousel">
                <ul>
                    <li><img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 24em;" alt="" /></li>
                    <li><img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 24em;" alt="" /></li>
                    <li><img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 24em;" alt="" /></li>
                </ul>
                <div class="arrows-perspective">
                    <div class="carouselPrev">
                        <div class="y"></div>
                        <div class="x"></div>
                    </div>
                    <div class="carouselNext">
                        <div class="y"></div>
                        <div class="x"></div>
                    </div>
                </div>
            </div>
            <div class="flip-back">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>
        </div>    
    </div>  
</div>  
</div>

<div class="col-md-2 mb-3 ">
<div class="make-3D-space">
    <div class="product-card">
        <div class="product-front">
            <div class="shadow"></div>
            <img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 100%;" alt="" />
            <div class="image_overlay"></div>
            <div class="view_details">View details</div>
            <div class="stats">         
                <div class="stats-container">
                  <div style="padding:0px 20px 0px 20px;">  
                         <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='black'>simple Haouse</a>
                        </h4>
                        <p class='card-text'>Design By <span style='color: #026CB6;'>TR Studio</span></p>
                        <div>
                            <div class='card-group'>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >
                                    <p class='card-title text-center' style='font-size: 9px;'>13 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>12 m<sup>2</sup></p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2</p>
                                </div>
                                <div style='margin :7px;'>
                                    <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>2 </p>
                                </div>
                                <div style='margin :8px;'>
                                    <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>
                                    <p class='card-title text-center' style='font-size: 9px;'>1</p>
                                </div>
                            </div>
                        </div>
                    </div>                                   
                    
                    <div class="product-options">
                    
                   <p class='card-text center'>Dimensi Lahan Minimal <br>
                            <span><strong>(12 x 13)</strong></span>
                        </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/1' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>12</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-heart i-heart'></i><span class='con'>11</span>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-share-alt'></i>
                            </div>
                        </div>
                    </div>
               
                </div>                       
                </div>                         
            </div>
        </div>
        <div class="product-back">
            <div class="shadow"></div>
            <div class="carousel">
                <ul>
                    <li><img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 24em;" alt="" /></li>
                    <li><img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 24em;" alt="" /></li>
                    <li><img src="https://estimator.id/arsi-hack/assets/img/desain/foto_41_1.jpg" style="width: 24em;" alt="" /></li>
                </ul>
                <div class="arrows-perspective">
                    <div class="carouselPrev">
                        <div class="y"></div>
                        <div class="x"></div>
                    </div>
                    <div class="carouselNext">
                        <div class="y"></div>
                        <div class="x"></div>
                    </div>
                </div>
            </div>
            <div class="flip-back">
                <div class="cy"></div>
                <div class="cx"></div>
            </div>
        </div>    
    </div>  
</div>  
</div>
</div>
</div>
</section>

 -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script> -->
<script src="<?php echo base_url('assets/js/icheck.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->


<script>


    var appendNumber = 4;
    var prependNumber = 1;
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    // document.querySelector('.prepend-2-slides').addEventListener('click', function (e) {
    //   e.preventDefault();
    //   swiper.prependSlide([
    //     '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>',
    //     '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>'
    //     ]);
    // });
    // document.querySelector('.prepend-slide').addEventListener('click', function (e) {
    //   e.preventDefault();
    //   swiper.prependSlide('<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>');
    // });
    // document.querySelector('.append-slide').addEventListener('click', function (e) {
    //   e.preventDefault();
    //   swiper.appendSlide('<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>');
    // });
    // document.querySelector('.append-2-slides').addEventListener('click', function (e) {
    //   e.preventDefault();
    //   swiper.appendSlide([
    //     '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>',
    //     '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>'
    //     ]);
    // });
// const slideDelay = 3000;

//       const dynamicSlider = document.getElementById("gallery");

//       var curSlide = 0;
//       window.setInterval(()=>{
//         curSlide++;
//         if (curSlide === dynamicSlider.childElementCount) {
//           curSlide = 0;
//         }

//         // Actual slide
//         dynamicSlider.firstElementChild.style.setProperty("margin-left", "-" + curSlide + "00%");
//       }, slideDelay);



























    // function reloadTabelSHBJ(){ tabel_shbj.ajax.reload(); }
    // function reloadTabelIKK(){ tabel_ikk.ajax.reload(); }
    // function reloadTabelEID(){ tabel_eid.ajax.reload(); }
    
    // function initTabelSHBJ() {
    //     tabel_shbj = $("#tabel-shbj").DataTable({
    //         "language": {
    //           "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
    //           "sInfoEmpty": "",
    //           "sInfoFiltered": "(terfilter dari _MAX_ data)",
    //           "emptyTable": "<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada hasil ditemukan</span>",
    //           "sLengthMenu": "Data per Halaman: _MENU_",
    //             "sLoadingRecords": "<img src='<?php echo base_url() ?>assets/ajax-loader.gif' width='45' /><br>Silakan tunggu, data sedang di-load...",
    //             "sProcessing": "<img src='<?php echo base_url() ?>assets/ajax-loader.gif' width='45' />",
    //             "sSearch": "Cari Data:",
    //             "sSearchPlaceholder": "Masukkan kata kunci...",
    //             "sZeroRecords": "<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada hasil ditemukan</span>",
    //           "paginate": {
    //             "first": "Pertama",
    //             "last": "Terakhir",
    //             "previous": "Sebelumnya",
    //             "next": "Berikutnya"
    //           }
    //         },
    //         processing: true,
    //         serverSide: true,
    //         ajax: {
    //           "url": "<?php echo $this->config->item('url_server') ?>api/getTabelKatalogBahan",
    //           "type": "POST",
    //           data: function (data) {
    //             data.rincian = $('#nama_material').val();
    //             data.sumber = '1';
    //             data.wilayah = $('#wilayah').val();
    //           }
    //         },
    //         "columnDefs": [
    //           {
    //             "targets": [ 0 ],
    //             "searchable": false,
    //             "orderable": false
    //           }

    //         ],
    //         "dom": "<'top'i>tr",
    //         "bDeferRender": true,
    //         "bFilter": false,
    //         "bLengthChange": false,
    //         "bAutoWidth": false,
    //         order: [[1, 'asc'],[3, 'desc']],
    //         rowCallback: function (row, data, iDisplayIndex) {
    //           var info = this.fnPagingInfo();
    //           var page = info.iPage;
    //           var length = info.iLength;
    //           var index = page * length + (iDisplayIndex + 1);
              
    //           $('td:eq(0)', row).html(index);
    //           $('td:eq(0),td:eq(2)', row).prop("align","center");
    //           $('td:eq(3)', row).prop("align","right");
    //         },
    //         drawCallback: function(oSettings){
    //           if (oSettings.fnRecordsDisplay() == 0){
    //             $('#tabel-shbj.dataTable td.dataTables_empty').css('padding-bottom','23px');
    //             if ($('#nama_material').val() != '') {
    //                 if (jum_bua > 0) {
    //                     $('#tabel-shbj.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada sumber SHBJ<br>Silakan pilih sumber lain yang tersedia");
    //                     $('#tabel-shbj_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','170px');
    //                 } else {
    //                     $('#tabel-shbj.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada semua sumber</span>");
    //                     $('#tabel-shbj_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','522px');
    //                 }
    //             } else {
    //                 $('#tabel-shbj.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada sumber SHBJ<br>Silakan pilih sumber lain yang tersedia");
    //                 $('#tabel-shbj_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','170px');
    //             }
    //           } else {
    //             $('#tabel-shbj_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','522px');
    //           }
    //         },
    //         scrollY: 522,
    //         scrollCollapse: true,
    //         scroller: true
    //     });
    // }
    
    // function initTabelIKK() {
    //     tabel_ikk = $("#tabel-ikk").DataTable({
    //         "language": {
    //           "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
    //           "sInfoEmpty": "",
    //           "sInfoFiltered": "(terfilter dari _MAX_ data)",
    //           "emptyTable": "<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada hasil ditemukan</span>",
    //           "sLengthMenu": "Data per Halaman: _MENU_",
    //             "sLoadingRecords": "<img src='<?php echo base_url() ?>assets/ajax-loader.gif' width='45' /><br>Silakan tunggu, data sedang di-load...",
    //             "sProcessing": "<img src='<?php echo base_url() ?>assets/ajax-loader.gif' width='45' />",
    //             "sSearch": "Cari Data:",
    //             "sSearchPlaceholder": "Masukkan kata kunci...",
    //             "sZeroRecords": "<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada hasil ditemukan</span>",
    //           "paginate": {
    //             "first": "Pertama",
    //             "last": "Terakhir",
    //             "previous": "Sebelumnya",
    //             "next": "Berikutnya"
    //           }
    //         },
    //         processing: true,
    //         serverSide: true,
    //         ajax: {
    //           "url": "<?php echo $this->config->item('url_server') ?>api/getTabelKatalogBahan",
    //           "type": "POST",
    //           data: function (data) {
    //             data.rincian = $('#nama_material').val();
    //             data.sumber = '4';
    //             data.wilayah = $('#wilayah').val();
    //           }
    //         },
    //         "columnDefs": [
    //           {
    //             "targets": [ 0 ],
    //             "searchable": false,
    //             "orderable": false
    //           }

    //         ],
    //         "dom": "<'top'i>tr",
    //         "bDeferRender": true,
    //         "bFilter": false,
    //         "bLengthChange": false,
    //         "bAutoWidth": false,
    //         order: [[1, 'asc'],[3, 'desc']],
    //         rowCallback: function (row, data, iDisplayIndex) {
    //           var info = this.fnPagingInfo();
    //           var page = info.iPage;
    //           var length = info.iLength;
    //           var index = page * length + (iDisplayIndex + 1);
              
    //           $('td:eq(0)', row).html(index);
    //           $('td:eq(0),td:eq(2)', row).prop("align","center");
    //           $('td:eq(3)', row).prop("align","right");
    //         },
    //         drawCallback: function(oSettings){
    //           if (oSettings.fnRecordsDisplay() == 0){
    //             $('#tabel-ikk.dataTable td.dataTables_empty').css('padding-bottom','23px');
    //             if ($('#nama_material').val() != '') {
    //                 if (jum_bua > 0) {
    //                     $('#tabel-ikk.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada sumber IKK BPS<br>Silakan pilih sumber lain yang tersedia");
    //                     $('#tabel-ikk_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','170px');
    //                 } else {
    //                     $('#tabel-ikk.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada semua sumber</span>");
    //                     $('#tabel-ikk_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','522px');
    //                 }
    //             } else {
    //                 $('#tabel-ikk.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada sumber IKK BPS<br>Silakan pilih sumber lain yang tersedia");
    //                 $('#tabel-ikk_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','170px');
    //             }
    //           } else {
    //             $('#tabel-ikk_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','522px');
    //           }
    //         },
    //         scrollY: 522,
    //         scrollCollapse: true,
    //         scroller: true
    //     });
    // }
    
    // function initTabelEID() {
    //     tabel_eid = $("#tabel-eid").DataTable({
    //         "language": {
    //           "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
    //           "sInfoEmpty": "",
    //           "sInfoFiltered": "(terfilter dari _MAX_ data)",
    //           "emptyTable": "<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada hasil ditemukan</span>",
    //           "sLengthMenu": "Data per Halaman: _MENU_",
    //             "sLoadingRecords": "<img src='<?php echo base_url() ?>assets/ajax-loader.gif' width='45' /><br>Silakan tunggu, data sedang di-load...",
    //             "sProcessing": "<img src='<?php echo base_url() ?>assets/ajax-loader.gif' width='45' />",
    //             "sSearch": "Cari Data:",
    //             "sSearchPlaceholder": "Masukkan kata kunci...",
    //             "sZeroRecords": "<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada hasil ditemukan</span>",
    //           "paginate": {
    //             "first": "Pertama",
    //             "last": "Terakhir",
    //             "previous": "Sebelumnya",
    //             "next": "Berikutnya"
    //           }
    //         },
    //         processing: true,
    //         serverSide: true,
    //         ajax: {
    //           "url": "<?php echo $this->config->item('url_server') ?>api/getTabelKatalogBahan",
    //           "type": "POST",
    //           data: function (data) {
    //             data.rincian = $('#nama_material').val();
    //             data.sumber = '2';
    //             data.wilayah = $('#wilayah').val();
    //           }
    //         },
    //         "columnDefs": [
    //           {
    //             "targets": [ 0 ],
    //             "searchable": false,
    //             "orderable": false
    //           }

    //         ],
    //         "dom": "<'top'i>tr",
    //         "bDeferRender": true,
    //         "bFilter": false,
    //         "bLengthChange": false,
    //         "bAutoWidth": false,
    //         order: [[1, 'asc'],[3, 'desc']],
    //         rowCallback: function (row, data, iDisplayIndex) {
    //           var info = this.fnPagingInfo();
    //           var page = info.iPage;
    //           var length = info.iLength;
    //           var index = page * length + (iDisplayIndex + 1);
              
    //           $('td:eq(0)', row).html(index);
    //           $('td:eq(0),td:eq(2)', row).prop("align","center");
    //           $('td:eq(3)', row).prop("align","right");
    //         },
    //         drawCallback: function(oSettings){
    //           if (oSettings.fnRecordsDisplay() == 0){
    //             $('#tabel-eid.dataTable td.dataTables_empty').css('padding-bottom','23px');
    //             if ($('#nama_material').val() != '') {
    //                 if (jum_bua > 0) {
    //                     $('#tabel-eid.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada sumber Estimator.id<br>Silakan pilih sumber lain yang tersedia");
    //                     $('#tabel-eid_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','170px');
    //                 } else {
    //                     $('#tabel-eid.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada semua sumber</span>");
    //                     $('#tabel-eid_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','522px');
    //                 }
    //             } else {
    //                 $('#tabel-eid.dataTable td.dataTables_empty').html("<img src='<?php echo base_url() ?>assets/img/not-found.png' width='110' style='padding: 10px 0px;' /><br><span>Tidak ada material ditemukan pada sumber Estimator.id<br>Silakan pilih sumber lain yang tersedia");
    //                 $('#tabel-eid_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','170px');
    //             }
    //           } else {
    //             $('#tabel-eid_wrapper .dataTables_scroll .dataTables_scrollBody').css('min-height','522px');
    //           }
    //         },
    //         scrollY: 522,
    //         scrollCollapse: true,
    //         scroller: true
    //     });
    // }
function like(index){

    var id_customer=1;
    var id_rumah=index;
    var suka=1;

    var jumlikeplus = Number($('#jumlike'+index).html())+Number(1);

    $.ajax({
       url : "<?php echo $this->config->item('url_arsi') ?>simpanDisukai",
       type : "POST",
        data: {"id_rumah":id_rumah,"id_customer":id_customer,"suka":suka},
       dataType: "JSON",
       success: function(data){
            
        }
     });
    $.ajax({
       url : "<?php echo $this->config->item('url_arsi') ?>rumahSuka/"+index,
       type : "POST",
       dataType: "JSON",
       success: function(data){      
        }
     });
    $("#jumlike"+index).html( ''+jumlikeplus+'' );

    $("#like"+index).removeClass( 'like' );
    $("#like"+index+" .i-heart").addClass( 'red' );

    $("#like"+index).addClass('unlike');
    $("#like"+index).attr('onclick', 'unlike('+index+')');
    $("#like"+index).attr('id', 'unlike'+index+'');
  }
  function unlike(index){
    var id_customer=1;
    var id_rumah=index;
    var suka=1;

var jumlikemin = Number($('#jumlike'+index).html())-Number(1);

    $.ajax({
       url : "<?php echo $this->config->item('url_arsi') ?>hapusDisukai/"+index+"/"+id_customer,
       type : "POST",
       dataType: "JSON",
       success: function(data){
            
        }
    });
    $.ajax({
       url : "<?php echo $this->config->item('url_arsi') ?>rumahBatalSuka/"+index,
       type : "POST",
       dataType: "JSON",
       success: function(data){      
        }
    });

    $("#jumlike"+index).html( ''+jumlikemin+'' );
    $("#unlike"+index).removeClass( 'unlike' );
    $("#unlike"+index+" .i-heart").removeClass( 'red' );
    $("#unlike"+index).addClass('like');
    $("#unlike"+index).attr('onclick', 'like('+index+')');
    $("#unlike"+index).attr('id', 'like'+index+'');
  }
    var tabel_shbj='',tabel_ikk='',tabel_eid='',timer;
    $(document).ready(function() {
 // $(".like").on('click', function(){
 //    $('#temp_wilayah'+k).select2({
 //        // alert("button");
 //        // $(this).removeClass( 'like' );
 //        // $(this).addClass( 'red' );
 //      //    $(".nexttab").removeClass( 'nexttab' );
         
 //      //   $(".selesai").attr('id', 'selesai');
 //      //   $(".selesai").html('Selesai');
 //      // $(this).addClass('unlike');
 //      // $(this).attr('onclick', 'unlike()');
 //    }); 

// $('.product-card').hover(function(){
//             $(this).addClass('animate');
//             $('div.carouselNext, div.carouselPrev').addClass('visible');            
//          }, function(){
//             $(this).removeClass('animate');         
//             $('div.carouselNext, div.carouselPrev').removeClass('visible');
//     }); 
    
//     // Flip card to the back side
//     $('.view_details').click(function(){        
//         $('div.carouselNext, div.carouselPrev').removeClass('visible');
//         $('.product-card').addClass('flip-10');
//         setTimeout(function(){
//             $('.product-card').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
//                 $('.product-front, .product-front div.shadow').hide();          
//             });
//         }, 50);
        
//         setTimeout(function(){
//             $('.product-card').removeClass('flip90').addClass('flip190');
//             $('.product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
//             setTimeout(function(){              
//                 $('.product-card').removeClass('flip190').addClass('flip180').find('div.shadow').hide();                        
//                 setTimeout(function(){
//                     $('.product-card').css('transition', '100ms ease-out');         
//                     $('.cx, .cy').addClass('s1');
//                     setTimeout(function(){$('.cx, .cy').addClass('s2');}, 100);
//                     setTimeout(function(){$('.cx, .cy').addClass('s3');}, 200);             
//                     $('div.carouselNext, div.carouselPrev').addClass('visible');                
//                 }, 100);
//             }, 100);            
//         }, 150);            
//     });         
    
//     // Flip card back to the front side
//     $('.flip-back').click(function(){       
        
//         $('.product-card').removeClass('flip180').addClass('flip190');
//         setTimeout(function(){
//             $('.product-card').removeClass('flip190').addClass('flip90');
    
//             $('.product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
//                 $('.product-back, .product-back div.shadow').hide();
//                 $('.product-front, .product-front div.shadow').show();
//             });
//         }, 50);
        
//         setTimeout(function(){
//             $('.product-card').removeClass('flip90').addClass('flip-10');
//             $('.product-front div.shadow').show().fadeTo( 100 , 0);
//             setTimeout(function(){                      
//                 $('.product-front div.shadow').hide();
//                 $('.product-card').removeClass('flip-10').css('transition', '100ms ease-out');      
//                 $('.cx, .cy').removeClass('s1 s2 s3');          
//             }, 100);            
//         }, 150);            
        
//     }); 

    
//     /* ----  Image Gallery Carousel   ---- */
    
//     var carousel = $('.carousel ul');
//     var carouselSlideWidth = 335;
//     var carouselWidth = 0;  
//     var isAnimating = false;
    
//     // building the width of the casousel
//     $('.carousel li').each(function(){
//         carouselWidth += carouselSlideWidth;
//     });
//     $(carousel).css('width', carouselWidth);
    
//     // Load Next Image
//     $('div.carouselNext').on('click', function(){
//         var currentLeft = Math.abs(parseInt($(carousel).css("left")));
//         var newLeft = currentLeft + carouselSlideWidth;
//         if(newLeft == carouselWidth || isAnimating === true){return;}
//         $('.carousel ul').css({'left': "-" + newLeft + "px",
//                                "transition": "300ms ease-out"
//                              });
//         isAnimating = true;
//         setTimeout(function(){isAnimating = false;}, 300);          
//     });
    
//     // Load Previous Image
//     $('div.carouselPrev').on('click', function(){
//         var currentLeft = Math.abs(parseInt($(carousel).css("left")));
//         var newLeft = currentLeft - carouselSlideWidth;
//         if(newLeft < 0  || isAnimating === true){return;}
//         $('.carousel ul').css({'left': "-" + newLeft + "px",
//                                "transition": "300ms ease-out"
//                              });
//         isAnimating = true;
//         setTimeout(function(){isAnimating = false;}, 300);          
//     });




  sliderRumahPopular();
    sliderRumahTop();
    sliderRumahFavorit();
    $('.carousel').carousel({
        "pause": "false"
    });
    $('.carousel-text').carousel({
        "pause": "false"
    });


        Cookies.set('wilayah_material', '', { domain: 'estimator.id' });
        // $('#wilayah').select2("trigger", "select", {data: {id: "3404", text: "Kab Sleman"} });

        $('.list-merk').iCheck({
            checkboxClass: 'icheckbox_square-green'
        });
        
        $('#tab-sumber').smartTab({
            // selected: 1,
            theme: 'brick',
            orientation: 'horizontal',
            justified: true,
            autoAdjustHeight: false,
            enableURLhash: false,
            transition: {
                animation: 'slide-horizontal',
                speed: '400',
                easing: ''
            }
        });
        
        $('#tab-sumber .tab-content').css("height","610px");
        $('#tab-sumber .tab-content .tab-pane').css("width","100%");
        $('#tab-sumber').smartTab("goToTab", 0);

        getKatalogProduk();
        getMerkProduk();
        
        $('.owl-carousel').owlCarousel({
            items : 7,
            margin: 10,
            // center: true,
            loop: true,
            autoplay: true,
            autoplaySpeed: 500,
            autoplayHoverPause: true,
            // nav: true,
        });
        
        // var loading = $.loading({
        //     ajax       : true,
        //     id         : 'ajaxLoading',
        //     minTime    : 200,
        //     background : 'rgba(207, 247, 206, .9)',
        //     radius     : '50px',
        //     width      : '95px',
        //     height     : '97px',
        //     imgPath    : '<?php echo base_url('assets/eid-loader.gif') ?>',
        //     imgWidth   : '80px',
        //     imgHeight  : '80px',
        //     tip        : '',
        // });
        
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
            return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };
    });
  
    function detailProduk(id){

        location.href = " <?php echo $this->config->item('url_arsi') ?>detail-produk/"+id;
    }
    
    function detailSuplier(id){
        location.href = "<?php echo base_url('suplier/') ?>"+id;
    }
    
    function detailMerk(id){
        location.href = "<?php echo base_url('merk/') ?>"+id;
    }
    
    function setSort(by) {
        $('#sort_by').val(by);
        getKatalogProduk();
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
    
        number = parseFloat(number).toFixed(decimals);
    
        number = number.replace(".", dec_point);
    
        var splitNum = number.split(dec_point);
        splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
        number = splitNum.join(dec_point);
    
        return number;
    }
    
    function getKatalogProduk(){
        $('#katalog-produk').loading();
        $.ajax({
            type : 'POST',
            url : "<?php echo $this->config->item('url_server') ?>api/getKatalogProduk",
            data: $('#frm-filter').serialize(),
            dataType: "JSON",
            success : function(data){
                if (data != '') {
                    var list = '';
                    for (var i = 0; i <= data.length-1; i++) {
                        var foto, nama_suplier;
                        nama_suplier = data[i].nama_suplier;
                        if (nama_suplier.length > 21) nama_suplier = nama_suplier.substring(0,20)+'...';
                        if (data[i].foto != '') foto = data[i].foto; else foto = 'no-foto.jpg';
                        list +=
                            `<div class="col-md-3 col-sm-6 p0 grid">
                                <div class="product-grid" data-id="`+data[i].id_produk+`">
                                    <div class="product-image">
                                        <a href="javascript:void(0)" class="image" onclick="detailProduk(`+data[i].id_produk+`)">
                                            <img class="pic-1" src="<?php echo base_url('assets/foto/produk/') ?>`+foto+`">
                                            <img class="pic-2" src="<?php echo base_url('assets/foto/produk/') ?>`+foto+`">
                                        </a>
                                        <button class="btn add-to-cart btn-pilih" onclick="tambahRincianBUA(3,`+data[i].id_produk+`,\'`+data[i].id_bahan+`\')"><i class="fa fa-check"></i> Pilih Material</button>
                                    </div>
                                    <div class="product-content">
                                        <div class="title" onclick="detailProduk(`+data[i].id_produk+`)">`+data[i].nama_produk+`</div>
                                        <div class="suplier" title="`+data[i].nama_suplier+`" onclick="detailSuplier(`+data[i].id_suplier+`)"><img style="width: 15px;margin-top: -3px;" src="<?php echo base_url('assets/img/store.png') ?>"> `+nama_suplier+`</div>
                                        <div class="detail">
                                            <div class="dot-hr" style="margin-top: 2px;margin-bottom: 2px;"></div>
                                            <div class="badge merk" style="border-radius: 0 6px;">`+data[i].merk+`</div>
                                            <div class="spesification" style="margin-top: -2px;">`+data[i].spesifikasi+`</div>
                                            <div class="dot-hr" style="margin-top: 4px;margin-bottom: 2px;"></div>
                                            <div class="price"><span class="item-price">Rp`+number_format(data[i].harga_dasar, 0, ',', '.')+`</span><span class="unit"> / `+data[i].satuan+`</span></div>
                                            <div class="area"><img style="width: 14px;margin: -3px 1px 0 0;" src="<?php echo base_url('assets/img/location.png') ?>"> `+data[i].wilayah+`</div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                    }
                    
                    $('#jum_produk').html(data.length);
                    $('#katalog-produk').html(list).loading('done');
                } else {
                    $('#jum_produk').html("0");
                    $('#produk-suplier').html("<center style='margin-top: 130px;'><img src='<?php echo base_url() ?>assets/img/not-found.png' width='170' style='margin-bottom: 12px;' /><br><span style='font-size: 15px;'>Tidak ada material ditemukan</span></center>").loading('done');

                    if ($('#nama_material').val() != '') {
                        if (jum_bua > 0) $('#katalog-produk').html("<center style='margin-top: 130px;'><img src='<?php echo base_url() ?>assets/img/not-found.png' width='160' style='padding: 13px 0px;' /><br><p style='font-size: 14.5px; padding: 0;'>Tidak ada material ditemukan pada sumber suplier<br>Silakan pilih sumber lain yang tersedia</p></center>").loading('done');
                        else $('#katalog-produk').html("<center style='margin-top: 130px;'><img src='<?php echo base_url() ?>assets/img/not-found.png' width='160' style='padding: 13px 0px;' /><br><p style='font-size: 14.5px; padding: 0;'>Tidak ada material ditemukan pada semua sumber</p></center>").loading('done');
                    } else $('#katalog-produk').html("<center style='margin-top: 130px;'><img src='<?php echo base_url() ?>assets/img/not-found.png' width='160' style='padding: 13px 0px;' /><br><p style='font-size: 14.5px; padding: 0;'>Tidak ada material ditemukan pada sumber suplier<br>Silakan pilih sumber lain yang tersedia</p></center>").loading('done');
                }
                
                $('.product-grid .spesification').moreLines({
                    linecount: 1,
                    buttontxtmore: '<i class="fa fa-angle-down"></i>',
                    buttontxtless: '<i class="fa fa-angle-up"></i>',
                    animationspeed: 250
                });
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
    
    function getMerkProduk() {
        $.ajax({
            type : 'POST',
            url : "<?php echo $this->config->item('url_server') ?>api/getFilterMerkProduk",
            data: $('#frm-filter').serialize(),
            dataType: "JSON",
            success : function(data){
                if (data != '') {
                    var list = '';
                    for (var i = 0; i <= data.length-1; i++) {
                        list += '<li><input type="checkbox" class="list-merk" name="list_merk" value="'+data[i].merk+'" /><span class="item">'+data[i].merk+'</span><span class="pull-right"><span class="badge" style="width: 25px;vertical-align: sub;">'+data[i].jumlah+'</span></span></li>';
                    }
                    
                    $('.checklist').html(list);
                } else $('.checklist').html("<center><img src='<?php echo base_url() ?>assets/img/not-found.png' width='75' style='padding: 5px 0px;' /><br><span>Tidak ada merk material</span></center>");
                
                $('.list-merk').iCheck({
                    checkboxClass: 'icheckbox_square-green'
                });
                
                $('.list-merk').on("ifChanged", function(e) {
                    var merk = '';
                    $.each($(".checklist :input").serializeArray(), function() {
                        merk += "'" + this.value + "',";
                    });
                    $('#merk').val(merk.slice(0,-1));
                    $('#nama_material').keyup();
                });
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
  
    var jum_bua;
    $("#nama_material").on("keyup", function() {
        $('#id_sub_kategori').val('');
        clearTimeout(timer);
        
        timer = setTimeout(getMerkProduk, 1000);
        var sumber = $('#sumber').val();
        if (sumber != 3) {
            if (sumber == 1) timer = setTimeout(reloadTabelSHBJ, 1000);
            else if (sumber == 4) timer = setTimeout(reloadTabelIKK, 1000);
            else if (sumber == 2) timer = setTimeout(reloadTabelEID, 1000);
        } else timer = setTimeout(getKatalogProduk, 1000);
        
        if ($(this).val() != '') {
            timer = setTimeout(function(){
                jum_bua = 0;
                $.ajax({
                    type : 'POST',
                    url : "<?php echo $this->config->item('url_server') ?>api/getSummaryCariProduk",
                    dataType: "JSON",
                    data: {
                        "keyword": $('#nama_material').val(),
                        "id_wilayah": $('#wilayah').val()
                    },
                    success : function(data){
                        $('#badge-suplier').html(data.suplier);
                        jum_bua += parseInt(data.suplier);
                    },
                    error: function (jqXHR, textStatus, errorThrown){
                      toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
                    }
                });
                
                $.ajax({
                    type : 'POST',
                    url : "<?php echo $this->config->item('url_server') ?>api/getSummaryKatalogBahan",
                    dataType: "JSON",
                    data: {
                        "keyword": $('#nama_material').val(),
                        "id_wilayah": $('#wilayah').val()
                    },
                    success : function(data){
                        $('#badge-shbj').html(data.shbj);
                        $('#badge-ikk').html(data.ikk);
                        $('#badge-eid').html(data.eid);
                        jum_bua += parseInt(data.shbj) + parseInt(data.ikk) + parseInt(data.eid);
                    },
                    error: function (jqXHR, textStatus, errorThrown){
                      toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
                    }
                });
                $('#badge-suplier,#badge-shbj,#badge-ikk,#badge-eid').css("display","inline-block");
            }, 1000);
        } else $('#badge-suplier,#badge-shbj,#badge-ikk,#badge-eid').css("display","none");
    });
  
    $("#wilayah").on("change", function() {
        $('#id_sub_kategori,#merk').val('');
        Cookies.set('wilayah_material', $(this).val(), { domain: 'estimator.id' });
        var sumber = $('#sumber').val();

        if (sumber == 3) {
            getKatalogProduk();
            getMerkProduk();
        } else if (sumber == 1) reloadTabelSHBJ();
        else if (sumber == 2) reloadTabelEID();
        else if (sumber == 4) reloadTabelIKK();
    });

    $("[id^=tab-sumber-]").on("click", function() {
        $('#sumber').val($(this).data('id'));
        clearTimeout(timer);
        
        var tab = $(this).prop('id');
        if (tab != 'tab-sumber-suplier') {
            if (tab == 'tab-sumber-shbj') {
                timer = setTimeout(function(){
                    if (tabel_shbj == '') initTabelSHBJ();
                    reloadTabelSHBJ();
                }, 1000);
            } else if (tab == 'tab-sumber-ikk') {
                timer = setTimeout(function(){
                    if (tabel_ikk == '') initTabelIKK();
                    reloadTabelIKK();
                }, 1000);
            } else if (tab == 'tab-sumber-eid') {
                timer = setTimeout(function(){
                    if (tabel_eid == '') initTabelEID();
                    reloadTabelEID();
                }, 1000);
            }
            
            $('#panel-kategori,#panel-merk').hide();
        } else {
            getKatalogProduk();
            getMerkProduk();
            $('#panel-kategori,#panel-merk').show();
        }
    });
    
    $(".list-sub-kategori").on("click", function() {
        $('#id_sub_kategori').val($(this).data('id'));
        $('#nama_material,#merk').val('');
        getKatalogProduk();
        getMerkProduk();
    });
    
    $(".list-merk").on("ifChanged", function(e) {
        var merk = '';
        $.each($(".checklist :input").serializeArray(), function() {
            merk += "'" + this.value + "',";
        });
        $('#merk').val(merk.slice(0,-1));
        $('#nama_material').keyup();
    });
    
    function formatWilayah (data) {
        if (!data.id) { return data.text; }
        if (data.kategori != "2") {
            return "<b>"+data.text+"</b>";
        } else {
            return "<span style='padding-left:20px'>"+data.text+"</span>";
        }
    }
    
    $(".select2-wilayah").select2({
        theme: "bootstrap",
        placeholder: "Pilih Wilayah",
        allowClear: true,
        "language": {
            "noResults": function() {
               return "<center><img src='<?php echo base_url() ?>assets/img/not-found.png' width='65' /><br><span>Tidak ada wilayah</span></center>";
            },
            searching: function () {
               return "<center><img src='<?php echo base_url() ?>assets/img/search-loader.gif' width='30' /></center>";
            },
            loadingMore: function () {
               return "<center><img src='<?php echo base_url() ?>assets/img/ajax-loader.gif' width='30'/></center>";
            }
        },
        escapeMarkup: function (markup) {
           return markup;
        },
        ajax: {
            url: "<?php echo $this->config->item('url_server') ?>api/getListWilayah",
            dataType: 'json',
            delay: 250,
            data: function (params) {
              return {
                q: params.term,
                page_limit: 10,
                page: (params.page > 1 ? params.page - 1 : params.page)
              };
            },
            processResults: function (data, params) {
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
        templateResult: formatWilayah
    });
    
  function DropDown(el) {
    this.sort = el;
    this.placeholder = this.sort.children('span');
    this.opts = this.sort.find('.dropdown a');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  
  DropDown.prototype = {
    initEvents : function() {
      var obj = this;

      obj.sort.on('click', function(e){
          e.preventDefault();
                e.stopPropagation();
        $(this).toggleClass('active');
      });

      obj.opts.on('click',function(){
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
          opt.siblings().removeClass('selected');
                opt.filter(':contains("' + obj.val + '")').addClass('selected');
            }).change();
    },
    getValue : function() {
      return this.val;
    },
    getIndex : function() {
      return this.index;
    }
  }
  
  $(function() {
    var sort = new DropDown( $('#sort') );
    $(document).click(function () {
            $('.wrapper-dropdown-3').removeClass('active');
        });
    });

















// let holder = document.querySelectorAll('.container1')[0],
//     cards = document.querySelectorAll('.card1');

// let preActiveCard = cards[1];
// let nextActiveCard = cards[2];

// function scrollLeft() {
//   holder.classList.remove('next1');
//   holder.classList.remove('reset');
//   holder.classList.add('next1');
  
//   preActiveCard.classList.remove('active1');
//   nextActiveCard.classList.add('active1');
//   setTimeout(reset, 600);
// }

// function reset() {
//   holder.classList.remove('next1');
//   holder.classList.add('reset');
//   preActiveCard.classList.add('active1');
//   nextActiveCard.classList.remove('active1');
// }

// setInterval(scrollLeft, 3500);



function sliderRumahTop(){      
             
               $.ajax({
                   url : "<?php echo $this->config->item('url_arsi') ?>api/getKatalogProdukPopular",
                   type : "POST",
                   dataType: "JSON",
                   success: function(data){
                    // $('#katalog-produk').before("div class='col-lg-4 col-md-6 mb-4'");
                    // $('#katalog-produk').before(data[0].nama_arsitek);
                    for (k = 0; k <= 9;k++ ) {
                    $('#rumah-top').append(`<div class="col-md-2 col-md-6 mb-4">
              <div class="card">

              <a href="<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`"><div class="img" style="background: url('<?php echo $this->config->item('url_arsi') ?>assets/img/desain/`+data[k].foto+`');background-size: 100% 100%;"></div></a>
                
                <div class="top-text">
                     <div style="padding:0px 10px 0px 10px;">  
                        <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`' class='black'>`+data[k].nama_rumah+`</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-7" style="font-weight: bolder;">
                                By <a href="<?php echo $this->config->item('url_arsi') ?>profil-arsitek/`+data[k].id_arsitek+`"><span style='color: #026CB6;' class="ars-name">`+data[k].nama_arsitek+`</span></a> 
                            </div>
                            <div class="col-md-5" style="padding-left: 0px;float: right;text-align: right;">
                              
    `+(data[k].rating < 2 ? `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 3 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 4 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 5 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 6 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>` : ``) +`

                            </div>
                        </div>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav" style="margin-top:9px;">
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_lahan+` m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_bangunan+` m<sup>2</sup>
                                        <span>Luas Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> `+data[k].lantai+`
                                        <span>Jumlah Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].kamar_tidur+`
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 15px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].toilet+`
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(`+data[k].panjang_lahan+` x `+data[k].lebar_lahan+`)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[k].id_rumah+`' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>`+data[k].dilihat+`</span>
                            </div>
                            <div class='icon-medd'>
                                 <button id="like`+data[k].id_rumah+`" onclick="like(`+data[k].id_rumah+`)" style="background: none;border: none;width: 31px;"><i class="fa fa-heart i-heart"></i></button><span class='con' id="jumlike`+data[k].id_rumah+`">`+data[k].suka+`</span>
                            </div>
                            <div class='icon-medd'>
                                <ul class="menu bottomRight">
                                  <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+` `+data[k].nama_rumah+`" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>`);

// $("#like"+data[k].id_rumah).on('click', function(){
//     // $('#like'+k).select2({
//         // alert("button");
//         $("#like"+data[k].id_rumah).removeClass( 'like' );
//         $("#like"+data[k].id_rumah).addClass( 'red' );
//       //    $(".nexttab").removeClass( 'nexttab' );
         
//       //   $(".selesai").attr('id', 'selesai');
//       //   $(".selesai").html('Selesai');
//       $("#like"+data[k].id_rumah).addClass('unlike');
//       $("#like"+data[k].id_rumah).attr('onclick', 'unlike()');
//     }); 
                    }
            
            // $.ajax({
            //        url : "<?php echo $this->config->item('url_arsi') ?>api/getRating/"+data[k].id_rumah,
            //        type : "POST",
            //        dataType: "JSON",
            //        success: function(data){
            //             for (k = 0; k <= 9;k++ ) {
            //                 $('#rate-rating').append(`1`);
            //             }
            //         }
            //      });
            },
                   error: function(jqHR, texStatus, errorThrown){
                    // toastr.error('Terjadi masalah saat penyimpanan data.', 'Kesalahan', opsi_toastr);
                   }
               });
           }




function sliderRumahPopular(){      
             
               $.ajax({
                   url : "<?php echo $this->config->item('url_arsi') ?>api/getKatalogProdukPopular",
                   type : "POST",
                   dataType: "JSON",
                   success: function(data){
                    // $('#katalog-produk').before("div class='col-lg-4 col-md-6 mb-4'");
                    // $('#katalog-produk').before(data[0].nama_arsitek);swiper-slide
                    for (k = 0; k <= 3;k++ ) {
                    $('#rumah-popular1').append(`<div class="col-md-3 col-md-6 mb-4 mt-4" style="flex:0 0 19.80%;">
              <div class="card">

              <a href="<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`"><div class="img" style="background: url('<?php echo $this->config->item('url_arsi') ?>assets/img/desain/`+data[k].foto+`');background-size: 100% 100%;"></div></a>
                
                <div class="top-text">
                     <div style="padding:0px 10px 0px 10px;">  
                        <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`' class='black'>`+data[k].nama_rumah+`</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-7" style="font-weight: bolder;">
                                By <a href="<?php echo $this->config->item('url_arsi') ?>profil-arsitek/`+data[k].id_arsitek+`"><span style='color: #026CB6;'>`+data[k].nama_arsitek+`</span></a> 
                            </div>
                            <div class="col-md-5" style="padding-left: 0px;float: right;text-align: right;">
                               `+(data[k].rating < 2 ? `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 3 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 4 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 5 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 6 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>` : ``) +`
                            </div>
                        </div>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav" style="margin-top:9px;">
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_lahan+` m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_bangunan+` m<sup>2</sup>
                                        <span>Luas Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> `+data[k].lantai+`
                                        <span>Jumlah Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].kamar_tidur+`
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 15px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].toilet+`
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(`+data[k].panjang_lahan+` x `+data[k].lebar_lahan+`)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[k].id_rumah+`' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>`+data[k].dilihat+`</span>
                            </div>
                            <div class='icon-medd'>
                                <button class="like" onclick="like()" style="background: none;border: none;width: 31px;"><i class="fa fa-heart i-heart"></i></button><span class='con'>`+data[k].suka+`</span>
                            </div>
                            <div class='icon-medd'>
                                <ul class="menu bottomRight">
                                  <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+` `+data[k].nama_rumah+`" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>`);
                    }


                    for (l = 3; l <= 6;l++ ) {
                    $('#rumah-popular2').append(`<div class="col-md-3 col-md-6 mb-4 mt-4" style="flex:0 0 19.80%;">
              <div class="card">

              <a href="<?php echo $this->config->item('url_arsi') ?>detail/`+data[l].id_rumah+`"><div class="img" style="background: url('<?php echo $this->config->item('url_arsi') ?>assets/img/desain/`+data[l].foto+`');background-size: 100% 100%;"></div></a>
                
                <div class="top-text">
                     <div style="padding:0px 10px 0px 10px;">  
                        <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>detail/`+data[l].id_rumah+`' class='black'>`+data[l].nama_rumah+`</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-7" style="font-weight: bolder;">
                                By <a href="<?php echo $this->config->item('url_arsi') ?>profil-arsitek/`+data[l].id_arsitek+`"><span style='color: #026CB6;'>`+data[l].nama_arsitek+`</span></a> 
                            </div>
                            <div class="col-md-5" style="padding-left: 0px;float: right;text-align: right;">
                               `+(data[k].rating < 2 ? `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 3 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 4 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 5 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 6 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>` : ``) +`
                            </div>
                        </div>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav" style="margin-top:9px;">
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].luas_lahan+` m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].luas_bangunan+` m<sup>2</sup>
                                        <span>Luas Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> `+data[l].lantai+`
                                        <span>Jumlah Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].kamar_tidur+`
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 15px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].toilet+`
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(`+data[l].panjang_lahan+` x `+data[l].lebar_lahan+`)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[l].id_rumah+`' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>`+data[l].dilihat+`</span>
                            </div>
                            <div class='icon-medd'>
<button class="like" onclick="like()" style="background: none;border: none;width: 31px;"><i class="fa fa-heart i-heart"></i></button>`+data[l].suka+`</span>
                            </div>
                            <div class='icon-medd'>
                                <ul class="menu bottomRight">
                                  <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[l].id_rumah+`" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[l].id_rumah+` `+data[l].nama_rumah+`" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[l].id_rumah+`" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>`);
                    }
// for (m = 8; m <= 11;m++ ) {
//                     $('#rumah-popular3').append("<div class='col-md-3 mb-3'>"+
//                 "<div class='card h-100'>"+
//                     "<a href='#'>"+
//                          "<img class='card-img-top' src='<?php echo base_url() ?>assets/img/desain/"+data[m].foto+"' alt=''>"+ 
//                     "</a>"+
//                     "<div class='card-body'>"+
//                         "<h4 class='card-title title-weight text-uppercase'>"+
//                            "<a href='#' class='black'>"+data[m].nama_rumah+"</a>"+
//                         "</h4>"+
//                         "<p class='card-text'>Design By <span style='color: #026CB6;'>"+data[m].nama_arsitek+"</span></p>"+
//                         "<div>"+
//                             "<div class='card-group'>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].luas_lahan+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].luas_bangunan+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].lantai+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].kamar_tidur+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :8px;'>"+
//                                     "<img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].toilet+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                             "</div>"+
//                         "</div>"+
//                         "<p class='card-text center'>Dimensi Lahan Minimal <br>"+
//                             "<span><strong>("+data[m].panjang_lahan+"m x "+data[m].lebar_lahan+"m)</strong></span>"+
//                         "</p>"+
//                     "</div>"+
//                     "<div>"+
//                         "<div class='card-group'>"+
//                             "<div style='margin: 0px 5px 20px 7px;'>"+
//                                 "<a href='<?php echo base_url()?>api/detail/"+data[m].id_rumah+"' class='genric-btn success circle button-detail'>Detail</a>"+
//                             "</div>"+
//                             "<div class='icon-medd'>"+
//                                 "<i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>7</span>"+
//                             "</div>"+
//                             "<div class='icon-medd'>"+
//                                 "<i class='fa fa-heart i-heart'></i><span class='con'>11</span>"+
//                             "</div>"+
//                             "<div class='icon-medd'>"+
//                                 "<i class='fa fa-share-alt'></i>"+
//                             "</div>"+
//                         "</div>"+
//                     "</div>"+
//                 "</div>"+
//             "</div>");
//                     }
                       // toastr.success(data.Info, 'Informasi', opsi_toastr);
                    },
                   error: function(jqHR, texStatus, errorThrown){
                    
                       // toastr.error('Terjadi masalah saat penyimpanan data.', 'Kesalahan', opsi_toastr);
                   }
               });
           }


function sliderRumahFavorit(){      
             
               $.ajax({
                   url : "<?php echo $this->config->item('url_arsi') ?>api/getKatalogProdukFavorit",
                   type : "POST",
                   dataType: "JSON",
                   success: function(data){
                    // $('#katalog-produk').before("div class='col-lg-4 col-md-6 mb-4'");
                    // $('#katalog-produk').before(data[0].nama_arsitek);
                    for (k = 0; k <= 3;k++ ) {
                    $('#rumah-favorit1').append(`<div class="col-md-3 col-md-6 mb-4 mt-4"  style="flex:0 0 19.80%;">
              <div class="card">

              <a href="<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`"><div class="img" style="background: url('<?php echo $this->config->item('url_arsi') ?>assets/img/desain/`+data[k].foto+`');background-size: 100% 100%;"></div></a>
                
                <div class="top-text">
                     <div style="padding:0px 10px 0px 10px;">  
                        <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>detail/`+data[k].id_rumah+`' class='black'>`+data[k].nama_rumah+`</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-7" style="font-weight: bolder;">
                                By <a href="<?php echo $this->config->item('url_arsi') ?>profil-arsitek/`+data[k].id_arsitek+`"><span style='color: #026CB6;'>`+data[k].nama_arsitek+`</span></a> 
                            </div>
                            <div class="col-md-5" style="padding-left: 0px;float: right;text-align: right;">
                                `+(data[k].rating < 2 ? `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 3 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 4 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 5 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 6 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>` : ``) +`
                            </div>
                        </div>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav" style="margin-top:9px;">
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_lahan+` m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].luas_bangunan+` m<sup>2</sup>
                                        <span>Luas Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> `+data[k].lantai+`
                                        <span>Jumlah Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].kamar_tidur+`
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 15px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[k].toilet+`
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(`+data[k].panjang_lahan+` x `+data[k].lebar_lahan+`)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[k].id_rumah+`' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>`+data[k].dilihat+`</span>
                            </div>
                            <div class='icon-medd'>
                               <button class="like" onclick="like()" style="background: none;border: none;width: 31px;"><i class="fa fa-heart i-heart"></i></button>`+data[k].suka+`</span>
                            </div>
                            <div class='icon-medd'>
                                <ul class="menu bottomRight">
                                  <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+` `+data[k].nama_rumah+`" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[k].id_rumah+`" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>`);
                    }


                    for (l = 3; l <= 6;l++ ) {
                    $('#rumah-favorit2').append(`<div class="col-md-3 col-md-6 mb-4 mt-4"  style="flex:0 0 19.80%;">
              <div class="card">

              <a href="<?php echo $this->config->item('url_arsi') ?>detail/`+data[l].id_rumah+`"><div class="img" style="background: url('<?php echo $this->config->item('url_arsi') ?>assets/img/desain/`+data[l].foto+`');background-size: 100% 100%;"></div></a>
                
                <div class="top-text">
                     <div style="padding:0px 10px 0px 10px;">  
                        <h4 class='card-title title-weight text-uppercase'>
                           <a href='<?php echo $this->config->item('url_arsi') ?>detail/`+data[l].id_rumah+`' class='black'>`+data[l].nama_rumah+`</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-7" style="font-weight: bolder;">
                                By <a href="<?php echo $this->config->item('url_arsi') ?>profil-arsitek/`+data[l].id_arsitek+`"><span style='color: #026CB6;'>`+data[l].nama_arsitek+`</span></a> 
                            </div>
                            <div class="col-md-5" style="padding-left: 0px;float: right;text-align: right;">
                                `+(data[k].rating < 2 ? `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 3 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 4 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 5 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star outline-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>`: data[k].rating < 6 ?  `<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span style="margin-left:5px;font-size:11px;font-weight:bolder;">`+data[k].rating+`</span>` : ``) +`
                            </div>
                        </div>
                        <div>
                            <div class='card-group'>
                                <ul id="MiniHorzNav" style="margin-top:9px;">
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].luas_lahan+` m<sup>2</sup>
                                        <span>Luas Lahan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>    
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].luas_bangunan+` m<sup>2</sup>
                                        <span>Lebar Bangunan</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-katalog' alt='...' ><br> `+data[l].lantai+`
                                        <span>Lantai</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 25px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].kamar_tidur+`
                                        <span>Kamar Tidur</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                    <div class="col-md-3" style="width: 20%;padding-left: 0px;padding-right: 15px;">
                                    <li>
                                        <center>
                                        <a class="navtext" href="#" style='font-size: 11px;'> <img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-katalog' alt='...' ><br>`+data[l].toilet+`
                                        <span>Toilet</span>
                                        </a>
                                        </center>
                                    </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-text">
                  <p class='card-text center'>Dimensi Lahan Minimal <br>
                        <span><strong>(`+data[l].panjang_lahan+` x `+data[l].lebar_lahan+`)</strong></span>
                    </p>
                    <div>
                        <div class='card-group'>
                            <div style='margin: 0px 5px 20px 7px;'>
                                <a href='<?php echo $this->config->item('url_arsi') ?>api/detail/`+data[l].id_rumah+`' class='genric-btn success-border circle button-detail'>Detail</a>
                            </div>
                            <div class='icon-medd'>
                                <i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>`+data[l].dilihat+`</span>
                            </div>
                            <div class='icon-medd'>
                                <button class="like" onclick="like()" style="background: none;border: none;width: 31px;"><i class="fa fa-heart i-heart"></i></button>`+data[l].suka+`</span>
                            </div>
                            <div class='icon-medd'>
                                <ul class="menu bottomRight">
                                  <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[l].id_rumah+`" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="https://web.whatsapp.com/send?text=https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[l].id_rumah+` `+data[l].nama_rumah+`" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                      <li><a href="https://twitter.com/intent/tweet?text=Hello%20twitter%20https%3A%2F%2Festimator.id%2Farsi-hack%2Fdetail%2F`+data[l].id_rumah+`" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>`);
                    }
// for (m = 8; m <= 11;m++ ) {
//                     $('#rumah-popular3').append("<div class='col-md-3 mb-3'>"+
//                 "<div class='card h-100'>"+
//                     "<a href='#'>"+
//                          "<img class='card-img-top' src='<?php echo base_url() ?>assets/img/desain/"+data[m].foto+"' alt=''>"+ 
//                     "</a>"+
//                     "<div class='card-body'>"+
//                         "<h4 class='card-title title-weight text-uppercase'>"+
//                            "<a href='#' class='black'>"+data[m].nama_rumah+"</a>"+
//                         "</h4>"+
//                         "<p class='card-text'>Design By <span style='color: #026CB6;'>"+data[m].nama_arsitek+"</span></p>"+
//                         "<div>"+
//                             "<div class='card-group'>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_luas_lahan.png' class='card-img-top icon-sub' alt='...' >"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].luas_lahan+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_luas_bangunan.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].luas_bangunan+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_jml_lantai.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].lantai+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/icon_kmr_tidur.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].kamar_tidur+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :8px;'>"+
//                                     "<img src='assets/img/icon/icon_toilet.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].toilet+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                             "</div>"+
//                         "</div>"+
//                         "<p class='card-text center'>Dimensi Lahan Minimal <br>"+
//                             "<span><strong>("+data[m].panjang_lahan+"m x "+data[m].lebar_lahan+"m)</strong></span>"+
//                         "</p>"+
//                     "</div>"+
//                     "<div>"+
//                         "<div class='card-group'>"+
//                             "<div style='margin: 0px 5px 20px 7px;'>"+
//                                 "<a href='<?php echo base_url()?>api/detail/"+data[m].id_rumah+"' class='genric-btn success circle button-detail'>Detail</a>"+
//                             "</div>"+
//                             "<div class='icon-medd'>"+
//                                 "<i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>7</span>"+
//                             "</div>"+
//                             "<div class='icon-medd'>"+
//                                 "<i class='fa fa-heart i-heart'></i><span class='con'>11</span>"+
//                             "</div>"+
//                             "<div class='icon-medd'>"+
//                                 "<i class='fa fa-share-alt'></i>"+
//                             "</div>"+
//                         "</div>"+
//                     "</div>"+
//                 "</div>"+
//             "</div>");
//                     }
                       // toastr.success(data.Info, 'Informasi', opsi_toastr);
                    },
                   error: function(jqHR, texStatus, errorThrown){
                    
                       // toastr.error('Terjadi masalah saat penyimpanan data.', 'Kesalahan', opsi_toastr);
                   }
               });
           }





var testim = document.getElementById("testim"),
        testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
        touchStartPos,
        touchEndPos,
        touchPosDiff,
        ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
        
        testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
        })
    
        testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;
            
                touchPosDiff = touchStartPos - touchEndPos;
            
                console.log(touchPosDiff);
                console.log(touchStartPos); 
                console.log(touchEndPos);   

            
                if (touchPosDiff > 0 + ignoreTouch) {
                        testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                        testimRightArrow.click();
                } else {
                    return;
                }
            
        })
}




</script>