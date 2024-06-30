<style>
hr{
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

#nav-menu-container {
    display: unset;
}

#trigger_top{
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

.sidebar_top {
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
.sidebar_top #close_top {
  float: right;
  margin: -7rem 0rem 2rem 2rem;
  font-size: 2em;
  color: #026cb6;
  text-align: right;
}
.sidebar_top.closed {
  left: -315px;
  -webkit-box-shadow: 0 0 0 #026CB6;
  box-shadow: 0 0 0 #026CB6;
}
.sidebar_top h2 {
  padding: .5em;
  color: #026CB6;
}
.sidebar_top ul {
  padding: 0;
  margin: 0;
}
.sidebar_top ul li {
  width: 100%;
  margin: 0px;
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
  padding: 0px;
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
.sidebar_top ul li a {
  color: #000;
}
.sidebar_top ul li:hover {
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


























.irs--round .irs-handle {

    width: 17px;
    height: 17px;
   top: 28px !important;
}


#navbarSupportedContent #nav-menu-container {
    display: block;
}

#header.scrolled {
  background-color: #fff !important;
  -webkit-transition: background-color 1000ms linear;
  -ms-transition: background-color 1000ms linear;
  transition: background-color 1000ms linear;
  position: fixed;
}

/*baru*/
.barr_cari{
    color: #026cb6 !important;
    font-weight: 600;
}
/*baru*/

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

#cari-desain::-webkit-input-placeholder {
  color: transparent;
  text-indent: -9999px;
  background-image: url("<?= base_url('assets/img/logo.png') ?>");
  background-position: 0 55%;
  background-repeat: no-repeat; 
  background-size: 25px;
}
#cari-desain::-moz-placeholder {
  /* Firefox 19+ */
  color: transparent;
  text-indent: -9999px;
  background-image: url("<?= base_url('assets/img/logo.png') ?>");
  background-position: 0 55%;
  background-repeat: no-repeat; 
  background-size: 25px;
}
#cari-desain:-moz-placeholder {
  /* Firefox 18- */
  color: transparent;
  text-indent: -9999px;
  background-image: url("<?= base_url('assets/img/logo.png') ?>");
  background-position: 0 55%;
  background-repeat: no-repeat; 
  background-size: 25px;
}
#cari-desain:-ms-input-placeholder {
  /* IE 10- */
  color: transparent;
  text-indent: -9999px;
  background-image: url("<?= base_url('assets/img/logo.png') ?>");
  background-position: 0 55%;
  background-repeat: no-repeat; 
  background-size: 25px;
}


@media(min-width: 1028px){
  .mo-bg{
    background: #026CB6 !important;
  }
  .navbar{
    justify-content: normal !important;
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
    /*background-color: #5161ce;*/
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
    top: 0px !important;
    left: 113.567px !important;
    height: 62.75px !important;
    transition-duration:0.6s !important;
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55) !important;
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
  color: #026CB6;
  background-color: transparent;
  transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
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
  background: transparent;
  padding: 8px 0;
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
  color: #fff;
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
  width: 100%;
  height: 35px;
  line-height: 22px;
}


/*nav baru*/
.navigation {
  background: #35403c;
  height: 100%;
  position: absolute;
  transition: all .3s ease-in-out;
  z-index: 5;
}

.navigation,
.navigation a { color: #fff; }

.navigation.expanded {
  background: #1e2422;
  box-shadow: 100px 0 300px 300px rgba(0, 0, 0, 0.5);
}

.navigation.expanded + .content {
  transform: translate3d(50px, 0, 0) rotateY(-10deg);
  transform-origin: 90% 50%;
  transform-style: preserve-3d;
}

.nav-toggler {
  display: inline-block;
  font-size: 21px;
  left: 100%;
  padding: .5em;
  position: absolute;
  text-decoration: none;
}

.nav-toggler span {
  position: relative;
  z-index: 5;
}

.nav-toggler .hide-nav { display: none; }

.expanded .nav-toggler .show-nav { display: none; }

.expanded .nav-toggler .hide-nav { display: inline-block; }

.expanded .nav-toggler:after { border-color: #1e2422 transparent transparent transparent; }


.navigation__inner {
  font-size: 14px;
  overflow: hidden;
  transition: all .3s ease-in-out;
  width: 0;
}

.expanded .navigation__inner {
  display: block;
  width: 250px;
  background: #026CB6;
}

.navigation__inner h2 {
  font-size: 1.2em;
  font-weight: 400;
  margin: 0.5em 1.5em 1.2em;
}

.navigation__inner ul {
  list-style: none;
  margin: 0;
  padding: 1em 0;
}

.navigation__inner li.separator {
  border-bottom: 1px solid white;
  margin: 1.5em 0 .5em;
}

.navigation__inner a {
  border-left: 0 solid #000;
  display: block;
  padding: .5em 2em;
  text-decoration: none;
  transition: all .2s ease-in-out;
}

.navigation__inner a.current {
  background: #fff;
  border-left-width: 10px;
  color: #000;
}

.navigation__inner a:hover {
  background: #e3f1ff;
  border-left-width: 10px;
  color: #000;
}
.content {
  position: relative;
  transition: all .3s ease-in-out;
}
/*//nav baru*/
</style>

 <div id='loadingDiv' style="display: cover; position: fixed;z-index: 1000;top: 0;left: 0;height: 100%;width: 100%;background: #026CB6;">
  <div style="display: cover; vertical-align: middle; z-index: 1000;top: 0;left: 0;height: 85px;width: 85px; border-radius: 100%; background: #fff url('https://rumahtinggal.id/assets/gif/rt-loader.gif') 50% 50% no-repeat;margin: 0 auto;margin-top: 75%;margin-bottom: 50%;">
    
  </div>
<!-- <div style="margin: 0 auto;text-align: center;color: #fff;font-weight: 1000;font-size: 22px;margin-top: -44%;"> RumahTinggal.id</div> -->
    <!-- Please wait...  <img src='path to your super fancy spinner' /> -->
 </div> 
<header id="header" class="header" >
   





<div class="sidebar_top closed">
    <header style="padding: 30px 15px 15px 15px;text-align: center;">

      <img style="width: 66px; height: 40px;margin: 0 auto !important;" class="fielmo mb-4 mt-4" src="https://rumahtinggal.id/assets/img/logo.png">


       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children mt-3" id="menu-login" style="display: none;"><a href="javascript:void(0)" data-toggle="modal" data-target="#ModalLogin" class="btn btn-custom login">Masuk</a></li>
          <li class="dropdown" id="menu-pengguna" style="display: none;margin-top: 15px;">
            <button class="dropbtn" style="width: 100%">Halo, <span id="nama_customer"></span></button>
            <div class="dropdown-content" style="width: 100%;text-align: left;">
              <a href="javascript:void(0)" onclick="profil()"><i class="fa fa-user" style="font-size: 15px;margin-left: 2px;margin-right: 5px;"></i>Profil</a>
              <a href="javascript:void(0)" onclick="daftarFavorit()"><i class="fa fa-heart"></i> Daftar Favorit</a>
              <a href="javascript:void(0)" onclick="transaksiPembelian()"><i class="fa fa-shopping-bag"></i> Transaksi Pembelian</a>
              <a href="javascript:void(0)" onclick="logout()"><i class="fa fa-sign-out" style="font-size: 15px;margin-left: 1px;margin-right: 2px;"></i> Keluar</a>
            </div>
          </li>
        </ul>
      </nav> 
        <!-- <h2 style="font-size: 18px;" class="mt-2">Filter Desain </h2>  -->
        <a href="#" id="close_top">
            <span><i class="fa fa-times" aria-hidden="true"></i></span>
        </a>
    </header>

    <ul> 
        <li  >
            
                


                 <div style="padding: 15px;font-size: 17px;"> 
                    <a class="current" href="<?= $this->config->item('url_mobile') ?>"><i class="fa fa-home"></i>Beranda</a>
                  </div>
                  <hr>
                  <div style="padding: 15px;font-size: 17px;">
                    <a href="javascript:void(0)" onclick="katalogDesain()"><i class="fa fa-book"></i>Koleksi</a>
                  </div>
                  <hr>
                  <div style="padding: 15px;font-size: 17px;">
                    <a href="<?= $this->config->item('url_mobile') ?>sampel_desain"><i class="fa fa-bookmark-o"></i>Sampel </a>
                  </div>
                  <hr>
                  <div style="padding: 15px;font-size: 17px;">
                    <a href="<?= $this->config->item('url_mobile') ?>material"><i class="fa fa-cog"></i>Material</a>
                  </div> 

                  <div id="layanan-mobile" style="background: #d0d6dc;">
                   <!--  <div class="hr-mo" style="width: 41%;height: 2px;background: aliceblue;"></div> --><br>
                  <div style="margin-left: 10px;color: #004c78;font-weight: normal;font-size: 23px;">Layanan Pengguna</div>
                  <div style="padding: 7px 15px;font-size: 17px;">
                    <a href="<?= base_url('kebijakan_privasi') ?>"> Kebijakan Privasi</a>
                  </div>
                  <div style="padding: 7px 15px;font-size: 17px;">
                    <a href="<?= base_url('syarat_ketentuan') ?>">Syarat dan Ketentuan</a>
                  </div>
                  <div style="padding: 7px 15px;font-size: 17px;">
                    <a href="<?= base_url('cara_kerja') ?>">Cara Kerja</a>
                  </div>
                  <div style="padding: 7px 15px;font-size: 17px;">
                    <a href="<?= base_url('faq') ?>">FAQ</a>
                  </div>
             
        </li>
    </ul>
</div>


<!-- <div class="content" style="top:-8px;">
  <div class="navigation" id="navigation">
    <a class="nav-toggler" href="#" id="navToggler">
      <span class="show-nav"> <i class="fa fa-bars" style="color: #fff;"></i></span>
      <span class="hide-nav">&times;</span>
    </a>
    <div class="navigation__inner">
      <ul>
        <li style="text-align: center;" class="mb-3"> 
          <button href="javascript:void(0)" data-toggle="modal" data-target="#ModalLogin" class="btn btn-custom login" style="background: #003273;font-weight: 600;">Masuk</button>
          <li class="dropdown" id="menu-pengguna" style="margin-top: -2px;">
            <button class="dropbtn">Halo, <span id="nama_customer"></span></button>
            <div class="dropdown-content">
             <a href="javascript:void(0)" onclick="profil()"><i class="fa fa-user" style="font-size: 15px;margin-left: 2px;margin-right: 5px;"></i>Profil</a>
              <a href="javascript:void(0)" onclick="daftarFavorit()"><i class="fa fa-heart"></i> Daftar Favorit</a>
               <a href="javascript:void(0)" onclick="transaksiPembelian()"><i class="fa fa-shopping-bag"></i> Transaksi Pembelian</a>
              <a href="javascript:void(0)" onclick="logout()"><i class="fa fa-sign-out" style="font-size: 15px;margin-left: 1px;margin-right: 2px;"></i> Keluar</a>
            </div>
          </li>
        </li>
       
        <li> <!- active ->
          <a class="current" href="<?= $this->config->item('url_mobile') ?>"><i class="fa fa-home"></i>Beranda</a>
        </li>
        <li>
          <a href="javascript:void(0)" onclick="katalogDesain()"><i class="fa fa-book"></i>Koleksi</a>
        </li>
        <li>
          <a href="<?= $this->config->item('url_mobile') ?>sampel_desain"><i class="fa fa-bookmark-o"></i>Sampel </a>
        </li>
        <li>
          <a href="<?= $this->config->item('url_mobile') ?>material"><i class="fa fa-cog"></i>Material</a>
        </li> 

        <div id="layanan-mobile" style="background: #99b9d5;">
         <!-  <div class="hr-mo" style="width: 41%;height: 2px;background: aliceblue;"></div> ->
        <div style="margin-left: 10px;color: #004c78;font-weight: normal;font-size: 15px;">Layanan Pengguna</div>
        <li>
          <a href="<?= base_url('kebijakan_privasi') ?>"> Kebijakan Privasi</a>
        </li>
        <li>
          <a href="<?= base_url('syarat_ketentuan') ?>">Syarat dan Ketentuan</a>
        </li>
        <li>
          <a href="<?= base_url('cara_kerja') ?>">Cara Kerja</a>
        </li>
        <li>
          <a href="<?= base_url('faq') ?>">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</div> -->

<div class="container">
  <div class="row align-items-center justify-content-between d-flex">
    <nav class="navbar navbar-expand-custom navbar-mainbg navbar-fixed-top">
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" style="color: #fff;"></i>
      </button>
 -->


       <a href="#" class="ml-2 mr-2" id="trigger_top"> <i class="fa fa-bars" style="color: #fff;font-size: 20px;"></i></a>    

      <a href="<?= $this->config->item('url_mobile') ?>" id="logo-dev" class="navbar-brand navbar-logo" >
       <!--  <img src="<?= base_url('assets/img/logo.png') ?>" width="70px"/> -->
      </a>
      <div class="input-group" id="logo-mo" style="width: 180px;border-radius: 5px;border: 1px solid #e2e2e2;">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default" style="background-color: #fff;padding: 0px;border-radius: 3px 0px 0px 3px;height: 28px;">
            <span class="glyphicon glyphicon-search" style="padding-left: 3px;"><i class="fa fa-search" aria-hidden="true"></i></span>
          </button>
        </span>
        <input type="text" class="form-control" id="cari-desain" placeholder="cari desain" style="padding:0px;border:0px;font-weight: unset;font-size: 11px;line-height: 2.5 !important;height: 28px;">
      </div>

      <nav id="nav-menu-container-dev" style="padding-right: 0; margin-left: 70px;">
        <ul class="nav-menu">
          <li class="menu-has-children"  style="display: none;"><a href="javascript:void(0)" data-toggle="modal" data-target="#ModalLogin" class="btn btn-custom login">Masuk</a></li>
          <li class="dropdown" style="display: none;margin-top: -2px;">
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
    </nav>
   <!--  <button class="btn btn-danger text-white ml-4" id="cari-desain-mo" onclick="lihatKoleksi()" style="padding: 2px 4px; margin-left: 0px;background: #f00;border-color: #f00; margin-top: 0px;font-size: 13px;position: absolute;top: 10px;left: 244px;">Cari Desain</button> -->
<button class="btn btn-danger text-white ml-4" id="cari-desain-mo" onclick="lihatKoleksi()" style="padding: 2px 4px; margin-left: 0px;background: transparent;border-color: transparent; margin-top: 0px;font-size: 13px;position: absolute;top: 10px;left: 244px;font-weight: 600;">Lihat Koleksi</button>

  </div>
</div>
</header>



<script>

(function ($, window, document, undefined) {
  $(function () {
    var $navigation = $('#navigation'), $navToggler = $('#navToggler');
    $('#navToggler').on('click', function (e) {
      e.preventDefault();
      $navigation.toggleClass('expanded');
    });
  });
}(jQuery, this, this.document));

$(document).ready(function() {

  // $('#loading_wrap').remove();
$('#loadingDiv').hide().ajaxStart( function() {
$(this).show();  // show Loading Div
} ).ajaxStop ( function(){
$(this).hide(); // hide loading div
});


 $('#cari-desain').on('change', function() {
        var cari =  $('#cari-desain').val();
        location.href = "<?= $this->config->item('url_mobile') ?>desain#"+cari;    
    });


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
        location.href = "<?= $this->config->item('url_mobile') ?>detail/"+id;
    }
  
    function detailArsitek(id){
        location.href = "<?= $this->config->item('url_mobile') ?>profil_arsitek/"+id;
    }
  
    function temukanDesain(){
        location.href = "<?= $this->config->item('url_mobile') ?>assessment";
    }
   
    function katalogDesain(){
        location.href="<?= $this->config->item('url_mobile') ?>desain";
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

        // if (getMobileOperatingSystem() == true){
        //     var whatsapp_API_url = "https://api.whatsapp.com/send";
        //     $(this).attr( 'href', whatsapp_API_url+'?phone=' + phone + '&text=' + message );
        // } else {
        //     var whatsapp_API_url = "https://web.whatsapp.com/send";
        //     var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
        //     window.open(url, '_blank');
        // }

        if(jQuery.browser.mobile) {
          console.log('You are using a mobile device!');
          var whatsapp_API_url = "https://api.whatsapp.com/send";
          // $(this).attr( 'href', whatsapp_API_url+'?phone=' + phone + '&text=' + message );
          var url = 'https://api.whatsapp.com/send?phone=' + phone + '&text=' + message;

          // return url
          window.open(url);
        } else {
          console.log('You are not using a mobile device!');
          var whatsapp_API_url = "https://api.whatsapp.com/send";
          var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
          window.open(url, '_blank');
        }

          // var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
          // // var element = document.getElementById('text');
          // if (isMobile) {
          //     var whatsapp_API_url = "whatsapp://send";
          //     $(this).attr( 'href', whatsapp_API_url+'?phone=' + phone + '&text=' + message );
          // } else {
          //     var whatsapp_API_url = "https://web.whatsapp.com/send";
          //     var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
          //     window.open(url, '_blank');
          // }
    }
    
    function logout() {
    //      var auth2 = gapi.auth2.getAuthInstance();
    // auth2.signOut().then(function () {
    //   console.log('User signed out.');
    // });

        window.location.href = "<?= base_url('logout') ?>";
// $.ajax({
//          url: "<?= base_url('logout') ?>",
//          type: "POST",
//          // data: {"id_rumah": id_rumah,"id_customer": id_customer,"suka": suka},
//          dataType: "JSON",
//          success: function(data){
//              var auth2 = gapi.auth2.getAuthInstance();
//     auth2.signOut().then(function () {
//       console.log('User signed out.');
       
//       // window.location.href = "<?= base_url('logout') ?>";
//     });
//          }
//       });
    }
  
    /*function like(index){
      var id_customer=1;
      var id_rumah=index;
      var suka=1;

      var jumlikeplus = Number($('#jumlike'+index).html())+Number(1);

      $.ajax({
         url: "<?= $this->config->item('url_arsi') ?>api/simpanDisukai",
         type: "POST",
         data: {"id_rumah": id_rumah,"id_customer": id_customer,"suka": suka},
         dataType: "JSON",
         success: function(data){}
      });
      
      $.ajax({
         url: "<?= $this->config->item('url_arsi') ?>api/rumahSuka/"+index,
         type: "POST",
         dataType: "JSON",
         success: function(data){
            $("#jumlike"+index).html(jumlikeplus);
            $("#like"+index).removeClass('like').addClass('unlike').prop('id', 'unlike'+index).attr('onclick', 'unlike('+index+')');
            $("#like"+index+" .i-heart").addClass('red');
         }
      });
    }
  
    function unlike(index){
      var id_customer=1;
      var id_rumah=index;
      var suka=1;

      var jumlikemin = Number($('#jumlike'+index).html())-Number(1);

      $.ajax({
         url: "<?= $this->config->item('url_arsi') ?>api/hapusDisukai/"+index+"/"+id_customer,
         type: "POST",
         dataType: "JSON",
         success: function(data){}
      });
      
      $.ajax({
         url: "<?= $this->config->item('url_arsi') ?>api/rumahBatalSuka/"+index,
         type: "POST",
         dataType: "JSON",
         success: function(data){
            $("#jumlike"+index).html(jumlikemin);
            $("#unlike"+index).removeClass('unlike').addClass('like').prop('id', 'like'+index).attr('onclick', 'like('+index+')');
            $("#unlike"+index+" .i-heart").removeClass('red');
         }
      });
    }*/









    // ---------Responsive-navbar-active-animation-----------



$(function () {

 function sidebar(){

      var trigger = $('#trigger_top, #close_top'),

      menu = $('.sidebar_top');
      trigger.on('click',function(){

       $(this).toggleClass('active');

       menu.toggleClass('closed');

       $('#blurrMe').toggleClass('blurred'); // just here

      });

    }

     function deploy(){
      sidebar();
     }
     deploy();



  $(document).scroll(function () {

    var $nav = $("#header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
var $bar = $("#header .container .row .navbar #trigger_top .fa-bars");
var $cari = $("#header .container .row #cari-desain-mo");
    $bar.toggleClass('barr', $(this).scrollTop() > $nav.height());
     $cari.toggleClass('barr_cari', $(this).scrollTop() > $nav.height());
  });
});

 function lihatKoleksi(){
        // location.href = "<?= base_url('material') ?>";
        location.href = "<?= $this->config->item('url_mobile') ?>desain";
    }
</script>

<?php $this->load->view('beranda/login') ?>