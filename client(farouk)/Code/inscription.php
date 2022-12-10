<?php

include '../Controller/ClientC.php';

$error = "";


$client = null;


$clientC = new ClientC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["mdp"]) &&
    isset($_POST["telephone"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["mdp"]) &&
        !empty($_POST["telephone"])
    ) {
        $client = new Client(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['telephone']
            
        );
        $clientC->addClient($client);
        header('Location:../code/index.php');
    } else
        $error = "Missing information";
}


?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="./addclientfront.js"></script>
  </head>
  <body>
     <div id="error">
        <?php echo $error; ?>
    </div>
    <div class="inscription-form">
<style>

body{
  width: 100%;
  height: 100vh;
  background: linear-gradient(
    to right,
    #DD5353 0%,
    #DD5353 50%,
    #DD5353 50%,
   black 100%
  );
}
</style>

    <form  action="" method="POST" name='myForm' onsubmit = "return(validate());">
    
    <input type="text" name="nom" id="nom" placeholder="Nom" > <br></br>     
   <!--  <p style="color: red" id="nomEr1"></p> -->
    <br><br>

   
    <input type="text" name="prenom" id="prenom" placeholder="Prenom"><br></br>
    <!-- <p style="color: red" id="nomEr2"></p> -->
    <br><br>
    
    <input type="email" name="email" placeholder="Email"><br></br>
  
    <br><br>
    <input type="password" name="mdp" placeholder="Mot de passe" ><br></br>
  <br><br>
    <input type="tel" name="telephone" placeholder="Numero de telephone"><br></br>
    <button type="submit">S'inscrire
        
    </button>
    <br><br>
    <label for=""><a href="login.php">Vous avez deja un compte "Connectez vous"</a></label>
  </form> 
 
  </div>
 
<!-- <script type = "text/javascript">
      
         var letters = /^[A-Za-z]+$/;
         var pass =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
         // Form validation code will come here.
         function validate() {
         
            if( document.myForm.nom.value == "" ) {
               alert( "Veuillez entrer votre nom!" );
             
               document.myForm.nom.focus() ;
               return false;
            }
            if( !document.myForm.nom.value.match(letters) ) {
               alert( "le nom doit ne contenir que des lettres!" );
           
               document.myForm.nom.focus() ;
               return false;
            }
            if( document.myForm.email.value == "" ) {
            alert( "Veuillez entrer votre email!" );
            document.myForm.EMail.focus() ;
            return false;
         }

            if( document.myForm.prenom.value == "" ) {
               alert( "veuillez entrer votre prenom!" );
               document.myForm.prenom.focus() ;
               return false;}
               
               if( !document.myForm.prenom.value.match(letters) ) {
               alert( "le prenom doit ne contenir que des lettres!" );
           
               document.myForm.prenom.focus() ;
               return false;
            }
            if( document.myForm.mdp.value == "" ) {
               alert( "veuillez entrer votre mdp!" );
               document.myForm.mdp.focus() ;
               return false;}
               if( !document.myForm.mdp.value.match(pass) ) {
               alert( "mot de pass doit contenir numero/majuscule/miniscule et au moins 8 caracteres" );
           
               document.myForm.mdp.focus() ;
               return false;
            }
               if( document.myForm.telephone.value == "" ) {
               alert( "veuillez entrer votre telephone!" );
               document.myForm.telephone.focus() ;
               return false;}  

            
           
            
         }
      
  </script>
  -->
  

</body>
</html>