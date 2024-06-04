<?php

defined('BASEPATH') or exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");



class DetailController extends CI_Controller

{

     public function __construct()

     {

          parent::__construct();

          $this->load->model("DetailModel");

          $this->load->model("CustomerModel");

          $this->load->library('user_agent');

          $this->load->library('session');
     }



     public function index($id_rumah)

     {

          $data['halaman'] = 'desain/detail';
          $data['id_rumah'] = $id_rumah;
          $data['konsep'] = $this->DetailModel->getDetailKonsep($id_rumah)->row();
          $data['konsep_desain'] = $this->DetailModel->getDetailKonsepDesain($id_rumah)->row();

          $data['terjual'] = $this->DetailModel->getRumahTerjual($id_rumah)->row();
          $data['gaya_desain'] = $this->DetailModel->getDetailGayaDesain($id_rumah)->result();
          $data['foto_rumah'] = $this->DetailModel->getFotoRumah($id_rumah)->result();
          $data['produk_serupa'] = $this->DetailModel->getRumahSerupa($id_rumah)->result();
          $data['rating_desain'] = $this->DetailModel->getRating($id_rumah)->row();
          $data['rating_lima'] = $this->DetailModel->getRatingLima($id_rumah)->result();
          $data['rating_empat'] = $this->DetailModel->getRatingEmpat($id_rumah)->result();
          $data['rating_tiga'] = $this->DetailModel->getRatingTiga($id_rumah)->result();
          $data['rating_dua'] = $this->DetailModel->getRatingDua($id_rumah)->result();
          $data['rating_satu'] = $this->DetailModel->getRatingSatu($id_rumah)->result();



          $this->DetailModel->simpanDilihat($id_rumah);

          $this->load->view('layout', $data);
     }



     public function simpanDilihat($id_rumah)

     {

          $response = $this->DetailModel->simpanDilihat($id_rumah);

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailKonsep($id_rumah)

     {

          $response = $this->DetailModel->getDetailKonsep($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailKonsepDesain($id_rumah)

     {

          $response = $this->DetailModel->getDetailKonsepDesain($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailDenahLantai1($id_rumah)

     {

          $response = $this->DetailModel->getDetailDenahLantai1($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailDenahLantai2($id_rumah)

     {

          $response = $this->DetailModel->getDetailDenahLantai2($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailDenahLantai3($id_rumah)

     {

          $response = $this->DetailModel->getDetailDenahLantai3($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailFotoDenahLantai1($id_rumah)

     {

          $response = $this->DetailModel->getDetailFotoDenahLantai1($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailFotoDenahLantai2($id_rumah)

     {

          $response = $this->DetailModel->getDetailFotoDenahLantai2($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailFotoDenahLantai3($id_rumah)

     {

          $response = $this->DetailModel->getDetailFotoDenahLantai3($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }

     // public function getDetailFotoDenah($id_rumah){

     //     $response = $this->DetailModel->getDetailFotoDenah($id_rumah)->result();

     //     $this->output

     //        ->set_status_header(200)

     //        ->set_content_type('application/json')

     //        ->set_output(json_encode($response, JSON_PRETTY_PRINT))

     //        ->_display();

     //   exit;

     // }



     public function getDetailSpesifikasi($id_rumah)

     {

          $response = $this->DetailModel->getDetailSpesifikasi($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getDetailGayaDesain($id_rumah)

     {

          $response = $this->DetailModel->getDetailGayaDesain($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRumahTerjual($id_rumah)

     {

          $response = $this->DetailModel->getRumahTerjual($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRumahSerupa($id_rumah)

     {

          $response = $this->DetailModel->getRumahSerupa($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }





     // arsitek

     public function getDetailArsitek($id_arsitek)

     {

          $response = $this->DetailModel->getDetailArsitek($id_arsitek)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getProdukArsitek($id_arsitek)

     {

          $response = $this->DetailModel->getProdukArsitek($id_arsitek)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getPortofolioArsitek($id_arsitek)

     {

          $response = $this->DetailModel->getPortofolioArsitek($id_arsitek)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function profil_arsitek($id_arsitek)

     {
          $sort = $this->input->get('sort');

          $data['halaman'] = 'demo/profil_arsitek';
          $data['arsitek'] = $this->DetailModel->getDetailArsitek($id_arsitek);
          $data['portofolio'] =  $this->DetailModel->getPortofolioArsitek($id_arsitek)->result();
          $data['produk'] = $this->DetailModel->getDesainArsitek($id_arsitek, $sort)->result();


          $data['title'] = 'Profil Arsitek';
          $this->load->view('demo/layout/layout', $data);
     }



     // artikel

     public function getDetailArtikel($id_artikel)

     {

          $response = $this->DetailModel->getDetailArtikel($id_artikel)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function detail_artikel($id_artikel)

     {

          $data['halaman'] = 'artikel/detail-artikel';

          $data['id_artikel'] = $id_artikel;

          $data['artikel'] = json_decode(file_get_contents(base_url('api/getDetailArtikel/' . $id_artikel)));

          $this->load->view('layout', $data);
     }



     //ulasan

     public function simpanUlasan()

     {

          parse_str(file_get_contents('php://input'), $data);
          $this->DetailModel->simpanUlasan($data);


          $response = array(

               'Success' => true,

               'Info' => 'Ulasan berhasil disimpan.',

          );



          $this->output

               ->set_status_header(201)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }

     public function ubahUlasan()
     {
          parse_str(file_get_contents('php://input'), $data);
          $id_rumah = $data["id_rumah"];
          $id_customer = $data["id_customer"];
          $this->DetailModel->updateUlasanCustomer($id_rumah, $id_customer, $data);

          $response = array(
               'Success' => true,
               'Info' => 'Ulasan berhasil diubah.',

          );

          $this->output
               ->set_status_header(201)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     // ulasan

     public function getUlasan($id_rumah)

     {

          $response = $this->DetailModel->getUlasan($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getUlasanCustomer($id_rumah, $id_customer)

     {

          $response = $this->DetailModel->getUlasanCustomer($id_rumah, $id_customer)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     // rating

     public function getRating($id_rumah)

     {

          $response = $this->DetailModel->getRating($id_rumah)->row();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRatingSatu($id_rumah)

     {

          $response = $this->DetailModel->getRatingSatu($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRatingDua($id_rumah)

     {

          $response = $this->DetailModel->getRatingDua($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRatingTiga($id_rumah)

     {

          $response = $this->DetailModel->getRatingTiga($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRatingEmpat($id_rumah)

     {

          $response = $this->DetailModel->getRatingEmpat($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRatingLima($id_rumah)

     {

          $response = $this->DetailModel->getRatingLima($id_rumah)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     // suka

     public function simpanDisukai()

     {

          $id_customer = get_cookie('id_customer');

          $session_id = $this->session->userdata('id_customer');

          if ($id_customer !=  $session_id || $id_customer == null || $session_id == null) {
               $this->output
                    ->set_status_header(401)
                    ->set_content_type('application/json')
                    ->_display();
               exit;
          }

          parse_str(file_get_contents('php://input'), $data);

          $this->DetailModel->simpanDisukai($data);



          $response = array(

               'Success' => true,

               'Info' => 'Rumah disukai'

          );



          $this->output

               ->set_status_header(201)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function hapusDisukai($id_rumah, $id_customer)

     {
          $id_customer = get_cookie('id_customer');

          $session_id = $this->session->userdata('id_customer');

          if ($id_customer !=  $session_id || $id_customer == null || $session_id == null) {
               $this->output
                    ->set_status_header(401)
                    ->set_content_type('application/json')
                    ->_display();
               exit;
          }

          $response = $this->DetailModel->hapusDisukai($id_rumah, $id_customer);

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function rumahSuka($id_rumah)

     {

          $response = $this->DetailModel->rumahSuka($id_rumah);

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function rumahBatalSuka($id_rumah)

     {

          $response = $this->DetailModel->rumahBatalSuka($id_rumah);

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }



     public function getRumahSuka($id_customer)

     {

          $response = $this->DetailModel->getRumahSuka($id_customer)->result();

          $this->output

               ->set_status_header(200)

               ->set_content_type('application/json')

               ->set_output(json_encode($response, JSON_PRETTY_PRINT))

               ->_display();

          exit;
     }

     public function detail_redirect($id_rumah)
     {
          redirect(base_url('detail_koleksi/' . $id_rumah));
     }







     public function detail_new($id_rumah)

     {
          $data['halaman'] = 'demo/detail_koleksi';
          $data['id_rumah'] = $id_rumah;
          $data['produk_popular'] = $this->DesainModel->getKatalogProdukPopular()->result();
          $data['konsep'] = $this->DetailModel->getDetailKonsep($id_rumah)->row();
          $data['konsep_desain'] = $this->DetailModel->getDetailKonsepDesain($id_rumah)->row();
          $data['title'] = $data['konsep']->nama_rumah;
          $data['interior'] = $this->DetailModel->getDetailFotoDenahLantai1($id_rumah)->row();
          $data['interior2'] = $this->DetailModel->getDetailFotoDenahLantai2($id_rumah)->row();
          $data['interior3'] = $this->DetailModel->getDetailFotoDenahLantai3($id_rumah)->row();
          $data['denah1'] = $this->DetailModel->getDetailDenahLantai1($id_rumah)->result();
          $data['denah2'] = $this->DetailModel->getDetailDenahLantai2($id_rumah)->result();
          $data['denah3'] = $this->DetailModel->getDetailDenahLantai3($id_rumah)->result();
          $data['spesifikasi'] = $this->DetailModel->getDetailSpesifikasi($id_rumah)->result();

          $data['terjual'] = $this->DetailModel->getRumahTerjual($id_rumah)->row();
          $data['gaya_desain'] = $this->DetailModel->getDetailGayaDesain($id_rumah)->result();
          $data['foto_rumah'] = $this->DetailModel->getFotoRumah($id_rumah)->result();
          $data['produk_serupa'] = $this->DetailModel->getRumahSerupa($id_rumah)->result();
          $data['rating_desain'] = $this->DetailModel->getRating($id_rumah)->row();
          $data['rating_lima'] = $this->DetailModel->getRatingLima($id_rumah)->result();
          $data['rating_empat'] = $this->DetailModel->getRatingEmpat($id_rumah)->result();
          $data['rating_tiga'] = $this->DetailModel->getRatingTiga($id_rumah)->result();
          $data['rating_dua'] = $this->DetailModel->getRatingDua($id_rumah)->result();
          $data['rating_satu'] = $this->DetailModel->getRatingSatu($id_rumah)->result();

          $lantai = $data['konsep']->lantai;
          $gaya_desain_id = $this->DetailModel->getDetailGayaDesainId($id_rumah)->result();
          $id_array = array();
          foreach ($gaya_desain_id as $item) {
               $id_array[] = $item->id_gaya_desain;
          }
          $id_gaya_desain = implode(",", $id_array);
          $max_lebar = $data['konsep']->lebar_lahan;
          $max_panjang = $data['konsep']->panjang_lahan;


          $rekomendasi = $this->DesainModel->getKatalogProdukNew(null, null, 0, (int)$max_panjang, 0, (int)$max_lebar, $lantai, null, $id_gaya_desain, null, null, null, 11)->result();

          $data['produk_rekomendasi'] = array_filter($rekomendasi, function ($item) use ($id_rumah) {
               return $item->id_rumah !== $id_rumah;
          });

          if (empty($data['produk_rekomendasi'])) {
               $rekomendasi = $this->DesainModel->getKatalogProdukNew(null, null, 0, (int)$max_panjang, 0, (int)$max_lebar, $lantai, null, '', null, null, null, 11)->result();
               $data['produk_rekomendasi'] = array_filter($rekomendasi, function ($item) use ($id_rumah) {
                    return $item->id_rumah !== $id_rumah;
               });
          }

          //$data['ulasan'] = $this->DetailModel->getUlasan($id_rumah)->result();
          $this->DetailModel->simpanDilihat($id_rumah);

          $this->load->view('demo/layout/layout', $data);
     }
}
