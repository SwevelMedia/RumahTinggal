 <link href="<?= base_url('assets/css/artikel/media_query.css') ?>" rel="stylesheet" type="text/css" />
 <!-- <link href="<?= base_url('assets/css/artikel/bootstrap.css') ?>" rel="stylesheet" type="text/css"/> -->
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link href="<?= base_url('assets/css/artikel/animate.css') ?>" rel="stylesheet" type="text/css" />
 <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> -->
 <link href="<?= base_url('assets/css/artikel/owl.carousel.css') ?>" rel="stylesheet" type="text/css" />
 <link href="<?= base_url('assets/css/artikel/owl.theme.default.css') ?>" rel="stylesheet" type="text/css" />
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!-- Bootstrap CSS -->
 <link href="<?= base_url('assets/css/artikel/style_1.css') ?>" rel="stylesheet" type="text/css" />
 <!-- Modernizr JS -->
 <script src="<?= base_url('assets/js/artikel/modernizr-3.5.0.min.js') ?>"></script>
 </head>
 <style>
     .fh5co_small_post_heading {
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
     }

     .overlay {
         width: 100%;
     }

     #fh5co-title-box .overlay {
         background: rgba(0, 5, 19, 0.85);
     }

     #fh5co-title-box .page-title img {
         width: 550px;
         border-radius: 0px;
     }

     .fh5co_tagg:hover,
     .fh5co_tagg:focus {
         background: #026CB6;
     }

     .owl-theme .owl-nav [class*="owl-"] {
         color: #fff;
         font-size: 14px;
         margin: 5px;
         padding: 6px 14px;
         background: #026cb6;
         display: inline-block;
         cursor: pointer;
         border-radius: 3px;
         transition: all 0.5s;
         border: none;
     }

     .owl-theme .owl-nav [class*="owl-"]:hover {
         background: #5e95c7;
         color: #FFF;
         text-decoration: none;
     }
 </style>

 <body class="single">
     <!-- news -->
     <div id="fh5co-title-box" style="background-image: url(<?= base_url('assets/img/artikel/' . $artikel->foto_cover) ?>); background-position: 50% 58.5px;" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="page-title">
             <img id="foto_cover" src="" alt="">
             <span> <span id="dibuat_oleh"></span><span> | </span><span id="tgl_dibuat">January 1, 2018</span> </span>
             <h2 id="judul_artikel" style="font-weight: 500;">How to write interesting articles</h2>
         </div>
     </div>
     <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
         <div class="container" style="padding: 0px 95px !important;">
             <div class="row mx-0">
                 <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                     <div id="isi_artikel" style="text-align: justify;"></div>
                     <hr>
                     <span style="font-size: 12px;">Sumber gambar : <span id="sumber"></span></span>
                 </div>

                 <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                     <div>
                         <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="fh5co_tags_all">
                         <a href="#" class="fh5co_tagg">Business</a>
                         <a href="#" class="fh5co_tagg">Technology</a>
                         <a href="#" class="fh5co_tagg">Sport</a>
                         <a href="#" class="fh5co_tagg">Art</a>
                         <a href="#" class="fh5co_tagg">Lifestyle</a>
                         <a href="#" class="fh5co_tagg">Three</a>
                         <a href="#" class="fh5co_tagg">Photography</a>
                         <a href="#" class="fh5co_tagg">Lifestyle</a>
                         <a href="#" class="fh5co_tagg">Art</a>
                         <a href="#" class="fh5co_tagg">Education</a>
                         <a href="#" class="fh5co_tagg">Social</a>
                         <a href="#" class="fh5co_tagg">Three</a>
                     </div>
                     <div>
                         <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Artikel Popular</div>
                     </div>

                     <div id="getArtikel">

                     </div>
                     <!--      <?php foreach ($artikels as $artikel) : ?>
                <div class="row pb-3">
                      <a href="<?= base_url('detail-artikel/' . $artikel->id_artikel) ?>">
                    <div class="col-5 align-self-center">
                       <a href="<?= base_url('detail-artikel/' . $artikel->id_artikel) ?>"><img src="<?= base_url('assets/img/artikel/' . $artikel->foto_cover) ?>" alt="img" class="fh5co_most_trading"/></a>
                   </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <?php echo $artikel->judul_artikel; ?></div>
                        <div class="most_fh5co_treding_font_123"> <?php echo $artikel->tgl_dibuat; ?></div>
                    </div>
                    </a>
                </div>
                <?php endforeach ?> -->
                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid pb-4 pt-5 mb-5">
         <div class="container animate-box">
             <!-- <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Artikel Serupa</div>
        </div> -->
             <div class="owl-carousel owl-theme" id="slider2">
                 <!-- <?php foreach ($artikels as $artikel) : ?>
            <div class="item px-2">
                 <a href="<?= base_url('detail-artikel/' . $artikel->id_artikel) ?>">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?= base_url('assets/img/artikel/' . $artikel->foto_cover) ?>" alt=""/></div>
                    <div>
                        <a href="<?= base_url('detail-artikel/' . $artikel->id_artikel) ?>" class="d-block fh5co_small_post_heading"><span class=""><?php echo $artikel->judul_artikel; ?></span></a>
                        <div class="c_g"><i class="fa fa-clock-o" style="margin-right: 10px;"></i> <?php echo $artikel->tgl_dibuat; ?></div>
                    </div>
                </div>
                </a>
            </div>
            <?php endforeach ?> -->

             </div>
         </div>
     </div>
     <!-- news -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="<?= base_url('assets/js/artikel/owl.carousel.min.js') ?>"></script>
     <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script> -->
     <!-- Waypoints -->
     <script src="<?= base_url('assets/js/artikel/jquery.waypoints.min.js') ?>"></script>
     <!-- Parallax -->
     <script src="<?= base_url('assets/js/artikel/jquery.stellar.min.js') ?>"></script>
     <!-- Main -->
     <script src="<?= base_url('assets/js/artikel/main.js') ?>"></script>
     <script>
         function getDetailArtikel() {
             $.ajax({
                 url: "<?= base_url('api/getDetailArtikel/') ?>" + id_artikel,
                 type: "POST",
                 dataType: "JSON",
                 success: function(art) {
                     $('#tgl_dibuat').html(art.tgl_dibuat);
                     $('#judul_artikel').html(art.judul_artikel);
                     $('#isi_artikel').html(art.isi_artikel);
                     $('#dibuat_oleh').html(art.dibuat_oleh);
                     $('#sumber').html(art.sumber);
                     $('#foto_cover').attr("src", "<?= base_url('assets/img/artikel/') ?>" + art.foto_cover);
                     $('#fh5co-title-box').css("background-image", "url(<?= base_url('assets/img/artikel/') ?>" + art.foto_cover);
                 },
                 error: function(jqHR, texStatus, errorThrown) {}
             });
         }

         function getArtikel() {
             const pathArray = window.location.pathname.split('/');
             const value = pathArray[2];
             //  console.log(value);
             $.ajax({
                 url: "<?= base_url('api/getArtikel/') ?>" + value,
                 type: "POST",
                 contentType: "application/json; charset=utf-8",
                 dataType: "JSON",
                 success: function(data) {
                     for (k = 0; k <= data.length - 1; k++) {
                         $('#getArtikel').append(`<div class="row pb-3"> 
                      <a href="<?= base_url('detail-artikel/`+data[k].id_artikel+`') ?>"> 
                    <div class="col-5 align-self-center">
                       <a href="<?= base_url('detail-artikel/`+data[k].id_artikel+`') ?>"><img src="<?= base_url('assets/img/artikel/`+data[k].foto_cover+`') ?>" alt="img" class="fh5co_most_trading"/></a>
                   </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> ` + data[k].judul_artikel + `</div>
                        <div class="most_fh5co_treding_font_123"> ` + data[k].tgl_dibuat + `</div>
                    </div>
                    </a>
                </div>`);



                         /*  $('#slider2').append(`<div class="item px-2">
                                   <a href="<?= base_url('detail-artikel/`+data[k].id_artikel+`') ?>">
                                  <div class="fh5co_hover_news_img">
                                      <div class="fh5co_news_img"><img src="<?= base_url('assets/img/artikel/`+data[k].foto_cover+`') ?>" alt=""/></div>
                                      <div>
                                          <a href="<?= base_url('detail-artikel/`+data[k].id_artikel+`') ?>" class="d-block fh5co_small_post_heading"><span class="">`+data[k].judul_artikel+`</span></a>
                                          <div class="c_g"><i class="fa fa-clock-o" style="margin-right: 10px;"></i> `+data[k].tgl_dibuat+`</div>
                                      </div>
                                  </div>
                                  </a>
                              </div>`); */
                     };



                 },
                 error: function(jqHR, texStatus, errorThrown) {}
             });
         }







         var id_artikel;

         $(document).ready(function() {
             id_artikel = <?php echo $id_artikel ?>;
             getDetailArtikel();
             getArtikel();
         });
     </script>