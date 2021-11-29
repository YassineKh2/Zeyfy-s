<?php
include 'C:\xampp\htdocs\Project web\config.php';
include 'C:\xampp\htdocs\Project web\models\enseignant.php';
class enseignantc{
function ajouterenseignant($enseignant){
    $sql="INSERT INTO enseignant (idEnseignant,Cv,etude) 
    VALUES (:idEnseignant,:Cv,:etude)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'idEnseignant' => $enseignant->getId(),
            'Cv' => $enseignant->getCv(),
            'etude' => $enseignant->getEtude()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}
}
?>