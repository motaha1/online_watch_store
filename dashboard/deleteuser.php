<?php
session_start(); 

$idd=$_GET['proid'];

$con = mysqli_connect("localhost","root","","store");

$sql = "DELETE FROM `customer` WHERE `id`='$idd' "; 

$q =  mysqli_query($con,$sql); 

$res = mysqli_affected_rows($com);



if($res==1){
header("LOCATION:viewusers.php");


}else{
    header("LOCATION:viewusers.php");

}



  
 
  





?>