<?php

include_once('C:\xampp\htdocs\educaplay\config.php');
include 'C:\xampp\htdocs\educaplay\model\cours.php';
class CoursC {
    function affichercours(){
        $sql="SELECT * FROM cours";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajoutercours($cours){

        $sql = "INSERT INTO cours (nomCours,dateCreationCours, dateModificationCours, idFormation,contenuCours,image)
                  VALUES (:nomCours, :dateCreationCours, :dateModificationCours, :idFormation, :contenuCours, :image)";
     $db = config::getConnexion();
     try{
         $query = $db->prepare($sql);
         $query->execute([
             'nomCours'=> $cours->getnomCours(),
             'dateCreationCours'=> $cours->getdateCreationCours(),
             'dateModificationCours'=> $cours->getdateModificationCours(),
             'idFormation'=> $cours->geturl(),
             'contenuCours'=> $cours->getcontenuCours(),
             'image'=> $cours->getimage()
         ]);
         $_SESSION['error']="data add seccsesfuly";
         header("Location:profile.php?statut=tout&categ=tout&tem=0");
 } catch (Exception $e){
     $e->getMessage();
 }
 
     }
}

?>