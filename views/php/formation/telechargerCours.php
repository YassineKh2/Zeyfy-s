<?php

include 'C:\xampp\htdocs\educaplay\controller\coursC.php';

$coursC = new CoursC();

$listeCours = $coursC->affichercours();



foreach($listeCours as $cours){
    if($_GET['id']==$cours['idFormation']){
$url = $_GET["uploads/".$cours['contenuCours']]; 
$fichier_nom = basename($url);
$fichier_contenu = file_get_contents($url);
$dossier_enregistrement = "Formation1";

if(file_put_contents($dossier_enregistrement.'.docx', $fichier_contenu)) 
{ 
    echo "Fichier téléchargé avec succès"; 
} 
else 
{ 
    echo "Fichier non téléchargé"; 
} }}
?>