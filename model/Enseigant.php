<?php
class Enseigant
{ 
    private string $id_enseignant ;
    private string $nom_enseignant;
    private string $prenom_enseignant;
    private string $mdp_enseignant;
    private string $fonctionalite;
    private string $email;
public function __construct($n,$p,$m,$f,$e){
    $this->nom_enseignant = $n;
    $this->prenom_enseignant = $p;
    $this->mdp_enseignant = $m;
    $this->fonctionalite = $f;
    $this->email = $e;
}
public function getid_enseignant (){
    return $this->id_enseignant  ;
}
public function getnom_enseignant(){
    return $this->nom_enseignant ;
}
public function getprenom_enseignant(){
    return $this->prenom_enseignant ;
}
public function getmdp_enseignant(){
    return $this->mdp_enseignant ;
}
public function getfonctionalite(){
    return $this->fonctionalite ;
}
public function getemail(){
    return $this->email ;
}




public function setnom_enseignant(){
    $this->nom_enseignant = $nom_enseignant ;
}
public function setprenom_enseignant(){
    $this->prenom_enseignant = $prenom_enseignant ;
}
public function setmdp_enseignant(){
    $this->mdp_enseignant = $mdp_enseignant ;
}
public function setfonctionalite(){
    $this->fonctionalite = $fonctionalite ;
}
public function setemail(){
    $this->email = $email ;
}
}
?>