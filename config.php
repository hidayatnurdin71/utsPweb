<?php

//$host ='localhost';
//$user ='root';
//$pass ='';
//$dbname ='utsweb';
//
//	$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
//	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$koneksi = mysqli_connect("localhost","root","","utsweb");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 

?>