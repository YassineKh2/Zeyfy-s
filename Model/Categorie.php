<?php
class categorie
{
    private $NomCategorie=null;
    private $IdCategorie=null;
    private $idOffre=null;
   
    function __construct($NomCategorie, $idOffre){
        $this->NomCategorie=$NomCategorie;
        $this->idOffre=$idOffre;
    }

    function getNomCategorie(){
        return $this->NomCategorie;
    }
    function getIdCategorie(){
        return $this->IdCategorie;
    }
    function getidOffre(){
        return $this->idOffre;
    }
  
    function setNomCategorie(string $NomCategorie){
        $this->NomCategorie=$NomCategorie;
    }


    function setidOffre(string $idOffre){
        $this->idOffre=$idOffre;
    }
  
}

?>