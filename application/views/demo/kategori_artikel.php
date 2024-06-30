<style>
    .bg-card-artikel-kategori {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 200px;
        width: auto;

    }

    .bg-card-arpop {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 90px;
        width: 120px;
        border-radius: 5%;

    }

    .limited-tittle-search {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
        /* Atur jumlah baris yang diinginkan */
    }
</style>


<div class="pt-2 bg-light">
    <div class="container">
        <div class="mt-2">Beranda / Artikel</div>
        <div class="header-artikel-desktop d-none d-lg-block">
            <hr />
            <div class="d-flex justify-content-between align-items-center">
                <h3>Berita Arsitek</h3>
                <div class="input-group mb-3 mt-3" style="width: 300px;">
                    <input type="text" class="form-control" placeholder="cari desain rumah" style="background-color: #F7F7F7;" />
                    <a href="<?= base_url('demo/cari_artikel') ?>" style="text-decoration: none;">
                        <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #f7f7f7;">
                            <i class="fas fa-search" style="color: black;"></i>
                        </button>
                    </a>
                </div>
            </div>
            <hr />
        </div>
    </div>
</div>
<div class="bg-white mb-0">
    <div class="container">
        <div class="header-artikel-mobile d-lg-none">
            <hr />
            <div class="justify-content-center text-center">
                <h3 class="mb-4">Artikel RumahTinggal.id</h3>
                <div class="input-group mb-3 mt-3" style="width: 365px;">
                    <input type="text" class="form-control" placeholder="Tips Bangun Rumah" style="background-color: #F7F7F7;" />
                    <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #f7f7f7;">
                        <i class="fas fa-search" style="color: black;"></i>
                    </button>
                </div>
            </div>
            <hr />
        </div>
        <div class="content-desktop d-none d-lg-block">
            <div class="row">
                <div class="col-lg-4 col-6 mb-3">
                    <div class="card mt-4">
                        <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-artikel-kategori" alt="...">
                        <div class="card-body" id="myCardBody">
                            <div class="d-flex align-items-center gap-4">
                                <small>Gaya Desain Rumah</small>
                                <small>8 Desember 2023</small>
                            </div>
                            <h5 class="artikel-title mt-3">Penggunaan Bahan Ramah Lingkungan Untuk Rumah Tinggal</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="card mt-4">
                        <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-artikel-kategori" alt="...">
                        <div class="card-body" id="myCardBody">
                            <div class="d-flex align-items-center gap-4">
                                <small>Gaya Desain Rumah</small>
                                <small>8 Desember 2023</small>
                            </div>
                            <h5 class="artikel-title mt-3">Penggunaan Bahan Ramah Lingkungan Untuk Rumah Tinggal</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="card mt-4">
                        <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-artikel-kategori" alt="...">
                        <div class="card-body" id="myCardBody">
                            <div class="d-flex align-items-center gap-4">
                                <small>Gaya Desain Rumah</small>
                                <small>8 Desember 2023</small>
                            </div>
                            <h5 class="artikel-title mt-3">Penggunaan Bahan Ramah Lingkungan Untuk Rumah Tinggal</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <a href="#" class="btn btn-outline-primary">Lihat Berita Lainnya</a>
            </div>
        </div>
        <div class="content-mobile d-lg-none p-1">
            <h5 class="justify-content-center text-center">
                Berita Arsitek
            </h5>
            <div class="artikel mb-4 mt-4">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="d-flex align-item-center gap-3">
                            <small>Lifestyle</small>
                            <small>8 Desember 2023</small>
                        </div>
                        <h5 class="limited-tittle-search mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                    </div>
                </div>
            </div>
            <div class="artikel mb-4">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="d-flex align-item-center gap-3">
                            <small>Lifestyle</small>
                            <small>8 Desember 2023</small>
                        </div>
                        <h5 class="limited-tittle-search mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                    </div>
                </div>
            </div>
            <div class="artikel mb-4">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                    </div>
                    <div class="col-8">
                        <div class="d-flex align-item-center gap-3">
                            <small>Lifestyle</small>
                            <small>8 Desember 2023</small>
                        </div>
                        <h5 class="limited-tittle-search mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <a href="#" class="btn btn-outline-primary w-100">Lihat Berita Lainnya</a>
            </div>
            <hr />
            <div class=kategori-artikel>
                <h5 class=" justify-content-center text-center mb-3 mt-3">Kategori Lainnya</h5>
                <a href="<?= base_url('kategori_artikel') ?>" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mb-3">
                    <span>Berita Arsitek</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= base_url('kategori_artikel') ?>" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mb-3">
                    <span>Tips & Trik</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= base_url('kategori_artikel') ?>" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mb-3">
                    <span>Gaya Desain</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

</div>