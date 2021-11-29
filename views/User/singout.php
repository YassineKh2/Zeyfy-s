<?php
include 'C:\xampp\htdocs\Project web\controllers\utilisateursC.php';
session_destroy();
$_SESSION['auth']=false;
header('Location:../Login/login.php');

?>