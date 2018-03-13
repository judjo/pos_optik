<?php
include "../koneksi.php";

$kode_kategori 	= $_POST["kode_kategori"];
$id_kategori 	= $_POST["id_kategori"];
$nama_kategori 	= $_POST["nama_kategori"];
$status 		= $_POST["status"];
$pesanan 		= $_POST["pesanan"];

if ($edit = mysqli_query($konek, "UPDATE kategori_barang SET 
									 kode_kategori  = '$kode_kategori',
									 nama_kategori  = '$nama_kategori', 
                                     status		   	= '$status',
								     pesanan	 	= '$pesanan' 
                              WHERE  id_kategori = '$id_kategori'")){
		header("Location: kategori.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
?>