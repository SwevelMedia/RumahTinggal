<style>
    .custom-dropdown-button {
        background-color: transparent;
        border: none;
        color: #000;
        /* Sesuaikan warna teks dengan yang diinginkan */
    }

    .custom-dropdown-button:active,
    .custom-dropdown-button:focus {
        outline: none;
        box-shadow: none;
    }

    small.d-block.mb-1 a {
        color: white;
        /* Set the color to white */
        text-decoration: none;
        /* Remove underline if you don't want it */
    }

    /* Style for visited links */
    small.d-block.mb-1 a:visited {
        color: white;
        /* Set the color to white for visited links */
    }
</style>

<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img href="base_url" src="<?php echo base_url('assets/demo/img/logo.png'); ?>" width="60px" alt="">

        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon mid-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
                   </button>
        <div class="collapse navbar-collapse ms-lg-3" id="navbarSupportedContent">
            <div class="w-100 mt-3 mt-lg-0 d-flex flex-column-reverse justify-content-center flex-lg-row gap-2 justify-content-lg-between">
                <ul class="navbar-nav me-lg-auto mb-2 mb-lg-0 d-flex gap-2 p-0">
                    <li class="nav-item text-center text-lg-star">
                        <a class="nav-link <?= ($title == "RumahTinggal.id - Marketplace Desain Rumah") ? 'active' : ''; ?>" aria-current="page" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li>
                        <hr class="d-lg-none border border-1 my-0 py-0 border-secondary">
                    </li>
                    <li class="nav-item text-center text-lg-star">
                        <a class="nav-link <?= ($title == "Koleksi") ? 'active' : ''; ?>" href="<?= base_url('koleksi') ?>">Koleksi</a>
                    </li>
                    <li>
                        <hr class="d-lg-none border border-1 my-0 py-0 border-secondary">
                    </li>
                    <li class="nav-item text-center text-lg-star">
                        <a class="nav-link <?= ($title == "Sampel") ? 'active' : ''; ?>" href="<?= base_url('sampel_desain') ?>">Sampel</a>
                    </li>
                    <li>
                        <hr class="d-lg-none border border-1 my-0 py-0 border-secondary">
                    </li>
                    <li class="nav-item text-center text-lg-star">
                        <a class="nav-link <?= ($title == "Material") ? 'active' : ''; ?>" href="<?= base_url('material') ?>">Material</a>
                    </li>
                    <li>
                        <hr class="d-lg-none border border-1 my-0 py-0 border-secondary">
                    </li>
                    <li class="nav-item text-center text-lg-star">
                        <a class="nav-link <?= ($title == "Layanan") ? 'active' : ''; ?>" href="<?= base_url('tentangKami') ?>">Layanan</a>
                    </li>
                </ul>
                <?php if (!$is_logged_in) : ?>
                    <div id="menu-login">
                        <div class="d-flex flex-column flex-lg-row gap-1">
                            <a class="btn btn-outline-white d-none d-lg-block" onclick="modalLogin()">
                                <span class="mx-2">Masuk</span>
                            </a>
                            <a class="btn btn-outline-white d-lg-none" data-bs-toggle="modal" data-bs-target="#modalLogin">Masuk</a>
                            <a class="btn btn-primary rounded-3 fw-semibold d-none d-lg-block" onclick="modalDaftar()">
                                <span class="mx-2">Daftar</span>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- Bagian Menu Pengguna (dengan atribut style="display: none;" agar awalnya disembunyikan) -->
                <?php if ($is_logged_in) : ?>
                    <div id="menu-pengguna" class="">
                        <div class="text-center">
                            <div class="dropdown">
                                <button class="btn custom-dropdown-button dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, <span id="nama_customer"><?= $customer_data->nama_customer ?></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" onclick="profil()">Profil</a></li>
                                    <li><a class="dropdown-item" onclick="logout()">Keluar</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
                <!-- <div class="d-flex flex-column flex-lg-row gap-1" id="menu-login">
                    <a class="btn btn-outline-white d-none d-lg-block" onclick="modalLogin()">
                        <span class="mx-2">Masuk</span>
                    </a>
                    <a class="btn btn-outline-white d-lg-none" data-bs-toggle="modal" data-bs-target="#modalLogin">Masuk</a>
                    <a class="btn btn-primary rounded-3 fw-semibold d-none d-lg-block" onclick="modalDaftar()"><span class="mx-2">Daftar</span></a>
                </div>
                <div id="menu-pengguna">
                    <div class="dropdown">
                        <button class="btn custom-dropdown-button dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, <span id="nama_customer"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Keluar</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="bg-dark d-lg-none text-white mt-5 p-4 text-center">
                <small class="d-block mb-1"><a href="<?= base_url('tentangKami') ?>">Tentang Kami</a></small>
                <small class="d-block mb-1">Kebijakan Privasi</a></small>
                <small class="d-block mb-1">Syarat Ketentuan</a></small>
                <small class="d-block mb-1"><a href="<?= base_url('cara_kerja') ?>">Cara Kerja</a></small>
                <small class="d-block mb-1"><a href="<?= base_url('faq') ?>">FAQ</a></small>
                <div class="d-flex justify-content-center gap-1  mt-3">
                    <img src="<?php echo base_url('assets/demo/img/tt.png'); ?>" alt="sosmed" width="20" height="20">
                    <img src="<?php echo base_url('assets/demo/img/path.png'); ?>" alt="sosmed" width="20" height="20">
                    <img src="<?php echo base_url('assets/demo/img/ig.png'); ?>" alt="sosmed" width="20" height="20">
                    <img src="<?php echo base_url('assets/demo/img/wa.png'); ?>" alt="sosmed" width="20" height="20">
                    <img src="<?php echo base_url('assets/demo/img/gmail.png'); ?>" alt="sosmed" width="20" height="20">
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {
        var $loading = $('#loadingDiv').hide();

        // Intercept AJAX requests to apply loading div exclusion
        $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
            if (!shouldExcludeUrl(options.url)) {
                $loading.show();
                $loading.addClass('d-flex');
            }
        });

        $(document).ajaxStop(function() {
            setTimeout(function() {
                $loading.hide();
                $loading.removeClass('d-flex');
            }, 100);
        });

        function shouldExcludeUrl(url) {
            var excludedBaseUrls = [
                "<?= base_url('api/simpanDisukai') ?>",
                "<?= base_url('api/hapusDisukai') ?>",
                // "<?= base_url('api/getCustomerId') ?>",
                "<?= base_url('api/getDetailDenahLantai') ?>",
                "<?= base_url('api/getDetailSpesifikasi') ?>"
            ];

            // Check if any excluded base URL matches the start of the provided URL
            for (var i = 0; i < excludedBaseUrls.length; i++) {
                if (url.startsWith(excludedBaseUrls[i])) {
                    return true;
                }
            }
            return false;
        }
    });


    // $(document).ready(function() {
    //     // Get customer ID from cookies
    //     let id_customer = Cookies.get('id_customer');
    //     // $.ajax({
    //     //     url: "<?= base_url('api/getCustomerId/') ?>",
    //     //     type: "GET",
    //     //     dataType: "JSON",
    //     //     success: function(data) {
    //     //         console.log(data)
    //     if (id_customer != null && id_customer != '') {
    //         // If customer ID exists
    //         // Fetch customer information
    //         $.ajax({
    //             url: "<?= base_url('api/getCustomerById/') ?>" + id_customer,
    //             type: "GET",
    //             dataType: "JSON",
    //             success: function(data) {
    //                 if (id_customer == data.id_customer) {
    //                     // Display customer name
    //                     $('#menu-pengguna').removeClass('d-none');
    //                     $('#nama_customer').html(data.nama_customer + '!');

    //                     // If customer ID exists, hide login menu and show user menu
    //                     $('#menu-login').hide();
    //                     $('#menu-pengguna').show();

    //                     // Fetch liked houses
    //                     $.ajax({
    //                         url: "<?= base_url('api/getRumahSuka/') ?>" + id_customer,
    //                         type: "GET",
    //                         dataType: "JSON",
    //                         success: function(data) {
    //                             if (data != '') {
    //                                 // Iterate through liked houses and update their UI
    //                                 $.each(data, function(i, item) {
    //                                     let id_rumah = item.id_rumah;
    //                                     $('.like .fa[data-id="' + id_rumah + '"]').removeClass('fa-heart-o')
    //                                         .addClass('fa-heart').css('color', 'red');
    //                                 });
    //                             }
    //                         }
    //                     });
    //                 } else {
    //                     $('#menu-login').show();
    //                     $('#menu-pengguna').hide();
    //                 }
    //             }
    //         });

    //     } else {
    //         // If no customer ID, show login menu and hide user menu
    //         $('#menu-login').show();
    //         $('#menu-pengguna').hide();
    //     }
    //     //     }
    //     // });


    // });

    function logout() {
        window.location.href = "<?= base_url('logout') ?>";
    }

    function profil() {
        let id_customer = Cookies.get('id_customer');
        location.href = "<?= base_url('profil/') ?>" + id_customer;
    }
</script>