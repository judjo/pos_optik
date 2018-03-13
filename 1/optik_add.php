<?php
include "../koneksi.php";

$kode_optik 	= $_POST["kode_optik"];
$nama_optik 	= $_POST["nama_optik"];
$alamat_optik 	= $_POST["alamat_optik"];
$kota 			= $_POST["kota"];
$telp 			= $_POST["telp"];
$fax 			= $_POST["fax"];
$keteranga	 	= $_POST["keteranga"];

if ($add = mysqli_query($konek, "INSERT INTO data_optik (kode_optik, nama_optik, alamat_optik, kota, telp, fax, keteranga) VALUES 
	('$kode_optik', '$nama_optik', '$alamat_optik', '$kota', '$telp', '$fax', '$keteranga')")){
		header("Location: optik.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>