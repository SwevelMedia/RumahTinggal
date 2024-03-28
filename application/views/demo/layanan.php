<style>
    .bg-card-arsi {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50px;
        width: 50px;
        border-radius: 10px;
    }

    @media only screen and (max-width: 767px) {
        .bg-card-arsi {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 32px;
            width: 50px;
            border-radius: 10px;
        }
    }

    .card-novelty {
        height: 280px;
    }

    @media (max-width: 767px) {
        .card-novelty {
            height: 360px;
            /* Tinggi untuk layar kecil */
        }
    }

    .card-layanan {
        height: 100px;
    }

    @media (max-width: 767px) {
        .card-layanan {
            height: 250px;
            /* Tinggi untuk layar kecil */
        }
    }
</style>
<div class="py-5">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row align-items-center">
            <div class="col-lg-6 mb-3">
                <h1 class="fw-bold mb-3 text-primary">Marketplace Desain Hunian</h1>
                <h1 class="fw-bold mb-3 text-primary">Terbesar di Indonesia</h1>
                <div class="row">
                    <div class="col-lg-9 mt-4">
                        <div class="position-relative border border-dark rounded-3 fw-semibold text-primary">
                            <div class="p-3 ">Setiap orang berhak memiliki rumah impian dengan desain berkualitas</div>
                            <div class="position-absolute ms-4 top-0 translate-middle">
                                <img src="<?php echo base_url('assets/demo/img/petik.png'); ?>" alt="hello" style="width: 35px; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div style="position: relative;">
                    <video id="my-video" class="rounded-4 shadow-sm" controls preload="auto" width="100%" height="auto" poster="https://rumahtinggal.id/assets/img/thumbnail_website.jpg" data-setup="{}">
                        <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4" />
                        <source src="<?php echo base_url('assets/demo/img/home.mp4'); ?>" type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-8 col-md-4">
            <hr class="border border-info border-4 rounded-4">
        </div>
    </div>
</div>
<div class="pt-0 pb-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="fw-semibold mb-3">Selamat Datang di Rumahtinggal.id</h2>
                <p>Kami adalah marketplace desain rumah tinggal yang terjangkau bagi masyarakat Indonesia. <br />Kami ada untuk menyelesaikan permasalahan banyaknya masyarakat Indonesia yang tidak dapat mengakses layanan jasa arsitek.</p>
            </div>
        </div>
        <div class="row justify-content-center d-none d-lg-flex">
            <div class="col-4 col-lg-3">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                    <div>
                        <i class="fas fa-home fs-1 text-primary"></i>
                    </div>
                    <div class="text-center text-lg-start">
                        <div class="fs-5 fw-semibold text-primary"><?php echo floor($jumlah_rumah / 10) * 10 . '+'; ?></div>
                        <small>Koleksi Desain</small>
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-3">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                    <div>
                        <i class="fas fa-file-download fs-1 text-primary"></i>
                    </div>
                    <div class="text-center text-lg-start">
                        <div class="fs-5 fw-semibold text-primary"><?php echo floor($jumlah_unduh / 100) * 100 . '+'; ?></div>
                        <small>Desain Diunduh</small>
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-3">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                    <div>
                        <i class="fas fa-user fs-1 text-primary"></i>
                    </div>
                    <div class="text-center text-lg-start">
                        <div class="fs-5 fw-semibold text-primary"><?php echo floor($jumlah_pengunjung / 100) * 100 . '+'; ?></div>
                        <small>Pengunjung Aktif</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-lg-none px-3">
            <div class="col-10 card card-body shadow border-0">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                            <div>
                                <i class="fas fa-home fs-1 text-primary"></i>
                            </div>
                            <div class="text-center text-lg-start">
                                <div class="fs-5 fw-semibold text-primary">999+</div>
                                <small>Koleksi Desain</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                            <div>
                                <i class="fas fa-file-download fs-1 text-primary"></i>
                            </div>
                            <div class="text-center text-lg-start">
                                <div class="fs-5 fw-semibold text-primary">1000+</div>
                                <small>Desain Diunduh</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
                            <div>
                                <i class="fas fa-user fs-1 text-primary"></i>
                            </div>
                            <div class="text-center text-lg-start">
                                <div class="fs-5 fw-semibold text-primary">10000+</div>
                                <small>Pengunjung Aktif</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-8 col-md-4">
            <hr class="border border-info border-4 rounded-4">
        </div>
    </div>
</div>
<div class="pt-0 pb-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="fw-semibold mb-3">Wujudkan Rumah Impian Anda Bersama RumahTinggal.id</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-lg-3 mb-3">
                <div class="card rounded-3 shadow-sm border-0 card-novelty">
                    <div class="card-body text-center" id="myCardBody">
                        <img src="<?php echo base_url('assets/demo/img/Quality.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                        <h5 class="mb-4">Desain Berkualitas</h5>
                        <div>
                            Didesain oleh arsitek profesional yang telah bersertifikat IAI.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3">
                <div class="card rounded-3 shadow-sm border-0 card-novelty">
                    <div class="card-body text-center" id="myCardBody">
                        <img src="<?php echo base_url('assets/demo/img/money-bag.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                        <h5 class="mb-4">Harga Terjangkau</h5>
                        <div>
                            Setiap desain bisa dibeli oleh 10 klien sehingga harga lebih terjangkau
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3">
                <div class="card rounded-3 shadow-sm border-0 card-novelty">
                    <div class="card-body text-center" id="myCardBody">
                        <img src="<?php echo base_url('assets/demo/img/quick-magic.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                        <h5 class="mb-4">Mudah dan Cepat</h5>
                        <div>
                            Platform digital yang dapat diakses masyarakat dari mana saja dan kapan saja.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3">
                <div class="card rounded-3 shadow-sm border-0 card-novelty">
                    <div class="card-body text-center" id="myCardBody">
                        <img src="<?php echo base_url('assets/demo/img/Idea.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                        <h5 class="mb-4">One Stop Solution</h5>
                        <div>
                            Menyediakan layanan desain, pembangunan, hingga pembelian material.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-8 col-md-4">
            <hr class="border border-info border-4 rounded-4">
        </div>
    </div>
</div>
<div class="pt-0 pb-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="fw-semibold mb-3">Layanan-Layanan Kami</h2>
                <p>Kami menawarkan layanan-layanan untuk memudahkan Anda membangun rumah idaman.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm card-layanan">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row text-center text-lg-start">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/demo/img/modif-desain.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-lg-8 d-flex align-items-center fs-4">Modifikasi Desain</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm card-layanan">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row text-center text-lg-start">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/demo/img/desain-interior.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-lg-8 d-flex align-items-center fs-4">Desain Interior</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm card-layanan">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row text-center text-lg-start">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/demo/img/pengujian-struktur.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-lg-8 fs-4">Perhitungan Stuktur</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm card-layanan">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row text-center text-lg-start">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/demo/img/imb.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-lg-8 fs-4">Gambar Pengajuan IMB</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm card-layanan">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row text-center text-lg-start">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/demo/img/lahan.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-lg-8 fs-4">Jasa Pengukuran Lahan</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 mb-3">
                <div class="card rounded-3 shadow-sm card-layanan">
                    <div class="card-body bg-primary text-white rounded-3" id="myCardBody">
                        <div class="row text-center text-lg-start">
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/demo/img/tanah.png'); ?>" alt="Desain Berkualitas" class="img-fluid mb-3">
                            </div>
                            <div class="col-lg-8 fs-4">Jasa Pengujian Tanah</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-8 col-md-4">
            <hr class="border border-info border-4 rounded-4">
        </div>
    </div>
</div>
<div class="pt-0 pb-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2 class="fw-semibold mb-3">Arsitek Kolaborator Kami</h2>
            </div>
        </div>
        <div class="daftar-arsitek" style="width:fit-content; height: 500px; overflow-y:auto">
            <div class="row">
                <?php foreach ($arsitek as $item) { ?>
                    <div class="col-6 col-lg-4 mb-4">
                        <div class="card rounded-3 shadow-sm border-0">
                            <div class="card-body" id="myCardBody">
                                <div class="row">
                                    <div class="d-flex mb-3 align-items-center gap-3">
                                        <div class="bg-card-arsi" style="background-image: url('<?php echo base_url() . 'assets/img/arsitek/' . $item->foto ?>')"></div>
                                        <div class=" text-center text-lg-start d-none d-lg-block">
                                            <h5 class="fw-semibold"><?php echo $item->nama_arsitek ?></h5>
                                            <div><?php echo $item->alamat ?></div>
                                        </div>
                                        <div class="d-lg-none">
                                            <div class="fw-semibold"><?php echo $item->nama_arsitek ?></div>
                                            <div><?php echo $item->alamat ?></div>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <p class="px-2 limited-lines "><?php echo $item->profil ?></p>
                                    </div>
                                    <div class="d-flex mb-3 justify-content-center gap-3">
                                        <button type="button" class="btn btn-outline-primary d-none d-lg-block">
                                            <a href="mailto:<?php echo $item->email ?>?subject=Tanya%20Arsitek%20%5Brumahtinggal.id%5D&body=Halo%20<?php echo $arsitek[0]->nama_arsitek ?>%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20Anda%20di%20rumahtinggal.id" target="_blank" style="text-decoration: none; color: inherit;">
                                                Kontak
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-primary" onclick="openPortofolio(<?= $item->id_arsitek ?>)">
                                            Portofolio
                                            <img src="<?php echo base_url('assets/demo/img/maximize.png'); ?>" alt="Arrow Icon" class="ms-1">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    function openPortofolio(id) {
        location.href = "<?= base_url('profil_arsitek/') ?>" + id;
    }
</script>