<?php

class utilisateur{
    private $nom=null;
    private $prenom=null;
    private $email=null;
    private $mdp=null;   
    private $username=null;
    private $id=null;
    private $etat=null;
    private $date=null;
    private $img=null;
    private $sex=null;
    private $typee=null;
    function __construct($nom, $prenom, $mdp, $email, $username,$sex,$typee){
		$this->nom=$nom;
		$this->prenom=$prenom;
        $this->mdp=$mdp;
        $this->email=$email;
        $this->username=$username;
        $this->sex=$sex;
        $this->typee=$typee;
            }
function getEmail(){
    return $this->email;
}
function getmdp(){
    return $this->mdp;
}
function getPrenom(){
    return $this->prenom;
}
function getNom(){
    return $this->nom;
}
function getId(){
    return $this->id;
}
function getEtat(){
    return $this->etat;
}
function getUsername(){
    return $this->username;
}
function getImg(){
    return $this->img;
}
function getDate(){
    return $this->date;
}
Function getSex(){
    return $this->sex;
}
Function getTypee(){
    return $this->typee;
}
}
?>