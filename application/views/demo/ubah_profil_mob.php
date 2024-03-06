<body>
    <div class="container bg-light p-3">
        <div class="d-flex align-items-center gap-2 ms-2">
            <a href="javascript:void(0)" style="text-decoration: none; display: flex; align-items: center; gap: 2px;" onclick="profil()">
                <div style="color: #056BB7; margin-right: 5px;"><i class="fa-solid fa-chevron-left fa-2x"></i></div>
                <h4 class="mb-0" style="color:#056BB7;">Kembali</h4>
            </a>

        </div>
        <div class="text-center mt-4 mb-2">
            <h4>Ubah Info Profil</h4>
        </div>
        <div class="p-3">
            <form id="ubahCustomer">
                <div class="mb-2 mt-1">
                    <input type="text" class="form-control" name="id_customer" value="<?= $profil->id_customer ?>" hidden />
                </div>
                <div class="mb-2 mt-1">
                    <label for="exampleInputEmail1" class="form-label">NAMA LENGKAP</label>
                    <input type="text" class="form-control" name="nama_customer" value="<?= $profil->nama_customer ?>" />
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email" value="<?= $profil->email ?>" />
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">NOMOR TELEPON</label>
                    <input type="text" class="form-control" name="non_wa" value="<?= $profil->no_wa ?>" />
                </div>
                <div class="mb-2">
                    <label for="textarea" class="form-label">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $profil->alamat ?>" />
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary w-100" type="button" id="btn-simpan" value="Simpan Perubahan" onclick="ubahCustomer()">Simpan</button>
                </div>
            </form>
        </div>

    </div>

</body>

<script>
    function profil() {
        let id_customer = Cookies.get('id_customer');
        location.href = "<?= base_url('profil/') ?>" + id_customer;
    }


    function ubahCustomer() {
        $('#btn-simpan').val("Simpan...");

        $.ajax({
            url: "<?php echo base_url() ?>api/ubahCustomer",
            type: "POST",
            data: $('#ubahCustomer :input').serialize(),
            dataType: "JSON",
            success: function(data) {
                // Tampilkan SweetAlert dengan tipe success untuk semua respon
                Swal.fire({
                    title: 'Success',
                    text: data.Info,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    // Jika pengguna menekan OK, reload halaman
                    profil();
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Tampilkan SweetAlert dengan tipe error untuk semua respon error
                Swal.fire({
                    title: 'Success',
                    text: 'Data Berhasil Diperbarui',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Setelah menampilkan SweetAlert, reload halaman
                    profil();
                });
            }
        });
    }
</script>