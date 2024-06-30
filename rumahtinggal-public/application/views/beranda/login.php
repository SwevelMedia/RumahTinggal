<style>
#ModalLogin .modal-dialog { max-width: 768px; }
  
#ModalLogin .modal-content {
    border: none;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,.4);
}
  
#box-login {
	border-radius: 10px;
  	/*box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);*/
	position: relative;
	overflow: hidden;
	max-width: 100%;
	min-height: 480px;
}

#ModalLogin .form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

#box-login.right-panel-active .sign-in-container { transform: translateX(100%); }

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

#box-login.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

#box-login.right-panel-active .overlay-container{ transform: translateX(-100%); }

.overlay {
	background: -webkit-linear-gradient(to bottom, #3991DF, #005693);
	background: linear-gradient(to bottom, #3991DF, #005693);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

#box-login.right-panel-active .overlay { transform: translateX(50%); }

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left { transform: translateX(-20%); }

#box-login.right-panel-active .overlay-left { transform: translateX(0); }

.overlay-right {
	right: 0;
	transform: translateX(0);
}

#box-login.right-panel-active .overlay-right { transform: translateX(20%); }
  
#ModalLogin .overlay-panel h2 {
    color: #fff;
    font-size: 24px;
  	padding-bottom: 5px;
}
  
#ModalLogin .overlay-panel p { line-height: 1.3; }

#ModalLogin .note {  
	line-height: 1.3;
  	font-size: 12px;
  	font-style: italic;
  	margin-bottom: 8px;
}

#ModalLogin button {
    border-radius: 25px;
    border: 1px solid #026CB6;
    background-color: #026CB6;
    color: #FFFFFF;
    padding: 5px 20px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  	cursor: pointer;
}
  
#ModalLogin button:hover {
	border: 1px solid #005693;
    background-color: #005693;
}

#ModalLogin button:active { transform: scale(0.95); }

#ModalLogin button:focus { outline: none; }

#ModalLogin button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

#ModalLogin form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}
  
#ModalLogin form button { margin-top: 10px; }
  
#ModalLogin form a { color: #026CB6; }

#ModalLogin form a:hover { color: #3991DF; }
  
#ModalLogin input {
	background-color: #eee;
  	color: #000;
	border: none;
	padding: 10px 15px;
	margin: 4px 0;
	width: 100%;
  	font-weight: 300;
}
  
#frm-daftar h2 {
    font-weight: 400;
    font-size: 22px;
    padding-bottom: 12px;
    color: #000;
}  

#kirim-ulang-otp[disabled="disabled"] {
    opacity: .5;
    pointer-events: none;
    cursor: default;
    color: grey;
}
  
.close {
    background-color: transparent !important;
    border: none !important;
    position: absolute;
    right: 0;
  	top: 0;
    padding: 6px 12px !important;
    font-weight: 400;
    font-size: 20px;
}    
  
.sign-up-container .close { color: gray !important; }
  
.overlay-right .close { color: #fff !important; }    
  
/*.timer, .timer-done {
  	font-size: 30px;
  	color: black;
  	font-weight: bold;
  	padding: 10px;
}

.jst-hours, .jst-minutes, .jst-seconds {
  	float: right;
}

.jst-hours {
  	display: none;
}*/
</style>

<div id="ModalLogin" data-backdrop="true" data-keyboard="true" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        <div id="box-login">
            <div class="form-container sign-up-container">
              	<button type="button" class="close" data-dismiss="modal">&times;</button>
                <form id="frm-daftar" name="frm-daftar">
                    <div id="panel-daftar"> <!-- style="transform: scale(0.8,0.6) !important;width: 155px;" -->
                      	<h2>Buat Akun Anda</h2>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="" />
                      	<input type="email" id="email" name="email" placeholder="E-mail" value="" />
                        <!-- <input type="tel" id="daftar-no_wa" name="no_wa" placeholder="No. WhatsApp (62812xxxxxxxx)" /> -->
                        <!-- <input type="text" name="username" placeholder="Username" /> -->
                        <input type="password" id="password" name="password" placeholder="Kata sandi" value="" /> 
                        <input type="password" id="password_ulang" name="password_ulang" placeholder="Ulangi kata sandi" value="" />
                        <!-- <p class="note">*) Nomor WhatsApp akan digunakan untuk proses pemberitahuan</p> -->
                        <button type="button" id="btn-daftar" style="width: 80px;height: 52px;padding: 5px;margin-top: 20px;">Daftar</button>
                    </div>
                   <!--  <div id="panel-aktivasi" style="display: none">
                      	<h2>Aktivasi Akun</h2>
                        <p style="margin: 10px 0 5px;color: #000;">Kami telah mengirimkan kode aktivasi ke nomor WhatsApp <strong><span id="no_wa_aktivasi"></span></strong></p>
                        <input type="text" id="otp_aktivasi" name="otp" placeholder="Masukkan Kode Aktivasi" />
                        <a href="javascript:void(0)" id="kirim-ulang-otp">Kirim ulang kode (<span class="otp-timer" data-rooster-seconds=60 data-rooster-onComplete="$(this).hide()"></span>)</a><br>
                        <button type="button" onclick="verifikasi(0,$('#daftar-no_wa').val(),$('#otp_aktivasi').val())">Aktivasi</button>
                    </div> -->
                </form>
            </div>
            <div class="form-container sign-in-container">
              	
                <form id="frm-login" class="frm-login-mo">
                   <div id="panel-login-akun">
                    <img src="<?= base_url('assets/img/logo.png') ?>" style="padding-bottom: 15px;" width="90px">
                  	<input type="email" id="email_login" name="email_loginl" placeholder="E-mail" />
                    <input type="password" id="password_login" name="password" placeholder="Kata sandi" />
                    <a href="javascript:void(0)" id="lupa_password">Lupa Password</a><br>
                    <!-- <button type="button" onclick="verifikasi(1,$('#login-no_wa').val(),$('#otp_verifikasi').val())">Masuk</button> -->
                     <button type="button" onclick="loginAkun($('#email_login').val(),$('#password_login').val())">Masuk</button> <br>

                    <!--  <button type="button" onclick="login()" style="background: transparent; border-color: transparent;"> <img src="https://persistiq.com/assets/google_sign_up.png" style="width: 190px;"></button> -->
                    
                    <!-- <div class="g-signin2" data-onsuccess="onSignIn" onclick="onSignIn(googleUser)"></div> -->

<!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
 <div id="my-signin2" class="mt-5"></div>

                  </div>
                </form>

                <form id="frm-lupa-password" style="display: none" name="frm-lupa-password">
                <div id="panel-lupa-password">
                    <img src="<?= base_url('assets/img/logo.png') ?>" style="padding-bottom: 15px;" width="90px">
                    <input type="email" id="email_lupa_password" name="email_lupa_password" placeholder="Email" />
                    <!-- <input type="password" id="password_baru" name="password" placeholder="Password baru" />
                    <input type="password" id="ulang_password_baru" name="password" placeholder="Ulang password baru" /> -->
                    <!-- <a href="javascript:void(0)" id="lupa_password">Lupa Password</a><br> -->
                    <!-- <button type="button" onclick="verifikasi(1,$('#login-no_wa').val(),$('#otp_verifikasi').val())">Masuk</button> -->
                     <!-- <button type="button" onclick="resetPasword($('#email_lupa_password').val(),$('#password_baru').val())">Ubah</button> -->
                     <button type="button" onclick="sendMail($('#email_lupa_password').val())">Kirim link reset</button>
                </div>
                </form>
               
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left" style="transform: scale(1,0.9) !important;">
                        <!--<h2>Selamat datang kembali!</h2>-->
                        <p>Untuk tetap terhubung dengan kami, silakan masuk menggunakan akun Anda</p>
                        <button class="ghost" id="wrap-masuk">Masuk</button>
                    </div>
                    <div class="overlay-panel overlay-right" style="transform: scale(1,0.9) !important;">
                        <!--<h2>Halo,</h2>-->
                      	<button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p>Masukkan profil singkat Anda dan mulai nikmati berbagai layanan kami</p>
                        <button class="ghost" id="wrap-daftar">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script>
  	const wrapDaftar = document.getElementById('wrap-daftar');
    const wrapMasuk = document.getElementById('wrap-masuk');
    const container = document.getElementById('box-login');

    wrapDaftar.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    wrapMasuk.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });
  
  	$('#btn-daftar').click(function(){
            var password = $('#password').val();
            var password_ulang = $('#password_ulang').val();
            // var nama_lengkap = $('#nama_lengkap').val();
            // var email = $('#email').val();

 if (document.forms['frm-daftar'].email.value === "" || document.forms['frm-daftar'].nama_lengkap.value === "" || document.forms['frm-daftar'].password.value === "" || document.forms['frm-daftar'].password_ulang.value === "") {
   toastr.info('Lengkapi inputan pendaftaran akun Anda', 'Informasi', opsi_toastr);
    return false;
  } else{
  // return true;
if (password == password_ulang) {
              $.ajax({
                  url: "<?= base_url('api/daftar') ?>",
                  type: "post",
                  data: $('#panel-daftar :input').serialize(),
                  success: function(response) {
                    if (response.status == 1) {
                      toastr.info(response.info, 'Informasi', opsi_toastr);
                      $('#frm-daftar input').val(null);
                      $('#box-login').removeClass('right-panel-active');
                    } else {
                      toastr.info(response.info, 'Informasi', opsi_toastr);
                    }
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                     console.log(textStatus, errorThrown);
                  }
              });
            } else { toastr.info('Password yang anda masukkan tidak sama', 'Informasi', opsi_toastr);}


}
     
    });
  
  	$('#minta-otp').click(function(){
      	$('#info_verifikasi').hide();
      	var no_wa = $('#email_login').val();
    	if (no_wa != '') {
          $.ajax({
              url: "<?= base_url('api/getCustomerByEmail/') ?>"+no_wa,
              type: "get",
              dataType: "JSON",
              success: function(response) {
                if (response != null) {
                  $.ajax({
                      url: "<?= base_url('api/mintaOTP/1/') ?>"+no_wa,
                      type: "get",
                      dataType: "JSON",
                      success: function(response_otp) {
                        no_wa = response_otp.no_wa.replace(/(\d{4})(\d{3})(\d{3})(\d{3})/, "$1-***-***-$4");
                        if (response_otp.status == '1') {
                          $('#info_verifikasi').html('Kode verifikasi telah dikirimkan ke nomor WhatsApp <strong>'+no_wa+'</strong>.<br>Belum mendapatkan kode?');
                          $('#otp_verifikasi').show();
                          $('#login-no_wa,#info_minta_kode').hide();
                        } else {
                          $('#info_verifikasi').html('Gagal mengirimkan kode verifikasi ke nomor WhatsApp <strong>'+no_wa+'</strong>');
                          $('#info_minta_kode').show();
                        }
                        $('#info_verifikasi').show();
                        $('#minta-otp').html('Kirim ulang kode');
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
                } else {
                  alert('Nomor WhatsApp Anda belum terdaftar. Silakan lakukan pendaftaran akun baru terlebih dulu.');
                }
              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }
          });
        } else alert('Silakan masukkan Nomor WhatsApp Anda!');
    });
  
  	$('#kirim-ulang-otp').click(function(){
      	var no_wa = $('#daftar-no_wa').val();
        $.ajax({
            url: "<?= base_url('api/mintaOTP/0/') ?>"+no_wa,
            type: "get",
            dataType: "JSON",
            success: function(response) {
              if (response.status == 1) {
                $('#kirim-ulang-otp').attr('disabled',true).html('Kirim ulang kode (<span class="otp-timer" data-rooster-seconds=60 data-rooster-onComplete="$(this).hide()"></span>)');
                $('.otp-timer').rooster(
                  'start',
                  {
                    seconds: 60,
                    oncomplete: function() {
                      $('#kirim-ulang-otp').attr('disabled',false).html('Kirim ulang kode');
                    }
                  }
                );
              } else {
                $('#kirim-ulang-otp').attr('disabled',false).html('Kirim ulang kode');
              }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }
        });
    });
  
    $('#ModalLogin').on('hidden.bs.modal', function (e) {
        $('#box-login').removeClass('right-panel-active');
    });
    
    function verifikasi(status,no_wa,otp) {
        $.ajax({
            url: "<?= base_url('api/verifikasiOTP/') ?>"+status+"/"+no_wa+"/"+otp,
            type: "get",
            dataType: "JSON",
            success: function(response){
              if(response.status == 1) {
                $('#ModalLogin').modal('hide');
                toastr.success(response.info, 'Informasi', opsi_toastr);
                let url = $(location).attr('href');
                window.location.href = url;
              } else alert(response.info);
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }

    function loginAkun(email,pass) {
        $.ajax({
            url: "<?= base_url('api/loginAkun/') ?>"+email+"/"+pass,
            type: "get",
            dataType: "JSON",
            success: function(response){
              if(response.status == 1) {
                $('#ModalLogin').modal('hide');
                toastr.success(response.info, 'Informasi', opsi_toastr);
                let url = $(location).attr('href');
                window.location.href = url;
              } else toastr.error(response.info);
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.warning('Email atau kata sandi Anda Salah.', 'Kesalahan', opsi_toastr);
            }
        });
    }

    //  function login() {
    //     $.ajax({
    //         url: "<?= base_url('api/loginGoogle') ?>",
    //         type: "get",
    //         dataType: "JSON",
    //         success: function(response){
             
    //         },
    //         error: function (jqXHR, textStatus, errorThrown){
    //           toastr.warning('Email atau kata sandi Anda Salah.', 'Kesalahan', opsi_toastr);
    //         }
    //     });
    // }


    $('#lupa_password').click(function(){
        $('#panel-login-akun').hide();
        $('#frm-lupa-password').show();
        $('#frm-lupa-password').css('margin-top',"-470px");
        $('#email_lupa_password').val($('#email_login').val())
        var email = $('#email_lupa_password').val();
        var password_baru = $('#password_baru').val();
        var ulang_password_baru = $('#ulang_password_baru').val();
        // if (email != '') {
          // $.ajax({
          //     url: "<?= base_url('api/getCustomerByEmail/') ?>"+email,
          //     type: "get",
          //     dataType: "JSON",
          //     success: function(response) {
          //       if (response != null) {
          //           if (password_baru == ulang_password_baru) {
          //               $.ajax({
          //                     url: "<?= base_url('api/ubahPasword/') ?>"+email,
          //                     type: "get",
          //                     dataType: "JSON",
          //                     success: function(response_otp) {
          //                       // no_wa = response_otp.no_wa.replace(/(\d{4})(\d{3})(\d{3})(\d{3})/, "$1-***-***-$4");
          //                       // if (response_otp.status == '1') {
          //                       //   $('#info_verifikasi').html('Kode verifikasi telah dikirimkan ke nomor WhatsApp <strong>'+no_wa+'</strong>.<br>Belum mendapatkan kode?');
          //                       //   $('#otp_verifikasi').show();
          //                       //   $('#login-no_wa,#info_minta_kode').hide();
          //                       // } else {
          //                       //   $('#info_verifikasi').html('Gagal mengirimkan kode verifikasi ke nomor WhatsApp <strong>'+no_wa+'</strong>');
          //                       //   $('#info_minta_kode').show();
          //                       // }
          //                       // $('#info_verifikasi').show();
          //                       // $('#minta-otp').html('Kirim ulang kode');
          //                     },
          //                     error: function(jqXHR, textStatus, errorThrown) {
          //                        console.log(textStatus, errorThrown);
          //                     }
          //               });
          //           } else{
          //               toastr.error('Password yang dimasukkan tidak sama.', 'Informasi', opsi_toastr);
          //           }
          //       } else {
          //         alert('Gagal merubah password.');
          //       }
          //     },
          //     error: function(jqXHR, textStatus, errorThrown) {
          //        console.log(textStatus, errorThrown);
          //     }
          // });
        // } else alert('Silakan masukkan Nomor WhatsApp Anda!');
    });




      function sendMail(email) {
        if ( document.forms['frm-lupa-password'].email_lupa_password.value === "" ){toastr.warning('Email kosong');}else{
        $.ajax({
            url: "<?= base_url('api/sendMail/') ?>"+email,
            type: "get",
            dataType: "JSON",
            success: function(response){
              // if(response.status == 1) {
              //   $('#ModalLogin').modal('hide');
              //   toastr.success(response.info, 'Informasi', opsi_toastr);
              //   let url = $(location).attr('href');
              //   window.location.href = url;
              // } else alert(response.info);
                 // toastr.error('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
                 // toastr.success('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
                   // toastr.success(response.info, 'Informasi', opsi_toastr);
                    // toastr.success(response.info, 'Informasi', opsi_toastr);
                    if(response.status === 0) {
                toastr.warning(response.info);
              } else {toastr.success(response.info, 'Berhasil', opsi_toastr);}
            },
            error: function (jqXHR, textStatus, errorThrown){
              // toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
                toastr.warning(response.info, 'Informasi', opsi_toastr);
               
            }
        });
    }
    }



//     function onSignIn(googleUser) {
//   var profile = googleUser.getBasicProfile();
//   console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//   console.log('Name: ' + profile.getName());
//   console.log('Image URL: ' + profile.getImageUrl());
//   console.log('Email: ' + profile.getEmail());
//    // This is null if the 'email' scope is not present.

// $.ajax({
//             url: "<?= base_url('api/loginGoogle/') ?>"+profile.getEmail(),
//             type: "get",
//             dataType: "JSON",
//             success: function(data){
//               // if(response.status == 1) {
//               //   $('#ModalLogin').modal('hide');
//               //   toastr.success(response.info, 'Informasi', opsi_toastr);
//               //   let url = $(location).attr('href');
//               //   window.location.href = url;
//               // } else alert(response.info);
//                  // toastr.error('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
//                  // toastr.success('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
//                    // toastr.success(response.info, 'Informasi', opsi_toastr);
//                     // toastr.success(response.info, 'Informasi', opsi_toastr);
//               //      if(response.status == 1) {
//               //   $('#ModalLogin').modal('hide');
//               //   toastr.success(response.info, 'Informasi', opsi_toastr);
//               //   let url = $(location).attr('href');
//               //   window.location.href = url;
//               // } else toastr.error(response.info);
//                if (data.Success == true) {
//                     toastr.success(data.Info, 'Informasi', opsi_toastr);
//                     window.location.href = "<?php echo base_url() ?>";
//                 }
//             },
//             error: function (jqXHR, textStatus, errorThrown){
//               // toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
//                 toastr.warning(response.info, 'Informasi', opsi_toastr);
               
//             }
//         });

// }


// function onSignIn(googleUser) {
//   var profile = googleUser.getBasicProfile();
//   console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//   console.log('Name: ' + profile.getName());
//   console.log('Image URL: ' + profile.getImageUrl());
//   console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
// }

 function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
 // window.location.href = "<?php echo base_url() ?>";



      $.ajax({
            url: "<?= base_url('api/loginGoogle/') ?>"+googleUser.getBasicProfile().getEmail(),
            type: "POST",
            data: {
                "nama_lengkap": googleUser.getBasicProfile().getName(),
                "email": googleUser.getBasicProfile().getEmail(),
                "password": ''
            },
            dataType: "JSON",
            success: function(response){
              // if(response.status == 1) {
              //   $('#ModalLogin').modal('hide');
              //   toastr.success(response.info, 'Informasi', opsi_toastr);
              //   let url = $(location).attr('href');
              //   window.location.href = url;
              // } else alert(response.info);
                 // toastr.error('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
                 // toastr.success('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
                   // toastr.success(response.info, 'Informasi', opsi_toastr);
                    // toastr.success(response.info, 'Informasi', opsi_toastr);
              //      if(response.status == 1) {
              //   $('#ModalLogin').modal('hide');
              //   toastr.success(response.info, 'Informasi', opsi_toastr);
              //   let url = $(location).attr('href');
              //   window.location.href = url;
              // } else toastr.error(response.info);
               // if (data.Success == true) {
               //      toastr.success(data.Info, 'Informasi', opsi_toastr);
               //      window.location.href = "<?php echo base_url() ?>";
               //  }
                // if(response.status == 1) {
                // $('#ModalLogin').modal('hide');
                // toastr.success(response.info, 'Informasi', opsi_toastr);
                //  window.location.href = "<?php echo base_url() ?>";
                // let url = $(location).attr('href');
                // window.location.href = url;
              // } else toastr.error(response.info);

$('#ModalLogin').modal('hide');
                toastr.success(response.info, 'Informasi', opsi_toastr);
                 // window.location.href = "<?php echo base_url() ?>";
                let url = $(location).attr('href');
                     var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
                window.location.href = url;
            },
            error: function (jqXHR, textStatus, errorThrown){
              // toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
                toastr.warning(response.info, 'Informasi', opsi_toastr);
            }
        });


    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 290,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }

// $( window ).load(function() {
//     if (window.location.href.indexOf('reload')==-1) {
//          window.location.replace(window.location.href+'?reload');
//     }
// });

 $(document).ready(function(){
 if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) != null) {
       // delete $('#my-signin2').fn.func;
        $('#my-signin2').delay(3000).fadeOut(200);
    }
});

</script>