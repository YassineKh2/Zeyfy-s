<?php

class enseignant{ 
    private $id=null;
    private $etude=null;
    private $cv=null;
    function __construct($id,$etude,$cv){
		$this->id=$id;
		$this->etude=$etude;
        $this->cv=$cv;
            }
function getEtude(){
    return $this->etude;
}
function getId(){
    return $this->id;
}
function getCv(){
    return $this->cv;
}
}
?>