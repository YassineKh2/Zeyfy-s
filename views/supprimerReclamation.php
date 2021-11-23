<?php
	include '../controller/avisC.php';
	$avisC=new avisC();
	$avisC->supprimeravis($_GET["idAvis"]);
	header('Location:dashreclamation.php');
?>