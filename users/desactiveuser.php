<?php
	include 'C:\xampp\htdocs\Project web\controllers\utilisateursC.php';
	$utilisateurc=new utilisateurc();
	$utilisateurc->desactivate($_GET["idUtilisateur"]);
    header('Location:utilisateur.php');
?>