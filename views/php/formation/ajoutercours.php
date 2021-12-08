<?php
include 'C:\xampp\htdocs\educaplay\controller\coursC.php';
$coursC=new CoursC();
//date_default_timezone_set('Europe/Paris');
$date1 = date('Y-m-d');
if(
    isset($_POST['cours1']) && !empty($_POST['cours1'])
  
 
){


    /*----------------------cours1-------------------------------------------*/
    $course_image = $_FILES["file1"];
    $img_name = $_FILES['file1']['name'];
    $img_size = $_FILES['file1']['size'];
    $tmp_name = $_FILES['file1']['tmp_name'];
    $error = $_FILES['file1']['error'];
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
    $filename= 'uploads/'.$new_img_name;
    $file = fopen($filename,"r");
    if($file==false){
        echo "ERROR";
    
    }
    $filesize=filesize($filename);
    $filetext=fread($file,$filesize);


    $course_image1 = $_FILES["image1"];
    $img_name1 = $_FILES['image1']['name'];
    $img_size1 = $_FILES['image1']['size'];
    $tmp_name1 = $_FILES['image1']['tmp_name'];
    $error = $_FILES['image1']['error'];
    if ($error === 0) {
        $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
        $img_ex_lc1 = strtolower($img_ex1);

        $allowed_exs1 = array("jpg", "jpeg", "png", "gif"); 

        if (in_array($img_ex_lc1, $allowed_exs1)) 
        {
            $new_img_name1 = uniqid("IMG-", true).'.'.$img_ex_lc1;
            $img_upload_path1 = 'uploads/'.$new_img_name1;
            move_uploaded_file($tmp_name1, $img_upload_path1);

            
        }
    }
    

    $cours = new cours($_POST['cours1'],$date1,'',$new_img_name,$filetext,$new_img_name1);
    $coursC->ajoutercours($cours);


    /*----------------------cours2-------------------------------------------*/
    $course_image2 = $_FILES["file2"];
    $img_name2 = $_FILES['file2']['name'];
    $img_size2 = $_FILES['file2']['size'];
    $tmp_name2 = $_FILES['file2']['tmp_name'];
    $error = $_FILES['file2']['error'];
    if ($error === 0) {
        $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
        $img_ex_lc2 = strtolower($img_ex2);

        $allowed_exs2 = array("jpg", "jpeg", "png", "gif","txt"); 

        if (in_array($img_ex_lc2, $allowed_exs2)) 
        {
            $new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
            $img_upload_path2 = 'uploads/'.$new_img_name2;
            move_uploaded_file($tmp_name2, $img_upload_path2);

            
        }
    }
    $filename2= 'uploads/'.$new_img_name2;
    $file2 = fopen($filename2,"r");
    if($file2==false){
        echo "ERROR";
    
    }
    $filesize2=filesize($filename2);
    $filetext2=fread($file2,$filesize2);


    $course_image11 = $_FILES["image2"];
    $img_name11 = $_FILES['image2']['name'];
    $img_size11 = $_FILES['image2']['size'];
    $tmp_name11 = $_FILES['image2']['tmp_name'];
    $error = $_FILES['image2']['error'];
    if ($error === 0) {
        $img_ex11 = pathinfo($img_name11, PATHINFO_EXTENSION);
        $img_ex_lc11 = strtolower($img_ex11);

        $allowed_exs11 = array("jpg", "jpeg", "png", "gif"); 

        if (in_array($img_ex_lc11, $allowed_exs11)) 
        {
            $new_img_name11 = uniqid("IMG-", true).'.'.$img_ex_lc11;
            $img_upload_path11 = 'uploads/'.$new_img_name11;
            move_uploaded_file($tmp_name11, $img_upload_path11);

            
        }
    }
    

    $cours = new cours($_POST['cours2'],$date1,'',$new_img_name2,$filetext2,$new_img_name11);
    $coursC->ajoutercours($cours);

    /*----------------------cours3-------------------------------------------*/
    $course_image3 = $_FILES["file3"];
    $img_name3 = $_FILES['file3']['name'];
    $img_size3 = $_FILES['file3']['size'];
    $tmp_name3 = $_FILES['file3']['tmp_name'];
    $error = $_FILES['file3']['error'];
    if ($error === 0) {
        $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
        $img_ex_lc3 = strtolower($img_ex3);

        $allowed_exs3 = array("jpg", "jpeg", "png", "gif","txt"); 

        if (in_array($img_ex_lc3, $allowed_exs3)) 
        {
            $new_img_name3 = uniqid("IMG-", true).'.'.$img_ex_lc3;
            $img_upload_path3 = 'uploads/'.$new_img_name3;
            move_uploaded_file($tmp_name3, $img_upload_path3);

            
        }
    }
    $filename3= 'uploads/'.$new_img_name3;
    $file3 = fopen($filename3,"r");
    if($file3==false){
        echo "ERROR";
    
    }
    $filesize3filesize($filename3);
    $filetext3=fread($file3,$filesize3);


    $course_image111 = $_FILES["image3"];
    $img_name111 = $_FILES['image3']['name'];
    $img_size111 = $_FILES['image3']['size'];
    $tmp_name111 = $_FILES['image3']['tmp_name'];
    $error = $_FILES['image3']['error'];
    if ($error === 0) {
        $img_ex111 = pathinfo($img_name111, PATHINFO_EXTENSION);
        $img_ex_lc111 = strtolower($img_ex111);

        $allowed_exs111 = array("jpg", "jpeg", "png", "gif"); 

        if (in_array($img_ex_lc111, $allowed_exs111)) 
        {
            $new_img_name111 = uniqid("IMG-", true).'.'.$img_ex_lc111;
            $img_upload_path111 = 'uploads/'.$new_img_name1;
            move_uploaded_file($tmp_name111, $img_upload_path111);

            
        }
    }
    

    $cours = new cours($_POST['cours3'],$date1,'',$new_img_name3,$filetext3,$new_img_name111);
    $coursC->ajoutercours($cours);


    /*----------------------cours1-------------------------------------------*/
    $course_image = $_FILES["file1"];
    $img_name = $_FILES['file1']['name'];
    $img_size = $_FILES['file1']['size'];
    $tmp_name = $_FILES['file1']['tmp_name'];
    $error = $_FILES['file1']['error'];
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
    $filename= 'uploads/'.$new_img_name;
    $file = fopen($filename,"r");
    if($file==false){
        echo "ERROR";
    
    }
    $filesize=filesize($filename);
    $filetext=fread($file,$filesize);


    $course_image1 = $_FILES["image1"];
    $img_name1 = $_FILES['image1']['name'];
    $img_size1 = $_FILES['image1']['size'];
    $tmp_name1 = $_FILES['image1']['tmp_name'];
    $error = $_FILES['image1']['error'];
    if ($error === 0) {
        $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
        $img_ex_lc1 = strtolower($img_ex1);

        $allowed_exs1 = array("jpg", "jpeg", "png", "gif"); 

        if (in_array($img_ex_lc1, $allowed_exs1)) 
        {
            $new_img_name1 = uniqid("IMG-", true).'.'.$img_ex_lc1;
            $img_upload_path1 = 'uploads/'.$new_img_name1;
            move_uploaded_file($tmp_name1, $img_upload_path1);

            
        }
    }
    

    $cours = new cours($_POST['cours4'],$date1,'',$new_img_name,$filetext,$new_img_name1);
    $coursC->ajoutercours($cours);
 
}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
//header('Location: AfficherListeAdherent.php');
}