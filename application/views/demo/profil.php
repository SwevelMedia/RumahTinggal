<style>
    a {
        text-decoration: none;
        color: inherit;
    }

    .nav-link-profil {
        text-decoration: none;
        border-bottom: none;
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        min-width: 100px;
        text-align: center;
    }

    .active-link {
        background-color: white !important;
    }

    .tab-pane {
        background-color: white;
        transform: none !important;
    }

    .bg-card-paketdesain {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 180px;
        width: 240px;
    }

    .bg-card-produk {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 180px;
        width: 240px;
    }


    .card-lunas {
        margin-bottom: 3px;
        padding: 1px;
        background-color: #EEFFEE;
    }

    .lunas-content {
        color: #009500;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 3px;
        padding: 1px;
        background-color: #EEFFEE;
    }

    .card-tunggu-bayar {
        margin-bottom: 3px;
        padding: 1px;
        background-color: #FFFBEE;
    }

    .tunggu-bayar-content {
        color: #FFB800;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 3px;
        padding: 1px;
        background-color: #fff9e8;
    }

    .card-batal-bayar {
        margin-bottom: 3px;
        padding: 1px;
        background-color: #FFEEEE;
    }

    .batal-bayar-content {
        color: #D20000;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 3px;
        padding: 1px;
        background-color: #ffe6e6;
    }

    .bg-card-pakdes {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 210px;
        width: 280px;
    }

    .bg-card-desainmob {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 210px;
        width: 280px;
    }

    .bg-card-circle-akun {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 120px;
        width: 120px;
        border-radius: 50%;
    }

    .nav-pills .nav-link-profil.active {
        background-color: white;
    }

    .vertical-line {
        border-left: 2px solid #333;
        /* Warna dan ketebalan garis dapat disesuaikan */
        height: 100px;
        /* Atur tinggi garis sesuai kebutuhan */
        margin: 0 20px;
        /* Atur margin kiri dan kanan sesuai kebutuhan */
    }

    .card-paket-mob {
        background-color: #EBF6FF;
        width: 100%;
        padding: 1px;
    }

    .name-rumah {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 12ch;
        /* Ganti sesuai kebutuhan karakter yang diizinkan */
    }

    .harga-transaksi {
        font-size: 15px;
        display: flex;
        justify-content: center;
        /* Tengah horizontal */
        align-items: center;
    }

    @media only screen and (max-width: 768px) {
        .harga-transaksi {
            font-size: 12px;
            /* Sesuaikan dengan ukuran yang diinginkan untuk layar mobile */
            /* Tambahkan propertis lainnya sesuai kebutuhan pada layar mobile */
        }
    }

    .swal-hapus-title {
        font-size: 1.5rem;
        font-family: "Inter", sans-serif;
    }

    .swal2-deny {
        background-color: #00528e !important;
        border-left-color: #00528e !important;
        border-right-color: #00528e !important;
    }

    .swal2-confirm {
        background-color: #dc3545 !important;
        border-left-color: #dc3545 !important;
        border-right-color: #dc3545 !important;
    }
</style>

<body>

    <div class="py-4 bg-light" style="min-height:85vh;">
        <div class="rounded-3 card card-body d-lg-none mb-3">
            <div class="row align-items-center">
                <div class="col-4">
                    <!-- <img src="<?php echo base_url("assets/demo/img/happy.png"); ?>" class="rounded-circle mt-2 ms-2" alt="Gambar Bulat" width="90" height="90"> -->
                    <?php

                    if ($profil->foto != "") {

                        echo '<img id="default-foto" alt="" src="' . base_url("assets/demo/img/customer/") . $profil->foto . '" class="rounded-circle mt-2 ms-2" width="90" height="90" style="object-fit:cover;"/> ';
                    } else {

                        echo ' <img id="default-foto" alt="" src="https://cdn-a.shopicial.com/img/noavatar.png" style="object-fit:cover;" class="rounded-circle mt-2 ms-2" width="90" height="90" />';
                    }

                    ?>
                </div>
                <div class="col-8">
                    <!-- <div class="position-absolute top-0 mt-2 end-0" style="margin-right: 15px;"><i class="fa-solid fa-bars"></i></div> -->
                    <div class="position-absolute top-0 end-0 mt-2" style="margin-right: 20px;">
                        <i class="fas fa-bars" id="dropdownIcon" style="cursor: pointer;"></i>
                        <div class="position-absolute top-0 end-0 mt-2 bg-white p-2" style="display: none; border: 1px solid #ccc;" id="dropdownMenu">
                            <a class="dropdown-item mb-2" onclick="ubah_profil_mobile()">Ubah Profil</a>
                            <a class="dropdown-item mb-2" href="<?= base_url('ubah_sandi_mobile') ?>">Ganti Kata Sandi</a>
                            <a class="dropdown-item" href="#" onclick="handleDropdownItemClick('Item 3')">Hapus</a>
                        </div>
                    </div>
                    <div class="biodata-mobile mt-2">
                        <h4 class="semibold"><?= $profil->nama_customer ?></h4>
                        <div><?= $profil->email ?></div>
                    </div>
                </div>
            </div>
            <!-- <div class="history mt-4">
                <div class="row">
                    <div class="col-4">
                        <div class="text-center text-lg-start">
                            <div style="color: grey;">Paket Desain</div>
                            <div style="color: grey; font-weight:600;">5</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center text-lg-start">
                            <div style="color: grey;">Transaksi</div>
                            <div style="color: grey; font-weight:600;">5</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center text-lg-start">
                            <div style="color: grey;">Wishlist</div>
                            <div style="color: grey; font-weight:600;">5</div>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-3">
                    <div class="rounded-3 card card-body text-center d-none d-lg-block">
                        <?php

                        if ($profil->foto != "") {
                            echo '<img id="default-foto" alt="" src="' . base_url("assets/demo/img/customer/") . $profil->foto . '" class="rounded-circle mx-auto mt-2" style="object-fit:cover;" width="70" height="70" /> ';
                        } else {

                            echo ' <img id="default-foto" alt="" src="https://cdn-a.shopicial.com/img/noavatar.png" class="rounded-circle mx-auto mt-2" width="70" height="70" />';
                        }

                        ?>
                        <!-- <img src="<?php echo base_url("assets/demo/img/happy.png"); ?>" class="rounded-circle mx-auto mt-2" alt="Gambar Bulat" width="70" height="70"> -->
                        <div class="biodata">
                            <h5 class="semibold mt-3"><?= $profil->nama_customer ?></h5>
                            <div><?= $profil->email ?></div>
                        </div>
                        <div class="justify-content-center mt-3">
                            <button type="button" class="btn btn-primary w-50 mt-2" data-bs-toggle="modal" data-bs-target="#ubahProfil">
                                Pengaturan
                            </button>
                            <button type="button" class="btn btn-danger w-50 mt-3" onclick="logout()">Keluar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card-profil border bg-light" id="myCardBody">
                        <div class="container">
                            <ul class="nav nav-pills">
                                <li class="nav-item text-center">
                                    <a style="display: flex; align-items: center;" class="nav-link-profil rounded-0 bg-light text-dark active" id="paketdesain-tab" data-bs-toggle="pill" href="#pills-paketdesain" role="tab" aria-controls="pills-lantai1" aria-selected="true">
                                        <i class="fa-solid fa-folder-open d-none d-lg-block" style="margin-right: 5px;"></i>
                                        <span class="d-none d-lg-block">Paket Desain</span>
                                        <span class="d-lg-none">Paket<br>Desain</span>
                                    </a>
                                </li>
                                <li class="nav-item text-center">
                                    <a style="display: flex; align-items: center;" class="nav-link-profil rounded-0 bg-light text-dark" id="riwayat-tab" data-bs-toggle="pill" href="#pills-riwayat" role="tab" aria-controls="pills-lantai2" aria-selected="false">
                                        <i class="fa-solid fa-bag-shopping d-none d-lg-block" style="margin-right: 7px;"></i>
                                        <span class="d-none d-lg-block">Riwayat Transaksi</span>
                                        <span class="d-lg-none">Riwayat<br>Transaksi</span>
                                    </a>
                                </li>
                                <li class="nav-item text-center">
                                    <a style="display: flex; align-items: center;" class="nav-link-profil rounded-0 bg-light text-dark" id="wishlist-tab" data-bs-toggle="pill" href="#pills-wishlist" role="tab" aria-controls="pills-lantai3" aria-selected="false">
                                        <i class="fa-solid fa-star d-none d-lg-block" style="margin-right: 7px;"></i>
                                        <span class="d-none d-lg-block">Wishlist Desain</span>
                                        <span class="d-lg-none">Wishlist<br>Desain</span>
                                    </a>
                                </li>
                                <li class="nav-item text-center">
                                    <a style="display: flex; align-items: center;" class="nav-link-profil rounded-0 bg-light text-dark" id="keranjang-tab" data-bs-toggle="pill" href="#pills-keranjang" role="tab" aria-controls="pills-lantai3" aria-selected="false">
                                        <i class="fa-solid fa-cart-shopping d-none d-lg-block" style="margin-right: 7px;"></i>
                                        <span class="d-none d-lg-block">Keranjang</span>
                                        <span class="d-lg-none">Keranjang</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content bg-white" style="max-height: 500x; overflow-y: auto;">
                            <div class="tab-pane fade show active p-3" id="pills-paketdesain" role="tabpanel" aria-labelledby="paketdesain-tab">
                                <!-- Owl Carousel untuk paket desain -->
                                <div class="owl-carousel owl-theme owl-carousel-paket-desain ms-2 d-none d-lg-block">
                                    <?php foreach ($transaksi as $trns) { ?>
                                        <!-- Konten transaksi -->

                                        <div class="card border-0 shadow-sm mb-2" style="width: 100%;">
                                            <a href="" class="image">
                                                <div style="background-image: url('<?= base_url('assets/img/desain_thumbnail/' . $trns->foto) ?>')" class="card-img-top bg-card-pakdes"></div>
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title mb-0 fw-semibold"><a href="<?php echo base_url('detail_koleksi/') . $trns->id_rumah ?>"><?= $trns->nama_rumah ?></a></h5>
                                                <h6 class="nama_arsitek mb-0">Design by <?= $trns->nama_arsitek ?></h6>
                                                <hr />
                                                <div class="d-flex align-items-center gap-3 mb-1">
                                                    <div>
                                                        <img src="<?= base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                                    </div>
                                                    <div>
                                                        <small>Lahan Minimal</small>
                                                        <small class="fw-semibold d-block"><?= $trns->lebar_lahan . ' m x ' . $trns->panjang_lahan . ' m' ?></small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="<?= base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                                    </div>
                                                    <div>
                                                        <small>Biaya Konstruksi</small>
                                                        <small class="fw-semibold d-block">
                                                            <?php
                                                            if ($trns->lantai == '1') {
                                                                echo "Rp" . number_format(3500000 * $trns->luas_bangunan, 0, ",", ".");
                                                            } elseif ($trns->lantai == '2') {
                                                                echo "Rp" . number_format(4500000 * $trns->luas_bangunan, 0, ",", ".");
                                                            } else {
                                                                echo "Rp" . number_format(5500000 * $trns->luas_bangunan, 0, ",", ".");
                                                            }
                                                            ?>
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="mt-3"></div>
                                            </div>
                                            <div class="card-info">
                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3 ms-2">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Bangunan</small>
                                                                <small class="fw-semibold d-block"><?= $trns->luas_bangunan ?> m2 </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Kamar Tidur</small>
                                                                <small class="fw-semibold d-block"><?= $trns->kamar_tidur ?> Kamar </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between mb-3">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3 ms-2">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Lantai</small>
                                                                <small class="fw-semibold d-block"><?= $trns->lantai ?> Lantai </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Kamar Mandi</small>
                                                                <small class="fw-semibold d-block"><?= $trns->toilet ?> Kamar</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-1">
                                                    <div class="text-center">
                                                        <a href="#" onclick="unduhDokumen(<?= $trns->id_rumah ?>)" class="btn btn-primary w-100">
                                                            <i class="fa-solid fa-download me-2"></i>Unduh Paket
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <!-- Konten Alternatif -->
                                <?php if (empty($transaksi)) { ?>
                                    <div class="card card-body mx-3 mb-2 d-none d-lg-block" id="myCardBody" style="background-color: #FFFBEE ;">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-circle-exclamation fa-2x" style="color: orange;"></i>
                                            <div class=" ms-3">Yah! Anda belum melakukan transaksi apapun. </br> <a href="<?= base_url('koleksi') ?>">Klik disini</a> untuk mencari desain rumah idaman Anda sekarang.
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (!empty($transaksi)) { ?>
                                    <div class="text-center mt-3 d-none d-lg-block">
                                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="prevBtnPakdes"><i class="fas fa-arrow-left fs-7"></i></button>
                                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnPakdes"><i class="fas fa-arrow-right fs-7"></i></button>
                                    </div>
                                <?php } ?>
                                <div class="container d-lg-none">
                                    <?php if (!empty($transaksi)) { ?>
                                        <?php foreach ($transaksi as $trns) { ?>
                                            <div class="card border-0 shadow-sm mx-auto mb-3" style="width: 280px;">
                                                <a href="" class="image">
                                                    <div style="background-image: url('<?= base_url('assets/img/desain_thumbnail/' . $trns->foto) ?>')" class="card-img-top bg-card-pakdes"></div>
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title mb-0 fw-semibold"><?= $trns->nama_rumah ?></h5>
                                                    <h6 class="nama_arsitek mb-0">Design by <?= $trns->nama_arsitek ?></h6>
                                                    <hr />
                                                    <div class="d-flex align-items-center gap-3 mb-1">
                                                        <div>
                                                            <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                                        </div>
                                                        <div>
                                                            <small>Lahan Minimal</small>
                                                            <small class="fw-semibold d-block"><?= $trns->lebar_lahan . ' m x ' . $trns->panjang_lahan . ' m' ?></small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div>
                                                            <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                                        </div>
                                                        <div>
                                                            <small>Biaya Konstruksi</small>
                                                            <small class="fw-semibold d-block">
                                                                <?= $trns->lantai == '1' ? "Rp" . number_format(3500000 * $trns->luas_bangunan, 0, ",", ".") : ($trns->lantai == '2' ? "Rp" . number_format(4500000 * $trns->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $trns->luas_bangunan, 0, ",", ".")); ?>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3"></div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="row justify-content-between">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center gap-3 ms-2">
                                                                <div>
                                                                    <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                                                </div>
                                                                <div>
                                                                    <small>Bangunan</small>
                                                                    <small class="fw-semibold d-block"><?= $trns->luas_bangunan ?> m2 </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                                                </div>
                                                                <div>
                                                                    <small>Kamar Tidur</small>
                                                                    <small class="fw-semibold d-block"><?= $trns->kamar_tidur ?> Kamar </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-between mb-3">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center gap-3 ms-2">
                                                                <div>
                                                                    <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                                                </div>
                                                                <div>
                                                                    <small>Lantai</small>
                                                                    <small class="fw-semibold d-block"><?= $trns->lantai ?> Lantai </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                                                </div>
                                                                <div>
                                                                    <small>Kamar Mandi</small>
                                                                    <small class="fw-semibold d-block"><?= $trns->toilet ?> Kamar</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pb-1">
                                                        <div class="text-center">
                                                            <a href="#" onclick="unduhDokumen(<?= $trns->id_rumah ?>)" class="btn btn-primary w-100">
                                                                <i class="fa-solid fa-download me-2"></i>Unduh Paket
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <div class="card card-body mx-3 mb-2 d-lg-none" id="myCardBody" style="background-color: #FFFBEE ;">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-circle-exclamation fa-2x" style="color: orange;"></i>
                                                <div class=" ms-3">Yah! Anda belum melakukan transaksi apapun. </br> <a href="<?= base_url('koleksi') ?>">Klik disini</a> untuk mencari desain rumah idaman Anda sekarang.
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>
                            <div class="tab-pane fade mt-3" id="pills-riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                                <?php foreach ($transaksi as $trns) {
                                    $tgl_pembelian = date("d F Y", strtotime($trns->tgl_pembelian)); ?>

                                    <div class="card card-body bg-light mx-3 mb-2" id="myCardBody">
                                        <div class="row">
                                            <div class="col-lg-3 col-6">
                                                <div class="bg-white card card-body" id="myCardBody">
                                                    <div>
                                                        <img src="<?= base_url('assets/img/desain_thumbnail/' . $trns->foto) ?>" class="img-fluid">
                                                        <!-- <div class="harga-transaksi mt-2"> <strong><?= $trns->lantai == '1' ? "Rp" . number_format(3500000 * $trns->luas_bangunan, 0, ",", ".") : ($trns->lantai == '2' ? "Rp" . number_format(4500000 * $trns->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $trns->luas_bangunan, 0, ",", ".")); ?></strong></div> -->
                                                        <div class="harga-transaksi mt-2"> <strong><?= "Rp " . number_format($trns->harga, 0, ",", ".") ?></strong></div>

                                                    </div>
                                                </div>
                                                <div class="rounded-3 card-paket-mob mt-2 py-1 d-lg-none">
                                                    <div class="d-flex gap-2 align-items-center justify-content-center">
                                                        <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="15" height="15">
                                                        <div style="font-size: 12px;">Paket <?= $trns->jenis_paket ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex flex-column">
                                                    <div class="d-none d-lg-block"><strong>#<?= $trns->no_invoice ?></strong></div>
                                                    <small><?= $tgl_pembelian ?></small>
                                                    <a href="<?php echo base_url('detail_koleksi/') . $trns->id_rumah ?>">
                                                        <h5 class="bold mt-3 d-none d-lg-block"><?= $trns->nama_rumah ?></h5>
                                                    </a>
                                                    <a href="<?php echo base_url('detail_koleksi/') . $trns->id_rumah ?>">
                                                        <h5 class="bold mt-3 d-lg-none name-rumah"><?= $trns->nama_rumah ?></h5>
                                                    </a>

                                                    <small>By <?= $trns->nama_arsitek ?></small>
                                                    <div class="card-lunas mt-1 p-1 d-lg-none mt-3" style="width:fit-content;">
                                                        <?php
                                                        if ($trns->status == "0") {
                                                            echo '<div class="tunggu-bayar-content">Belum Bayar</div>';
                                                        } else if ($trns->status == "2") {
                                                            echo '<div class="batal-bayar-content">Gagal</div>';
                                                        } else {
                                                            echo '<div class="lunas-content">Lunas</div>';
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="border border-dark rounded-3 card card-body mt-2 py-1 d-none d-lg-block" style="width: fit-content;" id="myCardBody">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="15" height="15">
                                                            <div style="font-size: 13px;">Paket <?= $trns->jenis_paket ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 d-none d-lg-block">
                                                <div class="position-absolute top-0 end-0 mt-2" style="margin-right: 20px;">
                                                    <div class="mb-3 p-1>">
                                                        <?php
                                                        if ($trns->status == "0") {
                                                            echo '<div class="tunggu-bayar-content">Belum Bayar</div>';
                                                        } else if ($trns->status == "2") {
                                                            echo '<div class="batal-bayar-content">Gagal</div>';
                                                        } else {
                                                            echo '<div class="lunas-content">Lunas</div>';
                                                        }
                                                        ?>
                                                        <!-- <div class="lunas-content">Sudah Lunas</div> -->
                                                    </div>
                                                </div>
                                                <div class="position-absolute bottom-0 end-0 mb-2" style="margin-right: 20px;">
                                                    <?php
                                                    if ($trns->status == "0") {
                                                        echo '<a href="#" class="btn btn-primary" ><i class="fa-solid fa-download me-2"></i> Bayar Sekarang</a>';
                                                    } else if ($trns->status == "2") {
                                                        echo '<a href="#" class="btn btn-primary" onclick="detailRumah(' . $trns->id_rumah . ')"><i class="fa-solid fa-file-import me-2"></i> Detail Desain</a>';
                                                    } else {
                                                        echo '<a href="#" class="btn btn-primary" onclick="invoice(' . $trns->no_invoice . ')"><i class="fa-solid fa-download me-2"></i> Unduh Invoice</a>';
                                                    }
                                                    ?>
                                                    <!-- <div class="lunas-content">Sudah Lunas</div> -->
                                                    <!-- <a href="<?= base_url('invoice') ?>" class="btn btn-primary"><i class="fa-solid fa-download me-2"></i>Unduh Invoice</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-lg-none">
                                            <?php
                                            if ($trns->status == "0") {
                                                echo '<a href="#" class="btn btn-primary mt-2 w-100" ><i class="fa-solid fa-download me-2"></i> Bayar Sekarang</a>';
                                            } else if ($trns->status == "2") {
                                                echo '<a href="#" class="btn btn-primary mt-2 w-100" onclick="detailRumah(' . $trns->id_rumah . ')"><i class="fa-solid fa-file-import me-2"></i> Detail Desain</a>';
                                            } else {
                                                echo '<a href="#" class="btn btn-primary mt-2 w-100" onclick="invoice(' . $trns->no_invoice . ')"><i class="fa-solid fa-download me-2"></i> Unduh Invoice</a>';
                                            }
                                            ?>
                                        </div>

                                    </div>
                                <?php } ?>
                                <?php if (empty($transaksi)) { ?>
                                    <div class="card card-body mx-3 mb-2" id="myCardBody" style="background-color: #FFFBEE ;">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-circle-exclamation fa-2x" style="color: orange;"></i>
                                            <div class=" ms-3">Yah! Anda belum melakukan transaksi apapun. </br> <a href="<?= base_url('koleksi') ?>">Klik disini</a> untuk mencari desain rumah idaman Anda sekarang.
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="tab-pane fade mt-3 p-2" id="pills-wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                                <div class="owl-carousel owl-theme owl-carousel-paket-desain ms-2 d-none d-lg-block">
                                    <?php foreach ($wishlist as $item) { ?>
                                        <!-- Konten transaksi -->

                                        <div class="card border-0 shadow-sm mb-2" style="width: 100%;">
                                            <a href="" class="image">
                                                <div style="background-image: url('<?= base_url('assets/img/desain_thumbnail/' . $item->foto) ?>')" class="card-img-top bg-card-pakdes"></div>
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title mb-0 fw-semibold"><a href="<?php echo base_url('detail_koleksi/') . $item->id_rumah ?>"><?= $item->nama_rumah ?></a></h5>
                                                <h6 class="nama_arsitek mb-0">Design by <?= $item->nama_arsitek ?></h6>
                                                <hr />
                                                <div class="d-flex align-items-center gap-3 mb-1">
                                                    <div>
                                                        <img src="<?= base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                                    </div>
                                                    <div>
                                                        <small>Lahan Minimal</small>
                                                        <small class="fw-semibold d-block"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="<?= base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                                    </div>
                                                    <div>
                                                        <small>Biaya Konstruksi</small>
                                                        <small class="fw-semibold d-block">
                                                            <?php
                                                            if ($item->lantai == '1') {
                                                                echo "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".");
                                                            } elseif ($item->lantai == '2') {
                                                                echo "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".");
                                                            } else {
                                                                echo "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".");
                                                            }
                                                            ?>
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="mt-3"></div>
                                            </div>
                                            <div class="card-info">
                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3 ms-2">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Bangunan</small>
                                                                <small class="fw-semibold d-block"><?= $item->luas_bangunan ?> m2 </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Kamar Tidur</small>
                                                                <small class="fw-semibold d-block"><?= $item->kamar_tidur ?> Kamar </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between mb-3">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3 ms-2">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Lantai</small>
                                                                <small class="fw-semibold d-block"><?= $item->lantai ?> Lantai </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Kamar Mandi</small>
                                                                <small class="fw-semibold d-block"><?= $item->toilet ?> Kamar</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-1">
                                                    <div class="text-center">
                                                        <a href="<?php echo base_url('detail_koleksi/') . $item->id_rumah ?>" class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="d-lg-none">
                                    <?php foreach ($wishlist as $item) { ?>
                                        <!-- Konten transaksi -->

                                        <div class="card border-0 shadow-sm mb-3 mx-auto" style="width: 280px;">
                                            <a href="" class="image">
                                                <div style="background-image: url('<?= base_url('assets/img/desain_thumbnail/' . $item->foto) ?>')" class="card-img-top bg-card-pakdes"></div>
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title mb-0 fw-semibold"><?= $item->nama_rumah ?></h5>
                                                <h6 class="nama_arsitek mb-0">Design by <?= $item->nama_arsitek ?></h6>
                                                <hr />
                                                <div class="d-flex align-items-center gap-3 mb-1">
                                                    <div>
                                                        <img src="<?= base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                                    </div>
                                                    <div>
                                                        <small>Lahan Minimal</small>
                                                        <small class="fw-semibold d-block"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div>
                                                        <img src="<?= base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                                    </div>
                                                    <div>
                                                        <small>Biaya Konstruksi</small>
                                                        <small class="fw-semibold d-block">
                                                            <?php
                                                            if ($item->lantai == '1') {
                                                                echo "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".");
                                                            } elseif ($item->lantai == '2') {
                                                                echo "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".");
                                                            } else {
                                                                echo "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".");
                                                            }
                                                            ?>
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="mt-3"></div>
                                            </div>
                                            <div class="card-info">
                                                <div class="row justify-content-between">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3 ms-2">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Bangunan</small>
                                                                <small class="fw-semibold d-block"><?= $item->luas_bangunan ?> m2 </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Kamar Tidur</small>
                                                                <small class="fw-semibold d-block"><?= $item->kamar_tidur ?> Kamar </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between mb-3">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3 ms-2">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Lantai</small>
                                                                <small class="fw-semibold d-block"><?= $item->lantai ?> Lantai </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="<?= base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                                            </div>
                                                            <div>
                                                                <small>Kamar Mandi</small>
                                                                <small class="fw-semibold d-block"><?= $item->toilet ?> Kamar</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pb-1">
                                                    <div class="text-center">
                                                        <a href="<?php echo base_url('detail_koleksi/') . $item->id_rumah ?>" class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- <div class="card card-body mx-3 mb-2" id="myCardBody" style="background-color: #FFFBEE ;">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-circle-exclamation fa-2x" style="color: orange;"></i>
                                        <div class=" ms-3">Yah! Anda belum punya dokumen apapun. </br> <a href="<?= base_url('demo/koleksi') ?>">Klik disini</a> untuk mencari desain rumah idaman Anda sekarang.
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <div class="tab-pane fade mt-3" id="pills-keranjang" role="tabpanel" aria-labelledby="keranjang-tab">
                                <?php foreach ($keranjang as $trns) {
                                    $tgl_pembelian = date("d F Y", strtotime($trns->created_on)); ?>

                                    <div class="card card-body bg-light mx-3 mb-2 pb-5 pb-sm-3" id="myCardBody">
                                        <div class="row">
                                            <div class="col-lg-3 col-6">
                                                <div class="bg-white card card-body" id="myCardBody">
                                                    <div>
                                                        <img src="<?= base_url('assets/img/desain_thumbnail/' . $trns->foto) ?>" class="img-fluid">
                                                        <!-- <div class="harga-transaksi mt-2"> <strong><?= $trns->lantai == '1' ? "Rp" . number_format(3500000 * $trns->luas_bangunan, 0, ",", ".") : ($trns->lantai == '2' ? "Rp" . number_format(4500000 * $trns->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $trns->luas_bangunan, 0, ",", ".")); ?></strong></div> -->
                                                        <div class="harga-transaksi mt-2"> <strong><?= "Rp " . number_format($trns->harga, 0, ",", ".") ?></strong></div>

                                                    </div>
                                                </div>
                                                <div class="rounded-3 card-paket-mob mt-2 py-1 d-lg-none">
                                                    <div class="d-flex gap-2 align-items-center justify-content-center">
                                                        <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="15" height="15">
                                                        <div style="font-size: 12px;">Paket <?= $trns->jenis_paket ?> <?= $trns->paket ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex flex-column">

                                                    <small><?= $tgl_pembelian ?></small>
                                                    <a href="<?php echo base_url('detail_koleksi/') . $trns->id_rumah ?>">
                                                        <h5 class="bold mt-3 d-none d-lg-block"><?= $trns->nama_rumah ?></h5>
                                                    </a>
                                                    <a href="<?php echo base_url('detail_koleksi/') . $trns->id_rumah ?>">
                                                        <h5 class="bold mt-3 d-lg-none name-rumah"><?= $trns->nama_rumah ?></h5>
                                                    </a>

                                                    <small>By <?= $trns->nama_arsitek ?></small>
                                                    <div class="mt-1 p-1 d-lg-none mt-lg-3" style="width:fit-content;">
                                                        <?php
                                                        if ($trns->status == "Dalam Negosiasi") {
                                                            echo '<div class="tunggu-bayar-content">Dalam Negosiasi</div>';
                                                        } else if ($trns->status == "No Deal") {
                                                            echo '<div class="batal-bayar-content">No Deal</div>';
                                                        } else if ($trns->status == "Deal") {
                                                            echo '<div class="lunas-content">Deal</div>';
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="position-absolute bottom-0 end-0 mb-2" style="margin-right: 20px;">
                                                        <button class="btn btn-danger" style="font-size: small;" onclick="hapusKeranjang(<?= $trns->id_rumah ?>,<?= $trns->paket ?>)">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                    <div class="border border-dark rounded-3 card card-body mt-2 py-1 d-none d-lg-block" style="width: fit-content;" id="myCardBody">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="15" height="15">
                                                            <div style="font-size: 13px;">Paket <?= $trns->jenis_paket ?> <?= $trns->paket ?></div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-outline-primary rounded-3 py-1 mt-lg-2 mt-1" onclick="tanyaDesain(<?= $trns->paket ?>, '<?= $trns->nama_rumah ?>')" style="width: fit-content; font-size:13px;">Tanya Admin</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 d-none d-lg-block">
                                                <div class="position-absolute top-0 end-0 mt-2" style="margin-right: 20px;">
                                                    <div class="mb-3 p-1>">
                                                        <?php
                                                        if ($trns->status == "Dalam Negosiasi") {
                                                            echo '<div class="tunggu-bayar-content">Dalam Negosiasi</div>';
                                                        } else if ($trns->status == "No Deal") {
                                                            echo '<div class="batal-bayar-content">No Deal</div>';
                                                        } else if ($trns->status == "Deal") {
                                                            echo '<div class="lunas-content">Deal</div>';
                                                        }
                                                        ?>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-lg-none">

                                        </div>

                                    </div>
                                <?php } ?>
                                <?php if (empty($keranjang)) { ?>
                                    <div class="card card-body mx-3 mb-2" id="myCardBody" style="background-color: #FFFBEE ;">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-circle-exclamation fa-2x" style="color: orange;"></i>
                                            <div class=" ms-3">Yah! Anda belum menambahkan desain apapun ke keranjang. </br> <a href="<?= base_url('koleksi') ?>">Klik disini</a> untuk mencari desain rumah idaman Anda sekarang.
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal ubah profil -->
    <div class="modal fade" id="ubahProfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 bg-light">
                        <h5 class="mt-5 ms-4 menu-item-active" style="cursor:pointer;" id="infoPribadiBtn" onclick="showContent('info-pribadi')">Info Pribadi</h5>
                        <h5 class="mt-4 ms-4 menu-item" style="cursor:pointer;" id="gantiKataSandiBtn" onclick="showContent('ganti-kata-sandi')">Ganti Kata Sandi</h5>
                    </div>
                    <div class="col-lg-8 p-4">
                        <div id="info-pribadi">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <h4 class="mb-4" style="font-weight: bold;">Ubah Info Pribadi</h4>
                            <div class="d-flex mb-3 gap-3" style="display: flex; justify-content: center;">
                                <?php
                                if ($profil->foto != "") {
                                    echo '<img id="default-foto-ubah" alt="" src="' . base_url("assets/demo/img/customer/") . $profil->foto . '" class="bg-card-circle-akun" style="object-fit:cover;"/>';
                                } else {
                                    echo '<img id="default-foto-ubah" alt="" src="https://cdn-a.shopicial.com/img/noavatar.png" class="bg-card-circle-akun" style="object-fit:cover;"/>';
                                }
                                ?>

                                <div>
                                    <div class="mt-3 ms-3">

                                        <input type="file" id="fileInput" style="display: none;">


                                        <button class="btn btn-primary" type="button" id="ganti-foto-button">Ganti Foto Profil</button>
                                    </div>

                                    <div id="hapus-foto-button" class="mt-3 ms-4" style="color: red; cursor:pointer;">Hapus Foto Profil</div>
                                </div>
                            </div>
                            <form id="ubahCustomer">
                                <div class="mb-2 mt-1">
                                    <input type="text" class="form-control" name="id_customer" value="<?= $profil->id_customer ?>" hidden />
                                </div>
                                <div class="mb-2 mt-1">
                                    <label for="exampleInputEmail1" class="form-label">NAMA LENGKAP</label>
                                    <input type="text" class="form-control" name="nama_customer" value="<?= $profil->nama_customer ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email" value="<?= $profil->email ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">NOMOR TELEPON</label>
                                    <input type="text" class="form-control" name="no_wa" value="<?= $profil->no_wa ?>" />
                                </div>
                                <div class="mb-2">
                                    <label for="textarea" class="form-label">ALAMAT</label>
                                    <input type="text" class="form-control" name="alamat" value="<?= $profil->alamat ?>" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-100" type="button" id="btn-simpan" value="Simpan Perubahan" onclick="ubahCustomer()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div id="ganti-kata-sandi" style="display:none;">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <h4 class="mb-4" style="font-weight: bold;">Ubah Kata Sandi</h4>
                            <form id="ubahPasswordForm" action="" onsubmit="ubahPassword(event)">
                                <div class="mb-2 mt-1">
                                    <label for="pw_lama" class="form-label">KATA SANDI LAMA</label>
                                    <input type="password" class="form-control" name="pw_lama" />
                                </div>
                                <div class="mb-2">
                                    <label for="pw_baru" class="form-label">KATA SANDI BARU</label>
                                    <input type="password" class="form-control" name="pw_baru" />
                                </div>
                                <div class="mb-2">
                                    <label for="pw_baru_konfirmasi" class="form-label">ULANGI KATA SANDI BARU</label>
                                    <input type="password" class="form-control" name="pw_baru_konfirmasi" />
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-100" type="submit" id="button-addon2">Ubah</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal ubah profil -->
    <div class="modal fade" id="modalGantiFoto" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content px-3 py-2">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h5>Ubah Foto Profil</h5>
                        <form id="formGantiFoto">
                            <div class="form-group">
                                <label for="uploadFoto">Upload foto</label>
                                <input type="file" class="d-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    function gantiFoto() {
        var modal = new bootstrap.Modal(document.getElementById('modalGantiFoto'));

        $('#ubahProfil').modal('hide');
        modal.show();
    }

    document.getElementById('ganti-foto-button').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            // Display the selected image temporarily
            var reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('default-foto-ubah').src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    function ubahPassword(event) {
        event.preventDefault();
        let pwBaru = $('[name="pw_baru"]').val();
        let pwBaruKonfirmasi = $('[name="pw_baru_konfirmasi"]').val();

        if (pwBaru !== pwBaruKonfirmasi) {
            Swal.fire({
                title: 'Password baru tidak sama!',
                // text: data.Info,
                icon: 'error',
                confirmButtonText: 'OK'
            });
            return;
        }
        $.ajax({
            url: "<?php echo base_url() ?>api/ubahPasswordCustomer",
            type: "POST",
            data: $('#ubahPasswordForm :input').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response.Success) {
                    Swal.fire({
                        title: 'Success',
                        text: response.Info,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        // if (result.isConfirmed) {
                        $('#ubahProfil').modal('hide');
                        // }
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.Info,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Tampilkan SweetAlert dengan tipe error untuk semua respon error
                Swal.fire({
                    title: 'Error',
                    text: errorThrown,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    }

    document.getElementById('hapus-foto-button').addEventListener('click', function() {
        // Create a new file input element
        var newFileInput = document.createElement('input');
        newFileInput.type = 'file';
        newFileInput.id = 'fileInput';
        newFileInput.style.display = 'none';

        // Replace the existing file input with the new one
        var oldFileInput = document.getElementById('fileInput');
        oldFileInput.parentNode.replaceChild(newFileInput, oldFileInput);
        // Update the image source to default
        document.getElementById('default-foto-ubah').src = 'https://cdn-a.shopicial.com/img/noavatar.png';
    });

    function uploadFoto(file) {
        var formData = new FormData();
        formData.append('foto', file);

        $.ajax({
            url: "<?= base_url('api/uploadFotoCustomer') ?>",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {

                console.log('File uploaded successfully:', data);
                var responseData = JSON.parse(data);
                $('#default-foto-ubah').attr('src', '<?php echo base_url("assets/demo/img/customer/") ?>' + responseData.filename);
            },
            error: function(xhr, status, error) {
                console.error('Error uploading file:', error);
            }
        });
    }

    function hapusFoto() {
        $.ajax({
            url: "<?= base_url('api/hapusFotoCustomer') ?>", // Replace with the appropriate endpoint
            type: 'POST',
            success: function(response) {
                // Handle success response
                console.log('Profile picture deleted successfully:', response);
                // You may want to display a success message to the user here
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error deleting profile picture:', error);
                // You may want to display an error message to the user here
            }
        });
    }

    function hapusKeranjang(id_rumah, paket) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus keranjang?',
            showDenyButton: true,
            showCancelButton: false,
            showCloseButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: 'Tidak',
            customClass: {
                actions: 'my-actions',
                title: 'swal-hapus-title',
                confirmButton: 'order-1',
                confirmButtonColor: '#dc3545',
                denyButton: 'order-2',
            },
        }).then((result) => {
            if (result.isConfirmed) {
                var id_customer = Cookies.get('id_customer', {
                    domain: 'rumahtinggal.id'
                });
                $.ajax({
                    url: "<?= base_url('api/hapusKeranjang') ?>",
                    type: "POST",
                    data: {
                        'id_customer': id_customer,
                        'id_rumah': id_rumah,
                        'paket': paket,
                    },
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire({
                            title: response.Info,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            location.reload(); // Refresh the page
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Terjadi error. Mohon menunggu dan mencoba lagi.',
                            icon: 'error',
                            confirmButtonText: 'Ok',
                        });
                    }
                });
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })

    }



    function detailRumah(id) {
        location.href = "<?= base_url('detail_koleksi/') ?>" + id;
    }

    function unduhDokumen(id) {
        location.href = "<?= base_url('unduh_dokumen/') ?>" + id;
    }

    function invoice(id) {
        location.href = "<?= base_url('invoice/') ?>" + id;
    }
    $(document).ready(function() {
        var owlProfil = $(".owl-carousel-paket-desain");
        owlProfil.owlCarousel({
            items: 1,
            margin: 20,
            loop: false,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    dots: false,
                    nav: false,
                },
                576: {
                    items: 2,
                    nav: false,
                },
                768: {
                    items: 3,
                    nav: false,
                },
                992: {
                    items: 3,
                    nav: false,
                },
            },
        });
        $("#nextBtnPakdes").click(function() {
            owlProfil.trigger("next.owl.carousel");
        });
        $("#prevBtnPakdes").click(function() {
            owlProfil.trigger("prev.owl.carousel");
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan semua elemen tautan dengan kelas .nav-link-profil
        var navLinks = document.querySelectorAll('.nav-link-profil');

        // Menambahkan event listener untuk setiap tautan
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Menghapus kelas .active-link dari semua tautan
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove('active-link');
                });

                // Menambahkan kelas .active-link pada tautan yang ditekan
                this.classList.add('active-link');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('paketdesain-tab').click();

    });



    function showContent(contentId) {
        // Hide all content sections
        document.getElementById('info-pribadi').style.display = 'none';
        document.getElementById('ganti-kata-sandi').style.display = 'none';

        // Show the selected content section
        document.getElementById(contentId).style.display = 'block';
    }

    // Set the default content (profil) to be displayed on page load
    window.onload = function() {
        showContent('info-pribadi');
    };

    // Fungsi untuk menangani klik pada ikon
    $(document).ready(function() {
        // Fungsi untuk menangani klik pada ikon
        $("#dropdownIcon").click(function() {
            $("#dropdownMenu").toggle();
        });

        // Fungsi untuk menyembunyikan dropdown saat klik di luar dropdown
        $(document).mouseup(function(e) {
            var container = $("#dropdownMenu");
            var icon = $("#dropdownIcon");

            // Jika ikon ditekan dan dropdown tidak terbuka, maka buka dropdown
            if (icon.is(e.target) && !container.is(":visible")) {
                container.show();
            }
            // Jika ikon tidak ditekan dan klik di luar dropdown, maka sembunyikan dropdown
            else if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    });

    function logout() {
        window.location.href = "<?= base_url('logout') ?>";
    }

    function ubahCustomer() {
        $('#btn-simpan').val("Simpan...");

        var fileInput = document.getElementById('fileInput');
        var file = fileInput.files[0];
        var tempFoto = document.getElementById('default-foto-ubah').src;
        if (file) {
            // Perform the upload
            uploadFoto(file);
        } else if (tempFoto == 'https://cdn-a.shopicial.com/img/noavatar.png' && "<?php echo $profil->foto ?>" != '') {
            hapusFoto()
        } else {
            console.error('No file selected.');
        }

        $.ajax({
            url: "<?php echo base_url() ?>api/ubahCustomer",
            type: "POST",
            data: $('#ubahCustomer :input').serialize(),
            dataType: "JSON",
            success: function(data) {
                // Tampilkan SweetAlert dengan tipe success untuk semua respon
                Swal.fire({
                    title: 'Success',
                    text: data.Info,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    // Jika pengguna menekan OK, reload halaman
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Tampilkan SweetAlert dengan tipe error untuk semua respon error
                Swal.fire({
                    title: 'Success',
                    text: 'Data Berhasil Diperbarui',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Setelah menampilkan SweetAlert, reload halaman
                    location.reload();
                });
            }
        });
    }

    function ubah_profil_mobile() {
        let id_customer = Cookies.get('id_customer');
        location.href = "<?= base_url('ubah_profil_mobile/') ?>" + id_customer;
    }

    function isMobile() {

        var check = false;

        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);

        return check;

    };

    function tanyaDesain(paket, nama_rumah) {
        let text = `Halo Admin RumahTinggal.id,\nSaya telah melakukan pemesanan desain rumah *` + nama_rumah + `* untuk Paket ` + paket + `. Apakah saya bisa mendapatkan informasi lebih lanjut tentang desain dan paket tersebut?\nTerima kasih`;
        let phone = '628112636228';
        let message = encodeURIComponent(text);

        let api_wa;
        if (isMobile() == true) api_wa = "whatsapp://send";
        else api_wa = "https://api.whatsapp.com/send";
        let url = api_wa + '?phone=' + phone + '&text=' + message;
        window.open(url, '_blank');
    }
</script>