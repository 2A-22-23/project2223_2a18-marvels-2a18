<?php

include '../controller/commandeC.php';

$error = "";

// create commande
$voiture = null;

if (
    isset($_POST["idcommande"])&&
    isset($_POST["nom_voiture"]) &&
    isset($_POST["prix"]) 

    
) {
    if (
        !empty($_POST['idcommande']) &&
        !empty($_POST['nom_voiture']) &&
        !empty($_POST["prix"]) 
        
    ) {     echo"blablabla";

        $voiture = new commande($_POST['idcommande'],$_POST['nom_voiture'],$_POST['prix']); 
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
    <title>User Display</title>
    <link rel="stylesheet" href="commande.css">
</head>

<body>
    <a href="Panier.php" class="panier">Back to Cart </a>
    <hr><br><br><br><br><br><br><br><br><br><br>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="6" align="center">
        <tr>
                <td>
                    <label for="idcommande" class="txt"> id-commande:
                    </label>
                </td>
               <td><input type="number" name="idcommande" id="idcommande" maxlength="30" required></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="nom_voiture" class="txt"> nom_voiture:
                    </label>
                </td>
                <td><input type="text" pattern="[A-Za-z]{4}" name="nom_voiture" id="nom_voiture" maxlength="30" required></td>
            </tr>
            <tr>
                <td>
                    <label for="prix" class="txt">prix:
                    </label>
                </td>
                <td><input type="text" pattern="[0-9]{6}" name="prix" id="prix" maxlength="30" required  ></td>
            </tr>
                
           
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
