<?php

defined('BASEPATH') or exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");



class BerandaController extends CI_Controller
{

  public function __construct()

  {

    parent::__construct();

    $this->load->model("BerandaModel");

    $this->load->model("DesainModel");

    $this->load->model("ArtikelModel");

    $this->load->library('user_agent');
  }



  public function curl_get_file_contents($URL)

  {

    $c = curl_init();

    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($c, CURLOPT_URL, $URL);

    $contents = curl_exec($c);

    curl_close($c);



    if ($contents) return $contents;

    else return FALSE;
  }



  public function index()
  {

    $data['kategori'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/getKategoriProduk'));

    $data['sub_kategori'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/getSubKategoriProduk'));

    $data['slide_merk'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/getSlideMerk'));

    $data['merk'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/getMerkProduk'));

    $data['halaman'] = 'beranda/index';



    $this->load->view('layout', $data);
  }



  public function katalog()
  {

    if ($this->agent->is_mobile()) {

      redirect('https://rumahtinggal.id/mobile'); // go to 'mobile' controller, 'home()' function

    } else {

      /* $data['produk_promo'] = json_decode($this->curl_get_file_contents(base_url('api/getRumahPromo')));

      	$data['produk_favorit'] = json_decode($this->curl_get_file_contents(base_url('api/getKatalogProdukFavorit')));

      	$data['produk_popular'] = json_decode($this->curl_get_file_contents(base_url('api/getKatalogProdukPopular')));

        $data['produk_terbaru'] = json_decode($this->curl_get_file_contents(base_url('api/getKatalogProdukTerbaru')));

        $data['kategori'] = json_decode($this->curl_get_file_contents($this->config->item('url_server').'api/getKategoriProduk'));

        $data['slide_merk'] = json_decode($this->curl_get_file_contents($this->config->item('url_server').'api/getSlideMerk'));

        $data['merk'] = json_decode($this->curl_get_file_contents($this->config->item('url_server').'api/getMerkProduk'));

      	$data['artikel'] = json_decode($this->curl_get_file_contents(base_url('api/getArtikel')));*/

      //$data['produk_promo'] = json_decode(file_get_contents(base_url('api/getRumahPromo'))); $this->DesainController->getRumahPromo()

      //$data['produk_favorit'] = json_decode(file_get_contents(base_url('api/getKatalogProdukFavorit')));

      //$data['produk_popular'] = json_decode(file_get_contents(base_url('api/getKatalogProdukPopular')));

      //$data['produk_terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));







      $data['produk_promo'] = $this->DesainModel->getRumahPromo()->result();

      $data['produk_favorit'] = $this->DesainModel->getKatalogProdukFavorit()->result();

      $data['produk_popular'] = $this->DesainModel->getKatalogProdukPopular()->result();

      $data['produk_terbaru'] = $this->DesainModel->getRumahTerbaru()->result();

      $data['artikel'] = $this->ArtikelModel->getArtikel()->result();





      // $data['kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getKategoriProduk'));

      // $data['slide_merk'] =json_decode(file_get_contents($this->config->item('url_server').'api/getSlideMerk'));

      // $data['merk'] =json_decode(file_get_contents($this->config->item('url_server').'api/getMerkProduk'));



      $data['halaman'] = 'beranda/katalog';



      $this->load->view('layout', $data);



      $this->load->library('user_agent');
    }
  }





  public function material()
  {

    // $data['produk_promo'] = json_decode(file_get_contents(base_url('api/getRumahPromo')));

    // $data['produk_favorit'] = json_decode(file_get_contents(base_url('api/getKatalogProdukFavorit')));

    // $data['produk_popular'] = json_decode(file_get_contents(base_url('api/getKatalogProdukPopular')));

    // $data['produk_terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));

    // $data['kategori'] = json_decode(file_get_contents($this->config->item('url_server').'api/getKategoriProduk'));

    // $data['slide_merk'] =  json_decode(file_get_contents($this->config->item('url_server').'api/getSlideMerk'));

    // $data['merk'] = json_decode(file_get_contents($this->config->item('url_server').'api/getMerkProduk'));

    // $data['artikel'] = json_decode(file_get_contents(base_url('api/getArtikel')));

    $data['halaman'] = 'demo/material';
    $data['title'] = 'Material';
    $this->load->view('demo/layout/layout', $data);
  }





  public function detail_produk($id)
  {

    $produk = json_decode(file_get_contents($this->config->item('url_server') . 'api/getProdukKriteria/id_produk/' . $id));

    $id_kategori = $produk[0]->id_kategori;

    $data['produk'] = $produk;

    $data['produk_terkait'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/getProdukTerkait/' . $id_kategori));

    $data['halaman'] = 'beranda/detail_produk';

    $this->load->view('layout', $data);
  }



  public function getBannerHeader()
  {

    $response = $this->BerandaModel->getBannerHeader()->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function verifikasiDomain()
  {

    $this->load->view('googleb7b10915cf26cc95');
  }

  public function testimoni()
  {
    $this->load->model('berandaModel'); // Memuat model berandaModel
    $data['testimoni'] = $this->berandaModel->getTestimoni(); // Memanggil model untuk mengambil data testimoni
    $this->load->view('katalog', $data); // Menampilkan data dalam view
  }

  public function beranda()
  {
    // Menampilkan halaman katalog.
    $this->load->view('katalog'); // Sesuaikan dengan nama view yang sesuai.
  }
}
