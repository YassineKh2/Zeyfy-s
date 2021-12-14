<?php 
include_once 'C:\xampp\htdocs\projet\model\avis.php';
include_once 'C:\xampp\htdocs\projet\controller\avisC.php';
include'../controller/mail.php';
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
  <link rel="icon" href="src/images/logo.png">
  <link rel="stylesheet" href="src/css/main.css">

 
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

  <title>Reclamation</title>
</head>

<body>
       <img class="logo" src=".\src\images\logo.png" alt="">
       <nav>
        
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