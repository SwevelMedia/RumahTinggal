<style>
    /*
Looped owl carousel with active state of the thumbs.

Also includes a counter of the slides
*/


    .custom-image-size {
        width: 400px;
        height: 300px;
        /* Tinggi otomatis sesuai proporsi */
    }

    .bg-detail-material {
        background-color: #C6E7FF;
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
        height: 250px;
        width: auto;
    }

    @media (max-width: 767px) {
        .bg-card-mat {
            height: 300px;
            width: auto;
            /* Menetapkan lebar 100% agar sesuai dengan lebar kartu pada tampilan mobile */
        }
    }

    .bg-det-mat {
        background-color: #C6E7FF;
    }

    .bg-card-detail {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 270px;
        width: 360px;
    }

    .ket-supplier-mob.collapsed {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Number of lines to show */
        -webkit-box-orient: vertical;
    }

    .read-more-link {
        color: #056BB7;
        cursor: pointer;
    }

    .material-tittle {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Menentukan jumlah baris yang ingin ditampilkan */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .btn-det-material:hover {
        background-color: #056BB7;
        color: white;
    }

    .star-ulasan {
        color: orange;
    }
</style>


<div class="bg-light">
    <div class="bg-white mt-3">
        <div class="p-3">
            <!-- <div id="owl-carousel" class="owl-carousel"></div> -->
            <div class="caraousel-mobile-material mt-2 border border-radius-2 d-lg-none">
                <div class="owl-carousel owl-theme caraouselMaterial mb-0" id="caraouselMaterial">

                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <div id="foto">
                    </div>
                    <div class="d-flex flex-row gap-2 mt-4 align-items-center justify-content-center">
                        <button type="button" class="btn btn-outline-secondary btn-det-material text-black">
                            <span class="fa-regular fa-heart me-0" style="color: black;"></span> Suka
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-det-material text-black">
                            <span class="fa-regular fa-share-from-square" style="color: black;"></span> Bagikan
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-det-material text-black">
                            <span class="fa-regular fa-comment" style="color: black;"></span> Beri Ulasan
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <h4 class="nama-produk mb-3"><?= $produk[0]->nama_produk ?></h4>
                        <div class="d-flex gap-3">
                            <div class="badge bg-detail-material" style="font-size:15px; color:black;"><?= $produk[0]->kategori ?></div>
                            <div class="badge bg-detail-material" style="font-size:15px; color:black;"><?= $produk[0]->merk ?></div>
                        </div>
                        <h5 class="mt-3"><?= "Rp" . number_format($produk[0]->harga_dasar, 0, ",", ".") ?><span class="unit"> / <?= $produk[0]->satuan ?></h5>
                        <div class="ket-material mt-3">
                            <h5 class="mb-3">Deskripsi</h5>
                            <div style="text-align: justify;">
                                <?= $produk[0]->deskripsi ?>
                            </div>
                        </div>
                        <div class="spek-material mt-3"></div>
                        <h5 class="mt-4 mb-3">Spesifikasi</h5>
                        <div><?= $produk[0]->spesifikasi ?></div>
                        <button type="button" class="btn btn-primary btn-beli-produk mt-4 d-none d-lg-block" data-number="<?= $produk[0]->no_wa ?>" data-id="<?= $produk[0]->id_produk ?>" data-product="<?= $produk[0]->nama_produk ?>" data-merk="<?= $produk[0]->merk ?>" data-spec="<?= $produk[0]->spesifikasi ?>"><i class="fa-solid fa-cart-shopping me-2"></i>Beli Sekarang</button>
                        <button type="button" class="btn btn-primary btn-beli-produk mt-2 w-100 d-lg-none" data-number="<?= $produk[0]->no_wa ?>" data-id="<?= $produk[0]->id_produk ?>" data-product="<?= $produk[0]->nama_produk ?>" data-merk="<?= $produk[0]->merk ?>" data-spec="<?= $produk[0]->spesifikasi ?>"><i class="fa-solid fa-cart-shopping me-2"></i>Beli Sekarang</button>
                        <div class="d-flex flex-row gap-2 mt-4 align-items-center justify-content-center d-lg-none">
                            <button type="button" class="btn btn-outline-secondary btn-det-material text-black">
                                <span class="fa-regular fa-heart me-0" style="color: black;"></span> Suka
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-det-material text-black">
                                <span class="fa-regular fa-share-from-square" style="color: black;"></span> Bagikan
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-det-material text-black">
                                <span class="fa-regular fa-comment" style="color: black;"></span> Beri Ulasan
                            </button>
                        </div>
                        <div class="position-relative border border-grey rounded-3 mt-3" style="border-width: 2px !important;width: fit-content;">
                            <div class="d-flex align-items-center p-2 gap-3">
                                <div class="border border-grey rounded-2" style="border-width: 2px !important; height: 54px; display: flex; align-items: center; justify-content: center;">
                                    <img src="<?= $this->config->item('eid') . 'assets/foto/pengguna/' . $produk[0]->foto_suplier ?>" alt="Deskripsi Gambar" class="img-fluid" width="50" height="50">
                                </div>
                                <div>
                                    <div>Profil Supplier</div>
                                    <div><strong><?= $produk[0]->nama_suplier ?></strong></div>
                                </div>
                                <div class="position-absolute top-0 end-0" style="margin-right: 7px;">
                                    <div class="d-none d-lg-block">
                                        <img src="<?php echo base_url('assets/demo/img/maximize-mat.png'); ?>" width="15" height="15" onclick="detailSupplier()">
                                    </div>
                                </div>
                            </div>
                            <div class="ket-supplier-mob p-2 d-lg-none collapsed" id="ketSupplierMob" style="text-align: justify;">
                                <?php echo $produk[0]->profil ?>
                            </div>
                            <div class="text-center read-more-link d-lg-none" id="bacaSelengkapnya" onclick="toggleTeks()"> Baca Selengkapnya <i class="fa-solid fa-angle-down"></i></div>

                        </div>
                    </div>
                    <div class="ulasan-material mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mt-4">Ulasan</h5>
                            <div class="d-lg-none mt-3">Lihat Semua</div>
                        </div>
                        <small>2 Ulasan terkait produk</small>
                        <div class="position-relative border border-grey rounded-3 px-3 mb-3 mt-3" style="border-width: 2px !important;">
                            <div class="d-flex justify-content-between align-items-center my-3">
                                <div class="d-flex justify-content-between gap-2 align-items-center">
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-regular fa-star"></i>

                                    <small class="ms-3" style="color: grey;">8 September</small>
                                    <div class="position-absolute me-3 mt-2 top-0 end-0">
                                        <img src="<?php echo base_url('assets/demo/img/setting.png'); ?>" width="20" height="20">
                                    </div>
                                </div>
                            </div>
                            <div class="fw-semibold">Mitha</div>
                            <div class="mt-2 mb-3">Bahannya Bagus</div>
                        </div>
                        <div class="position-relative border border-grey rounded-3 px-3 mb-3 mt-3" style="border-width: 2px !important;">
                            <div class="d-flex justify-content-between align-items-center my-3">
                                <div class="d-flex justify-content-between gap-2 align-items-center">
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-solid fa-star star-ulasan"></i>
                                    <i class="fa-regular fa-star"></i>

                                    <small class="ms-3" style="color: grey;">8 September</small>
                                    <div class="position-absolute me-3 mt-2 top-0 end-0">
                                        <img src="<?php echo base_url('assets/demo/img/setting.png'); ?>" width="20" height="20">
                                    </div>
                                </div>
                            </div>
                            <div class="fw-semibold">Mitha</div>
                            <div class="mt-2 mb-3">Produknya oke</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-body bg-light mx-3 mb-2 mt-3 mb-3 p-1 d-none d-lg-block" id="myCardBody" style="background-color: #FFFBEE ; max-height:fit-content;">
    <div class="d-flex align-items-center justify-content-center">
        <i class="fa-solid fa-magnifying-glass" style="color: orange;"></i>
        <div class=" ms-3">Apakah produk dengan spesifikasi yang Anda inginkan belum tersedia? <a href="<?= base_url('') ?>">Coba hubungi admin</a> kami disini.
        </div>
    </div>
</div>
</div>
<div class="bg-white mt-0">
    <div class="container">
        <div class="d-flex justify-content-between flex-column flex-lg-row align-items-center mb-3">
            <h4 class="fw-semibold text-center">Material Serupa</h4>
            <div class="d-none d-lg-block">
                <a class="btn btn-primary" href="<?= base_url('demo/material') ?>">Lihat Semua<i class="ms-2 fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card-container owl-carousel owl-theme owl-carousel-material-serupa">
            <?php

            $jum_produk = 0;

            if ($produk_terkait != '') {

                foreach ($produk_terkait as $item) {

                    if ($item->id_produk != $produk[0]->id_produk) {

                        $jum_produk++;

            ?>

                        <div class="card border-0 shadow-sm mb-2">
                            <div style="background-image: url('<?= $this->config->item('eid') . 'assets/foto/produk/' . $item->foto ?>');background-size: cover;" class="card-img-mat bg-card-mat">
                            </div>
                            <div class="card-body" id="myCardBody">
                                <h5 class="card-title mb-0 fw-semibold material-tittle">
                                    <?= $item->nama_produk ?></h5>
                                <h6 class="mb-0"><?= $item->nama_suplier ?></h6>
                                <hr />
                                <div><strong><?= "Rp" . number_format($item->harga_dasar, 0, ",", ".") ?><span class="unit"> / <?= $item->satuan ?></strong></div>
                                <div class="d-flex mt-2 gap-1 d-none d-lg-block">
                                    <a href="#" class="btn btn-outline-primary" onclick="detailProduk(<?= $item->id_produk ?>)">Detail</a>
                                    <button type=" button" class="btn btn-primary btn-beli-produk mb-2 mt-2" data-number="<?= $produk[0]->no_wa ?>" data-id="<?= $produk[0]->id_produk ?>" data-product="<?= $produk[0]->nama_produk ?>" data-merk="<?= $produk[0]->merk ?>" data-spec="<?= $produk[0]->spesifikasi ?>"><i class="fa-solid fa-cart-shopping me-2"></i>Beli Sekarang</button>
                                </div>
                                <div class="d-flex flex-column d-lg-none">
                                    <a href="#" class="btn btn-outline-primary" onclick="detailProduk(<?= $item->id_produk ?>)">Detail</a>
                                    <button type="button" class="btn btn-primary btn-beli-produk mt-2 mb-2" data-number="<?= $produk[0]->no_wa ?>" data-id="<?= $produk[0]->id_produk ?>" data-product="<?= $produk[0]->nama_produk ?>" data-merk="<?= $produk[0]->merk ?>" data-spec="<?= $produk[0]->spesifikasi ?>"><i class="fa-solid fa-cart-shopping me-2"></i>Beli Sekarang</button>
                                </div>
                            </div>
                        </div>
                <?php }
                }
            }

            if ($jum_produk == 0) { ?>

                <center>

                    <img src="<?= base_url('assets/img/not_found_material.png') ?>" width="150" style="margin-bottom: 8px;" /><br>

                    <span style="font-size: 15px;color: #000;">Tidak ada material terkait</span>

                </center>

            <?php } ?>


        </div>



    </div>
</div>

<!-- modal supplier -->
<div class="modal fade" id="modalSupplier" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content p-2">
            <div class="text-end">
                <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex align-items-center p-3 gap-3">
                <div class="border border-grey rounded-2" style="border-width: 2px !important; height: 54px; display: flex; align-items: center; justify-content: center;">
                    <img src="<?= $this->config->item('eid') . 'assets/foto/pengguna/' . $produk[0]->foto_suplier ?>" alt="Deskripsi Gambar" class="img-fluid" width="50" height="50">
                </div>
                <div>
                    <div>Profil Supplier</div>
                    <div><strong>PT Sumber Djaja Perkasa</strong></div>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-4" style="width: fit-content;">Website Perusahaan
                <img src="<?php echo base_url('assets/demo/img/maximize-mat.png'); ?>" width="15" height="15" style="filter: brightness(0) invert(1);">
            </button>
            <div class="ket-supplier mt-3 px-1" style="text-align: justify; max-height: 350px; overflow-y: auto;">
                <div>
                    <?= $produk[0]->profil ?>
                </div>

            </div>

        </div>
    </div>
</div>
</div>





<script>
    function detailProduk(id) {
        location.href = "<?= base_url('demo/detail_material/') ?>" + id;
    }

    function detailSupplier() {
        var modal = new bootstrap.Modal(document.getElementById('modalSupplier'));
        modal.show();
    }
    var owlMaterial = $(".owl-carousel-material-serupa");
    owlMaterial.owlCarousel({
        items: 1,
        nav: true,
        margin: 20,
        loop: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
                dots: false,
                nav: false,
            },
            576: {
                items: 2,
                nav: false,
            },
            768: {
                items: 3,
                nav: false,
            },
            992: {
                items: 4,
                nav: false,
            },
        },
    });

    var owlSeven = $(".owl-carousel-materialdetail");
    owlSeven.owlCarousel({
        items: 1,
        nav: false,
        margin: 20,
        loop: true,
        lazyLoad: true,
        dots: true,
    });

    function toggleTeks() {
        var ketSupplierMob = document.getElementById("ketSupplierMob");
        var bacaSelengkapnya = document.getElementById("bacaSelengkapnya");

        if (ketSupplierMob.classList.contains("collapsed")) {
            ketSupplierMob.classList.remove("collapsed");
            bacaSelengkapnya.innerHTML = 'Baca Sedikit <i class="fa-solid fa-angle-up"></i>';
        } else {
            ketSupplierMob.classList.add("collapsed");
            bacaSelengkapnya.innerHTML = 'Baca Selengkapnya <i class="fa-solid fa-angle-down"></i>';
        }
    }

    $(document).ready(function() {

        let id = <?= $produk[0]->id_produk ?>;

        let foto = "<?= $produk[0]->foto ?>";



        $.ajax({

            type: 'POST',

            url: "<?= $this->config->item('url_server') ?>api/getFotoProduk/" + id,

            dataType: "JSON",

            success: function(data) {

                let list_foto = [];

                list_foto.push("<?= $this->config->item('eid') ?>assets/foto/produk/" + foto);

                if (data != '') {

                    for (let i = 0; i < data.length; i++) {

                        list_foto.push("<?= $this->config->item('eid') ?>assets/foto/produk/" + data[i].foto);

                    }

                }



                let options = {

                    width: 440,

                    height: 330,

                };



                $('#foto').zoomy(list_foto, options);

                $('#foto img').css({
                    'max-width': '100%', // Sesuaikan dengan lebar maksimum yang diinginkan
                    'max-height': '330px' // Sesuaikan dengan tinggi maksimum yang diinginkan
                });



            },

            error: function(jqXHR, textStatus, errorThrown) {

                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);

            }

        });
    });


    $(document).ready(function() {
        let id = <?= $produk[0]->id_produk ?>;
        let foto = "<?= $produk[0]->foto ?>";

        $.ajax({
            type: 'POST',
            url: "<?= $this->config->item('url_server') ?>api/getFotoProduk/" + id,
            dataType: "JSON",
            success: function(data) {
                let list_foto = ["<?= $this->config->item('eid') ?>assets/foto/produk/" + foto];

                if (data != '') {
                    for (let i = 0; i < data.length; i++) {
                        list_foto.push("<?= $this->config->item('eid') ?>assets/foto/produk/" + data[i].foto);
                    }
                }

                // Hapus semua elemen gambar yang mungkin sudah ada di dalam elemen dengan id 'caraouselMaterial'
                $('#caraouselMaterial').empty();

                // Tambahkan elemen gambar baru ke dalam elemen dengan id 'caraouselMaterial'
                list_foto.forEach(function(photoUrl) {
                    $('#caraouselMaterial').append('<div><img class="custom-image-size" src="' + photoUrl + '" alt="Image"></div>');
                });
                // Inisialisasi kembali Owl Carousel pada elemen dengan id 'caraouselMaterial'
                $('#caraouselMaterial').owlCarousel({
                    items: 1, // Sesuaikan sesuai kebutuhan
                    loop: true,
                    margin: 10
                    // Tambahan opsi Owl Carousel lainnya sesuai kebutuhan Anda
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    });

    function isMobile() {

        var check = false;

        (function(a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);

        return check;

    };



    $(".btn-beli-produk").on("click", function() {

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