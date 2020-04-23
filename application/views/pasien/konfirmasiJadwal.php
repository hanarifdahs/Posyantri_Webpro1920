    <h3>INI PASIEN/konfirmasiJadwal.php</h3>
    Tanggal : <?php echo $jadwal['tanggal']; ?> <br>
    Jam : <?php echo $jadwal['jam']; ?> <br>
    Kategori : <?php echo $jadwal['nama_kategori']; ?> <br>
    Petugas : <?php echo $jadwal['id_petugas'].'nanti diganti nama_petugas'; ?>
    <br>
    <form method="post" action="<?php echo base_url('cPasien/actionBooking/') ?>">
    <input type="hidden" name="id_jadwal" value="<?php echo $jadwal['id_jadwal'] ; ?>">
    <input type="submit" value="Book" name="submit">
    </form>