<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class LayananController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("DesainModel");
    }
    public function kebijakan_privasi()
    {
        $data['title'] = 'Kebijakan Privasi';
        $data['halaman'] = 'demo/kebijakan_privasi';
        $this->load->view('demo/layout/layout', $data);
    }
    public function syarat_ketentuan()
    {
        $data['title'] = 'Syarat dan Ketentuan';
        $data['halaman'] = 'demo/syarat_ketentuan';
        $this->load->view('demo/layout/layout', $data);
    }
    public function cara_kerja()
    {
        $data['halaman'] = 'layanan/cara_kerja';
        $this->load->view('layout', $data);
    }
    public function faq()
    {
        $data['halaman'] = 'layanan/faq';
        $this->load->view('layout', $data);
    }
}
