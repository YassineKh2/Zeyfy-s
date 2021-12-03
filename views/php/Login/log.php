<?php
    include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';

    if($_SESSION['etat']==NULL)
    header('Location:..\Mainpage\index.php');
    else
    header('Location:..\Mainpage\indexa.php');

?>