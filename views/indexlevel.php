<?php

include_once '../config.php';
include_once '../controller/JeuxController.php';
include_once '../model/jeux.php'; 
//   $sql= "SELECT  * from joueur_score  order by score  desc limit 3";
$sql="SELECT utilisateurs.nomUtilisateur,utilisateurs.prenomUtilisateur,joueur_score.score
 FROM utilisateurs JOIN joueur_score ON utilisateurs.idUtilisateur=joueur_score.idJoueur order by score  desc limit 3";

    try {
        $db=config::getConnexion();
$liste=$db->query($sql);
// $liste1=$db->query($sql1);
$topPlayers=array();
foreach($liste as $player){
    array_push($topPlayers,$player);
}
    }
                catch(Exeption $e)
                {
                    die('Erreur:'.$e->getMessage());
                
                }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCAPLAY - by the ZEYFY's</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="header">
<nav>
    <a href="index.html"> <img src="assets/images/logo.png"> </a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
<ul>

   
    <li><a href=""> Plus d'information</a></li>
    <li><a href="">Reclamation</a></li>
    <li><a href="">Nous-contacter</a></li>
    <li><a href="index.html">Quitter</a></li>
</ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>

</nav>

<div class="text-box">
    <h1>veuillez choisir votre level</h1>
</div>

      <span><a href="#"></a></span>
      

     <a href="level1.php"> <button class="button-l1" id="b1" role="button" >Level 1 </button></a>
      <button class="button-l2" id="b2" role="button" >Level 2</button>
      <button class="button-l3" id="b3" role="button" >Level 3</button>
      <button class="button-l4" id="b4" role="button" >Level 4</button>
      <button class="button-l5" id="b5" role="button" >Level 5</button>
      <!-- <button class="button-jouer" role="button">Jouez!</button> -->
    </section>


    </section>

    
      

<!------------- top  players------------>
<section class="formation">
<h1>Top joueurs</h1>
    <div class="row">

    
<div class="formation-col">
    <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
    <div class="layer">
     <h3>Player1 : <br> Prenom: <?php echo $topPlayers[0]["prenomUtilisateur"]?> <br> Name: <?php echo $topPlayers[0]["nomUtilisateur"]?> <br>score :<?php echo $topPlayers[0]["score"]?></h3>
    
    </div>
</div>
<div class="formation-col">
    <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png">
    <div class="layer">
        <!-- <h1>TESSSSSSSSSSSSSSSST</h1> -->
     <h3>player2 : <br> Prenom: <?php echo $topPlayers[1]["prenomUtilisateur"]?> <br>Name:<?php echo $topPlayers[1]["nomUtilisateur"]?><br> Score :<?php echo $topPlayers[1]["score"]?></h3>

    </div>
</div>
<div class="formation-col">
    <img src="https://www.bootdey.com/img/Content/avatar/avatar8.png">
    <div class="layer">
    <h3>player3 : <br> Prenom: <?php echo $topPlayers[2]["prenomUtilisateur"]?> <br>  Nom :<?php echo $topPlayers[2]["nomUtilisateur"]?> <br>  score :<?php echo $topPlayers[2]["score"]?></h3>
    </div>
</div>
    </div>
</section>

<footer class="footer-distributed">

			<div class="footer-left">
          <img src="assets/images/logo.png">
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
					<p><a href="mailto:Educaplay@esprit.tn">Educaplay@esprit.tn</a></p>
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
<!------------ Javascript for Toggle Menu ------------>
    <script src="assets/js/indexlevel.js">


    </script>











</body>
</html>