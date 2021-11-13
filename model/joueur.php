<?php

class joueur
{


    private int $idJoueur;
    private int $nbEtoileprise;


    public function __construct($idJoueur,$nbEtoileprise)
    {

        $this->idJoueur =$idJoueur;
        $this->nbEtoileprise=$nbEtoileprise;
    }

public function getIdJoueur():int{
    return $this->idJoueur;


}
public function setIdJoueur(int $idJo):void{
    $this->idJoueur = $idJo;
}


public function getNbEtoileprise():int{
    return $this->nbEtoileprise;

}

public function setNbEtoileprise(int $nbEtoileprise):void{
     $this->nbEtoileprise=$nbEtoileprise;

}


}





?>