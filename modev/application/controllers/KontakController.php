<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        $data['halaman'] = 'kontak/form_data';
  
        $this->load->view('layout', $data);
	}
}