<?php

include '../controller/lignecommandeC.php';

$error = "";

// create voiture
$commande = null;

// create an instance of the controller
$commandeLC = new commandeLC();
//var_dump($_POST);

if (
    isset($_POST["idcourse"]) &&
    isset($_POST["quantity"]) &&
    isset($_POST["idarticle"]) 
    
) {
    if (
        !empty($_POST["idcourse"]) &&
        !empty($_POST['quantity']) &&
        !empty($_POST["idarticle"]) 
        
    ) {
        echo "test";
        $commande = new lignecommande ( 
            $_POST['idcourse'],
            $_POST['quantity'],
            $_POST['idarticle']
         
        );
        //var_dump($voiture);
       $commandeLC->updatevoiture($commande, $_POST["idcourse"]);
        
        
        header('Location:ListeLigne.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modify.css">
    <title>User Display</title>
</head>

<body>
    <button><a href="ListeLigne.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idcourse']))
     {
        $commande = $commandeLC->showvoiture($_POST['idcourse']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idcourse">idcourse:
                        </label>
                    </td>
                    <td><input type="text" name="idcourse" id="idcourse" value="<?php echo $commande['idcourse']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td>
                        <label for="quantity">quantity:
                        </label>
                    </td>
                    <td><input type="text" name="quantity" id="quantity" value="<?php echo $commande['quantity']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idarticle">idarticle:
                        </label>
                    </td>
                    <td><input type="text" name="idarticle" id="idarticle" value="<?php echo $commande['idarticle']; ?>" maxlength="30"></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>