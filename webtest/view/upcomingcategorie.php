<?php
include '../controller/categorieC.php';
$categorieC = new categorieC();

$list = $categorieC->upcomingcategorie();

?>
<html>

<head></head>

<body>

    <center>
        <h1>List of categories</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id categorie</th>
            <th>type</th>
            <th>Number of cars available</th>
            <th>Date of join</th>
            <td></td>
        </tr>
        <?php
        foreach ($list as $categorie) {
        ?>
            <tr>
                <td><?= $categorie['idcategorie']; ?></td>
                <td><?= $categorie['type']; ?></td>
                <td><?= $categorie['nbval']; ?></td>
                <td><?= $categorie['dateajout']; ?></td>
                <td>
                    <?php
                    if ($categorie['nbval'] != 0) {
                    ?>
                        <button><a href="bookcategorie.php?idcategorie=<?php echo $categorie['idcategorie']; ?>">Book</a></button>
                </td>
            <?php
                    } else
                        echo '<h3> Sold Out </h3>'
            ?>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>