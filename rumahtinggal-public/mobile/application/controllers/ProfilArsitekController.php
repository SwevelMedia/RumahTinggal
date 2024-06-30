<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class ProfilArsitekController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

 //    public function index()
	// {
 //        $this->load->view('desain/index');
	// }


	public function index() {
    	$data['halaman'] = 'arsitek/index';
  
        $this->load->view('layout', $data);
	}
    public function arsitek() {
        // $data['halaman'] = 'arsitek/index';
  
        $this->load->view('arsitek/index');
    }
    
}