<?php $koneksi=new mysqli("localhost","root","","toko"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nota Pembelian</title>
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
    <center><h2 class="text-primary">Detail Pembelian</h2></center>
<?php
    $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
    $detail=$ambil->fetch_assoc();
?>
<br>
<strong class="bg-light">
    <?php echo $detail['nama_pelanggan']; ?>
</strong><br>
<p class="text-light">Telepon : <?php echo $detail['telepon_pelanggan']; ?><br>email : 
<?php echo $detail['email_pelanggan']; ?></p>
<p class="text-light">
Tanggal : <?php echo $detail['tanggal_pembelian']; ?><br>
Total : <?php echo $detail['total_pembelian']; ?>
</p>

<table class="table table-bordered">
    <thead class="bg-primary">
        <tr>
            <th>No</th>
            <th>nama produk</th>
            <th>harga</th>
            <th>berat</th>
            <th>jumlah</th>
            <th>subberat</th>
            <th>subtotal</th>
        </tr>
    </thead>
    <tbody class="bg-light">
    <?php $nomor=1;
        $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); 
        while ($pecah = $ambil->fetch_assoc()) { $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
            $perproduk=$ambil->fetch_assoc();
            $nama =$perproduk['nama_produk'];
            $harga = $perproduk['harga_produk'];
            $berat = $perproduk['berat_produk'];
            $subberat=$perproduk['berat_produk']*$jumlah;
            $subharga=$perproduk['harga_produk']*$jumlah; ?>
        <tr>
        <td>
            
            <?php echo $nomor;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $harga;?></td>
            <td><?php echo $berat;?></td>
            <td><?php echo $jumlah;?></td>
            <td><?php echo $subberat;?></td>
            <td><?php echo $subharga;?></td>

            <!-- <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['nama'];?></td>
            <td><?php echo $pecah['harga'];?></td>
            <td><?php echo $pecah['berat'];?></td>
            <td><?php echo $pecah['jumlah'];?></td>
            <td><?php echo $pecah['subberat'];?></td>
            <td><?php echo $pecah['subharga'];?></td> -->
        </tr>
        <?php $nomor++;}?>
    </tbody>
</table>
    </div>

    <div class="container">
        <div class="col-md-7">
            <div class="alert alert-info">
                <p>
                    silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?>,- <br>
                    <strong>BANK MANDIRI 137-001008-3276 AN. Arif Rachman</strong>
                </p>
            </div>
        </div>
    </div>

</section>


</body>
</html>