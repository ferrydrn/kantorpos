<?php include_once("functions.php");?>
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

<!-- Edit -->
<section>
<div class="container">
<h1>Edit Data Pegawai</h1>
<?php
		if (isset($_POST["TblUpdate"])) { $db = dbConnect();
		if ($db->connect_errno == 0) {
	// Bersihkan data
		$id_pegawai = $db->escape_string($_POST["id_pegawai"]);
		$username = $db->escape_string($_POST["username"]);
		$password = $db->escape_string($_POST["password"]);
		$nama_pegawai = $db->escape_string($_POST["nama_pegawai"]);
		$jabatan = $db->escape_string($_POST["jabatan"]);
	// Susun query update
		$sql = "UPDATE data_pegawai SET
				id_pegawai='$id_pegawai',
				username='$username',
				password='$password',
				nama_pegawai='$nama_pegawai',
				jabatan='$jabatan'
				WHERE id_pegawai='$id_pegawai'";
	// Eksekusi query update
		$res = $db->query($sql);
		if ($res) {
		if ($db->affected_rows > 0) { // jika ada update data
?>
Data updated successfully.<br>
<?php
	} else { // Jika sql sukses tapi tidak ada data yang berubah
?>
The data was successfully updated but without any data changes.<br>
	<br>
	<a class="btn btn-warning" href="javascript:history.back()" role="button">Edit</a> 
<?php
} } else { // gagal query
?>
Data failed to update.
<br>
	<a class="btn btn-warning" href="javascript:history.back()" role="button">Edit</a>
<?php
} } else
	echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>"; }
?>
</div>
</section>
<!-- Akhir Edit -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>