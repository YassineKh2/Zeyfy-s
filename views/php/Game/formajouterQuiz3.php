<?php
include_once 'C:\xampp\htdocs\educaplay\config.php';
include_once 'C:\xampp\htdocs\educaplay\controller\JeuxController.php';
    include_once 'C:\xampp\htdocs\educaplay\model\jeux.php'; 
    $idF=$_GET['idF'];
     $sql= "SELECT * from categorie";
     $sql1= "SELECT * from cours where (level=3 and idFormation='$idF')";
        try {
            $db=config::getConnexion();
    $liste=$db->query($sql);
    $listeCours=$db->query($sql1);
    
        }
                    catch(Exception $e)
                    {
                        die('Erreur:'.$e->getMessage());
                    
                    }


                            $error = "";
                             $jeux = null;
                        // create an instance of the controller
                        $jeuxC = new jeuxC();
                        if (
                    		isset($_POST["question"]) &&		
                            isset($_POST["reponseA"])  &&
                            isset($_POST["reponseB"]) &&
                    		isset($_POST["reponseC"]) &&
                            isset($_POST["correctAnswer"]) &&
                    		isset($_POST["idCours"]) &&
                            isset($_POST["idCategorie"]) &&
                    		isset($_POST["reponseD"]))
                             {
                            if (
                    			 !empty($_POST["question"]) &&
                                 !empty($_POST["reponseA"])  &&
                                 !empty($_POST["reponseB"]) &&
                                 !empty($_POST["reponseC"])  &&
                                 !empty($_POST["correctAnswer"]) &&
                    			 !empty($_POST["idCours"]) &&
                                 !empty($_POST["idCategorie"])  &&
                                 !empty($_POST["reponseD"]) 

                            ) { 
                                $jeux = new jeux(
                                
                                    $_POST['question'],
                                    $_POST['reponseA'],
                                    $_POST['reponseB'],
                                    $_POST['reponseC'],
                                    $_POST['correctAnswer'],
                                    $_POST['idCours'],
                                    $_POST['idCategorie'],
                                    $_POST['reponseD']
                                
                                );

                                $jeuxC->ajouterJeux($jeux);
                                header("location:formajouterQuiz4.php?idF=$idF");
                            }
                            else
                                $error = "Missing information";
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
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel="stylesheet" href="../../assets/css/formajouter.css">
</head>
<body>
    <section class="header">
<nav>
    <a href="index.html"> <img src="../../assets/images/logo.png"> </a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
<ul>

   
    <li><a href=""> Plus d'information</a></li>
    <li><a href="">Reclamation</a></li>
    <li><a href="">Nous-contacter</a></li>
    <li><a href="../html/index.html">Quitter</a></li>
</ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>

</nav>



      <form  class="f" action="" method="POST">
          
            <table>
                <thead>

                <div class="text-box">
    <!-- <h1>Quiz Data</h1> -->
</div>
                <tr>
                 <br>
                <h1 id='id'><center>Veuillez selectionner  les données de votre quiz !</center></h1>
              <br><br>



                    <td><select name="idCategorie" id="NomCategorie">
                        <?php foreach($liste as $categorie)
                        { ?>
                      <option value=<?php echo $categorie['IdCategorie']?>><?php echo $categorie['NomCategorie']?></option>
                      <?php 
                        } 
                        ?>
                    </td>
                </tr>
				<tr>
               
                    <td><input type="text" name="question" placeholder="Ecrire votre question" id="question" maxlength="20" class=""></td>
                </tr>
                <tr>
                   
                            
                    <td><input type="text" name="reponseA"  placeholder="Ecrire votre Reponse A" id="reponseA" maxlength="20"></td>
                        
                    

                    </tr>
                    <tr>
                   
                    <td><input type="text" name="reponseB" placeholder="Ecrire votre reponse B" id="reponseB" maxlength="20"></td>   
                    
                        </tr>
<tr>
            
                    <td><input type="text" name="reponseC" id="reponseC" placeholder="Ecrire votre reponseC" maxlength="20"></td>   
                    </td>
                        </tr>
                <tr>
                
                        <td><input type="text" name="reponseD" id="reponseD" placeholder="Ecrire votre reponseD" maxlength="20"></td>   

                      
                        </tr>

                        
    <tr>
      

               
                <td><input type="text" name="correctAnswer" id="correctAnswer"  placeholder="Ecrire votre réponse correcte "maxlength="20"></td>   
            
                </tr>
              

                <tr>    
         <td><select name="idCours" id="nomCours">
                        <?php foreach($listeCours as $contenuCours)
                        { ?>
                      <option value="<?php echo $contenuCours['idCours']?>"><?php echo $contenuCours['nomCours']?></option>
                      <?php 
                        } 
                        ?>
                    </td>
                </tr>
                
                    <tr>
                    <td>
                    <input type="submit" class="btn" id="envoyer" value="Envoyer">
                        <!-- <input type="reset"  class="btn" value="Annuler" > -->
                        </td>
                </tr>
            </table>
    
    </form>
     

    
      



 <footer class="footer-distributed">

			<div class="footer-left">
          <img src="../../assets/images/logo.png">
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