<?php
session_start(); 


$id = $_SESSION['go']['id'];
$name = $_SESSION['go']['name'];
$email = $_SESSION['go']['email'];
$city = $_SESSION['go']['city'];
$street = $_SESSION['go']['street'];
$phone = $_SESSION['go']['phone'];




$con = mysqli_connect("localhost","root","","store");

$sql = "SELECT * FROM `viewbuynow`"; 

$q =  mysqli_query($con,$sql); 
$prod = []; 

while ($res= mysqli_fetch_assoc($q)){

$prod []=$res ; 





}

$data = $prod ; 
//print_r($data) ; die ; 
foreach($data as $pro ){
$p_name = $pro['descrip']; 
$p_img = $pro['img']; 
$p_q = $pro['quantity']; 
$cat = $pro['category'];
$t_price = $pro['price']*$pro['quantity']; 
$date = date("Y/m/d"); 
$month = date('F'); 

$sql = "INSERT INTO `orders`( `user_name`, `p_name`, `p_img`, `quantity`, `total_price`, `email`, `city`, `street` , `category` , `date` , `month`) VALUES ('$name','$p_name','$p_img','$p_q','$t_price','$email','$city','$street','$cat' ,'$date' ,'$month') "; 

mysqli_query($con,$sql); 

$res = mysqli_affected_rows($con); 

if ( $res== 1){
echo "ok "; 


}else{
    echo "error"; 
}

}



// $sql1 = "SELECT * FROM `viewcard` where `user_id`='id'"; 

// $q1 =  mysqli_query($con,$sql1); 
// $prod = []; 

// while ($res1= mysqli_fetch_assoc($q1)){

// $prod1 []=$res1 ; 





// }
// $data1 = $prod1 ;
 
$sql1 = "DELETE FROM `buynow` WHERE `user_id`='$id' "; 

$q1 =  mysqli_query($con,$sql1); 

$res1 = mysqli_affected_rows($com);



if($res1==1){
header("LOCATION:sss/motaha.php");


}else{
    header("LOCATION:sss/motaha.php");

}
  





?>




