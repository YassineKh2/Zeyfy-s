<?php 
include 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
include 'C:\xampp\htdocs\educaplay\controller\enseignantC.php';
if($_SESSION['auth']==false)
header('Location:..\Login\login.php');
$enseignantc= new enseignantc();
$utilisateur = null;
$utilisateurc = new utilisateurc();
?>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EDUCAPLAY - by the ZEYFY's</title>

   <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../assets/bootstrap-icons/bootstrap-icons.css">
   <!-- Latest compiled and minified CSS -->

   <link rel="stylesheet" href="../../assets/style.css">
   <link rel="stylesheet" href="../../assets/instructor-profile.css">


   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

   <script src="https://cdn.ckeditor.com/ckeditor5/11.0.0/classic/ckeditor.js"></script>

</head>

<body>

   <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
         <a href="index.html" class="logo d-flex align-items-center">
            <img src="../../assets/images/logo.png" width="">
            <span class="d-none d-lg-block">EducaPlay</span>
         </a>
      </div><!-- End Logo -->

      <!--  <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>-->
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto ">
         <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
               <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
               </a>
            </li><!-- End Search Icon-->


            <li class="nav-item dropdown pe-3">

            <?php $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']);
    $type="";
    if($utilisateur['typee']==0)
        $type="Etudiant";
    else
    {
    $enseignant=$enseignantc->recupererenseignant($_SESSION['user_id']);
$type=$enseignant['etude'];
    }
    ?>
                        <a class="nav-link nav-profile d-flex align-items-center pe-3 py-1" href="#" data-bs-toggle="dropdown">
                            <img src="../../assets/images/Userpics/<?php echo $utilisateur['photo']?>" alt="Profile" class="rounded-circle" style="max-height: 45px;width:45px">
                            <span class="d-none d-md-block dropdown-toggle ps-2 py-0"><?php echo $utilisateur['nomUtilisateur']." ".$utilisateur['prenomUtilisateur'] ?></span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo $utilisateur['nomUtilisateur']." ".$utilisateur['prenomUtilisateur'] ?></h6>
                                <span><?php echo $type ?></span>
                            </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li>
                     <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                     </a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li>
                     <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                     </a>
                  </li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <!--      <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>  -->
                  <li>
                     <hr class="dropdown-divider">
                  </li>

                  <li>
                     <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                     </a>
                  </li>

               </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

         </ul>
      </nav><!-- End Icons Navigation -->

   </header><!-- End Header -->

   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">


         </li><!-- End Dashboard Nav -->
         <br><br>
         <li class="nav-item">


         </li><!-- End Forms Nav -->
         <br><br>
         <li class="nav-item">


         </li><!-- End Forms Nav -->


      </ul>

   </aside><!-- End Sidebar-->

   <main id="main" class="main">

      <div class="" style="width: 60rem;padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem">
         <a class="add_course_button" href="">Add New Course</a>
      </div>


      <section class="section dashboard">
         <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
               <div class="row">


                  <!-- Top Selling -->
                  <div class="col-9">


                     <div class="instructor-profile_courses_list">
                        <div class="course_align_v1">

                           <div class="course_align">

                              <form action="AjoutFormation.php" id="myForm" class="myForm" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">

                                 <table class="form-style">


                                    <?php
                                    if (isset($_SESSION['error'])) {
                                       echo '<div class="alert alert-success" style="position: relative; bottom: 20px"  >';
                                       echo "<div  '>" . $_SESSION['error'] . "</div>";
                                       unset($_SESSION['error']);
                                       echo '</div>';
                                    }
                                    ?>
                                    <tr>
                                       <td>

                                          <label>
                                             Votre Categorie <span class="required">*</span>
                                          </label>
                                       </td>

                                       <td class="cattd">

                                          <div class="select">
                                             <select name="format" id="format">
                                                <option selected disabled>sélecter une catégorie</option>
                                                <option value="programmation">programmation</option>
                                                <option value="mathématiques">mathématiques</option>
                                                <option value="réseaux">réseaux</option>
                                             </select>
                                          </div>

                                          <span class="error" id="errorname"></span>
                                       </td>

                                    </tr>
                                    <tr>
                                       <td>
                                          <label>
                                             Nom de formation <span class="required">*</span>
                                          </label>
                                       </td>
                                       <td>
                                          <input type="text" name="formation" class="long" />
                                          <span class="error" id="errorformation"></span>
                                       </td>
                                    </tr>
                                    
                                    <tr>
                                       <td>
                                          <label>
                                             Prix de formation <span class="required">*</span>
                                          </label>
                                       </td>
                                       
                                       <td>
                                       <div class="course_align" >
                                          <div class="select" style="max-width: 14rem;max-height: 10rem;position:relative;right:125px">
                                             <select name="format1" id="format1">
                                                <option selected disabled>sélecter devise</option>
                                                <option value="dinar">dinar</option>
                                                <option value="euro">euro</option>
                                                <option value="dollar">dollar</option>
                                             </select>
                                          </div>
                                          <div class="placenum">
                                             <input type="number" name="prix" class="longn" min="0" />
                                             <span class="error" id="errorprix"></span>
                                          </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    
                                    <tr>
                                       <td>
                                          <label>
                                             Description <span class="required">*</span>
                                          </label>
                                       </td>
                                       <td>
                                          <div class="long-field-textarea">
                                             <textarea name="description" id="editor"></textarea>
                                             <script>
                                                ClassicEditor
                                                   .create(document.querySelector('#editor'))
                                                   .catch(error => {
                                                      console.error(error);
                                                   });
                                             </script>
                                             <span class="error" id="errordescription"></span>
                                          </div>

                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <label>
                                             Image <span class="required">*</span>
                                          </label>
                                       </td>
                                       <td>
                                          <input type="file" id="file" name="file" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png">
                                          <span class="error" id="errorfile"></span>

                                       </td>
                                    </tr>
                                    <tr>
                                       <td></td>
                                       <td>
                                      
                                          <div class="posbnt">
                                          <input class="btnf" type="submit" value="Ajouter">
                                          </div>
                                          <div class="posbnt1">
                                          <input class="btnf" type="reset" value="Annuler">
                                          </div>
                                                
                                       </td>
                                    </tr>
                                 </table>
                              </form>








                           </div>


                        </div>

                        <div class="course_align">

                           <div class="course_v3">

                           </div>

                           <div class="course_button">


                           </div>


                        </div>





                     </div>





                  </div>

               </div>
            </div><!-- End Top Selling -->

         </div>
         </div><!-- End Left side columns -->


         </div>
      </section>
   </main><!-- End #main -->

   <!--
<main class=" card-body pb-0">
    <div class="instructor-profile_courses_list">
    <div style="color: black;font-size:4rem">sdjkvbhskdvbhsdbv</div>
    </div>

</main> -->




   <script src="../../assets/bootstrap/js/bootstrap.bundle.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


   <script>
      function cancel_hide(x) {
         $("#delete_button" + x).hide(0)
      }

      function delete_show(x) {
         $("#delete_button" + x).show(0)
      }
   </script>

</body>

</html>













































<!----
<?php
session_start();
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
      <link rel="stylesheet" href="../controller/css/ens.css">
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
 
      <form action="AjoutFormation.php" id="myForm" class="myForm" onsubmit="return validateForm()" method="post">
     
         <table class="form-style"> 
         
           
            <?php
            if (isset($_SESSION['error'])) {
               echo '<div class="alert alert-success" style="position: relative; bottom: 20px"  >';
               echo "<div  '>" . $_SESSION['error'] . "</div>";
               unset($_SESSION['error']);
               echo '</div>';
            }
            ?>  
                    <tr>    
               <td>
                  
                  <label>
                     Votre filière <span class="required">*</span>
                  </label>
               </td>

               <td>
               <select type="text" name="name" class="long"/>
               <option value="Programmation">--Programmation--</option>
               <option value="Mathématiques">Mathématiques</option>
               <option value="Réseau">Réseau</option>
               </select>
                  <span class="error" id="errorname"></span>
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
                  <span class="error" id="errorformation"></span>
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
                  <span class="error" id="errorprix"></span>
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
                  <span class="error" id="errordescription"></span>
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
                   minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png" >
                 <span class="error" id="errorfile"></span>

               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input type="submit" value="Ajouter">      
                  <input type="reset" value="Annuler"> 
               </td>
            </tr>
         </table>
      </form>
          </section>

   </body>
</html>