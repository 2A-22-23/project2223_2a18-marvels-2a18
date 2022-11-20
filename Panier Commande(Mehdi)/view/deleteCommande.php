<?php



include '../controller/commandeC.php';
$commandeC = new commandeC();
$commandeC->delete($_POST["idcommande"]);
header('Location:Panier.php');


?>