<?php
include '../Controller/OffreC.php';
$idOffre = $_POST["idOffre"];
$offreC = new OffreC();
if(
    isset($_POST['dateDebutOffre']) && !empty($_POST['dateDebutOffre'])
    &&isset($_POST['pourcentageOffre']) && !empty($_POST['pourcentageOffre'])
    &&isset($_POST['dateFinOffre']) && !empty($_POST['dateFinOffre'])
){
    $offres = new offres($_POST['dateDebutOffre'],$_POST['pourcentageOffre'],$_POST['dateFinOffre']);
    $offreC->modifierOffre($offres,$idOffre);
}else{ 
    echo 'el forum mazelll na9esss hooooooooooooooy';
    header('Location: dashboard2.php');
}
?>