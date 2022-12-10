<?php

include '../controller/commandeC.php';

$error = "";

// create commande
$voiture = null;

if (
    isset($_POST["idcommande"])&&
    isset($_POST["addresse"]) &&
    isset($_POST["date"]) 

    
) {
    if (
        !empty($_POST['idcommande']) &&
        !empty($_POST['addresse']) &&
        !empty($_POST["date"]) 
        
    ) {     echo"blablabla";

        $voiture = new commande($_POST['idcommande'],$_POST['addresse'],$_POST['date']); 
        // create an instance of the controller
        $commandeC = new commandeC();
        $commandeC->addVoiture($voiture);
        header('Location:Panier.php');
    } else
        $error = "Missing information";
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>User Display</title>
 <script src="addclientfront.js"></script>

</head>

<body>
    
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    <div class="inscription-form">


    <form action="" method="POST" name='inscription-form' id='myForm'>
    <p>ID commande:</p>
    <input type="text" name="idcommande" id="idcommande" pattern="[1-9]+" placeholder="Nom" class="box" title="alphabets seulement" required> <br></br>     
    <p>Addresse:</p>   
    <input type="text" name="addresse" pattern="[A-Za-z]+" placeholder="Prenom" class="box" title="alphabets seulement"  required><br></br>
    <p>Date:</p>
    <input type="text" name="date" id="nom" pattern="[1-9]+" placeholder="Nom" class="box" title="alphabets seulement" required> <br></br> 
    <button type="submit">OK
    </button>


  </form> 
  </div>

</body>

</html>