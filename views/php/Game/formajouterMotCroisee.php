<?php
include_once 'C:\xampp\htdocs\educaplay\config.php';
include_once 'C:\xampp\htdocs\educaplay\controller\JeuxController.php';
    include_once 'C:\xampp\htdocs\educaplay\model\jeux.php'; 
     $sql= "SELECT * from categorie";
     $sql1= "SELECT * from cours";
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
                                header('location:indexlevel.php');
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
<link rel="stylesheet" href="../../assets/css/formajouterMOT.css">
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
                <h1 id='id'><center>Veuillez selectionner  les données de votre mot croisee !</center></h1>
              <br><br>



                  
                </tr>
				<tr>
               
                    <td><input type="text" name="l1" placeholder="Ecrire votre lettre 1" id="l1" maxlength="1" class=""></td>
                </tr>
                <tr>
               
                    <td><input type="text" name="i1" placeholder="Ecrire votre indice 1" id="i1" maxlength="20" class=""></td>
                </tr>
                <tr>
                   
                            
                    <td><input type="text" name="l2"  placeholder="Ecrire votre mot 2" id="l2" maxlength="2"></td>
                        
                    

                    </tr>
                    <tr>
                   
                            
                   <td><input type="text" name="i2"  placeholder="Ecrire votre indice 2" id="i2" maxlength="20"></td>
                  
                   </tr>
                    <tr>
                   
                    <td><input type="text" name="l3" placeholder="Ecrire votre mot 3" id="l3" maxlength="7"></td>   
                    
                        </tr>
                        <tr>
                   
                   <td><input type="text" name="i3" placeholder="Ecrire votre indice 3" id="i3" maxlength="20"></td>   
                   
                       </tr>
<tr>
            <tr>
                    <td><input type="text" name="l4" id="l4" placeholder="Ecrire votre mot 4" maxlength="5"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i4" placeholder="Ecrire votre indice 4" id="i4" maxlength="20"></td>   
                   
                       </tr>
                <tr>
                
                        <td><input type="text" name="l5" id="l5" placeholder="Ecrire votre mot 5" maxlength="3"></td>   

                      
                        </tr>
                    <tr>
                        <td><input type="text" name="i5" placeholder="Ecrire votre indice 5" id="i5" maxlength="20"></td>   
                   
                   </tr>

                        
                  <tr>
      

               
                    <td><input type="text" name="l6" id="l6"  placeholder="Ecrire votre mot 6 "maxlength="3"></td>   
            
                    </tr>

<tr>
                    <td><input type="text" name="i6" placeholder="Ecrire votre indice 6" id="i6" maxlength="20"></td>   
                    </tr>

                    <tr>
                    <td><input type="text" name="l7" id="l7" placeholder="Ecrire votre lettre 7" maxlength="2"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i7" placeholder="Ecrire votre indice 7" id="i7" maxlength="20"></td>   
                   
                    </tr>

                    <tr>
                    <td><input type="text" name="l8" id="l8" placeholder="Ecrire votre mot 8" maxlength="5"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i4" placeholder="Ecrire votre indice 8" id="i8" maxlength="20"></td>   
                   
                       </tr>



                       <tr>
                    <td><input type="text" name="l9" id="l9" placeholder="Ecrire votre mot 9" maxlength="9"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i9" placeholder="Ecrire votre indice 9" id="i9" maxlength="20"></td>   
                   
                       </tr>

                       <tr>
                    <td><input type="text" name="l10" id="l10" placeholder="Ecrire votre mot 10" maxlength="2"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i10" placeholder="Ecrire votre indice 10" id="i10" maxlength="20"></td>   
                   
                       </tr>


                       <tr>
                    <td><input type="text" name="l11" id="l11" placeholder="Ecrire votre mot 11" maxlength="5"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i11" placeholder="Ecrire votre indice 11" id="i11" maxlength="20"></td>   
                   
                       </tr>

                       <tr>
                    <td><input type="text" name="l12" id="l12" placeholder="Ecrire votre mot 12" maxlength="3"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i12" placeholder="Ecrire votre indice 12" id="i12" maxlength="20"></td>   
                   
                       </tr>

                       <tr>
                    <td><input type="text" name="l13" id="l13" placeholder="Ecrire votre mot 13" maxlength="9"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i13" placeholder="Ecrire votre indice 13" id="i13" maxlength="20"></td>   
                   
                       </tr>


                       <tr>
                    <td><input type="text" name="l14" id="l14" placeholder="Ecrire votre mot 14" maxlength="9"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i14" placeholder="Ecrire votre indice 14" id="i14" maxlength="20"></td>   
                   
                       </tr>


                       <tr>
                    <td><input type="text" name="l15" id="l15" placeholder="Ecrire votre mot 15" maxlength="7"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i15" placeholder="Ecrire votre indice 15" id="i15" maxlength="20"></td>   
                   
                       </tr>
                <tr>    


                <tr>
                    <td><input type="text" name="l16" id="l16" placeholder="Ecrire votre mot 16" maxlength="7"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="i16" placeholder="Ecrire votre indice 16" id="i16" maxlength="20"></td>   
                   
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