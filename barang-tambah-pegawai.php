<?php include_once("functions.php");
session_start();

	include("connection.php");

	$user_data = check_login($con)?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Barang</title>
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
          <a class="nav-link" aria-current="page" href="barang-pegawai.php">Data Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="barang-tambah-pegawai.php">Tambah Data Barang</a>
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

<!-- Tabel -->
<section>
<h1 class="mb-3 fw-bold"><center>Tambah Data Barang</center></h1>
<hr>
<form method="post" name="frm" action="barang-simpan-pegawai.php">
<div class="container table-responsive">
<table class="table table-sm table-bordered mt-3">

<tr><td class="fw-bold">Kode Barang</td>
    <td><input type="text" name="id_barang" size="20" maxlength="23"></td></tr>
<tr><td class="fw-bold">NIPOS</td>
    <td><input type="text" name="id_pegawai" size="5" maxlength="7"
	     value="<?php echo $user_data['id_pegawai']; ?>" readonly></td></tr>
<tr><td class="fw-bold">Kategori</td><td>
                    <p><input type="radio" name="kategori" value="Selisih Barang">Selisih Kurang</p>
                    <p><input type="radio" name="kategori" value="Selisih Lebih">Selisih Lebih</p>
                    <p><input type="radio" name="kategori" value="Salah Salur">Salah Salur</p>
                    <p><input type="radio" name="kategori" value="Hilang">Hilang</p>
                    <p><input type="radio" name="kategori" value="Bungkus Rusak">Bungkus Rusak</p>
                    <p><input type="radio" name="kategori" value="Basah">Basah</p>
                    <p><input type="radio" name="kategori" value="Curah">Curah</p>
                    <p><input type="radio" name="kategori" value="Kurang Bea">Kurang Bea</p>
                    <p><input type="radio" name="kategori" value="Selisih Krng Berat">Selisih Krng Berat</p>
                    <p><input type="radio" name="kategori" value="Selisih Lbh Berat">Selisih Lbh Berat</p>
                    <p><input type="radio" name="kategori" value="Tanpa Advis">Tanpa Advis</p>
                    <p><input type="radio" name="kategori" value="Lainnya">Lainnya</p>
                </td></tr>
<tr><td class="fw-bold">Deskripsi</td><td>
						<textarea rows="7" cols="70" name="deskripsi"></textarea></td></tr>
<tr><td>&nbsp;</td>
    <td><center><input class="btn btn-primary" type="submit" name="TblSimpan" value="Save"></td></tr>
</table>
</form>
</div>
</section>
<!-- Akhir Tabel -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
