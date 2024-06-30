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

      return $this->db->query("SELECT artikel.* FROM artikel WHERE `status` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc limit 1");
   }

   function getArtikelMukaRight()

   {

      return $this->db->query("SELECT artikel.* FROM artikel WHERE `status` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc limit 4");
   }

   function getDetailArtikel($id_artikel)

   {

      return $this->db->query("SELECT artikel.* FROM artikel where id_artikel = '{$id_artikel}'");
   }
}
