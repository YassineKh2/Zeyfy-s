<?php
class offres
{
    private $idOffre=null;
    private $dateDebutOffre=null;
    private $pourcentageOffre=null;
    private $dateFinOffre=null;
   
    function __construct($dateDebutOffre, $pourcentageOffre, $dateFinOffre){
        $this->dateDebutOffre=$dateDebutOffre;
        $this->pourcentageOffre=$pourcentageOffre;
        $this->dateFinOffre=$dateFinOffre; 
    }

    function getidOffre(){
        return $this->idOffre;
    }

    function getdateDebutOffre(){
        return $this->dateDebutOffre;
    }
  
    function getpourcentageOffre(){
        return $this->pourcentageOffre;
    }
    function getdateFinOffre(){
        return $this->dateFinOffre; 
    }
  
    function setdateDebutOffre(string $dateDebutOffre){
        $this->dateDebutOffre=$dateDebutOffre;
    }


    function setpourcentageOffre(string $pourcentageOffre){
        $this->pourcentageOffre=$pourcentageOffre;
    }
 
  
    function setdateFinOffre(string $dateFinOffre){
        $this->dateFinOffre=$dateFinOffre;
    }
  
}

?>