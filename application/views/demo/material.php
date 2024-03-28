<style>
    .kategori-open,
    .dropdown-content-gaya,
    .dropdown-content-ruangan,
    .merk-open {
        display: none;
        /* Mulai dengan menyembunyikan kategori-open */
    }

    .accordion-button:not(.collapsed) {
        background-color: inherit;
        color: inherit;
        border: none;
        /* Menghilangkan border pada button yang aktif */
    }

    /* Menonaktifkan efek hover pada button accordion ketika ditekan */
    .accordion-button:not(.collapsed):hover {
        background-color: inherit;
        color: inherit;
    }

    .card-img-mat {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .bg-card-mat {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 210px;
        /* width: 280px; */
    }

    @media (max-width: 767px) {


        .bg-card-mat {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 150px;
            width: auto;
            /* width: 280px; */
        }
    }

    .bg-kategori {
        background-color: #056BB7;
    }

    .bg-det-mat {
        background-color: #C6E7FF;
    }

    @media screen and (max-width: 767px) {
        .material-card-title {
            margin-bottom: 1em;
            font-size: 1em;
        }

        .material-card-subtitle {
            font-size: 0.8em;
        }


    }

    .material-card-subtitle {
        color: var(--Hitam, #1C1C1C);
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.2px;
    }
</style>

<div class="py-2 bg-header-web">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3 text-primary">Material Impian Anda</h1>
                <h1 class="fw-bold mb-3 text-primary">Tersedia Di Sini</h1>
                <p class="mb-3">Temukan material terbaik untuk rumah tinggal impian anda</p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo base_url('assets/demo/img/material-header.png'); ?>" alt="Deskripsi Gambar" class="img-fluid d-none d-lg-block">
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
            <input type="text" class="form-control" placeholder="cari material terbaik" style="background-color: #F7F7F7;" />
            <button class="btn btn-primary" type="button" id="button-addon2" style="background-color: #f7f7f7;">
                <i class="fas fa-search" style="color: black;"></i>
            </button>
        </div>
    </div>
</div>

<!--Temukan Desain start-->
<div class="py-lg-5 py-2 bg-light">
    <div class="container">
        <div class="row">
            <form class="form-filter col-lg-3 mb-3 d-none d-lg-block">
                <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
                    <h5 class="fw-semibold text-center ms-3">
                        <i class="fas fa-filter"></i> Filter
                    </h5>
                    <p class="hapus-filter">Hapus Filter</p>
                </div>
                <div class="input-group mb-3 search-group">
                    <input type="text" class="form-control nama_produk" placeholder="cari material pilihan" style="background-color: white;" name="nama_produk" />
                    <button class="btn btn-primary search-btn" type="submit" id="button-addon2" style="background-color: white; border-left:none; border-color: #ced4da;">
                        <i class="fas fa-search " style="color: black;"></i>
                    </button>
                </div>
                <div class="fw-semibold mb-2">Harga Material</div>
                <div class="d-flex justify-content-between flex-column flex-lg-row mb-3 text-center gap-2">
                    <div class="mb-2 col-lg-auto" style="width: 45%;">
                        <input type="text" id="field1" name="min_harga" class="form-control" placeholder="Rp Minimal">
                    </div>
                    <span class="mb-2 col-lg-auto mt-2">-</span>
                    <div class="mb-2 col-lg-auto" style="width: 45%;">
                        <input type="text" id="field2" name="field2" class="form-control" placeholder="Rp Maksimal">
                    </div>
                </div>
                <div class="accordion" id="accordionKategoriMaterial">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="kategoriMat">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushKategoriMaterial" aria-expanded="false" aria-controls="flushKategoriMaterial">
                                Kategori Material
                            </button>
                        </h2>
                        <div id="flushKategoriMaterial" class="accordion-collapse collapse" aria-labelledby="kategoriMat" data-bs-parent="#accordionKategoriMaterial">
                            <div class="accordion-body">
                                <div id="kategori-container">
                                    <!-- AJAX response from getKategoriProduk api will be appended here -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="accordion" id="accordionMerkMaterial">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="MerkMaterial">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-merkMaterial" aria-expanded="false" aria-controls="flush-merkMaterial">
                                Merk Material
                            </button>
                        </h2>
                        <div id="flush-merkMaterial" class="accordion-collapse collapse" aria-labelledby="MerkMaterial" data-bs-parent="#accordionMerkMaterial">
                            <div class="accordion-body">
                                <div id="merk-container">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-lg-9">
                <div class="d-none d-lg-block">
                    <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
                        <div>Menampilkan <span id="jumlah_tampil"></span> dari <span id='jumlah_material'></span> material </div>
                        <div class="dropdown">
                            <button id="sortButton" class="btn btn-outline-white border-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Urutkan:
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="?sort=default">Paling Sesuai</a></li>
                                <li><a class="dropdown-item" href="?sort=populer">Desain Populer</a></li>
                                <li><a class="dropdown-item" href="?sort=terbaru">Desain Terbaru</a></li>
                                <li><a class="dropdown-item" href="?sort=harga_terendah">Harga Terendah</a></li>
                                <li><a class="dropdown-item" href="?sort=harga_tertinggi">Harga Tertinggi</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="konten-material row gx-2 gx-lg-4" id="konten-material">
                </div>
                <div class="d-flex justify-content-center bag-pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination" id="pagination">

                        </ul>
                    </nav>
                        
                </div>
                <form class="form-group" id="getMaterial">
                    <input type="hidden" name="page" id="page" value='1'>
                    <input type='hidden' name='id_kategori' id='selectedKategori' value=''>
                    <input type='hidden' name='merk' id='selectedMerk' value=''>
                    <input type='hidden' name='nama_produk' id='searchedNama' value=''>
                </form>
                <form class="form-group" id="getPage">
                    <input type="hidden" name="total_pages" id="total_pages">
                    <input type="hidden" name="offset" id="offset">
                </form>
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
                <div class="fw-semibold ms-3 mt-3">Harga Material</div>
                <div class="d-flex mt-2">
                    <div class="ms-3 mb-2 col-lg-auto" style="width: 42%;">
                        <input type="text" id="min_harga" name="min_harga" class="form-control" placeholder="Rp Minimal">
                    </div>
                    <span class="ms-2 mb-2 col-lg-auto mt-2">-</span>
                    <div class="ms-2 mb-2 col-lg-auto" style="width: 42%;">
                        <input type="text" id="max_harga" name="max_harga" class="form-control" placeholder="Rp Maksimal">
                    </div>
                </div>
                <div class="bg-white mx-2 p-3 mt-3">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fw-semibold ms-2">Kategori Material</div>
                            <small class="fw-semibold me-1" id="lihatSemuaKategori">Lihat Semua</small>
                        </div>
                        <div class="kategori mt-2">
                        </div>
                        <div class="kategori-open">
                        </div>
                    </div>
                </div>
                <div class="bg-white mx-2 p-3 mt-3">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fw-semibold ms-2">Merk Material</div>
                            <small class="fw-semibold me-1" id="lihatSemuaMerk">Lihat Semua</small>
                        </div>
                        <div class="merk mt-2">
                        </div>
                        <div class="merk-open">

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
<script src="<?php echo base_url('assets/js/js.cookie.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        getDataMaterial();
        getKategoriProduk();
        getMerkProduk();
    });

    function detailProduk(id) {

        location.href = "<?= base_url('detail_material/') ?>" + id;

    }

    function openFilterModal() {
        var modal = new bootstrap.Modal(document.getElementById('modalFilter'));
        modal.show();
    }

    function detailRumah(id) {
        location.href = "<?= base_url('demo/detail_koleksi/') ?>" + id;
    }

    $(document).ready(function() {
        $("#lihatSemuaKategori").click(function() {
            $(".kategori-open").toggle();
        });
    });
    $(document).ready(function() {
        $("#lihatSemuaMerk").click(function() {
            $(".merk-open").toggle();
        });
    });

    $(document).ready(function() {
        $('#kategori-container').on('change', '.kategori_checkbox', function() {
            $("#page").val(1);
            var checkedValues = [];
            $('.kategori_checkbox:checked').each(function() {
                checkedValues.push($(this).val());
            });
            var selectedValuesString = checkedValues.join(',');
            $('#selectedKategori').val(selectedValuesString);
            getDataMaterial();
        });

        $('#merk-container').on('change', '.merk_checkbox', function() {
            $("#page").val(1);
            var checkedValues = [];
            $('.merk_checkbox:checked').each(function() {
                checkedValues.push($(this).val());
            });
            var selectedValuesString = checkedValues.join(',');
            $('#selectedMerk').val(selectedValuesString);

            getDataMaterial();
        });

        $('.form-filter').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission behavior

            $("#page").val(1);
            var searchTerm = $('.nama_produk').val();

            $('#searchedNama').val(searchTerm);
            getDataMaterial();
        });
    })

    function getTotalPages() {
        var jumlahMaterial = parseInt($('#jumlah_material').text());
        var totalPages = Math.ceil(jumlahMaterial / 9);
        $('#total_pages').val(totalPages);
        updatePagination();
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



    function getDataMaterial() {
        $.ajax({
            type: "POST",
            url: "https://estimator.id/dev_msib/server/api/getKatalogProduk2",
            data: $('#getMaterial').serialize(),
            dataType: "json",
            contentType: "text/plain",
            success: function(data) {
                var list = "";
                if (data != "") {
                    for (var i = 0; i <= data.length - 1; i++) {
                        var foto = data[i].foto || 'no-foto.jpg';
                        var harga = data[i].harga_dasar;

                        list += `
                        <div class="col-lg-4 col-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div style="background-image: url('<?= $this->config->item('eid') ?>assets/foto/produk/${foto}')" class="card-img-mat bg-card-mat">
                </div>
                <div class="card-body" id="myCardBody">
                    <h5 class="material-card-title card-title mb-0 fw-semibold">${ambilDuaKataPertama(data[i].nama_produk)}</h5>
                    <h6 class="material-card-subtitle mt-1 mb-0">${data[i].nama_suplier}</h6>
                    <hr />
                    <div><strong>${formatRupiah(harga)}</strong>/buah</div>
                    <div class="d-none d-lg-flex mt-2 w-100 flex-row gap-1 justify-content-center">
                    <button type="button" class="btn btn-outline-primary" onclick="detailProduk(${data[i].id_produk})">Detail</button>
                    <button type="button" class="btn btn-primary btn-beli flex-grow-1" style="" data-number="${data[i].no_wa}" data-id="${data[i].id_produk}" data-product="${data[i].nama_produk}" data-merk="${data[i].merk}" data-spec="${data[i].spesifikasi}"><i class="fa-solid fa-cart-shopping me-2"></i>Beli Sekarang</button>
                    </div>

                    <div class="d-flex flex-column d-none">
                        <button type="button" class="btn btn-outline-primary mb-2" onclick="detailProduk(${data[i].id_produk})">Detail</button>
                        <button type="button" class="btn btn-primary btn-beli" data-number="${data[i].no_wa}" data-id="${data[i].id_produk}" data-product="${data[i].nama_produk}" data-merk="${data[i].merk}" data-spec="${data[i].spesifikasi}"><i class="fa-solid fa-cart-shopping me-2"></i>Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
                        `;
                    }
                } else {
                    list += `
                        <div class="col-12 mb-3">   
                            <div class="koleksi-not-found" style="display: none;">
                                <div class="row justify-content-center text-center">
                                    <img src="<?php echo base_url('assets/demo/img/empty.png'); ?>" alt="Deskripsi Gambar" class="img-fluid" style="width: 300px; height: 200px;">
                                    <h5 class="mt-3">Yah! Tidak ada desain hunian yang sesuai dengan pencarian Anda.</h5>
                                    <div class="mt-1">Silahkan hubungi kami untuk mendapatkan rekomendasi desain yang sesuai.</div>
                                    <a href="" class="btn btn-primary mt-3" style="width: fit-content;">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>`;
                }
                getSummaryKatalog();

                $("#konten-material").html(list).loading("done");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown)
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan',
                    text: 'Terjadi masalah saat pengambilan data.',
                    customClass: {
                        confirmButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                });
            },
        });
    }

    function setPagination(currentPage, totalPages) {
        $('#pagination').empty(); // Clear existing pagination

        // Calculate start and end page numbers
        var startPage = Math.max(1, currentPage - 2);
        var endPage = Math.min(totalPages, startPage + 4);

        // Add Previous button
        $('#pagination').append('<li class="page-item"><a class="page-link" href="#" aria-label="Previous" onclick="previousPage()"><span aria-hidden="true">&laquo;</span></a></li>');

        // Add numbered page links
        for (var i = startPage; i <= endPage; i++) {
            var pageLink = $('<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="setPage(' + i + ')">' + i + '</a></li>');
            if (i === currentPage) {
                pageLink.addClass('active');
            }
            $('#pagination').append(pageLink);
        }

        // Add Next button
        $('#pagination').append('<li class="page-item"><a class="page-link" href="#" aria-label="Next" onclick="nextPage()"><span aria-hidden="true">&raquo;</span></a></li>');
    }

    function updatePagination() {
        var currentPage = parseInt($('#page').val());
        var totalPages = parseInt($('#total_pages').val());
        setPagination(currentPage, totalPages);
    }


    function getSummaryKatalog() {
        var data = {

        }
        if ($('#selectedKategori').val() !== '') {
            data = {
                "id_kategori": $('#selectedKategori').val()
            };
        }

        if ($('#selectedMerk').val() !== '') {
            data = {
                "merk": $('#selectedMerk').val()
            };
        }
        $.ajax({
            type: 'POST',
            url: "https://estimator.id/dev_msib/server/api/getSummaryCariProduk",
            dataType: "JSON",
            data: data,
            success: function(data) {
                $('#jumlah_material').html(data.suplier);
                var offset = ($('#page').val() - 1) * 9;
                $('#jumlah_tampil').text((offset + 1) + ' - ' + Math.min((offset + 9), data.suplier));
                getTotalPages();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }

    function getKategoriProduk() {
        $.ajax({
            type: 'POST',
            url: "https://estimator.id/dev_msib/server/api/getKategoriProduk",
            dataType: "JSON",
            success: function(data) {

                if (data != '') {

                    $.each(data, function(i, item) {
                        $('#kategori-container').append(`<div class="d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input kategori_checkbox" type="checkbox" value="` + item.id_kategori + `" id="kategori_checkbox_` + item.id_kategori + `" name="id_kategori">
                                        <label class="form-check-label" for="kategori_checkbox_` + item.id_kategori + `">
                                        ` + item.kategori + `
                                        </label>
                                    </div>
                                    <div class="badge bg-kategori" style="font-size:12px;">` + item.jumlah + `</div>
                                </div>`);
                        if (i < 3) {
                            $('.kategori').append('<button class="btn btn-light border-2 m-1">' + item.kategori + '</button>');
                        } else {
                            $('.kategori-open').append('<button class="btn btn-light border-2 m-1">' + item.kategori + '</button>');
                        }

                    });

                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }

    function getMerkProduk() {
        $.ajax({
            type: 'POST',
            url: "https://estimator.id/dev_msib/server/api/getMerkProduk",
            dataType: "JSON",
            success: function(data) {

                if (data != '') {

                    $.each(data, function(i, item) {
                        $('#merk-container').append(`<div class="d-flex justify-content-between gap-3 align-items-center mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input merk_checkbox" type="checkbox" value="'` + item.merk + `' " id="merk_checkbox_` + i + `" name="merk_checkbox">
                                        <label class="form-check-label" for="merk_checkbox_` + i + `">
                                        ` + item.merk + `
                                        </label>
                                    </div>
                                    <div class="badge bg-kategori" style="font-size:12px;">` + item.jumlah + `</div>
                                </div>`);

                        if (i < 2) {
                            $('.merk').append('<button class="btn btn-light border-2 m-1">' + item.merk + '</button>');
                        } else {
                            $('.merk-open').append('<button class="btn btn-light border-2 m-1">' + item.merk + '</button>');
                        }
                    });


                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }


    function setPage(page_value) {
        $("#page").val(page_value);
        updatePagination();
        getDataMaterial();
    }



    function nextPage() {
        // Mendapatkan nilai halaman saat ini dari elemen dengan ID "page"
        var currentPage = parseInt($("#page").val());

        var totalPages = parseInt($('#total_pages').val());
        if (currentPage < totalPages) {
            $('#page').val(currentPage + 1);
            updatePagination();
            getDataMaterial(); // Submit form to fetch data for next page
        }
    }

    function previousPage() {
        // Mendapatkan nilai halaman saat ini dari elemen dengan ID "page"
        var currentPage = parseInt($("#page").val());

        // // Menambahkan 1 untuk mendapatkan halaman berikutnya
        // var nextPage = currentPage - 1;

        // // Mengatur nilai halaman yang baru
        // $("#page").val(nextPage);

        // // Memanggil fungsi untuk mendapatkan data sesuai dengan halaman yang baru
        // getDataMaterial();

        if (currentPage > 1) {
            $('#page').val(currentPage - 1);
            updatePagination();
            getDataMaterial();
        }
    }

    // var currentPage = 1;
    // var totalPages = 326; // Ganti dengan jumlah total halaman Anda
    // var pagesToShow = 3; // Jumlah halaman yang ditampilkan

    // function setPage(page_value) {
    //     currentPage = page_value;
    //     getDataMaterial();
    //     updatePaginationUI();
    // }

    // function nextPage() {
    //     if (currentPage < totalPages) {
    //         setPage(currentPage + 1);
    //     }
    // }

    // function previousPage() {
    //     if (currentPage > 1) {
    //         setPage(currentPage - 1);
    //     }
    // }

    // function updatePaginationUI() {
    //     var pagination = $("#pagination");
    //     pagination.empty();

    //     // Menampilkan angka halaman sesuai dengan currentPage dan totalPages
    //     var startPage = Math.max(1, currentPage - Math.floor(pagesToShow / 2));
    //     var endPage = Math.min(startPage + pagesToShow - 1, totalPages);

    //     for (var i = startPage; i <= endPage; i++) {
    //         var activeClass = (i === currentPage) ? "active" : "";
    //         pagination.append('<li class="page-item ' + activeClass + '"><a href="javascript:void(0);" class="page-link" onclick="setPage(' + i + ')">' + i + '</a></li>');
    //     }

    //     // Tombol Previous
    //     pagination.prepend('<li class="page-item"><a class="page-link" href="#" aria-label="Previous" onclick="previousPage()"><span aria-hidden="true">&laquo;</span></a></li>');

    //     // Tombol Next
    //     pagination.append('<li class="page-item"><a class="page-link" href="#" aria-label="Next" onclick="nextPage()"><span aria-hidden="true">&raquo;</span></a></li>');
    // }

    function isMobile() {

        var check = false;

        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);

        return check;

    };


    $(document).on('click', '.btn-beli', function() {
        var id_produk = $(this).attr("data-id");

        var nama_produk = $(this).attr("data-product");

        var merk = $(this).attr("data-merk");

        var spesifikasi = $(this).attr("data-spec").replace(/<[^>]*>/g, " ");

        var text = `Halo,\nSaya ingin membeli produk Anda dengan rincian:\n\nNama Produk: ` + nama_produk + `\nMerk: ` + merk + `\nSpesifikasi: ` + spesifikasi + `\nLink Produk: <?php echo base_url('detail/') ?>` + id_produk + `\n\nApakah bisa dibantu?\nTerima kasih`;

        var phone = $(this).attr("data-number");

        var message = encodeURIComponent(text);



        if (phone.substring(0, 1) == '+') phone = phone.substring(1);

        else if (phone.substring(0, 1) == '0') {

            phone = phone.substring(1);

            phone = '62' + phone;

        }



        if (isMobile() == true) {

            //mobile device

            var whatsapp_API_url = "whatsapp://send";

            $(this).attr('href', whatsapp_API_url + '?phone=' + phone + '&text=' + message);

        } else {

            //desktop

            var whatsapp_API_url = "https://web.whatsapp.com/send";

            var url = whatsapp_API_url + '?phone=' + phone + '&text=' + message;

            window.open(url, '_blank');

        }
    });
</script>