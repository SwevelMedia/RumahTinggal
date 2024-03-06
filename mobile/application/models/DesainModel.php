<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class DesainModel extends CI_Model
{

  public $from = "SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 AND rumah.publish = 1 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah";


  function getKatalogProdukPopular()
  {

    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek GROUP BY id_rumah order by dilihat desc limit 10");
  }
  function getKatalogProdukFavorit()
  {

    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek GROUP BY id_rumah order by suka desc limit 10");
  }
  function getRumahTerbaru()
  {
    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.tgl_update, a.suka, a.dilihat,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek GROUP BY id_rumah order by tgl_update desc limit 10");
  }
  function getLebarPanjangLahan()
  {
    return $this->db->query("SELECT MIN(lebar_lahan) AS min_lebar_lahan, MAX(lebar_lahan) AS max_lebar_lahan, MIN(panjang_lahan) AS min_panjang_lahan,MAX(panjang_lahan) AS max_panjang_lahan FROM rumah");
  }
  function getKatalogProduk($data)
  {
    $lebar_lahan = $data['lebar_lahan'];
    $panjang_lahan = $data['panjang_lahan'];
    $lantai = $data['lantai'];
    $kamar_tidur = $data['jum_kamar_tidur'];
    $harga_konstruksi = $data['harga_konstruksi'];

    $harga_konstruksi_min =  explode(';', $harga_konstruksi)[0];
    $harga_konstruksi_max = explode(';', $harga_konstruksi)[1];

    $gaya_desain = $data['gaya_desain'];
    $gaya_desain_implode = implode(',', array_slice($data['gaya_desain'], 1));
    $arsitek = $data['nama_arsitek'];
    $ruang_lain = $data['ruang_lain'];
    $ruang_lain_implode = implode(',', array_slice($data['ruang_lain'], 1));
    $order = $data['order'];
    $cari = $data['cari_rumah'];

    $count_ruang_lain = count(array_slice($data['ruang_lain'], 1));
    $where = 'a.id_arsitek=arsitek.id_arsitek AND a.id_rumah=ruang_rumah.id_rumah AND a.id_rumah=gaya_desain_rumah.id_rumah AND gaya_desain_rumah.id_gaya_desain=gaya_desain.id_gaya_desain AND harga_konstruksi.id_rumah = a.id_rumah';
    if ($panjang_lahan != '') $where .= ' AND panjang_lahan <= ' . $panjang_lahan . '';
    if ($lebar_lahan != '') $where .= ' AND lebar_lahan <= ' . $lebar_lahan . '';
    if ($harga_konstruksi != '') $where .= ' AND harga_konstruksi BETWEEN ' . $harga_konstruksi_min . ' AND ' . $harga_konstruksi_max . ''; //SUBSTRING($harga_konstruksi, 1, 9)    //harga_konstruksi BETWEEN SUBSTRING('.$harga_konstruksi.', 1, 9) AND SUBSTRING('.$harga_konstruksi.', 13, 9)
    if ($lantai != '') $where .= ' AND a.lantai IN (' . $lantai . ')';
    if ($kamar_tidur != '') $where .= ' AND kamar_tidur IN (' . $kamar_tidur . ')';
    //if ($gaya_desain != '0') $where .= ' AND gaya_desain_rumah.id_gaya_desain IN ('.$gaya_desain.')';

    if ($gaya_desain_implode != '') $where .= ' AND gaya_desain_rumah.id_gaya_desain IN (' . $gaya_desain_implode . ')';
    if ($arsitek != '') $where .= ' AND a.id_arsitek IN (' . $arsitek . ')';
    if ($cari != '') $where .= ' AND (a.nama_rumah like "%' . $cari . '%" OR gaya_desain like "%' . $cari . '%")';
    if ($ruang_lain_implode != '') $where .= ' AND ruang_rumah.id_ruang IN (' . $ruang_lain_implode . ')';


    $having = '';
    if ($ruang_lain_implode != '') $having .= 'HAVING COUNT(DISTINCT ruang_rumah.id_ruang) =' . $count_ruang_lain . '';

    $orderby = '';
    if ($order == '1') $orderby .= 'ORDER BY b.tgl_update ASC';
    if ($order == '2') $orderby .= 'ORDER BY b.tgl_update DESC';
    if ($order == '3') $orderby .= 'ORDER BY dilihat desc';
    if ($order == '4') $orderby .= 'ORDER BY suka desc';
    if ($order == '5') $orderby .= 'ORDER BY nama_rumah asc';
    if ($order == '6') $orderby .= 'ORDER BY nama_rumah desc';
    if ($order == '7') $orderby .= 'ORDER BY promo desc';

    return $this->db->query("SELECT b.kamar_tidur,b.toilet,b.toiletwc,b.id_rumah,b.foto, b.nama_rumah, b.id_arsitek, b.nama_arsitek,b.luas_lahan, b.lebar_lahan , b.panjang_lahan, b.luas_bangunan, lantai, suka, dilihat, b.rating, b.harga_konstruksi,b.promo,b.tgl_update FROM (SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan,a.lantai AS lantai,a.tgl_buat,a.tgl_update,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating,gaya_desain_rumah.id_gaya_desain,gaya_desain.gaya_desain, harga_konstruksi,promo FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating,IFNULL(rumah_promo.promo,0) AS promo  FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah LEFT JOIN rumah_promo ON b.id_rumah = rumah_promo.id_rumah) a,arsitek,ruang_rumah,gaya_desain,gaya_desain_rumah,ulasan,harga_konstruksi WHERE $where GROUP BY id_rumah,a.lantai $having)b GROUP BY id_rumah $orderby");
  }

  public function getKatalogProdukArsitek($data, $id_arsitek)
  {
    $order = $data['order'];
    $cari = $data['cari_rumah'];
    $where = '';
    if ($id_arsitek != '') $where .= 'id_arsitek = ' . $id_arsitek . '';
    if ($cari != '') $where .= ' AND (judul like "%' . $cari . '%" OR lokasi like "%' . $cari . '%")';
    $orderby = '';

    if ($order == '1') $orderby .= 'ORDER BY tahun asc';
    if ($order == '2') $orderby .= 'ORDER BY tahun desc';
    if ($order == '3') $orderby .= 'ORDER BY judul asc';
    if ($order == '4') $orderby .= 'ORDER BY judul desc';
    return $this->db->query("SELECT * from portofolio_arsitek WHERE $where GROUP BY id_portofolio $orderby");
  }

  public function getKatalogProdukFilterArsitek($data, $id_arsitek)
  {
    $order = $data['order'];
    $cari = $data['cari_rumah'];

    $where = 'a.id_arsitek=arsitek.id_arsitek AND a.id_arsitek = ' . $id_arsitek . ' AND a.id_rumah=ruang_rumah.id_rumah AND a.id_rumah = gaya_desain_rumah.id_rumah AND gaya_desain_rumah.id_gaya_desain=gaya_desain.id_gaya_desain';

    if ($cari != '') $where .= ' AND (nama_rumah like "%' . $cari . '%" OR gaya_desain like "%' . $cari . '%")';

    $orderby = '';
    if ($order == '1') $orderby .= 'ORDER BY tgl_update asc';
    if ($order == '2') $orderby .= 'ORDER BY tgl_update desc';
    if ($order == '5') $orderby .= 'ORDER BY nama_rumah asc';
    if ($order == '6') $orderby .= 'ORDER BY nama_rumah desc';

    return $this->db->query("SELECT b.kamar_tidur,b.toilet,b.toiletwc,b.id_rumah,b.foto, b.nama_rumah, b.id_arsitek, b.nama_arsitek,b.luas_lahan, b.lebar_lahan , b.panjang_lahan, b.luas_bangunan, lantai, suka, dilihat, b.rating FROM (SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan,a.lantai AS lantai,a.tgl_buat,a.tgl_update,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating,gaya_desain_rumah.id_gaya_desain,gaya_desain.gaya_desain FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek,ruang_rumah,gaya_desain,gaya_desain_rumah,ulasan WHERE $where GROUP BY id_rumah,a.lantai)b GROUP BY id_rumah $orderby");
  }


  public function getKatalogArtikel($data)
  {
    $order = $data['order'];
    $cari = $data['cari_artikel'];
    $where = '';
    if ($cari != '') $where .= 'WHERE (judul_artikel like "%' . $cari . '%" OR dibuat_oleh like "%' . $cari . '%")';

    $orderby = '';

    if ($order == '1') $orderby .= 'ORDER BY tahun asc';
    if ($order == '2') $orderby .= 'ORDER BY tahun desc';
    if ($order == '3') $orderby .= 'ORDER BY judul asc';
    if ($order == '4') $orderby .= 'ORDER BY judul desc';
    return $this->db->query("SELECT * from artikel $where GROUP BY id_artikel $orderby");
  }


  function getRumahPromo()
  {
    return $this->db->query("SELECT rumah_promo.*, a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.tgl_update, a.suka, a.dilihat,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek,rumah_promo WHERE a.id_arsitek=arsitek.id_arsitek AND rumah_promo.id_rumah=a.id_rumah GROUP BY a.id_rumah order by tgl_update desc limit 10");
  }
}
