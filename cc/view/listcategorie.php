<?php
include '../controller/categorieC.php';
$categorieC = new categorieC();
$list = $categorieC->listcategorie();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of categories</h1>
        <h2>
            <a href="addcategorie.php">Add categorie</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>idcategorie</th>
            <th>nom_categorie</th>
            <th>nbr car available</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $categorie) {
        ?>
            <tr>
            <td><?= $categorie['idcategorie']; ?></td>
                <td><?= $categorie['nom_categorie']; ?></td>
                <td><?= $categorie['nbval']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updatecategorie.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $categorie['idcategorie']; ?> name="idcategorie">
                    </form>
                </td>
                <td align="center">
                    <form method="POST" action="deletecategorie.php">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $categorie['idcategorie']; ?> name="idcategorie">
                    </form>
                </td>
                
                
            </tr>

        <?php
        }
        ?>
    </table>
   

</body>

</html>