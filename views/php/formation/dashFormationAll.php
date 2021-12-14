<?php
include '../../../controller/FormationC.php';

$formationC=new FormationC();
$listeFormations=$formationC->afficherformations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dashboardyo.css">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
                    <a href="../Dashboard/users/utilisateur.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="../Dashboard/afficherjeux.php">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Les Jeux</span>
                    </a>
                </li>
                <li>
                    <a href="../Dashboard/chercherjeux.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Chercher jeux</span>
                    </a>
                </li>
                <li>
                    <a href="../Dashboard/jouer.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Jouer</span>
                    </a>
                </li>
                <li>
                <li>
                    <a href="../Dashboard/dashavis.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Les Avis</span>
                    </a>
                </li>
                <li>
                    <a href="../Dashboard/dashreclamation.php">
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
                                    <a href="dashFormation.php" class="btn">Demmande</a>
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
                                        <td><?php echo $formation['descreptions']; ?></td>
                                        <td><ion-icon name="download-outline"></td>
                                        <td>
                                        <?php echo $formation['statut']; ?>
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
    <div class="details">
                <!---- Order list -->
                <div class="recentorders">
                    <div class="cardheader">
                        <h2>Charts</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <br><br>
                            </tr>
                            <tr>
                                <canvas id="doughnut-chart" width="800" height="200"></canvas>
                            </tr>
                            <tr>
                                <br><br>
                            </tr>
                            <tr>
                                <canvas id="bar-chart-horizontal" width="800" height="200"></canvas>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <script>

                new Chart(document.getElementById("doughnut-chart"), {
                    type: 'doughnut',
                    data: {
                        labels: ["Programmation", "Mathématiques", "Réseaux"],
                        datasets: [{
                            label: "Population (millions)",
                            backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
                            data: [<?php echo $listeprog;?>, <?php echo $listemath;?>, <?php echo $listeres;?>]
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Nombre des formations de chaque categorie'
                        }
                    }
                });

                new Chart(document.getElementById("bar-chart-horizontal"), {
                    type: 'horizontalBar',
                    data: {
                        labels: ["Joueurs", "Enseignants"],
                        datasets: [{
                            label: "Population (millions)",
                            backgroundColor: ["#3e95cd", "#8e5ea2"],
                            data: [<?php echo $listejoueurs;?>, <?php echo $listeenseignants;?>]
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Nombre des Utilisateurs'
                        }
                    }
                });
            </script>


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