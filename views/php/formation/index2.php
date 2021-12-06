<?php
/*
include_once("../config.php");
include '../controller/EnseigantC.php';
$enseigantC = new EnseigantC();
$listeEnseignants = $enseigantC->afficherenseignants();
*/
?>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
<link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">


<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../../assets/css/style1.css">
<link rel="stylesheet" href="../../assets/css/profileens.css">


</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html" target="_blank">EducaPlay </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons">apps</i> Components
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="../index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>

                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <?php
           /* foreach ($listeEnseignants as $enseigant) {*/
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title"><?php /*echo $enseigant['nom_enseignant']; ?><?php echo $enseigant['prenom_enseignant'];*/ ?></h3>
                                    <h6><?php /*echo $enseigant['fonctionalite'];*/ ?></h6>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        <?php
                    /*}*/

                        ?>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " href="index1.php">
                                            <i class="material-icons">home</i>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?statut=tout&categ=tout">
                                            <i class="material-icons">book</i>
                                            Formations
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#favorite" role="tab" data-toggle="tab">
                                            <i class="material-icons">try</i>
                                            Ajouter
                                            formation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active text-center gallery" id="favorite">
                        <div class="row">
                            <div>





                                <section class="header">


                                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


                                    <form action="AjoutFormation.php" id="myForm" class="myForm" onsubmit="return validateForm()" method="post">

                                        <table class="form-style">


                                            <?php
                                            if (isset($_SESSION['error'])) {
                                                echo '<div class="alert alert-success" style="position: relative; bottom: 20px"  >';
                                                echo "<div  '>" . $_SESSION['error'] . "</div>";
                                                unset($_SESSION['error']);
                                                echo '</div>';
                                            }
                                            ?>
                                            <tr>
                                                <td>

                                                    <label>
                                                        Votre filière <span class="required">*</span>
                                                    </label>
                                                </td>

                                                <td>
                                                    <select type="text" name="name" class="long" />
                                                    <option value="Programmation">--Programmation--</option>
                                                    <option value="Mathématiques">Mathématiques</option>
                                                    <option value="Réseau">Réseau</option>
                                                    </select>
                                                    <span class="error" id="errorname"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                        Nom de formation <span class="required">*</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <input type="text" name="formation" class="long" />
                                                    <span class="error" id="errorformation"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                        Prix de formation <span class="required">*</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix" class="long" />
                                                    <span class="error" id="errorprix"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                        Description <span class="required">*</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <textarea name="description" class="long field-textarea"></textarea>
                                                    <span class="error" id="errordescription"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                        Fichiers <span class="required">*</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <input type="file" id="file" name="file" class="long" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png">
                                                    <span class="error" id="errorfile"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="submit" value="Ajouter">
                                                    <input type="reset" value="Annuler">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </section>
                                <script>
                                    function validateForm() {
                                        var name = document.forms["myForm"]["name"];
                                        var formation = document.forms["myForm"]["formation"];
                                        var prix = document.forms["myForm"]["prix"];
                                        var description = document.forms["myForm"]["description"];

                                        if (name.value == "") {
                                            document.getElementById('errorname').innerHTML = "Veuillez entrez un nom de filière valide";
                                            name.focus();
                                            return false;
                                        } else {
                                            document.getElementById('errorname').innerHTML = "";
                                        }

                                        if (formation.value == "") {
                                            document.getElementById('errorformation').innerHTML = "Veuillez entrez un nom de formation valide";
                                            formation.focus();
                                            return false;
                                        } else {
                                            document.getElementById('errorformation').innerHTML = "";
                                        }
                                        if (prix.value == "") {
                                            document.getElementById('errorprix').innerHTML = "Veuillez entrez un prix valide";
                                            prix.focus();
                                            return false;
                                        } else {
                                            document.getElementById('errorprix').innerHTML = "";
                                        }
                                        if (description.value == "") {
                                            document.getElementById('errordescription').innerHTML = "Veuillez entrez un description valide";
                                            description.focus();
                                            return false;
                                        } else {
                                            document.getElementById('errordescription').innerHTML = "";
                                        }

                                        return true;
                                    }
                                </script>
</body>

</html>