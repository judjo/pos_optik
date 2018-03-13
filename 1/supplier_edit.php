<?php

include "../koneksi.php";

$id_supplier		= $_POST["id_supplier"];
$kode_supplier		= $_POST["kode_supplier"];
$nama_supplier		= $_POST["nama_supplier"];
$no_telp			= $_POST["no_telp"];
$alamat_lengkap		= $_POST["alamat_lengkap"];
$sales				= $_POST["sales"];
$keterangan			= $_POST["keterangan"];


if($edit = mysqli_query($konek, "UPDATE supplier 
								 SET kode_supplier='$kode_supplier', nama_supplier='$nama_supplier', 
								 no_telp='$no_telp',alamat_lengkap='$alamat_lengkap',sales='$sales',keterangan='$keterangan'
								WHERE 
								id_supplier='$id_supplier'")){
	header("Location: supplier.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>