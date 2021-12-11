<?php
	include 'C:\xampp\htdocs\educaplay\controller\avisC.php';
	$avisC=new avisC();
	$avisC->supprimeravis($_GET["idAvis"]);
	header('Location:../Dashboard/dashavis.php');
?>