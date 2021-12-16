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
    <title>Profile</title>

    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap-icons/bootstrap-icons.css">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/instructor-profile.css">
    <link rel="stylesheet" type="text/css" href="profiledash.css">
    <link rel="stylesheet" type="text/css" href="avre.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



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
    
    <!-- ======= Sidebar ======= -->


        <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
           
        </div>
    <div class="wrapper">
    <?php

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
    <a href="settingE.php" class="btn">Modifier</a>
<div class="main2">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
           
        </div>




    <script src="../../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script>
        function cancel_hide(x) {
            $("#delete_button" + x).hide(0)
        }

        function delete_show(x) {
            $("#delete_button" + x).show(0)
        }
    </script>
</body>
</html>