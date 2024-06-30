<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class Uploads extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function upload_files(){
        $this->load->view('customer/upload_foto');
    }
    function remove(){
        $targetDir = "assets/img/customer/";
        $request = $_POST['request'];
        if($request == 2) {
            $filename = $targetDir.$_POST['name'];
            unlink($filename);
            exit();
        }
    }


    function upload_bukti(){
        $this->load->view('customer/upload_bukti');
    }
    function remove_bukti(){
        $targetDir = "assets/img/bukti_transaksi/";
        $request = $_POST['request'];
        if($request == 2) {
            $filename = $targetDir.$_POST['name'];
            unlink($filename);
            exit();
        }
    }


    function upload_review(){
        $this->load->view('customer/upload_review');
    }
    function remove_review(){
        $targetDir = "assets/img/foto_paket/";
        $request = $_POST['request'];
        if($request == 2) {
            $filename = $targetDir.$_POST['name'];
            unlink($filename);
            exit();
        }
    }
}