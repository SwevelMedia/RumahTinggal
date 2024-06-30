<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class BerandaController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
      	$this->load->model("BerandaModel");
    }

	public function index() {
        $data['kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getKategoriProduk'));
        $data['sub_kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getSubKategoriProduk'));
        $data['slide_merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getSlideMerk'));
        $data['merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getMerkProduk'));
    	$data['halaman'] = 'beranda/index';
  
        $this->load->view('layout', $data);
	}

    public function katalog() {
      	$data['produk_promo'] = json_decode(file_get_contents(base_url('api/getRumahPromo')));
      	$data['produk_favorit'] = json_decode(file_get_contents(base_url('api/getKatalogProdukFavorit')));
      	$data['produk_popular'] = json_decode(file_get_contents(base_url('api/getKatalogProdukPopular')));
        $data['produk_terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));
        $data['kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getKategoriProduk'));
        $data['slide_merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getSlideMerk'));
        $data['merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getMerkProduk'));
      	$data['artikel'] = json_decode(file_get_contents(base_url('api/getArtikel')));
        $data['halaman'] = 'beranda/katalog';
  
        $this->load->view('layout', $data);
    }

    public function material() {
        // $data['produk_promo'] = json_decode(file_get_contents(base_url('api/getRumahPromo')));
        // $data['produk_favorit'] = json_decode(file_get_contents(base_url('api/getKatalogProdukFavorit')));
        // $data['produk_popular'] = json_decode(file_get_contents(base_url('api/getKatalogProdukPopular')));
        // $data['produk_terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));
        $data['kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getKategoriProduk'));
        $data['slide_merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getSlideMerk'));
        $data['merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getMerkProduk'));
        // $data['artikel'] = json_decode(file_get_contents(base_url('api/getArtikel')));
        $data['halaman'] = 'beranda/material';
  
        $this->load->view('layout', $data);
    }

    public function detail_produk($id) {
        $produk = json_decode(file_get_contents($this->config->item('url_server').'api/getProdukKriteria/id_produk/'.$id));
      	$id_kategori = $produk[0]->id_kategori;
      	$data['produk'] = $produk;
        $data['produk_terkait'] = json_decode(file_get_contents($this->config->item('url_server').'api/getProdukTerkait/'.$id_kategori));
        $data['halaman'] = 'beranda/detail_produk';
        $this->load->view('layout', $data);
    }
  
  	public function getBannerHeader(){
        $response = $this->BerandaModel->getBannerHeader()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

    public function verifikasiDomain() {
      $this->load->view('googleb7b10915cf26cc95');
    }
}