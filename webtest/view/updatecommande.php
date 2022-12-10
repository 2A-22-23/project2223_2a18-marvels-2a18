<?php

include '../controller/commandeC.php';

$error = "";

// create voiture
$commande = null;

// create an instance of the controller
$commandeC = new commandeC();
//var_dump($_POST);
//var_dump($_POST["addresse"]);
if (
    isset($_POST["idcommande"]) &&
    isset($_POST["addresse"]) &&
    isset($_POST["date"]) 
    
) {
    if (
        !empty($_POST["idcommande"]) &&
        !empty($_POST['addresse']) &&
        !empty($_POST["date"]) 
        
    ) {
        echo "test";
        $commande = new commande( 
            $_POST['idcommande'],
            $_POST['addresse'],
            $_POST['date']
         
        );
        //var_dump($voiture);
       $commandeC->updatevoiture($commande, $_POST["idcommande"]);
        
        
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
</head>

<body>
    <button><a href="Panier.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idcommande']))
     {
        $commande = $commandeC->showvoiture($_POST['idcommande']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idcommande">idcommande:
                        </label>
                    </td>
                    <td><input type="text" name="idcommande" id="idcommande" value="<?php echo $commande['idcommande']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td>
                        <label for="addresse">addresse:
                        </label>
                    </td>
                    <td><input type="text" name="addresse" id="addresse" value="<?php echo $commande['addresse']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="text" name="date" id="date" value="<?php echo $commande['date']; ?>" maxlength="30"></td>
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