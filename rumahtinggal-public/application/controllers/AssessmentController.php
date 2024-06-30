<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssessmentController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AssessmentModel");
    }

    public function index()
	{
      $data['halaman'] = 'desain/asesmen';
      $data['lebar_panjang'] = $this->AssessmentModel->getLebarPanjangLahan()->row();
      $this->load->view('layout', $data);
	}

    public function getAssessmentProduk(){
        parse_str(file_get_contents('php://input'), $data);
        $response = $this->AssessmentModel->getAssessmentProduk($data)->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

    public function getLebarPanjangLahan(){
        $response = $this->AssessmentModel->getLebarPanjangLahan()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

    public function getJumlahLantai(){
        $response = $this->AssessmentModel->getJumlahLantai()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

    public function getMukaBangunan(){
        $response = $this->AssessmentModel->getMukaBangunan()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

     public function getJumlahKamarTidur(){
        $response = $this->AssessmentModel->getJumlahKamarTidur()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

     public function getRuangLain(){
        $response = $this->AssessmentModel->getRuangLain()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

     public function getGayaDesain(){
        $response = $this->AssessmentModel->getGayaDesain()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }

     public function getMaterialBangunan(){
        $response = $this->AssessmentModel->getMaterialBangunan()->result();
        $this->output
           ->set_status_header(200)
           ->set_content_type('application/json')
           ->set_output(json_encode($response, JSON_PRETTY_PRINT))
           ->_display();
      exit;
    }
}
