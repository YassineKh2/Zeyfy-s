<?php

include_once 'C:\xampp\htdocs\educaplay\config.php';
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