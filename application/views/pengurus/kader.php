<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="div-row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Kader <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Kader</h1>
    <div class="row mb-3">
        <div class="col-md-6">
            <a href="<?= base_url('pengurus/tambah_kader'); ?>" class="btn btn-primary">Tambah Data Kader</a>
            <br>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach ($user as $usr) : ?>
                        <?php if ($usr['role_id'] == 2) : ?>
                            <li class="list-group-item"><?php echo $usr['name']; ?>
                                <a href="<?= base_url(); ?>pengurus/hapuskader/<?= $usr['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                                <a href="<?= base_url(); ?>pengurus/detailkader/<?= $usr['id']; ?>" class="badge badge-primary float-right">detail</a>
                                <a href="<?= base_url(); ?>pengurus/updatekader/<?= $usr['id']; ?>" class="badge badge-success float-right">update</a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->