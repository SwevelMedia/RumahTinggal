<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class PembelianController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("PembelianModel");
      	$this->load->model("DetailModel");
    }
  
  	public function kirimInvoice($invoice){
        $curl = curl_init();
        $token = "Nn1bkizlducS7Qwbf9BExoMCsYOEmDwR2y1rrrl8hdzm745Xmsw0mxMzCcoA0orB";
      
      	$pembelian = $this->PembelianModel->getPembelian($invoice)->row();
      	$paket = $pembelian->paket == '1' ? 'LITE' : 'PREMIUM';
      	$expired = date('d-m-Y', strtotime($pembelian->tgl_expired));
      	$rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();
      	$nama_rumah = $rumah->nama_rumah;
      	$luas_bangunan = $rumah->luas_bangunan;
      	$total = "Rp".number_format($pembelian->harga - ($pembelian->harga * ($pembelian->diskon / 100)), 0, ",", ".");
      	$id_customer = $pembelian->id_customer;
      	$customer = $this->PembelianModel->getCustomer($id_customer)->row();
      	$nama = $customer->nama_customer;
      	$no_wa = $customer->no_wa;
      
        $data = [
          'phone' => $no_wa,
          'message' => "Halo {$nama},\n\nTerima kasih telah melakukan pembelian desain di RumahTinggal.id\n\nBerikut adalah rincian pembelian Anda:\nNo. Invoice: *{$invoice}*\nNama Desain: {$nama_rumah}\nPaket: {$paket}\nLuas Bangunan: {$luas_bangunan}\n\n*Transfer Bank*:\nMandiri: 137-00-1138387-0 a.n. PT Baracipta Esa Engineering\nTotal Tagihan: *{$total}*\nBatas Pembayaran: *{$expired}*\nStatus: Belum Dibayar\n\nSalam,\nAdmin RumahTinggal.id",
        ];

        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, "https://console.wablas.com/api/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);
      
      	return true;
    }
  
    public function paket($id){
        $data['halaman'] = 'pembelian/paket';
      	$rumah = $this->PembelianModel->getRumah($id)->row();
      	$promo = $this->PembelianModel->getRumahPromo($id)->row();
      	if ($promo != null) $diskon = $promo->promo; else $diskon = 100;
      	$data['id_rumah'] = $rumah->id_rumah;
      	$data['nama_rumah'] = $rumah->nama_rumah;
      	$lantai = $rumah->lantai;
      	$luas_bangunan = $rumah->luas_bangunan;
      	$harga = $lantai == '1' ? 33750 * $luas_bangunan : 45000 * $luas_bangunan;
      	$data['harga_p1'] = "Rp".number_format($harga * 0.7, 0, ",", ".");
      	$data['harga_promo_p1'] = "Rp".number_format(($harga * 0.7) - (($harga * 0.7) * ($diskon / 100)), 0, ",", ".");
      	$data['harga_p2'] = "Rp".number_format($harga, 0, ",", ".");
      	$data['harga_promo_p2'] = "Rp".number_format($harga - ($harga * ($diskon / 100)), 0, ",", ".");
      	$data['diskon'] = $diskon."%";
      
        $this->load->view('layout', $data);
    }
  
  	public function pembelian($paket,$id){
        $data['halaman'] = 'pembelian/pembelian';
      	$data['no_invoice'] = time();
      	$data['paket'] = $paket;
      	$rumah = $this->PembelianModel->getRumah($id)->row();
      	$promo = $this->PembelianModel->getRumahPromo($id)->row();
      	if ($promo != null) $diskon = $promo->promo; else $diskon = 0;
      	$data['id_rumah'] = $rumah->id_rumah;
      	$data['nama_rumah'] = $rumah->nama_rumah;
      	$lantai = $rumah->lantai;
      	$luas_bangunan = $rumah->luas_bangunan;
      	$harga = $lantai == '1' ? 33750 * $luas_bangunan : 45000 * $luas_bangunan;
      	$pros_harga = $paket == '1' ? 0.7 : 1;
      	$data['harga'] = $harga * $pros_harga;
      	$data['diskon'] = $diskon;
      	$id_customer = get_cookie('id_customer');
      	$customer = $this->PembelianModel->getCustomer($id_customer)->row();
      	$data['id_customer'] = $id_customer;
      	$data['nama_customer'] = $customer->nama_customer;
      	$data['alamat'] = $customer->alamat;
      	$data['no_wa'] = $customer->no_wa;
      	$data['batas_transfer'] = date('d-m-Y', strtotime(date('Y-m-d').'+ 2 days'));
      
        $this->load->view('layout', $data);
    }
  
  	public function invoice($invoice){
        $data['halaman'] = 'pembelian/invoice';
      	$pembelian = $this->PembelianModel->getPembelian($invoice)->row();
      	$data['no_invoice'] = $pembelian->no_invoice;
      	$data['paket'] = $pembelian->paket;
      	$data['tgl_issue'] = date('d-m-Y', strtotime($pembelian->tgl_pembelian));
      	$data['tgl_expired'] = date('d-m-Y', strtotime($pembelian->tgl_expired));
      	$rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();
      	$data['id_rumah'] = $rumah->id_rumah;
      	$data['nama_rumah'] = $rumah->nama_rumah;
      	$data['sub_total'] = "Rp".number_format($pembelian->harga, 0, ",", ".");
      	$data['diskon'] = $pembelian->diskon.'%';
      	$data['promo'] = "Rp".number_format($pembelian->harga * ($pembelian->diskon / 100), 0, ",", ".");
      	$data['total'] = "Rp".number_format($pembelian->harga - ($pembelian->harga * ($pembelian->diskon / 100)), 0, ",", ".");
      	$id_customer = $pembelian->id_customer;
      	$customer = $this->PembelianModel->getCustomer($id_customer)->row();
      	$data['nama_customer'] = $customer->nama_customer;
      	$data['alamat'] = $customer->alamat;
      	$data['email'] = $customer->email;
      	$data['no_wa'] = $customer->no_wa;
      
        $this->load->view('layout', $data);
    }
  
  	public function cetak_invoice($invoice){
      	$pembelian = $this->PembelianModel->getPembelian($invoice)->row();
      	$data['no_invoice'] = $pembelian->no_invoice;
      	$data['paket'] = $pembelian->paket;
      	$data['tgl_issue'] = date('d-m-Y', strtotime($pembelian->tgl_pembelian));
      	$data['tgl_expired'] = date('d-m-Y', strtotime($pembelian->tgl_expired));
      	$rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();
      	$data['nama_rumah'] = $rumah->nama_rumah;
      	$data['sub_total'] = "Rp".number_format($pembelian->harga, 0, ",", ".");
      	$data['diskon'] = $pembelian->diskon.'%';
      	$data['promo'] = "Rp".number_format($pembelian->harga * ($pembelian->diskon / 100), 0, ",", ".");
      	$data['total'] = "Rp".number_format($pembelian->harga - ($pembelian->harga * ($pembelian->diskon / 100)), 0, ",", ".");
      	$id_customer = $pembelian->id_customer;
      	$customer = $this->PembelianModel->getCustomer($id_customer)->row();
      	$data['nama_customer'] = $customer->nama_customer;
      	$data['alamat'] = $customer->alamat;
      	$data['email'] = $customer->email;
      	$data['no_wa'] = $customer->no_wa;
    	$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = 'invoice.pdf';
		$this->pdf->generate('pembelian/cetak_invoice', $data);
      	//$this->load->view('pembelian/cetak_invoice', $data);
	}
  
  	public function simpanPembelian() {
        parse_str(file_get_contents('php://input'), $data);
        $response = $this->PembelianModel->simpanPembelian($data);
      	if ($response) $this->kirimInvoice($data['no_invoice']);
        $this->output
             ->set_status_header(201)
             ->set_content_type('application/json')
             ->set_output(json_encode($response, JSON_PRETTY_PRINT))
             ->_display();
        exit;
    }
  
  
  
  
  public function paket_pembelian($id){
        $data['halaman'] = 'pembelian/paket_pembelian';
    	$rumah = $this->PembelianModel->getRumah($id)->row();
        $data['id_rumah'] = $rumah->id_rumah;
      	$data['nama_rumah'] = $rumah->nama_rumah;
        $this->load->view('layout', $data);
    }
  
   public function checkout($id_paket,$id_rumah){
        $data['halaman'] = 'pembelian/checkout';
        $data['konsep'] = $this->DetailModel->getDetailKonsep($id_rumah)->row();
      	$data['konsep_desain'] = $this->DetailModel->getDetailKonsepDesain($id_rumah)->row();
      	$data['terjual'] = $this->DetailModel->getRumahTerjual($id_rumah)->row();
      	$data['gaya_desain'] = $this->DetailModel->getDetailGayaDesain($id_rumah)->result();
        $data['foto_rumah'] = $this->DetailModel->getFotoRumah($id_rumah)->result();
        $this->load->view('layout', $data);
    }
}