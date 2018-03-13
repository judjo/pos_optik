<?php
include "../koneksi.php";

$id_data_optik 	= $_POST["id_data_optik"];
$kode_optik 	= $_POST["kode_optik"];
$nama_optik 	= $_POST["nama_optik"];
$alamat_optik 	= $_POST["alamat_optik"];
$kota 			= $_POST["kota"];
$telp 			= $_POST["telp"];
$fax 			= $_POST["fax"];
$keteranga 	= $_POST["keteranga"];

if ($edit = mysqli_query($konek, "UPDATE data_optik SET 
									 kode_optik  = '$kode_optik', 
                                     nama_optik   = '$nama_optik',
								     alamat_optik = '$alamat_optik',
									 kota		  = '$kota',
									 telp		  = '$telp',
									 fax		  = '$fax',
									 keteranga	  = '$keteranga' 
                              WHERE  id_data_optik = '$id_data_optik'")){
		header("Location: optik.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
?>