<?php
class Formation
{ 
    private string $id_formation;
    private string $date_c;
    private string $filiere;
    private string $titre_f;
    private string $descreptions;
    private string $prix_f;
    private string $statut;
    private string $image;
public function __construct($d,$f,$t,$de,$p,$s,$i){
    $this->date_c = $d;
    $this->filiere = $f;
    $this->titre_f = $t;
    $this->descreptions= $de;
    $this->prix_f= $p;
    $this->statut= $s;
    $this->image= $i;
}
public function getid_formation(){
    return $this->id_formation ;
}
public function getdate_c(){
    return $this->date_c ;
}
public function getfiliere(){
    return $this->filiere ;
}
public function gettitre_f(){
    return $this->titre_f ;
}
public function getdescreptions(){
    return $this->descreptions ;
}
public function getprix_f(){
    return $this->prix_f ;
}
public function getstatut(){
    return $this->statut ;
}
public function getimage(){
    return $this->image ;
}



public function setdate_c($date_c){
    $this->date_c = $date_c ;
}
public function setfiliere($filiere){
    $this->filiere = $filiere ;
}
public function settitre_f($titre_f){
    $this->titre_f = $titre_f ;
}
public function setdescreptions($descreptions){
    $this->descreptions = $descreptions ;
}
public function setprix_f($prix_f){
    $this->prix_f = $prix_f ;
}
public function setstatut($statut){
    $this->statut = $statut ;
}
public function setimage($image){
    $this->image = $image ;
}
}
?>