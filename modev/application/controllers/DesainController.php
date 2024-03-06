<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class DesainController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
         $this->load->model("DesainModel");
    }
	public function index() {
    	$data['halaman'] = 'desain/index';
       $data['lebar_panjang'] = $this->DesainModel->getLebarPanjangLahan()->row();
      $data['terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));
      $this->load->view('layout', $data);
	}
    public function getKatalogProduk(){
      	parse_str(file_get_contents('php://input'), $data);
        $response = $this->DesainModel->getKatalogProduk($data)->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
  	public function getSummaryKatalogProduk(){
      	parse_str(file_get_contents('php://input'), $data);
        $response = $this->DesainModel->getKatalogProduk($data)->num_rows();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
    public function getKatalogProdukPopular(){
        $response = $this->DesainModel->getKatalogProdukPopular()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
     public function getKatalogProdukFavorit(){
        $response = $this->DesainModel->getKatalogProdukFavorit()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
    public function getKatalogProdukTerbaru(){
        $response = $this->DesainModel->getRumahTerbaru()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
  
   public function getRumahPromo(){
        $response = $this->DesainModel->getRumahPromo()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
  
  public function getKatalogProdukArsitek($id_arsitek){
        parse_str(file_get_contents('php://input'), $data);
        $response = $this->DesainModel->getKatalogProdukArsitek($data,$id_arsitek)->result();
        $this->output
           ->set_status_header(200)
          ->set_content_type('application/json')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
    }
  
  public function getKatalogProdukFilterArsitek($id_arsitek){
        parse_str(file_get_contents('php://input'), $data);
        $response = $this->DesainModel->getKatalogProdukFilterArsitek($data,$id_arsitek)->result();
        $this->output
           ->set_status_header(200)
          ->set_content_type('application/json')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
    }
  
   public function getKatalogArtikel(){
        parse_str(file_get_contents('php://input'), $data);
        $response = $this->DesainModel->getKatalogArtikel($data)->result();
        $this->output
           ->set_status_header(200)
          ->set_content_type('application/json')
          ->set_output(json_encode($response, JSON_PRETTY_PRINT))
          ->_display();
      exit;
    }
}