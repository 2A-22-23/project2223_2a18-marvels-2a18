<?php
include '../controller/categorieC.php';

$categorieC = new categorieC();
$categorieC->bookcategorie($_GET["idcategorie"], 1);
header('Location:upcomingcategorie.php');
