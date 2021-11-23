<?php
	include '../config.php';
	include_once '../model/avis.php';

class avisC{
    function ajouteravis($avis){
        $sql="INSERT INTO avis (contenu,reclamation,dateAvis,typeAvis) 
        VALUES (:contenu,:reclamation,:dateAvis,:typeAvis)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
               
                'contenu' => $avis->getcontenu(),
                'reclamation' => $avis->getreclamation(),
                'dateAvis' => $avis->getdateAvis(),
                'typeAvis' => $avis->gettypeAvis(),
                

            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function afficheravis(){
        $sql="SELECT * FROM avis";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }


    function supprimeravis($idAvis){
        $sql="DELETE FROM avis WHERE idAvis=:idAvis";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idAvis', $idAvis);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
    
    
}




















?>