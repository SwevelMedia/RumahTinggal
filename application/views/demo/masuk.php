<div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row justify-content-center">
                <div class="col-lg-6 bg-info text-white d-none d-lg-block" style="background-image: url('<?= base_url('assets/demo/img/popup.png') ?>'); background-size: 100% 100%; background-repeat: no-repeat">
                    <h4 class="ms-5 mt-5">Wujudkan Rumah Impian Anda</h4>
                    <h4 class="ms-5 mb-3">Bersama RumahTinggal.id</h4>
                    <div class="container ms-5">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> 500+ Desain
                                Berkualitas</li>
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> Harga Desain
                                Terjangkau</li>
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> Akses Mudah
                                dan Cepat</li>
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> One Stop
                                Solution</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-10 py-2">
                    <div class="row py-3 justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <h2 class="mb-0 fw-semibold">Masuk Akun Anda</h2>
                            <small class="mb-3">
                                Belum Punya Akun?
                                <a href="#" onclick="modalDaftar()">ayo daftar</a>

                            </small>
                            <form action="" id="frm-login">
                                <div class="form-floating mt-3 mb-2">
                                    <input type="email" class="form-control" id="email_login" placeholder="Email" />
                                    <label for="email_login">Email</label>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" id="password_login" placeholder="Kata Sandi" />
                                    <label for="password_login">Kata Sandi</label>
                                </div>
                                <div class="text-end">
                                    <a href="#" id="lupaKataSandiLink" onclick="showForgotPassword()">Lupa Kata Sandi?</a>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-100" type="button" id="login-button">Masuk</button>
                                </div>
                                <div class="text-center my-2 d-flex align-items-center">
                                    <hr class="flex-grow-1 border border-dark border-1" />
                                    <span class="px-3">atau</span>
                                    <hr class="flex-grow-1 border border-dark border-1" />
                                </div>
                                <div class="mt-2 mb-4">
                                    <button class="btn btn-outline-white border-dark w-100" type="button" id="button-addon2">
                                        <img src=<?php echo base_url('assets/demo/img/google.png'); ?> alt="Google Logo" width="30px" class="me-2" />
                                        <strong>Masuk Dengan Google</strong>
                                    </button>
                                </div>

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

<div class="modal fade" id="modalLupaSandi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row justify-content-center">
                <div class="col-lg-6 bg-info text-white d-none d-lg-block" style="background-image: url('<?= base_url('assets/demo/img/header-sign.png') ?>'); background-size: 100% 100%; background-repeat: no-repeat">
                    <h5 class="ms-5 mt-5">Wujudkan Rumah Impian Anda</h5>
                    <h5 class="ms-5 mb-3">Bersama RumahTinggal.id</h5>
                    <div class="container ms-5">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> 500+ Desain
                                Berkualitas</li>
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> Harga Desain
                                Terjangkau</li>
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> Akses Mudah
                                dan Cepat</li>
                            <li class="d-flex align-items-center mb-2"><span class="me-2">&#10003;</span> One Stop
                                Solution</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-10 py-2">
                    <div class="row py-3 justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <h2 class="mb-0 fw-semibold">Reset Kata Sandi</h2>
                            <small class="mb-3">
                                Masukkan email yang terhubung dengan akun Anda.
                            </small>
                            <form action="" id="frm-lupa-password">
                                <div class="form-floating mt-3 mb-2">
                                    <input type="email" class="form-control" id="email_lupa_password" name="email_lupa_password" placeholder="Email" />
                                    <label for="email_lupa_password">Email</label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-100" type="button" id="reset-button" onclick="sendMail($('#email_lupa_password').val())">Kirim Link Reset</button>
                                </div>
                                <div class="form-floating mt-3 mb-3">
                                </div>
                                <div class="text-end">
                                </div>
                                <div class="mt-3">
                                </div>
                                <div class="text-center my-2 d-flex align-items-center">
                                </div>
                                <div class="mt-3 mb-5">
                                </div>
                                <div class="mt-3 mb-5">
                                </div>
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

<script src="<?php echo base_url('assets/demo/js/navbar-script.js'); ?>"></script>

<script>
    function modalLogin() {
        $('#modalDaftar').modal('hide');
        $('#modalLogin').modal('show');
    }

    function showForgotPassword() {
        var modalLogin = document.getElementById('modalLogin');
        var modalLupaSandi = document.getElementById('modalLupaSandi');

        if (modalLogin && modalLupaSandi) {
            $(modalLogin).modal('hide');
            $(modalLupaSandi).modal('show');
        } else {
            console.error('Modal tidak ditemukan.');
        }
    }
    var opsi_toastr = {
        closeButton: true,
        progressBar: true,
        positionClass: 'toast-top-right',
        timeOut: '3000'
    };

    $(document).ready(function() {
        $('#login-button').on('click', function() {
            var email = $('#email_login').val().trim();
            var password = $('#password_login').val().trim();

            if (email === '' || password === '') {
                toastr.warning('Email dan kata sandi harus diisi.', 'Kesalahan', opsi_toastr);
                return;
            }

            loginAkun(email, password);
        });
    });

    function sendMail(email) {
        if (document.forms['frm-lupa-password'].email_lupa_password.value === "") {
            swal.fire({
                icon: 'warning',
                title: 'Peringatan',
                text: 'Email kosong',
                confirmButtonColor: "#056BB7"
            });
        } else {
            $.ajax({
                url: "<?= base_url('api/sendMail/') ?>" + email,
                type: "get",
                dataType: "JSON",
                success: function(response) {
                    if (response.status === 0) {
                        swal.fire({
                            icon: 'warning',
                            title: 'Peringatan',
                            text: response.info,
                            confirmButtonColor: "#056BB7"
                        });
                    } else {
                        swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.info,
                            confirmButtonColor: "#056BB7"
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    swal.fire({
                        icon: 'warning',
                        title: 'Peringatan',
                        text: 'Terjadi masalah saat pengambilan data.',
                        confirmButtonColor: "#056BB7"
                    });
                }
            });
        }
    }

    // function loginAkun(email, pass) {
    //     $.ajax({
    //         url: "<?= base_url('api/loginAkun/') ?>" + email + "/" + pass,
    //         type: "get",
    //         dataType: "JSON",
    //         success: function(response) {
    //             if (response.status == 1) {
    //                 // Pengguna berhasil login
    //                 isUserLoggedIn = true;

    //                 // Simpan status login dan informasi pengguna di localStorage
    //                 localStorage.setItem('isUserLoggedIn', 'true');
    //                 localStorage.setItem('nama_customer', response.nama_customer);

    //                 // Memicu peristiwa loginSuccess
    //                 var event = new Event('loginSuccess');
    //                 document.dispatchEvent(event);

    //                 // Menutup modal login
    //                 $('#modalLogin').modal('hide');

    //                 // Redirect atau tampilkan pesan sesuai kebutuhan
    //                 window.location.href = "<?= base_url('demo') ?>";
    //             } else {
    //                 // Login gagal
    //                 isUserLoggedIn = false;
    //                 Swal.fire({
    //                     icon: 'error',
    //                     title: 'Kesalahan',
    //                     text: response.info
    //                 });
    //             }
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             // Kesalahan pada AJAX
    //             isUserLoggedIn = false;
    //             Swal.fire({
    //                 icon: 'warning',
    //                 title: 'Kesalahan',
    //                 text: 'Email atau kata sandi Anda Salah.'
    //             });
    //         }
    //     });
    // }

    function loginAkun(email, pass) {
        $.ajax({
            url: "<?= base_url('api/loginAkun/') ?>" + email + "/" + pass,
            type: "get",
            dataType: "JSON",
            success: function(response) {
                if (response.status == 1) {
                    $('#modalLogin').modal('hide');
                    Swal.fire({
                        title: "Akun Anda Telah dibuat!",
                        html: "<img src='<?= base_url('assets/demo/img/signin.png') ?>' alt='Success' width='250px'><p>Ayo masuk ke akun Anda untuk menjelajahi koleksi desain rumah menarik!</p>",
                        timer: 7000,
                        showConfirmButton: true,
                        timerProgressBar: true,
                        confirmButtonText: "Mulai",
                        confirmButtonColor: "#056BB7"
                    }).then(() => {
                        let url = $(location).attr('href');
                        window.location.href = "<?= base_url('demo') ?>";
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Kesalahan',
                        text: response.info
                    });
                }
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

    // function loginAkun(email, pass) {
    //     $.ajax({
    //         // ...

    //         success: function(response) {
    //             if (response.status == 1) {
    //                 // Pengguna berhasil login
    //                 isUserLoggedIn = true;

    //                 // Simpan status login dan informasi pengguna di localStorage
    //                 localStorage.setItem('isUserLoggedIn', 'true');
    //                 localStorage.setItem('nama_customer', response.nama_customer);

    //                 // Memicu peristiwa loginSuccess
    //                 var event = new Event('loginSuccess');
    //                 document.dispatchEvent(event);

    //                 $('#modalLogin').modal('hide');

    //                 // ... (kode lain yang diperlukan)
    //             } else {
    //                 // Login gagal
    //                 isUserLoggedIn = false;
    //                 Swal.fire({
    //                     icon: 'error',
    //                     title: 'Kesalahan',
    //                     text: response.info
    //                 });
    //                 // ... (kode lain yang diperlukan)
    //             }
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             // Kesalahan pada AJAX
    //             isUserLoggedIn = false;
    //             Swal.fire({
    //                 icon: 'warning',
    //                 title: 'Kesalahan',
    //                 text: 'Email atau kata sandi Anda Salah.'
    //             });
    //         }

    //         // ...
    //     });
    // }



    function onSuccess(googleUser) {
        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
        // window.location.href = "<?php echo base_url() ?>";



        $.ajax({
            url: "<?= base_url('api/loginGoogle/') ?>" + googleUser.getBasicProfile().getEmail(),
            type: "POST",
            data: {
                "nama_lengkap": googleUser.getBasicProfile().getName(),
                "email": googleUser.getBasicProfile().getEmail(),
                "password": ''
            },
            dataType: "JSON",
            success: function(response) {
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
                auth2.signOut().then(function() {
                    console.log('User signed out.');
                });
                window.location.href = url;
            },
            error: function(jqXHR, textStatus, errorThrown) {
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


    $(document).ready(function() {
        if (Cookies.get('id_customer', {
                domain: 'rumahtinggal.id'
            }) != null) {
            // delete $('#my-signin2').fn.func;
            $('#my-signin2').delay(3000).fadeOut(200);
        }
    });
</script>