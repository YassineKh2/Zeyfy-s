<?php
require '_header.php';
if(isset($_GET['IdCategorie'])){
    $categorie = $DB->query('SELECT IdCategorie FROM categorie WHERE IdCategorie=:IdCategorie', array('IdCategorie' => $_GET['IdCategorie']));
    if(empty($categorie)){
        die("Ce produit n'existe pas");
    }
    $panier->add($categorie[0]->IdCategorie);
    die('Le produit a bien été ajouté a votre panier <a href="javascript:history.back()"> Retourner sur le catalogue </a>');
}else{
    die("Vous n'avez sélectionné de produitsà ajouter au panier");
}
var_dump($_GET);
?>