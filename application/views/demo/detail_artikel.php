<style>
    .bg-card-arpop {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* height: 90px;
        width: 120px; */
        height: 100%;
        width: 100%;
        max-height: 120px;
        border-radius: 5%;

    }

    .img-det-artikel {
        height: auto;
        width: 95%;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .limited-tittle {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
        /* Atur jumlah baris yang diinginkan */
    }
</style>


<div class="pt-2 bg-light mb-3wc">
    <div class="container">
        <hr />
        <div>
            <a href="<?= base_url('') ?>">Beranda</a> /
            <a href="<?= base_url('artikel') ?>">Artikel</a> /
            <?php echo $detailArtikel ? '<a href="#">' . $detailArtikel->judul_artikel . '</a>' : 'Artikel'; ?>
        </div>

        <hr />
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mt-4" id="judul_artikel" style="width: 98%;"><?php echo $detailArtikel->judul_artikel ?></h2>
                    <div class="d-flex gap-5">
                        <div id="tgl_dibuat">
                            <?php
                            // Ubah format tanggal dengan menampilkan nama bulan sebagai teks
                            $formattedDate = date('d F Y', strtotime($detailArtikel->tgl_dibuat));
                            echo $formattedDate;
                            ?>
                        </div>
                        <div id="dibuat_oleh">Ditulis Oleh <?php echo $detailArtikel->nama_penulis ?> </div>
                    </div>
                    <div class="isi-artikel">
                        <div id="fh5co-title-box">
                            <img src="<?= base_url('assets/img/artikel/' . $detailArtikel->foto_cover) ?>" class="img-fluid img-det-artikel" onerror="this.onerror=null; this.src='<?= base_url('assets/demo/img/artikel/default-artikel-small.png') ?>';" style="object-fit:cover;">
                        </div>
                        <div class="text-artikel" id="isi_artikel" style="text-align: justify; width:95%; font-family: 'Inter', sans-serif;">
                            <?php echo $detailArtikel->isi_artikel ?>
                        </div>
                    </div>
                    <?php if (!empty($detailArtikel->tags)) : ?>
                        <div class="kata-kunci mt-2 d-lg-none">
                            <h5 class="mb-4">Kata Kunci Artikel</h5>
                            <div class="horizontal-buttons" style="display: flex; flex-wrap: wrap; gap: 1rem; white-space:nowrap;">
                                <?php
                                $tagsArray = explode(',', $detailArtikel->tags);
                                foreach ($tagsArray as $tag) : ?>
                                    <button type="button" style="flex: 1 0 calc(33.3333% - 1rem);" class="btn btn-outline-dark"><?= $tag ?></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="bagikan-artikel mt-3" style="width: 95%;">
                        <hr />
                        <div class=" d-flex justify-content-between align-items-center">
                            <div><strong>Bagikan Artikel Ini</strong></div>
                            <div class="d-flex gap-3">
                                <a href="https://www.facebook.com/rumahtinggal.id/" target="_blank">
                                    <img src="<?php echo base_url('assets/demo/img/wa_black.png'); ?>" alt="sosmed" width="30" height="30">
                                </a>
                                <a href="https://www.facebook.com/rumahtinggal.id/" target="_blank">
                                    <img src="<?php echo base_url('assets/demo/img/fb_black.png'); ?>" alt="sosmed" width="30" height="30">
                                </a>
                                <a href="https://id.pinterest.com/rumahtinggalid" target="_blank">
                                    <img src="<?php echo base_url('assets/demo/img/twt_black.png'); ?>" alt="sosmed" width="30" height="30">
                                </a>
                                <a href="https://www.instagram.com/rumahtinggal.id/" target="_blank">
                                    <img src="<?php echo base_url('assets/demo/img/tele_black.png'); ?>" alt="sosmed" width="30" height="30">
                                </a>
                            </div>
                        </div>
                        <hr />

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-none d-lg-block">
                        <form onsubmit="searchArtikel(event)" id="searchForm">
                            <div class="input-group mb-3 mt-4">
                                <input type="text" class="form-control" placeholder="Tips Bangun Rumah" style="background-color: #f7f7f7;" id="search_term" value="" />

                                <button class="btn btn-primary" type="submit" id="button-addon2" style="background-color: #f7f7f7; border-left:none; border-color: #ced4da; border-top-left-radius:0; border-bottom-left-radius:0;">
                                    <i class="fas fa-search" style="color: black;"></i>
                                </button>

                            </div>
                        </form>
                    </div>
                    <div class="artikel-terpopuler mt-4">
                        <h5 class="mb-4 d-none d-lg-block">Artikel Populer</h5>
                        <h4 class="text-center mb-4 d-lg-none">Artikel Populer</h4>
                        <?php foreach ($popularArtikel as $item) { ?>
                            <a href="<?php echo base_url('detail-artikel/') . $item->id_artikel ?>" style="text-decoration:none; color:inherit ;" class="">
                                <div class="pop-artikel mb-4 " onclick="detailArtikel(<?= $item->id_artikel ?>)" style="cursor: pointer;">
                                    <div class="row ">
                                        <div class="col-4">
                                            <img src="<?= base_url('assets/img/artikel_thumbnail/' . $item->foto_cover) ?>" class="bg-card-arpop" alt="..." style="object-fit:cover;">
                                        </div>
                                        <div class="col-8">
                                            <div class="d-flex align-item-center gap-3">
                                                <small><?php echo $item->nama_penulis; ?></small>
                                                <small><?php echo $item->tgl_dibuat; ?></small>
                                            </div>
                                            <h5 class="limited-tittle mt-2 me-3"><?php echo $item->judul_artikel; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <a href="<?= base_url('demo/cari_artikel') ?>" class="btn btn-outline-primary w-100 d-lg-none mb-3">Artikel Lainnya</a>
                    </div>
                    <!-- <div class="artikel-terkait mt-4">
                        <h5 class="mb-4 d-none d-lg-block">Artikel Terkait</h5>
                        <h4 class="text-center mb-4 d-lg-none">Artikel Terkait</h4>
                        <div class="artikel-terkait mb-4 ">
                            <div class="row ">
                                <div class="col-4">
                                    <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>Lifestyle</small>
                                        <small>8 Desember 2023</small>
                                    </div>
                                    <h5 class="limited-tittle mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-terkait mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>Lifestyle</small>
                                        <small>8 Desember 2023</small>
                                    </div>
                                    <h5 class="limited-tittle mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-terkait mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>Lifestyle</small>
                                        <small>8 Desember 2023</small>
                                    </div>
                                    <h5 class="limited-tittle mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-terkait mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo base_url('assets/demo/img/dum_artikel.png'); ?>" class="bg-card-arpop" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-item-center gap-3">
                                        <small>Lifestyle</small>
                                        <small>8 Desember 2023</small>
                                    </div>
                                    <h5 class="limited-tittle mt-2 me-3">Ciri-ciri Air di rumah anda bersih dan layak minum untuk keluarga</h5>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100 d-lg-none mb-3">Artikel Lainnya</a>
                    </div> -->
                    <?php if (!empty($detailArtikel->tags)) : ?>
                        <div class="kata-kunci mt-4 d-none d-lg-block mb-5">
                            <h5 class="mb-4">Kata Kunci Artikel</h5>
                            <div class="horizontal-buttons" style="display: flex; flex-wrap: wrap; gap: 1rem; white-space:nowrap;">
                                <?php
                                $tagsArray = explode(',', $detailArtikel->tags);
                                foreach ($tagsArray as $tag) : ?>
                                    <button onclick="tagArtikel('<?= $tag ?>')" type="button" style="flex: 1 0 calc(33.3333% - 1rem);" class="btn btn-outline-dark"><?= $tag ?></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function detailArtikel(id) {
        location.href = "<?= base_url('detail-artikel/') ?>" + id;
    }

    function tagArtikel(tag) {
        location.href = "<?= base_url('cari_artikel') ?>" + "?tags=" + tag;
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