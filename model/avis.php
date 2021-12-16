<?php
class avis
{ 
    private string $idAvis ;
    private string $contenu;
    private string $reclamation;
    private string $dateAvis;
    private string $nbrN;
    private string $idUtilisateur;
    private $note;
public function __construct($n,$p,$m,$f,$s,$l){
   
    $this->contenu = $n;
    $this->reclamation = $p;
    $this->dateAvis = $m;
    $this->nbrN = $f;
    $this->note = $s;
    $this->idUtilisateur = $l;
}
public function getidAvis(){
    return $this->idAvis ;
}
public function getcontenu(){
    return $this->contenu ;
}
public function getreclamation(){
    return $this->reclamation ;
}
public function getdateAvis(){
    return $this->dateAvis ;
}
public function getnbrN(){
    return $this->nbrN ;
}
public function getidUtilisateur(){
    return $this->idUtilisateur ;
}
public function getnote(){
    return $this->note ;
}



public function setidAvis(){
    $this->contenu = $idAvis ;
}
public function setcontenu(){
    $this->contenu = $contenu ;
}
public function setreclamation(){
    $this->reclamation = $reclamation ;
}
public function setdateAvis(){
    $this->dateAvis = $dateAvis ;
}
public function setnbrN(){
    $this->nbrN = $nbrN ;
}
public function setidUtilisateur(){
    $this->idUtilisateur = $idUtilisateur ;
}
public function setnote(){
    $this->note = $note ;
}
}
?>