<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$user_staff = $_POST['user_staff'];
$pw_staff = md5($_POST['pw_staff']);
$cabang = $_POST['cabang'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM staff WHERE user_staff='$user_staff' AND pw_staff='$pw_staff' AND cabang='$cabang'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['user_staff'] = $user_staff;
	$_SESSION['cabang'] = $cabang;
	$_SESSION['status'] = "login";
	header("location:staff_tools_dashboard.php");
}else{
	header("location:login_staff.php?pesan=gagal");
}

?>