<div class="owl-carousel owl-theme owl-carousel-eight d-lg-none" id="caraouselTesti">
    <?php foreach ($produk_body as $item) { ?>
        <div style="background-image: url('<?= base_url('assets/img/desain/' . $item->foto) ?>')" class="card-img-top bg-card"></div>
    <?php } ?>
</div>
<div class="py-5 bg-header-web" style="background-image:linear-gradient(to right, white , lightblue);">
    <div class="container">
        <div class="row">
            <!-- Bagian Kiri (Teks) -->
            <div class="col-lg-6 ms-lg-4">
                <h1 class="fw-bold mb-3 text-primary">Dapatkan Desain</h1>
                <h1 class="fw-bold mb-3 text-primary">Hunian Idaman Anda!</h1>
                <p class="mb-3">Bangun rumah lebih mudah bersama RumahTinggal.id</p>
                <div class="row">
                    <div class="col-lg-9 mb-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="cari desain" />
                            <button class="btn btn-primary" type="button" id="cari-desain"><i class="fas fa-search"></i></button>
                        </div>
                        <span class="fw-semibold">Populer: </span>
                        <span class="badge bg-white text-dark border border-1 border-dark rounded-3">Rumah
                            Minimalis</span>
                        <span class="badge bg-white text-dark border border-1 border-dark rounded-3">Rumah Tropis</span>
                    </div>
                    <div class="col-lg-10">
                        <div class="card bg-white border-0 shadow-sm">
                            <div class="card-body" id="myCardBody">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-2">
                                            <div>
                                                <img src="<?php echo base_url('assets/gif/home.png'); ?>" width="50" height="50">
                                            </div>
                                            <div class="text-center text-lg-start">
                                                <div class="fs-5 fw-semibold">999+</div>
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
                                                <div class="fs-5 fw-semibold">1000+</div>
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
                                                <div class="fs-5 fw-semibold">10000+</div>
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
            <div class="col-lg-6">
                <input type="hidden" id="baseUrl" value="<?= base_url(); ?>">
                <div class="slideshow d-none d-lg-block">
                    <img src="<?php echo base_url('assets/demo/img/slide1.png'); ?>" alt="Gambar 1">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Head end -->

<!--Temukan Desain start-->
<div class="py-5">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-12 mb-3">
                <h1 class="fw-semibold text-center">Temukan Desain Impianmu</h1>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="mb-3">
                    <label for="panjangLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Panjang Lahan (m)</div>
                            <div><span id="ubahPanjang" class="badge bg-light text-dark">4</span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle ">
                            <small id="kurang-panjang"><i class="fas fa-minus"></i></small>
                        </div>

                        <input type="range" class="form-range" id="panjangLahan" min="4" max="20" value="4" step="1" />
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle ">
                            <small id="tambah-panjang"><i class="fas fa-plus"></i></small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between px-5 mx-2">
                        <div>4</div>
                        <div>6</div>
                        <div>8</div>
                        <div>10</div>
                        <div>12</div>
                        <div>14</div>
                        <div>16</div>
                        <div>18</div>
                        <div>20</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="lebarLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Lebar Lahan (m)</div>
                            <div><span id="ubahLebar" class="badge bg-light text-dark">6</span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle ">
                            <small id="kurang-lebar"><i class="fas fa-minus"></i></small>
                        </div>
                        <input type="range" class="form-range" id="lebarLahan" min="6" max="30" value="6" step="1" />
                        <div class="btn btn-outline-white border-dark border-2 rounded-circle ">
                            <small id="tambah-lebar"><i class="fas fa-plus"></i></small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between px-5 mx-2">
                        <div>6</div>
                        <div>9</div>
                        <div>12</div>
                        <div>15</div>
                        <div>18</div>
                        <div>21</div>
                        <div>24</div>
                        <div>27</div>
                        <div>30</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="form-group mb-3 col-6 col-lg-12">
                        <label for="jumlah_lantai" class="form-label fw-semibold">Gaya Desain</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Gaya Desain</option>
                            <option value="1">Modern</option>
                            <option value="2">Minimalis</option>
                            <option value="3">Industrial</option>
                            <option value="4">Contemporer</option>
                            <option value="5">Tropical</option>
                            <option value="6">Tradisional</option>
                            <option value="7">Classic</option>
                            <option value="8">Scandinavian</option>
                            <option value="9">Asian</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 col-6 col-lg-12">
                        <label for="jumlah_lantai" class="form-label fw-semibold">Jumlah Lantai</label>
                        <input type="number" class="form-control" id="jumlah_lantai" placeholder="Jumlah Lantai" />
                    </div>
                </div>
                <button class="btn btn-primary d-lg-block d-none" type="button" id="button-addon2">Cari Desain<i class=" ms-2 fas fa-search"></i></button>
                <button class="btn btn-primary d-block w-100 d-lg-none" type="button" id="button-addon2">Cari Desain<i class=" ms-2 fas fa-search"></i></button>
            </div>
        </div>
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
                    <div class="card border-0 shadow-sm">
                        <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">
                            <div style="background-image: url('<?= base_url('assets/img/desain/' . $item->foto) ?>')" class="card-img-top bg-card-produk"></div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title mb-0 fw-semibold" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                <?= $item->nama_rumah ?></h5>
                            <h6 class="nama_arsitek mb-0">Design by
                                <?= $item->nama_arsitek ?></h6>
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
                                    <div class="d-flex align-items-center gap-3 ms-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
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
                                            <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
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
                                            <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
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
                                            <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
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
                                    <a class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnOne"><i class="fas fa-arrow-right fs-7"></i></button>
            </div>
        </div>
        <div class="pt-3">
            <div class="d-block d-lg-none text-center mt-5 mt-3">
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
            <div class="card-container owl-carousel owl-theme owl-carousel-two">
                <?php foreach ($produk_terbaru as $item) { ?>
                    <div class="card border-0 shadow-sm">
                        <a href="javascript:void(0)" class="image" onclick="detailRumah(<?= $item->id_rumah ?>)">
                            <div style="background-image: url('<?= base_url('assets/img/desain/' . $item->foto) ?>')" class="card-img-top bg-card-produk"></div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title mb-0 fw-semibold" onclick="detailRumah(<?= $item->id_rumah ?>)">
                                <?= $item->nama_rumah ?></h5>
                            <h6 class="nama_arsitek mb-0">Design by
                                <?= $item->nama_arsitek ?></h6>
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
                                    <div class="d-flex align-items-center gap-3 ms-2">
                                        <div>
                                            <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
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
                                            <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
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
                                            <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
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
                                            <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
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
                                    <a class="btn btn-primary w-100" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnTwo"><i class="fas fa-arrow-right fs-7"></i></button>
            </div>
        </div>
        <div class="pt-3">
            <div class="d-block d-lg-none text-center mt-5 mt-3">
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
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); pointer-events: none;">
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
                <div class="d-block d-lg-none text-center mt-7">
                    <button class="btn btn-primary" type="button" id="button-addon3">Baca Cerita Lainnya<i class=" ms-2 fas fa-arrow-right"></i></button>
                </div>
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


<script>
    $(document).ready(function() {
        getMaterial();
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


    function detailRumah(id) {

        location.href = "<?= base_url() . 'detail/' ?>" + id;

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
        location.href = "<?= base_url('detail_produk/') ?>" + id;
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

    function detailRumah(id) {
        location.href = "<?= base_url('demo/detail_koleksi/') ?>" + id;
    }


    function detailProduk(id) {

        location.href = "<?= base_url('demo/detail_material/') ?>" + id;

    }

    $(document).ready(function() {
        $('#cari-desain').on('change', function() {
            var cari = $('#cari-desain').val();
            location.href = "<?= base_url('koleksi#') ?>" + cari;
        });
    });
</script>