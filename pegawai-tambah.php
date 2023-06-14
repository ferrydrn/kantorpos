<?php include_once("functions.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pegawai</title>
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

<!-- Tabel -->
<section id="table">
<h1 class="fw-bold"><center>Tambah Data Pegawai</center></h1>
<hr>
<form method="post" name="frm" action="pegawai-simpan.php">
<div class="container-sm table-responsive">
<table class="table table-sm table-bordered mt-3">
<tr><td><b>USERNAME</b></td>
    <td><input type="text" name="username" size="10" maxlength="12"></td></tr>
<tr><td><b>PASSWORD</b></td>
	<td><input type="text" name="password" size="10" maxlength="12"></td></tr>
<tr><td><b>NAMA PEGAWAI</b></td>
	<td><input type="text" name="nama_pegawai" size="50" maxlength="52"></td></tr>
<tr><td><b>JABATAN</b></td>
	<td><select name="jabatan">
	<option value="admin">Admin</option>
	<option value="pegawai">Pegawai</option>
		</select></td></tr>
<tr><td>&nbsp;</td>
	<td><input class="btn btn-primary" type="submit" name="TblSimpan" value="Save"></td></tr>
</table>
</div>
</section>
<!-- Akhir Tabel -->
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>