<?php
include '../Controller/ReponseC.php';

//include '../config.php';

$reponseC=new ReponseC();

//test recuperation adreese mail form table reclmation
//$test = $reclamations['id']['Email'];
//fin test

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
    //////////////////////////////
    //////////////////////////////
    

 //mail debut
    $reponse=$_POST['Reponse'];
    $id=$_POST['id'];

$con = new PDO('mysql:host=localhost;dbname=marvels auto;charset=utf8', 'root', '');
$mail="SELECT Email FROM reclamations where id=$id";	
$adresse=$con->query($mail);

$row=$adresse->fetch();

   

   $to = $row[0];
  
   $subject = "Utilisation de mail() avec php depuis windows";
 
   $message = $reponse;
  


   $headers = "Content-Type: text/plain; charset=utf-8\r\n";
   $headers .= "From:benlakhdharf553@gmail.com\r\n";

   
 if(mail($to, $subject, $message, $headers))
   echo'envoyer';
   else
     echo'erreur envoi';
     //mailfin
}
else
{
echo 'Erreur';
header('Location: dashboard.php');
}

 
?>