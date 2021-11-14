<?php

class joueur_score_jeux
 {
    private int $idJoueur;
    private int $idJeux;
    private int $score;

    public function __construct($idJoueur,$idJeux,$score)
   {
        $this->idJoueur =$idJoueur;
        $this->idJeux =$idJeux;   
        $this->score=$score;
    
    }
    public function getIdJeux():int{
        return $this->idJeux;
    }

    public function setIdJeux(int $idJe):void{
        $this->idJeux = $idJ;
    }
    
public function getIdJoueur():int{
    return $this->idJoueur;


}
public function setIdJoueur(int $idJo):void{
    $this->$idJoueur = $idJo;
}


public function getScore():int{
    return $this->score;


}
public function setScore(int $score):void{
    $this->score = $score;
}

}

 ?>