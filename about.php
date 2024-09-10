<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link rel="icon" href="img/logo.png">
  <title>MBAKO JINGGO - Tempatnya Jual  Tembakau Rasa</title>

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

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" width="1100px" src="img/1.png" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Strong Tobacco, Strong Roots</span>
                <span class="section-heading-lower">About Our Mbako Jinggo</span>
              </h2>
              <p>UMKM “ Mbako Jinggo” adalah industri kecil tembakau rasa di desa gempol,Kecamatan gempol,Kabupaten pasuruan. Usaha Mikro Kecil dan Menengah (UMKM) yang bernama “ Mbako Jinggo” ini menyerap tenaga kerja dari lingkungan sekitar. Usaha Mikro Kecil dan Menengah (UMKM) ini mengolah tembakau biasa yang kemudian tembakau tersebut divariasi lagi dengan menambahkan rasa seperti coklat,vanilla,kopi,dan lain - lain</p>
              <!-- <p class="mb-0">Kami menjamin bahwa Anda akan jatuh <em>cinta</em> dengan berbagai rasa produk kami saat Anda mencobanya sekali saja Anda tidak akan lupa dengan rasanya. Segerahlah membeli produk kami untuk rutinitas harian Anda, bersama teman, atau sekadar menikmati waktu sendiri.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Mbako Jinggo 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
