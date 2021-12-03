<?php
	include '../Controller/CategorieC.php';
	$categorieC=new CategorieC();
	$categorieC->supprimerCategorie($_POST["IdCategorie"]);
	header('Location:dashboard.php');
?>