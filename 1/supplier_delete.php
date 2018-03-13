<?php

include "../koneksi.php";

$id_supplier	= $_GET["id_supplier"];

if($delete = mysqli_query($konek, "DELETE FROM supplier WHERE id_supplier='$id_supplier'")){
	header("Location: supplier.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>