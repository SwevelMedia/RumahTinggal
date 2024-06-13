<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class DesainModel extends CI_Model

{



  // public $from = "SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 AND rumah.publish = 1 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah";

  public $from = "SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.video,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat,rumah.publish, rumah.approve, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah LEFT JOIN ruang_rumah ON rumah.id_rumah=ruang_rumah.id_rumah WHERE ruang_rumah.id_ruang = 7 AND rumah.publish = '1' AND rumah.approve = '1' group by rumah.id_rumah )a LEFT JOIN ruang_rumah ON a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b LEFT JOIN ruang_rumah ON b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c LEFT JOIN denah ON c.id_rumah = denah.id_rumah GROUP BY c.id_rumah";

  function getJumlahRumah()
  {
    return $this->db->query("SELECT COUNT(*) AS jumlah_rumah FROM rumah;");
  }

  function getGayaDesain()
  {
    return $this->db->query("SELECT gaya_desain.id_gaya_desain, gaya_desain.gaya_desain FROM gaya_desain;");
  }

  function getRuang()
  {
    return $this->db->query("
    SELECT DISTINCT ruang.id_ruang, ruang.ruang 
    FROM ruang 
    INNER JOIN ruang_rumah ON ruang.id_ruang = ruang_rumah.id_ruang");
  }

  function getRangePanjangLahan()
  {
    return $this->db->query("SELECT MAX(rumah.panjang_lahan) AS max_panjang_lahan, MIN(rumah.panjang_lahan) AS min_panjang_lahan FROM rumah;");
  }

  function getRangeLebarLahan()
  {
    return $this->db->query("SELECT MAX(rumah.lebar_lahan) AS max_lebar_lahan, MIN(rumah.lebar_lahan) AS min_lebar_lahan FROM rumah;");
  }


  function getKatalogProdukPopular()

  {



    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek GROUP BY id_rumah order by dilihat desc limit 10");
  }

  function getKatalogProdukPopularBody()
  {
    return $this->db->query("
        SELECT 
            a.kamar_tidur, a.toilet, a.toiletwc, a.id_rumah, a.foto, a.nama_rumah, 
            a.id_arsitek, arsitek.nama_arsitek, ROUND(a.luas_lahan) AS luas_lahan, 
            ROUND(a.lebar_lahan) AS lebar_lahan, ROUND(a.panjang_lahan) AS panjang_lahan, 
            ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai, a.dilihat, a.suka,
            ROUND(AVG(a.rating), 1) AS rating 
        FROM 
            (
                SELECT 
                    b.*, IFNULL(ulasan.rating, 0) AS rating 
                FROM 
                    ({$this->from}) b 
                LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah
            ) a,
            arsitek 
        WHERE 
            a.id_arsitek = arsitek.id_arsitek 
        GROUP BY 
            id_rumah 
        ORDER BY 
            dilihat DESC 
        LIMIT 5
    ");
  }


  function getKatalogProdukFavorit()

  {



    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a LEFT JOIN arsitek ON a.id_arsitek = arsitek.id_arsitek
    RIGHT JOIN rumah_rekomendasi rr ON a.id_rumah = rr.id_rumah GROUP BY a.id_rumah order by a.suka desc limit 10");
  }

  function getRumahTerbaru()

  {

    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan, a.lantai,a.tgl_update,a.tgl_buat, a.suka, a.dilihat,round(AVG(a.rating),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a,arsitek WHERE a.id_arsitek=arsitek.id_arsitek GROUP BY id_rumah order by tgl_buat desc limit 10");
  }

  function getLebarPanjangLahan()

  {

    return $this->db->query("SELECT MIN(lebar_lahan) AS min_lebar_lahan, MAX(lebar_lahan) AS max_lebar_lahan, MIN(panjang_lahan) AS min_panjang_lahan,MAX(panjang_lahan) AS max_panjang_lahan FROM rumah");
  }

  function getKatalogProduk($data)

  {





    $lebar_lahan = $data['lebar_lahan'];

    $lebar_lahan_min =  explode(';', $lebar_lahan)[0];

    $lebar_lahan_max = explode(';', $lebar_lahan)[1];



    $panjang_lahan = $data['panjang_lahan'];

    $panjang_lahan_min =  explode(';', $panjang_lahan)[0];

    $panjang_lahan_max = explode(';', $panjang_lahan)[1];



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

    $where = 'where';

    if ($panjang_lahan != '') $where .= ' panjang_lahan BETWEEN ' . $panjang_lahan_min . ' AND ' . $panjang_lahan_max . '';

    if ($lebar_lahan != '') $where .= ' AND lebar_lahan BETWEEN ' . $lebar_lahan_min . ' AND ' . $lebar_lahan_max . '';

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

    if ($order == '0') $orderby .= 'ORDER BY lebar_lahan DESC, panjang_lahan DESC';

    if ($order == '1') $orderby .= 'ORDER BY a.tgl_update DESC';

    if ($order == '2') $orderby .= 'ORDER BY a.tgl_update ASC';

    if ($order == '3') $orderby .= 'ORDER BY dilihat desc';

    if ($order == '4') $orderby .= 'ORDER BY suka desc';

    if ($order == '5') $orderby .= 'ORDER BY nama_rumah asc';

    if ($order == '6') $orderby .= 'ORDER BY nama_rumah desc';

    if ($order == '7') $orderby .= 'ORDER BY promo desc';



    return $this->db->query("SELECT a.kamar_tidur,a.toilet,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, a.nama_arsitek,a.luas_lahan,a.lebar_lahan, a.panjang_lahan, a.luas_bangunan,a.lantai,a.tgl_buat,a.tgl_update,a.dilihat,a.suka,a.rating, a.harga_konstruksi,a.promo FROM (SELECT b.id_rumah, b.nama_rumah,b.kamar_tidur, b.toilet, b.id_arsitek,arsitek.nama_arsitek, ROUND(b.lebar_lahan) AS lebar_lahan, ROUND(b.panjang_lahan) AS panjang_lahan, ROUND(b.luas_lahan) AS luas_lahan ,ROUND(b.luas_bangunan) AS luas_bangunan,b.muka,b.wastafel,b.bathup,b.kloset_duduk,b.kloset_jongkok, b.foto,b.tgl_buat,b.tgl_update,b.suka,b.dilihat, max(b.lantai) AS lantai, round(AVG(IFNULL(ulasan.rating,0)),1) AS rating,harga_konstruksi,IFNULL(rumah_promo.promo,0) AS promo FROM (SELECT c.*, max(denah.lantai) AS lantai FROM (SELECT rumah.id_rumah, rumah.nama_rumah,x.kamar_tidur, x.toilet, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat FROM (SELECT id_rumah, COUNT(CASE WHEN id_ruang = '7' THEN id_ruang END) kamar_tidur, COUNT(CASE WHEN id_ruang = '14' OR id_ruang='15' THEN id_ruang END) toilet FROM ruang_rumah GROUP BY id_rumah) x, rumah where x.id_rumah=rumah.id_rumah AND rumah.publish = 1) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah, denah.lantai) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah LEFT JOIN rumah_promo ON b.id_rumah = rumah_promo.id_rumah JOIN arsitek ON b.id_arsitek=arsitek.id_arsitek JOIN harga_konstruksi ON harga_konstruksi.id_rumah = b.id_rumah GROUP BY id_rumah) a join ruang_rumah ON a.id_rumah=ruang_rumah.id_rumah join gaya_desain_rumah ON a.id_rumah=gaya_desain_rumah.id_rumah join gaya_desain ON gaya_desain_rumah.id_gaya_desain=gaya_desain.id_gaya_desain $where GROUP BY id_rumah  $having $orderby");
  }

  public function getKatalogProdukNew($sort = 'default', $search = '', $min_panjang = '', $max_panjang = '', $min_lebar = '', $max_lebar = '', $lantai = '', $kamar = '', $gaya = '', $ruang = '', $min_biaya = null, $max_biaya = null, $limit = null)
  {
    // Definisi kolom yang dapat diurutkan
    $sortableColumns = [
      'default' => 'lebar_lahan DESC, panjang_lahan DESC',
      'populer' => 'a.dilihat DESC',
      'terbaru' => 'a.tgl_buat DESC',
      'harga_tertinggi' => "(CASE 
                                WHEN a.lantai = '1' THEN 3500000 * a.luas_bangunan
                                WHEN a.lantai = '2' THEN 4500000 * a.luas_bangunan
                                ELSE 5500000 * a.luas_bangunan
                            END) DESC",
      'harga_terendah' => "(CASE 
                                WHEN a.lantai = '1' THEN 3500000 * a.luas_bangunan
                                WHEN a.lantai = '2' THEN 4500000 * a.luas_bangunan
                                ELSE 5500000 * a.luas_bangunan
                            END) ASC",
    ];

    // Validasi nilai sort agar tidak ada SQL injection
    $sort = array_key_exists($sort, $sortableColumns) ? $sort : 'default';

    // Tentukan kolom pengurutan berdasarkan nilai $sort
    $orderBy = $sortableColumns[$sort];

    $limitClause = '';

    // Prepare WHERE clause
    $whereConditions = [];
    if (!empty($search)) {
      $whereConditions[] = "LOWER(a.nama_rumah) LIKE LOWER('%{$search}%')";
    }
    if (!empty($lantai)) {
      $whereConditions[] = "a.lantai = {$lantai}";
    }
    if (!empty($min_panjang) && !empty($max_panjang)) {
      $whereConditions[] = "a.panjang_lahan BETWEEN {$min_panjang} AND {$max_panjang}";
    }
    if (!empty($min_lebar) && !empty($max_lebar)) {
      $whereConditions[] = "a.lebar_lahan BETWEEN {$min_lebar} AND {$max_lebar}";
    }
    if (!empty($kamar)) {
      $whereConditions[] = "a.kamar_tidur = {$kamar}";
    }
    if (!empty($gaya)) {
      $whereConditions[] = "id_gaya_desain IN ({$gaya})";
    }
    if (!empty($ruang)) {
      $whereConditions[] = "id_ruang IN ({$ruang})";
    }
    if ($min_biaya !== null) {
      $whereConditions[] = "(
            (a.lantai = '1' AND 3500000 * a.luas_bangunan >= {$min_biaya}) OR
            (a.lantai = '2' AND 4500000 * a.luas_bangunan >= {$min_biaya}) OR
            (a.lantai NOT IN ('1', '2') AND 5500000 * a.luas_bangunan >= {$min_biaya})
        )";
    }
    if ($max_biaya !== null) {
      $whereConditions[] = "(
            (a.lantai = '1' AND 3500000 * a.luas_bangunan <= {$max_biaya}) OR
            (a.lantai = '2' AND 4500000 * a.luas_bangunan <= {$max_biaya}) OR
            (a.lantai NOT IN ('1', '2') AND 5500000 * a.luas_bangunan <= {$max_biaya})
        )";
    }
    if ($limit !== null) {
      $limitClause = 'LIMIT ' . $limit;
    }

    // Construct the WHERE clause
    $whereClause = !empty($whereConditions) ? 'WHERE ' . implode(' AND ', $whereConditions) : '';


    // Query database dengan urutan yang sesuai
    $query = "
        SELECT
            a.kamar_tidur,
            a.toilet,
            a.toiletwc,
            a.id_rumah,
            a.foto,
            a.nama_rumah,
            gaya_desain_rumah.id_gaya_desain AS id_gaya_design,
            " . ($ruang ? "ruang_rumah.id_ruang AS id_ruang," : "") . "
            a.tgl_buat,
            a.id_arsitek,
            arsitek.nama_arsitek,
            ROUND(a.luas_lahan) AS luas_lahan,
            ROUND(a.lebar_lahan) AS lebar_lahan,
            ROUND(a.panjang_lahan) AS panjang_lahan,
            ROUND(a.luas_bangunan) AS luas_bangunan,
            a.lantai,
            a.tgl_update,
            a.suka,
            a.dilihat,
            ROUND(AVG(a.rating), 1) AS rating
        FROM (
            SELECT
                b.*,
                IFNULL(ulasan.rating, 0) AS rating
            FROM
                ({$this->from}) b
            LEFT JOIN
                ulasan ON b.id_rumah = ulasan.id_rumah
        ) a
        JOIN
            arsitek ON a.id_arsitek = arsitek.id_arsitek
        LEFT JOIN
            gaya_desain_rumah ON a.id_rumah = gaya_desain_rumah.id_rumah

        " . ($ruang ? "LEFT JOIN ruang_rumah ON a.id_rumah = ruang_rumah.id_rumah" : "") . "
        {$whereClause}
        GROUP BY
            a.id_rumah
        ORDER BY
            $orderBy
          $limitClause
    ";
    // log_message('error',  'query' . var_export($query, true));
    return $this->db->query($query);
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



  function getNamaRumah()

  {
    return $this->db->query("SELECT nama_rumah from rumah");
  }



  function getDokumenRumahGratis($id_rumah)
  {
    return $this->db->query("SELECT laporan_desain FROM dokumen WHERE id_rumah='{$id_rumah}'");
  }

  function getCountDownloadDokumen($id_customer)

  {

    return $this->db->query("SELECT * FROM rekap WHERE id_customer='{$id_customer}' GROUP BY id_rumah");
  }



  function getIsDownloadDokumen($id_customer, $id_rumah)

  {

    return $this->db->query("SELECT * FROM rekap WHERE id_customer='{$id_customer}' AND id_rumah='{$id_rumah}' GROUP BY id_rumah");
  }
}
