<?php
	include 'C:\xampp\htdocs\educaplay\config.php';
	include_once 'C:\xampp\htdocs\educaplay\model\avis.php';

   try{
    $db = config::getConnexion();
$query = $db->prepare('UPDATE avis SET nbrN = 1');
$query->execute([
]);
} catch (Exception $e){
    $e->getMessage();
}
header("location:../Dashboard/dashreclamation.php");
?>