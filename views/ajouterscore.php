<?php
   
    include_once '../controller/JoueurScoreController.php';
    include_once '../model/joueur_score.php';
        $error = "";
    // create joueur_score_jeux
 $joueur_score_jeux = null;
    // create an instance of the controller
    $joueur_score_jeuxC = new joueur_score_jeuxC();
    if (
        isset($_POST["idJeux"]) &&
		isset($_POST["idJoueur"]) &&		
        isset($_POST["score"]) ) 
        {
        if (
            !empty($_POST["idJeux"]) && 
			!empty($_POST['idJoueur']) &&
            !empty($_POST["score"])  
        ) {
            $joueur_score_jeux = new joueur_score_jeux(
                $_POST['idJoueur'],
                $_POST['idJeux'],
                $_POST['score'] 
			
            );
            $joueur_score_jeuxC->ajouterscore($joueur_score_jeux);
            header('Location:afficherscore.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherscore.php">Retour à la liste des score</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="IdJeux">id  jeux:
                        </label>
                    </td>
                    <td><input type="text" name="idJeux" id="idJeux" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="IdJoueur">idJoueur:
                        </label>
                    </td>
                    <td><input type="text" name="idJoueur" id="idJoueur" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="score">score:
                        </label>
                    </td>
                    <td><input type="text" name="score" id="score" maxlength="20"></td>
                </tr>
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