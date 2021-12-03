<?php
include 'C:\xampp\htdocs\educaplay\model\joueur_score.php';
$joueur_score_jeuxC=new joueur_score_jeuxC();
$joueur_score_jeuxC->supprimerscore($_GET["idJoueur"]);
header('Location:jouer.php');
?>