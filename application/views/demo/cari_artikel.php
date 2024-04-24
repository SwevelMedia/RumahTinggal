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
        height: 100%;
        width: 100%;
        max-height: 120px;
        /* max-width: 120px; */
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

    .article-container {
        align-items: stretch;
        align-content: stretch;
    }
</style>

<?php
$query_params = $this->input->get();

// Define a function to get parameter value by name
function getParams($query_params, $name)
{
    if (isset($query_params[$name])) {
        return $query_params[$name];
    } else {
        return '';
    }
}
?>

<div class="pt-2 bg-light">
    <div class="container">
        <div>
            <a href="<?= base_url('') ?>">Beranda</a> /
            <a href="<?= base_url('artikel') ?>">Artikel</a>
        </div>
        <div class="header-search-artikel d-flex flex-column align-items-center justify-content-center text-center mt-3">
            <h3 class="mt-3" style="color: #003A65;">Artikel RumahTinggal.id</h3>
            <form onsubmit="searchArtikel(event)" id="searchForm">
                <div class="input-group mb-3 mt-3 px-2 px-lg-none">
                    <input type="text" class="form-control" placeholder="berita arsitek" name="search" id="search_term" style="background-color: white;" value="<?php echo getParams($query_params, 'search'); ?>" />
                    <a href="your_link_here" style="text-decoration: none;">
                        <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: white; border-left:none; border-color: #ced4da; border-top-left-radius:0; border-bottom-left-radius:0;">
                            <i class=" fas fa-search" style="color: black;"></i>
                        </button>
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="bg-white mb-0">
    <div class="container">
        <?php if (!empty($searchArtikel)) { ?>
            <div class="search-artikel-found">
                <div class="content-desktop d-none d-lg-block">
                    <div class="row article-container">
                        <?php foreach ($searchArtikel as $item) { ?>
                            <div class="col-lg-4 col-6 mb-3 d-flex">
                                <div class="card mt-4 w-100" style="cursor:pointer;" onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                                    <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-artikel-search" onerror="this.onerror=null; this.src='<?= base_url('assets/demo/img/artikel/default-artikel-small.png') ?>';" alt="..." style="object-fit:cover;">
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
                        <?php foreach ($searchArtikel as $item) { ?>
                            <div class="thumb-artikel-mob mb-4 mt-4" onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                                <div class="row gx-3">
                                    <div class="col-4">
                                        <img src="<?= base_url('assets/img/artikel/' . $item->foto_cover) ?>" class="bg-card-arpop" onerror="this.onerror=null; this.src='<?= base_url('assets/demo/img/artikel/default-artikel-small.png') ?>';" alt="..." style="object-fit:cover;">
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
        <?php } else { ?>
            <div class="artikel-not-found" style="">
                <div class="row justify-content-center text-center">
                    <img src="<?php echo base_url('assets/demo/img/empty.png'); ?>" alt="Deskripsi Gambar" class="img-fluid" style="width: 300px; height: 200px;">
                    <h5 class="mt-3">Yah! kami tidak dapat menemukan artikel yang sesuai dengan pencarian anda.</h5>
                    <a href="<?php echo base_url('cari_artikel'); ?>" class="btn btn-outline-primary mt-3 mb-5" style="width: fit-content;">Lihat Artikel Lainnya</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script>
    function detailArtikel(id) {
        location.href = "<?= base_url('detail-artikel/') ?>" + id;
    }

    function searchArtikel(event) {
        event.preventDefault();
        var searchterm = $('#search_term').val();
        location.href = "<?= base_url('cari_artikel') ?>" + "?search=" + searchterm;
    }
</script>