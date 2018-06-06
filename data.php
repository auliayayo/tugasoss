<?php

echo "<style type='text/css'>
		h1 {
			background-color: powderblue;
			height: 100px;
		   }
		* {
			background-color: azure;
		  }
		th {
			background-color: lightblue;
		   }
		td, td a {
				  background-color: white;
				 }
	  </style>";

include "koneksi.php";

$query = "select*from mobil";
$hasil = mysqli_query($koneksi,$query);

echo "<title>Lihat Data</title>";
echo "<h1 align=center>Rental Mobil</h1>";
echo "<center><a href='tambah.php'>Tambah Data Mobil</a></center>";
echo "<br>";

echo "<table border=1 align='center' cellpadding=7>
			<tr>
				<th>Id Mobil</th>
				<th>Nomor Plat</th>
				<th>Merk</th>
				<th>Harga Sewa</th>
				<th>Pilih</th>
			</tr>
	 ";

while($data=mysqli_fetch_array($hasil)){

	echo "
			<tr>
				<td align='center'>".$data['id']."</td>
				<td align='center'>".$data['no_plat']."</td>
				<td align='center'>".$data['merk']."</td>
				<td align='center'>".$data['harga_sewa']."</td>
				<td align='center'><a href='edit.php?id=".$data['id']."'>Edit</a> | <a href='hapus.php?id=".$data['id']."'>Hapus</a><br></td>
			</tr>";
			
}
	echo "</table>";

echo "<br>";
echo "<center><b>Total Mobil Berjumlah ".mysqli_num_rows($hasil)."</b></center>";

?>