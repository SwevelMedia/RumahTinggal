<?php

defined('BASEPATH') or exit('No direct script access allowed');



class ArtikelController extends CI_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model("ArtikelModel");
    }



    public function index()

    {

        $data['halaman'] = 'demo/artikel';
        $data['title'] = 'Artikel';
        $data['artikels'] = $this->ArtikelModel->getArtikel()->result(); //json_decode(file_get_contents(base_url('api/getArtikel')));
        $data['muka'] = $this->ArtikelModel->getArtikelMuka()->row(); //json_decode(file_get_contents(base_url('api/getArtikelMuka')));
        $data['mukaRight'] = $this->ArtikelModel->getArtikelMukaRight()->result(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $data['popularArtikel'] = $this->ArtikelModel->getPopularArtikel()->result(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $data['terbaruArtikel'] = $this->ArtikelModel->getTerbaruArtikel()->row(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));

        $this->load->view('demo/layout/layout', $data);
    }



    public function getArtikel($id = false)

    {

        if (!$id) {

            $response = $this->ArtikelModel->getArtikel()->result();
        } else {

            $response = $this->ArtikelModel->getArtikel($id)->result();
        }

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }

    public function getArtikelMuka()

    {

        $response = $this->ArtikelModel->getArtikelMuka()->row();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }



    public function getArtikelMukaRight()

    {

        $response = $this->ArtikelModel->getArtikelMukaRight()->result();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }





    public function detail_artikel($id_artikel)

    {

        $data['halaman'] = 'demo/detail_artikel';
        $data['title'] = 'Detail Artikel';
        $data['id_artikel'] = $id_artikel;
        $data['detailArtikel'] = $this->ArtikelModel->getDetailArtikel($id_artikel);
        $data['popularArtikel'] = $this->ArtikelModel->getPopularArtikel()->result(); //json_decode(file_get_contents(base_url('api/getArtikelMukaRight')));
        $this->load->view('demo/layout/layout', $data);
    }

    public function artikel_search()
    {
        $data['halaman'] = 'demo/cari_artikel';
        $data['semuaArtikel'] = $this->ArtikelModel->getAllArtikel();
        $data['title'] = 'Artikel';
        $this->load->view('demo/layout/layout', $data);
    }



    public function getDetailArtikel($id_artikel)

    {

        $response = $this->ArtikelModel->getDetailArtikel($id_artikel)->row();

        $this->output

            ->set_status_header(200)

            ->set_content_type('application/json')

            ->set_output(json_encode($response, JSON_PRETTY_PRINT))

            ->_display();

        exit;
    }
}
