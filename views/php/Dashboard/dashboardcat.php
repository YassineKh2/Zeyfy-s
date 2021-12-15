<?php
 include_once '../../../model/Categorie.php';
 include_once '../../../controller/CategorieC.php';
 $categorieC=new categorieC();
$listecategories=$categorieC->afficherCategorie();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../categorie/Front/dashboard.css">
    <title>Document</title>
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
                             <!---- Order list -->
                            <div class="recentorders">
                                <div class="recentorders">
                                    <div class="cardheader">
                                        <h2>Catégorie</h2>
                                        <a href="formAjoutCategorie.php" class="btn">Ajouter</a>
                                    </div>
                                    <table>
                                   
                                        <thead>
                                         <tr>
                                            <td>Id Catégorie</td>
                                            <td>Nom Catégorie</td>
                                            <td>Offre</td>
                                            <td>Modifier</td>
                                            <td>Supprimer</td>
                                          </tr>
                                        </thead>
                                       
                                    <tbody>
                                    <?php
                foreach($listecategories as $categorie) {
             ?>
                                        <tr>
                                           <td> <?php echo $categorie['IdCategorie']; ?></td>
                                           <td> <?php echo $categorie['NomCategorie']; ?></td>
                                           <td> <?php echo $categorie['NomOffre']; ?></td>
                                           <td>
                                            <form method="post" action="formModifierCategorie.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $categorie['IdCategorie']; ?> name="IdCategorie">
					                        </form>
                                          </td>

                                           <td> 
                                           <form method="post" action="supprimerCategorie.php">
						                     <input type="submit" class="btn supp" name="Supprimer" value="Supprimer">
						                     <input type="hidden" value=<?PHP echo $categorie['IdCategorie']; ?> name="IdCategorie">
					                        </form> 
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                    </tbody>
                                    </table>
                                </div>
                                <a href="dashboardoffre.php" class="btn">Les Offres</a>

                          

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