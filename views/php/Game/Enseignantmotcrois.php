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
<svg xmlns="http://www.w3.org/2000/svg" class="svgg" data-name="Layer 1" width="577.00869" height="614.65067" viewBox="0 0 577.00869 614.65067" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M582.47657,494.53924c-40.4127,0-86.85714-44.84621-127.94893-23.53859-124.415,64.51367-107.28858-43.43994-143.032-83.58887l1.17347-2.35367c39.43875,35.36308,88.67933,64.1353,142.3988,83.20477,48.54556,17.23457,97.45513,25.21994,141.42331,23.11263l.07631,2.8291Q589.6025,494.54063,582.47657,494.53924Z" transform="translate(-311.49566 -142.67466)" fill="#f2f2f2"/><path d="M877.47357,233.88537c-32.21551,24.39974-96.31582,16.69148-116.20791,58.48688-60.228,126.54525-111.754,30.14827-164.48777,19.72362l-.48562-2.58477c52.79008,4.37844,109.41448-2.4151,163.75112-19.64751,49.10434-15.5713,92.91452-38.7355,126.692-66.96178l1.76893,2.20918Q883.15494,229.5841,877.47357,233.88537Z" transform="translate(-311.49566 -142.67466)" fill="#f2f2f2"/><ellipse cx="89.54489" cy="152.32747" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><ellipse cx="444.54489" cy="258.32747" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><ellipse cx="212.54489" cy="11.32747" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><path d="M675.48474,560.80583l-9.8235-59.07561a4.577,4.577,0,0,1,3.76-5.25985l44.6152-7.41893a4.577,4.577,0,0,1,5.25982,3.76l9.82351,59.0756a4.577,4.577,0,0,1-3.75994,5.25985l-44.6152,7.41893A4.577,4.577,0,0,1,675.48474,560.80583Z" transform="translate(-311.49566 -142.67466)" fill="#3f3d56"/><path d="M675.9399,542.39344l-6.31545-37.97915a4.28642,4.28642,0,0,1,3.52133-4.926l38.343-6.37595a4.28662,4.28662,0,0,1,4.92622,3.52129l8.74159,52.56925a4.28662,4.28662,0,0,1-3.52155,4.92605l-23.75269,3.94977A19.09378,19.09378,0,0,1,675.9399,542.39344Z" transform="translate(-311.49566 -142.67466)" fill="#fff"/><path d="M677.59479,513.97881a4.1886,4.1886,0,0,1,3.441-4.81367l26.59846-4.423a4.184,4.184,0,1,1,1.37265,8.25469l-26.59846,4.423A4.1886,4.1886,0,0,1,677.59479,513.97881Z" transform="translate(-311.49566 -142.67466)" fill="#f57200"/><path d="M679.73,526.81945a4.18859,4.18859,0,0,1,3.441-4.81367l26.59846-4.423a4.184,4.184,0,1,1,1.37265,8.25469l-26.59846,4.423A4.18859,4.18859,0,0,1,679.73,526.81945Z" transform="translate(-311.49566 -142.67466)" fill="#f57200"/><path d="M681.86526,539.66009a4.18859,4.18859,0,0,1,3.441-4.81367l26.59847-4.423a4.184,4.184,0,1,1,1.37264,8.25469l-26.59846,4.423A4.1886,4.1886,0,0,1,681.86526,539.66009Z" transform="translate(-311.49566 -142.67466)" fill="#f57200"/><path d="M655.34018,505.12533a11.9666,11.9666,0,0,1,2.69128-18.151L642.46928,412.8735l20.62637,7.93046,11.94088,70.79225a12.03148,12.03148,0,0,1-19.69635,13.52912Z" transform="translate(-311.49566 -142.67466)" fill="#ffb8b8"/><polygon points="336.978 596.816 353.955 596.815 362.032 531.329 336.975 531.33 336.978 596.816" fill="#ffb6b6"/><path d="M644.14261,733.94717l4.77875-.0002,18.657-7.58735,9.99957,7.58619h.00135a21.30874,21.30874,0,0,1,21.30758,21.30724v.69242l-54.74319.002Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><polygon points="183.573 574.742 198.768 582.315 235.209 527.31 212.783 516.133 183.573 574.742" fill="#ffb6b6"/><path d="M493.66529,710.52409l4.277,2.13161,20.0824,1.53223L523.59,725.43824l.00121.0006a21.30872,21.30872,0,0,1,9.56488,28.57489l-.30888.6197L483.85193,730.2145Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><path d="M655.99546,442.0777l-107.94908,2.81607,1.87737,52.56651s-1.87737,14.08031,1.87738,17.83506,5.63213,3.75475,3.75475,10.32557-6.7309,69.3528-6.7309,69.3528-44.30536,78.33949-42.428,80.21687,3.75475,0,1.87737,4.69344-3.75475,2.81606-1.87737,4.69343a69.13645,69.13645,0,0,1,4.69344,5.63213h30.59782s1.71108-9.38688,1.71108-10.32556,1.87737-6.57082,1.87737-7.5095,53.4588-57.57829,53.4588-57.57829l11.26425-93.86876,27.22195,91.99139s0,80.72713,1.87737,82.60451,1.87738.93869.93869,4.69344-4.69344,2.81606-1.87738,5.63212,3.75475-1.87737,2.81607,2.81607l-.93869,4.69344,36.06365.40282s3.75475-7.91233,1.87737-10.72839-1.76473-2.04737.52567-6.65581,3.22908-5.54713,2.2904-6.48582-.93869-5.93147-.93869-5.93147S666.321,499.33765,666.321,496.52159a9.36293,9.36293,0,0,1,.77978-4.22293v-3.82244L663.505,474.93177Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><path d="M753.30623,704.21131l.93144-20.94324a67.64032,67.64032,0,0,1,31.54965-7.98643c-15.15276,12.3885-13.25912,36.26927-23.53234,52.92887A40.68573,40.68573,0,0,1,732.41971,747.012l-12.68037,7.76379a68.17642,68.17642,0,0,1,14.36987-55.24594A65.85484,65.85484,0,0,1,746.212,688.28429C749.249,696.29218,753.30623,704.21131,753.30623,704.21131Z" transform="translate(-311.49566 -142.67466)" fill="#f2f2f2"/><polygon points="288.604 115.052 342.675 224.404 332.096 357.116 263.002 350.803 250.612 131.022 288.604 115.052" fill="#2f2e41"/><path d="M676.02493,485.13955l-31.59571-2.88818-.04883-.40088L623.17727,306.29092l4.74512-13.15576a19.26545,19.26545,0,0,1,14.41406-12.32666V280.808a19.18106,19.18106,0,0,1,22.48828,15.34277l5.67432,30.64893,8.0498,103.60254Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><path d="M593.763,273.94334l6.37215-15.24555,19.7219.34625,20.56478,29.08951,21.58466,90.773s7.7526,66.30952,0,69.81-34.02915-.8224-34.02915-.8224Z" transform="translate(-311.49566 -142.67466)" fill="#f57200"/><path d="M619.857,259.044s42.48294,24.55778,44.14462,37.37694,7.225,169.7186,7.225,169.7186l-15.02345-9.7077-4.106-57.18443L633.7623,282.16886Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><circle cx="298.33255" cy="80.27277" r="28.95364" fill="#ffb8b8"/><path d="M576.98677,203.92295c3.25118-5.02977,9.3522-8.382,15.2667-7.44a20.848,20.848,0,0,1,34.93176-12.16009,6.48287,6.48287,0,0,1,6.33977-.63448,13.36724,13.36724,0,0,1,5.15061,4.13432,30.00055,30.00055,0,0,1,4.19793,30.52028c.72284-2.62776-1.91061-5.09988-4.57143-5.68956-2.66059-.58967-5.45161-.0318-8.14982-.4158-3.45822-.49207-6.56688-2.49823-10.03057-2.94972-2.911-.37944-5.83834.36689-8.677,1.115-2.83868.748-5.75853,1.51089-8.6736,1.16475-2.91529-.34615-6.6704,10.70164-6.62,18.483.00958,1.47463-.29415,3.36792-1.73526,3.68077-1.77472.38536-2.80311-2.06408-4.49231-2.73151a3.12509,3.12509,0,0,0-3.83309,2.03832,5.095,5.095,0,0,0,.97275,4.56254,15.0557,15.0557,0,0,0,3.65021,3.16646l-.6957.57861c-1.15722,1.52879-3.55764,1.595-5.22564.64919a11.27835,11.27835,0,0,1-3.75191-4.272c-3.08586-5.1326-5.79274-10.60132-6.88178-16.49039S573.73583,208.95271,576.98677,203.92295Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><path d="M513.9213,418.35173l57.84537-62.05992a6.484,6.484,0,0,1,9.15373-.32174l46.869,43.6861a6.484,6.484,0,0,1,.32171,9.15371l-57.84536,62.05991a6.484,6.484,0,0,1-9.15371.32177l-46.869-43.6861A6.484,6.484,0,0,1,513.9213,418.35173Z" transform="translate(-311.49566 -142.67466)" fill="#e6e6e6"/><path d="M534.98817,402.958l37.18825-39.89774a6.07233,6.07233,0,0,1,8.57274-.30133l40.28,37.54453a6.07258,6.07258,0,0,1,.30155,8.57295l-51.47451,55.22488a6.0726,6.0726,0,0,1-8.573.30112l-24.9526-23.25806A27.049,27.049,0,0,1,534.98817,402.958Z" transform="translate(-311.49566 -142.67466)" fill="#fff"/><path d="M568.32206,380.27141a5.93375,5.93375,0,0,1,8.37725-.29445l27.94213,26.04456a5.92726,5.92726,0,0,1-8.08279,8.67169l-27.94214-26.04455A5.93375,5.93375,0,0,1,568.32206,380.27141Z" transform="translate(-311.49566 -142.67466)" fill="#e6e6e6"/><path d="M555.74883,393.76072a5.93373,5.93373,0,0,1,8.37724-.29445l27.94213,26.04455a5.92726,5.92726,0,1,1-8.08279,8.6717L556.04328,402.138A5.93373,5.93373,0,0,1,555.74883,393.76072Z" transform="translate(-311.49566 -142.67466)" fill="#e6e6e6"/><path d="M543.17559,407.25a5.93376,5.93376,0,0,1,8.37725-.29445L579.495,433.00013a5.92726,5.92726,0,0,1-8.08279,8.6717L543.47,415.62727A5.93375,5.93375,0,0,1,543.17559,407.25Z" transform="translate(-311.49566 -142.67466)" fill="#e6e6e6"/><path d="M611.16209,481.22039l-19.99867,28.63577-.93219,1.12287a11.10632,11.10632,0,0,1-6.34034,3.78514q-.52772.106-1.05988.15855a10.832,10.832,0,0,1-1.31838.05416c-.25212-.00448-.504-.01847-.75481-.04024a11.07826,11.07826,0,0,1-4.17677-1.21708l-8.53241-5.95887a3.42278,3.42278,0,0,1-1.3641-1.98117,3.47355,3.47355,0,0,1-.08344-1.21657,3.42,3.42,0,0,1,.59781-1.587l24.6254-35.26072a3.44149,3.44149,0,0,1,4.78594-.84995l13.70261,9.56963c.03244.02266.06366.04553.09559.06891.0204.01532.04081.03064.0602.0474.02761.02036.05422.04215.07959.06417.03382.02683.06591.0546.09749.08309.0287.02648.0574.053.08559.08016l.01673.016c.03584.03468.07117.07009.10478.10643.03411.03561.06793.07318.09981.11046.02309.02684.04638.05491.069.08248l.00238.00273c.06578.08241.12833.16792.18641.25674.01869.027.03637.05543.05333.08336l.00779.01188c.01414.02274.02757.045.04049.06795.03976.06746.07679.13729.11209.20805a3.53257,3.53257,0,0,1,.153.35994c.01452.0391.02731.07914.03939.11867.01077.03218.021.0651.02957.09894l.00252.00713.00362.01325c.00889.02873.01656.05768.0235.08613.01419.05494.02663.11083.03786.16693.00333.0152.00666.03039.00949.04631.00333.01519.00543.03061.00826.04652.00333.0152.00543.03061.008.0453l.00436.02449c.00682.04551.01241.09125.01729.13648.00632.057.01143.11416.01387.17056.00336.0474.00529.09379.006.1404.00127.04271.0011.08442.00042.12684a.2898.2898,0,0,1-.00119.03242c-.00045.04365-.00285.087-.00526.13039-.00651.10914-.01935.21814-.03631.32534-.00673.04035-.01367.07947-.02184.11881-.0091.04834-.01963.09568-.03089.14252-.0038.01772-.00883.03566-.01334.05288-.00667.02645-.01406.05239-.02146.07833-.00818.0286-.01686.05793-.02576.086l-.022.06832c-.01357.04093-.02808.08013-.04309.12-.00905.02371-.0181.04742-.02838.07135a3.43514,3.43514,0,0,1-.247.49348c-.01237.01925-.02351.03828-.03588.05752C611.22127,481.1341,611.19229,481.17713,611.16209,481.22039Z" transform="translate(-311.49566 -142.67466)" fill="#fff"/><circle cx="286.12309" cy="336.69752" r="2.93561" fill="#f57200"/><path d="M564.45545,510.394a11.9666,11.9666,0,0,1,2.69128-18.15095l-15.56218-74.10088,20.62637,7.93046,11.94088,70.79225A12.03148,12.03148,0,0,1,564.45545,510.394Z" transform="translate(-311.49566 -142.67466)" fill="#ffb8b8"/><path d="M553.02786,480.3251l-8.39454-54.08692-3.15429-103.876,2.34424-31.13428a19.18,19.18,0,0,1,20.70605-17.67334,19.26629,19.26629,0,0,1,15.65723,10.70361l6.1333,12.56885-2.18994,177.22559Z" transform="translate(-311.49566 -142.67466)" fill="#2f2e41"/><path d="M817.06512,755.77212a1.54861,1.54861,0,0,1-1.5533,1.55322H397.46165a1.55322,1.55322,0,0,1,0-3.10644H815.51182A1.54866,1.54866,0,0,1,817.06512,755.77212Z" transform="translate(-311.49566 -142.67466)" fill="#ccc"/><path d="M587.15556,234.68325a2,2,0,1,1,3.34,1.59273l3.36145,5.52392a1,1,0,0,1-1.70852,1.03971l-3.7795-6.211A1.99455,1.99455,0,0,1,587.15556,234.68325Z" transform="translate(-311.49566 -142.67466)" fill="#fff"/><rect x="589.01042" y="235.82042" width="1" height="3" rx="0.5" transform="translate(911.24023 41.08244) rotate(153.23663)" fill="#2f2e41"/></svg>
</footer>

    <!----------- Javascript for Toggle Menu ------------>
<!-- <script src="assets/js/indexlevel.js">


</script>   -->
<script src="../../assets/js/Enseignantmotcrois.js">

</script>
</body>


</html>
