<?php

include "koneksi.php";

$idmobil = $_POST['id'];
$noplat = $_POST['no_plat'];
$merk	= $_POST['merk'];
$hargasewa	= $_POST['harga_sewa'];

mysqli_query($koneksi, "insert into mobil(id,no_plat,merk,harga_sewa)			values('$idmobil','$noplat','$merk','$hargasewa')");
header("Location:view.php");
?>