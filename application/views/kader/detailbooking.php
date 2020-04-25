<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Jadwal
                </div>
                <div class="card-body">
                    <h5 class="card-title">ID Booking : <?= $user['id_booking']; ?></h5>
                    <p class="card-text">ID Jadwal : <?= $user['id_jadwal']; ?></p>
                    <p class="card-text">ID Pasien : <?= $user['id_pasien']; ?></p>
                    <p class="card-text">Konfirmasi : <?= $user['konfirmasi']; ?></p>
                    <a href=" <?= base_url('kader/k_booking') ?> " class="btn btn-primary">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>