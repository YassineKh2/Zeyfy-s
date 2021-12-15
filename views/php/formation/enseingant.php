<?php
include '../../../controller/EnseigantC.php';

$enseigantC=new EnseigantC();
$listeEnseignants=$enseigantC->afficherenseignants();

?>
<html lang="en">
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
<link rel="stylesheet" href="../controller/css/row_b.css">

</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="view-account">
        <section class="module">
        <?php
            foreach($listeEnseignants as $enseigant ){
            ?>
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
           
                        <img class="img-profile img-circle img-responsive center-block" src="<?php echo $enseigant['mdp_enseignant']; ?>" alt="">
                        <ul class="meta list list-unstyled">
                            <li class="name"><?php echo $enseigant['nom_enseignant'] ; ?><?php echo $enseigant['prenom_enseignant']; ?>
                                <label class="label label-info"><?php echo $enseigant['fonctionalite'] ; ?></label>
                            </li>
                            <li class="email"><a href="#"><?php echo $enseigant['email'] ; ?></a></li>
                            <li class="activity">Last logged in: Today at 2:18pm</li>
                        </ul>
                    </div>
                    <nav class="side-menu">
                        <ul class="nav">
                            <li class="active"><a href="#"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="AfficherListeFormationEC.php"><span class="fa fa-spinner" aria-hidden="true"></span> Formations en attente</a></li>
                            <li ><a href="AfficherListeFormationA.php"><span class="fa fa-check-square-o" aria-hidden="true"></span> Formations accéptées</a></li>
                            <li><a href="AfficherListeFormationR.php"><span class="fa fa-times" aria-hidden="true"></span> Formations Refusées</a></li>
                            <li><a href="user-drive.html"><span class="fa fa-envelope-o" aria-hidden="true"></span> Contact</a></li>
                        </ul>
                    </nav>
                </div>
              


                <div class="content-panel">
                    <div class="content-header-wrapper">
                        <h2 class="title">Mon Historique</h2>
                        <div class="actions" >
                        
                            <button class="btn btn-success" >   <a href="FormAjoutFormation.php"><i class="fa fa-plus" ></i> Ajouter une formation</button>
                        </div>
                    </div>
                    <div class="content-utilities">
                        
                        <div class="actions">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="true"> Sorting </button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>

                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                    </div>



  <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="
                            text-xs
                            font-weight-bold
                            text-primary text-uppercase
                            mb-1
                          "
                        >
                          Earnings (Monthly)
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          $40,000
                        </div>
                      </div>
                      <div class="col-auto">
                       <i class="fa fa-usd"  ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="
                            text-xs
                            font-weight-bold
                            text-success text-uppercase
                            mb-1
                          "
                        >
                          Earnings (Annual)
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          $215,000
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="
                            text-xs
                            font-weight-bold
                            text-info text-uppercase
                            mb-1
                          "
                        >
                          Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="
                                h5
                                mb-0
                                mr-3
                                font-weight-bold
                                text-gray-800
                              "
                            >
                              50%
                            </div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                style="width: 50%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-clipboard-list fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="
                            text-xs
                            font-weight-bold
                            text-warning text-uppercase
                            mb-1
                          "
                        >
                          Pending Requests
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          18
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




                    <div class="drive-wrapper drive-grid-view">
                        <div class="grid-items-wrapper">
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
        
                                    <div class="drive-item-title"><a href="#">HAAHAHAHAHAHA</a></div>
     
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Stock Image DC3214.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Deck Lorem Ipsum.ppt</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-powerpoint-o text-warning"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Project Tasks.csv</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-excel-o text-success"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Project Brief.pdf</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-pdf-o text-danger"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS1341.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS3214.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">UX Resource</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-folder text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Prototypes</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-folder text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Sketch-source-files.zip</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-zip-o text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Quisque.doc</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-word-o text-info"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Aenean imperdiet.doc</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-word-o text-info"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">demo.html</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-code-o text-primary"></i></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Image DS2314.JPG</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="drive-item-footer module-footer">
                                    <ul class="utilities list-inline">
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="type"></th>
                                        <th class="name truncate">Name</th>
                                        <th class="date">Uploaded</th>
                                        <th class="size">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-text-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Meeting Notes.txt</a></td>
                                        <td class="date">Sep 23, 2015</td>
                                        <td class="size">18 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Stock Image DC3214.JPG</a></td>
                                        <td class="date">Sep 21, 2015</td>
                                        <td class="size">235 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-powerpoint-o text-warning"></i></td>
                                        <td class="name truncate"><a href="#">Deck Lorem Ipsum.ppt</a></td>
                                        <td class="date">Sep 20, 2015</td>
                                        <td class="size">136 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-excel-o text-success"></i></td>
                                        <td class="name truncate"><a href="#">Project Tasks.csv</a></td>
                                        <td class="date">Aug 16, 2015</td>
                                        <td class="size">32 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-pdf-o text-warning"></i></td>
                                        <td class="name truncate"><a href="#">Project Brief.pdf</a></td>
                                        <td class="date">Aug 15, 2015</td>
                                        <td class="size">73 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Image DS1341.JPG</a></td>
                                        <td class="date">Aug 15, 2015</td>
                                        <td class="size">171 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Image DS3214.JPG</a></td>
                                        <td class="date">Aug 15, 2015</td>
                                        <td class="size">171 MB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-folder text-primary"></i></td>
                                        <td class="name truncate"><a href="#">UX Resource</a></td>
                                        <td class="date">Feb 07, 2015</td>
                                        <td class="size">--</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-folder text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Prototypes</a></td>
                                        <td class="date">Jan 03, 2015</td>
                                        <td class="size">--</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-word-o text-info"></i></td>
                                        <td class="name truncate"><a href="#">Quisque.doc</a></td>
                                        <td class="date">Oct 21, 2014</td>
                                        <td class="size">27 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-word-o text-info"></i></td>
                                        <td class="name truncate"><a href="#">Aenean imperdiet.doc</a></td>
                                        <td class="date">Oct 16, 2014</td>
                                        <td class="size">23 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-code-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">demo.html</a></td>
                                        <td class="date">Aug 23, 2014</td>
                                        <td class="size">10 KB</td>
                                    </tr>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-image-o text-success"></i></td>
                                        <td class="name truncate"><a href="#">Image DS2314.JPG</a></td>
                                        <td class="date">Aug 06, 2014</td>
                                        <td class="size">325 MB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
        
            ?>
        </section>
    </div>
</div>

</body>
</html>




<div></div>