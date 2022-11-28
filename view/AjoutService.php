<?php
include '../Controller/ServiceC.php';
$serviceC=new ServiceC();

if(
    isset($_POST['nameServ']) && !empty($_POST['nameServ'])
    &&isset($_POST['price']) && !empty($_POST['price'])
){
    $services = new services($_POST['nameServ'],$_POST['price'],$_post['nameDep']);
    $serviceC->ajouterservices($services);
}
else
{
echo 'Erreur';
header('Location: dashboard.php');
}
?>