<style>
  .slick-slide {display: none; }
  .slick-initialized .slick-slide {display: block;}
    .navdev .line {
    height: 2px;
    position: absolute;
    bottom: 0;
    margin: 0px 0 0 0;
    background: #026cb6;
    width: 20px;
    left: 183px;
}
  .slide-brand {
    width: 165px;
    height: 95px;
    border-radius: 10px;
    cursor: pointer;
    margin: 0 7px;
}

.flickity-page-dots .dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 8px;
    background: #026CB6 !important;
    border-radius: 50%;
    filter: alpha(opacity=25);
    opacity: 0.25;
    cursor: pointer;
}

.gallery-cell {
    width: 66%;
    height: 300px;
    margin-right: 10px;
    background: transparent;
    counter-increment: gallery-cell;
    top: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 20px;
}

.gallery-cell:before {
    display: block;
    text-align: center;
    line-height: 200px;
    font-size: 80px;
    color: white;
}

.flickity-viewport {
    overflow: hidden;
    position: relative;
    height: 330px !important;
}

.flickity-prev-next-button .arrow { fill: #fff !important; }
  
.flickity-prev-next-button:hover { background: #026CB6 !important; }

  

  
.product-grid .jstars {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}  
  
.katalog-produk .form-control:focus { box-shadow: none; }

.katalog-produk .form-control::placeholder {
    font-size: 0.95rem;
    color: #aaa;
}
   
.katalog-produk .result {
    background: #fff;
    padding: 15px;
}
  
.list-category {
    background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
  
.list-category.merk { margin-top: 15px; }

.list-category .header { 
    padding: 11px 14px;
  background: #026CB6 !important;
}

.list-category h5 {
    color: #fff;
    font-weight: 400;
    font-size: 15px;
}

.list-category h5::before {
    font-family: FontAwesome;
  content: "\f00b";
  padding-right: 9px;
  font-size: 14px;
}
  
.list-category.merk h5::before { content: "\f02c"; }

.list-category .icon {
    position: relative;
  height: 22px;
  width: 22px;
  margin-right: 10px;
  margin-top: -3px;
}

.list-category .body li {
  font-size: 15px;
  padding: 7px 12px;
    color: #000;
}

.list-category.merk .list-group {
    padding: 7px 0;
}
  
.list-category.merk .list-group-item {
    border: none;
    padding: 3px 12px;
}

.list-category .body li:not(:last-child) { border-bottom: 1px solid rgba(0, 0, 0, 0.1); }

.list-category .body li:hover {
    color: #fff;
  background: #026cb6;
  cursor: pointer;
    -webkit-transition-property: background;
    -webkit-transition-duration: 0.2s;
    -webkit-transition-timing-function: ease-out;
    transition-property: background;
    transition-duration: 0.2s;
    transition-timing-function: ease-out;
}

.list-category .body li .badge {
    width: 37px;
    padding: 4px;
}

.list-category .body li:hover .badge {
    color: #026cb6;
  background: #fff;
}
  
@keyframes check {
    0% { height: 0;width: 0; }
    25% { height: 0;width: 8px; }
    50% { height: 20px;width: 8px; }
}
  
.checkbox {
    background: #fff;
    height: 23px;
    width: 23px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
    margin-bottom: 0;
}
  
.checkbox span {
    display: block;
    position: relative;
    height: 23px;
    width: 23px;
    padding: 0;
}
 
.checkbox span .item {
    margin-left: 31px;
  color: #000;
    width: 210%;
    display: table-caption;
}
  
.checkbox span:after {
    -moz-transform: scaleX(-1) rotate(135deg);
    -ms-transform: scaleX(-1) rotate(135deg);
    -webkit-transform: scaleX(-1) rotate(135deg);
    transform: scaleX(-1) rotate(135deg);
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -webkit-transform-origin: left top;
    transform-origin: left top;
    border-right: 3px solid #fff;
    border-top: 3px solid #fff;
    content: '';
    display: block;
    height: 16px;
    position: absolute;
    top: 12px;
    width: 8px;
    left: 2px;
}
  
.checkbox input { display: none; }
  
.checkbox input:checked + span:after {
    -webkit-animation: check .8s;
    -moz-animation: check .8s;
    -o-animation: check .8s;
    animation: check .8s;
}
  
.checkbox input:checked + .primary:after { border-color: #026CB6; }
  
.checklist .badge {
    width: 37px;
    padding: 4px;
}

.dropdown-menu.show {
    display: block;
    padding: 2px 0;
    border-radius: 0;
    color: #000;
    font-size: 14px;
    min-width: 123px;
}
  
.dropdown-menu li {
    padding: 1px 11px;
    cursor: pointer;
}
  
.dropdown-menu li:hover {
    background: #026CB6;
    color: #fff;
}
  
</style>
<section class="pb-4" style="margin-top: 100px;">
    <div class="container p0">
      <div class="row">
          <div class="col-md-12 pb-25">
              <center>
                  <h3 style="font-weight: 400;font-size: 28px;">Katalog Material</h3>
                  <div class="line-footer mb-10"></div>
                  <h5 style="font-weight: 300;">Temukan material terbaik untuk rumah tinggal idaman Anda</h5>
              </center>
          </div>
          <div class="col-md-12">
              <div class="container p0 katalog-produk" style="width: 100%;">
                  <div class="row mb-4">
                      <div class="col-md-12" style="display: flex;justify-content: center;">
                          <form id="frm-filter" style="width: 45%;">
                              <input type="hidden" id="merk" name="merk">
                              <input type="hidden" id="id_kategori" name="id_kategori">
                              <input type="hidden" id="sort_by" name="sort_by" value="1">
                              <div class="p-1 bg-light rounded-pill shadow-sm">
                                  <div class="input-group">
                                    <input type="search" placeholder="Material apa yang Anda inginkan?" aria-describedby="btn-cari-material" class="form-control border-0 bg-light" id="nama_material" name="nama_produk" style="margin-left: 3px;">
                                    <div class="input-group-append">
                                      <button id="btn-cari-material" type="button" class="btn btn-link"><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-12">
                          <div class="list-produk-merk ">
                             <!--  <?php
                                if ($slide_merk != '') {
                                  foreach($slide_merk as $item) { ?>
                                      <div class="slide-brand" style="background: url(<?= $this->config->item('eid').'assets/img/merk/'.$item->logo ?>);background-size: 100% 100%;"></div>
                              <?php }} ?> -->
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="result">
                              <div class="row">
                                  <div class="col-md-3 sec-category" style="max-width: 21%;padding-right: 0;">
                                      <h5 style="font-weight: 400"><i class="fa fa-filter"></i> Tampilkan Berdasarkan</h5>
                                      <hr style="margin-top: 12px;">
                                      <div class="list-category">
                                        <div class="header">
                                          <h5>Kategori Material</h5>
                                        </div>
                                        <div class="body">
                                          <ul class="kategori-material">
                                            <li data-id="0"><img class="icon" src="<?= $this->config->item('eid').'assets/img/icon/kategori/semua-kategori.png' ?>" />Semua Kategori</li>
                                    <!--        <?php
                                              if ($kategori != '') {
                                                foreach($kategori as $item){ ?>
                                                    <li data-id="<?= $item->id_kategori ?>"><img class="icon" src="<?= $this->config->item('eid').'assets/img/icon/kategori/'.$item->icon ?>" /><?= $item->kategori ?>
                                                        <?php if ($item->jumlah != '0') { ?>
                                                        <span class="pull-right"><span class="badge" style="vertical-align: sub;"><?= $item->jumlah ?></span></span>
                                                        <?php } ?>
                                                    </li>
                                            <?php }} ?> -->
                                          </ul>
                                        </div>
                                      </div>
                                      
                                      <div class="list-category merk">
                                          <div class="header">
                                            <h5>Merk Material</h5>
                                          </div>
                                          <ul class="list-group checklist"></ul>
                                      </div>
                                  </div>

                                  <div class="col-md-9 sec-product" style="max-width: 79%;flex: 0 0 79%;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <h5 style="font-weight: 300;font-size:15px;">Menampilkan <span id="jum_produk" style="font-weight: 400;"></span> material</h5>
                                      </div>
                                      
                                      <div class="col-sm-6 text-right">
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="padding: 2px 10px;font-weight: 300;font-size: 15px;margin-top: -6px;">
                                            Urutkan <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li onclick="setSort(1)">Produk Terbaru</li>
                                              <li onclick="setSort(2)">Produk Terlama</li>
                                              <li onclick="setSort(3)">Harga Termurah</li>
                                              <li onclick="setSort(4)">Harga Termahal</li>
                                              <li onclick="setSort(5)">Abjad A-Z</li>
                                              <li onclick="setSort(6)">Abjad Z-A</li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <hr style="margin-top: 7px;">
                                    
                                    <div class="list-produk"></div>
                                    <div class="spinner"><center><img src="<?= base_url('assets/gif/rt-loader.gif') ?>" style="padding: 2px;" width="35px" /></center></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
</section>




<script src="<?php echo base_url('assets/js/js.cookie.min.js') ?>"></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>

<script>
    function parseJwt(token) {
          var base64Url = token.split('.')[1];
          var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
          var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
              return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
          }).join(''));

          return JSON.parse(jsonPayload);
    };

    function handleCredentialResponse(credentialResponse) {
        let response = parseJwt(credentialResponse.credential);
        $.ajax({
            url : "<?php echo base_url('api/loginSSO') ?>",
            type: "POST",
            data: {
                "nama_lengkap": response.name,
                "email": response.email,
                "password": ''
            },
            dataType: "JSON",
            success: function(data){
                if (data.Success == true) {
                    toastr.success(data.Info, 'Informasi', opsi_toastr);
                    window.location.href = "<?php echo base_url() ?>";
                }
            }
        });
    }

    if (Cookies.get('id_customer', { domain: 'rumahtinggal.id' }) == null) {
        window.onload = function () {
            google.accounts.id.initialize({
                client_id: '234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com',
                callback: handleCredentialResponse,
                cancel_on_tap_outside: false,
                //ui_mode: isMobile() ? 'bottom_sheet': 'card',
            });
            google.accounts.id.prompt();

            setTimeout(function(){
                let onetap = $('.wrapper > #credential_picker_container');
                onetap.parent().after(onetap);
            }, 7000);
        };
    }
  
  
  
  function slickCarousel() {
 
   $('.list-produk-merk').slick({
            autoplaySpeed: 2000,
            autoplay: true,
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            responsive: [
              {
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
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
        });
      
}
  
  
  

    $(document).ready(function() {
        $('.navdev .navdevv #material').addClass('active');
        ias.bind();
        getSummaryKatalog();
        getMerkProduk();
        getSlideMerk();
        getKategoriProduk();
        // $('#pop_up_website').modal('show');
        // $('#testimonial-slider').owlCarousel({
        //     items: 1,
        //     loop: true,
        //     //margin: 10,
        //     autoplay: true,
        //     autoplayHoverPause: true,
        //     autoplaySpeed: 2000
        // });
      
        // $('.list-produk-promo, .list-produk-favorit, .list-artikel').slick({
        //      slidesToShow: 4,
        //      slidesToScroll: 1,
        //      // autoplay: true,
        //      // autoplaySpeed: 2000,
        //      arrows: true,
        //      responsive: [{
        //              breakpoint: 1024,
        //              settings: {
        //                  slidesToShow: 3,
        //                  slidesToScroll: 1,
        //                  infinite: true,
        //                  dots: true
        //              }
        //          },
        //          {
        //              breakpoint: 600,
        //              settings: {
        //                  slidesToShow: 2,
        //                  slidesToScroll: 1
        //              }
        //          },
        //          {
        //              breakpoint: 480,
        //              settings: {
        //                  slidesToShow: 2,
        //                  slidesToScroll: 1,
        //                  arrows: false
        //              }
        //          }
        //      ]
        // });
    });
  
    // function lihatKoleksi(){
    //     location.href = "<?= base_url('desain') ?>";
    // }
  
    // function lihatSampel(){
    //     location.href = "<?= base_url('sampel_desain') ?>";
    // }
  
    function detailProduk(id){
        location.href = "<?= base_url('detail_produk/') ?>"+id;
    }
  
    // function lihatArtikel(){
    //     location.href = "<?= base_url('artikel') ?>";
    // }
  
    // function detailArtikel(id){
    //     location.href = "<?= base_url('detail-artikel/') ?>"+id;
    // }
    
    function detailSuplier(id){
        //location.href = "<?= base_url('suplier/') ?>"+id;
    }
    
    function detailMerk(id){
        //location.href = "<?= base_url('merk/') ?>"+id;
    }
    
    function setSort(by) {
        $('#sort_by').val(by);
        $('.list-produk').empty();
        ias.next();
    }
  //$this->config->item('url_server').'assets/foto/produk/'
    function getProductItem(page,data) {
        var foto = `${data.foto}`;
        if (foto == '') foto = 'no-foto.jpg';
        var harga = `${data.harga_dasar}`;
        
        var template = `<div class="col-md-3 col-sm-6 p0 grid">
            <div class="product-grid page-`+page+`" data-id="${data.id_produk}">
                <div class="product-image">
                    <a href="javascript:void(0)" class="image" onclick="detailProduk(${data.id_produk})">
                        <img class="pic-1" src="<?= $this->config->item('eid').'assets/foto/produk/' ?>`+foto+`">
                        <img class="pic-2" src="<?= $this->config->item('eid').'assets/foto/produk/' ?>`+foto+`">
                    </a>
                </div>
                <div class="product-content">
                    <div class="title" title="${data.nama_produk}" onclick="detailProduk(${data.id_produk})">${data.nama_produk}</div>
          <div class="product-info">
                        <div class="suplier" title="${data.nama_suplier}" onclick="detailSuplier(${data.id_suplier})">
              <img class="logo" src="<?= $this->config->item('eid').'assets/foto/pengguna/' ?>${data.foto_suplier}">
              <span>${data.nama_suplier}</span>
              </div>
                        <div class="badge" title="${data.merk}">${data.merk}</div>
                    </div>
          <div class="product-price">
            <div class="price">Rp`+number_format(harga, 0, ',', '.')+`<span class="unit"> / ${data.satuan}</span></div>
          </div>
                    <div class="product-detail">
                        <p class="spesification">${data.spesifikasi}</p>
                        <div class="product-statistic">
                            <div class="statistic">
                                <button class="btn btn-detail produk" onclick="detailProduk(${data.id_produk})">Detail</a>
                            </div>
                            <div class="statistic">
                                <button class="btn btn-beli" data-number="${data.no_wa}" data-id="${data.id_produk}" data-product="${data.nama_produk}" data-merk="${data.merk}" data-spec="${data.spesifikasi}"><i class="fa fa-shopping-cart" style="margin-top: -1px;"></i> Beli</a>
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
        if (params == null) params = $('#frm-filter').serialize();
        else {
            if (params != $('#frm-filter').serialize()) {
                params = $('#frm-filter').serialize();
                page = reset = 0;
            } else page++;
        }

        let fetchData = {
            method: 'POST',
            body: params,
            headers: new Headers()
        }

        return fetch('<?= $this->config->item('url_server') ?>api/getKatalogProduk', fetchData)
            .then(response => response.json())
            .then(result => {
              let frag = document.createDocumentFragment();
              let itemsPerPage = 10;
              let totalPages = Math.ceil(result.length / itemsPerPage);
              let offset = page * itemsPerPage;

              for (let i = offset, len = offset + itemsPerPage; i < len; i++) {
                if (typeof result[i] !== 'undefined') {
                    let item = getProductItem(pageIndex, result[i]);
                    frag.appendChild(item);
                }
              }

              let hasNextPage = page < totalPages - 1;

              return this.append(Array.from(frag.childNodes)).then(() => hasNextPage);
            })
            .catch(error => console.log(error));
    }

    window.ias = new InfiniteAjaxScroll('.list-produk', {
        logger: false,
        item: '.grid',
        next: nextHandler,
        pagination: false,
        bind: false,
        scrollContainer: '.list-produk',
        spinner: '.spinner',
    });

    ias.on('page', (event) => {
        $(".btn-beli").on("click", function(){
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
    });
    
    function getSummaryKatalog() {
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getSummaryCariProduk",
            dataType: "JSON",
            data: {
                "keyword": $('#nama_material').val(),
                "id_kategori": $('#id_kategori').val(),
                "merk": $('#merk').val()
            },
            success : function(data){
                $('#jum_produk').html(data.suplier);
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
    
    function getMerkProduk() {
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getFilterMerkProduk",
            data: $('#frm-filter').serialize(),
            dataType: "JSON",
            success : function(data){
                if (data != '') {
                    var list = check = counter = '';
                    var list_merk = $('#merk').val();
                    for (var i = 0; i <= data.length-1; i++) {
                        if (list_merk.includes(data[i].merk) == true) check = "checked"; else check = "";
                        if (data[i].jumlah != "0") counter = "<span class='pull-right'><span class='badge' style='vertical-align: middle;'>"+data[i].jumlah+"</span></span>"; else counter = "";
                        list += '<li class="list-group-item"><label class="checkbox"><input type="checkbox" class="list-merk" name="list_merk" value="'+data[i].merk+'" '+check+'><span class="primary"><div class="item">'+data[i].merk+'</div></label>'+counter+'</li>';
                    }
                    $('.checklist').html(list);
                } else $('.checklist').html("<center><img src='<?= base_url('assets/img/not_found_material.png') ?>' width='75' style='padding: 5px 0px;' /><br><span>Tidak ada merk material</span></center>");
                // $this->config->item('eid') ?> assets/img/not-found.png
                $(".list-merk").on("change", function(e) {
                    var merk = '';
                    $.each($(".checklist :input").serializeArray(), function() {
                        merk += "'" + this.value + "',";
                    });
                    $('#merk').val(merk.slice(0,-1));
                    $('.list-produk').empty();
                    ias.next();
                    getSummaryKatalog();
                });
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
  
    $('#nama_material').keypress(function(e){
      if (e.which == 13) {
          e.preventDefault();
          $('#btn-cari-material').click();
          return false;
        }
    })
  
    $('#btn-cari-material').on('click', function() {
        $('#id_kategori').val(0);
        $('#merk').val('');
        $('.list-produk').empty();
        ias.next();
        getSummaryKatalog();
        getMerkProduk();
    });  
  
    $('.list-category .body li').on('click', function() {
        $('#id_kategori').val($(this).data('id'));
        $('#nama_material,#merk').val('');
        $('.list-produk').empty();
        ias.next();
        getSummaryKatalog();
        getMerkProduk();
    });


  //$data['kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getKategoriProduk'));
  //$data['slide_merk'] =  json_decode(file_get_contents($this->config->item('url_server').'api/getSlideMerk'));
  //$data['merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getMerkProduk'));
  
  function getKategoriProduk() {
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getKategoriProduk",
            dataType: "JSON",
            success : function(data){
              
           if (data != ''){
                            $.each(data, function(i, item) {
                               $('.kategori-material').append(`<li data-id="`+item.id_kategori+`"><img class="icon" src="<?= $this->config->item('eid').'assets/img/icon/kategori/' ?>`+item.icon+`" />`+item.kategori+`
                                                        <?php if (item.jumlah != '0') { ?>
                                                        <span class="pull-right"><span class="badge" style="vertical-align: sub;">`+item.jumlah+`</span></span>
                                                        <?php } ?>
                                                    </li>`);
                            });
                        }  
              
              
               
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
  
  function getSlideMerk() {
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getSlideMerk",
            dataType: "JSON",
            success : function(data){
             
              //   <img class="rounded-circle palet-img" src="<?= base_url('assets/img/material_baru/') ?>`+item.foto+`"> 
            if (data != ''){
                            $.each(data, function(i, item) {
                                $('.list-produk-merk').append(`
 <div class="slide-brand slick-slide" style="background: url(<?= $this->config->item('eid').'assets/img/merk/' ?>`+item.logo+`);background-size: 100% 100%;"></div>`);
                            });
                        }  
                slickCarousel();
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }
  
 /* function getMerkProduk() {
        $.ajax({
            type : 'POST',
            url : "<?= $this->config->item('url_server') ?>api/getMerkProduk",
            dataType: "JSON",
            success : function(data){
                $('#jum_produk').html(data.suplier);
            },
            error: function (jqXHR, textStatus, errorThrown){
              toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
            }
        });
    }*/


window.onload = function () {
     // getMaterial();
 
if(jQuery.browser.mobile)
{
   window.open("https://rumahtinggal.id/mobile/material");
}
else
{
   console.log('You are not using a mobile device!');
 // window.open("https://rumahtinggal.id/dev/");
}
   
}

</script>