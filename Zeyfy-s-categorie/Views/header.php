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
    <link rel="stylesheet" href="categorie.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Offres</title>

    <style>
        /* Common Styles - Can ignore*/
        body{
          background:#1b1b2b;
          background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
          padding:75px;
          text-align:center;
          font-family: 'Oswald', sans-serif;
          font-size: 18px;
          height: 100vh;
        }
        h1{
          color:#212121;
          font-weight:100;
        }
        .spacer {
         padding: 30px 0;
        }
        </style>

</head>
<body>

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

    <section>
        <div class='pricing pricing-palden'>