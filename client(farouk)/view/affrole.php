<?php
include '../controller/roleC.php';
$role = new roleC();
$list = $role->Listerole();
?>
<html>

<head></head>

<body>

    <center>
        <h1>ROLE</h1>
        <h2>
            <a href="addrole.php">Add role</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>idrole</th>
            <th>role</th>
            <th>idclient</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <?php
        foreach ($list as $role) {
        ?>
            <tr>
            <td><?= $role['idrole']; ?></td>
                <td><?= $role['role']; ?></td>
                <td><?= $role['idclient']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updaterole.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $role['idrole']; ?> name="idrole">
                    </form>
                </td>
                <td align="center">
                    <form method="POST" action="deleterole.php">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $role['idrole']; ?> name="idrole">
                    </form>
                </td>
                
                
            </tr>

        <?php
        }
        ?>
    </table>
    

</body>

</html>