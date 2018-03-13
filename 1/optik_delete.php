<?php

include "../koneksi.php";

$id_data_optik	= $_GET["id_data_optik"];

if($delete = mysqli_query($konek, "DELETE FROM data_optik WHERE id_data_optik='$id_data_optik'")){
	header("Location: optik.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>