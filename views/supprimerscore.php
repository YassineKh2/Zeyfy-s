<?php
include '../controller/JoueurScoreController.php';
$joueur_score_jeuxC=new joueur_score_jeuxC();
$joueur_score_jeuxC->supprimerscore($_GET["idJoueur"]);
header('Location:jouer.php');
?>