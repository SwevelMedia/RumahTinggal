<style>
.slick-slider.list-material-terkait { margin: 0; }  
  
.zoom-main span { border: 5px solid #fff; }  
  
.zoom-main img { width: 100%; }  
  
.detail-produk .product-grid {
    padding-left: 40px;
  	padding-right: 0;
    height: 0;
    margin: 0;
}
  
.detail-produk .product-grid .product-content {
    box-shadow: none;
    padding: 15px 20px 18px;
}
  
.detail-produk .product-grid .title {
    cursor: default;
    font-size: 19px;
	margin-bottom: 6px;
}
  
.detail-produk .product-grid .title:hover { color: #000; }
  
.detail-produk .product-grid .badge {
    font-size: 13px;
    width: auto;
    padding: 3px 10px;
	height: 22px;
}
  
.detail-produk .product-grid .badge.update {
    background: #ffbf00;
    font-size: 13px;
    padding: 3px 10px;
    height: 21px;
}  
  
.detail-produk .product-grid .jstars { margin-top: 0; }
  
.detail-produk .product-grid .jstars::after { font-size: 13px; }
  
.detail-produk .product-grid .product-price {
  	padding: 9px 0;
  	display: flex;
	justify-content: space-between;
}
  
.detail-produk .product-grid .product-price .price { font-size: 21px; }
  
.detail-produk .product-grid .product-price .unit { font-size: 15px; }
  
.detail-produk .product-grid .product-description {
    color: #000;
    text-align: justify;
    margin-bottom: 10px;
    font-size: 15px;
}
  
.btn-beli-produk {
  	background: red;
  	color: #fff;
  	padding: 4px 20px;
	font-size: 14px;
}
  
.btn-beli-produk:hover { background: #bb0202; }
  
.tabs {
    display: flex;
    flex-wrap: wrap; 
}  
  
.tabs label {
    padding: 8px 16px;
  	margin-bottom: 3px;
    margin-right: 3px;
    cursor: pointer;
    background: #E0EDF7;
    font-weight: 400;
    transition: background ease 0.2s;
    color: #034F84;
}
  
.tabs input[type="radio"] { display: none; }    
  
.tabs input[type="radio"]:checked + label {
    background: #026CB6;
    color: #fff;
}
  
.tabs input[type="radio"]:checked + label + .tab { display: block; } 
  
.tabs .tab {
  	order: 99; 
  	flex-grow: 1;
    width: 100%;
    display: none;
  	padding: 15px 20px;
  	background: #fff;
}
  
.suplier .name {
  	font-size: 15px;
  	font-weight: 400;
  	color: #026CB6;
  	padding-bottom: 10px;
  	cursor: pointer;
}
  
.suplier .profile {
  	color: #000;
    text-align: justify;
    font-size: 15px;
}
</style>

<div class="container detail-produk" style="margin-top: 85px;margin-bottom: 40px;">
	<div class="row">
		<div class="col-md-3 p0">
			<div id="foto"></div>
		</div>
		<div class="col-md-9 product-grid">
            <div class="product-content">
            <?php if ($produk != '') {
  				switch (date("m", strtotime($produk[0]->tgl_update))) {
                  case 1: $bulan = 'Jan'; break;
                  case 2: $bulan = 'Feb'; break;
                  case 3: $bulan = 'Mar'; break;
                  case 4: $bulan = 'Apr'; break;
                  case 5: $bulan = 'Mei'; break;
                  case 6: $bulan = 'Jun'; break;
                  case 7: $bulan = 'Jul'; break;
                  case 8: $bulan = 'Ags'; break;
                  case 9: $bulan = 'Sep'; break;
                  case 10: $bulan = 'Okt'; break;
                  case 11: $bulan = 'Nov'; break;
                  case 12: $bulan = 'Des'; break;
                }
                $update = date("d", strtotime($produk[0]->tgl_update)).' '.$bulan.' '.date("Y", strtotime($produk[0]->tgl_update));
            ?>
                <div class="title"><?= $produk[0]->nama_produk ?></div>
                <div class="product-rating">
                  	<div class="category">
                      	<div class="badge"><?= $produk[0]->kategori ?></div>
                  		<div class="badge"><i class="fa fa-tags"></i> <?= $produk[0]->merk ?></div>
                  	</div>
                    <div class="jstars" data-value="4" data-color="gold" data-size="17px"></div>
                </div>
              	<div class="product-price">
                    <div class="price"><?= "Rp".number_format($produk[0]->harga_dasar, 0, ",", ".") ?><span class="unit"> / <?= $produk[0]->satuan ?></span></div><span class="badge update pull-right">Perubahan terakhir: <?= $update ?></span>
                </div>
              	<div class="product-description"><?= $produk[0]->deskripsi ?></div>
              	<p style="margin-bottom: 0;color: #000;font-weight: 400;">Spesifikasi:</p>
                <div class="product-description"><?= $produk[0]->spesifikasi ?></div>
              	
              	<button class="btn btn-beli-produk" data-number="<?= $produk[0]->no_wa ?>" data-id="<?= $produk[0]->id_produk ?>" data-product="<?= $produk[0]->nama_produk ?>" data-merk="<?= $produk[0]->merk ?>" data-spec="<?= $produk[0]->spesifikasi ?>"><i class="fa fa-shopping-cart" style="margin-top: -1px;"></i> Beli</a>
            <?php } ?>
            </div>
		</div>
	</div>
  
  	<div class="row mt-4">
      	<div class="col-md-12 p0">
            <div class="tabs">
                <input type="radio" name="tabs" id="tab-suplier" checked="checked">
                <label for="tab-suplier">Informasi Suplier</label>
                <div class="tab suplier center">
                    <img class="logo" src="<?= $this->config->item('eid').'assets/foto/pengguna/'.$produk[0]->foto_suplier ?>" width="120px" />
                    <div class="name" onclick="detailSuplier(<?= $produk[0]->id_suplier ?>)"><?= $produk[0]->nama_suplier ?></div>
                    <div class="profile"><?php echo $produk[0]->profil ?></div>
                </div>

                <input type="radio" name="tabs" id="tab-ulasan">
                <label for="tab-ulasan">Ulasan</label>
                <div class="tab center">
                    <img src="<?=base_url('assets/img/not-found-ulasan.jpg') ?>" width="150" style="margin-bottom: 8px;" /><br>
                    <span style="font-size: 15px;color: #000;">Belum ada ulasan</span>
                </div>
            </div>
  		</div>
  	</div>
</div>

<section class="pb-4 mt-20">
  <div class="container p0">
      <div class="row">
          <div class="col-md-12">
              <center>
              	  <h3 style="font-weight: 400;font-size: 20px;">Material Terkait</h3>
  				  <div class="line-footer" style="margin-bottom: 16px;"></div>
              </center>
          </div>
        
          <div class="col-md-12">
              <div class="list-material-terkait">
              <?php
  				  $jum_produk = 0;
                  if ($produk_terkait != '') {
                      foreach($produk_terkait as $item) {
                	  		if ($item->id_produk != $produk[0]->id_produk) {
                            	$jum_produk++;
                  ?>
                        <div class="col-md-3 col-sm-6 p0 grid">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="javascript:void(0)" class="image" onclick="detailProduk(<?= $item->id_produk ?>)">
                                        <img class="pic-1" src="<?= base_url('assets/foto/produk/'.$item->foto) ?>">
                                        <img class="pic-2" src="<?= base_url('assets/foto/produk/'.$item->foto) ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="title" title="<?= $item->nama_produk ?>" onclick="detailProduk(<?= $item->id_produk ?>)"><?= $item->nama_produk ?></div>
                                    <div class="product-info">
                                        <div class="suplier" title="<?= $item->nama_suplier ?>" onclick="detailSuplier(<?= $item->id_suplier ?>)">
                                            <img class="logo" src="<?= base_url('assets/foto/pengguna/'.$item->foto_suplier) ?>">
                                            <span><?= $item->nama_suplier ?></span>
                                        </div>
                                        <div class="badge" title="<?= $item->merk ?>"><?= $item->merk ?></div>
                                    </div>
                                    <div class="product-price">
                                        <div class="price"><?= "Rp".number_format($item->harga_dasar, 0, ",", ".") ?><span class="unit"> / <?= $item->satuan ?></span></div>
                                    </div>
                                    <div class="product-detail">
                                        <p class="spesification"><?= $item->spesifikasi ?></p>
                                        <div class="product-statistic">
                                            <div class="statistic">
                                                <button class="btn btn-detail produk" onclick="detailProduk(<?= $item->id_produk ?>)">Detail</a>
                                            </div>
                                            <div class="statistic">
                                                <button class="btn btn-beli" data-number="<?= $item->no_wa ?>" data-id="<?= $item->id_produk ?>" data-product="<?= $item->nama_produk ?>" data-merk="<?= $item->merk ?>" data-spec="<?= $item->spesifikasi ?>"><i class="fa fa-shopping-cart" style="margin-top: -1px;"></i> Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <?php }}}
                  if ($jum_produk == 0) { ?>
                    <center>
                        <img src="<?= base_url('assets/img/not_found_material.png') ?>" width="150" style="margin-bottom: 8px;" /><br>
                        <span style="font-size: 15px;color: #000;">Tidak ada material terkait</span>
                    </center>
              <?php } ?>
              </div>
          </div>
      </div>
  </div>
</section>

<script>
    $(document).ready(function() {
        let id = <?= $produk[0]->id_produk ?>;
        let foto = "<?= $produk[0]->foto ?>";
        
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getFotoProduk/"+id,
            dataType: "JSON",
            success : function(data){
                let list_foto = []; 
                list_foto.push("<?= $this->config->item('eid') ?>assets/foto/produk/"+foto);
                if (data != '') {
                    for (let i = 0; i < data.length; i++) { 
                        list_foto.push("<?= $this->config->item('eid') ?>assets/foto/produk/"+data[i].foto);
                    }
                }
                
                let options = {
                    width: 340,
                    height: 280,
                };
                
                $('#foto').zoomy(list_foto, options);
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
      
      	$('.list-material-terkait').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                   breakpoint: 1024,
                   settings: {
                       slidesToShow: 3,
                       slidesToScroll: 1,
                       infinite: true,
                       dots: true
                   }
               },
               {
                   breakpoint: 600,
                   settings: {
                       slidesToShow: 2,
                       slidesToScroll: 1
                   }
               },
               {
                   breakpoint: 480,
                   settings: {
                       slidesToShow: 2,
                       slidesToScroll: 1,
                       arrows: false
                   }
               }
            ]
        });
    });
    
    function detailProduk(id){
        location.href = "<?= base_url('detail_produk/') ?>"+id;
    }
    
    function detailSuplier(id){
        //location.href = "<?= base_url('suplier/') ?>"+id;
    }
  
  	function isMobile() {
      var check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      return check;
    };
  
  	$(".btn-beli-produk").on("click", function(){
        var id_produk = $(this).attr("data-id");
        var nama_produk = $(this).attr("data-product");
        var merk = $(this).attr("data-merk");
        var spesifikasi = $(this).attr("data-spec").replace(/<[^>]*>/g," ");
        var text = `Halo,\nSaya ingin membeli produk Anda dengan rincian:\n\nNama Produk: `+nama_produk+`\nMerk: `+merk+`\nSpesifikasi: `+spesifikasi+`\nLink Produk: <?php echo base_url('detail/') ?>`+id_produk+`\n\nApakah bisa dibantu?\nTerima kasih`;
        var phone = $(this).attr("data-number");
        var message = encodeURIComponent(text);

        if (phone.substring(0,1) == '+') phone = phone.substring(1);
        else if (phone.substring(0,1) == '0') {
            phone = phone.substring(1);
            phone = '62'+phone;
        }

        if (isMobile() == true){
            //mobile device
            var whatsapp_API_url = "whatsapp://send";
            $(this).attr( 'href', whatsapp_API_url+'?phone=' + phone + '&text=' + message );
        } else {
            //desktop
            var whatsapp_API_url = "https://web.whatsapp.com/send";
            var url = whatsapp_API_url+'?phone=' + phone + '&text=' + message; 
            window.open(url, '_blank');
        }
    });
</script>