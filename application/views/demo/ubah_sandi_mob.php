<body>
    <div class="container bg-light p-3">
        <div class="d-flex align-items-center gap-2 ms-2">
            <a href="javascript:void(0)" style="text-decoration: none; display: flex; align-items: center; gap: 2px;" onclick="profil()">
                <div style="color: #056BB7; margin-right: 5px;"><i class="fa-solid fa-chevron-left fa-2x"></i></div>
                <h4 class="mb-0" style="color:#056BB7;">Kembali</h4>
            </a>
        </div>
        <div class="text-center mt-4 mb-2">
            <h4>Ubah Kata Sandi</h4>
        </div>
        <div class="p-3">
            <form action="">
                <div class="mb-2 mt-1">
                    <label for="exampleInputEmail1" class="form-label">KATA SANDI LAMA</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">KATA SANDI BARU</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">ULANGI KATA SANDI BARU</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary w-100" type="button" id="button-addon2">Ubah</button>
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
</script>