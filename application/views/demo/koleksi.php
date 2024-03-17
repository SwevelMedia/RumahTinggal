<style>
    .gaya-desain-open,
    .dropdown-content-gaya,
    .dropdown-content-ruangan,
    .ruangan-open {
        display: none;
        /* Mulai dengan menyembunyikan gaya-desain-open */
    }

    .truncateTitle {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card:hover .truncateTitle {
        white-space: normal;
        overflow: visible;
        text-overflow: clip;
    }

    .teks-card-info {
        font-weight: 600;
    }

    @media screen and (max-width: 767px) {
        .card-body {
            max-height: 8rem;
            /* Adjust the height as needed */
            overflow: hidden;
        }

        .card-body:hover {
            overflow: visible;
        }

        .teks-card-info {
            font-weight: normal;
            font-size: 0.8rem;
        }

        .lihat-detail-button {
            font-size: small;
        }
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

    /* style untuk pemilihan sort di modal filter untuk mobile */
    .custom-radio-btn input[type="radio"] {
        display: none;
    }

    .custom-radio-btn {
        cursor: pointer;
    }


    .custom-radio-btn input[type="radio"]:checked+label {
        background-color: #007bff;
    }
</style>

<?php
// Definisikan fungsi getSortLabel
function getSortLabel($sortType)
{
    switch ($sortType) {
        case 'default':
            return 'Paling Sesuai';
        case 'populer':
            return 'Desain Populer';
        case 'terbaru':
            return 'Terbaru';
        case 'biaya_terendah':
            return 'Biaya Terendah';
        case 'biaya_tertinggi':
            return 'Biaya Tertinggi';
        default:
            return 'Paling Sesuai';
    }
}

// Retrieve query parameters
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

function getChecked($query_params, $name, $id)
{
    if (isset($query_params[$name])) {
        $ids = explode(',', $query_params[$name]);

        if (in_array($id, $ids)) {
            return 'checked';
        }
    }
    return '';
}

function getActive($query_params, $name, $id)
{
    if (isset($query_params[$name])) {
        $ids = explode(',', $query_params[$name]);

        if (in_array($id, $ids)) {
            return 'active';
        }
    }
    return '';
}

function truncateTitle($title, $length)
{
    if (strlen($title) > $length) {
        $truncated_title = substr($title, 0, $length);
        $truncated_title .= "...";
        return $truncated_title;
    } else {
        return $title;
    }
}

// ... Bagian lain dari kode PHP Anda ...

// Ambil nilai sort dari URL atau setel ke default
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'default';

// ... Bagian lain dari kode PHP Anda ...

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $_SESSION['lantai'] = $_POST['lantai']; // Assuming 'category' is the name of your filter input
//     $koleksi_rumah = array_filter($koleksi_rumah, 'filterByLantai');
// }

// function filterByLantai($rumah)
// {
//     return $rumah->lantai == $_SESSION['lantai'];
// }
// 
?>

<div class="py-2 bg-header-web">
    <div class="container py-2 px-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3 text-primary">Koleksi Desain</h1>
                <h1 class="fw-bold mb-3 text-primary">Hunian Impian Anda</h1>
                <p class="mb-3">Temukan desain hunian terbaik yang sesuai </br> dengan kebutuhan dan selera Anda</p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="owl-carousel owl-theme owl-carousel-koleksi d-none d-lg-block">
                        <img src="<?php echo base_url('assets/demo/img/banner1.png'); ?>" alt="" class="banner-img" />
                        <img src="<?php echo base_url('assets/demo/img/banner2.png'); ?>" alt="" class="banner-img" />
                        <img src="<?php echo base_url('assets/demo/img/banner3.png'); ?>" alt="" class="banner-img" />
                    </div>
                    <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block" style="z-index: 1000">
                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle me-3" id="nextBtnKoleksi"><i class="fas fa-arrow-right fs-7"></i></button>
                    </div>
                    <div class="position-absolute top-50 start-60 translate-middle d-none d-lg-block" style="z-index: 1000">
                        <button class="btn btn-white border-0 bg-white shadow-sm rounded-circle" id="prevBtnKoleksi"><i class="fas fa-arrow-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Head end -->
<div class="container-fluid d-lg-none">
    <div class="d-flex justify-content-between align-items-center flex-row flex-lg-row mb-3 gap-2 mt-2">
        <div class="btn-group">
            <button class="btn btn-light border-2 d-flex align-items-center" type="button" id="button-addon2" onclick="openFilterModal()">
                <i class="me-2 fas fa-filter"></i>Filter
            </button>
        </div>
        <form class="search-mobile input-group mb-3 mt-3">
            <input type="text" class="form-control" placeholder="cari desain rumah" style="background-color: #F7F7F7;" name="search" value="<?php echo getParams($query_params, 'search'); ?>" />
            <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: #f7f7f7; border-left:none; border-color: #ced4da;">
                <i class="fas fa-search" style="color: black;"></i>
            </button>
        </form>
    </div>
</div>

<!--Temukan Desain start-->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <form class="col-lg-3 mb-3 d-none d-lg-block" id="form-filter">
                <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
                    <h5 class="fw-semibold text-center ms-3">
                        <i class="fas fa-filter"></i> Filter
                    </h5>
                    <p class="hapus-filter" style="text-decoration: underline; color: #00528e; cursor:pointer;">Hapus Filter</p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="cari desain rumah" style="background-color: white;" name="search" value="<?php echo getParams($query_params, 'search'); ?>" />
                    <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: white; border-left:none; border-color: #ced4da;">
                        <i class="fas fa-search " style="color: black;"></i>
                    </button>
                </div>
                <div class="fw-semibold mb-2">Biaya Konstruksi</div>
                <div class="d-flex justify-content-between flex-column flex-lg-row mb-3 text-center gap-2">
                    <div class="mb-2 col-lg-auto" style="width: 45%;">
                        <input type="text" id="min_biaya" name="min_biaya" class="form-control" placeholder="Rp Minimal" value=<?php echo getParams($query_params, 'min_biaya') ?>>
                    </div>
                    <span class="mb-2 col-lg-auto mt-2">-</span>
                    <div class="mb-2 col-lg-auto" style="width: 45%;">
                        <input type="text" id="max_biaya" name="max_biaya" class="form-control" placeholder="Rp Maksimal" value=<?php echo getParams($query_params, 'max_biaya') ?>>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="panjangLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Panjang Lahan (m)</div>
                            <div><span id="ubahPanjang" class="badge bg-light text-dark"><?= (int)$range_panjang_lahan->min_panjang_lahan . ' - ' . (int)$range_panjang_lahan->max_panjang_lahan ?></span> meter</div>
                        </div>
                    </label>
                    <div style="margin-top: -24px; " id="sliderPanjangContainer">
                        <input type="text" class="js-range-slider-panjang" id="panjangLahan" name="panjang_lahan" value="" />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="lebarLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Lebar Lahan (m)</div>
                            <div><span id="ubahLebar" class="badge bg-light text-dark"><?= (int)$range_lebar_lahan->min_lebar_lahan . ' - ' . (int)$range_lebar_lahan->max_lebar_lahan ?></span> meter</div>
                        </div>
                    </label>
                    <div style="margin-top: -24px; " id="sliderLebarContainer">
                        <input type="text" class="js-range-slider-lebar" id="lebarLahan" name="lebar_lahan" value="" />
                    </div>
                </div>
                <div class="form-group mb-3 col-6 col-lg-12">
                    <label for="jumlah_lantai" class="form-label fw-semibold">Jumlah Lantai</label>
                    <input type="number" class="form-control" id="jumlah_lantai" name="lantai" placeholder="Jumlah Lantai" value=<?php echo getParams($query_params, 'lantai') ?> />
                </div>
                <div class="form-group mb-3 col-6 col-lg-12">
                    <label for="jumlah_kamar" class="form-label fw-semibold">Jumlah Kamar</label>
                    <input type="number" class="form-control" id="jumlah_kamar" placeholder="Jumlah Kamar" name="kamar" value=<?php echo getParams($query_params, 'kamar') ?> />
                </div>
                <hr />
                <div class="accordion" id="accordionGayaDesain">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="gayaDesain">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushGayaDesain" aria-expanded="false" aria-controls="flushGayaDesain">
                                Gaya Desain
                            </button>
                        </h2>
                        <div id="flushGayaDesain" class="accordion-collapse collapse" aria-labelledby="gayaDesain" data-bs-parent="#accordionGayaDesain">
                            <div class="accordion-body">
                                <?php
                                // Loop through the design options array to generate checkboxes
                                foreach ($gaya_desain as $option) :
                                    $isChecked = getChecked($query_params, 'gaya', $option->id_gaya_desain);
                                ?>
                                    <div class="d-flex justify-content-between gap-3 align-items-center mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $option->id_gaya_desain; ?>" id="checkbox_desain_<?php echo $option->id_gaya_desain; ?>" name="checkbox_desain" <?php echo $isChecked; ?>>
                                            <label class="form-check-label" for="checkbox_desain_<?php echo $option->id_gaya_desain; ?>">
                                                <?php echo $option->gaya_desain; ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="accordion" id="accordionRuangan">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ruanganRumah">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushRuanganRumah" aria-expanded="false" aria-controls="flushRuanganRumah1">
                                Ruangan
                            </button>
                        </h2>
                        <div id="flushRuanganRumah" class="accordion-collapse collapse" aria-labelledby="ruanganRumah" data-bs-parent="#accordionRuangan">
                            <div class="accordion-body">
                                <?php
                                // Loop through the design options array to generate checkboxes
                                foreach ($ruangan as $option) :
                                    $isChecked = getChecked($query_params, 'ruang', $option->id_ruang);
                                ?>
                                    <div class="d-flex justify-content-between gap-3 align-items-center mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $option->id_ruang; ?>" id="checkbox_desain_<?php echo $option->id_ruang; ?>" name="checkbox_ruang" <?php echo $isChecked; ?>>
                                            <label class="form-check-label" for="checkbox_desain_<?php echo $option->id_ruang; ?>">
                                                <?php echo $option->ruang; ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-4 py-2">Terapkan</button>
                <hr />
                <div class="card bg-white rounded-2 card-min border-2">
                    <div class="align-items-center">
                        <img src="<?php echo base_url('assets/demo/img/assesment.png'); ?>" class="p-4 img-fluid" alt="" />
                    </div>
                    <div class="fw-semibold mb-2 text-center p-2">Temukan Desain Hunian dengan Lebih Akurat</div>
                    <p class="mb-3 text-center p-2">Fitur asesmen memudahkan Anda untuk mencari desain hunian sesuai kebutuhan</p>
                    <div class="pb-4 mx-auto">
                        <button class="btn btn-danger" type="button" id="button-addon2">Mulai Assesmen</button>
                    </div>
                </div>
            </form>
            <div class="col-lg-9">
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
                        <div>
                            <?php
                            // Jumlah item per halaman
                            $items_per_page = 12;

                            // Hitung total jumlah halaman
                            $total_pages = ceil(count($koleksi_rumah) / $items_per_page);

                            // Mendapatkan halaman saat ini dari parameter URL atau default ke 1
                            $current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

                            // Hitung offset untuk query
                            $offset = ($current_page - 1) * $items_per_page;

                            // Tampilkan pesan di sini di luar perulangan
                            echo '<p>Menampilkan ' . ($offset + 1) . ' - ' . min(($offset + $items_per_page), count($koleksi_rumah)) . ' dari ' . count($koleksi_rumah) . ' desain</p>';
                            ?>
                        </div>
                        <div class="dropdown">
                            <button id="sortButton" class="btn btn-outline-white border-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Urutkan: <?= getSortLabel($sort) ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" id="sortDefault">Paling Sesuai</a></li>
                                <li><a class="dropdown-item" href="#" id="sortPopuler">Desain Populer</a></li>
                                <li><a class="dropdown-item" href="#" id="sortTerbaru">Desain Terbaru</a></li>
                                <li><a class="dropdown-item" href="#" id="sortHargaTerendah">Harga Terendah</a></li>
                                <li><a class="dropdown-item" href="#" id="sortHargaTertinggi">Harga Tertinggi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="konten-koleksi">
                    <div class="row">
                        <?php
                        // Jumlah item per halaman
                        $paginated_data = array_slice($koleksi_rumah, $offset, $items_per_page);

                        // Menampilkan data rumah yang dipaginasi
                        foreach ($paginated_data as $item) {
                        ?>
                            <div class="col-lg-6 col-xl-4 col-md-6 col-6 mb-3">
                                <div class="card desain-card border-0 shadow-sm" style="height: max-content;">
                                    <a href="javascript:void(0)" class="image mb-3 mb-md-0 card-image">
                                        <div style="background-image: url('<?= base_url('assets/img/desain/' . $item->foto) ?>')" class="card-img-top bg-card-produk"></div>
                                    </a>
                                    <div class="card-body pt-0 pt-md-4">
                                        <h5 class="card-title mb-0 fw-semibold d-none d-md-block">
                                            <?= $item->nama_rumah; ?></h5>
                                        <h6 class="card-title mb-0 fw-semibold d-md-none truncateTitle">
                                            <?= $item->nama_rumah ?></h6>
                                        <h6 class="nama_arsitek mb-0 d-none d-md-block" onclick="detailArsitek(<?= $item->id_rumah ?>)">
                                            <?= $item->nama_arsitek ?></h6>
                                        <h6 class="nama_arsitek mb-0 d-md-none" onclick="detailArsitek(<?= $item->id_rumah ?>)" style="font-size: 0.9rem;">
                                            <?= $item->nama_arsitek ?></h6>
                                        <hr class="my-2 d-md-none" />
                                        <hr class="my-3 d-none d-md-block" />
                                        <div class=" d-flex align-items-center gap-3 mb-1">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                            </div>
                                            <div>
                                                <small class="d-none d-md-inline lahan-minimal">Lahan Minimal</small>
                                                <small class="fw-semibold d-block"><?= $item->lebar_lahan . ' m x ' . $item->panjang_lahan . ' m' ?></small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                            </div>
                                            <div>
                                                <small class="d-none d-md-inline biaya-konstruksi">Biaya Konstruksi</small>
                                                <small class="fw-semibold d-block"><?= $item->lantai == '1' ? "Rp" . number_format(3500000 * $item->luas_bangunan, 0, ",", ".") : ($item->lantai == '2' ? "Rp" . number_format(4500000 * $item->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $item->luas_bangunan, 0, ",", ".")); ?></small>
                                            </div>
                                        </div>
                                        <div class="mt-3"></div>
                                    </div>
                                    <div class="card-info">
                                        <div class="row justify-content-between mb-2 g-0">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 gap-md-3 ms-2">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="20" height="20">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline ">Bangunan</small>
                                                        <small class="d-block teks-card-info"><?= $item->luas_bangunan ?> m2 </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 gap-md-3">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="20" height="20">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline ">Kamar Tidur</small>
                                                        <small class="d-block teks-card-info"><?= $item->kamar_tidur ?> Kamar </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between mb-3 g-0">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 gap-md-3 ms-2">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="20" height="20">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline ">Lantai</small>
                                                        <small class="d-none d-md-block teks-card-info"><?= $item->lantai ?> Lantai </small>
                                                        <small class="d-block d-md-none teks-card-info"><?= $item->lantai ?> Lt. </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 gap-md-3">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="20" height="20">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline ">Kamar Mandi</small>
                                                        <small class="d-block teks-card-info"><?= $item->toilet ?> Kamar</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-1">
                                            <div class="text-center">
                                                <a class="btn btn-primary w-100 lihat-detail-button" onclick="detailRumah(<?= $item->id_rumah ?>)"> <i class="fa-solid fa-file-import me-2"></i>Lihat Detail</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <?php
                                // Menampilkan 5 angka halaman sekaligus
                                $start = max(1, $current_page - 2);
                                $end = min($total_pages, $start + 4);

                                // Ensure that we always display exactly 5 page numbers
                                if ($end - $start < 4) {
                                    $start = max(1, $end - 4);
                                }
                                ?>
                                <li class="page-item <?php echo ($current_page == 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="<?php echo getPageUrl(max(1, $current_page - 2)); ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <?php

                                for ($i = $start; $i <= $end; $i++) {
                                ?>
                                    <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                        <a class="page-link" href="<?php echo getPageUrl($i); ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php
                                }
                                ?>

                                <li class="page-item <?php echo ($current_page == $total_pages) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="<?php echo getPageUrl(min($total_pages, $current_page + 2)); ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="koleksi-not-found" style="display: none;">
                    <div class="row justify-content-center text-center">
                        <img src="<?php echo base_url('assets/demo/img/empty.png'); ?>" alt="Deskripsi Gambar" class="img-fluid" style="width: 300px; height: 200px;">
                        <h5 class="mt-3">Yah! Tidak ada desain hunian yang sesuai dengan pencarian Anda.</h5>
                        <div class="mt-1">Silahkan hubungi kami untuk mendapatkan rekomendasi desain yang sesuai.</div>
                        <a href="" class="btn btn-primary mt-3" style="width: fit-content;">Hubungi Kami</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFilter" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content">
            <div class="bg-light">
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <h5 class="fw-semibold ms-3">
                        <i class="fas fa-filter"></i> Filter
                    </h5>
                    <p class="hapus-filter me-3" style="text-decoration: underline; color: #00528e; cursor:pointer;">Hapus Filter</p>
                </div>
                <div class="bg-white mx-2 p-2">
                    <div class="d-flex flex-column">
                        <div class="fw-semibold ms-2">Urutkan</div>
                        <div class="d-flex flex-row flex-wrap" id="sortButtonGroup">
                            <button type="button" class="btn btn-light border-2 m-1 <?php echo getActive($query_params, 'sort', "default"); ?>" onclick="handleSortClick(this)" data-value="default">Paling Sesuai</button>
                            <button type="button" class="btn btn-light border-2 m-1 <?php echo getActive($query_params, 'sort', "populer"); ?>" onclick="handleSortClick(this)" data-value="populer">Paling Populer</button>
                            <button type="button" class="btn btn-light border-2 m-1 <?php echo getActive($query_params, 'sort', "terbaru"); ?>" onclick="handleSortClick(this)" data-value="terbaru">Terbaru</button>
                            <button type="button" class="btn btn-light border-2 m-1 <?php echo getActive($query_params, 'sort', "harga_terendah"); ?>" onclick="handleSortClick(this)" data-value="harga_terendah">Biaya Terendah</button>
                            <button type="button" class="btn btn-light border-2 m-1 <?php echo getActive($query_params, 'sort', "harga_tertinggi"); ?>" onclick="handleSortClick(this)" data-value="harga_tertinggi">Biaya Tertinggi</button>
                        </div>

                        <input type="hidden" id="selectedSortValue" name="sort">

                    </div>
                    <div class="fw-semibold ms-3 mt-3">Biaya Konstruksi</div>
                    <div class="d-flex mt-2">
                        <div class="ms-3 mb-2 col-lg-auto" style="width: 42%;">
                            <input type="text" id="min_biaya" name="min_biaya" class="form-control" placeholder="Rp Minimal" value=<?php echo getParams($query_params, 'min_biaya') ?>>
                        </div>
                        <span class="ms-2 mb-2 col-lg-auto mt-2">-</span>
                        <div class="ms-2 mb-2 col-lg-auto" style="width: 42%;">
                            <input type="text" id="max_biaya" name="max_biaya" class="form-control" placeholder="Rp Maksimal" value=<?php echo getParams($query_params, 'max_biaya') ?>>
                        </div>
                    </div>
                    <div class="mx-3 mt-3">
                        <label for="panjangLahan" class="form-label fw-semibold d-block w-100">
                            <div class="d-flex justify-content-between">
                                <div>Panjang Lahan (m)</div>
                                <div><span id="ubahPanjangMobile" class="badge bg-light text-dark"><?= (int)$range_panjang_lahan->min_panjang_lahan . ' - ' . (int)$range_panjang_lahan->max_panjang_lahan ?></span> meter</div>
                            </div>
                        </label>
                        <div style="margin-top: -24px; " id="sliderPanjangContainer">
                            <input type="text" class="js-range-slider-panjang-mobile" id="panjangLahan" name="panjang_lahan" value="" />
                        </div>
                    </div>
                    <div class="mx-3 mt-3">
                        <label for="lebarLahan" class="form-label fw-semibold d-block w-100">
                            <div class="d-flex justify-content-between">
                                <div>Lebar Lahan (m)</div>
                                <div><span id="ubahLebarMobile" class="badge bg-light text-dark"><?= (int)$range_lebar_lahan->min_lebar_lahan . ' - ' . (int)$range_lebar_lahan->max_lebar_lahan ?></span> meter</div>
                            </div>
                        </label>
                        <div style="margin-top: -24px; " id="sliderLebarContainer">
                            <input type="text" class="js-range-slider-lebar-mobile" id="lebarLahan" name="lebar_lahan" value="" />
                        </div>
                    </div>

                    <div class="form-group ms-3 mt-3 me-3">
                        <label for="jumlah_lantai" class="form-label fw-semibold">Jumlah Lantai</label>
                        <input type="number" class="form-control" id="jumlah_lantai" placeholder="Jumlah Lantai" name="lantai" value=<?php echo getParams($query_params, 'lantai') ?> />
                    </div>
                    <div class="form-group ms-3 mt-3 me-3">
                        <label for="jumlah_kamar" class="form-label fw-semibold">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="jumlah_kamar" placeholder="Jumlah Kamar" name="kamar" value=<?php echo getParams($query_params, 'kamar') ?> />
                    </div>
                    <div class="bg-white mx-2 p-3 mt-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold ms-2">Gaya Desain</div>
                                <small class="fw-semibold me-1 cursor-pointer" id="lihatSemuaGaya">Lihat Semua</small>
                            </div>
                            <div class="gaya-desain mt-2">
                                <div class="d-flex">
                                    <?php foreach ($gaya_desain as $index => $option) :
                                        $isActive = getActive($query_params, 'gaya', $option->id_gaya_desain);
                                    ?>
                                        <button type="button" class=" buttonGaya btn btn-light border-2 m-1 <?php if ($index >= 3) echo 'd-none'; ?> <?php echo $isActive; ?>" data-value="<?php echo $option->id_gaya_desain; ?>" onclick="handleGayaClick(this)"><?php echo $option->gaya_desain; ?></button>
                                    <?php endforeach; ?>
                                </div>
                                <div class="gaya-desain-open">
                                    <div class="d-flex flex-wrap flex-row">
                                        <?php foreach ($gaya_desain as $index => $option) :
                                            $isActive = getActive($query_params, 'gaya', $option->id_gaya_desain);
                                        ?>
                                            <button type="button" class="buttonGaya btn btn-light border-2 m-1 <?php if ($index < 3) echo 'd-none'; ?>  <?php echo $isActive; ?>" data-value="<?php echo $option->id_gaya_desain; ?>" onclick="handleGayaClick(this)"><?php echo $option->gaya_desain; ?></button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>

                            <input type="hidden" id="selectedGayaValues" name="gaya" value="<?php echo getParams($query_params, 'gaya') ?>">

                        </div>
                    </div>
                    <div class="bg-white mx-2 p-3 mt-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold ms-2">Ruangan</div>
                                <small class="fw-semibold me-1 cursor-pointer" id="lihatSemuaRuangan">Lihat Semua</small>
                            </div>
                            <div class="ruangan mt-2">
                                <div class="d-flex">
                                    <?php foreach ($ruangan as $index => $option) :
                                        $isActive = getActive($query_params, 'ruang', $option->id_ruang);
                                    ?>
                                        <button type="button" class="buttonRuang btn btn-light border-2 m-1 <?php if ($index >= 2) echo 'd-none'; ?> <?php echo $isActive; ?>" style="white-space:nowrap" data-value="<?php echo $option->id_ruang; ?>" onclick="handleRuangClick(this)"><?php echo $option->ruang; ?></button>
                                    <?php endforeach; ?>
                                </div>
                                <div class="ruangan-open">
                                    <div class="d-flex flex-wrap flex-row">
                                        <?php foreach ($ruangan as $index => $option) :
                                            $isActive = getActive($query_params, 'ruang', $option->id_ruang);
                                        ?>
                                            <button type="button" class="buttonRuang btn btn-light border-2 m-1 <?php if ($index < 2) echo 'd-none'; ?> <?php echo $isActive; ?>" data-value="<?php echo $option->id_ruang; ?>" onclick="handleRuangClick(this)"><?php echo $option->ruang; ?></button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <input type="hidden" id="selectedRuangValues" name="ruang" value="<?php echo getParams($query_params, 'ruang') ?>">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mx-auto gap-3 mt-3 mb-3">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                        <button type="submit" class="btn btn-primary">Terapkan</button>
                    </div>
                </div>
        </form>
    </div>
</div>

<?php
function getPageUrl($page)
{
    $url = strtok($_SERVER["REQUEST_URI"], '?');
    $queryString = isset($_SERVER["QUERY_STRING"]) ? $_SERVER["QUERY_STRING"] : '';

    // Remove existing 'page' parameter if it exists
    $queryString = preg_replace('/(^|&)page=[^&]*/', '', $queryString);

    // Check if there are existing query parameters
    if (!empty($queryString)) {
        return $url . '?' . $queryString . '&page=' . $page;
    } else {
        return $url . '?page=' . $page;
    }
}
?>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cards2 = document.querySelectorAll('.desain-card');

        var maxHeight2 = 0;
        cards2.forEach(function(card2) {
            maxHeight2 = Math.max(maxHeight2, card2.offsetHeight);
        });
        cards2.forEach(function(card2) {
            card2.style.height = maxHeight2 + 'px';
        });
    });

    //function to handle sort buttons in mobile
    function handleSortClick(button) {
        var isActive = button.classList.contains('active');
        var buttons = document.querySelectorAll('#sortButtonGroup .btn');

        buttons.forEach(function(btn) {
            btn.classList.remove('active');
        });

        if (!isActive) {
            button.classList.add('active');
            var customValue = button.getAttribute('data-value');
            document.getElementById('selectedSortValue').value = customValue;
        } else {
            document.getElementById('selectedSortValue').value = '';
        }
    }

    //function to handle gaya buttons in mobile
    function handleGayaClick(button) {
        var isActive = button.classList.contains('active');
        var selectedValues = document.getElementById('selectedGayaValues').value.split(',');

        if (!isActive) {
            button.classList.add('active');
            selectedValues.push(button.getAttribute('data-value'));
        } else {
            button.classList.remove('active');
            var index = selectedValues.indexOf(button.getAttribute('data-value'));
            if (index !== -1) {
                selectedValues.splice(index, 1);
            }
        }

        document.getElementById('selectedGayaValues').value = selectedValues.filter(value => value !== '').join(',');
    }

    //function to handle ruang buttons in mobile
    function handleRuangClick(button) {
        var isActive = button.classList.contains('active');
        var selectedValues = document.getElementById('selectedRuangValues').value.split(',');

        if (!isActive) {
            button.classList.add('active');
            selectedValues.push(button.getAttribute('data-value'));
        } else {
            button.classList.remove('active');
            var index = selectedValues.indexOf(button.getAttribute('data-value'));
            if (index !== -1) {
                selectedValues.splice(index, 1);
            }
        }

        document.getElementById('selectedRuangValues').value = selectedValues.filter(value => value !== '').join(',');
        console.log(document.getElementById('selectedRuangValues').value)
    }


    //function to clear all filters (desktop)
    $(document).ready(function() {
        // Event delegation for 'hapus-filter' button click
        $(document).on('click', '.hapus-filter', function() {
            // Clear input values
            $('input[type="text"]').val('');
            $('input[type="number"]').val('');
            $('input[type="hidden"]').val('');
            $('input[type="checkbox"]').prop('checked', false);

            // Update ionRangeSlider for 'panjang' input
            $('.js-range-slider-panjang').data('ionRangeSlider').update({
                from: <?= $range_panjang_lahan->min_panjang_lahan ?>,
                to: <?= $range_panjang_lahan->max_panjang_lahan ?>,
            });
            $('.js-range-slider-panjang-mobile').data('ionRangeSlider').update({
                from: <?= $range_panjang_lahan->min_panjang_lahan ?>,
                to: <?= $range_panjang_lahan->max_panjang_lahan ?>,
            });
            $("#panjangLahan").val('');
            $("#ubahPanjang").html("<?php echo (int)$range_panjang_lahan->min_panjang_lahan . ' - ' . (int)$range_panjang_lahan->max_panjang_lahan ?>");
            $("#ubahPanjangMobile").html("<?php echo (int)$range_panjang_lahan->min_panjang_lahan . ' - ' . (int)$range_panjang_lahan->max_panjang_lahan ?>");

            // Update ionRangeSlider for 'lebar' input
            $('.js-range-slider-lebar').data('ionRangeSlider').update({
                from: <?= $range_lebar_lahan->min_lebar_lahan ?>,
                to: <?= $range_lebar_lahan->max_lebar_lahan ?>,
            });
            $('.js-range-slider-lebar-mobile').data('ionRangeSlider').update({
                from: <?= $range_lebar_lahan->min_lebar_lahan ?>,
                to: <?= $range_lebar_lahan->max_lebar_lahan ?>,
            });
            $("#lebarLahan").val('');
            $("#ubahLebar").html("<?php echo (int)$range_lebar_lahan->min_lebar_lahan . ' - ' . (int)$range_lebar_lahan->max_lebar_lahan ?>");
            $("#ubahLebarMobile").html("<?php echo (int)$range_lebar_lahan->min_lebar_lahan . ' - ' . (int)$range_lebar_lahan->max_lebar_lahan ?>");

            $('.buttonGaya.active').removeClass('active');
            $('.buttonRuang.active').removeClass('active');
        });
    });



    // function to make lebarlahan and panjanglahan sliders
    $(".js-range-slider-panjang").ionRangeSlider({
        skin: "round",
        type: "double",
        min: <?= $range_panjang_lahan->min_panjang_lahan ?>,
        max: <?= $range_panjang_lahan->max_panjang_lahan ?>,
        from: <?= getParams($query_params, 'min_panjang') !== '' ? getParams($query_params, 'min_panjang') : $range_panjang_lahan->min_panjang_lahan ?>,
        grid: true,
        to: <?= getParams($query_params, 'max_panjang') !== '' ? getParams($query_params, 'max_panjang') : $range_panjang_lahan->max_panjang_lahan ?>,
        grid_num: 6,
        from_min: <?= $range_panjang_lahan->min_panjang_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_panjang_lahan->max_panjang_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_panjang = $('.js-range-slider-panjang').data().from;
            let to_panjang = $('.js-range-slider-panjang').data().to;
            $("#panjangLahan").val(from_panjang + "-" + to_panjang);
            $("#ubahPanjang").html(from_panjang + ' - ' + to_panjang);
        },
    });

    $(".js-range-slider-panjang-mobile").ionRangeSlider({
        skin: "round",
        type: "double",
        min: <?= $range_panjang_lahan->min_panjang_lahan ?>,
        max: <?= $range_panjang_lahan->max_panjang_lahan ?>,
        from: <?= getParams($query_params, 'min_panjang') !== '' ? getParams($query_params, 'min_panjang') : $range_panjang_lahan->min_panjang_lahan ?>,
        grid: true,
        to: <?= getParams($query_params, 'max_panjang') !== '' ? getParams($query_params, 'max_panjang') : $range_panjang_lahan->max_panjang_lahan ?>,
        grid_num: 6,
        from_min: <?= $range_panjang_lahan->min_panjang_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_panjang_lahan->max_panjang_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_panjang = $('.js-range-slider-panjang-mobile').data().from;
            let to_panjang = $('.js-range-slider-panjang-mobile').data().to;
            $("#panjangLahan").val(from_panjang + "-" + to_panjang);
            $("#ubahPanjangMobile").html(from_panjang + ' - ' + to_panjang);
        },
    });

    $(".js-range-slider-lebar").ionRangeSlider({
        skin: "round",
        type: "double",
        min: <?= $range_lebar_lahan->min_lebar_lahan ?>,
        max: <?= $range_lebar_lahan->max_lebar_lahan ?>,
        from: <?= getParams($query_params, 'min_lebar') !== '' ? getParams($query_params, 'min_lebar') : $range_lebar_lahan->min_lebar_lahan ?>,
        grid: true,
        to: <?= getParams($query_params, 'max_lebar') !== '' ? getParams($query_params, 'max_lebar') : $range_lebar_lahan->max_lebar_lahan ?>,
        grid_num: 6,
        from_min: <?= $range_lebar_lahan->min_lebar_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_lebar_lahan->max_lebar_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_lebar = $('.js-range-slider-lebar').data().from;
            let to_lebar = $('.js-range-slider-lebar').data().to;
            $("#lebarLahan").val(from_lebar + "-" + to_lebar);
            $("#ubahLebar").html(from_lebar + ' - ' + to_lebar);
        },
    });

    $(".js-range-slider-lebar-mobile").ionRangeSlider({
        skin: "round",
        type: "double",
        min: <?= $range_lebar_lahan->min_lebar_lahan ?>,
        max: <?= $range_lebar_lahan->max_lebar_lahan ?>,
        from: <?= getParams($query_params, 'min_lebar') !== '' ? getParams($query_params, 'min_lebar') : $range_lebar_lahan->min_lebar_lahan ?>,
        grid: true,
        to: <?= getParams($query_params, 'max_lebar') !== '' ? getParams($query_params, 'max_lebar') : $range_lebar_lahan->max_lebar_lahan ?>,
        grid_num: 6,
        from_min: <?= $range_lebar_lahan->min_lebar_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_lebar_lahan->max_lebar_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_lebar = $('.js-range-slider-lebar-mobile').data().from;
            let to_lebar = $('.js-range-slider-lebar-mobile').data().to;
            $("#lebarLahan").val(from_lebar + "-" + to_lebar);
            $("#ubahLebarMobile").html(from_lebar + ' - ' + to_lebar);
        },
    });

    $(document).ready(function() {
        <?php
        $min_panjang = getParams($query_params, 'min_panjang');
        $max_panjang = getParams($query_params, 'max_panjang');

        $min_lebar = getParams($query_params, 'min_lebar');
        $max_lebar = getParams($query_params, 'max_lebar');

        if ($max_panjang !== '' && $min_panjang !== '') {
            echo "var minPanjang = '$min_panjang';";
            echo "var maxPanjang = '$max_panjang';";
            echo "$('#ubahPanjang').html(minPanjang + ' - ' + maxPanjang);";
            echo "$('#ubahPanjangMobile').html(minPanjang + ' - ' + maxPanjang);";
        }

        if ($max_lebar !== '' && $min_lebar !== '') {
            echo "var minLebar = '$min_lebar';";
            echo "var maxLebar = '$max_lebar';";
            echo "$('#ubahLebar').html(minLebar + ' - ' + maxLebar);";
            echo "$('#ubahLebarMobile').html(minLebar + ' - ' + maxLebar);";
        }
        ?>
    });

    function openFilterModal() {
        var modal = new bootstrap.Modal(document.getElementById('modalFilter'));
        modal.show();
    }

    function detailRumah(id) {
        location.href = "<?= base_url('detail_koleksi/') ?>" + id;
    }

    $(document).ready(function() {
        $("#lihatSemuaGaya").click(function() {
            $(".gaya-desain-open").toggle();
        });
    });
    $(document).ready(function() {
        $("#lihatSemuaRuangan").click(function() {
            $(".ruangan-open").toggle();
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        // Add event listeners to each dropdown item
        let sortParam = ''
        document.getElementById('sortDefault').addEventListener('click', function(e) {
            e.preventDefault();
            sortParam += 'default';
            handleSort(sortParam)
        });

        document.getElementById('sortPopuler').addEventListener('click', function(e) {
            e.preventDefault();
            sortParam += 'populer';
            handleSort(sortParam)
        });

        document.getElementById('sortTerbaru').addEventListener('click', function(e) {
            e.preventDefault();
            sortParam += 'terbaru';
            handleSort(sortParam)
        });

        document.getElementById('sortHargaTerendah').addEventListener('click', function(e) {
            e.preventDefault();
            sortParam += 'harga_terendah';
            handleSort(sortParam)
        });

        document.getElementById('sortHargaTertinggi').addEventListener('click', function(e) {
            e.preventDefault();
            sortParam += 'harga_tertinggi';
            handleSort(sortParam)
        })
    });

    // fungsi untuk membuat href sort dropdown
    function handleSort(sortParam) {
        console.log(sortParam);
        var currentUrl = window.location.href;

        // Check if the URL already contains a sort parameter
        if (currentUrl.includes('?sort=')) {
            // Replace the existing sort parameter with the new one
            currentUrl = currentUrl.replace(/sort=[^&]+/, 'sort=' + sortParam);
        } else if (currentUrl.includes('&sort=')) {
            // Replace the existing sort parameter with the new one
            currentUrl = currentUrl.replace(/&sort=[^&]+/, '&sort=' + sortParam);
        } else {
            // If there's no sort parameter, append it to the URL
            currentUrl += currentUrl.includes('?') ? '&sort=' + sortParam : '?sort=' + sortParam;
        }

        window.location.href = currentUrl;
    };

    document.addEventListener("DOMContentLoaded", function() {
        // Ambil nilai hash URL setelah karakter '#' (termasuk karakter '#')
        var hashValue = window.location.hash;

        // Hapus karakter '#' dari nilai hash
        var cari = decodeURIComponent(hashValue.substring(1));

        // Sekarang, Anda dapat menggunakan nilai cari untuk melakukan pencarian atau tindakan lainnya
        console.log(cari); // Untuk melihat nilai cari di konsol browser

        // Lakukan operasi pencarian atau tindakan lainnya berdasarkan nilai cari
        // ...
    });

    //handle form untuk desktop
    $(document).ready(function() {
        $('#form-filter').on('submit', function(e) {
            e.preventDefault();

            // handle checkbox desain
            var checkboxes_desain = document.querySelectorAll('[name="checkbox_desain"]');

            var checkedDesain = [];
            checkboxes_desain.forEach(function(checkbox) {
                if (checkbox.checked) {
                    checkedDesain.push(checkbox.value);
                }
            });
            var queryStringDesain = checkedDesain.length > 0 ? '&gaya=' + checkedDesain.map(item => item).join(',') : '';

            // handle checkbox ruangan
            var checkboxes_ruang = document.querySelectorAll('[name="checkbox_ruang"]');

            var checkedRuang = [];
            checkboxes_ruang.forEach(function(checkbox) {
                if (checkbox.checked) {
                    checkedRuang.push(checkbox.value);
                }
            });
            var queryStringRuang = checkedRuang.length > 0 ? '&ruang=' + checkedRuang.map(item => item).join(',') : '';


            // Construct URL with query parameters
            var url = "<?= base_url('koleksi') ?>"; // Base URL
            var queryParams = []; // Array to store query parameters

            // Iterate through form fields
            $(this).find(':input').each(function() {
                var fieldName = $(this).attr('name');

                // Handle special case for 'panjangLahan' input
                if (fieldName === 'panjang_lahan') {
                    var fieldValue = $(this).val();
                    if (fieldValue) {
                        // Split the value into two integers
                        var values = fieldValue.split(';');
                        console.log(fieldValue)
                        var minPanjang = values[0];
                        var maxPanjang = values[1];

                        queryParams.push('min_panjang=' + encodeURIComponent(minPanjang));
                        queryParams.push('max_panjang=' + encodeURIComponent(maxPanjang));
                    }
                } else if (fieldName === 'lebar_lahan') {
                    var fieldValue = $(this).val();
                    if (fieldValue) {
                        // Split the value into two integers
                        var values = fieldValue.split(';');
                        console.log(fieldValue)
                        var minLebar = values[0];
                        var maxLebar = values[1];

                        queryParams.push('min_lebar=' + encodeURIComponent(minLebar));
                        queryParams.push('max_lebar=' + encodeURIComponent(maxLebar));
                    }
                } else {
                    // For other inputs excluding checkboxes
                    if ($(this).is(':checkbox')) {
                        return; // Skip checkboxes
                    }
                    var fieldValue = $(this).val();
                    if (fieldValue) { // Check if field is not empty
                        queryParams.push(fieldName + '=' + encodeURIComponent(fieldValue));
                    }
                }
            });


            // Append query parameters to URL
            if (queryParams.length > 0) {
                url += '?' + queryParams.join('&') + queryStringDesain + queryStringRuang;
            }
            console.log(url)

            window.location.href = url;
        });
    });

    //handle search untuk mobile
    $(document).ready(function() {
        $('.search-mobile').on('submit', function(e) {
            e.preventDefault();

            var searchQuery = document.querySelector('.search-mobile input[name="search"]').value;
            var currentUrl = window.location.href;

            // Check if the URL already contains a search parameter
            if (currentUrl.includes('?search=')) {
                // Replace the existing sort parameter with the new one
                currentUrl = currentUrl.replace(/search=[^&]+/, 'search=' + searchQuery);
            } else if (currentUrl.includes('&search=')) {
                // Replace the existing search parameter with the new one
                currentUrl = currentUrl.replace(/&search=[^&]+/, '&search=' + searchQuery);
            } else {
                // If there's no search parameter, append it to the URL
                currentUrl += currentUrl.includes('?') ? '&search=' + searchQuery : '?search=' + searchQuery;
            }

            window.location.href = currentUrl;

        })
    });

    //handle form filter submit untuk mobile

    $(document).ready(function() {
        $('.modal-content').on('submit', function(e) {
            e.preventDefault();
            var url = "<?= base_url('koleksi') ?>"; // Base URL
            var queryParams = [];
            var searchQuery = document.querySelector('.search-mobile input[name="search"]').value;
            $(this).find(':input').each(function() {
                var fieldName = $(this).attr('name');

                // Handle special case for 'panjangLahan' input
                if (fieldName === 'panjang_lahan') {
                    var fieldValue = $(this).val();
                    if (fieldValue) {
                        // Split the value into two integers
                        var values = fieldValue.split(';');
                        console.log(fieldValue)
                        var minPanjang = values[0];
                        var maxPanjang = values[1];

                        queryParams.push('min_panjang=' + encodeURIComponent(minPanjang));
                        queryParams.push('max_panjang=' + encodeURIComponent(maxPanjang));
                    }
                } else if (fieldName === 'lebar_lahan') {
                    var fieldValue = $(this).val();
                    if (fieldValue) {
                        // Split the value into two integers
                        var values = fieldValue.split(';');
                        console.log(fieldValue)
                        var minLebar = values[0];
                        var maxLebar = values[1];

                        queryParams.push('min_lebar=' + encodeURIComponent(minLebar));
                        queryParams.push('max_lebar=' + encodeURIComponent(maxLebar));
                    }
                } else {
                    // For other inputs excluding checkboxes
                    if ($(this).is(':radio')) {
                        return; // Skip checkboxes
                    }
                    var fieldValue = $(this).val();
                    if (fieldValue) { // Check if field is not empty
                        queryParams.push(fieldName + '=' + encodeURIComponent(fieldValue));
                    }
                }
            });


            if (queryParams.length > 0) {
                url += '?' + queryParams.join('&');
            }
            if (searchQuery !== '') {
                url += '&' + "search=" + searchQuery
            }
            window.location.href = url;
        })
    });
</script>