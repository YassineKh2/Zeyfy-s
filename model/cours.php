<?php
class Formation
{ 
    private string $idCours ;
    private string $nomCours;
    private string $dateCreationCours;
    private string $dateModificationCours;
    private string $url;
    private string $contenuCours;
    private string $statut;
    private string $image;
public function __construct($d,$f,$t,$de,$p,$i){
    $this->nomCours = $d;
    $this->dateCreationCours = $f;
    $this->dateModificationCours = $t;
    $this->url= $de;
    $this->contenuCours= $p;
    $this->image= $i;
}
public function getidCours (){
    return $this->idCours  ;
}
public function getnomCours(){
    return $this->nomCours ;
}
public function getdateCreationCours(){
    return $this->dateCreationCours ;
}
public function getdateModificationCours(){
    return $this->dateModificationCours ;
}
public function geturl(){
    return $this->url ;
}
public function getcontenuCours(){
    return $this->contenuCours ;
}
public function getimage(){
    return $this->image ;
}

public function setnomCours($nomCours){
    $this->nomCours = $nomCours ;
}
public function setdateCreationCours($dateCreationCours){
    $this->dateCreationCours = $dateCreationCours ;
}
public function setdateModificationCours($dateModificationCours){
    $this->dateModificationCours = $dateModificationCours ;
}
public function seturl($url){
    $this->url = $url ;
}
public function setcontenuCours($contenuCours){
    $this->contenuCours = $contenuCours ;
}
public function setimage($image){
    $this->image = $image ;
}
}
?>