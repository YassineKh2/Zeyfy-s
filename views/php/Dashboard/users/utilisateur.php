<?php
	include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
	$utilisateurc=new utilisateurc();
	$listeutilisateurs=$utilisateurc->recupererutilisateur();
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jouer</title>
    <link rel="stylesheet" type="text/css" href="utilisateur.css">
</head>
<body>
<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/indexa.php">
                    <span class="icon"><img src="..\..\..\images\logo.png" class="piccc" width="150%"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="..\dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="utilisateur.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="../afficherjeux.php">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Les Jeux</span>
                    </a>
                </li>
                <li>
                    <a href="../chercherjeux.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Chercher jeux</span>
                    </a>
                </li>
                <li>
                    <a href="../jouer.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Jouer</span>
                    </a>
                </li>
                <li>
                    <a href="../dashavis.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Les Avis</span>
                    </a>
                </li>
                <li>
                    <a href="../dashreclamation.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Les Reclamation</span>
                    </a>
                </li>
                <li>
                <li>
                    <a href="..\..\User\singout.php">
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
                        <table>
                            <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>ID</td>
                                <td>Email</td>
                                <td>Etat</td>
                                <td>Activer</td>
                                <td>Désactiver</td>
                            </tr>
                        </thead> 
                        <tbody>
                        <?php // hné t7ot el boucle ely taffichi mté3ek ex foreach hné 7atit for just bech nwarik
                         foreach($listeutilisateurs as $utilisateur){
                             if($utilisateur['admin']==NULL)
                        echo '
                            <tr>
                                <td>'.$utilisateur['nomUtilisateur'].'</td>
                                <td>'.$utilisateur['prenomUtilisateur'].'</td>
                                <td>'.$utilisateur['idUtilisateur'].'</td>
                                <td>'.$utilisateur['Email'].'</td>
                                <td>'.$utilisateur['etat'].'</td>
                                <td><a href="activeruser.php?idUtilisateur='.$utilisateur['idUtilisateur'].'" class="btn">Activer</a></td>
                                <td><a href="desactiveuser.php?idUtilisateur='.$utilisateur['idUtilisateur'].'" class="btn">Désactiver</a></td>
                            </tr>';
                        } ?>
                        </tbody>
                        </table>
                        
                    </div>  
            </div>'
            
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