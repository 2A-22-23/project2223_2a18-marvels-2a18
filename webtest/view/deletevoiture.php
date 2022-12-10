<?php



include '../controller/voitureC.php';
$voitureC = new voitureC();
$voitureC->deletevoiture($_POST["idvoiture"]);
header('Location:dashboardv2.php');

?>
