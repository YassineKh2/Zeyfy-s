<?php

include_once 'C:\xampp\htdocs\educaplay\controller\JeuxController.php';
$jeuxC=new jeuxC();
$tem=$_GET["search"];
$listeJeux=$jeuxC->afficherjeuxs($tem);
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jouer</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/jouer.css">
</head>
<body>
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
                    <a href="../formation/dashFormation.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Formations</span>
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
                <a href="dashboardcat.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Categorie</span>
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
                      <form action="chercherjeux.php" method="GET">
                      <div class="search">
                        <label>
                            <input type="search" placeholder="Chercher ici" name="search">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
</form>
           
                
              <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Demande recente</h2>
                            <a href="afficherjeux.php" class="btn">retour a la liste </a>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <td>IdJeux</td>
                                <td>Question</td> 
                                <td>reponseA</td>
                                <td>reponseB</td>
                                <td>reponseC</td> 
                              
                                <td>correctAnswer</td>
                                <td>NomCours</td>
                                <td>NomCategorie</td>
                                <td>reponseD</td>
                                <td>Modifer</td>
                                <td>Supprimer</td>
                                          
                            </tr>
                           
                        </thead> 
                        <tbody>
                        <?php 
                        foreach($listeJeux as $jeux){
                        ?>
                            <tr>
                        
                             <td><?php echo $jeux['idJeux']; ?></td>
                             <td><?php echo $jeux['question']; ?></td>
                             <td><?php echo $jeux['reponseA']; ?></td>
                             <td><?php echo $jeux['reponseB']; ?></td>
                             <td><?php echo $jeux['reponseC']; ?></td>
                             <td><?php echo $jeux['correctAnswer']; ?></td>
                             <td><?php echo $jeux['nomCours']; ?></td>
                             <td><?php echo $jeux['NomCategorie']; ?></td>
                             <td><?php echo $jeux['reponseD']; ?></td>

                    
                                <td>
                                <form method="POST" action="modifierJeux.php">
						            <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						            <input type="hidden" value=<?php echo $jeux['idJeux']; ?> name="idJeux">
					           </form>
                                </td>

                                <td><a href="supprimerJeux.php?idJeux=<?php echo $jeux['idJeux']; ?>" class="btn">Supprimer</a></td>
                            </tr>
                       <?php } ?>
                        </tbody>
                        </table>
                    
                    </div>  
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