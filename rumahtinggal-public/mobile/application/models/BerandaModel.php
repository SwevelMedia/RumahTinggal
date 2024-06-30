<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class BerandaModel extends CI_Model {
	function getBannerHeader() {
    	return $this->db->where('aktif','1')->get('banner_header');
    }
}