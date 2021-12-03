<?php
	include '../Controller/OffreC.php';
	$offreC=new OffreC();
	$offreC->supprimerOffre($_POST["idOffre"]);
	header('Location:dashboard2.php');
?>