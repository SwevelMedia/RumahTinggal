<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelController extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model("ArtikelModel");
    }

public function index(){
        $data['halaman'] = 'artikel/form_data'; 
        $data['artikels'] = json_decode(file_get_contents(base_url('api/getArtikel')));
        $data['muka'] = json_decode(file_get_contents(base_url('api/getArtikelMuka')));
        $data['mukaRight'] = json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $this->load->view('layout', $data);
	}

public function getArtikel(){
        $response = $this->ArtikelModel->getArtikel()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
    public function getArtikelMuka(){
        $response = $this->ArtikelModel->getArtikelMuka()->row();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

 public function getArtikelMukaRight(){
        $response = $this->ArtikelModel->getArtikelMukaRight()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }


    public function detail_artikel($id_artikel){
        $data['halaman'] = 'artikel/detail-artikel';
        $data['id_artikel'] = $id_artikel;
        $data['artikels'] = json_decode(file_get_contents(base_url('api/getArtikel')));
        $this->load->view('layout', $data);
    }

public function getDetailArtikel($id_artikel){
        $response = $this->ArtikelModel->getDetailArtikel($id_artikel)->row();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

}