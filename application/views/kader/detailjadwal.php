<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Jadwal
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tanggal : <?= $user['tanggal']; ?></h5>
                    <p class="card-text">Jam : <?= $user['jam']; ?></p>
                    <p class="card-text">ID Kategori : <?= $user['id_kategori']; ?></p>
                    <p class="card-text">ID Petugas : <?= $user['id_petugas']; ?></p>
                    <p class="card-text">Ketersediaan : <?= $user['taken']; ?></p>
                    <a href=" <?= base_url('kader/jadwal') ?> " class="btn btn-primary">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>