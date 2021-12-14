<?php
	include '../controller/avisC.php';
	$avisC=new avisC();
	$avisC->supprimeravis($_GET["idAvis"]);
	header('Location:dashavis.php');
?>