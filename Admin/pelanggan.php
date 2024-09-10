<h2>Data Pelanggan</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>email</th>
            <th>telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;      
        $ambil=$koneksi->query("SELECT * FROM pelanggan");
        while ($pecah=$ambil->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['nama_pelanggan'];?></td>
            <td><?php echo $pecah['email_pelanggan'];?></td>
            <td><?php echo $pecah['telepon_pelanggan'];?></td>
            <td>
            <a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_pelanggan']; ?>" class="btn-danger btn">hapus</a>
                <a href="index.php?halaman=ubahpelanggan&id=<?php echo $pecah['id_pelanggan']; ?>" class="btn-warning btn">ubah</a>
            </td>
        </tr>
        <?php $nomor++; } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">Tambah</a>