<br>
<br>
<div class="card">
  <h5 class="card-header">Detail Jadwal</h5>
  <div class="card-body">
    <h5 class="card-title">Konfirmasi Jadwal</h5>
    <p class="card-text">Tanggal : <?php echo $jadwal['tanggal']; ?></p>
    <p class="card-text">Jam : <?php echo $jadwal['jam']; ?></p>
    <p class="card-text">Kategori : <?php echo $jadwal['nama_kategori']; ?></p>
    <p class="card-text">Petugas : <?php echo $jadwal['id_petugas'].'nanti diganti nama_petugas'; ?></p>
    <form method="post" action="<?php echo base_url('Pasien/actionBooking/') ?>">
    <input type="hidden" name="id_jadwal" value="<?php echo $jadwal['id_jadwal'] ; ?>">
    <input type="submit" value="Book" name="submit">
    </form>
  </div>
</div>