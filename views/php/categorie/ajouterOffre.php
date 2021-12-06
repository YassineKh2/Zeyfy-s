<?php
include '../../../controller/OffreC.php';
$offreC=new OffreC();

if(
    isset($_POST['NomOffre']) && !empty($_POST['NomOffre'])
    &&isset($_POST['dateDebutOffre']) && !empty($_POST['dateDebutOffre'])
    &&isset($_POST['pourcentageOffre']) && !empty($_POST['pourcentageOffre'])
    &&isset($_POST['dateFinOffre']) && !empty($_POST['dateFinOffre'])
){
    $offres = new offres($_POST['NomOffre'],$_POST['dateDebutOffre'],$_POST['pourcentageOffre'],$_POST['dateFinOffre']);
    $offreC->ajouterOffre($offres);
}
else
{
echo 'Erreur';
header('Location:dashboard2.php');
}
?>
