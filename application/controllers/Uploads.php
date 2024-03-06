<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class Uploads extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function upload_files()
    {
        if (!empty($_FILES['userfile']['name'])) {
            $_FILES['file']['name'] = $_FILES['userfile']['name'];
            $_FILES['file']['type'] = $_FILES['userfile']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['userfile']['error'];
            $_FILES['file']['size'] = $_FILES['userfile']['size'];
            $config['upload_path'] = 'assets/img/customer';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $result = [
                    'error' => $this->upload->display_errors()
                ];
                print_r($result);
                return 0;
            } else {
                $this->upload->data();
            }
        }
    }
    function remove()
    {
        $targetDir = "assets/img/customer/";
        $request = $_POST['request'];
        if ($request == 2) {
            $filename = $targetDir . $_POST['name'];
            unlink($filename);
            exit();
        }
    }


    function upload_bukti()
    {
        if (!empty($_FILES['userfile']['name'])) {
            $_FILES['file']['name'] = $_FILES['userfile']['name'];
            $_FILES['file']['type'] = $_FILES['userfile']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['userfile']['error'];
            $_FILES['file']['size'] = $_FILES['userfile']['size'];
            $config['upload_path'] = 'assets/img/bukti_transaksi';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $result = [
                    'error' => $this->upload->display_errors()
                ];
                print_r($result);
                return 0;
            } else {
                $this->upload->data();
            }
        }
    }
    function remove_bukti()
    {
        $targetDir = "assets/img/bukti_transaksi/";
        $request = $_POST['request'];
        if ($request == 2) {
            $filename = $targetDir . $_POST['name'];
            unlink($filename);
            exit();
        }
    }


    function upload_review()
    {
        if (!empty($_FILES['userfile']['name'])) {
            $_FILES['file']['name'] = $_FILES['userfile']['name'];
            $_FILES['file']['type'] = $_FILES['userfile']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['userfile']['error'];
            $_FILES['file']['size'] = $_FILES['userfile']['size'];
            $config['upload_path'] = 'assets/img/foto_paket';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $result = [
                    'error' => $this->upload->display_errors()
                ];
                print_r($result);
                return 0;
            } else {
                $this->upload->data();
            }
        }
    }
    function remove_review()
    {
        $targetDir = "assets/img/foto_paket/";
        $request = $_POST['request'];
        if ($request == 2) {
            $filename = $targetDir . $_POST['name'];
            unlink($filename);
            exit();
        }
    }
}
