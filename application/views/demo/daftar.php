<div class="modal fade" id="modalDaftar" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

<script>
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
</script>