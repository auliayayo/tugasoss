<html>
<head>
<meta name="viewport" content="width=device-width">
<title>Selamat Datang</title>
</script>
<style type="text/css">
*{
	padding:0;
	margin:0;
}

body {
	background: url(rental.png) ;
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	background-color:#FFF
}

header {
	width:100%;
	background-color:#006faa ;
	z-index:1000;
}

.menu-bar {
	color:#FFF;
	font-size:25px;
	cursor:pointer;
	padding:10px 12px;
	margin-left:10px;
	margin-top:5px;
	margin-bottom:5px;
}

.menu-bar:hover {
	background-color:rgba(0, 0, 0, 0.1);
	border-radius:50px;
}
.jw-drawer {width:130px;font:bold 12px arial,verdana,sans-serif;}
.jw-drawer li a {text-decoration:none;border-top:1px solid #ffffff;
color:white;display:block;background-color:DodgerBlue;padding:10px;}
.jwdrawer li a:hover {background-color:DarkCyan;}
.jwdrawer ul {list-style:none;padding:0px;}
.jwdrawer ul ul{position:absolute;top:75px;left:135px;visibility:hidden;} 
.jwdrawer ul li:hover ul{visibility:visible;}

.content{
  padding: 100px 0 0 250px;
}

</style>

</head>

<body>
<header>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <div class="jw-drawer">
    <nav>
      <ul>
        <li><a href="view.php"><i></i>Datamobil</a></li>
        <li><a href="tambah.php"><i></i>Tambah Mobil</a></li>
        <li><a href="index.php"><i></i>Logout</a></li>
      </ul>
    </nav>
  </div>
  </header>

<div class="content">
<br>
<br>
<br>
<br>
<br>
<br>
  <h1 align="center">Rental Mobil</h1>
  <p align="center" color=>Melayani anda dengan segenap hati, dan memuaskan pelanggan setia kami</p>
</div>


</body>
</html>