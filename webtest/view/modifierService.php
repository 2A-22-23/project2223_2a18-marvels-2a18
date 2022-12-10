<?php
include '../Controller/ServiceC.php';
$id = $_POST["id"];
var_dump($id);
$serviceC = new ServiceC();
if(
    ($_POST['nameServ']) !== null && !empty($_POST['nameServ'] ) 
    && (($_POST['price'])) !== null && !empty(($_POST['price'])) &&(($_POST['pic'])) !== null && !empty(($_POST['pic']))
){
    // $services = new services($_POST['id'],$_POST['nameServ'],($_POST['price']) );
    $serviceC->modifierService($_POST['nameServ'], $_POST['price'],$_POST['pic']  , $id);
}else{ 
    echo 'Erreur';
    header('Location: dashboard.php');
}

?> 