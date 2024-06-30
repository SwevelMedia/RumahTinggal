<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class ArtikelModel extends CI_Model {
   function getArtikel(){
      return $this->db->query("SELECT artikel.* FROM artikel ORDER BY tgl_dibuat desc");
   }
   function getArtikelMuka(){
      return $this->db->query("SELECT artikel.* FROM artikel ORDER BY tgl_dibuat desc limit 1");
   }
    function getArtikelMukaRight(){
      return $this->db->query("SELECT artikel.* FROM artikel ORDER BY tgl_dibuat desc limit 1,4");
   }
   function getDetailArtikel($id_artikel){
      return $this->db->query("SELECT artikel.* FROM artikel where id_artikel = '{$id_artikel}'");
   }
}