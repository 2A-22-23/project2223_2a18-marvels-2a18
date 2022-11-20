<?php

include '../controller/roleC.php';

$error = "";

// create role
$role = null;

if (
    isset($_POST["idrole"])&&
    isset($_POST["role"]) &&
    isset($_POST["idclient"]) 

    
) {
    if (
        !empty($_POST['idrole']) &&
        !empty($_POST['role']) &&
        !empty($_POST["idclient"]) 
        
    ) {     echo"blablabla";

        $role = new role($_POST['idrole'],$_POST['role'],$_POST['idclient']); 
        // create an instance of the controller
        $roleC = new roleC();
        $roleC->addrole($role);
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
    <link rel="stylesheet" href="role.css">
</head>

<body>
    <a href="affrole.php" class="affrole">Back to list </a>
    <hr><br><br><br><br><br><br><br><br><br><br>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="6" align="center">
        <tr>
                <td>
                    <label for="idrole" class="txt"> id-role:
                    </label>
                </td>
               <td><input type="number" name="idrole" id="idrole" maxlength="30" required></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="role" class="txt"> role:
                    </label>
                </td>
                <td><input type="text"  name="role" id="role" maxlength="30" required></td>
            </tr>
            <tr>
                <td>
                    <label for="idclient" class="txt">idclient:
                    </label>
                </td>
                <td><input type="number"  name="idclient" id="idclient" maxlength="30" required  ></td>
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
