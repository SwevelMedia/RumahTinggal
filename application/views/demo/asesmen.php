<style>
    .container-fluid {
        font-family: Inter
    }

    .step-btn-wrapper {
        flex-shrink: 0;
    }

    .step-btn {
        width: 2em;
        height: 2em;
        border-radius: 50%;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media screen and (max-width: 767px) {
        .step-btn {
            width: 24px;
            height: 24px;
            font-size: 0.8em;
        }
    }

    .unfinished-btn {
        border: 2px solid #D6D6D6;
        background-color: #fff;
        color: #D6D6D6;
    }

    .finished-btn {
        border: 3px solid #009500;
        background-color: #009500;
        color: #fff;
    }

    .step-line {
        width: 150px;
        height: 4px;
    }

    .unfinished-line {
        background-color: #D6D6D6;
    }

    .finished-line {
        background-color: #009500;
    }

    .step-btn-text {
        color: var(--Grey-07, #707070);
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.5px
    }

    .fieldset-container {
        padding-left: 9%;
        padding-right: 9%;
    }

    @media screen and (max-width: 767px) {
        .fieldset-container {
            padding-left: 0%;
            padding-right: 0%;
        }

        .step-banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            align-items: center;
            background: var(--Primary-01, #EBF6FF);
            align-self: stretch;
        }

        .lahan-container {
            padding: 0;
        }

        .denah-img {
            width: 50%;
        }

        .content-container {
            padding-left: 6%;
            padding-right: 6%;
        }

        .button-container {
            padding-top: 10%;
        }

    }


    @media screen and (max-width: 1199px) {
        .struktur-desc {
            padding: 1em;
        }

    }

    @media screen and (min-width: 768px) {
        .denah-img {
            width: 100%;
        }

        .content-container {
            padding-left: 0;
            padding-right: 0;
        }

        .struktur-desc {
            padding-right: 1.5em;
        }

    }

    .step-banner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        align-items: center;
        border-radius: 10px;
        background: var(--Primary-01, #EBF6FF);
        align-self: stretch;
    }

    .step-banner h5 {
        font-weight: 600;
        line-height: normal;
        letter-spacing: 0.5px;
        color: var(--Hitam, #1C1C1C);
    }

    .step-banner p {
        color: var(--Grey-07, #707070);
        font-weight: 400;
        line-height: normal;
        margin-bottom: 0;
        letter-spacing: 0.5px;
    }

    .irs {
        width: 100%;
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

    .button-container {
        margin-top: 5%;
    }

    .check-card {
        cursor: pointer;
    }

    .custom-checkbox {
        position: relative;
        background-color: #F5F5F5;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 2.5em;
        height: 2.5em;
        border-radius: 5px;
        color: #003A65;
    }

    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .custom-checkbox input[type="checkbox"]:checked~.checkmark {
        opacity: 100%;
        width: 80%;
        height: 80%;
    }

    .custom-checkbox input[type="checkbox"]:not(:checked)~.checkmark {
        opacity: 0%;
    }

    .struktur-img {
        height: 150px;
        width: 100%;
        object-fit: cover;
        cursor: pointer;
    }

    .kamar-img {
        height: 260px;
    }

    .heading-kamar-card {
        font-weight: 500;
        line-height: normal;
        letter-spacing: 0.5px;
        color: var(--Grey-10, #333);
    }

    .kamar-number-input {
        padding: 0.8em;
        border-radius: 12px;
        border: 1.62px solid var(--Grey-05, #999);
        box-shadow: 0px 0.81px 0.81px 0px rgba(0, 0, 0, 0.25);
        width: 80%;
    }

    input[type='radio'] {
        transform: scale(1.5);
    }

    .custom-checkbox-ruang,
    .custom-checkbox-gaya_desain,
    .custom-checkbox-material {
        position: relative;
        background-color: #F5F5F5;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1.3em;
        height: 1.3em;
        border-radius: 3px;
        cursor: pointer;
        border: 1px solid #D6D6D6;
        color: #003A65;
    }

    .custom-checkbox-ruang input[type="checkbox"],
    .custom-checkbox-gaya_desain input[type="checkbox"],
    .custom-checkbox-material input[type="checkbox"] {
        opacity: 0;
        width: 0;
        height: 0;
        display: none;
    }

    .custom-checkbox-ruang input[type="checkbox"]:checked~.checkmark-ruang,
    .custom-checkbox-gaya_desain input[type="checkbox"]:checked~.checkmark-gaya_desain,
    .custom-checkbox-material input[type="checkbox"]:checked~.checkmark-material {
        opacity: 100%;
        width: 75%;
        height: 75%;
    }

    .custom-checkbox-ruang input[type="checkbox"]:not(:checked)~.checkmark-ruang,
    .custom-checkbox-gaya_desain input[type="checkbox"]:not(:checked)~.checkmark-gaya_desain,
    .custom-checkbox-material input[type="checkbox"]:not(:checked)~.checkmark-material {
        opacity: 0%;
    }

    .material-column-card {
        padding-top: 20px;
        padding-bottom: 10px;
    }
</style>

<div class="container-fluid mb-5" style="background-color:white;" id="form-assessment-tes">
    <section class="multi_step_form" id="frm-assessment">
        <form id="msform">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-11 mt-5 mb-5">
                    <div class="d-flex flex-row justify-content-between align-items-center" role="group" aria-label="Step navigation">
                        <div class="step-btn-wrapper position-relative">
                            <button type="button" class="step-btn unfinished-btn" data-step="1" disabled><span>1</span><i class=""></i>
                            </button>
                            <h6 class="d-none d-xl-block position-absolute text-nowrap step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Ukuran Lahan</h6>
                            <h6 class="d-xl-none position-absolute step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Ukuran</h6>
                        </div>
                        <div class="step-line unfinished-line" data-step="2"></div>
                        <div class="step-btn-wrapper position-relative">
                            <button type="button" class="step-btn unfinished-btn" data-step="2" disabled><span>2</span><i class=""></i>
                            </button>
                            <h6 class="d-none d-xl-block position-absolute text-nowrap step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Struktur Bangunan</h6>
                            <h6 class="d-xl-none position-absolute step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Struktur</h6>
                        </div>
                        <div class="step-line unfinished-line" data-step="3"></div>
                        <div class="step-btn-wrapper position-relative">
                            <button type="button" class="step-btn unfinished-btn" data-step="3" disabled><span>3</span><i class=""></i>
                            </button>
                            <h6 class="d-none d-xl-block position-absolute text-nowrap step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Kamar dan Toilet</h6>
                            <h6 class="d-xl-none position-absolute text-center step-btn-text" style="word-wrap:overflow-wrap;left: 50%; transform: translateX(-50%); bottom:-64px;">Kamar & Toilet</h6>
                        </div>
                        <div class="step-line unfinished-line" data-step="4"></div>
                        <div class="step-btn-wrapper position-relative">
                            <button type="button" class="step-btn unfinished-btn" data-step="4" disabled><span>4</span><i class=""></i>
                            </button>
                            <h6 class="d-none d-xl-block position-absolute text-nowrap step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Ruang Lain</h6>
                            <h6 class="d-xl-none position-absolute text-center step-btn-text" style="word-wrap:overflow-wrap;left: 50%; transform: translateX(-50%); bottom:-47px;">Ruang Lain</h6>
                        </div>
                        <div class="step-line unfinished-line" data-step="5"></div>
                        <div class="step-btn-wrapper position-relative">
                            <button type="button" class="step-btn unfinished-btn" data-step="5" disabled><span>5</span><i class=""></i>
                            </button>
                            <h6 class="d-none d-xl-block position-absolute text-nowrap step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Gaya Desain</h6>
                            <h6 class="d-xl-none position-absolute text-center step-btn-text" style="word-wrap:overflow-wrap;left: 50%; transform: translateX(-50%); bottom:-47px;">Gaya Desain</h6>
                        </div>
                        <div class="step-line unfinished-line" data-step="6"></div>
                        <div class="step-btn-wrapper position-relative">
                            <button type="button" class="step-btn unfinished-btn" data-step="6" disabled><span>6</span><i class=""></i>
                            </button>
                            <h6 class="position-absolute text-nowrap step-btn-text" style="left: 50%; transform: translateX(-50%); bottom:-30px;">Material</h6>
                        </div>
                    </div>
                </div>

            </div>

            <fieldset class="row fieldset-container mt-4" id="step1">
                <div class="row justify-content-center m-0 p-0">
                    <div class="col-12 step-banner p-4 gap-2">
                        <h5 class="">UKURAN LAHAN</h5>
                        <p>Luas lahan ditentukan berdasarkan Lebar Lahan (L) dan Panjang Lahan (P) maksimal yang dapat dibangun untuk rumah tinggal Anda</p>
                    </div>
                </div>
                <div class="row justify-content-between gx-lg-5 gy-5 m-0 mt-4 align-items-center lahan-container">
                    <div class="col-md-4 col-12 d-flex flex-row justify-content-center p-3 m-0">
                        <img class="image denah-img" src="<?= base_url('assets/img/assessment/assessment-denah.png') ?>" alt="">
                    </div>
                    <div class="col-md-8 col-12 content-container">
                        <form class="lahan-form">
                            <h5 style="font-weight: 500;">Lebar Lahan (L)</h5>
                            <p style="font-weight: 400;">Lebar lahan adalah sisi pintu masuk utama masuk rumah tinggal Anda.</br> Tentukan lebar lahan maksimal yang dapat dibangun.</p>
                            <div>
                                <label for="lebarLahan" class="form-label d-block w-100">
                                    <div class="d-flex justify-content-end">
                                        <div><span id="ubahLebar" class="badge bg-light text-dark fw-normal fs-6"><?= (int)$range_lebar_lahan->max_lebar_lahan ?></span> meter</div>
                                    </div>
                                </label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-lebar","minus")'>
                                        <small id="kurang-lebar"><i class="fas fa-minus"></i></small>
                                    </div>
                                    <input type="text" class="js-range-slider-lebar" id="lebarLahan" name="lebar_lahan" value="" />
                                    <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-lebar","plus")'>
                                        <small id="tambah-lebar"><i class="fas fa-plus"></i></small>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-5" style="font-weight: 500;">Panjang Lahan (L)</h5>
                            <p style="font-weight: 400;">Panjang lahan adalah sisi samping rumah tinggal Anda.</br> Tentukan panjang lahan maksimal yang dapat dibangun.</p>
                            <div>
                                <label for="panjangLahan" class="form-label d-block w-100">
                                    <div class="d-flex justify-content-end">
                                        <div><span id="ubahPanjang" class="badge bg-light text-dark fw-normal fs-6"><?= (int)$range_panjang_lahan->max_panjang_lahan ?></span> meter</div>
                                    </div>
                                </label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-panjang","minus")'>
                                        <small id="kurang-panjang"><i class="fas fa-minus"></i></small>
                                    </div>
                                    <input type="text" class="js-range-slider-panjang" id="panjangLahan" name="panjang_lahan" value="" />
                                    <div class="btn btn-outline-white border-dark border-2 rounded-circle " onclick='handlePlusMinusLahan(".js-range-slider-panjang","plus")'>
                                        <small id="tambah-panjang"><i class="fas fa-plus"></i></small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </fieldset>

            <fieldset class="row fieldset-container mt-4" id="step2">
                <div class="row justify-content-center m-0 p-0">
                    <div class="col-12 step-banner p-4 gap-2">
                        <h5 class="">JUMLAH LANTAI</h5>
                        <p>Tentukan jumlah lantai rumah tinggal yang Anda inginkan. Tersedia pilihan rumah tinggal 1 lantai atau 2 lantai.</p>
                    </div>
                </div>
                <div class="row justify-content-between gap-md-5 gap-3 m-0 mt-4 d-flex content-container">
                    <div class=" col p-0" style="flex:1;">
                        <div class="card pr-3 h-100 check-card">
                            <div class="row gx-5 p-0 h-max align-items-center">
                                <div class="col-xl-4 p-0 position-relative">
                                    <img class="image struktur-img" src="<?= base_url('assets/img/assessment/muka_lantai/1_lantai.jpg') ?>" alt="">
                                    <label class="custom-checkbox position-absolute" style="left:35px; bottom:14px; cursor:pointer;">
                                        <input class="d-none" type="checkbox" name="lantai" value='1'>
                                        <i class="fa-solid fa-check checkmark"></i>
                                    </label>
                                </div>
                                <div class="col-xl-8">
                                    <div class='struktur-desc'>
                                        <h5 style="font-weight:500;">Rumah 1 Lantai</h5>
                                        <p style="font-weight:400;">Rumah 1 lantai cocok untuk Anda yang menginginkan rumah tinggal yang sederhana dan hemat biaya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col p-0">
                        <div class="card pr-3 check-card">
                            <div class="row gx-5 p-0 h-max align-items-center">
                                <div class="col-xl-4 p-0 position-relative">
                                    <img class="image struktur-img" src="<?= base_url('assets/img/assessment/muka_lantai/2_lantai.jpg') ?>" alt="">
                                    <label class="custom-checkbox position-absolute" style="left:35px; bottom:14px; cursor:pointer;">
                                        <input class="d-none" type="checkbox" name="lantai" value='2'>
                                        <i class="fa-solid fa-check checkmark"></i>
                                    </label>
                                </div>
                                <div class="col-xl-8">
                                    <div class='struktur-desc'>
                                        <h5 style="font-weight:500;">Rumah 2 Lantai</h5>
                                        <p style="font-weight:400;">Rumah 2 lantai cocok untuk Anda yang menginginkan rumah tinggal yang memiliki banyak ruang di lahan terbatas.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center m-0 p-0 mt-4">
                    <div class="col-12 step-banner p-4 gap-2">
                        <h5 class="">MUKA BANGUNAN</h5>
                        <p>Tentukan jumlah muka bangunan rumah tinggal Anda yang terlihat dari jalan.</p>
                    </div>
                </div>
                <div class="row justify-content-between gap-md-5 gap-3 m-0 mt-4 content-container">
                    <div class="col p-0" style="flex:1;">
                        <div class="card pr-3 h-100 check-card">
                            <div class="row gx-5 p-0 h-max align-items-center">
                                <div class="col-xl-4 p-0 position-relative">
                                    <img class="image struktur-img" src="<?= base_url('assets/img/assessment/muka_lantai/1_muka.jpg') ?>" alt="">
                                    <label class="custom-checkbox position-absolute" style="left:35px; bottom:14px; cursor:pointer;">
                                        <input class="d-none" type="checkbox" name="muka" value='1'>
                                        <i class="fa-solid fa-check checkmark"></i>
                                    </label>
                                </div>
                                <div class="col-xl-8">
                                    <div class='struktur-desc'>
                                        <h5 style="font-weight:500;">Rumah 1 Muka</h5>
                                        <p style="font-weight:400;">Rumah tinggal 1 muka biasanya diperuntukkan apabila di sisi samping lahan Anda sudah terdapat bangunan lain</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col p-0" style="flex:1;">
                        <div class="card pr-3 h-100 check-card">
                            <div class="row gx-5 p-0 h-max align-items-center">
                                <div class="col-xl-4 p-0 position-relative">
                                    <img class="image struktur-img" src="<?= base_url('assets/img/assessment/muka_lantai/2_muka.jpg') ?>" alt="">
                                    <label class="custom-checkbox position-absolute" style="left:35px; bottom:14px; cursor:pointer;">
                                        <input class="d-none" type="checkbox" name="muka" value='2'>
                                        <i class="fa-solid fa-check checkmark"></i>
                                    </label>
                                </div>
                                <div class="col-xl-8">
                                    <div class='struktur-desc'>
                                        <h5 style="font-weight:500;">Rumah 2 Muka</h5>
                                        <p style="font-weight:400;">Rumah tinggal 2 muka diperuntukkan apabila minimal terdapat 2 sisi rumah Anda yang berbatasan dengan jalan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="row fieldset-container mt-4 justify-content-center" id="step3">
                <div class="col-12 step-banner p-4 gap-2 mb-2">
                    <h5 class="">KAMAR TIDUR DAN TOILET</h5>
                    <p>Kamar tidur dan toilet merupakan ruang penting di dalam rumah tinggal Anda. Tentukan jumlah kamar tidur dan toilet yang Anda butuhkan dengan pertimbangan jumlah anggota keluarga Anda.</p>
                </div>
                <div class="col-9 mt-4 p-0 content-container">
                    <div class="card p-3 w-100">
                        <div class="row align-items-center">
                            <div class="col-md-5" style='height:260px; overflow:hidden;'>
                                <img class="image w-100" src="<?= base_url('assets/img/assessment/kamarTidur1.jpg') ?>" alt="">
                            </div>
                            <div class="col-md-6" style=''>
                                <div class='pl-lg-2'>
                                    <h5 class="heading-kamar-card">Jumlah Kamar Tidur</h5>

                                    <input type="number" class="form-control kamar-number-input mt-2" id="jumlah_kamar" name="kamar" placeholder="Jumlah Kamar" />
                                    <h5 class="heading-kamar-card mt-3">Toilet Dalam</h5>
                                    <p class="m-0 p-0 mt-3">Apakah Anda membutuhkan toilet yang dapat diakses dari dalam kamar tidur?</p>
                                    <div class="mt-3"> <input type="radio" id="toiletDalamIya" name="toilet-dalam" value="1">
                                        <label for="toiletDalamIya" style="margin-left: 0.5em;">Iya</label>
                                    </div>
                                    <div class="mt-2">
                                        <input type="radio" id="toiletDalamTidak" name="toilet-dalam" value="2">
                                        <label for="toiletDalamTidak" style="margin-left: 0.5em;">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 mt-4 p-0">
                    <div class="card p-3">
                        <div class="row align-items-start">
                            <div class="col-5" style='padding-right:0; height:315px; overflow:hidden;'>
                                <img class="image toilet-img h-100" src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2019/04/14090018/GettyImages-881475252-2.jpg" alt="">
                            </div>
                            <div class="col-6" style='padding-left:0;'>
                                <div style="padding-left:1.5em;">
                                    <h5 class="heading-kamar-card">Jumlah Toilet</h5>

                                    <input type="number" class="form-control kamar-number-input mt-2" id="jumlah_toilet" name="toilet" placeholder="Jumlah Kamar" />
                                    <h5 class="heading-kamar-card mt-3">Wastafel</h5>
                                    <p class="m-0 p-0 mt-2">Apakah Anda membutuhkan wastafel di dalam toilet?</p>
                                    <div class="mt-2 d-flex flex-row justify-content-start gap-4">
                                        <div> <input type="radio" id="wastafelToiletIya" name="wastafel-toilet" value="1">
                                            <label for="wastafelToiletIya" style="margin-left: 0.5em;">Iya</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="wastafelToiletTidak" name="wastafel-toilet" value="2">
                                            <label for="wastafelToiletTidak" style="margin-left: 0.5em;">Tidak</label>
                                        </div>
                                    </div>
                                    <h5 class="heading-kamar-card mt-3">Jenis Kloset</h5>
                                    <p class="m-0 p-0 mt-2">Jenis kloset apa yang Anda inginkan?</p>
                                    <div class="mt-2 d-flex flex-row justify-content-start gap-4">
                                        <div> <input type="radio" id="jenisKlosetJongkok" name="jenis-kloset" value="jongkok">
                                            <label for="jenisKlosetJongkok" style="margin-left: 0.5em;">Jongkok</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="jenisKlosetDuduk" name="toilet-dalam" value="duduk">
                                            <label for="jenisKlosetDuduk" style="margin-left: 0.5em;">Duduk</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="row fieldset-container mt-4 justify-content-center" id="step4">
                <div class="col-12 step-banner p-4 gap-2 mb-2">
                    <h5 class="">RUANG LAINNYA</h5>
                    <p>Pilih ruang-ruang lain yang Anda butuhkan. (Dapat memilih lebih dari satu opsi).</p>
                </div>
                <div class="col-12">
                    <div class="row p-0 mt-4 justify-content-start gap-5 ruang-lain-container">
                        <?php foreach ($ruang_lain as $item) : ?>
                            <div class="col-2 p-0 ruang-lain-item">
                                <div class="card" style="height:180px;overflow:hidden;">
                                    <div class="d-flex flex-row p-2 gap-2">
                                        <label class="custom-checkbox-ruang" style="">
                                            <input type="checkbox" name="ruang_lain" value='<?php echo $item->id_ruang; ?>'>
                                            <i class="fa-solid fa-check checkmark-ruang"></i>
                                        </label>
                                        <label for="checkbox-ruang"><?php echo $item->ruang; ?></label>
                                    </div>
                                    <img src="/assets/demo/img/assessment/<?php echo $item->ruang; ?>.png" class="image h-100 ruang-lain-img" style='cursor:pointer; object-fit:cover' alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </fieldset>

            <fieldset class="row fieldset-container mt-4 justify-content-center" id="step5">
                <div class="col-12 step-banner p-4 gap-2 mb-2">
                    <h5 class="">GAYA DESAIN RUMAH</h5>
                    <p>Pilih gaya desain rumah yang sesuai dengan selera Anda. (Dapat memilih lebih dari satu opsi).</p>
                </div>
                <div class="col-2 p-0 mt-4" style='margin-right:auto;'>
                    <div class="card d-flex flex-row pilih-semua w-75 p-2 gap-2" style="flex-wrap:nowrap; cursor:pointer;">
                        <label class="custom-checkbox-gaya_desain" style="">
                            <input type="checkbox" name="gaya_desain_semua" value='semua'>
                            <i class="fa-solid fa-check checkmark-gaya_desain"></i>
                        </label>
                        <label for="checkbox-gaya_desain" style="white-space:nowrap; cursor:pointer;">Pilih Semua</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row p-0 mt-4 justify-content-start gap-5">
                        <?php foreach ($gaya_desain as $item) : ?>
                            <div class="col-2 p-0">
                                <div class="card" style="height:180px;overflow:hidden;">
                                    <div class="d-flex flex-row p-2 gap-2">
                                        <label class="custom-checkbox-gaya_desain" style="">
                                            <input type="checkbox" name="gaya_desain" value='<?php echo $item->id_gaya_desain; ?>'>
                                            <i class="fa-solid fa-check checkmark-gaya_desain"></i>
                                        </label>
                                        <label for="checkbox-gaya_desain"><?php echo $item->gaya_desain; ?></label>
                                    </div>
                                    <img src="/assets/demo/img/assessment/<?php echo $item->gaya_desain; ?>.png" class="image h-100 gaya-desain-img" style='cursor:pointer; object-fit:cover' alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </fieldset>

            <fieldset class="row fieldset-container mt-4 justify-content-center" id="step6">
                <div class="col-12 step-banner p-4 gap-2 mb-2">
                    <h5 class="">MATERIAL BANGUNAN</h5>
                    <p>Pilihlah material bangunan untuk rumah tinggal Anda. Pilih material bangunan untuk bagian Struktur, Lantai, Dinding, Plafon, Atap, Pintu dan Jendela.</p>
                </div>
                <div class="row justify-content-start p-0 gx-3" style='flex-wrap:nowrap;'>
                    <?php
                    foreach ($bagian_rumah as $bagian) :
                    ?>
                        <div class="col-2 mt-4" style="">
                            <div class="card material-column-card d-flex flex-column justify-content-start align-items-center">
                                <h5 style="white-space:wrap;"><?= $bagian->bagian_rumah ?></h5>
                                <div class="d-flex flex-row pilih-semua w-75 p-2 gap-2" style="flex-wrap:nowrap; cursor:pointer;">
                                    <label class="custom-checkbox-material" style="">
                                        <input type="checkbox" name="material_semua" value='semua'>
                                        <i class="fa-solid fa-check checkmark-material"></i>
                                    </label>
                                    <label for="checkbox-material" style="white-space:nowrap; cursor:pointer;">Pilih Semua</label>
                                </div>
                                <?php
                                foreach ($material as $item) :
                                    if ($item->id_bagian_rumah == $bagian->id_bagian_rumah) :
                                        $material_title = explode(' ', $item->material);
                                        // Remove the first word
                                        array_shift($material_title);
                                        // Reconstruct the string
                                        $new_material = implode(' ', $material_title);
                                        if ($new_material == 'Genteng Tanah Liat') :
                                            $new_material = 'Genteng';
                                        endif;
                                ?>
                                        <div class="card mt-4" style="height:150px;width:86%;overflow:hidden;">
                                            <div class="d-flex flex-row p-2 gap-2">
                                                <label class="custom-checkbox-material" style="">
                                                    <input type="checkbox" name="material" value='<?php echo $item->urut; ?>'>
                                                    <i class="fa-solid fa-check checkmark-material"></i>
                                                </label>
                                                <label for="checkbox-material"><?php echo $new_material ?></label>
                                            </div>
                                            <img src="/assets/demo/img/assessment/material_<?php echo $item->id_bagian_rumah; ?>_<?php echo $item->id_material; ?>.png" class="image h-100 material-img" style='cursor:pointer; object-fit:cover' alt="">
                                        </div>
                                <?php endif;
                                endforeach;
                                ?>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </fieldset>

            <div class="row justify-content-center button-container">
                <div class="col-12 d-flex flex-row justify-content-center gap-4">
                    <button class="btn btn-outline-primary back-btn d-flex gap-2 flex-row align-items-center px-3" type="button"><i class="fa-solid fa-arrow-left"></i>Kembali</button>
                    <button class="btn btn-primary next-btn d-flex gap-2 flex-row align-items-center px-3" type="button">Lanjut<i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </form>
    </section>
</div>

<script src="https://kit.fontawesome.com/b30683d06c.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script>
    $(".js-range-slider-lebar").ionRangeSlider({
        skin: "round",
        min: <?= $range_lebar_lahan->min_lebar_lahan ?>,
        max: <?= $range_lebar_lahan->max_lebar_lahan ?>,
        grid: true,
        grid_num: 6,
        from: <?= $range_lebar_lahan->max_lebar_lahan ?>,
        from_min: <?= $range_lebar_lahan->min_lebar_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_lebar_lahan->max_lebar_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_lebar = $('.js-range-slider-lebar').data().from;
            $("#lebarLahan").val(from_lebar);
            $("#ubahLebar").html(from_lebar);
        },
        onUpdate: function(data) {
            let from_lebar = $('.js-range-slider-lebar').data().from;
            $("#lebarLahan").val(from_lebar);
            $("#ubahLebar").html(from_lebar);
        }
    });

    $(".js-range-slider-panjang").ionRangeSlider({
        skin: "round",
        min: <?= $range_panjang_lahan->min_panjang_lahan ?>,
        max: <?= $range_panjang_lahan->max_panjang_lahan ?>,
        grid: true,
        grid_num: 7,
        from: <?= $range_panjang_lahan->max_panjang_lahan ?>,
        from_min: <?= $range_panjang_lahan->min_panjang_lahan ?>, // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $range_panjang_lahan->max_panjang_lahan ?>, // set max position for FROM handle
        force_edges: false, // force UI in the box
        hide_min_max: true, // show/hide MIN and MAX labels
        hide_from_to: true, // show/hide FROM and TO labels
        block: false,
        onChange: function(data) {

            let from_panjang = $('.js-range-slider-panjang').data().from;
            $("#panjangLahan").val(from_panjang);
            $("#ubahPanjang").html(from_panjang);
        },
        onUpdate: function(data) {
            let from_panjang = $('.js-range-slider-panjang').data().from;
            $("#panjangLahan").val(from_panjang);
            $("#ubahPanjang").html(from_panjang);
        }
    });

    function handlePlusMinusLahan(slider, operation) {
        var currentValue = parseInt($(slider).prop('value'));
        var newValue = currentValue;

        if (operation === "minus") {
            newValue -= 1;
        } else {
            newValue += 1;
        }
        $(slider).data('ionRangeSlider').update({
            from: newValue
        });
    }

    $(document).ready(function() {

        var totalSteps = 6;
        var currentStep = 2;
        var stepButtons = $('.step-btn');

        var stepLines = $('.step-line');
        showFieldset(currentStep + 1);
        // Function to activate the button for the current step
        function activateButton(step) {
            var stepActivateButton = stepButtons.filter('[data-step="' + step + '"]')
            stepActivateButton.removeClass('unfinished-btn').addClass('finished-btn').prop('disabled', false);
            stepActivateButton.find('span').text('');
            stepActivateButton.find('i').addClass('fa-solid fa-check');

            var stepline = step += 1;
            stepLines.filter('[data-step="' + stepline + '"]').removeClass('unfinished-line').addClass('finished-line');

        }

        function deactivateButton(step) {
            var stepDeactivateButton = stepButtons.filter('[data-step="' + step + '"]')
            stepDeactivateButton.removeClass('finished-btn').addClass('unfinished-btn').prop('disabled', false);
            stepDeactivateButton.find('span').text(`${step}`);
            stepDeactivateButton.find('i').removeClass('fa-solid fa-check');
            var stepline = step += 1;
            stepLines.filter('[data-step="' + step + '"]').removeClass('finished-line').addClass('unfinished-line');
        }

        function showFieldset(step) {
            $('fieldset').hide(); // Hide all fieldsets
            $('#step' + step).show(); // Show the fieldset corresponding to the current step
            $('html, body').animate({
                scrollTop: 0
            }, 'fast');
        }

        // Function to handle button click event
        $('.next-btn').click(function() {
            if (currentStep < 6) {
                currentStep += 1;
                activateButton(currentStep);
                showFieldset(currentStep + 1);
            }

        });

        $('.back-btn').click(function() {
            if (currentStep > 0) {
                deactivateButton(currentStep);
                currentStep--;
                showFieldset(currentStep + 1);
            }

        });
    });

    $(document).ready(function() {

        $('.check-card').click(function() {
            $(this).find('input[type="checkbox"]').prop('checked', function(_, checked) {
                return !checked;
            });
        });

        $('.struktur-img').click(function() {
            $(this).closest('.card').find('input[type="checkbox"]').prop('checked', function(_, checked) {
                return !checked;
            });
        });
        $('.ruang-lain-img').click(function() {
            $(this).closest('.card').find('input[type="checkbox"]').prop('checked', function(_, checked) {
                return !checked;
            });
        });

        $('.gaya-desain-img').click(function() {
            $(this).closest('.card').find('input[type="checkbox"]').prop('checked', function(_, checked) {
                return !checked;
            });
        });

        $('.material-img').click(function() {
            $(this).closest('.card').find('input[type="checkbox"]').prop('checked', function(_, checked) {
                return !checked;
            });
        });

        $('.pilih-semua').click(function() {
            var isChecked = $(this).find('input[type="checkbox"]').prop('checked');
            $('input[name="gaya_desain"], input[name="gaya_desain_semua"]').prop('checked', !isChecked);
        });
    });
</script>