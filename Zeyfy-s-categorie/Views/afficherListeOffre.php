<?php
include '../Controller/OffreC.php';
$offreC=new offreC();
$listeoffres=$offreC->afficherOffre();
?>

<html>
    <head></head>
    <body>
        <button>
            <a href="ajouterOffre.php">Ajouter </a>
        </button>
        <table border="1" align="center">
            <tr>
            <th>idOffre</th>
            <th>NomOffre</th>
            <th>dateDebutOffre</th>  
            <th>pourcentageOffre</th>
            <th>dateFinOffre</th> 
            <th>Modifier</th>
            <th>Supprimer</th>
             </tr>
             <?php
                foreach($listeoffres as $offres) {
             ?>
             <tr>
                 <td> <?php echo $offres['idOffre']; ?></td>
                 <td> <?php echo $offres['NomOffre']; ?></td>
                 <td> <?php echo $offres['dateDebutOffre']; ?></td>
                 <td> <?php echo $offres['pourcentageOffre']; ?></td>
                 <td> <?php echo $offres['dateFinOffre']; ?></td>
                 <td>
                    <a href="modifierOffre.php?idOffre=<?php echo $offres['idOffre'];
                       ?>"> Modifier </a> 
                 </td> 
                 <td> 
                    <a href="supprimerOffre.php?idOffre=<?php echo $offres['idOffre'];
                       ?>">Supprimer </a>
                 </td>
             </tr>
             <?php
                }
             ?>
         </table>
    </body>
</html