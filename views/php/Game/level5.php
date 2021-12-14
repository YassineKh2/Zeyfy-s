<?php
include_once 'C:\xampp\htdocs\educaplay\controller\utilisateursC.php';
$utilisateurc = new utilisateurc;
?>



<!DOCTYPE html>
<html lang="PT - BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../assets/js/crosswords.js"></script>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/level5.css">
    <script src="https://kit.fontawesome.com/56a94e38db.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="../../assets/css/forrr.css"> -->
  <link rel="stylesheet" href="../../assets/css/userd.css">
    <title>CROSSWORDS</title>
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

<?php
        if ($_SESSION['auth'] == false)
            echo '<span><a href="../Login/login.php"></a></span>';
        else {
            $utilisateur = $utilisateurc->recupererutilisateurinfo($_SESSION['user_id']);
            echo '<div class="action">
      <div class="profile" onclick="drop();">
          <img src="../../assets/images/Userpics/' . $utilisateur['photo'] . '" width="300">
      </div>
      <div class="menu">
          <h3>' . $utilisateur['username'] . '<br><p class="a">Etudient</p></h3>
         <ul>
              <li class="fas fa-user"><a href="..\User\profiedash.php">Mon Profile</a></li><br>
              <li class="far fa-clipboard"><a href="#">Mes Formation</a></li><br>
              <li class="fas fa-edit"><a href="..\User\settings.php">Paramétres</a></li><br>
              <li class="fas fa-sign-out-alt"><a href="..\User\singout.php">Deconnection</a></li>
         </ul>
      </div>
  </div>';
        }
        ?>

    <div class="div_body">
        <div class="h3">
            <h3> 👾 Veuillez remplir  mot-croisées👾 </h3>
           
        <!-- indications -->
        <div class="tips">
            <h3>Cliquez ci-dessous pour voir les indications:</h3>
            <button onclick="dica01()">Definition 1</button>
            <button onclick="dica02()">Definition 2</button>
            <button onclick="dica03()">Definition 3</button>
            <button onclick="dica04()">Definition 4</button>
            <button onclick="dica05()">Definition 5</button>
            <button onclick="dica06()">Definition 6</button>
            <button onclick="dica07()">Definition 7</button>
            <button onclick="dica08()">Definition 8</button><br><br>
            <button onclick="dica09()">Definition 9</button>
            <button onclick="dica10()">Definition 10</button>
            <button onclick="dica11()">Definition 11</button>
            <button onclick="dica12()">Definition 12</button>
            <button onclick="dica13()">Definition 13</button>
            <button onclick="dica14()">Definition 14</button>
            <button onclick="dica15()">Definition 15</button>
            <button onclick="dica16()">Definition 16</button>
        </div>
        <!-- Fin indication-->
        </div>
        <!-- Crosswords -->
        <div class="box1">
            <input type="text" class="cpu-1" maxlength="1" data-letter="C" id="1" placeholder="Z">
            <input type="text" class="cpu-2" maxlength="1" data-letter="P" id="2" placeholder="E">
            <input type="text" class="cpu-3" maxlength="1" data-letter="U" id="3" placeholder="Y">
            <input type="text" class="ula-2" maxlength="1" data-letter="L" id="4" placeholder="F">
            <input type="text" class="ula-3" maxlength="1" data-letter="A" id="5" placeholder="Y">
            <input type="text" class="registradores-1" maxlength="1" data-letter="R" id="6" placeholder="E">
            <input type="text" class="registradores-2" maxlength="1" data-letter="E" id="7" placeholder="D">
            <input type="text" class="registradores-3" maxlength="1" data-letter="G" id="8" placeholder="U">
            <input type="text" class="registradores-4" maxlength="1" data-letter="I" id="9" placeholder="C">
            <input type="text" class="registradores-5" maxlength="1" data-letter="S" id="10" placeholder="A">
            <input type="text" class="registradores-6" maxlength="1" data-letter="T" id="11" placeholder="P">
            <input type="text" class="registradores-7" maxlength="1" data-letter="R" id="12" placeholder="L">
            <input type="text" class="registradores-9" maxlength="1" data-letter="D" id="13" placeholder="A">
            <input type="text" class="registradores-10" maxlength="1" data-letter="O" id="14" placeholder="Y">
            <input type="text" class="registradores-11" maxlength="1" data-letter="R" id="15" placeholder="B">
            <input type="text" class="registradores-12" maxlength="1" data-letter="E" id="16" placeholder="Y">
            <input type="text" class="registradores-13" maxlength="1" data-letter="S" id="17" placeholder="Z">
            <!--<input type="text" class="ram-1" maxlength="1" data-letter="R" placeholder="R">-->
            <input type="text" class="ram-2" maxlength="1" data-letter="A" placeholder="E" id="24">
            <input type="text" class="ram-3" maxlength="1" data-letter="M" placeholder="Y" id="25">
            <!--<input type="text" class="rom-1" maxlength="1" data-letter="R" placeholder="R">-->
            <input type="text" class="rom-2" maxlength="1" data-letter="O" placeholder="F" id="22">
            <input type="text" class="rom-3" maxlength="1" data-letter="M" placeholder="Y" id="23">
            <!-- <input type="text" class="eprom-1" maxlength="1" data-letter="E" placeholder="E">-->
            <input type="text" class="eprom-2" maxlength="1" data-letter="P" placeholder="E" id="27">
            <input type="text" class="eprom-3" maxlength="1" data-letter="R" placeholder="D" id="28">
            <input type="text" class="eprom-4" maxlength="1" data-letter="O" placeholder="U" id="29">
            <input type="text" class="eprom-5" maxlength="1" data-letter="M" placeholder="C" id="30">
            <input type="text" class="flash-1" maxlength="1" data-letter="F" placeholder="A" id="18">
            <input type="text" class="flash-2" maxlength="1" data-letter="L" placeholder="P" id="19">
            <input type="text" class="flash-3" maxlength="1" data-letter="A" placeholder="L" id="20">
            <!--<input type="text" class="flash-4" maxlength="1" data-letter="S" placeholder="S">-->
            <input type="text" class="flash-5" maxlength="1" data-letter="H" placeholder="A" id="21">
            <!--<input type="text" class="memoriamassa-1" maxlength="1" data-letter="M" placeholder="M">-->
            <input type="text" class="memoriamassa-2" maxlength="1" data-letter="E" placeholder="E" id="31">
            <input type="text" class="memoriamassa-3" maxlength="1" data-letter="M" placeholder="D" id="32">
            <input type="text" class="memoriamassa-4" maxlength="1" data-letter="O" placeholder="U" id="33">
            <input type="text" class="memoriamassa-5" maxlength="1" data-letter="R" placeholder="C" id="34">
            <input type="text" class="memoriamassa-6" maxlength="1" data-letter="I" placeholder="A" id="35">
            <input type="text" class="memoriamassa-7" maxlength="1" data-letter="A" placeholder="P" id="36">
            <input type="text" class="memoriamassa-8" maxlength="1" data-letter="D" placeholder="L" id="37">
            <input type="text" class="memoriamassa-9" maxlength="1" data-letter="E" placeholder="A" id="38">
            <input type="text" class="memoriamassa-10" maxlength="1" data-letter="M" placeholder="Y" id="39">
            <input type="text" class="memoriamassa-11" maxlength="1" data-letter="A" placeholder="B" id="40">
            <input type="text" class="memoriamassa-12" maxlength="1" data-letter="S" placeholder="Y" id="41">
            <input type="text" class="memoriamassa-13" maxlength="1" data-letter="S" placeholder="Z" id="42">
            <input type="text" class="memoriamassa-14" maxlength="1" data-letter="A" placeholder="E" id="43">
            <!--<input type="text" class="dma-1" maxlength="1" data-letter="D" placeholder="D">-->
            <input type="text" class="dma-2" maxlength="1" data-letter="M" placeholder="Y" id="46">
            <input type="text" class="dma-3" maxlength="1" data-letter="A" placeholder="F" id="47">
            <input type="text" class="cs-1" maxlength="1" data-letter="C" placeholder="Y" id="44">
            <!--<input type="text" class="cs-2" maxlength="1" data-letter="S" placeholder="S">-->
            <!--<input type="text" class="addressbus-1" maxlength="1" data-letter="A" placeholder="A">-->
            <input type="text" class="addressbus-2" maxlength="1" data-letter="D" placeholder="D" id="48">
            <input type="text" class="addressbus-3" maxlength="1" data-letter="D" placeholder="D" id="49">
            <input type="text" class="addressbus-4" maxlength="1" data-letter="R" placeholder="R" id="50">
            <input type="text" class="addressbus-5" maxlength="1" data-letter="E" placeholder="E" id="51">
            <input type="text" class="addressbus-6" maxlength="1" data-letter="S" placeholder="S" id="52">
            <input type="text" class="addressbus-7" maxlength="1" data-letter="S" placeholder="S" id="53">
            <input type="text" class="addressbus-8" maxlength="1" data-letter="B" placeholder="B" id="54">
            <input type="text" class="addressbus-9" maxlength="1" data-letter="U" placeholder="U" id="55">
            <input type="text" class="addressbus-10" maxlength="1" data-letter="S" placeholder="S" id="56">
            <input type="text" class="databus-1" maxlength="1" data-letter="D" placeholder="D" id="65">
            <input type="text" class="databus-2" maxlength="1" data-letter="A" placeholder="A" id="59">
            <input type="text" class="databus-3" maxlength="1" data-letter="T" placeholder="T" id="66">
            <input type="text" class="databus-4" maxlength="1" data-letter="A" placeholder="A" id="67">
            <input type="text" class="databus-5" maxlength="1" data-letter="B" placeholder="B" id="68">
            <input type="text" class="databus-6" maxlength="1" data-letter="U" placeholder="U" id="69">
            <!--<input type="text" class="databus-7" maxlength="1" data-letter="S" placeholder="S">-->
            <!--<input type="text" class="i5-1" maxlength="1" data-letter="I" placeholder="I"> -->
            <input type="text" class="i5-2" maxlength="1" data-letter="5" placeholder="5" id="26">
            <!--  <input type="text" class="i7-1" maxlength="1" data-letter="I" placeholder="I"> -->
            <input type="text" class="i7-2" maxlength="1" data-letter="5" placeholder="7" id="45">
            <input type="text" class="dual-1" maxlength="1" data-letter="D" placeholder="D" id="70">
            <!--<input type="text" class="dual-2" maxlength="1" data-letter="U" placeholder="U">-->
            <input type="text" class="dual-3" maxlength="1" data-letter="A" placeholder="A" id="71">
            <input type="text" class="dual-4" maxlength="1" data-letter="L" placeholder="L" id="72">
            <input type="text" class="dual-5" maxlength="1" data-letter="C" placeholder="C" id="73">
            <input type="text" class="dual-6" maxlength="1" data-letter="O" placeholder="O" id="74">
            <input type="text" class="dual-7" maxlength="1" data-letter="R" placeholder="R" id="75">
            <input type="text" class="dual-8" maxlength="1" data-letter="E" placeholder="E" id="76">
            <input type="text" class="quad-1" maxlength="1" data-letter="Q" placeholder="Q" id="57">
            <input type="text" class="quad-2" maxlength="1" data-letter="U" placeholder="U" id="58">
            <!--<input type="text" class="quad-3" maxlength="1" data-letter="A" placeholder="A">-->
            <input type="text" class="quad-4" maxlength="1" data-letter="D" placeholder="D" id="60">
            <input type="text" class="quad-5" maxlength="1" data-letter="C" placeholder="C" id="61">
            <input type="text" class="quad-6" maxlength="1" data-letter="O" placeholder="O" id="62">
            <input type="text" class="quad-7" maxlength="1" data-letter="R" placeholder="R" id="63">
            <input type="text" class="quad-8" maxlength="1" data-letter="E" placeholder="E" id="64">
        </div>
     
        <input type="text" class="numberBOX1" placeholder="01"></input>
        <input type="text" class="numberBOX2" placeholder="02"></input>
        <input type="text" class="numberBOX3" placeholder="03"></input>
        <input type="text" class="numberBOX4" placeholder="04"></input>
        <input type="text" class="numberBOX5" placeholder="05"></input>
        <input type="text" class="numberBOX6" placeholder="06"></input>
        <input type="text" class="numberBOX7" placeholder="07"></input>
        <input type="text" class="numberBOX8" placeholder="08"></input>
        <input type="text" class="numberBOX9" placeholder="09"></input>
        <input type="text" class="numberBOX10" placeholder="10"></input>
        <input type="text" class="numberBOX11" placeholder="11"></input>
        <input type="text" class="numberBOX12" placeholder="12"></input>
        <input type="text" class="numberBOX13" placeholder="13"></input>
        <input type="text" class="numberBOX14" placeholder="14"></input>
        <input type="text" class="numberBOX15" placeholder="15"></input>
        <input type="text" class="numberBOX16" placeholder="16"></input>
        <!-- FIM INDICADORES -->
        <div class="botoes">
            <button id="b1" onclick="validateCrosswords()">Valider</button>
            <button id="b1" onclick="resetCrosswords()">Re-commencer </button>
            <div id="correctWords" style="color: #fff">
            </div>
        </div>
     
    </div>

    
<footer class="footer-distributed">
<div class="footer-left">
<img src="../../assets/images/logo.png">
    <h3>EDUCAPLAY</h3>
    <p class="footer-links">
    <li><a href="">ACCUEIL</a></li>
     <li><a href="../avis/reclamation.php">RECLAMATION</a></li>
     <li><a href="../avis/index.php">CONTACT</a></li>
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
<svg class="svggg" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="578.60025" height="678.19423" viewBox="0 0 778.60025 678.19423" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M461.855,761.16415a3.61323,3.61323,0,0,1-2.61865-6.26262c.09111-.36213.15647-.62217.24758-.9843q-.0489-.11821-.09837-.23627a9.70311,9.70311,0,0,0-17.89849.06651c-2.92739,7.05051-6.65447,14.11307-7.57216,21.5678a28.7054,28.7054,0,0,0,.5039,9.87234,115.08611,115.08611,0,0,1-10.46893-47.79893,111.07991,111.07991,0,0,1,.689-12.392q.5708-5.05966,1.58377-10.0473a116.41938,116.41938,0,0,1,23.087-49.34152A30.98255,30.98255,0,0,0,462.19521,652.239a23.6336,23.6336,0,0,0,2.14933-6.45821c-.62729.08228-1.26489.13369-1.89217.17479-.19543.01023-.40108.02055-.59651.03087l-.07369.0033a3.57989,3.57989,0,0,1-2.9401-5.83225q.40627-.5.81305-.99948c.4114-.51423.833-1.01814,1.24434-1.53228a1.7836,1.7836,0,0,0,.13369-.15432c.47313-.58619.94609-1.16206,1.41922-1.74825a10.35167,10.35167,0,0,0-3.39367-3.28044c-4.74083-2.77661-11.28133-.85357-14.70586,3.43476-3.43476,4.28826-4.0826,10.30438-2.88976,15.66218a41.48513,41.48513,0,0,0,5.73842,12.793c-.25715.32912-.52454.64792-.78161.977a117.1705,117.1705,0,0,0-12.22972,19.37481,48.70942,48.70942,0,0,0-2.908-22.62447c-2.78346-6.71479-8.00064-12.37-12.595-18.17495-5.51856-6.97261-16.83488-3.9296-17.80713,4.90927q-.01412.12837-.02756.25666,1.02362.57747,2.004,1.22585a4.9011,4.9011,0,0,1-1.976,8.91908l-.09994.01543a48.7668,48.7668,0,0,0,1.28544,7.29124,50.20988,50.20988,0,0,0,24.99983,31.46837c.40108.20565.79193.41131,1.193.60673a119.59737,119.59737,0,0,0-6.43766,30.296,113.43411,113.43411,0,0,0,.08227,18.31542l-.03086-.216a29.97408,29.97408,0,0,0-10.23241-17.3076c-7.87438-6.46853-18.9994-8.8505-27.49446-14.04994a5.62528,5.62528,0,0,0-8.61571,5.47252q.01709.11352.03474.227a32.92633,32.92633,0,0,1,3.69184,1.779q1.02362.5776,2.004,1.22585a4.90116,4.90116,0,0,1-1.976,8.91917l-.1.01535c-.072.01031-.13369.02063-.20557.03094a48.8078,48.8078,0,0,0,8.97767,14.05786,50.25446,50.25446,0,0,0,36.44572,15.9913h.01032a119.56344,119.56344,0,0,0,8.03167,23.447H461.136c.10291-.3188.19542-.64792.288-.96672a32.59875,32.59875,0,0,1-7.93916-.473c2.12878-2.61214,4.25748-5.24483,6.38625-7.85688a1.78139,1.78139,0,0,0,.1337-.15424c1.07978-1.33685,2.16987-2.66347,3.24965-4.00032l.00058-.00165a47.75027,47.75027,0,0,0-1.39916-12.16412Z" transform="translate(-210.69988 -110.90289)" fill="#f2f2f2"/><path d="M558.00985,209.44391c0,19.33-9.67,39-29,39s-46-14-40-44c3.79091-18.95459,14.67-30,34-30A35,35,0,0,1,558.00985,209.44391Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M476.92366,485.61869a10.761,10.761,0,0,0-2.3028-16.33919l8.46162-37.293-18.599,6.998-5.18387,34.34116a10.81929,10.81929,0,0,0,17.62405,12.293Z" transform="translate(-210.69988 -110.90289)" fill="#ffb8b8"/><path d="M516.40214,353.43475l-12.98154,1.32149s3.395,19.23062-1.91429,23.56227-3.16917,4.31112-3.13836,7.52136-2.058,8.58117-6.30754,11.83247S478.973,458.82781,478.973,458.82781l-19.26143.18481a60.351,60.351,0,0,0-.14374-14.98111c-1.142-7.48029-6.91475-26.32267-4.80539-29.55344s.99895-9.17188.93734-15.59235,9.1232.67376,9.02053-10.027S476.39853,311.01146,475.236,301.391s10.52625-18.294,10.52625-18.294l10.7008-.10267Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M654.21388,263.12912a10.19589,10.19589,0,0,1-9.51952,12.40185l-10.414,34.7039L622.20449,295.789l11.74065-30.74071a10.25114,10.25114,0,0,1,20.26874-1.91919Z" transform="translate(-210.69988 -110.90289)" fill="#ffb8b8"/><path d="M544.26787,274.43249s25.17574-9.43944,38.82495,42.25434l18.119,18.76551,15.22249-27.50607-2.01276-6.52518,11.76457-26.671,20.17066,11.576-4.96524,18.31111.83884,9.052-4.82,5.63-7.89023,29.098-4.93589,9.50656S618.35961,370.096,607.4937,372.101a28.13713,28.13713,0,0,1-8.78316.24929c-5.7222-.747-11.99279-3.38417-18.43726-9.20485-23.90825-21.594-38.04816-38.25179-38.04816-38.25179Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M665.63986,285.42719l-44.81673-43.25237a1.32611,1.32611,0,0,1,1.736-2.00019l47.5198,37.02153Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M684.09783,290.22133a30.25233,30.25233,0,0,1-6.95163,1.553c-1.20623.11854-2.41627.16109-3.61588.17547-.42132.01467-.84847.01644-1.26631.02171-.99712.0147-1.99425.0294-3.00078.04069-.84847.01643-1.70638.02937-2.55137.03642-1.24406.01927-2.61007-.00666-3.50211-.8807a3.91887,3.91887,0,0,1-.88078-3.23723,13.19317,13.19317,0,0,1,1.07519-3.45138c1.07529-2.58762,2.16-5.17177,3.23529-7.75944l-.16757-1.44826a17.10915,17.10915,0,0,1,5.936.18228,6.10428,6.10428,0,0,1,3.80549,2.91247,5.14163,5.14163,0,0,1,.4034,1.01308c.42078,1.542.11778,3.25328.29891,4.86654a8.33948,8.33948,0,0,0,.18561.99643,6.77724,6.77724,0,0,0,3.598,4.50975A6.26024,6.26024,0,0,0,684.09783,290.22133Z" transform="translate(-210.69988 -110.90289)" fill="#ccc"/><path d="M687.24923,288.96747a7.18683,7.18683,0,0,1-3.1514,1.25386A33.74649,33.74649,0,0,0,687.24923,288.96747Z" transform="translate(-210.69988 -110.90289)" fill="#e6e6e6"/><path d="M684.09783,290.22133a30.25233,30.25233,0,0,1-6.95163,1.553c-1.20623.11854-2.41627.16109-3.61588.17547-.42132.01467-.84847.01644-1.26631.02171-.99712.0147-1.99425.0294-3.00078.04069a14.57537,14.57537,0,0,1,.22662-1.505c.94032-4.64231,3.67069-8.58986,6.7235-12.14085a5.14163,5.14163,0,0,1,.4034,1.01308c.42078,1.542.11778,3.25328.29891,4.86654a8.33948,8.33948,0,0,0,.18561.99643,6.77724,6.77724,0,0,0,3.598,4.50975A6.26024,6.26024,0,0,0,684.09783,290.22133Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><polygon points="299.8 250.089 298.019 258.576 296.505 289.88 357.341 281.643 362.012 245.395 355.555 234.785 299.8 250.089" fill="#ffb6b6"/><circle cx="530.23323" cy="219.14576" r="28.7922" transform="translate(-127.08931 468.38221) rotate(-61.33671)" fill="#ffb7b7"/><path d="M486.85588,321.98129l-7.91685-20.5701a38.08947,38.08947,0,0,1,29.49744-37.1258l.10864-.02548,5.69331-7.67112,23.13088,2.31389,4.23963,8.66475,16.76093,9.98024,19.06252,22.32108c6.00343,4.31078,9.56981,9.83807,10.60123,16.43031,2.19094,13.99461-7.60757,27.99725-8.77311,29.60273L576.25744,362.815,506.821,372.76569l-.53047.06706Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M500.10093,226.69384c.261-.04124.52192-.09623.78287-.13748,4.49118-.79653,8.98227-1.57932,13.4597-2.38977l.4121-10.14957,5.425,9.092c12.37471,4.10657,23.95279,1.78554,34.84416-3.33737A98.37172,98.37172,0,0,0,565.463,214.017c2.343-14.2967-3.56781-25.56366-18.7475-27.00187-.47143-.04467-.81026-.43943-1.22236-.64564a.01344.01344,0,0,1-.01367-.01375c-.70047-.32961-1.41468-.64548-2.1289-.93385a31.71561,31.71561,0,0,0-33.29217,6.45511C501.26841,200.26887,497.31289,214.12683,500.10093,226.69384Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><polygon points="342.209 604.549 358.727 612.139 395.863 552.037 371.484 540.835 342.209 604.549" fill="#ffb6b6"/><path d="M552.55646,705.42053l26.82779,10.4408-5.141,11.18734,16.94619,28.55313a7.69058,7.69058,0,0,1-9.8247,10.91379L550.27789,752.23l-.273-13.52834-7.1774,10.10457-11.721-5.38625Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><polygon points="270.001 641.839 288.18 641.839 296.828 571.721 269.998 571.722 270.001 641.839" fill="#ffb6b6"/><path d="M470.81537,608.863l-.00067-.18777,6.82831-11.76679-6.97249-15.31707-.49492-93.0908c-2.74621-67.27173,36.2815-99.60926,36.58864-99.92714l.84633-.87986,62.59008-1.53171s32.89676,96.57317,59.0307,183.59008c1.54457,5.14288,5.91308,10.2157,4.55466,15.3066-10.77616,40.38535-23.56663,86.09441-31.77616,87.38535l-26-14,4.83226-69.992-2.97087-7.617c-5.32208-.98045-19.15773-54.67478-19.15773-54.67478-2.319-2.75359-2.19964-10.2391-2.19964-10.2391l-18.1223-19.027-16.70326,87.70165,4.13038,26.1584-3.41817,8.99442-14.63783,74.254-.15559,1.19639-27.59725-2.75511Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M474.54527,743.77451l28.73671-1.71519v12.31206l27.3208,18.86872a7.69058,7.69058,0,0,1-4.37,14.01921H492.0206l-5.897-12.17851-2.30248,12.17851H470.9218Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M511.13248,185.64068v.02436a17.412,17.412,0,0,1-.57186,4.4656c-.0609.25555-.1339.52321-.21909.77876v.01218a17.6638,17.6638,0,0,1-10.89021,11.3405c-.37721.146-.76659.26766-1.156.3772a15.78263,15.78263,0,0,1-2.50658.511,15.99478,15.99478,0,0,1-2.29976.15819,17.51182,17.51182,0,0,1-1.80082-.08518,17.039,17.039,0,0,1-4.10058-.93695,5.15376,5.15376,0,0,1-.6084-.219,2.96833,2.96833,0,0,1-.29209-.12165,17.66094,17.66094,0,0,1-9.11375-23.91l.01218-.01218a17.30738,17.30738,0,0,1,3.4679-4.86716c3.188-3.17581,4.59276-11.13482,9.43556-11.13482a6.62084,6.62084,0,0,1,.69358.02428c3.24881.10955,9.25432,7.1195,11.80955,8.77432a17.22332,17.22332,0,0,1,4.84281,4.58733,17.44,17.44,0,0,1,2.84732,6.2786A17.66888,17.66888,0,0,1,511.13248,185.64068Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M489.57542,179.497c-2.74,3.19-7.03,4.43-10.9,6.09a45.85493,45.85493,0,0,0-26.64,33.5c-1.06995,5.97-.93,12.15-2.62,17.97-1.68,5.82-5.84,11.53-11.81,12.54-4.04.69-8.09-.87-11.88995-2.41q-3.135-1.26-6.27-2.53,3.27-8.205,6.53-16.41a83.161,83.161,0,0,1-12.11,14.17q-11.235-4.53-22.49-9.06006c18.46.07,15.31-17.85,19.44-35.82995,2.27-9.88,21.6-16.57,25.39-25.97a28.75635,28.75635,0,0,1,52.16-2.62C492.15543,170.447,492.26542,176.347,489.57542,179.497Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M567.98147,390.569a27.25,27.25,0,0,1,18.686,16.92586c.82109,2.36834,1.33391,5.17573-.07823,7.42774a3.78714,3.78714,0,0,1-4.65575,1.76519c-1.84409-.75933-3.1135-2.64452-4.05138-4.315a54.66,54.66,0,0,1-3.19422-7.32651c-1.44835-3.798-4.5381-10.13785-.12674-13.10709,3.71012-2.49725,8.62228-1.52716,12.797-1.69842,4.51132-.18506,9.52528-1.91269,11.12787-6.58846,1.55852-4.54718-2.09543-8.82424-6.03449-10.55348a15.68266,15.68266,0,0,0-14.64,1.39457,21.22821,21.22821,0,0,0-8.5,12.29537,1.50128,1.50128,0,0,0,2.89284.79752c1.23838-4.52211,3.91795-8.77689,8.09858-11.09434,3.914-2.16966,9.28245-2.30344,12.93444.50537,1.80628,1.38924,3.22476,3.701,2.29976,5.99668-.84891,2.10682-3.05961,3.35952-5.16407,3.86837-4.75975,1.15088-9.73821-.33847-14.48259,1.18168-4.52421,1.44961-7.13125,5.15041-6.47872,9.95206a36.09539,36.09539,0,0,0,2.38323,7.84769,67.79842,67.79842,0,0,0,3.24142,7.573c1.88356,3.55993,5.27985,7.41355,9.76188,6.36961,5.10827-1.1898,6.321-7.15389,5.22626-11.54026-2.49637-10.00227-11.45629-18.01381-21.24561-20.57a1.50129,1.50129,0,0,0-.79752,2.89284Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M612.87551,663.78668c-2.12055-2.50775-5.14594-4.038-8.08564-5.50238l-24.66424-12.28576-.70239,4.37744c-.93225-2.87909-5.50983-3.09082-7.3653-.70014s-1.26178,6.0044.548,8.42987,4.55774,3.93909,7.21917,5.37952q8.852,4.79077,17.7038,9.58154c2.74939,1.488,5.58759,3.00458,8.69525,3.34442s6.58881-.78045,8.13739-3.49615C615.98842,670.06213,614.99611,666.29449,612.87551,663.78668Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M516.92832,686.66346c-3.01725-1.2968-6.40759-1.31492-9.69182-1.31233q-13.77742.011-27.55476.022l1.32643,4.23036c-2.11988-2.15972-6.31019-.30491-6.90272,2.66276s1.55248,5.93588,4.255,7.29783,5.83713,1.48907,8.8617,1.58933q10.0597.33339,20.11929.66684c3.1245.10353,6.34124.193,9.27357-.89074,2.93231-1.08381,5.54675-3.64074,5.71956-6.76216C522.51608,690.88821,519.94566,687.96028,516.92832,686.66346Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M671.79761,493.19667c-40.4127,0-84.32829-8.05312-127.949-23.53851-53.94273-19.14967-103.40242-48.05394-143.032-83.58918l1.17348-2.35343c39.43876,35.36308,88.67933,64.13529,142.3988,83.20477,48.54556,17.23457,97.45513,25.21993,141.42331,23.11263l.07631,2.8291Q678.92354,493.19805,671.79761,493.19667Z" transform="translate(-210.69988 -110.90289)" fill="#f0f0f0"/><path d="M309.75329,345.71556c-32.38038-42.74419-19.53925-91.5294-38.50971-125.56309C198.537,89.713,288.06511,101.7306,389.28557,127.09681l.24133,2.814c-64.423,9.942-106.79137,43.09818-116.24156,90.96614-7.34453,37.20144,6.1329,80.82022,37.94975,122.82118Z" transform="translate(-210.69988 -110.90289)" fill="#f0f0f0"/><path d="M622.16932,497.44447c-40.4127,0-86.85714-44.8462-127.94893-23.53858-124.415,64.51367-107.28858-43.43994-143.032-83.58887l1.17347-2.35367c39.43876,35.36308,88.67933,64.1353,142.39881,83.20477,48.54556,17.23457,97.45513,25.21994,141.42331,23.11263l.07631,2.8291Q629.29523,497.44587,622.16932,497.44447Z" transform="translate(-210.69988 -110.90289)" fill="#f0f0f0"/><path d="M714.88105,479.63607l-.67645-2.68253c36.14365-16.38695,33.03825-65.19511,65.3754-76.34062,246.33374-84.90381,3.1753-94.47852-51.51855-139.38867-48.91016-40.16113-102.21394-86.85395-169.95685-110.902l.54034-2.73784c68.03885,24.15384,128.69039,63.744,170.77977,111.47782,42.30181,47.97305,60.83921,98.50073,52.197,142.27506C774.80664,435.8562,751.728,462.93109,714.88105,479.63607Z" transform="translate(-210.69988 -110.90289)" fill="#f0f0f0"/><path d="M382.998,498.62806c-43.50073-71.123-101.2959-134.65332-172.29809-172.52539L212.459,324.536C243.93919,388.12167,304.8083,449.029,383.8539,496.0396Z" transform="translate(-210.69988 -110.90289)" fill="#f0f0f0"/><path d="M662.19224,580.44391q-12.28592,0-24.99151-.73562l.0907-2.82926c62.47583,35.54541,118.21,27.09229,161.30029-29.34033l.78983,2.62718C762.46865,570.11064,715.42035,580.44391,662.19224,580.44391Z" transform="translate(-210.69988 -110.90289)" fill="#f0f0f0"/><ellipse cx="464.2968" cy="431.13881" rx="8.44737" ry="11.32747" fill="#fd6584"/><ellipse cx="378.42237" cy="344.44196" rx="8.44737" ry="11.32747" transform="translate(-229.61729 555.97488) rotate(-81.36748)" fill="#e6e6e6"/><ellipse cx="140.03342" cy="101.00448" rx="8.44737" ry="11.32747" fill="#e6e6e6"/><path d="M369.92905,288.11007c-11.01671-15.354-31.80972-23.28835-46.44253-17.72193-14.63278,5.56649-17.5642,22.5259-6.54746,37.8799s43.44579,39.50556,58.07862,33.9391S380.94579,303.46408,369.92905,288.11007Zm.06774,47.22512c-1.80122,2.64074-6.22035,2.76324-9.87039.27359s-5.14881-6.64865-3.3476-9.2894,6.22035-2.76325,9.8704-.2736S371.798,332.69444,369.99679,335.33519Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M357.49253,303.12884q-2.058,1.66347-4.11593,3.32694a16.21581,16.21581,0,0,1-5.84985,3.4579,15.91158,15.91158,0,0,1-8.97961-.53475,21.50032,21.50032,0,0,1-10.53836-7.48869l2.96562.66134a23.11741,23.11741,0,0,1-3.79172-6.09338c-.69541-2.05677-.30735-4.14408,1.56991-4.70745,2.14894-.64484,5.60846.80483,7.41274-.23722,3.12-1.802-2.00918-8.51264.834-10.58274,1.65656-1.20621,4.97123-.01286,7.73431,1.17051a43.56806,43.56806,0,0,1,9.69382,5.17625c4.90806,3.79035,7.6254,9.76469,5.62126,13.22265A10.1509,10.1509,0,0,1,357.49253,303.12884Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M356.48157,314.64221c-2.3994.32845-5.17529-1.516-7.49052-3.21747l-.58942-.77144a12.508,12.508,0,0,1-.598-4.58154,3.17994,3.17994,0,0,1,2.70264-2.90374c1.40736-.18532,3.28562.42162,4.21515-.39253,1.79738-1.57438-2.37076-5.914-.46493-7.38732,1.06953-.8268,3.34226.2333,4.32222,1.65453a7.47829,7.47829,0,0,1,1.05723,4.40947q.04769,3.40072.09532,6.80141a11.41928,11.41928,0,0,1-.40026,3.976A3.52221,3.52221,0,0,1,356.48157,314.64221Z" transform="translate(-210.69988 -110.90289)" fill="#2f2e41"/><path d="M357.08291,322.19671c-3.3256-.98224-8.39719-4.40948-12.71691-7.43592l-1.28592-1.11888a23.37734,23.37734,0,0,1-3.3953-5.04754c-.49843-1.36508.14321-2.16248,2.35148-1.50309,1.95466.58363,5.03345,2.24239,5.94375,1.91548,1.7602-.63221-6.7192-7.39545-4.745-7.86391,1.10792-.26288,5.01259,2.07962,7.22686,4.08266a17.54636,17.54636,0,0,1,3.97166,5.123q1.94121,3.52855,3.88231,7.05705a10.83657,10.83657,0,0,1,1.60325,3.87456C359.94579,322.28135,359.10092,322.79277,357.08291,322.19671Z" transform="translate(-210.69988 -110.90289)" fill="#ff6584"/><path d="M827.83513,138.64055c1.3048-16.51708,12.23534,2.97279,28.75243,4.27759a30,30,0,1,1-4.72511,59.81365C835.34537,201.427,826.53033,155.15764,827.83513,138.64055Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M930.66521,297.23114a30,30,0,0,1,32.26938-27.54428c16.51708,1.3048,27.56594-31.49549,26.26113-14.97841s-14.46915,76.09687-30.98623,74.79207A30,30,0,0,1,930.66521,297.23114Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M968.31586,333.383c-4.51555,2.17676-9.73249.89343-13.63107-1.98126-4.43438-3.26978-6.62031-8.47066-7.34275-13.80581a42.49189,42.49189,0,0,1,1.40565-17.07063c1.54119-5.3401,4.84459-10.88219,10.74622-11.98367,3.93343-.73413,8.13111.944,9.22143,5.02867a9.83561,9.83561,0,0,1-2.52616,9.31137c-3.53011,3.39174-9.196,3.13355-13.29619.97795-4.8223-2.53524-7.48341-7.60793-8.36157-12.82353-1.044-6.20085.41437-12.43164,2.4894-18.265,2.25532-6.34024,5.06371-12.49067,7.64345-18.70283,5.03091-12.11473,9.757-24.49026,11.76066-37.51806,3.0608-19.90135-1.70534-43.52029-19.15317-55.70318-9.41875-6.57661-21.23107-8.43964-32.4683-7.02416-11.85062,1.49275-22.74053,6.69269-32.384,13.57806a137.50588,137.50588,0,0,0-14.259,11.91555,9.82014,9.82014,0,0,1-10.69887,2.267c-9.27353-3.77426-6.31807-18.86444,3.241-19.98881,4.34349-.51089,8.81681,1.9124,11.7629,4.94034a23.28372,23.28372,0,0,1,6.01582,12.418c1.63517,9.79169-1.99531,20.14217-8.30139,27.6269-7.12418,8.45572-17.95059,13.216-28.48985,15.72341-11.99923,2.8547-24.3408,3.00031-36.60637,3.27157-12.55183.2776-25.25218.75475-37.36709,4.35575a92.34283,92.34283,0,0,0-27.22636,13.37931,96.45416,96.45416,0,0,0-35.62972,48.07938,88.35188,88.35188,0,0,0-3.36974,14.38441c-.28326,1.91065,2.70862,2.1388,2.99069.23625,3.154-21.27419,14.67269-40.838,30.86338-54.84308a91.476,91.476,0,0,1,27.31853-16.38869c12.038-4.56715,24.82483-5.72527,37.60111-6.09812,13.04852-.3808,26.21512-.17345,39.069-2.78586,11.36339-2.30949,22.87024-6.83962,31.14969-15.22921,7.30025-7.39735,11.81673-17.98028,11.33223-28.43941-.45082-9.73194-5.81075-20.138-15.74038-23.03-4.65913-1.357-9.66088-.4937-13.12161,3.06325a15.12983,15.12983,0,0,0-3.27426,15.49294,12.55132,12.55132,0,0,0,15.35454,6.96855,15.2755,15.2755,0,0,0,5.75445-3.762c9.376-8.77942,19.86816-16.83617,32.07675-21.20806,11.38723-4.07776,24.4864-4.91413,35.817-.21133,21.45071,8.90314,27.89612,34.74174,24.89809,55.78886-1.96205,13.77417-7.177,26.81632-12.5113,39.5755-2.72392,6.51539-5.75115,12.98879-7.83625,19.746-1.86685,6.04994-2.80431,12.54194-1.27323,18.775,1.33633,5.44023,4.49941,10.44021,9.55943,13.07554,4.59628,2.3938,10.42859,2.80686,14.93152-.03993,6.51034-4.11591,7.97481-15.48059.66255-19.622C962.26089,284.09,956.048,285.44,952.024,289.049c-4.51139,4.04614-6.35408,10.10529-7.28412,15.90385-1.7574,10.957-.37628,24.44964,10.44616,30.31152,4.45857,2.41494,9.77442,3.06706,14.43528.82026a1.50112,1.50112,0,0,0-1.30546-2.70161Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M700.88014,298.138c1.38367-17.51544-22.58261-64.34826-12.2722-77.02568q1.91805-2.37632,4.02451-4.59731a82.599,82.599,0,0,1,15.23146-12.75013c.94231-.62769,1.8923-1.22477,2.85064-1.80105a84.19368,84.19368,0,0,1,10.6044-5.35155c.66323-.26862,1.33637-.53638,2.00958-.80421a83.50589,83.50589,0,0,1,83.87381,141.79559c-.796.67942-1.61032,1.3373-2.44378,1.98369a83.16474,83.16474,0,0,1-27.75827,14.24826c-.01-.00079-.01077.00919-.02075.0084a83.83137,83.83137,0,0,1-46.27.20678l-.02-.00158c-.33339-.09656-.66685-.19313-.99953-.29961C692.66666,342.80989,697.71826,338.16331,700.88014,298.138Z" transform="translate(-210.69988 -110.90289)" fill="#f57200"/><path d="M721.279,196.99029a1.58063,1.58063,0,0,1,.03991-.378c.66323-.26862,1.33637-.53638,2.00958-.80421a1.49975,1.49975,0,0,1,.9412,1.4185,20.49564,20.49564,0,0,0,.51684,4.5047c2.8988,12.82813,16.03072,20.30549,27.75487,23.50876,14.34489,3.93187,29.7585,3.98592,43.14048,11.09187A37.88812,37.88812,0,0,1,809.50356,248.157a26.92232,26.92232,0,0,1,4.38677,18.75375c-2.0452,15.477-13.96183,26.77361-18.8686,41.14184-2.02241,5.91911-2.52012,12.21949-.21914,18.139,1.95,5.02917,5.80066,9.61669,11.336,10.65581a1.45264,1.45264,0,0,1,1.06375.75616c-.796.67942-1.61032,1.3373-2.44378,1.98369a14.57849,14.57849,0,0,1-2.90017-1.00152c-5.29758-2.525-8.72168-7.5603-10.4353-13.0423-1.9764-6.34533-1.22422-12.94661.989-19.12151,5.15987-14.39832,17.91212-26.24084,18.70647-42.13769.68726-13.77864-10.63812-23.30015-22.45371-27.88484-14.619-5.66887-31.00622-4.82678-45.40976-11.19087C731.92425,220.20069,721.33168,210.16536,721.279,196.99029Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M707.86391,203.76486c.94231-.62769,1.8923-1.22477,2.85064-1.80105a1.24758,1.24758,0,0,1,.25181,1.00292,50.76511,50.76511,0,0,0,9.649,36.20233,50.15773,50.15773,0,0,0,12.07392,11.72725c4.87335,3.3241,10.35225,5.33182,15.76163,7.58482,5.322,2.216,10.70381,4.81787,14.55871,9.22516,3.92836,4.49331,5.57686,10.29116,5.755,16.16339.4154,13.916-7.49479,26.05068-9.12644,39.59425-.728,6.04145.14235,12.03859,3.51557,17.21031,2.91755,4.46366,7.4858,7.71352,12.96929,7.50469,1.81172-.0776,1.69357,2.56131.09825,2.94688a1.6016,1.6016,0,0,1-.33451.0438c-6.37861.2384-11.8367-3.68359-15.21064-8.84533-3.92986-5.9981-4.901-13.00637-3.90557-20.01977,1.93464-13.56978,10.14788-26.11195,8.90983-40.153a21.07327,21.07327,0,0,0-7.85536-15.22591c-4.74377-3.69505-10.538-5.64741-16.03549-7.92746a55.5997,55.5997,0,0,1-15.15136-8.961,54.89326,54.89326,0,0,1-11.24462-13.337A53.17961,53.17961,0,0,1,707.86391,203.76486Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M688.60794,221.1123q1.91805-2.37632,4.02451-4.59731a56.746,56.746,0,0,0-.97392,23.37591,58.90221,58.90221,0,0,0,11.66322,26.83179,51.60282,51.60282,0,0,0,10.66972,10.202c4.60653,3.273,9.69712,6.13275,12.7479,11.06832,6.61678,10.71433.56817,23.53783-2.68437,34.23489-1.705,5.58308-2.86089,11.58069-.97282,17.26706,1.46732,4.40921,4.72042,8.6887,9.52673,9.5599,1.88908.33983,1.662,3.34128-.23626,2.99069q-.53358-.10231-1.06484-.23462c-5.21791-1.37515-8.98338-5.645-10.81215-10.68464-2.36941-6.577-1.25936-13.39077.73132-19.92427,3.27643-10.74532,10.01326-24.78843.72-34.5105-3.91917-4.10135-9.22751-6.61723-13.50953-10.31591a55.75879,55.75879,0,0,1-10.02011-11.31423A62.58592,62.58592,0,0,1,688.60794,221.1123Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M745.92364,435.24712v-1.92633h-32.2935V388.38256h-1.92142v44.93823H674.69817V398.61691q-.97058.76311-1.91647,1.57071v33.13317H648.33686c-.27169.63717-.53346,1.27928-.78043,1.92633H672.7817v37.76135H641.46126c.02964.64705.07411,1.28421.12843,1.92635h31.192v30.1251H649.41364c.28649.64705.58778,1.28422.9039,1.91647H672.7817v25.324h1.91647v-25.324h37.01055v25.324h1.92142v-25.324h32.2935v-1.91647h-32.2935a30.11908,30.11908,0,0,1,30.12506-30.1251h2.16844v-1.92635h-32.2935V435.24712Zm-34.21492,69.8128H674.69817v-30.1251h37.01055Zm0-32.05145H674.69817v-.75571a37.00806,37.00806,0,0,1,37.01055-37.00564Z" transform="translate(-210.69988 -110.90289)" fill="#3f3d56"/><path d="M654.56859,788.78978l-275.75.30733a1.19068,1.19068,0,1,1,0-2.38136l275.75-.30734a1.19069,1.19069,0,1,1,0,2.38137Z" transform="translate(-210.69988 -110.90289)" fill="#cacaca"/></svg>
</footer>
  <!----------------- script for drop donw menu---------------------->
  <script>
        function drop() {
            const dropmenu = document.querySelector(".menu");
            dropmenu.classList.toggle('active');
        }
    </script>

    <!----------- Javascript for Toggle Menu ------------>
<script src="../../assets/js/crosswords.js">
</script>  

</body>
</html>