<?php
	$dbhost = "localhost";
	$dbname = "bootcamp";
	$dbuser = "root";
	$dbpass = ""; 

	try{
		$conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8",$dbuser,$dbpass); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	}catch(PDOException $e){
		echo "Koneksi gagal : ".$e->getMessage();
	} 

?>	