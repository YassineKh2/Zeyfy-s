<?php
class avis
{ 
    private string $idAvis ;
    private string $contenu;
    private string $reclamation;
    private string $dateAvis;
    private string $typeAvis;
    private string $idUtilisateur;
public function __construct($n,$p,$m,$f){
   
    $this->contenu = $n;
    $this->reclamation = $p;
    $this->dateAvis = $m;
    $this->typeAvis = $f;
   
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
public function gettypeAvis(){
    return $this->typeAvis ;
}
public function getidUtilisateur(){
    return $this->idUtilisateur ;
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
public function settypeAvis(){
    $this->typeAvis = $typeAvis ;
}
public function setidUtilisateur(){
    $this->idUtilisateur = $idUtilisateur ;
}
}
?>