<html>
<head>
	<title>Edit Data</title>
	<style type="text/css">
		h2 {
			background-color: DodgerBlue;
			height: 100px;
		   }
		* {
		   background:url(rental.png);
		  }

		  td{
						 background-color: DodgerBlue;
						}
		a
		{
						 background-color: DodgerBlue;
						}
		 b, input {
						 background-color: white;
						}
		.tombol {
				 background-color: powderblue;
				}
	</style>
</head>
<body>
		<?php
			include "koneksi.php";
			$idmobil=$_GET['id'];
			$data=mysqli_query($koneksi, "select*from mobil where id ='$idmobil'");
			$d=mysqli_fetch_array($data);
		?>

	<h2 align="center">Edit Data</h2>
	<form method="POST" action="editproses.php">
		<table border="1" align="center" cellpadding="7">
		<input type="hidden" name="id" value="<?php echo $d['id'] ?>" />
			<tr>
				<td><b>Id Mobil</b></td>
				<td><input type="text" name="id" disabled value="<?=$d['id']?>"></td>
			</tr>
			<tr>
				<td><b>Nomor Plat</b></td>
				<td><input type="text" name="no_plat" value="<?=$d['no_plat']?>"></td>
			</tr>
			<tr>
				<td><b>Merk</b></td>
				<td><input type="text" name="merk" value="<?=$d['merk']?>"></td>
			</tr>
			<tr>
				<td><b>Harga Sewa</b></td>
				<td><input type="text" name="harga_sewa" value="<?=$d['harga_sewa']?>"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><a href="view.php">Batal</a>  
				<input class="tombol" type="submit" value="Edit"></td>
			</tr>
		</table>
	</form>
		
</body>
</html>