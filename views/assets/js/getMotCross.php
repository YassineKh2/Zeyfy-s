<?php
$conn = mysqli_connect("localhost","root","","educaplay");


$qty=76;
echo $_POST["1"];
// $arr=array($qty);
//  for($j=1;$j<=$qty;$j++){
//      array_push($arr,$_POST[$j]);
//  }
//  echo $arr;
$data=array();
foreach($_POST as $key => $val) {

    $data[$key] = $val; //This array holds all post data now.
    
    }
$output=json_encode($data);
echo $output;
for($i=1;$i<= $qty;$i++){
    $sql = "INSERT INTO `crossword` (idLettre,lettre) VALUES($i,'$data[$i]') ";
    $result=mysqli_query($conn,$sql);
 }
echo "$qty";
echo "$sql";
?>