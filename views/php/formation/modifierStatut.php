<?php
include '../../../controller/FormationC.php';
include '../../../controller/mail.php';
$id_formation = $_POST["id_formation"];
$formationC=new FormationC();
if(
    isset($_POST['radioo'])
){
    $formation = new Formation($_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo'],$_POST['radioo']);
    if($_POST['radioo']=='acceptée')
    {
    $formationC->modifierstatutA($id_formation, $formation);
    header('Location: dashFormation.php');
    }
    else if($_POST['radioo']=='refusée')
    {
    $formationC->modifierstatutR($id_formation, $formation);
    header('Location: dashFormation.php');
    }
    $rep=$_POST['radioo'];
    $email='guetat1youssef@gmail.com';
$email_content = array(
    'Subject' => 'IMPORTANT!! VERIFICATION FORMATION by EDUCAPLAY',
    'body' => "Bonjour Mr/Mme chaima,
    Votre formation a été verifier avec  success et elle était $rep
    Merci pour votre effores.
    cordialement,
    EDUCAPLAY"
);
sendemail($email,$email_content);
}
else
header('Location: dashFormation.php');
?>