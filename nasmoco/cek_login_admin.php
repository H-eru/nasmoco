<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$user = $_POST['user'];
$pass = md5($_POST['pass']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM admin WHERE user='$user' AND pass='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['user'] = $user;
	$_SESSION['status'] = "login";
	header("location:admin_tools_dashboard.php");
}else{
	header("location:login_admin.php?pesan=gagal");
}

?>