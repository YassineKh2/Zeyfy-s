<?php
include '../controller/FormationC.php';
$id_formation = $_POST["id_formation"];
$formationC=new FormationC();
if(
    isset($_POST['radioo'])
){
    $formation = new Formation($_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo']);
    if($_POST['radioo']=='acceptée')
    {
    $formationC->modifierstatutA($id_formation, $formation);
    header('Location: dashFormation.php');
    }
    else if($_POST['radioo']=='refusée')
    {
    $formationC->modifierstatutR($id_formation, $formation);
    header('Location: dashFormation.php');
    }
}
else
header('Location: dashFormation.php');
?>