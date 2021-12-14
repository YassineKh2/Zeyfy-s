<?php
	include '../config.php';
	include_once '../model/avis.php';

   try{
    $db = config::getConnexion();
$query = $db->prepare('UPDATE avis SET nbrN = 1');
$query->execute([
]);
} catch (Exception $e){
    $e->getMessage();
}
header("location:dashreclamation.php");
?>