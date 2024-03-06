<style>
.trans-top{
    transform: scale(0.9,0.7) !important;
}
.trans-bottom{
    transform: scale(0.5,0.7) !important;
}



.top-white{
    background: #fff !important;
}
   .container-mo-mo{
padding-right: 0px !important;
    }
    .col-md-12{
        padding-right: 0px;
        padding-left: 10px;
    }
    .container-mo{
        width: 90% !important;
        max-width: 90%;
        margin-left: 0px !important;
    }
    .flickity-page-dots-mo {
    position: absolute;
    width: 100%;
    bottom: 30px !important;
    padding: 0;
    margin: 0;
    list-style: none;
    text-align: center;
    line-height: 1;
    left: -111px !important;
}
.dot-mo {
    display: inline-block;
    width: 7px !important;
    height: 7px !important;
    margin: 0 8px;
    background: #026CB6 !important;
    border-radius: 50%;
    filter: alpha(opacity=25);
    opacity: 0.25;
    cursor: pointer;
}

.i-con-footer {
    font-size: 25px !important;
    color: #026CB6;
    margin: 0px 7px 23px 0px;
}
  
.line-footer {
    width: 70px;
    height: 3px;
    background: #026CB6;
    margin-bottom: 13px;
    margin-top: 3px;
}
  
.menu-footer { width: 10em; }  
  
.menu-footer a { color: #000; }
  
.menu-footer a:hover { color: #026CB6; }

.footer-area {
	background-color: #fff !important;
  	color: #000;
  	border-top: 1px solid #f7f7f7;
  	font-weight: 300;
  	font-size: 15px;
  	padding: 20px 0 0;
  	height: 188px;
}

.footer-area h4 {
  	padding-bottom: 1px !important;
  	font-size: 16px;
    font-weight: 400;
  	color: #000;
}

/*@media only screen and (min-device-width: 360px) and (max-device-width: 1024px) and (orientation:portrait) {
	/ For tablets: /
	.i-con-footer {
	    font-size: 25px !important;
	    color: #026CB6;
	    margin: 0px 7px 23px 0px;
	}
	  
	.line-footer {
	    width: 70px;
	    height: 3px;
	    background: #026CB6;
	    margin-bottom: 13px;
	    margin-top: 3px;
	}
	  
	.menu-footer { width: 10em; }  
	  
	.menu-footer a { color: #000; }
	  
	.menu-footer a:hover { color: #026CB6; }

	.footer-area {
	  	height: auto;
	}

	.mo-footer {
    width: auto;
    padding: 0;
	}

	.footer-area h4 {
	  	padding-bottom: 1px !important;
	  	font-size: 16px;
	    font-weight: 400;
	  	color: #000;
	}
	.menu-footer {
	    width: 10em;
	    display: inline;
	    font-size: 13px;
	}
	.single-footer-widget .menu-footer:not(:last-child):after {
	    content: " | ";
	}

	.mobile-layanan h4, .mobile-layanan .line-footer{
	    display: none;
	}
	.col-lg-6.col-md-6.col-sm-6.p0.mo-footer.mo-footer-color {
	    width: 105%;
	    margin-left: -10px;
	    background: aliceblue;
	}
	.col-lg-6.col-md-6.col-sm-6.p0.mo-footer.mo-footer-color .mobile-layanan {
		text-align: center;
		float: none !important;
		height: 33px;
		line-height: 33px;
	}
	.menu-footer a {
	    color: #4b4f58 !important;
	}

	.menu {
	 z-index: 999;
	 position: fixed;
	 padding: 0;
	 margin: 0;
	 list-style-type: none;
    }
    .menu .share i.fa {
	 height: 50px;
	 width: 50px;
	 text-align: center;
	 line-height: 50px;
	 background-color: #fff;
	 border-radius: 25px;
    }

	.menu .share:hover.top .submenu li:nth-child(1) {
		 opacity: 1;
		 top: -51px;
		 transition-delay: 0.08s;
		 transform: rotateY(0deg);
		 border-bottom: 1px dashed #d9d9d9;
	}
	 .menu .share:hover.top .submenu li:nth-child(2) {
		 opacity: 1;
		 top: -102px;
		 transition-delay: 0.16s;
		 transform: rotateY(0deg);
		 border-bottom: 1px dashed #d9d9d9;
	}
	 .menu .share:hover.top .submenu li:nth-child(3) {
		 opacity: 1;
		 top: -153px;
		 transition-delay: 0.24s;
		 transform: rotateY(0deg);
		 border-bottom: 1px dashed #d9d9d9;
	}
	 .menu .share:hover.top .submenu li:nth-child(4) {
		 opacity: 1;
		 top: -204px;
		 transition-delay: 0.32s;
		 transform: rotateY(0deg);
		 border-bottom: 1px dashed #d9d9d9;

	}
	 .menu .share:hover.top .submenu li:nth-child(5) {
		 opacity: 1;
		 top: -255px;
		 transition-delay: 0.4s;
		 transform: rotateY(0deg);
		 border-bottom: 1px dashed #d9d9d9;
	}
	 .menu .share:hover.top .submenu li:nth-child(6) {
		 opacity: 1;
		 top: -306.5px;
		 transition-delay: 0.4s;
		 transform: rotateY(0deg);
		 border-bottom: 1px dashed #d9d9d9;
	}
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
	}
	 .menu .submenu li a {
		 color: #212121;
	}
	 .menu .submenu li a:hover i.fa {
		 color: #fff;
	}
	 .menu .submenu li a:hover.facebook i.fa {
		 background-color: #3b5999;
	}
	 .menu .submenu li a:hover.twitter i.fa {
		 background-color: #00acee;
	}
	 .menu .submenu li a:hover.pinterest i.fa {
		 background-color: #dd4b39;
	}
	 .menu .submenu li a:hover.instagram i.fa {
		 background:  linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
	}
	.menu .submenu li a.whatsapp i.fa {
		 background-color: #4aa300;
		 color: #fff;
	}
	.menu .submenu li a:hover.whatsapp i.fa {
		 background-color: #4aa300;
	}
	.menu .submenu li a.whatsapp::after {
    content: "Konsultasi bersama kami";
    width: 326%;
    position: absolute;
    right: 100%;
    top: 8%;
    background: #4aa300;
    color: #fff;
    padding: 8px;
    z-index: -41;
    border-radius: 10px 35px 0px 10px;
}
	.menu .submenu li a:hover.mail i.fa {
		 background-color: #00abc7;
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
	 .menu .submenu li:nth-child(5) {
		 transform: rotateX(225deg);
	}
	 .menu.bottomRight {
		 bottom: 10px;
		 right: 10px;
	}
	.bottomRight .share.top .fa-phone{
		display: block !important;
	}
	
}*/

ul.submenu li {
    display: inline;
}
.bottomRight .share.top .fa-share-alt{
	display: none;
}
/*ul.submenu li:not(:first-child) {
    display: none;
}*/
</style>

<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 p0 mo-footer">
				<div class="single-footer-widget">
					<h4>Tentang Kami</h4>
					<div class="line-footer"></div>
					<p style="width: 90%;">
						RumahTinggal.id merupakan marketplace desain rumah <br>untuk mewujudkan hunian idaman Anda<br>Dapatkan desain hunian terbaik dengan mudah, hemat, dan berkualitas 
					</p>
					<p style="margin-bottom: 0">

						<div id="sosmed-dev">
		                     <a href="https://www.facebook.com/rumahtinggal.id/" target="_blank"><i class="fa fa-facebook i-con-footer" aria-hidden="true"></i></a>	
		                     <a href="https://www.instagram.com/rumahtinggal.id/" target="_blank"><i class="fa fa-instagram i-con-footer" aria-hidden="true"></i></a>
		                     <a href="https://twitter.com/rumahtinggal_id" target="_blank"><i class="fa fa-twitter i-con-footer" aria-hidden="true"></i></a>
		                     <a href="https://api.whatsapp.com/send?phone=628112636228&text=Hai%20rumahtinggal.id%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20rumahtinggal.id%20" target="_blank"><i class="fa fa-whatsapp i-con-footer" aria-hidden="true"></i></a> 	
		                  	<a href="https://id.pinterest.com/rumahtinggalid" target="_blank"><i class="fa fa-pinterest i-con-footer" aria-hidden="true"></i></a> 
		                     <a href=" https://mail.google.com/mail/?view=cm&fs=1&to=mail.rumahtinggal@gmail.com&su=Tanya rumahtinggal.id&body=Hai rumahtinggal.id, saya ingin bertanya mengenai desain di rumahtinggal.id" target="_blank"><i class="fa fa-envelope i-con-footer" aria-hidden="true"></i></a>
                        </div>
                  	</p>
                 
				</div>
			</div>
			 <div class="col-lg-6  col-md-6 col-sm-6 p0 mo-footer mo-footer-color" >
				<div class="single-footer-widget" id="layanan-dev" style="float: right;">
					<h4>Layanan Pengguna</h4>
					<div class="line-footer"></div>
					<div class="menu-footer"><a href="<?= base_url('kebijakan_privasi') ?>">Kebijakan Privasi</a></div>
					<div class="menu-footer"><a href="<?= base_url('syarat_ketentuan') ?>">Syarat dan Ketentuan</a></div>
					<div class="menu-footer"><a href="<?= base_url('cara_kerja') ?>">Cara Kerja</a></div>
					<div class="menu-footer"><a href="<?= base_url('faq') ?>">FAQ</a></div>
				</div>
          	</div>
		</div>
		
	</div>
</footer>	
<div class="row" style="margin-right: 0;">
	<div class="col-md-12 text-center" style="background: #026CB6;color: #fff;font-size: 15px;line-height: 40px;height: 40px;">
		<span style="font-size: 14px;">RumahTinggal.id © 2020. All right reserved.</span>
	</div>
</div>

<script type="text/javascript">
	

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
            url : "https://rumahtinggal.id/api/loginSSO",
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
                    window.location.href = "https://rumahtinggal.id/";
                }
            }
        });
    }


    
if (screen.width > 1200) {
    var bottomRight = document.getElementById('bottomRight');
    var lamo = document.getElementById('layanan-mobile');
    var carimo = document.getElementById('cari-desain-mo');
    var bannmo = document.getElementsByClassName("gallery-mo");
    var menumo = document.getElementById('nav-menu-container');
    var logomo = document.getElementById('logo-mo');
    // var bannmo = document.getElementsByClassName("gallery-mo");
    // var promomo = document.getElementById('lihat-promo-mo');
    // var favoritmo = document.getElementById('lihat-favorit-mo');
 $('.header').addClass('top-white');
    bottomRight.remove();
    lamo.remove();
    menumo.remove();
    carimo.remove();
    logomo.remove();
    // promomo.remove();
    // favoritmo.remove();
    // document.querySelectorAll('.product-feature-mo').forEach(e => e.remove());
    bannmo[0].remove();
    // bannmo[1].remove();
 
} else if (screen.width < 1200) {
    // var sosmeddev = document.getElementById('sosmed-dev');
    // var layanandev = document.getElementById('layanan-dev');
    // // var banndev = document.getElementsByClassName("gallery-dev");
    // var menudev = document.getElementById('nav-menu-container-dev');
    // var popupdev = document.getElementById('pop_up_website');
    // // var videodev = document.getElementById('video-dev');
    // // var logodev = document.getElementById('logo-dev');
    // var materialdev = document.getElementById('katalog-material-dev');
document.querySelectorAll('.product-feature-mo').forEach(e => e.remove());
    // document.querySelectorAll('.product-feature-dev').forEach(e => e.remove());
    // $('#header .container').addClass('container-mo');
    // $('.container').addClass('container-mo-mo');
    // $('#ModalLogin .modal-dialog').addClass('trans-top');
    // $('#ModalLogin .modal-dialog .modal-content #box-login .sign-in-container .frm-login-mo').addClass('trans-bottom');
    // $('#ModalLogin .modal-dialog .modal-content #box-login .sign-up-container #frm-daftar #panel-daftar').addClass('trans-bottom');
    // $('#ModalLogin .modal-dialog .modal-content #box-login .overlay-container .overlay .overlay-panel').addClass('trans-bottom');

    // logodev.remove();
    // sosmeddev.remove();
    // layanandev.remove();
    // menudev.remove();
    // materialdev.remove();
    // banndev[0].remove();
    // banndev[1].remove();
    // popupdev.remove();
    // videodev.remove();
}

// window.onload = function () {
//      // getMaterial();
//     if (screen.width > 1279) {


// if(jQuery.browser.mobile)
// {
//    window.open("https://rumahtinggal.id/mobile/");
// }
// else
// {
//    console.log('You are not using a mobile device!');
//  // window.open("https://rumahtinggal.id/dev/");
// }
//         document.querySelectorAll('.product-feature-mo').forEach(e => e.remove());
//        //  var mvp = document.getElementById('myViewport');
//        // mvp.setAttribute('content','width=1350');
//        // $('.header').addClass('top-white');

//        if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) == null) {
//             google.accounts.id.initialize({
//                 client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
//                 callback: handleCredentialResponse,
//                 cancel_on_tap_outside: false,
//                 // ui_mode: isMobile() ? 'bottom_sheet': 'card',
//             });
//             google.accounts.id.prompt();
//         }
//     } else if (screen.width < 1279){
        
// if(jQuery.browser.mobile)
// {
//    window.open("https://rumahtinggal.id/mobile/");
// }
// else
// {
//    console.log('You are not using a mobile device!');
//  // window.open("https://rumahtinggal.id/dev/");
// }
//     	// var mvp = document.getElementById('myViewport');
//      //    mvp.setAttribute('content','width=1350');
//         $('.flickity-page-dots').addClass('flickity-page-dots-mo');
//         $('.flickity-page-dots .dot').addClass('dot-mo');

//         if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) == null) {
//             google.accounts.id.initialize({
//                 client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
//                 callback: handleCredentialResponse,
//                 cancel_on_tap_outside: false,
//                 // ui_mode: isMobile() ? 'bottom_sheet': 'card',
//             });
//             google.accounts.id.prompt();
//     	}
//     }
// }

</script>
