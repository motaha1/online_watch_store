<?php
session_start(); 

if(empty($_SESSION['user'])){
header("LOCATION:login.php"); 

}
else{

$con = mysqli_connect("localhost","root","","store");

$sql = "SELECT * FROM `insert`"; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

  
 
  


}


?>

















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>view products</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="backassets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="backassets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="backassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="backassets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="backassets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backassets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="backassets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="backassets/plugins/summernote/summernote-bs4.min.css">
  
</head>
<style>
  body{
    background:green;
  }
  </style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">

  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="a1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">getitnow</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['name'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
       
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="edit.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewprodect.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view product</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="reg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add new admin</p>
                </a>
              </li>




              <li class="nav-item">
                <a href="viewadmins.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view admins</p>
                </a>
              </li>
            </ul>
          </li>


          
          <li class="nav-item">
                <a href="viewusers.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="showorders.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>show orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="chart.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>show chart for website</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="logout.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>logout</p>
                </a>
              </li>
              
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">
            
              <!-- /.card-header -->
              <!-- form start -->
            
            </div>




            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>name of product</th>
                    <th>img</th>
                    <th>last admin modify</th>
                    <th>price</th>
                    <th>category</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>




                  <?php 

foreach($data as $pro):


?>
                  <tr>
                    <td><?= $pro['descrip'];?> </td>

                    <td> <img src="upload/<?=  $pro['img'];?>" alt="img" height="200px">  
                    </td>
                    <td><?= $pro['admin_id'];?></td>
                    <td><?= $pro['price'];?></td>
                    <td><?= $pro['category'];?></td>
                    <td> <a class="btn btn-secondary" href="update.php?proid= <?= $pro['id'];?> ">update</a></td>
                    <td><a href="deleteproduct.php?proid= <?= $pro['id'];?> " class="btn btn-danger">delete</a></td>
                  </tr>
                  <?php   endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>name of product</th>
                    <th>img</th>
                    <th>last admin modify</th>
                    <th>price</th>
                    <th>category</th>
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>





    























    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <footer class="main-footer">
    <strong>Copyright &copy; 5-5-2021 .</strong>
    All rights reserved.
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="backassets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="backassets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="backassets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="backassets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="backassets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="backassets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="backassets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="backassets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="backassets/plugins/moment/moment.min.js"></script>
<script src="backassets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="backassets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="backassets/plugins/summernote/summernote-bs4.min.js"></script>


<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<!-- overlayScrollbars -->
<script src="backassets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="backassets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="backassets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="backassets/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="backassets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="backassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="backassets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="backassets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="backassets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="backassets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>