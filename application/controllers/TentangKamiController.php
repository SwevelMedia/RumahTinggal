<?php

defined('BASEPATH') or exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");



class TentangKamiController extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();
    }



    //    public function index()

    // {

    //        $this->load->view('desain/index');

    // }





    public function index()
    {

        $this->load->model('DetailModel');

        $data['halaman'] = 'demo/layanan';
        $data['title'] = 'Layanan';
        $data['arsitek'] = $this->DetailModel->getAllArsitek();
        $this->load->view('demo/layout/layout', $data);
    }
}
