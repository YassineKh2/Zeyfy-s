<?php
    include 'C:\xampp\htdocs\Project web\controllers\utilisateursC.php';

    if($_SESSION['etat']==NULL)
    header('Location:..\Mainpage\index.php');
    else
    header('Location:..\Mainpage\indexa.php');

?>