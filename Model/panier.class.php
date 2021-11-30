<?php 
class panier{
    public function __construct(){
        if(!isset($SESSION)){
            session_start();
        }
        if(!isset($SESSION['panier'])){
            $SESSION['panier'] = array();
        }
    }
    public function add($IdCategorie){
        $_SESSION['panier'][$IdCategorie] = 1;
    }
  
}

?>