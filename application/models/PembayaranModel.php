<?php

defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");



class PembayaranModel extends CI_Model
{

    public $tabel = "pembayaran";

    public $tabelOrder = "pembelian";



    function simpanOrder($data)
    {

        $val = array(

            'no_invoice' => $data['no_invoice'],

            'id_rumah' => $data['id_rumah'],

            'id_customer' => $data['id_customer'],

            'alamat_pengiriman' =>  $data['alamat'],

            'paket' =>  $data['paket'],

            'harga' => $data['harga'],

            //'kode_promo' =>  $data['kode_promo'],

            'diskon' =>  $data['diskon'],

            'diterima' =>  '0',

            'status' =>  '0',

            'tgl_expired' =>  date('Y-m-d', strtotime(date('Y-m-d') . '+ 3 days')),

            'tgl_pembelian' =>  date('Y-m-d'),

            'jam_pembelian' =>  date('H:i:s')



        );



        $this->db->insert($this->tabelOrder, $val);
    }

    public function getDokumenByOrderId($orderId)
    {
        return $this->db->query("SELECT dokumen.id_dokumen, dokumen.laporan_desain, dokumen.rab, dokumen.ded,dokumen.rks
        FROM pembelian
        LEFT JOIN dokumen ON pembelian.id_rumah=dokumen.id_rumah
        WHERE pembelian.no_invoice={$orderId} LIMIT 1");
    }

    function simpanPembayaran($data)
    {
        if ($data['id_order'] != '') {
            $value = array(
                'id_order' => $data['id_order'],
                'kategori' => $data['kategori'],
                'total_bayar' => $data['total_bayar'],
                'jenis_pembayaran' => $data['jenis_pembayaran'],
                'bank' => $data['bank'],
                'no_va' => $data['no_va'],
                'kode_status' => $data['kode_status'],
                'url_slip' => $data['url_slip'],
                'waktu_transaksi' => $data['waktu_transaksi']
            );
        }



        $this->db->insert($this->tabel, $value);
    }



    function ubahStatusPembayaran($data)
    {

        $id_order = $data['id_order'];



        $value = array(

            'kode_status' => $data['kode_status'],

            'waktu_pembayaran' => $data['waktu_pembayaran']

        );



        $this->db->where('id_order', $id_order)->update($this->tabel, $value);



        if ($data['kode_status'] == '200') {
            // Tindakan untuk kode status 200
            $this->db->query("UPDATE pembelian SET status = 1 WHERE no_invoice IN ('{$id_order}')");
        } elseif ($data['kode_status'] == '201') {
            // Tindakan untuk kode status 201
            $this->db->query("UPDATE pembelian SET status = 0 WHERE no_invoice IN ('{$id_order}')");
        } elseif ($data['kode_status'] == '202') {
            // Tindakan untuk kode status 202
            $this->db->query("UPDATE pembelian SET status = 2 WHERE no_invoice IN ('{$id_order}')");
        }
    }



    function getInvoiceTagihan($id_order)
    {

        return $this->db->query("SELECT pembelian.no_invoice,rumah.id_rumah,rumah.nama_rumah,pembelian.harga, pembelian.harga AS sub_total,(pembelian.harga*11/100) AS ppn,pembelian.diskon, pembelian.diskon AS pros_diskon,(pembelian.harga+(pembelian.harga*11/100)-pembelian.diskon) AS total_harga,pembelian.tgl_pembelian,pembelian.tgl_expired AS tgl_kadaluarsa,COALESCE(nama_customer,email) AS nama_akun,pembelian.alamat_pengiriman,no_wa,email,kode_status,DATE(waktu_pembayaran) AS tgl_pembayaran, CASE WHEN pembelian.paket = 1 THEN 'Lite' ELSE 'Premium' END AS jenis_paket, pembelian.paket FROM rumah,pembelian,pembayaran,customer WHERE pembelian.id_customer=customer.id_customer AND pembelian.id_rumah=rumah.id_rumah AND pembelian.no_invoice=pembayaran.id_order AND pembelian.no_invoice='{$id_order}' GROUP BY rumah.id_rumah, pembelian.no_invoice ORDER BY rumah.id_rumah;");
    }
}
