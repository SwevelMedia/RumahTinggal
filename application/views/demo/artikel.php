<style>
    .card-img-artikel {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .bg-card-artikel {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* height: 390px;
        width: auto; */

    }

    @media only screen and (max-width: 767px) {
        .bg-card-artikel {
            height: 200px;
            width: auto;

        }
    }

    .bg-card-arpil {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100%;
        border-radius: 5%;

    }

    .bg-card-arpop {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100%;
        max-height: 120px;
        border-radius: 5%;

    }

    .limited-lines-artikel {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
        /* Atur jumlah baris yang diinginkan */
    }

    .limited-tittle {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
        /* Atur jumlah baris yang diinginkan */
    }
</style>

<div class="pt-2 bg-light">
    <div class="container">
        <div>
            <a href="<?= base_url('') ?>">Beranda</a> /
            <a href="<?= base_url('artikel') ?>">Artikel</a>
        </div>
        <div class="header-artikel-desktop d-none d-lg-block">
            <hr />
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="color: #003A65;">Artikel RumahTinggal.id</h3>
                <form onsubmit="searchArtikel(event)" id="searchForm">
                    <div class="input-group mt-2 mb-2" style="width: 300px;">
                        <input type="text" class="form-control" placeholder="Tips Bangun Rumah" style="background-color: white;" id="search_term" value="" />

                        <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: white; border-left:none; border-color: #ced4da; border-top-left-radius:0; border-bottom-left-radius:0;">
                            <i class="fas fa-search" style="color: black;"></i>
                        </button>

                    </div>
                </form>

            </div>
            <hr />
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="container">
        <div class="row ">
            <div class="header-artikel-mobile d-lg-none">
                <hr />
                <div class="justify-content-center text-center">
                    <h3 class="mb-4" style="color: #003A65;">Artikel RumahTinggal.id</h3>
                    <form onsubmit="searchArtikelMobile(event)" id="searchFormMobile">
                        <div class="input-group mb-3 mt-3" style="width: 100%;">
                            <input type="text" class="form-control" placeholder="Tips Bangun Rumah" id="search_term_mobile" style="background-color: #F7F7F7;" />
                            <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: #F7F7F7; border-left:none; border-color: #ced4da; border-top-left-radius:0; border-bottom-left-radius:0;">
                                <i class="fas fa-search" style="color: black;"></i>
                            </button>
                        </div>
                    </form>

                </div>
                <hr />
            </div>
            <div class="col-lg-7">
                <div class="card col-lg-10 main-img-card mt-2" onclick="detailArtikel(<?= $muka->id_artikel ?>)" style="cursor: pointer;">
                    <div class='img-container w-100'>
                        <img src="<?= base_url('assets/img/artikel/' . $muka->foto_cover) ?>" class="h-100 card-img-artikel bg-card-artikel" alt="..." onload='updateHeight()' style="object-fit:cover;">
                    </div>

                    <!-- <img src="<?= base_url('assets/img/artikel/' . $muka->foto_cover) ?>" class="card-img-artikel bg-card-artikel" alt="..." style="object-fit:cover;"> -->

                    <div class="card-body" id="myCardBody">
                        <h4 class="artikel-title"><?php echo $muka->judul_artikel; ?></h4>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex align-items-center gap-4">
                                <small>RumahTinggal</small>
                                <small><?php echo $muka->tgl_dibuat; ?></small>
                            </div>
                            <a href="<?= base_url('detail-artikel/' . $muka->id_artikel) ?>" class="btn btn-outline-primary d-none d-lg-block">Baca Artikel</a>
                        </div>
                    </div>
                </div>
                <div class=" mt-5 d-lg-none">
                    <hr />
                </div>
                <div class="container artikel-pil mt-3 p-3 d-none d-lg-block">
                    <h5 class="mb-4">Artikel Pilihan</h5>
                    <?php foreach ($popularArtikel as $item) { ?>
                        <div class="prev-artikel mb-4" onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-arpil" alt="..." style="object-fit: cover;">
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>RumahTinggal</small>
                                        <small><?php echo $item->tgl_dibuat; ?></small>
                                    </div>
                                    <h5 class="mt-3"><?php echo $item->judul_artikel; ?></h5>
                                    <div class="limited-lines-artikel">
                                        <?php echo $item->deskripsi_meta; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="d-flex justify-content-center">
                        <a href="<?= base_url('cari_artikel') ?>" class="btn btn-outline-primary">Lihat Berita Lainnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="artikel-populer mt-2 w-100">
                    <h5 class="mb-4 d-none d-lg-block">Artikel Terbaru</h5>
                    <h4 class="text-center mb-4 d-lg-none">Artikel Terbaru</h4>
                    <?php foreach ($mukaRight as $item) { ?>
                        <div class="pop-artikel mb-4" onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-arpop" style="object-fit:cover;">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>RumahTinggal</small>
                                        <small><?php echo $item->tgl_dibuat; ?></small>
                                    </div>
                                    <h5 class="limited-tittle mt-2 me-3"><?php echo $item->judul_artikel; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <a href="<?= base_url('cari_artikel') ?>" class="btn btn-outline-primary w-100 d-lg-none">Artikel Lainnya</a>
                </div>
                <div class="d-lg-none">
                    <hr />
                </div>
                <div class="artikel-terbaru d-lg-none mb-0">
                    <div class="justify-content-center text-center">
                        <h4>Artikel Populer</h4>
                    </div>
                    <div class="card mt-4 mb-5" onclick="detailArtikel(<?= $item->id_artikel ?>)">
                        <img src="<?= base_url('assets/img/artikel/' . $terbaruArtikel->foto_cover) ?>" class="card-img-artikel bg-card-artikel" alt="..." style="object-fit:cover;">
                        <div class="card-body" id="myCardBody">
                            <h4 class="artikel-title"><?php echo $terbaruArtikel->judul_artikel; ?></h4>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="d-flex align-items-center gap-4">
                                    <small>RumahTinggal</small>
                                    <small><?php echo $terbaruArtikel->tgl_dibuat; ?></small>
                                </div>
                                <a href="#" class="btn btn-outline-primary d-none d-lg-block">Baca Artikel</a>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($popularArtikel as $item) { ?>
                        <div class="new-artikel mb-4" onclick="detailArtikel(<?= $item->id_artikel ?>)">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-arpop" style="object-fit:cover;" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>RumahTinggal</small>
                                        <small><?php echo $item->tgl_dibuat; ?></small>
                                    </div>
                                    <h5 class="limited-tittle mt-2 me-3"><?php echo $item->judul_artikel; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <a href="<?= base_url('cari_artikel') ?>" class="btn btn-outline-primary w-100">Artikel Lainnya</a>
                    <div class="mt-4">
                        <hr />
                    </div>
                </div>
                <div class=kategori-artikel>
                    <h5 class="mb-3 mt-3">Kategori Artikel</h5>
                    <a href="<?= base_url('artikel') ?>" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mb-3">
                        <span>Berita Arsitek</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?= base_url('artikel') ?>" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mb-3">
                        <span>Tips & Trik</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?= base_url('artikel') ?>" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mb-3">
                        <span>Gaya Desain</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function detailArtikel(id) {
        location.href = "<?= base_url('detail-artikel/') ?>" + id;
    }

    $(window).ready(updateHeight);
    $(window).resize(updateHeight);

    function updateHeight() {
        var divref = $('.main-img-card');
        var div = $('.img-container');
        var width = divref.width() / 1.3333333;

        div.css('height', width);
    }

    function searchArtikel(event) {
        event.preventDefault();
        var searchterm = $('#search_term').val();
        location.href = "<?= base_url('cari_artikel') ?>" + "?search=" + searchterm;
    }

    function searchArtikelMobile(event) {
        event.preventDefault();
        var searchterm = $('#search_term_mobile').val();
        location.href = "<?= base_url('cari_artikel') ?>" + "?search=" + searchterm;
    }
</script>