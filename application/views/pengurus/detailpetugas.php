<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Petugas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Kader : <?= $user['name']; ?></h5>
                    <p class="card-text">Username Kader : <?= $user['username']; ?></p>
                    <p class="card-text">Password Kader : <?= $user['password']; ?></p>
                    <a href=" <?= base_url('pengurus/p_kesehatan') ?> " class="btn btn-primary">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>