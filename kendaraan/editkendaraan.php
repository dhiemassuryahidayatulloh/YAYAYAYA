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
	<h3>Edit kendaraan</h3>
	<?php
	include "../koneksi.php";
	
	$noplat = $_GET['noplat'];
	
	$tampil = "select * from kendaraan where noplat='$noplat'";
	$hasil = mysql_query($tampil);
	echo "<form action=editkendaraandua.php method=POST>";
	echo "<table width=95% border='1'>";	
	while($data = mysql_fetch_array($hasil)){
		echo "<tr><td width=125px>noplat </td>
		<td><input type=text class=pendek name=noplat value='$data[noplat]' readonly></td></tr>";
		echo "<tr><td>tahun </td>
		<td><input type=text class=sedang name=tahun value='$data[tahun]'></td></tr>";
		echo "<tr><td>tarifperjam </td>
		<td> <input type=text class=pendek name=tarifperjam value='$data[tarifperjam]'></td></tr>";
		echo "<tr><td>statusrental </td>
		<td> <input type=text class=sedang name=statusrental value='$data[statusrental]'></td></tr>";
		echo "<tr><td>kodeservice </td>
		<td> <input type=text  class=pendek name=kodeservice value='$data[kodeservice]'></td></tr>";
		echo "<tr><td>idtype </td>
		<td> <input type=text class=sedang name=idtype value='$data[idtype]'></td></tr>";
		echo "<tr><td>kodepemilik </td>
		<td> <input type=text  class=pendek name=kodepemilik value='$data[kodepemilik]'></td></tr>";
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