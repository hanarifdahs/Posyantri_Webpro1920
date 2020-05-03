<br><br>
    <h1 style="text-align: center;">ANTRIAN SAYA</h1>
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
                    <th class="text-center" scope="col">ID Antrian</th>
                    <th class="text-center" scope="col">Tanggal</th>
                    <th class="text-center" scope="col">Jam</th>
                    <th class="text-center" scope="col">Kategori</th>
                    <th class="text-center" scope="col">Petugas</th>
                    <th class="text-center" scope="col">Status</th>
                </tr> 
            </thead>    
            <tbody>
                <?php foreach ($antrian as $row){ ?>
                <tr>
                    <td style="text-align: center"class="id"><?= $row['id_booking']; ?></td>
                    <td style="text-align: center"class="tgl"><?= $row['tanggal']; ?></td>
                    <td style="text-align: center"class="jam"><?= $row['jam']; ?></td>
                    <td style="text-align: center"class="namakat"><?= $row['nama_kategori']; ?></td>
                    <td style="text-align: center"class="namapet"><?= $row['id_petugas']; ?></td>
                    <?php if($row['konfirmasi']==0){?>
                        <td style="text-align: center; color: red; font-weight: bold;"class="status">Belum Dikonfirmasi</td>
                    <?php }else{?>
                        <td style="text-align: center; color: green; font-weight: bold;"class="status">Sudah dikonfirmasi</td>
                    <?php }?>
                </tr>
                <?php } ?>
            </tbody>
            </div>
        </table>
    </div>

    