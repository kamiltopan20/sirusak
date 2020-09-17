<?php
/*
|--------------------------------------------------------------------------
| Aksi login
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|   http://www.sarjanakomedi.com
|
*/
error_reporting(0);
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "rumah_sakit";
        
    $base_url = "http://localhost/part_2/sirusak/";
	
	if (mysql_connect($server,$user,$pass)){
		//echo ":)";
		mysql_select_db($dbname) or die("database not found");
	}else{
		echo ":(";
	}
	 
?>