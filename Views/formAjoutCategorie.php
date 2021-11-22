
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard.php">Retour</a></button>
        <hr>

        
        <form action="ajouterCategorie.php" method="post">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="NomCategorie">Nom Catégorie:
                        </label>
                    </td>
                    <td><input type="text" name="NomCategorie" id="NomCategorie" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idOffre">Les offres:
                        </label>
                    </td>
                    <td>
                        <select name="idOffre">
                        <?php
                foreach($liste as $offre) {
                        ?>
                                <option value="<?php $offre['idOffre'] ?>"><?php echo $offre['idOffre'] ?></option>
                                     <?php }  ?>
                    </select>; 
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>