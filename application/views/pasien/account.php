<div class="card text-center" id="account">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h4 class="card-title">My Account</h4>
    <p class="card-text"><table id="tablebiodata">
    <table>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $biodata['NIK'] ; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $biodata['nama'] ; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?php echo $biodata['umur'] ; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $biodata['alamat'] ; ?></td>
        </tr>
    </table>
    </p>
    <div style="margin-bottom:20px;">
        <a href="#" class=btn btn-primary><button type="button" data-toggle="modal" data-target="#ubahbiodata">Ubah Biodata</button></a>
        <a href="#" class=btn btn-primary><button>Ubah Password</button></a>
    </div>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

    <style>
        #tablebiodata {
            margin-top: 40px;
            margin-bottom: 20px;
        }
        #tablebiodata tr td {
            padding: 5px 10px;
        }
        #account{
            padding: 50px 50px;
        }
    </style>  

    <div class="modal fade" id="ubahbiodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="<?php echo base_url('Pasien/updateAccount/') ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" value="<?php echo $biodata['NIK'] ; ?>" name="nik" id="nik">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="<?php echo $biodata['nama'] ; ?>" name="nama" id="nik">
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" class="form-control" value="<?php echo $biodata['umur'] ; ?>" name="umur" id="nik">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" value="<?php echo $biodata['alamat'] ; ?>" name="alamat" id="nik">
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