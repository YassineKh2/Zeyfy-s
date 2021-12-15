<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id_formation'])){
    $formation = $DB->query('SELECT id_formation FROM formations WHERE id_formation=:id_formation', array('id_formation' => $_GET['id_formation']));
    if(empty($formation)){
        $json['message'] ="Ce produit n'existe pas";
    }
    $panier->add($formation[0]->id_formation);
    $json['error'] = false;
    $json['message'] = 'Le produit a bien été ajouté a votre panier ';
}else{
    $json['message'] = "Vous n'avez sélectionné de produits à ajouter au panier";
}
echo json_encode($json);

var_dump($_GET);
?>