<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class ArtikelModel extends CI_Model

{

   function getArtikel($id = false)

   {

      if (!$id) {
         return $this->db->query("SELECT artikel.* FROM artikel WHERE `status` = 1 AND `approve` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc");
      } else {
         return $this->db->query("SELECT artikel.* FROM artikel where id_artikel != $id AND `status` = 1 AND `approve` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc limit 5");
      }
   }

   function getArtikelMuka()

   {
      return $this->db->query("
      SELECT * 
      FROM artikel 
      RIGHT JOIN penulis ON artikel.dibuat_oleh = penulis.id_penulis
      WHERE artikel.status = 1 
      AND artikel.approve = 1
      AND artikel.tgl_dibuat <= '" . date("Y-m-d") . "' 
      AND artikel.id_artikel >= 27
      LIMIT 4
  ");
   }

   function getArtikelMukaRight()

   {

      return $this->db->query("SELECT * FROM artikel RIGHT JOIN penulis ON artikel.dibuat_oleh = penulis.id_penulis WHERE `status` = 1 AND `approve` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "' ORDER BY tgl_dibuat desc limit 5");
   }

   function getPopularArtikel()

   {

      return $this->db->query("SELECT * FROM artikel RIGHT JOIN penulis ON artikel.dibuat_oleh = penulis.id_penulis WHERE `status` = 1 AND `approve` = 1 AND `tgl_dibuat` <= '" . date("Y-m-d") . "'order by dilihat desc limit 5");
   }

   function getTerbaruArtikel()

   {

      return $this->db->query("
        SELECT * 
        FROM artikel 
        RIGHT JOIN penulis ON artikel.dibuat_oleh = penulis.id_penulis
        WHERE `status` = 1
        AND `approve` = 1 
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
      $this->db->select('artikel.*, penulis.*');
      $this->db->from('artikel'); // Main table
      $this->db->join('penulis', 'artikel.dibuat_oleh = penulis.id_penulis', 'right'); // Right join
      $this->db->where('artikel.id_artikel', $id_artikel); // Where condition

      $query = $this->db->get();

      return $query->row();
   }

   public function getAllArtikel()
   {
      return $this->db->query("SELECT * FROM artikel WHERE `status` = 1 AND `approve` = 1 ORDER BY  tgl_dibuat DESC")->result();
   }

   public function searchArtikel($search = '')
   {
      $searchTerms = explode(' ', $search);
      // Start building the query
      $this->db->from('artikel');
      $this->db->join('penulis', 'artikel.dibuat_oleh = penulis.id_penulis', 'right');
      $this->db->where('status', 1);
      $this->db->where('approve', 1);
      $this->db->where('tgl_dibuat <=', date("Y-m-d"));

      // Apply the like conditions for each search term
      $this->db->group_start();  // Start a group of OR conditions

      foreach ($searchTerms as $term) {
         $this->db->or_like('judul_artikel', $term);
         $this->db->or_like('isi_artikel', $term);
      }

      $this->db->group_end();  // End the group of OR conditions

      // Execute the query
      $query = $this->db->get();

      $results = $query->result();
      foreach ($results as $result) {
         $result->relevance = $this->calculateRelevanceScore($result->judul_artikel, $result->isi_artikel, $searchTerms);
      }

      usort($results, function ($a, $b) {
         return $b->relevance - $a->relevance;
      });

      return $results;
   }

   private function calculateRelevanceScore($title, $content, $searchTerms)
   {
      $score = 0;
      foreach ($searchTerms as $term) {
         if (stripos($title, $term) !== false) {
            $score++;
         }
         if (stripos($content, $term) !== false) {
            $score++;
         }
      }
      return $score;
   }

   public function getArtikelByTags($tags)
   {
      $tags_array = explode(',', $tags);
      foreach ($tags_array as &$tag) {
         $tag = trim($tag);
      }
      $this->db->select('*');
      $this->db->from('artikel');
      $this->db->join('penulis', 'artikel.dibuat_oleh = penulis.id_penulis', 'right');
      $this->db->where('status', 1);
      $this->db->where('approve', 1);


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
}
