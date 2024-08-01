<style>
    .bg-card-circle-arsitek {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 150px;
        width: 150px;
        border-radius: 50%;
    }

    .truncateTitle {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
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
        transform-origin: top center;
    }


    @media screen and (min-width: 768px) {
        .teks-card-info {
            font-size: 0.8em;
        }

        .info-row {
            padding-right: 12px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        .card:hover .card-body {
            transform: translateY(-115%);
        }

        .card:hover .card-body-proyek {
            transform: translateY(-220px);
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {

        .card:hover .card-body-proyek {
            transform: translateY(-160px);
        }
    }

    @media screen and (min-width: 1200px) and (max-width: 1399px) {
        .card:hover .card-body {
            transform: translateY(-90%);
        }

        .card:hover .card-body-proyek {
            transform: translateY(-185px);
        }
    }

    @media screen and (min-width: 1400px) {
        .card:hover .card-body {
            transform: translateY(-233px);
        }

        .card:hover .card-body-proyek {
            transform: translateY(-220px);
        }
    }

    /* Aturan transform khusus untuk layar yang lebih sempit (misalnya, kurang dari 768px) */
    @media screen and (min-width: 361px) and (max-width: 767px) {
        .card:hover .card-body-proyek {
            transform: translateY(-220px);
        }

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
            font-size: 0.7rem;
        }

        .lihat-detail-button {
            font-size: small;
        }

        .info-row {
            padding-right: 8px;
        }

        .card-body-text {
            font-size: 0.8rem;
        }
    }

    @media screen and (max-width: 360px) {
        .card-body-text {
            font-size: 0.7rem;
        }

        .card:hover .card-body-proyek {
            transform: translateY(-210px);
        }

        .teks-card-info {
            font-weight: normal;
            font-size: 0.65rem;
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

    .proyek-kategori {
        font-style: normal;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: normal;
        text-transform: capitalize;
        letter-spacing: 0.5px;
    }

    .proyek-info-header {
        vertical-align: top;
        font-weight: 600;
        letter-spacing: 0.5px;
        line-height: normal;
        font-size: 0.9rem;
    }

    .proyek-info {
        vertical-align: top;
        letter-spacing: 0.5px;
        line-height: normal;
        font-size: 0.9rem;
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
        case 'harga_terendah':
            return 'Harga Terendah';
        case 'harga_tertinggi':
            return 'Harga Tertinggi';
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
                <div class="hub-arsitek mt-3" style="">
                    <div class="d-flex justify-content-start gap-3 align-items-center">
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
    <div class=" container p-3 d-lg-none">
        <div class="row">
            <div class="col-3">
                <div class="container">
                    <div class="bg-card-circle-arsitek-mob" style="background-image: url('<?php echo base_url() . 'assets/img/arsitek/' . $arsitek->foto ?>')">
                    </div>
                </div>
            </div>
            <div class="col-9 overflow-wrap">
                <div class="container ms-4 mt-1">
                    <div class="d-flex align-items-center justify-content-between gap-3 pe-3">
                        <h4 class="m-0"><?php echo $arsitek->nama_arsitek ?></h4>
                        <div class="d-flex gap-3 align-items-center">
                            <a href="mailto:<?php echo $arsitek->email ?>?subject=Tanya%20Arsitek%20%5Brumahtinggal.id%5D&body=Halo%20<?php echo $arsitek->nama_arsitek ?>%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20Anda%20di%20rumahtinggal.id" target="_blank" style="text-decoration: none; color: inherit;">
                                <i class="fa-regular fa-envelope fs-5"></i></a>
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
                                <div style="font-size:12px;">Desain</div>
                                <div class="text-center" style="font-weight:500"><?= count($produk) ?></div>
                            </div>
                            <div class="flex-row">
                                <div style="font-size:12px;">Proyek</div>
                                <div class="text-center" style="font-weight:500"><?= count($portofolio) ?></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-3" style="text-align: justify;">
            <?php echo $arsitek->profil ?>
        </div>
        <div class="hub-arsitek mt-3" style="">
            <div class="d-flex justify-content-between gap-3 align-items-center">
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
            <div class="container p-0">
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="pagination-info">

                        </div>
                        <div class="dropdown">
                            <button id="sortButton" class="btn btn-outline-white border-secondary dropdown-toggle bg-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="mt-4 konten-desain">
                    <div class="row gx-3 desain-container">

                    </div>
                </div>
                <!-- Menampilkan navigasi paginasi -->
                <div class="d-flex justify-content-center" id="pagination-container">

                </div>
            </div>
        </div>
        <div class="tab-pane fade mt-3 p-3" id="pills-proyekArsitek" role="tabpanel" aria-labelledby="proyekArsitek-tab">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <div id="pagination-info-portfolio">

                        </div>
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
                <div class="mt-4 konten-portfolio">
                    <div class="row portfolio-container">

                    </div>
                </div>
                <!-- Menampilkan navigasi paginasi -->
                <div class="d-flex justify-content-center" id="pagination-container-portfolio">

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(window).ready(updateHeight);
    $(window).resize(updateHeight);

    function updateHeight() {
        var div = $('.img-container');
        var divref = $('.desain-arsitek-card');
        var width = divref.width() / 1.3333333;

        div.css('height', width);
    }

    function detailRumah(id) {
        location.href = "<?= base_url('detail_koleksi/') ?>" + id;
    }

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

    function getKoleksiUrl(id_rumah) {
        let baseurl = "<?php echo base_url('detail_koleksi/') ?>"
        return baseurl + id_rumah;
    }

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

    $(document).ready(function() {
        var koleksi_rumah = <?= json_encode($produk) ?>; // Assuming $koleksi_rumah contains your data
        console.log(koleksi_rumah)

        var itemsPerPage = 8; // Number of items per page
        var totalPages = Math.ceil(koleksi_rumah.length / itemsPerPage); // Calculate total pages

        $('#pagination-container').pagination({
            dataSource: koleksi_rumah,
            pageSize: itemsPerPage,
            autoHidePrevious: true,

            autoHideNext: true,
            pageRange: 1,
            callback: function(data, pagination) {
                // Render paginated data
                var html = '';
                var baseurl = "<?php echo base_url('detail_koleksi/') ?>";
                if (data.length === 0) {
                    html = `
                    <div class="koleksi-not-found mb-5">
                        <div class="row justify-content-center text-center">
                            <img src="<?php echo base_url('assets/demo/img/empty.png'); ?>" alt="Deskripsi Gambar" class="img-fluid" style="width: 300px; height: 200px;">
                            <h5 class="mt-3">Yah! Tidak ada desain hunian yang sesuai dengan pencarian Anda.</h5>
                            <div class="mt-1">Silahkan hubungi kami untuk mendapatkan rekomendasi desain yang sesuai.</div>
                            <a href="https://api.whatsapp.com/send?phone=628112636228&text=Hai%20rumahtinggal.id%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20rumahtinggal.id%20" target="_blank" class="btn btn-primary mt-3" style="width: fit-content;">Hubungi Kami</a>
                        </div>
                    </div>
                `;
                } else {
                    $.each(data, function(index, item) {
                        let biaya = item.lantai == '1' ? 4000000 * item.luas_bangunan : (item.lantai == '2' ? 5000000 * item.luas_bangunan : 8000000 * item.luas_bangunan);
                        biaya = biaya.toLocaleString('id-ID');
                        html += `<div class="col-lg-4 col-xl-3 col-md-6 col-6 mb-3">
                                <div class="card desain-card border-0 shadow-sm pb-2 pb-md-0 h-100 w-100" style="height: max-content;">
                                    <div class="img-container">
                                        <img src="<?php echo  base_url('assets/img/desain_thumbnail/') ?>` + item.foto + `" class="img-card-produk card-img-top" alt="" onload='updateHeight()'>
                                    </div>


                                    <div class="card-body pt-3 pt-md-3">
                                        <h5 class="card-title mb-0 fw-semibold d-none d-md-block">
                                        ` + item.nama_rumah + `</h5>
                                        <h6 class="card-title mb-0 fw-semibold d-md-none truncateTitle">
                                        ` + item.nama_rumah + `</h6>
                                        <!-- <h6 class="nama_arsitek mb-0 d-none d-md-block" onclick="detailArsitek(` + item.id_arsitek + `)">
                                            ` + item.nama_arsitek + `</h6> -->
                                        <small class="nama_arsitek mb-0" onclick="detailArsitek(` + item.id_arsitek + `)">
                                            ` + item.nama_arsitek + `</small>
                                        <hr class="my-2 d-md-none" />
                                        <hr class="my-3 d-none d-md-block" />
                                        <div class=" d-flex align-items-center gap-3 mb-1">
                                            <div class="d-none d-md-block">
                                                <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-block d-md-none">
                                                <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="20" height="20">
                                            </div>
                                            <div>
                                                <small class="d-none d-md-inline lahan-minimal">Lahan Minimal</small>
                                                <small class="fw-semibold d-block card-body-text">` + item.lebar_lahan + ` m x ` + item.panjang_lahan + ` m</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="d-none d-md-block">
                                                <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                            </div>
                                            <div class="d-block d-md-none">
                                                <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="20" height="20">
                                            </div>
                                            <div>
                                                <small class="d-none d-md-inline biaya-konstruksi">Biaya Konstruksi</small>
                                                <small class="fw-semibold d-block d-none d-md-block tooltip-biaya card-body-text">Rp` + biaya + `
                                                    <span class="tooltip-biaya-text">Estimasi Awal</span>
                                                </small>
                                                <small class="d-block d-md-none fw-semibold d-block card-body-text">Rp` + biaya + `
                                                </small>
                                            </div>
                                        </div>
                                        <!-- <div class="mt-3"></div> -->
                                    </div>
                                    <div class="card-info">
                                        <div class="row justify-content-between mb-2 g-0 info-row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 gap-md-3 gap-xl-2 gap-xxl-3 ms-2">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/bangunan.png'); ?>" width="18" height="18">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline  d-lg-inline d-xl-none d-xxl-inline " style="font-size:0.7em">Luas Bangunan</small>
                                                        <small class="d-none d-lg-none d-xl-inline d-xxl-none" style="font-size:0.7em">Bangunan</small>
                                                        <small class="d-block teks-card-info" style="white-space: nowrap;">` + item.luas_bangunan + ` m2 </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 ms-3 gap-md-3 gap-xl-2 gap-xxl-3">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/kt.png'); ?>" width="18" height="18">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline " style="font-size:0.7em">Kamar Tidur</small>
                                                        <small class="d-none d-sm-block teks-card-info">` + item.kamar_tidur + ` Kamar</small>
                                                        <small class="d-block d-sm-none teks-card-info">` + item.kamar_tidur + `</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between mb-3 g-0 info-row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start gap-2 gap-md-3 gap-xl-2 gap-xxl-3 ms-2">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/lantai.png'); ?>" width="18" height="18">
                                                    </div>
                                                    <div>

                                                        <small class="d-none d-md-inline  d-lg-inline d-xl-none d-xxl-inline " style="font-size:0.7em">Jumlah Lantai</small>
                                                        <small class="d-none d-lg-none d-xl-inline d-xxl-none" style="font-size:0.7em"> Lantai</small>
                                                        <small class="d-none d-md-block teks-card-info">` + item.lantai + ` Lantai </small>
                                                        <small class="d-block d-md-none teks-card-info">` + item.lantai + ` Lt. </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-start ms-3 gap-2 gap-md-3 gap-xl-2 gap-xxl-3">
                                                    <div>
                                                        <img src="<?php echo base_url('assets/demo/img/km.png'); ?>" width="18" height="18">
                                                    </div>
                                                    <div>
                                                        <small class="d-none d-md-inline " style="font-size:0.7em">Kamar Mandi</small>
                                                        <small class="d-none d-sm-block teks-card-info">` + item.toilet + ` Kamar</small>
                                                        <small class="d-block d-sm-none teks-card-info">` + item.toilet + `</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-1">
                                            <div class="text-center">
                                            <a href="${baseurl+ item.id_rumah} "  class="btn btn-primary w-100 lihat-detail-button" onclick="detailRumah(` + item.id_rumah + `)">
  <i class="fa-solid fa-file-import me-2"></i>Lihat Detail
</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>`
                    });
                    var currentPage = pagination.pageNumber;
                    var rangeStart = (currentPage - 1) * itemsPerPage + 1;
                    var rangeEnd = Math.min(currentPage * itemsPerPage, pagination.totalNumber);

                    // Update the pagination info element with the range information
                    $('#pagination-info').html('Menampilkan ' + rangeStart + ' - ' + rangeEnd + ' dari ' + pagination.totalNumber + ' desain');

                }



                // Update the container with the paginated HTML
                $('.desain-container').html(html);


            }

        });

    });

    $(document).ready(function() {
        var koleksi_rumah = <?= json_encode($portofolio) ?>; // Assuming $koleksi_rumah contains your data
        console.log(koleksi_rumah)

        var itemsPerPage = 8; // Number of items per page
        var totalPages = Math.ceil(koleksi_rumah.length / itemsPerPage); // Calculate total pages

        $('#pagination-container-portfolio').pagination({
            dataSource: koleksi_rumah,
            pageSize: itemsPerPage,
            autoHidePrevious: true,

            autoHideNext: true,
            pageRange: 1,
            callback: function(data, pagination) {
                // Render paginated data
                var html = '';
                var baseurl = "<?php echo base_url('detail_koleksi/') ?>";
                if (data.length === 0) {
                    html = `
                    <div class="koleksi-not-found mb-5">
                        <div class="row justify-content-center text-center">
                            <img src="<?php echo base_url('assets/demo/img/empty.png'); ?>" alt="Deskripsi Gambar" class="img-fluid" style="width: 300px; height: 200px;">
                            <h5 class="mt-3">Tidak terdapat data proyek</h5>
                            
                        </div>
                    </div>
                `;
                } else {
                    $.each(data, function(index, item) {
                        html += `<div class="col-lg-3 col-md-6 mb-3">
                            <div class="card border-0 shadow-sm" style="height:350px;">
                                <!-- <a href="javascript:void(0)" class="image">
                                    <div style="background-image:url("<?php echo  base_url('assets/img/portofolio/') ?>` + item.foto + `") class="card-img-top bg-card-produk"></div>
                                </a> -->

                                <div class="img-container">
                                    <img src="<?php echo  base_url('assets/img/portofolio/') ?>` + item.foto + `" class="img-card-produk card-img-top" alt="">
                                </div>
                                <div class="card-body-proyek px-3 py-2">
                                    <div class="card-title mb-0 fw-semibold">
                                        ${item.judul}
                                    </div>
                                    <div class="mt-1 proyek-kategori">${item.kategori}</div>
                                    <div class="mb-3">
                                        <hr />
                                    </div>

                                </div>
                                <div class="card-info-proyek mt-0">
                                    <table>
                                        <tr>
                                            <th class="proyek-info-header" >Klien</th>
                                            <td class="proyek-info">${item.klien}</td>
                                        </tr>
                                        <tr>
                                            <th class="proyek-info-header">Lokasi</th>
                                            <td class="proyek-info">${item.lokasi}</td>
                                        </tr>
                                        <tr>
                                            <th class="proyek-info-header">Tahun</th>
                                            <td class="proyek-info">${item.tahun}</td>
                                        </tr>
                                        <tr>
                                            <th class="proyek-info-header">Status</th>
                                            <td class="proyek-info">${item.status}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>`
                    });
                    var currentPage = pagination.pageNumber;
                    var rangeStart = (currentPage - 1) * itemsPerPage + 1;
                    var rangeEnd = Math.min(currentPage * itemsPerPage, pagination.totalNumber);

                    // Update the pagination info element with the range information
                    $('#pagination-info-portfolio').html('Menampilkan ' + rangeStart + ' - ' + rangeEnd + ' dari ' + pagination.totalNumber + ' desain');

                }



                // Update the container with the paginated HTML
                $('.portfolio-container').html(html);


            }

        });

    });
</script>