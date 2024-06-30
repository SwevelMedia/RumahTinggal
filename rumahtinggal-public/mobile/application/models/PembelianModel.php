<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class PembelianModel extends CI_Model {
    public $tabel = 'pembelian';
  	public $tabel_promo = 'rumah_promo';
  	public $tabel_customer = 'customer';
  
	function getRumah($id) {
    	return $this->db->query("SELECT rumah.id_rumah,nama_rumah,luas_bangunan,COALESCE(lantai,1) AS lantai FROM rumah LEFT JOIN (SELECT id_rumah,MAX(lantai) AS lantai FROM denah GROUP BY id_rumah) a ON rumah.id_rumah=a.id_rumah WHERE rumah.id_rumah={$id}");
    }
  
  	function getRumahPromo($id) {
    	return $this->db->where('id_rumah',$id)
          				->where('tgl_berlaku >= ',date('Y-m-d'))
          				->where('kuota > ',0)
          				->get($this->tabel_promo);
    }
  
  	function getCustomer($id) {
      	return $this->db->where('id_customer',$id)->get($this->tabel_customer);
    }
  
  	function getPembelian($invoice) {
      	return $this->db->where('no_invoice',$invoice)->get($this->tabel);
    }
  
  	function simpanPembelian($data){
      	$customer = $this->getCustomer($data['id_customer'])->row();
      	if ($customer->alamat == '') {
          $val_cust = array('alamat' => $data['alamat']);
		  $this->db->where('id_customer',$data['id_customer'])->update($this->tabel_customer, $val_cust);
        }
      	
        $val = array(
          'no_invoice' => $data['no_invoice'],
          'id_rumah' => $data['id_rumah'],
          'id_customer' => $data['id_customer'],
          'alamat_pengiriman' => $data['alamat'],
          'paket' => $data['paket'],
          'harga' => $data['harga'],
          'diskon' => $data['diskon'],
          'tgl_expired' => date('Y-m-d', strtotime(date('Y-m-d').'+ 2 days')),
          'tgl_pembelian' => date('Y-m-d'),
          'jam_pembelian' => date('H:i:s')
        );

        return $this->db->insert($this->tabel, $val);
    }
}