<?php



include '../controller/lignecommandeC.php';
$commandeLC = new commandeLC();
$commandeLC->delete($_POST["idcourse"]);
header('Location:dashboard2.php');


?>