<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class CustomerModel extends CI_Model

{

    public $tabel = "customer";

    public $tabel_transaksi = "bukti_transaksi";

    public $tabel_pembelian = "pembelian";
    public $tabel_rekap = "rekap";
    public $pk_customer = "id_customer";

    public $email_customer = "email";

    public $pk_rumah = "id_rumah";

    public $paket = "paket";

    public $ulasan = "ulasan";



    public $from = "SELECT c.*, COUNT(denah.lantai) AS lantai FROM (SELECT b.*, COUNT(ruang_rumah.id_ruang) AS toilet FROM (SELECT a.*, count(ruang_rumah.id_ruang) AS toiletwc FROM (SELECT rumah.id_rumah, rumah.nama_rumah, rumah.id_arsitek, rumah.lebar_lahan, rumah.panjang_lahan, (rumah.lebar_lahan*rumah.panjang_lahan) AS luas_lahan,rumah.luas_bangunan,rumah.muka,rumah.wastafel,rumah.bathup,rumah.kloset_duduk,rumah.kloset_jongkok, rumah.foto,rumah.tgl_buat,rumah.tgl_update,rumah.suka,rumah.dilihat, count(ruang_rumah.id_ruang) AS kamar_tidur FROM rumah, ruang_rumah WHERE rumah.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 7 group by id_rumah )a,ruang_rumah WHERE a.id_rumah=ruang_rumah.id_rumah AND ruang_rumah.id_ruang = 14 GROUP BY a.id_rumah) b, ruang_rumah WHERE b.id_rumah=ruang_rumah.id_rumah AND (ruang_rumah.id_ruang=14 OR ruang_rumah.id_ruang=15) GROUP BY b.id_rumah) c, denah WHERE c.id_rumah = denah.id_rumah GROUP BY c.id_rumah";







    function getCustomer($no_wa)
    {
        return $this->db->where('no_wa', $no_wa)
            ->or_where('email', $no_wa)
            ->get($this->tabel);
    }



    function getCustomerById($id)
    {
        return $this->db->where('id_customer', $id)
            ->get($this->tabel);
    }



    function getCustomerByEmail($email)
    {
        return $this->db->where('email', $email)
            ->get($this->tabel);
    }



    function daftarCustomer($data)

    {
        $val = array(
            'nama_customer' => $data['nama_lengkap'],
            'email' => $data['email'],
            // 'no_wa' => $no_wa,
            // 'otp' => $otp_baru,
            // 'expired' => $expired,
            'password' =>  $data['password'],
            'tgl_daftar' => date("Y-m-d"),
            'jam_daftar' => date("H:i:s")
        );

        return $this->db->insert($this->tabel, $val);
    }



    function updateOTP($no_wa, $otp_baru, $expired)
    {
        $val = array(
            'otp' => $otp_baru,
            'expired' => $expired
        );

        return $this->db->where('no_wa', $no_wa)
            ->update($this->tabel, $val);
    }

    function getTransaksi($id_customer)
    {
        $this->db->select('pembelian.*, rumah.nama_rumah, rumah.foto, ROUND(rumah.lebar_lahan) AS lebar_lahan, ROUND(rumah.panjang_lahan) AS panjang_lahan, ROUND(rumah.luas_bangunan) AS luas_bangunan, MAX(ruang_rumah.lantai) AS lantai, SUM(CASE WHEN ruang_rumah.id_ruang = 7 THEN 1 ELSE 0 END) AS kamar_tidur, SUM(CASE WHEN ruang_rumah.id_ruang = 14 THEN 1 ELSE 0 END) AS toilet, arsitek.id_arsitek, arsitek.nama_arsitek, pembelian.no_invoice, CASE WHEN pembelian.paket = 1 THEN "Lite" ELSE "Premium" END AS jenis_paket', FALSE)
            ->from($this->tabel_pembelian)
            ->where('id_customer', $id_customer)
            ->where('(status <> 1 AND tgl_expired > NOW() OR status = 1)', NULL, FALSE)
            ->join('rumah', 'rumah.id_rumah = pembelian.id_rumah')
            ->join('arsitek', 'rumah.id_arsitek = arsitek.id_arsitek')
            ->join('ruang_rumah', 'ruang_rumah.id_rumah = pembelian.id_rumah')
            ->order_by("tgl_pembelian", "desc")
            ->group_by('pembelian.id_pembelian, rumah.nama_rumah, rumah.foto, ROUND(rumah.lebar_lahan), ROUND(rumah.panjang_lahan), ROUND(rumah.luas_bangunan), arsitek.id_arsitek, arsitek.nama_arsitek, pembelian.no_invoice, jenis_paket');

        $query = $this->db->get();
        return $query->result();
    }

    public function getTransaksiByIdRumah($id_rumah)
    {
        $this->db->select('pembelian.*, rumah.nama_rumah, rumah.foto, ROUND(rumah.lebar_lahan) AS lebar_lahan, ROUND(rumah.panjang_lahan) AS panjang_lahan, ROUND(rumah.luas_bangunan) AS luas_bangunan, rumah.lantai, rumah.kamar_tidur, rumah.toilet, arsitek.id_arsitek, arsitek.nama_arsitek, pembelian.no_invoice, CASE WHEN pembelian.paket = 1 THEN "Lite" ELSE "Premium" END AS jenis_paket', FALSE)
            ->from($this->tabel_pembelian)
            ->where('pembelian.id_rumah', $id_rumah)  // Filter berdasarkan id_rumah
            ->where('(pembelian.status <> 1 AND pembelian.tgl_expired > NOW() OR pembelian.status = 1)', NULL, FALSE)
            ->join('rumah', 'rumah.id_rumah = pembelian.id_rumah')
            ->join('arsitek', 'rumah.id_arsitek = arsitek.id_arsitek')
            ->order_by("tgl_pembelian", "desc");

        $query = $this->db->get();
        return $query->result();
    }


    // Di dalam model CustomerModel

    function getTanggalPembelian($id_customer)
    {
        $this->db->select('no_invoice')
            ->from($this->tabel_pembelian)
            ->where('id_customer', $id_customer)
            ->where('(status <> 1 AND tgl_expired > NOW() OR status = 1)', NULL, FALSE)
            ->order_by("tgl_pembelian", "desc")
            ->limit(1); // Hanya ambil satu baris, sesuai dengan kolom tgl_pembelian

        $query = $this->db->get();
        $result = $query->row();

        return $result ? $result->no_invoice : null;
    }


    function getNomorInvoice($id_customer)
    {
        $this->db->select('tgl_pembelian')
            ->from($this->tabel_pembelian)
            ->where('id_customer', $id_customer)
            ->where('(status <> 1 AND tgl_expired > NOW() OR status = 1)', NULL, FALSE)
            ->order_by("tgl_pembelian", "desc")
            ->limit(1); // Hanya ambil satu baris, sesuai dengan kolom tgl_pembelian

        $query = $this->db->get();
        $result = $query->row();

        return $result ? $result->tgl_pembelian : null;
    }


    // function getTransaksi($id_customer)

    // {

    //     $this->db->select('pembelian.*,rumah.nama_rumah,rumah.foto, ROUND(rumah.lebar_lahan) AS lebar_lahan, ROUND(rumah.panjang_lahan) AS panjang_lahan, ROUND(rumah.luas_bangunan) AS luas_bangunan, rumah.lantai, rumah.kamar_tidur, rumah.toilet, arsitek.id_arsitek, arsitek.nama_arsitek, pembelian.no_invoice, CASE WHEN pembelian.paket = 1 THEN "Lite" ELSE "Premium" END AS jenis_paket', FALSE)

    //         ->from($this->tabel_pembelian)

    //         ->where('id_customer', $id_customer)

    //         ->where('((status <> 1 AND tgl_expired > date(now())) OR status = 1)')

    //         ->join('rumah', 'rumah.id_rumah = pembelian.id_rumah')

    //         ->join('arsitek', 'rumah.id_arsitek = arsitek.id_arsitek')

    //         ->order_by("tgl_pembelian", "desc");;

    //     $query = $this->db->get();

    //     return $query->result();
    // }

    // function getTransaksi($id_customer)
    // {
    //     $this->db->select('pembelian.*, rumah.nama_rumah, rumah.foto, ROUND(rumah.lebar_lahan) AS lebar_lahan, ROUND(rumah.panjang_lahan) AS panjang_lahan, ROUND(rumah.luas_bangunan) AS luas_bangunan, rumah.lantai, rumah.kamar_tidur, rumah.toilet, arsitek.id_arsitek, arsitek.nama_arsitek, CASE WHEN pembelian.paket = 1 THEN "Lite" ELSE "Premium" END AS jenis_paket, pembelian.no_invoice, pembelian.paket AS jenis_paket', FALSE)
    //         ->from($this->tabel_pembelian)
    //         ->where('id_customer', $id_customer)
    //         ->where('((status <> 1 AND tgl_expired > date(now())) OR status = 1)')
    //         ->join('rumah', 'rumah.id_rumah = pembelian.id_rumah')
    //         ->join('arsitek', 'rumah.id_arsitek = arsitek.id_arsitek')
    //         ->order_by("tgl_pembelian", "desc");

    //     $query = $this->db->get();
    //     return $query->result();
    // }




    function ubahCustomer($data)

    {


        if ($data['nama_customer'] == null || $data['nama_customer'] == "") {

            $val = array(

                'alamat' => $data['alamat'],

                'no_wa' => $data['no_wa'],

            );
        } else {

            $val = array(

                'nama_customer' => $data['nama_customer'],

                'alamat' => $data['alamat'],

                'email' => $data['email'],

                'no_wa' => $data['no_wa'],

                'foto' => $data['foto'],

                'tgl_daftar' => date("Y-m-d"),

                'jam_daftar' => date("H:i:s")

            );
        }



        $this->db->where($this->pk_customer, $data['id_customer'])

            ->update($this->tabel, $val);
    }



    function kirimBuktiTransaksi($data)

    {



        $val = array(

            'id_rumah' => $data['id_rumah'],

            'id_customer' => $data['id_customer'],

            'bukti_transaksi' => $data['bukti_transaksi']

        );



        $this->db->insert($this->tabel_transaksi, $val);



        $vall = array(



            'status' => 2

        );



        $this->db->where($this->pk_customer, $data['id_customer'])

            ->where($this->pk_rumah, $data['id_rumah'])

            ->where($this->paket, $data['paket'])

            ->update($this->tabel_pembelian, $vall);
    }



    function getAktifitas($id_customer)

    {

        return $this->db->query("SELECT rumah_disukai.*,rumah.nama_rumah from rumah_disukai,rumah WHERE id_customer= '{$id_customer}' AND rumah.id_rumah=rumah_disukai.id_rumah group by rumah.nama_rumah limit 7");
    }



    // function getDokumen($id_customer)

    // {

    //     return $this->db->query("SELECT a.*, round(AVG(a.rating_dlm),1) AS rating FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating_dlm FROM (SELECT pembelian.id_customer, pembelian.no_invoice, pembelian.id_rumah, rumah.nama_rumah, rumah.foto, ROUND(rumah.lebar_lahan) AS lebar_lahan, ROUND(rumah.panjang_lahan) AS panjang_lahan, ROUND(rumah.luas_bangunan) AS luas_bangunan, rumah.lantai,arsitek.id_arsitek,arsitek.nama_arsitek, pembelian.paket, dokumen.laporan_desain,dokumen.rab, dokumen.ded, dokumen.rks FROM pembelian,rumah,dokumen,arsitek WHERE pembelian.id_customer = '{$id_customer}' AND pembelian.id_rumah=rumah.id_rumah AND rumah.id_arsitek=arsitek.id_arsitek AND pembelian.id_rumah=dokumen.id_rumah AND pembelian.paket = dokumen.paket AND pembelian.status=1) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah) a group by a.id_rumah");
    // }

    function getDokumen($id_rumah)
    {
        return $this->db->query("SELECT a.*, ROUND(AVG(a.rating_dlm), 1) AS rating 
                            FROM (
                                SELECT b.*, IFNULL(ulasan.rating, 0) AS rating_dlm 
                                FROM (
                                    SELECT pembelian.id_customer, pembelian.no_invoice, pembelian.id_rumah, rumah.nama_rumah, rumah.foto, 
                                           ROUND(rumah.lebar_lahan) AS lebar_lahan, ROUND(rumah.panjang_lahan) AS panjang_lahan, 
                                           ROUND(rumah.luas_bangunan) AS luas_bangunan, rumah.lantai, arsitek.id_arsitek, arsitek.nama_arsitek, 
                                           pembelian.paket, dokumen.laporan_desain, dokumen.rab, dokumen.ded, dokumen.rks 
                                    FROM pembelian, rumah, dokumen, arsitek 
                                    WHERE pembelian.id_rumah = '{$id_rumah}' 
                                      AND pembelian.id_rumah = rumah.id_rumah 
                                      AND rumah.id_arsitek = arsitek.id_arsitek 
                                      AND pembelian.id_rumah = dokumen.id_rumah 
                                      AND pembelian.paket = dokumen.paket 
                                      AND pembelian.status = 1
                                ) b 
                                LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah
                            ) a 
                            GROUP BY a.id_rumah");
    }





    function simpanRiview($data)

    {

        $val = array(

            'id_rumah' => $data['id_rumah'],

            'id_customer' => $data['id_customer'],

            'foto_paket' => $data['foto_paket'],

            'ulasan' => $data['ulasan'],

            'rating' => $data['rating'],

            'tgl_buat' => date("Y-m-d"),

            'jam_dibuat' => date("H:m:s")

        );



        $this->db->insert($this->ulasan, $val);
    }



    function getKatalogDaftarProdukFavorit($data, $id_customer)

    {

        // $lebar_lahan = $data['lebar_lahan'];

        // $panjang_lahan = $data['panjang_lahan'];

        // $lantai = $data['lantai'];

        // $kamar_tidur = $data['jum_kamar_tidur'];

        // $harga_konstruksi = $data['harga_konstruksi'];



        // $harga_konstruksi_min =  explode(';',$harga_konstruksi)[0];

        // $harga_konstruksi_max = explode(';',$harga_konstruksi)[1];



        // $gaya_desain = $data['gaya_desain'];

        // $gaya_desain_implode = implode(',',array_slice($data['gaya_desain'],1));

        // $arsitek = $data['nama_arsitek']; 

        // $ruang_lain =$data['ruang_lain'];

        // $ruang_lain_implode = implode(',',array_slice($data['ruang_lain'],1));

        $order = $data['order'];

        $cari = $data['cari_rumah'];



        // $count_ruang_lain = count( array_slice($data['ruang_lain'],1) );

        $where = 'a.id_arsitek=arsitek.id_arsitek AND a.id_rumah=ruang_rumah.id_rumah AND a.id_rumah=gaya_desain_rumah.id_rumah AND gaya_desain_rumah.id_gaya_desain=gaya_desain.id_gaya_desain AND harga_konstruksi.id_rumah = a.id_rumah';

        // if ($panjang_lahan != '') $where .= ' AND panjang_lahan <= '.$panjang_lahan.'';

        // if ($lebar_lahan != '') $where .= ' AND lebar_lahan <= '.$lebar_lahan.'';

        // if ($harga_konstruksi != '') $where .= ' AND harga_konstruksi BETWEEN '.$harga_konstruksi_min.' AND '.$harga_konstruksi_max.''; //SUBSTRING($harga_konstruksi, 1, 9)    //harga_konstruksi BETWEEN SUBSTRING('.$harga_konstruksi.', 1, 9) AND SUBSTRING('.$harga_konstruksi.', 13, 9)

        // if ($lantai != '') $where .= ' AND a.lantai IN ('.$lantai.')';

        // if ($kamar_tidur != '') $where .= ' AND kamar_tidur IN ('.$kamar_tidur.')';



        // if ($gaya_desain_implode != '') $where .= ' AND gaya_desain_rumah.id_gaya_desain IN ('.$gaya_desain_implode.')';

        // if ($arsitek != '') $where .= ' AND a.id_arsitek IN ('.$arsitek.')';

        if ($cari != '') $where .= ' AND (a.nama_rumah like "%' . $cari . '%" OR gaya_desain like "%' . $cari . '%")';

        // if ($ruang_lain_implode != '') $where .= ' AND ruang_rumah.id_ruang IN ('.$ruang_lain_implode.')';





        // $having ='';

        // if ($ruang_lain_implode != '') $having .= 'HAVING COUNT(DISTINCT ruang_rumah.id_ruang) ='.$count_ruang_lain.'';



        $orderby = '';

        if ($order == '1') $orderby .= 'ORDER BY tgl_update asc';

        if ($order == '2') $orderby .= 'ORDER BY tgl_update desc';

        if ($order == '3') $orderby .= 'ORDER BY dilihat desc';

        if ($order == '4') $orderby .= 'ORDER BY suka desc';

        if ($order == '5') $orderby .= 'ORDER BY nama_rumah asc';

        if ($order == '6') $orderby .= 'ORDER BY nama_rumah desc';

        if ($order == '7') $orderby .= 'ORDER BY promo desc';



        return $this->db->query("SELECT b.kamar_tidur,b.toilet,b.toiletwc,b.id_rumah,b.foto, b.nama_rumah, b.id_arsitek, b.nama_arsitek,b.luas_lahan, b.lebar_lahan , b.panjang_lahan, b.luas_bangunan, lantai, b.suka, dilihat, b.rating, b.harga_konstruksi,b.promo FROM (SELECT a.kamar_tidur,a.toilet,a.toiletwc,a.id_rumah,a.foto, a.nama_rumah, a.id_arsitek, arsitek.nama_arsitek,ROUND(a.luas_lahan) AS luas_lahan, ROUND(a.lebar_lahan) AS lebar_lahan , ROUND(a.panjang_lahan) AS panjang_lahan, ROUND(a.luas_bangunan) AS luas_bangunan,a.lantai AS lantai,a.tgl_buat,a.tgl_update,a.dilihat,a.suka,round(AVG(a.rating),1) AS rating,gaya_desain_rumah.id_gaya_desain,gaya_desain.gaya_desain, harga_konstruksi,promo FROM (SELECT b.*, IFNULL(ulasan.rating,0) AS rating,IFNULL(rumah_promo.promo,0) AS promo  FROM ({$this->from}) b LEFT JOIN ulasan ON b.id_rumah = ulasan.id_rumah LEFT JOIN rumah_promo ON b.id_rumah = rumah_promo.id_rumah) a,arsitek,ruang_rumah,gaya_desain,gaya_desain_rumah,ulasan,harga_konstruksi WHERE $where GROUP BY id_rumah,a.lantai)b,rumah_disukai WHERE rumah_disukai.id_rumah=b.id_rumah AND rumah_disukai.id_customer='{$id_customer}' GROUP BY id_rumah $orderby");
    }







    function getResetPassword($email, $pw)

    {



        $val = array(

            'email' => $email,

            'password' => $pw

        );



        $this->db->where($this->email_customer, $email)

            ->update($this->tabel, $val);
    }





    public function checkUser($data = array())

    {

        $this->db->select($this->pk_customer);

        $this->db->from($this->tabel);

        $con = array(

            'oauth_provider' => $data['oauth_provider'],

            'oauth_uid' => $data['oauth_uid']

        );

        $this->db->where($con);

        $query = $this->db->get();

        $check = $query->num_rows();

        if ($check > 0) {

            // Ambil data sebelumnya

            $result = $query->row_array();

            // Update data pengguna

            // $data['diupdate'] = date("Y-m-d H:i:s");

            $update = $this->db->update($this->tabel, $data, array('id' => $result['id']));

            // id pengguna

            $userID = $result['id'];
        } else {

            // Insert data pengguna

            // $data['dibuat'] = date("Y-m-d H:i:s");

            // $data['diupdate'] = date("Y-m-d H:i:s");

            $insert = $this->db->insert($this->tabel, $data);

            // id pengguna

            $userID = $this->db->insert_id();
        }

        // Return id pengguna

        return $userID ? $userID : false;
    }







    function Is_already_register($id)

    {

        $this->db->where('login_oauth_uid', $id);

        $query = $this->db->get('customer');

        if ($query->num_rows() > 0) {

            return true;
        } else {

            return false;
        }
    }



    function Update_user_data($data, $id)

    {

        $this->db->where('oauth_uid', $id);

        $this->db->update('customer', $data);
    }



    function Insert_user_data($data)

    {

        $this->db->insert('customer', $data);
    }



    function getNotifSubscribe($id_customer)

    {

        return $this->db->query("SELECT id_customer,nama_customer,no_wa,alamat FROM customer WHERE id_customer={$id_customer} AND (nama_customer IS NULL OR no_wa='')");
    }


    function getPenggunaBayar($id_customer)

    {

        return $this->db->select('nama_customer,email,no_wa,alamat')

            ->where('id_customer', $id_customer)

            ->get($this->tabel);
    }



    function simpanDataDownload($id_rumah, $id_customer, $download)

    {
        $download = isset($data['download']) ? $data['download'] : 1;

        $val = array(

            'id_rumah' => $id_rumah,

            'id_customer' =>  $id_customer,

            'download' => $download

        );




        return $this->db->insert($this->tabel_rekap, $val);
    }

    // public function simpanDataDownload($id_rumah, $id_customer, $download)
    // {
    //     $val = array(
    //         'id_rumah' => $id_rumah,
    //         'id_customer' => $id_customer,
    //         'download' => $download
    //     );

    //     return $this->db->insert($this->tabel_rekap, $val);
    // }


    function getDataDownload($id_rumah)

    {

        return $this->db->query("SELECT DISTINCT id_customer as download FROM rekap WHERE id_rumah={$id_rumah}");
    }

    function getDataBeli1($id_rumah)

    {

        return $this->db->query("SELECT paket FROM pembelian WHERE id_rumah={$id_rumah} AND paket=1 and status=1");
    }

    function getDataBeli2($id_rumah)

    {

        return $this->db->query("SELECT paket FROM pembelian WHERE id_rumah={$id_rumah} AND paket=2 and status=1");
    }

    function getDataBeli3($id_rumah)

    {

        return $this->db->query("SELECT paket FROM pembelian WHERE id_rumah={$id_rumah} AND paket=3 and status=1");
    }
}
