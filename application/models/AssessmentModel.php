<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class AssessmentModel extends CI_Model
{

    public $from = 'SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 AND rumah.publish = 1 AND rumah.approve = 1 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah';

    public function getAssessmentProduk($data)
    {
        $lebar_lahan = $data['lebar_lahan'];
        $lebar_lahan_min =  explode(';', $lebar_lahan)[0];
        $lebar_lahan_max = explode(';', $lebar_lahan)[1];

        $panjang_lahan = $data['panjang_lahan'];
        $panjang_lahan_min =  explode(';', $panjang_lahan)[0];
        $panjang_lahan_max = explode(';', $panjang_lahan)[1];

        $lantai = implode(',', $data['lantai']);;
        $muka = implode(',', $data['muka']);;
        $kamar_tidur = $data['jum_kamar_tidur'];
        $toilet_dalam = $data['kamar_mandi_dalam'];
        $wastafel = $data['wastafel'];
        $kloset_duduk = $data['kloset_duduk'];
        $kloset_jongkok = $data['kloset_jongkok'];
        $jum_toilet = $data['jum_toilet'];
        $ruang_lain = implode(',', $data['ruang_lain']);
        $gaya_desain = implode(',', $data['gaya_desain']);;
        $material = implode(',', $data['material']);;


        $harga_konstruksi = $data['harga_konstruksi'];

        $harga_konstruksi_min =  explode(';', $harga_konstruksi)[0];
        $harga_konstruksi_max = explode(';', $harga_konstruksi)[1];




        $where = 'e.id_rumah=ruang_rumah.id_rumah AND e.id_rumah=gaya_desain_rumah.id_rumah AND e.id_rumah=palet_material.id_rumah AND e.id_arsitek=arsitek.id_arsitek AND harga_konstruksi.id_rumah = e.id_rumah';
        if ($panjang_lahan != '') $where .= ' AND panjang_lahan BETWEEN ' . $panjang_lahan_min . ' AND ' . $panjang_lahan_max . '';
        if ($lebar_lahan != '') $where .= ' AND lebar_lahan BETWEEN ' . $lebar_lahan_min . ' AND ' . $lebar_lahan_max . '';
        if ($lantai != '0') $where .= ' AND e.lantai IN (' . $lantai . ')';
        if ($muka != '0') $where .= ' AND e.muka IN (' . $muka . ')';
        if ($kamar_tidur != '') $where .= ' AND kamar_tidur IN (' . $kamar_tidur . ')';
        // if ($toilet_dalam == '1') $where .= ' AND e.toilet_dalam IN ('.$toilet_dalam.') ';
        // if ($toilet_dalam == '2') $where .= ' AND e.toilet_dalam NOT IN ('.$toilet_dalam.') ';
        // if ($toilet_dalam == '2') $where .= ' AND a.toilet_dalam == 2 ';
        if ($harga_konstruksi != '') $where .= ' AND harga_konstruksi BETWEEN ' . $harga_konstruksi_min . ' AND ' . $harga_konstruksi_max . '';
        if ($wastafel != '0') $where .= ' AND e.wastafel IN (' . $wastafel . ')';
        // if ($wastafel == '2') $where .= ' AND a.wastafel == 2';
        // if ($kloset_duduk == '1') $where .= ' AND e.kloset_duduk IN ('.$kloset_duduk.',2)';
        // if ($kloset_jongkok == '1') $where .= ' AND e.kloset_jongkok IN ('.$kloset_jongkok.',2)';

        if ($kloset_duduk == '1' && $kloset_jongkok == '1') $where .= ' AND e.kloset_duduk IN (' . $kloset_duduk . ',2) AND e.kloset_jongkok IN (' . $kloset_jongkok . ',2)';
        if ($kloset_duduk == '1' && $kloset_jongkok != '1') $where .= ' AND e.kloset_duduk IN (' . $kloset_duduk . ') AND e.kloset_jongkok IN (2)';
        if ($kloset_duduk != '1' && $kloset_jongkok == '1') $where .= ' AND e.kloset_duduk IN (2) AND e.kloset_jongkok IN (' . $kloset_jongkok . ')';

        if ($jum_toilet != '') $where .= ' AND e.toilet IN (' . $jum_toilet . ')';
        if ($gaya_desain != '0') $where .= ' AND gaya_desain_rumah.id_gaya_desain IN (' . $gaya_desain . ')';
        if ($ruang_lain != '0') $where .= ' AND ruang_rumah.id_ruang IN (' . $ruang_lain . ')';
        if ($material != '0') $where .= ' AND palet_material.id_material IN (' . $material . ')';

        $selectstar = '';
        if ($toilet_dalam == '1') $selectstar .= 'SELECT d.*, count(ruang_rumah.id_ruang) AS toilet_dalam FROM (';
        $selectend = '';
        if ($toilet_dalam == '1') $selectend .= ' ) d, ruang_rumah WHERE d.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 15 GROUP BY d.id_rumah';

        // return $this->db->query("SELECT f.kamar_tidur,f.toilet,f.toiletwc,f.id_rumah,f.foto, f.nama_rumah, f.id_arsitek, f.nama_arsitek,f.luas_lahan, f.lebar_lahan , f.panjang_lahan, f.luas_bangunan, lantai, suka, dilihat,round(AVG(ulasan.rating),1) AS rating FROM (SELECT e.kamar_tidur,e.toilet,e.toiletwc,e.id_rumah,e.foto, e.nama_rumah, e.id_arsitek, arsitek.nama_arsitek,ROUND(e.luas_lahan) AS luas_lahan, ROUND(e.lebar_lahan) AS lebar_lahan , ROUND(e.panjang_lahan) AS panjang_lahan, ROUND(e.luas_bangunan) AS luas_bangunan,e.lantai AS lantai,e.suka, e.dilihat FROM ($selectstar SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah $selectend) e,ruang_rumah,gaya_desain_rumah,arsitek,palet_material WHERE $where GROUP BY id_rumah,e.lantai)f, ulasan where ulasan.rating IN (0,1,2,3,4,null) GROUP BY id_rumah");   

        return $this->db->query("SELECT f.kamar_tidur,f.toilet,f.toiletwc,f.id_rumah,f.foto, f.nama_rumah, f.id_arsitek, f.nama_arsitek,f.luas_lahan, f.lebar_lahan , f.panjang_lahan, f.luas_bangunan, lantai, suka, dilihat, f.rating,f.harga_konstruksi FROM (SELECT e.kamar_tidur,e.toilet,e.toiletwc,e.id_rumah,e.foto, e.nama_rumah, e.id_arsitek, arsitek.nama_arsitek,ROUND(e.luas_lahan) AS luas_lahan, ROUND(e.lebar_lahan) AS lebar_lahan , ROUND(e.panjang_lahan) AS panjang_lahan, ROUND(e.luas_bangunan) AS luas_bangunan,e.lantai AS lantai,e.suka, e.dilihat,round(AVG(e.rating),1) AS rating,harga_konstruksi FROM (SELECT g.*, IFNULL(ulasan.rating,0) AS rating FROM ($selectstar SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 AND rumah.publish = 1 AND rumah.approve = 1 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah $selectend) g LEFT JOIN ulasan ON g.id_rumah = ulasan.id_rumah) e,ruang_rumah,gaya_desain_rumah,arsitek,palet_material,harga_konstruksi WHERE $where GROUP BY id_rumah,e.lantai)f GROUP BY id_rumah");
    }

    public function getAssessmentProdukDemo($data)
    {
        $lebar_lahan = $data['lebar_lahan'];
        $lebar_lahan_min =  0;
        $lebar_lahan_max = $lebar_lahan;

        $panjang_lahan = $data['panjang_lahan'];
        $panjang_lahan_min = 0;
        $panjang_lahan_max = $panjang_lahan;

        $lantai = implode(',', $data['lantai']);;
        $muka = implode(',', $data['muka']);;
        $kamar_tidur = $data['jum_kamar_tidur'];
        $toilet_dalam = $data['kamar_mandi_dalam'];
        $wastafel = $data['wastafel'];
        $kloset_duduk = $data['kloset_duduk'];
        $kloset_jongkok = $data['kloset_jongkok'];
        $jum_toilet = $data['jum_toilet'];
        $ruang_lain = implode(',', $data['ruang_lain']);
        $gaya_desain = implode(',', $data['gaya_desain']);;
        $material = implode(',', $data['material']);;


        $harga_konstruksi = $data['harga_konstruksi'];

        $harga_konstruksi_min =  explode(';', $harga_konstruksi)[0];
        $harga_konstruksi_max = explode(';', $harga_konstruksi)[1];




        $where = 'e.id_rumah=ruang_rumah.id_rumah AND e.id_rumah=gaya_desain_rumah.id_rumah AND e.id_rumah=palet_material.id_rumah AND e.id_arsitek=arsitek.id_arsitek AND harga_konstruksi.id_rumah = e.id_rumah';
        if ($panjang_lahan != '') $where .= ' AND panjang_lahan BETWEEN ' . $panjang_lahan_min . ' AND ' . $panjang_lahan_max . '';
        if ($lebar_lahan != '') $where .= ' AND lebar_lahan BETWEEN ' . $lebar_lahan_min . ' AND ' . $lebar_lahan_max . '';
        if ($lantai != '0') $where .= ' AND e.lantai IN (' . $lantai . ')';
        if ($muka != '0') $where .= ' AND e.muka IN (' . $muka . ')';
        if ($kamar_tidur != '') $where .= ' AND kamar_tidur IN (' . $kamar_tidur . ')';
        // if ($toilet_dalam == '1') $where .= ' AND e.toilet_dalam IN ('.$toilet_dalam.') ';
        // if ($toilet_dalam == '2') $where .= ' AND e.toilet_dalam NOT IN ('.$toilet_dalam.') ';
        // if ($toilet_dalam == '2') $where .= ' AND a.toilet_dalam == 2 ';
        if ($harga_konstruksi != '') $where .= ' AND harga_konstruksi BETWEEN ' . $harga_konstruksi_min . ' AND ' . $harga_konstruksi_max . '';
        if ($wastafel != '0') $where .= ' AND e.wastafel IN (' . $wastafel . ')';
        // if ($wastafel == '2') $where .= ' AND a.wastafel == 2';
        // if ($kloset_duduk == '1') $where .= ' AND e.kloset_duduk IN ('.$kloset_duduk.',2)';
        // if ($kloset_jongkok == '1') $where .= ' AND e.kloset_jongkok IN ('.$kloset_jongkok.',2)';

        if ($kloset_duduk == '1' && $kloset_jongkok == '1') $where .= ' AND e.kloset_duduk IN (' . $kloset_duduk . ',2) AND e.kloset_jongkok IN (' . $kloset_jongkok . ',2)';
        if ($kloset_duduk == '1' && $kloset_jongkok != '1') $where .= ' AND e.kloset_duduk IN (' . $kloset_duduk . ') AND e.kloset_jongkok IN (2)';
        if ($kloset_duduk != '1' && $kloset_jongkok == '1') $where .= ' AND e.kloset_duduk IN (2) AND e.kloset_jongkok IN (' . $kloset_jongkok . ')';

        if ($jum_toilet != '') $where .= ' AND e.toilet IN (' . $jum_toilet . ')';
        if ($gaya_desain != '0') $where .= ' AND gaya_desain_rumah.id_gaya_desain IN (' . $gaya_desain . ')';
        if ($ruang_lain != '0') $where .= ' AND ruang_rumah.id_ruang IN (' . $ruang_lain . ')';
        if ($material != '0') $where .= ' AND material.urut IN (' . $material . ')';

        $selectstar = '';
        if ($toilet_dalam == '1') $selectstar .= 'SELECT d.*, count(ruang_rumah.id_ruang) AS toilet_dalam FROM (';
        $selectend = '';
        if ($toilet_dalam == '1') $selectend .= ' ) d, ruang_rumah WHERE d.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 15 GROUP BY d.id_rumah';

        // return $this->db->query("SELECT f.kamar_tidur,f.toilet,f.toiletwc,f.id_rumah,f.foto, f.nama_rumah, f.id_arsitek, f.nama_arsitek,f.luas_lahan, f.lebar_lahan , f.panjang_lahan, f.luas_bangunan, lantai, suka, dilihat,round(AVG(ulasan.rating),1) AS rating FROM (SELECT e.kamar_tidur,e.toilet,e.toiletwc,e.id_rumah,e.foto, e.nama_rumah, e.id_arsitek, arsitek.nama_arsitek,ROUND(e.luas_lahan) AS luas_lahan, ROUND(e.lebar_lahan) AS lebar_lahan , ROUND(e.panjang_lahan) AS panjang_lahan, ROUND(e.luas_bangunan) AS luas_bangunan,e.lantai AS lantai,e.suka, e.dilihat FROM ($selectstar SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah $selectend) e,ruang_rumah,gaya_desain_rumah,arsitek,palet_material WHERE $where GROUP BY id_rumah,e.lantai)f, ulasan where ulasan.rating IN (0,1,2,3,4,null) GROUP BY id_rumah");   

        return $this->db->query("SELECT f.kamar_tidur,f.toilet,f.toiletwc,f.id_rumah,f.foto, f.nama_rumah, f.id_arsitek, f.nama_arsitek,f.luas_lahan, f.lebar_lahan , f.panjang_lahan, f.luas_bangunan, lantai, suka, dilihat, f.rating,f.harga_konstruksi FROM (SELECT e.kamar_tidur,e.toilet,e.toiletwc,e.id_rumah,e.foto, e.nama_rumah, e.id_arsitek, arsitek.nama_arsitek,ROUND(e.luas_lahan) AS luas_lahan, ROUND(e.lebar_lahan) AS lebar_lahan , ROUND(e.panjang_lahan) AS panjang_lahan, ROUND(e.luas_bangunan) AS luas_bangunan,e.lantai AS lantai,e.suka, e.dilihat,round(AVG(e.rating),1) AS rating,harga_konstruksi FROM (SELECT g.*, IFNULL(ulasan.rating,0) AS rating FROM ($selectstar SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 AND rumah.publish = 1 AND rumah.approve = 1 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah $selectend) g LEFT JOIN ulasan ON g.id_rumah = ulasan.id_rumah) e,ruang_rumah,gaya_desain_rumah,arsitek,palet_material, material, harga_konstruksi WHERE $where AND palet_material.id_bagian_rumah = material.id_bagian_rumah AND palet_material.id_material = material.id_material GROUP BY id_rumah,e.lantai)f GROUP BY id_rumah");
    }

    public function getLebarPanjangLahan()
    {
        return $this->db->query("SELECT MIN(lebar_lahan) AS min_lebar_lahan, MAX(lebar_lahan) AS max_lebar_lahan, MIN(panjang_lahan) AS min_panjang_lahan,MAX(panjang_lahan) AS max_panjang_lahan FROM rumah");
    }

    public function getJumlahLantai()
    {
        return $this->db->query("SELECT MAX(lantai) AS jumlah_lantai FROM denah");
    }

    public function getMukaBangunan()
    {
        return $this->db->query("SELECT MAX(muka) AS muka FROM rumah");
    }

    public function getJumlahKamarTidur()
    {
        return $this->db->query("SELECT MAX(a.kamar_tidur) AS jumlah_kamar_tidur FROM (SELECT COUNT(id_ruang) AS kamar_tidur FROM ruang_rumah WHERE id_ruang = 7 group by id_rumah)a");
    }

    public function getRuangLain()
    {
        return $this->db->query("SELECT * FROM ruang where ruang not in ('Kamar Tidur', 'Klinik', 'Apotik', 'Toko', 'Toilet', 'Toilet dalam', 'Ruang Panel')");
    }

    public function getGayaDesain()
    {
        return $this->db->query("SELECT * FROM gaya_desain");
    }

    public function getMaterialBangunan()
    {
        return $this->db->query("SELECT material.*, bagian_rumah.bagian_rumah FROM material,bagian_rumah WHERE material.id_bagian_rumah = bagian_rumah.id_bagian_rumah AND material.urut in (1,2,3,4,5,6,20,22,23,33,34,35,40,39,43,47,49,50)");
    }

    public function getBagianRumah()
    {
        return $this->db->query("SELECT * from bagian_rumah");
    }
}

// SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ({$this->from}) b, ulasan

//SELECT b.kamar_tidur,b.toilet,b.toiletwc,b.id_rumah,b.foto, b.nama_rumah, b.id_arsitek, b.nama_arsitek,b.luas_lahan, b.lebar_lahan , b.panjang_lahan, b.luas_bangunan, lantai, suka, dilihat, b.rating, b.harga_konstruksi FROM (SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan,a.lantai AS lantai,a.tgl_buat,a.tgl_update,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating,gaya_desain_rumah.id_gaya_desain,gaya_desain.gaya_desain, harga_konstruksi FROM (SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ({$this->from}) b, ulasan) a,arsitek,ruang_rumah,gaya_desain,gaya_desain_rumah,ulasan,harga_konstruksi WHERE $where GROUP BY id_rumah,a.lantai $having)b GROUP BY id_rumah $orderby");

// SELECT f.kamar_tidur,f.toilet,f.toiletwc,f.id_rumah,f.foto, f.nama_rumah, f.id_arsitek, f.nama_arsitek,f.luas_lahan, f.lebar_lahan , f.panjang_lahan, f.luas_bangunan, lantai, suka, dilihat,round(AVG(ulasan.rating),1) AS rating FROM (SELECT e.kamar_tidur,e.toilet,e.toiletwc,e.id_rumah,e.foto, e.nama_rumah, e.id_arsitek, arsitek.nama_arsitek,ROUND(e.luas_lahan) AS luas_lahan, ROUND(e.lebar_lahan) AS lebar_lahan , ROUND(e.panjang_lahan) AS panjang_lahan, ROUND(e.luas_bangunan) AS luas_bangunan,e.lantai AS lantai,e.suka, e.dilihat FROM (

// SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ( $selectstar SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah $selectend) b, ulasan


   

// ) e,ruang_rumah,gaya_desain_rumah,arsitek,palet_material WHERE $where GROUP BY id_rumah,e.lantai)f, ulasan where ulasan.rating IN (0,1,2,3,4,null) GROUP BY id_rumah


// SELECT b.kamar_tidur,b.toilet,b.toiletwc,b.id_rumah,b.foto, b.nama_rumah, b.id_arsitek, b.nama_arsitek,b.luas_lahan, b.lebar_lahan , b.panjang_lahan, b.luas_bangunan, lantai, suka, dilihat, b.rating FROM (SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan,a.lantai AS lantai,a.tgl_buat,a.tgl_update,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating,gaya_desain_rumah.id_gaya_desain,gaya_desain.gaya_desain FROM (
//     SELECT DISTINCT b.*, (CASE WHEN ulasan.id_rumah = b.id_rumah THEN ulasan.rating WHEN ulasan.id_rumah NOT IN (b.id_rumah) THEN 0 END) AS rating FROM ({$this->from}) b, ulasan
// ) a,arsitek,ruang_rumah,gaya_desain,gaya_desain_rumah,ulasan WHERE $where GROUP BY id_rumah,a.lantai)b GROUP BY id_rumah $orderby
