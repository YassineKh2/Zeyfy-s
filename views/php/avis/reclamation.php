<?php 
include_once 'C:\xampp\htdocs\educaplay\model\avis.php';
include_once 'C:\xampp\htdocs\educaplay\controller\avisC.php';
include'C:\xampp\htdocs\educaplay\controller\mail.php';
include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
$utilisateurc = new utilisateurc;

$error = "";


 // create adherent
 $avis = null;

 // create an instance of the controller
 $avisC = new avisC();
 if (
     isset($_POST["reclamation"])
      
 
 ) {
     if (
         !empty($_POST["reclamation"])
     ) {
         $avis = new avis(
             '',$_POST['reclamation'],22/01/2021,0,''
           
         );
         $avisC->ajouteravis($avis);
        
     }
  
 }
 $email='ziedghanem30@gmail.com';
 $email_content = array(
    'Subject' => 'IMPORTANT!! ETUDIER RECLAMATION by EDUCAPLAY',
    'body' => "Bonjour Mr/Mme zied,
    votre réclamation est en coure de traitement.
    cordialement,
    EDUCAPLAY"
);
sendemail($email,$email_content);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="\educaplay\views\assets\images\logo.png">
  <link rel="stylesheet" href="\educaplay\views\assets\css\main.css">

 
  <script src="https://kit.fontawesome.com/56a94e38db.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../../assets/css/userd.css">


  <title>Reclamation</title>
</head>

<body>
       <img class="logo" src="\educaplay\views\assets\images\logo.png" alt="">
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


  	<!-- Contact -->
		<section id="contact">
      <div class="container">
        <div class="title">
          
          <h3>RÉCLAMATION</h3>
     </div>
        <form action="#" method="POST">
          <textarea name="reclamation" placeholder="Entrer votre reclamation"></textarea>
          <button type="submit">Envoyer</button>
        
        </form>
     </div>
      
		</section>
  <!----------------- script for drop donw menu---------------------->
  <script>
        function drop() {
            const dropmenu = document.querySelector(".menu");
            dropmenu.classList.toggle('active');
        }
    </script>
    </body>
    </html>