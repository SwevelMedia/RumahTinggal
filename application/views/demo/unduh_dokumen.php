<style>
    @media (max-width: 767px) {
        .mobile-bg-white {
            margin-top: 20px;
            /* Sesuaikan nilai ini sesuai dengan kebutuhan Anda */
        }
    }
</style>

<body>
    <div class="bg-light">
        <div class="py-5 container">
            <div class="bg-white card card-body p-4 mb-3">
                <h5 class="semibold d-none d-lg-block">Paket Desain</h5>
                <div class="bg-white card card-body shadow-sm" id="myCardBody">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="bg-white card card-body p-2 mobile-bg-white" id="myCardBody">
                                <div>
                                    <img src="<?= base_url('assets/img/thumbnail/' . $transaksiku->foto) ?>" class="img-fluid">
                                    <div class="text-center d-none d-lg-block mt-2"> <strong>#<?php echo $transaksiku->no_invoice; ?></strong></div>
                                    <div class="text-center d-lg-none mt-2" style="font-size: 12px;"><strong><?= $transaksiku->lantai == '1' ? "Rp" . number_format(3500000 * $transaksiku->luas_bangunan, 0, ",", ".") : ($transaksiku->lantai == '2' ? "Rp" . number_format(4500000 * $transaksiku->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $transaksiku->luas_bangunan, 0, ",", ".")); ?></strong></div>
                                    <div class="bg-white card card-body p-0 d-lg-none mt-2" id="myCardBody" style="max-width: 85px;margin: 0 auto;">
                                        <div class="d-flex align-items-center gap-2" style="text-align: center; display: flex; justify-content: center;">
                                            <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="15" height="15">
                                            <div style="font-size: 13px;"><strong>Paket <?= $transaksiku->jenis_paket ?></strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="d-flex flex-column mt-3">
                                <h5> <?= $transaksiku->nama_rumah ?> </h5>
                                <small>By <?= $transaksiku->nama_arsitek ?></small>
                            </div>
                            <div class="d-flex align-items-center gap-2 mt-3">
                                <div>
                                    <img src="<?php echo base_url('assets/demo/img/cash.png'); ?>" width="25" height="25">
                                </div>
                                <div>
                                    <small class="d-none d-lg-block">Biaya Konstruksi</small>
                                    <small class="fw-semibold d-block"><?= $transaksiku->lantai == '1' ? "Rp" . number_format(3500000 * $transaksiku->luas_bangunan, 0, ",", ".") : ($transaksiku->lantai == '2' ? "Rp" . number_format(4500000 * $transaksiku->luas_bangunan, 0, ",", ".") : "Rp" . number_format(5500000 * $transaksiku->luas_bangunan, 0, ",", ".")); ?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 mt-3">
                                <div>
                                    <img src="<?php echo base_url('assets/demo/img/arrows-expand.png'); ?>" width="25" height="25">
                                </div>
                                <div>
                                    <small class="d-none d-lg-block">Lahan Minimal</small>
                                    <small class="fw-semibold d-block"><?= $transaksiku->lebar_lahan . ' m x ' . $transaksiku->panjang_lahan . ' m' ?></small>
                                </div>
                            </div>
                            <a href="#" onclick="detailDesain(<?= $transaksiku->id_rumah ?>)" class=" btn btn-primary d-lg-none mt-2">Detail Desain</a>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="position-absolute top-0 end-0 mt-3" style="margin-right: 20px;">
                                <div class="bg-white card card-body p-1" id="myCardBody">
                                    <div class="d-flex gap-2 align-items-center">
                                        <img src="<?php echo base_url('assets/demo/img/gift.png'); ?>" width="15" height="15">
                                        <div style="font-size: 13px;"><strong>Paket <?= $transaksiku->jenis_paket ?></strong></div>
                                    </div>
                                </div>

                            </div>
                            <div class="position-absolute bottom-0 end-0 mb-3" style="margin-right: 20px;">
                                <a href="#" onclick="detailDesain(<?= $transaksiku->id_rumah ?>)" class=" btn btn-primary">Detail Desain</a>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-4">Unduh Dokumen</h5>
                <div class="list-dokumen mt-3">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check d-lg-none" style="color: green;"></i>
                            <div style="font-size: 17px;">Laporan Desain</div>
                            <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" width="15" height="15">
                        </div>
                        <?php
                        // Mengecek nilai paket, dan tombol akan menyala jika paket adalah 1, 2, atau 3
                        $unduhButtonState = ($unduh->paket == 1 || $unduh->paket == 2 || $unduh->paket == 3) ? '' : 'disabled';
                        ?>

                        <button type="button" class="btn btn-primary" <?php echo $unduhButtonState; ?> onclick="unduhDokumen('<?= base_url('assets/dokumen/dokumen_gratis/') ?>' + '<?= $unduh->laporan_desain ?>')">Unduh</button>
                        <!-- <button type="button" class="btn btn-primary">Unduh</button> -->

                    </div>
                    <hr />
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check d-lg-none" style="color: green;"></i>
                            <div style="font-size: 17px;">Gambar Skematik</div>
                            <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" width="15" height="15">
                        </div>
                        <?php
                        // Mengecek nilai paket, dan tombol akan menyala jika paket adalah 1, 2, atau 3
                        $unduhButtonState = ($unduh->paket == 1 || $unduh->paket == 2 || $unduh->paket == 3) ? '' : 'disabled';
                        ?>

                        <button type="button" class="btn btn-primary" <?php echo $unduhButtonState; ?> onclick="unduhDokumen('<?= base_url('assets/dokumen/dokumen_gratis/') ?>' + '<?= $unduh->laporan_desain ?>')">Unduh</button>
                        <!-- <button type="button" class="btn btn-primary">Unduh</button> -->
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check d-lg-none" style="color: green;"></i>
                            <div style="font-size: 17px;">Gambar Kerja</div>
                            <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" width="15" height="15">
                        </div>
                        <?php
                        // Mengecek nilai paket, dan tombol akan menyala jika paket adalah 1, 2, atau 3
                        $unduhButtonState = ($unduh->paket == 2 || $unduh->paket == 3) ? '' : 'disabled';
                        ?>

                        <button type="button" class="btn btn-primary" <?php echo $unduhButtonState; ?> onclick="unduhDokumen('<?= base_url('assets/dokumen/dokumen_gratis/') ?>' + '<?= $unduh->laporan_desain ?>')">Unduh</button>
                        <!-- <button type="button" class="btn btn-primary">Unduh</button> -->
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-check d-lg-none" style="color: green;"></i>
                            <div class="d-none d-lg-block" style="font-size: 17px;">Rencana Anggaran Biaya</div>
                            <div class="d-lg-none" style="font-size: 17px;">Rencana Anggaran <br /> Biaya</div>
                            <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" width="15" height="15">
                        </div>

                        <?php
                        // Mengecek nilai paket, dan tombol akan menyala jika paket adalah 1, 2, atau 3
                        $unduhButtonState = ($unduh->paket == 2 || $unduh->paket == 3) ? '' : 'disabled';
                        ?>

                        <button type="button" class="btn btn-primary" <?php echo $unduhButtonState; ?> onclick="unduhDokumen('<?= base_url('assets/dokumen/dokumen_gratis/') ?>' + '<?= $unduh->laporan_desain ?>')">Unduh</button>
                        <!-- <button type="button" class="btn btn-primary">Unduh</button> -->
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-regular fa-clock d-lg-none" style="color: gray;"></i>
                            <div class="d-none d-lg-block" style="font-size: 17px;">Rencana Kerja dan Syarat</div>
                            <div class="d-lg-none" style="font-size: 17px;">Rencana Kerja <br /> dan Syarat</div>
                            <img src="<?php echo base_url('assets/demo/img/settings.png'); ?>" width="15" height="15">
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <?php
                            // Mengecek nilai paket, dan tombol "Tanya Kami" akan menyala untuk paket 2 dan 3
                            $tanyaKamiButtonState = ($unduh->paket == 2 || $unduh->paket == 3) ? '' : 'disabled';
                            ?>

                            <button type="button" class="btn btn-success d-none d-lg-block" <?php echo $tanyaKamiButtonState; ?>>Tanya Kami</button>
                            <button type="button" class="btn btn-secondary">Unduh</button>
                            <!-- <button type="button" class="btn btn-primary">Unduh</button> -->
                        </div>

                    </div>
                    <hr />
                </div>


            </div>

        </div>

    </div>

</body>

<script>
    function detailDesain(id) {
        location.href = "<?= base_url('detail_koleksi/') ?>" + id;
    }

    function unduhDokumen(url) {
        // Lakukan logika unduh di sini, misalnya:
        window.location.href = url;
    }
</script>