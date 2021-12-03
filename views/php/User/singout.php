<?php
include 'C:\xampp\htdocs\Zeyfy-s-usercontrollers\controllers\utilisateursC.php';
session_destroy();
$_SESSION['auth']=false;
header('Location:../Login/login.php');

?>