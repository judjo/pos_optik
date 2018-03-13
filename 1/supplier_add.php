<?php
include "../koneksi.php";

$kode_supplier		= $_POST["kode_supplier"];
$nama_supplier		= $_POST["nama_supplier"];
$no_telp			= $_POST["no_telp"];
$alamat_lengkap		= $_POST["alamat_lengkap"];
$sales				= $_POST["sales"];
$keterangan			= $_POST["keterangan"];


if($add = mysqli_query($konek, "INSERT INTO supplier(kode_supplier, nama_supplier, no_telp, alamat_lengkap, sales, keterangan) 
								VALUES
								('$kode_supplier', '$nama_supplier', '$no_telp', '$alamat_lengkap', '$sales', '$keterangan')")){
	header("Location: supplier.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>