<?php
require '_header.php';
if(isset($_GET['IdCategorie'])){
   $categorie = $DB->query('SELECT IdCategorie FROM categorie WHERE IdCategorie=:IdCategorie', array('IdCategorie' => $_GET['IdCategorie']));
var_dump($categorie);
   }
else {
    die("Vous n'avez pas sélctionné de produit à ajouter au panier");
}
?>