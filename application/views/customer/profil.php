<link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="<?php echo base_url('assets/plugins/dropzone/dist/dropzone.css') ?>">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
<style type="text/css">
    .list-desain .product-grid .product-image.desain a.image::before {
        left: 38%;
        top: 42%;
    }

    #messages .product-grid {
        height: auto;

    }

    #messages .product-grid .product-detail {

        opacity: 1 !important;
        position: relative !important;

    }


    /*#profile div.image::before {
    left: 38%;
    top: 42%;
}*/
    #profile div.image::before {
        content: url(https://rumahtinggal.id/assets/img/watermark-rt-kecil.png);
        position: absolute;
        z-index: 100;
        top: 37%;
        left: 24%;
    }


    select,
    select>option {
        font-family: 'FontAwesome', 'Calibri';
    }

    #dokumen .col-md-3 {
        max-width: 100px;
    }

    .list-desain .col-md-3 {
        max-width: 33.3%;
    }

    #custom-search-input input {
        border: 0;
        color: #000;
        border-radius: 0;
        font-size: 15px;
        padding: 0 5px;
        font-weight: 300;
        height: 36px;
    }

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

    #custom-search-input .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%;
    }

    #custom-search-input {
        border: solid 1px #026CB6;
    }

    .item-filter {
        margin-top: 17px;
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


    .span_pseudo,
    .chiller_cb span:before,
    .chiller_cb span:after {
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

    .chiller_cb input:checked~span {
        background: #026CB6;
        border-color: #026CB6;
    }

    .chiller_cb input:checked~span:before {
        width: 1rem;
        height: 0.15rem;
        transition: width 0.1s;
        transition-delay: 0.3s;
    }

    .chiller_cb input:checked~span:after {
        width: 0.4rem;
        height: 0.15rem;
        transition: width 0.1s;
        transition-delay: 0.2s;
    }

    .chiller_cb input:disabled~span {
        background: #ececec;
        border-color: #dcdcdc;
    }

    .chiller_cb input:disabled~label {
        color: #dcdcdc;
    }

    .chiller_cb input:disabled~label:hover {
        cursor: default;
    }

    .chiller_cb label {
        padding-left: 2rem;
        position: relative;
        z-index: 2;
        cursor: pointer;
        margin-bottom: 0;
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

    .ui-mobile [data-role="page"],
    .ui-mobile [data-role="dialog"],
    .ui-page {
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
        box-shadow: 0 2px 2px rgba(0, 0, 0, .3);
    }

    .ribbon-promo:before,
    .ribbon-promo:after {
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
        box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
        background: #fff;
    }

































    .fa-upload {
        color: #026CB6;
    }

    .dropzone {
        min-height: 150px;
        border: 2px dashed rgba(0, 0, 0, 0.3) !important;
        background: white;
        padding: 20px 8px !important;
    }

    .product-grid .product-content {
        box-shadow: 0 7px 9px rgba(145, 145, 145, 0.1);
    }

    body {
        font-size: 15px;
    }

    strong {
        font-weight: 400;
    }

    .form-inline {
        /* margin-top: -5px;*/
    }

    h2 {
        font-size: 21px;
        font-weight: 400;
    }

    /*tabel*/
    .table {

        margin-bottom: 0rem;

    }

    .table th,
    .table td {
        padding: 0.5rem;
    }

    /*tabel*/


    .form-control {
        color: #000;
        font-weight: 300;
    }

    /*ulasa*/
    #frm-ulasan .btnrating {
        border: 0;
        background: #fff0;
        padding: 0 0px;
        text-shadow: 2px 3px rgba(0, 0, 0, 0.05);
    }

    #frm-ulasan .btn-warn i {
        color: #ffe300 !important;
    }

    #frm-ulasan .fa-star {
        color: #d7d7d7;
        font-size: 25px;
        padding-top: 5px;
    }

    /*ulasan*/

    /*@import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");*/
    /*dropzone*/
    .dropzone .dz-preview {
        margin: 7px;
    }

    .dropzone .dz-preview .dz-image .shadow img {
        border: 2px solid black;
    }

    .dropzone .dz-preview .dz-remove {
        margin-top: 2px;
    }

    .trash {
        position: relative;
    }

    .dropzone .dz-preview .dz-image img {
        display: block;
        width: 120px;
        height: 120px;
    }

    .dropzone .dz-preview.dz-image-preview {
        background: white;
        /*margin-bottom: 35px;*/
    }

    .trash::before {
        background-color: #cc00007d;
        border-radius: 30%;
        content: "\f1f8";
        /*font-family: "Font Awesome 5 Free";*/
        font-style: normal;
        font-weight: 900;
        text-align: center;
        text-decoration: inherit;
        color: #fff;
        font-size: 15px;
        padding-right: 0.5em;
        position: absolute;
        top: -80px;
        left: -3px;
        height: 30px;
        margin-left: 50px;
        padding-bottom: 4px;
        padding-left: 5px;
        padding-right: 6px;
        padding-top: 5px;
        width: 30px;
        z-index: 11;
        /*content: "\f2ba";*/
        font: normal normal normal 20px/1 FontAwesome;
    }

    .dropzone .dz-preview .dz-image {
        border-radius: 3px;
        overflow: hidden;
        width: 120px;
        height: 120px;
        position: relative;
        display: block;
        z-index: 10;
    }

    .dz-image .pilihan {
        border-radius: 0px;
        overflow: hidden;
        width: 120px;
        height: 120px;
        position: relative;
        display: block;
        z-index: 10
    }

    .dzone {
        min-height: 173px !important;
        border: 1px dashed black;
        width: 173px;
    }


    /*dropzone*/
    .dropzone .dz-message {
        text-align: center;
        margin: 52px auto !important;
    }

    /*dropzone-bukti*/
    .dzone-bukti {
        min-height: 173px !important;
        border: 1px dashed black;
        width: 173px;
    }

    /*dropzone-bukti*/


    .product-grid:hover .product-content {
        z-index: 109;
    }

    .product-grid .product-image {
        z-index: 3;
        transition: width 2s;
    }

    .product-grid:hover .product-image {
        z-index: 11;
    }

    .product-grid {
        /*transition: all 0.3s ease;*/
        height: 357px;
        margin: 0 10px 18px 10px;
    }

    .product-grid .product-image.desain a.image::before {
        left: 11%;
        top: 17%;
    }

    .text-grey {
        color: #525252 !important;
    }

    .product-grid .product-image a.image {
        display: block;
        /*height: 117px;*/
        /*width: 70px;*/
    }

    /*modal*/
    .modal[data-modal-color] {
        color: #fff;
    }

    .modal .modal-header {
        padding: 12px 26px;
        border-bottom: 1px solid transparent;
    }

    .modal .modal-content {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.31);
        border-radius: 7px;
        border: 0;
    }

    .modal-footer {
        padding: 15px;
        text-align: center;
        border-top: 1px solid transparent;
        margin: 0 auto;
    }

    .modal[data-modal-color] .modal-footer {
        background: rgba(0, 0, 0, 0.1);
    }

    .modal[data-modal-color] .modal-footer .btn-link {
        font-weight: 400;
    }

    .modal[data-modal-color] .modal-title,
    .modal[data-modal-color] .modal-footer .btn-link {
        color: #fff;
    }

    .modal .modal-footer .btn-link {
        font-size: 14px;
        color: #000;
        font-weight: 500;
    }

    .btn-link {
        color: #797979;
        text-decoration: none;
        border-radius: 2px;
    }

    .modal[data-modal-color] .modal-footer .btn-link:hover {
        background-color: rgba(0, 0, 0, 0.1);
        text-decoration: none;
    }

    .modal[data-modal-color] .modal-footer .btn-link {
        font-weight: 400;
    }

    /* ========== MODAL COLORS ===============================*/
    .modal[data-modal-color="blue"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="lightblue"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="cyan"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="green"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="lightgreen"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="red"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="amber"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="orange"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="teal"] .modal-content {
        background: #f8f9fa;
    }

    .modal[data-modal-color="bluegray"] .modal-content {
        background: #f8f9fa;
    }


    /*modal*/

    /*status*/

    .fl-left {
        float: left;
    }

    .fl-right {
        float: right;
    }

    h1 {
        text-transform: uppercase;
        font-weight: 900;
        /*border-left: 10px solid #fec500;*/
        padding-left: 10px;
        margin-bottom: 30px
    }

    /*.row{overflow: hidden}*/

    /*.card
{
  
}
*/
    .card+.card {
        margin-left: 2%;
    }

    .date {
        display: table-cell;
        width: 200px;
        position: relative;
        text-align: center;
        border-right: 2px dashed #dadde6;
    }

    .date:before,
    .date:after {
        content: "";
        display: block;
        width: 30px;
        height: 30px;
        background-color: #ffffff;
        position: absolute;
        top: -15px;
        right: -15px;
        z-index: 1;
        border-radius: 50%;
    }

    .date:after {
        top: auto;
        bottom: -15px;
    }

    .date time {
        display: block;
        position: absolute;
        top: 30%;
        left: 49%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        /*background: #f70000;*/
        width: 132px;
        /*height: 19em;*/
    }

    .date time span {
        display: block;
    }

    .date time span:first-child {
        color: #ffbf01;
        font-weight: 600;
        font-size: 250%
    }

    .date time span:last-child {
        text-transform: capitalize;
        font-weight: 400;
        margin-top: 6px
    }

    .card-cont {
        display: table-cell;
        width: 75%;
        font-size: 85%;
        padding: 10px 10px 15px 50px
    }

    .card-cont h3 {
        color: #86a0c9;
        font-size: 110%
    }

    .row:last-child .card:last-of-type .card-cont h3 {
        /*text-decoration: line-through*/
    }

    .card-cont>div {
        /*display: table-row*/
    }

    .card-cont .even-date i,
    .card-cont .even-info i,
    .card-cont .even-date time,
    .card-cont .even-info p {
        display: table-cell
    }

    .card-cont .even-date i,
    .card-cont .even-info i {
        padding: 5% 5% 0 0
    }

    .card-cont .even-info p {
        padding: 30px 50px 0 0
    }

    .card-cont .even-date time span {
        display: block
    }

    .card-cont a {
        display: block;
        text-decoration: none;
        width: 180px;
        height: 71px;
        background-color: #D8DDE0;
        color: #fff;
        text-align: center;
        line-height: 68px;
        border-radius: 0px;
        position: absolute;
        left: 0px;
        bottom: 20px;
    }

    .row:last-child .card:first-child .card-cont a {
        background-color: #037FDD;
    }

    .row:last-child .card:last-child .card-cont a {
        background-color: #f70000;
    }

    @media screen and (max-width: 860px) {
        .card {
            display: block;
            float: none;
            width: 100%;
            margin-bottom: 10px
        }

        .card+.card {
            margin-left: 0
        }

        .card-cont .even-date,
        .card-cont .even-info {
            font-size: 75%
        }
    }

    /*status*/


    body {
        margin-top: 20px;
    }

    .bg-primary {
        background-color: #026CB6 !important;
    }

    .card {
        border: none !important;
    }

    .profile-card-4 .fa {
        color: #026CB6;
    }

    /* User Cards */
    .user-box {
        width: 110px;
        margin: auto;
        margin-bottom: 20px;
    }

    .user-box img {
        width: 100%;
        border-radius: 50%;
        padding: 3px;
        background: #fff;
        -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    }

    .profile-card-2 .card {
        position: relative;
    }

    .profile-card-2 .card .card-body {
        z-index: 1;
    }

    .profile-card-2 .card::before {
        content: "";
        position: absolute;
        top: 0px;
        right: 0px;
        left: 0px;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        height: 112px;
        background-color: #e6e6e6;
    }

    .profile-card-2 .card.profile-primary::before {
        background-color: #026CB6;
    }

    .profile-card-2 .card.profile-success::before {
        background-color: #15ca20;
    }

    .profile-card-2 .card.profile-danger::before {
        background-color: #fd3550;
    }

    .profile-card-2 .card.profile-warning::before {
        background-color: #ff9700;
    }

    .profile-card-2 .user-box {
        margin-top: 30px;
    }

    .profile-card-3 .user-fullimage {
        position: relative;
    }

    .profile-card-3 .user-fullimage .details {
        position: absolute;
        bottom: 0;
        left: 0px;
        width: 100%;
    }

    .profile-card-4 .user-box {
        width: 110px;
        margin: auto;
        margin-bottom: 10px;
        margin-top: 15px;
    }

    .profile-card-4 .list-icon {
        display: table-cell;
        font-size: 30px;
        padding-right: 20px;
        vertical-align: middle;
        color: #223035;
    }

    .profile-card-4 .list-details {
        display: table-cell;
        vertical-align: middle;
        font-weight: 600;
        color: #223035;
        font-size: 15px;
        line-height: 15px;
        font-weight: 400;
    }

    .profile-card-4 .list-details small {
        display: table-cell;
        vertical-align: middle;
        font-size: 12px;
        font-weight: 300;
        color: #808080;
    }

    /*Nav Tabs & Pills */
    .nav-tabs .nav-link {
        color: #223035;
        font-size: 12px;
        text-align: center;
        letter-spacing: 1px;
        font-weight: 600;
        margin: 2px;
        margin-bottom: 0;
        padding: 12px 20px;
        text-transform: uppercase;
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    .nav-tabs .nav-link:hover {
        border: 1px solid transparent;
    }

    .nav-tabs .nav-link i {
        margin-right: 2px;
        font-weight: 600;
    }

    .top-icon.nav-tabs .nav-link i {
        margin: 0px;
        font-weight: 500;
        display: block;
        font-size: 20px;
        padding: 5px 0;
    }

    .nav-tabs-primary.nav-tabs {
        border-bottom: 1px solid #026CB6;
    }

    .nav-tabs-primary .nav-link.active,
    .nav-tabs-primary .nav-item.show>.nav-link {
        color: #026CB6;
        background-color: #fff;
        border-color: #026CB6 #026CB6 #fff;
        border-top: 3px solid #026CB6;
    }

    .nav-tabs-success.nav-tabs {
        border-bottom: 1px solid #15ca20;
    }

    .nav-tabs-success .nav-link.active,
    .nav-tabs-success .nav-item.show>.nav-link {
        color: #15ca20;
        background-color: #fff;
        border-color: #15ca20 #15ca20 #fff;
        border-top: 3px solid #15ca20;
    }

    .nav-tabs-info.nav-tabs {
        border-bottom: 1px solid #0dceec;
    }

    .nav-tabs-info .nav-link.active,
    .nav-tabs-info .nav-item.show>.nav-link {
        color: #0dceec;
        background-color: #fff;
        border-color: #0dceec #0dceec #fff;
        border-top: 3px solid #0dceec;
    }

    .nav-tabs-danger.nav-tabs {
        border-bottom: 1px solid #fd3550;
    }

    .nav-tabs-danger .nav-link.active,
    .nav-tabs-danger .nav-item.show>.nav-link {
        color: #fd3550;
        background-color: #fff;
        border-color: #fd3550 #fd3550 #fff;
        border-top: 3px solid #fd3550;
    }

    .nav-tabs-warning.nav-tabs {
        border-bottom: 1px solid #ff9700;
    }

    .nav-tabs-warning .nav-link.active,
    .nav-tabs-warning .nav-item.show>.nav-link {
        color: #ff9700;
        background-color: #fff;
        border-color: #ff9700 #ff9700 #fff;
        border-top: 3px solid #ff9700;
    }

    .nav-tabs-dark.nav-tabs {
        border-bottom: 1px solid #223035;
    }

    .nav-tabs-dark .nav-link.active,
    .nav-tabs-dark .nav-item.show>.nav-link {
        color: #223035;
        background-color: #fff;
        border-color: #223035 #223035 #fff;
        border-top: 3px solid #223035;
    }

    .nav-tabs-secondary.nav-tabs {
        border-bottom: 1px solid #75808a;
    }

    .nav-tabs-secondary .nav-link.active,
    .nav-tabs-secondary .nav-item.show>.nav-link {
        color: #75808a;
        background-color: #fff;
        border-color: #75808a #75808a #fff;
        border-top: 3px solid #75808a;
    }

    .tabs-vertical .nav-tabs .nav-link {
        color: #223035;
        font-size: 12px;
        text-align: center;
        letter-spacing: 1px;
        font-weight: 600;
        margin: 2px;
        margin-right: -1px;
        padding: 12px 1px;
        text-transform: uppercase;
        border: 1px solid transparent;
        border-radius: 0;
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
    }

    .tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #dee2e6;
    }

    .tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff;
        border-bottom: 1px solid #dee2e6;
        border-right: 0;
        border-left: 1px solid #dee2e6;
    }

    .tabs-vertical-primary.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #026CB6;
    }

    .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
        color: #026CB6;
        background-color: #fff;
        border-color: #026CB6 #026CB6 #fff;
        border-bottom: 1px solid #026CB6;
        border-right: 0;
        border-left: 3px solid #026CB6;
    }

    .tabs-vertical-success.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #15ca20;
    }

    .tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
        color: #15ca20;
        background-color: #fff;
        border-color: #15ca20 #15ca20 #fff;
        border-bottom: 1px solid #15ca20;
        border-right: 0;
        border-left: 3px solid #15ca20;
    }

    .tabs-vertical-info.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #0dceec;
    }

    .tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
        color: #0dceec;
        background-color: #fff;
        border-color: #0dceec #0dceec #fff;
        border-bottom: 1px solid #0dceec;
        border-right: 0;
        border-left: 3px solid #0dceec;
    }

    .tabs-vertical-danger.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #fd3550;
    }

    .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
        color: #fd3550;
        background-color: #fff;
        border-color: #fd3550 #fd3550 #fff;
        border-bottom: 1px solid #fd3550;
        border-right: 0;
        border-left: 3px solid #fd3550;
    }

    .tabs-vertical-warning.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #ff9700;
    }

    .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
        color: #ff9700;
        background-color: #fff;
        border-color: #ff9700 #ff9700 #fff;
        border-bottom: 1px solid #ff9700;
        border-right: 0;
        border-left: 3px solid #ff9700;
    }

    .tabs-vertical-dark.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #223035;
    }

    .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
        color: #223035;
        background-color: #fff;
        border-color: #223035 #223035 #fff;
        border-bottom: 1px solid #223035;
        border-right: 0;
        border-left: 3px solid #223035;
    }

    .tabs-vertical-secondary.tabs-vertical .nav-tabs {
        border: 0;
        border-right: 1px solid #75808a;
    }

    .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
    .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
        color: #75808a;
        background-color: #fff;
        border-color: #75808a #75808a #fff;
        border-bottom: 1px solid #75808a;
        border-right: 0;
        border-left: 3px solid #75808a;
    }

    .nav-pills .nav-link {
        border-radius: .25rem;
        color: #223035;
        font-size: 15px;
        text-align: center;
        letter-spacing: 1px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 3px;
        padding: 12px 20px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        box-shadow: 0px 2px 2px 2px #04040408;
    }

    .nav-pills .nav-link:hover {
        background-color: #f4f5fa;
    }

    .nav-pills .nav-link i {
        margin-right: 2px;
        font-weight: 600;
    }

    .top-icon.nav-pills .nav-link i {
        margin: 0px;
        font-weight: 500;
        display: block;
        font-size: 20px;
        padding: 5px 0;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #026CB6;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
    }

    .nav-pills-success .nav-link.active,
    .nav-pills-success .show>.nav-link {
        color: #fff;
        background-color: #15ca20;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(21, 202, 32, .5);
    }

    .nav-pills-info .nav-link.active,
    .nav-pills-info .show>.nav-link {
        color: #fff;
        background-color: #0dceec;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
    }

    .nav-pills-danger .nav-link.active,
    .nav-pills-danger .show>.nav-link {
        color: #fff;
        background-color: #fd3550;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(253, 53, 80, .5);
    }

    .nav-pills-warning .nav-link.active,
    .nav-pills-warning .show>.nav-link {
        color: #fff;
        background-color: #ff9700;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(255, 151, 0, .5);
    }

    .nav-pills-dark .nav-link.active,
    .nav-pills-dark .show>.nav-link {
        color: #fff;
        background-color: #223035;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(34, 48, 53, .5);
    }

    .nav-pills-secondary .nav-link.active,
    .nav-pills-secondary .show>.nav-link {
        color: #fff;
        background-color: #75808a;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(117, 128, 138, .5);
    }

    .card .tab-content {
        padding: 1rem 0 0 0;
    }

    .z-depth-3 {
        /*-webkit-box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);*/
        -webkit-box-shadow: 0px 5px 6px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 5px 6px 0px rgba(0, 0, 0, 0.1);
    }
</style>
</head>

<body>
    <div class="container" style="margin-top: 75px; margin-bottom: 25px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-card-4 z-depth-3 mb-5">
                    <div class="card">
                        <div class="card-body text-center bg-primary rounded-top">
                            <div class="user-box">
                                <div class="left pUtama" id="left">
                                    <center>
                                        <?php
                                        if ($profil->foto != "") {
                                            echo '<img id="default-foto" alt="" style="width:111px;height: 111px;" src=" https://rumahtinggal.id/assets/img/customer/' . $profil->foto . '" class="img-thumbnail" />';
                                        } else {
                                            echo ' <img id="default-foto" alt="" style="width:111px;height: 111px;" src="https://cdn-a.shopicial.com/img/noavatar.png" class="img-thumbnail" />';
                                        }
                                        ?>
                                        <br>
                                        <span id="img_text"></span>
                                    </center>
                                </div>
                            </div>
                            <h4 class="mb-1 text-white"><?= $profil->nama_customer ?></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group shadow-none">
                                <li class="list-group-item">
                                    <div class="list-icon">
                                        <i class="fa fa-phone-square"></i>
                                    </div>
                                    <div class="list-details">
                                        <span>+<?= $profil->no_wa ?></span>
                                        <small>Nomor Telepon</small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="list-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="list-details">
                                        <span><?= $profil->email ?></span>
                                        <small>Email</small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="list-icon" style="padding-right: 33px;">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="list-details">
                                        <span><?= $profil->alamat ?></span>
                                        <small>Alamat</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <!-- <a href="#modalUbahCustomer" data-target-color="red" data-toggle="modal" >
                        <span class="hidden-xs text-black">Ubah</span>
                    </a> -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalUbahCustomer" style="background: #026CB6; border-color: #026CB6;"><i class="fa fa-pencil mr-2" aria-hidden="true" style="color:#fff;"></i>Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card z-depth-3 mb-5">
                    <div class="card-body">
                        <ul id="myTabs" class="nav nav-pills nav-pills-primary nav-justified">

                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i><span class="hidden-xs"><i aria-hidden="true" class="fa fa-folder-open"></i>Paket Desain (<span class="count-dokumen"></span>)</span></a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void();" id="btn-transaksi" data-target="#profile" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs"><i aria-hidden="true" class="fa fa-tags"></i> Riwayat Transaksi</span></a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void();" id="btn-favorit" data-target="#favorit" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs"><i aria-hidden="true" class="fa fa-heart-open"></i>Desain Favorit (<span class="count-produk"></span>)</span></span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane" id="profile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <h5 class="mt-2 mb-3"><span class="fa fa-tag ion-clock float-right"></span>Status Transaksi</h5> -->
                                        <section class="">
                                            <?php foreach ($transaksi as $trns) { ?>
                                                <div class="row">
                                                    <article class="card fl-left" style="display: table-row;width: 100%;background-color: #c6d9e566;color: #525252;margin-bottom: 10px;border-radius: 4px;position: relative;overflow: hidden;">
                                                        <section class="date">
                                                            <time datetime="23th feb">
                                                                <span><?= substr($trns->tgl_pembelian, 8, 2); ?></span>
                                                                <span>
                                                                    <?php
                                                                    switch (date("m", strtotime($trns->tgl_pembelian))) {
                                                                        case 1:
                                                                            $bulan = 'Januari';
                                                                            break;
                                                                        case 2:
                                                                            $bulan = 'Februari';
                                                                            break;
                                                                        case 3:
                                                                            $bulan = 'Maret';
                                                                            break;
                                                                        case 4:
                                                                            $bulan = 'April';
                                                                            break;
                                                                        case 5:
                                                                            $bulan = 'Mei';
                                                                            break;
                                                                        case 6:
                                                                            $bulan = 'Juni';
                                                                            break;
                                                                        case 7:
                                                                            $bulan = 'Juli';
                                                                            break;
                                                                        case 8:
                                                                            $bulan = 'Agustus';
                                                                            break;
                                                                        case 9:
                                                                            $bulan = 'September';
                                                                            break;
                                                                        case 10:
                                                                            $bulan = 'Oktober';
                                                                            break;
                                                                        case 11:
                                                                            $bulan = 'November';
                                                                            break;
                                                                        case 12:
                                                                            $bulan = 'Desember';
                                                                            break;
                                                                    }
                                                                    $publish = date() . ' ' . $bulan . ' <br> ' . date("Y", strtotime($trns->tgl_pembelian));
                                                                    ?>
                                                                    <?= $publish ?>
                                                                </span>
                                                            </time>
                                                        </section>
                                                        <section class="card-cont">
                                                            <small style="text-transform: capitalize;font-size: 90%;"><?= $trns->no_invoice ?></small>
                                                            <h2 class="text-grey" style="width: 340px;cursor: pointer;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" onclick="detailRumah(<?= $trns->id_rumah ?>)"><?= $trns->nama_rumah ?></h2>
                                                            <h3 style="cursor: pointer;" onclick="detailArsitek(<?= $trns->id_arsitek ?>)"><?= $trns->nama_arsitek ?></h3>
                                                            <?php
                                                            switch (date("m", strtotime($trns->tgl_expired))) {
                                                                case 1:
                                                                    $bulan = 'Januari';
                                                                    break;
                                                                case 2:
                                                                    $bulan = 'Februari';
                                                                    break;
                                                                case 3:
                                                                    $bulan = 'Maret';
                                                                    break;
                                                                case 4:
                                                                    $bulan = 'April';
                                                                    break;
                                                                case 5:
                                                                    $bulan = 'Mei';
                                                                    break;
                                                                case 6:
                                                                    $bulan = 'Juni';
                                                                    break;
                                                                case 7:
                                                                    $bulan = 'Juli';
                                                                    break;
                                                                case 8:
                                                                    $bulan = 'Agustus';
                                                                    break;
                                                                case 9:
                                                                    $bulan = 'September';
                                                                    break;
                                                                case 10:
                                                                    $bulan = 'Oktober';
                                                                    break;
                                                                case 11:
                                                                    $bulan = 'November';
                                                                    break;
                                                                case 12:
                                                                    $bulan = 'Desember';
                                                                    break;
                                                            }
                                                            $expired = date("d", strtotime($trns->tgl_expired)) . ' ' . $bulan . ' ' . date("Y", strtotime($trns->tgl_expired));
                                                            ?>
                                                            <?php
                                                            if ($trns->status == "1" || $trns->status == "2") {
                                                                echo '';
                                                            } else {
                                                                echo '<div class="mt-2 bold">Batas Pembayaran</div>
                                        <div class="form-inline">
                                          <div class="form-group">
                                            <i class="fa fa-calendar text-grey mr-2"></i>
                                            <span>' . $expired . '</span>
                                          </div>
                                           <div class="form-group ml-3">
                                            <i class="fa fa-clock-o text-grey mr-2"></i>
                                            <span>' . $trns->jam_pembelian . '</span>
                                          </div>
                                        </div> ';
                                                            }
                                                            ?>

                                                            <div class="mt-2 bold">Jenis Paket </div>
                                                            <div class="form-inline">
                                                                <div class="form-group">
                                                                    <i class="fa fa-gift text-grey mr-2"></i>
                                                                    <span><?= $trns->jenis_paket ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="mt-2 bold">Alamat Pengiriman </div>
                                                            <div class="form-inline">
                                                                <div class="form-group">
                                                                    <i class="fa fa-map-marker text-grey mr-2"></i>
                                                                    <span style="width: 300px;line-height: 20px;"><?= $trns->alamat_pengiriman ?></span>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            if ($trns->status == "0") {
                                                                echo '<a href="#" style="font-weight: 600;background-color:#f70000;pointer-events: none;font-size:15px;">Belum Bayar</a>';
                                                            } else if ($trns->status == "2") {
                                                                echo '<a href="#" style="font-weight: 600;background-color:#00a903;pointer-events: none;font-size:15px;">Lunas</a>';
                                                            } else {
                                                                echo '<a href="#" style="font-weight: 600;background-color:#00a903;pointer-events: none;font-size:15px;">Lunas</a>';
                                                            }
                                                            ?>
                                                        </section>
                                                        <div onclick="detailRumah(<?= $trns->id_rumah ?>)" style="position: absolute;color: #000;top: 15px;right: 38px;font-weight: 500;background: #fff;padding: 3px;cursor: pointer;" class="image">
                                                            <img src="<?= base_url('assets/img/thumbnail/' . $trns->foto) ?>" alt="user avatar" style="width: 115px;">
                                                        </div>
                                                        <div style="position: absolute;color: #000;top: 107px;right: 38px;font-weight: 500;background: #fff;padding: 4px;width: 121px;text-align: center;">Rp <?= number_format($trns->harga, 0, ',', '.') ?>
                                                        </div>
                                                        <div class="btn-demo" id="btn-color-targets">
                                                            <?php
                                                            if ($trns->status == "0") {
                                                                echo '<a href="#modalKonfirmasiPembayaran' . $trns->id_rumah . '" data-target-color="red" data-toggle="modal" class="btn btn-default " style="position: absolute;color: #fff;top: 150px;right: 13px;font-weight: 500;background: #00a903;padding: 9px;width: 171px;text-align: center;cursor: pointer;border-radius: 5px;font-size: 12px;">Konfirmasi Pembayaran</a>';
                                                            } else if ($trns->status == "2") {
                                                                echo '<div style="position: absolute;color: #fff;top: 150px;right: 13px;font-weight: 400;width: 171px;text-align: center;cursor: unset;font-size: 12px;border: 1px solid #ff9b00;background:#ff9b00;height: 31px;line-height: 28px;">Sedang Diproses</div>';
                                                            } else {
                                                                echo '<a href="#modalKonfirmasiPaketDiterima' . $trns->id_rumah . '" data-target-color="green" data-toggle="modal" class="btn btn-default " style="position: absolute;color: #fff;top: 150px;right: 13px;font-weight: 500;background: #00a903;padding: 9px;width: 171px;text-align: center;cursor: pointer;border-radius: 5px;font-size: 12px;">Konfirmasi Paket Diterima</a>';
                                                            }
                                                            ?>
                                                        </div>
                                                    </article>
                                                </div>

                                                <div class="modal fade modalKonfirmasiPembayaran" data-modal-color="" id="modalKonfirmasiPembayaran<?= $trns->id_rumah ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background: #026CB6">
                                                                <h4 class="modal-title" style="color: #fff; margin:0 auto;">Konfirmasi Pembayaran</h4>
                                                            </div>
                                                            <div class="modal-body" style="background: #f8f9fa">
                                                                <form id="kirimBuktiTransaksi<?= $trns->id_rumah ?>">
                                                                    <input class="form-control" type="text" name="id_rumah" value="<?= $trns->id_rumah ?>" hidden>
                                                                    <input class="form-control" type="text" name="id_customer" value="<?= $trns->id_customer ?>" hidden>

                                                                    <input class="form-control" type="text" name="paket" value="<?= $trns->paket ?>" hidden>
                                                                    <div class="form-group row">
                                                                        <label class="col-lg-12 col-form-label form-control-label text-center" style="color: #000">Unggah bukti transfer <br> <span style="color: #707070;"> (ukuran maksimal 2mb)</span></label>
                                                                        <div class="col-lg-12">
                                                                            <div id="dropzone-bukti<?= $trns->id_rumah ?>" class="dropzone dzone-bukti dropzone-bukti" style="margin: 0 auto;" action="#">
                                                                                <div class="fallback">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer" style="background: #f8f9fa;">
                                                                <button type="button" class="btn btn-link" data-dismiss="modal" style="background: red;border-color: red;color: white;border-radius: 4px;">Batal</button>
                                                                <button type="button" class="btn btn-link" data-dismiss="modal" style="background: #026CB6;border-color: #026CB6;color: white;border-radius: 4px;" onclick="kirimBuktiTransaksi(<?= $trns->id_rumah ?>)">Kirim</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="modal fade modalKonfirmasiPaketDiterima" data-modal-color="" id="modalKonfirmasiPaketDiterima<?= $trns->id_rumah ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background: #026cb6;">
                                                                <h4 class="modal-title" style="color: #fff; margin: 0 auto;">Konfirmasi Paket Diterima</h4>
                                                            </div>
                                                            <div class="modal-body" style="background: #f8f9fa;">
                                                                <form id="frm-ulasan">
                                                                    <input class="form-control" type="text" id="id_rumah<?= $trns->id_rumah ?>" value="<?= $trns->id_rumah ?>" hidden>
                                                                    <div class="form-group" id="rating-ability-wrapper" style="text-align: center;">
                                                                        <label class="control-label" for="rating" style="display: none;">
                                                                            <span class="field-label-info"></span>
                                                                            <input type="hidden" id="selected_rating<?= $trns->id_rumah ?>" name="rating" value="5" required="required">
                                                                        </label>
                                                                        <h1 class="bold rating-header m-0">
                                                                            <span class="selected-rating<?= $trns->id_rumah ?>">5</span>
                                                                            <span style="font-size: 22px;"> / 5</span>
                                                                        </h1>
                                                                        <button type="button" class="btnrating btnrating<?= $trns->id_rumah ?> btn-warn btn-default" data-attr="1" id="rating-star<?= $trns->id_rumah ?>-1">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </button>
                                                                        <button type="button" class="btnrating btnrating<?= $trns->id_rumah ?> btn-warn btn-default" data-attr="2" id="rating-star<?= $trns->id_rumah ?>-2">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </button>
                                                                        <button type="button" class="btnrating btnrating<?= $trns->id_rumah ?> btn-warn btn-default" data-attr="3" id="rating-star<?= $trns->id_rumah ?>-3">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </button>
                                                                        <button type="button" class="btnrating btnrating<?= $trns->id_rumah ?> btn-warn btn-default" data-attr="4" id="rating-star<?= $trns->id_rumah ?>-4">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </button>
                                                                        <button type="button" class="btnrating btnrating<?= $trns->id_rumah ?> btn-warn btn-default" data-attr="5" id="rating-star<?= $trns->id_rumah ?>-5">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="form-group row mt-4">
                                                                        <!-- <label class="col-lg-3 col-form-label form-control-label">Unggah Paket</label> -->
                                                                        <div class="col-lg-12">
                                                                            <div id="dropzone-review<?= $trns->id_rumah ?>" class="dropzone dzone-bukti dropzone-bukti dropzone-review" style="margin:0 auto;" action="#">
                                                                                <div class="fallback">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <textarea class="form-control" id="ulasan<?= $trns->id_rumah ?>" name="ulasan" placeholder="Tulis ulasan" style="border: 0;color: #000;font-weight: 300;background: #fff;" rows="3"></textarea>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer" style="background: #f8f9fa">
                                                                <button type="button" class="btn btn-link" data-dismiss="modal" style="background: red;border-color: red;color: white;border-radius: 4px;">Batal</button>
                                                                <button type="button" class="btn btn-link" data-dismiss="modal" style="background: #026CB6;border-color: #026CB6;color: white;border-radius: 4px;" onclick="simpanRiview(<?= $trns->id_rumah ?>)">Kirim</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
                                                <script type="text/javascript">
                                                    $(document).ready(function() {


                                                        if (window.location.hash == "#favorit") {
                                                            $("#btn-favorit").click();
                                                        } else if (window.location.hash == "#transaksi") {
                                                            $("#btn-transaksi").click();
                                                        }

                                                        $(window).on('hashchange', function() {
                                                            // $('h1').text(location.hash.slice(1));
                                                            $("#btn-" + location.hash.slice(1) + "").click();
                                                        });



                                                        $(".btnrating<?= $trns->id_rumah ?>").on('click', function(e) {
                                                            var previous_value = $("#selected_rating<?= $trns->id_rumah ?>").val();

                                                            var selected_value = $(this).attr("data-attr");
                                                            $("#selected_rating<?= $trns->id_rumah ?>").val(selected_value);

                                                            $(".selected-rating<?= $trns->id_rumah ?>").empty();
                                                            $(".selected-rating<?= $trns->id_rumah ?>").html(selected_value);

                                                            for (i = 1; i <= selected_value; ++i) {
                                                                $("#rating-star<?= $trns->id_rumah ?>-" + i).toggleClass('btn-warn');
                                                                $("#rating-star<?= $trns->id_rumah ?>-" + i).toggleClass('btn-default');
                                                            }

                                                            for (ix = 1; ix <= previous_value; ++ix) {
                                                                $("#rating-star<?= $trns->id_rumah ?>-" + ix).toggleClass('btn-warn');
                                                                $("#rating-star<?= $trns->id_rumah ?>-" + ix).toggleClass('btn-default');
                                                            }
                                                        });
                                                    });
                                                    Dropzone.autoDiscover = false;
                                                    var bukti_transaksi = new Dropzone("#dropzone-bukti<?= $trns->id_rumah ?>", {
                                                        url: "https://rumahtinggal.id/uploads/upload_bukti",
                                                        maxFileSize: 2,
                                                        parallelUploads: 1,
                                                        method: "POST",
                                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                                        paramName: "userfile",
                                                        dictInvalidFileType: "Jenis File Tidak Didukung",
                                                        addRemoveLinks: true,
                                                    });

                                                    bukti_transaksi.on("sending", function(file) {
                                                        file.token = Math.random();
                                                        $(".dz-details").remove();
                                                    });

                                                    bukti_transaksi.on("complete", function(file) {

                                                        $('#dropzone-bukti<?= $trns->id_rumah ?>').append("<input type='hidden' name='bukti_transaksi' id='" + file.lastModified + "' value='" + file.name + "' class='gbr'>");
                                                        $('.dz-details').addClass("change");
                                                        $('.dz-remove').addClass("trash");
                                                        $('.dz-remove').text("");
                                                        var images = $(".gbr[value != '']");
                                                        $('.dz-image').addClass("justify");
                                                        $('.dropzone .dz-preview .dz-image img[alt="' + images.first().val() + '"]').parent().addClass('aktif icon');
                                                    });


                                                    Dropzone.autoDiscover = false;
                                                    var foto_paket = new Dropzone("#dropzone-review<?= $trns->id_rumah ?>", {
                                                        url: "https://rumahtinggal.id/uploads/upload_review",
                                                        maxFileSize: 2,
                                                        parallelUploads: 1,
                                                        method: "POST",
                                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                                        paramName: "userfile",
                                                        dictInvalidFileType: "Jenis File Tidak Didukung",
                                                        addRemoveLinks: true,
                                                    });

                                                    foto_paket.on("sending", function(file) {
                                                        file.token = Math.random();
                                                        $(".dz-details").remove();
                                                    });

                                                    foto_paket.on("complete", function(file) {

                                                        $('#dropzone-review<?= $trns->id_rumah ?>').append("<input type='hidden' name='foto_paket' id='foto_paket' value='" + file.name + "' class='gbr'>");
                                                        $('.dz-details').addClass("change");
                                                        $('.dz-remove').addClass("trash");
                                                        $('.dz-remove').text("");
                                                        var images = $(".gbr[value != '']");
                                                        $('.dz-image').addClass("justify");
                                                        $('.dropzone .dz-preview .dz-image img[alt="' + images.first().val() + '"]').parent().addClass('aktif icon');
                                                    });
                                                </script>
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane active show" id="messages" style="/*scrollbar-width: none;-ms-overflow-style: none;overflow-y: scroll;height: 41em;*/">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <div class="alert-icon">
                                        <i class="icon-info"></i>
                                    </div>
                                    <div class="alert-message">
                                        <span><strong>Info!</strong> Belum ada dokumen yang Anda miliki.</span>
                                    </div>
                                </div>
                                <div id="dokumen">
                                </div>
                            </div>

                            <div class="tab-pane" id="favorit" style="/*scrollbar-width: none;-ms-overflow-style: none;overflow-y: scroll;height: 41em;*/">
                                <!-- <div class="alert alert-info alert-dismissible" role="alert"> -->
                                <div class="list-group" id="panel-filter">


                                    <input type="hidden" name="order" id="order" value="0">
                                    <!-- <div class="col-md-12"> -->
                                    <div class="row" style="margin: 0;padding-bottom: 10px;">
                                        <div class="col-md-5" style="padding: 4px 0 7px 5px;color: #000;font-size: 15px;">
                                            <div class="item-filter mb-1">
                                                <div id="custom-search-input" style="border-radius: 5px;">
                                                    <div class="input-group" style="border-radius: 5px;">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-lg" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                        </span>
                                                        <input type="text" class="form-control" name="cari_rumah" id="cari_rumah" style="border-radius: 0 5px 5px 0;" placeholder="Ketik Nama Desain" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-4" style="padding: 4px 0 7px 5px;">
                                            <div class="item-filter mb-1">
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
                                    </div>
                                    <!-- </div> -->





                                </div>

                                <div class="list-desain"></div>
                                <div class="spinner">
                                    <center><img src="<?= base_url('assets/gif/rt-loader.gif') ?>" style="padding: 2px;" width="35px" /></center>
                                </div>

                                <!-- </div> -->

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->

    <div class="modal fade" data-modal-color="" id="modalUbahCustomer" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="max-width:900px;">
            <div class="modal-content">
                <div class="modal-header" style="background: #026cb6;">
                    <h4 class="modal-title" style="color: #fff; margin: 0 auto;">Ubah Profil</h4>
                </div>
                <div class="modal-body" style="padding: 30px 44px;">
                    <form id="ubahCustomer" style="color: #000;">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="id_customer" value="<?= $profil->id_customer ?>" hidden>
                                <input class="form-control" type="text" name="nama_customer" value="<?= $profil->nama_customer ?>" placeholder="Nama lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Ubah Foto</label>
                            <div class="col-lg-9">
                                <div id="dropzone" class="dropzone dzone" action="#">
                                    <div class="fallback">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Tulis alamat" style="color: #000;font-weight: 300;background: #fff;" rows="3"><?= $profil->alamat ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nomor WA</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="no_wa" value="<?= $profil->no_wa ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" value="<?= $profil->email ?>" placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div style="margin: 0 auto;">
                                <button type="button" class="btn btn-link" data-dismiss="modal" style="background: red;border-color: red;color: white;border-radius: 4px;text-decoration: none;">Batal</button>
                                <input type="button" class="btn btn-primary" id="btn-simpan" value="Simpan Perubahan" onclick="ubahCustomer()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // if(history.replaceState) history.replaceState({}, "", "/");
        var id_customer;
        $(document).ready(function() {
            id_customer = Cookies.get('id_customer');
            dokumen();

            $('body').on('click', '#btn-color-targets > .btn', function() {
                var color = $(this).data('target-color');
                $('.modalKonfirmasiPembayaran,#modalSedangDiproses,.modalKonfirmasiPaketDiterima').attr('data-modal-color', color);
            });
        });

        function simpanRiview(index) {
            var rating = $('#selected_rating' + index + '').val();
            var ulasan = $('#ulasan' + index + '').val();
            var foto_paket = $('#foto_paket').val();
            var id_rumah = $('#id_rumah' + index + '').val();
            $.ajax({
                url: "<?php echo base_url('api/simpanRiview') ?>",
                type: "POST",
                data: {
                    "rating": rating,
                    "ulasan": ulasan,
                    "foto_paket": foto_paket,
                    "id_rumah": id_rumah,
                    "id_customer": id_customer
                },
                dataType: "JSON",
                success: function(data) {
                    toastr.success(data.Info, 'Informasi', opsi_toastr);
                    location.reload();
                },
                error: function(jqHR, texStatus, errorThrown) {}
            });
        }



        function ubahCustomer() {
            $('#btn-simpan').val("Simpan...");
            $.ajax({
                url: "<?php echo base_url() ?>api/ubahCustomer",
                type: "POST",
                data: $('#ubahCustomer :input').serialize(),
                dataType: "JSON",
                success: function(data) {
                    toastr.success(data.Info, 'Informasi', opsi_toastr);
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#btn-simpan').html("<strong><i class='fa fa-check'></i> SIMPAN</strong>");
                }
            });
        }

        function dokumen() {
            $.ajax({
                url: "<?php echo base_url('api/getDokumen/') ?>" + id_customer,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    $('.count-dokumen').append(data.length);
                    if (data != '') {
                        $('.alert-message').html(`<span><strong>Info!</strong> Klik download, dan dapatkan file Anda.</span>`);
                        $.each(data, function(i, item) {
                            $('#dokumen').append(`<div class="col-md-12 p0 grid"  style="margin-bottom: 1em;">
                    <div class="product-grid">
                        <div style="top: 0px;padding:12px;" class="col-md-12 product-content">
                          <div style="height: auto;position: absolute;" class="col-md-3 product-image desain">
                                <a href="javascript:void(0)" class="image" onclick="detailRumah(` + item.id_rumah + `)" style="box-shadow: 0px 50px 10px rgba(0, 0, 0, 0.62);">
                                    <img class="pic" src="https://rumahtinggal.id/assets/img/desain/` + item.foto + `">
                                </a>
                            </div>
                            <div class="title" title="" onclick="detailRumah(` + item.id_rumah + `)" style="text-align: end;font-size: 21px;height: auto;"><strong>` + item.nama_rumah + `</strong></div> 
                            <div class="form-inline">
                                <div class="form-group ml-auto" >
                                    <div style="text-align: end; cursor:pointer;" onclick="detailArsitek(` + item.id_arsitek + `)">By ` + item.nama_arsitek + `   </div> 
                                    <div class="jstars ml-3" data-value="` + item.rating + `" data-color="gold" data-size="17px"></div>
                                </div>
                            </div>

                            <div class="product-detail">
                               <table class="table table-hover">
                                    <tbody>                                    
                                    ` + (item.paket == 1 ? `<tr>
                                            <td> 
                                               <span class="float-right font-weight-bold" style="padding: 0px;"> <a href="<?= base_url('assets/dokumen/dokumen_gratis/') ?>` + item.laporan_desain + `">Download</a></span> <img class="palet-img" style="width: 25px;" src="https://rumahtinggal.id/assets/img/pdf.png"> Laporan Desain
                                            </td>
                                        </tr>` : `<tr>
                                            <td> 
                                               <span class="float-right font-weight-bold" style="padding: 0px;"> <a href="<?= base_url('assets/dokumen/dokumen_gratis/') ?>` + item.laporan_desain + `">Download</a></span> <img class="palet-img" style="width: 25px;" src="https://rumahtinggal.id/assets/img/pdf.png"> Laporan Desain
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold" style="padding: 0px;"><a href="<?= base_url('assets/dokumen/') ?>` + item.ded + `">Download</a></span> <img class="palet-img" style="width: 25px;" src="https://rumahtinggal.id/assets/img/pdf.png">Detailed Engineering Design (DED) 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold" style="padding: 0px;"><a href="<?= base_url('assets/dokumen/') ?>` + item.rab + `">Download</a></span> <img class="palet-img" style="width: 25px;" src="https://rumahtinggal.id/assets/img/pdf.png">Rencana Anggaran Biaya (RAB) 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="float-right font-weight-bold" style="padding: 0px;"><a href="<?= base_url('assets/dokumen/') ?>` + item.rks + `">Download</a></span> <img class="palet-img" style="width: 25px;" src="https://rumahtinggal.id/assets/img/pdf.png">Rencana Kerja dan Syarat-Syarat (RKS) 
                                            </td>
                                        </tr>`) + `
                                        
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>`);
                        });
                    }
                    $('<script src="https://estimator.id/arsi-hack/assets/js/jstars.min.js"></' + 'script>').appendTo('#dokumen');
                },
                error: function(jqXHR, textStatus, errorThrown) {}
            });
        }

        // function kirimBuktiTransaksi(index) {
        //         $('#btn-kirim-bukti').val("Kirim...");
        //             $.ajax({
        //                 url : "<?php echo base_url() ?>api/kirimBuktiTransaksi",
        //                 type: "POST",
        //                 data: $('#kirimBuktiTransaksi'+index+' :input').serialize(),
        //                 dataType: "JSON",
        //                 success: function(data){
        //                     toastr.success(data.Info, 'Informasi', opsi_toastr);
        //                     location.reload();   
        //                 },
        //                 error: function (jqXHR, textStatus, errorThrown){
        //                   $('#btn-kirim-bukti').html("<strong><i class='fa fa-check'></i> Kirim</strong>");
        //                 }
        //             });
        //         }

        function detailRumah(id) {
            location.href = "<?= base_url() . 'detail/' ?>" + id;
        }

        function detailArsitek(id) {
            location.href = "<?= base_url() . 'profil_arsitek/' ?>" + id;
        }

        Dropzone.autoDiscover = false;
        var foto_upload = new Dropzone("#dropzone", {
            url: "https://rumahtinggal.id/uploads/upload_files",
            maxFiles: 1,
            maxFileSize: 2,
            parallelUploads: 1,
            method: "POST",
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            paramName: "userfile",
            dictInvalidFileType: "Jenis File Tidak Didukung",
            addRemoveLinks: true,
            accept: function(file, done) {
                console.log("uploaded");
                done();
            },
            init: function() {
                this.on("maxfilesexceeded", function(file) {
                    toastr.warning('Hanya dapat mengunggah 1 foto', 'Informasi', opsi_toastr);
                    this.removeFile(this.files[1]);
                    var images = $(".gbr[value != '']");
                    $('.pUtama img').attr("src", "https://rumahtinggal.id/assets/img/customer/" + images.val());
                });
            }
        });

        $(function() {
            $('#ubahCustomer .dropzone').after("<div style='color:#6f6e6e;'>(ukuran maksimal 2mb)</div>");
            $('.dropzone-review').after("<div style='color:#6f6e6e;text-align:center;'>(ukuran maksimal 2mb)</div>");
            $("#dropzone .dz-message").append("<input type='hidden' name='foto' id='foto-auto' value='<?= $profil->foto ?>' class='gbr'>");
            $(".dz-details").remove();
            $('.dz-remove').addClass("trash");
            $('.dz-remove').text("");
        })

        foto_upload.on("sending", function(file) {
            file.token = Math.random();
            $(".dz-details").remove();
        });

        foto_upload.on("complete", function(file) {

            $('#dropzone').append("<input type='hidden' name='foto' id='" + file.lastModified + "' value='" + file.name + "' class='gbr'>");
            $('.dz-details').addClass("change");
            $('.dz-remove').addClass("trash");
            $('.dz-remove').text("");
            var images = $(".gbr[value != '']");
            $('.pUtama img').attr("src", "https://rumahtinggal.id/assets/img/customer/" + images.val());
            $('.pUtama img').attr("alt", images.first().val());
            $('.pUtama input').attr("value", images.first().val());
            $('.dz-image').addClass("justify");
            $('.dropzone .dz-preview .dz-image img[alt="' + images.first().val() + '"]').parent().addClass('aktif icon');
        });


        addRemoveLinks: true,
            foto_upload.on("removedfile", function(data) {
                var name = data.name;
                var id = data.lastModified;
                $('#' + id).remove();
                $('input[id="foto-auto]').remove();
                var images = $(".gbr[value != '']");
                $('.pUtama img').attr("src", "https://cdn-a.shopicial.com/img/noavatar.png");
                $('.pUtama img').attr("alt", images.first().val());
                $('.pUtama input').attr("value", images.first().val());
                $('.dz-image').addClass("justify");
                $('.dropzone .dz-preview .dz-image img[alt="' + images.first().val() + '"]').parent().addClass('aktif icon');

                $.ajax({
                    url: "https://rumahtinggal.id/uploads/remove",
                    data: {
                        "name": name,
                        request: 2
                    },
                    type: "POST",
                    cache: false,
                    dataType: "JSON",
                });

                var _ref;
                return (_ref = data.previewElement) != null ? _ref.parentNode.removeChild(data.previewElement) : void 0;
            });

        function initDropzones() {
            $('.dropzone').each(function() {
                let dropzoneControl = $(this)[0].dropzone;
                if (dropzoneControl) {
                    dropzoneControl.destroy();
                }
            });
        }
        $('.dz-message').html(
            "<i class='fa fa-upload mr-2 ml-2' aria-hidden='true'></i><span style='color: #5e5e5e;font-size: 12px;'>Unggah disini</span>"
        );

        addRemoveLinks: true,
            bukti_transaksi.on("removedfile", function(data) {
                var name = data.name;
                var id = data.lastModified;
                $('#' + id).remove();
                var images = $(".gbr[value != '']");
                $('.dz-image').addClass("justify");
                $('.dropzone .dz-preview .dz-image img[alt="' + images.first().val() + '"]').parent().addClass('aktif icon');

                $.ajax({
                    url: "https://rumahtinggal.id/uploads/remove_bukti",
                    data: {
                        "name": name,
                        request: 2
                    },
                    type: "POST",
                    cache: false,
                    dataType: "JSON",
                });

                var _ref;
                return (_ref = data.previewElement) != null ? _ref.parentNode.removeChild(data.previewElement) : void 0;
            });

        function initDropzones() {
            $('.dropzone').each(function() {
                let dropzoneControl = $(this)[0].dropzone;
                if (dropzoneControl) {
                    dropzoneControl.destroy();
                }
            });
        }





















        var timer;
        $(document).ready(function() {
            getSummaryKatalog();
            ias.bind();
            $('#lebar_lahan,#panjang_lahan,#harga_konstruksi,#lantai,#jum_kamar_tidur,.ruang_lain,.gaya_desain,#inputGroupSelect02,#order,#cari_rumah').on('change', function() {
                clearTimeout(timer);
                timer = setTimeout(function() {
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
            //           getSummaryKatalog();
            //        ias.next();
            //} );

            //$('<script src="https://estimator.id/arsi-hack/assets/js/jstars.min.js"></' + 'script>').appendTo('.list-desain');

            $("#cari_rumah").on("input", function(e) {
                clearTimeout(timer);
                timer = setTimeout(function() {
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
                type: 'POST',
                url: "<?= base_url('api/getSummaryKatalogDaftarProdukFavorit') ?>",
                dataType: "JSON",
                data: $('#panel-filter :input').serialize(),
                success: function(data) {
                    $('.count-produk').append(data);
                    $('#count-rumah').html(data + ' desain rumah');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
                }
            });

        }

        function sukaRumah(id_rumah) {
            let id_customer = Cookies.get('id_customer', {
                domain: 'rumahtinggal.id'
            });
            if (id_customer != null && id_customer != '') {
                let elm_stat = $('.like[data-id="' + id_rumah + '"] .value');
                let jum_stat = elm_stat.text();
                let elm_like = $('.like[data-id="' + id_rumah + '"] .fa');
                if (elm_like.hasClass('fa-heart-o')) {
                    elm_like.removeClass('fa-heart-o').addClass('fa-heart').css('color', 'red');
                    jum_stat++;

                    $.ajax({
                        url: "<?= base_url('api/simpanDisukai') ?>",
                        type: "POST",
                        data: {
                            "id_rumah": id_rumah,
                            "id_customer": id_customer,
                            "suka": 1
                        },
                        dataType: "JSON",
                        success: function(data) {}
                    });
                } else {
                    elm_like.removeClass('fa-heart').addClass('fa-heart-o').css('color', '#026cb6');
                    jum_stat--;

                    $.ajax({
                        url: "<?= base_url('api/hapusDisukai/') ?>" + id_rumah + "/" + id_customer,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data) {}
                    });
                }
                elm_stat.text(jum_stat);
            } else $('#ModalLogin').modal('show');
        }

        function getDesainItem(page, data) {
            let biaya = data.lantai == '1' ? 3500000 * data.luas_bangunan : 4500000 * data.luas_bangunan;
            let promo = data.promo != '0' ? '<div class="ribbon"><span class="ribbon-promo">Cut-Off ' + data.promo + '%</span></div>' : '';
            let template = `<div class="col-md-3 col-sm-6 p0 grid">
            <div class="product-grid page-` + page + `" data-id="${data.id_rumah}">
            ` + promo + `
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
                        <p>Biaya konstruksi <span style="font-weight: 400;" data-tootik="Estimasi awal" data-tootik-conf="square">Rp` + number_format(biaya, 0, ',', '.') + `</span></p>
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

        var params = null,
            page = 0;

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

            return fetch('<?= base_url('api/getKatalogDaftarProdukFavorit') ?>', fetchData)
                .then(response => response.json())
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
            $('.product-rating .rating').jsRapStar({
                enabled: false
            });

            let id_customer = Cookies.get('id_customer', {
                domain: 'rumahtinggal.id'
            });
            if (id_customer != null && id_customer != '') {
                $.ajax({
                    url: "<?= base_url('api/getRumahSuka/') ?>" + id_customer,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data != '') {
                            $.each(data, function(i, item) {
                                let id_rumah = item.id_rumah;
                                $('.like[data-id="' + id_rumah + '"] .fa').removeClass('fa-heart-o').addClass('fa-heart').css('color', 'red');
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

            if (isMobile() == true) {
                $('.product-grid .image, .product-grid .title').prop('onclick', '').on('click', function(e) {
                    $(this).trigger('hover');
                });
            }
        });
    </script>