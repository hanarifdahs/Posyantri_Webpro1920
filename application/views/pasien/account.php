<div class="card text-center" id="account">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h4 class="card-title">My Account</h4>
        <p class="card-text">
            <table id="tablebiodata">
                <img src=" <?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Avatar" class="avatar">
                <table style="width: 300px;">
                    <tr>
                        <td style="width: 70px;">NIK</td>
                        <td style="width: 30px;">:</td>
                        <td><?php echo $biodata['NIK']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $biodata['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><?php echo $biodata['umur']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $biodata['alamat']; ?></td>
                    </tr>
                </table>
        </p>
        <div style="margin-bottom:20px;">
            <a href="#" class=btn btn-primary><button type="button" data-toggle="modal" data-target="#ubahbiodata">Ubah Biodata</button></a>
            <a href="#" class=btn btn-primary><button type="button" data-toggle="modal" data-target="#ubahpassword">Ubah Password</button></a>
            <a href="#" class=btn btn-primary><button type="button" data-toggle="modal" data-target="#ubahpicture">Ubah Picture</button></a>
        </div>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<style>
    #tablebiodata {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #tablebiodata tr td {
        padding: 5px 10px;
    }

    #account {
        padding: 50px 50px;
    }

    .avatar {
        vertical-align: middle;
        width: 100px;
        height: 100px;
        border-radius: 10%;
    }
</style>

<div class="modal fade" id="ubahbiodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?php echo base_url('Pasien/updateAccount/') ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="nik" class="form-control" value="<?php echo $biodata['NIK']; ?>" name="nik" id="nik">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="<?php echo $biodata['nama']; ?>" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="text" class="form-control" value="<?php echo $biodata['umur']; ?>" name="umur" id="umur">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" value="<?php echo $biodata['alamat']; ?>" name="alamat" id="alamat">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="ubahpicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url('Pasien/updatePicture/') ?>" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div><img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="ubahpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?php echo base_url('Pasien/changePassword/') ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" class="form-control" name="oldpassword" id="oldpassword">
                    </div>
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" name="newpassword" id="newpassword">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" name="confirmpass" id="confirmpass">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>        
</div>

