<style>
    .irs {
        width: 100%;
    }

    .irs--round .irs-line {
        top: 33px;
        height: 7px;
        background-color: #dedede;
        /* border: 1px solid #026CB6; */
    }

    .irs--round .irs-handle.state_hover,
    .irs--round .irs-handle:hover {
        box-shadow: #000;
        background-color: #003A65;
    }

    /* .irs--round .irs-from::before,
    .irs--round .irs-to::before,
    .irs--round .irs-single::before {
        border-top-color: #026CB6;
    } */

    .irs--round .irs-grid-text {
        color: #000;
        font-size: medium;
    }

    .irs--round .irs-bar {
        top: 33px;
        height: 7px;
        background-color: #026CB6;
    }

    .irs--round .irs-handle {
        background-color: #003A65;
        cursor: pointer;
        border: none;
        box-shadow: none;
        height: 20px;
        width: 20px;
    }

    .home-banner-left {
        height: 100%;
    }
</style>

<div class="owl-carousel owl-theme owl-carousel-eight d-lg-none" id="caraouselTesti">
    <?php foreach ($produk_body as $item) { ?>
        <div style="background-image: url('<?= base_url('assets/img/desain/' . $item->foto) ?>'); object-fit:cover" class="card-img-top bg-card"></div>
    <?php } ?>
</div>
<div class="py-5 bg-header-web-home overflow-hidden" style="background-image:radial-gradient(circle at -90%, white 50%, #53b4fc 100%);">
    <div class="container px-4 home-banner-left px-lg-0">
        <div class="row home-banner-left">
            <!-- Bagian Kiri (Teks) -->
            <div class="col-lg-6 ms-lg-4 d-flex flex-column h-100 justify-content-center home-banner-left">
                <h1 class="fw-bold mb-3 text-primary display-4 d-none d-md-block">Dapatkan Desain</h1>
                <h1 class="fw-bold mb-3 text-primary display-4 d-none d-md-block">Hunian Idaman Anda!</h1>
                <h1 class="fw-bold mb-3 text-primary display-5 d-block d-md-none">Dapatkan Desain</h1>
                <h1 class="fw-bold mb-3 text-primary display-5 d-block d-md-none">Hunian Idaman Anda!</h1>
                <p class="mb-3">Bangun rumah lebih mudah bersama RumahTinggal.id</p>
                <div class="row">
                    <div class="col-lg-9 mb-5">
                        <form onsubmit="event.preventDefault(); clickSearch(document.getElementById('textbox-cari-desain').value);">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari desain" id="textbox-cari-desain" />
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>

                        <span class="fw-semibold">Populer: </span>
                        <!-- <?php foreach ($frequent_terms as $term) : ?>
                            <div class="badge cursor-pointer bg-white text-dark border border-1 border-dark rounded-3" style="cursor: pointer;" onClick="clickSearch('<?php echo $term->term; ?>')"><?php echo $term->term; ?></div>
                        <?php endforeach; ?> -->

                        <div class="badge cursor-pointer bg-white text-dark border border-1 border-dark rounded-3" style="cursor: pointer;" onClick="clickSearch('tropis')">tropis</div>
                        <div class="badge cursor-pointer bg-white text-dark border border-1 border-dark rounded-3" style="cursor: pointer;" onClick="clickSearch('minimalis')">minimalis</div>
                        <div class="badge cursor-pointer bg-white text-dark border border-1 border-dark rounded-3" style="cursor: pointer;" onClick="clickSearch('modern')">modern</div>
                    </div>
                    <div class="col-xl-10">
                        <div class="card bg-white border-0 shadow-sm">
                            <div class="card-body" id="myCardBody">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/gif/home.png'); ?>" width="50" height="50">
                                            </div>
                                            <div class="text-center text-lg-start">
                                                <div class="fs-5 fw-semibold"><?php echo floor($jumlah_rumah / 10) * 10 . '+'; ?>
                                                </div>
                                                <small>Koleksi Desain</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/gif/folder-download.png'); ?>" width="50" height="50">
                                            </div>
                                            <div class="text-center text-lg-start">
                                                <div class="fs-5 fw-semibold"><?php echo floor($jumlah_unduh / 100) * 100 . '+'; ?></div>
                                                <small>Desain Diunduh</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/gif/users.png'); ?>" width="50" height="50">
                                            </div>
                                            <div class="text-center text-lg-start">
                                                <div class="fs-5 fw-semibold"><?php echo floor($jumlah_pengunjung / 100) * 100 . '+'; ?></div>
                                                <small>Pengunjung Aktif</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Kanan (Gambar) -->
            <div class="col-lg-6 pe-0">
                <input type="hidden" id="baseUrl" value="<?= base_url(); ?>">
                <div class="slideshow d-none d-lg-block">
                    <img class="img-fluid pb-xxl-4 w-100" src="<?php echo base_url('assets/demo/img/slide1.png'); ?>" alt="Gambar 1">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Head end -->

<!--Temukan Desain start-->
<div class="py-5">
    <div class="container">
        <form class="row gx-lg-5" id="form-impian">
            <div class="col-12 mb-3">
                <h1 class="fw-semibold text-center">Temukan Desain Impianmu</h1>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="mb-3">
                    <label for="lebarLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Lebar Lahan Minimal (m)</div>
                            <div><span id="ubahLebar" class="badge bg-light text-dark"><?= (int)$range_lebar_lahan->max_lebar_lahan ?></span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-lebar","minus")'>
                            <small id="kurang-lebar"><i class="fas fa-minus"></i></small>
                        </div>
                        <input type="text" class="js-range-slider-lebar" id="lebarLahan" name="lebar_lahan" value="" />
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-lebar","plus")'>
                            <small id="tambah-lebar"><i class="fas fa-plus"></i></small>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="panjangLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Panjang Lahan Minimal (m)</div>
                            <div><span id="ubahPanjang" class="badge bg-light text-dark"><?= (int)$range_panjang_lahan->max_panjang_lahan ?></span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-panjang","minus")'>
                            <small id="kurang-panjang"><i class="fas fa-minus"></i></small>
                        </div>

                        <input type="text" class="js-range-slider-panjang" id="panjangLahan" name="panjang_lahan" value="" />
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-panjang","plus")'>
                            <small id="tambah-panjang"><i class="fas fa-plus"></i></small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="form-group mb-3 col-6 col-lg-12">
                        <label for="jumlah_lantai" class="form-label fw-semibold">Jumlah Lantai</label>
                        <input type="number" class="form-control" id="jumlah_lantai" name="lantai" min="1" placeholder="Jumlah Lantai" />
                    </div>
                    <div class="form-group mb-3 col-6 col-lg-12">
                        <label for="jumlah_lantai" class="form-label fw-semibold">Gaya Desain</label>
                        <select class="form-select" aria-label="Default select example" name="gaya">
                            <option selected>Pilih Gaya Desain</option>
                            <?php foreach ($gaya_desain as $gaya) : ?>
                                <option value="<?php echo $gaya->id_gaya_desain; ?>"><?php echo $gaya->gaya_desain; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <button class="btn btn-primary d-lg-block d-none" id="button-addon2" type="submit">Cari Desain<i class=" ms-2 fas fa-search"></i></button>
                <button class="btn btn-primary d-block w-100 d-lg-none" id="button-addon2" type="submit">Cari Desain<i class=" ms-2 fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
<div class="py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
            <h1 class="fw-semibold text-center ms-3">Rekomendasi Desain</h1>
            <div class="d-none d-lg-block">
                <a class="btn btn-primary" href="<?= base_url('koleksi') ?>">Lihat Semua<i class="ms-2 fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="position-relative">
            <div class="card-container owl-carousel owl-theme owl-carousel-one">
                <?php foreach ($produk_favorit as $item) { ?>
                    <div class="card border-0 shadow-sm mb-2">
                        <div class="img-container">
                            <img src="<?= base_url('assets/img/desain/' . $item->foto) ?>" class="img-card-produk card-img-top" alt="" onload='updateHeight()'>
                        </div>

                        <div class="card-body card-home">
                            <h5 class="card-title mb-0 fw-semibold" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                <?= $item->nama_rumah ?></h5>
                            <small class="nama_arsitek mb-0">Design by
                                <?= $item->nama_arsitek ?></small>
                            <hr />
                            <div class="d-flex align-items-center gap-3 mb-1">
                                <div>
                                    <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                </div>
                                <div>
                                    <small>Lahan Minimal</small>
                                    <small class="fw-semibold d-block"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                </div>
                                <div>
                                    <small>Biaya Konstruksi</small>
                                    <small class="fw-semibold d-block tooltip-biaya"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?>
                                        <span class="tooltip-biaya-text">Estimasi Awal</span>
                                    </small>

                                </div>
                            </div>
                            <div class="mt-3"></div>
                        </div>
                        <div class="card-info">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2 ms-2">
                                        <div class='m-0 p-0'>
                                            <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Luas Bangunan</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->luas_bangunan ?> m2 </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Kamar Tidur</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->kamar_tidur ?> Kamar </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between mb-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2 ms-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Jumlah Lantai</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->lantai ?> Lantai </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Kamar Mandi</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->toilet ?> Kamar</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-1">
                                <div class="text-center">
                                    <a class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


            <div class="position-absolute top-50 start-100 translate-middle d-lg-block" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnOne"><i class="fas fa-arrow-right fs-7"></i></button>
            </div>
            <div class="position-absolute top-50 start-0 translate-middle" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle" id="prevBtnOne"><i class="fas fa-arrow-left"></i></button>
            </div>
        </div>
        <div class="pt-1">
            <div class="d-block d-lg-none text-center mt-3">
                <a class="btn btn-primary" href="<?= base_url('koleksi') ?>">Lihat Semua<i class="ms-2 fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-light" style="position: relative;">
    <div class="container">
        <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
            <h1 class="fw-semibold text-center ms-3">Desain Terbaru</h1>
            <div class="d-none d-lg-block">
                <a class="btn btn-primary" href="<?= base_url('koleksi') ?>">Lihat Semua<i class="ms-2 fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="position-relative">
            <div class="card-container owl-carousel owl-theme owl-carousel-two card-group">
                <?php foreach ($produk_terbaru as $item) { ?>
                    <div class="card border-0 shadow-sm mb-2 product-card">
                        <div class="img-container">
                            <img src="<?= base_url('assets/img/desain/' . $item->foto) ?>" class="img-card-produk card-img-top" alt="" onload='updateHeight()'>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-0 fw-semibold" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                <?= $item->nama_rumah ?></h5>
                            <small class="nama_arsitek mb-0">Design by
                                <?= $item->nama_arsitek ?></small>
                            <hr />
                            <div class="d-flex align-items-center gap-3 mb-1">
                                <div>
                                    <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                </div>
                                <div>
                                    <small>Lahan Minimal</small>
                                    <small class="fw-semibold d-block"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                </div>
                                <div>
                                    <small>Biaya Konstruksi</small>
                                    <small class="fw-semibold d-block"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?></small>
                                </div>
                            </div>
                            <div class="mt-3"></div>
                        </div>
                        <div class="card-info">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2 ms-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Luas Bangunan</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->luas_bangunan ?> m2 </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Kamar Tidur</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->kamar_tidur ?> Kamar </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between mb-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2 ms-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Jumlah Lantai</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->lantai ?> Lantai </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                        </div>
                                        <div>
                                            <small style="font-size:0.8em">Kamar Mandi</small>
                                            <small class="fw-semibold d-block" style="font-size:0.8em"><?= $item->toilet ?> Kamar</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-1">
                                <div class="text-center">
                                    <a class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="position-absolute top-50 start-100 translate-middle d-lg-block" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnTwo"><i class="fas fa-arrow-right fs-7"></i></button>
            </div>
            <div class="position-absolute top-50 start-0 translate-middle" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle" id="prevBtnTwo"><i class="fas fa-arrow-left"></i></button>
            </div>
        </div>
        <div class="pt-1">
            <div class="d-block d-lg-none text-center mt-3">
                <a class="btn btn-primary" href="<?= base_url('koleksi') ?>">Lihat Semua<i class="ms-2 fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
                    <h1 class="fw-semibold ms-3">Testimoni Klien</h1>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div style="position: relative;">
                    <video id="my-video" class="rounded-4 shadow-sm" controls preload="auto" width="100%" height="auto" poster="https://rumahtinggal.id/assets/img/thumbnail_website.png" data-setup="{}">
                        <source src="<?= base_url('assets/video/home.mp4') ?>" type="video/mp4" />
                        <source src="<?= base_url('assets/video/home.mp4') ?>" type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                    <div id="play-icon-container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); pointer-events: none;">
                        <img src="<?php echo base_url('assets/demo/img/play-icon.png'); ?>" class="play-icon" alt="Play Icon">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="position-relative h-100">
                    <div class="owl-carousel owl-theme owl-carousel-three h-100" id="caraouselTesti">
                        <div class="card border-0 bg-light rounded-4" style="height: 412px;">
                            <div class="card-body p-4" id="myCardBody">
                                <div class="d-flex mb-3 align-items-center gap-3">
                                    <div class="bg-card-circle" style="background-image: url('<?php echo base_url("assets/demo/img/happy.png"); ?>')">
                                    </div>
                                    <div>
                                        <h4 class="fw-semibold">Pak Naufal</h4>
                                        <div>Bantul</div>
                                    </div>
                                </div>
                                <p style="line-height: 2; margin-top:30px;">
                                    Saya sangat terkesan berbelanja di platform marketplace ini. Antarmuka yang mudah
                                    dipahami membantu saya menemukan produk yang dicari dengan lancar. Proses pembayaran
                                    yang cepat dan pilihan pengiriman fleksibel dapat meningkatkan kenyamanan
                                    berbelanja.
                                </p>
                            </div>
                        </div>
                        <div class="card border-0 bg-light rounded-4" style="height: 412px;">
                            <div class="card-body p-4" id="myCardBody">
                                <div class="d-flex mb-3 align-items-center gap-3">
                                    <div class="bg-card-circle" style="background-image: url('<?php echo base_url("assets/demo/img/mbak1.jpg"); ?>')">
                                    </div>
                                    <div>
                                        <h4 class="fw-semibold">Ibu Jessica</h4>
                                        <div>Sleman</div>
                                    </div>
                                </div>
                                <p style="line-height: 2; margin-top:30px;">
                                    Saya sangat terkesan berbelanja di platform marketplace ini. Antarmuka yang mudah
                                    dipahami membantu saya menemukan produk yang dicari dengan lancar. Proses pembayaran
                                    yang cepat dan pilihan pengiriman fleksibel dapat meningkatkan kenyamanan
                                    berbelanja.
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="position-absolute top-50 start-100 translate-middle" style="z-index: 1000">
                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnThree"><i class="fas fa-arrow-right fs-7"></i></button>
                    </div>
                    <div class="position-absolute top-50 start-0 translate-middle" style="z-index: 1000">
                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle" id="prevBtnThree"><i class="fas fa-arrow-left"></i></button>
                    </div>
                </div>
                <!-- <div class="d-block d-lg-none text-center mt-7">
                    <button class="btn btn-primary" type="button" id="button-addon3">Baca Cerita Lainnya<i class=" ms-2 fas fa-arrow-right"></i></button>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3 mt-5">
                <div class="position-relative">
                    <div class="owl-carousel owl-theme owl-carousel-four" id="caraouselTesti">
                        <img src="<?php echo base_url('assets/demo/img/banner1.png'); ?>" alt="" />
                        <img src="<?php echo base_url('assets/demo/img/banner2.png'); ?>" alt="" />
                        <img src="<?php echo base_url('assets/demo/img/banner3.png'); ?>" alt="" />
                    </div>
                    <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnFour"><i class="fas fa-arrow-right fs-7"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="d-flex justify-content-between flex-column flex-lg-col mb-3 ms-3">
                    <h1 class="fw-semibold mb-1 text-center text-lg-start">Tips & Artikel</h1>
                    <small class="text-center text-lg-start">Bahan Bacaan Anda Sebelum Membangun Rumah</small>
                    <div class="d-none d-lg-block mt-5">
                        <button class="btn btn-primary" type="button" id="button-addon2" onclick="lihatArtikel()">Lihat
                            Semua<i class=" fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="position-relative">
                    <div class="owl-carousel owl-theme owl-carousel-five">
                        <?php
                        function limit_title($title, $word_limit)
                        {
                            $words = explode(" ", $title);
                            if (count($words) > $word_limit) {
                                $title = implode(" ", array_slice($words, 0, $word_limit)) . '...';
                            }
                            return $title;
                        }

                        if (!empty($artikel)) {
                            foreach ($artikel as $item) {
                                $deskripsi_meta = $item->deskripsi_meta;
                                $isi = (strlen($deskripsi_meta) > 50) ? substr($deskripsi_meta, 0, 75) . '...' : $deskripsi_meta;
                        ?>
                                <div class="card mb-3 shadow-sm" style="max-width: 600px">
                                    <div class="row g-0">
                                        <div class="col-md-4 px-2 py-2">
                                            <div style="background-image: url('<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>')" class="card-img-artikel bg-card"></div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" id="myCardBody">
                                                <h5 class="card-title fw-semibold"><?= limit_title($item->judul_artikel, 5) ?>
                                                </h5>
                                                <p class="card-text lh-1"><?= $isi ?></p>
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="detailArtikel(<?= $item->id_artikel ?>)">Baca Selengkapnya<i class="fas fa-compress ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>

                    <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnFive"><i class="fas fa-arrow-right fs-7"></i></button>
                    </div>
                </div>
                <div class="d-block d-lg-none text-center mt-3">
                    <button class="btn btn-primary" type="button" id="button-addon2" onclick="lihatArtikel()">Lihat
                        Semua<i class=" ms-2 fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
            <h1 class="fw-semibold text-center ms-3">Material Pilihan</h1>
            <div class="d-none d-lg-block">
                <button class="btn btn-primary" type="button" id="button-addon2" onclick="katalogMaterial()">Lihat
                    Semua<i class="fas fa-arrow-right ms-2"></i></button>
            </div>
        </div>
        <div class="position-relative">
            <div class="owl-carousel owl-theme owl-carousel-six" id="material-pil"></div>
            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnSix"><i class="fas fa-arrow-right fs-7"></i></button>
            </div>
        </div>
        <div class="d-block d-lg-none text-center mt-3">
            <button class="btn btn-primary" type="button" id="button-addon2" onclick="katalogMaterial()">Lihat Semua<i class=" ms-2 bi bi-arrow-right"></i></button>
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script>
    $(document).ready(function() {
        getMaterial();
    });

    var video = document.getElementById('my-video');
    var playIconContainer = document.getElementById('play-icon-container');

    // Add event listener to hide the play icon when the video is played
    video.addEventListener('play', function() {
        playIconContainer.style.display = 'none';
    });

    // $(document).ready(function() {
    //     $('#button-addon2').on('click', function() {
    //         var cari = $('#cari-desain-input').val(); // Ambil nilai dari input pencarian

    //         // Buat URL dengan nilai pencarian
    //         var url = "<?= base_url('demo/koleksi#') ?>" + cari;

    //         // Arahkan pengguna ke URL yang baru
    //         window.location.href = url;
    //     });
    // });

    $(".js-range-slider-panjang").ionRangeSlider({
        skin: "round",
        min: <?= $range_panjang_lahan->min_panjang_lahan ?>,
        max: <?= $range_panjang_lahan->max_panjang_lahan ?>,
        grid: true,
        grid_num: 9,
        from: <?= $range_panjang_lahan->max_panjang_lahan ?>,
        from_min: <?= $range_panjang_lahan->min_panjang_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_panjang_lahan->max_panjang_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_panjang = $('.js-range-slider-panjang').data().from;
            $("#panjangLahan").val(from_panjang);
            $("#ubahPanjang").html(from_panjang);
        },
        onUpdate: function(data) {
            let from_panjang = $('.js-range-slider-panjang').data().from;
            $("#panjangLahan").val(from_panjang);
            $("#ubahPanjang").html(from_panjang);
        }
    });

    $(".js-range-slider-lebar").ionRangeSlider({
        skin: "round",
        min: <?= $range_lebar_lahan->min_lebar_lahan ?>,
        max: <?= $range_lebar_lahan->max_lebar_lahan ?>,
        grid: true,
        grid_num: 9,
        from: <?= $range_lebar_lahan->max_lebar_lahan ?>,
        from_min: <?= $range_lebar_lahan->min_lebar_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_lebar_lahan->max_lebar_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_lebar = $('.js-range-slider-lebar').data().from;
            $("#lebarLahan").val(from_lebar);
            $("#ubahLebar").html(from_lebar);
        },
        onUpdate: function(data) {
            let from_lebar = $('.js-range-slider-lebar').data().from;
            $("#lebarLahan").val(from_lebar);
            $("#ubahLebar").html(from_lebar);
        }
    });

    function adjustHeight(img) {
        var aspectRatio = 1.33; // Desired aspect ratio (4:3)
        var containerWidth = $(img).parent().width(); // Get the width of the container using jQuery
        var height = containerWidth / aspectRatio; // Calculate the height based on the aspect ratio
        $(img).css('height', height + 'px'); // Set the height of the image using jQuery
    }

    function handlePlusMinusLahan(slider, operation) {
        // Get the current value of the "panjang" input
        var currentValue = parseInt($(slider).prop('value'));

        // Subtract 1 from the current value
        var newValue = currentValue;

        if (operation === "minus") {
            newValue -= 1;
        } else {
            newValue += 1;
        }
        // Update the ionRangeSlider for the "panjang" input
        $(slider).data('ionRangeSlider').update({
            from: newValue
        });
    }

    $(document).ready(function() {
        $('#form-impian').on('submit', function(e) {
            e.preventDefault();
            console.log('submitted')
            var url = "<?= base_url('koleksi') ?>"; // Base URL
            var queryParams = [];
            $(this).find(':input').each(function() {
                var fieldName = $(this).attr('name');
                var fieldValue = $(this).val();

                // Check if the field value is not empty and not equal to the default value
                if (fieldValue && !$(this).is('select') || ($(this).is('select') && fieldValue !== $(this).find('option:first').val())) {
                    if (fieldName === 'panjang_lahan') {
                        queryParams.push('min_panjang=' + encodeURIComponent(<?= $range_panjang_lahan->min_panjang_lahan ?>));
                        queryParams.push('max_panjang=' + encodeURIComponent(fieldValue));
                    } else if (fieldName === 'lebar_lahan') {
                        queryParams.push('min_lebar=' + encodeURIComponent(<?= $range_lebar_lahan->min_lebar_lahan ?>));
                        queryParams.push('max_lebar=' + encodeURIComponent(fieldValue));
                    } else {
                        queryParams.push(fieldName + '=' + encodeURIComponent(fieldValue));
                    }
                }
            });
            if (queryParams.length > 0) {
                url += '?' + queryParams.join('&');
            }
            window.location.href = url;
        })
    })


    function detailRumah(id) {

        location.href = "<?= base_url('detail_koleksi/')  ?>" + id;

    }

    function detailArsitek(id) {

        location.href = "<?= base_url() . 'profil_arsitek/' ?>" + id;

    }

    function detailArtikel(id) {

        location.href = "<?= base_url('detail-artikel/') ?>" + id;

    }

    function lihatArtikel() {

        location.href = "<?= base_url('artikel') ?>";

    }

    function katalogMaterial() {
        location.href = "<?= base_url('material') ?>";
    }

    function detailProduk(id) {
        location.href = "<?= base_url('detail_material/') ?>" + id;
    }

    function formatRupiah(number) {
        var formattedNumber = number % 1 === 0 ? Math.floor(number) : number;
        var reverse = formattedNumber.toString().split("").reverse().join(""),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join(".").split("").reverse().join("");

        return "Rp " + ribuan;
    }

    function ambilDuaKataPertama(namaProduk) {
        var kataKata = namaProduk.split(" ");
        var duaKataPertama = kataKata.slice(0, 2).join(" ");
        return duaKataPertama;
    }

    // var owlOne = $(".owl-carousel-one");
    // owlOne.owlCarousel({
    //     nav: true,
    //     margin: 20,
    //     loop: true,
    //     autoplay: false,
    //     autoplayTimeout: 7000,
    //     responsive: {
    //         0: {
    //             items: 1,
    //             dots: false,
    //             nav: false
    //         },
    //         400: {
    //             items: 2,
    //             dots: false,
    //             nav: false
    //         },
    //         576: {
    //             items: 2,
    //             dots: false,
    //             nav: false
    //         },
    //         768: {
    //             items: 3,
    //             dots: false,
    //             nav: false
    //         },
    //         992: {
    //             items: 4,
    //             dots: true,
    //             nav: false
    //         },
    //     },
    // });

    var owlTwo = $(".owl-carousel-two");
    owlTwo.owlCarousel({
        nav: true,
        margin: 20,
        loop: true,
        autoplay: false,
        autoplayTimeout: 7000,
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
                items: 2,
                nav: false,
            },
            992: {
                items: 3,
                nav: false,
            },
            1200: {
                items: 4,
                nav: false,
            },
        },
    });

    function getMaterial() {
        $.ajax({
            type: 'GET',
            url: "<?= $this->config->item('url_server') ?>api/getKatalogProdukTerpilih",
            dataType: "JSON",
            success: function(data) {
                if (data && data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        var foto = data[i].foto || 'no-foto.jpg';
                        var harga = data[i].harga_dasar;

                        var materialHtml =
                            `
                        <div class="card border-0 shadow-sm mb-3 height="400px" data-id="${data[i].id_produk}">
                            <div style="background-image: url('<?= $this->config->item('eid') ?>assets/foto/produk/${foto}')" class="card-img-top-mat bg-card"></div>
                            <div class="card-body" id="myCardBody">
                                <h5 class="card-title mb-2 fw-semibold fs-12">${ambilDuaKataPertama(data[i].nama_produk)}</h5>
                                <small class="nama_supplier mb-0">${data[i].nama_suplier}</small>
                                <hr/>
                                <h6 class="harga_material mb-0"><strong>${formatRupiah(harga)}</strong> /buah</h6>
                                <div class="mt-3">
                                    <button class="btn btn-success w-100" type="button" id="button-addon2" onclick="detailProduk(${data[i].id_produk})"><i class="me-2 fa-solid fa-cart-shopping"></i> Beli Sekarang</button>
                                </div>
                            </div>
                        </div>
                    `;

                        $("#material-pil").append(materialHtml);
                    }

                    var owlSix = $(".owl-carousel-six");
                    owlSix.owlCarousel({
                        nav: true,
                        margin: 20,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 7000,
                        responsive: {
                            0: {
                                items: 1,
                                dots: false,
                                nav: false
                            },
                            576: {
                                items: 2,
                                dots: false,
                                nav: false
                            },
                            768: {
                                items: 3,
                                dots: false,
                                nav: false
                            },
                            992: {
                                items: 4,
                                dots: false,
                                nav: false
                            },
                        },
                    });

                    $("#nextBtnSix").click(function() {
                        owlSix.trigger("next.owl.carousel");
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Terjadi masalah saat pengambilan data');
            }
        });
    }

    $(document).ready(function() {
        $('#cari-desain').on('change', function() {
            var cari = $('#cari-desain').val();
            location.href = "<?= base_url('koleksi#') ?>" + cari;
        });
    });

    function clickSearch(term) {

        if (term.trim() !== '') {
            var url = "<?= base_url('koleksi') ?>";
            url += "?search=" + term
            window.location.href = url
            // $.ajax({
            //     url: '<?= base_url('api/simpanTerm/') ?>' + term, // Replace with your API endpoint
            //     type: 'GET',
            //     success: function(response) {
            //         console.log('Response:', response);
            //     },
            //     error: function(xhr, status, error) {
            //         console.error('Error:', error);
            //     }
            // });
        } else {}
    }

    $(window).ready(updateHeight);
    $(window).resize(updateHeight);

    function updateHeight() {
        var div = $('.img-container');
        var divref = $('.owl-carousel-two').find('.product-card')
        var width = divref.width() / 1.3333333;

        div.css('height', width);

        var cards2 = document.querySelectorAll('.owl-carousel-two .card');

        var maxHeight2 = 0;
        cards2.forEach(function(card2) {
            maxHeight2 = Math.max(maxHeight2, card2.offsetHeight);
        });
        cards2.forEach(function(card2) {
            card2.style.height = maxHeight2 + 'px';
        });
    }

    // to make cards in design carousels the same height
    // document.addEventListener("DOMContentLoaded", function() {
    //     var cards2 = document.querySelectorAll('.owl-carousel-two .card');

    //     var maxHeight2 = 0;
    //     cards2.forEach(function(card2) {
    //         maxHeight2 = Math.max(maxHeight2, card2.offsetHeight);
    //     });
    //     cards2.forEach(function(card2) {
    //         card2.style.height = maxHeight2 + 'px';
    //     });
    // });

    // document.addEventListener("DOMContentLoaded", function() {
    //     var cards2 = document.querySelectorAll('.owl-carousel-one .card');

    //     var maxHeight2 = 0;
    //     cards2.forEach(function(card2) {
    //         maxHeight2 = Math.max(maxHeight2, card2.offsetHeight);
    //     });
    //     cards2.forEach(function(card2) {
    //         card2.style.height = maxHeight2 + 'px';
    //     });
    // });
</script>