<style>

.container1 {
  position: relative;
  background: black;
  /*max-width: 650px;*/
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
  /*background: red;*/
  margin: 5px;
  transition: transform 0.5s, background 0.3s ease-in-out;
}

.w-100{
    height: 243px;
}

.reset .card1 { transition: none; }

/*Set the CSS styles to the active slide:*/

.active1 {
  /*background: yellow;*/
  transform: translate(-50%, -50%) scale(1.1) !important;
}

/*Apply smooth transition effects to the slides when sliding.*/

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



/*header*/
  *{
    font-family: 'Quicksand';
}
#header{
    background: #fff;
    padding: 5px 0;
}
#header.header-scrolled {
    background: rgba(255, 255, 255, 0.9);
    transition: all 0.5s;
}
.h-100{
    box-shadow: 0px 2px 5px 0px rgba(157, 156, 156, 0.28);
border: none !important;
}
.card-title a:hover{
  color: #05bcd2 !important;
}
.prev {
  position: absolute;
  z-index: 2;
  margin-top: 165px;
  margin-left: -20px;
  background-color: #00CED1 !important;
  border: 1px solid #00ced1 !important;
}
.next {
  position: absolute;
  z-index: 2;
  margin-top: 165px;
  margin-left: 1090px;
  background-color: #00CED1 !important;
  border: 1px solid #00ced1 !important;
}

.prev-a {
  position: absolute;
  z-index: 2;
  margin-top: 100px;
  margin-left: -20px;
  background-color: #00CED1 !important;
  border: 1px solid #00ced1 !important;
}
.next-a {
  position: absolute;
  z-index: 2;
  margin-top: 100px;
  margin-left: 1090px;
  background-color: #00CED1 !important;
  border: 1px solid #00ced1 !important;
}
.btn-primary:hover {
    color: #fff;
    background-color: #07c1ca !important;
    border-color: #07c1ca !important;
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
  font-size: 19px;
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
    background: #00CED1;
    top: 0%;
    transform: translateY(-50%);
    opacity:0.6;
}
.genric-btn.success-border {   
    /*background: none !important;*/
}
.i-con {
    font-size: 25px !important;
    color: #00CED1;
    margin: 20px;
}
.button-detail{
  height: 30px;
  line-height: 27px !important;
}
.white{
  color: #fff;
}
.footer-area h4 {
    padding-bottom: 4px;
}
.line {
    width: 2cm;
    height: 5px;
    background: #00CED1;
    margin-bottom: 25px;
}
.black {
    color: #000;
}
.title-weight{
    font-size: 18px;
    font-weight: 600;
}
.button-detail{
  height: 30px;
  line-height: 27px !important;
}
.icon-medd{
  margin: 3px auto;
  font-size: 20px;
  color: #00CED1;
}
sup{
    color:#00CED1;
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
  color: #00CED1;
}

/*.genric-btn {
    line-height: 29px !important;
    padding: 0 33px;
}*/
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<div class="container1">
  <div class="card1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
  <div class="card1 active1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
  <div class="card1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
  <div class="card1"> <img src="https://s3.envato.com/files/264985456/720x300_pop-under.jpg" class="d-block w-100" alt="..."></div>
</div>

<!-- //header -->
<section class="offered-area section-gap" id="offered" style="margin-top: 4em;">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3" style="margin-right: 0px;padding-right: 0px;">  
                <img src="https://plchldr.co/i/250x215?&bg=80deea&text=" style="height: 200px;width: 100%;">
            </div>
            <span style="position: absolute;width: 240px;margin-left: 25px;margin-top: 15px;">   
            Filter Desain <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit    <br>
            
            <a href="#" class="genric-btn genric-btn-portant success circle button-detail" style="margin-top: 2px;">Mulai</a>
</span>
            <div class="col-md-9" style="padding-left: 0px;">     
             <img src="https://www.betterhomeindia.com/wp-content/uploads/2019/05/banner-fb-po9.png" class="d-block w-100" style="height: 200px;" alt="...">     
            </div>
</div></div>
</section>

<section class="pb-4">
  <div class="container">
    <div class="row">
     
        <div class="col-12">
         
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="padding-left: 4px;padding-right: 4px;">
                    <div class="carousel-item active">
                        <div class="row" id="rumah-popular1">
                        

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
 <center><a href="<?php echo $this->config->item('url_arsi') ?>desain" class="genric-btn success-border circle mt-5" style="padding: 0 17px; line-height: 32px;">LIHAT SEMUA</a></center>
</section>


<section class="pb-5 mb-5">
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

</section>





<section class="banner-area relative" id="home" data-image-src="assets/img/header-bg.jpg" style="height: 9cm; margin-top: 50px;">
    <div class="overlay-bg overlay"> <img src="assets/img/header-bg.jpg" class="img-rounded" style="height: 9cm;width: 100%;opacity: inherit;filter: brightness(20%);">  </div>
        <div class="container">
            <div class="row fullscreen d-flex" style="height: 256px;">
                <div class="ban-cont col-md-12 white" style="margin-top: 1cm;">
                    <div class="container">
                        <div class="row white">
                            <div class="col-sm-8">
                               <h4>Testimoni</h4>
                                  <div class="line"> </div>
                                <div class="row">

                                    <div class="col-sm-1" style="font-size: xx-large;">
                                        <i class="fa fa-quote-left turqoise" aria-hidden="true"></i>
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
</section>


<section class="offered-area mt-5" id="">
<center> <h3><strong> Artikel Terbaru </strong></h3> <p style="font-size: 15px;">Dapatkan ratusan artikel menarik tentang rumah Anda</p></center>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                         Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<center><a href="#" class="genric-btn success-border circle mt-5" style="padding: 0 17px; line-height: 32px;">LIHAT SEMUA</a></center>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script src="http://nicesnippets.com/demo/cascade-slider.js"></script>
<script type="text/javascript">

let holder = document.querySelectorAll('.container1')[0],
    cards = document.querySelectorAll('.card1');

let preActiveCard = cards[1];
let nextActiveCard = cards[2];

function scrollLeft() {
  holder.classList.remove('next1');
  holder.classList.remove('reset');
  holder.classList.add('next1');
  
  preActiveCard.classList.remove('active1');
  nextActiveCard.classList.add('active1');
  setTimeout(reset, 600);
}

function reset() {
  holder.classList.remove('next1');
  holder.classList.add('reset');
  preActiveCard.classList.add('active1');
  nextActiveCard.classList.remove('active1');
}

setInterval(scrollLeft, 3500);



function sliderRumahPopular(){      
              
               $.ajax({
                   url : "<?php echo $this->config->item('url_arsi') ?>api/getKatalogProdukPopular",
                   type : "POST",
                   dataType: "JSON",
                   success: function(data){
                    // $('#katalog-produk').before("div class='col-lg-4 col-md-6 mb-4'");
                    // $('#katalog-produk').before(data[0].nama_arsitek);
                    for (k = 0; k <= 7;k++ ) {
                    $('#rumah-popular1').append("<div class='col-md-3 mb-3'>"+
                "<div class='card h-100'>"+
                    "<a href='<?php echo $this->config->item('url_arsi') ?>api/detail/"+data[k].id_rumah+"'>"+
                       "<img class='card-img-top' src='<?php echo $this->config->item('url_arsi') ?>assets/img/desain/"+data[k].foto+"' alt=''>"+ 
                    "</a>"+
                    "<div class='card-body'>"+
                        "<h4 class='card-title title-weight text-uppercase'>"+
                           "<a href='<?php echo $this->config->item('url_arsi') ?>api/detail/"+data[k].id_rumah+"' class='black'>"+data[k].nama_rumah+"</a>"+
                        "</h4>"+
                        "<p class='card-text'>Design By <span style='color: #00ced1;'>"+data[k].nama_arsitek+"</span></p>"+
                        "<div>"+
                            "<div class='card-group'>"+
                                "<div style='margin :7px;'>"+
                                    "<img src='assets/img/icon/Icon Luas Lahan.png' class='card-img-top icon-sub' alt='...' >"+
                                    "<p class='card-title text-center' style='font-size: 9px;'>"+data[k].luas_lahan+" m<sup>2</sup></p>"+
                                "</div>"+
                                "<div style='margin :7px;'>"+
                                    "<img src='assets/img/icon/Icon Lebar Bangunan.png' class='card-img-top icon-sub' alt='...'>"+
                                    "<p class='card-title text-center' style='font-size: 9px;'>"+data[k].luas_bangunan+" m<sup>2</sup></p>"+
                                "</div>"+
                                "<div style='margin :7px;'>"+
                                    "<img src='assets/img/icon/Icon Jml Lantai.png' class='card-img-top icon-sub' alt='...'>"+
                                    "<p class='card-title text-center' style='font-size: 9px;'>"+data[k].lantai+" </p>"+
                                "</div>"+
                                "<div style='margin :7px;'>"+
                                    "<img src='assets/img/icon/Icon Jml Kmr Tidur.png' class='card-img-top icon-sub' alt='...'>"+
                                    "<p class='card-title text-center' style='font-size: 9px;'>"+data[k].kamar_tidur+" </p>"+
                                "</div>"+
                                "<div style='margin :8px;'>"+
                                    "<img src='assets/img/icon/Icon Jml Kmr Mandi.png' class='card-img-top icon-sub' alt='...'>"+
                                    "<p class='card-title text-center' style='font-size: 9px;'>"+data[k].kamar_mandi+"</p>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                        "<p class='card-text center'>Dimensi Lahan Minimal <br>"+
                            "<span><strong>("+data[k].panjang_lahan+"m x "+data[k].lebar_lahan+"m)</strong></span>"+
                        "</p>"+
                    "</div>"+
                    "<div>"+
                        "<div class='card-group'>"+
                            "<div style='margin: 0px 5px 20px 7px;'>"+
                                "<a href='<?php echo $this->config->item('url_arsi') ?>api/detail/"+data[k].id_rumah+"' class='genric-btn success-border circle button-detail'>Detail</a>"+
                            "</div>"+
                            "<div class='icon-medd'>"+
                                "<i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>"+data[k].dilihat+"</span>"+
                            "</div>"+
                            "<div class='icon-medd'>"+
                                "<i class='fa fa-heart i-heart'></i><span class='con'>"+data[k].suka+"</span>"+
                            "</div>"+
                            "<div class='icon-medd'>"+
                                "<i class='fa fa-share-alt'></i>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
            "</div>");
                    }


            //         for (l = 4; l <= 7;l++ ) {
            //         $('#rumah-popular2').append("<div class='col-md-3 mb-3'>"+
            //     "<div class='card h-100'>"+
            //         "<a href='#'>"+
            //              "<img class='card-img-top' src='<?php echo base_url() ?>assets/img/desain/"+data[l].foto+"' alt=''>"+ 
            //         "</a>"+
            //         "<div class='card-body'>"+
            //             "<h4 class='card-title title-weight text-uppercase'>"+
            //                "<a href='#' class='black'>"+data[l].nama_rumah+"</a>"+
            //             "</h4>"+
            //             "<p class='card-text'>Design By <span style='color: #00ced1;'>"+data[l].nama_arsitek+"</span></p>"+
            //             "<div>"+
            //                 "<div class='card-group'>"+
            //                     "<div style='margin :7px;'>"+
            //                         "<img src='assets/img/icon/Icon Luas Lahan.png' class='card-img-top icon-sub' alt='...' >"+
            //                         "<p class='card-title' style='font-size: 9px;'>"+data[l].luas_lahan+" m<sup>2</sup></p>"+
            //                     "</div>"+
            //                     "<div style='margin :7px;'>"+
            //                         "<img src='assets/img/icon/Icon Lebar Bangunan.png' class='card-img-top icon-sub' alt='...'>"+
            //                         "<p class='card-title' style='font-size: 9px;'>"+data[l].luas_bangunan+" m<sup>2</sup></p>"+
            //                     "</div>"+
            //                     "<div style='margin :7px;'>"+
            //                         "<img src='assets/img/icon/Icon Jml Lantai.png' class='card-img-top icon-sub' alt='...'>"+
            //                         "<p class='card-title' style='font-size: 9px;'>"+data[l].lantai+" m<sup>2</sup></p>"+
            //                     "</div>"+
            //                     "<div style='margin :7px;'>"+
            //                         "<img src='assets/img/icon/Icon Jml Kmr Tidur.png' class='card-img-top icon-sub' alt='...'>"+
            //                         "<p class='card-title' style='font-size: 9px;'>"+data[l].kamar_tidur+" m<sup>2</sup></p>"+
            //                     "</div>"+
            //                     "<div style='margin :8px;'>"+
            //                         "<img src='assets/img/icon/Icon Jml Kmr Mandi.png' class='card-img-top icon-sub' alt='...'>"+
            //                         "<p class='card-title' style='font-size: 9px;'>"+data[l].kamar_mandi+" m<sup>2</sup></p>"+
            //                     "</div>"+
            //                 "</div>"+
            //             "</div>"+
            //             "<p class='card-text center'>Dimensi Lahan Minimal <br>"+
            //                 "<span><strong>("+data[l].panjang_lahan+"m x "+data[l].lebar_lahan+"m)</strong></span>"+
            //             "</p>"+
            //         "</div>"+
            //         "<div>"+
            //             "<div class='card-group'>"+
            //                 "<div style='margin: 0px 5px 20px 7px;'>"+
            //                     "<a href='<?php echo base_url()?>api/detail/"+data[l].id_rumah+"' class='genric-btn success circle button-detail'>Detail</a>"+
            //                 "</div>"+
            //                 "<div class='icon-medd'>"+
            //                     "<i class='fa fa-eye i-eye' aria-hidden='true'></i><span class='con'>7</span>"+
            //                 "</div>"+
            //                 "<div class='icon-medd'>"+
            //                     "<i class='fa fa-heart i-heart'></i><span class='con'>11</span>"+
            //                 "</div>"+
            //                 "<div class='icon-medd'>"+
            //                     "<i class='fa fa-share-alt'></i>"+
            //                 "</div>"+
            //             "</div>"+
            //         "</div>"+
            //     "</div>"+
            // "</div>");
            //         }
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
//                         "<p class='card-text'>Design By <span style='color: #00ced1;'>"+data[m].nama_arsitek+"</span></p>"+
//                         "<div>"+
//                             "<div class='card-group'>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/Icon Luas Lahan.png' class='card-img-top icon-sub' alt='...' >"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].luas_lahan+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/Icon Lebar Bangunan.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].luas_bangunan+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/Icon Jml Lantai.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].lantai+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :7px;'>"+
//                                     "<img src='assets/img/icon/Icon Jml Kmr Tidur.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].kamar_tidur+" m<sup>2</sup></p>"+
//                                 "</div>"+
//                                 "<div style='margin :8px;'>"+
//                                     "<img src='assets/img/icon/Icon Jml Kmr Mandi.png' class='card-img-top icon-sub' alt='...'>"+
//                                     "<p class='card-title' style='font-size: 9px;'>"+data[m].kamar_mandi+" m<sup>2</sup></p>"+
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




  $(document).ready(function(){
     sliderRumahPopular();
    $('.carousel').carousel({
        "pause": "false"
    });
    $('.carousel-text').carousel({
        "pause": "false"
    });

})
</script>