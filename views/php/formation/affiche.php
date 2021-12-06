<?php
include '../../../controller/EnseigantC.php';

$enseigantC=new EnseigantC();
$listeEnseignants=$enseigantC->afficherenseignants();
?>
<html>
    <head></head>
    <body>
        <button>
            <a href="FormAjoutFormation.php">Ajouter une Formation</a>
        </button>
        <center><h1>Liste des Formations</h1></center>
        <table border="1" align="center">
            <tr>
                <th>id enseigant</th>
                <th>nom</th>
                <th>prenom</th>
                <th>mdp</th>

            </tr>
            <?php
            foreach($listeEnseignants as $enseigant){
            ?>
            <tr>
                <td><?php echo $enseigant['id_enseignant']; ?></td>
                <td><?php echo $enseigant['nom_enseignant']; ?></td>
                <td><?php echo $enseigant['prenom_enseignant']; ?></td>
                <td><?php echo $enseigant['mdp_enseignant']; ?></td>
               
            </tr>
            <?php
            }
            ?>
        </table>
    </body>