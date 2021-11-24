<?php
include '../controller/FormationC.php';

$formationC=new FormationC();
$listeFormations=$formationC->afficherformations();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../controller/css/ens.css">
<link rel="stylesheet" href="../controller/css/btn.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />


</head>

<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="view-account">
        <section class="module">

            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
           
                        <img class="img-profile img-circle img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                        <ul class="meta list list-unstyled">
                            <li class="name">
                                <label class="label label-info">UX Designer</label>
                            </li>
                            <li class="email"><a href="#">Rebecca.S@website.com</a></li>
                            <li class="activity">Last logged in: Today at 2:18pm</li>
                        </ul>
                    </div>
                    <nav class="side-menu">
                        <ul class="nav">
                            <li ><a href="enseingant.php"><span class="fa fa-user"></span> Profile</a></li>
                            <li ><a href="AfficherListeFormationEC.php"><span class="fa fa-spinner" aria-hidden="true"></span> Formations en attente</a></li>
                            <li class="active"><a href="#"><span class="fa fa-check-square-o" aria-hidden="true"></span> Formations accéptées</a></li>
                            <li><a href="#"><span class="fa fa-times" aria-hidden="true"></span> Formations Refusées</a></li>
                            <li><a href="user-drive.html"><span class="fa fa-envelope-o" aria-hidden="true"></span> Contact</a></li>
                        </ul>
                    </nav>
                </div>
                </div>
                <div class="content-panel">
                    <div class="content-header-wrapper">
                        <h2 class="title">Mon Historique</h2>
                        <div class="actions" >
                        
                            <button class="btn btn-success" ><a href="FormAjoutFormation.php"><i class="fa fa-plus" ></i> Ajouter une formation</button>
                        </div>
                    </div>

                    <div class="content-utilities">
                        <div class="page-nav">
                            <span class="indicator">View:</span>
                            <div class="btn-group" role="group">
                                <button class="active btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Grid View" id="drive-grid-toggle"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="List View" id="drive-list-toggle"><i class="fa fa-list-ul"></i></button>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">All Items <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                                    <li><a href="#"><i class="fa fa-file-image-o"></i> Images</a></li>
                                    <li><a href="#"><i class="fa fa-file-video-o"></i> Media Files</a></li>
                                    <li><a href="#"><i class="fa fa-folder"></i> Folders</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><i class="fa fa-filter"></i> Sorting <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Newest first</a></li>
                                    <li><a href="#">Oldest first</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>

                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                    </div>
                    
    
        
                          <div class="main-body p-0">
                              <div class="inner-wrapper">
  
                                 <div class="inner-main">
                                 <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                                 <div class="card mb-2">
                                   <?php
                                      foreach($listeFormations as $formation){
                                        if($formation['statut'] == 'acceptée'){
                                     ?>
            
                 
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                        <?php
                          try{
                          $conn = new PDO("mysql:host=localhost;dbname=projet_web;charset=UTF8", 'root', '');
                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //pour activer l'affichage des erreurs pdo
                           } catch(PDOException $e){
                            echo 'ERROR: ' . $e->getMessage();
                             } 
                            $a=$formation['id_formation'];
                             $sql = "SELECT id_formation, image FROM formations WHERE id_formation = $a";
                             $q = $conn->prepare($sql);
                              try{
                             $q->execute();
                                }
                                 catch(Exception $e){
                                die('Erreur:' . $e->getMessage());
                                   }
                                  $q->bindColumn(1, $id_formation);
                                  $q->bindColumn(2, $cover, PDO::PARAM_LOB);
                                   while($q->fetch())
                                  {
                                    file_put_contents($id_formation.".jpg",$cover);


                                        ?>
                            <a href="#" data-toggle="collapse" data-target=".forum-content"> <?php  echo "<image src='".$id_formation.".jpg' class='mr-3 rounded-circle' width='50' alt='User'>"; ?> </a>                           
                            <?php
                                        }
                                        ?>
                            <div class="media-body">
                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body"><?php echo $formation['titre_f']; ?></a></h6>
                                <p class="text-secondary">
                                <?php echo $formation['descriptions']; ?>
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold"><?php echo $formation['date_c']; ?></span></p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                            <a href="supprimerFormationA.php?id_formation=<?php echo $formation['id_formation']; ?>">Supprimer</a>
                            <a href="FormModifierFormation.php?id_formation=<?php echo $formation['id_formation']; ?>" class="btn">modifier</a>
                        </div>
                    </div>
                    <?php
                    }
                      }
                       ?>
                        
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        


            </section>
    </div>
</div>
</body>
</html>




