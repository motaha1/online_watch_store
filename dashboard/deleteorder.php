<?php
session_start(); 

$idd=$_GET['proid'];

$con = mysqli_connect("localhost","root","","store");

$sql = "DELETE FROM `orders` WHERE `order_id`='$idd' "; 

$q =  mysqli_query($con,$sql); 

$res = mysqli_affected_rows($con);



if($res==1){
  
header("LOCATION:showorders.php");


}else{
    

    header("LOCATION:showorders.php");

}



  
 
  





?>