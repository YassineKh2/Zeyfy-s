<?php

    include 'C:\xampp\htdocs\Project web\controllers\utilisateursC.php';
    include_once 'C:\xampp\htdocs\Project web\models\utilisateurs.php';
  
    $error = "";

    // create utilisateur
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurc = new utilisateurc();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
        isset($_POST["username"])&& 
        isset($_POST["email"]) && 
        isset($_POST["password"])&& 
        isset($_POST["password2"])
        
    ) {
        if (
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["username"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["password"])&& 
            !empty($_POST["password2"])
           
        ) {
            $utilisateur = new utilisateur(
				$_POST['nom'],
                $_POST['prenom'], 
				$_POST['password'],
                $_POST['email'],
                $_POST['username']
            );
            $utilisateurc->modifierutilisateur($utilisateur,$_SESSION['user_id']);
            
      
        }
        else
            $error = "Missing information";
    }
 

    if($_SESSION['auth']==false)
    header('Location:..\Login\login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="settings.css">
    
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/index.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="profiedash.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></ion-icon></span>
                        <span class="title">Mes Formation</span>
                    </a>
                </li>
                <li>
                    <a href="avis_et_reclamation.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Avis et Reclamation</span>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Paramétres</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Aide</span>
                    </a>
                </li>
                <li>
                    <a href="singout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Deconnection</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
           
        </div>
<form action="" method="POST" id="form">
    <div class="wrapper">   
        <div class="right">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    <?php $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']); 
        
                echo '    <div class="data">
                        <h4>Nom</h4>
                       <input type="text" name="nom" value='.$utilisateur['nomUtilisateur'].'>
                     </div>
                     <div class="data">
                       <h4>Prenom</h4>
                       <input type="text" name="prenom" value='.$utilisateur['prenomUtilisateur'].'>
                    </div>
                    <div class="data">
                    <h4>Nom de utilisateur</h4>
                    <input type="text" name="username" value='.$utilisateur['username'].'>
                 </div>
                    <div class="data">
                        <h4>Email</h4>
                        <input type="text" name="email" value='.$utilisateur['Email'].'>
                     </div>
                     <div class="data">
                        <h4>Mot De Pass</h4>
                        <input type="password" name="password" id="password1" value='.$utilisateur['mdpUtilisateur'].'> <p id="errorMdp" class="mdp"></p>
                        <ion-icon name="eye-outline" onclick="myFunction()" class="eyee"></ion-icon>
                        </div>
                     <div class="conf">
                     <h4>Confirmer Mot De Pass</h4>
                     <input type="password" name="password2" id="password2" value='.$utilisateur['mdpUtilisateur'].'> <p id="errorMdp2" class="mdp"></p>
                     </div>
                </div>
                <button id="sure" class="btn">Desactiver</button>   
            </div>
            
            <img  src="clow.jpg" onclick="" class="pic" width="40%">
            <input type="file"  class="pic2">';
        ?>
        </div>
        
    </div>
       <input type="submit" value="Modifier" class="btn" id='yes'>
        <input type="reset" value="Annuler" class="btn" id='no'>
</form>

 
       



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="modif.js"></script>

<script>
    //Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector('.navigation');
    let main= document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle("active");
        main.classList.toggle("active")
    }

    //adding hoverd class in selected div ! 
    let list =document.querySelectorAll(".navigation li");
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered')
    }
    list.forEach((item)=> 
    item.addEventListener('mouseover',activeLink));

    

    
    function myFunction() {
  var x = document.getElementById("password1");
  var y = document.getElementById("password2");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}

</script>

</body>
</html>