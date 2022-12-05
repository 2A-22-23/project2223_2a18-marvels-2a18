<?php
include '../Controller/ReponseC.php';
$IdRep = $_POST["IdRep"];
var_dump($IdRep);
$reponseC = new ReponseC();
if(
    ($_POST['id']) !== null && !empty($_POST['id'])
    && (($_POST['Reponse'])) !== null && !empty(($_POST['Reponse']))
){
    // $services = new services($_POST['id'],$_POST['Sujet'],($_POST['Details']) );
    $reponseC->modifierService($_POST['id'], $_POST['Reponse'] , $IdRep);
}else{ 
    echo 'Erreur';
    header('Location: dashboard.php');
}
?>