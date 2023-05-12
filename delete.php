<?php
session_start(); 




$con = mysqli_connect("localhost","root","","store");

$sql = "DELETE FROM `buynow`   "; 

$q =  mysqli_query($con,$sql); 

$res = mysqli_affected_rows($com);



if($res==1){
header("LOCATION:sss/motaha.php");


}else{
    header("LOCATION:sss/motaha.php");

}



  
 
  