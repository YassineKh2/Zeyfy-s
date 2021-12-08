<?php
include 'C:\xampp\htdocs\educaplay\controller\FormationC.php';
$formationC=new FormationC();
$tem=$_GET['tem'];
if(
    isset($_POST['formatt']) && isset($_POST['format'])
){
    $formation = new Formation('','',$_POST['format'],'','',$_POST['formatt'],'');
    if($_POST['format']=='tout'&&$_POST['format']=='tout')
    {
        $formationC->afficherformations();
        $statut=$_POST['formatt'];
        $categ=$_POST['format'];
        header("Location: profile.php?statut=$statut&categ=$categ&tem=$tem");
    }
    else{
        $formationC->afficherformationss($_POST['formatt'],$_POST['format']);
        $statut=$_POST['formatt'];
        $categ=$_POST['format'];
        header("Location: profile.php?statut=$statut&categ=$categ&tem=$tem");
    }

}

?>