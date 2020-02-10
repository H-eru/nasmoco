<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Staff - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<?php require_once 'staff_process.php'; ?>

  <?php
  // session_start();
  if($_SESSION['status']!="login"){
    header("location:login_staff.php?pesan=belum_login");
  }
  ?>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="staff_tools_dashboard.php">STAFF</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="staff_tools_dashboard.php">
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="staff_tools.php">
          <span>Tambah</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="laporan.php">
          <span>Laporan</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="staff_tools_dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        <div class="container">
    <?php 
    if(isset($_GET['psn'])){
      if($_GET['psn'] == "tambah"){

        echo "<div class='text-center text-dark alert alert-success'>
        <h5>Customer Berhasil Ditambahkan
        <a href='#' class='close' data-dismiss='alert'>&times;</a>
        </h5> 
        </div>";
      }else if($_GET['psn'] == "ubah"){
        echo "<div class='text-center text-dark alert alert-warning'>
        <h5>Customer Berhasil diubah
        <a href='#' class='close' data-dismiss='alert'>&times;</a>
        </h5> 
        </div>";
      }else if($_GET['psn'] == "hapus"){
        echo "<div class='text-center text-white alert alert-danger'>
        <h5>Customer berhasil dihapus
        <a href='#' class='close' data-dismiss='alert'>&times;</a>
        </h5> 
        </div>";
      }
    }
   ?>    
    <form action="staff_process.php" method="POST">
      <input type="hidden" name="id_customer" value="<?php echo $id_customer;?>">
      <div class="form-group">
        <label>Nama Customer</label>
        <input class="form-control" type="text" value="<?php echo $nama;?>" placeholder="Nama" name="nama" required/>
      </div>
      <div class="form-group">
        <label>Nomor Polisi Kendaraan</label>
        <input class="form-control" type="text" value="<?php echo $no_pol;?>" placeholder="Nomor Polisi Kendaraan" name="no_pol" required/>
      </div>
      <div class="form-group">
        <label>No Telepon</label>
        <input class="form-control" type="text" value="<?php echo $no_hp;?>" placeholder="Telp" name="no_hp" required/>
      </div>
      <div class="form-group">
        <label>Tanggal</label>
        <input class="form-control" type="date" value="<?php echo $tgl;?>" name="tgl" required/>
      </div>
      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status">
          <option><?php echo $status;?></option>
            <option value="Antri">Antri</option>
            <option value="Servis">Servis</option>
            <option value="Selesai">Selesai</option>
        </select>
      </div>
      <div class="form-group">
        <label>Cabang</label>
        <input class="form-control" type="text" value="<?php echo $_SESSION['cabang'];?>" name="cbg" readonly/>
      </div>
      <div>
        <?php if ($update == true) :?>
              <button type="submit" class="btn btn-info" name="update" >Update</button>
          <?php else: ?>
              <button type="submit" class="btn btn-primary" name="save" >Simpan</button>
          <?php endif; ?>
          <a href="staff_tools.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
  </div>  

  <br><br>

  <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama Customer</th>
          <th scope="col">No Polisi</th>
          <th scope="col">Nomor Telepon</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Status</th>
          <th scope="col">Cabang</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $show = mysqli_query($conn,"SELECT * FROM service WHERE status!='selesai' AND cbg = '".$_SESSION['cabang']."'");
          while ($row = mysqli_fetch_assoc($show)) {
            echo "<tr>
                  <td>$row[nama]</td>
                  <td>$row[no_pol]</td>
                  <td>$row[no_hp]</td>
                  <td>$row[tgl]</td>
                  <td>$row[status]</td>
                  <td>$row[cbg]</td>
                  <td>
                    <a href='staff_tools.php?edit=$row[id_customer]' class='btn btn-info'>Edit</a>
                    <a href='staff_tools.php?delete=$row[id_customer]' class='btn btn-danger'>Delete</a>
                  </td>
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

  <br><br>
  <marquee class="bg-secondary text-white">Staff Area - Nasmoco Cabang <?php echo $_SESSION['cabang']; ?></marquee>

  <br/>
  <br/>
      </div>
    </div>
  </div>
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

</body>

</html>
