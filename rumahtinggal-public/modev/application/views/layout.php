<!DOCTYPE html>

<html lang="en">
    <?php $this->load->view('layout/header') ?>
    <body>
        <?php $this->load->view('layout/topbar') ?>
        <?php $this->load->view($halaman) ?>
        <?php $this->load->view('layout/footer') ?>
        <?php $this->load->view('layout/script') ?>
    </body>
</html>

<script>
    var opsi_toastr = {
        closeButton: true,
        preventDuplicates: true,
        timeOut: 5000
    }
    
</script>
