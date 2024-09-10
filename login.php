<?php
session_start();
$koneksi = new mysqli("localhost","root","","toko");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login pelanggan</title>
  <link rel="icon" href="img/logo.png">
  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="admin/assets/css/bootstrap.css"> -->
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

  <section class="page-section cta">
  <div class="container text-primary">
  <div class="cta-inner text-center rounded">
    <div class="container mx-0">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="from-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">                            
                        </div>
                        <div class="from-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <br>
                        <div class="container">
                        <button class="btn btn-dark" name="simpan">Login</button>
                        <button class="btn btn-warning" name="daftar">Daftra</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<?php 
if (isset($_POST["simpan"])) {
    $email=$_POST["email"];
    $password=$_POST["password"];
    $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password' ");

    $cocokkan=$ambil->num_rows;
    if ($cocokkan==1) {
        $akun =$ambil->fetch_assoc();
        $_SESSION["pelanggan"]=$akun;
        echo "<script>location='checkout.php';</script>";
    } else {
        echo "<script>alert('Gagal login periksa akun anda');</script>";
        echo "<script>location='login.php';</script>";
        
    }
}
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>