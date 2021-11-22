<?php
	include '../Controller/CategorieC.php';
	$categorieC=new CategorieC();
	$categorieC->supprimerCategorie($_GET["IdCategorie"]);
	header('Location:dashboard.php');
?>