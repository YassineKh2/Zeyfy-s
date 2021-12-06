<?php
session_start();
include_once("../config.php");
include '../model/Enseigant.php';
class EnseigantC {
    function afficherenseignants(){
        $sql="SELECT * FROM enseignant";
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