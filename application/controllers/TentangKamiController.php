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
        $this->load->model('BerandaModel');
        $this->load->model('DesainModel');

        $data['halaman'] = 'demo/layanan';
        $data['title'] = 'Layanan';
        $data['arsitek'] = $this->DetailModel->getAllArsitek();
        $data['jumlah_rumah'] = $this->DesainModel->getJumlahRumah()->row()->jumlah_rumah;
        $data['jumlah_unduh'] = $this->BerandaModel->getJumlahUnduh()->row()->jumlah_unduh;
        $data['jumlah_pengunjung'] = $this->BerandaModel->getJumlahPengunjung()->row()->jumlah_pengunjung;
        $this->load->view('demo/layout/layout', $data);
    }
}
