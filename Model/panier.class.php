<?php 
class panier{

    private $DB;

    public function __construct($DB){
        if(!isset($SESSION)){
            session_start();
        }
        if(!isset($SESSION['panier'])){
            $SESSION['panier'] = array();
        }
        $this->DB = $DB;
        if(isset($_GET['removeproduct'])){
            $this->removeproduct($_GET['removeproduct']);
        }
        if(isset($_POST['panier']['quantite'])){
            $this->update();
        }
    }

    public function update(){
        foreach($_SESSION['panier'] as $IdCategorie => $quantite){
            if(isset($_POST['panier']['quantite'][$IdCategorie])){
                $_SESSION['panier'][$IdCategorie] = $_POST['panier']['quantite'][$IdCategorie];
            }
        }
        $_SESSION['panier'] = $_POST['panier']['quantite'];
    }

    public function add($IdCategorie){
        if(isset($_SESSION['panier'][$IdCategorie])){
            $_SESSION['panier'][$IdCategorie]++;
        }
        else {
            $_SESSION['panier'][$IdCategorie] = 1;
        }
    }

    public function removeproduct($IdCategorie){
        unset($_SESSION['panier'][$IdCategorie]);
    }
  
}

?>