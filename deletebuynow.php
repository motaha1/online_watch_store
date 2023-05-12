<?php
session_start(); 

$idd=$_GET['proid'];


$con = mysqli_connect("localhost","root","","store");

$sql = "DELETE FROM `buynow` WHERE `p_id`='$idd' "; 

$q =  mysqli_query($con,$sql); 

$res = mysqli_affected_rows($com);



if($res==1){
header("LOCATION:buynow.php");


}else{
    header("LOCATION:buynow.php");

}



  
 
  





?>