<?php 
include_once 'C:\xampp\htdocs\projet\model\avis.php';
include_once 'C:\xampp\htdocs\projet\controller\avisC.php';
$error = "";

 // create adherent
 $avis = null;

 // create an instance of the controller
 $avisC = new avisC();
 if (
     isset($_POST["contenu"])
      
 
 ) {
     if (
         !empty($_POST["contenu"])
     ) {
         $avis = new avis(
             $_POST['contenu'],
             '',22/01/2021,''
           
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

  <title>Avis</title>
</head>

<body>
  

  	<!-- Contact -->
		<section id="contact">
      <div class="container">
        <div class="title">
          <h6>Une question ? un conseil ?</h6>
          <h3>Contactez-nous</h3>
        </div>
        <form  method="POST">
          
          <textarea name="contenu" placeholder="Entrer votre avis"></textarea>

          
              
       
          <button type="submit">Envoyer</button>  

        </form>
      </div>
      
        
     
  
      
      
		</section>
    
<!-- checkboxs -->
<section id="contact">
<div class="container">
    <div class="title">
            <h6>Vous avez une Reclamation ?</h6>
      </div>
                      <form  method="POST">
          
                         <button type="submit"><a href="reclamation.php">Reclamation</button> <a>
                         
                    </form>
                
  </div>    
</section >        
<!-- chiffres -->
		<section id="facts">
			
			<div class="container">
				<h3>Eduplay en quelques chiffres</h3>
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
		
    
		
 	<!-- les avis des clients -->
  <section id="reviews" class="container">
    <h2 class="title-2">Ce que pensent nos clients</h2>
    <div class="cards">
      <div class="card">
        <header>
          <img src="https://picsum.photos/300/300?random=1" alt="person-1">
          <div>
            <h3 class="title-3">Ahmed jrd</h3>
            
          </div>
        </header>
        <p class="subtitle">Des formations divers,amusant et utile. Que demander de plus !</p>
        
      </div>
      <div class="card">
        <header>
          <img src="https://picsum.photos/300/300?random=2" alt="person-2">
          <div>
            <h3 class="title-3">Maryem ded</h3>
            
          </div>
        </header>
        <p class="subtitle">La qualité des formations est top. Vous ne serez pas deçu !</p>
        
      </div>
      <div class="card">
        <header>
          <img src="https://picsum.photos/300/300?random=3" alt="person-3">
          <div>
            <h3 class="title-3">Mohamed arr</h3>
           
          </div>
        </header>
        <p class="subtitle">Des formations comprehensible et t'ennui jamais avec la systeme de jeu. Je recommande !</p>
        
      </div>
    </div>
  </section>
 
</body>

</html>




