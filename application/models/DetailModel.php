<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class DetailModel extends CI_Model

{

    public $ulasan = "ulasan";

    public $rumah_disuka = "rumah_disukai";

    public $from = "SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.video,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah LEFT JOIN ruang_rumah ON rumah.id_rumah=ruang_rumah.id_rumah WHERE ruang_rumah.id_ruang = 7 group by rumah.id_rumah )a LEFT JOIN ruang_rumah ON a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b LEFT JOIN ruang_rumah ON b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c LEFT JOIN denah ON c.id_rumah = denah.id_rumah GROUP BY c.id_rumah";





    function getDetailKonsep($id_rumah)

    {

        return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto,a.video, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan,2) AS luas_lahan, a.lebar_lahan, a.panjang_lahan, a.luas_bangunan, a.lantai,a.dilihat,a.suka,arsitek.nama_arsitek FROM ({$this->from}) a LEFT JOIN arsitek ON arsitek.id_arsitek=a.id_arsitek WHERE a.id_rumah = '{$id_rumah}' GROUP BY nama_rumah,lantai order by lantai desc limit 1 ");
    }



    function getDetailKonsepDesain($id_rumah)

    {

        return $this->db->query("SELECT konsep_desain.foto,konsep_desain.konsep_desain FROM konsep_desain WHERE konsep_desain.id_rumah='{$id_rumah}'");
    }



    function getDetailDenahLantai1($id_rumah)

    {

        return $this->db->query("SELECT ruang.ruang, ruang_rumah.label, ruang_rumah.luas FROM ruang, ruang_rumah WHERE ruang_rumah.id_rumah = '{$id_rumah}' AND ruang_rumah.id_ruang = ruang.id_ruang AND ruang_rumah.lantai = 1 ORDER BY CAST(label AS UNSIGNED) asc, label asc ");
    }



    function getDetailDenahLantai2($id_rumah)

    {

        return $this->db->query("SELECT ruang.ruang, ruang_rumah.label, ruang_rumah.luas FROM ruang, ruang_rumah WHERE ruang_rumah.id_rumah = '{$id_rumah}' AND ruang_rumah.id_ruang = ruang.id_ruang AND ruang_rumah.lantai = 2 ORDER BY CAST(label AS UNSIGNED) asc, label asc");
    }



    function getDetailDenahLantai3($id_rumah)

    {

        return $this->db->query("SELECT ruang.ruang, ruang_rumah.label, ruang_rumah.luas FROM ruang, ruang_rumah WHERE ruang_rumah.id_rumah = '{$id_rumah}' AND ruang_rumah.id_ruang = ruang.id_ruang AND ruang_rumah.lantai = 3 ORDER BY CAST(label AS UNSIGNED) asc, label asc");
    }



    function getDetailFotoDenahLantai1($id_rumah)

    {

        return $this->db->query("SELECT denah.* FROM denah WHERE denah.id_rumah = '{$id_rumah}' AND denah.lantai = 1 ");
    }



    function getDetailFotoDenahLantai2($id_rumah)

    {

        return $this->db->query("SELECT denah.* FROM denah WHERE denah.id_rumah = '{$id_rumah}' AND denah.lantai = 2 ");
    }



    function getDetailFotoDenahLantai3($id_rumah)

    {

        return $this->db->query("SELECT denah.* FROM denah WHERE denah.id_rumah = '{$id_rumah}' AND denah.lantai = 3 ");
    }



    function getDetailSpesifikasi($id_rumah)

    {

        return $this->db->query("SELECT material.*, bagian_rumah.bagian_rumah FROM material,palet_material,bagian_rumah WHERE palet_material.id_rumah = '{$id_rumah}' AND material.id_material= palet_material.id_material AND material.id_bagian_rumah= palet_material.id_bagian_rumah AND material.id_bagian_rumah=bagian_rumah.id_bagian_rumah ORDER BY bagian_rumah.id_bagian_rumah ASC");
    }



    function getDetailGayaDesain($id_rumah)

    {

        return $this->db->query("SELECT gaya_desain.gaya_desain FROM gaya_desain,gaya_desain_rumah WHERE gaya_desain.id_gaya_desain = gaya_desain_rumah.id_gaya_desain AND gaya_desain_rumah.id_rumah='{$id_rumah}' ");
    }



    function getFotoRumah($id_rumah)

    {

        return $this->db->query("SELECT rumah_foto.foto FROM rumah_foto,rumah WHERE rumah.id_rumah = rumah_foto.id_rumah AND rumah_foto.id_rumah='{$id_rumah}' ");
    }





    function getVideoRumah($id_rumah)

    {

        return $this->db->query("SELECT rumah_video.video FROM rumah_video,rumah WHERE rumah.id_rumah = rumah_video.id_rumah AND rumah_video.id_rumah='{$id_rumah}' ");
    }



    function getRumahTerjual($id_rumah)

    {

        return $this->db->query("SELECT count(DISTINCT id_customer) as terjual FROM pembelian WHERE id_rumah ='{$id_rumah}' AND status = 1");
    }



    function getRumahSerupa($id_rumah)

    {

        $gaya_desain = "SELECT GROUP_CONCAT(gaya_desain_rumah.id_gaya_desain SEPARATOR ',') AS gaya_desain FROM gaya_desain_rumah WHERE gaya_desain_rumah.id_rumah='{$id_rumah}'";

        return $this->db->query(" SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek,gaya_desain_rumah WHERE a.id_arsitek=arsitek.id_arsitek AND gaya_desain_rumah.id_rumah=a.id_rumah AND gaya_desain_rumah.id_gaya_desain in ($gaya_desain) GROUP BY id_rumah limit 10");
    }



    // SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek,gaya_desain_rumah WHERE a.id_arsitek=arsitek.id_arsitek AND gaya_desain_rumah.id_rumah=a.id_rumah AND gaya_desain_rumah.id_gaya_desain in ($gaya_desain) GROUP BY id_rumah limit 10



    function simpanUlasan($data)
    {
        $val = array(
            'id_rumah' => $data['id_rumah'],
            'id_customer' => $data['id_customer'],
            'ulasan' => $data['ulasan'],
            'rating' => $data['rating'],
            'tgl_buat' => date("Y-m-d"),
            'jam_dibuat' => date("H:m:s")
        );

        $this->db->insert($this->ulasan, $val);
    }

    function getUlasan($id_rumah)
    {
        return $this->db->query("SELECT customer.foto, customer.nama_customer, ulasan.ulasan, ulasan.rating, ulasan.tgl_buat FROM customer, ulasan WHERE id_rumah = '{$id_rumah}' AND ulasan.id_customer= customer.id_customer ORDER BY ulasan.tgl_buat desc");
    }

    function updateUlasanCustomer($id_rumah, $id_customer, $data)
    {
        return $this->db->query("UPDATE ulasan SET ulasan='{$data['ulasan']}',rating='{$data['rating']}' WHERE id_rumah = '{$id_rumah}' AND id_customer = '{$id_customer}'");
    }

    function getUlasanCustomer($id_rumah, $id_customer)
    {
        return $this->db->query("SELECT id_customer FROM ulasan WHERE id_rumah = '{$id_rumah}' AND id_customer = '{$id_customer}'");
    }

    public function countUlasan($id_rumah)
    {
        // Query untuk menghitung total ulasan
        $this->db->where('id_rumah', $id_rumah);
        return $this->db->count_all_results('ulasan');
    }
    function getRating($id_rumah)

    {

        return $this->db->query(" SELECT round(AVG(ulasan.rating),1) AS rating,count(ulasan) AS jumlah_ulasan FROM ulasan WHERE ulasan.id_rumah= '{$id_rumah}'");
    }



    // arsitek

    // function getDetailArsitek($id_arsitek)

    // {

    //     return $this->db->query(" SELECT * FROM `arsitek` WHERE id_arsitek = '{$id_arsitek}' ");
    // }

    // Model (DetailModel.php)
    public function getDetailArsitek($id_arsitek)
    {
        $query = $this->db->get_where('arsitek', array('id_arsitek' => $id_arsitek));
        return $query->row();
    }


    public function getAllArsitek()
    {
        return $this->db->query("SELECT * FROM `arsitek` WHERE nama_arsitek NOT LIKE '%beecons trial%'")->result();
    }



    // artikel

    function getDetailArtikel($id_artikel)

    {

        return $this->db->query(" SELECT * FROM `artikel` WHERE id_artikel = '{$id_artikel}' ");
    }





    // dilihat



    function simpanDilihat($id_rumah)

    {

        return $this->db->query("UPDATE rumah SET dilihat = dilihat+1 WHERE id_rumah= '{$id_rumah}' ");
    }



    //disuka

    function simpanDisukai($data)

    {

        $val = array(

            'id_rumah' => $data['id_rumah'],

            'id_customer' => $data['id_customer'],

            'suka' => $data['suka']

        );



        $this->db->insert($this->rumah_disuka, $val);

        $this->db->query("UPDATE rumah SET suka=suka+1 WHERE id_rumah='{$data['id_rumah']}'");
    }

    function hapusDisukai($id_rumah, $id_customer)

    {

        $this->db->query("DELETE FROM rumah_disukai WHERE id_rumah='{$id_rumah}' AND id_customer='{$id_customer}'");

        $this->db->query("UPDATE rumah SET suka=suka-1 WHERE id_rumah='{$id_rumah}'");
    }

    function rumahSuka($id_rumah)

    {

        return $this->db->query("UPDATE rumah SET suka= suka+1 WHERE id_rumah= '{$id_rumah}' ");
    }

    function rumahBatalSuka($id_rumah)

    {

        return $this->db->query("UPDATE rumah SET suka= suka-1 WHERE id_rumah= '{$id_rumah}' ");
    }

    function getrumahSuka($id_customer)

    {

        return $this->db->query("SELECT * from rumah_disukai WHERE id_customer= '{$id_customer}' ");
    }



    // rating 

    // function getRating($id_rumah){

    //     return $this->db->query("SELECT AVG(rating) FROM ulasan WHERE id_rumah='{$id_rumah}'"); 

    // }
    // function getDesainArsitek($id_arsitek)
    // {
    //     return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM ((SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ({$this->from}) b, ulasan)) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek AND arsitek.id_arsitek='{$id_arsitek}' GROUP BY id_rumah ");
    // }


    // rumah arsitek

    // function getDesainArsitek($id_arsitek)

    // {

    //     return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM ((SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ({$this->from}) b, ulasan)) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek AND arsitek.id_arsitek='{$id_arsitek}' GROUP BY id_rumah ");
    // }

    function getDesainArsitek($id_arsitek, $sort = 'default')

    {
        $sortableColumns = [
            'default' => 'a.id_rumah ASC',
            'populer' => 'a.dilihat DESC',
            'terbaru' => 'a.tgl_update DESC',
            'harga_tertinggi' => 'a.luas_bangunan DESC',
            'harga_terendah' => 'a.luas_bangunan ASC',
        ];

        $sort = array_key_exists($sort, $sortableColumns) ? $sort : 'default';

        // Tentukan kolom pengurutan berdasarkan nilai $sort
        $orderBy = $sortableColumns[$sort];

        $query = "SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM ((SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ({$this->from}) b, ulasan)) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek AND arsitek.id_arsitek='{$id_arsitek}' GROUP BY id_rumah ORDER BY {$orderBy}";
        return $this->db->query($query);
    }




    function getPortofolioArsitek($id_arsitek)

    {

        return $this->db->query(" SELECT * FROM `portofolio_arsitek` WHERE id_arsitek = '{$id_arsitek}' ");
    }



    function getRatingLima($id_rumah)

    {

        return $this->db->query("SELECT (a.jumrating/count(ulasan.rating)*100) AS rating FROM (SELECT count(rating) AS jumrating from ulasan WHERE rating=5 AND id_rumah= '{$id_rumah}')a,ulasan WHERE id_rumah= '{$id_rumah}'");
    }



    function getRatingEmpat($id_rumah)

    {

        return $this->db->query("SELECT (a.jumrating/count(ulasan.rating)*100) AS rating FROM (SELECT count(rating) AS jumrating from ulasan WHERE rating=4 AND id_rumah= '{$id_rumah}')a,ulasan WHERE id_rumah= '{$id_rumah}'");
    }



    function getRatingTiga($id_rumah)

    {

        return $this->db->query("SELECT (a.jumrating/count(ulasan.rating)*100) AS rating FROM (SELECT count(rating) AS jumrating from ulasan WHERE rating=3 AND id_rumah= '{$id_rumah}')a,ulasan WHERE id_rumah= '{$id_rumah}'");
    }



    function getRatingDua($id_rumah)

    {

        return $this->db->query("SELECT (a.jumrating/count(ulasan.rating)*100) AS rating FROM (SELECT count(rating) AS jumrating from ulasan WHERE rating=2 AND id_rumah= '{$id_rumah}')a,ulasan WHERE id_rumah= '{$id_rumah}'");
    }



    function getRatingSatu($id_rumah)

    {

        return $this->db->query("SELECT (a.jumrating/count(ulasan.rating)*100) AS rating FROM (SELECT count(rating) AS jumrating from ulasan WHERE rating=1 AND id_rumah= '{$id_rumah}')a,ulasan WHERE id_rumah= '{$id_rumah}'");
    }
}
