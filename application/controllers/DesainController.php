<?php

defined('BASEPATH') or exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");



class DesainController extends CI_Controller
{

  public function __construct()

  {

    parent::__construct();

    $this->load->model("DesainModel");
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

    $data['halaman'] = 'demo/koleksi';
    $data['title'] = 'Koleksi';
    $data['produk_favorit'] = $this->DesainModel->getKatalogProdukFavorit()->result();
    $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew()->result();
    $data['range_panjang_lahan'] = $this->DesainModel->getRangePanjangLahan()->row();
    $data['range_lebar_lahan'] = $this->DesainModel->getRangeLebarLahan()->row();
    $data['gaya_desain'] = $this->DesainModel->getGayaDesain()->result();
    $data['ruangan'] = $this->DesainModel->getRuang()->result();

    $sort = $this->input->get('sort');

    // Menangani logika pengurutan sesuai dengan opsi yang dipilih
    // switch ($sort) {
    //   case 'populer':
    //     $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('populer')->result();
    //     break;
    //   case 'terbaru':
    //     $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('terbaru')->result();
    //     break;
    //   case 'harga_terendah':
    //     $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('harga_terendah')->result();
    //     break;
    //   case 'harga_tertinggi':
    //     $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew('harga_tertinggi')->result();
    //     break;
    //   default:
    //     // Default: Paling Sesuai atau urutan default lainnya
    //     $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew()->result();
    //     break;
    // }

    $search = strtolower($this->input->get('search'));
    $lantai = $this->input->get('lantai');
    $min_panjang = $this->input->get('min_panjang');
    $max_panjang = $this->input->get('max_panjang');
    $min_lebar = $this->input->get('min_lebar');
    $max_lebar = $this->input->get('max_lebar');
    $min_biaya = $this->input->get('min_biaya');
    $max_biaya = $this->input->get('max_biaya');
    $kamar = $this->input->get('kamar');

    $gaya = isset($_GET['gaya']) ? $_GET['gaya'] : '';
    $ruang = isset($_GET['ruang']) ? $_GET['ruang'] : '';
    // $gayas = explode(',', $gayaParam);

    // $queryString = $_SERVER['QUERY_STRING']; // Get the raw query string
    // $queryParams = explode('&', $queryString); // Split the query string into individual parameters

    // $gayas = array(); // Initialize an array to store gaya values

    // foreach ($queryParams as $param) {
    //   // Split parameter into key and value
    //   list($key, $value) = explode('=', $param);

    //   // Decode URL-encoded values
    //   $key = urldecode($key);
    //   $value = urldecode($value);

    //   // If the parameter is gaya, add its value to the $gayas array
    //   if ($key === 'gaya') {
    //     $gayas[] = $value;
    //   }
    // }

    // Get the filtered records from the database
    $data['koleksi_rumah'] = $this->DesainModel->getKatalogProdukNew($sort, $search, (int)$min_panjang, (int)$max_panjang, (int)$min_lebar, (int)$max_lebar, $lantai, $kamar, $gaya, $ruang, $min_biaya, $max_biaya)->result();


    $this->load->view('demo/layout/layout', $data);
  }

  public function filterProduk()
  {
    // $_SESSION['lantai'] = $_POST['lantai'];
    log_message('error', 'masuk filterproduk' . var_export($_POST['lantai'], true));
    $koleksi_rumah = $this->DesainModel->getKatalogProdukNew()->result();
    $koleksi_rumah = array_filter($koleksi_rumah, 'filterByLantai');
    return $koleksi_rumah;
  }

  function filterByLantai($rumah)
  {
    return $rumah->lantai == 2;
  }

  public function getKatalogProduk()
  {

    parse_str(file_get_contents('php://input'), $data);

    $response = $this->DesainModel->getKatalogProduk($data)->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function getSummaryKatalogProduk()
  {

    parse_str(file_get_contents('php://input'), $data);

    $response = $this->DesainModel->getKatalogProduk($data)->num_rows();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function getKatalogProdukPopular()
  {

    $response = $this->DesainModel->getKatalogProdukPopular()->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function getKatalogProdukFavorit()
  {

    $response = $this->DesainModel->getKatalogProdukFavorit()->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function getKatalogProdukTerbaru()
  {

    $response = $this->DesainModel->getRumahTerbaru()->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getRumahPromo()
  {

    $response = $this->DesainModel->getRumahPromo()->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getKatalogProdukArsitek($id_arsitek)
  {

    parse_str(file_get_contents('php://input'), $data);

    $response = $this->DesainModel->getKatalogProdukArsitek($data, $id_arsitek)->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getKatalogProdukFilterArsitek($id_arsitek)
  {

    parse_str(file_get_contents('php://input'), $data);

    $response = $this->DesainModel->getKatalogProdukFilterArsitek($data, $id_arsitek)->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }
  public function getKatalogArtikel()
  {

    parse_str(file_get_contents('php://input'), $data);

    $response = $this->DesainModel->getKatalogArtikel($data)->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getNamaRumah()
  {

    $response = $this->DesainModel->getNamaRumah()->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getDokumenRumahGratis($id_rumah)
  {

    $response = $this->DesainModel->getDokumenRumahGratis($id_rumah)->row();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getCountDownloadDokumen($id_customer)
  {

    $response = $this->DesainModel->getCountDownloadDokumen($id_customer)->num_rows();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }





  public function getIsDownloadDokumen($id_customer, $id_rumah)
  {

    $response = $this->DesainModel->getIsDownloadDokumen($id_customer, $id_rumah)->row();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }
}
