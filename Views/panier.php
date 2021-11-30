<?php require 'header.php'; 
?>

<div class="container">
        <div class="heading">
          <h1>
            Achat catégorie
          </h1>
          
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
              <div class="col">Suppression</div>
            </div>
              <?php
              array_keys($_SESSION['panier']);
              $DB->query('SELECT * FROM categorie WHERE IdCategorie IN ('.implode(',',$IdCategorie).')');
              ?>
            <div class="layout-inline row">
              <div class="col col-pro layout-inline">
                <h2>Programmation</h2>
              </div>
              <div class="col col-price col-numeric align-center ">
                <p>New Year</p>
              </div>
              <div class="product-removal">
                <button class="remove-product">
                  Remove
                </button>
              </div>
            </div>
        </div>
         
        </div>
          
          <a href="#" class="btn btn-update">Update cart</a>
        
      </div>

