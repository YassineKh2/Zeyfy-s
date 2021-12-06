<?php 
require '../../../model/db.class.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCAPLAY - by the ZEYFY's</title>
<link rel="stylesheet" href="Front/offres.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
<nav>
    <a href="offres.html"> <img src="images/logo.png"> </a>
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

<!------------- formation------------>
<section class="formation">
      <?php $offres = $DB->query('SELECT * from offres') ?>
      <?php foreach ($offres as $offres ) { ?>
<h1>Les offres disponibles</h1>

    <div class="row">
<div class="formation-col">
    <img src="images/black_friday.jpg">
    <div class="layer">
		<h3><?php echo $offres->NomOffre; ?></h3>
		<h4><?php echo $offres->pourcentageOffre; ?></h4>
    </div>
</div>

<?php }?>
    </div>
</section>

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
<!------------ Javascript for Toggle Menu ------------>
    <script>

var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}

 </script>







</body>
</html>