    <h3>INI PASIEN/JADWAL.php</h3>
    <h1>JADWAL POSYANDU</h1>
    <table border=1>
        <thead>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Tanggal</th>
                <th class="text-center" scope="col">Jam</th>
                <th class="text-center" scope="col">Kategori</th>
                <th class="text-center" scope="col">Petugas</th>
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
            </tr>
            <?php } ?>
        </tbody>
    </table>