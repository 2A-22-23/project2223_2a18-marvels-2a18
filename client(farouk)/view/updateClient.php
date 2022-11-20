<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST['id']) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["mdp"]) &&
    isset($_POST["telephone"])
) {
    if (
        !empty($_POST['id']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["mdp"]) &&
        !empty($_POST["telephone"])
    ) {
        $client = new Client(
            $_POST['id'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['telephone']
        );
        $clientC->updateClient($client, $_POST["id"]);
        echo "test";
        var_dump($_POST["id"]); 
        header('Location:affclient.php');
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
    <button><a href="affclient.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    
    <?php
    if (isset($_POST['id'])) {
        $client = $clientC->showClient($_POST['id']);

    ?>

        <form action="" method="POST">
            <table border="1" bordercolor="#fd2600" align="center">
                <tr>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td><input type="number" name="id" id="id" value="<?php echo $client['idc']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $client['nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $client['prenom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $client['email']; ?>" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mdp">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="mdp" value="<?php echo $client['mdp']; ?>" id="mdp">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telephone">Telephone:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="telephone" id="telephone" value="<?php echo $client['telephone']; ?>">
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