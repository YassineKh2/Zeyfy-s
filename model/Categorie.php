<?php
class categorie
{
    private $NomCategorie=null;
    private $IdCategorie=null;
    private $NomOffre=null;
   
    function __construct($NomCategorie, $NomOffre){
        $this->NomCategorie=$NomCategorie;
        $this->NomOffre=$NomOffre;
    }

    function getNomCategorie(){
        return $this->NomCategorie;
    }
    function getIdCategorie(){
        return $this->IdCategorie;
    }
    function getNomOffre(){
        return $this->NomOffre;
    }
  
    function setNomCategorie(string $NomCategorie){
        $this->NomCategorie=$NomCategorie;
    }


    function setNomOffre(string $NomOffre){
        $this->NomOffre=$NomOffre;
    }
  
}

?>