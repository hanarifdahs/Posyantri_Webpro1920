    <br><br>
    NIK : <?php echo $biodata['NIK'] ; ?><br>
    Nama : <?php echo $biodata['nama'] ; ?><br>
    Umur : <?php echo $biodata['umur'] ; ?><br>
    Alamat : <?php echo $biodata['alamat'] ; ?><br>

    <a href="#"><button>Ubah Biodata</button></a>
    <a href="#"><button>Ubah Password</button></a>

    <h3>ini jadi modal biodata</h3>
    <form method="post" action="<?php echo base_url('Pasien/updateAccount/') ?>">
        <input type="text" value=<?php echo $biodata['NIK'] ; ?> name="nik" id="nik"><br>
        <input type="text" value=<?php echo $biodata['nama'] ; ?> name="nama" id="nama"><br>
        <input type="text" value=<?php echo $biodata['umur'] ; ?> name="umur" id="umur"><br>
        <input type="text" value=<?php echo $biodata['alamat'] ; ?> name="alamat" id="alamat"><br>
        <input type="submit" value="Ubah Data" name="submit">
    </form>