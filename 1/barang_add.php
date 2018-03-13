<?php
include "../koneksi.php";

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


if($add = mysqli_query($konek, "INSERT INTO produk(kode_produk, kode_kategori,kode_supplier,nama_produk, harga, harga_grosir, harga_pokok, harga_distributor,
									stok,satuan,tgl_masuk,warning) 
								VALUES
								('$kode_produk', '$kode_kategori','$kode_supplier','$nama_produk', '$harga', '$harga_grosir', '$harga_pokok', '$harga_distributor',
									'$stok','$satuan','$tgl_masuk','$warning')")){
	header("Location: barang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>