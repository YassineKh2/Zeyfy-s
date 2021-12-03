<?php
     include_once 'C:\xampp\htdocs\educaplay\controller\enseignantC.php';
    $error = "";

    $enseignant=null;
    $enseignantC= new enseignantc;
    if (
		isset($_POST["etudes"]) &&		
        isset($_POST["file"])
    ) {
        if (
			!empty($_POST['etudes']) &&
            !empty($_POST["file"])
        ) {
            $enseignant = new enseignant(
				$_GET['id'],
                $_POST['etudes'], 
                $_POST['file']
            );
            $enseignantC->ajouterenseignant($enseignant);
            header('Location:login.php');
        }
        else
            $error = "Missing information";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/css/insed.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!----------------------------------------------------------------------------------------------------------------------->
    <nav>
    <a href="../Mainpage/index.php"> <img src="../Mainpage/pics/logo.png"> </a>
    <div class="nav-links" id="navLinks">
<ul>
    <li><a href="../Mainpage/index.php">ACCUEIL</a></li>
    <li><a href="">PLANS</a></li>
    <li><a href="">FONCTIONNALITES</a></li>
    <li><a href="">CONTACT</a></li>
</ul>
    </div>
<!----------------------------------------------------------------------------------------------------------------------->
<div class='singup'>
    <form class='form' method="POST">
        <div class='moez'>
            <h2>S'inscire !</h2>    
       
            <input type="text" name="etudes" placeholder="Ecrires vous etudes" id="etudes" class="etudes"> <p id="errorEtudes" class="etu"></p>
                <label class="cv">Donner Votre Cv</label>
            <input type="file" name="file" id="file">  <p id="errorFile" class="em"></p>
            <input type="submit" value="Confirmer" id="yes">
            <p>En appuiant sur Confirmer vous accepter nos <a href="#">termes et conditions </a> et notre <a href="#">politique de confidentialité</a></p>
            </div>
        </form>
</div>
<p class='par2'>Vous avez deja un compte? <a href="login.php">Logger vous ici</a></p>
</body>
</html>
</body>
</html>