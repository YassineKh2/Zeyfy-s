<?php
include '../controller/FormationC.php';
$formationC=new FormationC();
$id_formation = $_GET["id_formation"];
$formation=$formationC->recupererformations($id_formation);
?>

<html>
   <head>
      <script> 
function validateForm()                                    
{ 
    var name = document.forms["myForm"]["name"];               
    var formation = document.forms["myForm"]["formation"];
    var prix = document.forms["myForm"]["prix"];       
    var description = document.forms["myForm"]["description"];   
   
    if (name.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Veuillez entrez un nom de filière valide";  
        name.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
       
    if (formation.value == "")                                   
    { 
        document.getElementById('errorformation').innerHTML="Veuillez entrez un nom de formation valide"; 
        formation.focus(); 
        return false; 
    }else{
        document.getElementById('errorformation').innerHTML="";  
    }
        if (prix.value == "")                                  
    { 
        document.getElementById('errorprix').innerHTML="Veuillez entrez un prix valide";  
        prix.focus(); 
        return false; 
    }else{
        document.getElementById('errorprix').innerHTML="";  
    }
    if (description.value == "")                           
    {
        document.getElementById('errordescription').innerHTML="Veuillez entrez un description valide"; 
        description.focus(); 
        return false; 
    }else{
        document.getElementById('errordescription').innerHTML="";  
    }
   
    return true; 
}      </script> 
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="../controller/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
</head>
   <body>


   <section class="header">
     <nav class="navbar sticky-top navbar-expand-lg bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">EDUCAPLAY</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fas fa-bars"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="#">Nouveau <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AfficherListeFormationEC.php">En attente</a>
            <li class="nav-item">
              <a class="nav-link" href="AfficherListeFormationA.php">Acceptées</a>
              <li class="nav-item">
                <a class="nav-link" href="AfficherListeFormationR.php">Refusées</a>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <button>Suggérer une formation</button>
 
      <form action="modifierFormationEC.php?id_formation= <?php echo $id_formation ?>"  method='POST'>
     
         <table class="form-style"> 
         <tr>
            <td>
            <?php
					if(isset($_SESSION['error']))
                        {
                        	echo '<div class="alert alert-success" style="position: relative; bottom: 20px"  >';
                        	echo "<div  '>".$_SESSION['error']."</div>";
                        	unset($_SESSION['error']);
                        	echo '</div>';
                        }
                        ?>  
                        </td>
               <td>
                  
                  <label>
                     Votre filière <span class="required">*</span>
                  </label>
               </td>

               <td>
                  <input type="text" name="name" class="long"/>
                  <span class="error" id="errorname" value="<?php echo $formation['filiere'] ?>"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Nom de formation <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="text" name="formation" class="long"/>
                  <span class="error" id="errorformation" value="<?php echo $formation['titre_f'] ?>"></span>
               </td>
            </tr>
                        <tr>
               <td>
                  <label>
                     Prix de formation <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="number" name="prix" class="long"/>
                  <span class="error" id="errorprix" value="<?php echo $formation['prix_f'] ?>"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Description <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <textarea name="description" class="long field-textarea"></textarea>
                  <span class="error" id="errordescription" value="<?php echo $formation['descriptions'] ?>"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Fichiers <span class="required">*</span>
                  </label>
               </td>
               <td>
                 <input type="file" id="file" name="file" class="long" required
                   minlength="3" maxlength="20" size="10" >
                 <span class="error" id="errorfile" value="<?php echo $formation['image'] ?>"></span>

               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input type="submit" value="Modifier">      
               </td>
            </tr>
         </table>
      </form>
          </section>

   </body>
</html>
