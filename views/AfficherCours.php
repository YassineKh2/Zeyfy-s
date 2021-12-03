<?php
/*
include_once("../config.php");
include '../controller/EnseigantC.php';
$enseigantC = new EnseigantC();
$listeEnseignants = $enseigantC->afficherenseignants();
*/
?>
<?php
include '../controller/coursC.php';
$id=$_GET['id_formation'];
$coursC = new CoursC();
/*if ($_GET['statut'] == 'tout' && $_GET['categ'] == 'tout' && $_GET['tem']=='0') {*/
  $listeCours = $coursC->affichercours($id);
/*} else if($_GET['tem']=='0'){
  $listeFormations = $coursC->afficherformationss($_GET['statut'], $_GET['categ']);
}
else
$listeFormations = $coursC->afficherformationsss($_GET['tem']);*/
?>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
  <link rel="stylesheet" href="../controller/css/profileens.css">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../controller/css/style1.css">

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
                  <h3 class="title">youssef guetat</h3>
                  <h6>deseigner</h6>
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
                    <a class="nav-link active" href="#works" role="tab" data-toggle="tab">
                      <i class="material-icons">book</i>
                      Formations
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index2.php">
                      <i class="material-icons">try</i>
                      Ajouter
                      formation
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-content tab-space">

            <div class="tab-pane active text-center gallery" id="works">

              <div class="row">
                <div>
                  <section class="ftco-section">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-4">
                          <h2 class="heading-section">Votre Formations</h2>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="table-wrap">

                            <table class="table">
                              <thead class="thead-primary">
                                <tr>
                                  <form action="filtre.php?tem=0" method="POST">
                                    <th>
                                      <div class="select_c">
                                        <select name="sel" id="sel" class='sel'>
                                          <option value="acceptée">Acceptées</option>
                                          <option value="refusée">Refusées</option>
                                          <option value="en coure">En coures</option>
                                          <option value="tout">Tout</option>
                                        </select>
                                      </div>
                                    </th>
                                    <th>
                                      <div class="select_c1">
                                        <select name="sel1" id="sel1" class='sel1'>
                                          <option value="Programmation">Programmation</option>
                                          <option value="Mathématiques">Mathématiques</option>
                                          <option value="Réseaux">Réseaux</option>
                                          <option value="tout">Tout</option>
                                        </select>
                                      </div>
                                    </th>
                                    <th>
                                      <button type="submit" value="Submit">Filtrer</button>

                                    </th>
                                  </form>
                                  <form action="search.php?statut='0'&categ='0'" method="POST">
                                  <th><label for="site-search"></label>
                                    <input type="search" id="site-search" name="search">
                                  </th>
                                  <th><button type="submit" value="Submits">Search</button></th>
                                  </form>
                                  <th>Quantity</th>
                                  <th>total</th>
                                  <th>&nbsp;</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                <?php
                                foreach ($listeCours as $cours) {
                                ?>
                                  <tr class="alert" role="alert">
                                    <td>
                                      <?php
                                      try {
                                        $conn = new PDO("mysql:host=localhost;dbname=educaplay;charset=UTF8", 'root', '');
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //pour activer l'affichage des erreurs pdo
                                      } catch (PDOException $e) {
                                        echo 'ERROR: ' . $e->getMessage();
                                      }
                                      $a = $cours['idCours'];
                                      $sql = "SELECT idCours, image FROM cours WHERE idCours = $a";
                                      $q = $conn->prepare($sql);
                                      try {
                                        $q->execute();
                                      } catch (Exception $e) {
                                        die('Erreur:' . $e->getMessage());
                                      }
                                      $q->bindColumn(1, $idCours);
                                      $q->bindColumn(2, $cover, PDO::PARAM_LOB);
                                      while ($q->fetch()) {
                                        file_put_contents($idCours . ".jpg", $cover);


                                      ?>
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"> <?php echo "<image src='" . $idCours . ".jpg' class='mr-3 rounded-circle' width='1%' alt='User'>"; ?> </a>
                                      <?php
                                      }
                                      ?>
                                    </td>
                                    <td>
                                      <div class="email">
                                        <span><?php echo $cours['nomCours']; ?> </span>
                                        <span><?php echo $cours['url']; ?></span>
                                      </div>
                                    </td>
                                    <td><?php echo $cours['dateCreationCours']; ?></td>
                                    <td><?php echo $cours['dateModificationCours']; ?></td>
                                    <td>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                      </button>
                                    </td>
                                  </tr>

                                <?php
                                }
                                ?>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>

          </div>


        </div>
    </div>
  </div>

  <footer class="footer text-center ">
  </footer>

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script scr="../controller/js/profileens.js"></script>




</body>

</html>