<?php
include "../koneksi.php";

$kode_kategori 	= $_POST["kode_kategori"];
$nama_kategori 	= $_POST["nama_kategori"];
$status 		= $_POST["status"];
$pesanan 		= $_POST["pesanan"];


if ($add = mysqli_query($konek, "INSERT INTO kategori_barang (kode_kategori,nama_kategori, status, pesanan) VALUES 
	('$kode_kategori','$nama_kategori', '$status', '$pesanan')")){
		header("Location: kategori.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>