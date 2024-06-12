<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class KeranjangModel extends CI_Model
{

    public function getKeranjangCustomer($id_customer)
    {
        $this->db->select(
            '
            keranjang.*, 
            rumah.nama_rumah, 
            rumah.foto, 
            ROUND(rumah.lebar_lahan) AS lebar_lahan, 
            ROUND(rumah.panjang_lahan) AS panjang_lahan, 
            ROUND(rumah.luas_bangunan) AS luas_bangunan, 
            MAX(ruang_rumah.lantai) AS lantai, 
            SUM(CASE WHEN ruang_rumah.id_ruang = 7 THEN 1 ELSE 0 END) AS kamar_tidur, 
            SUM(CASE WHEN ruang_rumah.id_ruang IN (14, 15) THEN 1 ELSE 0 END) AS toilet, 
            arsitek.id_arsitek, 
            arsitek.nama_arsitek, 
            CASE WHEN keranjang.paket = 0 THEN "Lite" ELSE "Premium" END AS jenis_paket',
            FALSE
        )
            ->from("keranjang")
            ->where('keranjang.id_customer', $id_customer)
            ->where('keranjang.hapus_user <>', '1')
            ->join('rumah', 'rumah.id_rumah = keranjang.id_rumah')
            ->join('arsitek', 'rumah.id_arsitek = arsitek.id_arsitek')
            ->join('ruang_rumah', 'ruang_rumah.id_rumah = keranjang.id_rumah')
            ->group_by('keranjang.id_keranjang, rumah.nama_rumah, rumah.foto, ROUND(rumah.lebar_lahan), ROUND(rumah.panjang_lahan), ROUND(rumah.luas_bangunan), arsitek.id_arsitek, arsitek.nama_arsitek, jenis_paket')
            ->order_by("keranjang.created_on", "desc");

        $query = $this->db->get();
        return $query->result();
    }


    public function getKeranjangCustomerPaketRumah($id_customer, $id_rumah, $paket)
    {
        $this->db->where('id_customer', $id_customer);
        $this->db->where('id_rumah', $id_rumah);
        $this->db->where('paket', $paket);
        $query = $this->db->get('keranjang');
        return $query;
    }

    public function simpanKeranjang($data)
    {
        $val = array(
            'id_customer' => $data['id_customer'],
            'id_rumah' => $data['id_rumah'],
            'paket' => $data['paket'],
            'harga' => $data['harga'],
            'diskon' => $data['diskon'],
        );

        $this->db->insert('keranjang', $val);
    }

    public function deleteKeranjang($id_keranjang)
    {
        $this->db->where('id_keranjang', $id_keranjang);
        $this->db->delete('keranjang');
    }

    public function updateKeranjang($id_keranjang, $data)
    {
        $val = array(
            'id_customer' => $data['id_customer'],
            'id_rumah' => $data['id_rumah'],
            'paket' => $data['paket'],
            'harga' => $data['harga'],
            'diskon' => $data['diskon'],
            'status' => $data['status'],
            'hapus_user' => $data['hapus_user'],
        );

        $this->db->where('id_keranjang', $id_keranjang);
        $this->db->update('keranjang', $val);
    }

    public function hapusKeranjang($id_customer, $id_rumah, $paket)
    {
        $this->db->where('id_customer', $id_customer);
        $this->db->where('id_rumah', $id_rumah);
        $this->db->where('paket', $paket);
        $this->db->update('keranjang', array('hapus_user' => 1));
    }
}
