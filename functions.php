<?php

function dbConnect(){
	$db=new mysqli("localhost","root","","coba1");// Sesuaikan dengan konfigurasi server anda.
	return $db;
}
function check_login($con)
{

	if(isset($_SESSION['id_pegawai']))
	{

		$id = $_SESSION['id_pegawai'];
		$query = "select * from data_pegawai where id_pegawai = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
function getDataPegawai($id_pegawai){
	$db=dbConnect();
	if($db->connect_errno==0){
		$res=$db->query("SELECT id_pegawai,username,password,nama_pegawai,jabatan
						 FROM data_pegawai
						 WHERE id_pegawai='$id_pegawai'");
		if($res){
			if($res->num_rows>0){
				$data=$res->fetch_assoc();
				$res->free();
				return $data;
			}
			else
				return FALSE;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}
function getDataBarang($id_barang){
	$db=dbConnect();
	if($db->connect_errno==0){
		$res=$db->query("SELECT *
						 FROM data_barang
						 WHERE id_barang='$id_barang'");
		if($res){
			if($res->num_rows>0){
				$data=$res->fetch_assoc();
				$res->free();
				return $data;
			}
			else
				return FALSE;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}
function getlistpegawai(){
	$db=dbConnect();
	if($db->connect_errno==0){
		$res=$db->query("SELECT distinct jabatan as 'jabatan' 
						 FROM data_pegawai 	
					");
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

	?>