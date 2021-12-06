<?php
include '../../../controller/FormationC.php';

$formationC=new FormationC();
$listeFormations=$formationC->afficherformationsd();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../controller/css/dashboard.css">
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
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="consumers.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Consumers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Formations</span>
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
                            <img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\034bd391dfa71378b23129858f3d71ba.jpg">
                        </div>
                    </div>
                 
                    <div class="details">
                             <!---- Order list -->
                            <div class="recentorders">
                                <div class="cardheader">
                                    <h2>Demande recente</h2>
                                    <a href="dashFormationAll.php" class="btn">Tout voir</a>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Catégorie</td>
                                        <td>Titre</td>
                                        <td>Prix</td>
                                        <td>Description</td>
                                        <td>Fichiers</td>
                                        <td>Statue</td>
                                        <td>Date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                      foreach($listeFormations as $formation){
                                     ?>
                                    <tr>
                                        <td><?php echo $formation['filiere']; ?></td>
                                        <td><?php echo $formation['titre_f']; ?></td>
                                        <td><?php echo $formation['prix_f']; ?> Dinar</td>
                                        <td><?php echo $formation['descriptions']; ?></td>
                                        <td><ion-icon name="download-outline"></td>
                                        <td>
                                            <form action="modifierStatut.php" method="POST">
                                        <div class="container">
                                        <div class="radio">
                                        <input id="radio-1" name="radioo" type="radio" value="acceptée">
                                        <label for="radio-1" class="radio-label">Accepter</label>
                                        </div>
                                        <div class="radio">
                                        <input id="radio-2" name="radioo" type="radio" value="refusée">
                                        <label  for="radio-2" class="radio-label">Refuser</label>
                                        </div>
                                        </div>
                                        <input type="submit" value="valider">
                                        <input type="hidden" name="id_formation" value="<?php echo $formation['id_formation'] ?>">
                                        </form>
                                        </td>
                                        <td><?php echo $formation['date_c']; ?></td>
                                    </tr>
                                                      <?php
                    }
                      
                       ?>
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