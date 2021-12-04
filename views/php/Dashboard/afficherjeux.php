<?php

include_once 'C:\xampp\htdocs\educaplay\controller\JeuxController.php';
$jeuxC=new jeuxC();
$listeJeux=$jeuxC->afficherJeux();
$listeJeux2=$jeuxC->afficherJeux();
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
                            <a href="ajouterjeux.php" class="btn">ajouter </a>
                            <button id="tr_button_afficher" class="btn">afficher plus.. </button>
                            <button id="tr_button_afficher_moins" style="display:none" class="btn">afficher moins.. </button>
                        </div>

                        <div style="display:flex;justify-content;flex-start">

                        
                            <table >
                                <thead>
                                <tr>
                                    <td>IdJeux</td>
                                    <td>Question</td> 
                                    <td>idCours</td>
                                    <td>idCategorie</td>
                               
                                
                                            
                                </tr>
                            
                                </thead> 
                                <tbody>
                                <?php 
                                foreach($listeJeux as $jeux){
                                ?>
                                    <tr>
                                
                                    <td><?php echo $jeux['idJeux']; ?></td>
                                    <td><?php echo $jeux['question']; ?></td>
                                    <td><?php echo $jeux['idCours']; ?></td>
                                    <td><?php echo $jeux['idCategorie']; ?></td>
                            
                                    
                                
                                
                                
                                 </tr>
                                <?php } ?>
                                </tbody>
                        
                            </table>

                            <!-- tableau2-->
                            <table id="table2" style="display:none; position:relative;right:1rem">
                                <thead>
                                <tr>
                                <td></td>
                                    <td >correctAnswer</td>
                                    <td >reponseA</td>
                                    <td >reponseB</td>
                                    <td >reponseC</td> 
                                    <td >reponseD</td>
                                    <td >Modifer</td>
                                    <td >Supprimer</td>
                                            
                                </tr>
                            
                                </thead> 
                                <tbody>
                                <?php 
                                foreach($listeJeux2 as $jeux){
                                ?>
                                    <tr>
                                <td></td>
                                
                                <td ><?php echo $jeux['reponseA']; ?></td>
                                    <td><?php echo $jeux['reponseB']; ?></td>
                                    <td><?php echo $jeux['reponseC']; ?></td>
                                    <td><?php echo $jeux['reponseD']; ?></td>
                                    <td><?php echo $jeux['correctAnswer']; ?></td>
                                

                            
                                        <td>
                                        <form method="POST" action="modifierJeux.php">
                                            <input  type="submit" class="btn modif" name="Modifier" value="Modifier">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function (){
    $("#tr_button_afficher").click(function(){
        $("#table2").show(300)
        $("#tr_button_afficher").hide(0)
        $("#tr_button_afficher_moins").show(0)
        

    });

});

$(document).ready(function (){
    $("#tr_button_afficher_moins").click(function(){
        $("#table2").hide(10)
        $("#tr_button_afficher_moins").hide(0)
        $("#tr_button_afficher").show(0)
        

    });

});
</script>
</body>
</html>