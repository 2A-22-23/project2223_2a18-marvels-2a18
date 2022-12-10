<?php
include_once '../controller/voitureC.php';
$voitureC = new voitureC();
$list = $voitureC->Listevoiture();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Cars</h1>
        <h2>
            <a href="addvoiture.php">Add voiture</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>idvoiture</th>
            <th>nom_voiture</th>
            <th>id_categorie</th>
            <th>prix</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $voitures) {
        ?>
            <tr>
            <td><?= $voitures['idvoiture']; ?></td>
                <td><?= $voitures['nom_voiture']; ?></td>
                <td><?= $voitures['idcategorie']; ?></td>
                <td><?= $voitures['prix']; ?></td>
               
                <td align="center">
                    <form method="POST" action="updatevoiture.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $voitures['idvoiture']; ?> name="idvoiture">
                    </form>
                </td>
                <td align="center">
                    <form method="POST" action="deletevoiture.php">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" value=<?PHP echo $voitures['idvoiture']; ?> name="idvoiture">
                    </form>
                </td>
                
                
            </tr>

        <?php
        }
        ?>
    </table>
    

</body>

</html>