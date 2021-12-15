<?php
require '../../../model/db.class.php';
require '../../../model/panier.class.php';
$DB= new DB();
$panier = new panier($DB);
?>