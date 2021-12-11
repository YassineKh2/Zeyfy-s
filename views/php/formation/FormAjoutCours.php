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

                                        <form action="ajoutercours.php" id="myForm" class="myForm" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                                        <div class="filtre_ic" style="position:relative;right:130px;max-width:900px">
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
                                                    <div class="" style="width: 60rem;padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem;position:relative;left:270px">
                                                        <a class="add_course_button" href="">Cours numéro 1</a>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>
                                                            Nom de Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="cours1" class="long" />
                                                        <span class="error" id="errorformation"></span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <label>
                                                            Image <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="image1" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            Contenu Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="file1" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".pdf, .docx">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                               
                                                
                                            </table>
                                            </div>
                                           

                                    </div>


                                </div>

                                <div class="course_align">

                                        <div class="filtre_ic" style="position:relative;right:130px;max-width:900px">
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
                                                    <div class="" style="width: 60rem;padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem;position:relative;left:270px">
                                                        <a class="add_course_button" href="">Cours numéro 2</a>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>
                                                            Nom de Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="cours2" class="long" />
                                                        <span class="error" id="errorformation"></span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <label>
                                                            Image <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="image2" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            Contenu Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="file2" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".pdf, .docx">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                               
                                                
                                            </table>
                                            </div>
                                            

                                </div>







                                <div class="course_align">

                                        <div class="filtre_ic" style="position:relative;right:130px;max-width:900px">
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
                                                    <div class="" style="width: 60rem;padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem;position:relative;left:270px">
                                                        <a class="add_course_button" href="">Cours numéro 3</a>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>
                                                            Nom de Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="cours3" class="long" />
                                                        <span class="error" id="errorformation"></span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <label>
                                                            Image <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="image3" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            Contenu Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="file3" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".pdf, .docx">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                               
                                                
                                            </table>
                                            </div>

                                </div>







                                <div class="course_align">

                                        <div class="filtre_ic" style="position:relative;right:130px;max-width:900px">
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
                                                    <div class="" style="width: 60rem;padding: 1rem 0rem 2rem 0rem; margin:0rem 0rem 1rem 0rem;position:relative;left:270px">
                                                        <a class="add_course_button" href="">Cours numéro 4</a>
                                                    </div>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>
                                                            Nom de Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="cours4" class="long" />
                                                        <span class="error" id="errorformation"></span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <label>
                                                            Image <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="image4" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".jpg, .jpeg, .png">
                                                        <span class="error" id="errorfile"></span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            Contenu Cours <span class="required">*</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input type="file" id="file" name="file4" class="custom-file-input" required minlength="3" maxlength="20" size="10" accept=".pdf, .docx">
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
                                            </div>
                                            </form>

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