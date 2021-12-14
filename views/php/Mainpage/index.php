<?php
include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
$utilisateurc = new utilisateurc;
?>
<?php
include 'C:\xampp\htdocs\educaplay\controller\FormationC.php';

$formationC = new FormationC();
if(strcmp($_GET['categ'],'')!=0)
$listeFormations = $formationC->afficherformationsc($_GET['categ']);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCAPLAY - by the ZEYFY's</title>
    <link rel="stylesheet" href="../../assets/css/stylemainpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/56a94e38db.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../assets/css/forrr.css">
    <link rel="stylesheet" href="../../assets/css/userd.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"> <img src="pics/logo.png"> </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">ACCUEIL</a></li>
                    <li><a href="">PLANS</a></li>
                    <li><a href="../avis/reclamation.php">RECLAMATION</a></li>
                    <li><a href="../avis/index.php">CONTACT</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

        <div class="text-box">
            <h1>ETUDIEZ</h1>
            <br>
            <h1>LORSQUE</h1>
            <br>
            <h1>VOUS</h1>
            <br>
            <h1>JOUEZ</h1>
            <br>
        </div>
        <?php
        if ($_SESSION['auth'] == false)
            echo '<span><a href="../Login/login.php"></a></span>';
        else {
            $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']);
            echo '<div class="action">
      <div class="profile" onclick="drop();">
          <img src="../../assets/images/Userpics/' . $utilisateur['photo'] . '" width="300">
      </div>
      <div class="menu">
          <h3>' . $utilisateur['username'] . '<br><p class="a">Etudient</p></h3>
         <ul>
              <li class="fas fa-user"><a href="..\User\profiedash.php">Mon Profile</a></li><br>
              <li class="far fa-clipboard"><a href="#">Mes Formation</a></li><br>
              <li class="fas fa-edit"><a href="..\User\settings.php">Paramétres</a></li><br>
              <li class="fas fa-sign-out-alt"><a href="..\User\singout.php">Deconnection</a></li>
         </ul>
      </div>
  </div>';
        }
        ?>
        <?php  
         if ($_SESSION['auth'] == false)   
       echo'<a href="../Login/login.php"> <button class="button-get" role="button">Jouez !</button></a>';
       else
       echo'<a href="../Game/indexlevel.php"> <button class="button-get" role="button">Jouez !</button></a>';
       ?>
    </section>
    <!------------- formation------------>
    <section class="formation">
        <h1>Exemple des formations</h1>
        <p> nous-contactez pour plus des informations

        <div class="row">
            <div class="formation-col">
                <img src="pics/formation1.jpg">
                <div class="layer">
                    <a href="index.php?categ=Programmation">
                        <h3>Programmation</h3>
                    </a>
                </div>
            </div>
            <div class="formation-col">
                <img src="pics/formation2.jpg">
                <div class="layer">
                    <a href="index.php?categ=Mathématiques">
                        <h3>Mathématiques</h3>
                    </a>
                </div>
            </div>
            <div class="formation-col">
                <img src="pics/formation1.jpg">
                <div class="layer">
                    <a href="index.php?categ=Réseaux">
                        <h3>Réseaux</h3>
                    </a>
                </div>
            </div>
        </div>

        <?php
        foreach ($listeFormations as $formation) {
        ?>
            <div class="instructor-profile_courses_list1">
                <div class="course_align_v1">
                    <img src="../../assets/images/img_profil.jpg" alt="Profile" class="courses_list_img">
                    <div class="course_align1">
                        <h1 class="course_title"><?php echo $formation['titre_f']; ?></h1>
                    </div>
                </div>
                <div class="course_align1">
                    <div class="course_v3">
                        <div class="course_categorie"><?php echo $formation['filiere']; ?></div>
                        <div class="course_categorie" style="margin-left:1rem"><?php echo $formation['prix_f']; ?> Dinar</div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </section>












    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="pics/logo.png">
            <h3>EDUCAPLAY</h3>

            <p class="footer-links">
                <a href="#">ACCUEIL</a>
                |
                <a href="#">PLANS</a>
                |
                <a href="#">FONCTIONNALITES</a>
                |
                <a href="../avis/index.php">CONTACT</a>
            </p>

            <p class="footer-company-name">© 2021 Jeu éducatif en ligne.</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Rue Habib Borguiba,Cité La Ghazelle, Ariana , Tunisie - 2083</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+21655025447</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:guetat1youssef@gmail.com">guetat1youssef@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Notre Objectif</span>
                L'objectif d’EducaPlay est principalement de créer de nouvelles opportunités pour les personnes et les organisations du monde entier. Notre place de marché propose une vaste bibliothèque composée de plusieurs cours enseignés par des formateurs confirmés tout en jouant.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!----------------- script for drop donw menu---------------------->
    <script>
        function drop() {
            const dropmenu = document.querySelector(".menu");
            dropmenu.classList.toggle('active');
        }
    </script>
    <!------------ Javascript for Toggle Menu ------------>
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>

</html>