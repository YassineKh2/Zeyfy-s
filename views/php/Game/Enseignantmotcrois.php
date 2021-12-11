<!DOCTYPE html>
<html lang="PT - BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/level5.css">
    <!-- <link rel="stylesheet" href="../../assets/css/CrosswordsInput.css"> -->
    <title>CROSSWORDS ENSEIGNANT</title>
    
</head>

<body>
    <section class="header">
    <nav>
        <a href="index.html"> <img src="../../assets/images/logo.png"> </a>
        <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
<ul>

   
    <li><a href=""> Plus d'information</a></li>
    <li><a href="">Reclamation</a></li>
    <li><a href="">Nous-contacter</a></li>
    <li><a href="../html/index.html">Quitter</a></li>
</ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>

</nav>


<div id="assignmentcontainer">

</div>

<form>
    <div class="div_body">

        <div class="h3">
            <h3> 👾 Veuillez remplir  mot-croisées👾 </h3>

           

        <!-- indications -->
        <div class="tips">
            <h3>veuillez remplir les indications:</h3>
        
            <tr>
               
               <td><input type="longtext" name="indice1" placeholder="Ecrire votre indice 1" id="indice1" maxlength="30" class="indice" ></td>
           </tr>
           <tr>
                   
                            
                   <td><input type="longtext" name="indice2" class="indice" placeholder="Ecrire votre indice 2" id="indice2" maxlength="20"></td>
                  
                   </tr>
                   <tr>
                   
                   <td><input type="longtext" name="indice3" class="indice" placeholder="Ecrire votre indice 3" id="indice3" maxlength="20"></td>   
                   
                       </tr>
                       <tr>
                   
                   <td><input type="longtext" name="indice4" class="indice" placeholder="Ecrire votre indice 4" id="indice4" maxlength="20"></td>   
                   
                       </tr>
                       <tr>
                        <td><input type="longtext" name="i5"  class="indice"placeholder="Ecrire votre indice 5" id="indice5" maxlength="20"></td>   
                   
                   </tr>
                   <tr>
                    <td><input type="longtext" name="indice6" class="indice" placeholder="Ecrire votre indice 6" id="indice6" maxlength="20"></td>   
                    </tr>

                    <tr>
                   
                   <td><input type="longtext" name="indice7" class="indice" placeholder="Ecrire votre indice 7" id="indice7" maxlength="20"></td>   
                   
                    </tr>

            
                    <tr>
                   
                   <td><input type="longtext" name="indice8"  class="indice" placeholder="Ecrire votre indice 8" id="indice8" maxlength="20"></td>   
                   
                       </tr>
       
                       <tr>
                   
                   <td><input type="longtext" name="indice9" class="indice" placeholder="Ecrire votre indice 9" id="indice9" maxlength="20"></td>   
                   
                       </tr>
            
                       <tr>
                   
                   <td><input type="longtext" name="indice10" class="indice" placeholder="Ecrire votre indice 10" id="indice10" maxlength="20"></td>   
                   
                       </tr>
        
                       <tr>
                   
                   <td><input type="longtext" name="indice11" class="indice" placeholder="Ecrire votre indice 11" id="indice11" maxlength="20"></td>   
                   
                       </tr>
                       <tr>
                   
                   <td><input type="longtext" name="indice12" class="indice" placeholder="Ecrire votre indice 12" id="indice12" maxlength="20"></td>   
                   
                       </tr>
                       <tr>
                   
                   <td><input type="longtext" name="indice13" class="indice"  placeholder="Ecrire votre indice 13" id="indice13" maxlength="20"></td>   
                   
                       </tr>
                       <tr>
                   
                   <td><input type="longtext" name="indice14" class="indice" placeholder="Ecrire votre indice 14" id="indice14" maxlength="20"></td>   
                   
                       </tr>
                       <tr>
                   
                   <td><input type="longtext" name="indice15" class="indice" placeholder="Ecrire votre indice 15" id="indice15" maxlength="20"></td>   
                   
                       </tr>
           
                       <tr>
                   
                   <td><input type="longtext" name="indice16" class="indice" placeholder="Ecrire votre indice 16" id="indice16" maxlength="20"></td>   
                   
                       </tr>
       
              
        </div>
        <!-- Fin indication-->

        </div>

        <!-- Crosswords -->

        <div class="box1">
            <input type="text" class="cpu-1 words" maxlength="1" data-letter="C" id="1" placeholder="Z">
            <input type="text" class="cpu-2 words" maxlength="1" data-letter="P" id="2" placeholder="E">
            <input type="text" class="cpu-3 words" maxlength="1" data-letter="U" id="3" placeholder="Y">

            <input type="text" class="ula-2 words" maxlength="1" data-letter="L" id="4" placeholder="F">
            <input type="text" class="ula-3 words" maxlength="1" data-letter="A" id="5" placeholder="Y">

            <input type="text" class="registradores-1 words" maxlength="1" data-letter="R" id="6" placeholder="E">
            <input type="text" class="registradores-2 words" maxlength="1" data-letter="E" id="7" placeholder="D">
            <input type="text" class="registradores-3 words" maxlength="1" data-letter="G" id="8" placeholder="U">
            <input type="text" class="registradores-4 words" maxlength="1" data-letter="I" id="9" placeholder="C">
            <input type="text" class="registradores-5 words" maxlength="1" data-letter="S" id="10" placeholder="A">
            <input type="text" class="registradores-6 words" maxlength="1" data-letter="T" id="11" placeholder="P">
            <input type="text" class="registradores-7 words" maxlength="1" data-letter="R" id="12" placeholder="L">
            <input type="text" class="registradores-9 words" maxlength="1" data-letter="D" id="13" placeholder="A">
            <input type="text" class="registradores-10 words" maxlength="1" data-letter="O" id="14" placeholder="Y">
            <input type="text" class="registradores-11 words" maxlength="1" data-letter="R" id="15" placeholder="B">
            <input type="text" class="registradores-12 words" maxlength="1" data-letter="E" id="16" placeholder="Y">
            <input type="text" class="registradores-13 words" maxlength="1" data-letter="S" id="17" placeholder="Z">

            <!--<input type="text" class="ram-1" maxlength="1" data-letter="R" placeholder="R">-->
            <input type="text" class="ram-2 words" maxlength="1" data-letter="A" placeholder="E" id="24">
            <input type="text" class="ram-3 words" maxlength="1" data-letter="M" placeholder="Y" id="25">

            <!--<input type="text" class="rom-1" maxlength="1" data-letter="R" placeholder="R">-->
            <input type="text" class="rom-2 words" maxlength="1" data-letter="O" placeholder="F" id="22">
            <input type="text" class="rom-3 words" maxlength="1" data-letter="M" placeholder="Y" id="23">


            <!-- <input type="text" class="eprom-1" maxlength="1" data-letter="E" placeholder="E">-->
            <input type="text" class="eprom-2 words" maxlength="1" data-letter="P" placeholder="E" id="27">
            <input type="text" class="eprom-3 words" maxlength="1" data-letter="R" placeholder="D" id="28">
            <input type="text" class="eprom-4 words" maxlength="1" data-letter="O" placeholder="U" id="29">
            <input type="text" class="eprom-5 words" maxlength="1" data-letter="M" placeholder="C" id="30">

            <input type="text" class="flash-1 words" maxlength="1" data-letter="F" placeholder="A" id="18">
            <input type="text" class="flash-2 words" maxlength="1" data-letter="L" placeholder="P" id="19">
            <input type="text" class="flash-3 words" maxlength="1" data-letter="A" placeholder="L" id="20">
            <!--<input type="text" class="flash-4" maxlength="1" data-letter="S" placeholder="S">-->
            <input type="text" class="flash-5 words" maxlength="1" data-letter="H" placeholder="A" id="21">

            <!--<input type="text" class="memoriamassa-1" maxlength="1" data-letter="M" placeholder="M">-->
            <input type="text" class="memoriamassa-2 words" maxlength="1" data-letter="E" placeholder="E" id="31">
            <input type="text" class="memoriamassa-3 words" maxlength="1" data-letter="M" placeholder="D" id="32">
            <input type="text" class="memoriamassa-4 words" maxlength="1" data-letter="O" placeholder="U" id="33">
            <input type="text" class="memoriamassa-5 words" maxlength="1" data-letter="R" placeholder="C" id="34">
            <input type="text" class="memoriamassa-6 words" maxlength="1" data-letter="I" placeholder="A" id="35">
            <input type="text" class="memoriamassa-7 words" maxlength="1" data-letter="A" placeholder="P" id="36">
            <input type="text" class="memoriamassa-8 words" maxlength="1" data-letter="D" placeholder="L" id="37">
            <input type="text" class="memoriamassa-9 words" maxlength="1" data-letter="E" placeholder="A" id="38">
            <input type="text" class="memoriamassa-10 words" maxlength="1" data-letter="M" placeholder="Y" id="39">
            <input type="text" class="memoriamassa-11 words" maxlength="1" data-letter="A" placeholder="B" id="40">
            <input type="text" class="memoriamassa-12 words" maxlength="1" data-letter="S" placeholder="Y" id="41">
            <input type="text" class="memoriamassa-13 words" maxlength="1" data-letter="S" placeholder="Z" id="42">
            <input type="text" class="memoriamassa-14 words" maxlength="1" data-letter="A" placeholder="E" id="43">

            <!--<input type="text" class="dma-1" maxlength="1" data-letter="D" placeholder="D">-->
            <input type="text" class="dma-2 words" maxlength="1" data-letter="M" placeholder="Y" id="46">
            <input type="text" class="dma-3 words" maxlength="1" data-letter="A" placeholder="F" id="47">

            <input type="text" class="cs-1 words" maxlength="1" data-letter="C" placeholder="Y" id="44">
            <!--<input type="text" class="cs-2" maxlength="1" data-letter="S" placeholder="S">-->

            <!--<input type="text" class="addressbus-1" maxlength="1" data-letter="A" placeholder="A">-->
            <input type="text" class="addressbus-2 words" maxlength="1" data-letter="D" placeholder="D" id="48">
            <input type="text" class="addressbus-3 words" maxlength="1" data-letter="D" placeholder="D" id="49">
            <input type="text" class="addressbus-4 words" maxlength="1" data-letter="R" placeholder="R" id="50">
            <input type="text" class="addressbus-5 words" maxlength="1" data-letter="E" placeholder="E" id="51">
            <input type="text" class="addressbus-6 words" maxlength="1" data-letter="S" placeholder="S" id="52">
            <input type="text" class="addressbus-7 words" maxlength="1" data-letter="S" placeholder="S" id="53">
            <input type="text" class="addressbus-8 words" maxlength="1" data-letter="B" placeholder="B" id="54">
            <input type="text" class="addressbus-9 words" maxlength="1" data-letter="U" placeholder="U" id="55">
            <input type="text" class="addressbus-10 words" maxlength="1" data-letter="S" placeholder="S" id="56">

            <input type="text" class="databus-1 words" maxlength="1" data-letter="D" placeholder="D" id="65">
            <input type="text" class="databus-2 words" maxlength="1" data-letter="A" placeholder="A" id="59">
            <input type="text" class="databus-3 words" maxlength="1" data-letter="T" placeholder="T" id="66">
            <input type="text" class="databus-4 words" maxlength="1" data-letter="A" placeholder="A" id="67">
            <input type="text" class="databus-5 words" maxlength="1" data-letter="B" placeholder="B" id="68">
            <input type="text" class="databus-6 words" maxlength="1" data-letter="U" placeholder="U" id="69">
            <!--<input type="text" class="databus-7" maxlength="1" data-letter="S" placeholder="S">-->

            <!--<input type="text" class="i5-1" maxlength="1" data-letter="I" placeholder="I"> -->
            <input type="text" class="i5-2 words" maxlength="1" data-letter="5" placeholder="5" id="26">

            <!--  <input type="text" class="i7-1" maxlength="1" data-letter="I" placeholder="I"> -->
            <input type="text" class="i7-2 words" maxlength="1" data-letter="5" placeholder="7" id="45">

            <input type="text" class="dual-1 words" maxlength="1" data-letter="D" placeholder="D" id="70">
            <!--<input type="text" class="dual-2" maxlength="1" data-letter="U" placeholder="U">-->
            <input type="text" class="dual-3 words" maxlength="1" data-letter="A" placeholder="A" id="71">
            <input type="text" class="dual-4 words" maxlength="1" data-letter="L" placeholder="L" id="72">
            <input type="text" class="dual-5 words" maxlength="1" data-letter="C" placeholder="C" id="73">
            <input type="text" class="dual-6 words" maxlength="1" data-letter="O" placeholder="O" id="74">
            <input type="text" class="dual-7 words" maxlength="1" data-letter="R" placeholder="R" id="75">
            <input type="text" class="dual-8 words" maxlength="1" data-letter="E" placeholder="E" id="76">

            <input type="text" class="quad-1 words" maxlength="1" data-letter="Q" placeholder="Q" id="57">
            <input type="text" class="quad-2 words" maxlength="1" data-letter="U" placeholder="U" id="58">
            <!--<input type="text" class="quad-3" maxlength="1" data-letter="A" placeholder="A">-->
            <input type="text" class="quad-4 words" maxlength="1" data-letter="D" placeholder="D" id="60">
            <input type="text" class="quad-5 words" maxlength="1" data-letter="C" placeholder="C" id="61">
            <input type="text" class="quad-6 words" maxlength="1" data-letter="O" placeholder="O" id="62">
            <input type="text" class="quad-7 words" maxlength="1" data-letter="R" placeholder="R" id="63">
            <input type="text" class="quad-8 words" maxlength="1" data-letter="E" placeholder="E" id="64">
        </div>

     
        <input type="text" class="numberBOX1 " placeholder="01" disabled></input>
        <input type="text" class="numberBOX2 " placeholder="02"disabled></input>
        <input type="text" class="numberBOX3 " placeholder="03"disabled></input>
        <input type="text" class="numberBOX4 " placeholder="04"disabled></input>
        <input type="text" class="numberBOX5 " placeholder="05"disabled></input>
        <input type="text" class="numberBOX6 " placeholder="06"disabled></input>
        <input type="text" class="numberBOX7 " placeholder="07"disabled></input>
        <input type="text" class="numberBOX8 " placeholder="08"disabled></input>
        <input type="text" class="numberBOX9 " placeholder="09"disabled></input>
        <input type="text" class="numberBOX10 " placeholder="10"disabled></input>
        <input type="text" class="numberBOX11 " placeholder="11"disabled></input>
        <input type="text" class="numberBOX12 " placeholder="12"disabled></input>
        <input type="text" class="numberBOX13 " placeholder="13"></input>
        <input type="text" class="numberBOX14 " placeholder="14"></input>
        <input type="text" class="numberBOX15 " placeholder="15"></input>
        <input type="text" class="numberBOX16 " placeholder="16"></input>
        <!-- FIM INDICADORES -->

        <div class="botoes">
            <button type="button" id="valider">Valider</button>
            <button type="reset">Re-commencer </button>
            <div id="correctWords" style="color: #fff">
            </div>
        </div>

     

    </div>

</form> 
<footer class="footer-distributed">

<div class="footer-left">
<img src="../../assets/images/logo.png">
    <h3>EDUCAPLAY</h3>

    <p class="footer-links">
        <a href="#">ACCUEIL</a>
        |
        <a href="#">PLANS</a>
        |
        <a href="#">FONCTIONNALITES</a>
        |
        <a href="#">CONTACT</a>
    </p>

    <p class="footer-company-name">© 2021 Jeu éducatif en ligne.</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
          <p>Rue Habib Borguiba,Cité La Ghazelle, Ariana , Tunisie - 2083</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+21655025447</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:Educaplay@esprit.tn">Educaplay@esprit.tn</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>Notre Objectif</span>
        L'objectif d’EducaPlay est principalement de créer de nouvelles opportunités pour les personnes et les organisations du monde entier. Notre place de marché propose une vaste bibliothèque composée de plusieurs cours enseignés par des formateurs confirmés tout en jouant.</p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>

    <!----------- Javascript for Toggle Menu ------------>
<!-- <script src="assets/js/indexlevel.js">


</script>   -->
<script src="../../assets/js/Enseignantmotcrois.js">

</script>
</body>


</html>
