<style>


.main-timeline .timeline.left .content {
    color: #909090;
    width: 65%;
    padding: 20px;
    display: inline-block;
    /*float: right;*/
    margin-right: 24em;
}

.main-timeline .timeline.right .content {
    color: #909090;
    width: 65%;
    padding: 20px;
    display: inline-block;
    /*float: right;*/
    margin-left: 40em;
}

body { background-color: #f8f9fa; }

.text-custom { color: #026cb6; }

.box-pembelian {
    padding: 30px;
    box-shadow: 0 7px 8px rgba(0,0,0,.05);
}
  
.rounded-pill { border-radius: 50rem !important; }

.nav-pills .nav-link {
    color: #555;
    font-size: 15px;
    font-weight: 400;
}

.nav-pills .nav-link.active { background-color: #026cb6; }

.btn-custom {
    background: #026cb6;
    color: #fff
}

.btn-custom:hover, .btn-custom:focus, .btn-custom:active,
.btn-custom.active, .btn-custom.focus { background: #005693; }

#frm-pengiriman label { font-size: 15px; }

#frm-pengiriman .form-control {
    border-radius: 0;
    font-weight: 300;
}

.main-timeline{
    font-family: 'Roboto', sans-serif;
    padding: 20px 0;
    position: relative;
}
.main-timeline:before,
.main-timeline:after{
    content: '';
    height: 40px;
    width: 40px;
    /*background-color: #ebf7ff;*/
    border-radius: 50%;
    /*border: 10px solid #026cb6;*/
    transform:translateX(-50%);
    position: absolute;
    left: 50%;
    top: -15px;
    z-index: 2;
}
.main-timeline:after{
    top: auto;
    bottom:15px;
}
.main-timeline .timeline{
    padding: 80px 0;
    margin-top: -30px;
    position: relative;
    z-index: 1;
}
.main-timeline .timeline:before,
.main-timeline .timeline:after{
    content: '';
    height: 100%;
    width: 50%;
    border-radius: 120px 0 0 120px;
    /*border: 15px solid #46B2BC;*/
    border-right: none;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}
.main-timeline .timeline:after{
    height: calc(100% - 30px);
    width: calc(50% - 12px);
    border-color: #65C7D0;
    left: 12px;
    top: 15px;
}
.main-timeline .timeline-content{ display: flow-root; }
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .timeline-year{
    color: #65C7D0;
    font-size: 50px;
    font-weight: 600;
    display: inline-block;
    transform:translateY(-50%);
    position: absolute;
    top: 50%;
    left: 10%;
}
.main-timeline .timeline-icon{
    color: #026CB6;
    font-size: 80px;
    display: inline-block;
    transform: translateY(-50%);
    position: absolute;
    /*left: 13%;*/
    top: 50%;
}
.main-timeline .content{
    color: #909090;
    width: 70%;
    padding: 20px;
    display: inline-block;
    float: right;
}
.main-timeline .title{
    color: #026CB6;
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 5px 0;
}
.main-timeline .description{
    font-size: 15px;
    margin: 0;
    color: #000;
}
.main-timeline .timeline:nth-child(even):before{
    left: auto;
    right: 0;
    border-radius: 0 115px 115px 0;
    /*border: 15px solid red;*/
    border-left: none;
}
.main-timeline .timeline:nth-child(even):after{
    left: auto;
    right: 12px;
    /*border: 15px solid green;*/
    border-left: none;
    border-radius: 0 100px 100px 0;
}
/*.main-timeline .timeline.left::before {
    border-radius: 112px 0 0 112px;
}*/
.main-timeline .timeline:nth-child(even) .content{
    /*float: left;*/
    text-align: right;
}
.main-timeline .timeline:nth-child(even) .timeline-year{
    left: auto;
    right: 10%;
}
.main-timeline .timeline:nth-child(even) .timeline-icon{
    left: auto;
    right: 0%;
}
/*.main-timeline .timeline:nth-child(5n+2):before{ border-color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+2):after{ border-color: #EF5720; }
.main-timeline .timeline:nth-child(5n+2) .timeline-icon{ color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+2) .timeline-year{ color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+2) .title{ color: #EA3C14; }
.main-timeline .timeline:nth-child(5n+3):before{ border-color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+3):after{ border-color: #6CAF29; }
.main-timeline .timeline:nth-child(5n+3) .timeline-icon{ color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+3) .timeline-year{ color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+3) .title{ color: #8CC63E; }
.main-timeline .timeline:nth-child(5n+4):before{ border-color: #F99324; }
.main-timeline .timeline:nth-child(5n+4):after{ border-color: #FBB03B; }
.main-timeline .timeline:nth-child(5n+4) .timeline-icon{ color: #F99324; }
.main-timeline .timeline:nth-child(5n+4) .timeline-year{ color: #F99324; }
.main-timeline .timeline:nth-child(5n+4) .title{ color: #F99324; }
.main-timeline .timeline:nth-child(5n+5):before{ border-color: #0071BD; }
.main-timeline .timeline:nth-child(5n+5):after{ border-color: #0050A3; }
.main-timeline .timeline:nth-child(5n+5) .timeline-icon{ color: #0071BD; }
.main-timeline .timeline:nth-child(5n+5) .timeline-year{ color: #0071BD; }
.main-timeline .timeline:nth-child(5n+5) .title{ color: #0071BD; }*/
@media screen and (max-width:1200px){
    .main-timeline .timeline:after{ border-radius: 88px 0 0 88px; }
    .main-timeline .timeline:nth-child(even):after{ border-radius: 0 88px 88px 0; }
}
@media screen and (max-width:767px){
    .main-timeline .timeline{ margin-top: -19px; }
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
    .main-timeline .timeline-icon{ font-size: 60px; }
    .main-timeline .timeline-year{ font-size: 40px; }
}
@media screen and (max-width:479px){
    .main-timeline .timeline-icon{
        font-size: 50px;
        transform:translateY(0);
        top: 25%;
        left: 10%;
    }
    .main-timeline .timeline-year{
        font-size: 25px;
        transform:translateY(0);
        top: 65%;
        left: 9%;
    }
    .main-timeline .content{
        width: 68%;
        padding: 10px;
    }
    .main-timeline .title{ font-size: 18px; }
    .main-timeline .timeline:nth-child(even) .timeline-icon{
        right: 10%;
    }
    .main-timeline .timeline:nth-child(even) .timeline-year{
        right: 9%;
    }
}  

</style>

<section class="offered-area" id="tittle" style="margin-top: 100px;">
        <center><h1 style="font-weight: 600;">Cara Kerja</h1>
            </center>   
    </section>      

 <div id="cara-kerja" class="tab-pane">
            <div class="container" style="margin-top: 30px;margin-bottom: 30px;max-width: 980px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline right">
                                <span href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img src="<?php echo base_url('assets/img/cara_kerja/kunjungi_website.jpg') ?>" alt="" width="250" height="200"> <span style="font-weight: 600;">1</span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Kunjungi Website</h3>
                                        <p class="description">
                                           Kunjungi website <a href="<?php echo base_url() ?>" style="border-bottom: 1px dashed #026cb6;color: #026cb6;">rumahtinggal.id</a>, Anda akan menemukan fitur temukan desain <br> dan lihat koleksi pada halaman muka.
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="timeline left">
                                <span href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                      <span style="font-weight: 600;margin-right: 15px;">2</span><img src="<?php echo base_url('assets/img/cara_kerja/assessment.jpg') ?>" alt="" width="250" height="200"> 
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Assessment / Filter Desain</h3>
                                        <p class="description">
                                            Untuk mendapatkan desain rumah tinggal sesuai kebutuhan,<br> lakukan <a href="<?php echo base_url('assessment') ?>" style="border-bottom: 1px dashed #026cb6;color: #026cb6;">assessment</a> atau filter desain pada halaman <a href="<?php echo base_url('desain') ?>" style="border-bottom: 1px dashed #026cb6;color: #026cb6;">koleksi desain</a>.
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="timeline right">
                                <span href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                      <img src="<?php echo base_url('assets/img/cara_kerja/pilih_desain.jpg') ?>" alt="" width="250" height="200"> <span style="font-weight: 600;">3</span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Pilih Desain</h3>
                                        <p class="description">
                                            Pilih desain sesuai keinginan. Pelajari lebih lanjut desain yang Anda pilih. <br> Jika ada pertanyaan klik tombol <i class="fa fa-comments" style="font-size: 17px;color: #fff;background: #fab700;padding: 2px 3px 4px 3px;border-radius: 4px;"></i>
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="timeline left">
                                <span href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                       <span style="font-weight: 600;">4</span> <img src="<?php echo base_url('assets/img/cara_kerja/pembayaran.jpg') ?>" alt="" width="250" height="200"> 
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Pembayaran</h3>
                                        <p class="description">
                                            Apabila Anda sudah yakin dengan pilihan desainnya, lakukan pembayaran,<br> dengan cara klik tombol <span style="color: #fff;background: #e10505;padding: 6px;font-weight: 400;border-radius: 5px;">Beli Desain</span>. Ikuti petunjuk pembayaran.
                                        </p>
                                    </div>
                                </span>
                            </div>
                            <div class="timeline right">
                                <span href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img src="<?php echo base_url('assets/img/cara_kerja/pengiriman_desain.jpg') ?>" alt="" width="250" height="200"> <span style="font-weight: 600;">5</span>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Pengiriman Desain</h3>
                                        <p class="description">
                                           <a href="<?php echo base_url('sampel_desain') ?>" style="border-bottom: 1px dashed #026cb6;color: #026cb6;">Paket desain</a> akan dikirim dalam bentuk softfile ke Whatsapp dan email,<br> serta hardfile (print out) ke alamat Anda.
                                        </p>
                                    </div>
                                </span>
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
</script>