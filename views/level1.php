<?php
   include_once '../config.php';
   include_once '../controller/JeuxController.php';
$sql= "SELECT * from cours";
  try {
	$db=config::getConnexion();
$liste=$db->query($sql);

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
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/level1.css">
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
    <li><a href="">Nous-contacter</li></a>
    <a href="index.html"><li>Quitter</li></a>
</ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>

</nav>

<div class="text-box">
    <h1 id="titreCours1">Cours Javascript</h1>

	<?php foreach($liste as $cours)
                        { ?>
    <pre id ="contenuDuCours" value=<?php echo $cours['idCours']?>><?php echo $cours['contenuCours']?>
	<?php 
                        } 
                        ?> 
     </pre>
   
     <a href="templatequiz.html" >  <button class="button-jouer" role="button">Commencez le quiz!</button>  </a>
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