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

    <form onsubmit="return prenomValidation()"  action="" method="POST" name='inscription-form' id='myForm'>
    <!-- <label>Nom:</label> -->
    <input type="text" name="nom" id="nom" placeholder="Nom" class="box" title="alphabets seulement" > <br></br>     
    <p style="color: red" id="nomEr1"></p>
    <br><br>

   <!--  <label>Prenom:</label>    -->
    <input type="text" name="prenom" id="prenom" pattern="[A-Za-z]+" placeholder="Prenom" class="box" title="alphabets seulement"  ><br></br>
    <p style="color: red" id="nomEr2"></p>
    <br><br>
    <!--  <label>Email:</label> -->
    <input type="email" name="email"   placeholder="Email" class="box" title="*****@***.**"  required><br></br>
    <!-- <label>Mot de passe:</label> -->
    <br><br>
    <input type="password" name="mdp" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Mot de passe" class="box" title ="numero/majuscule/miniscule et au moins 8 caracteres"  required><br></br>
   <!--  <label>Telephone:</label> --><br><br>
    <input type="tel" name="telephone" pattern="[0-9]+"  placeholder="Telephone" class="box" title="0 a 9"  required><br></br>
    <button type="submit">S'inscrire
        
    </button>
    <br><br>

  </form> 
  </div>
 
  

</body>
</html>