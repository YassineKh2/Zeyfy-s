<?php
include '../../../controller/mail.php';
$email='guetat1youssef@gmail.com';
$email_content = array(
    'Subject' => 'IMPORTANT!! VERIFICATION FORMATION by EDUCAPLAY',
    'body' => "Bonjour Mr/Mme youusef,
    votre paiement a été effectué avec succès.
    cordialement,
    EDUCAPLAY"
);
sendemail($email,$email_content);
header('Location:panier.php');
?>