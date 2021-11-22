<?php
include '../Controller/CategorieC.php';
$categorieC=new categorieC();
$listecategories=$categorieC->afficherCategorie();
?>

<html>
    <head></head>
    <body>
        <button>
            <a href="ajouterCategorie.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>IdCategorie</th>
            <th>NomCategorie</th>  
                <th>idJeux</th>
                <th>idOffre</th>
                <th>Modifier</th>
                <th>Supprimer</th>
             </tr>
             <?php
                foreach($listecategories as $categorie) {
             ?>
             <tr>
                 <td> <?php echo $categorie['IdCategorie']; ?></td>
                 <td> <?php echo $categorie['NomCategorie']; ?></td>
                 <td> <?php echo $categorie['idJeux']; ?></td>
                 <td> <?php echo $categorie['idOffre']; ?></td>
                 <td>
                    <a href="modifierCategorie.php?IdCategorie=<?php echo $categorie['IdCategorie'];
                       ?>"> Modifier </a> 
                 </td> 
                 <td> 
                    <a href="supprimerCategorie.php?IdCategorie=<?php echo $categorie['NomCategorie'];
                       ?>">Supprimer </a>
                 </td>
             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html>