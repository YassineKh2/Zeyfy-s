<?php
include 'C:\xampp\htdocs\educaplay\controller\FormationC.php';

$formationC = new FormationC();
if ($_GET['statut'] == 'tout' && $_GET['categ'] == 'tout' && $_GET['tem']=='0') {
  $listeFormations = $formationC->afficherformations();
} else if($_GET['tem']=='0'){
  $listeFormations = $formationC->afficherformationss($_GET['statut'], $_GET['categ']);
}
else
$listeFormations = $formationC->afficherformationsss($_GET['tem']);
?>
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCAPLAY - by the ZEYFY's</title>

    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap-icons/bootstrap-icons.css">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/instructor-profile.css">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../../assets/images/logo.png" width="">
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

                    <a class="nav-link nav-profile d-flex align-items-center pe-3 py-1" href="#" data-bs-toggle="dropdown">
                        <img src="../../assets/images/img_profil.jpg" alt="Profile" class="rounded-circle" style="max-height: 45px;width:45px">
                        <span class="d-none d-md-block dropdown-toggle ps-2 py-0">GUETAT Youssef</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>GUETAT Youssef</h6>
                            <span>Engineer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
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
                            <a class="dropdown-item d-flex align-items-center" href="../User/singout.php">
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
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <span>
                    <div class="filtre_ic">
                        <form action="filtre.php?tem=0" method="POST">
                        <div class="select">
                            <select name="format" id="format">
                                <option selected disabled>sélecter une catégorie</option>
                                <option value="programmation">programmation</option>
                                <option value="mathématiques">mathématiques</option>
                                <option value="réseaux">réseaux</option>
                                <option value="tout">tout</option>
                            </select>
                        </div>
                        <br>
                        <div class="select">
                            <select name="formatt" id="formatt">
                                <option selected disabled>sélecter une status</option>
                                <option value="acceptée">Acceptée</option>
                                <option value="refusée">Refusée</option>
                                <option value="en coure">EN Coure</option>
                                <option value="tout">tout</option>
                            </select>
                        </div>
                        <button class="btnf">Filtrer</button>
                        </form>
                    </div>
                </span>

            </li><!-- End Dashboard Nav -->
            <br><br>
            <li class="nav-item">
                    <span>
                    <form action="search.php?statut=0&categ=0" method="POST">
                        <div class="filtre_ic">
                            <div class="Card">
                                <div class="CardInner">
                                    <label>Taper un mot clé</label>
                                    <div class="container">
                                        <div class="Iconn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8" />
                                                <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                            </svg>
                                        </div>
                                        <div class="InputContainer">
                                            <input type="search" name="search" placeholder="recherche" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type= "submit">search</button>
                        <form action=""></form>
                    </span>

            </li><!-- End Forms Nav -->
            <br><br>
            <li class="nav-item">
                <span>
                    <span>
                        <div class="filtre_ic">
                            <div class="Card">
                                <div class="CardInner">
                                    <label>Taper un mot clé</label>
                                    <div class="container">
                                        <div class="Iconn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8" />
                                                <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                            </svg>
                                        </div>
                                        <div class="InputContainer">
                                            <input type="search" placeholder="recherche" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>

            </li><!-- End Forms Nav -->


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="" style="padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem">
            <a class="add_course_button" href="FormAjoutFormation.php">Add New Course</a>
        </div>
        <?php
        foreach ($listeFormations as $formation) {
        ?>

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row">


                            <!-- Top Selling -->
                            <div class="col-9">


                                <div class="instructor-profile_courses_list1">
                                    <div class="course_align_v1">
                                        <img src="../../assets/images/img_profil.jpg" alt="Profile" class="courses_list_img">
                                        <div class="course_align1">

                                            <h1 class="course_title"><?php echo $formation['titre_f']; ?></h1>
                                            <?php if (strcmp($formation['statut'], "acceptée") == 0) { ?>
                                                <div class="course_status_button ">
                                                    <?php echo $formation['statut']; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (strcmp($formation['statut'], "refusée") == 0) { ?>
                                                <div class="course_status_button-ref">
                                                    <?php echo $formation['statut']; ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (strcmp($formation['statut'], "en coure") == 0) { ?>
                                                <div class="course_status_buttone">
                                                    <?php echo $formation['statut']; ?>
                                                </div>
                                            <?php } ?>
                                         







                                        </div>


                                    </div>

                                    <div class="course_align1">

                                        <div class="course_v3">
                                            <div class="course_categorie"><?php echo $formation['filiere']; ?></div>
                                            <div class="course_categorie" style="margin-left:1rem"><?php echo $formation['prix_f']; ?></div>

                                        </div>

                                        <div class="course_button">
                                            <!--show button -->
                                            <form action="afficherCours.php">
                                            <button class="course_button_v2"><i class="fal fa-eye"></i></button>
                                            </form>
                                            <!--update button-->
                                           
                                           <a href="FormModifierFormation.php?id_formation=<?php echo $formation['id_formation'];?>"><button class="course_button_v2"><i class="far fa-edit"></i></button>
                                           </a>
                                            <!--delete button -->
                                            <form action="">
                                            <button class="course_button_v2" style="margin-right:1rem" onclick="delete_show(x = <?php echo 1; ?>)"><i class="far fa-trash-alt"></i></button>
                                            <div class="delete_button" id="delete_button<?php echo 1; ?>" style="display:none">
                                                <div class="delete_button-v1">
                                                    <h4>Are you sure you want to delete this course ?</h4>
                                                    <div class="delete_button-line">
                                                        <button id="cancel_btn_id<?php echo 1; ?>" onclick="cancel_hide(x = <?php echo 1; ?>)" class="cancel_button">Non, annuler</button>
                                                        <a id="delete_btn_id" class="delet_button_p" href="">Oui, supprimer </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>


                                    </div>





                                </div>





                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
                </div><!-- End Left side columns -->


                </div>
            </section>
        <?php } ?>
    </main><!-- End #main -->

    <!--
<main class=" card-body pb-0">
    <div class="instructor-profile_courses_list">
    <div style="color: black;font-size:4rem">sdjkvbhskdvbhsdbv</div>
    </div>

</main> -->




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