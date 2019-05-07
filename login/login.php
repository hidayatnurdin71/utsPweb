
<?php

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
require '../config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
 
//$username = $_POST['username']; // Ambil value username yang dikirim dari form
//$password = $_POST['password']; // Ambil value password yang dikirim dari form
//$password = md5($password); // Kita enkripsi (encrypt) password tadi dengan md5
//
//// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
//$stmt = $conn->prepare('SELECT * FROM tbl_user (username,password)WHERE username=:a AND password=:b');
//$stmt->bindParam(':a', $username);
//$stmt->bindParam(':b', $password);
//$stmt->execute(); // Eksekusi querynya
//
//$data = $stmt->fetch(); // Ambil datanya dari hasil query tadi
//$cek = mysqli_num_rows($sql);
//
//// Cek apakah variabel $data ada datanya atau tidak
//if($cek > 0){ // Jika tidak sama dengan empty (kosong)
//  $_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
//  $_SESSION['status'] = "login";
//  setcookie("message","delete",time()-1); // Kita delete cookie message
//  
//  header('location:../admin/index.php'); // Kita redirect ke halaman welcome.php
//}else{ // Jika $data nya kosong
//  // Buat sebuah cookie untuk menampung data pesan kesalahan
//  setcookie("message", "Maaf, Username atau Password salah", time()+3600);
//  
//  header("location:index.php"); // Redirect kembali ke halaman index.php
//}

?>



