<html>
<head>
	<title>Tambah Data</title>
	<style type="text/css">
		h1 {
			background-color:DodgerBlue;
			height: 100px;
		   }
		* {
		   background-color: azure;
		  }
		td ,a ,b , input {
						  background-color: white;
						 }
		.tombol {
				 background-color: lightblue;
				}
	</style>	
</head>
<body>
	<h1 align="center">Tambah Data</h1>
	
	<form method="POST" action="tambahproses.php">
	
		<table border="1" align="center" cellpadding="7">
			
			<tr>
				<td><b>Id Mobil</b></td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td><b>Nomor Plat</b></td>
				<td><input type="text" name="no_plat"></td>
			</tr>
			<tr>
				<td><b>Merk Mobil</b></td>
				<td><input type="text" name="merk"></td>
			</tr>
			<tr>
				<td><b>Harga Sewa</b></td>
				<td><input type="text" name="harga_sewa"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="view.php">Batal</a> <input class="tombol" type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>

</body>
</html>