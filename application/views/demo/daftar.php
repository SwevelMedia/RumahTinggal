<style>
    .modal-desc {
        font-size: 1.3em;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 0.5px;
    }

    .modal-bullet {
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 0.5px;
    }

    .modal-content {
        overflow: hidden;
        border-radius: 24px;
    }
</style>

<div class="modal fade" id="modalDaftar" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row justify-content-center">
                <div class="col-lg-6 bg-info text-white d-none d-lg-block" style="background-image: url('<?= base_url('assets/demo/img/popup.png') ?>'); background-size: 100% 100%; background-repeat: no-repeat">
                    <div style="margin-left:2.2em;">
                        <h4 class=" mt-5 modal-desc">Wujudkan Rumah Impian Anda</h4>
                        <h4 class=" mb-3 modal-desc">Bersama RumahTinggal.id</h4>
                        <div class="container ">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center mb-2 modal-bullet"><span class="me-2">&#10003;</span> <?php echo floor($jumlah_rumah / 10) * 10 . '+'; ?> Desain
                                    Berkualitas</li>
                                <li class="d-flex align-items-center mb-2 modal-bullet"><span class="me-2">&#10003;</span> Harga Desain
                                    Terjangkau</li>
                                <li class="d-flex align-items-center mb-2 modal-bullet"><span class="me-2">&#10003;</span> Akses Mudah
                                    dan Cepat</li>
                                <li class="d-flex align-items-center mb-2 modal-bullet"><span class="me-2">&#10003;</span> One Stop
                                    Solution</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-10 py-2">
                    <div class="row py-3 justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <h2 class="mb-0 fw-semibold">Buat Akun Baru</h2>
                            <small class="mb-3"></small>
                            Sudah Punya Akun?
                            <a href="#" onclick="modalLogin()">ayo masuk</a>
                            </small>
                            <form action="" id="frm-daftar">
                                <div class="form-floating mt-3 mb-2">
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" />
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" />
                                    <label for="password">Kata Sandi Baru</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password_ulang" name="password_ulang" placeholder="Ulangi Kata Sandi" />
                                    <label for="password_ulang">Ulangi Kata Sandi</label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-100" type="button" id="btn-daftar">Daftar</button>
                                </div>
                                <div class="text-center my-2 d-flex align-items-center">
                                    <hr class="flex-grow-1 border border-dark border-1" />
                                    <span class="px-3">atau</span>
                                    <hr class="flex-grow-1 border border-dark border-1" />
                                </div>
                                <!-- <div id="g_id_onload" data-client_id=<?php echo $google_client_id ?> data-callback="handleCredentialResponse">
                                </div>
                                <div class="g_id_signin w-100 mb-3" data-width=319 data-type="standard"></div> -->
                                <div id="google-button-daftar" class="w-100 mb-3"></div>
                            </form>
                            <small>Dengan Mendaftar, Anda dinyatakan telah setuju dengan syarat & ketentuan
                                RumahTinggal.id </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        var id_customer = Cookies.get('id_customer', {

            domain: 'rumahtinggal.id'

        });
        if (id_customer == null || id_customer == '') {
            google.accounts.id.initialize({
                client_id: "<?php echo $google_client_id ?>",
                callback: handleCredentialResponseLogin
            });

            $('#modalDaftar, #modalLogin').on('shown.bs.modal', function(e) {
                var loginButtonWidth = document.getElementById('btn-daftar').offsetWidth;
                if (loginButtonWidth < 5) {
                    loginButtonWidth = document.getElementById('login-button').offsetWidth;
                }
                console.log(loginButtonWidth)
                google.accounts.id.renderButton(
                    document.getElementById("google-button-daftar"), {
                        theme: "outline",
                        size: "large",
                        width: loginButtonWidth
                    } // customization attributes
                );
                google.accounts.id.renderButton(
                    document.getElementById("google-button-login"), {
                        theme: "outline",
                        size: "large",
                        width: loginButtonWidth
                    } // customization attributes
                );
            });

            // google.accounts.id.prompt(); // also display the One Tap dialog
        }

    }

    function modalDaftar() {
        $('#modalDaftar').modal('show');
    }
    $('#btn-daftar').click(function() {
        var password = $('#password').val().trim();
        var passwordUlang = $('#password_ulang').val().trim();
        var namaLengkap = $('#nama_lengkap').val().trim();
        var email = $('#email').val().trim();

        if (email === "" || namaLengkap === "" || password === "" || passwordUlang === "") {
            Swal.fire({
                title: "Lengkapi Inputan",
                text: "Lengkapi semua kolom pendaftaran.",
                icon: "info",
                confirmButtonColor: "#056BB7"
            });
            return false;
        }

        if (password !== passwordUlang) {
            Swal.fire({
                title: "Password Tidak Sama",
                text: "Pastikan password yang dimasukkan sama pada kedua kolom.",
                icon: "info",
                confirmButtonColor: "#056BB7"
            });
            return false;
        }

        $.ajax({
            url: "<?= base_url('api/daftar') ?>",
            type: "post",
            data: $('#frm-daftar :input').serialize(),
            success: function(response) {
                if (response.status == 1) {
                    $('#modalDaftar').modal('hide');
                    Swal.fire({
                        title: "Akun Anda Telah dibuat!",
                        html: "<img src='<?= base_url('assets/demo/img/signin.png') ?>' alt='Success' width='250px'><p>Ayo masuk ke akun Anda untuk menjelajahi koleksi desain rumah menarik!</p>",
                        timer: 7000,
                        showConfirmButton: true,
                        timerProgressBar: true,
                        confirmButtonText: "Mulai",
                        confirmButtonColor: "#056BB7"
                    }).then(function() {
                        $('#modalLogin').modal('show');
                    });
                } else {
                    Swal.fire({
                        title: "Pendaftaran Gagal",
                        text: response.info,
                        icon: "error",
                        confirmButtonColor: "#056BB7"
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                Swal.fire({
                    title: "Error",
                    text: "Terjadi kesalahan dalam pendaftaran.",
                    icon: "error",
                    confirmButtonColor: "#056BB7"
                });
            }
        });
    });

    function decodeJwtResponseFromGoogleAPI(token) {
        let base64Url = token.split('.')[1]
        let base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        let jsonPayload =
            decodeURIComponent(atob(base64).split('').map(function(c) {
                return '%' + ('00' +
                    c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));
        return JSON.parse(jsonPayload)
    }

    function handleCredentialResponseLogin(response) {
        responsePayload = decodeJwtResponseFromGoogleAPI(response.credential);
        $.ajax({
            url: "<?= base_url('api/loginGoogle/') ?>" + responsePayload.email,
            type: "POST",
            data: {
                "nama_lengkap": responsePayload.name,
                "email": responsePayload.email,
                "password": ''
            },
            dataType: "JSON",
            success: function(response) {

                $('#ModalLogin').modal('hide');
                Swal.fire({
                    title: "Anda Berhasil Masuk!",
                    html: "<img src='<?= base_url('assets/demo/img/login.png') ?>' alt='Success' width='250px'><p>Anda telah masuk ke akun Anda, Mari lihat koleksi rumah impian!</p>",
                    timer: 7000,
                    showConfirmButton: true,
                    timerProgressBar: true,
                    confirmButtonText: "Mulai",
                    confirmButtonColor: "#056BB7"
                }).then(() => {
                    let url = $(location).attr('href');
                    window.location.href = "<?= base_url() ?>";
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Kesalahan',
                    text: 'Email atau kata sandi Anda Salah.'
                });
            }
        });
    }
</script>