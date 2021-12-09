<?php
include 'C:\xampp\htdocs\educaplay\controller\avisC.php';
$avisC=new avisC();
$listeavis=$avisC->afficheravis(); 



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashreclamation</title>
    <link rel="stylesheet" type="text/css" href="\educaplay\views\assets\css\Dashavis.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                      <div class="search">
                        <label>
                            <input type="text" placeholder="Chercher ici">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
           
                
              <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Reclamation recente</h2>
                            
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <td>Reclamation</td>
                                <td>Utilisateur</td>
                                <td>Date D'ajout</td>
                                <td>Traitement</td>
                                <td>Action</td>
                            </tr>
                        </thead> 
                        <tbody>
                    
            <?php  
            $nbr=0;
            foreach ($listeavis as $avis){
                if($avis['contenu']==''){
            ?>
                                <tr>
                                <td><?php echo $avis['reclamation'];?></td>
                                <td></td>
                                <td><?php echo $avis['dateAvis'];?></td>
                                <?php 
                                    if($avis['repondre'] == 0){
                                ?>
                                <td><a href="" class="btn">En cours</a></td>

                                <?php }else{?>
                                    <td><a href="" class="btn">Traiter</a></td>

                                <?php } ?>
                                <td><a href="../avis/supprimerReclamation.php?idAvis=<?php echo $avis['idAvis'];?>" class="btn">repondre</a></td>
                               
                                
                            </tr>

                
            <?php
                if($avis['nbrN']==0){
                    $nbr+=1;
                }
            }
            } ?>
               
                        </tbody>
                        </table>
                        <form action="../avis/modifrec.php">
                        <button type="submit" class="icon-button">
    <span class="material-icons">notifications</span>

  
    <span class="icon-button__badge"><?php echo $nbr?></span>
                            
  </button>
  </form>
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