<?php
include '../Controller/ServiceC.php';
$serviceC=new ServiceC();

if(
    isset($_POST['nameServ']) && !empty($_POST['nameServ']) &&isset($_POST['price']) && !empty($_POST['price'])&& isset($_POST['idDep']) && !empty($_POST['idDep'])
){
    $services = new services($_POST['nameServ'],$_POST['price'],$_POST['idDep']);
    $serviceC->ajouterservices($services);
}
else
{
echo 'Erreur';
header('Location: dashboardd.php');
} 

?> 