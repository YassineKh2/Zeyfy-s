 <?php
include'../config.php';
$sql="SELECT * from categorie";
$sql1="SELECT * from cours";
$db=config::getConnexion();
try {
    $liste=$db->query($sql);
    $listeCours=$db->query($sql1);

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



      <form action="" method="POST">
          
            <table>
                <thead>
                <tr>
                    <td>
                        
                        <label for="NomCategorie">NomCategorie:
                        </label>
                    </td>
                    <td><select name="Nomcategorie" id="NomCategorie">
                        <?php foreach($liste as $categorie)
                        { ?>
                      <option value="<?php $categorie['idCategorie']?>"><?php echo $categorie['NomCategorie']?></option>
                      <?php 
                        } 
                        ?>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label for="question">question:
                        </label>
                    </td>
                    <td><input type="text" name="question" id="question" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="reponseA">reponseA:
                        </label>
                       
                    </td>
                            
                    <td><input type="text" name="reponseA" id="reponseA" maxlength="20"></td>
                        
                    

                    </tr>
                    <tr>
                    <td>
                        <label for="reponseB">reponseB:
                        </label>
                        </td>
                    <td><input type="text" name="reponseB" id="reponseB" maxlength="20"></td>   
                    
                        </tr>
<tr>
                    <td>
                        <label for="reponseC">reponseC:
                        </label>
                        </td>
                    <td><input type="text" name="reponseC" id="reponseC" maxlength="20"></td>   
                    </td>
                        </tr>
                <tr>
                <td>
                        <label for="reponseD">reponseD:
                        </label>
                        </td>
                        <td><input type="text" name="reponseD" id="reponseD" maxlength="20"></td>   

                      
                        </tr>

                        
    <tr>
        <td>
                <label for="correctAnswer">correctAnswer:
            
                </label>
                </td>
               
                <td><input type="text" name="correctAnswer" id="correctAnswer" maxlength="20"></td>   
            
                </tr>
              

                <tr>
                    <td>
                        
                        <label for="nomCours"> Nom Cours:
                        </label>
                    </td>
                    <td><select name="nomCours" id="nomCours">
                        <?php foreach($listeCours as $contenuCours)
                        { ?>
                      <option value="<?php $contenuCours['idCours']?>"><?php echo $contenuCours['nomCours']?></option>
                      <?php 
                        } 
                        ?>
                    </td>
                </tr>
                   
                  
                   
                 
                   
                       
                        
                       

                    <tr>
                    <td>
                    <input type="submit" class="btn" value="Envoyer">
                        <input type="reset"  class="btn" value="Annuler" >
                        </td>
                </tr>
            </table>
    
    </form>
     

    
      



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
<!----------- Javascript for Toggle Menu ------------>
   <script src="assets/js/indexlevel.js">


    </script> 











</body>
</html>