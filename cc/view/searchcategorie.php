<?php
include '../controller/categorieC.php';
$categorieC = new categorieC();

if (isset($_GET['nom_categorie']) && !empty($_GET['nom_categorie'])) {
    $list = $categorieC->tri($_GET['nom_categorie']);
} else {
    $list = $categorieC->listcategorie();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="nom_categorie" id="nom_categorie" placeholder="Enter categorie name">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of categories</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id categorie</th>
            <th>nom_categorie</th>
            <th>Number of cars available</th>
            
        </tr>
        <?php
        foreach ($list as $categorie) {
        ?>
            <tr>
                <td><?= $categorie['idcategorie']; ?></td>
                <td><?= $categorie['nom_categorie']; ?></td>
                <td><?= $categorie['nbval']; ?></td>
              
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>