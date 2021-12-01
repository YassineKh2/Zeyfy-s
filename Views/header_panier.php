<?php
require '../Model/db.class.php';
require '../Model/panier.class.php';
$DB= new DB();
$panier = new panier;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Front/checkout.css" />
    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="offres.html"> <img src="logo.png"> </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="">ACCUEIL</a></li>
            <li><a href="">PLANS</a></li>
            <li><a href="">FONCTIONNALITES</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        
        </nav>
        </section>