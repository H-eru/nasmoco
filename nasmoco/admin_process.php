<?php 
include "config.php"; 

	session_start();

	$update = false;
	$nama_staff = '';
	$user_staff = '';
	$pw_staff = '';
	$cabang = '';

	if (isset($_POST['save'])) {
		$nama_staff = $_POST['nama_staff'];
		$user_staff = $_POST['user_staff'];
		$pw_staff = md5($_POST['pw_staff']);
		$cabang = $_POST['cabang'];	
		
		$tambah = mysqli_query($conn,"INSERT INTO staff(nama_staff,user_staff,pw_staff,cabang) VALUES('$nama_staff','$user_staff','$pw_staff','$cabang')");
		if ($tambah) {
			mysqli_query($conn,$tambah);
			
			header('location:admin_tools.php?msg=tambah');
		}
	}

	if (isset($_GET['delete'])) {
		$id_staff = $_GET['delete'];
		$hapus = mysqli_query($conn,"DELETE FROM staff WHERE id_staff=$id_staff");
		if ($hapus) {
			mysqli_query($conn,$hapus);
			header('location:admin_tools.php?msg=hapus');
		}
	}

	if (isset($_GET['edit'])) {
		$id_staff = $_GET['edit'];
		$update = true;
		$ubah = mysqli_query($conn,"SELECT * FROM staff WHERE id_staff=$id_staff");		
		$rows = mysqli_fetch_array($ubah);
		$nama_staff = $rows['nama_staff'];
		$user_staff = $rows['user_staff'];
		$pw_staff = $rows['pw_staff'];
		$cabang = $rows['cabang'];		
	}

	if (isset($_POST['update'])) {
		$id_staff = $_POST['id_staff'];
		$nama_staff = $_POST['nama_staff'];
		$user_staff = $_POST['user_staff'];
		$pw_staff = md5($_POST['pw_staff']);
		$cabang = $_POST['cabang'];	
		$upd = mysqli_query($conn,"UPDATE staff SET nama_staff='$nama_staff',user_staff='$user_staff',pw_staff='$pw_staff',cabang='$cabang' WHERE id_staff=$id_staff");
		if ($upd) {
			mysqli_query($conn,$upd);
			header('location:admin_tools.php?msg=ubah');
		}
	}

	if (isset($_POST['selesai'])) {
		$id_staff = $_POST['id_staff'];
		$cabang = $_POST['cabang'];
		$cabang = 'Selesai';
		$done = mysqli_query($conn,"UPDATE staff SET cabang='$cabang' WHERE id_staff=$id_staff");
		if ($done) {
			mysqli_query($conn,$done);
			header('location:admin_tools.php');
		}
	}
?>	