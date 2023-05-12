<?php
session_start(); 

$info= $_GET['proid'];
$user_id = $_SESSION['go']['id'];
  
 

// if(empty($_SESSION['go'])){
//   header("LOCATION:../userlogin.php"); 
  
//   }

$con = mysqli_connect("localhost","root","","store");

$sql = "SELECT * FROM `insert` where `id` = '$info'"; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 




}

$data = $prod ; 

//print_r($data); 


// print_r($_SESSION['go']['email']); die;
 
$sql2 = "SELECT * FROM `card` where `p_id` = '$info' and `user_id`='$user_id'"; 

$q2 =  mysqli_query($con,$sql2); 
$prod2 = []; 

while ($res2= mysqli_fetch_assoc($q2)){

$prod2 []=$res2 ; 


}


$data2 = $prod2 ;


if(empty($data2)){
 echo $info;
 echo $user_id;

$sql1 = " INSERT INTO `card` (`p_id`, `user_id`, `quantity`) VALUES ('$info','$user_id' , '1') "; 

mysqli_query($con,$sql1); 

$res1 = mysqli_affected_rows($con); 

// if($_GET['c']==1){

//     header("LOCATION:sss/viewcard.php");

// }



if ( $res1== 1){
    header("LOCATION:sss/motaha.php");



}else{
    echo "error11"; 
}
} else {
   
   $quantity1 = $data2[0]['quantity'] ; 
  
   $quantity1 =$quantity1 + 1 ; 
   
    $sql5 = "UPDATE `card` SET `quantity`='$quantity1' WHERE `p_id`='$info' and `user_id`='$user_id'";
    $q5 =  mysqli_query($con,$sql5); 

$res5 = mysqli_affected_rows($con);
 
header("LOCATION:sss/motaha.php");
}







?>












