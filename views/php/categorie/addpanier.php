<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['IdCategorie'])){
    $categorie = $DB->query('SELECT IdCategorie FROM categorie WHERE IdCategorie=:IdCategorie', array('IdCategorie' => $_GET['IdCategorie']));
    if(empty($categorie)){
        $json['message'] ="Ce produit n'existe pas";
    }
    $panier->add($categorie[0]->IdCategorie);
    $json['error'] = false;
    $json['message'] = 'Le produit a bien été ajouté a votre panier ';
}else{
    $json['message'] = "Vous n'avez sélectionné de produits à ajouter au panier";
}
echo json_encode($json);

var_dump($_GET);
?>