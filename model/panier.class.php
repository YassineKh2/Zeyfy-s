<?php 
include_once 'C:\xampp\htdocs\educaplay\config.php';

class panier{

    private $DB;

    public function __construct($DB){
        if(!isset($SESSION)){
            // session_start();
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
        foreach($_SESSION['panier'] as $id_formation => $quantite){
            if(isset($_POST['panier']['quantite'][$id_formation])){
                $_SESSION['panier'][$id_formation] = $_POST['panier']['quantite'][$id_formation];
            }
        }
        $_SESSION['panier'] = $_POST['panier']['quantite'];
    }

    public function add($id_formation){
        if(isset($_SESSION['panier'][$id_formation])){
            $_SESSION['panier'][$id_formation]++;
        }
        else {
            $_SESSION['panier'][$id_formation] = 1;
        }
    }

    public function removeproduct($id_formation){
        unset($_SESSION['panier'][$id_formation]);
    }
  
}

?>