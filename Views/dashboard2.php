<?php

include_once '../Model/Offre.php';
include_once '../Controller/OffreC.php';

 $offreC=new offreC();
$listeoffres=$offreC->afficherOffre();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Document</title>
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
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Categorie</span>
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
                        <span class="title">Sing Out</span>
                    </a>
                </li>
                
            </ul>
        </div>

<!---- main -->
            <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                       
                        <!---- mainImg -->
                        <div class="user">
                            <img src="logo.png">
                        </div>
                    </div>
                                          
                
                    <div class="details">
                                <div class="recentorders">
                                <div class="cardheader">
                                    <h2>Offre de réduction</h2>
                                    <a href="formAjoutOffre.php" class="btn">Ajouter</a>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Offre</td>
                                        <td>Nom Offre</td>
                                        <td>Date debut offre</td>
                                        <td>Pourcentage offre</td>
                                        <td>Date fin offre</td>
                                        <td>Modifier</td>
                                        <td>Supprimer</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 foreach($listeoffres as $offres) {
                                ?>
                                    <tr>
                                           <td> <?php echo $offres['idOffre']; ?></td>
                                           <td> <?php echo $offres['NomOffre']; ?></td>
                                           <td> <?php echo $offres['dateDebutOffre']; ?></td>
                                           <td> <?php echo $offres['pourcentageOffre']; ?></td>
                                           <td> <?php echo $offres['dateFinOffre']; ?></td>
                                           <td>
                                            <form method="POST" action="formModifierOffre.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $offres['idOffre']; ?> name="idOffre">
					                        </form>
                                          </td>

                                           <td>
                                           <form method="POST" action="supprimerOffre.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $offres['idOffre']; ?> name="idOffre">
					                        </form> 
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                </tbody>
                                </table>
                            </div>  
                        </div>
                       
                    </div>
            </div>
            <form method="post" action="dashboard.php">
		 <input type="submit" class="button" name="Catégorie" value="Catégorie">
	</form>
            </div>
    </div>

    <form method="post" action="dashboard.php">
		 <input type="submit" class="button" name="Catégorie" value="Catégorie">
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