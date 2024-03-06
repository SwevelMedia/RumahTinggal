<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
  .card-a {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-header-accordion {
    background-color:rgba(26, 60, 162, 0.05) !important;
    border-bottom: 1px solid rgba(7, 96, 87, 0.13) !important;
}

.card-accordion {
    border:1px solid rgba(8, 54, 113, 0.23);
    margin-bottom: 10px;
}

#accordion-style-1 h1,
#accordion-style-1 a{
    color:#026CB6;
}
#accordion-style-1 .btn-link {
    font-weight: 400;
    color: #026CB6;
    background-color: transparent;
    text-decoration: none !important;
    font-size: 16px;
    font-weight: bold;
  padding-left: 25px;
}

#accordion-style-1 .card-body {
    border-top: 2px solid #026CB6;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main{
  display:none;
}

#accordion-style-1 .card-header .btn .fa.main{
  background: #026CB6;
    padding: 8px 10px;
    color: #ffffff;
    width: 35px;
    height: 41px;
    position: absolute;
    left: -1px;
    top: 10px;
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
  display:block;
}



</style>

<div class="container-fluid bg-gray mb-5" id="accordion-style-1">
  <div class="container">
    <section>
      <div class="row" style="margin-top: 5em;">
        <div class="col-12">
          <h1 class="text-green mb-4 text-center">Frequently Asked Questions (FAQ)</h1>
        </div>
        <div class="col-10 mx-auto">
          <div class="accordion" id="accordionExample">
            <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questSatu">
                <h5 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#questionSatu" aria-expanded="true" aria-controls="questionSatu">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Mengenai apakah website rumahtinggal.id ini?
              </button>
              </h5>
              </div>

              <div id="questionSatu" class="collapse show fade" aria-labelledby="questionSatu" data-parent="#accordionExample">
                <div class="card-body">
                  rumahtinggal.id merupakan <strong>marketplace desain rumah</strong> untuk membantu mewujudkan hunian idaman Anda. Dapatkan desain hunian terbaik dengan mudah, hemat, dan berkualitas sesuai kebutuhan dan keinginan Anda. Desain rumah tinggal yang kami tawarkan dapat dibangun sesuai kebutuhan Anda dengan menyesuaikan kondisi yang ada.
                </div>
              </div>
            </div>
            <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questDua">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionDua" aria-expanded="false" aria-controls="questionDua">
               <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Apa saja layanan yang diberikan oleh rumahtinggal.id?

              </button>
              </h5>
              </div>
              <div id="questionDua" class="collapse fade" aria-labelledby="questionDua" data-parent="#accordionExample">
                <div class="card-body">
                  Layanan yang diberikan oleh rumahtinggal.id meliputi: <br>
                  1. <strong>Jual beli desain</strong> rumah tinggal<br>
                  2. <strong>Konsultasi desain</strong> rumah tinggal dengan tim profesional<br>
                  3. Jasa <strong>pembangunan</strong> atau <strong>renovasi</strong> rumah tinggal<br>
                  4. Referensi <strong>material bangunan</strong> yang terhubung dengan supplier langsung <br>
                  5. <strong>material bangunan</strong> menarik tentang rumah tinggal <br>
                </div>
              </div>
            </div>
            <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questTiga">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionTiga" aria-expanded="false" aria-controls="questionTiga">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Bagaimana caranya mendapatkan desain rumah tinggal yang sesuai dengan kebutuhan dan keinginan saya?
              </button>
              </h5>
              </div>
              <div id="questionTiga" class="collapse fade" aria-labelledby="questionTiga" data-parent="#accordionExample">
                <div class="card-body">
                  Ada 2 cara untuk mendapatkan desain rumah tinggal:<br>
                  1. Melalui <strong>fitur pencarian</strong>, Anda akan diminta mengisi beberapa pertanyaan mengenai preferensi rumah tinggal yang sesuai dengan kebutuhan dan keinginan Anda. Dari hasil pencarian tersebut akan kami rekomendasikan desain-desain terbaik untuk Anda beli. <br>
                  2. Melalui <strong>koleksi desain</strong>, Anda dapat melihat koleksi desain dan memilih desain yang cocok untuk Anda.
                </div>
              </div>
            </div>
            <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questEmpat">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionEmpat" aria-expanded="false" aria-controls="questionEmpat">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Produk apa saja yang saya dapatkan ketika membeli desain di rumahtinggal.id ?
              </button>
              </h5>
              </div>
              <div id="questionEmpat" class="collapse fade" aria-labelledby="questionEmpat" data-parent="#accordionExample">
                <div class="card-body">
                 Ada 2 jenis produk yang dapat Anda pilih: <br>
                  1. <strong>Produk Lite</strong>, Anda akan memperoleh laporan desain yang berisi konsep desain, gambar 3D eksterior dan interior, denah skematik, tampak skematik, potongan skematik, dimensi ruang, dan spesifikasi material <br>
                  2. <strong>Produk Premium</strong>, Anda akan memperoleh laporan desain seperti pada produk lite ditambah Gambar Kerja Detailed Engineering Design (DED), Rencana Anggaran Biaya (RAB), Rencana Kerja dan Syarat-syarat (RKS) <br>
                  Anda dapat melihat contoh produk desain disini.
                </div>
              </div>
            </div>


             <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questLima">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionLima" aria-expanded="false" aria-controls="questionLima">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Bagaimana cara membeli desain rumah tinggal?
              </button>
              </h5>
              </div>
              <div id="questionLima" class="collapse fade" aria-labelledby="questionLima" data-parent="#accordionExample">
                <div class="card-body">
                  Setelah Anda memilih desain yang diinginkan, Anda akan dipandu pada halaman pembelian. Berikut tahapannya: <br>
                  1. Silahkan memilih akan membeli Produk Lite atau Produk Premium <br>
                  2. Isi data diri Anda berupa Nama Penerima, No. Whatsapp, Alamat pengiriman untuk mengirim produk cetak <br>
                  3. Selanjutnya Anda akan memperoleh invoice untuk pembayaran<br>
                  4. Lakukan pembayaran melalui transfer sesuai nominal yang tertera pada invoice<br>
                  5. Sertakan foto bukti pembayaran melalui WA Admin<br>
                  6. Produk desain akan disiapkan oleh tim kami dan dikirim ke alamat Anda<br>
                  7. Jika Anda sudah menerima produk desain, lakukan konfirmasi melalui WA dan berikan review desain di website kami <br>

                </div>
              </div>
            </div>
             <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questEnam">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionEnam" aria-expanded="false" aria-controls="questionEnam">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Apakah ada kuota pembelian untuk masing-masing desain?
              </button>
              </h5>
              </div>
              <div id="questionEnam" class="collapse fade" aria-labelledby="questionEnam" data-parent="#accordionExample">
                <div class="card-body">
                  Ya, ada kuota maksimal <strong>10 kali pembelian</strong> untuk masing-masing desain. Hal ini bertujuan agar selalu ada preferensi baru dalam setiap desain yang kami tawarkan.

                </div>
              </div>
            </div>
             <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questTujuh">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionTujuh" aria-expanded="false" aria-controls="questionTujuh">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Bagaimana jika saya tidak menemukan desain yang sesuai dalam fitur pencarian?
              </button>
              </h5>
              </div>
              <div id="questionTujuh" class="collapse fade" aria-labelledby="questionTujuh" data-parent="#accordionExample">
                <div class="card-body">
                  Anda dapat menggunakan <strong>fitur konsultasi desain</strong> dengan Arsitek profesional kami yang akan terhubung melalui No. Whatsapp. Melalui fitur ini, Anda akan dibantu untuk merancang desain rumah tinggal yang sesuai dengan kebutuhan dan keinginan Anda secara offline maupun online. Anda juga dapat mengajukan revisi desain di koleksi kami. Klik disini untuk terhubung dengan Arsitek profesional kami.
                </div>
              </div>
            </div>
             <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questDelapan">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionDelapan" aria-expanded="false" aria-controls="questionDelapan">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Berapa biaya yang harus saya bayar untuk konsultasi desain ini?
              </button>
              </h5>
              </div>
              <div id="questionDelapan" class="collapse fade" aria-labelledby="questionDelapan" data-parent="#accordionExample">
                <div class="card-body">
                  Akan ada biaya untuk jasa konsultasi desain yang disesuaikan dengan luas bangunan, jumlah lantai, gaya desain, dan sistem konsultasi secara offline atau online. Konsultasikan terlebih dahulu dengan tim Admin kami <strong><a href="https://api.whatsapp.com/send?phone=628112636228&text=Hai%20rumahtinggal.id%2C%20saya%20ingin%20bertanya%20mengenai%20desain%20di%20rumahtinggal.id%20">klik disini.</a></strong>
                </div>
              </div>
            </div>
            <div class="card-a card-accordion">
              <div class="card-header card-header-accordion" id="questSembilan">
                <h5 class="mb-0">
              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#questionSembilan" aria-expanded="false" aria-controls="questionSembilan">
                 <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Apakah saya harus sign up (mendaftarkan diri) untuk menggunakan layanan pada website ini?
              </button>
              </h5>
              </div>
              <div id="questionSembilan" class="collapse fade" aria-labelledby="questionSembilan" data-parent="#accordionExample">
                <div class="card-body">
                  Ada beberapa layanan yang bisa digunakan tanpa perlu sign up. Namun ada juga layanan yang mewajibkan pengguna untuk sign up terlebih dahulu yaitu pada layanan <strong>beli desain</strong> dan <strong>tanya arsitek</strong>.
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </section>
  </div>
</div>