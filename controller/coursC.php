<?php
session_start();
include_once("../config.php");
include '../model/cours.php';
class CoursC {
    function affichercours($idF){
        $sql="SELECT * FROM cours where idFormation='$idF'";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
}
?>