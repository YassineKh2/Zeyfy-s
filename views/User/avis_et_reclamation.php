<?php
if($_SESSION['auth']==false)
header('Location:..\Login\login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="avre.css">
    
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../Mainpage/index.php">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">Educaplay</span>
                    </a>
                </li>
                <li>
                    <a href="profiedash.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                        <span class="title">Mes Formation</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Avis et Reclamation</span>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Paramétres</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Aide</span>
                    </a>
                </li>
                <li>
                    <a href="singout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Deconnection</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
           
        </div>
<div class="ar">
        <div class="Avis">
            <h4>Vos Avis</h4>
            <br> <br> 
            <table>
                <tr>
                    <td>Avis</td>

                </tr>
                <tr>
                    <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eos. Accusamus eligendi 
                        nihil facilis minima. Ob</p></td>
                        <td><a href=""><ion-icon name="create-outline"></ion-icon></a></td>
                        <td><a href=""><ion-icon name="trash-outline"></ion-icon></a></td>
                </tr>
                <tr>
                    <td><p>meeeeeeeeeeeeeeh</p></td>
                    <td><a href=""><ion-icon name="create-outline"></ion-icon></a></td>
                    <td><a href=""><ion-icon name="trash-outline"></ion-icon></a></td>
                </tr>
                <tr>
                    <td><p>idkk mann</p></td>
                    <td><a href=""><ion-icon name="create-outline"></ion-icon></a></td>
                    <td><a href=""><ion-icon name="trash-outline"></ion-icon></a></td>
                </tr>
        </table>
        </div>
        <br><br>
        <div class="reclamation">
                    <h4>Vos Reclamation</h4>
                <table>
                    <tr>
                        <td>Reclamation</td>
                        <td>Dans</td>
                        <td>Statue</td>
                    </tr>
                    <tr>
                        <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eos. Accusamus eligendi 
                            nihil facilis minima. Ob</p></td>
                        <td><p>Info</p></td>
                        <td><span class="status delivered">Delivered</span></td>
                        <td><a href=""><ion-icon name="create-outline"></ion-icon></a></td>
                        <td><a href=""><ion-icon name="trash-outline"></ion-icon></a></td>
                    </tr>
                    <tr>
                        <td><p>Cours info</p></td>
                        <td><p>Math</p></td>
                        <td><span class="status pending">En Cours</span></td>
                        <td><a href=""><ion-icon name="create-outline"></ion-icon></a></td>
                        <td><a href=""><ion-icon name="trash-outline"></ion-icon></a></td>
                    </tr>
                </table>
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