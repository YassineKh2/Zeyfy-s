<?php
include '../Controller/CategorieC.php';
$categorieC=new CategorieC();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard.php">Retour</a></button>
        <hr>
        
			

        
        <form action="modifierCategorie.php" method="POST">
        <?php
			if (isset($_POST['IdCategorie'])){
				$categorie =$categorieC->recupererCategorie($_POST['IdCategorie']);
				
		?>
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="NomCategorie">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="NomCategorie" id="NomCategorie" value="<?php echo $categorie['NomCategorie']; ?>" maxlength="20"></td>
                    <input type="hidden" name="IdCategorie" value="<?php echo $categorie['IdCategorie']; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="idJeux">Jeux:
                        </label>
                    </td>
                    <td><input type="text" name="idJeux" id="idJeux" value="<?php echo $categorie['idJeux']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idOffre">Offre:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="idOffre" value="<?php echo $categorie['idOffre']; ?>" id="idOffre">
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