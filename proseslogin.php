<?php

include "koneksi.php";

$usernm=$_POST['usernm'];
$passwd=md5($_POST['passwd']);

$login=mysqli_query($koneksi,"SELECT * FROM user WHERE usernm='$usernm' AND passwd='$passwd'");

$jumlah=mysqli_num_rows($login);

$x=mysqli_fetch_array($login);

	if($jumlah==1)
		{
			
			session_start();
			
			
			$_SESSION['usernm']=$x['usernm'];
			$_SESSION['passwd']=$x['passwd'];
			
			header("Location:home.php");
		}
	else
		{
			header("Location:Homeuser.php");
		}
		
?>