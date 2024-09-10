<?php
session_start();
$koneksi=new mysqli("localhost","root","","toko");

if (!isset($_SESSION["pelanggan"])) {
    echo "<script>alert('silakan login');</script>";
echo "<script>location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Checkout</title>
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
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Mbako Jinggo</a>
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
                </tr>
        </thead>
        <tbody class="bg-light">
            <?php $nomor=1; ?>
            <?php $totalbelanja=0; ?>
            <?php foreach ($_SESSION['keranjang'] as $id_produk=>$jumlah): ?>
                <!-- menampilkan produk -->
                <?php 
                $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                $pecah = $ambil->fetch_assoc(); ?>
                <?php $subharga = $pecah["harga_produk"]*$jumlah; ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama_produk"]; ?></td>
                        <td>Rp. <?php echo number_format($pecah["harga_produk"]); ?>,-</td>
                        <td><?php echo $jumlah;?></td>
                        <td>Rp. <?php echo number_format($subharga); ?>,-</td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php $totalbelanja+=$subharga; ?>
                    <?php endforeach ?>
                </tbody>
                <tfoot class="bg-light">
                    <tr>
                        <th colspan="4">Total Belanja</th>
                        <th>Rp. <?php echo number_format($totalbelanja); ?>,-</th>
                    </tr>
                </tfoot>
            </table>
            <form method="post">
                <div class="row">
                    <!-- nama pelanggan -->
                <div class="col-md-4">
                    <div class="form-group">
                    <input type="text" readonly value="<?php echo $_SESSION["pelanggan"]["nama_pelanggan"] ?>" class="from-control">
                </div></div>
                <!-- telepon pelanggan -->
                <div class="col-md-4"><div class="form-group">
                    <input type="text" readonly value="<?php echo $_SESSION["pelanggan"]["telepon_pelanggan"] ?>" class="from-control">
                </div></div>
                <div class="col-md-4">
                    <select class="form-control"  name="id_ongkir">
                        <option value="">pilih ongkos kirim</option>
                        <?php
                        $ambil=$koneksi->query("SELECT * FROM ongkir");
                        while ($perongkir=$ambil->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $perongkir["id_ongkir"] ?>">
                            <?php echo $perongkir['nama_kota'] ?>
                            Rp. <?php echo number_format($perongkir['tarif']) ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                </div>
                <button class="btn btn-primary" name="checkout">Checkout</button>
            </form>
           
            <?php
            if (isset($_POST['checkout'])) {
                $id_pelanggan=$_SESSION["pelanggan"]["id_pelanggan"];
                $id_ongkir=$_POST["id_ongkir"];
                $tanggal_pembelian=date("Y-m-d");

                $ambil=$koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
                $arraytongkir=$ambil->fetch_assoc();
                $tarif=$arraytongkir['tarif'];
                $total_pembelian=$totalbelanja+$tarif;

                //menyimpan data ke tabel pembelian
                $koneksi->query("INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`) VALUES (NULL,'$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian')");
                 
                //mendapatkan id_pembelian
                $id_pembelian_barusan= $koneksi->insert_id;

                foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
                {
                    // mendapatkan produk berdasarkan id_produk
                    $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                    $perproduk=$ambil->fetch_assoc();
                    $nama =$perproduk['nama_produk'];
                    $harga = $perproduk['harga_produk'];
                    $berat = $perproduk['berat_produk'];
                    $subberat=$perproduk['berat_produk']*$jumlah;
                    $subharga=$perproduk['harga_produk']*$jumlah;

                    $koneksi->query("INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES (NULL, '$id_pembelian_barusan', '$id_produk', '$jumlah',''$nama, '$harga', '$berat', '$subberat', '$subharga')");

                }
                //mengkosongkan keranjang
                unset($_SESSION["keranjang"]);

                // tambilan dialihkan ke halaman nota
                echo "<script>alert('pembelian sukses');</script>";
                
                echo "<script>location='nota.php?id=$id_pembelian_barusan'</script>";
            }
            ?>
        </div>
</section>



<pre>
    <?php print_r($_SESSION['pelanggan']) ?>
</pre>
<pre>
    <?php print_r($_SESSION['keranjang']) ?>
</pre>

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