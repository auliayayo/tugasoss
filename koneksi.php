<?php

$server="localhost";
$username="root";
$password="";
$database="rentalmobil";

$koneksi = mysqli_connect($server,$username,$password,$database);
	if( !$koneksi ) {
		die("Gagal Koneksi Database" .mysqli_connect_error());
	}
?>