<?php
class categorie
{
    private $NomCategorie=null;
    private $IdCategorie=null;
    private $idJeux=null;
    private $idOffre=null;
   
    function __construct($NomCategorie, $idJeux, $idOffre){
        $this->NomCategorie=$NomCategorie;
        $this->idJeux=$idJeux;
        $this->idOffre=$idOffre;
    }

    function getNomCategorie(){
        return $this->NomCategorie;
    }
    function getIdCategorie(){
        return $this->IdCategorie;
    }
    function getidJeux(){
        return $this->idJeux;
    }
    function getidOffre(){
        return $this->idOffre;
    }
  
    function setNomCategorie(string $NomCategorie){
        $this->NomCategorie=$NomCategorie;
    }

    function setidJeux(string $idJeux){
        $this->idJeux=$idJeux;
    }
    function setidOffre(string $idOffre){
        $this->idOffre=$idOffre;
    }
  
}

?>