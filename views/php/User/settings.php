<?php

    include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
  
    $error = "";

    // create utilisateur
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurc = new utilisateurc();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
        isset($_POST["username"])&& 
        isset($_POST["email"]) && 
        isset($_POST["password"])&& 
        isset($_POST["password2"])
        
    ) {
        if (
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["username"]) && 
            !empty($_POST["email"]) 
           
        ) {
            $utilisateur = new utilisateur( 
				$_POST['nom'],
                $_POST['prenom'], 
				password_hash($_POST['password'],PASSWORD_DEFAULT),
                $_POST['email'],
                $_POST['username'],'',''
            );
            $utilisateurc->modifierutilisateur($utilisateur,$_SESSION['user_id']);
            header('Location:profiedash.php');
      
        }
        else
            $error = "Missing information";
    }

    if($_SESSION['auth']==false)
    header('Location:..\Login\login.php');

    if (isset($_POST['upload'])){
        $target= "C:/xampp/htdocs/educaplay/views/assets/images/Userpics/".basename($_FILES['image']['name']);
        $image=$_FILES['image']['name'];
        $utilisateurc->modifierimage($image,$_SESSION['user_id']);
        move_uploaded_file($_FILES['image']['tmp_name'],$target);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="settingsU.css">
    
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
                    <a href="../avis/reclamation.php">
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
<form action="" method="POST" id="form" enctype="multipart/form-data">
    <div class="wrapper">   
        <div class="right">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    <?php $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']); 
        
                echo '    <div class="data">
                        <h4>Nom</h4>
                       <input type="text" name="nom" id="nom" value='.$utilisateur['nomUtilisateur'].'> <p id="errorNom" class="prenom"></p>
                     </div>
                     <div class="data">
                       <h4>Prenom</h4>
                       <input type="text" name="prenom" id="prenom" value='.$utilisateur['prenomUtilisateur'].'> <p id="errorPrenom" class="no"></p>
                    </div>
                    <div class="data">
                    <h4>Nom de utilisateur</h4>
                    <input type="text" name="username" value='.$utilisateur['username'].'> <p id="username" class="userr"></p>
                 </div>
                    <div class="data">
                        <h4>Email</h4>
                        <input type="text" name="email" id="email" value='.$utilisateur['Email'].'> <p id="errorEmail" class="em"></p>
                     </div>
                     <div class="data">
                        <h4>Mot De Passe</h4>
                        <input type="password" name="password" id="password" value="" onclick="ver()"> <p id="errorMdp" class="mdp"></p>
                        <ion-icon name="eye-outline" onclick="myFunction()" class="eyee"></ion-icon>
                        </div>
                     <div class="conf">
                     <h4>Confirmer Mot De Passe</h4>
                     <input type="password" name="password2" id="passwordd" value=""> 
                     </div>
                </div>  
            </div>
            
            <img  src="../../assets/images/Userpics/'.$utilisateur['photo'].'" onclick="" class="pic" width="40%">
            <div class="picc">
            <input type="file" name="image" class="bb">
            <input type="submit" value="Changer photo" id="yess" name="upload" class="bbb"> 
            </div> 
           ';
        ?>
         
        </div>
        
    </div>
       <input type="submit" value="Modifier" class="btn" id='yes' name="upload">
        <input type="reset" value="Annuler" class="btn" id='no'>

</form>
<!-- <div class="picc">
<form action="settings.php" method="POST" enctype="multipart/form-data">
 <input type="file" name="image" class="bb">
 <input type="submit" value="Changer photo" id='yess' name="upload" class="bbb"> 
 </form>
       
</div>     -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="modif.js"></script>

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

    

    
    function myFunction() {
  var x = document.getElementById("password");
  var y = document.getElementById("passwordd");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}

</script>

</body>
</html>