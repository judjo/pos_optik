<?php

include "../koneksi.php";

$id_produk	= $_GET["id_produk"];

if($delete = mysqli_query($konek, "DELETE FROM produk WHERE id_produk='$id_produk'")){
	header("Location: barang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>