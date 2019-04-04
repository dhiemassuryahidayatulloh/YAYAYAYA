<?php 
//file authentication.php 
//file untuk proses otentifikasi 
 
if (ereg("authentication.php", $PHP_SELF)) 
{ 
header ("location :login.php"); 
die; 
} 
session_name ("AUTHEN"); 
session_start(); 
 
include "koneksi.php"; 
 
$query = "SELECT * FROM login"; 
$result = mysql_query($query); 
$data = mysql_fetch_array($result); 
$username = $data["username"]; 
$password = $data["password"];  

function authen() 
{ 
global $USERNAME, $PASSWORD,  $SES_USERNAME, $SES_PASSWORD; 
 
$SES_USERNAME=$_SESSION["SES_USERNAME"]; 
$SES_PASSWORD=$_SESSION["SES_PASSWORD"]; 
if($USERNAME==$SES_USERNAME and $PASSWORD == $SES_PASSWORD) 
{ 
return TRUE; 
} 
else 
{ 
return FALSE; 
} 
} 
?> 