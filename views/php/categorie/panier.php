<?php
require '../../../model/db.class.php';
require '../../../model/panier.class.php';
include_once '../../../controller/FormationC.php';
include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
$utilisateurc = new utilisateurc;
$id=$_GET['id_formation'];
$DB= new DB();
$panier = new panier($DB);
$formationC = new FormationC();
$listeFormations = $formationC->affiche($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="../../assets/css/userd.css"> 
    <link rel="stylesheet" href="Front/checkout.css" />
    <script src="https://kit.fontawesome.com/56a94e38db.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="offres.html"> <img src="logo.png"> </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
        <li><a href="../Mainpage/index.php">ACCUEIL</a></li>
       <li><a href="../avis/reclamation.php">RECLAMATION</a></li>
        <li><a href="../categorie/panier.php">PANIER</a></li>
        <li><a href="../avis/index.php">CONTACT</a></li>
        </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        
        </nav>

        </section>
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

<div class="container">
        <div class="heading">
          <h1>
            Achat Formations
          </h1>
        <form method="post" action="panier.php">
        </div>
        
        <div class="cart transition is-open">
         
        <button type="submit" class="btn btn-update" onclick="alerts('Le paiement a été effectué avec succès'); return false;"><a href="../Game/indexlevel.php?id_formation=<?php echo $id;?>&IdCategorie=<?php echo $_GET['IdCategorie'];?>" style="color:white;">Payer</a></button>
        
          <div class="table">
            
            <div class="layout-inline row th">
              <div class="col col-pro">Formation</div>
              <div class="col col-price align-center "> 
                Prix
              </div>
              <div class="col">Suppression</div>
            </div>
              <?php
              /*$ids = array_keys($_SESSION['panier']);
              if (empty($ids)){
                $formation = array();
              }
              else {
                $formation = $DB->query('SELECT * FROM formations WHERE id_formation IN ('.implode(',',$ids).')');
              }
             */
              ?>
              <?php //$formation = $DB->query('SELECT * from formations') ;?>
              <?php  foreach ($listeFormations as $formation){ ?>
            <div class="layout-inline row">
              <div class="col col-pro layout-inline">
                <h2>    <?php echo $formation['titre_f']; ?></h2>
              </div>
              <div class="col col-price col-numeric align-center ">
                <p> <?php echo $formation['prix_f']; ?> Dinar</p>
              </div>
              <div class="product-removal">
              <form method="POST" action="panier.php?ad">
						           <input type="submit" class="remove-product" name="Supprimer" value="Supprimer">
					       </form> 
              </div>
            </div>
            <?php } ?>
           
        </div>
        </form>
        </div>
          
   
              
      </div>

              </body>
                <!----------------- script for drop donw menu---------------------->
    <script>
        function drop() {
            const dropmenu = document.querySelector(".menu");
            dropmenu.classList.toggle('active');
        }
    </script>

      <script>
        var b =document.querySelector('button');

        b.addEventListener('click',function(){window.alert('Le paiement a été effectué avec succès')});
      </script>

