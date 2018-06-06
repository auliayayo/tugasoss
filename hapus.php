<?php

include "koneksi.php";

$idmobil=$_GET['id'];

mysqli_query($koneksi, "delete from mobil where id ='$idmobil'");
header("Location:view.php");

?>
