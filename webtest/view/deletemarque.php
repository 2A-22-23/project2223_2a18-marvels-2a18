<?php
include '../Controller/marquec.php';
$marquec = new marquec();
$marquec->deletemarque($_GET["idmarque"]);
header('Location:dashboardc3.php');
