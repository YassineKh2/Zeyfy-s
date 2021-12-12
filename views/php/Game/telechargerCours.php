<?php

$url = $_GET["url"]; 
$fichier_nom = basename($url);
$fichier_contenu = file_get_contents($url);
$dossier_enregistrement = "level1";

if(file_put_contents($dossier_enregistrement.'.docx', $fichier_contenu)) 
{ 
    echo "Fichier téléchargé avec succès"; 
} 
else 
{ 
    echo "Fichier non téléchargé"; 
} 
?>