<?php
include 'C:\xampp\htdocs\educaplay\model\enseignant.php';
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
function recupererenseignant($idEnseignant){
    $sql="SELECT * from enseignant where idEnseignant=$idEnseignant";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $utilisateur=$query->fetch();
        return $utilisateur;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
}
?>