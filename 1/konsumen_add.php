<?php
include "../koneksi.php";

$kode_konsumen 	= $_POST["kode_konsumen"];
$nama 			= $_POST["nama"];
$jenis_kelamin 	= $_POST["jenis_kelamin"];
$tgl_lahir 		= $_POST["tgl_lahir"];
$email 			= $_POST["email"];
$no_hp 			= $_POST["no_hp"];
$catatan 		= $_POST["catatan"];


if ($add = mysqli_query($konek, "INSERT INTO konsumen (kode_konsumen,nama,jenis_kelamin,tgl_lahir,email,no_hp,catatan) VALUES 
	('$kode_konsumen', '$nama','$jenis_kelamin','$tgl_lahir','$email','$no_hp','$catatan')")){
		header("Location: konsumen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>