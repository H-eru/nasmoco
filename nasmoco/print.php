<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>.</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  
    
    <div id="content-wrapper">
<form action="print.php">
      <div class="container-fluid">


        <?php require_once 'staff_process.php'; ?>
	
	<?php 
	// session_start();
	if($_SESSION['status']!="login"){
		header("location:login_staff.php?pesan=belum_login");
	}
	?>
  <?php
          $asd = mysqli_query($conn,"SELECT * FROM service WHERE cbg = '".$_SESSION['cabang']."'");
?>
	<div class="container"><br><br>
    <h1 class="text-center">Laporan Nasmoco</h1>
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Nama Customer</th>
		      <th scope="col">No Polisi</th>
		      <th scope="col">Nomor Telepon</th>
		      <th scope="col">Tanggal</th>
		      <th scope="col">Cabang</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$show = mysqli_query($conn,"SELECT * FROM service WHERE status='selesai' AND cbg = '".$_SESSION['cabang']."'");
		  		while ($row = mysqli_fetch_assoc($show)) {
		  			echo "<tr>
						      <td>$row[nama]</td>
						      <td>$row[no_pol]</td>
						      <td>$row[no_hp]</td>
						      <td>$row[tgl]</td>
						      <td>$row[cbg]</td>
						  </tr>
		  			";
		  		}
		  		/*function pre_r($array) {
		  			echo '<pre>';
		  			print_r($array);
		  			echo '<pre>';
		  		}*/
		  	 ?>
		  </tbody>
		</table>
 	</div>	

	<br><br>
	<h1 class="text-center text-secondary">Nasmoco Cabang <?php echo $_SESSION['cabang']; ?></h1>
      </div>
    </div>
    </form>
  
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout_staff.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

<script>
  window.load = print_d();
  function print_d(){
    window.print();
  }
  </script>
</body>

</html>
