<?php
       include_once '../model/jeux.php';
    include_once '../controller/JeuxController.php';

        $error = "";
    // create joueur_score_jeux
 $jeux = null;
    // create an instance of the controller
    $jeuxC = new jeuxC();
    if (
        isset($_POST["idJeux"]) &&
		isset($_POST["question"]) &&		
        isset($_POST["reponseA"])  &&
        isset($_POST["reponseB"]) &&
		isset($_POST["reponseC"]) &&
        isset($_POST["correctAnswer"]) &&
		isset($_POST["idCours"]) &&
        isset($_POST["idCategorie"]) &&
		isset($_POST["reponseD"]) )
        {
        if (
            !empty($_POST["idJeux"]) && 
			!empty($_POST["question"]) &&
            !empty($_POST["reponseA"])  &&
            !empty($_POST["reponseB"]) &&
            !empty($_POST["reponseC"])  &&
            !empty($_POST["correctAnswer"]) && 
			!empty($_POST["idCours"]) &&
            !empty($_POST["idCategorie"])  &&
            !empty($_POST["reponseD"])   
        ) {
            $jeux = new jeux(
                $_POST['idJeux'],
                $_POST['question'],
                $_POST['reponseA'],
                $_POST['reponseB'],
                $_POST['reponseC'],
                $_POST['correctAnswer'],
                $_POST['idCours'],
                $_POST['idCategorie'],
                $_POST['reponseD']
			
            );
            $jeuxC->modifierJeux($jeux,$_POST["idJeux"]);
            header('Location:afficherjeux.php');
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
        
      <h1><?php echo $jeux->getQuestion(); ?></h1>
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
            <button class="btn"><a href="afficherjeux.php">Retour à la liste des score</a></button>
            </div>
<div id="error">
            <?php echo $error; ?>
            <?php
			if (isset($_POST["idJeux"])){
				$jeux = $jeuxC->recupererJeux($_POST["idJeux"]);
            		
		?>
        </div>
            <table>
                <thead>
                <tr>
                    <td>
                        
                        <label for="idJeux">id  jeux:
                        </label>
                    </td>
                    <td><input type="text" name="idJeux" id="idjeux" maxlength="20" value="<?php echo $jeux["idJeux"];?>"></td>
                </tr>
				<tr>
                    <td>
                        <label for="question">question:
                        </label>
                    </td>
                    <td><input type="text" name="question" id="question" maxlength="20" value="<?php echo $jeux["question"];?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="reponseA">reponseA:
                        </label>
                       
                    </td>
                
                    <td><input type="text" name="reponseA" id="reponseA" maxlength="20" value="<?php echo $jeux["reponseA"];?>"></td>
                        
                    </td>

                    </tr>
                    <tr>
                    <td>
                        <label for="reponseB">reponseB:
                        </label>
                        </td>
                    <td><input type="text" name="reponseB" id="reponseB" maxlength="20" value="<?php echo $jeux["reponseB"];?>"></td>   
                    </td>
                        </tr>

                    <td>
                        <label for="reponseC">reponseC:
                        </label>
                        </td>
                    <td><input type="text" name="reponseC" id="reponseC" maxlength="20" value="<?php echo $jeux["reponseC"];?>"></td>   
                    </td>
<tr>
<tr>

<td>

    <label for="correctAnswer">correctAnswer:
    </label>
    </td>
<td><input type="text" name="correctAnswer" id="correctAnswer" maxlength="20" value="<?php echo $jeux["correctAnswer"];?>"></td>   
</td>
    </tr>
    <tr>

<td>

    <label for="idCours">idCours:
    </label>
    </td>
<td><input type="text" name="idCours" id="idCours" maxlength="20" value="<?php echo $jeux["idCours"];?>"></td>   
</td>
                  </tr>
                 <tr>
                    <td>
                        <label for="idCategorie">idCategorie:
                        </label>
                       
                    </td>
                
                    <td><input type="text" name="idCategorie" id="idCategorie" maxlength="20"value="<?php echo $jeux["idCategorie"];?>"></td>
                        
                    </td>

                    </tr>
                    <td>
                        <label for="reponseD">reponseD:
                        </label>
                        <td><input type="text" name="reponseD" id="reponseD" maxlength="20" value="<?php echo $jeux["reponseD"];?>"></td>   

                        </td>
                        </tr>
                 
                   
                    <tr>     
                    <td>
                    <input type="submit" class="btn" value="Envoyer">
                        <input type="reset"  class="btn" value="Annuler" >
                        </td>
                     </tr>
                    
                
            </table>
            <?php
		}
		?>
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