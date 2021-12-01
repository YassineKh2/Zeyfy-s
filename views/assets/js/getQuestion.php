<?php
//getting data from db
$conn = mysqli_connect("localhost","root","","educaplay");

//geting data from jeux table
$result = mysqli_query($conn, "SELECT question,reponseA,reponseB,reponseC,reponseD,correctAnswer FROM `jeux`");
// WHERE idCours=1
//storing in array
$data= array();
while($row = mysqli_fetch_assoc($result))
{
    $question=array();
    $question["question"]= $row["question"];
    $question["optionA"]= $row["reponseA"];
    $question["optionB"]= $row["reponseB"];
    $question["optionC"]= $row["reponseC"];
    $question["optionD"]= $row["reponseD"];
    $question["correctOption"]= $row["correctAnswer"];
    array_push($data,$question);
    
}

//returning reponse in json format

echo json_encode($data);



?>