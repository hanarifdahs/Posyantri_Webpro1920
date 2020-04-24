    <br><br>
    <h1>JADWAL POSYANDU</h1>

    <div class="limiter">
        <div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                    <table class="table" border=1>
                         <thead class="thead-dark">
                             <tr class="table100-head">
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">Tanggal</th>
                                <th class="text-center" scope="col">Jam</th>
                                <th class="text-center" scope="col">Kategori</th>
                                <th class="text-center" scope="col">Petugas</th>
                                <th class="text-center" scope="col">Detail Jadwal</th>
                                <th class="text-center" scope="col">Konfimasi</th>
                             </tr>
                        </thead>    
                        <tbody>
                            <?php foreach ($jadwal as $row){ ?>
                            <tr>
                                <td><?= $row['id_jadwal']; ?></td>
                                <td><?= $row['tanggal']; ?></td>
                                <td><?= $row['jam']; ?></td>
                                <td><?= $row['nama_kategori']; ?></td>
                                <td><?= $row['id_petugas']; ?></td>
                                <td>
                                    <form method="post" action="<?php echo base_url('Pasien/pilihjadwal/') ?>">
                                    <input type="hidden" value="<?= $row['id_jadwal']; ?>" name="id_jadwal">
                                    <input type="submit" value="Pilih Jadwal" name="submit">
                                    </form>
                                </td>
                                <td>
                                     <button type="button" class="nav-link btn btn-primary" data-toggle="modal" data-target="#pilih">Pilih Jadwal</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="<?php echo base_url('Pasien/actionBooking/') ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pilihan Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <label><?= $row['id_jadwal'];?></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>