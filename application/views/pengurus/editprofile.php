<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Profile
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?= form_open_multipart('pengurus/editprofile'); ?>
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <div class="form-group">
                        <label for="name">Masukan Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="username" name="password" value="<?= $user['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div><img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Profile</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->