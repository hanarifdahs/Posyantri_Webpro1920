<div class="container-fluid">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="div-row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Booking <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Booking List</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach ($user as $usr) : ?>
                        <li class="list-group-item"><?php echo $usr['tanggal']; ?>
                            <a href="<?= base_url(); ?>kader/hapusbooking/<?= $usr['id_booking']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>kader/detailbooking/<?= $usr['id_booking']; ?>" class="badge badge-primary float-right">Detail</a>
                            <?php if (($usr['konfirmasi']==1) || ($usr['taken']==1)) {
                                echo '<a href="#" type="button" class="badge badge-primary float-right btn disabled">Konfirmasi</a>';
                            }else{
                                ?><a href="<?= base_url(); ?>kader/konfirmbooking/<?= $usr['id_booking']; ?>" class="badge badge-primary float-right" onclick="return confirm('yakin?');">Konfirmasi</a>
                            <?php } ?>
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