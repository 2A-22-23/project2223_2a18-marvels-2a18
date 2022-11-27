<?php
include '../Controller/piecesc.php';
$pieceC = new pieceC();
$list = $pieceC->listpieces();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of pieces</h1>
        <h2>
            <a href="addpiece.php">Add piece</a> 
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id de piece</th>
            <th>nom de la piece</th>
            <!-- <th>marque de la piece</th> -->
            <th>description de la piece</th>
            <th>prix</th>
            <th>quantite</th>
            <th>marque</th>
            
            <th>Update</th>
            <th>Delete</th> 
        </tr>
        <?php
        foreach ($list as $piece) {
        ?>
            <tr>
                <td><?= $piece['idpiece']; ?></td>
                <td><?= $piece['nompiece']; ?></td>
               <!--  <td></*  $piece['marque']; */ ?></td> -->
                <td><?= $piece['description']; ?></td>
                <td><?= $piece['prix']; ?></td>
                <td><?= $piece['qte']; ?></td>
                <td><?= $piece['marque']; ?></td>

                <td align="center">
                    <form method="POST" action="updatepiece.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $piece['idpiece']; ?> name="idpiece">
                    </form>
                </td>
                <td>
                    <a href="deletepiece.php?idpiece=<?php echo $piece['idpiece']; ?>">Delete</a>
                </td> 
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>