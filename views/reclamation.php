<?php 
include_once 'C:\xampp\htdocs\projet\model\avis.php';
include_once 'C:\xampp\htdocs\projet\controller\avisC.php';
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
             '',$_POST['reclamation'],22/01/2021,''
           
         );
         $avisC->ajouteravis($avis);
         
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
  <link rel="icon" href="src/images/logo.png">
  <link rel="stylesheet" href="src/css/main.css">

 
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

  <title>Reclamation</title>
</head>

<body>

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