<?php include_once("functions.php");
session_start();

	include("connection.php");
	

	$user_data = check_login($con);?>
<!DOCTYPE html>
<html><head><title>Data Barang</title></head>
<body>
<center>
<h1>Data Barang</h1>
<table>
<?php

$db=dbConnect();
if($db->connect_errno==0){
	$sql="SELECT id_barang, id_pegawai, kategori, deskripsi
	   FROM data_barang ";
	$res=$db->query($sql);
	if($res){
		?>
		<br>
		<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Barang.xls");
		?>
		<br>
		<table border="1">
		<tr><th>Id Barang</th><th>Kategori</th><th>Deskripsi</th></tr>
		<?php
		$data=$res->fetch_all(MYSQLI_ASSOC); // ambil seluruh baris data
		foreach($data as $barisdata){ // telusuri satu per satu
			?>
			<tr>
			<td><?php echo $barisdata["id_barang"];?></td>
			<td><?php echo $barisdata["kategori"];?></td>
			<td><?php echo $barisdata["deskripsi"];?></td>
			</tr>
			<?php
		}
		?>
		</table>
		<?php
		$res->free();
	}else
		echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
}
else
	echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
?>
</body>
</html>