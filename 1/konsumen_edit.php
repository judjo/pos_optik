<?php
include "../koneksi.php";

$id_konsumen 	= $_POST["id_konsumen"];
$kode_konsumen 	= $_POST["kode_konsumen"];
$nama 			= $_POST["nama"];
$jenis_kelamin 	= $_POST["jenis_kelamin"];
$tgl_lahir 		= $_POST["tgl_lahir"];
$email 			= $_POST["email"];
$no_hp 			= $_POST["no_hp"];
$alamat 			= $_POST["alamat"];
$catatan 		= $_POST["catatan"];

if ($edit = mysqli_query($konek, "UPDATE konsumen SET 
									 kode_konsumen  = '$kode_konsumen', 
                                     nama		   	= '$nama',
								     jenis_kelamin	 	= '$jenis_kelamin',
								     tgl_lahir	 	= '$tgl_lahir', 
								     email	 	= '$email', 
								     no_hp	 	= '$no_hp', 
								     alamat	 	= '$alamat', 
								     catatan	 	= '$catatan' 
                              WHERE  id_konsumen = '$id_konsumen'")){
		header("Location: konsumen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
?>