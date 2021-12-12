<?php
include '../../../controller/FormationC.php';
$formationC = new FormationC();
$id_formation = $_GET["id_formation"];
$formation = $formationC->recupererformations($id_formation);
var_dump($formation['filiere']);
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

               <a class="nav-link nav-profile d-flex align-items-center pe-3 py-1" href="#" data-bs-toggle="dropdown">
                  <img src="../../assets/images/img_profil.jpg" alt="Profile" class="rounded-circle" style="max-height: 45px;width:45px">
                  <span class="d-none d-md-block dropdown-toggle ps-2 py-0">GUETAT Youssef</span>
               </a><!-- End Profile Iamge Icon -->

               <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                     <h6>GUETAT Youssef</h6>
                     <span>Engineer</span>
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

                              <form action="modifierFormationA.php?id_formation= <?php echo $id_formation ?>" method='POST' <table class="form-style" enctype="multipart/form-data">


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
                                             <?php if (strcmp($formation['filiere'],"Programmation") == 0) { ?>
                                                <option value="programmation">programmation</option>
                                                <option value="mathématiques">mathématiques</option>
                                                <option value="réseaux">réseaux</option>
                                             <?php } ?>
                                             <?php if (strcmp($formation['filiere'],"Mathématiques") == 0) { ?>
                                                <option value="mathématiques">mathématiques</option>
                                                <option value="réseaux">réseaux</option>
                                                <option value="programmation">programmation</option>
                                             <?php } ?>
                                             <?php if (strcmp($formation['filiere'],"Réseaux") == 0) { ?>
                                                <option value="réseaux">réseaux</option>
                                                <option value="programmation">programmation</option>
                                                <option value="mathématiques">mathématiques</option>
                                             <?php } ?>
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
                                       <input type="text" name="formation" class="long" value="<?php echo $formation['titre_f']; ?>" />
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
                                       <div class="course_align">
                                          <div class="select" style="max-width: 14rem;max-height: 10rem;position:relative;right:125px">
                                             <select name="format1" id="format1">
                                                <option selected disabled>sélecter devise</option>
                                                <option value="dinar">dinar</option>
                                                <option value="euro">euro</option>
                                                <option value="dollar">dollar</option>
                                             </select>
                                          </div>
                                          <div class="placenum">
                                             <input type="number" name="prix" class="longn" min="0" value="<?php echo $formation['prix_f']; ?>" />
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
                                       <input type="file" id="file" name="file" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png " value="<?php echo $formation['image']; ?>">
                                       <span class="error" id="errorfile"></span>

                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td>

                                       <div class="posbnt">
                                          <input class="btnf" type="submit" value="Modifier">
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