    <br><br>
    <h1 style="text-align: center;">JADWAL POSYANDU HARI INI</h1>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row justify-content-md-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>

    <style>
        input {
            display: initial;
            border: 1px solid grey !important;
        }
    </style>

    <div style="margin: 20px 50px;">
        <table class="table" id="tablenyahana" border=1>
            <div id="table">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Tanggal</th>
                    <th class="text-center" scope="col">Jam</th>
                    <th class="text-center" scope="col">Kategori</th>
                    <th class="text-center" scope="col">Petugas</th>
                    <th class="text-center" scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <?php $date = date('Y-m-d'); $time = date('H:i');?>
                <?php foreach ($jadwal as $row){ ?>
                <?php if($row['taken']==0 && $row['tanggal']==$date && $row['jam'] > $time){ ?>
                <tr>
                    <!--<td style="text-align: center"class="id"><?= $row['id_jadwal']; ?></td>-->
                    <td style="text-align: center"class="tgl"><?= $row['tanggal']; ?></td>
                    <td style="text-align: center"class="jam"><?= $row['jam']; ?></td>
                    <td style="text-align: center"class="namakat"><?= $row['nama_kategori']; ?></td>
                    <td style="text-align: center"class="namapet"><?= $row['id_petugas']; ?></td>
                    <td>
                        <a button style="width:157px;height:40px; margin: 0px auto;" type="button" href="#<?= ''.$row['id_jadwal'].'';?>" class="nav-link btn btn-primary" data-toggle="modal">Pilih Jadwal</a>
                    </td>
                </tr>
                <div class="modal fade" id="<?= ''.$row['id_jadwal'].'';?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <label for="exampleInputUsername1">Tanggal : </label>
                                        <label><?= ''.$row['tanggal'].'';?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Jam : </label>
                                        <label><?= ''.$row['jam'].'';?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Kategori : </label>
                                        <label><?= ''.$row['nama_kategori'].'';?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Petugas : </label>
                                        <label><?= ''.$row['id_petugas'].'';?></label>
                                    </div>
                                    <input type="hidden" name="id_jadwal" value="<?= $row['id_jadwal']; ?>">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Book</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </tbody>
            </div>
        </table> 
    </div>
    
