<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SampleProjectController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
       $data['halaman'] = 'desain/sampel_desain';
    // $data['terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));
        $this->load->view('layout', $data);
	}
  
   public function sampel_desain_coba()
	{
       $data['halaman'] = 'desain/sampel_desain_coba';
   //  $data['terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));
        $this->load->view('layout', $data);
	}
}