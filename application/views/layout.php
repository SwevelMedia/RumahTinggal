<!DOCTYPE html>

<html lang="en">


<?php $this->load->view('layout/header') ?>

<body>
    <?php
    // Load common data directly in the layout file
    $data['jumlah_rumah'] = $this->DesainModel->getJumlahRumah()->row()->jumlah_rumah;
    $data['google_client_id'] = '619189282883-54euurh55b0od41supra7n7eoksj2jbu.apps.googleusercontent.com';
    ?>
    <?php $this->load->view($halaman) ?>
    <?php $this->load->view('demo/layout/footer') ?>
    <?php $this->load->view('layout/script') ?>
</body>

</html>

<script>
    var opsi_toastr = {
        closeButton: true,
        preventDuplicates: true,
        timeOut: 5000
    }

    function number_format(number, decimals, dec_point, thousands_point) {
        if (number == null || !isFinite(number)) {
            throw new TypeError("number is not valid");
        }
        if (!decimals) {
            let len = number.toString().split('.').length;
            decimals = len > 1 ? len : 0;
        }
        if (!dec_point) {
            dec_point = '.';
        }
        if (!thousands_point) {
            thousands_point = ',';
        }

        number = parseFloat(number).toFixed(decimals);
        number = number.replace(".", dec_point);
        var splitNum = number.split(dec_point);
        splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
        //number = splitNum.join(dec_point);
        number = splitNum[0];

        return number;
    }
</script>