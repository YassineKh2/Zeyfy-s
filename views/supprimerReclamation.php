<?php
	include '../controller/avisC.php';
	include'../controller/mail.php';
	$avisC=new avisC();
	$avisC->repondreavis($_GET["idAvis"]);
	$email='ziedghanem30@gmail.com';
	$email_content = array(
	   'Subject' => 'IMPORTANT!! ETUDIER RECLAMATION by EDUCAPLAY',
	   'body' => "Bonjour Mr/Mme zied,
	   votre réclamation est traiter.
	   cordialement,
	   EDUCAPLAY"
   );
   sendemail($email,$email_content);
	header('Location:dashreclamation.php');

?>