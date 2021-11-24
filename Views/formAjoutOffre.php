<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard2.php">Retour</a></button>
        <hr>

        
        <form action="ajouterOffre.php" method="post">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="NomOffre">Nom-Offre:
                        </label>
                    </td>
                    <td><input type="text" name="NomOffre" id="NomOffre" ></td>
                    <input type="hidden" name="idOffre" value="<?php echo $categorie['idOffre']; ?>">

                </tr>
                <tr>
                    <td>
                        <label for="dateDebutOffre">date-Debut-Offre:
                        </label>
                    </td>
                    <td><input type="date" name="dateDebutOffre" id="dateDebutOffre" ></td>
                    <input type="hidden" name="idOffre" value="<?php echo $categorie['idOffre']; ?>">

                </tr>
                <tr>
                    <td>
                        <label for="pourcentageOffre">Le pourcentage Offre:
                        </label>
                    </td>
                    <td>
                    <input type="number" name="pourcentageOffre" id="pourcentageOffre" >
                    <input type="hidden" name="idOffre" value="<?php echo $categorie['idOffre']; ?>">

                    </td>
                </tr>   
                <tr>
                    <td>
                        <label for="dateFinOffre">date-Fin-Offre:
                        </label>
                    </td>
                    <td><input type="date" name="dateFinOffre" id="dateFinOffre" ></td>
                    <input type="hidden" name="idOffre" value="<?php echo $categorie['idOffre']; ?>">

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