<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class TentangKamiController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

 //    public function index()
	// {
 //        $this->load->view('desain/index');
	// }


	public function index() {
    	$data['halaman'] = 'tentangKami/index';
  
        $this->load->view('layout', $data);
	}
}