<?php
include '../../../controller/FormationC.php';
$FormationC=new FormationC();
$FormationC->supprimerformations($_GET["id_formation"]);

header('Location: AfficherListeFormationA.php');
?>