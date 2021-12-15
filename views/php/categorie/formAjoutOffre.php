<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Front/dashboard.css">
    <title>User Display</title>
</head>
    <body>
        <button><a href="dashboard2.php" class="btn">Retour</a></button>
        <hr>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Ajouter Offre</h2>
                            </div>   

        <form action="ajouterOffre.php" method="post">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="NomOffre">Nom-Offre:
                        </label>
                    </td>
                    <td><input type="text" name="NomOffre" id="NomOffre" ></td>
                    <input type="hidden" name="idOffre" value="<?php echo $offres['idOffre']; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="dateDebutOffre">date-Debut-Offre:
                        </label>
                    </td>
                    <td><input type="date" name="dateDebutOffre" id="dateDebutOffre" ></td>
                    <input type="hidden" name="idOffre" value="<?php echo $offres['idOffre']; ?>">

                </tr>
                <tr>
                    <td>
                        <label for="pourcentageOffre">Le pourcentage Offre:
                        </label>
                    </td>
                    <td>
                    <input type="number" name="pourcentageOffre" id="pourcentageOffre" >
                    <input type="hidden" name="idOffre" value="<?php echo $offres['idOffre']; ?>">

                    </td>
                </tr>   
                <tr>
                    <td>
                        <label for="dateFinOffre">date-Fin-Offre:
                        </label>
                    </td>
                    <td><input type="date" name="dateFinOffre" id="dateFinOffre" ></td>
                    <input type="hidden" name="idOffre" value="<?php echo $offres['idOffre']; ?>">

                </tr>           
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" class="btn" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>