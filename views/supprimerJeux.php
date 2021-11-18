<?php
include '../controller/JeuxController.php';
$jeuxC=new jeuxC();
$jeuxC->supprimerJeux($_GET["idJeux"]);
header('Location:afficherjeux.php');
?>