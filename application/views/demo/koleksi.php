<style>
    .gaya-desain-open,
    .dropdown-content-gaya,
    .dropdown-content-ruangan,
    .ruangan-open {
        display: none;
        /* Mulai dengan menyembunyikan gaya-desain-open */
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

// ... Bagian lain dari kode PHP Anda ...

// Ambil nilai sort dari URL atau setel ke default
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'default';

// ... Bagian lain dari kode PHP Anda ...
?>

<div class="py-2 bg-header-web">
    <div class="container">
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
        <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" placeholder="cari desain rumah" style="background-color: #F7F7F7;" />
            <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #f7f7f7;">
                <i class="fas fa-search" style="color: black;"></i>
            </button>
        </div>
    </div>
</div>

<!--Temukan Desain start-->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-3 d-none d-lg-block">
                <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
                    <h5 class="fw-semibold text-center ms-3">
                        <i class="fas fa-filter"></i> Filter
                    </h5>
                    <p class="hapus-filter">Hapus Filter</p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="cari desain rumah" style="background-color: #F7F7F7;" />
                    <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #f7f7f7;">
                        <i class="fas fa-search " style="color: black;"></i>
                    </button>
                </div>
                <div class="fw-semibold mb-2">Biaya Konstruksi</div>
                <div class="d-flex justify-content-between flex-column flex-lg-row mb-3 text-center gap-2">
                    <div class="mb-2 col-lg-auto" style="width: 45%;">
                        <input type="text" id="field1" name="field1" class="form-control" placeholder="Rp Minimal">
                    </div>
                    <span class="mb-2 col-lg-auto mt-2">-</span>
                    <div class="mb-2 col-lg-auto" style="width: 45%;">
                        <input type="text" id="field2" name="field2" class="form-control" placeholder="Rp Maksimal">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="panjangLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Panjang Lahan (m)</div>
                            <div><span id="ubahPanjang" class="badge bg-light text-dark">4</span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">
                        <input type="range" class="form-range" id="panjangLahan" min="4" max="20" value="4" step="1" />
                    </div>
                    <div class="d-flex justify-content-between px-7 mx-2">
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

                        <input type="range" class="form-range" id="lebarLahan" min="6" max="30" value="6" step="1" />

                    </div>
                    <div class="d-flex justify-content-between px-7 mx-2">
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
                <div class="form-group mb-3 col-6 col-lg-12">
                    <label for="jumlah_lantai" class="form-label fw-semibold">Jumlah Lantai</label>
                    <input type="number" class="form-control" id="jumlah_lantai" placeholder="Jumlah Lantai" />
                </div>
                <div class="form-group mb-3 col-6 col-lg-12">
                    <label for="jumlah_kamar" class="form-label fw-semibold">Jumlah Kamar</label>
                    <input type="number" class="form-control" id="jumlah_lantai" placeholder="Jumlah Kamar" />
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
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Modern
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Industrial
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Tropical
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Classic
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Contemporer
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Traditional
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Scandinavian
                                        </label>
                                    </div>
                                </div>
                                <!-- Tambahkan checkbox lainnya sesuai kebutuhan -->
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
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Carport
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Teras
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Ruang Tamu
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Kamar Tidur
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Ruang Jemur
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Ruang Makan
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Mushola
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Toilet Dalam
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Garasi
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Taman
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Ruang Keluarga
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Dapur
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Ruang Cuci
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Gudang
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Toilet
                                        </label>
                                    </div>
                                </div>
                                <div class=" d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                            Kolam
                                        </label>
                                    </div>
                                </div>
                                <!-- Tambahkan checkbox lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
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
                                <li><a class="dropdown-item" href="?sort=default">Paling Sesuai</a></li>
                                <li><a class="dropdown-item" href="?sort=populer">Desain Populer</a></li>
                                <li><a class="dropdown-item" href="?sort=terbaru">Desain Terbaru</a></li>
                                <li><a class="dropdown-item" href="?sort=harga_terendah">Harga Terendah</a></li>
                                <li><a class="dropdown-item" href="?sort=harga_tertinggi">Harga Tertinggi</a></li>
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
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card border-0 shadow-sm" style="height: 400px;">
                                    <a href="javascript:void(0)" class="image">
                                        <div style="background-image: url('<?= base_url('assets/img/desain/' . $item->foto) ?>')" class="card-img-top bg-card-produk"></div>
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title mb-0 fw-semibold">
                                            <?= $item->nama_rumah ?></h5>
                                        <h6 class="nama_arsitek mb-0" onclick="detailArsitek(<?= $item->id_rumah ?>)">Design by
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
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item <?php echo ($current_page == 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <?php
                                // Menampilkan 3 angka halaman sekaligus
                                $start = max(1, $current_page - 1);
                                $end = min($total_pages, $start + 2);

                                for ($i = $start; $i <= $end; $i++) {
                                ?>
                                    <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php
                                }
                                ?>

                                <li class="page-item <?php echo ($current_page == $total_pages) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>" aria-label="Next">
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
        <div class="modal-content">
            <div class="bg-light">
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <h5 class="fw-semibold ms-3">
                        <i class="fas fa-filter"></i> Filter
                    </h5>
                    <p class="hapus-filter me-3">Hapus Filter</p>
                </div>
                <div class="bg-white mx-2 p-2">
                    <div class="d-flex flex-column">
                        <div class="fw-semibold ms-2">Urutkan</div>
                        <div class="d-flex">
                            <button class="btn btn-light border-2 m-1">Paling Sesuai</button>
                            <button class="btn btn-light border-2 m-1">Paling Populer</button>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-light border-2 m-1">Terbaru</button>
                            <button class="btn btn-light border-2 m-1">Biaya Terendah</button>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-light border-2 m-1">Biaya Tertinggi</button>
                        </div>
                    </div>
                </div>
                <div class="fw-semibold ms-3 mt-3">Biaya Konstruksi</div>
                <div class="d-flex mt-2">
                    <div class="ms-3 mb-2 col-lg-auto" style="width: 42%;">
                        <input type="text" id="field1" name="field1" class="form-control" placeholder="Rp Minimal">
                    </div>
                    <span class="ms-2 mb-2 col-lg-auto mt-2">-</span>
                    <div class="ms-2 mb-2 col-lg-auto" style="width: 42%;">
                        <input type="text" id="field2" name="field2" class="form-control" placeholder="Rp Maksimal">
                    </div>
                </div>
                <div class="mx-3 mt-3">
                    <label for="panjangLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Panjang Lahan (m)</div>
                            <div><span id="ubahPanjang" class="badge bg-light text-dark">4</span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">
                        <input type="range" class="form-range" id="panjangLahan" min="4" max="20" value="4" step="1" />
                    </div>
                    <div class="d-flex justify-content-between px-7 mx-2">
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
                <div class="mx-3 mt-3">
                    <label for="lebarLahan" class="form-label fw-semibold d-block w-100">
                        <div class="d-flex justify-content-between">
                            <div>Lebar Lahan (m)</div>
                            <div><span id="ubahLebar" class="badge bg-light text-dark">6</span> meter</div>
                        </div>
                    </label>
                    <div class="d-flex align-items-center gap-3">

                        <input type="range" class="form-range" id="lebarLahan" min="6" max="30" value="6" step="1" />

                    </div>
                    <div class="d-flex justify-content-between px-7 mx-2">
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
                <div class="form-group ms-3 mt-3 me-3">
                    <label for="jumlah_lantai" class="form-label fw-semibold">Jumlah Lantai</label>
                    <input type="number" class="form-control" id="jumlah_lantai" placeholder="Jumlah Lantai" />
                </div>
                <div class="form-group ms-3 mt-3 me-3">
                    <label for="jumlah_kamar" class="form-label fw-semibold">Jumlah Kamar</label>
                    <input type="number" class="form-control" id="jumlah_kamar" placeholder="Jumlah Kamar" />
                </div>
                <div class="bg-white mx-2 p-3 mt-3">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fw-semibold ms-2">Gaya Desain</div>
                            <small class="fw-semibold me-1" id="lihatSemuaGaya">Lihat Semua</small>
                        </div>
                        <div class="gaya-desain mt-2">
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">Modern</button>
                                <button class="btn btn-light border-2 m-1">Industrial</button>
                                <button class="btn btn-light border-2 m-1">Tropical</button>
                            </div>
                        </div>
                        <div class="gaya-desain-open">
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">Classic</button>
                                <button class="btn btn-light border-2 m-1">Contemporer</button>
                                <button class="btn btn-light border-2 m-1">Traditional</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">Scandinavian</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-2 p-3 mt-3">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fw-semibold ms-2">Ruangan</div>
                            <small class="fw-semibold me-1" id="lihatSemuaRuangan">Lihat Semua</small>
                        </div>
                        <div class="ruangan mt-2">
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">Carport</button>
                                <button class="btn btn-light border-2 m-1">Dapur</button>
                                <button class="btn btn-light border-2 m-1">Teras</button>
                            </div>
                        </div>
                        <div class="ruangan-open">
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">R. Tamu</button>
                                <button class="btn btn-light border-2 m-1">K. Tidur</button>
                                <button class="btn btn-light border-2 m-1">R. Jemur</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">R. Makan</button>
                                <button class="btn btn-light border-2 m-1">Mushola</button>
                                <button class="btn btn-light border-2 m-1">Garasi</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">R. Keluarga</button>
                                <button class="btn btn-light border-2 m-1">Taman</button>
                                <button class="btn btn-light border-2 m-1">Kolam</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-light border-2 m-1">Toilet Dalam</button>
                                <button class="btn btn-light border-2 m-1">Dapur</button>
                                <button class="btn btn-light border-2 m-1">Gudang</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center mx-auto gap-3 mt-3 mb-3">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                    <button type="button" class="btn btn-primary">Terapkan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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

    // Function to handle lebarLahan
    $("#kurang-lebar").click(function() {
        let newValue = parseInt($("#lebarLahan").val()) - 1;
        if (newValue >= 6) {
            $("#lebarLahan").val(newValue);
            $("#ubahLebar").html(newValue);
        }
    });

    $("#tambah-lebar").click(function() {
        let newValue = parseInt($("#lebarLahan").val()) + 1;
        if (newValue <= 30) {
            $("#lebarLahan").val(newValue);
            $("#ubahLebar").html(newValue);
        }
    });

    $("#lebarLahan").change(function() {
        let newValue = parseInt($("#lebarLahan").val());
        if (newValue >= 6 && newValue <= 30) {
            $("#ubahLebar").html(newValue);
        }
    });

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
</script>