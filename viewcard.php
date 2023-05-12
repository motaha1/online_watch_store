<?php
session_start(); 


$con = mysqli_connect("localhost","root","","store");

$sql = "SELECT * FROM `viewcard`"; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 


 
$sum = 0 ; 
 foreach($data as $pro){

 $sum =($pro['price']*$pro['quantity'])+$sum;
  

 }
  
 
  





?>

















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>view card</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/backassets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/summernote/summernote-bs4.min.css">
  <style>
  body{
    /* background:green; */
  }
  #go-shopping {
background-color:#DC3545;
/* color:whit e; */
margin-left:40px;
margin-right:40px;
padding: 6px 12px;
border:1px black solid;

  }
  #go-shopping a {
color:white;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->




  <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>name of product</th>
                    <th>img</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>total price</th>
                    <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>




                  <?php 

foreach($data as $pro):


?>
                  <tr>
                    <td><?= $pro['descrip'];?> </td>

                    <td> <img src="dashboard/upload/<?=  $pro['img'];?>" alt="img" height="200px">  
                    </td>
                    <td><?= $pro['quantity'];?></td>
                    <td><?= $pro['price'];?></td>
                
                    <td><?= $pro['price']* $pro['quantity'];?></td>
                 
                    <td><a href="delete_from_card.php?proid= <?= $pro['id'];?> " class="btn btn-danger">delete</a></td>
                  </tr>
                  <?php   endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>name of product</th>
                    <th>img</th>
                    <th>quantity</th>
                    <th>price</th>
                   
                    <th>update</th>
                    <th>delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>


              <button  id="go-shopping" ><a  href="sss/motaha.php">continue shopping</a></button>



    

              <td><a href="checkout.php " onclick="myalert()" class="btn btn-danger">check out</a></td>
              <td><a href="viewcard.php " class="btn btn-success">total price : <?=$sum.'$';  ?></a></td>

+



















 
  
    

    <section class="content">
      <div class="container-fluid">
    
      </div><!-- /.container-fluid -->
    </section>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
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

<script>ح
        function myalert() {
            alert("Successfully completed! Thank you for purchasing from our store");
        }
    </script>
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
<script src="dashboard/backassets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dashboard/backassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="dashboard/backassets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="dashboard/backassets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="dashboard/backassets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="dashboard/backassets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
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