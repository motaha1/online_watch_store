<?php

session_start();
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $pass = $_POST['pass']; 
  $con = mysqli_connect("localhost","root","","store");

  $sql = "SELECT * FROM `customer` WHERE  `email` = '$email' && `pass`='$pass'"; 
  
  





  $q = mysqli_query($con,$sql); 
  $res = mysqli_fetch_assoc($q);
if(!empty($res)){
echo "ok"; 
  $_SESSION['go']=$res;
  header("LOCATION:sss/motaha.php");
}else{
  echo "email or password wrong"; 
  //header("LOCATION:login.php");
}
  }










?>















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="dashboard/backassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/backassets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="sss/css/cs2.css">
  <link rel="stylesheet" href="sss/css/cs3.css">
  <link rel="stylesheet" href="sss/css/all.css">


</head>
<body>
<body>
    <section class="sec1">
      <div class="box">
        <div class="form">
          <h2>Login</h2>
          <form action="userlogin.php" method="post" >
            <div class="inputbx">
              <input type="email" placeholder="Username" name="email" >
              <i class="fas fa-user-alt"></i>      
                  </div>
            <div class="inputbx">
              <input type="password" placeholder="password" name="pass">
              <i class="fas fa-lock"></i>

            </div>
            <a style="color:white; font-size:15px;" href="userreg.php">register now
</a> 
            <br>                    <br>

            <div class="inputbx in1">
              <!-- <label></label> -->
              <input type="submit" value="Login" >
            </div>
          </form>

        </div>
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







</section>
</body>
</html>