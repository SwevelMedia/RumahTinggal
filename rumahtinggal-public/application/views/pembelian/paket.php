<style>
.price-features p i {
	color: #026cb6;
  	background-color: #d0e4f2;
}
  
.price-features p i.fa-times {
    color: #f44a40;
    background-color: #ffd7d5;
}

.price-box {
  	padding: 20px 40px 30px;
    box-shadow: 0 7px 8px rgba(0,0,0,.05);
    border-top: 5px solid #026cb6;
}

.price-features p i {
    height: 20px;
    width: 20px;
    display: inline-block;
    text-align: center;
    line-height: 20px;
    font-size: 14px;
    border-radius: 50%;
    margin-right: 10px;
}

.price.old {
    text-decoration: line-through;
    color: red;
    font-size: 27px;
}
  
.diskon {
    font-size: 15px;
    padding: 0px 11px;
    background: red;
    color: #fff;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    top: 32px;
    left: 30px;
    font-weight: 400;
}  
</style>

<div class="container mt-80 mb-40">
	<div class="row justify-content-center text-center">
		<div class="col-md-12">
			<h3 class="font-weight-normal">Paket Desain</h3>
          	<h4 class="text-custom bold mt-1" style="font-size: 20px;"><?= $nama_rumah ?></h4>
		</div>
	</div>                
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="bg-white mt-3 price-box">
				<div class="pricing-name text-center">
					<h4 class="mb-0 bold" style="font-size: 20px;">Lite</h4>
				</div>
				<div class="plan-price text-center mt-2">
					<h1 class="text-custom bold mb-0 price"><?= $harga_p1 ?></h1>
                  	<span class="diskon" style="display: none;"><?= '-'.$diskon ?></span>
                  	<h1 class="text-custom bold mb-0 price-promo" style="display: none;"><?= $harga_promo_p1 ?></h1>
				</div>
				<div class="price-features mt-3">
					<p><i class="fa fa-check"></i> Laporan Desain</p>
					<p><i class="fa fa-times"></i> Detailed Engineering Design (DED)</p>
					<p><i class="fa fa-times"></i> Rencana Anggaran Biaya (RAB)</p>
                  	<p><i class="fa fa-times"></i> Rencana Spesifikasi Material</p>
				</div>
				<div class="text-center mt-4">
					<a href="<?= base_url('pembelian/1/').$id_rumah ?>" class="btn btn-custom text-white">Beli</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="bg-white mt-3 price-box">
				<div class="pricing-name text-center">
					<h4 class="mb-0 bold" style="font-size: 20px;">Premium</h4>
				</div>
				<div class="plan-price text-center mt-2">
					<h1 class="text-custom bold mb-0 price"><?= $harga_p2 ?></h1>
                  	<span class="diskon" style="display: none;"><?= '-'.$diskon ?></span>
                  	<h1 class="text-custom bold mb-0 price-promo" style="display: none;"><?= $harga_promo_p2 ?></h1>
				</div>
				<div class="price-features mt-3">
					<p><i class="fa fa-check"></i> Laporan Desain</p>
					<p><i class="fa fa-check"></i> Detailed Engineering Design (DED)</p>
					<p><i class="fa fa-check"></i> Rencana Anggaran Biaya (RAB)</p>
                  	<p><i class="fa fa-check"></i> Rencana Spesifikasi Material</p>
				</div>
				<div class="text-center mt-4">
					<a href="<?= base_url('pembelian/2/').$id_rumah ?>" class="btn btn-custom text-white">Beli</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center text-center mt-50">
		<div class="col-md-6" style="background: #fff; padding: 15px;flex: 0 0 45%;box-shadow: 0 7px 8px rgba(0,0,0,.05);border-top: 5px solid #026cb6;">
			<p class="mb-10">Ingin tahu apa saja yang akan Anda dapatkan ketika membeli paket desain ini?</p>
			<button class="btn btn-banner" onclick="lihatSampel()" style="position: relative;left: 0;top: -2px;">Lihat Sampel</button>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
    	let diskon = "<?= $diskon ?>";
      	if (diskon != "100%") {
        	$('.price-promo, .diskon').show();
          	$('.price').addClass('old');
        }
    });
    	function lihatSampel(){
      	location.href = "<?= base_url('sampel_desain') ?>";
    }
</script>