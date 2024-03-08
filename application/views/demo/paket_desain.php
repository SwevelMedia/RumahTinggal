</head>

<style>
    .bg-card-paket {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 210px;
        width: 280px;
    }

    .card-paket {
        border-color: lightgray;
        border-width: 1.5px;

    }

    .card-paket-rekomendasi {
        border-color: lightgray;
        border-width: 1.5px;
        background-color: #F0F6FF;

    }

    .card-img-top {
        position: relative;
        z-index: 1;
        transition: opacity 0.3s ease-in-out;
    }

    .bg-card-detail {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 300px;
        width: 400px;
    }

    .btn-detail {
        border-color: #003A65;
        /* Warna border tombol ketika normal */
        color: #003A65;
        /* Warna teks tombol ketika normal */
        padding: 5px;
    }

    /* Gaya untuk tombol ketika dihover */
    .btn-detail:hover {
        background-color: #fff;
        /* Warna latar belakang tombol ketika dihover */
        color: #003A65;
        /* Warna teks tombol ketika dihover */
        border-color: #003A65;
    }


    #frm-ulasan #rating-ability-wrapper .btnrating {

        border: 0;

        background: #fff;

        padding: 0 5px;

    }



    #frm-ulasan #rating-ability-wrapper .btnrating.btn-warning i {
        color: #ffe300 !important;
    }



    #frm-ulasan #rating-ability-wrapper .fa-star {

        color: #d7d7d7;

        font-size: 25px;

        padding-top: 5px;

    }
</style>

<body class="bg-light">
    <div class="d-lg-none">
        <div style="background-image: url('<?= base_url('assets/img/konsep/' . $konsep->foto) ?>')" class="card-img-top bg-card-detail">
        </div>
        <div class="p-3">
            <h5><?= $nama_rumah ?></h5>
            <small>Didesain oleh <?= $konsep->nama_arsitek ?></small>
            <div class="paket-pembelian mt-3">
                <div class="rounded-3 card card-body card-paket">
                    <h5 class="semibold mt-2">Paket Gratis</h5>
                    <small style="text-align:justify;">Dapatkan laporan desain rumah ini GRATIS! Laporan desain berisi gambar 3D eksterior, denah, tampak bangunan, dan spesifikasi material.</small>
                    <div class="mt-3"><b>Yang Akan Anda Dapatkan</b></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Laporan Desain</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="laporanDesain()">
                    </div>
                    <hr />
                    <h5 class="semibold mt-1"> Rp 0</h5>
                    <a href="javascript:void(0)" class="btn btn-success w-100 mt-3" id="unduhSekarangMob">
                        <i class="fas fa-download me-2 ms-2"></i> Unduh Sekarang
                    </a>
                    <!-- <button type="button" class="btn btn-success w-100">
                        <i class="fas fa-download me-2 ms-2" id="unduhSekarangMob"></i> Unduh Sekarang
                    </button> -->
                </div>
                <div class="rounded-3 card card-body card-paket mt-4">
                    <h5 class="semibold">Paket 1</h5>
                    <small style="text-align:justify;">Produk paket 1 berupa laporan desain rumah dan gambar skematik (denah, tampak, potongan) untuk panduan tukang dalam membangun.</small>
                    <div class="mt-3"><b>Yang Akan Anda Dapatkan</b></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Laporan Desain</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="laporanDesain()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Gambar Skematik</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="gambarSkematik()">
                    </div>
                    <hr />
                    <small class="mt-3" style="color:grey; font-weight: normal;"><s>Rp<?= $harga_p1 ?></s></small>
                    <h5 class="semibold"> Rp<?= $harga_promo_p1 ?></h5>
                    <button type="button" class="btn btn-outline-primary w-100 mt-1" onclick="checkoutPaket(1,<?= $id_rumah ?>)">
                        <i class="fa-solid fa-cart-shopping  me-2 ms-3"></i> Beli Sekarang
                    </button>
                </div>
                <div class="rounded-3 card card-body card-paket-rekomendasi mt-4">
                    <h5 class="semibold">Paket 2</h5>
                    <small style="text-align:justify;">Produk paket 2 berupa laporan desain, gambar skematik, dan gambar kerja yang terdiri dari gambar struktur, arsitektur, instalasi air dan listrik.</small>
                    <div class="mt-3"><b>Yang Akan Anda Dapatkan</b></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Laporan Desain</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="laporanDesain()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Gambar Skematik</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="gambarSkematik()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Gambar Kerja</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="gambarKerja()">
                    </div>
                    <hr />
                    <small class="mt-3" style="color:grey; font-weight: normal;"><s>Rp<?= $harga_p2 ?></s></small>
                    <h5 class="semibold">Rp <?= $harga_p2 ?></h5>
                    <button type="button" class="btn btn-primary w-100 mt-1" onclick="checkoutPaket(2,<?= $id_rumah ?>)">
                        <i class="fa-solid fa-cart-shopping  me-2 ms-3"></i> Beli Sekarang
                    </button>
                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                        <div class="badge bg-primary" style="font-size:12px;"> <img src="<?php echo base_url('assets/demo/img/checklist-bg.png'); ?>">
                            Rekomendasi
                        </div>
                    </div>
                </div>
                <div class="rounded-3 card card-body card-paket mt-4">
                    <h5 class="semibold">Paket 3</h5>
                    <small style="text-align:justify;">Produk paket 3 ini seperti paket 2 dengan tambahan produk Rencana Anggaran Biaya (RAB) dan Rencana Kerja dan Syarat (RKS) yang terperinci.</small>
                    <div class="mt-3"><b>Yang Akan Anda Dapatkan</b></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Laporan Desain</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="laporanDesain()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Gambar Skematik</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="gambarSkematik()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Gambar Kerja</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="gambarKerja()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Rancangan Anggaran Biaya</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="rancanganAnggaran()">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
                        <img src="<?php echo base_url('assets/demo/img/check.png'); ?>" width="20" height="20">
                        <small>Rancangan Kerja dan Syarat</small>
                        <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" onclick="rancanganKerja()">
                    </div>
                    <hr />
                    <small class="mt-3" style="color:grey; font-weight: normal;"><s>Rp<?= $harga_p3 ?></s></small>
                    <h5 class="semibold"> Rp<?= $harga_promo_p3 ?></h5>
                    <button type="button" class="btn btn-outline-primary w-100 mt-1" onclick="checkoutPaket(3,<?= $id_rumah ?>)">
                        <i class="fa-solid fa-cart-shopping  me-2 ms-3"></i> Beli Sekarang
                    </button>

                </div>
            </div>
        </div>

    </div>
    <div class="py-5 d-none d-lg-block container">
        <table class="table table-bordered table-striped px-5" style="background-color: white;">
            <thead>
                <tr>
                    <th width="100%" class="mt-2" style="display: flex; flex-direction: column; align-items: center;">
                        <div style="background-image: url('<?= base_url('assets/img/konsep/' . $konsep->foto) ?>'); width:100%; height:240px; background-position:top; background-size:cover;" class="img-fluid bg-card-paket"></div>
                        <h4 class="p-2" id="nama_rumah"><?= $nama_rumah ?></h4>
                    </th>
                    <th width="18%">
                        <div class="rounded-3 card card-body card-paket" style="height: 290px;">
                            <h5 class="semibold mt-3">Paket Gratis</h5>
                            <div style="font-size: 11px; color:grey; font-weight: normal; text-align: justify;" class="mb-1">Dapatkan laporan desain rumah ini GRATIS! Laporan desain berisi gambar 3D eksterior, denah, tampak bangunan, dan spesifikasi material.</div>
                            <h5 class="semibold mt-4"> Rp 0</h5>
                            <a href="javascript:void(0)" class="btn btn-success w-100 mt-3 text-start" id="unduhSekarang" style="font-size: 11px; font-weight: 600">
                                <i class="fas fa-download me-2 ms-2"></i> Unduh Sekarang
                            </a>
                        </div>
                    </th>
                    <th width="18%">
                        <div class="rounded-3 card card-body card-paket" style="height: 290px;">
                            <h5 class="semibold mt-3">Paket 1</h5>
                            <div style="font-size: 11px; color:grey; font-weight: normal; text-align: justify;">Produk paket 1 berupa laporan desain rumah dan gambar skematik (denah, tampak, potongan) untuk panduan tukang dalam membangun.</div>
                            <small class="mt-2" style="color:grey; font-weight: normal;"><s>Rp<?= $harga_p1 ?></s></small>
                            <h5 class="semibold">Rp<?= $harga_promo_p1 ?></h5>
                            <button type="button" class="btn btn-outline-primary w-100 mt-3 text-start" onclick="checkoutPaket(1,<?= $id_rumah ?>)" style="font-size: 11px; font-weight: 600" onclick="openProsesBayar()">
                                <i class=" fa-solid fa-cart-shopping me-2 ms-3"></i> Beli Sekarang
                            </button>
                        </div>
                    </th>
                    <th width="18%">
                        <div class="rounded-3 card card-body card-paket-rekomendasi" style="height: 290px;">
                            <h5 class="semibold mt-3">Paket 2</h5>
                            <div style="font-size: 11px; color:grey; font-weight: normal; text-align: justify;">Produk paket 2 berupa laporan desain, gambar skematik, dan gambar kerja yang terdiri dari gambar struktur, arsitektur, instalasi air dan listrik.</div>
                            <small class="mt-2" style="color:grey; font-weight: normal;"><s>Rp<?= $harga_p2 ?></s></small>
                            <h5 class="semibold"> Rp<?= $harga_promo_p2 ?></h5>
                            <button type="button" class="btn btn-primary w-100 mt-3 text-start" onclick="checkoutPaket(2,<?= $id_rumah ?>)" style="font-size: 11px; font-weight: 600" onclick="openProsesBayar()">
                                <i class="fa-solid fa-cart-shopping  me-2 ms-3"></i> Beli Sekarang
                            </button>
                            <div class="position-absolute top-0 end-0 me-1 mt-1">
                                <small class="badge bg-primary" style="font-size: 10px; font-weight: normal;"> <img src="<?php echo base_url('assets/demo/img/checklist-bg.png'); ?>" width="12" height="12">
                                    Rekomendasi
                                </small>
                            </div>
                        </div>
                    </th>
                    <th width="18%">
                        <div class="rounded-3 card card-body card-paket" style="height: 290px;">
                            <h5 class="semibold mt-3">Paket 3</h5>
                            <div style="font-size: 11px; color:grey; font-weight: normal;text-align: justify;">Produk paket 3 ini seperti paket 2 dengan tambahan produk Rencana Anggaran Biaya (RAB) dan Rencana Kerja dan Syarat (RKS) yang terperinci.</div>
                            <small class="mt-2" style="color:grey; font-weight: normal;"><s>Rp<?= $harga_p3 ?></s></small>
                            <h5 class="semibold"> Rp<?= $harga_promo_p3 ?></h5>
                            <button type="button" class="btn btn-outline-primary w-100 mt-3 text-start" onclick="checkoutPaket(3,<?= $id_rumah ?>)" style="font-size: 11px; font-weight: 600" onclick="openProsesBayar()">
                                <i class="fa-solid fa-cart-shopping me-2 ms-3"></i> Beli Sekarang
                            </button>
                        </div>
                    </th>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="vertical-align: middle;">Laporan Desain
                        <button type="button" class="btn btn-detail btn-sm" style="margin-left: 110px;" onclick="laporanDesain()">Detail</button>
                    </td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">Gambar Skematik
                        <button type="button" class="btn btn-detail btn-sm" style="margin-left: 94px;" onclick="gambarSkematik()">Detail</button>
                    </td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">Gambar Kerja
                        <button type="button" class="btn btn-detail btn-sm" style="margin-left: 125px;" onclick="gambarKerja()">Detail</button>
                    </td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">Rancangan Anggaran Biaya
                        <button type="button" class="btn btn-detail btn-sm" style="margin-left: 20px;" onclick="rancanganAnggaran()">Detail</button>
                    </td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">Rancangan Kerja dan Syarat
                        <button type="button" class="btn btn-detail btn-sm ms-3" onclick="rancanganKerja()">Detail </button>
                    </td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: red;"><i class="fas fa-times fa-2x"></i></td>
                    <td style="text-align: center; vertical-align: middle; color: green;"><i class="fa-solid fa-check fa-2x"></i></td>
                </tr>
                <!-- Tambahkan baris lain jika diperlukan -->
            </tbody>
        </table>
    </div>
    <div class="bg-white card card-body container">
        <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-2 px-3">
            <h5 class="fw-semibold text-center">Penawaran Jasa Lainnya</h5>
            <div class="d-none d-lg-block">
                <a class="btn btn-primary me-3 mt-2">Hubungi Kami</a>
            </div>
        </div>
        <div class="px-3">Kami juga melayani jasa-jasa yang memudahkan Anda untuk membangun Rumah Idaman.</div>
        <div class="row justify-content-center pt-3">
            <div class="col-12 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/demo/img/modif-desain.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-8">
                                <h5>Modifikasi Desain</h5>
                                <button type="button" class="btn btn-outline-light w-50 ">detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/demo/img/desain-interior.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-8">
                                <h5>Desain Interior</h5>
                                <button type="button" class="btn btn-outline-light w-50">detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/demo/img/pengujian-struktur.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-8">
                                <h5>Perhitungan Struktur</h5>
                                <button type="button" class="btn btn-outline-light w-50">detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/demo/img/imb.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-8">
                                <h5> Gambar Pengajuan IMB</h5>
                                <button type="button" class="btn btn-outline-light w-50">detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/demo/img/lahan.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-8">
                                <h5>Jasa Pengukuran Lahan</h5>
                                <button type="button" class="btn btn-outline-light w-50">detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="<?php echo base_url('assets/demo/img/tanah.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-8">
                                <h5>Jasa Pengujian Tanah</h5>
                                <button type="button" class="btn btn-outline-light w-50">detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal proses pembayaran -->
    <div class="modal fade" id="modalProsesBayar" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h4 class="p-2 text-center mt-3"> <b>Paket Anda sedang diproses</b></h4>
                <div class="p-3 ms-2">
                    <p id="nama-pembeli"></p>
                    <p>Paket yang Anda pilih secepatnya akan kami proses. Sambil menunggu, Anda dapat melakukan pembelian terlebih dahulu. Apakah Anda bersedia menunggu proses tersebut?</p>
                    <p id="batas-waktu"></p>
                </div>
                <div class="d-flex justify-content-center align-items-center mx-auto gap-3 mt-2 mb-3">
                    <button type="button" class="btn btn-outline-primary" onclick="tanyaDesain()">Tanya Admin</button>
                    <button type="button" class="btn btn-danger" id="lanjutOrder">Bayar Sekarang</button>
                    <!-- <button type="button" class="btn btn-primary" onclick="openTungguBayar()">Lanjut</button> -->
                </div>
                <div class="p-3">
                    <div class="bg-light">
                        <div class="row">
                            <div class="col-lg-5 col-5 px-3 py-4">
                                <div class="bg-white card card-body">
                                    <div>
                                        <img id="foto-rumah" src="" class="img-fluid">
                                        <h5 class="semibold text-center mt-2 d-none d-lg-block" id="harga-desain"></h5>
                                        <div class="semibold text-center mt-2 d-lg-none" id="harga-desain1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-7">
                                <!-- <h5 class="semibold mt-4">#123456789</h5> -->
                                <!-- <small id="tgl_beli"></small> -->
                                <div style="margin-top: 100px;">
                                    <h4 class="semibold mt-5" id="nama-rumah"></h4>
                                    <div id="nama-arsitek"></div>
                                    <div class="border border-dark rounded-3 card card-body mt-3 py-1 mb-2" style="width: fit-content;">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="20" height="20">
                                            <div id="jenis-paket"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- modal tunggu pembayaran -->
    <div class="modal fade" id="modalTungguBayar" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h4 class="p-2 text-center mt-3"> <b>Menunggu Pembayaran</b></h4>
                <div class="p-3 ms-2">
                    <p id="nama-pembeli"></p>
                    <p>Bayar sebelum pesanan Anda dibatalkan. Pesanan Anda akan dibatalkan pada 20 September pukul 10.17 WIB. Untuk mendapatkan produk desain Anda, mohon bayar segera.</p>
                    <p id="batas-pembayaran"></p>
                </div>
                <div class="d-flex justify-content-center align-items-center mx-auto gap-3 mt-2 mb-3">
                    <button type="button" class="btn btn-danger">Bayar Sekarang</button>

                </div>
                <div class="p-3">
                    <div class="bg-light">
                        <div class="row">
                            <div class="col-lg-5 col-5 px-3 py-4">
                                <div class="bg-white card card-body">
                                    <div>
                                        <img src="<?php echo base_url('assets/demo/img/dismage.png'); ?>" class="img-fluid">
                                        <h5 class="semibold text-center mt-2 d-none d-lg-block"> Rp 2.199.000</h5>
                                        <div class="semibold text-center mt-2 d-lg-none"> Rp 2.199.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-7">
                                <h5 class="semibold mt-4">#123456789</h5>
                                <small>30 Agustus 2023</small>
                                <h4 class="semibold mt-5"> Rumah Griya Idaman</h4>
                                <small>By Beecons</small>
                                <div class="border border-dark rounded-3 card card-body mt-2 py-1" style="width: fit-content;">
                                    <div class="d-flex gap-2 align-items-center">
                                        <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="20" height="20">
                                        <div class="jenis-paket"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- modal Order -->
    <div class="modal fade" id="modalOrder" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="notifikasiPO" style="background: #026CB6;border-radius: 0;padding: 11px 15px;">

                    <h5 class="modal-title bold" style="color: #fff;">Paket desain dalam proses pembuatan, Anda setuju untuk menunggu ? <button style="margin: auto; display: block;" id="setujuPO" class="btn btn-danger btn-purchase mt-2">Ya, Saya setuju</button></h5>

                </div>
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="p-2 text-center mt-2"> <b>Daftar Order</b></h5>
                <div class="p-2">
                    <table class="subtotal" style="width:100%">

                        <tr>

                            <td style="width:50%">Sub Total <span class="pros-hemat"></span></td>

                            <td style="width:50%;text-align:right;"> Rp <span type="text" id="sub-total"><?= $harga ?></span></td>

                        </tr>

                        <tr>

                            <td style="width:50%">PPN 11%</td>

                            <td style="width:50%;text-align:right;"> Rp <span id="ppn"><?= $ppn ?></span></td>

                        </tr>
                        <tr class="total">

                            <td style="width:50%">Total</td>

                            <td style="width:50%;text-align:right;">Rp <span type="text" id="total"><?= $total ?></span></td>

                        </tr>

                    </table>
                    <div class="mt-3"><strong> Alamat Pengiriman</strong></div>
                    <textarea type="text" id="alamat_pengiriman" style="width: 480px; margin-top:10px;"></textarea>


                    <div class="terms">

                        <!-- <div>*)</div> -->

                        <div style="width: 100%; margin-top:10px;font-size:small;">

                            <sup>*)</sup> Dengan ini Anda menyetujui semua <a href="<?= base_url('kebijakan_privasi') ?>" style="color: #026CB6;">kebijakan privasi</a> dan <a href="<?= base_url('syarat_ketentuan') ?>" style="color: #026CB6;">ketentuan penggunaan</a> yang berlaku

                        </div>

                    </div>
                    <button style="margin: auto; display: block;" class="btn btn-primary btn-purchase mt-2" id="lanjutBayar">Lanjutkan Pembayaran</button>
                    <!-- <div class="promo">

                        <div class="input-group">

                            <input type="text" class="form-control" id="kode_promo" placeholder="Memiliki kode promo?">

                            <div class="input-group-append">

                                <button class="btn" id="btn-kode-promo" onclick="cekPromo()"><i class="fa fa-gift"></i>Gunakan</button>

                            </div>

                        </div>

                        <span id="diskon_promo_persen" hidden>0</span>

                        <span id="pros_diskon" hidden>0</span>

                    </div> -->


                </div>



            </div>
        </div>
    </div>

    <!-- modal laporan desain -->
    <div class="modal fade" id="modalLaporanDesain" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="d-lg-none ms-3"> Laporan Desain</h5>
                <div class="row mt-2 p-2">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <h5 class="d-none d-lg-block ms-1"><b>Laporan Desain</b></h5>
                        <p class="mt-1 mx-1" style="text-align: justify;">Laporan desain sebagai gambaran berisi konsep desain rumah, gambar 3D eksterior, denah, tampak bangunan,dan spesifikasi material. Dokumen ini akan memberikan gambaran menyeluruh terkait desain setiap rumah.</p>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1 text-center">
                        <video style="width:90%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>

                            <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div class="modal-footer">

                    <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Rencana Kerja dan Syarat.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>

                </div>
            </div>
        </div>
    </div>
    <!-- modal gambar skematik -->
    <div class="modal fade" id="modalGambarSkematik" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="d-lg-none ms-3"> Gambar Skematik</h5>
                <div class="row mt-2 p-2">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <h5 class="d-none d-lg-block ms-1 "><b>Gambar Skematik</b></h5>
                        <p class="mx-1 mt-1" style="text-align: justify;">Gambar skematik ini merupakan gambar desain yang terukur, berupa denah, tampak, dan potongan bangunan. Gambar ini sebagai syarat minimal untuk panduan tukang dalam membangun.</p>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1 text-center">
                        <video style="width:90%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>

                            <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div class="modal-footer">

                    <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Gambar Skematik.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>

                </div>
            </div>
        </div>
    </div>
    <!-- modal gambar kerja -->
    <div class="modal fade" id="modalGambarKerja" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="d-lg-none ms-3"> Gambar Kerja</h5>
                <div class="row mt-2 p-2">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <h5 class="d-none d-lg-block ms-1"><b>Gambar Kerja</b></h5>
                        <p class="mx-1 mt-1" style="text-align: justify;">Gambar kerja yang detail sangat diperlukan untuk kemudahan tukang dalam membangun. Gambar kerja ini sangat lengkap dan detail mulai dari gambar struktur, arsitektur, instalasi air dan listrik.</p>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1 text-center">
                        <video style="width:90%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>

                            <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div class="modal-footer">

                    <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Gambar Kerja.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>

                </div>
            </div>
        </div>
    </div>
    <!-- modak RAB -->
    <div class="modal fade" id="modalRAB" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="d-lg-none ms-3"> Rancangan Aanggaran Biaya</h5>
                <div class="row mt-2 p-2">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <h5 class="d-none d-lg-block ms-1"><b>Rancangan Anggaran Biaya</b></h5>
                        <p class="mx-1 mt-1" style="text-align: justify;">Agar proses pembangunan lebih terarah diperlukan juga Rencana Anggaran Biaya (RAB) yaitu dokumen yang memberikan: 1. rincian biaya pembangunan tiap tahap pekerjaan konstruksi; 2. harga material, upah, dan alat; 3. hingga rincian kebutuhan material, jumlah tukang, dan jumalh alat.</p>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1 text-center">
                        <video style="width:90%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>

                            <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div class="modal-footer">

                    <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Rencana Anggaran Biaya.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>

                </div>
            </div>
        </div>
    </div>
    <!-- modal RKS -->
    <div class="modal fade" id="modalRKS" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="text-end">
                    <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="d-lg-none ms-3"> Rancangan Kerja dan Syarat</h5>
                <div class="row mt-2 p-2">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <h5 class="d-none d-lg-block ms-1"><b>Rancangan Kerja dan Syarat</b></h5>
                        <p class="mx-1 mt-1" style="text-align: justify;">Sebagai pelengkap dokumen, Rencana Kerja dan Syarat diperlukan agar diketahui spesifikasi dan merk material apa yang digunakan serta bagaimana syarat pengaplikasiannya.</p>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1 text-center">
                        <video style="width:90%" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" controls>

                            <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4">

                        </video>
                    </div>
                </div>
                <div class="modal-footer">

                    <embed type="application/pdf" src="https://rumahtinggal.id/assets/dokumen/sampel/Rencana Kerja dan Syarat.pdf#toolbar=0&statusbar=0&navpanes=0&zoom=Fit" style="width:100%;height:325px;pointer-events: none"></embed>

                </div>
            </div>
        </div>
    </div>

    <!-- modalLengkapiProfil -->
    <div class="modal fade" id="modalLengkapiProfil" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h3 class="modal-title" id="staticBackdropLabel">Lengkapi Profil</h3>

                </div>

                <div class="modal-body">

                    <h5 class="mb-3">Silakan lengkapi profil sebelum checkout</h5>

                    <form id="ubahCustomer">

                        <input type="hidden" name="id_customer" id="id_lengkapi_profil">

                        <input type="hidden" name="nama_customer" id="">

                        <div class="form-group">

                            <label for="exampleFormControlInput1">No. Telepon</label>

                            <input type="number" class="form-control" id="no_telp" name="no_wa" placeholder="0821xxx" required>

                        </div>

                        <div class="form-group">

                            <label for="exampleFormControlTextarea1">Alamat</label>

                            <textarea class="form-control" id="alamat_profil" name="alamat" rows="3" required></textarea>

                        </div>

                    </form>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" id="lengkapiProfil">Simpan</button>

                </div>

            </div>

        </div>

    </div>


    <!-- modal ulasan -->
    <div class="modal fade" id="modalTulisUlasan" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content" style="border-radius: 0;border: none;">

                <div class="modal-body">
                    <div class=" d-flex justify-content-between">
                        <h5 class="mt-2">Tulis Ulasan dan Unduh Gratis</h5>
                        <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="frm-ulasan">

                        <div class="form-group" id="rating-ability-wrapper" style="text-align: center;">

                            <label class="control-label" for="rating" style="display: none;">

                                <span class="field-label-info"></span>

                                <input type="hidden" id="selected_rating" name="rating" value="5" required="required">

                            </label>
                            <h1 class="bold rating-header">

                                <span class="selected-rating">5</span>

                                <span style="font-size: 22px;"> / 5</span>

                            </h1>

                            <button type="button" class="btnrating btn-warning btn-default" data-attr="1" id="rating-star-1">

                                <i class="fa-solid fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warning btn-default" data-attr="2" id="rating-star-2">

                                <i class="fa-solid fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warning btn-default" data-attr="3" id="rating-star-3">

                                <i class="fa-solid fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warning btn-default" data-attr="4" id="rating-star-4">

                                <i class="fa-solid fa-star" aria-hidden="true"></i>

                            </button>

                            <button type="button" class="btnrating btn-warning btn-default" data-attr="5" id="rating-star-5">

                                <i class="fa-solid fa-star" aria-hidden="true"></i>

                            </button>

                        </div>

                        <textarea class="form-control mt-2" id="ulasan" name="ulasan" placeholder="Tulis ulasan" style="border: 0;color: #000;font-weight: 300;" rows="3"></textarea>

                    </form>

                    <button class="btn btn-primary mt-2" onclick="simpanUlasan()">Kirim Ulasan</button>



                </div>

            </div>

        </div>

    </div>

    <!-- modal download PDF -->
    <div class="modal fade" id="modalDownloadPDF" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content" style="border-radius: 0;border: none;">

                <div class="modal-body">
                    <div class="justify-content-center text-center">
                        <h5>Download File Anda di sini</h5>
                        <button class="btn btn-primary mt-2" id="downloadPDF">Unduh PDF </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- modal Subscribe -->
    <div class="modal fade modal-subscribe" id="ModalSubscribe" tabindex="-1" role="dialog">

        <div class="modal-dialog">

            <div class="modal-content">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                <div class="modal-body">

                    <div class="icon"><img src="<?= base_url('assets/img/icon-subscribe.png') ?>" style="margin-top: -24px;margin-left: -16px;" width="90%"></div>

                    <h3 class="title">Ikuti Pemberitahuan</h3>

                    <p class="description">Tetap terhubung dengan kami untuk mendapatkan informasi fitur terbaru dan pembaharuan sistem serta penawaran program peningkatan keahlian</p>

                    <div style="margin-bottom: 20px;">

                        <input type="text" class="form-control" id="nama_subscribe" placeholder="Masukkan Nama Lengkap">

                        <input type="text" class="form-control" id="no_wa_subscribe" placeholder="Masukkan Nomor WhatsApp">

                    </div>

                    <center><button class="btn btn-default subscribe" onclick="kirimSubscribe()"><i class="fa fa-paper-plane"></i>Kirim</button></center>



                    <!-- <div class="input-group">

                    <input type="text" class="form-control" id="no_wa_subscribe" placeholder="Masukkan Nomor WhatsApp">

                    <span class="input-group-btn">

                        <button class="btn btn-default subscribe" onclick="kirimSubscribe($('#no_wa_subscribe').val())"><i class="fa fa-paper-plane"></i>Kirim</button>

                    </span>

                </div> -->

                </div>

            </div>

        </div>

    </div>
</body>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Z66zrsGIhMPv1S9K"></script>

<script>
    function openProsesBayar() {
        var modal = new bootstrap.Modal(document.getElementById('modalProsesBayar'));
        modal.show();
    }

    $("#setujuPO").click(function() {

        $("#notifikasiPO").hide();

        $("#disable-modal-pembelian").hide();

    });

    function openTungguBayar() {
        // Menutup modal proses bayar
        $('#modalProsesBayar').modal('hide');

        // Membuka modal tunggu bayar
        $('#modalTungguBayar').modal('show');
    }

    function laporanDesain() {
        var modal = new bootstrap.Modal(document.getElementById('modalLaporanDesain'));
        modal.show();
    }

    function rancanganKerja() {
        var modal = new bootstrap.Modal(document.getElementById('modalRKS'));
        modal.show();
    }

    function rancanganAnggaran() {
        var modal = new bootstrap.Modal(document.getElementById('modalRAB'));
        modal.show();
    }

    function gambarKerja() {
        var modal = new bootstrap.Modal(document.getElementById('modalGambarKerja'));
        modal.show();
    }

    function gambarSkematik() {
        var modal = new bootstrap.Modal(document.getElementById('modalGambarSkematik'));
        modal.show();
    }

    $(".btnrating").on('click', function(e) {
        var previous_value = $("#selected_rating").val();
        var selected_value = $(this).attr("data-attr");

        $("#selected_rating").val(selected_value);

        $(".selected-rating").empty().html(selected_value);

        // Hapus kelas warna abu-abu sebelumnya
        $(".btnrating").removeClass('btn-secondary');

        for (i = 1; i <= 5; ++i) {
            $("#rating-star-" + i).removeClass('btn-warning');

            if (i <= selected_value) {
                $("#rating-star-" + i).addClass('btn-warning');
            }
        }

        // Ubah warna ikon bintang setelah ditekan menjadi kuning (emas)
        $(".btnrating.btn-warning i").css("color", "gold");

        // Hapus kelas warna abu-abu pada bintang yang tidak dipilih
        for (ix = 1; ix <= previous_value; ++ix) {
            if (ix > selected_value) {
                $("#rating-star-" + ix).addClass('btn-secondary');
            }
        }

        console.log("Rating Selected:", selected_value);
    });


    $(document).ready(function() {
        //     // $("#unduhSekarang").click(function() {
        //     //     var id_rumah = <?= $id_rumah ?>;
        //     //     var id_customer = Cookies.get('id_customer', {
        //     //         domain: 'rumahtinggal.id'
        //     //     });

        //     //     // Langsung arahkan pengguna ke URL dokumen
        //     //     window.location.href = "<?php echo base_url('api/getDokumenRumahGratis/') ?>" + id_rumah;
        //     // });

        $("#unduhSekarang").click(function() {

            var id_rumah = <?= $id_rumah ?>;

            var id_customer = Cookies.get('id_customer', {

                domain: 'rumahtinggal.id'

            });



            $.ajax({

                url: "<?php echo base_url('api/getIsDownloadDokumen/') ?>" + id_customer + "/" + id_rumah,

                type: "POST",

                dataType: "JSON",

                success: function(data) {

                    if (data != null) {

                        window.location.href = "<?php echo base_url('profil/') ?>" + id_customer;

                    } else if (data == null) {

                        $.ajax({

                            url: "<?php echo base_url('api/getCountDownloadDokumen/') ?>" + id_customer,

                            type: "POST",

                            dataType: "JSON",

                            success: function(data) {

                                if (data == 3) {

                                    swal.fire({
                                        title: 'Peringatan',
                                        text: 'Anda telah mencapai batas download',
                                        icon: 'error',
                                        button: 'OK',
                                    });

                                    // $("#modalMaxDownload").modal('show');

                                } else if (data != 3) {

                                    $.ajax({

                                        url: "<?php echo base_url('api/getDokumenRumahGratis/') ?>" + id_rumah,

                                        type: "POST",

                                        dataType: "JSON",

                                        success: function(data) {

                                            if (data != null) {

                                                $("#modalTulisUlasan").modal('show');

                                            } else if (data == null) {

                                                $("#modalNotifikasiDownload").modal('show');

                                            }

                                        },

                                        error: function(jqHR, texStatus, errorThrown) {}

                                    });

                                }

                            },

                            error: function(jqHR, texStatus, errorThrown) {}

                        });



                    }

                },

                error: function(jqHR, texStatus, errorThrown) {}

            });





        });

    });

    $(document).ready(function() {
        $("#unduhSekarangMob").click(function() {

            var id_rumah = <?= $id_rumah ?>;

            var id_customer = Cookies.get('id_customer', {

                domain: 'rumahtinggal.id'

            });



            $.ajax({

                url: "<?php echo base_url('api/getIsDownloadDokumen/') ?>" + id_customer + "/" + id_rumah,

                type: "POST",

                dataType: "JSON",

                success: function(data) {

                    if (data != null) {

                        window.location.href = "<?php echo base_url('profil/') ?>" + id_customer;

                    } else if (data == null) {

                        $.ajax({

                            url: "<?php echo base_url('api/getCountDownloadDokumen/') ?>" + id_customer,

                            type: "POST",

                            dataType: "JSON",

                            success: function(data) {

                                if (data == 3) {

                                    swal.fire({
                                        title: 'Peringatan',
                                        text: 'Anda telah mencapai batas download',
                                        icon: 'error',
                                        button: 'OK',
                                    });

                                    // $("#modalMaxDownload").modal('show');

                                } else if (data != 3) {

                                    $.ajax({

                                        url: "<?php echo base_url('api/getDokumenRumahGratis/') ?>" + id_rumah,

                                        type: "POST",

                                        dataType: "JSON",

                                        success: function(data) {

                                            if (data != null) {

                                                $("#modalTulisUlasan").modal('show');

                                            } else if (data == null) {

                                                $("#modalNotifikasiDownload").modal('show');

                                            }

                                        },

                                        error: function(jqHR, texStatus, errorThrown) {}

                                    });

                                }

                            },

                            error: function(jqHR, texStatus, errorThrown) {}

                        });



                    }

                },

                error: function(jqHR, texStatus, errorThrown) {}

            });





        });

    });

    function simpanUlasan() {

        var id_customer = Cookies.get('id_customer', {

            domain: 'rumahtinggal.id'

        });

        var id_rumah = <?= $id_rumah ?>;

        var rating = $('#selected_rating').val();

        var ulasan = $('#ulasan').val();


        $.ajax({

            url: "<?php echo base_url('api/getUlasanCustomer/') ?>" + id_rumah + "/" + id_customer,

            type: "POST",

            dataType: "JSON",

            success: function(data) {

                if (data == null) {

                    $.ajax({

                        url: "<?php echo base_url('api/simpanUlasan') ?>",

                        type: "POST",

                        data: {

                            "rating": rating,

                            "ulasan": ulasan,

                            "id_rumah": id_rumah,

                            "id_customer": id_customer

                        },

                        dataType: "JSON",

                        success: function(data) {

                            $('#modalTulisUlasan').modal('hide');
                            $('#modalDownloadPDF').modal('show');
                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                } else if (data != null) {

                    $.ajax({
                        url: "<?php echo base_url('api/ubahUlasan') ?>",
                        type: "POST",
                        data: {
                            "rating": rating,
                            "ulasan": ulasan,
                            "id_rumah": id_rumah,
                            "id_customer": id_customer
                        },
                        dataType: "JSON",
                        success: function(data) {

                            $('#modalTulisUlasan').modal('hide');
                            $('#modalDownloadPDF').modal('show');


                        },

                        error: function(jqHR, texStatus, errorThrown) {}

                    });

                }

            },

            error: function(jqHR, texStatus, errorThrown) {}

        });

    }

    $("#downloadPDF").click(function() {

        //function downloadPDF(){



        //var a = $("<a />");

        //$("#downloadPDF a").attr("href", "<?= base_url('assets/dokumen/dokumen_gratis/') . $laporan_desain->laporan_desain ?>");

        //$("#downloadPDF a").attr("download", "<?= $nama_rumah ?>");

        // $("#downloadPDF").append(a);





        var id_customer = Cookies.get('id_customer', {

            domain: 'rumahtinggal.id'

        });

        var id_rumah = <?= $id_rumah ?>;
        var download = 1;

        var timestamp = Math.floor(Date.now() / 1000);

        // Menggunakan timestamp sebagai bagian dari nomor invoice
        var no_invoice = timestamp + "_123";


        console.log("Nilai download:", download);
        $.ajax({

            url: "<?php echo base_url('api/simpanDataDownload/') ?>" + id_rumah + "/" + id_customer,

            type: "POST",

            data: {

                "download": download,

                "id_rumah": id_rumah,

                "id_customer": id_customer

            },

            dataType: "JSON",

            success: function(data) {

                $.ajax({

                    url: "<?php echo base_url() ?>api/simpanPembelianGratis",

                    cache: false,

                    type: "POST",

                    data: {

                        "no_invoice": no_invoice,

                        "id_rumah": id_rumah,

                        "id_customer": id_customer,

                        "alamat": "Online",

                        "harga": 0,

                        "diskon": 0

                    },

                    dataType: "JSON",

                    success: function(resp) {
                        //  $("#downloadPDF").attr("onclick", "").unbind("click");
                        //    $("#downloadPDF a").click();
                        // $("#downloadPDF a").remove();
                        // toastr.success(data.Info, 'Informasi', opsi_toastr);
                        $('#modalDownloadPDF').modal('hide');
                        window.location.href = "<?= base_url('assets/dokumen/dokumen_gratis/') . $laporan_desain->laporan_desain ?>";
                    }
                });





            },

            error: function(jqHR, texStatus, errorThrown) {}

        });

        // }

    });

    function checkProfil(paket, id_rumah) {

        var id_customer = Cookies.get('id_customer', {

            domain: 'rumahtinggal.id'

        });

        $('#id_lengkapi_profil').val(id_customer);

        $.ajax({

            url: "<?php echo base_url() ?>/api/getNotifSubscribe/" + id_customer,

            type: "GET",

            dataType: "JSON",

            success: function(data) {

                if (data == null) {
                    // $("#notifikasiPO").modal('show');

                    $("#disable-modal-pembelian").modal('show');

                    showModalProsesBayar(paket, id_rumah);

                } else if (data.no_wa == null || data.no_wa == "") {

                    $("#notifikasiPO").modal('hide');

                    // $("#notifikasiPO").show();

                    $("#disable-modal-pembelian").modal('hide');

                    $('#modalOrder').modal('hide');

                    $('#modalProsesBayar').modal('hide');

                    $('#modalLengkapiProfil').modal('show');
                    $('#no_telp').val(data.no_wa)
                    $('#alamat_profil').val(data.alamat)
                }

            }

        })

    }

    $('#lengkapiProfil').on('click', function() {
        var noTelp = $('#no_telp').val();
        var alamat = $('#alamat_profil').val();

        // Memeriksa apakah semua field telah diisi
        if (noTelp.trim() === '' || alamat.trim() === '') {
            alert('Silakan lengkapi semua field sebelum menyimpan profil.');
        } else {
            $.ajax({
                url: "<?php echo base_url() ?>api/ubahCustomer",
                type: "POST",
                data: $('#ubahCustomer :input').serialize(),
                dataType: "JSON",
                success: function(data) {
                    $('#modalLengkapiProfil').modal('hide');
                    // $("#notifikasiPO").modal('show');
                    $("#disable-modal-pembelian").modal('show');
                    showModalProsesBayar(1, <?= $id_rumah ?>)
                    $('#alamat_pengiriman').val(alamat);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#btn-simpan').html("<strong><i class='fa fa-check'></i> SIMPAN</strong>");
                }
            });
        }
    });


    function checkoutPaket(paket, id_rumah) {

        // $('#textarea_alamat').addClass('hide');

        //window.location.href = "<?= base_url('checkout/') ?>" + paket + "/" + id_rumah;

        sessionStorage.setItem('paket', paket);

        //$("#notifikasiPO").show();

        //$("#disable-modal-pembelian").show();

        checkProfil(paket, id_rumah);

        // $.ajax({

        //     url: "<?= base_url('checkout/') ?>" + paket + "/" + id_rumah,

        //     type: "POST",

        //     dataType: "JSON",

        //     success: function(data) {
        //         $('#modalProsesBayar').modal('show');
        //         $('#nama-pembeli').text('Halo ' + data.nama_customer);
        //         $('#nama-rumah').text(data.nama_rumah);
        //         $('#harga-desain').text('Rp' + data.harga);
        //         $('#harga-desain1').text('Rp' + data.harga);
        //         $('#tgl_beli').text(data.tgl_pembelian);


        //         // $('#tgl_beli').text(data.tgl_pembelian);
        //         $('#jenis-paket').text('Paket ' + data.paket);
        //         $('#batas-waktu').text('Pesanan Anda akan dibatalkan pada ' + data.batas_transfer);
        //         if (data.konsep && data.konsep.foto) {
        //             // Menggunakan base_url untuk mendapatkan URL lengkap
        //             var fotoKonsepUrl = '<?= base_url('assets/img/konsep/') ?>' + data.konsep.foto;

        //             // Perbarui atribut src
        //             $('#foto-rumah').attr('src', fotoKonsepUrl);
        //         } else {
        //             console.error('Data konsep tidak valid.');
        //         }

        //         $('#nama-arsitek').text('By ' + data.nama_arsitek);

        //         $('#sub-total').text(data.harga);

        //         $('#ppn').text(data.ppn);

        //         $('#total').text(data.total);

        //         $('#alamat_pengiriman').val(data.alamat);

        //         // $('#modalOrder').modal('show');

        //         // $('#modalOrder').modal('toggle');

        //         // $('#pop_up_website_coba').modal('show');

        //         //$('#modalOrder').modal('hide');

        //     },

        //     error: function(jqXHR, textStatus, errorThrown) {

        //         modalLogin();

        //     }

        // });



    }

    function showModalProsesBayar(paketawal, id_rumah) {
        var paket = sessionStorage.getItem('paket');
        $.ajax({

            url: "<?= base_url('checkout/') ?>" + paket + "/" + id_rumah,

            type: "POST",

            dataType: "JSON",

            success: function(data) {
                $('#modalProsesBayar').modal('show');
                $('#nama-pembeli').text('Halo ' + data.nama_customer);
                $('#nama-rumah').text(data.nama_rumah);
                $('#harga-desain').text('Rp' + data.harga);
                $('#harga-desain1').text('Rp' + data.harga);
                $('#tgl_beli').text(data.tgl_pembelian);


                // $('#tgl_beli').text(data.tgl_pembelian);
                $('#jenis-paket').text('Paket ' + data.paket);
                $('#batas-waktu').text('Pesanan Anda akan dibatalkan pada ' + data.batas_transfer);
                if (data.konsep && data.konsep.foto) {
                    // Menggunakan base_url untuk mendapatkan URL lengkap
                    var fotoKonsepUrl = '<?= base_url('assets/img/konsep/') ?>' + data.konsep.foto;

                    // Perbarui atribut src
                    $('#foto-rumah').attr('src', fotoKonsepUrl);
                } else {
                    console.error('Data konsep tidak valid.');
                }

                $('#nama-arsitek').text('By ' + data.nama_arsitek);

                $('#sub-total').text(data.harga);

                $('#ppn').text(data.ppn);

                $('#total').text(data.total);

                $('#alamat_pengiriman').val(data.alamat);

                // $('#modalOrder').modal('show');

                // $('#modalOrder').modal('toggle');

                // $('#pop_up_website_coba').modal('show');

                //$('#modalOrder').modal('hide');

            },

            error: function(jqXHR, textStatus, errorThrown) {

                modalLogin();

            }

        });
    }


    // $('#lanjutBayar').on('click', function() {
    //     // Tampilkan modal notifikasi (jika diperlukan)
    //     // Dapatkan ID Pelanggan dari Cookies
    //     var id_customer = Cookies.get('id_customer', {
    //         domain: 'rumahtinggal.id'
    //     });

    //     console.log('ID Pelanggan:', id_customer); // Tambahkan log ID Pelanggan

    //     if (id_customer != null) {
    //         // Dapatkan data langganan pemberitahuan
    //         $.ajax({
    //             url: "<?php echo base_url() ?>/api/getNotifSubscribe/" + id_customer,
    //             type: "GET",
    //             dataType: "JSON",
    //             success: function(data) {
    //                 console.log('Data Notif Subscribe:', data); // Tambahkan log Data Notif Subscribe

    //                 // Tampilkan modal pembayaran menggunakan Snap
    //                 snap.pay(data, {
    //                     onSuccess: function(result) {
    //                         console.log('Pembayaran Berhasil:', result); // Tambahkan log Pembayaran Berhasil
    //                         simpanPembayaran(JSON.stringify(result));
    //                     },
    //                     onPending: function(result) {
    //                         console.log('Pembayaran Pending:', result); // Tambahkan log Pembayaran Pending
    //                         simpanPembayaran(JSON.stringify(result));
    //                     },
    //                     onError: function(result) {
    //                         console.log('Kesalahan Pembayaran:', result); // Tambahkan log Kesalahan Pembayaran

    //                         // Tampilkan pesan kesalahan menggunakan SweetAlert
    //                         swal.fire({
    //                             title: "Kesalahan",
    //                             text: "Terjadi masalah saat pembayaran.",
    //                             icon: "error",
    //                         });
    //                         simpanPembayaran(JSON.stringify(result));
    //                     },
    //                 });
    //             },
    //             error: function(jqXHR, textStatus, errorThrown) {
    //                 // Tampilkan pesan kesalahan menggunakan SweetAlert
    //                 swal.fire({
    //                     title: "Kesalahan",
    //                     text: "Terjadi masalah saat pengambilan data.",
    //                     icon: "error",
    //                 });
    //                 console.error('Gagal mengambil data:', textStatus, errorThrown); // Tambahkan log kesalahan pengambilan data
    //             }
    //         });
    //     } else {
    //         // Handle kasus ketika id_customer null (jika diperlukan)
    //         console.log('ID Pelanggan tidak ditemukan.'); // Tambahkan log ID Pelanggan tidak ditemukan
    //         // $('#menu-login').click();
    //         // $('#sender-login').val('2');
    //     }
    // });

    // $('#lanjutBayar').on('click', function() {
    //     $('#modalNotifikasi').modal('show');
    //     var id_customer = Cookies.get('id_customer', {
    //         domain: 'rumahtinggal.id'
    //     });

    //     if (id_customer != null) {
    //         var paket = sessionStorage.getItem('paket');
    //         let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';
    //         var id_rumah = <?= $id_rumah ?>;
    //         var alamat = $('#alamat_pengiriman').val();
    //         let pros_diskon = $('#pros_diskon').text();
    //         let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.', ''));
    //         let harga = parseInt($('#sub-total').text().replaceAll('.', ''));
    //         let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';
    //         let ppn = parseInt($('#ppn').text().replaceAll('.', ''));
    //         let total = parseInt($('#total').text().replaceAll('.', ''));

    //         $.ajax({
    //             type: "get",
    //             url: "<?php echo base_url() ?>/api/getPenggunaBayar/" + id_customer,
    //             dataType: "JSON",
    //             success: function(data) {
    //                 if (data != null) {
    //                     $.ajax({
    //                         url: "<?php echo base_url() ?>/api/bayarTagihan",
    //                         cache: false,
    //                         type: "POST",
    //                         data: {
    //                             "nama_pengguna": data.nama_customer,
    //                             "email": data.email,
    //                             "no_wa": data.no_wa,
    //                             "alamat": alamat,
    //                             "paket": paket,
    //                             "nama_paket": nama_paket,
    //                             "harga": harga,
    //                             "ppn": ppn,
    //                             "diskon": diskon_promo,
    //                             "kode_promo": kode_promo.toUpperCase(),
    //                             "total": total
    //                         },
    //                         dataType: "JSON",
    //                         success: function(data) {
    //                             snap.pay(data, {
    //                                 onSuccess: function(result) {
    //                                     simpanPembayaran(JSON.stringify(result));
    //                                 },
    //                                 onPending: function(result) {
    //                                     simpanPembayaran(JSON.stringify(result));
    //                                 },
    //                                 onError: function(result) {
    //                                     simpanPembayaran(JSON.stringify(result));
    //                                 },
    //                             });
    //                         }
    //                     });
    //                 }
    //             }
    //         });
    //     } else {
    //         $('#menu-login').click();
    //         $('#sender-login').val('2');
    //     }
    // });

    $('#lanjutBayar').on('click', function() {
        // Tampilkan modal notifikasi
        // $('#modalNotifikasi').modal('show');

        var id_customer = Cookies.get('id_customer', {
            domain: 'rumahtinggal.id'
        });

        if (id_customer != null) {
            if ($.trim($("#alamat_pengiriman").val())) {

                $('#link_alamat').css('display', 'none');

                $.ajax({

                    url: "<?php echo base_url() ?>/api/getNotifSubscribe/" + id_customer,

                    type: "GET",

                    dataType: "JSON",

                    success: function(data) {

                        if (data != null) {

                            $('#ModalSubscribe').on('shown.bs.modal', function(e) {

                                $('#nama_subscribe').val(data.nama_customer);

                                $('#no_wa_subscribe').val(data.no_wa);

                                $(this).off('shown.bs.modal');

                            }).modal('show');

                        } else {

                            var paket = sessionStorage.getItem('paket');

                            let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';

                            var id_customer = Cookies.get('id_customer', {

                                domain: 'rumahtinggal.id'

                            });

                            var id_rumah = <?= $id_rumah ?>;

                            var alamat = $('#alamat_pengiriman').val();

                            let pros_diskon = $('#pros_diskon').text();

                            let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.', ''));

                            let harga = parseInt($('#sub-total').text().replaceAll('.', ''));

                            let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';

                            let ppn = parseInt($('#ppn').text().replaceAll('.', ''));

                            let total = parseInt($('#total').text().replaceAll('.', ''));



                            /* let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';

                                   // let jumlah_akun = parseInt($('#jumlah_akun').val());

                                  //  let durasi_bulan = $('#durasi').val();

                                    //let harga_paket = parseInt($('#sub-total').text()) * jumlah_akun;



                                    let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.',''));

                                    let harga_paket = parseInt($('#sub-total').text().replaceAll('.',''));

                                    let ppn = parseInt($('#ppn').text().replaceAll('.',''));

                                    let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';

                                    let total = parseInt($('#total').text().replaceAll('.',''));*/

                            $.ajax({

                                type: "get",

                                url: "<?php echo base_url() ?>/api/getPenggunaBayar/" + id_customer,

                                dataType: "JSON",

                                success: function(data) {

                                    if (data != null) {

                                        $.ajax({

                                            url: "<?php echo base_url() ?>/api/bayarTagihan",

                                            cache: false,

                                            type: "POST",

                                            data: {

                                                "nama_pengguna": data.nama_customer,

                                                "email": data.email,

                                                "no_wa": data.no_wa,

                                                "alamat": alamat,

                                                "paket": paket,

                                                "nama_paket": nama_paket,

                                                //      "jumlah_akun": jumlah_akun,

                                                //     "durasi_bulan": durasi_bulan,

                                                "harga": harga,

                                                "ppn": ppn,

                                                "diskon": diskon_promo,

                                                "kode_promo": kode_promo.toUpperCase(),

                                                "total": total

                                            },

                                            dataType: "JSON",

                                            success: function(data) {
                                                snap.pay(data, {
                                                    onSuccess: function(result) {
                                                        simpanPembayaran(JSON.stringify(result));
                                                    },
                                                    onPending: function(result) {
                                                        simpanPembayaran(JSON.stringify(result));
                                                    },
                                                    onError: function(result) {
                                                        simpanPembayaran(JSON.stringify(result));
                                                    },
                                                });



                                            }

                                        });

                                    }

                                }

                            });

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);

                    }

                });
            } else if (!$.trim($("#alamat_pengiriman").val())) {
                $.trim($('#alamat_pengiriman').val());
                toastr.warning('Jangan lupa isi alamat pengiriman Anda', 'Kesalahan');
                $('#link_alamat').css('display', 'block');
            }
        } else {
            $('#menu-login').click();
            $('#sender-login').val('2');
        }
    });




    $('#lanjutOrder').on('click', function() {
        // Tutup modal proses pembayaran (gantilah #modalProsesPembayaran dengan ID modal yang sesuai)
        $('#modalProsesBayar').modal('hide');

        // Tampilkan modalOrder
        $('#modalOrder').modal('show');
    });





    function simpanPembayaran(result) {

        /* let jumlah_akun = $('#jumlah_akun').val();

         let durasi_bulan = $('#durasi').val();

         let harga_paket = $('#harga_paket').val();

         let kode_promo = (diskon_promo > 0) ? $('#kode_promo_berhasil').val() : '';*/

        let order = JSON.parse(result);

        var paket = sessionStorage.getItem('paket');

        // let nama_paket = (paket == '1') ? 'PAKET 1' : 'PAKET 2';

        var id_customer = Cookies.get('id_customer', {

            domain: 'rumahtinggal.id'

        });

        var id_rumah = <?= $id_rumah ?>;

        var alamat = $('#alamat_pengiriman').val();

        let pros_diskon = $('#pros_diskon').text();

        //let diskon_promo = parseInt($('#diskon_promo_persen').text().replaceAll('.',''));

        let harga = parseInt($('#sub-total').text().replaceAll('.', ''));

        $.ajax({

            url: "<?= base_url() ?>api/simpanPembayaran",

            type: "POST",

            dataType: "JSON",

            data: {

                "kategori": '1',

                "no_invoice": order.order_id,

                "paket": paket,

                "id_customer": id_customer,

                "id_rumah": id_rumah,

                "alamat": alamat,

                "diskon": pros_diskon,

                "harga": harga,

                "result_data": result

            },

            success: function(data) {
                kirimNotifikasi(result);
                sessionStorage.setItem('id_order', order.order_id);
            }

        });

    }

    function kirimNotifikasi(data) {
        const dataJSON = JSON.parse(data)

        $.ajax({
            url: `<?php echo base_url() ?>/api/notifikasiPembayaran`,
            type: "POST",
            dataType: "JSON",
            data: {
                orderId: dataJSON.order_id
            },
            success: function(data) {
                window.location.href = "<?php echo base_url() ?>invoice/" + dataJSON.order_id;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                window.location.href = "<?php echo base_url() ?>invoice/" + dataJSON.order_id;
            }
        });
    }

    function isMobile() {

        var check = false;

        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);

        return check;

    };


    function tanyaDesain() {

        let nama_desain = $('#nama_rumah').text();

        let text = `Halo Admin RumahTinggal.id,\nSaya telah melakukan pembelian desain rumah *` + nama_desain + `* Apakah saya bisa mendapatkan informasi lebih lanjut tentang desain tersebut?\nTerima kasih`;

        let phone = '628112636228';

        let message = encodeURIComponent(text);



        let api_wa;

        if (isMobile() == true) api_wa = "whatsapp://send";

        else api_wa = "https://api.whatsapp.com/send";

        let url = api_wa + '?phone=' + phone + '&text=' + message;

        window.open(url, '_blank');

    }
</script>