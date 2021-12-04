<?php
include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
session_destroy();
$_SESSION['auth']=false;
header('Location:../Login/login.php');

?>