<?php



include '../controller/roleC.php';
$roleC = new roleC();
$roleC->delete($_POST["idrole"]);
header('Location:dashboard2.php');


?>