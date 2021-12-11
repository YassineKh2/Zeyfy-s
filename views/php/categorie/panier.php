<?php
require '../../../model/db.class.php';
require '../../../model/panier.class.php';
$DB= new DB();
$panier = new panier($DB);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Front/checkout.css" />
    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="offres.html"> <img src="logo.png"> </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="">ACCUEIL</a></li>
            <li><a href="">PLANS</a></li>
            <li><a href="">FONCTIONNALITES</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        
        </nav>
        </section>
<div class="container">
        <div class="heading">
          <h1>
            Achat catégorie
          </h1>
        <form method="post" action="panier.php">
          <a href="#" class="visibility-cart transition is-open">X</a>    
        </div>
        
        <div class="cart transition is-open">
          
          <a href="#" class="btn btn-update">Update cart</a>
          
          <div class="table">
            
            <div class="layout-inline row th">
              <div class="col col-pro">Catégorie</div>
              <div class="col col-price align-center "> 
                Offres
              </div>
              <div class="qty">Quantité</div>
              <div class="col">Suppression</div>
            </div>
              <?php
              $IdCategorie = array_keys($_SESSION['panier']);
              if (empty($IdCategorie)){
                $categorie = array();
              }
              else {
                $categorie = $DB->query('SELECT * FROM categorie WHERE IdCategorie IN ('.implode(',',$IdCategorie).')');
              }
              foreach ($categorie as $categorie){
              ?>
            <div class="layout-inline row">
              <div class="col col-pro layout-inline">
                <h2><?php echo $categorie->$NomCategorie; ?> </h2>
              </div>
              <div class="col col-price col-numeric align-center ">
                <p><?php echo $categorie->$NomOffre; ?></p>
              </div>
             <div class="qty"><input type="text" name="panier[quantité][<?php echo $categorie->IdCategorie; ?>]" value=" <?php echo $_SESSION['panier'][$categorie->$IdCategorie]; ?>" width="30">
               
             </div>
              <div class="product-removal">
                <button href="panier.php?removeproduct=<?php echo $categorie->IdCategorie; ?>" class="remove-product">
                  Supprimer
                </button>
              </div>
            </div>
            <?php } ?>
            <input type="submit" value="Update">
        </div>
        </form>
        </div>
          
   
              
      </div>

