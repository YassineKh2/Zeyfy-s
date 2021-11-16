<?php
include '../controller/FormationC.php';
$id_formation = $_GET["id_formation"];
$formationC=new FormationC();
if(
    isset($_POST['name']) && !empty($_POST['name'])
    &&isset($_POST['formation']) && !empty($_POST['formation'])
    &&isset($_POST['prix']) && !empty($_POST['prix'])
    &&isset($_POST['description']) && !empty($_POST['description'])
    &&isset($_POST['file']) && !empty($_POST['file'])
){
    $formation = new Formation($_POST['name'],$_POST['name'],$_POST['formation'],$_POST['prix'],$_POST['description'],$_POST['description'],$_POST['file']);
    $formationC->modifierformations($id_formation, $formation);
}
else
echo 'el forum mazelll na9esss hooooooooooooooy';
header('Location: AfficherListeFormationEC.php');
?>