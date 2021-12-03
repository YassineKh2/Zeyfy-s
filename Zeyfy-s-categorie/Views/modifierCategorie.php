<?php
include '../Controller/CategorieC.php';
$IdCategorie = $_POST["IdCategorie"];
$categorieC=new CategorieC();
if(
    isset($_POST['NomCategorie']) && !empty($_POST['NomCategorie'])
    &&isset($_POST['NomOffre']) && !empty($_POST['NomOffre'])
){
    $categorie = new categorie($_POST['NomCategorie'],$_POST['NomOffre']);
    $categorieC->modifierCategorie($categorie,$IdCategorie);
}else{
    echo 'el forum mazelll na9esss hooooooooooooooy';
    header('Location: dashboard.php');
}

?>