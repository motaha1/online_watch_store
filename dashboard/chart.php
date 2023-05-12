<?php

if(isset($_POST['bmonth'])){


$servername = "localhost";
$username = "root";
$password = "";
$db = "store";
$bmonth = $_POST['bmonth'];
$cat = $_POST['cat'];

try{
    $dbcon = new PDO("mysql:host={$servername};dbname={$db}",$username,$password);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    die($ex->getMessage());
}

if($bmonth=="all_month"){
$stmt=$dbcon->prepare("SELECT * FROM chartall_month");
$stmt->execute();
$json=[];
$json2=[];

$user_name ="";
$total_price =null;
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $json[]=$category;
    $json2[]=(double)$quantity ;
}}
else {
  $stmt=$dbcon->prepare("SELECT * FROM chartview where `month`='$bmonth'");
  $stmt->execute();
  $json=[];
  $json2=[];
  
  $user_name ="";
  $total_price =null;
  while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
      $json[]=$category;
      $json2[]=(double)$quantity ;
  }


}




}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>clock store chart </title>
</head>
<style>
#p-inside{
  color:red;
  font-size:18px;
  margin-left: 10px;
}
#formo{
  margin-left: 23px;
margin-top: 9px;
}

</style>
<body>

<td> <a class="btn btn-secondary" href="home.php">return to admin dashboard</a></td>
<form action="chart.php"  method="post" enctype="multipart/form-data" id="formo">

<label for="">month:</label>
<select name="bmonth">
<option value='all_month'>all month</option>
  <option value='January'>January</option>
  <option value='February'>February </option>
  <option value='March'>March</option>
  <option value='April'>April</option>
  <option value='May'>May</option>
  <option value='June'>June</option>
  <option value='July'>July</option>
  <option value='August'>August</option>
  <option value='September'>September</option>
  <option value='October'>October</option>
  <option value='November'>November</option>
  <option value='December'>December</option>
</select>
<br>
<label for="">type:</label>

<select name="cat" id="">

<option value='pie'>pie </option>
<option value='doughnut'>doughnut </option>
  <option value='horizontalBar'>horizontalBar </option>
  
  <option value='line'>line </option>
  
  <option value='bar'>bar</option>
</select>

<div class="card-footer">
                  <button type="submit" class="btn btn-primary">select</button>
                </div>


</form>
<br>
<?php if(isset($_POST['bmonth'])):?>
<p id="p-inside">
you select :<?php echo $bmonth; ?>
<p id="p-inside">
with category :<?php echo $cat; ?></p>


</p>
<?php endif;?>
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>




  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';


    

    let massPopChart = new Chart(myChart, {
      type:'<?php echo $cat; ?>', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels: <?php echo json_encode($json) ; ?>,
        datasets:[{
          label:'clock categories',
          data:<?php echo json_encode($json2); ?>,
          //backgroundColor:'green',
    
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Most types of watches to buy',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
</body>
</html>

</html>



