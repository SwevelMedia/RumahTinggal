<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class BerandaModel extends CI_Model
{

	function getBannerHeader()
	{

		return $this->db->where('aktif', '1')->get('banner_header');
	}

	public function getTestimoni()
	{
		$query = $this->db->get('testimoni'); // 'testimoni' adalah nama tabel dalam contoh ini
		return $query->result(); // Mengembalikan hasil query dalam bentuk array objek
	}
}
