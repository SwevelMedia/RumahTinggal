<style>
    .bg-card-circle-arsitek {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 150px;
        width: 150px;
        border-radius: 50%;
    }

    .bg-card-circle-arsitek-mob {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100px;
        width: 100px;
        border-radius: 50%;
    }

    .nav-link-profil {
        text-decoration: none;
        border-bottom: none;
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        min-width: 100px;
        text-align: center;
    }

    .active-link {
        background-color: white !important;
        border-top: 2px solid #e9e9e9 !important;
        border-right: 2px solid #e9e9e9 !important;
        border-left: 2px solid #e9e9e9 !important;

    }

    .nav-pills .nav-link-profil.active {
        background-color: white;
        border-top: 2px solid #e9e9e9 !important;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    th {
        width: 5%;
        font-weight: normal;
        /* Sesuaikan lebar judul sesuai kebutuhan Anda */
    }

    td::before {
        content: ": ";
        white-space: nowrap;
    }

    .card-info-proyek {
        display: none;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 10px;
        box-sizing: border-box;
        transition: transform 0.3s ease-in-out;
        transform: translateY(100%);
        z-index: 2;
    }

    .card-body-proyek {
        transition: transform 0.5s ease-in-out;
        position: relative;
        z-index: 3;
    }

    @media screen and (min-width: 768px) {
        .card:hover .card-body-proyek {
            transform: translateY(-170px);
        }
    }

    /* Aturan transform khusus untuk layar yang lebih sempit (misalnya, kurang dari 768px) */
    @media screen and (max-width: 767px) {
        .card:hover .card-body-proyek {
            transform: translateY(-100px);
        }
    }

    .card:hover .card-info-proyek {
        display: block;
        transform: translateY(0);
    }

    .profil-arsitek {
        position: relative;
        /* Menetapkan posisi relatif pada container */
        max-width: 250px;
    }

    .menu-card,
    .menu-card-mobile {
        display: none;
        position: absolute;
        top: 30px;
        right: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 10px;
        z-index: 1;
    }

    .menu-card ul,
    .menu-card-mobile ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menu-card ul li,
    .menu-card-mobile ul li {
        padding: 8px;
        cursor: pointer;
    }

    .menu-card ul li:hover,
    .menu-card-mobile ul li:hover {
        background-color: #f1f1f1;
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

<div class="py-5 bg-light">
    <div class="container d-none d-lg-block">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="bg-card-circle-arsitek" style="background-image: url('<?php echo base_url() . 'assets/img/arsitek/' . $arsitek->foto ?>'); margin-left:40px;">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="profil-arsitek" style="max-width: 250px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0"><?php echo $arsitek->nama_arsitek ?></h4>
                        <div class="d-flex gap-3 position-relative">
                            <a href="mailto:<?php echo $arsitek->email ?>?subject=Tanya%20Arsitek%20%5Brumahtinggal.id%5D&body=Halo%20<?php echo $arsitek->nama_arsitek ?>%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20Anda%20di%20rumahtinggal.id" target="_blank" style="text-decoration: none; color: inherit;">
                                <i class="fa-regular fa-envelope fs-5"></i>
                            </a>
                            <i class="fa-solid fa-ellipsis fs-5" id="ellipsis-icon" style="cursor: pointer;"></i>
                        </div>
                    </div>
                    <div id="menu-card" class="menu-card">
                        <!-- Isi card menu -->
                        <ul>
                            <li>Share Profil</li>
                            <li>Kirim Masukan</li>
                        </ul>
                    </div>
                </div>
                <div class="deskripsi-arsitek mt-4" style="text-align: justify;">
                    <?php echo $arsitek->profil ?>
                </div>
                <div class="hub-arsitek mt-3" style="max-width: 250px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="card border-0 rounded-5 p-2" style="background-color: #e9e9e9;">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <div><?php echo $arsitek->alamat ?></div>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="https://www.instagram.com/<?php echo $arsitek->facebook ?>/" target="_blank">
                                <img src="<?php echo base_url('assets/demo/img/ikon-fb-dark.png'); ?>" alt="sosmed" width="auto" height="30">
                            </a>
                            <a href="https://www.instagram.com/<?php echo $arsitek->instagram ?>/" target="_blank">
                                <img src="<?php echo base_url('assets/demo/img/ikon-ig-dark.png'); ?>" alt="sosmed" width="auto" height="30">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" conntainer p-3 d-lg-none">
        <div class="row">
            <div class="col-3">
                <div class="container ms-2">
                    <div class="bg-card-circle-arsitek-mob" style="background-image: url('<?php echo base_url() . 'assets/img/arsitek/' . $arsitek->foto ?>')">
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="container ms-5 mt-1">
                    <div class="d-flex align-items-center gap-5">
                        <h4 class="m-0"><?php echo $arsitek->nama_arsitek ?></h4>
                        <div class="d-flex gap-3">
                            <i class="fa-regular fa-envelope fs-5"></i>
                            <i class="fa-solid fa-ellipsis fs-5" id="ellipsis-icon-mobile" style="cursor: pointer;"></i>
                        </div>
                    </div>
                    <div id="menu-card-mobile" class="menu-card">
                        <!-- Isi card menu -->
                        <ul>
                            <li>Share Profil</li>
                            <li>Kirim Masukan</li>
                        </ul>
                    </div>
                    <div class="flex-row mt-3">
                        <div class="d-flex gap-3">
                            <div class="flex-row">
                                <div>Desain</div>
                                <div class="text-center">8</div>
                            </div>
                            <div class="flex-row">
                                <div>Desain</div>
                                <div class="text-center">8</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-3" style="text-align: justify;">
            <?php echo $arsitek->profil ?>
        </div>
        <div class="hub-arsitek mt-3" style="max-width: 250px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="card border-0 rounded-5 p-2" style="background-color: #e9e9e9;">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-location-dot"></i>
                        <div><?php echo $arsitek->alamat ?></div>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <a href="https://www.instagram.com/<?php echo $arsitek->facebook ?>/" target="_blank">
                        <img src="<?php echo base_url('assets/demo/img/ikon-fb-dark.png'); ?>" alt="sosmed" width="auto" height="30">
                    </a>
                    <a href="https://www.instagram.com/<?php echo $arsitek->instagram ?>/" target="_blank">
                        <img src="<?php echo base_url('assets/demo/img/ikon-ig-dark.png'); ?>" alt="sosmed" width="auto" height="30">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 ">
        <ul class="nav nav-pills">
            <li class="nav-item text-center">
                <a class="nav-link-profil rounded-0 bg-light text-dark active" id="desainArsitek-tab" data-bs-toggle="pill" href="#pills-desainArsitek" role="tab" aria-controls="pills-desainArsitek" aria-selected="true">
                    <span class="d-none d-lg-block"><?= count($produk) ?> Desain</span>
                    <span class="d-lg-none">Desain</span>

                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link-profil rounded-0 bg-light text-dark" id="proyekArsitek-tab" data-bs-toggle="pill" href="#pills-proyekArsitek" role="tab" aria-controls="pills-proyekArsitek" aria-selected="false">
                    <span class="d-none d-lg-block"><?= count($portofolio) ?> Proyek</span>
                    <span class="d-lg-none">Proyek</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content bg-light border-top border-2" style="max-height: 1000x; overflow-y: auto;">
        <div class="tab-pane fade show active p-3" id="pills-desainArsitek" role="tabpanel" aria-labelledby="desainArsitek-tab">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <?php
                            // Jumlah item per halaman
                            $items_per_page = 8;

                            // Menghitung total jumlah halaman
                            $total_pages = ceil(count($produk) / $items_per_page);

                            // Mengambil data untuk halaman yang ditampilkan
                            $current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
                            $offset = ($current_page - 1) * $items_per_page;

                            // Tampilkan pesan di sini di luar perulangan
                            echo '<p>Menampilkan ' . ($offset + 1) . ' - ' . min(($offset + $items_per_page), count($produk)) . ' dari ' . count($produk) . ' desain</p>';
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
                <div class="row mt-4">
                    <?php
                    // Jumlah item per halaman
                    $paginated_data = array_slice($produk, $offset, $items_per_page);

                    // Menampilkan data produk yang dipaginasi
                    foreach ($paginated_data as $item) :
                    ?>

                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 shadow-sm">
                                <a href="javascript:void(0)" class="image">
                                    <div style="background-image:url('<?= base_url() . 'assets/img/thumbnail/' . $item->foto ?>'" class="card-img-top bg-card-produk"></div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 fw-semibold">
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
                                                    <small class="fw-semibold d-block"><?= $item->luas_bangunan ?>m2 </small>
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
                                                    <small class="fw-semibold d-block"><?= $item->kamar_tidur ?>Kamar </small>
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
                                                    <small class="fw-semibold d-block"><?= $item->lantai ?>Lantai </small>
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
                                                    <small class="fw-semibold d-block"><?= $item->toilet ?>Kamar</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-1">
                                        <div class="text-center">
                                            <a class="btn btn-primary w-100"> <i class="me-2 far fa-file"></i>Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Menampilkan navigasi paginasi -->
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
        </div>
        <div class="tab-pane fade mt-3 p-3" id="pills-proyekArsitek" role="tabpanel" aria-labelledby="proyekArsitek-tab">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <div><?php
                                // Jumlah item per halaman
                                $items_per_page = 8;

                                // Menghitung total jumlah halaman
                                $total_pages = ceil(count($portofolio) / $items_per_page);

                                // Mengambil data untuk halaman yang ditampilkan
                                $current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
                                $offset = ($current_page - 1) * $items_per_page;

                                // Tampilkan pesan di sini di luar perulangan
                                echo '<p>Menampilkan ' . ($offset + 1) . ' - ' . min(($offset + $items_per_page), count($portofolio)) . ' dari ' . count($portofolio) . ' desain</p>';
                                ?></div>
                        <!-- <div class="dropdown">
                            <button id="sortButton" class="btn btn-outline-white border-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Urutkan:
                            </button> -->
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?sort=default">Paling Sesuai</a></li>
                            <li><a class="dropdown-item" href="?sort=populer">Desain Populer</a></li>
                            <li><a class="dropdown-item" href="?sort=terbaru">Desain Terbaru</a></li>
                            <li><a class="dropdown-item" href="?sort=harga_terendah">Harga Terendah</a></li>
                            <li><a class="dropdown-item" href="?sort=harga_tertinggi">Harga Tertinggi</a></li>
                        </ul>
                    </div> -->
                    </div>
                </div>
                <div class="row mt-4">
                    <?php
                    $paginated_data = array_slice($portofolio, $offset, $items_per_page);

                    foreach ($paginated_data as $item) : ?>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 shadow-sm" style="height:350px;">
                                <a href="javascript:void(0)" class="image">
                                    <div style="background-image:url('<?= base_url() . 'assets/img/portofolio/' . $item->foto ?>'" class="card-img-top bg-card-produk"></div>
                                </a>
                                <div class="card-body-proyek p-2">
                                    <div class="card-title mb-0 fw-semibold">
                                        <?= $item->judul ?>
                                    </div>
                                    <div class="mt-2"><?= $item->kategori ?></div>
                                    <div class="mb-3">
                                        <hr />
                                    </div>

                                </div>
                                <div class="card-info-proyek mt-0">
                                    <table>
                                        <tr>
                                            <th>Klien</th>
                                            <td><?= $item->klien ?></td>
                                        </tr>
                                        <tr>
                                            <th>Lokasi</th>
                                            <td><?= $item->lokasi ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tahun</th>
                                            <td><?= $item->tahun ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td><?= $item->status ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <!-- Menampilkan navigasi paginasi -->
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
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan semua elemen tautan dengan kelas .nav-link-profil
        var navLinks = document.querySelectorAll('.nav-link-profil');

        // Menambahkan event listener untuk setiap tautan
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Menghapus kelas .active-link dari semua tautan
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove('active-link');
                });

                // Menambahkan kelas .active-link pada tautan yang ditekan
                this.classList.add('active-link');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('desainArsitek-tab').click();

    });

    $(document).ready(function() {
        // Fungsi untuk menangani klik pada ikon
        $("#ellipsis-icon").click(function() {
            $("#menu-card").toggle();
        });

        // Fungsi untuk menyembunyikan dropdown saat klik di luar dropdown
        $(document).mouseup(function(e) {
            var container = $("#menu-card");
            var icon = $("#ellipsis-icon");

            // Jika ikon ditekan dan dropdown tidak terbuka, maka buka dropdown
            if (icon.is(e.target) && !container.is(":visible")) {
                container.show();
            }
            // Jika ikon tidak ditekan dan klik di luar dropdown, maka sembunyikan dropdown
            else if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    });

    $(document).ready(function() {
        // Fungsi untuk menangani klik pada ikon
        $("#ellipsis-icon-mobile").click(function() {
            $("#menu-card-mobile").toggle();
        });

        // Fungsi untuk menyembunyikan dropdown saat klik di luar dropdown
        $(document).mouseup(function(e) {
            var container = $("#menu-card-mobile");
            var icon = $("#ellipsis-icon-mobile");

            // Jika ikon ditekan dan dropdown tidak terbuka, maka buka dropdown
            if (icon.is(e.target) && !container.is(":visible")) {
                container.show();
            }
            // Jika ikon tidak ditekan dan klik di luar dropdown, maka sembunyikan dropdown
            else if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    });
</script>