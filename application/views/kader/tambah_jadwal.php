<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Jadwal
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="tanggal">Masukan Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">Kategori Pemeriksaan</label>
                            <select class="form-control" id="id_kategori" name="id_kategori">
                                <?php foreach($kategori as $value){ ?>
                                    <option value=<?= $value['id_kategori'] ?>><?= $value['nama_kategori'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_petugas">Petugas Kesehatan Penanggung Jawab</label>
                            <select class="form-control" id="id_petugas" name="id_petugas">
                                <?php foreach($petugas as $value){ ?>
                                    <option value=<?= $value['id'] ?>><?= $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Jadwal</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>