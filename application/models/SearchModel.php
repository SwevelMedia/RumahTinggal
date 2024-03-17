<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class SearchModel extends CI_Model
{

    // public $tabel = 'search';

    // function simpanTerm($term)
    // {
    //     $existing_term_query = $this->db->query("SELECT * FROM search WHERE term = ?", $term)->result();
    //     if ($existing_term_query) {
    //         // If term exists, increment count
    //         $update_query = $this->db->query("UPDATE search SET count = count + 1, updated_at = NOW() WHERE term = ?", $term);
    //         return [
    //             "message" => "term updated"
    //         ];
    //     } else {
    //         $insert_query = $this->db->query("INSERT INTO search (term, count, created_at, updated_at) VALUES (?, 1, NOW(), NOW())", $term);
    //         return [
    //             "message" => "term inserted"
    //         ];
    //     }
    // }

    // function getFrequentlySearchedTerms($limit = 4)
    // {
    //     $result = $this->db->query("SELECT term, count FROM search ORDER BY count DESC LIMIT ?", [(int)$limit]);
    //     return $result;
    // }
}
