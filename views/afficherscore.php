<?php
include '../controller/JoueurScoreController.php';
$joueur_score_jeuxC=new joueur_score_jeuxC();
$listeScore=$joueur_score_jeuxC->afficherscore();
?>
<html>
    <head></head>
    <body>
        <!-- <button>
            <a href="FormAjout.php">Ajouter un Adherent</a>
        </button> -->
        <center><h1>Liste des score des joueur</h1></center>
        <table border="1" align="center">
            <tr>
                <th>IdJeux</th>
                <th>IdJoueur</th>
                <th>score</th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            <?php
            foreach($listeScore as $joueur_score_jeux){
            ?>
            <tr>
                <td><?php echo $joueur_score_jeux['idJeux']; ?></td>
                <td><?php echo $joueur_score_jeux['idJoueur']; ?></td>
                <td><?php echo $joueur_score_jeux['score']; ?></td>
           
                <td>
					<form method="POST" action="modifierscore.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $joueur_score_jeux['idJoueur']; ?> name="idJoueur">
					</form>
				</td>
                <td>
                    <a href="supprimerscore.php?idJoueur=<?php echo $joueur_score_jeux['idJoueur']; ?>">Supprimer</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>