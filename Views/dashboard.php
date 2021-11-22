<?php
 include_once '../Model/Categorie.php';
 include_once '../Controller/CategorieC.php';
 $categorieC=new categorieC();
$listecategories=$categorieC->afficherCategorie();
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
                        <!---- search -->
                        <div class="search">
                            <label>
                                <input type="text" placeholder="Chercher ici">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
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
                                            <td>Jeux</td>
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
                                           <td> <?php echo $categorie['idOffre']; ?></td>
                                           <td>
                                            <form method="post" action="formModifierCategorie.php">
						                     <input type="submit" class="btn modif" name="Modifier" value="Modifier">
						                     <input type="hidden" value=<?PHP echo $categorie['IdCategorie']; ?> name="IdCategorie">
					                        </form>
                                          </td>

                                           <td> 
                                           <a href="supprimerCategorie.php?IdCategorie=<?php echo $categorie['IdCategorie'];
                                           ?>">Supprimer </a>
                                           </td>
                                           </tr>
                                           <?php
                }
                                           ?>
                                    </tbody>
                                    </table>
                                </div>

                                <div class="recentorders">
                                <div class="cardheader">
                                    <h2>Demande recente</h2>
                                    <a href="#" class="btn">Ajouter</a>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Categorie</td>
                                        <td>Prix</td>
                                        <td>Offres</td>
                                        <td>Statut</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Python</td>
                                        <td>Programmation</td>
                                        <td>45Dt</td>
                                        <td>Paye avec réduction</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mathematique base 2</td>
                                        <td>Mathematique</td>
                                        <td>35Dt</td>
                                        <td>Non Paye</td>
                                        <td><span class="status return">Refuser</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mathematique base 3</td>
                                        <td>Mathematique</td>
                                        <td>35Dt</td>
                                        <td>Paye sans réduction</td>
                                        <td><span class="status inprogress">En cours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Système d'exploitation</td>
                                        <td>Réseau</td>
                                        <td>30Dt</td>
                                        <td>Paye</td>
                                        <td><span class="status pending">En Attente</span></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
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