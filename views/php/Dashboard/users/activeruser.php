<?php
	include 'C:\xampp\htdocs\Zeyfy-s-usercontrollers\controllers\utilisateursC.php';
	$utilisateurc=new utilisateurc();
	$utilisateurc->activate($_GET["idUtilisateur"]);
    header('Location:utilisateur.php');
?>