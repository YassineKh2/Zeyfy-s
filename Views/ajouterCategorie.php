<?php
include '../Controller/CategorieC.php';
$categorieC=new CategorieC();

var_dump($_POST['NomOffre']);

if(
    isset($_POST['NomCategorie']) && !empty($_POST['NomCategorie'])
    && isset($_POST['NomOffre']) && !empty($_POST['NomOffre'])
){
    $categorie = new categorie($_POST['NomCategorie'],$_POST['NomOffre']);
    $categorieC->ajouterCategorie($categorie);
}
else
{
echo 'Erreur test';
//header('Location: dashboard.php');
}
?>


