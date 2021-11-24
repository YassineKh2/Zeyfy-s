<?php
include '../Controller/OffreC.php';
$offreC=new OffreC();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard2.php">Retour</a></button>
        <hr>
        
			        
        <form action="modifierOffre.php" method="POST">
        <?php
			if (isset($_POST['idOffre'])){
				$offres =$offreC->recupererOffre($_POST['idOffre']);
				
		?>
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="NomOffre">Nom-Offre:
                        </label>
                    </td>
                    <td><input type="text" name="NomOffre" id="NomOffre" value="<?php echo $offres['NomOffre']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="dateDebutOffre">date-Debut-Offre:
                        </label>
                    </td>
                    <td><input type="date" name="dateDebutOffre" id="dateDebutOffre" value="<?php echo $offres['dateDebutOffre']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="pourcentageOffre">Pourcentage-Offre:
                        </label>
                    </td>
                    <td><input type="number" name="pourcentageOffre" id="pourcentageOffre" value="<?php echo $offres['pourcentageOffre']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="dateFinOffre">date-Fin-Offre:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateFinOffre" value="<?php echo $offres['dateFinOffre']; ?>" id="dateFinOffre">
                    </td>
                </tr>            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
            <?php
		}
		?>
        </form>

    </body>
</html>