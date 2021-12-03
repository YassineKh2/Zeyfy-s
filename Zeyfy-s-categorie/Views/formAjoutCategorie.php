<?php
	include '../config.php';
    $sql="SELECT * FROM offres";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
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
                            <h2>Ajouter Catégorie</h2>
+                            </div>   

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
                        <label for="NomOffre">Les offres:
                        </label>
                    </td>
                    <td>
                        <select name="NomOffre">
                        <?php
                         foreach($liste as $offres) {
                        ?>
                                <option value="<?php echo $offres['NomOffre'] ?>"><?php echo $offres['NomOffre'] ?></option>
                                     <?php }  ?>
                    </select>;  
                    </td>
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