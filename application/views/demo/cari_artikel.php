<style>
    .card-img-artikel {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .bg-card-artikel-search {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 200px;
        width: auto;

    }

    .input-group {
        width: 450px;
    }

    @media only screen and (max-width: 767px) {
        .input-group {
            width: 365px;

        }
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

    .header-search-artikel {
        background-color: transparent;
        border-top: #D6D6D6 solid 1px;
        border-bottom: #D6D6D6 solid 1px;
    }

    @media only screen and (max-width: 767px) {
        .header-search-artikel {
            background-color: transparent;
            border-top: #D6D6D6 solid 1px;
            border-bottom: #D6D6D6 solid 1px;

        }
    }
</style>


<div class="pt-2 bg-light">
    <div class="container">
        <div>
            <a href="<?= base_url('') ?>">Beranda</a> /
            <a href="<?= base_url('artikel') ?>">Artikel</a>
        </div>
        <div class="header-search-artikel d-flex flex-column align-items-center justify-content-center text-center mt-3">
            <h3 class="mt-3" style="color: #003A65;">Artikel RumahTinggal.id</h3>
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="berita arsitek" style="background-color: #F7F7F7;" />
                <a href="your_link_here" style="text-decoration: none;">
                    <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #f7f7f7;">
                        <i class="fas fa-search" style="color: black;"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white mb-0">
    <div class="container">
        <div class="search-artikel-found">
            <div class="content-desktop d-none d-lg-block">
                <div class="row">
                    <?php foreach ($semuaArtikel as $item) { ?>
                        <div class="col-lg-4 col-6 mb-3">
                            <div class="card mt-4" style="height: 330px;" onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                                <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-artikel-search" alt="...">
                                <div class="card-body" id="myCardBody">
                                    <div class="d-flex align-items-center gap-4">
                                        <small>RumahTinggal</small>
                                        <small><?php echo $item->tgl_dibuat; ?></small>
                                    </div>
                                    <h5 class="artikel-title mt-3"><?php echo $item->judul_artikel; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- <div class="d-flex justify-content-center mb-2">
                    <a href="#" class="btn btn-outline-primary">Lihat Berita Lainnya</a>
                </div> -->
            </div>
            <div class="content-mobile d-lg-none p-1">
                <div class="artikel mb-4 mt-4">
                    <?php foreach ($semuaArtikel as $item) { ?>
                        <div class="thumb-artikel-mob mb-4 mt-4" onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-arpop" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>RumahTinggal</small>
                                        <small><?php echo $item->tgl_dibuat; ?></small>
                                    </div>
                                    <h5 class="limited-tittle-search mt-2 me-3"><?php echo $item->judul_artikel; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- <div class="d-flex justify-content-center mb-2">
                    <a href="#" class="btn btn-outline-primary w-100">Lihat Berita Lainnya</a>
                </div> -->
            </div>
        </div>
        <div class="artikel-not-found" style="display: none;">
            <div class="row justify-content-center text-center">
                <img src="<?php echo base_url('assets/demo/img/empty.png'); ?>" alt="Deskripsi Gambar" class="img-fluid" style="width: 300px; height: 200px;">
                <h5 class="mt-3">Yah! kami tidak dapat menemukan artikel yang sesuai dengan pencarian anda.</h5>
                <a href="" class="btn btn-outline-primary mt-3 mb-5" style="width: fit-content;">Lihat Artikel Lainnya</a>
            </div>
        </div>
    </div>
</div>

<script>
    function detailArtikel(id) {
        location.href = "<?= base_url('detail-artikel/') ?>" + id;
    }
</script>