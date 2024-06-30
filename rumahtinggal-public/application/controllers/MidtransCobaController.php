<?php

defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MidtransCobaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $params = array('server_key' => 'SB-Mid-server-Fn1FzBkNlL1VWz8QNujooUlT', 'production' => false);
        $params = array('server_key' => 'Mid-server-eVJgMT4JGKq5G-d2dzxIcYED', 'production' => true);
        $this->load->library(array('midtrans', 'veritrans'));
        $this->midtrans->config($params);
        $this->veritrans->config($params);

        $this->load->model('DesainModel');
        $this->load->model('PembayaranModel');

        require APPPATH . 'libraries/PHPMailer/src/Exception.php';
        require APPPATH . 'libraries/PHPMailer/src/PHPMailer.php';
        require APPPATH . 'libraries/PHPMailer/src/SMTP.php';
    }

    public function bayarTagihanMidtrans()
    {
        parse_str(file_get_contents('php://input'), $data);
        // $id_pengguna = get_cookie('id_pengguna');
        $transaction = array(
            'order_id' => rand(),
            'gross_amount' => intval($data['total'])
        );



        $items = array(
            array(
                'id' => '1',
                'price' => intval($data['harga']),
                'quantity' => intval(1),
                'name' => 'Paket Desain'
            ),
            array(
                'id' => '4',
                'price' => intval($data['ppn']),
                'quantity' => 1,
                'name' => "PPN 10%"
            )
        );


        if (intval($data['diskon']) > 0) {
            $diskon = array(
                'id' => '5',
                'price' => -intval($data['diskon']),
                'quantity' => 1,
                'name' => 'Promo ' . $data['kode_promo']
            );
            array_push($items, $diskon);
        }
        $shipping_address = array(
            'address'       => $data['alamat'],
            'country_code'  => 'IDN'
        );
        $customers = array(
            'first_name'    => $data['nama_pengguna'],
            'email'         => $data['email'],
            'phone'         => $data['no_wa'],
            // 'address'         => $data['alamat_pengiriman'],
            'shipping_address' => $shipping_address
        );
        $credit_card = array(
            'secure' => true,
            'save_card' => true
        );
        $expiry = array(
            'start_time' => date("Y-m-d H:i:s O", time()),
            'unit' => 'day',
            'duration' => 14
        );
        $transaction_data = array(
            'transaction_details' => $transaction,
            'item_details'        => $items,
            'customer_details'    => $customers,
            'credit_card'         => $credit_card,
            'expiry'              => $expiry
        );
        //print_r($transaction_data);
        $snapToken = $this->midtrans->getSnapToken($transaction_data);
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($snapToken, JSON_PRETTY_PRINT))
            ->_display();
        exit;
    }

    public function simpanPembayaranMidtrans()
    {
        parse_str(file_get_contents('php://input'), $data);
        $this->PembayaranModel->simpanOrder($data);
        $result = json_decode($data['result_data']);

        if ($result->payment_type == 'bank_transfer') {
            if ($result->va_numbers) {
                foreach ($result->va_numbers as $row) {
                    $bank = $row->bank;
                    $no_va = $row->va_number;
                }
                $url_slip = $result->pdf_url;
            } else {
                $bank = 'permata';
                $no_va = $result->permata_va_number;
                $url_slip = $result->pdf_url;
            }
        } else if ($result->payment_type == 'echannel') {
            $bank = 'mandiri';
            $no_va = $result->bill_key;
            $url_slip = $result->pdf_url;
        } else if ($result->payment_type == 'credit_card') {
            $bank = $result->bank;
            $no_va = $result->masked_card;
            $url_slip = '';
        } else if ($result->payment_type == 'gopay' || $result->payment_type == 'qris') {
            $bank = $no_va = $url_slip = '';
        } else if ($result->payment_type == 'cstore') {
            $bank  = '';
            $no_va = $result->payment_code;
            $url_slip = $result->pdf_url;
        }

        $data_bayar = array(
            'id_order' => $data['no_invoice'],
            'kategori' => $data['kategori'],
            'total_bayar' => $result->gross_amount,
            'jenis_pembayaran' => $result->payment_type,
            'bank' => $bank,
            'no_va' => $no_va,
            'kode_status' => $result->status_code,
            'url_slip' => $url_slip,
            'waktu_transaksi' => $result->transaction_time
        );

        $this->PembayaranModel->simpanPembayaran($data_bayar);

        $response = array('Success' => true);

        $this->output
            ->set_status_header(201)
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();
        exit;
    }

    public function notifikasiPembayaran()
    {
        $json_result = file_get_contents('php://input');
        $result = json_decode($json_result);
        $id_order = $result->order_id;

        if ($result) $notif = $this->veritrans->status($id_order);

        $status_transaksi = $notif->transaction_status;
        $kode_status = $notif->status_code;

        if ($status_transaksi == 'pending' || $status_transaksi == 'challenge') {
            $data_bayar = array(
                'id_order' => $id_order,
                'kode_status' => '201',
                'waktu_pembayaran' => ''
            );

            $this->PembayaranModel->ubahStatusPembayaran($data_bayar);
        } else if ($status_transaksi == 'settlement' || $status_transaksi == 'capture') {
            $data_bayar = array(
                'id_order' => $id_order,
                'kode_status' => '200',
                'waktu_pembayaran' => $notif->settlement_time
            );

            $this->PembayaranModel->ubahStatusPembayaran($data_bayar);

            $this->generateInvoiceTagihan($id_order);
        } else if ($status_transaksi == 'expire') {
            $data_bayar = array(
                'id_order' => $id_order,
                'kode_status' => '407',
                'waktu_pembayaran' => ''
            );

            $this->PembayaranModel->ubahStatusPembayaran($data_bayar);

            $this->generateInvoiceTagihan($id_order);
        } else if ($status_transaksi == 'cancel' || $status_transaksi == 'deny') {
            $data_bayar = array(
                'id_order' => $id_order,
                'kode_status' => '202',
                'waktu_pembayaran' => ''
            );

            $this->PembayaranModel->ubahStatusPembayaran($data_bayar);
        }
    }

    public function setStatus()
    {
        parse_str(file_get_contents('php://input'), $data);
        $id_order = $data['id_order'];
        $aksi = $data['aksi'];

        switch ($aksi) {
            case 'status':
                $this->veritrans->status($id_order);
                break;
            case 'approve':
                $this->veritrans->approve($id_order);
                break;
            case 'expire':
                $this->veritrans->expire($id_order);
                break;
            case 'cancel':
                $this->veritrans->cancel($id_order);
                break;
        }
    }

    function formatTanggal($date)
    {
        $tgl = date('d', strtotime($date));
        $bln = date('m', strtotime($date));
        $thn = date('Y', strtotime($date));
        $bulan = '';

        if ($bln == '01') $bulan = 'Januari';
        else if ($bln == '02') $bulan = 'Februari';
        else if ($bln == '03') $bulan = 'Maret';
        else if ($bln == '04') $bulan = 'April';
        else if ($bln == '05') $bulan = 'Mei';
        else if ($bln == '06') $bulan = 'Juni';
        else if ($bln == '07') $bulan = 'Juli';
        else if ($bln == '08') $bulan = 'Agustus';
        else if ($bln == '09') $bulan = 'September';
        else if ($bln == '10') $bulan = 'Oktober';
        else if ($bln == '11') $bulan = 'November';
        else $bulan = 'Desember';

        return $tgl . ' ' . $bulan . ' ' . $thn;
    }

    public function getInvoiceTagihan($id_order)
    {
        $response = $this->PembayaranModel->getInvoiceTagihan($id_order)->row();

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();
        exit;
    }

    function generateInvoiceTagihan($id_order)
    {
        $invoice = $this->PembayaranModel->getInvoiceTagihan($id_order)->row();

        if ($invoice->kode_status == '201' || $invoice->kode_status == '407') {
            $data['paid'] = 'unpaid';
            $data['status_bayar'] = ($invoice->kode_status == '201') ? 'BELUM DIBAYAR' : 'KADALUARSA';
            $data['kadaluarsa'] = 'kadaluarsa';
            $data['tgl_kadaluarsa'] = 'Tgl. Kadaluarsa: ' . $this->formatTanggal($invoice->tgl_kadaluarsa);
        } else if ($invoice->kode_status == '200') {
            $data['paid'] = 'unpaid paid';
            $data['status_bayar'] = 'TELAH DIBAYAR';
            $data['kadaluarsa'] = 'dibayar';
            $data['tgl_kadaluarsa'] = 'Tgl. Pembayaran: ' . $this->formatTanggal($invoice->tgl_pembayaran);
        }
        $data['no_invoice'] = '#' . $invoice->no_invoice;
        $data['nama_akun'] = $invoice->nama_akun;
        $data['no_wa'] = $invoice->no_wa;
        $data['email'] = $invoice->email;
        $data['tgl_invoice'] = $this->formatTanggal($invoice->tgl_pembelian);

        $data['nama_rumah'] = 'DESAIN ' . $invoice->nama_rumah;
        $data['harga'] = number_format($invoice->harga, 0, ",", ".");

        $data['ppn'] = number_format($invoice->ppn, 0, ",", ".");
        if ($invoice->diskon > 0) {
            $data['pros_diskon'] = '(Disc. ' . $invoice->pros_diskon . '%)';
            $data['diskon'] = number_format($invoice->diskon, 0, ",", ".");
            $data['display_promo'] = '';
        } else {
            $data['pros_diskon'] = $data['diskon'] = 0;
            $data['display_promo'] = 'hidden';
        }
        $data['total'] = number_format($invoice->total_harga, 0, ",", ".");

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = 'Invoice #' . $invoice->no_invoice . '.pdf';
        $this->pdf->generate('pembelian/invoice', $data);
        print_r($invoice->no_invoice);
        print_r($invoice->nama_akun);
        print_r($invoice->email);
        print_r($invoice->nama_rumah);
        print_r($invoice->kode_status);
        $this->kirimInvoice($invoice->no_invoice, $invoice->nama_akun, $invoice->email, $invoice->nama_rumah, $invoice->kode_status);
    }

    function kirimInvoice($no_invoice, $nama, $email, $paket, $status)
    {
        $paket_code = urldecode($paket);
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host       = 'sv2.ecc.co.id'; //'tls://smtp.gmail.com';//
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mail@rumahtinggal.id';
        $mail->Password   = 'C%87SfcjjaHb*te';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('mail@rumahtinggal.id', 'Payment RumahTinggal.id');
        $mail->addAddress($email);
        $mail->AddCC('mail.rumahtinggal@gmail.com');
        // $mail->AddCC('masuhudi@gmail.com');
        $mail->Subject = 'INVOICE #' . $no_invoice . ' Desain ' . $paket_code;
        $mail->isHTML(true);

        if ($status == '201') {
            $text_email = 'Terima kasih telah melakukan pembelian <strong>Desain ' . $paket_code . '</strong>.<br>Selanjutnya, silakan lakukan pembayaran sesuai yang tertera pada Invoice berikut menggunakan metode yang telah Anda tentukan.';
        } else if ($status == '200') {
            $text_email = 'Terima kasih telah melakukan pembayaran untuk Invoice Anda dengan nomor <strong>#' . $no_invoice . '</strong>.<br>Anda telah membeli Desain <strong>' . $paket_code . '</strong>.<br>Selamat membangun rumah sesuai yang diidamkan melalui Rumahtinggal.id.<br><br><strong>Harga Lebih Hemat, Desain Lebih Akurat</strong>';
        } else if ($status == '407') {
            $text_email = 'Anda telah melewati batas pembayaran untuk Invoice dengan nomor <strong>#' . $no_invoice . '</strong>.<br>Pembelian <strong>Desain ' . $paket_code . '</strong> Anda akan dibatalkan.<br>Anda dapat melakukan pembelian ulang paket desain di Rumahtinggal.id melalui <a href="https://rumahtinggal.id/paket_pembelian" style="font-weight: 600;color: #10AE0B;text-decoration: none;">Halaman Online Desain</a>.';
        }



        $mailContent = '<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

          <!DOCTYPE html>
          <html>

          <head>
              <title></title>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta http-equiv="X-UA-Compatible" content="IE=edge" />
              <style type="text/css">
                  @media screen {
                      @font-face {
                          font-family: "Quicksand";
                          font-style: normal;
                          font-weight: 400;
                      }

                      @font-face {
                          font-family: "Quicksand";
                          font-style: normal;
                          font-weight: 700;
                      }

                      @font-face {
                          font-family: "Quicksand";
                          font-style: italic;
                          font-weight: 400;
                      }

                      @font-face {
                          font-family: "Quicksand";
                          font-style: italic;
                          font-weight: 700;
                      }
                  }

                  body, table, td, a {
                      -webkit-text-size-adjust: 100%;
                      -ms-text-size-adjust: 100%;
                  }

                  table { border-collapse: collapse !important; }

                  table, td {
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                  }

                  img {
                      border: 0;
                      height: auto;
                      line-height: 100%;
                      outline: none;
                      text-decoration: none;
                      -ms-interpolation-mode: bicubic;
                  }

                  body {
                      height: 100% !important;
                      margin: 0 !important;
                      padding: 0 !important;
                      width: 100% !important;
                  }

                  /* iOS BLUE LINKS */
                  a[x-apple-data-detectors] {
                      color: inherit !important;
                      text-decoration: none !important;
                      font-size: inherit !important;
                      font-family: inherit !important;
                      font-weight: inherit !important;
                      line-height: inherit !important;
                  }

                  /* MOBILE STYLES */
                  @media screen and (max-width:600px) {
                      h1 {
                          font-size: 32px !important;
                          line-height: 32px !important;
                      }
                  }

                  /* ANDROID CENTER FIX */
                  div[style*="margin: 16px 0;"] { margin: 0 !important; }

                  .pre-header {
                      padding: 22px 0 0;
                      background: #026CB6;
                          background-size: auto;
                      background-size: 100% 200%;
                  }

                  .header {
                      padding: 30px 30px 0 30px;
                      background: #fff;
                  }

                  .img-email {
                      display: block;
                      border: 0px;
                      width: 35%;
                  }

                  .content {
                      padding: 30px;
                      background: #fff;
                      color: #666666;
                      font-family: "Quicksand";
                      font-size: 16px;
                      font-weight: 400;
                      line-height: 25px;
                  }

                  .footer {
                      background: #f9f4ae;
                      font-size: 14px;
                      text-align: center;
                      padding: 15px;
                  }
              </style>
          </head>

          <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                      <td align="center" class="pre-header">
                          
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <tr>
                                  <td align="center" valign="top" class="header">
                                      <img src="https://rumahtinggal.id/assets/img/logo.png" class="img-email" />
                                  </td>
                              </tr>
                          </table>
                      </td>
                  </tr>
                  <tr>
                      <td align="center">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <tr>
                                  <td class="content">
                                      <p style="margin: 0;">
                                          Halo <span style="color: #026CB6 !important;font-weight: 600;">' . $nama . '</span>,<br><br>
                                          ' . $text_email . '
                                      </p>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="content">
                                      <p style="margin: 0;">
                                          Salam,
                                          <br><br>Admin Rumahtinggal.id
                                      </p>
                                  </td>
                              </tr>
                          </table>
                      </td>
                  </tr>
                  <tr>
                      <td align="center" style="padding: 10px 0;">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <tr>
                                  <td class="content footer">
                                      <p style="margin: 0;">Hubungi kami jika Anda menemui masalah atau membutuhkan bantuan.</p>
                                      <p style="margin: 0;display: inline-flex;padding-top: 3px;">
                                          <img src="https://estimator.id/assets/img/icon_mail.png" width="28px"><span style="margin-left: 6px;">mail@rumahtinggal.id</span>&nbsp;&nbsp;&nbsp;
                                          <img src="https://estimator.id/assets/img/icon_phone.png" width="28px"><span style="margin-left: 6px;">+628112585566</span>
                                      </p>
                                  </td>
                              </tr>
                          </table>
                      </td>
                  </tr>
              </table>
          </body>

          </html>';

        $mail->Body = $mailContent;
        $mail->AddAttachment($_SERVER['DOCUMENT_ROOT'] . '/assets/dokumen/invoice_paket/Invoice #' . $no_invoice . '.pdf', 'Invoice #' . $no_invoice);
        //$mail->SMTPDebug = 2;
        $terkirim = $mail->send();
        if (!$terkirim) echo "Terjadi kesalahan saat pengiriman email: " . $mail->ErrorInfo;
    }



    public function cetak_invoice_midtrans($id_order)
    {
        $invoice = $this->PembayaranModel->getInvoiceTagihan($id_order)->row();

        if ($invoice->kode_status == '201' || $invoice->kode_status == '407') {
            $data['paid'] = 'unpaid';
            $data['status_bayar'] = ($invoice->kode_status == '201') ? 'BELUM DIBAYAR' : 'KADALUARSA';
            $data['kadaluarsa'] = 'kadaluarsa';
            $data['tgl_kadaluarsa'] = 'Tgl. Kadaluarsa: ' . $this->formatTanggal($invoice->tgl_kadaluarsa);
        } else if ($invoice->kode_status == '200') {
            $data['paid'] = 'unpaid paid';
            $data['status_bayar'] = 'TELAH DIBAYAR';
            $data['kadaluarsa'] = 'dibayar';
            $data['tgl_kadaluarsa'] = 'Tgl. Pembayaran: ' . $this->formatTanggal($invoice->tgl_pembayaran);
        }
        $data['no_invoice'] = '#' . $invoice->no_invoice;
        $data['nama_akun'] = $invoice->nama_akun;
        $data['no_wa'] = $invoice->no_wa;
        $data['email'] = $invoice->email;
        $data['tgl_invoice'] = $this->formatTanggal($invoice->tgl_order);


        /*   foreach ($invoice as $nvc) {
             $data['course'][] = array(
               'nama_course' => $nvc->nama_course,
               'harga' => number_format($nvc->harga, 0, ",", "."),
               'sub_total' => number_format($nvc->harga, 0, ",", ".")
            );
        }*/
        $no = 1;
        $total = 0;
        foreach ($invoice as $nvc) {

            $data['course'][] = "<tr style='background: #f0fbec'>";
            $data['course'][] .= "<td class='text-center'>" . $no++ . "</td>";
            $data['course'][] .= "<td style='font-weight: 600'>" . $nvc->nama_course . "</td>";
            $data['course'][] .= "<td class='text-right'>" . number_format($nvc->harga, 0, ",", ".") . "</td>";
            $data['course'][] .= "<td class='text-right' style='padding-right: 10px;'>" . number_format($nvc->harga, 0, ",", ".") . "</td>";
            $data['course'][] .= "</tr>";

            $total += $nvc->harga;
            // echo $data['course'];

        }

        //$data = array('tag' => $this->story_model->get_tags(), 'genre' => $this->story_model->get_genre(), 'title' => "New Story");

        //$data['nama_course'] = 'COURSE '.$invoice->nama_course;
        //$data['harga'] = number_format($invoice->harga, 0, ",", ".");
        //$data['sub_total'] = number_format($invoice->harga, 0, ",", ".");

        $data['ppn'] = number_format($total * 10 / 100, 0, ",", ".");
        if ($invoice->diskon > 0) {
            $data['pros_diskon'] = '(Disc. ' . $invoice->pros_diskon . '%)';
            $data['diskon'] = number_format($total * $invoice->pros_diskon / 100, 0, ",", ".");
            $data['display_promo'] = '';
        } else {
            $data['pros_diskon'] = $data['diskon'] = 0;
            $data['display_promo'] = 'hidden';
        }
        $data['total'] = number_format(($total - ($total * $invoice->pros_diskon / 100) + ($total * 10 / 100)), 0, ",", ".");
        //print_r($data);

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = 'Invoice #' . $invoice->id_order . '.pdf';
        $this->pdf->generate('online_course/cetak_invoice1', $data);
    }
}
