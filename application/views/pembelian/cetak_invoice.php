<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

<style>
.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 600px;
    padding: 30px;
  	color: #000;
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
  
.invoice .title-info { font-size: 15px; }

.invoice .contacts { margin-bottom: 20px }

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0;
    font-weight: 400;
	font-size: 22px;
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #026cb6;
	font-weight: 400;
}
  
.invoice a { color: #026cb6; }

.invoice main .notices {
    padding-left: 10px;
	border-left: 5px solid #026cb6;
}

.invoice main .notices .notice {
    font-size: 14px;
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

.invoice table th {
    padding: 15px;
    background: #d9eaf4;
	border-bottom: 2px solid #026cb6;
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px;
  	color: #026cb6;
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #026cb6;
    font-size: 1.2em
}

.invoice table .item {
  	background: #fff;
	font-size: 16px;
	padding: 10px 15px;
}

.invoice table .total {
    background: #026cb6;
    color: #fff !important;
    font-size: 1.2em;
}

.invoice table tbody tr td {
  	border: none;
  	border-bottom: 1px solid #aaa;
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 15px;
    font-size: 1.1em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr.last td.last {
    color: #026cb6;
    font-size: 1.25em;
    border-top: 1px solid #026cb6;
    font-weight: 400;
}
</style>

<div class="invoice overflow-auto">
    <div style="min-width: 600px">
        <header>
            <div class="row">
                <div class="col">
                    <img src="assets/img/logo.png" width="90px" data-holder-rendered="true" />
                </div>
            </div>
        </header>
        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="title-info">Ditagihkan Kepada:</div>
                    <h3 class="to"><?= $nama_customer ?></h3>
                    <div class="address"><?= $alamat ?></div>
                    <div class="email"><?= $no_wa ?> | <?= $email ?></div>
                </div>
                <div class="col invoice-details text-right">
                    <h3 class="invoice-id">INVOICE #<?= $no_invoice ?></h3>
                    <div class="date">Tanggal Diterbitkan: <?= $tgl_issue ?></div>
                    <div class="date">Tanggal Kadaluarsa: <?= $tgl_expired ?></div>
                </div>
            </div>
            <table border="0" cellspacing="0" cellpadding="0" style="margin-top: -60px;">
                <thead>
                    <tr>
                        <th class="text-center">DESKRIPSI DESAIN</th>
                        <th class="text-center" style="width: 18%;">PAKET</th>
                        <th class="text-center" style="width: 20%;">HARGA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left item" style="font-size: 14px;">
                            <h3><a target="_blank"><?= $nama_rumah ?></a></h3>
                        </td>
                        <td class="text-center item"><?= $paket == '1' ? 'LITE' : 'PREMIUM' ?></td>
                        <td class="text-right item"><?= $sub_total ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td>SUB TOTAL</td>
                        <td><?= $sub_total ?></td>
                    </tr>
                    <tr>
                        <td style="border-top: none;"></td>
                        <td>DISKON PROMO <?= $diskon ?></td>
                        <td><?= $promo ?></td>
                    </tr>
                    <tr>
                        <td style="border-top: none;"></td>
                        <td>PPN 11%</td>
                        <td><?= $ppn ?></td>
                    </tr>
                    <tr class="last">
                        <td style="border-top: none;"></td>
                        <td class="last">GRAND TOTAL</td>
                        <td class="last total"><?= $total ?></td>
                    </tr>
                </tfoot>
            </table>
            <div class="notices">
                <div class="title-info">Catatan:</div>
                <div class="notice">Pembelian akan dibatalkan secara otomatis jika melebihi tanggal kadaluarsa</div>
            </div>
        </main>
    </div>
</div>