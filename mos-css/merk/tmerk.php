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
	 <h3>Tampil merk</h3>
 <table class="data">
	 <tr>
		<th>no</th>
		<th>kodemerk</th>
		<th>nmmerk</th>
		<th colspan="2">Aksi</th>
	 </tr>
	 <?php 
		 include "../koneksi.php";
		 $query = mysql_query("select * from merk");
		 $no = 0;
		 while ($data = mysql_fetch_array($query)) {
		 $no++;
	 ?>
	 <tr class="data">
		 <td class="data"><?php echo "$no"; ?></td>
		 <td class="data"><?php echo "$data[kodemerk]"; ?></td>
		 <td class="data"><?php echo "$data[nmmerk]"; ?></td>
		 <td class="data"><a href=hapusmerk.php?kodemerk=<?php echo "$data[kodemerk]";?> 
		 onclick="if (!confirm('Anda yakin akan menghapus?')) return false;">
		 hapus</a></td>
		 <td class="data"><a href=editmerk.php?kodemerk=<?php echo "$data[kodemerk]";?>>edit</a></td>
	 </tr>
	 <?php } ?>
 </table>
 <a href="inputmerk.php">input</a>
	 </div>
 <div class="clear"></div>
 <div id="footer">
	 &copy; 2016 MOS css template | <a href="SI KANCHEL.com">Sistem Informasi Rental Mobil</a> | design <a href="http://DHIEMAZ SURYA.com" rel="nofollow" target="_blank">DHIEMAZ SURYA.com</a><br>redesign <a href="DHIEMAZ SURYA.blogspot.com">DHIEMAZ SURYA</a> 
 </div>
 </div>
 </body>
 </html>