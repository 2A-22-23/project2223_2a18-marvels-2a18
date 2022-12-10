<?php

include '../controller/lignecommandeC.php';

$error = "";

// create commande
$voiture = null;

if (
    isset($_POST["idcourse"])&&
    isset($_POST["quantity"]) &&
    isset($_POST["idarticle"]) 

    
) {
    if (
        !empty($_POST['idcourse']) &&
        !empty($_POST['quantity']) &&
        !empty($_POST["idarticle"]) 
        
    ) {     echo"blablabla";

        $voiture = new lignecommande($_POST['idcourse'],$_POST['quantity'],$_POST['idarticle']); 
        // create an instance of the controller
        $commandeLC = new commandeLC();
        $commandeLC->addVoiture($voiture);
        header('Location:ListeLigne.php');
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
    <a href="ListeLigne.php" class="panier">Back to Cart </a>
    <hr><br><br><br><br><br><br><br><br><br><br>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="6" align="center">
        <tr>
                <td>
                    <label for="idcourse" class="txt"> id-course:
                    </label>
                </td>
               <td><input type="number" name="idcourse" id="idcourse" maxlength="30" required></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="quantity" class="txt"> quantity:
                    </label>
                </td>
                <td><input type="text"  name="quantity" id="quantity" maxlength="30" required></td>
            </tr>
            <tr>
                <td>
                    <label for="idarticle" class="txt">idarticle:
                    </label>
                </td>
                <td><input type="text"  name="idarticle" id="idarticle" maxlength="30" required  ></td>
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
