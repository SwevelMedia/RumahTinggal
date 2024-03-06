<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class WilayahController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
         $this->load->model("WilayahModel");
    }

    public function getListWilayahProvinsi(){
	     $response = array(
	     "total_count" => $this->WilayahModel->getJumlahListWilayahProvinsi($this->input->get("q")),
	     "results" => $this->WilayahModel->getListWilayahProvinsi(
	      					$this->input->get("q"),
	      					$this->input->get("page") * $this->input->get("page_limit"),
	      					$this->input->get("page_limit")
	      			   )
	    );

	    $this->output
	      	 ->set_status_header(200)
	      	 ->set_content_type('application/json')
	      	 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	      	 ->_display();
	    exit;
  	}
  
    public function getListWilayahKabupaten(){
	     $response = array(
	     "total_count" => $this->WilayahModel->getJumlahListWilayahKabupaten($this->input->get("q"),$this->input->get("provinsi")),
	     "results" => $this->WilayahModel->getListWilayahKabupaten(
	      					$this->input->get("q"),
	      					$this->input->get("page") * $this->input->get("page_limit"),
	      					$this->input->get("page_limit"),
                            $this->input->get("provinsi")
	      			   )
	    );

	    $this->output
	      	 ->set_status_header(200)
	      	 ->set_content_type('application/json')
	      	 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	      	 ->_display();
	    exit;
  	}
  
    public function getListWilayahKecamatan(){
	     $response = array(
	     "total_count" => $this->WilayahModel->getJumlahListWilayahKecamatan($this->input->get("q"),$this->input->get("kabupaten")),
	     "results" => $this->WilayahModel->getListWilayahKecamatan(
	      					$this->input->get("q"),
	      					$this->input->get("page") * $this->input->get("page_limit"),
	      					$this->input->get("page_limit"),
                            $this->input->get("kabupaten")
	      			   )
	    );

	    $this->output
	      	 ->set_status_header(200)
	      	 ->set_content_type('application/json')
	      	 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	      	 ->_display();
	    exit;
  	}
  
    public function getListWilayahKelurahan(){
	     $response = array(
	     "total_count" => $this->WilayahModel->getJumlahListWilayahKelurahan($this->input->get("q"),$this->input->get("kecamatan")),
	     "results" => $this->WilayahModel->getListWilayahKelurahan(
	      					$this->input->get("q"),
	      					$this->input->get("page") * $this->input->get("page_limit"),
	      					$this->input->get("page_limit"),
                            $this->input->get("kecamatan")
	      			   )
	    );

	    $this->output
	      	 ->set_status_header(200)
	      	 ->set_content_type('application/json')
	      	 ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	      	 ->_display();
	    exit;
  	}
  
}