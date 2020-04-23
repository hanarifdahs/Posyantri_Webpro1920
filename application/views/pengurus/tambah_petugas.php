<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Petugas
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Masukan Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="masukan nama">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="masukan username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="username" name="password" placeholder="masukan password">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Kader</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>