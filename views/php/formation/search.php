<?php
include 'C:\xampp\htdocs\educaplay\controller\FormationC.php';
$statut=$_GET['statut'];
$categ=$_GET['categ'];
$formationC=new FormationC();
if(
    isset($_POST['search'])
){
    $formation = new Formation('','','','','','','');
     $tem=$_POST['search'];
        header("Location: profile.php?statut=$statut&categ=$categ&tem=$tem");

    

}

?>