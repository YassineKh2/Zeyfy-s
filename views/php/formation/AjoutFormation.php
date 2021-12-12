<?php
include 'C:\xampp\htdocs\educaplay\controller\FormationC.php';
$formationC=new FormationC();
//date_default_timezone_set('Europe/Paris');
$date1 = date('Y-m-d');
if(
    isset($_POST['format']) && !empty($_POST['format'])
    &&isset($_POST['formation']) && !empty($_POST['formation'])
    &&isset($_POST['prix']) && !empty($_POST['prix'])
    &&isset($_POST['description']) && !empty($_POST['description'])
    &&isset($_FILES['file']) && !empty($_FILES['file'])
){

    $course_image = $_FILES["file"];

    $img_name = $_FILES['file']['name'];
    $img_size = $_FILES['file']['size'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    if ($error === 0) {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png", "gif","txt"); 

        if (in_array($img_ex_lc, $allowed_exs)) 
        {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            
        }
    }
    $formation = new Formation($date1,$_POST['format'],$_POST['formation'],$_POST['description'],$_POST['prix'],$_POST['formation'],$new_img_name);
    $formationC->ajouterformation($formation);
    header('Location: FormAjoutCours.php');
}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
//header('Location: AfficherListeAdherent.php');
}
