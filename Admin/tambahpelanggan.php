<h2>Tambah Pelanggan</h2>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" name="pass" required>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" class="form-control" name="telepon" required>
    </div>
    <!-- <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"></textarea>
    </div> -->
    <!-- <div class="form-group">
        <label>foto</label>
        <input type="file" class="form-control" name="foto">
    </div> -->
    <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) {
    // $nama = $_FILES['foto']['name'];
    // $lokasi = $_FILES['foto']['tmp_name'];
    // move_uploaded_file($lokasi,"../fotoproduk/".$nama);
    $koneksi->query("INSERT INTO `pelanggan`(`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`) VALUES (NULL, '$_POST[email]', '$_POST[pass]', '$_POST[nama]', '$_POST[telepon]')");
    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1:url=index.php?halaman=pelanggan'>";
}
?>