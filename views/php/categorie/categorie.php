<?php
include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
require_once '../../../model/db.class.php';
require_once '../../../model/panier.class.php';

$utilisateurc = new utilisateurc;
$DB= new DB();
$panier = new panier($DB);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Front/categorie.css" />
    <script src="https://kit.fontawesome.com/56a94e38db.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../assets/css/userd.css">
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
    <li><a href="../Mainpage/index.php?categ=1">ACCUEIL</a></li>
       <li><a href="../avis/reclamation.php">RECLAMATION</a></li>
        <li><a href="panier.php?id_formation=1">PANIER</a></li>
        <li><a href="../avis/index.php?categ=1">CONTACT</a></li>
    </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    
    </nav>
    <?php
        if ($_SESSION['auth'] == false)
            echo '<span><a href="../Login/login.php"></a></span>';
        else {
            $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']);
            echo '<div class="action">
      <div class="profile" onclick="drop();">
          <img src="../../assets/images/Userpics/' . $utilisateur['photo'] . '" width="300">
      </div>
      <div class="menu">
          <h3>' . $utilisateur['username'] . '<br><p class="a">Etudient</p></h3>
         <ul>
              <li class="fas fa-user"><a href="..\User\profiedash.php">Mon Profile</a></li><br>
              <li class="far fa-clipboard"><a href="#">Mes Formation</a></li><br>
              <li class="fas fa-edit"><a href="..\User\settings.php">Paramétres</a></li><br>
              <li class="fas fa-sign-out-alt"><a href="..\User\singout.php">Deconnection</a></li>
         </ul>
      </div>
  </div>';
        }
        ?>
    <section>
        <div class='pricing pricing-palden'>

      
          <div class='pricing-item'>
          <?php $categorie = $DB->query('SELECT * from categorie') ?>
          <?php foreach ($categorie as $categorie ) { ?>
                <div class='pricing-deco'>
                
              <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
              </svg>
              <div class='pricing-price'>
              <?php echo $categorie->NomCategorie; ?>
              </div>
              <h3 class='pricing-title'>  <?php echo $categorie->NomOffre; ?>  </h3>
            </div>
            
            <a class='pricing-action' href="../formation/afficheForC.php?categ=<?php echo $categorie->NomCategorie;?>&IdCategorie=<?php echo $categorie->IdCategorie;?>">Afficher formations</a>
              <?php }?>
              
          </div>
         
         
        </div>
      </section>
      <form>
        <li>
          <a class="button" href="Front/Offres.html">Offres de réduction</a>
        </li>
     </form>

     </div>

<footer class="footer-distributed">

        <div class="footer-left">
      <img src="images/logo.png">
            <h3>EDUCAPLAY</h3>

            <p class="footer-links">
                <a href="#">ACCUEIL</a>
                |
                <a href="#">PLANS</a>
                |
                <a href="#">FONCTIONNALITES</a>
                |
                <a href="#">CONTACT</a>
            </p>

            <p class="footer-company-name">© 2021 Jeu éducatif en ligne.</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                  <p>Rue Habib Borguiba,Cité La Ghazelle, Ariana , Tunisie - 2083</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+21655025447</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:Educaplay@gmail.com">Educaplay@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Notre Objectif</span>
                L'objectif d’EducaPlay est principalement de créer de nouvelles opportunités pour les personnes et les organisations du monde entier. Notre place de marché propose une vaste bibliothèque composée de plusieurs cours enseignés par des formateurs confirmés tout en jouant.</p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer> 
  <!----------------- script for drop donw menu---------------------->
  <script>
        function drop() {
            const dropmenu = document.querySelector(".menu");
            dropmenu.classList.toggle('active');
        }
    </script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
      </script>
    <script type="text/javascript" src="panier.js"></script>
</body>
</html>