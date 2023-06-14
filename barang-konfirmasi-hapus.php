<?php include_once("functions.php");
session_start();

	include("connection.php");

	$user_data = check_login($con)?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hapus Data Barang</title>
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

<!-- Hapus -->
<section>
<h1 class="fw-bold"><center>Hapus Data Barang</center></h1>
<hr>
<?php
if(isset($_GET["id_barang"])){
	$db=dbConnect();
	$id_barang=$db->escape_string($_GET["id_barang"]);
	if($databarang=getDataBarang($id_barang)){// cari data produk, kalau ada simpan di $data
		?>
<form method="post" name="frm" action="barang-hapus.php">
<input type="hidden" name="id_barang" value="<?php echo $databarang["id_barang"];?>">
<div class="container-sm table-responsive">
<table class="table table-sm table-bordered mt-3">
<tr><td class="fw-bold">NIPOS</td><td><?php echo $user_data['id_pegawai']; ?></td></tr>
<tr><td class="fw-bold">Kode Barang</td><td><?php echo $databarang["id_barang"];?></td></tr>
<tr><td class="fw-bold">Kategori</td><td><?php echo $databarang["kategori"];?></td></tr>
<tr><td class="fw-bold">Deskripsi</td><td><?php echo $databarang["deskripsi"];?></td></tr>
<tr><td>&nbsp;</td><td><input class="btn btn-danger" type="submit" name="TblHapus" value="Delete"></td></tr>
</table>
</form>
<!-- Akhir Hapus -->
		<?php
	}
	else
		echo "Produk dengan Id : $id_barang tidak ada. Penghapusan dibatalkan";
?>
<?php
}
else
	echo "id_barang tidak ada. Penghapusan dibatalkan.";
?>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>