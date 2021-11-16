<?php
       include_once '../model/joueur_score.php';
    include_once '../controller/JoueurScoreController.php';

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
			!empty($_POST["idJoueur"]) &&
            !empty($_POST["score"])  
        ) {
            $joueur_score_jeux = new joueur_score_jeux(
                $_POST["idJoueur"],
                $_POST["idJeux"],
                $_POST["score"] 
			
            );
            $joueur_score_jeuxC->modifierscore($joueur_score_jeux,$_POST["idJoueur"]);
            header('Location:jouer.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jouer.css">
    
    <title>User Display</title>
</head>
    <body>
        <hr>
        
      
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
<div id="error">
            <?php echo $error; ?>
            <?php
			if (isset($_POST['idJoueur'])){
				$joueur_score_jeux = $joueur_score_jeuxC->recupererscore($_POST['idJoueur']);
            		
		?>
        </div>
            <table>
                <thead>
                <tr>
                    <td>
                        
                        <label for="IdJeux">id  jeux:
                        </label>
                    </td>
                    <td><input type="text" name="idJeux" id="idJeux" value="<?php echo $joueur_score_jeux['idJeux']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="IdJoueur">idJoueur:
                        </label>
                    </td>
                    <td><input type="text" name="idJoueur" id="idJoueur" value="<?php echo $joueur_score_jeux['idJoueur']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="score">score:
                        </label>
                       
                    </td>
                   
                
                    <td><input type="text" name="score" id="score"  value="<?php echo $joueur_score_jeux['score']; ?>"  maxlength="20"></td>
                        
                    </td>
                    <tr>
                    <td>
                    <input type="submit" class="btn" >
                        <input type="reset"  class="btn" value="Annuler" >
                        </td>
                </tr>
            </table>
       
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

         <?php
		}
		?>
         </form>
    </body>
</html>