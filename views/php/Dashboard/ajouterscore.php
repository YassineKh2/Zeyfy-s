<?php
   
    include_once 'C:\xampp\htdocs\educaplay\controller\JeuxController.php';
    include_once 'C:\xampp\htdocs\educaplay\model\joueur_score.php';
        $error = "";
    // create joueur_score_jeux
 $joueur_score_jeux = null;
    // create an instance of the controller
    $joueur_score_jeuxC = new joueur_score_jeuxC();
    if (
        isset($_POST["idJeux"]) &&
		isset($_POST["idJoueur"]) &&		
        isset($_POST["score"]) ) 
        {
        if (
            !empty($_POST["idJeux"]) && 
			!empty($_POST['idJoueur']) &&
            !empty($_POST["score"])  
        ) {
            $joueur_score_jeux = new joueur_score_jeux(
                $_POST['idJoueur'],
                $_POST['idJeux'],
                $_POST['score'] 
			
            );
            $joueur_score_jeuxC->ajouterscore($joueur_score_jeux);
            header('Location:C:\xampp\htdocs\educaplay\levelpage\views\php\jouer.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jouer.php">
    
    <title>User Display</title>
</head>
    <body>
        <hr>
        
        <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/indexa.php">
                        <span class="icon"><img src="..\..\images\logo.png" class="piccc" width="150%"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="users/utilisateur.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="afficherjeux.php">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Les Jeux</span>
                    </a>
                </li>
                <li>
                    <a href="chercherjeux.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Chercher jeux</span>
                    </a>
                </li>
                <li>
                    <a href="jouer.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Jouer</span>
                    </a>
                </li>
                <li>
                <li>
                    <a href="dashavis.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Les Avis</span>
                    </a>
                </li>
                <li>
                    <a href="dashreclamation.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Les Reclamation</span>
                    </a>
                </li>
                <li>
                <li>
                    <a href="..\User\singout.php">
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
                      <!---- search -->
                      <div class="search">
                        <label>
                            <input type="text" placeholder="Chercher ici">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
           
                
              <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Demande recente</h2>
                            <a href="#" class="btn">Tout voir</a>
                            </div>
        
        <form action="" method="POST">
            <div>
            <button class="btn"><a href="jouer.php">Retour à la liste des score</a></button>
</div>
            <table>
                <thead>
                <tr>
                    <td>
                        
                        <label for="IdJeux">id  jeux:
                        </label>
                    </td>
                    <td><input type="text" name="idJeux" id="idJeux" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="IdJoueur">idJoueur:
                        </label>
                    </td>
                    <td><input type="text" name="idJoueur" id="idJoueur" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="score">score:
                        </label>
                       
                    </td>
                   
                
                    <td><input type="text" name="score" id="score" maxlength="20"></td>
                        
                    </td>
                    <tr>
                    <td>
                    <input type="submit" class="btn" value="Envoyer">
                        <input type="reset"  class="btn" value="Annuler" >
                        </td>
                </tr>
            </table>
        </form>
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