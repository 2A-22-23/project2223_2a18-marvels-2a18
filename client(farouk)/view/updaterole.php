<?php

include '../controller/roleC.php';

$error = "";

// create role
$role = null;

// create an instance of the controller
$roleC = new roleC();
//var_dump($_POST);
//var_dump($_POST["role"]);
if (
    isset($_POST["idrole"]) &&
    isset($_POST["role"]) &&
    isset($_POST["idclient"]) 
    
) {
    if (
        !empty($_POST["idrole"]) &&
        !empty($_POST['role']) &&
        !empty($_POST["idclient"]) 
        
    ) {
        echo "test";
        $role = new role( 
            $_POST['idrole'],
            $_POST['role'],
            $_POST['idclient']
         
        );
        //var_dump($role);
       $roleC->updaterole($role, $_POST["idrole"]);
        
        
        header('Location:affrole.php');
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
    <button><a href="affrole.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idrole']))
     {
        $role = $roleC->showrole($_POST['idrole']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idrole">idrole:
                        </label>
                    </td>
                    <td><input type="text" name="idrole" id="idrole" value="<?php echo $role['idrole']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td>
                        <label for="role">role:
                        </label>
                    </td>
                    <td><input type="text" name="role" id="role" value="<?php echo $role['role']; ?>" maxlength="30"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idclient">idclient:
                        </label>
                    </td>
                    <td><input type="number" name="idclient" id="idclient" value="<?php echo $role['idclient']; ?>" maxlength="30"></td>
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