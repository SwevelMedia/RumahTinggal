<style>

.float{
    position:fixed;
    width:200px;
    height:35px;
    bottom:26px;
    right:21px;
    background-color:#026CB6;
    color:#FFF;
    border-radius:50px;
    text-align:center;
  font-size:19px;
    box-shadow: 2px 2px 3px #1d1c1c42;
  z-index:100;
}

.float:hover{
    color: #fff;
}


#to-top {
    position: fixed;
    right: 20px;
    bottom: 20px;
    cursor: pointer;
    padding: 10px 15px;
    background: #026CB6;
    font-weight: bold;
    color: #ffffff;
    size: 20px;
    display: none;
    z-index: 100;
    border-radius: 3px;
}


.my-float{
    margin-top:8px;
    margin-left: 27px;
}


.navdev{
    position: relative;
    padding-bottom: 2px;
}

.navdev .line {
    height: 2px;
    position: absolute;
    bottom: 0;
    margin: 0px 0 0 0;
    background: #026cb6;
}
.navdev ul{
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
}
.navdev ul li{
    margin: 0 30px 0 0;
    opacity: 1;
    transition: all 0.4s ease;
}
.navdev ul li:hover{
    opacity: .7;
}
.navdev ul li.active{
    opacity: 1;
}
.navdev ul li:last-child{
    margin-right: 0;
}
.navdev ul li a{
    text-decoration: none;
    color: #026CB6;
    /*text-transform: uppercase;*/
    display: block;
    font-weight: 600;
    /*letter-spacing: .2em;*/
    font-size: 15px;
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

.slick-slide:focus{
    outline: none !important;
    border: 0 !important;
}

button:focus{
    outline: none !important;
    border: 0 !important;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0) !important;
}

@media(min-width: 1028px){
    .mo-bg{
        background: #026CB6 !important;
    }
    .navbar{
        justify-content: space-between !important;
    }
}
    i {
        margin-right: 2px !important;
    }
      /*----------multi-level-accordian-menu------------*/
    .navbar-logo{
        padding: 0px !important;
        color: #026cb6 !important;
    }
    .navbar-mainbg{
        padding: 0px !important;
    }
    #navbarSupportedContent{
        overflow: hidden !important;
        position: relative !important;
        background: #fff !important;
        margin: -8px 20px -8px 557px !important;
    }
    #navbarSupportedContent ul{
        padding: 0px !important;
        margin: 0px !important;
    }
    #navbarSupportedContent ul li a i{
        margin-right: 10px !important;
    }
    #navbarSupportedContent li {
        list-style-type: none !important;
        float: right !important;
    }
    #navbarSupportedContent ul li a{
        color: #026cb6 !important;
        text-decoration: none !important;
        font-size: 15px !important;
        display: block !important;
        padding: 20px 20px !important;
        transition-duration:0.6s !important;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55) !important;
        position: relative !important;
    }
    #navbarSupportedContent>ul>li.active>a{
        color: #fff !important;
        background-color: #026cb6 !important;
        transition: all 0.7s !important;
    }
    #navbarSupportedContent a:not(:only-child):after {
        /*content: "\f105" !important;*/
        position: absolute !important;
        right: 20px !important;
        top: 10px !important;
        font-size: 14px !important;
        font-family: "Font Awesome 5 Free" !important;
        display: inline-block !important;
        padding-right: 3px !important;
        vertical-align: middle !important;
        font-weight: 900 !important;
        transition: 0.5s !important;
    }
    #navbarSupportedContent .active>a:not(:only-child):after {
        transform: rotate(90deg) !important;
    }
    .hori-selector{
        display:inline-block !important;
        position:absolute !important;
        /*height: 100% !important;*/
        top: 0px !important;
        /*left: 0px !important;*/
        left: 113.567px !important;
        height: 62.75px !important;
        transition-duration:0.6s !important;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55) !important;
        /*background-color: #026CB6 !important;*/
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px!important;
        margin-top: 10px !important;
    }
    .hori-selector .right,
    .hori-selector .left{
        position: absolute !important;
        width: 25px !important;
        height: 25px !important;
        background-color: #026CB6 !important;
        bottom: 10px !important;
    }
    .hori-selector .right{
        right: -25px !important;
    }
    .hori-selector .left{
        left: -25px !important;
    }
    .hori-selector .right:before,
    .hori-selector .left:before{
        content: '' !important;
        position: absolute !important;
        width: 50px !important;
        height: 50px !important;
        border-radius: 50% !important;
        background-color: #fff !important;
    }
    .hori-selector .right:before{
        bottom: 0 !important;
        right: -25px !important;
    }
    .hori-selector .left:before{
        bottom: 0 !important;
        left: -25px !important;
    }
}

.mo-bg{
    background: #026CB6;
}
.navbar{
    justify-content: normal;
}
i {
  margin-right: 2px;
}
/*----------multi-level-accordian-menu------------*/
.navbar-logo{
    padding: 0px;
    color: #fff;
}
.navbar-mainbg{
    /*background-color: #5161ce;*/
    padding: 0px;
}
#navbarSupportedContent{
    overflow: hidden;
    position: relative;
    background: #026CB6;
}
#navbarSupportedContent ul{
    padding: 0px;
    margin: 0px;
}
#navbarSupportedContent ul li a i{
    margin-right: 10px;
}
#navbarSupportedContent li {
    list-style-type: none;
    float: right;
}
#navbarSupportedContent ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration:0.6s;
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}
#navbarSupportedContent>ul>li.active>a{
    /*color: #5161ce;*/
    color: #026CB6;
    background-color: transparent;
    transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
    /*content: "\f105";*/
    position: absolute;
    right: 20px;
    top: 10px;
    font-size: 14px;
    font-family: "Font Awesome 5 Free";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    font-weight: 900;
    transition: 0.5s;
}
#navbarSupportedContent .active>a:not(:only-child):after {
    transform: rotate(90deg);
}
.hori-selector{
    display:inline-block;
    position:absolute;
    height: 100%;
    top: 0px;
    left: 0px;
    transition-duration:0.6s;
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    background-color: #fff;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #fff;
    bottom: 10px;
}
.hori-selector .right{
    right: -25px;
}
.hori-selector .left{
    left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before{
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #026cb6;
}
.hori-selector .right:before{
    bottom: 0;
    right: -25px;
}
.hori-selector .left:before{
    bottom: 0;
    left: -25px;
}

@media(min-width: 992px){
    .navbar-expand-custom {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .navbar-expand-custom .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .navbar-expand-custom .navbar-toggler {
        display: none;
    }
    .navbar-expand-custom .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
}

@media (max-width: 991px){
    #navbarSupportedContent ul li a{
        padding: 8px 30px;
    }
    .hori-selector{
        margin-top: 0px;
        margin-left: 10px;
        border-radius: 0;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
    }
    .hori-selector .left,
    .hori-selector .right{
        right: 10px;
    }
    .hori-selector .left{
        top: -25px;
        left: auto;
    }
    .hori-selector .right{
        bottom: -25px;
    }
    .hori-selector .left:before{
        left: -25px;
        top: -25px;
    }
    .hori-selector .right:before{
        bottom: -25px;
        left: -25px;
    }
}

#header {
    background: #fff;
    padding: 8px 0;
    /*box-shadow: 0 0.1px 3px rgba(0, 0, 0, 0.1);*/
}
  
#header.header-scrolled {
    background: rgba(255, 255, 255, 0.9);
    transition: all 0.5s;
}
  
.nav-menu a {
    padding: 2px 10px;
    display: inline-block;
    font-weight: 300;
    font-size: 15px;
    outline: none;
  	text-decoration: none !important;
}
  
.nav-menu > li { margin-left: 5px; }  
  
.nav-menu .dropbtn {
    background: #fff;
    color: #000;
    padding: 6px;
    font-size: 15px;
    border: none;
    cursor: pointer;
    font-weight: 300;
}
  
.nav-menu .dropbtn::after {
    font-family: FontAwesome;
    content: "\f107";
    font-size: 14px;
    padding-left: 7px;
    color: #000;
}  

.nav-menu .dropdown {
    position: relative;
    display: inline-block;
}
  
.nav-menu .dropdown span {  
	font-weight: 400; 
  	color: #026cb6;
}

.nav-menu .dropdown-content {
    display: none;
    position: absolute;
  	padding: 5px 0;
    background: #fff;
    width: 180px;
	right: 0;
    box-shadow: 0 14px 8px -10px rgba(0,0,0,0.2);
    z-index: 1;
}
  
.nav-menu .dropdown:hover .dropdown-content { display: block; }  

.nav-menu .dropdown-content a {
    color: #000;
    padding: 3px 10px;
    display: block;
    text-transform: none;
}
  
.nav-menu .dropdown-content a:hover { color: #026cb6; }
  
.nav-menu .dropdown-content i {
  	margin-right: 4px;
	color: #026cb6;
  	font-size: 13px;
}
  
.nav-menu #menu-login a {
    padding: 6px 12px;
    font-size: 12px;
    font-weight: 400;
    color: #fff;
}
</style>

 <div id='loadingDiv' style="display: cover; position: fixed;z-index: 1000;top: 0;left: 0;height: 100%;width: 100%;background: #026CB6;">
  <div style="display: cover; vertical-align: middle; z-index: 1000;top: 0;left: 0;height: 85px;width: 85px; border-radius: 100%; background: #fff url('https://rumahtinggal.id/assets/gif/rt-loader.gif') 50% 50% no-repeat;margin: 0 auto;margin-top: 23%;margin-bottom: 50%;">
    
  </div>
<!-- <div style="margin: 0 auto;text-align: center;color: #fff;font-weight: 1000;font-size: 22px;margin-top: -44%;"> RumahTinggal.id</div> -->
    <!-- Please wait...  <img src='path to your super fancy spinner' /> -->
 </div> 


<header id="header" class="header" >
    <div class="container">
        <div class="row align-items-center d-flex">
            <nav class="navbar navbar-expand-custom navbar-mainbg navbar-fixed-top w-100 justify-content-between">
                <div class="col-md-7 justify-content-between" style="display: inline-flex;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" style="color: #ffffff;"></i>
                    </button>
                    <a href="<?= base_url() ?>" id="logo-dev" class="navbar-brand navbar-logo" >
                        <img src="<?= base_url('assets/img/logo.png') ?>" width="70px"/>
                    </a>
                    <div class="input-group" id="logo-desk" style="width: 500px;border-radius: 5px;border: 1px solid #e2e2e2;height: 37px;margin-top: 3px;">
                        <input type="text" class="form-control" id="cari-desain" placeholder="Rumah Minimalis" style="padding:0px 15px;border:0px;font-weight: unset;">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default" style="background-color: #026CB6;color:#fff;padding: 4px;border-radius: 0px 3px 3px 0px;">
                                <span class="glyphicon glyphicon-search" style="padding-left: 3px;"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4" style="display: inline-flex;float: right;justify-content: end;">    
                    <nav class="navdev" style="float: right;margin-right: 45px !important;">
                        <ul class="navdevv mt-1">
                            <li><a href="javascript:void(0)"></a></li>
                            <li id="koleksi"><a href="javascript:void(0)" onclick="katalogDesain()" >Koleksi</a></li>
                            <li id="sampel"><a href="javascript:void(0)" onclick="sampelDesain()" >Sampel</a></li>
                            <li id="material"><a href="javascript:void(0)" onclick="materialDesain()">Material</a></li>
                        </ul>
                    </nav>

                    <div class="input-group" id="logo-mo" style="width: 125px;border-radius: 5px;border: 1px solid #e2e2e2;display: none;">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default" style="background-color: #fff;padding: 0px;border-radius: 3px 0px 0px 3px;">
                                <span class="glyphicon glyphicon-search" style="padding-left: 3px;"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                        </span>
                        <input type="text" class="form-control" id="cari-desain" placeholder="cari desain" style="padding:0px;border:0px;">
                    </div>

                    <nav id="nav-menu-container-dev" style="padding-right: 0; margin-left: 35px;">
                        <ul class="nav-menu">
                            <li class="menu-has-children" id="menu-login" style="display: none;"><a href="javascript:void(0)" data-toggle="modal" data-target="#ModalLogin" class="btn btn-custom login">Masuk</a></li>
                            <li class="dropdown" id="menu-pengguna" style="display: none;margin-top: -2px;">
                                <button class="dropbtn">Halo, <span id="nama_customer"></span></button>
                                <div class="dropdown-content">
                                    <a href="javascript:void(0)" onclick="profil()"><i class="fa fa-user" style="font-size: 15px;margin-left: 2px;margin-right: 5px;"></i>Profil</a>
                                    <a href="javascript:void(0)" onclick="daftarFavorit()"><i class="fa fa-heart"></i> Daftar Favorit</a>
                                    <a href="javascript:void(0)" onclick="transaksiPembelian()"><i class="fa fa-shopping-bag"></i> Transaksi Pembelian</a>
                                    <a href="javascript:void(0)" onclick="logout()"><i class="fa fa-sign-out" style="font-size: 15px;margin-left: 1px;margin-right: 2px;"></i> Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </nav>  
                    <button class="btn btn-danger text-white ml-4" id="cari-desain-mo" onclick="assessment()" style="padding: 2px 4px; margin-left: 0px;background: #f00;border-color: #f00; margin-top: 0px;font-size: 13px;position: absolute;top: 10px;left: 244px;display:none;">Cari Desain</button>
                </div>   
            </nav>
        </div>
    </div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 60px; width: 205px; position: fixed;z-index: 996;margin-left: 0px;"> 
        <ul class="navbar-nav ml-auto">
            <nav id="nav-menu-container" style="padding-right: 0;background: #030067;">
                <ul class="nav-menu">
                    <li class="menu-has-children" id="menu-login" style="display: none; float: left;">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#ModalLogin" class="login">Masuk</a>
                    </li>
                    <li class="dropdown" id="menu-pengguna" style="margin-top: -2px;background: transparent !important; margin-left: 5px;">
                        <button class="dropbtn" style="background: transparent;margin-left:0px !important"><span style="color: #cadcff;margin-right: 70px;">Halo, <span id="nama_customer" style="color: #fff"></span></span></button>
                        <div class="dropdown-content" style="width: 205px;">
                            <a href="javascript:void(0)" onclick="profil()"  style="color: #000;"><i class="fa fa-user" style="font-size: 15px;margin-left: 2px;margin-right: 5px;"></i>Profil</a>
                            <a href="javascript:void(0)" onclick="daftarFavorit()"  style="color: #000;"><i class="fa fa-heart"></i> Daftar Favorit</a>
                            <a href="javascript:void(0)" onclick="transaksiPembelian()" style="color: #000;"><i class="fa fa-shopping-bag"></i> Transaksi Pembelian</a>
                            <a href="javascript:void(0)" onclick="logout()"  style="color: #000;"><i class="fa fa-sign-out" style="font-size: 15px;margin-left: 1px;margin-right: 2px;"></i> Keluar</a>
                        </div>
                    </li>
                </ul>
            </nav>
          
            <li class="nav-item"> <!--active -->
                <a class="nav-link" href="javascript:void(0)" href="<?= $this->config->item('url_mobile') ?>sampel_desain"><i class="fa fa-home"></i>Beranda</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="javascript:void(0)" onclick="katalogDesain()"><i class="fa fa-book"></i>Koleksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sampel_desain') ?>"><i class="fa fa-bookmark-o"></i>Sampel </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('material') ?>"><i class="fa fa-cog"></i>Material</a>
            </li> 

            <div id="layanan-mobile" style="background: #99b9d5;">
                <div style="margin-left: 10px;color: #004c78;font-weight: normal;font-size: 15px;">Layanan Pengguna</div>
                <li class="nav-item" style="float: left !important;">
                    <a class="nav-link" href="<?= base_url('kebijakan_privasi') ?>">Kebijakan Privasi</a>
                </li>
                <li class="nav-item" style="float: left !important;">
                    <a class="nav-link" href="<?= base_url('syarat_ketentuan') ?>">Syarat dan Ketentuan</a>
                </li>
                <li class="nav-item" style="float: left !important;">
                    <a class="nav-link" href="<?= base_url('cara_kerja') ?>">Cara Kerja</a>
                </li>
                <li class="nav-item" style="float: left !important;">
                    <a class="nav-link" href="<?= base_url('faq') ?>">FAQ</a>
                </li>
            </div>
        </ul>
    </div>
</header>

<a onclick="konsultasiDesain()" class="float text-white" target="_blank" style="z-index: 1000;">
Hubungi kami <i class="fa fa-whatsapp my-float"></i>
</a>


<div id="to-top" title="back to top" style="z-index: 1000;">↑</div>






<script>
$(document).ready(function() {


$('#loadingDiv').hide().ajaxStart( function() {
$(this).show();  // show Loading Div
} ).ajaxStop ( function(){
$(this).hide(); // hide loading div
});



var placeHolder = [];
    $.ajax({
        url: "<?= base_url('api/getNamaRumah') ?>",
        type: "POST",
        dataType: "JSON",
        success: function(data){
        //  var placeHolder =data.toArray();
            var placeHolder = [];
            
            for(var k in data){
                placeHolder.push(data[k].nama_rumah);
            }

            var n=0;
            var loopLength=placeHolder.length;

            setInterval(function(){
               if(n<loopLength){
                  var newPlaceholder = placeHolder[n];
                  n++;
                  $('#cari-desain').attr('placeholder',newPlaceholder);
               } else {
                  $('#cari-desain').attr('placeholder',placeHolder[0]);
                  n=0;
               }
            },5000);                                    

        }
    });

// var place = https://rumahtinggal.id/api/getNamaRumah;
 
  	let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
  	if (id_customer != null && id_customer != '') {
      	$('#menu-login').hide();
      	$('#menu-pengguna').show();
      	$.ajax({
           url: "<?= base_url('api/getCustomerById/') ?>"+id_customer,
           type: "GET",
           dataType: "JSON",
           success: function(data){
              $('#nama_customer').html(data.nama_customer+'!');
           }
        });
      
      	$.ajax({
           url: "<?= base_url('api/getRumahSuka/') ?>"+id_customer,
           type: "GET",
           dataType: "JSON",
           success: function(data){
              if (data != ''){
                  $.each(data, function(i, item) {
                      let id_rumah = item.id_rumah;
                      $('.like .fa[data-id="'+id_rumah+'"]').removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
                  });
              }
           }
        });
    } else {
      	$('#menu-login').show();
      	$('#menu-pengguna').hide();
    }
  
  	$('#login-no_wa,#daftar-no_wa,#otp_verifikasi,#otp_aktivasi').keypress(function (e) {
        let keyCode = e.keyCode || e.which;
        let regex = /^[0-9 ()+-]+$/;
        let isValid = regex.test(String.fromCharCode(keyCode));
        return isValid;
    });
  
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
        } else $('#ModalLogin').modal('show');
    });
  
  	$('.btn-beli-desain').on('click', function(e){
        if (id_customer == null || id_customer == '') {
          e.preventDefault();
          $('#ModalLogin').modal('show');
          return false;
        }
    });
  
  	$('.btn-tulis-ulasan').on('click', function(e){
        if (id_customer == null || id_customer == '') {
          e.preventDefault();
          $('#ModalLogin').modal('show');
          return false;
        }
    });
  
  	if (isMobile() == true){
        $('.product-grid .image, .product-grid .title, #bottomRight li.share.top').prop('onclick','').on('click', function(e){
        	$(this).trigger('hover');
        });
    }
});
  
  	function detailRumah(id){
        location.href = "<?= base_url('detail/') ?>"+id;
    }
  
  	function detailArsitek(id){
        location.href = "<?= base_url('profil_arsitek/') ?>"+id;
    }
  
  	function temukanDesain(){
      	location.href = "<?= base_url('assessment') ?>";
    }
   
    function katalogDesain(){
        location.href="<?= base_url('desain') ?>";
    }

    function materialDesain(){
        location.href="<?= base_url('material') ?>";
    }
    function sampelDesain(){
        location.href="<?= base_url('sampel_desain') ?>";
    }

    function profil(){
        let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
        location.href = "<?= base_url('profil/') ?>"+id_customer;
    }

    function daftarFavorit(){
        let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
        location.href = "<?= base_url('profil/') ?>"+id_customer+"#favorit";
    }

    function transaksiPembelian(){
        let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
        location.href = "<?= base_url('profil/') ?>"+id_customer+"#transaksi";
    }

  	function number_format(number, decimals, dec_point, thousands_point) {
        if (number == null || !isFinite(number)) { throw new TypeError("number is not valid"); }
        if (!decimals) {
            let len = number.toString().split('.').length;
            decimals = len > 1 ? len : 0;
        }
        if (!dec_point) { dec_point = '.'; }
        if (!thousands_point) { thousands_point = ','; }
      
        number = parseFloat(number).toFixed(decimals);
        number = number.replace(".", dec_point);
        var splitNum = number.split(dec_point);
        splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
        //number = splitNum.join(dec_point);
      	number = splitNum[0];
    
        return number;
    }
  
  	function isMobile() {
      var check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      return check;
    };

/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 * jQuery.browser.mobile will be true if the browser is a mobile device
 **/
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);


  	function konsultasiDesain(){
      	var text = `Halo,\nSaya ingin mengkonsultasikan desain rumah saya.\nApakah bisa dibantu?\nTerima kasih`;
        var phone = '628112636228';
        var message = encodeURIComponent(text);

        if(jQuery.browser.mobile){
            console.log('You are using a mobile device!');
            var whatsapp_API_url = "https://api.whatsapp.com/send";
            var url = 'https://api.whatsapp.com/send?phone=' + phone + '&text=' + message;
            window.open(url);
        }
        else{
           console.log('You are not using a mobile device!');
           var whatsapp_API_url = "https://api.whatsapp.com/send";
            var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
            window.open(url, '_blank');
        }

    }
    


    function logout() {
      	window.location.href = "<?= base_url('logout') ?>";
    }


$(function () {
    $(document).scroll(function () {
        var $nav = $("#header");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        var $bar = $("#header .container .row .navbar .navbar-toggler .fa-bars");
        $bar.toggleClass('barr', $(this).scrollTop() > $nav.height());
    });
});


var nav = $('.navdev');
var line = $('<div />').addClass('line');

line.appendTo(nav);

$(document).ready(function() {
    $('#cari-desain').on('change', function() {
        var cari =  $('#cari-desain').val();
        location.href = "<?= base_url('desain#') ?>"+cari;    
    });
});



$(function () {
    $(window).scroll(function() {
        if ($(this).scrollTop() - 200 > 0) {
            $('#to-top').stop().slideDown('fast'); // show the button
            $(".float").stop().animate({right: '66px'});
        } else {
            $('#to-top').stop().slideUp('fast'); // hide the button
             $(".float").stop().animate({right: '21px'});
        }
    });

    $("#to-top").on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 200);
    });
});

</script>

<?php $this->load->view('beranda/login') ?>