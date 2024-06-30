<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class WilayahModel extends CI_Model {
  
    public $tabel_provinsi = "provinsi";
    public $tabel_kabupaten = "kabupaten";
    public $tabel_kecamatan = "kecamatan";
    public $tabel_kelurahan = "kelurahan";
  
  
    function getListWilayahProvinsi($keyword,$page,$limit) {
        return $this->db->select("id_prov as id, nama as text")
                        ->like("nama", $keyword)
                        ->get($this->tabel_provinsi, $limit, $page)->result_array();
    } 
  
    function getListWilayahKabupaten($keyword,$page,$limit,$provinsi) {
        return $this->db->select("id_kab as id, nama as text")
                        ->like("nama", $keyword)
                        ->where("id_prov", $provinsi)
                        ->get($this->tabel_kabupaten, $limit, $page)->result_array();
    }
  
    function getListWilayahKecamatan($keyword,$page,$limit,$kabupaten) {
        return $this->db->select("id_kec as id, nama as text")
                        ->like("nama", $keyword)
                        ->where("id_kab", $kabupaten)
                        ->get($this->tabel_kecamatan, $limit, $page)->result_array();
    }
  
    function getListWilayahKelurahan($keyword,$page,$limit,$kecamatan) {
        return $this->db->select("id_kel as id, nama as text")
                        ->like("nama", $keyword)
                        ->where("id_kec", $kecamatan)
                        ->get($this->tabel_kelurahan, $limit, $page)->result_array();
    }

	function getJumlahListWilayahProvinsi($keyword){
            return $this->db->like("nama", $keyword)
						->count_all_results($this->tabel_provinsi);
	}
  
    function getJumlahListWilayahKabupaten($keyword,$provinsi){
            return $this->db->where("id_prov",$provinsi)
						->like("nama", $keyword)
						->count_all_results($this->tabel_kabupaten);
	}

    function getJumlahListWilayahKecamatan($keyword,$kabupaten){
            return $this->db->where("id_kab",$kabupaten)
						->like("nama", $keyword)
						->count_all_results($this->tabel_kecamatan);
	}
  
    function getJumlahListWilayahKelurahan($keyword,$kecamatan){
            return $this->db->where("id_kec",$kecamatan)
						->like("nama", $keyword)
						->count_all_results($this->tabel_kelurahan);
	}
  
  
}