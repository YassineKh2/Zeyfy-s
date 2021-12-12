<?php 
//getting data from db
$conn = mysqli_connect("localhost","root","","educaplay");

//geting data from crossword table
$result = mysqli_query($conn, "SELECT * FROM `crossword` ");
// WHERE idjeux=1
//storing in array
$data= array();
// 2 req / req tjyb feha id lettre w lettre w thothom f array / req indice indice/
while($row = mysqli_fetch_assoc($result))
{
    $cross=array();
    $cross["idLettre"]= $row["idLettre"];
    $cross["lettre"]= $row["lettre"];
    $cross["idIndice"]= $row["idIndice"];
    $cross["Indice"]= $row["Indice"];
   
    array_push($data,$cross);
    
}

//returning reponse in json format

echo json_encode($data);
?>