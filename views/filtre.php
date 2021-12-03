<?php
include '../controller/FormationC.php';
$formationC=new FormationC();
$tem=$_GET['tem'];
if(
    isset($_POST['sel']) && isset($_POST['sel1'])
){
    $formation = new Formation('','',$_POST['sel1'],'','',$_POST['sel'],'');
    if($_POST['sel']=='tout'&&$_POST['sel1']=='tout')
    {
        $formationC->afficherformations();
        $statut=$_POST['sel'];
        $categ=$_POST['sel1'];
        header("Location: index.php?statut=$statut&categ=$categ&tem=$tem");
    }
    else{
        $formationC->afficherformationss($_POST['sel'],$_POST['sel1']);
        $statut=$_POST['sel'];
        $categ=$_POST['sel1'];
        header("Location: index.php?statut=$statut&categ=$categ&tem=$tem");
    }

}

?>