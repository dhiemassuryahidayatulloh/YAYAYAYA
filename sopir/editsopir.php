<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="DHIEMAZ SURYA.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="DHIEMAZ SURYA">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="../mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		<b>PRIPUN KABARE LURD,SAE THO.?<br>
		 <a href="">DELOK WEBSITE</a> | <a href="">PITULUNGAN</a> | <a href="../logout.php">METHU</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="../index.php">Dashboard</a></li>
		<li><a href="../jenisservice/tjenisservice.php">jenisservice</a></li>
		<li><a href="../karyawan/tkaryawan.php">karyawan</a></li>
		<li><a href="../kendaraan/tkendaraan.php">kendaraan</a></li>
		<li><a href="../merk/tmerk.php">merk</a></li>
		<li><a href="../pelanggan/tpelanggan.php">pelanggan</a></li>
		<li><a href="../pemilik/tpemilik.php">pemilik</a></li>
		<li><a href="../service/tservice.php">service</a></li>
		<li><a href="../setoran/tsetoran.php">setoran</a></li>
		<li><a href="../sopir/tsopir.php">sopir</a></li>
		<li><a href="../transaksisewa/ttransaksisewa.php">transaksisewa</a></li>
		<li><a href="../type/ttype.php">type</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Edit sopir</h3>
	<?php
	include "../koneksi.php";
	
	$idsopir = $_GET['idsopir'];
	
	$tampil = "select * from sopir where idsopir='$idsopir'";
	$hasil = mysql_query($tampil);
	echo "<form action=editsopirdua.php method=POST>";
	echo "<table width=95% border='1'>";	
	while($data = mysql_fetch_array($hasil)){
		echo "<tr><td width=125px>idsopir </td>
		<td><input type=text class=pendek name=idsopir value='$data[idsopir]' readonly></td></tr>";
		echo "<tr><td>nmsopir </td>
		<td><input type=text class=sedang name=nmsopir value='$data[nmsopir]'></td></tr>";
		echo "<tr><td>almtsopir </td>
		<td> <input type=text class=pendek name=almtsopir value='$data[almtsopir]'></td></tr>";
		echo "<tr><td>telpsopir </td>
		<td> <input type=text class=sedang name=telpsopir value='$data[telpsopir]'></td></tr>";
		echo "<tr><td>nosim </td>
		<td> <input type=text  class=pendek name=nosim value='$data[nosim]'></td></tr>";
		echo "<tr><td>tarifperjam </td>
		<td> <input type=text class=sedang name=tarifperjam value='$data[tarifperjam]'></td></tr>";
	}
	echo "</table>";
	echo "<input type=Submit name=edit value=Edit>";
	echo "</form>";
?>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2016 MOS css template | <a href="SI KANCHEL.com">Sistem Informasi Rental Mobil</a> | design <a href="http://DHIEMAZ SURYA.com" rel="nofollow" target="_blank">DHIEMAZ SURYA.com</a><br>redesign <a href="DHIEMAZ SURYA.blogspot.com">DHIEMAZ SURYA</a> 
</div>
</div>
</body>
</html>