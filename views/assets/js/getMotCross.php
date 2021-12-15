<?php
$conn = mysqli_connect("localhost","root","","educaplay");


$qty=76;
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
    $ind="${i}i";
    $sql = "INSERT INTO `crossword` (idLettre,lettre,idIndice,Indice) VALUES($i,'$data[$i]' ,$i, '$data[$ind]') ";
    $result=mysqli_query($conn,$sql);
   
 }


 $x=1;
 echo "${x}i";
echo "$qty";
echo "$sql";

?>