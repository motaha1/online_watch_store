<?php


//include 'lib/user.php';


if(isset($_POST['name'])){

$name = $_POST['name']; 
$email = $_POST['email'];
$pass = $_POST['pass']; 
$city= $_POST['city']; 
$street = $_POST['street']; 
$phone= $_POST['phone']; 

$con = mysqli_connect("localhost","root","","store");

$sql = "INSERT INTO `customer`( `name`, `email`, `pass`, `city`, `street`, `phone`) VALUES ('$name' , '$email' ,'$pass' ,'$city' ,'$street' ,'$phone') "; 

mysqli_query($con,$sql); 

$res = mysqli_affected_rows($con); 

if ( $res== 1){
echo "ok "; 
header("LOCATION:sss/motaha.php");

}else{
    echo "error"; 
}
}

//header("LOCATION:home.php"); 








?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/backassets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="sss/css/cs3.css">
  <link rel="stylesheet" href="sss/css/all.css">
  <link rel="stylesheet" href="sss/css/cs2.css">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="dashboard/backassets/plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="dashboard/backassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dashboard/backassets/dist/css/adminlte.min.css">
<link rel="stylesheet" href="sss/css/cs3.css">
<link rel="stylesheet" href="sss/css/all.css">
</head>
<body>
    <section class="sec1">
    <div class="register-box">
  

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new user</p>

      <form action="userreg.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="city" name="city">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="street" name="street">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="phone" name="phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div class="row">
    
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

 

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
     </section>







<section class="sec2">

    <header>
        <div class="container">
            <div class="row">
               
                <img class="sec-imgg" src="sss/images/watch.png" alt="">
            </div>

        </div>
     </header>



     <script src="dashboard/backassets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dashboard/backassets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dashboard/backassets/dist/js/adminlte.min.js"></script>



</section>
</body>
</html>
