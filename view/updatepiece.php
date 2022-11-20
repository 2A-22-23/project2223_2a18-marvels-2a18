<?php

include '../controller/piecesc.php';

$error = "";

// create client
$piece = null;

// create an instance of the controller
$piecec = new piecec();
if (
    isset($_POST["idpiece"]) &&
    isset($_POST["nompiece"]) &&
    /* isset($_POST["marque"]) && */
    isset($_POST["description"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["marque"]) &&
    isset($_POST["qte"])
) {
    if (
        !empty($_POST["idpiece"]) &&
        !empty($_POST['nompiece']) &&
       /*  !empty($_POST["marque"]) && */
        !empty($_POST["description"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["marque"]) &&
        !empty($_POST["qte"])
    ) {
        $piece = new piece(
            $_POST['idpiece'],
            $_POST['nompiece'],
         /*    $_POST['marque'], */
            $_POST['description'],
            $_POST['prix'],
            $_POST['marque'],
            $_POST['qte']
        );
        $piecec->updatepiece($piece, $_POST["idpiece"]);
        echo "test";
        var_dump($_POST["idpiece"]); 
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
    <button><a href="Listpieces.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idpiece'])) {
        $piece = $piecec->showpiece($_POST['idpiece']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idpiece">Id de la piece:
                        </label>
                    </td>
                    <td><input readonly type="number" name="idpiece" id="idpiece" value="<?php echo $piece['idpiece']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="nompiece"> nom de la piece:
                        </label>
                    </td>
                    <td><input type="text" name="nompiece" id="nompiece" value="<?php echo $piece['nompiece']; ?>" maxlength="20"></td>
                </tr>
               <!--  <tr>
                    <td>
                        <label for="marque">marque:
                        </label>
                    </td>
                    <td><input type="text" name="marque" id="marque" value="php echo $piece['marque']; ?>" maxlength="20"></td>
                </tr> -->
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" value="<?php echo $piece['description']; ?>" id="description" maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="prix" id="prix" value="<?php echo $piece['prix']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="qte">quantite:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="qte" id="qte" value="<?php echo $piece['qte']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="marque">marque:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="marque" id="marque" value="<?php echo $piece['marque']; ?>">
                    </td>
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