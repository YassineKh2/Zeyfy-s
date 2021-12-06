<?php
include 'C:\xampp\htdocs\educaplay\controller\JeuxController.php';
$jeuxC=new jeuxC();
$jeuxC->supprimerJeux($_GET["idJeux"]);
header('Location:afficherjeux.php');
?>