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
	<h3>Input pemilik</h3>
	<form action="inputpemilik.php" method="post">
	<table width="95%">
		<tr><td width="125px"><b>kodepemilik</b></td><td><input type="text" name="kodepemilik" class="pendek"></td></tr>
		<tr><td width="125px"><b>nmpemilik</b></td><td><input type="text" name="nmpemilik" class="sedang"></td></tr>
		<tr><td width="125px"><b>almtpemilik</b></td><td><input type="text" name="almtpemilik" class="panjang"></td></tr>
		<tr><td width="125px"><b>telppemilik</b></td><td> <input type="text" name="telppemilik" class="sedang"></td></tr>
		<tr><td width="125px"><b>nosetoran</b></td><td> <input type="text" name="nosetoran" class="sedang"></td></tr>
	</table>
	<input type="submit" name="submit" value="simpan">
	</form>
	<?php
	include "../koneksi.php";
	
	$kodepemilik = $_POST['kodepemilik'];
	$nmpemilik = $_POST['nmpemilik'];
	$almtpemilik = $_POST['almtpemilik'];
	$telppemilik = $_POST['telppemilik'];
	$nosetoran = $_POST['nosetoran'];
	$cek_kodepemilik = mysql_num_rows(mysql_query("select * from pemilik where kodepemilik='$kodepemilik'"));
		
	if((empty($kodepemilik)) || (empty($nmpemilik)) || (empty($almtpemilik)) || (empty($telppemilik) || (empty($nosetoran)))){
		echo "Maaf, data tidak boleh kosong.";
	} elseif ($cek_kodepemilik > 0){
		echo "kodepemilik tidak boleh ada yang sama.";
	} else {
		$input = "insert into pemilik values('$kodepemilik','$nmpemilik','$almtpemilik','$telppemilik','$nosetoran')";
		mysql_query($input);
		if ($input){
			echo "Data berhasil disimpan. <a href=tpemilik.php>kembali</a>";
		} else {
			echo "Data gagal disimpan.";
		}
	}
?>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2016 MOS css template | <a href="SI KANCHEL.com">Sistem Informasi Rental Mobil</a> | design <a href="http://DHIEMAZ SURYA.com" rel="nofollow" target="_blank">DHIEMAZ SURYA.com</a><br>redesign <a href="DHIEMAZ SURYA.blogspot.com">DHIEMAZ SURYA</a> 
</div>
</div>
</body>
</html>