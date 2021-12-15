<?php
$l=$_GET['level'];
$url = $_GET["url"]; 
$fichier_nom = basename($url);
$fichier_contenu = file_get_contents($url);
$dossier_enregistrement = 'level'.$l;

if(file_put_contents($dossier_enregistrement.'.docx', $fichier_contenu)) 
{ 
    
} 
else 
{ 
    
} 
header('Location:level'.$l.'.php?id_formation='.$_GET['id_formation'].'&IdCategorie='.$_GET['IdCategorie'].'&level='.$l.'');
?>