<?php 
include_once 'C:\xampp\htdocs\educaplay\model\avis.php';
include_once 'C:\xampp\htdocs\educaplay\controller\avisC.php';

include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
$utilisateurc = new utilisateurc;
$error = "";

 // create adherent
 $avis = null;

 // create an instance of the controller
 $avisC = new avisC();
 if (
     isset($_POST["contenu"]) && isset($_POST["note"])
      
 
 ) {
     if (
         !empty($_POST["contenu"]) && !empty($_POST["note"])
     ) {
         $avis = new avis(
             $_POST['contenu'],
             '',22/01/2021,0,
             $_POST['note']

           
         );
         $avisC->ajouteravis($avis);
         
         
     }
     
 }



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="\educaplay\views\assets\images\logo.png">
  <link rel="stylesheet" href="\educaplay\views\assets\css\main.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/56a94e38db.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../../assets/css/userd.css">





  <title>Avis</title>
</head>

<body>
  <img class="logo" src="\educaplay\views\assets\images\logo.png" alt="">
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
          <li class="fas fa-user" aria-hidden="true"><a href="..\User\profiedash.php">Mon Profile</a></li><br>
          <li class="far fa-clipboard" aria-hidden="true"><a href="#">Mes Formation</a></li><br>
          <li class="fas fa-edit" aria-hidden="true"><a href="..\User\settings.php">Paramétres</a></li><br>
          <li class="fas fa-sign-out-alt" aria-hidden="true"><a href="..\User\singout.php">Deconnection</a></li>
     </ul>
      </div>
  </div>';
        }
        ?>
  <nav>
        
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
    <ul>
    <li><a href="../Mainpage/index.php">ACCUEIL</a></li>
                    <li><a href="../avis/reclamation.php">RECLAMATION</a></li>
                    <li><a href="../avis/index.php">CONTACT</a></li>
    </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    
    </nav>

    
  
  <!-- chiffres -->
  <section id="facts">
			
			<div class="container">
				<h3>EducaPlay en quelques chiffres</h3>
				<div class="avis">
					<div class="bloc">
						<h3>28K+</h3>
						<p>Utilisateurs</p>
					</div>
					<div class="bloc">
						<h3>927</h3>
						<p>Avis</p>
					</div>
				</div>
			</div>
      
			
		</section>
		
    
  	<!-- Contact -->

		<section id="contact">
      <div class="container">
        <div class="title">
          <h6>Une question ? un conseil ?</h6>
          <h3>Contactez-nous</h3>
        </div>
        <form  method="POST">
          
          <textarea name="contenu" placeholder="Entrer votre avis"></textarea>
         

          <select name="note" >
              <option value=""selected hidden>Donner nous un score sur 5</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
              <option value="5">5</option>
              
          </select>


          <button type="submit">Envoyer</button>  
          
        </form>
      </div>
      
		</section>
    
       

		
 	<!-- les avis des clients -->
  <section id="reviews" class="container">
    <h2 class="title-2">Ce que pensent nos clients</h2>
    <div class="cards">
      <div class="card">
        <header>
          <img src="https://picsum.photos/300/300?random=1" alt="person-1">
          <div>
            
            
          </div>
        </header>
        <p class="subtitle">Des formations divers,amusant et utile. Que demander de plus !</p>
        
      </div>
      <div class="card">
        <header>
          <img src="https://picsum.photos/300/300?random=2" alt="person-2">
          <div>
           
            
          </div>
        </header>
        <p class="subtitle">La qualité des formations est top. Vous ne serez pas deçu !</p>
        
      </div>
      <div class="card">
        <header>
          <img src="https://picsum.photos/300/300?random=3" alt="person-3">
          <div>
        
           
          </div>
        </header>
        <p class="subtitle">Des formations comprehensible et t'ennui jamais avec la systeme de jeu. Je recommande !</p>
        
      </div>
    </div>
  </section>
  <script>
        function drop() {
            const dropmenu = document.querySelector(".menu");
            dropmenu.classList.toggle('active');
        }
    </script>

</body>

</html>




