<?php
include '../Controller/ReponseC.php';
$reponseC=new ReponseC();



/*ici */
//$conn = new PDO('mysql:host=localhost;dbname=reclamations;charset=utf8', 'root', '');
//$cat="SELECT * FROM reclamations";	
//$listcat=$conn->query($cat);




if(
    isset($_POST['id']) && !empty($_POST['id'])
    &&isset($_POST['Reponse']) && !empty($_POST['Reponse'])
){
    $reponses = new reponses($_POST['id'],$_POST['Reponse']);
    $reponseC->ajouterservices($reponses);
}
else
{
echo 'Erreur';
header('Location: dashboard.php');
}
?>