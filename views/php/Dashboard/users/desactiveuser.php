<?php
	include 'C:\xampp\htdocs\Zeyfy-s-usercontrollers\controllers\utilisateursC.php';
	$utilisateurc=new utilisateurc();
	$utilisateurc->desactivate($_GET["idUtilisateur"]);
    header('Location:utilisateur.php');
?>