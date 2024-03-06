    <link href="<?= base_url('assets/css/artikel/media_query.css') ?>" rel="stylesheet" type="text/css" />
    <!-- <link href="<?= base_url('assets/css/artikel/bootstrap.css') ?>" rel="stylesheet" type="text/css"/> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/artikel/animate.css') ?>" rel="stylesheet" type="text/css" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> -->
    <link href="<?= base_url('assets/css/artikel/owl.carousel.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/artikel/owl.theme.default.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/artikel/style_1.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/js/artikel/modernizr-3.5.0.min.js') ?>"></script>
    </head>
    <!-- start footer Area -->
    <style>
        select,
        select>option {
            font-family: 'FontAwesome', 'Calibri';
        }

        .item.px-2.col-md-3 {
            margin: 9px 0px;
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff0 url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
            background-size: 8px 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            appearance: none;
        }


        .img-hover-zoom--colorize img {
            transition: transform .5s, filter 1.5s ease-in-out;
            /*filter: grayscale(100%);*/
        }

        /* The Transformation */
        .img-hover-zoom--colorize:hover img {
            filter: grayscale(0);
            transform: scale(1.1);
        }

        a,
        a:hover {
            color: #026CB6;
        }

        .fh5co_img_special_relative {
            position: relative;
            width: 100%;
            right: 0%;
        }

        .fh5co_latest_trading_img {
            height: 191px;
            overflow: hidden;
        }

        .container {
            width: 95%;
            max-width: 100%;
        }


        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .box:hover .image {
            opacity: 0.3;
            filter: blur(5px);
        }

        .box:hover .isi {
            opacity: 0;
        }

        .box:hover .middle {
            opacity: 1;
        }
    </style>
    <div class="container-fluid paddding mt-5 mb-5">
        <div class="row mx-0">

            <a href="<?= base_url('detail-artikel/' . $muka->id_artikel) ?>">
                <div class="col-md-6 col-12 paddding animate-box box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height img-hover-zoom--colorize"><img src="<?= base_url('assets/img/artikel/' . $muka->foto_cover) ?>" alt="img" style="width:135%;" class="image" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font isi">
                            <div class=""><a href="<?= base_url('detail-artikel/' . $muka->id_artikel) ?>" class="fh5co_good_font"> <?php echo $muka->judul_artikel; ?></a></div>
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o" style="margin-right: 10px;"></i>&nbsp;&nbsp;<?php echo $muka->tgl_dibuat; ?>
                                </a></div>
                        </div>
                    </div>
                    <div class="middle">
                        <div class="text">

                            <hr />
                            <div style="width: 300px;">
                                <h2><a href="<?= base_url('detail-artikel/' . $muka->id_artikel) ?>"> <?php echo $muka->judul_artikel; ?></a></h2>
                                <p><?php echo substr($muka->deskripsi_meta, 0, 170) ?>.. <a href="<?= base_url('detail-artikel/' . $muka->id_artikel) ?>">baca selengkapnya..</a></p>

                            </div>

                        </div>
                    </div>
                </div>
            </a>


            <div class="col-md-6">
                <div class="row" id="getArtikel">
                    <?php foreach ($mukaRight as $mukaR) : ?>
                        <a href="<?= base_url('detail-artikel/' . $mukaR->id_artikel) ?>">
                            <div class="col-md-6 col-6 paddding animate-box box" data-animate-effect="fadeIn">
                                <div class="fh5co_suceefh5co_height_2 img-hover-zoom--colorize"><img src="<?= base_url('assets/img/artikel/' . $mukaR->foto_cover) ?>" alt="img" class="image" />
                                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                    <div class="fh5co_suceefh5co_height_position_absolute_font_2 isi">

                                        <div class=""><a href="<?= base_url('detail-artikel/' . $mukaR->id_artikel) ?>" class="fh5co_good_font_2"> <?php echo $mukaR->judul_artikel; ?></a></div>
                                        <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o" style="margin-right: 10px;"></i>&nbsp;&nbsp;<?php echo $mukaR->tgl_dibuat; ?></a></div>
                                    </div>
                                </div>
                                <div class="middle">
                                    <div class="text">
                                        <hr />
                                        <div style="width: 300px;">
                                            <h4><a href="<?= base_url('detail-artikel/' . $mukaR->id_artikel) ?>"> <?php echo $mukaR->judul_artikel; ?></a></h4>
                                            <p><?php echo substr($mukaR->deskripsi_meta, 0, 110) ?>.. <a href="<?= base_url('detail-artikel/' . $mukaR->id_artikel) ?>">baca selengkapnya..</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3 mb-5">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div class="">
                <div class="fh5co_heading py-2 mb-4">Artikel Popular

                    <div class="form-inline" id="filter-produk" style="float: right;">
                        <div class="form-group item-filter" style="margin-right: 2em;width: 150px;">
                            <div id="custom-search-input" style="border-bottom: solid 1px #026CB6;">
                                <div class="input-group">
                                    <span class="input-group-btn" style="height: 28px;">
                                        <button class="btn btn-lg" type="button" style="border: none;margin:0;padding: 0 7px;background: none;border-radius: 0;"><i class="fa fa-search" aria-hidden="true" style="font-size: 19px;color: #026CB6"></i></button>
                                    </span>
                                    <input type="text" style="height: 30px; font-size: 13px;background: transparent;border: 0;border-radius: 0;" class="form-control" name="cari_artikel" id="cari_artikel" placeholder="Cari disini">
                                </div>
                            </div>
                        </div>
                        <div class="form-group input-group" style="width: 150px;">
                            <select class="custom-select" id="order" name="order" style="height: 30px;font-size: 12px;border:none; border-bottom: 1px solid #026CB6; border-radius: 0;font-weight: 50;">
                                <option value="0">Urut berdasar</option>
                                <option value="1">Desain terbaru</option>
                                <option value="2">Desain terlama</option>
                                <option value="3">Ascending (A-Z)</option>
                                <option value="4">Descending (Z-A)</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>


            <!-- <div class="owl-carousel owl-theme js" id="slider1"> -->
            <div class="container">

                <div id="katalog_artikel" class="row">
                    <?php foreach ($artikels as $artikel) : ?>
                        <div class="item px-2 col-md-3">
                            <a href="<?= base_url('detail-artikel/' . $artikel->id_artikel) ?>">
                                <div class="fh5co_latest_trading_img_position_relative">
                                    <div class="fh5co_latest_trading_img"><img src="<?= base_url('assets/img/artikel/' . $artikel->foto_cover) ?>" alt="" class="fh5co_img_special_relative" /></div>
                                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                                    <div class="fh5co_latest_trading_img_position_absolute_1">
                                        <a href="<?= base_url('detail-artikel/' . $artikel->id_artikel) ?>" class="text-white"> <?php echo $artikel->judul_artikel; ?> </a>
                                        <div class="fh5co_latest_trading_date_and_name_color"> <?php echo $artikel->dibuat_oleh; ?> - <?php echo $artikel->tgl_dibuat; ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div id="katalog_artikel_filter" class="row"></div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- End footer Area -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= base_url('assets/js/artikel/owl.carousel.min.js') ?>"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="<?= base_url('assets/js/artikel/jquery.waypoints.min.js') ?>"></script>
    <!-- Main -->
    <script src="<?= base_url('assets/js/artikel/main.js') ?>"></script>

    <script>
        function katalogArtikel() {
            var cari_artikel = $('#cari_artikel').val();
            var order = $('#order').val();
            $.ajax({
                url: "<?= base_url('api/getKatalogArtikel') ?>",
                type: "POST",
                data: {
                    "cari_artikel": cari_artikel,
                    "order": order
                },
                dataType: "json",
                success: function(tes) {
                    $('#katalog_artikel').hide().empty();
                    $('#katalog_artikel_filter').empty();
                    for (var k = 0; k <= tes.length - 1; k++) {
                        $('#katalog_artikel_filter').append(`<div class="item px-2 col-md-3"> 
                <a href="<?= base_url('detail-artikel/`+tes[k].id_artikel+`') ?>">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="<?= base_url('assets/img/artikel/`+tes[k].foto_cover+`') ?>" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="<?= base_url('detail-artikel/`+tes[k].id_artikel+`') ?>" class="text-white"> ` + tes[k].judul_artikel + ` </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> ` + tes[k].dibuat_oleh + ` - ` + tes[k].tgl_dibuat + `</div>
                    </div>
                </div>
                </a>
            </div>`);
                    }
                },
                error: function(jqHR, texStatus, errorThrown) {
                    alert('tes');
                }
            });
        }
        // function getArtikel(){          
        //    $.ajax({
        //        url : "<?php echo $this->config->item('url_arsi') ?>api/getArtikel",
        //        type : "POST",
        //     contentType: "application/json; charset=utf-8",
        //        dataType: "JSON",
        //        success: function(data){
        //         for (k = 0; k <= data.length-1;k++ ) {
        //         $('#getArtikel').append(`<div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
        //         <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $this->config->item('url_arsi') ?>assets/img/assessment/muka_lantai/2_lantai.jpg" alt="img"/>
        //             <div class="fh5co_suceefh5co_height_position_absolute"></div>
        //             <div class="fh5co_suceefh5co_height_position_absolute_font_2">
        //                 <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct
        //                     28,2017 </a></div>
        //                 <div class=""><a href="single.html" class="fh5co_good_font_2"> After all is said and done, <br>more is said than done </a></div>
        //             </div>
        //         </div>
        //     </div>`);
        //         }
        //         },
        //        error: function(jqHR, texStatus, errorThrown){
        //        }
        //    });
        // }
        // $(document).ready(function(){
        //     getArtikel();
        // });



        $('#order,#cari_artikel').on('change', function() {
            katalogArtikel();
        });

        $("#cari_artikel").on("input", function(e) {
            katalogArtikel();
        });
    </script>