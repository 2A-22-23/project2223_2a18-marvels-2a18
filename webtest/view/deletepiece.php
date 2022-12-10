<?php
include '../Controller/piecesc.php';
$piecec = new piecec();
$piecec->deletepiece($_GET["idpiece"]);
header('Location:dashboardc2.php');
