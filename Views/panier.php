<?php require 'header_panier.php'; ?>
<?php
if(isset($_GET['del'])){
  $panier->del($_GET['del']);
}
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
              $IdCategorie = array_keys($_SESSION['panier']);
              $categorie = $DB->query('SELECT * FROM categorie WHERE IdCategorie IN ('.implode(',',$IdCategorie).')');
              foreach ($categorie as $categorie){
              ?>
            <div class="layout-inline row">
              <div class="col col-pro layout-inline">
                <h2>Programmation</h2>
              </div>
              <div class="col col-price col-numeric align-center ">
                <p>New Year</p>
              </div>
              <div class="del">
                <button href="panier.php?del=<?php echo $categorie->IdCategorie; ?>" class="del">
                  Supprimer
                </button>
              </div>
            </div>
            <?php } ?>
        </div>
         
        </div>
          
          <a href="#" class="btn btn-update">Update cart</a>
        
      </div>

