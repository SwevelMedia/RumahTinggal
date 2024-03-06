<style>
    .navdev .line {
    height: 2px;
    position: absolute;
    bottom: 0;
    margin: 0px 0 0 0;
    background: #026cb6;
    width: 20px;
    left: 31px;
}
.kisaran_harga_konstruksi .irs-grid-text.js-grid-text-0 {
    left: 0%;
    margin-left: -5.219% !important;
}

.kisaran_harga_konstruksi .irs-grid-text.js-grid-text-4 {
    left: 100%;
    margin-left: -26.702% !important;
}

.kisaran_harga_konstruksi .irs-to { z-index:103; }

select, select > option { font-family: 'FontAwesome', 'Calibri'; }

.bg-side {
    background: #fff;
    height: 100%;
  	max-width: 24%;
  	padding-bottom: 15px;
}
  
#custom-search-input { border: solid 1px #026CB6; }
  
#custom-search-input input {
    border: 0;
    color: #000;
    border-radius: 0;
    font-size: 15px;
    padding: 0 5px;
  	font-weight: 300;
	  height: 36px;
}
  
#custom-search-input input:focus, #custom-search-input button:focus { box-shadow: none; }  
  
#custom-search-input button {
    background: transparent;
    border: 0;
    padding: 0 8px;
    color: #026CB6;
    border-radius: 0;
    font-size: 18px;
    margin-top: 0;
	  height: 36px;
}
  
#custom-search-input button:hover {
    background: #026CB6;
    color: #fff;
  	border: 0;
    box-shadow: none;
}
  
.list-desain {
    height: 1090px;
    scrollbar-width: none;
    -ms-overflow-style: none;
  	overflow-y: scroll;
}  
  
.list-desain .grid {
    height: 320px;
    display: inline-flex;
}
  
.list-desain .product-grid {
    margin: 0;
    padding: 6px;
}

.list-desain .product-grid .rating {
    margin: 0;
    margin-top: -2px;
    margin-left: -25px;
    letter-spacing: -1px;
}
 
.list-desain .product-grid .rating::after {
    content: attr(data-value);
    font-size: 12px;
    margin-left: 4px;
    color: #000;
    letter-spacing: 0;
}

#panel-filter .item-filter { margin-top: 17px; }
  
#panel-filter .item-filter .item-title {
    font-size: 15px;
  	color: #000;
} 
  
.irs--round .irs-line {
    top: 33px;
    height: 7px;
    background-color: #fff;
    border: 1px solid #026CB6;
}
  
.irs--round .irs-from, .irs--round .irs-to, .irs--round .irs-single {
    background-color: #026CB6;
    border-radius: 0;
    font-size: 13px;
    line-height: .8;
    padding: 4px 5px;
  display : block !important;
}
  
.irs--round .irs-handle.state_hover, .irs--round .irs-handle:hover { background-color: #fff; }  

.irs--round .irs-from::before, .irs--round .irs-to::before,
.irs--round .irs-single::before { border-top-color: #026CB6; }
  
.irs--round .irs-grid-text { color: #000; }  
  
.irs--round .irs-bar {
    top: 33px;
    height: 7px;
    background-color: #026CB6;
}
  
.irs--round .irs-handle {
    border: 1px solid #026CB6;
    box-shadow: none;
    top: 24px;
}  
  
.chiller_cb {
    position: relative;
    height: 25px;
    color: #000;
    display: flex;
    flex-direction: column;
    flex-basis: 100%;
    flex: 1;
}
  
.custom-select {
	font-weight: 300;
	color: #000;
}
  
.checklist {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100%;
}  
  
 
  
  
  
  
  
.span_pseudo, .chiller_cb span:before, .chiller_cb span:after {
  content: "";
  display: inline-block;
  background: #fff;
  width: 0;
  height: 0.2rem;
  position: absolute;
  transform-origin: 0% 0%;
}
.chiller_cb input {
  display: none;
}
.chiller_cb input:checked ~ span {
  background: #026CB6;
  border-color: #026CB6;
}
.chiller_cb input:checked ~ span:before {
  width: 1rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.3s;
}
.chiller_cb input:checked ~ span:after {
  width: 0.4rem;
  height: 0.15rem;
  transition: width 0.1s;
  transition-delay: 0.2s;
}
.chiller_cb input:disabled ~ span {
  background: #ececec;
  border-color: #dcdcdc;
}
.chiller_cb input:disabled ~ label {
  color: #dcdcdc;
}
.chiller_cb input:disabled ~ label:hover {
  cursor: default;
}
.chiller_cb label {
  padding-left: 2rem;
  position: relative;
  z-index: 2;
  cursor: pointer;
  margin-bottom:0;
  font-weight: 350;
}
.chiller_cb span {
  display: inline-block;
  width: 1.2rem;
  height: 1.2rem;
  border: 1px solid #ccc;
  position: absolute;
  left: 0;
  transition: all 0.2s;
  z-index: 1;
  box-sizing: content-box;
}
.chiller_cb span:before {
  transform: rotate(-55deg);
  top: 1rem;
  left: 0.37rem;
}
.chiller_cb span:after {
  transform: rotate(35deg);
  bottom: 0.35rem;
  left: 0.2rem;
}  
.ui-mobile [data-role="page"], .ui-mobile [data-role="dialog"], .ui-page {
    top: 0;
    left: 0;
    width: 100%;
    min-height: 100%;
    position: initial !important;
    display: none;
    border: 0;
}
.ribbon {
    position: absolute;
    z-index: 100;
}
  
.ribbon-promo {
    width: 93px;
    height: 24px;
    padding-left: 8px;
    padding-top: 1px;
    position: absolute;
    left: -7px;
    top: 6px;
    background: #EE1212;
    color: #fff;
    font-size: 14px;
    box-shadow: 0 2px 2px rgba(0,0,0,.3);
}
  
.ribbon-promo:before, .ribbon-promo:after {
    content: '';
    position: absolute;
}
  
.ribbon-promo:before {
    top: -7px;
    left: -0.5px;
    border-bottom: 7px solid #4a0202;
    border-left: 8px solid transparent;
}
  
.ribbon-promo:after {
    right: -11px;
    border-top: 13px solid transparent;
    border-bottom: 0 solid transparent;
    border-left: 11px solid #4a0202;
}
.product-grid .product-content {
    padding: 8px 10px 0;
    position: relative;
    z-index: 102;
    transition: all 0.3s ease;
    box-shadow: 0 10px 10px rgba(0,0,0,.1);
    background: #fff;
}
</style>

<section class="banner-area relative" id="home" data-parallax="scroll" style="height: 260px;">
	<div class="overlay-bg overlay" style="opacity: 1;position: absolute;">
      	<img src="<?= base_url('assets/img/header-bg.jpg') ?>" style="height: 100%;width: 100%;opacity: inherit;filter: brightness(25%);">
  	</div>

	<div class="container">
		<div class="row d-flex">
			<div class="col-md-12 mt-100 p0 center">
				<p style="font-size: 18px;color:#fff;line-height: 1.2;">
                    Ingin membuat desain rumah tinggal sesuai keinginan Anda?<br>
                    <span style="color: #ffbf00;font-size: 21px;">Konsultasikan bersama tim arsitek kami!</span>
                </p>
                <button class="btn btn-banner danger" onclick="konsultasiDesain()" style="position: relative;left: 0;bottom: 3%;font-size: 16px;padding: 6px 12px;">KONSULTASI DESAIN</button>
			</div>												
		</div>
	</div>
</section>

<section class="mt-5">
    <div class="col-md-12">
        <center>
            <h3 style="font-weight: 400;">Koleksi Desain</h3>
            <div class="line-footer"></div>
        </center>
    </div>
</section>

<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-side">
                <h4 class="my-3 center">Tampilkan Desain</h4>
                <p class="center" style="color: #000;margin-bottom: 10px;">Temukan desain rumah tinggal yang tepat<br>melalui fitur asesmen</p>
                <center><button style="padding: 5px 28px;color: #fff;font-size: 15px;" class="btn btn-danger" onclick="temukanDesain()">Mulai</button></center><!--btn-custom-->

                <div class="list-group" id="panel-filter">
                  	<input type="hidden" name="order" id="order" value="0">
                    <div class="item-filter">
                        <div id="custom-search-input">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-lg" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                                <input type="text" class="form-control" name="cari_rumah" id="cari_rumah" placeholder="Ketik Nama Desain" />
                            </div>
                        </div>
                    </div>
                    <div class="item-filter">
                        <span class="item-title">Lebar Lahan</span>
                        <div style="margin-top: 0px;">
                            <input type="text" class="js-range-slider-lebar" id="lebar_lahan" name="lebar_lahan" value=""/> 
                        </div>
                    </div>
                    <div class="item-filter">
                        <span class="item-title">Panjang Lahan</span>
                        <div style="margin-top: 0px;">
                            <input type="text" class="js-range-slider-panjang" id="panjang_lahan" name="panjang_lahan" value=""/>    
                        </div>
                    </div>
                   <div class="item-filter kisaran_harga_konstruksi">
                        <span class="item-title">Biaya Konstruksi</span>
                        <div style="margin-top: 7px;">
                            <input type="text" class="js-range-slider-harga-konstruksi" id="harga_konstruksi" name="harga_konstruksi" value=""/>    
                        </div>
                    </div>
                    <div class="item-filter">
                        <span class="item-title">Jumlah Lantai</span>
                        <div class="input-group mt-1">
                            <select class="custom-select" name="lantai" id="lantai">
                                <option value="1,2,3">Pilih Semua</option>
                                <option value="1">1 Lantai</option>
                                <option value="2">2 Lantai</option>
                                <option value="3">3 Lantai</option>
                            </select>
                        </div>
                    </div>
                    <div class="item-filter">
                        <span class="item-title">Jumlah Kamar Tidur</span>
                        <div class="input-group mt-1">
                            <select class="custom-select" name="jum_kamar_tidur" id="jum_kamar_tidur">
                                <option value="1,2,3,4,5,10">Pilih Semua</option>
                                <option value="1">1 Kamar</option>
                                <option value="2">2 Kamar</option>
                                <option value="3">3 Kamar</option>
                                <option value="4">4 Kamar</option>
                                <option value="5">5 Kamar</option>
                              	<option value="10">10 Kamar</option>
                            </select>
                        </div>
                    </div>
                    <div class="item-filter">
                        <span class="item-title">Ruangan</span>
                        <div class="row mt-1" style="margin: 0;">
                          	 <input id="" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="0" checked hidden>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain1" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="1" >
                                    <label for="ruang_lain1">Carport</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain2" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="2">
                                    <label for="ruang_lain2">Garasi</label>
                                    <span></span>
                                </div>
                          	</div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain3" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="3">
                                    <label for="ruang_lain3">Teras</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain4" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="4" >
                                    <label for="ruang_lain4">Taman</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain5" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="5" >
                                    <label for="ruang_lain5">Ruang Tamu</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain6" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="6" >
                                    <label for="ruang_lain6">Ruang Keluarga</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain7" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="7" >
                                    <label for="ruang_lain7">Kamar Tidur</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain8" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="8" >
                                    <label for="ruang_lain8">Dapur</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain9" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="9" >
                                    <label for="ruang_lain9">Ruang Jemur</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain10" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="10" >
                                    <label for="ruang_lain10">Ruang Cuci</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain11" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="11" >
                                    <label for="ruang_lain11">Ruang Makan</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain12" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="12">
                                    <label for="ruang_lain12">Gudang</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain13" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="13" >
                                    <label for="ruang_lain13">Mushola </label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain14" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="14" >
                                    <label for="ruang_lain14">Toilet</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="ruang_lain15" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="15" >
                                    <label for="ruang_lain15">Toilet Dalam</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="ruang_lain16" type="checkbox" class="ruang_lain" name="ruang_lain[]" value="16" >
                                    <label for="ruang_lain16">Kolam</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-filter">
                        <span class="item-title">Gaya Desain</span>
                        <div class="row mt-1" style="margin: 0;">
                        	<div class="checklist">
                             <input id="" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="0" checked hidden>
                                <div class="chiller_cb">
                                    <input id="gd1" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="1" >
                                    <label for="gd1">Modern</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="gd2" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="2">
                                    <label for="gd2">Minimalis</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="gd3" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="3" >
                                    <label for="gd3">Industrial</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="gd4" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="4">
                                    <label for="gd4">Contemporer</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="gd5" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="5">
                                    <label for="gd5">Tropical</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="gd6" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="6" >
                                    <label for="gd6">Tradisional</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="gd7" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="7">
                                    <label for="gd7">Clasic</label>
                                    <span></span>
                                </div>
                                <div class="chiller_cb">
                                    <input id="g8" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="8">
                                    <label for="g8">Scandinavian</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="checklist">
                                <div class="chiller_cb">
                                    <input id="gd9" type="checkbox" class="gaya_desain" name="gaya_desain[]" value="9">
                                    <label for="gd9">Asian</label>
                                    <span></span>
                                </div>
                        	</div>
                        </div>
                  	</div> 
                    <div class="item-filter">
                        <span class="item-title">Arsitek</span>
                        <div class="input-group mt-1">
                            <select class="custom-select" name="nama_arsitek" id="inputGroupSelect02">
                                <option value="">Pilih Semua</option>
                                <option value="1">RZAP Design</option>
                                <option value="2">TR Studio</option>
                                <option value="3">Beecons</option>
                                <option value="4">PB_arch</option>
                                <option value="5">Yogs Construction</option>
                                <option value="6">NRW Architect</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-md-9" style="padding-right: 0;padding-left: 10px;">
            <div class="row" style="margin: 0;padding-bottom: 10px;">
                <div class="col-md-9" style="padding: 4px 0 7px 5px;color: #000;font-size: 15px;">Menampilkan <span id="count-rumah" style="font-weight: 400;"></span></div>
                <div class="col-md-3" style="max-width: 19%;padding: 0;margin-left: 51px;">
                    <div class="input-group">
                        <select class="custom-select" onchange="setOrder($(this).val())">
                            <option value="0">Urutkan Berdasarkan</option>
                            <option value="7" style="color: red;font-weight: 600;">Promo</option> <!-- &#xf02b; -->
                            <option value="1">Desain Terbaru</option>
                            <option value="2">Desain Terlama</option>
                            <option value="3">Desain Terpopular</option>
                            <option value="4">Desain Terfavorit</option>
                            <option value="5">Nama Desain (A-Z)</option>
                            <option value="6">Nama Desain (Z-A)</option>

                        </select>
                    </div>
                </div>
            </div>
          
          	<div class="list-desain"></div>
            <div class="spinner"><center><img src="<?= base_url('assets/gif/rt-loader.gif') ?>" style="padding: 2px;" width="35px" /></center></div>
        </div>
    </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<script>
  	// $(".js-range-slider-lebar").ionRangeSlider({
   //      // skin: "round",
   //      // grid: true,
   //      // min: 5,
   //      // max: 10,
   //      // from: 10,
   //      // grid_num: 5,
   //      // from_min: 5,
   //      // from_max: 10,
   //      // from_shadow: true

   //      skin: "round",
   //      grid: true,
   //      min: <?= $lebar_panjang->min_lebar_lahan ?>,
   //      max: <?= $lebar_panjang->max_lebar_lahan ?>,
   //      from: <?= $lebar_panjang->max_lebar_lahan ?>,
   //      grid_num: 6,
   //      from_min: <?= $lebar_panjang->min_lebar_lahan ?>,      // set min position for FROM handle (replace FROM to TO to change handle)
   //      from_max: <?= $lebar_panjang->max_lebar_lahan ?>,      // set max position for FROM handle
   //      from_shadow: true 
     
   //  });

   //  $(".js-range-slider-panjang").ionRangeSlider({
   //      // skin: "round",
   //      // grid: true,
   //      // min: 8,
   //      // max: 20,
   //      // from: 20,
   //      // from_min: 8,
   //      // from_max: 20,
   //      // from_shadow: true

   //      skin: "round",
   //      grid: true,
   //      min: <?= $lebar_panjang->min_panjang_lahan ?>,
   //      max: <?= $lebar_panjang->max_panjang_lahan ?>,
   //      from: <?= $lebar_panjang->max_panjang_lahan ?>,
   //      grid_num: 3,
   //      from_min: <?= $lebar_panjang->min_panjang_lahan ?>,      // set min position for FROM handle (replace FROM to TO to change handle)
   //      from_max: <?= $lebar_panjang->max_panjang_lahan ?>,      // set max position for FROM handle
   //      from_shadow: true 
     
   //  });
    

  
  
  
  
  
  
  
$(".js-range-slider-lebar").ionRangeSlider({
        skin: "round",
        type: "double",
        grid: true,
        min: <?= $lebar_panjang->min_lebar_lahan ?>,
        max: <?= $lebar_panjang->max_lebar_lahan ?>,
        from: 0,
        to: <?= $lebar_panjang->max_lebar_lahan ?>,
        grid_num: 6,
        from_min: <?= $lebar_panjang->min_lebar_lahan ?>,      // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $lebar_panjang->max_lebar_lahan ?>,      // set max position for FROM handle
        from_shadow: true,
        force_edges: false,     // force UI in the box
        hide_min_max: false,    // show/hide MIN and MAX labels
        hide_from_to: false,    // show/hide FROM and TO labels
        block: false  //,
  	/*	onChange: function(data) {
       	 console.log($('.js-range-slider-lebar').data().from);
    			var slider = $(".js-range-slider-lebar").data("ionRangeSlider");
 // slider.reset();
                slider.update({
                    from: $('.js-range-slider-lebar').data().form,
                    to: $('.js-range-slider-lebar').data().to,
//  min: $('.js-range-slider-lebar').data().form,
  //                  max: $('.js-range-slider-lebar').data().to
                }); 
   		},*/
     
    });

    $(".js-range-slider-panjang").ionRangeSlider({
        skin: "round",
        type: "double",
        grid: true,
        min: <?= $lebar_panjang->min_panjang_lahan ?>,
        max: <?= $lebar_panjang->max_panjang_lahan ?>,
        from: 0,
        to: <?= $lebar_panjang->max_panjang_lahan ?>,
        grid_num: 3,
        from_min: <?= $lebar_panjang->min_panjang_lahan ?>,      // set min position for FROM handle (replace FROM to TO to change handle)
        from_max: <?= $lebar_panjang->max_panjang_lahan ?>,      // set max position for FROM handle
        from_shadow: true, 
        force_edges: false,     // force UI in the box
        hide_min_max: false,    // show/hide MIN and MAX labels
        hide_from_to: false,    // show/hide FROM and TO labels
        block: false
     
    });



    $(".js-range-slider-harga-konstruksi").ionRangeSlider({
       skin: "round",
       type: "double",
      //  grid: true,
        min:0,
        max: 2000000000,
        from: 0,
        to :2000000000,
        from_min: 0,
        from_max: 2000000000,
        from_shadow: true,
        prefix: "Rp",
        step: 50000000,
        force_edges: false,     // force UI in the box
        hide_min_max: false,    // show/hide MIN and MAX labels
        hide_from_to: false,    // show/hide FROM and TO labels
        block: false
  
    });
  
  var timer;	
  $(document).ready(function(){

$('.navdev .navdevv #koleksi').addClass('active');

 if(window.location.hash=='#promo') {
        $('#order').val(7);
        $('#select-order').val('7');
        // setOrder(7);
    } else if(window.location.hash=="#favorit"){
        $('#order').val(4);
        $('#select-order').val('4');
        // setOrder(4)
    } else {
        // $('#select-order').val();
        $('#cari_rumah').val( decodeURI(window.location.hash.substring(1)));
    }



  // function setOrder(by) {
  //       $('#order').val(by);
  //       $('.list-desain').empty();
  //       getSummaryKatalog();
  //       ias.next();
  //   }


    
    	  getSummaryKatalog();
        ias.bind();       			$('#lebar_lahan,#panjang_lahan,#harga_konstruksi,#lantai,#jum_kamar_tidur,.ruang_lain,.gaya_desain,#inputGroupSelect02,#order,#cari_rumah').on('change', function() {
          	clearTimeout(timer);
            timer = setTimeout(function(){
                $('.list-desain').empty();
              	getSummaryKatalog();
                ias.next();
            }, 1000);       
        });
 
     // var previous;

   // $('#lebar_lahan,#panjang_lahan,#harga_konstruksi').on('focus', function () {
        // Store the current value on focus and on change
       // previous = this.value;
   // }).change(function() {
        // Do something with the previous value after the change
       //alert(previous);

        // Make sure the previous value is updated
        //previous = this.value;
    //  $('.list-desain').empty();
     //  ias.next();
     //         getSummaryKatalog();
 //   });
   // $( "#lebar_lahan,#panjang_lahan,#harga_konstruksi" ).on( "slidechange", function( event, ui ) {
 //  $('.list-desain').empty();
   //       	getSummaryKatalog();
    //        ias.next();
//} );
    
      	//$('<script src="https://estimator.id/arsi-hack/assets/js/jstars.min.js"></' + 'script>').appendTo('.list-desain');
      
      	$("#cari_rumah").on("input", function(e) {
          	clearTimeout(timer);
            timer = setTimeout(function(){
                $('.list-desain').empty();
              	getSummaryKatalog();
                ias.next();
            }, 1000);
        });

        $(".irs-min, .irs-max").remove();
      	$(".irs-from, .irs-to").hide();
	});
  
  	









    function setOrder(by) {
        $('#order').val(by);
        $('.list-desain').empty();
      	getSummaryKatalog();
        ias.next();
    }
  
  	function getSummaryKatalog() {
        $.ajax({
            type : 'POST',
            url : "<?= base_url('api/getSummaryKatalogProduk') ?>",
            dataType: "JSON",
            data: $('#panel-filter :input').serialize(),
            success : function(data){
                $('#count-rumah').html(data+' desain rumah');
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
        
    }

    function sukaRumah(id_rumah) {
        let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
        if (id_customer != null && id_customer != '') {
          let elm_stat = $('.like[data-id="'+id_rumah+'"] .value');
          let jum_stat = elm_stat.text();
          let elm_like = $('.like[data-id="'+id_rumah+'"] .fa');
          if (elm_like.hasClass('fa-heart-o')) {
              elm_like.removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
              jum_stat++;
              
              $.ajax({
                 url: "<?= base_url('api/simpanDisukai') ?>",
                 type: "POST",
                 data: {"id_rumah": id_rumah,"id_customer": id_customer,"suka": 1},
                 dataType: "JSON",
                 success: function(data){}
              });
          } else {
              elm_like.removeClass('fa-heart').addClass('fa-heart-o').css('color','#026cb6');
              jum_stat--;
            
              $.ajax({
                 url: "<?= base_url('api/hapusDisukai/') ?>"+id_rumah+"/"+id_customer,
                 type: "POST",
                 dataType: "JSON",
                 success: function(data){}
              });
          }
          elm_stat.text(jum_stat);
        } else $('#ModalLogin').modal('show');
    }
  
  	function getDesainItem(page,data) {
      	let biaya = data.lantai == '1' ? 3500000 * data.luas_bangunan : ( data.lantai == '2' ? 4500000 * data.luas_bangunan : 5500000 * data.luas_bangunan );
        let promo = data.promo != '0' ? '<div class="ribbon"><span class="ribbon-promo">Cut-Off '+ data.promo +'%</span></div>' : '';
        let template = `<div class="col-md-3 col-sm-6 p0 grid">
            <div class="product-grid page-`+page+`" data-id="${data.id_rumah}">
            `+promo+`
                <div class="product-image desain">
                    <a href="javascript:void(0)" class="image" onclick="detailRumah(${data.id_rumah})">
                        <img class="pic-1" src="<?= base_url('assets/img/desain/') ?>${data.foto}">
                        <img class="pic-2" src="<?= base_url('assets/img/desain/') ?>${data.foto}">
                    </a>
                </div>
                <div class="product-content">
                    <div class="title" title="${data.nama_rumah}" onclick="detailRumah(${data.id_rumah})">${data.nama_rumah}</div>
                    <div class="product-rating">
                        <div class="arsitek" title="${data.nama_arsitek}" onclick="detailArsitek(${data.id_arsitek})">${data.nama_arsitek}</div>
                        <div class="rating" start="${data.rating}" data-value="${data.rating}"></div>
                    </div>
                    <div class="product-feature">
                        <div class="feature" data-tootik="Luas Lahan" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_luas_lahan.png') ?>" />
                            <span>${data.luas_lahan} m<sup>2</sup></span>
                        </div>
                        <div class="feature" data-tootik="Luas Bangunan" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_luas_bangunan.png') ?>" />
                            <span>${data.luas_bangunan} m<sup>2</sup></span>
                        </div>
                        <div class="feature" data-tootik="Lantai" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_jml_lantai.png') ?>" />
                            <span>${data.lantai}</span>
                        </div>
                        <div class="feature" data-tootik="Kamar Tidur" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_kmr_tidur.png') ?>" />
                            <span>${data.kamar_tidur}</span>
                        </div>
                        <div class="feature" data-tootik="Toilet" data-tootik-conf="square">
                            <img src="<?= base_url('assets/img/icon/icon_toilet.png') ?>" />
                            <span>${data.toilet}</span>
                        </div>
                    </div>
                    <div class="product-detail">
                        <p class="lahan-minimal">Lahan minimal <span style="font-weight: 400;">${data.lebar_lahan} m x ${data.panjang_lahan} m</span></p>
                        <p>Biaya konstruksi <span style="font-weight: 400;" data-tootik="Estimasi awal" data-tootik-conf="square">Rp`+number_format(biaya, 0, ',', '.')+`</span></p>
                        <div class="product-statistic">
                            <div class="statistic">
                                <button class="btn btn-detail popular" onclick="detailRumah(${data.id_rumah})">Detail</a>
                            </div>
                            <div class="statistic">
                                <span class="view">
                                    <i class="fa fa-eye"></i>${data.dilihat}
                                </span>
                            </div>
                            <div class="statistic">
                                <span class="like" onclick="sukaRumah(${data.id_rumah})" data-id="${data.id_rumah}">
                                  <i class="fa fa-heart-o"></i><span class="value">${data.suka}</span>
                                </span>
                            </div>
                            <div class="statistic">
                                <div class="share"><i class="fa fa-share-alt"></i>
                                  <div class="social">
                                      <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Frumahtinggal.id%2Fdetail%2F${data.id_rumah}" target="_blank"><i class="fa fa-facebook"></i></a>
                                      <a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20https%3A%2F%2Frumahtinggal.id%2Fdetail%2F${data.id_rumah}" target="_blank"><i class="fa fa-twitter"></i></a>
                                      <a class="whatsapp" href="https://web.whatsapp.com/send?text=https%3A%2F%2Frumahtinggal.id%2Fdetail%2F${data.id_rumah} ${data.nama_rumah}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

        let item = document.createElement('div');
        item.innerHTML = template.trim();

        return item.firstChild;
    }

    var params = null, page = 0;
    function nextHandler(pageIndex) {
        if (params == null) params = $('#panel-filter :input').serialize();
        else {
            if (params != $('#panel-filter :input').serialize()) {
                params = $('#panel-filter :input').serialize();
                page = reset = 0;
             
            } else page++;
        }
      
      	let fetchData = {
            method: 'POST',
            body: params,
            headers: new Headers()
        }
        
        return fetch('<?= base_url('api/getKatalogProduk') ?>', fetchData)
            .then(response => response.json() )
            .then(result => {
              let frag = document.createDocumentFragment();
              let itemsPerPage = 12;
              let totalPages = Math.ceil(result.length / itemsPerPage);
              let offset = page * itemsPerPage;
          
          	  for (let i = offset, len = offset + itemsPerPage; i < len; i++) {
                if (typeof result[i] !== 'undefined') {
                    let item = getDesainItem(pageIndex, result[i]);
                    frag.appendChild(item);
                }
              }

              let hasNextPage = page < totalPages - 1;

              return this.append(Array.from(frag.childNodes)).then(() => hasNextPage);
            })
            .catch(error => console.log(error));
    }

    window.ias = new InfiniteAjaxScroll('.list-desain', {
        logger: false,
        item: '.grid',
        next: nextHandler,
        pagination: false,
        bind: false,
        scrollContainer: '.list-desain',
        spinner: '.spinner',
    });

    ias.on('page', (event) => {
        $('.product-rating .rating').jsRapStar({enabled: false});
      
      	let id_customer = Cookies.get('id_customer', { domain: 'rumahtinggal.id' });
      	if (id_customer != null && id_customer != '') {
          	$.ajax({
               url: "<?= base_url('api/getRumahSuka/') ?>"+id_customer,
               type: "GET",
               dataType: "JSON",
               success: function(data){
                  if (data != ''){
                      $.each(data, function(i, item) {
                          let id_rumah = item.id_rumah;
                          $('.like[data-id="'+id_rumah+'"] .fa').removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
                      });
                  }
               }
            });
        };
      
        /*$('.like .fa').on('click', function(){
          	if (id_customer != null && id_customer != '') {
              let id_rumah = $(this).data('id');
              let jum_stat = $(this).next().text();
              console.log(jum_stat);
              console.log($(this).hasClass('fa-heart-o'));
              if ($(this).hasClass('fa-heart-o')) {
                  $(this).removeClass('fa-heart-o').addClass('fa-heart').css('color','red');
                  jum_stat++;
                  
                  $.ajax({
                     url: "<?= base_url('api/simpanDisukai') ?>",
                     type: "POST",
                     data: {"id_rumah": id_rumah,"id_customer": id_customer,"suka": 1},
                     dataType: "JSON",
                     success: function(data){}
                  });
              } else {
                  $(this).removeClass('fa-heart').addClass('fa-heart-o').css('color','#026cb6');
                  jum_stat--;
                
                  $.ajax({
                     url: "<?= base_url('api/hapusDisukai/') ?>"+id_rumah+"/"+id_customer,
                     type: "POST",
                     dataType: "JSON",
                     success: function(data){}
                  });
              }
              $(this).next().text(jum_stat);
            } else $('#ModalLogin').modal('show');
        });*/
      
      	if (isMobile() == true){
            $('.product-grid .image, .product-grid .title').prop('onclick','').on('click', function(e){
            	$(this).trigger('hover');
            });
        }
    });





window.onload = function () {
     // getMaterial();
 
if(jQuery.browser.mobile)
{
   window.open("https://rumahtinggal.id/mobile/desain");
}
else
{
   console.log('You are not using a mobile device!');
 // window.open("https://rumahtinggal.id/dev/");
}
   
}
</script>