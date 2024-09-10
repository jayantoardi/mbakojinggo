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

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">7:00 AM to 4:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 4:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 4:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">7:00 AM to 4:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 4:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">7:00 AM to 4:00 PM</span>
                </li>
              </ul>
              <p class="address mb-5">
                <h2>Our Address</h2>
                <hr>
                <em>
                  <strong>Jalan GG.4 Dusun Tanjung</strong>
                  <br>
                  Gempol Kec. Gempol Pasuruan Jawa Timur 
                </em>
              </p>
              <br><br>
              <p class="contact mb-0">
                <h2>Contact Us</h2>
                <hr>
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                +6281233662981
                <small>
                  <br>
                  <em>Email</em>
                </small>
                <br>
                <a href="mailto:mbako.jinggo@hotmail.com">mbako.jinggo@hotmail.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="page-section cta">
      <div class="container text-primary">
        <div class="cta-inner text-center rounded">
<!-- contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row mx-auto">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="masukkan email">
              </div>
              <div class="form-group">
                <label for="telp">No Telepon</label>
                <input type="tel" id="telp" class="form-control" placeholder="masukkan no telepon">
              </div>
              <select class="form-control">
                <option>-- Pilih Kategori Produk--</option>
                <option>Tembakau Kopi</option>
                <option>Tembakau Vanilla</option>
                <option>Tembakau Coklat</option>
                <option>Lainnya</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="4" placeholder="masukkan pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->
</div>
</div>
</section>

    <section class="page-section cta">
      <div class="container text-primary">
        <div class="cta-inner text-center rounded">
        <h2>MAP MBAKO JINGGO</h2>
        <div class="embed-responsive embed-responsive-21by9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.224378684903!2d112.69704181429171!3d-7.550494444554608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7de6242070399%3A0xa09c5c1d6bcfa049!2sGempol%2C%20Kec.%20Gempol%2C%20Pasuruan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1608097998629!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

    <!-- Script to highlight the active date in the hours list -->
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

  </body>

</html>
