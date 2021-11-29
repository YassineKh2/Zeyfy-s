<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="inscroption.css">
</head>
<body>
    <button class="accueil">Accueil</button>
    <div class='singup'>
        <form class='form'>
            <div class='moez'>
                <h2>S'inscire !</h2>    
             
                <input type="text" name="prenom" placeholder="Ecrire votre Education" id="prenom">
               
                <select name='type' >
                    <option value="" selected hidden><label>Specialité</label></option>
                      <option value="et"><label>Math</label></option>
                      <option value="en"><label>Physique</label></option>
                      <option value="en"><label>Informatique</label></option>
                  </select>
                <label>Placer votre cv ici</label>
              <input type="file" name="file"> 
                <input type="submit" value="Confirmer" id="yes">
                <p>En appuiant sur Confirmer vous accepter nos <a href="#">termes et conditions </a> et notre <a href="#">politique et confidentialité</a></p>
                </div>
            </form>
    </div>
    <p class='par2'>Vous avez deja un compte? <a href="loginPage.html">Logger vous ici</a></p>
</body>
</html>