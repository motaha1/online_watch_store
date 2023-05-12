<?php
session_start(); 


$con = mysqli_connect("localhost","root","","store");

$sql = "SELECT * FROM `insert`"; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

  
 
  





?>


















<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>index</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto:100,300,400,700,900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 10]>      <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>      <script src="js/html5shiv.min.js"></script>    <![endif]-->
</head>
<style>
/* #btn-card2{
  position: relative;
  bottom:20px;
  left:20px;
  border-bottom: 1px white solid;

} */

.div-a-up{
position: absolute;
top:10px;
right:20px;
z-index: 4;
color:white;
}
.div-a-up2{
position: absolute;
top:10px;
right:110px;
z-index: 4;
color:white;
border:1px white solid;
}
.div-a-up3{
position: absolute;
top:10px;
right:200px;
z-index: 4;
color:white;
/* border:1px white solid; */
}
.div-a-up a ,.div-a-up2 a ,.div-a-up3 a{
position: absolute;
top:30px;
right:20px;
z-index: 4;
color:white;
}
.div-a-up a:hover ,.div-a-up2 a:hover ,.div-a-up3 a:hover{
  border-bottom: 1px white solid;
  color:red;
}

.osama-a{
  position: relative;
z-index: 3;
}


</style>

<body>
  <div class="page-loader">
   
    <div class="page-loader-body">
      <div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
  </div>
  <div class="page text-center">
    <section class="section section-md vide_bg bg-gray-dark " data-vide-bg="mp4: video/webproj.mp4, poster: video/video-lg" data-vide-options="posterType: detect">
      <div class="container">
        <div class="row spacing-30">
          <div class="col-12">
            <div class="jumbotron-custom jumbotron-custom-variant-2 context-dark">
              <hr class="divider-sm divider-success" data-caption-animate="fxRotateInLeft" data-caption-delay="50">
              <h1 data-caption-animate="fxRotateInRight" data-caption-delay="150">welcome to our site</h1>
              <p class="subtitle-variant-3" data-caption-animate="fxRotateInLeft" data-caption-delay="350">you can now buy our product</p> <a class="btn btn-white-outline btn-lg btn-aqil btn-aqil--mod-1" href="motaha.php" data-caption-animate="fxRotateInRight" data-caption-delay="550"> <span>buy now</span> </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>




  <section class="section section-lg bg-default novi-background bg-image">
      <div class="container">
        <div class="row spacing-40">
          <div class="col-sm-10 col-lg-8 col-xl-12">
            <h3 class=""><span data-novi-id="0"> <span style="color: red; font-weight: bold;" >Some </span><span data-novi-id="2">of our</span> <span data-novi-id="1">product</span></span></h3>
          </div>
          <div class="col-12">
            <div class="owl-carousel-centered">
              <div class="owl-carousel" data-items="1" data-sm-items="3" data-stage-padding="0" data-loop="true" data-margin="10" data-lg-margin="15" data-mouse-drag="false" data-center="true" data-numbering="#owl-numbering-1" data-nav="true">

                   
              <?php foreach($data as $pro) :     ?>

<div class="item"> <img src="../dashboard/upload/<?= $pro['img'] ;?>" alt="" width="369" height="328"> </div>


<?php endforeach;      ?>
          
              </div>
              <div class="owl-numbering owl-numbering-default" id="owl-numbering-1">
                <div class="numbering-current"> </div>
                <div class="numbering-separator"></div>
                <div class="numbering-count"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




<span id="here"></span>

    <section class="section section-lg bg-gray-light novi-background bg-image">
      <div class="container">
        <div class="row justify-content-center spacing-30">
          <div class="col-sm-10 col-lg-8 col-xl-6"> <a href="#" class="banner-box banner-box-variant-3">
              <figure class="wow fadeInUpSmall"> <img src="images/a.jpg" alt="" width="567" height="381"> </figure>
              <div class="caption">
                <h6 class="wow fadeInLeftSmall">Coming Soon</h6>
                <h2 class="wow fadeInLeftSmall" data-wow-delay=".2s">special discount in eid</h2>
              </div>
              <p class="banner-sale-block wow fadeInDown" data-wow-delay=".3s"> <span></span><span class="text-ubold">50%</span><span>off </span></p>
            </a> </div>
          <div class="col-sm-10 col-lg-8 col-xl-6"> <a href="#" class="banner-box banner-box-variant-3">
              <figure class="wow fadeInUpSmall"> <img src="images/b.jpg" alt="" width="567" height="381"> </figure>
              <div class="caption">
                <h6 class="wow fadeInLeftSmall">Coming Soon</h6>
                <h2 class="wow fadeInLeftSmall" data-wow-delay=".2s">special discount in eid</h2>
              </div>
              <p class="banner-sale-block wow fadeInDown" data-wow-delay=".3s"> <span></span><span class="text-ubold">50%</span><span>off</span></p>
            </a> </div>
        </div>
      </div>
    </section>





   











    

  

  <section class="section section-lg bg-default novi-background bg-image">
      <div class="container">
        <div class="row justify-content-center spacing-40">
          <div class="col-12">
            <h3> <span class="heading-3">Team</span> Members</h3>
          </div>
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="thumbnail-variant-3 unit unit-xs-horizontal unit-spacing-md unit-xs-middle">
              <div class="unit-left"> <img class="thumbnail-image" src="images/taha.jpg" alt="" width="141" height="199"> </div>
              <div class="unit-body thumbnail-body"> <a class="thumbnail-title" href="#">Mohamamd Taha</a>
                <p class="thumbnail-subtitle">full stack</p>
                <hr class="thumbnail-divider">
                <ul class="inline-list-xs thumbnail-list">
                <li> <a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa " href="#"><img src="images/facebook.svg" alt=""> </a> </li>
                  <li> <a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa " href="#"><img src="images/twitter.svg" alt=""></a> </li>
                  <li> <a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa " href="#"><img src="images/instagram.svg" alt=""></a> </li>
              
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="thumbnail-variant-3 unit unit-xs-horizontal unit-spacing-md unit-xs-middle">
              <div class="unit-left"> <img class="thumbnail-image" src="images/osama.jpg" alt="" width="141" height="199"> </div>
              <div class="unit-body thumbnail-body"> <a class="thumbnail-title" href="#">Osama ismael</a>
                <p class="thumbnail-subtitle">front end</p>
                <hr class="thumbnail-divider">
                <ul class="inline-list-xs thumbnail-list">
                  <li> <a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 " href="#"><img src="images/facebook.svg" alt=""> </a> </li>
                  <li> <a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa " href="#"><img src="images/twitter.svg" alt=""></a> </li>
                  <li> <a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa " href="#"><img src="images/instagram.svg" alt=""></a> </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <span id="ho"></span>

    <section class="section pre-footer-minimal bg-gray-dark novi-background bg-image">
        <div class="pre-footer-minimal-inner">
          <div class="container text-center text-sm-left">
            <div class="row justify-content-sm-center spacing-55">
              <div class="col-sm-4 col-lg-3">
                <h4>Opening Hours</h4>
                <dl class="terms-list-inline"> <dt>Week Days</dt>
                  <dd>08:00am–7:30pm</dd>
                </dl>
                <dl class="terms-list-inline"> <dt>Sunday, Saturday</dt>
                  <dd>08:00am–4:00pm</dd>
                </dl>
              </div>
              <div class="col-sm-4 col-lg-2">
                <h4>Phone</h4>
                <ul class="list-xxs">
                  <li>+970595098590</li>
                  <li class=""><span data-novi-id="3">motaha@engineer.com</span></li>
                </ul>
              </div>
              <div class="col-sm-4 col-lg-3">
                <h4>Address</h4> <address class="reveal-inline-block" style="max-width: 215px;">
                  <p>an-najah university , palestine , nablus</p>
                </address>
              </div>
            </div>
          </div>
          <a href="../dashboard/login.php" class="btn btn-danger " id="btn-card2">Admin</a>

        </div>
        <div class="container">
          <hr class="gray">
        </div>
      </section>
















      <div class="div-a-up"><a href="#ho">Contact</a></div>             
      <div class="div-a-up2"><a href="#here">Offers</a></div>   
         <div class="div-a-up3"><a href="motaha.php">Buy</a></div>      




  <div class="snackbars" id="form-output-global"></div>
  <script async="" src="https://www.youtube.com/iframe_api"></script>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>