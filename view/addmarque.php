<?php

include '../Controller/marquec.php';

$error = "";

// create client
$marque = null;

// create an instance of the controller
$marquec = new marquec();
if (
    isset($_POST["marque"]) &&
    isset($_POST["model"]) 
) {
    if (
        !empty($_POST['marque']) &&
        !empty($_POST["model"]) 
    ) {
        $marque = new marque(
            null,
            $_POST['marque'],
            $_POST['model'])
        ;
        $marquec->addmarque($marque);
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
    <a href="Listmarque.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="marque">nom de la marque:
                    </label>
                </td>
                <td><input type="text" name="marque" id="marque" maxlength="20" placeholder="donner un nom"></td>
            </tr>
            <tr>
                <td>
                    <label for="model">nom du model:
                    </label>
                </td>
                <td>
                    <input type="text" name="model" id="model" maxlength="100" placeholder="donner une description">
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