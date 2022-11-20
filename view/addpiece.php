<?php

include '../controller/piecesc.php';

$error = "";

// create client
$piece = null;

// create an instance of the controller
$piecec = new piecec();
if (
    isset($_POST["nom"]) &&
    /* isset($_POST["marque"]) && */
    isset($_POST["description"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["marque"]) &&
    isset($_POST["qte"])
) {
    if (
        !empty($_POST['nom']) &&
       /*  !empty($_POST["marque"]) && */
        !empty($_POST["description"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["marque"]) &&
        !empty($_POST["qte"])
    ) {
        echo('salam');
        $piece = new piece(
            null,
            $_POST['nom'],
           /*  $_POST['marque'], */
            $_POST['description'],
            $_POST['prix'],
            $_POST['marque'],
            $_POST['qte'])
        ;
        $piecec->addpiece($piece);
       header('Location:Listpieces.php');  
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
    <a href="Listpieces.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="nom">nom de la piece:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" maxlength="20" placeholder="donner un nom" ></td>
            </tr>
          
            <tr>
                <td>
                    <label for="description">description:
                    </label>
                </td>
                <td>
                    <input type="text" name="description" id="description" maxlength="100" placeholder="donner une description">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="prix">prix:
                    </label>
                </td>
                <td>
                    <input type="number" name="prix" id="prix">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="qte">qte:
                    </label>
                </td>
                <td>
                    <input type="number" name="qte" id="qte">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="marque">marque:
                    </label>
                </td>
                <td>
                    <input type="number" name="marque" id="marque">
                </td>
            </tr>


            <tr align="center">
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