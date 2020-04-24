<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form update Jadwal
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_jadwal" value="<?= $user['id_jadwal'] ?>">
                        <div class="form-group">
                            <label for="tanggal">Masukan Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">ID Kategori</label>
                            <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="Masukkan ID Kategori">
                        </div>
                        <div class="form-group">
                            <label for="id_petugas">ID Kategori</label>
                            <input type="text" class="form-control" id="id_petugas" name="id_petugas" placeholder="Masukkan ID Petugas">
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data Jadwal</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>