<style>
    .bg-header-sample {
        background-image: linear-gradient(to right, lightblue, white);
    }

    .accordion-item {
        margin-bottom: 10px;
        border-radius: 10px !important;
        /* Ganti nilai ini sesuai kebutuhan jarak yang diinginkan */
    }

    .accordion-header {
        border: 0;
        border-radius: 10px !important;
    }

    .accordion-header .accordion-button {
        border: 1.5px solid var(--Grey-05, #999);
        border-radius: 10px;
        border-top-right-radius: 10px !important;
        border-top-left-radius: 10px !important;
        transition: border-bottom-width 0.5s ease;
        transition: border-bottom-left-radius 0.3s ease;
        transition: border-bottom-right-radius 0.3s ease;
    }

    .accordion-header .accordion-button.collapsed:last-child {
        border-bottom-right-radius: 10px !important;
        border-bottom-left-radius: 10px !important;
    }

    .accordion-collapse {
        border: 0;
    }

    /* .accordion-body {
        transition: background-color 0.1s ease;
    } */

    .accordion-collapse .accordion-body {
        border: 1.5px solid var(--Grey-05, #999);
        border-top: 0;
        border-radius: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #e7f1ff;
    }

    .accordion-button::after {
        background-image: var(--bs-accordion-btn-icon) !important;
    }

    .accordion-header .accordion-button[aria-expanded="true"] {
        border-bottom-width: 0 !important;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        color: black;
        font-weight: 500;
    }

    .accordion-button:focus {
        box-shadow: none !important;
    }
</style>

</styl.accordion-item>

<div class="py-2 bg-header-sample">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <h2 class="fw-bold mb-3 text-primary mt-3 mb-4">Sampel Desain</h2>
                <p class="mb-3" style="text-align: justify;">Pilihlah sampel dokumen yang ingin Anda lihat. Sampel ini adalah gambaran dokumen yang akan Anda dapatkan setelah membeli produk kami. </p>
                <p class="mb-3 d-none d-lg-block">Silakan hubungi kami untuk pertanyaan lebih lanjut. </p>
                <a href="https://api.whatsapp.com/send?phone=628112636228&text=Hai%20rumahtinggal.id%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20rumahtinggal.id%20" target="_blank" class="btn btn-primary d-none d-lg-block" style="width:max-content;">Hubungi Kami</a>
            </div>
            <div class="col-lg-6 col-12 order-1 order-lg-2">
                <img src="<?php echo base_url('assets/demo/img/Sample.png'); ?>" alt="Deskripsi Gambar" class="img-fluid d-none d-lg-block" style="margin-left:150px;">
                <img src="<?php echo base_url('assets/demo/img/Sample.png'); ?>" alt="Deskripsi Gambar" class="img-fluid text-center ms-2 d-lg-none">
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#konsep_desain" aria-expanded="true" aria-controls="konsep_desain">
                                Konsep Desain
                            </button>
                        </h2>
                        <div id="konsep_desain" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Laporan desain sebagai gambaran berisi konsep desain rumah, gambar 3D eksterior, denah, tampak bangunan,dan spesifikasi material. Dokumen ini akan memberikan gambaran menyeluruh terkait desain setiap rumah.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gambar_skematik" aria-expanded="false" aria-controls="gambar_skematik">
                                Gambar Skematik
                            </button>
                        </h2>
                        <div id="gambar_skematik" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Gambar skematik ini merupakan gambar desain yang terukur, berupa denah, tampak, dan potongan bangunan. Gambar ini sebagai syarat minimal untuk panduan tukang dalam membangun.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gambar_kerja" aria-expanded="false" aria-controls="gambar_kerja">
                                Gambar Kerja
                            </button>
                        </h2>
                        <div id="gambar_kerja" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Gambar kerja yang detail sangat diperlukan untuk kemudahan tukang dalam membangun. Gambar kerja ini sangat lengkap dan detail mulai dari gambar struktur, arsitektur, instalasi air dan listrik.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rab" aria-expanded="false" aria-controls="rab">
                                Rencana Anggaran Biaya
                            </button>
                        </h2>
                        <div id="rab" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Agar proses pembangunan lebih terarah diperlukan juga Rencana Anggaran Biaya (RAB) yaitu dokumen yang memberikan: 1. rincian biaya pembangunan tiap tahap pekerjaan konstruksi; 2. harga material, upah, dan alat; 3. hingga rincian kebutuhan material, jumlah tukang, dan jumalh alat.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rks" aria-expanded="false" aria-controls="rks">
                                Rencana Kerja dan Syarat
                            </button>
                        </h2>
                        <div id="rks" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive" data-bs-parent="#accordionPanelsStayOpenExample">
                            <div class="accordion-body" style="text-align: justify;">
                                Sebagai pelengkap dokumen, Rencana Kerja dan Syarat diperlukan agar diketahui spesifikasi dan merk material apa yang digunakan serta bagaimana syarat pengaplikasiannya.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div>Sampel dokumen Konsep Desain ini akan Anda peroleh setelah pembelian paket 1 pada setiap produk desain kami.</div>
                <!-- <img src="<?php echo base_url('assets/demo/img/pdf_sampel.png'); ?>" alt="Deskripsi Gambar" class="img-fluid"> -->
                <div class="konsep_desain" id="konsep_desain_pdf" style="width: 100%;height:900px;"> </div>

                <div class="gambar_skematik" id="gambar_skematik_pdf" style="width: 100%;height:900px;"> </div>

                <div class="gambar_kerja" id="gambar_kerja_pdf" style="width: 100%;height:900px;"> </div>

                <div class="rab" id="rab_pdf" style="width: 100%;height:900px;"> </div>

                <div class="rks" id="rks_pdf" style="width: 100%;height:900px;"> </div>
            </div>

        </div>
    </div>
    <span class="d-none" id="displayedPdf">.konsep_desain</span>
</div>

<script src="<?= base_url('assets/dflip/js/libs/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/dflip/js/dflip.min.js') ?>" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        var konsep_desain_pdf = "<?php echo base_url('assets/dokumen/sampel/Laporan Desain.pdf') ?>";

        var gambar_skematik_pdf = "<?php echo base_url('assets/dokumen/sampel/Gambar Skematik.pdf') ?>";

        var gambar_kerja_pdf = "<?php echo base_url('assets/dokumen/sampel/Gambar Kerja.pdf') ?>";

        var rab_pdf = "<?php echo base_url('assets/dokumen/sampel/Rencana Anggaran Biaya.pdf') ?>";

        var rks_pdf = "<?php echo base_url('assets/dokumen/sampel/Rencana Kerja dan Syarat.pdf') ?>";

        var options = {
            height: 650,
            duration: 700,
            pageMode: DFLIP.PAGE_MODE.SINGLE
        };

        var konsep_desain = $("#konsep_desain_pdf").flipBook(konsep_desain_pdf, options);

        var gambar_skematik = $("#gambar_skematik_pdf").flipBook(gambar_skematik_pdf, options);

        var gambar_kerja = $("#gambar_kerja_pdf").flipBook(gambar_kerja_pdf, options);

        var rab = $("#rab_pdf").flipBook(rab_pdf, options);

        var rks = $("#rks_pdf").flipBook(rks_pdf, options);
    })

    $(document).ready(function() {
        $('.konsep_desain').show();
        $('.gambar_skematik, .gambar_kerja, .rab, .rks').hide();

        // Event listener for when an accordion item is shown
        $('.accordion').on('show.bs.collapse', function(e) {
            var targetId = $(e.target).attr('id');
            $('.konsep_desain, .gambar_skematik, .gambar_kerja, .rab, .rks').hide();
            $('.' + targetId).show();
            $('.df-ui-zoomout').click()
        });
    })
</script>