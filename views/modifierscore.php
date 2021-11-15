
<?php
include_once '../controller/JoueurScoreController.php';
     include_once '../model/joueur_score.php';

    $error = "";

    // create adherent
    $joueur_score_jeux = null;

    // create an instance of the controller
    $joueur_score_jeuxC = new joueur_score_jeuxC();
    if (
        isset($_POST["idjeux"]) &&
           isset($_POST["idjoueur"]) &&		
          isset($_POST["score"]) ) 
      {
        if (
            !empty($_POST["idjeux"]) && 
			!empty($_POST["idjoueur"]) &&
            !empty($_POST["score"])  
	
        ) {
            $joueur_score_jeux = new joueur_score_jeux(
				$_POST["idjoueur"],
                $_POST["idjeux"],
                $_POST["score"]
				
            );
            $joueur_score_jeuxC->modifierscore($joueur_score_jeux, $_POST["idjoueur"]);
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
        <?php
			if (isset($_POST['idJoueur'])){
				$joueur_score_jeux = $joueur_score_jeuxC->recupererscore($_POST['idJoueur']);
            		
		?>
       
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="IdJeux">id  jeux:
                        </label>
                    </td>
                    <td><input type="text" name="idjeux" id="idJeux"  value="<?php echo $joueur_score_jeux['idJeux']; ?>" maxlength="20" disabled></td>
                </tr>
				<tr>
                    <td>
                        <label for="IdJoueur">idJoueur:
                        </label>
                    </td>
                    <td><input type="text" name="idjoueur" id="idJoueur "value="<?php echo $joueur_score_jeux['idJoueur']; ?>" maxlength="20" disabled></td>
                </tr>
                <tr>
                    <td>
                        <label for="score">score:
                        </label>
                    </td>
                    <td><input type="text" name="score" id="score" value="<?php echo $joueur_score_jeux['score']; ?>" maxlength="20"></td>
                </tr>
                        <input type="submit" value="modfier" action="modifierscore.php" > 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <?php
		}
		?>
    </body>

</html>
