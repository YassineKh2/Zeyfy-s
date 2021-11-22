<?php
include '../Controller/CategorieC.php';
$IdCategorie = $_POST["IdCategorie"];
$categorieC=new CategorieC();
if(
    isset($_POST['NomCategorie']) && !empty($_POST['NomCategorie'])
    &&isset($_POST['idOffre']) && !empty($_POST['idOffre'])
){
    $categorie = new categorie($_POST['NomCategorie'],$_POST['idOffre']);
    $categorieC->modifierCategorie($categorie,$IdCategorie);
}else{
    echo 'el forum mazelll na9esss hooooooooooooooy';
    header('Location: dashboard.php');
}

?>