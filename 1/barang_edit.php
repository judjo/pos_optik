<?php

include "../koneksi.php";

$id_produk			= $_POST["id_produk"];
$kode_produk		= $_POST["kode_produk"];
$kode_kategori		= $_POST["kode_kategori"];
$kode_supplier		= $_POST["kode_supplier"];
$nama_produk		= $_POST["nama_produk"];
$harga				= $_POST['harga'];
$harga_grosir		= $_POST['harga_grosir'];
$harga_pokok		= $_POST["harga_pokok"];
$harga_distributor	= $_POST['harga_distributor'];
$satuan				= $_POST["satuan"];
$stok				= $_POST["stok"];
$tgl_masuk			= $_POST["tgl_masuk"];
$warning			= $_POST["warning"];


if($edit = mysqli_query($konek, "UPDATE produk 
								 SET kode_produk='$kode_produk', kode_kategori='$kode_kategori',kode_supplier='$kode_supplier',nama_produk='$nama_produk', 
								 harga='$harga',harga_grosir='$harga_grosir',harga_pokok='$harga_pokok'
								 ,harga_distributor='$harga_distributor',satuan='$satuan',stok='$stok',tgl_masuk='$tgl_masuk'
								 ,warning='$warning'
								WHERE 
								id_produk='$id_produk'")){
	header("Location: barang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>