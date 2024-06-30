<?php

defined('BASEPATH') or exit('No direct script access allowed');



use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



class CustomerController extends CI_Controller
{



  public function __construct()

  {

    parent::__construct();
    $this->load->driver('cache', array('adapter' => 'file'));
    $this->load->model('CustomerModel');
    $this->load->model('KeranjangModel');
    $this->load->library('session');

    /*$this->load->library('google');

      	require_once APPPATH.'third_party/src/Google_Client.php';

    	require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';*/



    require APPPATH . 'libraries/PHPMailer/src/Exception.php';

    require APPPATH . 'libraries/PHPMailer/src/PHPMailer.php';

    require APPPATH . 'libraries/PHPMailer/src/SMTP.php';
  }



  public function index()

  {

    $data['halaman'] = 'login/index';



    $this->load->view('layout', $data);

    // redirect($_SERVER['HTTP_REFERER']);

  }



  public function resetPassword($email)

  {

    $data['halaman'] = 'customer/reset_password';



    $this->load->view('layout', $data);
  }



  public function getResetPassword($email, $pw)
  {

    // parse_str(file_get_contents('php://input'), $data);

    $this->CustomerModel->getResetPassword($email, password_hash($pw, PASSWORD_DEFAULT));

    $customer = $this->CustomerModel->getCustomerByEmail($email)->row();

    set_cookie('id_customer', $customer->id_customer, time() + 86400);

    $response = array(

      'Success' => true,

      'Info' => 'Data Anda berhasil diperbaharui.'

    );



    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getCustomer($no_wa)
  {

    if (strpos(substr($no_wa, 0, 3), '08') !== false) {

      $awal = str_replace("08", "628", substr($no_wa, 0, 3));

      $no_wa = $awal . substr($no_wa, 3);
    }



    $response = $this->CustomerModel->getCustomer($no_wa)->row();

    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }


  public function getNotifSubscribe($id)
  {
    $response = $this->CustomerModel->getNotifSubscribe($id)->row();

    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();


    exit;
  }

  public function simpanDataDownload($id_rumah, $id_customer)
  {
    parse_str(file_get_contents('php://input'), $data);
    $response = $this->CustomerModel->simpanDataDownload($id_rumah, $id_customer, $data);

    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();


    exit;
  }
  // public function simpanDataDownload($id_rumah, $id_customer)
  // {
  //   // Set nilai download menjadi 1
  //   $download = 1;

  //   // Panggil model untuk menyimpan data
  //   $response = $this->CustomerModel->simpanDataDownload($id_rumah, $id_customer, $download);

  //   // Setel header dan kembalikan respons JSON
  //   $this->output
  //     ->set_status_header(201)
  //     ->set_content_type('application/json')
  //     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
  //     ->_display();

  //   // Keluar dari fungsi
  //   exit;
  // }


  public function getPenggunaBayar($id)
  {
    $response = $this->CustomerModel->getPenggunaBayar($id)->row();



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getCustomerById($id)
  {

    $id_customer = get_cookie('id_customer');

    $session_id = $this->session->userdata('id_customer');

    if ($id_customer !=  $session_id || $id_customer == null || $session_id == null || $id_customer == '') {
      $this->output
        ->set_status_header(401)
        ->set_content_type('application/json')
        ->_display();
      exit;
    }
    // Define a unique cache key for the output
    $cache_key = 'getCustomerById_' . md5($this->session->userdata('id_customer'));

    // Check if the response is already cached
    $cached_response = $this->cache->get($cache_key);

    if ($cached_response !== FALSE) {
      // Output the cached response
      $this->output
        ->set_status_header(200)
        ->set_content_type('application/json')
        ->set_output($cached_response)
        ->_display();
      exit;
    }

    $response = $this->CustomerModel->getCustomerById($id)->row();

    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function kirimOTPAktivasi($no_wa, $nama, $otp)
  {

    $curl = curl_init();

    $token = "Nn1bkizlducS7Qwbf9BExoMCsYOEmDwR2y1rrrl8hdzm745Xmsw0mxMzCcoA0orB";

    $data = [

      'phone' => $no_wa,

      'message' => "Halo {$nama},\n\nTerima kasih telah melakukan pendaftaran akun di RumahTinggal.id\n\nKode aktivasi Anda: *{$otp}*\n\n*) Segera lakukan aktivasi akun Anda dengan memasukkan kode di atas pada kolom yang tersedia di website\n\nSalam,\nAdmin RumahTinggal.id",

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



  public function kirimUlangOTP($status, $no_wa, $nama, $otp)
  {

    $curl = curl_init();

    $token = "Nn1bkizlducS7Qwbf9BExoMCsYOEmDwR2y1rrrl8hdzm745Xmsw0mxMzCcoA0orB";

    if ($status == '1') $ket_status = 'verifikasi';
    else $ket_status = 'aktivasi';

    $data = [

      'phone' => $no_wa,

      'message' => "Halo {$nama},\n\nKode {$ket_status} Anda: *{$otp}*\n\n*) Jangan berikan kode {$ket_status} kepada siapapun, termasuk tim RumahTinggal.id\n\nSalam,\nAdmin RumahTinggal.id",

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



  public function daftarCustomer()
  {

    parse_str(file_get_contents('php://input'), $data);

    $email = $data['email'];

    $nama = $data['nama_lengkap'];

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    // if (strpos(substr($email,0,3), '08') !== false){

    //     $awal = str_replace("08", "628", substr($email,0,3));

    //     $email = $awal.substr($email,3);

    // }



    $cek_customer = $this->CustomerModel->getCustomerByEmail($email)->num_rows();

    // $otp_baru = rand(0000, 9999);

    // $expired = time();



    if ($cek_customer == 0) {

      $execDaftar = $this->CustomerModel->daftarCustomer($data);

      if ($execDaftar) {

        // $kirim = $this->kirimOTPAktivasi($no_wa,$nama,$otp_baru);

        // if ($kirim) {

        //   $response = array(

        //     'status' => 1,

        //     'no_wa' => $no_wa

        //   );

        // } else {

        //   $response = array(

        //     'status' => 0,

        //     'info' => 'Gagal mengirimkan kode aktivasi.'

        //   );

        // }

        $response = array(

          'status' => 1,

          'info' => 'Berhasil melakukan pendaftaran akun. Silakan login menggunakan akun Anda!'

        );
      } else {

        $response = array(

          'status' => 0,

          'info' => 'Gagal melakukan pendaftaran akun. Silakan coba beberapa saat lagi!'

        );
      }
    } else {

      $response = array(

        'status' => 0,

        'info' => 'Email Anda telah terdaftar sebelumya. Silakan login menggunakan akun Anda!'

      );
    }



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function verifikasiOTP($status, $no_wa, $otp)
  {

    if (strpos(substr($no_wa, 0, 3), '08') !== false) {

      $awal = str_replace("08", "628", substr($no_wa, 0, 3));

      $no_wa = $awal . substr($no_wa, 3);
    }



    if ($status == '1') $ket_status = 'verifikasi';
    else $ket_status = 'aktivasi';

    $customer = $this->CustomerModel->getCustomer($no_wa)->row();

    if ($customer->otp == $otp) {

      if ((time() - $customer->expired) < 300) {

        set_cookie('id_customer', $customer->id_customer, time() + 86400);

        $response = array(

          'status' => 1,

          'info' => 'Akun berhasil ter' . $ket_status . '.'

        );
      } else {

        $response = array(

          'status' => 0,

          'info' => 'Kode ' . $ket_status . ' telah kadaluarsa.'

        );
      }
    } else {

      $response = array(

        'status' => 0,

        'info' => 'Kode ' . $ket_status . ' salah.'

      );
    }



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  // public function getCustomerId()
  // {
  //   if ($this->session->userdata('id_customer')) {
  //     $id_customer = $this->session->userdata('id_customer');
  //     $response = array(

  //       'status' => 1,

  //       'id' => $id_customer

  //     );
  //     $http_status = 200;
  //   } else {
  //     $response = array(

  //       'status' => 0,

  //       'error' => "not logged in!"

  //     );
  //     $http_status = 200;
  //   }

  //   $this->output
  //     ->set_status_header($http_status)
  //     ->set_content_type('application/json')
  //     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
  //     ->_display();
  //   exit;
  // }

  public function getCustomerId()
  {
    // Define a unique cache key for the output
    $cache_key = 'getCustomerId_' . md5($this->session->userdata('id_customer'));

    // Check if the response is already cached
    $cached_response = $this->cache->get($cache_key);

    if ($cached_response !== FALSE) {
      // Output the cached response
      $this->output
        ->set_status_header(200)
        ->set_content_type('application/json')
        ->set_output($cached_response)
        ->_display();
      exit;
    }

    // If the response is not cached, generate it
    if ($this->session->userdata('id_customer')) {
      $id_customer = $this->session->userdata('id_customer');
      $response = array(
        'status' => 1,
        'id' => $id_customer
      );
      $http_status = 200;
    } else {
      $response = array(
        'status' => 0,
        'error' => "not logged in!"
      );
      $http_status = 200;
    }

    $output = json_encode($response, JSON_PRETTY_PRINT);

    // Cache the response
    $this->cache->save($cache_key, $output, 600);  // Cache for 10 minutes

    // Output the response
    $this->output
      ->set_status_header($http_status)
      ->set_content_type('application/json')
      ->set_output($output)
      ->_display();
    exit;
  }

  public function hashAndStorePasswords()
  {
    $customers = $this->CustomerModel->getAllCustomers()->result();

    foreach ($customers as $customer) {
      if ($customer->password !== null && $customer->password !== '') {
        $hashedPassword = password_hash($customer->password, PASSWORD_DEFAULT);
        $this->CustomerModel->updateCustomerPassword($customer->id_customer, $hashedPassword);
      }
    }

    log_message('error', "Passwords hashed and stored successfully.");
  }


  public function loginAkun($email, $pass)
  {
    // $this->hashAndStorePasswords();

    $customer = $this->CustomerModel->getCustomerByEmail($email)->row();

    if (password_verify($pass, $customer->password)) {

      $cookie_expiration = 7 * 24 * 60 * 60; // 1 week
      set_cookie('id_customer', $customer->id_customer, $cookie_expiration);
      $this->session->set_userdata('id_customer', $customer->id_customer);
      $this->session->set_userdata('customer_data', $customer);

      $response = array(

        'status' => 1,

        'info' => 'Selamat datang' . $customer->nama_customer . '.'

      );
    } else {

      $response = array(

        'status' => 0,

        'info' => 'Password Anda salah.'

      );
    }

    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function loginGoogle($email)
  {
    parse_str(file_get_contents('php://input'), $data);
    $customer = $this->CustomerModel->getCustomerByEmail($email)->row();
    if ($customer != null) {
      $cookie_expiration = 7 * 24 * 60 * 60; // 1 week
      set_cookie('id_customer', $customer->id_customer, $cookie_expiration);
      $this->session->set_userdata('id_customer', $customer->id_customer);
      $this->session->set_userdata('customer_data', $customer);
      $response = array(
        'Success' => true,
        'info' => 'Selamat datang' . $customer->nama_customer . '.'
      );
    } else {
      $this->CustomerModel->daftarCustomer($data, '', '', '');
      $customer = $this->CustomerModel->getCustomerByEmail($email)->row();
      if ($customer != null) {
        set_cookie('id_customer', $customer->id_customer, time() + 86400);
        $this->session->set_userdata('id_customer', $customer->id_customer);
        $this->session->set_userdata('customer_data', $customer);

        $response = array(
          'Success' => true,
          'Info' => 'Pengguna berhasil terautentikasi.'
        );
      }
    }

    $this->output
      ->set_status_header(201)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }









  public function mintaOTP($status, $no_wa)
  {

    if (strpos(substr($no_wa, 0, 3), '08') !== false) {

      $awal = str_replace("08", "628", substr($no_wa, 0, 3));

      $no_wa = $awal . substr($no_wa, 3);
    }



    $customer = $this->CustomerModel->getCustomer($no_wa)->row();

    $otp_baru = rand(0000, 9999);

    $expired = time();



    $execUpdate = $this->CustomerModel->updateOTP($no_wa, $otp_baru, $expired);

    if ($execUpdate) {

      $nama = $customer->nama_customer;

      $kirim = $this->kirimUlangOTP($status, $no_wa, $nama, $otp_baru);

      if ($kirim) {

        $response = array(

          'status' => 1,

          'no_wa' => $no_wa

        );
      } else {

        $response = array(

          'status' => 0,

          'no_wa' => $no_wa

        );
      }
    }



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function logout()
  {
    $return_url = $this->input->get('return_url');

    unset($_SESSION['access_token']);

    $this->session->unset_userdata('id_customer');
    $this->session->unset_userdata('customer_data');

    delete_cookie('id_customer');

    delete_cookie('g_state');
    if ($return_url) {
      redirect($return_url);
    } else {
      redirect(base_url());
    }
  }


  public function profil($id_customer)
  {
    $session_id = $this->session->userdata('id_customer');

    $cookie_customer = get_cookie('id_customer');
    if ($cookie_customer !=  $session_id || $cookie_customer == null || $session_id == null || $cookie_customer == '') {
      show_404();
      return;
    }
    $data['title'] = 'Profil';

    $data['halaman'] = 'demo/profil';

    $data['profil'] = $this->CustomerModel->getCustomerById($id_customer)->row();

    $data['wishlist'] = $this->CustomerModel->getKatalogDaftarProdukFavorit($id_customer)->result();

    $data['transaksi'] = $this->CustomerModel->getTransaksi($id_customer);

    $data['dokumen'] = $this->CustomerModel->getDokumen($id_customer);

    $data['keranjang'] = $this->KeranjangModel->getKeranjangCustomer($id_customer);

    $this->load->view('demo/layout/layout', $data);


    if ($cookie_customer != $id_customer) {

      redirect('profil/' . $cookie_customer);
    }
  }

  public function ubahPasswordCustomer()
  {
    $session_id = $this->session->userdata('id_customer');

    $cookie_customer = get_cookie('id_customer');
    if ($cookie_customer !=  $session_id || $cookie_customer == null || $session_id == null || $cookie_customer == '') {
      $response = array(
        'Success' => false,
        'Info' => 'User tidak log in.'

      );

      $this->output
        ->set_status_header(401)
        ->set_content_type('application/json')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
      exit;
    }

    $email = $this->session->userdata('customer_data')->email;
    $pw_lama = $this->input->post('pw_lama');
    $pw_baru = $this->input->post('pw_baru');

    $customer = $this->CustomerModel->getCustomerByEmail($email)->row();

    if (!password_verify($pw_lama, $customer->password)) {
      $response = array(
        'Success' => false,
        'Info' => 'Password lama tidak benar!'

      );

      $this->output
        ->set_status_header(200)
        ->set_content_type('application/json')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
      exit;
    }

    $this->CustomerModel->getResetPassword($email, password_hash($pw_baru, PASSWORD_DEFAULT));

    $response = array(
      'Success' => true,
      'Info' => 'Password berhasil diubah!'

    );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }

  public function hapusFotoCustomer()
  {
    $cookie_customer = get_cookie('id_customer');
    $session_id = $this->session->userdata('id_customer');
    if ($cookie_customer !=  $session_id || $cookie_customer == null || $session_id == null || $cookie_customer == '') {
      $response = array(

        'Success' => false,

        'Info' => 'User tidak log in.'

      );

      $this->output

        ->set_status_header(401)

        ->set_content_type('application/json')

        ->set_output(json_encode($response, JSON_PRETTY_PRINT))

        ->_display();

      exit;
    }

    if ($cookie_customer != null && $cookie_customer != '') {
      $customerData = $this->CustomerModel->getCustomerById($cookie_customer)->row();

      // If a previous photo exists, delete it
      if (!empty($customerData->foto)) {
        $previous_photo_path = FCPATH . '/assets/demo/img/customer/' . $customerData->foto;
        log_message('error', 'prev phto' . var_export($previous_photo_path, true));
        if (file_exists($previous_photo_path)) {
          unlink($previous_photo_path);
          $data_baru['foto'] = '';
          $data_baru['id_customer'] = $cookie_customer;
          $this->CustomerModel->ubahFotoCustomer($data_baru);
          $response['message'] = 'File uploaded successfully';
          echo json_encode($response);
        }
      }
    }
  }

  public function uploadFotoCustomer()
  {
    $cookie_customer = get_cookie('id_customer');
    $session_id = $this->session->userdata('id_customer');

    if ($cookie_customer !=  $session_id || $cookie_customer == null || $session_id == null || $cookie_customer == '') {
      $response = array(

        'Success' => false,

        'Info' => 'User tidak log in.'

      );

      $this->output

        ->set_status_header(401)

        ->set_content_type('application/json')

        ->set_output(json_encode($response, JSON_PRETTY_PRINT))

        ->_display();

      exit;
    }

    if (!empty($_FILES['foto']['name']) && ($cookie_customer != null && $cookie_customer != '')) {

      // Set upload configuration
      $config['upload_path'] = realpath(FCPATH . '/assets/demo/img/customer/');
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = 2048;

      $this->load->library('upload', $config);

      // Perform the upload
      if ($this->upload->do_upload('foto')) {

        // Get the previous profile picture filename
        $customerData = $this->CustomerModel->getCustomerById($cookie_customer)->row();

        // If a previous photo exists, delete it
        if (!empty($customerData->foto)) {
          $previous_photo_path = FCPATH . '/assets/demo/img/customer/' . $customerData->foto;
          if (file_exists($previous_photo_path)) {
            unlink($previous_photo_path);
          }
        }

        $upload_data = $this->upload->data();
        $filename = $upload_data['file_name'];

        // Update customer table in db
        $data_baru['foto'] = $filename;
        $data_baru['id_customer'] = $cookie_customer;
        $this->CustomerModel->ubahFotoCustomer($data_baru);

        $response['message'] = 'File uploaded successfully';
        $response['filename'] = $filename;
        echo json_encode($response);
      } else {
        $error = $this->upload->display_errors('', '');
        $response['error'] = $error;
        http_response_code(400); // Bad request
        echo json_encode($response);
      }
    } else {
      $response['error'] = 'No file uploaded';
      http_response_code(400);
      echo json_encode($response);
    }
  }


  public function ubahCustomer()
  {

    $session_id = $this->session->userdata('id_customer');

    $cookie_customer = get_cookie('id_customer');
    if ($cookie_customer !=  $session_id || $cookie_customer == null || $session_id == null || $cookie_customer == '') {
      $response = array(

        'Success' => false,

        'Info' => 'User tidak log in.'

      );

      $this->output

        ->set_status_header(401)

        ->set_content_type('application/json')

        ->set_output(json_encode($response, JSON_PRETTY_PRINT))

        ->_display();

      exit;
    }

    parse_str(file_get_contents('php://input'), $data);

    $this->CustomerModel->ubahCustomer($data);



    $response = array(

      'Success' => true,

      'Info' => 'Data Anda berhasil diperbaharui.'

    );

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function getDokumen($id_customer)
  {

    $response = $this->CustomerModel->getDokumen($id_customer)->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function loginSSO()
  {

    parse_str(file_get_contents('php://input'), $data);

    $email = $data['email'];



    $akun = $this->CustomerModel->getCustomerByEmail($email)->row();

    if ($akun != null) {

      set_cookie('id_customer', $akun->id_customer, time() + 86400);



      $response = array(

        'Success' => true,

        'Info' => 'Pengguna berhasil terautentikasi.'

      );
    } else {

      $this->CustomerModel->daftarCustomer($data, '', '', '');

      $akun = $this->CustomerModel->getCustomerByEmail($email)->row();

      if ($akun != null) {

        set_cookie('id_customer', $akun->id_customer, time() + 86400);



        $response = array(

          'Success' => true,

          'Info' => 'Pengguna berhasil terautentikasi.'

        );
      }
    }



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }







  public function kirimBuktiTransaksi()
  {

    parse_str(file_get_contents('php://input'), $data);

    $this->CustomerModel->kirimBuktiTransaksi($data);



    $response = array(

      'Success' => true,

      'Info' => 'Data Anda berhasil diperbaharui.'

    );



    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function simpanRiview()
  {

    parse_str(file_get_contents('php://input'), $data);

    $this->CustomerModel->simpanRiview($data);



    $response = array(

      'Success' => true,

      'Info' => 'Review berhasil disimpan.',

    );



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }





  function sendMail($email)
  {

    $akun = $this->CustomerModel->getCustomerByEmail($email)->row();

    if ($akun == null) {

      $response = array(

        'status' => 0,

        'info' => 'Email Anda tidak terdaftar pada database kami. Silahkan lakukan pendaftaran!'

      );
    } else {

      $mail = new PHPMailer(true);

      $mail->isSMTP();

      $mail->Host       = 'smtp.gmail.com';

      $mail->SMTPAuth   = true;

      $mail->Username   = 'fsd08.nasywa.syifa.azizah@gmail.com';

      $mail->Password   = 'zjtz mvia vsoz melo';

      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

      $mail->Port       = 465;



      $mail->setFrom('fsd08.nasywa.syifa.azizah@gmail.com', 'rumahtinggal.id');
      $mail->addAddress($email);                                  // Add a recipient
      $mail->addCC('mail.rumahtinggal@gmail.com', 'admin@rumahtinggal.id');

      $mail->Subject = 'Konfirmasi Reset Password';

      $mail->isHTML(true);



      $mailContent = '<center><img src="https://rumahtinggal.id/assets/img/logo.png" style="padding-bottom: 15px;" width="90px"> </center><br>

                                   <span> Hai <strong>' . $akun->nama_customer . '</strong>, </span>

                                    <br><br>

                                    Kami telah menerima permintaan untuk mengatur ulang kata sandi Anda.

                                    <br>

                                    Silahkan atur kembali kata sandi dengan klik tombol di bawah ini.

                                    <br> <br>

                                    <a href="https://rumahtinggal.id/reset_password/' . $email . '" style="border: 1px solid #026CB6;background: #026CB6;color: #fff;padding: 5px;border-radius: 4px;text-decoration: none;font-weight: 600;">Ubah kata sandi</a>

                                    <br>

                                    <br>

                                    Jika ada pertanyaan, silakan hubungi tim RumahTinggal.id



                                    <br><br>

                                    Salam,<br>

                                    Admin RumahTinggal.id';

      $mail->Body = $mailContent;



      if ($mail->send()) {

        $response = array(

          'status' => 1,

          'info' => 'Kami telah mengirimkan link untuk reset password, silahkan cek email Anda!'

        );
      } else {

        echo "Terjadi kesalahan saat pengiriman email: " . $mail->ErrorInfo;
        log_message('error', 'Mailer Error: ' . $mail->ErrorInfo);
      }
    }



    $this->output

      ->set_status_header(201)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;





    /*$cek_customer = $this->CustomerModel->getCustomerByEmail($email)->num_rows();

        $akun = $this->CustomerModel->getCustomerByEmail($email)->row();

        if($cek_customer == 0){



         $response = array(

                    'status' => 0,

                    'info' => 'E-mail Anda tidak terdaftar pada database kami. Silahkan lakukan pendaftaran'

                  );



          } else {





        $this->load->library('email');

        $data=array();

        $config = Array(

          'protocol' => 'smtp',

          'smtp_host' => 'mail.rumahtinggal.id',

          'smtp_port' => 465,

          'smtp_user' => 'mail@rumahtinggal.id', // change it to yours

          'smtp_pass' => 'rumahtinggal', // change it to yours

          'mailtype' => 'html',

          'charset' => 'iso-8859-1',

          'wordwrap' => TRUE

        );



          $message = '<center><img src="https://rumahtinggal.id/assets/img/logo.png" style="padding-bottom: 15px;" width="90px"> </center><br>

                               <span> Hai <strong>'.$akun->nama_customer.'</strong>, </span>

                                <br><br>

                                Kami telah menerima permintaan untuk mengatur ulang kata sandi Anda.

                                <br>

                                Silahkan atur kembali kata sandi dengan klik tombol di bawah ini.

                                <br> <br>

                                <!-- https://rumahtinggal.id/forgot_password/?code=KWNwdi3fwv/cv4%2BDBCv%2BCHKwOWkijfhAL4Zl%2B9adQ7lGoSb2iS81fFm8lEW29uvw&email=windahutari30%40gmail.com -->

                                <a href="https://rumahtinggal.id/reset_password/'.$email.'" style="border: 1px solid #026CB6;background: #026CB6;color: #fff;padding: 5px;border-radius: 4px;text-decoration: none;font-weight: 600;">Ubah kata sandi</a>

                                <br>

                                <br>

                                Jika ada pertanyaan, silahkan hubungi tim Admin Rumah Tinggal

                                

                                <br><br>

                                Salam,<br>

                                Tim rumahtinggal.id'; 

        // $this->email->initialize($config);

         $this->load->library('email', $config);

          $this->email->set_newline("\r\n");

          $this->email->from('mail@rumahtinggal.id','Rumah Tinggal'); // change it to yours

          $this->email->to($email);// change it to yours

          $this->email->subject('RumahTinggal.ID [RESET PASSWORD]');

          $this->email->message($message);

           $this->email->set_mailtype("html");

          if($this->email->send())

         {

          // echo 'Email sent.';

           $response = array(

                'status' => 1,

                'info' => 'Berhasil ! Silahkan cek email Anda.'

              );

         }

         else

        {

         show_error($this->email->print_debugger());

        }



      }

      

      $this->output

           ->set_status_header(201)

           ->set_content_type('application/json')

           ->set_output(json_encode($response, JSON_PRETTY_PRINT))

           ->_display();

      exit;*/
  }







  function daftarFavorit($id_customer)
  {

    $cookie_customer = get_cookie('id_customer');

    $data['halaman'] = 'customer/daftar_favorit';

    // $data['profil'] = $this->CustomerModel->getCustomerById($id_customer)->row();

    // $data['transaksi'] = $this->CustomerModel->getTransaksi($id_customer);

    //  $data['dokumen'] = $this->CustomerModel->getDokumen($id_customer);



    $this->load->view('layout', $data);
  }





  function getKatalogDaftarProdukFavorit()
  {

    $id_customer = get_cookie('id_customer');

    // parse_str(file_get_contents('php://input'), $data);

    $session_id = $this->session->userdata('id_customer');

    if ($id_customer !=  $session_id || $id_customer == null || $session_id == null || $id_customer == '') {

      $this->output

        ->set_status_header(401)

        ->set_content_type('application/json')

        ->_display();

      exit;
    }

    $response = $this->CustomerModel->getKatalogDaftarProdukFavorit($id_customer)->result();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }



  public function getSummaryKatalogDaftarProdukFavorit()
  {

    $id_customer = get_cookie('id_customer');

    parse_str(file_get_contents('php://input'), $data);

    $response = $this->CustomerModel->getKatalogDaftarProdukFavorit($data, $id_customer)->num_rows();

    $this->output

      ->set_status_header(200)

      ->set_content_type('application/json')

      ->set_output(json_encode($response, JSON_PRETTY_PRINT))

      ->_display();

    exit;
  }

  public function simpanKeranjang()
  {
    $id_customer = get_cookie('id_customer');

    $session_id = $this->session->userdata('id_customer');

    if ($id_customer !=  $session_id || $id_customer == null || $session_id == null || $id_customer == '') {
      $this->output
        ->set_status_header(401)
        ->set_content_type('application/json')
        ->_display();
      exit;
    }

    parse_str(file_get_contents('php://input'), $data);

    $existingPaket = $this->KeranjangModel->getKeranjangCustomerPaketRumah($data['id_customer'], $data['id_rumah'], $data['paket'])->result();
    if (empty($existingPaket)) {
      $this->KeranjangModel->simpanKeranjang($data);
    }

    $response = array(
      'Success' => true,
      'Info' => 'Keranjang disimpan'
    );

    $this->output
      ->set_status_header(201)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }

  public function getKeranjangCustomer()
  {

    $id_customer = get_cookie('id_customer');

    $session_id = $this->session->userdata('id_customer');

    if ($id_customer !=  $session_id || $id_customer == null || $session_id == null || $id_customer == '') {
      $this->output
        ->set_status_header(401)
        ->set_content_type('application/json')
        ->_display();
      exit;
    }

    $response = $this->KeranjangModel->getKeranjangCustomer($id_customer)->result();
    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }

  public function hapusKeranjang()
  {
    $id_customer = get_cookie('id_customer');

    $session_id = $this->session->userdata('id_customer');

    if ($id_customer !=  $session_id || $id_customer == null || $session_id == null || $id_customer == '') {
      $this->output
        ->set_status_header(401)
        ->set_content_type('application/json')
        ->_display();
      exit;
    }

    parse_str(file_get_contents('php://input'), $data);
    $this->KeranjangModel->hapusKeranjang($data['id_customer'], $data['id_rumah'], $data['paket']);
    $response = array(
      'Success' => true,
      'Info' => 'Keranjang berhasil dihapus!'
    );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
    exit;
  }



  function login()

  {

    // Redirect ke halaman profile jika pengguna sudah login

    // // if($this->session->userdata('telahLogin') == true){

    // // redirect('Welcome/profil/');

    // // }

    // if(isset($_GET['code'])){

    //     // Otentikasi pengguna dengan google

    //     $client = $this->google;

    //     $client->authenticate($_GET['code']);

    //     # ambil profilenya

    //     $gp = new Google_Service_Plus($client);

    //     $profil = $gp->people->get("me"); 

    //     // data untuk di input ke database

    //     $dataPengguna['oauth_provider'] = 'google';

    //     $dataPengguna['oauth_uid'] = $profil['id'];

    //     $dataPengguna['nama_customer'] = $profil['name']['familyName'];

    //     // $dataPengguna['nama_belakang'] = $profil['name']['givenName'];

    //     $dataPengguna['email'] = $profil['emails']['0']['value'];

    //     // $dataPengguna['jenis_kelamin'] = !empty($profil['gender'])?$profil['gender']:'';

    //     $dataPengguna['foto'] = !empty($profil['image']['url'])?$profil['image']['url']:'';

    //     // Insert atau update data pengguna di database

    //     $userID = $this->pengguna->checkUser($dataPengguna);

    //     // simpan session

    //     // $this->session->set_userdata('telahLogin', true);

    //     // $this->session->set_userdata('dataPengguna', $dataPengguna);

    //     // Redirect to profile page

    //      set_cookie('id_customer', $akun->id_customer, time()+86400);

    //     redirect(base_url());



    // } 

    // // Google authentication url

    // $data['loginURL'] = $this->google->createAuthUrl();

    // // Load google login view

    // $this->load->view('login',$data);



    // if($this->session->userdata('loggedIn') == true){ 

    //        redirect('user_authentication/profile/'); 

    //    } 



    //    if(isset($_GET['code'])){ 



    //        // Authenticate user with google 

    //        if($this->google->getAuthenticate()){ 



    //            // Get user info from google 

    //            $gpInfo = $this->google->getUserInfo(); 



    //            // Preparing data for database insertion 

    //            $userData['oauth_provider'] = 'google'; 

    //            $userData['oauth_uid']         = $gpInfo['id']; 

    //            // $userData['first_name']     = $gpInfo['given_name']; 

    //            // $userData['last_name']         = $gpInfo['family_name']; 

    //            $userData['email']             = $gpInfo['email']; 

    //            // $userData['gender']         = !empty($gpInfo['gender'])?$gpInfo['gender']:''; 

    //            // $userData['locale']         = !empty($gpInfo['locale'])?$gpInfo['locale']:''; 

    //            $userData['foto']         = !empty($gpInfo['picture'])?$gpInfo['picture']:''; 



    //            // Insert or update user data to the database 

    //            $userID = $this->customer->checkUser($userData); 



    //            // Store the status and user profile info into session 

    //            $this->session->set_userdata('loggedIn', true); 

    //            $this->session->set_userdata('userData', $userData); 



    //            // Redirect to profile page 

    //            redirect(base_url()); 

    //        } 

    //    }  



    // Google authentication url 

    // $data['loginURL'] = $this->google->loginURL(); 



    // // Load google login view 

    // $this->load->view(base_url(),$data); 

    // require "../google-api-php-client/src/Google/autoload.php"; 

    // require "vendor/autoload.php";

    // require_once(APPPATH.'google-api-php-client/src/Google/autoload.php');

    //        $google_client = new Google_Client();



    //        $google_client->setClientId('234359626392-2anp0ui8kep8kp2v2ec54k7cdbdf7a1g.apps.googleusercontent.com'); //Define your ClientID



    //        $google_client->setClientSecret('-ZVRSlBWyUbN5GDEnxXI7Rtc'); //Define your Client Secret Key



    //        $google_client->setRedirectUri('http://rumahtinggal.id'); //Define your Redirect Uri



    //        $google_client->addScope('email');



    //        $google_client->addScope('profile');



    //        if(isset($_GET["code"]))

    //        {

    //        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);



    //                if(!isset($token["error"]))

    //                {

    //                    $google_client->setAccessToken($token['access_token']);



    //                    $this->session->set_userdata('access_token', $token['access_token']);



    //                    $google_service = new Google_Service_Oauth2($google_client);



    //                    $data = $google_service->userinfo->get();



    //                    $current_datetime = date('Y-m-d H:i:s');



    //                    if($this->CustomerModel->Is_already_register($data['id']))

    //                    {

    //                    //update data

    //                    $user_data = array(

    //                    'nama_customer' => $data['given_name'],

    //                    // 'last_name'  => $data['family_name'],

    //                    'email' => $data['email'],

    //                    // 'profile_picture'=> $data['picture'],

    //                    // 'updated_at' => $current_datetime

    //                    );



    //                    $this->CustomerModel->Update_user_data($user_data, $data['id']);

    //                    }

    //                    else

    //                    {

    //                    //insert data

    //                    $user_data = array(

    //                    'oauth_uid' => $data['id'],

    //                    'nama_customer'  => $data['given_name'],

    //                    // 'last_name'   => $data['family_name'],

    //                    'email'  => $data['email'],

    //                    'foto' => $data['picture'],

    //                    // 'created_at'  => $current_datetime

    //                    );



    //                    $this->CustomerModel->Insert_user_data($user_data);

    //                    }

    //                    $this->session->set_userdata('user_data', $user_data);

    //                }

    //        }

    //            $login_button = '';

    //            if(!$this->session->userdata('access_token'))

    //                {

    //                    $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'sign-with-google.png" /></a>';

    //                    $data['login_button'] = $login_button;

    //                    $this->load->view('google_login', $data);

    //                }

    //                else

    //                {

    //                    $this->load->view('google_login', $data);

    //                }







    /*$clientId = '234359626392-3l47fue645tj7m1svcb2565fq1e1o6u6.apps.googleusercontent.com'; //Google client ID

        $clientSecret = 'qOwxZ1Uq7x4Icm8v1xm4xZVK'; //Google client secret

        $redirectURL = base_url() ;



        //Call Google API

        $gClient = new Google_Client();

        $gClient->setApplicationName('Login');

        $gClient->setClientId($clientId);

        $gClient->setClientSecret($clientSecret);

        $gClient->setRedirectUri($redirectURL);

        $google_oauthV2 = new Google_Oauth2Service($gClient);

        

        if(isset($_GET['code'])) {

            $gClient->authenticate($_GET['code']);

            $_SESSION['token'] = $gClient->getAccessToken();

            header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));

            set_cookie('id_customer', $customer->id_customer, time()+86400);

        }



        if (isset($_SESSION['token'])) {

            $gClient->setAccessToken($_SESSION['token']);

        }

        

        if ($gClient->getAccessToken()) {

            $userProfile = $google_oauthV2->userinfo->get();

            echo "<pre>";

            print_r($userProfile);

            die;

        } else {

            $url = $gClient->createAuthUrl();

            header("Location: $url");

            set_cookie('id_customer', $customer->id_customer, time()+86400);

          

            exit;

        }*/







    // if(isset($_GET['code'])){

    //             // Otentikasi pengguna dengan google

    //             $client = $this->google;

    //             $client->authenticate($_GET['code']);

    //             # ambil profilenya

    //             $gp = new Google_Service_Plus($client);

    //             $profil = $gp->people->get("me"); 

    //             // data untuk di input ke database

    //             $dataPengguna['oauth_provider'] = 'google';

    //             $dataPengguna['oauth_uid'] = $profil['id'];

    //             $dataPengguna['nama_customer'] = $profil['name']['familyName'];

    //             // $dataPengguna['nama_belakang'] = $profil['name']['givenName'];

    //             $dataPengguna['email'] = $profil['emails']['0']['value'];

    //             // $dataPengguna['jenis_kelamin'] = !empty($profil['gender'])?$profil['gender']:'';

    //             $dataPengguna['foto'] = !empty($profil['image']['url'])?$profil['image']['url']:'';

    //             // Insert atau update data pengguna di database

    //             $userID = $this->pengguna->checkUser($dataPengguna);

    //             // simpan session

    //             $this->session->set_userdata('telahLogin', true);

    //             $this->session->set_userdata('dataPengguna', $dataPengguna);

    //             // Redirect to profile page

    //             redirect(base_url());

    //         } 

    // Google authentication url

    // $data['loginURL'] = $this->google->createAuthUrl();

    // // Load google login view

    // $this->load->view('login',$data);

  }
}