<?php
 include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
 include 'C:\xampp\htdocs\educaplay\controller\enseignantC.php';
 if($_SESSION['auth']==false)
 header('Location:..\Login\login.php');
 $utilisateurc = new utilisateurc();
 $enseignantc= new enseignantc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profiledash.css">
    
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/index.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="profiedash.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></ion-icon></span>
                        <span class="title">Mes Formation</span>
                    </a>
                </li>
                <li>
                    <a href="avis_et_reclamation.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Avis et Reclamation</span>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Paramétres</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Aide</span>
                    </a>
                </li>
                <li>
                    <a href="singout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Deconnection</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
           
        </div>
    <div class="wrapper">
    <?php $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']);   
    $type="";
    if($utilisateur['typee']==0)
        $type="Etudiant";
    else
    {
    $enseignant=$enseignantc->recupererenseignant($_SESSION['user_id']);
$type=$enseignant['etude'];
    }

     echo'    <div class="left">
            <img src="../../assets/images/Userpics/'.$utilisateur['photo'].'" alt="user" width="200">
            <h4>'.$utilisateur['nomUtilisateur'].'<br>'.$utilisateur['prenomUtilisateur']. '</h4>
             <p>'.$type.'</p>
        </div>  
        <div class="right">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    
                    <div class="data">
                        <h4>Nom</h4>
                        <p>'.$utilisateur['nomUtilisateur'].'</p>
                     </div>
                     <div class="data">
                       <h4>Prenom</h4>
                        <p>'.$utilisateur['prenomUtilisateur'].'</p>
                    </div>
                    <div class="data">
                       <h4>Nom de utilisateur</h4>
                        <p>'.$utilisateur['username'].'</p>
                    </div>
                    <div class="data">
                        <h4>Email</h4>
                        <p>'.$utilisateur['Email'].'</p>
                     </div>
                     <div class="data">
                        <h4>Mot De Passe</h4>
                        <p>******************</p>   
                     </div>';
                     ?>
                </div>
            </div>
          
        
        </div>
    </div>
    <a href="settings.php" class="btn">Modifier</a>



 
            














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