<?php

defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");



class SampleProjectController extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();
    }



    public function index()

    {

        // $data['halaman'] = 'demo/sampel';
        // $data['title'] = 'Sampel';
        // $this->load->view('demo/layout/layout', $data);

        $data['halaman'] = 'desain/sampel_desain';
        $data['title'] = 'Sampel';
        $this->load->view('layout', $data);
    }



    public function sampel_desain_coba()

    {

        $data['halaman'] = 'desain/sampel_desain_coba';

        //  $data['terbaru'] = json_decode(file_get_contents(base_url('api/getKatalogProdukTerbaru')));

        $this->load->view('layout', $data);
    }
}
