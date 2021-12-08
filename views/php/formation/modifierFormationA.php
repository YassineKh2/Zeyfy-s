<?php
include '../../../controller/FormationC.php';
$id_formation = $_GET["id_formation"];
$formationC=new FormationC();
if(
    isset($_POST['format']) && !empty($_POST['format'])
    &&isset($_POST['formation']) && !empty($_POST['formation'])
    &&isset($_POST['prix']) && !empty($_POST['prix'])
    &&isset($_POST['description']) && !empty($_POST['description'])
    &&isset($_FILE['file']) && !empty($_FILE['file'])
){
    $formation = new Formation('',$_POST['format'],$_POST['formation'],$_POST['description'],$_POST['prix'],'',$_FILE['file']);
    $formationC->modifierformations($id_formation, $formation);
}
else
echo 'el forum mazelll na9esss hooooooooooooooy';
header('Location: profile.php?statut=tout&categ=tout&tem=0');
?>