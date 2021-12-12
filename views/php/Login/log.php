<?php
    include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
$type=$_GET['type'];
    if($_SESSION['etat']==NULL)
    {
        if($type==0)
        header('Location:..\Mainpage\index.php');
        if($type==1)
        header('Location:..\formation\profile.php?statut=tout&categ=tout&tem=0');
    }
    
    else
    header('Location:..\Mainpage\indexa.php');

?>