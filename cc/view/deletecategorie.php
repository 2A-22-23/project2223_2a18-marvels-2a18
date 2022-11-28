<?php



include '../controller/categorieC.php';
$categorieC = new categorieC();
$categorieC->deletecategorie($_POST["idcategorie"]);
header('Location:dashboard2.php');

?>


