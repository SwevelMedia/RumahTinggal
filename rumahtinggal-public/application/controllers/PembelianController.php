<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class PembelianController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("PembelianModel");
    $this->load->model("CustomerModel");
    $this->load->model("DetailModel");
    $this->load->model("DesainModel");
  }

  public function kirimInvoice($invoice)
  {
    $curl = curl_init();
    $token = "Nn1bkizlducS7Qwbf9BExoMCsYOEmDwR2y1rrrl8hdzm745Xmsw0mxMzCcoA0orB";

    $pembelian = $this->PembelianModel->getPembelian($invoice)->row();

    if ($pembelian->paket == '1') {
      $paket = 'PAKET 1';
    } else if ($pembelian->paket == '2') {
      $paket = 'PAKET 2';
    } else {
      $paket = 'PAKET 3';
    }

    //$paket = $pembelian->paket == '1' ? 'LITE' : 'PREMIUM';
    $expired = date('d-m-Y', strtotime($pembelian->tgl_expired));
    $rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();
    $nama_rumah = $rumah->nama_rumah;
    $luas_bangunan = $rumah->luas_bangunan;
    $total = "Rp" . number_format($pembelian->harga - ($pembelian->harga * ($pembelian->diskon / 100)), 0, ",", ".");
    $id_customer = $pembelian->id_customer;
    $customer = $this->PembelianModel->getCustomer($id_customer)->row();
    $nama = $customer->nama_customer;
    $no_wa = $customer->no_wa;

    $data = [
      'phone' => $no_wa,
      'message' => "Halo {$nama},\n\nTerima kasih telah melakukan pembelian desain di RumahTinggal.id\n\nBerikut adalah rincian pembelian Anda:\nNo. Invoice: *{$invoice}*\nNama Desain: {$nama_rumah}\nPaket: {$paket}\nLuas Bangunan: {$luas_bangunan}\n\n*Transfer Bank*:\nMandiri: 137-00-1138387-0 a.n. PT Baracipta Esa Engineering\nTotal Tagihan: *{$total}*\nBatas Pembayaran: *{$expired}*\nStatus: Belum Dibayar\n\nSalam,\nAdmin RumahTinggal.id",
    ];

    curl_setopt(
      $curl,
      CURLOPT_HTTPHEADER,
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

  public function paket($id)
  {
    $data['halaman'] = 'pembelian/paket';
    $rumah = $this->PembelianModel->getRumah($id)->row();
    $promo = $this->PembelianModel->getRumahPromo($id)->row();
    if ($promo != null) $diskon = $promo->promo;
    else $diskon = 100;
    $data['id_rumah'] = $rumah->id_rumah;
    $data['nama_rumah'] = $rumah->nama_rumah;
    $lantai = $rumah->lantai;
    $luas_bangunan = $rumah->luas_bangunan;
    $harga = $lantai == '1' ? 33750 * $luas_bangunan : 45000 * $luas_bangunan;
    $data['harga_p1'] = "Rp" . number_format($harga * 0.7, 0, ",", ".");
    $data['harga_promo_p1'] = "Rp" . number_format(($harga * 0.7) - (($harga * 0.7) * ($diskon / 100)), 0, ",", ".");
    $data['harga_p2'] = "Rp" . number_format($harga, 0, ",", ".");
    $data['harga_promo_p2'] = "Rp" . number_format($harga - ($harga * ($diskon / 100)), 0, ",", ".");
    $data['diskon'] = $diskon . "%";

    $this->load->view('layout', $data);
  }

  public function pembelian($paket, $id)
  {
    $data['halaman'] = 'pembelian/pembelian';
    $data['no_invoice'] = time();
    $data['paket'] = $paket;
    $rumah = $this->PembelianModel->getRumah($id)->row();
    $promo = $this->PembelianModel->getRumahPromo($id)->row();
    if ($promo != null) $diskon = $promo->promo;
    else $diskon = 0;
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
    $data['batas_transfer'] = date('d-m-Y', strtotime(date('Y-m-d') . '+ 2 days'));

    $this->load->view('layout', $data);
  }

  public function invoice($invoice)
  {
    $data['halaman'] = 'pembelian/invoice';
    $pembelian = $this->PembelianModel->getPembelian($invoice)->row();
    $data['no_invoice'] = $pembelian->no_invoice;
    $data['paket'] = $pembelian->paket;
    $data['tgl_issue'] = date('d-m-Y', strtotime($pembelian->tgl_pembelian));
    $data['tgl_expired'] = date('d-m-Y', strtotime($pembelian->tgl_expired));
    $rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();
    $data['id_rumah'] = $rumah->id_rumah;
    $data['nama_rumah'] = $rumah->nama_rumah;
    $data['sub_total'] = "Rp" . number_format($pembelian->harga, 0, ",", ".");
    $data['diskon'] = $pembelian->diskon . '%';
    $data['ppn'] = "Rp" . number_format($pembelian->harga * 11 / 100, 0, ",", ".");
    $harga_ppn = $pembelian->harga + ($pembelian->harga * 11 / 100);
    $data['total'] = "Rp" . number_format($harga_ppn - ($harga_ppn * ($pembelian->diskon / 100)), 0, ",", ".");
    $data['promo'] = "Rp" . number_format($harga_ppn * ($pembelian->diskon / 100), 0, ",", ".");
    $id_customer = $pembelian->id_customer;
    $customer = $this->PembelianModel->getCustomer($id_customer)->row();
    $data['nama_customer'] = $customer->nama_customer;
    $data['alamat'] = $customer->alamat;
    $data['email'] = $customer->email;
    $data['no_wa'] = $customer->no_wa;

    $this->load->view('layout', $data);
  }

  public function cetak_invoice($invoice)
  {
    $pembelian = $this->PembelianModel->getPembelian($invoice)->row();
    $data['no_invoice'] = $pembelian->no_invoice;
    $data['paket'] = $pembelian->paket;
    $data['tgl_issue'] = date('d-m-Y', strtotime($pembelian->tgl_pembelian));
    $data['tgl_expired'] = date('d-m-Y', strtotime($pembelian->tgl_expired));
    $rumah = $this->PembelianModel->getRumah($pembelian->id_rumah)->row();
    $data['nama_rumah'] = $rumah->nama_rumah;
    $data['sub_total'] = "Rp" . number_format($pembelian->harga, 0, ",", ".");
    $data['diskon'] = $pembelian->diskon . '%';
    $data['ppn'] = "Rp" . number_format($pembelian->harga * 11 / 100, 0, ",", ".");
    $harga_ppn = $pembelian->harga + ($pembelian->harga * 11 / 100);
    $data['total'] = "Rp" . number_format($harga_ppn - ($harga_ppn * ($pembelian->diskon / 100)), 0, ",", ".");
    $data['promo'] = "Rp" . number_format($harga_ppn * ($pembelian->diskon / 100), 0, ",", ".");
    /*$data['promo'] = "Rp".number_format($pembelian->harga * ($pembelian->diskon / 100), 0, ",", ".");
      	$data['total'] = "Rp".number_format($pembelian->harga - ($pembelian->harga * ($pembelian->diskon / 100)), 0, ",", ".");*/
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

  public function simpanPembelian()
  {
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

  public function simpanPembelianGratis()
  {
    parse_str(file_get_contents('php://input'), $data);
    $response = $this->PembelianModel->simpanPembelianGratis($data);
    //if ($response) $this->kirimInvoice($data['no_invoice']);
    $this->output
      ->set_status_header(201)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }


  public function paket_pembelian($id)
  {
    $data['halaman'] = 'pembelian/paket_pembelian';
    $rumah = $this->PembelianModel->getRumah($id)->row();
    $data['id_rumah'] = $rumah->id_rumah;
    $data['nama_rumah'] = $rumah->nama_rumah;

    $data['rekap_download'] = $this->CustomerModel->getDataDownload($id)->num_rows();
    $data['rekap_beli1'] = $this->CustomerModel->getDataBeli1($id)->num_rows();
    $data['rekap_beli2'] = $this->CustomerModel->getDataBeli2($id)->num_rows();
    $data['rekap_beli3'] = $this->CustomerModel->getDataBeli3($id)->num_rows();

    // $laporan_desain = $this->DesainModel->getDokumenRumahGratis($id)->row();
    $data['laporan_desain'] = $this->DesainModel->getDokumenRumahGratis($id)->row();


    $promo = $this->PembelianModel->getRumahPromo($id)->row();
    if ($promo != null) $diskon = $promo->promo;
    else $diskon = 0;
    $lantai = $rumah->lantai;
    $luas_bangunan = $rumah->luas_bangunan;
    /*$harga = $lantai == '1' ? 33750 * $luas_bangunan : 45000 * $luas_bangunan;
      	$data['harga_p1'] = "".number_format($harga * 0.5, 0, ",", ".");
      	$data['harga_promo_p1'] = "".number_format(($harga * 0.5) - (($harga * 0.5) * ($diskon / 100)) , 0, ",", ".");
        $data['harga_p2'] = "".number_format($harga * 0.7, 0, ",", ".");
      	$data['harga_promo_p2'] = "".number_format(($harga * 0.7) - (($harga * 0.7) * ($diskon / 100)) , 0, ",", ".");
      	$data['harga_p3'] = "".number_format($harga, 0, ",", ".");
      	$data['harga_promo_p3'] = "".number_format($harga - ($harga * ($diskon / 100)), 0, ",", ".");*/

    if ($lantai == '1') {

      $data['harga_p2'] = "" . number_format((20000 * $luas_bangunan) + (20000 * $luas_bangunan * 20 / 100), 0, ",", ".");
      $data['harga_promo_p2'] = "" . number_format((20000 * $luas_bangunan) - ((20000 * $luas_bangunan) * ($diskon / 100)), 0, ",", ".");
      $data['harga_p3'] = "" . number_format((35000 * $luas_bangunan) + (35000 * $luas_bangunan * 15 / 100), 0, ",", ".");
      $data['harga_promo_p3'] = "" . number_format((35000 * $luas_bangunan) - ((35000 * $luas_bangunan) * ($diskon / 100)), 0, ",", ".");
    } else if ($lantai == '2') {
      $data['harga_p2'] = "" . number_format((30000 * $luas_bangunan) + (30000 * $luas_bangunan * 20 / 100), 0, ",", ".");
      $data['harga_promo_p2'] = "" . number_format((30000 * $luas_bangunan) - ((30000 * $luas_bangunan) * ($diskon / 100)), 0, ",", ".");
      $data['harga_p3'] = "" . number_format((45000 * $luas_bangunan) + (45000 * $luas_bangunan * 15 / 100), 0, ",", ".");
      $data['harga_promo_p3'] = "" . number_format((45000 * $luas_bangunan) - ((45000 * $luas_bangunan) * ($diskon / 100)), 0, ",", ".");
    } else if ($lantai == '3') {
      $data['harga_p2'] = "" . number_format((30000 * $luas_bangunan) + (30000 * $luas_bangunan * 20 / 100), 0, ",", ".");
      $data['harga_promo_p2'] = "" . number_format((30000 * $luas_bangunan) - ((30000 * $luas_bangunan) * ($diskon / 100)), 0, ",", ".");
      $data['harga_p3'] = "" . number_format((45000 * $luas_bangunan) + (45000 * $luas_bangunan * 15 / 100), 0, ",", ".");
      $data['harga_promo_p3'] = "" . number_format((45000 * $luas_bangunan) - ((45000 * $luas_bangunan) * ($diskon / 100)), 0, ",", ".");
    }


    if ($luas_bangunan <= 100) {
      $data['harga_p1'] = 300000;
      $data['harga_promo_p1'] = "" . number_format(300000 - (300000 * (50 / 100)), 0, ",", ".");
    } else if ($luas_bangunan <= 200) {
      $data['harga_p1'] = 400000;
      $data['harga_promo_p1'] = "" . number_format(400000 - (400000 * (50 / 100)), 0, ",", ".");
    } else if ($luas_bangunan <= 300) {
      $data['harga_p1'] = 500000;
      $data['harga_promo_p1'] = "" . number_format(500000 - (500000 * (50 / 100)), 0, ",", ".");
    } else if ($luas_bangunan > 300) {
      $data['harga_p1'] = 600000;
      $data['harga_promo_p1'] = "" . number_format(600000 - (600000 * (50 / 100)), 0, ",", ".");
    }

    $data['diskon'] = $diskon . "%";
    $this->load->view('layout', $data);
  }

  public function pembelian_paket($paket, $id)
  {
    $data['halaman'] = 'pembelian/pembelian_paket';
    $data['no_invoice'] = time();
    $data['paket'] = $paket;
    $rumah = $this->PembelianModel->getRumah($id)->row();
    $promo = $this->PembelianModel->getRumahPromo($id)->row();
    if ($promo != null) $diskon = $promo->promo;
    else $diskon = 0;
    $data['id_rumah'] = $rumah->id_rumah;
    $data['nama_rumah'] = $rumah->nama_rumah;
    $lantai = $rumah->lantai;
    $luas_bangunan = $rumah->luas_bangunan;
    $harga = $lantai == '1' ? 33750 * $luas_bangunan : 45000 * $luas_bangunan;
    //$pros_harga = $paket == '1' ? 0.7 : 1;

    $pros_harga = $paket == '1' ? 0.5 : ($paket == '2' ? 0.7 : 1);

    $data['harga'] = $harga * $pros_harga;
    $data['diskon'] = $diskon;
    $id_customer = get_cookie('id_customer');
    $customer = $this->PembelianModel->getCustomer($id_customer)->row();
    $data['id_customer'] = $id_customer;
    $data['nama_customer'] = $customer->nama_customer;
    $data['alamat'] = $customer->alamat;
    $data['no_wa'] = $customer->no_wa;
    $data['batas_transfer'] = date('d-m-Y', strtotime(date('Y-m-d') . '+ 2 days'));

    $this->load->view('layout', $data);
  }


  public function checkout($id_paket, $id_rumah)
  {
    //   $data['halaman'] = 'pembelian/checkout';
    $data['konsep'] = $this->DetailModel->getDetailKonsep($id_rumah)->row();
    $data['konsep_desain'] = $this->DetailModel->getDetailKonsepDesain($id_rumah)->row();
    $data['terjual'] = $this->DetailModel->getRumahTerjual($id_rumah)->row();
    $data['gaya_desain'] = $this->DetailModel->getDetailGayaDesain($id_rumah)->result();
    $data['foto_rumah'] = $this->DetailModel->getFotoRumah($id_rumah)->result();


    $data['paket'] = $id_paket;
    $rumah = $this->PembelianModel->getRumah($id_rumah)->row();
    $promo = $this->PembelianModel->getRumahPromo($id_rumah)->row();
    if ($promo != null) $diskon = $promo->promo;
    else $diskon = 0;
    $data['id_rumah'] = $rumah->id_rumah;
    $data['nama_rumah'] = $rumah->nama_rumah;
    $lantai = $rumah->lantai;
    $luas_bangunan = $rumah->luas_bangunan;
    //	$harga = $lantai == '1' ? 33750 * $luas_bangunan : 45000 * $luas_bangunan;
    //$pros_harga = $paket == '1' ? 0.7 : 1;

    //$pros_harga = $id_paket == '1' ? 0.5 : ( $id_paket == '2' ? 0.7 : 1 );


    if ($lantai == '1') {
      if ($id_paket == '2') {
        $data['harga'] = "" . number_format(20000 * $luas_bangunan, 0, ",", ".");
        $data['ppn'] = number_format((20000 * $luas_bangunan) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((20000 * $luas_bangunan) + ((20000 * $luas_bangunan) * 11 / 100), 0, ",", ".");
      } else if ($id_paket == '3') {
        $data['harga'] = "" . number_format(35000 * $luas_bangunan, 0, ",", ".");
        $data['ppn'] = number_format((35000 * $luas_bangunan) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((35000 * $luas_bangunan) + ((35000 * $luas_bangunan) * 11 / 100), 0, ",", ".");
      }
    } else if ($lantai == '2') {
      if ($id_paket == '2') {
        $data['harga'] = "" . number_format(30000 * $luas_bangunan, 0, ",", ".");
        $data['ppn'] = number_format((30000 * $luas_bangunan) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((30000 * $luas_bangunan) + ((30000 * $luas_bangunan) * 11 / 100), 0, ",", ".");
      } else if ($id_paket == '3') {
        $data['harga'] = "" . number_format(45000 * $luas_bangunan, 0, ",", ".");
        $data['ppn'] = number_format((45000 * $luas_bangunan) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((45000 * $luas_bangunan) + ((45000 * $luas_bangunan) * 11 / 100), 0, ",", ".");
      }
    } else if ($lantai == '3') {
      if ($id_paket == '2') {
        $data['harga'] = "" . number_format(30000 * $luas_bangunan, 0, ",", ".");
        $data['ppn'] = number_format((30000 * $luas_bangunan) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((30000 * $luas_bangunan) + ((30000 * $luas_bangunan) * 11 / 100), 0, ",", ".");
      } else if ($id_paket == '3') {
        $data['harga'] = "" . number_format(45000 * $luas_bangunan, 0, ",", ".");
        $data['ppn'] = number_format((45000 * $luas_bangunan) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((45000 * $luas_bangunan) + ((45000 * $luas_bangunan) * 11 / 100), 0, ",", ".");
      }
    }

    if ($id_paket == '1') {
      if ($luas_bangunan <= 100) {
        $data['harga'] = 300000;
        $data['ppn'] = number_format((300000) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((300000) + ((300000) * 11 / 100), 0, ",", ".");
      } else if ($luas_bangunan <= 200) {
        $data['harga'] = 400000;
        $data['ppn'] = number_format((400000) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((400000) + ((400000) * 11 / 100), 0, ",", ".");
      } else if ($luas_bangunan <= 300) {
        $data['harga'] = 500000;
        $data['ppn'] = number_format((500000) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((500000) + ((500000) * 11 / 100), 0, ",", ".");
      } else if ($luas_bangunan >= 300) {
        $data['harga'] = 600000;
        $data['ppn'] = number_format((600000) * 11 / 100, 0, ",", ".");
        $data['total'] = number_format((600000) + ((600000) * 11 / 100), 0, ",", ".");
      }
    }


    //$data['harga'] = number_format(($harga * $pros_harga), 0, ",", ".");
    //$data['ppn'] = number_format(($harga * $pros_harga)*10/100, 0, ",", ".");
    //$data['total'] = number_format(($harga * $pros_harga)+(($harga * $pros_harga)*10/100), 0, ",", ".");
    $data['diskon'] = $diskon;
    $id_customer = get_cookie('id_customer');
    $customer = $this->PembelianModel->getCustomer($id_customer)->row();
    $data['id_customer'] = $id_customer;
    $data['nama_customer'] = $customer->nama_customer;
    $data['alamat'] = $customer->alamat;
    $data['no_wa'] = $customer->no_wa;
    $data['batas_transfer'] = date('d-m-Y', strtotime(date('Y-m-d') . '+ 2 days'));
    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json')
      ->set_output(json_encode($data, JSON_PRETTY_PRINT))
      ->_display();
    exit;
    //   $this->load->view('layout', $data);
  }


  public function ubahAlamatCustomer()
  {
    parse_str(file_get_contents('php://input'), $data);
    $response = $this->PembelianModel->ubahAlamatCustomer($data);
    $this->output
      ->set_status_header(201)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }
}
