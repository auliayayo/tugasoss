<?php

include "koneksi.php";

$idmobil=$_POST['id'];
$noplat=$_POST['no_plat'];
$merk=$_POST['merk'];
$hargasewa=$_POST['harga_sewa'];

mysqli_query($koneksi, "update mobil set no_plat = '$noplat', merk = '$merk', harga_sewa = '$hargasewa' where id = '$idmobil'");

header("Location:view.php");

?>