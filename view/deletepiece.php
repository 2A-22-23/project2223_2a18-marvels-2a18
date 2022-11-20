<?php
include '../controller/piecesc.php';
$piecec = new piecec();
$piecec->deletepiece($_GET["idpiece"]);
header('Location:Listpieces.php');
