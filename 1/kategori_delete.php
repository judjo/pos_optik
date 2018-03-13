<?php

include "../koneksi.php";

$id_kategori	= $_GET["id_kategori"];

if($delete = mysqli_query($konek, "DELETE FROM kategori_barang WHERE id_kategori='$id_kategori'")){
	header("Location: kategori.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>