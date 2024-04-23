<?php defined('BASEPATH') or exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'DemoController';



$route['404_override'] = '';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

$route['koleksi'] = 'DesainController/index';

$route['kontak'] = 'KontakController/index';

$route['pricing'] = 'PricingController/index';

$route['tentangKami'] = 'TentangKamiController/index';

// $route['beranda'] = 'BerandaController/index';

$route['beranda'] = 'BerandaController/katalog';

$route['material'] = 'BerandaController/material';

$route['api/getBannerHeader'] = 'BerandaController/getBannerHeader';

// $route['detail_produk/(:any)'] = 'BerandaController/detail_produk/$1';

$route['profil_arsitek/(:any)'] = 'DetailController/profil_arsitek/$1';

$route['sampel_desain'] = 'SampleProjectController/index';

$route['sampel_desain_coba'] = 'SampleProjectController/sampel_desain_coba';

// $route['assessment'] = 'AssessmentController/index';

$route['assessment'] = 'DemoAssessmentController/index';

$route['api/getKatalogProduk'] = 'DesainController/getKatalogProduk';

$route['api/getSummaryKatalogProduk'] = 'DesainController/getSummaryKatalogProduk';

$route['api/getKatalogProdukPopular'] = 'DesainController/getKatalogProdukPopular';

$route['api/getKatalogProdukFavorit'] = 'DesainController/getKatalogProdukFavorit';

$route['api/filterProduk'] = 'DesainController/filterProduk';

// search

// $route['api/simpanTerm/(:any)'] = 'SearchController/simpanTerm/$1';

// $route['api/getFrequentlySearchedTerms/(:any)'] = 'SearchController/getFrequentlySearchedTerms/$1';

// detail

$route['api/simpanDilihat/(:any)'] = 'DetailController/simpanDilihat/$1';

$route['api/getRating/(:any)'] = 'DetailController/getRating/$1';

$route['api/getRatingSatu/(:any)'] = 'DetailController/getRatingSatu/$1';

$route['api/getRatingDua/(:any)'] = 'DetailController/getRatingDua/$1';

$route['api/getRatingTiga/(:any)'] = 'DetailController/getRatingTiga/$1';

$route['api/getRatingEmpat/(:any)'] = 'DetailController/getRatingEmpat/$1';

$route['api/getRatingLima/(:any)'] = 'DetailController/getRatingLima/$1';

// $route['detail/(:any)'] = 'DetailController/detail_new/$1';

$route['api/detail/(:any)'] = 'DetailController/index/$1';

$route['api/getDetailKonsep/(:any)'] = 'DetailController/getDetailKonsep/$1';

$route['api/getDetailKonsepDesain/(:any)'] = 'DetailController/getDetailKonsepDesain/$1';

$route['api/getDetailDenahLantai1/(:any)'] = 'DetailController/getDetailDenahLantai1/$1';

$route['api/getDetailDenahLantai2/(:any)'] = 'DetailController/getDetailDenahLantai2/$1';

$route['api/getDetailDenahLantai3/(:any)'] = 'DetailController/getDetailDenahLantai3/$1';

$route['api/getDetailFotoDenahLantai1/(:any)'] = 'DetailController/getDetailFotoDenahLantai1/$1';

$route['api/getDetailFotoDenahLantai2/(:any)'] = 'DetailController/getDetailFotoDenahLantai2/$1';

$route['api/getDetailFotoDenahLantai3/(:any)'] = 'DetailController/getDetailFotoDenahLantai3/$1';

$route['api/getDetailFotoDenah/(:any)'] = 'DetailController/getDetailFotoDenah/$1';

$route['api/getDetailSpesifikasi/(:any)'] = 'DetailController/getDetailSpesifikasi/$1';

$route['api/getDetailGayaDesain/(:any)'] = 'DetailController/getDetailGayaDesain/$1';

$route['api/getRumahTerjual/(:any)'] = 'DetailController/getRumahTerjual/$1';

$route['api/getKatalogProdukTerbaru'] = 'DesainController/getKatalogProdukTerbaru';

//$route['api/getRumahSerupa'] = 'DetailController/getRumahSerupa';

$route['api/getRumahSerupa/(:any)'] = 'DetailController/getRumahSerupa/$1';

$route['api/getAssessmentProduk'] = 'AssessmentController/getAssessmentProduk';

$route['api/getAssessmentProdukDemo'] = 'DemoAssessmentController/getAssessmentProduk';

$route['api/getRumahPromo'] = 'DesainController/getRumahPromo';



$route['detail_new/(:any)'] = 'DetailController/detail_new/$1';



// Layanan Pengguna

$route['kebijakan_privasi'] = 'LayananController/kebijakan_privasi';

$route['syarat_ketentuan'] = 'LayananController/syarat_ketentuan';

$route['cara_kerja'] = 'LayananController/cara_kerja';

$route['faq'] = 'LayananController/faq';



// customer

$route['login'] = 'CustomerController/index';

$route['logout'] = 'CustomerController/logout';

$route['api/login'] = 'CustomerController/loginCustomer';

$route['api/daftar'] = 'CustomerController/daftarCustomer';

$route['api/mintaOTP/(:any)/(:any)'] = 'CustomerController/mintaOTP/$1/$2';

$route['api/verifikasiOTP/(:any)/(:any)/(:any)'] = 'CustomerController/verifikasiOTP/$1/$2/$3';

$route['api/getCustomer/(:any)'] = 'CustomerController/getCustomer/$1';

$route['api/getCustomerById/(:any)'] = 'CustomerController/getCustomerById/$1';

$route['profil/(:any)'] = 'CustomerController/profil/$1';

$route['api/ubahCustomer'] = 'CustomerController/ubahCustomer';

$route['api/uploadFotoCustomer'] = 'CustomerController/uploadFotoCustomer';

$route['api/hapusFotoCustomer'] = 'CustomerController/hapusFotoCustomer';

$route['api/getAktifitas/(:any)'] = 'CustomerController/getAktifitas/$1';

$route['api/kirimBuktiTransaksi'] = 'CustomerController/kirimBuktiTransaksi';

$route['api/kirimBuktiTransaksiStatus'] = 'CustomerController/kirimBuktiTransaksiStatus';

$route['api/simpanRiview'] = 'CustomerController/simpanRiview';

$route['api/loginSSO'] = 'CustomerController/loginSSO';

$route['api/loginGoogle'] = 'CustomerController/login';

$route['daftarFavorit/(:any)'] = 'CustomerController/daftarFavorit/$1';

$route['api/getKatalogDaftarProdukFavorit'] = 'CustomerController/getKatalogDaftarProdukFavorit';

$route['api/getSummaryKatalogDaftarProdukFavorit'] = 'CustomerController/getSummaryKatalogDaftarProdukFavorit';

$route['api/getCustomerId'] = 'CustomerController/getCustomerId';

$route['api/loginAkun/(:any)/(:any)'] = 'CustomerController/loginAkun/$1/$2';

$route['api/loginGoogle/(:any)'] = 'CustomerController/loginGoogle/$1';

$route['api/sendMail/(:any)'] = 'CustomerController/sendMail/$1';

$route['reset_password/(:any)'] = 'CustomerController/resetPassword/$1';

$route['api/getResetPassword/(:any)/(:any)'] = 'CustomerController/getResetPassword/$1/$2';

$route['api/getCountDownloadDokumen/(:any)'] = 'DesainController/getCountDownloadDokumen/$1';

$route['api/getDokumenRumahGratis/(:any)'] = 'DesainController/getDokumenRumahGratis/$1';
$route['api/getNotifSubscribe/(:any)'] = 'CustomerController/getNotifSubscribe/$1';
$route['api/getPenggunaBayar/(:any)'] = 'CustomerController/getPenggunaBayar/$1';


// pembelian

$route['paket/(:any)'] = 'PembelianController/paket/$1';

$route['pembelian/(:any)/(:any)'] = 'PembelianController/pembelian/$1/$2';

$route['invoice/(:any)'] = 'PembelianController/invoice/$1';

$route['cetak_invoice/(:any)'] = 'PembelianController/cetak_invoice/$1';

$route['api/simpanPembelian'] = 'PembelianController/simpanPembelian';

$route['paket_pembelian/(:any)'] = 'PembelianController/paket_pembelian/$1';

$route['checkout/(:any)/(:any)'] = 'PembelianController/checkout/$1/$2';

$route['api/simpanPembelianGratis'] = 'PembelianController/simpanPembelianGratis';

$route['pembelian_paket/(:any)/(:any)'] = 'PembelianController/pembelian_paket/$1/$2';




// pembayaran
$route['api/bayarTagihan'] = 'MidtransCobaController/bayarTagihanMidtrans';
$route['api/simpanPembayaran'] = 'MidtransCobaController/simpanPembayaranMidtrans';
$route['api/getInvoiceTagihan/(:any)'] = 'MidtransCobaController/getInvoiceTagihan/$1';
$route['api/generateInvoiceTagihan/(:any)'] = 'MidtransCobaController/generateInvoiceTagihan/$1';
$route['api/cetakInvoiceMidtrans/(:any)'] = 'MidtransCobaController/cetak_invoice_midtrans/$1';
$route['api/notifikasiPembayaran'] = 'MidtransCobaController/notifikasiPembayaran';

// arsitek

$route['arsitek'] = 'ProfilArsitekController/arsitek';

$route['api/getDetailArsitek/(:any)'] = 'DetailController/getDetailArsitek/$1';

$route['api/getProdukArsitek/(:any)'] = 'DetailController/getProdukArsitek/$1';

$route['api/getPortofolioArsitek/(:any)'] = 'DetailController/getPortofolioArsitek/$1';

$route['api/getKatalogProdukArsitek/(:any)'] = 'DesainController/getKatalogProdukArsitek/$1';

$route['api/getKatalogProdukFilterArsitek/(:any)'] = 'DesainController/getKatalogProdukFilterArsitek/$1';



// artikel

$route['artikel'] = 'ArtikelController/index';

$route['detail-artikel/(:any)'] = 'ArtikelController/detail_artikel/$1';

$route['api/getArtikel'] = 'ArtikelController/getArtikel';

$route['api/getArtikel/(:any)'] = 'ArtikelController/getArtikel/$1';

$route['api/getDetailArtikel/(:any)'] = 'ArtikelController/getDetailArtikel/$1';

$route['api/getArtikelMuka'] = 'ArtikelController/getArtikelMuka';

$route['api/getArtikelMukaRight'] = 'ArtikelController/getArtikelMukaRight';

$route['api/getKatalogArtikel'] = 'DesainController/getKatalogArtikel';

$route['cari_artikel'] = 'DemoController/artikel_search';



// ulasan

$route['api/simpanUlasan'] = 'DetailController/simpanUlasan';

$route['api/getUlasan/(:any)'] = 'DetailController/getUlasan/$1';
$route['api/ubahUlasan'] = 'DetailController/ubahUlasan';
$route['api/getUlasanCustomer/(:any)/(:any)'] = 'DetailController/getUlasanCustomer/$1/$2';



// disukai

$route['api/simpanDisukai'] = 'DetailController/simpanDisukai';

$route['api/hapusDisukai/(:any)/(:any)'] = 'DetailController/hapusDisukai/$1/$2';

$route['api/rumahSuka/(:any)'] = 'DetailController/rumahSuka/$1';

$route['api/rumahBatalSuka/(:any)'] = 'DetailController/rumahBatalSuka/$1';

$route['api/getRumahSuka/(:any)'] = 'DetailController/getRumahSuka/$1';



//dokumen 

$route['api/getDokumen/(:any)'] = 'CustomerController/getDokumen/$1';



//data filter

$route['api/getLebarPanjangLahan'] = 'AssessmentController/getLebarPanjangLahan';

$route['api/getJumlahLantai'] = 'AssessmentController/getJumlahLantai';

$route['api/getMukaBangunan'] = 'AssessmentController/getMukaBangunan';

$route['api/getJumlahKamarTidur'] = 'AssessmentController/getJumlahKamarTidur';

$route['api/getRuangLain'] = 'AssessmentController/getRuangLain';

$route['api/getGayaDesain'] = 'AssessmentController/getGayaDesain';

$route['api/getMaterialBangunan'] = 'AssessmentController/getMaterialBangunan';





$route['api/simpanDataDownload/(:any)/(:any)'] = 'CustomerController/simpanDataDownload/$1/$2';

$route['api/getDataDownload/(:any)'] = 'CustomerController/getDataDownl
oad/$1';

$route['api/getDataBeli1/(:any)'] = 'CustomerController/getDataBeli1/$1';

$route['api/getDataBeli2/(:any)'] = 'CustomerController/getDataBeli2/$1';

$route['api/getDataBeli3/(:any)'] = 'CustomerController/getDataBeli3/$1';





//wilayah

$route['api/getListWilayahProvinsi'] = 'WilayahController/getListWilayahProvinsi';

$route['api/getListWilayahKabupaten'] = 'WilayahController/getListWilayahKabupaten';

$route['api/getListWilayahKecamatan'] = 'WilayahController/getListWilayahKecamatan';

$route['api/getListWilayahKelurahan'] = 'WilayahController/getListWilayahKelurahan';



$route['api/ubahAlamatCustomer'] = 'PembelianController/ubahAlamatCustomer';



$route['api/getIsDownloadDokumen/(:any)/(:any)'] = 'DesainController/getIsDownloadDokumen/$1/$2';



/*$route['api/getNamaRumah'] = 'DesainController/getNamaRumah';

$route['detail_new/(:any)'] = 'DetailController/detail_new/$1';

$route['api/getDokumenRumahGratis/(:any)'] = 'DesainController/getDokumenRumahGratis/$1';

$route['api/getCountDownloadDokumen/(:any)'] = 'DesainController/getCountDownloadDokumen/$1';*/

//demo
$route['demo'] = 'DemoController/index';
// $route['detail_koleksi/(:any)'] = 'DemoController/detail_koleksi/$1';
$route['detail_koleksi/(:any)'] = 'DetailController/detail_new/$1';
$route['ubah_profil_mobile/(:any)'] = 'DemoController/profilMobile/$1';
$route['ubah_sandi_mobile'] = 'DemoController/UbahSandiMobile';
$route['cara_kerja'] = 'DemoController/caraKerja';
$route['unduh_dokumen/(:any)'] = 'DemoController/unduhDokumen/$1';
// $route['demo/invoice/(:any)'] = 'DemoController/invoice/$1';
// $route['demo/material'] = 'DemoController/material';
$route['detail_material/(:any)'] = 'DemoController/detailMaterial/$1';
$route['faq'] = 'DemoController/faq';
// $route['demo/profil_arsitek/(:any)'] = 'DemoController/profil_arsitek/$1';
// $route['demo/artikel'] = 'DemoController/artikel';

$route['kategori_artikel'] = 'DemoController/kategori_artikel';
// $route['demo/detail_artikel/(:any)'] = 'DemoController/detail_artikel/$1';
