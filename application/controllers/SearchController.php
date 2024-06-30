<?php

defined('BASEPATH') or exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");



class SearchController extends CI_Controller
{
    // public function __construct()

    // {

    //     parent::__construct();

    //     $this->load->model("SearchModel");
    // }

    // public function simpanTerm($term)
    // {
    //     $response = $this->SearchModel->simpanTerm($term);

    //     $this->output

    //         ->set_status_header(200)

    //         ->set_content_type('application/json')

    //         ->set_output(json_encode($response, JSON_PRETTY_PRINT))

    //         ->_display();

    //     exit;
    // }

    // public function getFrequentlySearchedTerms($limit)
    // {
    //     $result = $this->SearchModel->getFrequentlySearchedTerms($limit);

    //     $this->output

    //         ->set_status_header(200)

    //         ->set_content_type('application/json')

    //         ->set_output(json_encode($result, JSON_PRETTY_PRINT))

    //         ->_display();

    //     exit;
    // }
}
