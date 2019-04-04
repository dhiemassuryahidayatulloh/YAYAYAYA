<?php
	$host = "localhost"; // http://192.168.4.1
	$user = "root";
	$password = "";
	$dbnama = "dmz";
	
	$koneksi = mysql_connect($host,$user,$password);
	if ($koneksi) {
		//echo "Alhamdulillah. Terhubung ke server";
		$pilihdb = mysql_select_db($dbnama);
		if (!$pilihdb){
			die ("Dabatase tidak dapat dipilih");
		}	
	} else {
		echo "Tidak bisa terhubung ke server";
	}
?>