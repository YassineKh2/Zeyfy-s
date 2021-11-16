<?php
include '../controller/FormationC.php';
$formationC=new FormationC();
//date_default_timezone_set('Europe/Paris');
$date1 = date('Y-m-d');
if(
    isset($_POST['name']) && !empty($_POST['name'])
    &&isset($_POST['formation']) && !empty($_POST['formation'])
    &&isset($_POST['prix']) && !empty($_POST['prix'])
    &&isset($_POST['description']) && !empty($_POST['description'])
    &&isset($_POST['file']) && !empty($_POST['file'])
){
    $formation = new Formation($date1,$_POST['name'],$_POST['formation'],$_POST['description'],$_POST['prix'],$_POST['formation'],$_POST['file']);
    $formationC->ajouterformation($formation);
}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
//header('Location: AfficherListeAdherent.php');
}
?>