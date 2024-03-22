<?php

defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
class DemoController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Memuat model DetailModel
        $this->load->model('DetailModel');
        $this->load->model('DesainModel');
        $this->load->model('ArtikelModel');
        $this->load->model('CustomerModel');
        $this->load->model('PembelianModel');
        // $this->load->model('SearchModel');
        $this->load->model('BerandaModel');
    }

    public function index()
    {
        $data['halaman'] = 'demo/konten';
        $data['title'] = 'RumahTinggal.id - Marketplace Desain Rumah';
        // $data['produk_promo'] = $this->DesainModel->getRumahPromo()->result();
        $data['produk_favorit'] = $this->DesainModel->getKatalogProdukFavorit()->result();
        $data['produk_popular'] = $this->DesainModel->getKatalogProdukPopular()->result();
        $data['produk_body'] = $this->DesainModel->getKatalogProdukPopularBody()->result();
        $data['banner_mobile'] = $this->BerandaModel->getBannerMobile()->result();;
        $data['produk_terbaru'] = $this->DesainModel->getRumahTerbaru()->result();
        $data['artikel'] = $this->ArtikelModel->getArtikel()->result();
        // $data['frequent_terms'] = $this->SearchModel->getFrequentlySearchedTerms()->result();
        $data['jumlah_rumah'] = $this->DesainModel->getJumlahRumah()->row()->jumlah_rumah;
        $data['jumlah_unduh'] = $this->BerandaModel->getJumlahUnduh()->row()->jumlah_unduh;
        $data['jumlah_pengunjung'] = $this->BerandaModel->getJumlahPengunjung()->row()->jumlah_pengunjung;
        $data['range_panjang_lahan'] = $this->DesainModel->getRangePanjangLahan()->row();
        $data['range_lebar_lahan'] = $this->DesainModel->getRangeLebarLahan()->row();
        $data['gaya_desain'] = $this->DesainModel->getGayaDesain()->result();
        $this->load->view('demo/layout/layout', $data);
    }

    public function koleksi()
    {
        $data['halaman'] = 'demo/koleksi';
        $data['title'] = 'Koleksi';
        $data['produk_favorit'] = $this->DesainModel->getKatalogProdukFavorit()->result();
        $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew()->result();

        $sort = $this->input->get('sort');

        // Menangani logika pengurutan sesuai dengan opsi yang dipilih
        switch ($sort) {
            case 'populer':
                $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('populer')->result();
                break;
            case 'terbaru':
                $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('terbaru')->result();
                break;
            case 'harga_terendah':
                $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('harga_terendah')->result();
                break;
            case 'harga_tertinggi':
                $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('harga_tertinggi')->result();
                break;
            default:
                // Default: Paling Sesuai atau urutan default lainnya
                $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew()->result();
                break;
        }

        $this->load->view('demo/layout/layout', $data);
    }

    public function masuk()
    {
        $data['halaman'] = 'demo/masuk';
        $data['title'] = 'Masuk Akun';
        $data['jumlah_rumah'] = $this->DesainModel->getJumlahRumah()->row()->jumlah_rumah;
        $data['google_client_id'] = '619189282883-54euurh55b0od41supra7n7eoksj2jbu.apps.googleusercontent.com';
        log_message('error', 'google id' . var_export($data['google_client_id'], true));
        $this->load->view('demo/layout/layout', $data);
    }

    public function daftar()
    {
        $data['halaman'] = 'demo/daftar';
        $data['title'] = 'Daftar Akun';
        $data['jumlah_rumah'] = $this->DesainModel->getJumlahRumah()->row()->jumlah_rumah;
        $data['google_client_id'] = "619189282883-54euurh55b0od41supra7n7eoksj2jbu.apps.googleusercontent.com";
        $this->load->view('demo/layout/layout', $data);
    }

    public function layanan()
    {
        $this->load->model('DetailModel');

        $data['halaman'] = 'demo/layanan';
        $data['title'] = 'Layanan';
        $data['arsitek'] = $this->DetailModel->getAllArsitek();
        $this->load->view('demo/layout/layout', $data);
    }


    public function detail_koleksi($id_rumah)
    {
        $data['halaman'] = 'demo/detail_koleksi';
        $data['title'] = 'Detail';
        $data['id_rumah'] = $id_rumah;
        $data['produk_popular'] = $this->DesainModel->getKatalogProdukPopular()->result();
        $data['konsep'] = $this->DetailModel->getDetailKonsep($id_rumah)->row();
        $data['konsep_desain'] = $this->DetailModel->getDetailKonsepDesain($id_rumah)->row();
        $data['interior'] = $this->DetailModel->getDetailFotoDenahLantai1($id_rumah)->row();
        $data['interior2'] = $this->DetailModel->getDetailFotoDenahLantai2($id_rumah)->row();
        $data['interior3'] = $this->DetailModel->getDetailFotoDenahLantai3($id_rumah)->row();
        $data['terjual'] = $this->DetailModel->getRumahTerjual($id_rumah)->row();
        $data['gaya_desain'] = $this->DetailModel->getDetailGayaDesain($id_rumah)->result();
        $data['foto_rumah'] = $this->DetailModel->getFotoRumah($id_rumah)->result();
        $data['produk_serupa'] = $this->DetailModel->getRumahSerupa($id_rumah)->result();
        $data['rating_desain'] = $this->DetailModel->getRating($id_rumah)->row();
        // $data['rating_lima'] = $this->DetailModel->getRatingLima($id_rumah)->result();
        // $data['rating_empat'] = $this->DetailModel->getRatingEmpat($id_rumah)->result();
        // $data['rating_tiga'] = $this->DetailModel->getRatingTiga($id_rumah)->result();
        // $data['rating_dua'] = $this->DetailModel->getRatingDua($id_rumah)->result();
        // $data['rating_satu'] = $this->DetailModel->getRatingSatu($id_rumah)->result();
        //$data['ulasan'] = $this->DetailModel->getUlasan($id_rumah)->result();



        $this->load->view('demo/layout/layout', $data);
    }

    // public function paket_desain($id)
    // {
    //     $data['halaman'] = 'demo/paket_desain';
    //     $rumah = $this->PembelianModel->getRumah($id)->row();
    //     $data['id_rumah'] = $rumah->id_rumah;
    //     $data['nama_rumah'] = $rumah->nama_rumah;
    //     $this->load->view('demo/layout/layout', $data);
    // }

    public function getDetailFotoDenahLantai1($id_rumah)

    {

        $response = $this->DetailModel->getDetailFotoDenahLantai1($id_rumah)->row();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function getDetailDenahLantai1($id_rumah)
    {

        $response = $this->DetailModel->getDetailDenahLantai1($id_rumah)->result();


        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();

        exit;
    }

    public function getDetailDenahLantai2($id_rumah)

    {

        $response = $this->DetailModel->getDetailDenahLantai2($id_rumah)->result();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function getDetailDenahLantai3($id_rumah)

    {

        $response = $this->DetailModel->getDetailDenahLantai3($id_rumah)->result();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function getUlasan($id_rumah)

    {
        $response = $this->DetailModel->getUlasan($id_rumah)->result();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function getCustomerById($id)
    {

        $response = $this->CustomerModel->getCustomerById($id)->row();

        $this->output

            ->set_status_header(201)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function profil($id_customer)
    {
        $cookie_customer = get_cookie('id_customer');
        $data['profil'] = $this->CustomerModel->getCustomerById($id_customer)->row();
        $data['transaksi'] = $this->CustomerModel->getTransaksi($id_customer);
        $data['dokumen'] = $this->CustomerModel->getDokumen($id_customer);
        $data['halaman'] = 'demo/profil';
        $data['title'] = 'Profil';
        $this->load->view('demo/layout/layout', $data);
    }

    public function sampel()
    {
        $data['halaman'] = 'demo/sampel';
        $data['title'] = 'Sampel';
        $this->load->view('demo/layout/layout', $data);
    }

    public function profilMobile($id_customer)
    {
        $cookie_customer = get_cookie('id_customer');
        $data['profil'] = $this->CustomerModel->getCustomerById($id_customer)->row();
        $data['transaksi'] = $this->CustomerModel->getTransaksi($id_customer);
        $data['dokumen'] = $this->CustomerModel->getDokumen($id_customer);
        $data['halaman'] = 'demo/ubah_profil_mob';
        $data['title'] = 'Ubah Profil';
        $this->load->view('demo/layout/layout', $data);
        if ($cookie_customer != $id_customer) {

            // redirect($this->uri->uri_string());

            // abort(404); //ke halaman error 403 //teserah, mau 404 juga boleh

            # return redirect()->to('/profil/'+$id_customer); 

            // return Redirect(Request.UrlReferrer.ToString());

            redirect('profil/' . $cookie_customer);
        }
    }

    public function UbahSandiMobile()
    {
        $data['halaman'] = 'demo/ubah_sandi_mob';
        $data['title'] = 'Ubah Sandi';
        $this->load->view('demo/layout/layout', $data);
    }

    public function caraKerja()
    {
        $data['halaman'] = 'demo/cara_kerja';
        $data['title'] = 'Cara Kerja';
        $this->load->view('demo/layout/layout', $data);
    }

    public function unduhDokumen($id_rumah)
    {
        $data['transaksiku'] = $this->CustomerModel->getTransaksiByIdRumah($id_rumah)[0];
        $data['unduh'] = $this->CustomerModel->getDokumen($id_rumah)->row();
        $data['halaman'] = 'demo/unduh_dokumen';
        $data['title'] = 'Unduh Dokumen';
        $this->load->view('demo/layout/layout', $data);
    }

    public function invoice($invoice)
    {
        $data['halaman'] = 'demo/invoice';
        $pembelian = $this->PembelianModel->getPembelian($invoice)->row();

        $data['no_invoice'] = $pembelian->no_invoice;

        $data['paket'] = $pembelian->paket;

        $data['tgl_issue'] = date('d-m-Y', strtotime($pembelian->tgl_pembelian));

        $data['tgl_expired'] = date('d-m-Y', strtotime($pembelian->tgl_expired));

        $rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();

        $data['id_rumah'] = $rumah->id_rumah;

        $data['nama_rumah'] = $rumah->nama_rumah;

        $data['sub_total'] = "Rp" . number_format($pembelian->harga, 0, ",", ".");

        $data['diskon'] = $pembelian->diskon . '%';

        $data['ppn'] = "Rp" . number_format($pembelian->harga * 11 / 100, 0, ",", ".");

        $harga_ppn = $pembelian->harga + ($pembelian->harga * 11 / 100);

        $data['total'] = "Rp" . number_format($harga_ppn - ($harga_ppn * ($pembelian->diskon / 100)), 0, ",", ".");

        // $data['promo'] = "Rp" . number_format($harga_ppn * ($pembelian->diskon / 100), 0, ",", ".");

        if ($pembelian->diskon > 0) {
            // Hitung nilai promo (diskon) jika diskon lebih dari 0%
            $data['promo'] = "Rp" . number_format($pembelian->harga * ($pembelian->diskon / 100), 0, ",", ".");
        } else {
            // Jika tidak ada diskon, set nilai promo sama dengan harga sebelum diskon
            $data['promo'] = "Rp" . number_format($pembelian->harga, 0, ",", ".");
        }

        $id_customer = $pembelian->id_customer;

        $customer = $this->PembelianModel->getCustomer($id_customer)->row();

        $data['nama_customer'] = $customer->nama_customer;

        $data['alamat'] = $customer->alamat;

        $data['email'] = $customer->email;

        $data['no_wa'] = $customer->no_wa;

        $data['title'] = 'Invoice';
        $this->load->view('demo/layout/layout', $data);
    }
    // public function material()
    // {
    //     $data['halaman'] = 'demo/material';
    //     $data['title'] = 'Material';
    //     $this->load->view('demo/layout/layout', $data);
    // }

    public function detailMaterial($id)
    {
        $produk = json_decode(file_get_contents($this->config->item('url_server') . 'api/getProdukKriteria/id_produk/' . $id));
        $id_kategori = $produk[0]->id_kategori;
        $data['produk'] = $produk;
        $data['produk_terkait'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/getProdukTerkait/' . $id_kategori));
        $data['halaman'] = 'demo/detail_material';
        $data['title'] = 'Detail Material';
        $this->load->view('demo/layout/layout', $data);
    }

    public function faq()
    {
        $data['halaman'] = 'demo/faq';
        $data['title'] = 'Frequently Asked Questions';
        $this->load->view('demo/layout/layout', $data);
    }

    public function profil_arsitek($id_arsitek)
    {
        $data['halaman'] = 'demo/profil_arsitek';
        $data['arsitek'] = $this->DetailModel->getDetailArsitek($id_arsitek);
        $data['portofolio'] =  $this->DetailModel->getPortofolioArsitek($id_arsitek)->result();
        $data['produk'] = $this->DetailModel->getDesainArsitek($id_arsitek)->result();
        // $sort = $this->input->get('sort');

        // // Menangani logika pengurutan sesuai dengan opsi yang dipilih
        // switch ($sort) {
        //     case 'populer':
        //         $data['produk'] = $this->DetailModel->getDesainArsitek('populer')->result();
        //         break;
        //     case 'terbaru':
        //         $data['produk'] = $this->DetailModel->getDesainArsitek('terbaru')->result();
        //         break;
        //     case 'harga_terendah':
        //         $data['produk'] = $this->DetailModel->getDesainArsitek('harga_terendah')->result();
        //         break;
        //     case 'harga_tertinggi':
        //         $data['produk'] = $this->DetailModel->getDesainArsitek('harga_tertinggi')->result();
        //         break;
        //     default:
        //         // Default: Paling Sesuai atau urutan default lainnya
        //         $data['produk'] = $this->DetailModel->getDesainArsitek()->result();
        //         break;
        // }


        $data['title'] = 'Profil Arsitek';
        $this->load->view('demo/layout/layout', $data);
    }

    public function artikel()
    {
        $data['halaman'] = 'demo/artikel';
        $data['title'] = 'Artikel';
        $data['artikels'] = $this->ArtikelModel->getArtikel()->result(); //json_decode(file_get_contents(base_url('api/getArtikel')));
        $data['muka'] = $this->ArtikelModel->getArtikelMuka()->row(); //json_decode(file_get_contents(base_url('api/getArtikelMuka')));
        $data['mukaRight'] = $this->ArtikelModel->getArtikelMukaRight()->result(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $data['popularArtikel'] = $this->ArtikelModel->getPopularArtikel()->result(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $data['terbaruArtikel'] = $this->ArtikelModel->getTerbaruArtikel()->row(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));

        $this->load->view('demo/layout/layout', $data);
    }

    public function artikel_search()
    {
        $data['halaman'] = 'demo/cari_artikel';
        $data['semuaArtikel'] = $this->ArtikelModel->getAllArtikel();
        $data['title'] = 'Artikel';
        $this->load->view('demo/layout/layout', $data);
    }

    public function kategori_artikel()
    {
        $data['halaman'] = 'demo/kategori_artikel';
        $data['title'] = 'Kategori Artikel';
        $this->load->view('demo/layout/layout', $data);
    }

    public function detail_artikel($id_artikel)
    {
        $data['halaman'] = 'demo/detail_artikel';
        $data['title'] = 'Detail Artikel';
        $data['id_artikel'] = $id_artikel;
        $data['detailArtikel'] = $this->ArtikelModel->getDetailArtikel($id_artikel);
        $data['popularArtikel'] = $this->ArtikelModel->getPopularArtikel()->result(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $this->load->view('demo/layout/layout', $data);
    }

    public function getDetailArtikel($id_artikel)

    {

        $response = $this->ArtikelModel->getDetailArtikel($id_artikel)->row();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function getArtikel($id = false)

    {

        if (!$id) {

            $response = $this->ArtikelModel->getArtikel()->result();
        } else {

            $response = $this->ArtikelModel->getArtikel($id)->result();
        }

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }
}
