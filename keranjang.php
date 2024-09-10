<?php
session_start();
$koneksi = new mysqli("localhost","root","","toko");

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) {
    echo "<script>alert('Keranjang kosong silahkan belanja terlebih dahulu');</script>";
    echo "<script>location='products.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Keranjang</title>
  <link rel="icon" href="img/logo.png">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Tempatnya Jual  Tembakau Rasa</span>
    <span class="site-heading-lower">MBAKO JINGGO</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Mbako Jinggo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">Profil UMKM</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.php">Produk</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.php">Kontak</a>
          </li>
          <?php if (isset($_SESSION['pelanggan'])): ?>
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="logout.php">Logout</a>
          </li>
            <?php else:  ?>
                <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login.php">Login</a>
          </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>

<section class="konten">
    <div class="container">
       <center><h1 class="text-primary">Keranjang Belanja</h1></center>
    <table class="table table-bordered">
        <thead class="bg-primary">
            <tr>
                <th>No</th>
                <th>produk</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>subharga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-light">
            <?php $nomor=1; ?>
            <?php foreach ($_SESSION['keranjang'] as $id_produk=>$jumlah): ?>
                <!-- menampilkan produk -->
                <?php 
                $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                $pecah=$ambil->fetch_assoc() ?>
                <?php $subharga = $pecah["harga_produk"]*$jumlah; ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama_produk"]; ?></td>
                        <td>Rp. <?php echo number_format($pecah["harga_produk"]); ?>,-</td>
                        <td><?php echo $jumlah;?></td>
                        <td>Rp. <?php echo number_format($subharga); ?>,-</td>
                        <td>
                            <a href="hapuskeranjang.php?id=<?php echo $id_produk; ?>" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="products.php" class="btn btn-light">Lanjut Belanja</a>
            <a href="checkout.php" class="btn btn-primary">Checkout</a>
        </div>
</section>
<br><br>
<div class="wraping">
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Mbako Jinggo 2020</p>
    </div>
  </footer>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>