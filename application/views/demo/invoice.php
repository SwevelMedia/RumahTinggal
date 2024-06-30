<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    tr:nth-child(1),
    tr:nth-child(8) td:nth-child(2),
    tr:nth-child(8) td:nth-child(3) {

        background-color: #056BB7;
        color: #fff;
    }

    td.note {
        border-left: 3px solid #056BB7;
        /* Gaya garis vertikal */
        padding-left: 8px;
        /* Padding kiri untuk memberi ruang di sebelah garis */
    }

    th,
    td {
        border: none;
        /* Menghapus garis pemisah kolom */
    }
</style>
</style>

<body>
    <div class="bg-light">
        <div class="py-5 container">
            <div class="bg-white card card-body p-4 mb-3" id="invoiceContent">
                <div class="d-flex justify-content-between mb-4">
                    <div class="mt-2">
                        <img src="<?php echo base_url('assets/demo/img/logo.png'); ?>">
                        <div class="mt-2">Jl. Mijil No.98, Karangjati, Sinduadi, Kec. Mlati, <br /> Kabupaten Sleman, Daerah Istimewa Yogyakarta 55715<br /> Telp: 08112636228</div>
                    </div>
                    <div class="mt-2">
                        <h5 class="semibold">INVOICE #<?= $no_invoice ?></h5>
                        <div>Tanggal Diterbitkan: <?= $tgl_issue ?></div>
                        <div>Tanggal Kadaluarsa: <?= $tgl_expired ?></div>
                    </div>
                </div>
                <table>
                    <tr>
                        <th width="60%">
                            <h5 class="text-denter"> Deskripsi Desain</h5>
                        </th>
                        <th width="20%">
                            <h5 class="text-center">Paket</h5>
                        </th>
                        <th width="20%">
                            <h5 class="text-center">Harga</h5>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <h5 class="mt-4 mb-2 ms-3"><?= $nama_rumah ?></h5>
                        </td>
                        <td>
                            <h5 class="mt-4 mb-2"><?= $paket == '1' ? 'LITE' : 'PREMIUM' ?></h5>
                        </td>
                        <td>
                            <h5 class="mt-4 mb-2"><?= $sub_total ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=" 3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="4">
                            <div class="ms-3">
                                <div class="mb-2">Ditagihkan Kepada : <br />
                                    <strong><?= $nama_customer ?></strong>
                                </div>
                                <div><?= $alamat ?></div>
                                <div><?= $no_wa ?> | <?= $email ?></div>
                            </div>
                        </td>
                        <td style="border-bottom: 1px solid #C2C2C2;">Subtotal</td>
                        <td style="border-bottom: 1px solid #C2C2C2;"><?= $sub_total ?></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #C2C2C2;">DISKON PROMO 0%</td>
                        <td style="border-bottom: 1px solid #C2C2C2;"><?= $diskon ?></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #C2C2C2;">DIBAYARKAN</td>
                        <td style="border-bottom: 1px solid #C2C2C2;"><?= $promo ?></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid #C2C2C2;">PPN 11%</td>
                        <td style="border-bottom: 1px solid #C2C2C2;"><?= $ppn ?></td>
                    </tr>
                    <tr>
                        <td class="note">
                            <small>Catatan : <br />Pembelian akan otomatis dibatalkan jika melebihi tanggal Kadaluarsa</small>
                        </td>
                        <td>GRAND TOTAL</td>
                        <td><?= $total ?></td>
                    </tr>
                </table>
                <hr style="border: none; height: 1px; background-color: black; margin-top: 17px; margin-bottom: 5px;">
                <div class="text-end">
                    <button type="button" class="btn btn-primary mt-3" onclick="unduhPDF()">Unduh Invoice</button>
                </div>






            </div>

        </div>

    </div>

</body>

<script>
    function unduhPDF() {
        var element = document.getElementById('invoiceContent');
        html2pdf(element);
    }
</script>