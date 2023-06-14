<?php include_once("functions.php");
session_start();

	include("connection.php");
	$user_data = check_login($con);?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />  
</head>
  <body>

<!-- Navbar -->
<section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">MPC BANDUNG (40400)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="pegawai.php">Lihat Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="barang.php">Data Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="barang-tambah.php">Tambah Data Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-bg-danger" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</section>
<!-- Akhir Navbar -->

<!-- Home -->

<div class="container mt-3 mb-3">
<center>
<p class="h1 fw-bold">Hello, <?php echo $user_data['nama_pegawai'];?></p>
</center>
</div>

<!-- Akhir Home -->

    <!-- Carousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="img/pos-instan.jpg" class="d-block w-100" alt="Acara Adat Bali Hindu" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Pos Instan</h5>
              <p>Luncurkan Pos Instan, Produk Kiriman Cepat Bergaransi Persembahan Pos Indonesia</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="img/pos-express.jpg" class="d-block w-100" alt="Acara Pernikahan" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Pos Express</h5>
              <p>
                Layanan Pos Express merupakan layanan Premium milik Pos Indonesia untuk pengiriman cepat dan aman dengan jangkauan luas ke seluruh kota Propinsi wilayah Indonesia. Layanan ini dapat menjadi pilihan tepat dan terpercaya untuk
                mengirim paket, dokumen, surat serta barang dagangan online.
              </p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="img/pos-aja.jpg" class="d-block w-100" alt="Acara Adat Budaya Manggari" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Acara Adat Manggarai</h5>
              <p>Mengenal daerah Manggarai adalah sebuah kabupaten yang ada di provinsi Nusa Tenggara Timur (NTT) Indonesia bagian Timur.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- End Carousel -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>