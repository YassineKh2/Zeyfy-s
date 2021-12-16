<?php
	include_once 'C:\xampp\htdocs\educaplay\config.php';
	include_once 'C:\xampp\htdocs\educaplay\model\avis.php';
    
class avisC{
    function ajouteravis($avis){
        $sql="INSERT INTO avis (contenu,reclamation,dateAvis,nbrN,note,idUtilisateur) 
        VALUES (:contenu,:reclamation,:dateAvis,:nbrN,:note,:idUtilisateur)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
               
                'contenu' => $avis->getcontenu(),
                'reclamation' => $avis->getreclamation(),
                /*'dateAvis' => $avis->getdateAvis(),*/
                'dateAvis' => date("Y/m/d"),
                'nbrN' => 0,
                'note'=>$avis->getnote(),
                'idUtilisateur' => $avis->getidUtilisateur()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function afficheravis(){
        $sql="SELECT * FROM avis ORDER BY 	idAvis  DESC";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }


    function repondreavis($idAvis){
        //$sql="DELETE FROM avis WHERE idAvis=:idAvis";
        $sql="UPDATE avis SET repondre = 1 WHERE idAvis='$idAvis'";
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