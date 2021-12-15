<?php
include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
include 'C:\xampp\htdocs\educaplay\controller\enseignantC.php';
if($_SESSION['auth']==false)
header('Location:..\Login\login.php');
$error = "";
$enseignantc= new enseignantc();
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
        header('Location:profile.php');
  
    }
    else
        $error = "Missing information";
}

if($_SESSION['auth']==false)
header('Location:..\Login\login.php');

if (isset($_POST['upload'])){
    $target= "C:/xampp/htdocs/idk/views/assets/images/Userpics/".basename($_FILES['image']['name']);
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
    <title>Profile</title>

    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap-icons/bootstrap-icons.css">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="../../assets/style.css">
   
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="settings.css">


</head>
<body>
    <body>

        <header id="header" class="header fixed-top d-flex align-items-center">
    
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="../../assets/images/logo.png" size="50%">
                    <span class="d-none d-lg-block">EducaPlay</span>
                </a>
            </div><!-- End Logo -->
    
            <!--  <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div>-->
            <!-- End Search Bar -->
    
            <nav class="header-nav ms-auto ">
                <ul class="d-flex align-items-center">
    
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->
    
    
                    <li class="nav-item dropdown pe-3">
                            <?php $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']);   
    $type="";
    if($utilisateur['typee']==0)
        $type="Etudiant";
    else
    {
    $enseignant=$enseignantc->recupererenseignant($_SESSION['user_id']);
$type=$enseignant['etude'];
    }
    ?>
                        <a class="nav-link nav-profile d-flex align-items-center pe-3 py-1" href="#" data-bs-toggle="dropdown">
                            <img src="../../assets/images/Userpics/<?php echo $utilisateur['photo']?>" alt="Profile" class="rounded-circle" style="max-height: 45px;width:45px">
                            <span class="d-none d-md-block dropdown-toggle ps-2 py-0"><?php echo $utilisateur['nomUtilisateur']." ".$utilisateur['prenomUtilisateur'] ?></span>
                        </a><!-- End Profile Iamge Icon -->
    
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">    
                            <li class="dropdown-header">
                                <h6><?php echo $utilisateur['nomUtilisateur']." ".$utilisateur['prenomUtilisateur'] ?></h6>
                                <span><?php echo $type ?></span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
    
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="profile.php">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
    
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="setting.php">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
    
                            <!--      <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>  -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
    
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="singout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>
    
                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
    
                </ul>
            </nav><!-- End Icons Navigation -->
    
        </header><!-- End Header -->

    <form action="" method="POST" id="form">
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
            <br>
            <input type="submit" value="Changer photo" id="yess" name="upload" class="bbb"> 
            </div>
           ';
        ?>
        </div>
        
    </div>
       <input type="submit" value="Modifier" class="btn" id='yes'> 
        <input type="reset" value="Annuler" class="btn" id='no'>

</form>

    <script src="../../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="modif.js"></script>

    <script>
        function cancel_hide(x) {
            $("#delete_button" + x).hide(0)
        }

        function delete_show(x) {
            $("#delete_button" + x).show(0)
        }

            
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