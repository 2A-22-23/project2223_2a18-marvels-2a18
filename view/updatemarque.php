<?php

include '../controller/marquec.php';

$error = "";

// create client
$marque = null;

// create an instance of the controller
$marquec = new marquec();
if (
    isset($_POST["idmarque"]) &&
    isset($_POST["nommarque"]) &&
    isset($_POST["nommodel"])
) {
    if (
        !empty($_POST["idmarque"]) &&
        !empty($_POST['nommarque']) &&
        !empty($_POST["nommodel"])
    ) {
        $marque = new marque(
            $_POST['idmarque'],
            $_POST['nommarque'],
            $_POST['nommodel']
        );
        $marquec->updatemarque($marque, $_POST["idmarque"]);
        echo "test";
        var_dump($_POST["idmarque"]); 
        header('Location:Listmarque.php');
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
    <button><a href="Listmarque.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idmarque'])) {
        $marque = $marquec->showmarque($_POST['idmarque']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idmarque">Id de la marque:
                        </label>
                    </td>
                    <td><input readonly type="number" name="idmarque" id="idmarque" value="<?php echo $marque['idmarque']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="nommarque"> nom de la marque:
                        </label>
                    </td>
                    <td><input type="text" name="nommarque" id="nommarque" value="<?php echo $marque['nommarque']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nommodel">nom du model:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nommodel" value="<?php echo $marque['nommodel']; ?>" id="nommodel" maxlength="100">
                    </td>
                </tr>
                <tr>
                    
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