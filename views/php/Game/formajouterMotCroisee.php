<?php
include_once 'C:\xampp\htdocs\educaplay\config.php';
include_once 'C:\xampp\htdocs\educaplay\controller\motcroiseeC.php';
    include_once 'C:\xampp\htdocs\educaplay\model\motcroisee.php'; 
     $sql= "SELECT * from jeux";
   
        try {
            $db=config::getConnexion();
    $liste=$db->query($sql);
    

        }
                    catch(Exception $e)
                    {
                        die('Erreur:'.$e->getMessage());
                    
                    }


                            $error = "";
                             $motcroisee = null;
                        // create an instance of the controller
                        $motcroiseeC = new motcroiseeC();
                        if (
                    		isset($_POST["l1"]) &&		
                            isset($_POST["indice1"])  &&
                            isset($_POST["l2"]) &&
                    		isset($_POST["indice2"]) &&
                            isset($_POST["l3"]) &&
                    		isset($_POST["indice3"]) &&
                            isset($_POST["l4"]) &&
                    		isset($_POST["indice4"])&& 
                            isset($_POST["l5"]) &&		
                            isset($_POST["indice5"])  &&
                            isset($_POST["l6"]) &&
                    		isset($_POST["indice6"]) &&
                            isset($_POST["l7"]) &&
                    		isset($_POST["indice7"]) &&
                            isset($_POST["l8"]) &&
                    		isset($_POST["indice8"])&& 
                            isset($_POST["l9"]) &&		
                            isset($_POST["indice9"])  &&
                            isset($_POST["l10"]) &&
                    		isset($_POST["indice10"]) &&
                            isset($_POST["l11"]) &&
                    		isset($_POST["indice11"]) &&
                            isset($_POST["l12"]) &&
                    		isset($_POST["indice12"])&& 
                            isset($_POST["l13"]) &&		
                            isset($_POST["indice13"])  &&
                            isset($_POST["l14"]) &&
                    		isset($_POST["indice14"]) &&
                            isset($_POST["l15"]) &&
                    		isset($_POST["indice15"]) &&
                            isset($_POST["l16"]) &&
                    		isset($_POST["indice16"])&&
                            isset($_POST["idJeux"])
                            
                            
                            )
                             {
                            if (
                    			 !empty($_POST["l1"]) &&
                                 !empty($_POST["indice1"]) &&
                                 !empty($_POST["l2"]) &&
                                 !empty($_POST["indice2"])  &&
                                 !empty($_POST["l3"]) &&
                    			 !empty($_POST["indice3"])&&
                                 !empty($_POST["l4"])  &&
                                 !empty($_POST["indice4"])&&
                                 !empty($_POST["l5"]) &&
                                 !empty($_POST["indice5"]) &&
                                 !empty($_POST["l6"]) &&
                                 !empty($_POST["indice6"])  &&
                                 !empty($_POST["l7"]) &&
                    			 !empty($_POST["indice7"])&&
                                 !empty($_POST["l8"])  &&
                                 !empty($_POST["indice8"])&&
                                 !empty($_POST["l9"]) &&
                                 !empty($_POST["indice9"]) &&
                                 !empty($_POST["l10"]) &&
                                 !empty($_POST["indice10"])  &&
                                 !empty($_POST["l11"]) &&
                    			 !empty($_POST["indice11"])&&
                                 !empty($_POST["l12"])  &&
                                 !empty($_POST["indice12"])&&
                                 !empty($_POST["l13"]) &&
                                 !empty($_POST["indice13"]) &&
                                 !empty($_POST["l14"]) &&
                                 !empty($_POST["indice14"])  &&
                                 !empty($_POST["l15"]) &&
                    			 !empty($_POST["indice15"])&&
                                 !empty($_POST["l16"])  &&
                                 !empty($_POST["indice16"])&&
                                 !empty($_POST["IDJEUX"])

                            ) { 
                                $motcroisee = new motcroisee(
                                
                                    $_POST['l1'],
                                    $_POST['indice1'],
                                    $_POST['l2'],
                                    $_POST['indice2'],
                                    $_POST['l3'],
                                    $_POST['indice3'],
                                    $_POST['l4'],
                                    $_POST['indice4'],
                                    $_POST['l5'],
                                    $_POST['indice5'],
                                    $_POST['l6'],
                                    $_POST['indice6'],
                                    $_POST['l7'],
                                    $_POST['indice7'],
                                    $_POST['l8'],
                                    $_POST['indice8'],
                                    $_POST['l9'],
                                    $_POST['indice9'],
                                    $_POST['l10'],
                                    $_POST['indice10'],
                                    $_POST['l11'],
                                    $_POST['indice11'],
                                    $_POST['l12'],
                                    $_POST['indice12'],
                                    $_POST['l13'],
                                    $_POST['indice13'],
                                    $_POST['l14'],
                                    $_POST['indice14'],
                                    $_POST['l15'],
                                    $_POST['indice15'],
                                    $_POST['l16'],
                                    $_POST['indice16'],
                                    $_POST['IDJEUX']
                                
                                );

                                $motcroiseeC->ajoutermot($motcroisee);
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
               
                    <td><input type="text" name="indice1" placeholder="Ecrire votre indice 1" id="indice1" maxlength="20" class=""></td>
                </tr>
                <tr>
                   
                            
                    <td><input type="text" name="l2"  placeholder="Ecrire votre mot 2" id="l2" maxlength="2"></td>
                        
                    

                    </tr>
                    <tr>
                   
                            
                   <td><input type="text" name="indice2"  placeholder="Ecrire votre indice 2" id="indice2" maxlength="20"></td>
                  
                   </tr>
                    <tr>
                   
                    <td><input type="text" name="l3" placeholder="Ecrire votre mot 3" id="l3" maxlength="7"></td>   
                    
                        </tr>
                        <tr>
                   
                   <td><input type="text" name="indice3" placeholder="Ecrire votre indice 3" id="indice3" maxlength="20"></td>   
                   
                       </tr>
<tr>
            <tr>
                    <td><input type="text" name="l4" id="l4" placeholder="Ecrire votre mot 4" maxlength="5"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice4" placeholder="Ecrire votre indice 4" id="indice4" maxlength="20"></td>   
                   
                       </tr>
                <tr>
                
                        <td><input type="text" name="l5" id="l5" placeholder="Ecrire votre mot 5" maxlength="3"></td>   

                      
                        </tr>
                    <tr>
                        <td><input type="text" name="i5" placeholder="Ecrire votre indice 5" id="indice5" maxlength="20"></td>   
                   
                   </tr>

                        
                  <tr>
      

               
                    <td><input type="text" name="l6" id="l6"  placeholder="Ecrire votre mot 6 "maxlength="3"></td>   
            
                    </tr>

<tr>
                    <td><input type="text" name="indice6" placeholder="Ecrire votre indice 6" id="indice6" maxlength="20"></td>   
                    </tr>

                    <tr>
                    <td><input type="text" name="l7" id="l7" placeholder="Ecrire votre lettre 7" maxlength="2"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice7" placeholder="Ecrire votre indice 7" id="indice7" maxlength="20"></td>   
                   
                    </tr>

                    <tr>
                    <td><input type="text" name="l8" id="l8" placeholder="Ecrire votre mot 8" maxlength="5"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice4" placeholder="Ecrire votre indice 8" id="indice8" maxlength="20"></td>   
                   
                       </tr>



                       <tr>
                    <td><input type="text" name="l9" id="l9" placeholder="Ecrire votre mot 9" maxlength="9"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice9" placeholder="Ecrire votre indice 9" id="indice9" maxlength="20"></td>   
                   
                       </tr>

                       <tr>
                    <td><input type="text" name="l10" id="l10" placeholder="Ecrire votre mot 10" maxlength="2"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice10" placeholder="Ecrire votre indice 10" id="indice10" maxlength="20"></td>   
                   
                       </tr>


                       <tr>
                    <td><input type="text" name="l11" id="l11" placeholder="Ecrire votre mot 11" maxlength="5"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice11" placeholder="Ecrire votre indice 11" id="indice11" maxlength="20"></td>   
                   
                       </tr>

                       <tr>
                    <td><input type="text" name="l12" id="l12" placeholder="Ecrire votre mot 12" maxlength="3"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice12" placeholder="Ecrire votre indice 12" id="indice12" maxlength="20"></td>   
                   
                       </tr>

                       <tr>
                    <td><input type="text" name="l13" id="l13" placeholder="Ecrire votre mot 13" maxlength="9"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice13" placeholder="Ecrire votre indice 13" id="indice13" maxlength="20"></td>   
                   
                       </tr>


                       <tr>
                    <td><input type="text" name="l14" id="l14" placeholder="Ecrire votre mot 14" maxlength="9"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice14" placeholder="Ecrire votre indice 14" id="indice14" maxlength="20"></td>   
                   
                       </tr>


                       <tr>
                    <td><input type="text" name="l15" id="l15" placeholder="Ecrire votre mot 15" maxlength="7"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice15" placeholder="Ecrire votre indice 15" id="indice15" maxlength="20"></td>   
                   
                       </tr>
                <tr>    


                <tr>
                    <td><input type="text" name="l16" id="l16" placeholder="Ecrire votre mot 16" maxlength="7"></td>   
                    </td>
                        </tr>



                        <tr>
                   
                   <td><input type="text" name="indice16" placeholder="Ecrire votre indice 16" id="indice16" maxlength="20"></td>   
                   
                       </tr>
              



                <tr>
                   
                   <td><input type="text" name="IDJEUX" placeholder="Ecrire votre ID JEUX" id="IDJEUX" maxlength="20"></td>   
                   
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