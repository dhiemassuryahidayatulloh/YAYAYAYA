<?php
	session_start();//memulai session
	$error='';
	if(isset($_POST['submit'])){
		if(empty($_POST['username']) || empty($_POST['password'])){
			$error = "username dan password tidak valid";
		}
	}
	else
	{
		//variable username dan password 
		$username = $_POST['username'];
		$password = $_POST['password'];
		//membuat koneksi ke db
		$koneksi = mysql_connect("localhost","root","");
		//mencegah mysql injection
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		//ambil data dari tabel login
		$db = mysql_select_db("dmz",$koneksi);
		$query = mysql_query("select * from login where username ='$username' AND password ='$password'",$koneksi);
		$rows = mysql_num_rows($query);
		if ($rows == 1){
			$_SESSION['login_user']=$username;
			header("Location: menuadmin.php");
		} else {
			$error ="username dan password belum terdaftar";
		}
	}
?>