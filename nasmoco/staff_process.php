<?php 
include "config.php"; 

	session_start();

	$update = false;
	$nama = '';
	$no_pol = '';
	$no_hp = '';
	$tgl = '';
	$status = '';
	$cbg = '';

	if (isset($_POST['save'])) {
		$nama = $_POST['nama'];
		$no_pol = $_POST['no_pol'];
		$no_hp = $_POST['no_hp'];
		$tgl = $_POST['tgl'];	
		$status = $_POST['status'];	
		$cbg = $_POST['cbg'];	
		
		$tambah = mysqli_query($conn,"INSERT INTO service(nama,no_pol,no_hp,tgl,status,cbg) VALUES('$nama','$no_pol','$no_hp','$tgl','$status','$cbg')");
		if ($tambah) {
			mysqli_query($conn,$tambah);
			header('location:staff_tools.php?psn=tambah');
		}
	}

	if (isset($_GET['delete'])) {
		$id_customer = $_GET['delete'];
		$hapus = mysqli_query($conn,"DELETE FROM service WHERE id_customer=$id_customer");
		if ($hapus) {
			mysqli_query($conn,$hapus);
			header('location:staff_tools.php?psn=hapus');
		}
	}

	if (isset($_GET['edit'])) {
		$id_customer = $_GET['edit'];
		$update = true;
		$ubah = mysqli_query($conn,"SELECT * FROM service WHERE id_customer=$id_customer");		
		$rows = mysqli_fetch_array($ubah);
		$nama = $rows['nama'];
		$no_pol = $rows['no_pol'];
		$no_hp = $rows['no_hp'];
		$tgl = $rows['tgl'];	
		$status = $rows['status'];	
		$cbg = $rows['cbg'];	
	}

	if (isset($_POST['update'])) {
		$id_customer = $_POST['id_customer'];
		$nama = $_POST['nama'];
		$no_pol = $_POST['no_pol'];
		$no_hp = $_POST['no_hp'];
		$tgl = $_POST['tgl'];	
		$status = $_POST['status'];	
		$cbg = $_POST['cbg'];
		$upd = mysqli_query($conn,"UPDATE service SET nama='$nama',no_pol='$no_pol',no_hp='$no_hp',tgl='$tgl',status='$status',cbg='$cbg' WHERE id_customer=$id_customer");
		if ($upd) {
			mysqli_query($conn,$upd);
			header('location:staff_tools.php?psn=ubah');
		}
	}
	
?>	