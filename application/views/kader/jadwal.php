<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="div-row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Jadwal <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Jadwal</h1>
    <div class="row mb-3">
        <div class="col-md-6">
            <a href="<?= base_url('kader/tambah_jadwal'); ?>" class="btn btn-primary">Tambah Jadwal</a>
            <br>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach ($user as $usr) : ?>
                        <li class="list-group-item"><?php echo $usr['tanggal']; ?>
                            <a href="<?= base_url(); ?>kader/hapusjadwal/<?= $usr['id_jadwal']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>kader/detailjadwal/<?= $usr['id_jadwal']; ?>" class="badge badge-primary float-right">Detail</a>
                            <a href="<?= base_url(); ?>kader/updatejadwal/<?= $usr['id_jadwal']; ?>" class="badge badge-success float-right">Update</a>
                            <a href="<?= base_url(); ?>kader/takejadwal/<?= $usr['id_jadwal']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Take</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->