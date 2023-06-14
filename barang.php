<?php include_once("functions.php");
session_start();

	include("connection.php");
	$user_data = check_login($con);?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
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
          <a class="nav-link active" href="barang.php">Data Barang</a>
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

<section>
<div class="container">
<h1 class="fw-bold"><center>Data Barang</center></h1>
<?php
$db=dbConnect();
if($db->connect_errno==0){
	$sql="SELECT id_barang, id_pegawai, kategori, deskripsi
	   FROM data_barang ";
	$res=$db->query($sql);
	if($res){
		?>
		<br>
		<p class="text-start">Hello, <?php echo $user_data['nama_pegawai'];?></p>
		<a class="btn btn-primary text-end" target="_blank" href="download-data-barang.php" role="button">EXPORT KE EXCEL</a>
		<hr>
</div>
</section>

<!-- Table -->
<section id="table">
<div class="container">
<table class="table table-sm table-bordered">
<thead>
    <tr>
      <th scope="col">KODE BARANG</th>
      <th scope="col">KATEGORI</th>
      <th scope="col">DESKRIPSI</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>

		<?php
		$data=$res->fetch_all(MYSQLI_ASSOC); // ambil seluruh baris data
		foreach($data as $barisdata){ // telusuri satu per satu
			?>
			<tbody>
			<tr>
			<td><?php echo $barisdata["id_barang"];?></td>
			<td><?php echo $barisdata["kategori"];?></td>
			<td><?php echo $barisdata["deskripsi"];?></td>
			<td>
			<a class="btn btn-danger" href="barang-konfirmasi-hapus.php?id_barang=<?php echo $barisdata["id_barang"];?>" role="button">Delete</a>
			</td>
			</tr>
			</tbody>
			<?php
		}
		?>
		</table>
</div>
	</section>
	<!-- Akhir Table -->

		<?php
		$res->free();
	}else
		echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
}
else
	echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
?>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>