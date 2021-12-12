<?php	
    include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
    $_SESSION['auth']=false;
    $verif=0;
    $utilisateur= new utilisateurc();
   
    $listeutilisateurs=$utilisateur->recupererutilisateur();
    foreach ($listeutilisateurs as $utilisateur)
    {
        if((isset($_POST['email']))&&(isset($_POST['password'])))
        {
          $verifm = password_verify($_POST['password'], $utilisateur['mdpUtilisateur']);
        
    if ((($_POST['email']==$utilisateur['Email'])&&($verifm==true)&&($utilisateur['etat']==1))||(($_POST['email']==$utilisateur['username'])&&($verif==true)&&($utilisateur['etat']==1))) 
    {
    $verif=1;
    $_SESSION['auth']=true;
    $_SESSION['user_name']=$utilisateur['nomUtilisateur'];
    $_SESSION['user_id']=$utilisateur['idUtilisateur'];
    $_SESSION['etat']=$utilisateur['admin'];
    $type=$utilisateur['typee'];
    header('Location:log.php?type='.$type.'');
    }
    else
    $verif=2;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
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
<div class="log">
    <img src="../../assets/images/idk2.png" class="avatar">
    <form action="" class='form' method="POST">
          <h2>LOGIN</h2>    
          <p>Email / Nom d'utilisateur</p>
        <input type="text" name='email' class='box' placeholder="Saiser votre email" >
        <p>Mot De Passe</p>
        <input type='password' name='password' class="box" placeholder="Saiser votre mot de passe" >
        <input type="submit" value="LOGIN" id='submit' action="veriflog.php"> <p class='mochkla'><?php if($verif==2) echo'Information erroné !'; ?></p>
        <a href="#" class="k">Mot de pass oublié?</a><br>
    </form>
    <p class="kek">Vous n'avez pas de compte? <a href="ins.php">Inscrivez vous ici</a></p>
  </div>
  
 <?php
	
	
?>
<!----------------------------------------------------------------------------------------------------------------------
<footer class="footer-distributed">

			<div class="footer-left">
          <img src="../Mainpage/pics/logo.png">
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
					<p><a href="mailto:guetat1youssef@gmail.com">guetat1youssef@gmail.com</a></p>
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
        
<--------------------------------------------------------------------------------------------------------------------->
</body>
</html>
