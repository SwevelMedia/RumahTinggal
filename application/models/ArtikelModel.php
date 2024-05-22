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

   public function simpanDilihat($id_artikel)
   {
      $this->db->set('dilihat', 'dilihat+1', FALSE);
      $this->db->where('id_artikel', $id_artikel);
      $this->db->update('artikel');
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

   public function searchArtikel($search = '')
   {
      $searchTerms = explode(' ', $search);
      foreach ($searchTerms as $term) {
         $this->db->or_like('judul_artikel', $term);
      }

      $query = $this->db->get('artikel');

      $results = $query->result();
      foreach ($results as $result) {
         $result->relevance = $this->calculateRelevanceScore($result->judul_artikel, $searchTerms);
      }

      usort($results, function ($a, $b) {
         return $b->relevance - $a->relevance;
      });

      return $results;
   }

   public function getArtikelByTags($tags)
   {
      $tags_array = explode(',', $tags);
      foreach ($tags_array as &$tag) {
         $tag = trim($tag);
      }
      $this->db->select('*');
      $this->db->from('artikel');

      // Add WHERE clause for each tag
      $first_tag = true;
      foreach ($tags_array as $tag) {
         if ($first_tag) {
            $this->db->like('tags', $tag);
            $first_tag = false;
         } else {
            $this->db->or_like('tags', $tag);
         }
      }

      $query = $this->db->get();
      return $query->result();
   }

   private function calculateRelevanceScore($title, $searchTerms)
   {
      $score = 0;
      foreach ($searchTerms as $term) {
         if (stripos($title, $term) !== false) {
            $score++;
         }
      }
      return $score;
   }
}
