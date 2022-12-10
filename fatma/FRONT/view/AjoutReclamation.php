<?php
session_start();
if(isset($_SESSION["email"]))
{
/* echo '<h3>Connection reussite' .$_SESSION["email"].'<h3>'; */
/* echo $_SESSION["email"];
echo $_SESSION["mdp"];
echo $_SESSION["id"]; */
/* <div></div> */
include '../Controller/ReclamationC.php';
$reclamationC=new ReclamationC();






//A modifier 
$IdClient=$_SESSION["id"];
$Email=$_SESSION["email"];






if(
    isset($_POST['Details']) && !empty($_POST['Details'])
  ){



    //A modifier
    //$reclamations = new reclamations($_POST['Details']);
    $reclamations = new reclamations($_POST['Details'],$IdClient,$Email);
    $reclamationC->ajouterservices($reclamations);

    //mail debut
      //$email ="benlakhdharf553@gmail.com";
    $addresse = $Email;
    $to = $addresse;

    $subject = "Utilisation de mail() avec php depuis windows";
   // $message = "Nous avons bien recu votre reclamation. Nous allons vous repondre dans les brefs delais.";
    $message = "ouiii.";
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
            header('Location: index.php');
      }


      
      
?>
<?php
}

else
{
    echo "veuillez se connecter";
    header('Location:../../../client(farouk)/Code/login.php');
}
?>