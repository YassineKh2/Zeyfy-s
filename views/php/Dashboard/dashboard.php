<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dashboard.css">
    
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/indexa.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../../users/utilisateur.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Consumers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="..\User\singout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                
            </ul>
        </div>

<!---- main -->
            <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                        <!---- search -->
                        <div class="search">
                            <label>
                                <input type="text" placeholder="Chercher ici">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>
                        <!---- mainImg -->
                        <div class="user">
                            <img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\034bd391dfa71378b23129858f3d71ba.jpg">
                        </div>
                    </div>
                <!---- Cards -->
                    <div class="cardbox">
                        <div class="card">
                            <div>
                            <div class="numbers">2.236</div>
                            <div class="cardname">Vue Quotidienne</div>
                            </div>
                         
                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>
                        <div class="card">
                            <div>
                            <div class="numbers">30</div>
                            <div class="cardname">Cours Ajouter</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>
                    </div>
                        <div class="card">
                            <div>
                            <div class="numbers">350</div>
                            <div class="cardname">Avis</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </div>
                        <div class="card">
                            <div>
                            <a href='charts.html'>
                            <div class="numbers">$1200</div>
                            <div class="cardname">Revenue</div>
                            </a>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                    </div>
                    </div>
                  
                    <div class="details">
                             <!---- Order list -->
                            <div class="recentorders">
                                <div class="cardheader">
                                    <h2>Demande recente</h2>
                                    <a href="#" class="btn">Tout voir</a>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Nom</td>
                                        <td>Prix</td>
                                        <td>Payment</td>
                                        <td>Statue</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jeu physique</td>
                                        <td>5000$</td>
                                        <td>Paye</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cours info</td>
                                        <td>300$</td>
                                        <td>Pas Encore</td>
                                        <td><span class="status pending">En Attente</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cours Math</td>
                                        <td>250$</td>
                                        <td>Paye</td>
                                        <td><span class="status return">Refuser</span></td>
                                    </tr>
                                    <tr>
                                        <td>Formation c++</td>
                                        <td>700$</td>   
                                        <td>Paye</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jeu Math</td>
                                        <td>5000$</td>
                                        <td>Paye</td>
                                        <td><span class="status inprogress">En cours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Formation loi de newton</td>
                                        <td>400$</td>
                                        <td>Pas Encore</td>
                                        <td><span class="status pending">En Attente</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jeu pyhton</td>
                                        <td>6000$</td>
                                        <td>Paye</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cours Matrice</td>
                                        <td>550$</td>
                                        <td>Paye</td>
                                        <td><span class="status pending">En Attente</span></td>
                                    </tr>
                                    <tr>
                                        <td>Formation Web</td>
                                        <td>1500$</td>
                                        <td>Pas Encore</td>
                                        <td><span class="status inprogress">En cours</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jeu C#</td>
                                        <td>3000$</td>
                                        <td>Paye</td>
                                        <td><span class="status return">Refuser</span></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>  

                                     <!---- New Customers -->
                            <div class="recentcustomers">
                                <div class="cardheader">
                                    <h2>Client Recent</h2>
                                </div>
                                <table>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\1223156.jpg"></div></td>
                                        <td><h4>Monji<br><span>Prof Math</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\3x_4.png"></div></td>
                                        <td><h4>Mouez<br><span>Prof Info</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\1296_FeelsStrongMen.png"></div></td>
                                        <td><h4>Abdalh<br><span>Prof Physique</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\9k.png"></div></td>
                                        <td><h4>Semeh<br><span>Ing Info</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\derk-elshof-pepe.jpg"></div></td>
                                        <td><h4>Ali<br><span>Prof Math</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\johnxinaheader.jpg"></div></td>
                                        <td><h4>Fawzia<br><span>Ing Physique</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\9dd07c36d1c95692215f11eea55b3c38.jpg"></div></td>
                                        <td><h4>Tayssir<br><span>Prof Math</span></h4></td>
                                    </tr>
                                    <tr>
                                        <td width='60px'><div class="imgBx"><img src="C:\Users\yassi\Desktop\Literally kol chay\Pics\fight.png"></div></td>
                                        <td><h4>Nourane<br><span>Prof Physique</span></h4></td>
                                    </tr>
                                    <tr>
                                    
                                        
                                </table>
                            </div>

                    </div>
            </div>
    </div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    //Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector('.navigation');
    let main= document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle("active");
        main.classList.toggle("active")
    }

    //adding hoverd class in selected div ! 
    let list =document.querySelectorAll(".navigation li");
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered')
    }
    list.forEach((item)=> 
    item.addEventListener('mouseover',activeLink));
</script>

</body>
</html>