<?php
     include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
     include_once 'C:\xampp\htdocs\educaplay\model\utilisateurs.php';
    $error = "";

    $k=0;
    $utilisateur=null;
    $utilisateurc= new utilisateurc;
    $listeutilisateurs=$utilisateurc->recupererutilisateur();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["password"]) && 
        isset($_POST["username"])  
    ) {
        if (
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) &&
            !empty($_POST["password"])  && 
            !empty($_POST["username"]) 
        ) {
            
    foreach ($listeutilisateurs as $utilisateur)
     {
          if($utilisateur['username']==$_POST['username']) {
            $error = 'username takendd!!';
               $k=1;
          }
            }
        if($k==0) {

            $utilisateur = new utilisateur(
				$_POST['nom'],
                $_POST['prenom'], 
                password_hash($_POST['password'],PASSWORD_DEFAULT),
                $_POST['email'],
                $_POST['username']
            );
            $utilisateurc->ajouterutilisateur($utilisateur);
        }
        
        }
        else
            $error = "Missing information";
    }

if((isset($_POST['type']))&&($k==0)){
    $fb=$utilisateurc->recupererdernierutilisateur();
    $kh=$fb['idUtilisateur'];
   if($_POST['type']=='et'){
    $utilisateurc->ajouterjoueur($kh);
    header('Location:login.php');
   }
   else
   header('Location:insed.php?id='.$kh.'');

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/css/ins.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!----------------------------------------------------------------------------------------------------------------------->
    <nav>
    <a href="../Mainpage/index.php"> <img src="../Mainpage/pics/logo.png"> </a>
    <div class="nav-links" id="navLinks">
<ul>
    <li><a href="../Mainpage/index.php">ACCUEIL</a></li>
    <li><a href="">PLANS</a></li>
    <li><a href="">FONCTIONNALITES</a></li>
    <li><a href="">CONTACT</a></li>
</ul>
    </div>
<!----------------------------------------------------------------------------------------------------------------------->
<div class='singup'>
    <form class='form' method="POST" id='form'>
        <div class='moez'>
            <h2>S'inscire !</h2>    
            
        <div class="kw">
            <input type="text" name="prenom" placeholder="Ecrire votre prenom" id="prenom" class="pre"> <p id="errorPrenom" class="prenom"></p>
         
            <input type="text" name="nom" placeholder="Ecrire votre nom" id="nom" class="nom"> <p id="errorNom" class="no"></p>
        </div>
        <input type="text" name="username" placeholder="Ecrire votre username" id="username" > <p id="username" class="userr"><?php echo  $error; ?></p>
        
        <input type="email" name="email" placeholder="Ecrire votre email" id="email">   <p id="errorEmail" class="em"></p>
        
            <input type="password" name="password" placeholder="Ecrire votre mot de pass" id="password"> <p id="errorMdp" class="mdp"></p>
         
          <input type="password" name="password" placeholder="Confirmer votre mot de pass" id="password2">   <p id="errorMdp2"></p>
        
          <select name='type' id="sel" >
              <option value="et"><label>Etudient</label></option>
              <option value="en"><label>Enseignant</label></option>
          </select> <br></br>
            <input type="submit" value="Confirmer" id="yes">
            <p>En appuiant sur Confirmer vous accepter nos <a href="../html/term.html">termes et conditions </a> et notre <a href="../html/politique.html">politique de confidentialité</a></p>
            </div>
       
        </form>
</div>
<p class='par2'>Vous avez deja un compte? <a href="login.php">Logger vous ici</a></p>
<script src="../../assets/js/ins.js"></script>
</body>
</html>
