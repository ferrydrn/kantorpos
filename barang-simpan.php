<?php include_once("functions.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simpan Data Barang</title>
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

<!-- Simpan -->
<section>
<div class="container">
<h1 class="fw-bold"><center>Simpan Data Barang</center></h1>
<hr>
<?php
if(isset($_POST["TblSimpan"])){

	$db=dbConnect();
	if($db->connect_errno==0){
		// Bersihkan data
		$id_barang  			=$db->escape_string($_POST["id_barang"]);
		$id_pegawai	   			=$db->escape_string($_POST["id_pegawai"]);
		$kategori	   			=$db->escape_string($_POST["kategori"]);
		$deskripsi	   			=$db->escape_string($_POST["deskripsi"]);
		// Susun query insert
		$sql="INSERT INTO data_barang(id_barang,id_pegawai,kategori,deskripsi)
			  VALUES('$id_barang','$id_pegawai','$kategori','$deskripsi')";
		// Eksekusi query insert
		$res=$db->query($sql);
		if($res){
			if($db->affected_rows>0){ // jika ada penambahan data
				?>
				Data Berhasil Disimpan<br>

				<?php
			}
		}
		else{
			?>
			The data failed to save because the Product Id may already exist.<br>
			<a class="mt-3 btn btn-warning" href="javascript:history.back()" role="button">Back</a>
			<?php
		}
	}
	else
		echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
}
?>
</div>
</section>
<!-- Akhir Simpan -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>