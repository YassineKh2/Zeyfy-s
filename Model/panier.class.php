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
  
}

?>