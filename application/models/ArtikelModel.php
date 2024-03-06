<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class ArtikelModel extends CI_Model

{

   function getArtikel($id = false)

   {

      if (!$id) {
         return $this->db->query("SELECT artikel.* FROM artikel WHERE `status` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc");
      } else {
         return $this->db->query("SELECT artikel.* FROM artikel where id_artikel != $id AND `status` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc limit 5");
      }
   }

   function getArtikelMuka()

   {

      return $this->db->query("
        SELECT artikel.* 
        FROM artikel 
        WHERE `status` = 1 
        AND `tgl_dibuat` <= '" . date("Y-m-d") . "' 
        AND `id_artikel` >= 27
        LIMIT 4
    ");
   }

   function getArtikelMukaRight()

   {

      return $this->db->query("SELECT artikel.* FROM artikel WHERE `status` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc limit 5");
   }

   function getPopularArtikel()

   {

      return $this->db->query("SELECT artikel.* FROM artikel WHERE `status` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' limit 5");
   }

   function getTerbaruArtikel()

   {

      return $this->db->query("
        SELECT artikel.* 
        FROM artikel 
        WHERE `status` = 1 
        AND `tgl_dibuat` <= '" . date("Y-m-d") . "' 
        AND `id_artikel` >= 20
        LIMIT 1
    ");
   }

   // public function getDetailArtikel($id_artikel)
   // {
   //    return $this->db->query("SELECT * FROM artikel WHERE id_artikel = ?", array($id_artikel))->row();
   // }


   public function getDetailArtikel($id_artikel)
   {
      $query = $this->db->get_where('artikel', array('id_artikel' => $id_artikel));
      return $query->row();
   }

   public function getAllArtikel()
   {
      return $this->db->query("SELECT * FROM artikel ORDER BY tgl_dibuat DESC")->result();
   }
}
