<?php
    include_once 'C:\xampp\htdocs\Project web\controllers\utilisateursC.php';
    include_once 'C:\xampp\htdocs\Project web\models\utilisateurs.php';

    $error = "";

    // create utilisateur
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurc = new utilisateurc();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["id"]) && 
        isset($_POST["email"]) && 
        isset($_POST["password"])
    ) {
        if (
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
			!empty($_POST["id"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["password"])
        ) {
            $utilisateur = new utilisateur(
				$_POST['nom'],
                $_POST['prenom'], 
				$_POST['password'],
                $_POST['email'],
                $_POST['id']
            );
            $utilisateurc->modifierutilisateur($utilisateur, $_POST["id"]);
            header('Location:utilisateur.php');
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
    <title>Jouer</title>
    <link rel="stylesheet" type="text/css" href="modifuser.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">    
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Consumers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                
            </ul>
        </div>
     
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>  
              <div class="details">
                    <a href='utilisateur.php' class="b2">Retourner</a>
                    <form action="" method="POST">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Modifer Utilisateur</h2>
                        </div>
                        
                        <table class='tab'>
                            <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>ID</td>
                                <td>Email</td>
                                <td>Mot de pass</td>
                            </tr>
                        </thead> 
                        <tbody>
                        <?php // hné t7ot el boucle ely taffichi mté3ek ex foreach hné 7atit for just bech nwarik
                                $utilisateur = $utilisateurc->recupererutilisateurinfo($_GET['idUtilisateur']); 

                        echo '  
                            <tr>
                                <td><input type="text" name="nom" value='.$utilisateur['nomUtilisateur'].' placeholder="Ecrire votre prenom" id="prenom" class="modif"></td>
                                <td><input type="text" name="prenom" value='.$utilisateur['prenomUtilisateur'].' placeholder="Ecrire votre nom" id="nom" class="modif"></td>
                                <td><input type="number" min="0" name="id"  readonly value="',$utilisateur['idUtilisateur'],'"placeholder="Modifer votre id" id="nom" class="modif"></td>
                                <td><input type="email" name="email" value='.$utilisateur['Email'].' placeholder="Ecrire votre email" id="email" class="modif"></td>
                                <td> <input type="text" name="password" value='.$utilisateur['mdpUtilisateur'].' placeholder="Ecrire votre mot de pass" id="password" class="modif"></td>
                      
                            </tr>';
                           ?>
                        </tbody>
                        </table>
                       
                    </div>  
                    <br>
                    <input type="submit" value="Modifier" class="btn">
                    <input type="reset" value="Annuler" class="btn">
                </form>
            </div>
            
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        

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
        </script>
    </body>
</html>