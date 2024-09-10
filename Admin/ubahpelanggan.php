<h2>Ubah Pelanggan</h2>
<?php 
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'"); 
$pecah=$ambil->fetch_assoc();
?>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_pelanggan']; ?>" required>
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $pecah['email_pelanggan']; ?>"  required>
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" name="pass" value="<?php echo $pecah['password_pelanggan']; ?>"  required>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" class="form-control" name="telepon" value="<?php echo $pecah['telepon_pelanggan']; ?>" required>
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php
if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE `pelanggan` SET email_pelanggan='$_POST[email]', password_pelanggan='$_POST[pass]', nama_pelanggan='$_POST[nama]', telepon_pelanggan='$_POST[telepon]' WHERE id_pelanggan='$_GET[id]'");
    echo "<script>alert('Data Pelanggan Telah di Ubah');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
}
?>