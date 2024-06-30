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
                <form id="frm-daftar">
                    <div id="panel-daftar">
                      	<h2>Buat Akun Anda</h2>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" />
                      	<input type="email" name="email" placeholder="Email" />
                        <input type="tel" id="daftar-no_wa" name="no_wa" placeholder="No. WhatsApp (62812xxxxxxxx)" />
                        <p class="note">*) Nomor WhatsApp akan digunakan untuk proses login dan pengiriman pesan notifikasi sistem</p>
                        <button type="button" id="btn-daftar">Daftar</button>
                    </div>
                    <div id="panel-aktivasi" style="display: none">
                      	<h2>Aktivasi Akun</h2>
                        <p style="margin: 10px 0 5px;color: #000;">Kami telah mengirimkan kode aktivasi ke nomor WhatsApp <strong><span id="no_wa_aktivasi"></span></strong></p>
                        <input type="text" id="otp_aktivasi" name="otp" placeholder="Masukkan Kode Aktivasi" />
                        <a href="javascript:void(0)" id="kirim-ulang-otp">Kirim ulang kode (<span class="otp-timer" data-rooster-seconds=60 data-rooster-onComplete="$(this).hide()"></span>)</a><br>
                        <button type="button" onclick="verifikasi(0,$('#daftar-no_wa').val(),$('#otp_aktivasi').val())">Aktivasi</button>
                    </div>
                </form>
            </div>
            <div class="form-container sign-in-container">
              	<form id="frm-login">
                    <img src="<?= base_url('assets/img/logo.png') ?>" style="padding-bottom: 15px;" width="90px">
                  	<input type="tel" id="login-no_wa" name="no_wa" placeholder="No. WhatsApp (62812xxxxxxxx)" />
                    <input type="text" id="otp_verifikasi" name="otp" placeholder="Kode Verifikasi" style="display: none;" />
                  	<!--<p class="note" id="info_minta_kode">*) Kode verifikasi akan dikirimkan ke nomor WhatsApp Anda dengan mengklik link di bawah ini</p>-->
                  	<p class="note" id="info_minta_kode">*) Klik link di bawah ini untuk mendapatkan kode verifikasi Anda</p>
                  	<p id="info_verifikasi" style="display: none;line-height: 1.5;margin: 0 0 3px;font-size: 13px;"></p>
                    <a href="javascript:void(0)" id="minta-otp">Minta kode</a><br>
                    <button type="button" onclick="verifikasi(1,$('#login-no_wa').val(),$('#otp_verifikasi').val())">Masuk</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <!--<h2>Selamat datang kembali!</h2>-->
                        <p>Untuk tetap terhubung dengan kami, silakan masuk menggunakan akun Anda</p>
                        <button class="ghost" id="wrap-masuk">Masuk</button>
                    </div>
                    <div class="overlay-panel overlay-right">
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
      $.ajax({
          url: "<?= base_url('api/daftar') ?>",
          type: "post",
          data: $('#panel-daftar :input').serialize(),
          success: function(response) {
            if (response.status == 1) {
              $('#panel-daftar').hide();
              $('#panel-aktivasi').show();
              let no_wa = response.no_wa.replace(/(\d{4})(\d{3})(\d{3})(\d{3})/, "$1-***-***-$4");
              $('#no_wa_aktivasi').html(no_wa);
              $('#kirim-ulang-otp').attr('disabled',true);
            } else {
              toastr.info(response.info, 'Informasi', opsi_toastr);
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
             console.log(textStatus, errorThrown);
          }
      });
      
      /*$('.otp-timer').startTimer({
        onComplete: function(element){
          element.hide();
        }
      });*/
      
      $('.otp-timer').rooster(
        'start',
        {
          seconds: 60,
          oncomplete: function() {
            $('#kirim-ulang-otp').attr('disabled',false).html('Kirim ulang kode');
          }
        }
      );
    });
  
  	$('#minta-otp').click(function(){
      	$('#info_verifikasi').hide();
      	var no_wa = $('#login-no_wa').val();
    	if (no_wa != '') {
          $.ajax({
              url: "<?= base_url('api/getCustomer/') ?>"+no_wa,
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
</script>