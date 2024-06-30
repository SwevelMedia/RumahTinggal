<style>
.box-pembelian {
    padding: 30px;
    box-shadow: 0 7px 8px rgba(0,0,0,.05);
}
  
.rounded-pill { border-radius: 50rem !important; }

.nav-pills .nav-link {
  	color: #000;
  	font-size: 15px;
  	font-weight: 400;
}

.nav-pills .nav-link.active { background-color: #026cb6; }

#frm-pengiriman label { font-size: 15px; }

#frm-pengiriman .form-control {
    border-radius: 0;
    font-weight: 300;
}
  
.chiller_cb input { display: none; }
  
.chiller_cb label {
  	margin-left: 25px;
	margin-bottom: 0;
}  
  
.chiller_cb span {
    width: 1.2rem;
    height: 1.2rem;
    position: absolute;
    left: 45px;
  	margin-top: 1px;
}
  
.chiller_cb span:before, .chiller_cb span:after {
    content: '';
    background: #fff;
    position: absolute;
    transform-origin: 0% 0%;
}    
  
.chiller_cb span:before {
    transform: rotate(-60deg);
    top: 0.9rem;
    left: 0.43rem;
}
  
.chiller_cb span:after {
    transform: rotate(35deg);
    bottom: 0.39rem;
	left: 0.3rem;
}  
   
.chiller_cb input:checked ~ span, .chiller_cb input:disabled ~ span { background: #026CB6; }  
  
.chiller_cb input:checked ~ span:before {
    width: 0.8rem;
	height: 0.15rem;
}
  
.chiller_cb input:checked ~ span:after {
    width: 0.4rem;
	height: 0.15rem;
}
  
.chiller_cb input:disabled ~ label { color: #000; }  

.main-timeline {
    font-family: 'Circular';
    padding: 20px 0;
    position: relative;
}
  
.main-timeline:before, .main-timeline:after {
    content: '';
    height: 40px;
    width: 40px;
    background-color: #ebf7ff;
    border-radius: 50%;
    border: 10px solid #026cb6;
    transform:translateX(-50%);
    position: absolute;
    left: 50%;
    top: -15px;
    z-index: 2;
}
  
.main-timeline:after {
    top: auto;
    bottom: 15px;
}
  
.main-timeline .timeline {
    padding: 35px 0;
    margin-top: -30px;
    position: relative;
    z-index: 1;
}
  
.main-timeline .timeline:before, .main-timeline .timeline:after {
    content: '';
    height: 100%;
    width: 50%;
    border-radius: 100px 0 0 100px;
    border: 15px solid #46B2BC;
    border-right: none;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}
  
.main-timeline .timeline:after {
    height: calc(100% - 30px);
    width: calc(50% - 12px);
    border-color: #65C7D0;
    left: 12px;
    top: 15px;
}
  
.main-timeline .timeline-content { display: inline-block; }
  
.main-timeline .timeline-content:hover { text-decoration: none; }
  
.main-timeline .timeline-year {
    color: #65C7D0;
    font-size: 50px;
    font-weight: 600;
    display: inline-block;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 10%;
}
  
.main-timeline .timeline-icon {
    color: #65C7D0;
    font-size: 80px;
    display: inline-block;
    transform: translateY(-50%);
    position: absolute;
    left: 13%;
    top: 50%;
}
  
.main-timeline .content {
    color: #000;
    width: 70%;
    padding: 20px;
    display: inline-block;
    float: right;
}
  
.main-timeline .title {
    color: #65C7D0;
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 5px 0;
}
  
.main-timeline .description {
    font-size: 15px;
    margin: 0;
}
  
.main-timeline .timeline:nth-child(even):before {
    left: auto;
    right: 0;
    border-radius: 0 115px 115px 0;
    border: 15px solid red;
    border-left: none;
}
  
.main-timeline .timeline:nth-child(even):after {
    left: auto;
    right: 12px;
    border: 15px solid green;
    border-left: none;
    border-radius: 0 100px 100px 0;
}
  
.main-timeline .timeline.left::before {
    border-radius: 112px 0 0 112px;
}
  
.main-timeline .timeline:nth-child(even) .content {
  	float: left;
  	text-align: right;
}
  
.main-timeline .timeline:nth-child(even) .timeline-year {
    left: auto;
    right: 10%;
}
  
.main-timeline .timeline:nth-child(even) .timeline-icon {
    left: auto;
    right: 13%;
}
  
.main-timeline .timeline:nth-child(5n+2):before { border-color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+2):after { border-color: #EF5720; }
.main-timeline .timeline:nth-child(5n+2) .timeline-icon { color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+2) .timeline-year { color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+2) .title { color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+3):before { border-color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+3):after { border-color: #6CAF29; }
.main-timeline .timeline:nth-child(5n+3) .timeline-icon { color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+3) .timeline-year { color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+3) .title { color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+4):before { border-color: #F99324; }
.main-timeline .timeline:nth-child(5n+4):after { border-color: #FBB03B; }
.main-timeline .timeline:nth-child(5n+4) .timeline-icon { color: #F99324; }
.main-timeline .timeline:nth-child(5n+4) .timeline-year { color: #F99324; }
.main-timeline .timeline:nth-child(5n+4) .title { color: #F99324; }
.main-timeline .timeline:nth-child(5n+5):before { border-color: #0071BD; }
.main-timeline .timeline:nth-child(5n+5):after { border-color: #0050A3; }
.main-timeline .timeline:nth-child(5n+5) .timeline-icon { color: #0071BD; }
.main-timeline .timeline:nth-child(5n+5) .timeline-year { color: #0071BD; }
.main-timeline .timeline:nth-child(5n+5) .title { color: #0071BD; }
@media screen and (max-width:1200px){
    .main-timeline .timeline:after { border-radius: 88px 0 0 88px; }
    .main-timeline .timeline:nth-child(even):after { border-radius: 0 88px 88px 0; }
}
@media screen and (max-width:767px){
    .main-timeline .timeline { margin-top: -19px; }
    .main-timeline .timeline:before {
        border-radius: 50px 0 0 50px;
        border-width: 10px;
    }
    .main-timeline .timeline:after {
        height: calc(100% - 18px);
        width: calc(50% - 9px);
        border-radius: 43px 0 0 43px;
        border-width:10px;
        top: 9px;
        left: 9px;
    }
    .main-timeline .timeline:nth-child(even):before {
        border-radius: 0 50px 50px 0;
        border-width: 10px;
    }
    .main-timeline .timeline:nth-child(even):after {
        height: calc(100% - 18px);
        width: calc(50% - 9px);
        border-radius: 0 43px 43px 0;
        border-width: 10px;
        top: 9px;
        right: 9px;
    }
    .main-timeline .timeline-icon { font-size: 60px; }
    .main-timeline .timeline-year { font-size: 40px; }
}
  
@media screen and (max-width:479px) {
    .main-timeline .timeline-icon {
        font-size: 50px;
        transform:translateY(0);
        top: 25%;
        left: 10%;
    }
    .main-timeline .timeline-year {
        font-size: 25px;
        transform:translateY(0);
        top: 65%;
        left: 9%;
    }
    .main-timeline .content {
        width: 68%;
        padding: 10px;
      	color: #000;
    }
    .main-timeline .title { font-size: 18px; }
    .main-timeline .timeline:nth-child(even) .timeline-icon {
        right: 10%;
    }
    .main-timeline .timeline:nth-child(even) .timeline-year {
        right: 9%;
    }
}
</style>

<div class="container mt-80 mb-40">
  <div class="row justify-content-center text-center">
    <div class="col-md-12">
        <h3 class="bold">Pembelian Desain</h3>
        <h4 class="text-custom bold mt-1" style="font-size: 20px;"><?= $nama_rumah ?></h4>
    </div>
  </div>
  
  <div class="row pt-20">
    <div class="col-md-7 mx-auto">
      <div class="box-pembelian bg-white">
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-pengiriman" class="nav-link active rounded-pill">
                <i class="fa fa-truck fa-flip-horizontal"></i> Informasi Pengiriman
            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-pembayaran" class="nav-link rounded-pill">
              <i class="fa fa-credit-card"></i> Metode Pembayaran
           </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-alur" class="nav-link rounded-pill">
                <i class="fa fa-cogs"></i> Alur Pembelian
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="nav-tab-pengiriman" class="tab-pane fade show active">
            <form id="frm-pengiriman">
              <div class="form-group">
                <label>Nama Penerima</label>
                <input type="hidden" name="id_rumah" value="<?= $id_rumah ?>">
                <input type="hidden" name="id_customer" value="<?= $id_customer ?>">
                <input type="hidden" name="no_invoice" value="<?= $no_invoice ?>">
                <input type="hidden" name="paket" value="<?= $paket ?>">
                <input type="hidden" name="harga" value="<?= $harga ?>">
                <input type="hidden" name="diskon" value="<?= $diskon ?>">
                <input type="text" class="form-control" name="nama_lengkap" value="<?= $nama_customer ?>" readonly>
              </div>
              <div class="form-group">
                <label>No. WhatsApp</label>
                <input type="text" class="form-control" name="no_wa" value="<?= $no_wa ?>" readonly>
              </div>
              <div class="form-group mb-10">
                <label>Alamat Pengiriman</label>
                <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan alamat dengan lengkap termasuk jalan, desa, kecamatan, kabupaten, provinsi, dan kode pos"><?= $alamat ?></textarea>
              </div>
            </form>
            <div class="chiller_cb mb-3">
                <input type="checkbox" id="agreement" name="agreement" checked disabled>
                <label for="agreement">Dengan membeli paket desain, Anda setuju dengan segala ketentuan yang berlaku di RumahTinggal.id</label>
                <span></span>
            </div>
            <button type="button" id="btn-proses" onclick="simpanPembelian()" class="btn btn-custom btn-block">Proses Pembelian</button>
          </div>
          
          <div id="nav-tab-pembayaran" class="tab-pane fade text-center">
            <p style="margin-bottom: 0;">Transfer pembayaran ke akun bank:</p>
            <img src="<?= base_url('assets/img/mandiri.png') ?>" width="120px" style="padding: 12px 0 4px 0;" />
            <p>Nomor rekening: <span class="bold">137-00-1138387-0</span> a.n. <span class="bold">PT Baracipta Esa Engineering</span></p>
            
            <p class="text-custom"><i class="fa fa-exclamation-circle"></i> Lakukan transfer sebelum tanggal <span class="bold"><?= $batas_transfer ?></span>!</p>
          </div>

          <div id="nav-tab-alur" class="tab-pane fade">
            <div class="container mt-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline left">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Transfer Pembayaran</h3>
                                        <!--<p class="description">
                                            Lakukan pembayaran melalui transfer ke nomor rekening <span class="bold">137-00-1138387-0</span> a.n. <span class="bold">PT Baracipta Esa Engineering</span> (Mandiri) sesuai nominal tagihan yang tertera pada invoice
                                        </p>-->
                                      	<p class="description">
                                            Lakukan pembayaran melalui kanal yang tersedia sesuai nominal tagihan yang tertera pada invoice
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon" style="right: 14%;">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                    <div class="content" style="margin-left: 20px;">
                                        <h3 class="title">Konfirmasi Pembayaran</h3>
                                        <p class="description">
                                            Sertakan foto bukti pembayaran ke nomor WhatsApp admin RumahTinggal.id
                                        </p>
                                    </div>
                                </a>
                            </div>
                          	<div class="timeline left">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Pengiriman Desain</h3>
                                        <p class="description">
                                            Softfile paket desain akan dikirimkan ke nomor WhatsApp Anda dan hardfile akan dikirimkan sesuai alamat pengiriman
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-archive"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Konfirmasi Penerimaan & Review Desain</h3>
                                        <p class="description">
                                            Jika Anda sudah menerima paket desain, lakukan konfirmasi melalui WhatsApp dan berikan review desain pada website RumahTinggal.id
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
  	  $('[data-toggle="tooltip"]').tooltip()
  });
  
  function simpanPembelian(){
      $.ajax({
          url: "<?= base_url('api/simpanPembelian') ?>",
          type: "post",
          data: $('#frm-pengiriman').serialize(),
          success: function(response) {
             window.location.href = "<?= base_url('invoice/').$no_invoice ?>";
          },
          error: function(jqXHR, textStatus, errorThrown) {
             console.log(textStatus, errorThrown);
          }
      });
  }
</script>