<?php
include '../Controller/CategorieC.php';
$categorieC=new CategorieC();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard.php" class="btn">Retour</a></button>
        <hr>
        
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Modifier Catégorie</h2>
                            </div>   


        
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
                        <label for="NomOffre">Offre:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="NomOffre" value="<?php echo $categorie['NomOffre']; ?>" id="NomOffre">
                    </td>
                </tr>            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
            <?php
		}
		?>
        </form>

    </body>
</html>